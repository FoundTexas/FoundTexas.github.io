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

/* timeline.twig */
class __TwigTemplate_b9f566de64d17e81ae8ae736527d6f99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timeline.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timeline.twig"));

        // line 1
        yield "
";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 2, $this->source); })()));
        yield "
<section id=\"timeline\" class=\"accent-bg-dark px-2 rounded-top-5\" style=\"min-height: 100vh; margin-top: -4rem;\">
\t";
        // line 4
        yield from         $this->loadTemplate("index/IndexHeader.twig", "timeline.twig", 4)->unwrap()->yield(CoreExtension::arrayMerge($context, ["upRef" => "aboutme", "textRef" => "timeline", "headText" => "timeline", "darkbg" => true]));
        // line 5
        yield "\t<div class=\" m-md-4\">
\t\t<div class=\"row m-2\">
\t\t\t<div class=\"col-12 col-md mt-2\">
\t\t\t\t<h6>Filter by Year:</h6>
\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Year buttons\">
\t\t\t\t\t";
        // line 10
        $context["years"] = [];
        // line 11
        yield "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 12
            yield "\t\t\t\t\t\t";
            if (!CoreExtension::inFilter(Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 12), "Y"), (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 12, $this->source); })()))) {
                // line 13
                yield "\t\t\t\t\t\t\t";
                $context["years"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 13, $this->source); })()), [Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 13), "Y")]);
                // line 14
                yield "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"showEvents('";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 14), "Y"), "html", null, true);
                yield "')\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 14), "Y"), "html", null, true);
                yield "</button>
\t\t\t\t\t\t";
            }
            // line 16
            yield "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md mt-2\">
\t\t\t\t<h6>Filter by Tags:</h6>
\t\t\t\t";
        // line 21
        $context["all_tags"] = [];
        // line 22
        yield "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 23
            yield "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "tags", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 24
                yield "\t\t\t\t\t\t";
                if (!CoreExtension::inFilter($context["tag"], (isset($context["all_tags"]) || array_key_exists("all_tags", $context) ? $context["all_tags"] : (function () { throw new RuntimeError('Variable "all_tags" does not exist.', 24, $this->source); })()))) {
                    // line 25
                    yield "\t\t\t\t\t\t\t";
                    $context["all_tags"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["all_tags"]) || array_key_exists("all_tags", $context) ? $context["all_tags"] : (function () { throw new RuntimeError('Variable "all_tags" does not exist.', 25, $this->source); })()), [$context["tag"]]);
                    // line 26
                    yield "\t\t\t\t\t\t";
                }
                // line 27
                yield "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            yield "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<button type=\"button\" class=\"col-auto btn btn-success\" onclick=\"selectAllTags(true)\">Select All</button>
\t\t\t\t\t<button type=\"button\" class=\"col-auto btn btn-secondary\" onclick=\"selectAllTags(false)\">Deselect All</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["all_tags"]) || array_key_exists("all_tags", $context) ? $context["all_tags"] : (function () { throw new RuntimeError('Variable "all_tags" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 35
            yield "\t\t\t\t\t\t<input type=\"checkbox\" class=\"col-auto btn-check\" id=\"btn-check-outlined-";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["tag"], "html", null, true);
            yield "\" name=\"tags\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["tag"], "html", null, true);
            yield "\" checked>
\t\t\t\t\t\t<label class=\"col-auto btn btn-outline-primary\" for=\"btn-check-outlined-";
            // line 36
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["tag"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["tag"], "html", null, true);
            yield "</label><br>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row \">
\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 43, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 44
            yield "\t\t\t\t<div class=\"events-wrapper  mb-5\" id=\"events-";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["year"], "html", null, true);
            yield "\" style=\"display: ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 44)) ? ("block") : ("none"));
            yield ";\">
\t\t\t\t\t<h4 class=\"text-center py-2 border border-light\">";
            // line 45
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["year"], "html", null, true);
            yield "</h4>
\t\t\t\t\t<div class=\"border border-light\" style=\"overflow-y: auto; overflow-x: hidden; height: 50vh; width: 100%;\">
\t\t\t\t\t\t";
            // line 47
            $context["events_in_year"] = Twig\Extension\CoreExtension::arrayFilter($this->env, (isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 47, $this->source); })()), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return (Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 47, $this->source); })()), "startDate", [], "any", false, false, false, 47), "Y") == $context["year"]); });
            // line 48
            yield "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events_in_year"]) || array_key_exists("events_in_year", $context) ? $context["events_in_year"] : (function () { throw new RuntimeError('Variable "events_in_year" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 49
                yield "\t\t\t\t\t\t\t<div class=\"timeline-event border rounded-4 border-light bg-dark mx-auto\" data-tags=\"";
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "tags", [], "any", false, false, false, 49), ","), "html", null, true);
                yield "\" style=\"height: 100%;\">

\t\t\t\t\t\t\t\t<div class=\"bg-main row\">
\t\t\t\t\t\t\t\t\t<h6 class=\"col-12 col-md accent-color m-2\">";
                // line 52
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 52), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t\t\t<span class=\"col-12 col-md white-text m-2\">";
                // line 53
                yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 53), "Y-m") . " - ") . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "endDate", [], "any", false, false, false, 53), "Y-m")), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 list-group\" style=\"overflow-y: auto; overflow-x: hidden; height: auto; \">
