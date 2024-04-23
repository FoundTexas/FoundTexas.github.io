<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pausemenu.html.twig */
class __TwigTemplate_2f9ee81baed53c34d4d3ef504995eb4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pausemenu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pausemenu.html.twig"));

        // line 1
        echo "<!-- Collapsible Navbar -->
<div class=\"collapse navbar-collapse collapse position-sticky fixed-top\" id=\"navbarCollapse\" style=\"width:100%; z-index: 1040;\">

\t<nav class=\"navbar navbar-dark navbar-expand-md main-bg p-0 m-0\" style=\"min-height:10vh;\">
\t\t<div class=\"d-flex w-75 align-items-center  justify-content-md-between justify-align-content-start row p-0 m-0\">

\t\t\t<button class=\" col-auto navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"col-3 d-none d-md-block\">
\t\t\t\t<img class=\"img-fluid\" src=\"bannerPandaold.png\" alt=\"Other Image\">
\t\t\t</div>
\t\t\t<a class=\"col-4 p-0 m-0 navbar-brand text-center\" href=\"/\">FoundTexas</a>


\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
\t\t\t\t\t<div class=\"navbar-nav\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Games</a>
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#\">Projects</a>
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"/timeline\">CV</a>
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"/login\">Account</a>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</nav>
</div>

<button class=\"custom-btn position-fixed rounded-4 accent-bg d-flex align-items-center\" style=\"z-index: 1050; top: 5px; right: 5px;\" onclick=\"playSound('audiopress')\" data-bs-target=\"#pauseMenuModal\" aria-label=\"Pause menu button\" data-bs-toggle=\"modal\" type=\"button\">
\t<i class=\"fa fa-home my-2 mx-1 fa-2xl\" aria-hidden=\"true\" style=\"color: #ffffff;\"></i>
\t<p class=\"p-0 m-0 d-none d-md-block\">MENU</p>
</button>


<!-- Modal -->
<div class=\"modal fade\" id=\"pauseMenuModal\" tabindex=\"-1\" aria-label=\"Pause menu modal\" aria-labelledby=\"pauseMenuModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered modal-lg\">
\t\t<div class=\"modal-content accent-bg-dark\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h2 class=\"modal-title text-center\" id=\"pauseMenuModalLabel\">Pause Menu</h2>
\t\t\t\t<button type=\"button\" class=\"btn-close\" onclick=\"playSound('audioback')\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"modal-body main-bg\" style=\"overflow-y: auto; height: 50vh; \">

\t\t\t\t<!-- Navigation Buttons -->
\t\t\t\t<div class=\"row main-bg\">
\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 52
            echo "\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary col m-1\" onclick=\"navigateToSectionAndCloseModal('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "')\" data-bs-dismiss=\"modal\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["button"], "label", [], "any", false, false, false, 52), "html", null, true);
            echo "</button>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t</div>

\t\t\t\t<!-- Classic Navbar Toggle -->
\t\t\t\t<div class=\"row main-bg align-items-center\">
\t\t\t\t\t<h5 class=\"col\">Classic Navbar:</h5>
\t\t\t\t\t<button type=\"button\" class=\"col-auto btn btn-success\" id=\"collapseOnButton\">ON</button>
\t\t\t\t\t<button type=\"button\" class=\"col-auto btn btn-danger\" id=\"collapseOffButton\">Off</button>
\t\t\t\t</div>

\t\t\t\t<!-- Volume Slider -->
\t\t\t\t<div class=\"row main-bg align-items-center\">
\t\t\t\t\t<label for=\"volumeRange\" class=\"form-label col-auto\">Volume:</label>
\t\t\t\t\t<input type=\"range\" class=\"form-range col\" id=\"volumeRange\" min=\"0\" max=\"1\" step=\"0.01\" value=\"0.25\">
\t\t\t\t\t<span class=\"col-auto\" id=\"volumeValue\">25%</span>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"modal-footer text-center dark-main-bg\">
\t\t\t\t";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)) {
            // line 73
            echo "\t\t\t\t\t<p>You are logged in as
