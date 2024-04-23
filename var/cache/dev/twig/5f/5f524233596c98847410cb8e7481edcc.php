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

/* registration/register.html.twig */
class __TwigTemplate_ef8b1a3040efc6572a80a2d457cb711c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Register
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<section id=\"register\" class=\"container-fluid d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; width: 100%; overflow: hidden;\">
\t\t<img class=\"mx-auto position-fixed\" style=\"z-index: -1000000; filter: blur(7px) brightness(70%); height: 103%; width: 101%;\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("animatedGrid.gif"), "html", null, true);
        echo "\" alt=\"Other Image\"/>
\t\t<div class=\"container\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 11
            echo "\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header main-bg-dark\">
\t\t\t\t\t\t\t<h1 class=\"text-center m-2\">Register</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container card-body bg-dark\">
\t\t\t\t\t\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t\t<div class=\"form-group m-2\">
\t\t\t\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group m-2\">
\t\t\t\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Username"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group m-1\">
\t\t\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "plainPassword", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row justify-content-center mx-auto my-2\">
\t\t\t\t\t\t\t\t<div class=\"form-check col-auto\">
\t\t\t\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "agreeTerms", [], "any", false, false, false, 33), 'row', ["label_attr" => ["class" => "form-check-label"], "attr" => ["class" => "form-check-input"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"col-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Terms of Service</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary col-auto text-center mx-auto\">Register</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-success\" onclick=\"window.location.href='";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google");
        echo "'\">google sign in</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-xl\">
\t\t\t<div class=\"modal-content bg-dark\">
\t\t\t\t<div class=\"modal-header main-bg-dark\">
\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Terms of Service</h1>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t";
        // line 59
        $this->loadTemplate("terms_of_service.html.twig", "registration/register.html.twig", 59)->display($context);
        // line 60
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/register.html.twig";
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
        return array (  181 => 60,  179 => 59,  159 => 42,  154 => 40,  144 => 33,  137 => 29,  131 => 26,  125 => 23,  120 => 21,  110 => 13,  101 => 11,  97 => 10,  92 => 8,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register
{% endblock %}

{% block body %}
\t<section id=\"register\" class=\"container-fluid d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 100vh; width: 100%; overflow: hidden;\">
\t\t<img class=\"mx-auto position-fixed\" style=\"z-index: -1000000; filter: blur(7px) brightness(70%); height: 103%; width: 101%;\" src=\"{{ asset('animatedGrid.gif') }}\" alt=\"Other Image\"/>
\t\t<div class=\"container\">
\t\t\t{% for flash_error in app.flashes('verify_email_error') %}
\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
\t\t\t{% endfor %}

\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header main-bg-dark\">
\t\t\t\t\t\t\t<h1 class=\"text-center m-2\">Register</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"container card-body bg-dark\">
\t\t\t\t\t\t\t{{ form_start(registrationForm) }}
\t\t\t\t\t\t\t<div class=\"form-group m-2\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'Email'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group m-2\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.name, {'attr': {'class': 'form-control', 'placeholder': 'Username'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group m-1\">
\t\t\t\t\t\t\t\t{{ form_row(registrationForm.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Password'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row justify-content-center mx-auto my-2\">
\t\t\t\t\t\t\t\t<div class=\"form-check col-auto\">
\t\t\t\t\t\t\t\t\t{{ form_row(registrationForm.agreeTerms, {'label_attr': {'class': 'form-check-label'}, 'attr': {'class': 'form-check-input'}}) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"col-auto\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Terms of Service</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary col-auto text-center mx-auto\">Register</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_end(registrationForm) }}

\t\t\t\t\t\t\t<button class=\"btn btn-lg btn-success\" onclick=\"window.location.href='{{ path('connect_google') }}'\">google sign in</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Modal -->
\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-xl\">
\t\t\t<div class=\"modal-content bg-dark\">
\t\t\t\t<div class=\"modal-header main-bg-dark\">
\t\t\t\t\t<h1 class=\"modal-title fs-5\" id=\"exampleModalLabel\">Terms of Service</h1>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t{% include 'terms_of_service.html.twig' %}
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\registration\\register.html.twig");
    }
}
