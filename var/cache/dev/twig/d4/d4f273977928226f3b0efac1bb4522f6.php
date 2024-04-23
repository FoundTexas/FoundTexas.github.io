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

/* index/AboutMe.twig */
class __TwigTemplate_aa67a579236a1cc2f00b4b230558ca42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/AboutMe.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/AboutMe.twig"));

        // line 1
        yield "<style>
\t/* CSS for the typing animation */
\t.typing-effect {
\t\toverflow: hidden;
\t\twhite-space: wrap;
\t\tmargin: 0 auto;
\t}

\t/* Keyframes for the typing animation */
\t@keyframes 
\t{
\t\tfrom {
\t\t\twidth: 0;
\t\t}
\t\tto {
\t\t\twidth: 100%;
\t\t}
\t}
</style>

<section id=\"aboutme\" class=\"container-fluid d-flex flex-column justify-content-center align-items-center p-0\" style=\"min-height: 93vh; width: 100%; overflow: hidden;\">
\t<img class=\"mx-auto position-fixed\" style=\"z-index: -1000000; filter: blur(7px) brightness(70%); height: 103%; width: 101%;\" src=\"";
        // line 22
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gridbg.gif"), "html", null, true);
        yield "\" alt=\"Other Image\"/>
\t<img class=\"mx-auto position-fixed bg-dark\" style=\"z-index: -100000; filter: blur(5px); height: 102vh; width: auto;\" src=\"";
        // line 23
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("gridbg.gif"), "html", null, true);
        yield "\" alt=\"Other Image\"/>

\t<div class=\"rounded-circle bg-dark border border-light\">
\t\t<img class=\"m-2\" style=\"height: 15vh; width: auto;\" src=\"";
        // line 26
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("foundtexaspanda.svg"), "html", null, true);
        yield "\" alt=\"foundtexaspanda\"/>