\t\t\t\t\t\t\t\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "bulletpoints", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
                    // line 57
                    yield "\t\t\t\t\t\t\t\t\t\t<P style=\"font-size: 14px;\" class=\"list-group-item list-group-item-action bg-dark text-light\">";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $context["point"], "html", null, true);
                    yield "</P>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                yield "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                // line 62
                yield "\t\t\t\t\t\t\t\t<div class=\"tags\" style=\"display: none;\">";
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "tags", [], "any", false, false, false, 62));
                yield "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "\t\t</div>
\t</div>
</section>


<script src=\"";
        // line 73
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/timeLine.js"), "html", null, true);
        yield "\"></script>
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
        return "timeline.twig";
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
        return array (  265 => 73,  258 => 68,  242 => 65,  232 => 62,  228 => 59,  219 => 57,  215 => 56,  209 => 53,  205 => 52,  198 => 49,  193 => 48,  191 => 47,  186 => 45,  179 => 44,  162 => 43,  155 => 38,  145 => 36,  138 => 35,  134 => 34,  127 => 29,  121 => 28,  115 => 27,  112 => 26,  109 => 25,  106 => 24,  101 => 23,  96 => 22,  94 => 21,  88 => 17,  82 => 16,  74 => 14,  71 => 13,  68 => 12,  63 => 11,  61 => 10,  54 => 5,  52 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{{ dump(timeline_events) }}
<section id=\"timeline\" class=\"accent-bg-dark px-2 rounded-top-5\" style=\"min-height: 100vh; margin-top: -4rem;\">
\t{% include 'index/IndexHeader.twig' with {'upRef': 'aboutme', 'textRef': 'timeline', 'headText': 'timeline', 'darkbg': true} %}
\t<div class=\" m-md-4\">
\t\t<div class=\"row m-2\">
\t\t\t<div class=\"col-12 col-md mt-2\">
\t\t\t\t<h6>Filter by Year:</h6>
\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Year buttons\">
\t\t\t\t\t{% set years = [] %}
\t\t\t\t\t{% for event in timeline_events %}
\t\t\t\t\t\t{% if event.startDate|date('Y') not in years %}
\t\t\t\t\t\t\t{% set years = years|merge([event.startDate|date('Y')]) %}
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"showEvents('{{ event.startDate|date('Y') }}')\">{{ event.startDate|date('Y') }}</button>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md mt-2\">
\t\t\t\t<h6>Filter by Tags:</h6>
\t\t\t\t{% set all_tags = [] %}
\t\t\t\t{% for event in timeline_events %}
\t\t\t\t\t{% for tag in event.tags %}
\t\t\t\t\t\t{% if tag not in all_tags %}
\t\t\t\t\t\t\t{% set all_tags = all_tags|merge([tag]) %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<button type=\"button\" class=\"col-auto btn btn-success\" onclick=\"selectAllTags(true)\">Select All</button>
\t\t\t\t\t<button type=\"button\" class=\"col-auto btn btn-secondary\" onclick=\"selectAllTags(false)\">Deselect All</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for tag in all_tags %}
\t\t\t\t\t\t<input type=\"checkbox\" class=\"col-auto btn-check\" id=\"btn-check-outlined-{{ tag }}\" name=\"tags\" value=\"{{ tag }}\" checked>
\t\t\t\t\t\t<label class=\"col-auto btn btn-outline-primary\" for=\"btn-check-outlined-{{ tag }}\">{{ tag }}</label><br>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row \">
\t\t\t{% for year in years %}
\t\t\t\t<div class=\"events-wrapper  mb-5\" id=\"events-{{ year }}\" style=\"display: {{ loop.first ? 'block' : 'none' }};\">
\t\t\t\t\t<h4 class=\"text-center py-2 border border-light\">{{ year }}</h4>
\t\t\t\t\t<div class=\"border border-light\" style=\"overflow-y: auto; overflow-x: hidden; height: 50vh; width: 100%;\">
\t\t\t\t\t\t{% set events_in_year = timeline_events|filter(e => e.startDate|date('Y') == year) %}
\t\t\t\t\t\t{% for event in events_in_year %}
\t\t\t\t\t\t\t<div class=\"timeline-event border rounded-4 border-light bg-dark mx-auto\" data-tags=\"{{ event.tags|join(',') }}\" style=\"height: 100%;\">

\t\t\t\t\t\t\t\t<div class=\"bg-main row\">
\t\t\t\t\t\t\t\t\t<h6 class=\"col-12 col-md accent-color m-2\">{{ event.name }}</h6>
\t\t\t\t\t\t\t\t\t<span class=\"col-12 col-md white-text m-2\">{{ event.startDate|date('Y-m') ~ ' - ' ~ event.endDate|date('Y-m') }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 list-group\" style=\"overflow-y: auto; overflow-x: hidden; height: auto; \">
\t\t\t\t\t\t\t\t\t{% for point in event.bulletpoints %}
\t\t\t\t\t\t\t\t\t\t<P style=\"font-size: 14px;\" class=\"list-group-item list-group-item-action bg-dark text-light\">{{ point }}</P>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t{# Assign tags to the card as a data attribute #}
\t\t\t\t\t\t\t\t<div class=\"tags\" style=\"display: none;\">{{ event.tags|json_encode|raw }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
</section>


<script src=\"{{ asset('js/timeLine.js') }}\"></script>
", "timeline.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\timeline.twig");
    }
}
