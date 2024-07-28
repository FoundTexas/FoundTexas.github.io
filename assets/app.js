//import './bootstrap.js';

/*
* Welcome to your app's main JavaScript file!
*
* This file will be included onto the page via the importmap() Twig function,
* which should already be in your base.html.twig.
*/
import './styles/app.css';
import './bootstrap/js/bootstrap.min.js';
import './bootstrap/css/bootstrap.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

import './js/audioPlayer.js';



function loadWebGLScript() {
    const pathArray = window.location.pathname.split('/');
    const sceneName = pathArray[pathArray.length - 1];

    console.log(sceneName);

    switch(sceneName) {
        case '':
            import('./js/webgl/webglIndex.js');
            break;
        case 'timeline':
            import('./js/webgl/webglTimeline.js');
            break;
        default:
            console.log('no WebGL in this scene');
            break;
    }
}

loadWebGLScript();


