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

/* EventLoading/create_Project.twig */
class __TwigTemplate_ae9a180faf61d611d0751aa02911ef4d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EventLoading/create_Project.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EventLoading/create_Project.twig"));

        // line 1
        yield "<h1>Create Project</h1>

";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "projectForm"]]);
        yield "

";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), 'row');
        yield "
";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6), 'row');
        yield "
";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 7, $this->source); })()), "fileref", [], "any", false, false, false, 7), 'row');
        yield "
";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 8, $this->source); })()), "iconref", [], "any", false, false, false, 8), 'row');
        yield "
";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 9, $this->source); })()), "mileStone", [], "any", false, false, false, 9), 'row');
        yield "

<button type=\"button\" onclick=\"submitForm('";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_new");
        yield "', 'projectForm', ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["projectcur"]) || array_key_exists("projectcur", $context) ? $context["projectcur"] : (function () { throw new RuntimeError('Variable "projectcur" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        yield ")\">Create</button>

";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["projectForm"]) || array_key_exists("projectForm", $context) ? $context["projectForm"] : (function () { throw new RuntimeError('Variable "projectForm" does not exist.', 13, $this->source); })()), 'form_end');
        yield "
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
        return "EventLoading/create_Project.twig";
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
        return array (  81 => 13,  74 => 11,  69 => 9,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Create Project</h1>

{{ form_start(projectForm, {'attr': {'id': 'projectForm'}}) }}

{{ form_row(projectForm.name) }}
{{ form_row(projectForm.description) }}
{{ form_row(projectForm.fileref) }}
{{ form_row(projectForm.iconref) }}
{{ form_row(projectForm.mileStone) }}

<button type=\"button\" onclick=\"submitForm('{{path('project_new')}}', 'projectForm', {{projectcur.id}})\">Create</button>

{{ form_end(projectForm) }}
", "EventLoading/create_Project.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\EventLoading\\create_Project.twig");
    }
}
