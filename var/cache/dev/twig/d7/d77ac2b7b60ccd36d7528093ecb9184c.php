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

/* EventLoading/index.html.twig */
class __TwigTemplate_10ff8285f1c95c56c482e12ec21345bb extends Template
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

        echo "Add New Milestone
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "
\t<div class=\"w-100 row p-5\" style=\"height:100vh;\">
\t\t<div class=\"col-12 col-md-6 row\">
\t\t\t<h1 class=\"col-12\">Milestone Load:</h1>

\t\t\t<div class=\"dropdown-center my-4 col-6\">
\t\t\t\t<select id=\"milestoneDropdown\" class=\"dropdown-center\">
\t\t\t\t\t<option value=\"\">Select Milestone</option>
\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["milestoneIds"]) || array_key_exists("milestoneIds", $context) ? $context["milestoneIds"] : (function () { throw new RuntimeError('Variable "milestoneIds" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["milestone"]) {
            // line 18
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["milestone"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["milestone"], "id", [], "any", false, false, false, 18), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["milestone"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['milestone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<button class=\"btn btn-success \" onclick=\"newForm('";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("milestone_new");
        echo "')\">+</button>
\t\t\t</div>

\t\t\t<div id=\"MilestoneContainer\"></div>
\t\t</div>
\t\t<div class=\"col-12 col-md-6 row\">
\t\t\t<h1>Project Load:</h1>

\t\t\t<div class=\"dropdown-center my-4 col-6\">
\t\t\t\t<select id=\"ProjectDropdown\" class=\"dropdown-center\">
\t\t\t\t\t<option value=\"\">Select Project</option>
\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projectsIds"]) || array_key_exists("projectsIds", $context) ? $context["projectsIds"] : (function () { throw new RuntimeError('Variable "projectsIds" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 35
            echo "\t\t\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</option>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t</select>
\t\t\t</div>

\t\t\t<button class=\"btn btn-success my-4 col-6\" onclick=\"newMilestone()\">+</button>

\t\t\t<div id=\"ProjectContainer\"></div>
\t\t</div>
\t</div>
</div>

<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/formsFunctions.js"), "html", null, true);
        echo "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  183 => 47,  171 => 37,  158 => 35,  154 => 34,  140 => 23,  135 => 20,  122 => 18,  118 => 17,  108 => 9,  98 => 8,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add New Milestone
{% endblock %}

{% block head %}{% endblock %}

{% block body %}

\t<div class=\"w-100 row p-5\" style=\"height:100vh;\">
\t\t<div class=\"col-12 col-md-6 row\">
\t\t\t<h1 class=\"col-12\">Milestone Load:</h1>

\t\t\t<div class=\"dropdown-center my-4 col-6\">
\t\t\t\t<select id=\"milestoneDropdown\" class=\"dropdown-center\">
\t\t\t\t\t<option value=\"\">Select Milestone</option>
\t\t\t\t\t{% for milestone in milestoneIds %}
\t\t\t\t\t\t<option value=\"{{ milestone.id }}\">{{ milestone.id }}-{{ milestone.name }}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-6\">
\t\t\t\t<button class=\"btn btn-success \" onclick=\"newForm('{{path('milestone_new')}}')\">+</button>
\t\t\t</div>

\t\t\t<div id=\"MilestoneContainer\"></div>
\t\t</div>
\t\t<div class=\"col-12 col-md-6 row\">
\t\t\t<h1>Project Load:</h1>

\t\t\t<div class=\"dropdown-center my-4 col-6\">
\t\t\t\t<select id=\"ProjectDropdown\" class=\"dropdown-center\">
\t\t\t\t\t<option value=\"\">Select Project</option>
\t\t\t\t\t{% for project in projectsIds %}
\t\t\t\t\t\t<option value=\"{{ project.id }}\">{{ project.id }}-{{ project.name }}</option>
\t\t\t\t\t{% endfor %}
\t\t\t\t</select>
\t\t\t</div>

\t\t\t<button class=\"btn btn-success my-4 col-6\" onclick=\"newMilestone()\">+</button>

\t\t\t<div id=\"ProjectContainer\"></div>
\t\t</div>
\t</div>
</div>

<script src=\"{{ asset('js/formsFunctions.js') }}\"></script>{% endblock %}
", "EventLoading/index.html.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\EventLoading\\index.html.twig");
    }
}
