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

/* EventLoading/create_mileStone.twig */
class __TwigTemplate_e431eedafc8562c01f9074cc41b5823b extends Template
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
        echo "<h1>Create Milestone</h1>

";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["id" => "mileStoneForm"]]);
        echo "

";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), 'row');
        echo "
";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 6, $this->source); })()), "description", [], "any", false, false, false, 6), 'row');
        echo "
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 7, $this->source); })()), "startDate", [], "any", false, false, false, 7), 'row');
        echo "
";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 8, $this->source); })()), "endDate", [], "any", false, false, false, 8), 'row');
        echo "

<div id=\"mile_stone_form_tags\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 11, $this->source); })()), "tags", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["tagForm"]) {
            // line 12
            echo "        <div>
            ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["tagForm"], 'widget', ["attr" => ["class" => ""]]);
            echo "
            <button type=\"button\" class=\"delete-btn\" onclick=\"deleteField(this, 'mile_stone_form_tags')\">Delete</button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tagForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
<button type=\"button\" onclick=\"addField('mile_stone_form', 'tags')\">Add Tag</button>

<div id=\"mile_stone_form_bullets\">
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 21, $this->source); })()), "bullets", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["bulletform"]) {
            // line 22
            echo "        <div>
            ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["bulletform"], 'widget', ["attr" => ["class" => ""]]);
            echo "
            <button type=\"button\" class=\"delete-btn\" onclick=\"deleteField(this, 'mile_stone_form_bullets')\">Delete</button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bulletform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
<button type=\"button\" onclick=\"addField('mile_stone_form', 'bullets')\">Add BulletPoint</button>


<button type=\"button\" onclick=\"submitForm(";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mileStonecur"]) || array_key_exists("mileStonecur", $context) ? $context["mileStonecur"] : (function () { throw new RuntimeError('Variable "mileStonecur" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo ")\">Create</button>

";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["mileStoneForm"]) || array_key_exists("mileStoneForm", $context) ? $context["mileStoneForm"] : (function () { throw new RuntimeError('Variable "mileStoneForm" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  121 => 33,  116 => 31,  110 => 27,  100 => 23,  97 => 22,  93 => 21,  87 => 17,  77 => 13,  74 => 12,  70 => 11,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Create Milestone</h1>

{{ form_start(mileStoneForm, {'attr': {'id': 'mileStoneForm'}}) }}

{{ form_row(mileStoneForm.name) }}
{{ form_row(mileStoneForm.description) }}
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


<button type=\"button\" onclick=\"submitForm({{mileStonecur.id}})\">Create</button>

{{ form_end(mileStoneForm) }}
", "EventLoading/create_mileStone.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\EventLoading\\create_mileStone.twig");
    }
}
