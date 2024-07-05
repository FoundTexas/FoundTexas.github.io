<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    'bootstrap/dist/css/bootstrap.min.css' => [
        'version' => '5.3.3',
        'type' => 'css',
    ],
    'bootstrap' => [
        'version' => '5.3.3',
    ],
    '@popperjs/core' => [
        'version' => '2.11.8',
    ],
    'three' => [
        'version' => '0.166.1',
    ],
    'three/addons/loaders/GLTFLoader.js' => [
        'version' => '0.166.1',
    ],
    'three/addons/postprocessing/UnrealBloomPass.js' => [
        'version' => '0.166.1',
    ],
    'three/addons/postprocessing/OutputPass.js' => [
        'version' => '0.166.1',
    ],
    'three/addons/postprocessing/RenderPass.js' => [
        'version' => '0.166.1',
    ],
    'three/addons/postprocessing/EffectComposer.js' => [
        'version' => '0.166.1',
    ],
    'three/addons/renderers/SVGRenderer.js' => [
        'version' => '0.166.1',
    ],
    'three/examples/jsm/loaders/GLTFLoader.js' => [
        'version' => '0.166.1',
    ],
    'three/examples/jsm/postprocessing/EffectComposer.js' => [
        'version' => '0.166.1',
    ],
    'three/examples/jsm/postprocessing/RenderPass.js' => [
        'version' => '0.166.1',
    ],
    'three/examples/jsm/postprocessing/UnrealBloomPass.js' => [
        'version' => '0.166.1',
    ],
];
