import * as THREE from 'three';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
import { EffectComposer } from 'three/examples/jsm/postprocessing/EffectComposer.js';
import { RenderPass } from 'three/examples/jsm/postprocessing/RenderPass.js';
import { UnrealBloomPass } from 'three/examples/jsm/postprocessing/UnrealBloomPass.js';

let scene, camera, renderer, composer;
let geometries = [];
let mouse = new THREE.Vector2();
let scrollY = 0;

let scrollDir = 1;
let vortexMaterial; // Define vortexMaterial globally
/* Stripes
 for(int i = 0; i < 12; i++) {
    vec3 q = p;
    q.xy *= rotate2d(3.14159265359 * float(i) / 6.0);
    q.yz *= rotate2d(3.14159265359 * 0.5);
    res = min(res, sdCylinder(q, vec3(0.4, 0.11, 0.005)));
}*/

const vertexShader = `
    varying vec2 vUv;

    void main() {
        // Pass the texture coordinates to the fragment shader
        vUv = uv;
        // Compute the vertex position in clip space
        gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
    }
`;

const fragmentShader = `
    float EPSILON = .0001; // Small value used for distance comparisons
    float time_mult = .6;  // Multiplier to control the speed of the animation
    uniform float iTime;   // Time uniform for animation
    uniform vec2 iResolution; // Resolution of the viewport

    // Function to rotate a 2D vector by a given angle
    mat2 rotate2d(float _angle) {
        return mat2(cos(_angle), -sin(_angle), sin(_angle), cos(_angle));
    }

    // Signed distance function for a cylinder
    float sdCylinder(vec3 p, vec3 c) {
        return length(p.xz - c.xy) - c.z;
    }

    // Scene definition
    vec2 scene(vec3 p) {
        float res = 1.0; // Initialize the result to a large value

        // Apply some distortion to the position
        p.xy += vec2(cos(p.z), sin(p.z));

        // Create rings
        for (int i = 0; i < 12; i++) {
            vec3 q = p;
            q.xy *= rotate2d(3.14159265359 * float(i) / 6.0); // Rotate the position
            q.z = mod(q.z, 0.3); // Repeat the pattern along the z-axis
            res = min(res, sdCylinder(q - vec3(0.4, 0.0, 0.0), vec3(0.0, 0.0, 0.02))); // Thinner rings
        }

        // Clipping tunnel to limit the scene
        float clipping = sdCylinder(p.yzx, vec3(0.0, 0.0, 0.415));
        float mat = 0.0;
        res = min(res, -clipping); // Combine with the clipping tunnel

        if (res == -clipping) {
            mat = 1.0;
        }
        return vec2(res, mat);
    }

    // Ray marching function
    vec2 march(vec3 ro, vec3 rd) {
        float id = 0.0;
        float dist = 0.0;
        for (int i = 0; i < 64; i++) {
            vec2 depth = scene(ro + dist * rd); // Sample the scene along the ray
            id = depth.y;
            if (depth.x < EPSILON) { // If close enough to a surface
                return vec2(dist, id);
            }
            dist += depth.x / 2.0; // Advance the ray
        }
        return vec2(dist, id);
    }

    // Main function to generate the fragment color
    void mainImage(out vec4 fragColor, in vec2 fragCoord) {
        // Camera setup
        float angleLead = 0.5;
        vec3 ro = vec3(0.0, 0.0, 1.0); // Camera position
        vec3 ta = vec3(-cos(iTime * time_mult + angleLead), sin(iTime * time_mult + angleLead), 0.0); // Target position
        vec3 ww = normalize(ta - ro); // Forward vector
        vec3 uu = normalize(cross(ww, vec3(0.0, 1.0, 0.0))); // Right vector
        vec3 vv = cross(uu, ww); // Up vector
        vec2 p = (-iResolution.xy + 2.0 * fragCoord) / iResolution.y; // Normalized screen coordinates
        vec3 rd = normalize(p.x * uu + p.y * vv + 1.5 * ww); // Ray direction

        // Camera movement
        ro.z -= iTime * time_mult; // Move the camera along the z-axis
        ro.xy = vec2(-cos(ro.z), -sin(ro.z)); // Circular movement in the xy-plane

        // Perform ray marching
        vec2 dist = march(ro, rd); // Get the distance to the nearest surface
        vec3 col = vec3(0.0); // Initialize color to black
        if (dist.y == 0.0) { // If the surface is hit
            col = mix(vec3(0.0, 1.0, 1.0), vec3(0.84, 0.26, 0.9), smoothstep(0.5, 1.3, dist.x)); // Color the surface
        }
        fragColor = vec4(col, 1.0); // Set the final fragment color
    }

    // Main function
    void main() {
        mainImage(gl_FragColor, gl_FragCoord.xy);
    }
`;



