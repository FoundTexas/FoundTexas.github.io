import * as THREE from 'three';
import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';

let scene, camera, renderer;
let geometries = [];
let mouse = new THREE.Vector2();
let scrollY = 0;

let scrollDir = 1;

init();
animate();

function init() {
    scene = new THREE.Scene();
    camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.set(-50, 66, 111); // Adjust camera position
    camera.rotation.x=-0.2;

    renderer = new THREE.WebGLRenderer({
        canvas: document.querySelector('#bgcanvas'),
        alpha: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);

    // Add ambient light
    const ambientLight = new THREE.AmbientLight(0xffffff, 0.1); // Soft white light
    scene.add(ambientLight);

    // Add directional light
    const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
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

    window.addEventListener('resize', onWindowResize, false);
    window.addEventListener('mousemove', onMouseMove, false);
    window.addEventListener('scroll', onScroll, false);
}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
}

function onMouseMove(event) {
    mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
    mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
}

function onScroll() {
    const curscrollY = scrollY;
    scrollY = window.scrollY;

    scrollDir = (scrollY > curscrollY)? 10 : -10;
}

function animate() {
    requestAnimationFrame(animate);

    // Idle wobbling animation
    geometries.forEach((model) => {
        model.position.y = Math.sin(Date.now() * 0.005) * 0.5; // Adjust wobble intensity
    });

    // Rotate model based on scroll direction
    geometries.forEach((model) => {
        model.rotation.y = ((scrollDir/100 ) + model.rotation.y); // Adjust rotation speed
    });

    if(Math.abs(scrollDir) > 1)
    {scrollDir += scrollDir > 1  ? -0.2 : 0.2;}

    // Camera sinusoidal motion
    camera.position.x = Math.sin(Date.now() * 0.00066) * 80; // Adjust speed and amplitude as needed

    renderer.render(scene, camera);
}