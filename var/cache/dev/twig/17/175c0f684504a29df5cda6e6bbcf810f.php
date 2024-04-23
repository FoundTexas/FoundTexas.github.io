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

/* ProjectsHighlights.twig */
class __TwigTemplate_611d63a9a16676d9a64216fbaaa0e40e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProjectsHighlights.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProjectsHighlights.twig"));

        // line 1
        yield "<section id=\"projects\" class=\"bg-main-dark p-0\" style=\"min-height: 100vh;\">

\t";
        // line 3
        yield from         $this->loadTemplate("index/IndexHeader.twig", "ProjectsHighlights.twig", 3)->unwrap()->yield(CoreExtension::arrayMerge($context, ["textRef" => (isset($context["textRef"]) || array_key_exists("textRef", $context) ? $context["textRef"] : (function () { throw new RuntimeError('Variable "textRef" does not exist.', 3, $this->source); })()), "headText" => (isset($context["headText"]) || array_key_exists("headText", $context) ? $context["headText"] : (function () { throw new RuntimeError('Variable "headText" does not exist.', 3, $this->source); })()), "darkbg" => true]));
        // line 4
        yield "
\t<div class=\"d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 75vh; width: 100%;\">

\t\t<div class=\"container rounded-5 ";
        // line 7
        (((array_key_exists("color", $context) &&  !(null === (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 7, $this->source); })())))) ? (yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 7, $this->source); })()), "html", null, true)) : (yield "bg-main-gradient"));
        yield "  m-3 my-md-4 p-3 shadow-custom\">
\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 11
            yield "
\t\t\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, 0));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 13
                yield "
\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 col-xl-3 px-3 py-2  ";
                // line 14
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14) > 6)) ? ((((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14) > 10)) ? ("d-none d-lg-block") : ("d-none d-md-block"))) : (""));
                yield " \">
\t\t\t\t\t\t\t<div class=\"rounded-4 row justify-content-center bg-dark mx-auto shadow-custom \" style=\"overflow:hidden; aspect-ratio: 0.75;\">
\t\t\t\t\t\t\t\t<div class=\" w-100 h-50 p-0 d-flex align-items-center\" style=\"overflow:hidden;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
                // line 17
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "iconref", [], "any", false, false, false, 17), "html", null, true);
                yield "\" style=\"width:100%;\" alt=\"project not loading\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='px-1'>
\t\t\t\t\t\t\t\t\t<h5 class=\"p-0 m-0 accent-color text-center\">Card title</h5>
\t\t\t\t\t\t\t\t\t<p class=\" m-0\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 23
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "fileref", [], "any", false, false, false, 23), "html", null, true);
                yield "\" class=\"btn btn-main\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "\t\t\t</div>
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<button type=\"button\" class=\"col-auto custom-btn rounded-2 p-1 mt-4 mb-2 accent-bg text-white\" onclick=\"window.location.href='";
        // line 32
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_game_projects", ["type" => (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 32, $this->source); })())]), "html", null, true);
        yield "'\" data-bs-dismiss=\"modal\">&nbsp;&nbsp;All
\t\t\t\t\t";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "...&nbsp;&nbsp;</button>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<style>
\t/* Add custom style for changing text on hover */
\t.btn-main::before {
\t\tcontent: \"more info.\";
\t}

\t.btn-main:hover::before {
\t\tcontent: \"Let's Go!\";
\t}
</style>
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
        return "ProjectsHighlights.twig";
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
        return array (  137 => 33,  133 => 32,  129 => 30,  122 => 28,  103 => 23,  94 => 17,  88 => 14,  85 => 13,  68 => 12,  65 => 11,  61 => 10,  55 => 7,  50 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"projects\" class=\"bg-main-dark p-0\" style=\"min-height: 100vh;\">

\t{% include 'index/IndexHeader.twig' with {'textRef': textRef, 'headText': headText, 'darkbg': true} %}

\t<div class=\"d-flex flex-column justify-content-center align-items-center\" style=\"min-height: 75vh; width: 100%;\">

\t\t<div class=\"container rounded-5 {{ color ?? 'bg-main-gradient' }}  m-3 my-md-4 p-3 shadow-custom\">
\t\t\t<div class=\"row justify-content-center\">

\t\t\t\t{% for project in projects %}

\t\t\t\t\t{% for i in 0..0 %}

\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 col-xl-3 px-3 py-2  {{ loop.index > 6 ? (loop.index > 10 ? 'd-none d-lg-block' : 'd-none d-md-block') : '' }} \">
\t\t\t\t\t\t\t<div class=\"rounded-4 row justify-content-center bg-dark mx-auto shadow-custom \" style=\"overflow:hidden; aspect-ratio: 0.75;\">
\t\t\t\t\t\t\t\t<div class=\" w-100 h-50 p-0 d-flex align-items-center\" style=\"overflow:hidden;\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ project.iconref }}\" style=\"width:100%;\" alt=\"project not loading\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class='px-1'>
\t\t\t\t\t\t\t\t\t<h5 class=\"p-0 m-0 accent-color text-center\">Card title</h5>
\t\t\t\t\t\t\t\t\t<p class=\" m-0\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"{{project.fileref}}\" class=\"btn btn-main\"></a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t{% endfor %}

\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<button type=\"button\" class=\"col-auto custom-btn rounded-2 p-1 mt-4 mb-2 accent-bg text-white\" onclick=\"window.location.href='{{ path('app_game_projects', {'type': type}) }}'\" data-bs-dismiss=\"modal\">&nbsp;&nbsp;All
\t\t\t\t\t{{type}}...&nbsp;&nbsp;</button>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<style>
\t/* Add custom style for changing text on hover */
\t.btn-main::before {
\t\tcontent: \"more info.\";
\t}

\t.btn-main:hover::before {
\t\tcontent: \"Let's Go!\";
\t}
</style>
", "ProjectsHighlights.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\ProjectsHighlights.twig");
    }
}