init();
animate();

function init() {
    scene = new THREE.Scene();
    camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.set(0, 66, 111); // Adjust camera position
    camera.rotation.x = -0.2;

    renderer = new THREE.WebGLRenderer({
        canvas: document.querySelector('#bgcanvas'),
        alpha: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);

    // Post-processing setup
    composer = new EffectComposer(renderer);
    const renderPass = new RenderPass(scene, camera);
    composer.addPass(renderPass);

    const params = {
        threshold: 0.9,
        strength: 2,
        radius: 0,
        exposure: 3
    };

    const bloomPass = new UnrealBloomPass(new THREE.Vector2(window.innerWidth, window.innerHeight), params.strength, params.radius, params.threshold);
    bloomPass.exposure = params.exposure;
    composer.addPass(bloomPass);

    // Add ambient light
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.5); // Dark ambient light
    scene.add(ambientLight);

    // Add directional light with subtle effect
    const directionalLight = new THREE.DirectionalLight(0xffffff, 0.5);
    directionalLight.position.set(1, 1, 1).normalize();
    scene.add(directionalLight);

    // Load 3D model
    const loader = new GLTFLoader();
    loader.load(
        './tardis.glb',
        function (gltf) {
            const model = gltf.scene;
            model.position.set(0, 0, 0);
            model.scale.set(0.1, 0.1, 0.1); // Adjust scale as needed
            scene.add(model);

            // Add model to geometries array for animation
            geometries.push(model);
        },
        undefined,
        function (error) {
            console.error(error);
        }
    );

    vortexMaterial = new THREE.ShaderMaterial({
        uniforms: {
            iTime: { value: 0 },
            iResolution: { value: new THREE.Vector2(window.innerWidth, window.innerHeight) }
        },
        vertexShader: vertexShader,
        fragmentShader: fragmentShader
    });

    const vortexGeometry = new THREE.PlaneGeometry(window.innerWidth , window.innerHeight / 3);
    const vortexMesh = new THREE.Mesh(vortexGeometry, vortexMaterial);
    vortexMesh.position.z = -30; // Adjust position in front of the camera
    vortexMesh.position.y = window.innerHeight / 45;
    vortexMesh.rotation.x = -0.2;
    scene.add(vortexMesh);

    window.addEventListener('resize', onWindowResize, false);
    window.addEventListener('mousemove', onMouseMove, false);
    window.addEventListener('scroll', onScroll, false);
}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
    composer.setSize(window.innerWidth, window.innerHeight);
    vortexMaterial.uniforms.iResolution.value.set(window.innerWidth, window.innerHeight);
}

function onMouseMove(event) {
    mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
    mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
}

function onScroll() {
    const curscrollY = scrollY;
    scrollY = window.scrollY;

    scrollDir = (scrollY > curscrollY) ? 6 : -6;
}

function animate() {
    requestAnimationFrame(animate);

    // Idle wobbling animation
    geometries.forEach((model) => {
        model.position.y = Math.sin(Date.now() * 0.005) * 0.5; // Adjust wobble intensity
        model.position.x = Math.sin(Date.now() * 0.00066) * window.innerWidth / 20; // Sine wave width of the screen
    });

    // Rotate model based on scroll direction
    geometries.forEach((model) => {
        model.rotation.y = ((scrollDir / 100) + model.rotation.y); // Adjust rotation speed
    });

    if (Math.abs(scrollDir) > 1) {
        scrollDir += scrollDir > 1 ? -0.2 : 0.2;
    }

    // Update time uniform for vortex shader
    if (vortexMaterial) {
        vortexMaterial.uniforms.iTime.value = performance.now() / 1000;
    }

    composer.render();
}
