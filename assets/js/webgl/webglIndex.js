import * as THREE from 'three';

let scene, camera, renderer;
let geometries = [];
let raycaster = new THREE.Raycaster();
let mouse = new THREE.Vector2();
let scrollY = 0;

init();
animate();

function init() {
    scene = new THREE.Scene();
    camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    camera.position.z = 0;

    renderer = new THREE.WebGLRenderer({
        canvas: document.querySelector('#bgcanvas'),
        alpha: true
    });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);

    // Create geometries with different colors and wireframe material
    const geometryParams = [
        { type: 'BoxGeometry', color: 0x28a745, position: { x: -3, y: 2, z: -5 } },    // Green
        { type: 'BoxGeometry', color: 0xff5733, position: { x: 2.5, y: 1, z: -4 } },    // Orange
        { type: 'SphereGeometry', color: 0x28a745, position: { x: 3.5, y: -2, z: -4 } },  // Green
        { type: 'TorusGeometry', color: 0x6f42c1, position: { x: -2, y: -2, z: -3 } },   // Purple
        { type: 'TorusGeometry', color: 0xff5733, position: { x: -6, y: -1, z: -3 } }   // Orange
    ];

    geometryParams.forEach(params => {
        let geometry;
        switch (params.type) {
            case 'BoxGeometry': geometry = new THREE.BoxGeometry(); break;
            case 'SphereGeometry': geometry = new THREE.SphereGeometry(); break;
            case 'ConeGeometry': geometry = new THREE.ConeGeometry(); break;
            case 'TorusGeometry': geometry = new THREE.TorusGeometry(); break;
        }
        const material = new THREE.MeshBasicMaterial({ color: params.color, wireframe: true });
        const mesh = new THREE.Mesh(geometry, material);
        mesh.position.set(params.position.x, params.position.y, params.position.z);
        mesh.userData.originalColor = params.color;
        scene.add(mesh);
        geometries.push(mesh);
    });

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
    scrollY = window.scrollY;
}

function animate() {
    requestAnimationFrame(animate);

    // Idle subtle wobble animation
    geometries.forEach((mesh, index) => {
        mesh.rotation.x += 0.0005;
        mesh.rotation.y += 0.0005;
        mesh.position.y += 0.0005 * Math.sin(Date.now() * 0.002 + index);
    });

    // Camera rotation based on scroll
    camera.rotation.z = scrollY * 0.001;
    //camera.position.z = scrollY * -0.001;
    camera.position.x = scrollY * -0.004;
    camera.position.y = scrollY * -0.003;

    // Mouse hover interaction
    raycaster.setFromCamera(mouse, camera);
    const intersects = raycaster.intersectObjects(geometries);
    geometries.forEach(mesh => {
        mesh.material.color.setHex(mesh.userData.originalColor);
        mesh.userData.spinning = false;
    });
    intersects.forEach(intersect => {
        intersect.object.material.color.setHex(0xffffff);
        intersect.object.userData.spinning = true;
    });

    // Apply spinning effect on hover
    geometries.forEach(mesh => {
        if (mesh.userData.spinning) {
            mesh.rotation.y += 0.005;
        }
    });

    renderer.render(scene, camera);
}
