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

/* index/footer.twig */
class __TwigTemplate_0408caa85364a91956fab223cb26ad4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/footer.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/footer.twig"));

        // line 1
        yield "<div class=\"modal fade \" id=\"cookiePolicyModal\" tabindex=\"-1\" aria-labelledby=\"cookiePolicyModalLabel\" aria-hidden=\"true\">

\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content bg-dark\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"cookiePolicyModalLabel\">Cookie Policy</h1>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
        // line 10
        yield from         $this->loadTemplate("index/cookies.twig", "index/footer.twig", 10)->unwrap()->yield($context);
        // line 11
        yield "\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<footer class=\"bg-dark text-white text-center py-3\" style=\"min-height: 25vh;\">
\t<p>&copy; 2024 . All Rights Reserved.</p>

\t<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#cookiePolicyModal\">
\t\tcookies-policy
\t</button>
</footer>
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
        return "index/footer.twig";
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
        return array (  57 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade \" id=\"cookiePolicyModal\" tabindex=\"-1\" aria-labelledby=\"cookiePolicyModalLabel\" aria-hidden=\"true\">

\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content bg-dark\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"cookiePolicyModalLabel\">Cookie Policy</h1>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t{% include 'index/cookies.twig' %}
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<footer class=\"bg-dark text-white text-center py-3\" style=\"min-height: 25vh;\">
\t<p>&copy; 2024 . All Rights Reserved.</p>

\t<button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#cookiePolicyModal\">
\t\tcookies-policy
\t</button>
</footer>
", "index/footer.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\index\\footer.twig");
    }
}
