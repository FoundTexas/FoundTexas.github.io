<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Yaocalli.html.twig */
class __TwigTemplate_2f86389181aa317a02c3bf9344535c87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Yaocalli.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Yaocalli.html.twig"));

        // line 1
        yield "<div class=\"container-fluid\">
\t<div id=\"unity-container\" class=\"unity-desktop row\">
\t\t<canvas id=\"unity-canvas\" width=\"800\" height=\"600\"></canvas>
\t\t<div id=\"unity-loading-bar\">
\t\t\t<div id=\"unity-logo\"></div>
\t\t\t<div id=\"unity-progress-bar-empty\">
\t\t\t\t<div id=\"unity-progress-bar-full\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"unity-warning\"></div>
\t\t<div id=\"unity-footer\">
\t\t\t<div id=\"unity-webgl-logo\"></div>
\t\t\t<div id=\"unity-fullscreen-button\"></div>
\t\t\t<div id=\"unity-build-title\">HistoryJAM</div>
\t\t</div>
\t</div>

</div>

<script>
\tvar container = document.querySelector(\"#unity-container\");
var canvas = document.querySelector(\"#unity-canvas\");
var loadingBar = document.querySelector(\"#unity-loading-bar\");
var progressBarFull = document.querySelector(\"#unity-progress-bar-full\");
var fullscreenButton = document.querySelector(\"#unity-fullscreen-button\");
var warningBanner = document.querySelector(\"#unity-warning\");

// Shows a temporary message banner/ribbon for a few seconds, or
// a permanent error message on top of the canvas if type=='error'.
// If type=='warning', a yellow highlight color is used.
// Modify or remove this function to customize the visually presented
// way that non-critical warnings and error messages are presented to the
// user.
function unityShowBanner(msg, type) {
function updateBannerVisibility() {
warningBanner.style.display = warningBanner.children.length ? 'block' : 'none';
}
var div = document.createElement('div');
div.innerHTML = msg;
warningBanner.appendChild(div);
if (type == 'error') 
div.style = 'background: red; padding: 10px;';
 else {
if (type == 'warning') 
div.style = 'background: yellow; padding: 10px;';

setTimeout(function () {
warningBanner.removeChild(div);
updateBannerVisibility();
}, 5000);
} updateBannerVisibility();
}

var buildUrl = \"";
        // line 54
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Yaocalli/Build"), "html", null, true);
        yield "\";
var loaderUrl = buildUrl + \"/Builds.loader.js\";
var config = {
dataUrl: buildUrl + \"/Builds.data\",
frameworkUrl: buildUrl + \"/Builds.framework.js\",
codeUrl: buildUrl + \"/Builds.wasm\",
streamingAssetsUrl: \"StreamingAssets\",
companyName: \"DefaultCompany\",
productName: \"HistoryJAM\",
productVersion: \"1.0\",
showBanner: unityShowBanner
};

if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
container.className = \"unity-mobile\";
// Avoid draining fillrate performance on mobile devices,
// and default/override low DPI mode on mobile browsers.
config.devicePixelRatio = 1;
unityShowBanner('WebGL builds are not supported on mobile devices.');
} else {
canvas.style.width = \"800px\";
canvas.style.height = \"600px\";
} loadingBar.style.display = \"block\";

var script = document.createElement(\"script\");
script.src = loaderUrl;
script.onload = () => {
createUnityInstance(canvas, config, (progress) => {
progressBarFull.style.width = 100 * progress + \"%\";
}).then((unityInstance) => {
loadingBar.style.display = \"none\";
fullscreenButton.onclick = () => {
unityInstance.SetFullscreen(1);
};
}).catch((message) => {
alert(message);
});
};
document.body.appendChild(script);
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Yaocalli.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  99 => 54,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
\t<div id=\"unity-container\" class=\"unity-desktop row\">
\t\t<canvas id=\"unity-canvas\" width=\"800\" height=\"600\"></canvas>
\t\t<div id=\"unity-loading-bar\">
\t\t\t<div id=\"unity-logo\"></div>
\t\t\t<div id=\"unity-progress-bar-empty\">
\t\t\t\t<div id=\"unity-progress-bar-full\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div id=\"unity-warning\"></div>
\t\t<div id=\"unity-footer\">
\t\t\t<div id=\"unity-webgl-logo\"></div>
\t\t\t<div id=\"unity-fullscreen-button\"></div>
\t\t\t<div id=\"unity-build-title\">HistoryJAM</div>
\t\t</div>
\t</div>

</div>

<script>
\tvar container = document.querySelector(\"#unity-container\");
var canvas = document.querySelector(\"#unity-canvas\");
var loadingBar = document.querySelector(\"#unity-loading-bar\");
var progressBarFull = document.querySelector(\"#unity-progress-bar-full\");
var fullscreenButton = document.querySelector(\"#unity-fullscreen-button\");
var warningBanner = document.querySelector(\"#unity-warning\");

// Shows a temporary message banner/ribbon for a few seconds, or
// a permanent error message on top of the canvas if type=='error'.
// If type=='warning', a yellow highlight color is used.
// Modify or remove this function to customize the visually presented
// way that non-critical warnings and error messages are presented to the
// user.
function unityShowBanner(msg, type) {
function updateBannerVisibility() {
warningBanner.style.display = warningBanner.children.length ? 'block' : 'none';
}
var div = document.createElement('div');
div.innerHTML = msg;
warningBanner.appendChild(div);
if (type == 'error') 
div.style = 'background: red; padding: 10px;';
 else {
if (type == 'warning') 
div.style = 'background: yellow; padding: 10px;';

setTimeout(function () {
warningBanner.removeChild(div);
updateBannerVisibility();
}, 5000);
} updateBannerVisibility();
}

var buildUrl = \"{{ asset('Yaocalli/Build') }}\";
var loaderUrl = buildUrl + \"/Builds.loader.js\";
var config = {
dataUrl: buildUrl + \"/Builds.data\",
frameworkUrl: buildUrl + \"/Builds.framework.js\",
codeUrl: buildUrl + \"/Builds.wasm\",
streamingAssetsUrl: \"StreamingAssets\",
companyName: \"DefaultCompany\",
productName: \"HistoryJAM\",
productVersion: \"1.0\",
showBanner: unityShowBanner
};

if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
container.className = \"unity-mobile\";
// Avoid draining fillrate performance on mobile devices,
// and default/override low DPI mode on mobile browsers.
config.devicePixelRatio = 1;
unityShowBanner('WebGL builds are not supported on mobile devices.');
} else {
canvas.style.width = \"800px\";
canvas.style.height = \"600px\";
} loadingBar.style.display = \"block\";

var script = document.createElement(\"script\");
script.src = loaderUrl;
script.onload = () => {
createUnityInstance(canvas, config, (progress) => {
progressBarFull.style.width = 100 * progress + \"%\";
}).then((unityInstance) => {
loadingBar.style.display = \"none\";
fullscreenButton.onclick = () => {
unityInstance.SetFullscreen(1);
};
}).catch((message) => {
alert(message);
});
};
document.body.appendChild(script);
</script>
", "Yaocalli.html.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\Yaocalli.html.twig");
    }
}
