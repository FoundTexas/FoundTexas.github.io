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

const vertexShader = `
    varying vec2 vUv;

    void main() {
        vUv = uv;
        gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
    }
`;

const fragmentShader = `
    float EPSILON = .0001;
    uniform float iTime;
    uniform vec2 iResolution;

    mat2 rotate2d(float _angle){
        return mat2(cos(_angle),-sin(_angle),
                    sin(_angle),cos(_angle));
    }

    float sdCylinder( vec3 p, vec3 c )
    {
        return length(p.xz-c.xy)-c.z;
    }

    vec2 scene(vec3 p){
        float res = 1.;
        
        p.xy += vec2(cos(p.z),sin(p.z));
        
        // Rings
        for(int i = 0; i<12; i++){
            vec3 q = p;
            q.xy *= rotate2d(3.14159265359*float(i)/6.);
            q.z = mod(q.z, .3);
            res = min(res, sdCylinder(q-vec3(0.4, 0., .0), vec3(0., 0., .01)));
        }
        // Stripes
        for(int i = 0; i<12; i++){
            vec3 q = p;
            q.xy *= rotate2d(3.14159265359*float(i)/6.);
            q.yz *= rotate2d(3.14159265359*.5);
            
            res = min(res, sdCylinder(q, vec3(0.4, 0.11, 0.01)));
        }
        // ClippingTunnel
        float clipping = sdCylinder(p.yzx, vec3(0., 0., .415));
        
        float mat = 0.;
        
        res = min(res, -clipping);
        
        if(res == -clipping ){mat = 1.;}
        return vec2(res, mat);
    }

    vec2 march(vec3 ro, vec3 p){
        float id = 0.;
        float dist = .0;
        for(int i = 0; i<64; i++){
            vec2 depth = scene(ro + dist * p);
            id = depth.y;
            if(depth.x < EPSILON){
                return vec2(dist, id);
            }
            dist += depth.x / 2.;
        }
        return vec2(dist, id);
    }

    void mainImage(out vec4 fragColor, in vec2 fragCoord) {
        // Camera setting
        float angleLead = .5;
        vec3 ro = vec3(0., .0, 1.0);
        vec3 ta = vec3(-cos(iTime+angleLead), sin(iTime+angleLead), .0);
        vec3 ww = normalize(ta - ro);
        vec3 uu = normalize(cross(ww, vec3(0.0, 1.0, 0.0)));
        vec3 vv = cross(uu, ww);
        vec2 p = (-iResolution.xy + 2.0 * fragCoord) / iResolution.y;
        vec3 rd = normalize(p.x * uu + p.y * vv + 1.5 * ww);
        
        // Camera Movement
        ro.z -= iTime;
        ro.xy = vec2(-cos(ro.z), -sin(ro.z));
        
        vec2 dist = march(ro, rd);
        vec3 col = vec3(0.);
        if(dist.y == 0.){
            col = mix(vec3(1, 0.239, 0.051), vec3(1, 0.714, 0.286), smoothstep(.7, 3., dist.x));
        }
        fragColor = vec4(col, 1.0);
    }

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
