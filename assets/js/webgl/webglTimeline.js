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
        threshold: 0.7,
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

    // Create vortex shader material with texture
    const vertexShader = `
        void main() {
            gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
        }
    `;

    const fragmentShader = `
    uniform float time;
    uniform vec2 resolution;

    void main() {
        vec2 uv = gl_FragCoord.xy / resolution.xy;
        vec2 center = vec2(0.5, 0.5);
        uv -= center;
        uv *= vec2(resolution.x / resolution.y, 1.0);
        
        float angle = atan(uv.y, uv.x);
        float radius = length(uv);
        
        // Continuous spiral effect
        float speed = 0.8; // Adjust speed for desired rotation speed
        
        // Compute circular motion
        float circleMotion = time * speed;
        angle += circleMotion;
        
        uv = vec2(cos(angle), sin(angle)) * radius;
        uv += center;
        
        // Define colors
        vec3 black = vec3(0.0, 0.0, 0.0);
        vec3 purple = vec3(0.3, 0.0, 0.3);
        vec3 green = vec3(0.0, 0.3, 0.0);
        vec3 orange = vec3(0.8, 0.4, 0.0);
        
        // Dark background with specific colors in spiral
        float darkeningFactor = 0.9; // Darken the texture more
        vec3 color = black; // Start with black background
        color += darkeningFactor * mix(black, green, uv.x * uv.y); // Mix purple and green based on UV
        color += darkeningFactor * purple * smoothstep(0.1, 0.8, radius); // Add orange based on radius
        
        gl_FragColor = vec4(color, 1.0); // Adjust color as needed
    }
`;




    vortexMaterial = new THREE.ShaderMaterial({
        uniforms: {
            time: { value: 0 },
            resolution: { value: new THREE.Vector2(window.innerWidth, window.innerHeight) }
        },
        vertexShader: vertexShader,
        fragmentShader: fragmentShader
    });

    const vortexGeometry = new THREE.PlaneGeometry(window.innerWidth*0.23, window.innerHeight/3);
    const vortexMesh = new THREE.Mesh(vortexGeometry, vortexMaterial);
    vortexMesh.position.z = -30; // Adjust position in front of the camera
    vortexMesh.position.y = window.innerHeight/45;
    vortexMesh.rotation.x = -0.2;
    //scene.add(vortexMesh);

    window.addEventListener('resize', onWindowResize, false);
    window.addEventListener('mousemove', onMouseMove, false);
    window.addEventListener('scroll', onScroll, false);
}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
    composer.setSize(window.innerWidth, window.innerHeight);
}

function onMouseMove(event) {
    mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
    mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
}

function onScroll() {
    const curscrollY = scrollY;
    scrollY = window.scrollY;

    scrollDir = (scrollY > curscrollY) ? 10 : -10;
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
        vortexMaterial.uniforms.time.value = performance.now() / 1000;
    }

    composer.render();
}