\t</div>
\t<div class=\"container m-md-1 p-md-2 bg-main-dark-translucent rounded-5 border border-light d-flex flex-column align-items-center justify-content-around\" style=\"min-height: 35vh;\">
\t\t<div class=\"row mt-md-0 mt-md-3 m-1\">
\t\t\t<h2 class=\"p-md-2 my-1 text-center accent-color\"> <i class=\"fa fa-laptop fa-xs\" aria-hidden=\"true\"></i> Web & Game Dev <i class=\"fa fa-gamepad fa-md \" aria-hidden=\"true\"></i> </h2>
\t\t</div>
\t\t<div class=\"row mx-md-5 \">
\t\t\t<p class=\"typing-effect white-text text-justify text-lg m-1 fs-6\">
\t\t\t\tGreetings! Welcome to my corner of the web. I'm Rodolfo also known as FoundTexas. I'm a computer scientist specialized in 3D Graphics, with skill on Project Management, Web and Game Development. I`m a team player and believe that diverse perspectives fuel innovation, leading to significant and immersive experiences for the users.
\t\t\t</p>
\t\t</div>
\t\t<div >
\t\t\t<button type=\"button\" class=\"custom-btn rounded-2 p-1 m-2 accent-bg text-white\" onclick=\"navigateToSectionAndCloseModal('timeline')\" data-bs-dismiss=\"modal\">
\t\t\t\t<h5 class=\"p-0 m-0\"> &nbsp;<i class=\"fa fa-file\" aria-hidden=\"true\"></i> CV&nbsp;</h5>
\t\t\t</button>
\t\t</div>
\t</div>
</section>

<script>
\twindow.onload = function () {
\t\tvar elements = document.getElementsByClassName('typing-effect');
\t\tfor (var i = 0; i < elements.length; i++) {
\t\ttypeWriter(elements[i].textContent, elements[i]);
\t\t}
\t};

\t// Function to create the typing effect
\tfunction typeWriter(text, targetElement) {
\t\tvar speed = 15; // Adjust typing speed here (lower value for faster typing)
\t\tvar i = 0;
\t\ttargetElement.textContent = \"\"; // Clear existing text
\t\tfunction type() {
\t\t\tif (i < text.length) {
\t\t\t\ttargetElement.textContent += text.charAt(i);
\t\t\t\ti++;
\t\t\t\tsetTimeout(type, speed * (text.charAt(i) == ' ' ? 5 : 1));
\t\t\t}
\t\t}
\t\ttype();
\t}

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
        return "index/AboutMe.twig";
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
        return array (  77 => 26,  71 => 23,  67 => 22,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
\t/* CSS for the typing animation */
\t.typing-effect {
\t\toverflow: hidden;
\t\twhite-space: wrap;
\t\tmargin: 0 auto;
\t}

\t/* Keyframes for the typing animation */
\t@keyframes 
\t{
\t\tfrom {
\t\t\twidth: 0;
\t\t}
\t\tto {
\t\t\twidth: 100%;
\t\t}
\t}
</style>

<section id=\"aboutme\" class=\"container-fluid d-flex flex-column justify-content-center align-items-center p-0\" style=\"min-height: 93vh; width: 100%; overflow: hidden;\">
\t<img class=\"mx-auto position-fixed\" style=\"z-index: -1000000; filter: blur(7px) brightness(70%); height: 103%; width: 101%;\" src=\"{{ asset('gridbg.gif') }}\" alt=\"Other Image\"/>
\t<img class=\"mx-auto position-fixed bg-dark\" style=\"z-index: -100000; filter: blur(5px); height: 102vh; width: auto;\" src=\"{{ asset('gridbg.gif') }}\" alt=\"Other Image\"/>

\t<div class=\"rounded-circle bg-dark border border-light\">
\t\t<img class=\"m-2\" style=\"height: 15vh; width: auto;\" src=\"{{ asset('foundtexaspanda.svg') }}\" alt=\"foundtexaspanda\"/>
\t</div>
\t<div class=\"container m-md-1 p-md-2 bg-main-dark-translucent rounded-5 border border-light d-flex flex-column align-items-center justify-content-around\" style=\"min-height: 35vh;\">
\t\t<div class=\"row mt-md-0 mt-md-3 m-1\">
\t\t\t<h2 class=\"p-md-2 my-1 text-center accent-color\"> <i class=\"fa fa-laptop fa-xs\" aria-hidden=\"true\"></i> Web & Game Dev <i class=\"fa fa-gamepad fa-md \" aria-hidden=\"true\"></i> </h2>
\t\t</div>
\t\t<div class=\"row mx-md-5 \">
\t\t\t<p class=\"typing-effect white-text text-justify text-lg m-1 fs-6\">
\t\t\t\tGreetings! Welcome to my corner of the web. I'm Rodolfo also known as FoundTexas. I'm a computer scientist specialized in 3D Graphics, with skill on Project Management, Web and Game Development. I`m a team player and believe that diverse perspectives fuel innovation, leading to significant and immersive experiences for the users.
\t\t\t</p>
\t\t</div>
\t\t<div >
\t\t\t<button type=\"button\" class=\"custom-btn rounded-2 p-1 m-2 accent-bg text-white\" onclick=\"navigateToSectionAndCloseModal('timeline')\" data-bs-dismiss=\"modal\">
\t\t\t\t<h5 class=\"p-0 m-0\"> &nbsp;<i class=\"fa fa-file\" aria-hidden=\"true\"></i> CV&nbsp;</h5>
\t\t\t</button>
\t\t</div>
\t</div>
</section>

<script>
\twindow.onload = function () {
\t\tvar elements = document.getElementsByClassName('typing-effect');
\t\tfor (var i = 0; i < elements.length; i++) {
\t\ttypeWriter(elements[i].textContent, elements[i]);
\t\t}
\t};

\t// Function to create the typing effect
\tfunction typeWriter(text, targetElement) {
\t\tvar speed = 15; // Adjust typing speed here (lower value for faster typing)
\t\tvar i = 0;
\t\ttargetElement.textContent = \"\"; // Clear existing text
\t\tfunction type() {
\t\t\tif (i < text.length) {
\t\t\t\ttargetElement.textContent += text.charAt(i);
\t\t\t\ti++;
\t\t\t\tsetTimeout(type, speed * (text.charAt(i) == ' ' ? 5 : 1));
\t\t\t}
\t\t}
\t\ttype();
\t}

</script>
", "index/AboutMe.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\index\\AboutMe.twig");
    }
}
