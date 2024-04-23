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

/* EventLoading/index.html.twig */
class __TwigTemplate_fe1a623102cc1150e8e091a3afcf8f17 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EventLoading/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EventLoading/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "EventLoading/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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

        yield "Add New Milestone
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "\t<div style=\"height:100vh;\">
\t\t<div class=\"row p-5\">
\t\t\t<div class=\"col-12 col-md-6 row justify-content-center\">
\t\t\t\t<h1 class=\"text-center bg-main p-2 rounded-pill\">Milestone Load:</h1>
\t\t\t\t<div class=\"d-flex justify-content-center align-content-evenly\">

\t\t\t\t\t<select id=\"milestoneDropdown\" class=\"dropdown-center col-auto\" onchange=\"newForm('";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("milestone_new");
        yield "','MilestoneContainer', this.value)\">
\t\t\t\t\t\t<option value=\"\">Select Milestone</option>
\t\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["milestoneIds"]) || array_key_exists("milestoneIds", $context) ? $context["milestoneIds"] : (function () { throw new RuntimeError('Variable "milestoneIds" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["milestone"]) {
            // line 18
            yield "\t\t\t\t\t\t\t<option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["milestone"], "id", [], "any", false, false, false, 18), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["milestone"], "id", [], "any", false, false, false, 18), "html", null, true);
            yield "-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["milestone"], "name", [], "any", false, false, false, 18), "html", null, true);
            yield "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['milestone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "\t\t\t\t\t</select>
\t\t\t\t\t<button class=\"btn btn-success col-auto\" onclick=\"newForm('";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("milestone_new");
        yield "','MilestoneContainer')\">+</button>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-6 row justify-content-center\">
\t\t\t\t<h1 class=\"text-center bg-main p-2 rounded-pill\">Project Load:</h1>
\t\t\t\t<div class=\"row justify-content-center align-content-evenly\">

\t\t\t\t\t<select id=\"ProjectDropdown\" class=\"dropdown-center col-auto\" onchange=\"newForm('";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_new");
        yield "','ProjectContainer', this.value)\">
\t\t\t\t\t\t<option value=\"\">Select Project</option>
\t\t\t\t\t\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projectsIds"]) || array_key_exists("projectsIds", $context) ? $context["projectsIds"] : (function () { throw new RuntimeError('Variable "projectsIds" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 32
            yield "\t\t\t\t\t\t\t<option value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "-";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 32), "html", null, true);
            yield "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "\t\t\t\t\t</select>
\t\t\t\t\t<button class=\"btn btn-success my-4 col-auto\" onclick=\"newForm('";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_new");
        yield "', 'ProjectContainer')\">+</button>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row p-5\">
\t\t\t<div class=\"col-12 col-md-6 row justify-content-center\">
\t\t\t\t<div id=\"MilestoneContainer\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-6 row justify-content-center\">
\t\t\t\t<div id=\"ProjectContainer\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script src=\"";
        // line 51
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/formsFunctions.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "EventLoading/index.html.twig";
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
        return array (  199 => 51,  180 => 35,  177 => 34,  164 => 32,  160 => 31,  155 => 29,  144 => 21,  141 => 20,  128 => 18,  124 => 17,  119 => 15,  111 => 9,  101 => 8,  82 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add New Milestone
{% endblock %}

{% block head %}{% endblock %}

{% block body %}
\t<div style=\"height:100vh;\">
\t\t<div class=\"row p-5\">
\t\t\t<div class=\"col-12 col-md-6 row justify-content-center\">
\t\t\t\t<h1 class=\"text-center bg-main p-2 rounded-pill\">Milestone Load:</h1>
\t\t\t\t<div class=\"d-flex justify-content-center align-content-evenly\">

\t\t\t\t\t<select id=\"milestoneDropdown\" class=\"dropdown-center col-auto\" onchange=\"newForm('{{path('milestone_new')}}','MilestoneContainer', this.value)\">
\t\t\t\t\t\t<option value=\"\">Select Milestone</option>
\t\t\t\t\t\t{% for milestone in milestoneIds %}
\t\t\t\t\t\t\t<option value=\"{{ milestone.id }}\">{{ milestone.id }}-{{ milestone.name }}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t\t<button class=\"btn btn-success col-auto\" onclick=\"newForm('{{path('milestone_new')}}','MilestoneContainer')\">+</button>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-6 row justify-content-center\">
\t\t\t\t<h1 class=\"text-center bg-main p-2 rounded-pill\">Project Load:</h1>
\t\t\t\t<div class=\"row justify-content-center align-content-evenly\">

\t\t\t\t\t<select id=\"ProjectDropdown\" class=\"dropdown-center col-auto\" onchange=\"newForm('{{path('project_new')}}','ProjectContainer', this.value)\">
\t\t\t\t\t\t<option value=\"\">Select Project</option>
\t\t\t\t\t\t{% for project in projectsIds %}
\t\t\t\t\t\t\t<option value=\"{{ project.id }}\">{{ project.id }}-{{ project.name }}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t\t<button class=\"btn btn-success my-4 col-auto\" onclick=\"newForm('{{path('project_new')}}', 'ProjectContainer')\">+</button>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row p-5\">
\t\t\t<div class=\"col-12 col-md-6 row justify-content-center\">
\t\t\t\t<div id=\"MilestoneContainer\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-6 row justify-content-center\">
\t\t\t\t<div id=\"ProjectContainer\"></div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<script src=\"{{ asset('js/formsFunctions.js') }}\"></script>
{% endblock %}
", "EventLoading/index.html.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\EventLoading\\index.html.twig");
    }
}