\t\t\t\t\t\t";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "userIdentifier", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>
\t\t\t\t\t<a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-danger\">Logout</a>
\t\t\t\t";
        } else {
            // line 77
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">log in</a>
\t\t\t\t";
        }
        // line 79
        echo "\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js\"></script>

<script>
\t// Function to navigate to section and close the modal
function navigateToSectionAndCloseModal(sectionId) { // Check if the section exists
if (sectionId != '') {
var section = document.querySelector(sectionId);
}

if (section) { // Scroll to the section
section.scrollIntoView({behavior: 'smooth'});
} else { // If section is not found, change window href to sectionId
window.location.href = '/' + sectionId;
}

// Close the modal
\$('#pauseMenuModal').modal('hide');
}

// Function to set the collapse state on a cookie
function setNavbarCollapseState(state) {
Cookies.set('navbarCollapseState', state);
}

// Function to get the collapse state from the cookie
function getNavbarCollapseState() {
return Cookies.get('navbarCollapseState');
}

// JavaScript to toggle the collapse state
const collapseOnButton = document.getElementById(\"collapseOnButton\");
const collapseOffButton = document.getElementById(\"collapseOffButton\");

collapseOnButton.addEventListener(\"click\", function () {
document.querySelector(\".navbar-collapse\").classList.add(\"show\");
collapseOnButton.disabled = true;
collapseOffButton.disabled = false;
setNavbarCollapseState('on');
});

collapseOffButton.addEventListener(\"click\", function () {
document.querySelector(\".navbar-collapse\").classList.remove(\"show\");
collapseOnButton.disabled = false;
collapseOffButton.disabled = true;
setNavbarCollapseState('off');
});

// Initially, start with \"On\" enabled and \"Off\" disabled
const savedState = getNavbarCollapseState();
if (savedState === 'on') {
document.querySelector(\".navbar-collapse\").classList.add(\"show\");
collapseOnButton.disabled = true;
collapseOffButton.disabled = false;
} else if (savedState === 'off') {
document.querySelector(\".navbar-collapse\").classList.remove(\"show\");
collapseOnButton.disabled = false;
collapseOffButton.disabled = true;
}
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pausemenu.html.twig";
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
        return array (  150 => 79,  144 => 77,  139 => 75,  135 => 74,  132 => 73,  130 => 72,  110 => 54,  99 => 52,  95 => 51,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Collapsible Navbar -->
<div class=\"collapse navbar-collapse collapse position-sticky fixed-top\" id=\"navbarCollapse\" style=\"width:100%; z-index: 1040;\">

\t<nav class=\"navbar navbar-dark navbar-expand-md main-bg p-0 m-0\" style=\"min-height:10vh;\">
\t\t<div class=\"d-flex w-75 align-items-center  justify-content-md-between justify-align-content-start row p-0 m-0\">

\t\t\t<button class=\" col-auto navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavAltMarkup\" aria-controls=\"navbarNavAltMarkup\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t</button>

\t\t\t<div class=\"col-3 d-none d-md-block\">
\t\t\t\t<img class=\"img-fluid\" src=\"bannerPandaold.png\" alt=\"Other Image\">
\t\t\t</div>
\t\t\t<a class=\"col-4 p-0 m-0 navbar-brand text-center\" href=\"/\">FoundTexas</a>


\t\t\t<div class=\"col-12 col-md-6\">
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarNavAltMarkup\">
\t\t\t\t\t<div class=\"navbar-nav\">
\t\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"/\">Games</a>
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"#\">Projects</a>
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"/timeline\">CV</a>
\t\t\t\t\t\t<a class=\"nav-link active\" href=\"/login\">Account</a>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</nav>
</div>

<button class=\"custom-btn position-fixed rounded-4 accent-bg d-flex align-items-center\" style=\"z-index: 1050; top: 5px; right: 5px;\" onclick=\"playSound('audiopress')\" data-bs-target=\"#pauseMenuModal\" aria-label=\"Pause menu button\" data-bs-toggle=\"modal\" type=\"button\">
\t<i class=\"fa fa-home my-2 mx-1 fa-2xl\" aria-hidden=\"true\" style=\"color: #ffffff;\"></i>
\t<p class=\"p-0 m-0 d-none d-md-block\">MENU</p>
</button>


<!-- Modal -->
<div class=\"modal fade\" id=\"pauseMenuModal\" tabindex=\"-1\" aria-label=\"Pause menu modal\" aria-labelledby=\"pauseMenuModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered modal-lg\">
\t\t<div class=\"modal-content accent-bg-dark\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h2 class=\"modal-title text-center\" id=\"pauseMenuModalLabel\">Pause Menu</h2>
\t\t\t\t<button type=\"button\" class=\"btn-close\" onclick=\"playSound('audioback')\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"modal-body main-bg\" style=\"overflow-y: auto; height: 50vh; \">

\t\t\t\t<!-- Navigation Buttons -->
\t\t\t\t<div class=\"row main-bg\">
\t\t\t\t\t{% for button in buttons %}
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary col m-1\" onclick=\"navigateToSectionAndCloseModal('{{ button.id }}')\" data-bs-dismiss=\"modal\">{{ button.label }}</button>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>

\t\t\t\t<!-- Classic Navbar Toggle -->
\t\t\t\t<div class=\"row main-bg align-items-center\">
\t\t\t\t\t<h5 class=\"col\">Classic Navbar:</h5>
\t\t\t\t\t<button type=\"button\" class=\"col-auto btn btn-success\" id=\"collapseOnButton\">ON</button>
\t\t\t\t\t<button type=\"button\" class=\"col-auto btn btn-danger\" id=\"collapseOffButton\">Off</button>
\t\t\t\t</div>

\t\t\t\t<!-- Volume Slider -->
\t\t\t\t<div class=\"row main-bg align-items-center\">
\t\t\t\t\t<label for=\"volumeRange\" class=\"form-label col-auto\">Volume:</label>
\t\t\t\t\t<input type=\"range\" class=\"form-range col\" id=\"volumeRange\" min=\"0\" max=\"1\" step=\"0.01\" value=\"0.25\">
\t\t\t\t\t<span class=\"col-auto\" id=\"volumeValue\">25%</span>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"modal-footer text-center dark-main-bg\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t<p>You are logged in as
\t\t\t\t\t\t{{ app.user.userIdentifier }}</p>
\t\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\">Logout</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"{{ path('app_login') }}\">log in</a>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/js-cookie/3.0.1/js.cookie.min.js\"></script>

<script>
\t// Function to navigate to section and close the modal
function navigateToSectionAndCloseModal(sectionId) { // Check if the section exists
if (sectionId != '') {
var section = document.querySelector(sectionId);
}

if (section) { // Scroll to the section
section.scrollIntoView({behavior: 'smooth'});
} else { // If section is not found, change window href to sectionId
window.location.href = '/' + sectionId;
}

// Close the modal
\$('#pauseMenuModal').modal('hide');
}

// Function to set the collapse state on a cookie
function setNavbarCollapseState(state) {
Cookies.set('navbarCollapseState', state);
}

// Function to get the collapse state from the cookie
function getNavbarCollapseState() {
return Cookies.get('navbarCollapseState');
}

// JavaScript to toggle the collapse state
const collapseOnButton = document.getElementById(\"collapseOnButton\");
const collapseOffButton = document.getElementById(\"collapseOffButton\");

collapseOnButton.addEventListener(\"click\", function () {
document.querySelector(\".navbar-collapse\").classList.add(\"show\");
collapseOnButton.disabled = true;
collapseOffButton.disabled = false;
setNavbarCollapseState('on');
});

collapseOffButton.addEventListener(\"click\", function () {
document.querySelector(\".navbar-collapse\").classList.remove(\"show\");
collapseOnButton.disabled = false;
collapseOffButton.disabled = true;
setNavbarCollapseState('off');
});

// Initially, start with \"On\" enabled and \"Off\" disabled
const savedState = getNavbarCollapseState();
if (savedState === 'on') {
document.querySelector(\".navbar-collapse\").classList.add(\"show\");
collapseOnButton.disabled = true;
collapseOffButton.disabled = false;
} else if (savedState === 'off') {
document.querySelector(\".navbar-collapse\").classList.remove(\"show\");
collapseOnButton.disabled = false;
collapseOffButton.disabled = true;
}
</script>
", "pausemenu.html.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\pausemenu.html.twig");
    }
}
