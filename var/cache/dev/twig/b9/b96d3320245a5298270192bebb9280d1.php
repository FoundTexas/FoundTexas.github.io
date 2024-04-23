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

/* EventLoading/create_mileStone.twig */
class __TwigTemplate_28b458b4564a8624719f82e4c2f42cae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EventLoading/create_mileStone.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "EventLoading/create_mileStone.twig"));

        // line 1
        yield "<h1>Create Milestone</h1>

";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "mileStoneForm"]]);
        yield "

";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), 'row');
        yield "
";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6), 'row');
        yield " projectForm
";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 7, $this->source); })()), "startDate", [], "any", false, false, false, 7), 'row');
        yield "
";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 8, $this->source); })()), "endDate", [], "any", false, false, false, 8), 'row');
        yield "

<div id=\"mile_stone_form_tags\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 11, $this->source); })()), "tags", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["tagForm"]) {
            // line 12
            yield "        <div>
            ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["tagForm"], 'widget', ["attr" => ["class" => ""]]);
            yield "
            <button type=\"button\" class=\"delete-btn\" onclick=\"deleteField(this, 'mile_stone_form_tags')\">Delete</button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "</div>
<button type=\"button\" onclick=\"addField('mile_stone_form', 'tags')\">Add Tag</button>

<div id=\"mile_stone_form_bullets\">
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 21, $this->source); })()), "bullets", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["bulletform"]) {
            // line 22
            yield "        <div>
            ";
            // line 23
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["bulletform"], 'widget', ["attr" => ["class" => ""]]);
            yield "
            <button type=\"button\" class=\"delete-btn\" onclick=\"deleteField(this, 'mile_stone_form_bullets')\">Delete</button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bulletform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "</div>
<button type=\"button\" onclick=\"addField('mile_stone_form', 'bullets')\">Add BulletPoint</button>


<button type=\"button\" onclick=\"submitForm('";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("milestone_new");
        yield "', 'mileStoneForm', ";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mileStonecur"]) || array_key_exists("mileStonecur", $context) ? $context["mileStonecur"] : (function () { throw new RuntimeError('Variable "mileStonecur" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        yield ")\">Create</button>

";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 33, $this->source); })()), 'form_end');
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
        return "EventLoading/create_mileStone.twig";
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
        return array (  124 => 33,  117 => 31,  111 => 27,  101 => 23,  98 => 22,  94 => 21,  88 => 17,  78 => 13,  75 => 12,  71 => 11,  65 => 8,  61 => 7,  57 => 6,  53 => 5,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Create Milestone</h1>

{{ form_start(mileStoneForm, {'attr': {'id': 'mileStoneForm'}}) }}

{{ form_row(mileStoneForm.name) }}
{{ form_row(mileStoneForm.description) }} projectForm
{{ form_row(mileStoneForm.startDate) }}
{{ form_row(mileStoneForm.endDate) }}

<div id=\"mile_stone_form_tags\">
    {% for tagForm in mileStoneForm.tags %}
        <div>
            {{ form_widget(tagForm, {'attr': {'class': ''}}) }}
            <button type=\"button\" class=\"delete-btn\" onclick=\"deleteField(this, 'mile_stone_form_tags')\">Delete</button>
        </div>
    {% endfor %}
</div>
<button type=\"button\" onclick=\"addField('mile_stone_form', 'tags')\">Add Tag</button>

<div id=\"mile_stone_form_bullets\">
    {% for bulletform in mileStoneForm.bullets %}
        <div>
            {{ form_widget(bulletform, {'attr': {'class': ''}}) }}
            <button type=\"button\" class=\"delete-btn\" onclick=\"deleteField(this, 'mile_stone_form_bullets')\">Delete</button>
        </div>
    {% endfor %}
</div>
<button type=\"button\" onclick=\"addField('mile_stone_form', 'bullets')\">Add BulletPoint</button>


<button type=\"button\" onclick=\"submitForm('{{path('milestone_new')}}', 'mileStoneForm', {{mileStonecur.id}})\">Create</button>

{{ form_end(mileStoneForm) }}
", "EventLoading/create_mileStone.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\EventLoading\\create_mileStone.twig");
    }
}
