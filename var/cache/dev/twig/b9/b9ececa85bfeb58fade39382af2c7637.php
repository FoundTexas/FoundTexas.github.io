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

/* timeline.twig */
class __TwigTemplate_2ace63a8a5d30fd84c50d8937e59a01e extends Template
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
        echo "
";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 2, $this->source); })()));
        echo "
<section id=\"timeline\" class=\"accent-bg-dark px-2 rounded-top-5\" style=\"min-height: 100vh; margin-top: -4rem;\">
\t";
        // line 4
        $this->loadTemplate("index/IndexHeader.twig", "timeline.twig", 4)->display(twig_array_merge($context, ["upRef" => "aboutme", "textRef" => "timeline", "headText" => "timeline", "darkbg" => true]));
        // line 5
        echo "\t<div class=\" m-md-4\">
\t\t<div class=\"row m-2\">
\t\t\t<div class=\"col-12 col-md mt-2\">
\t\t\t\t<h6>Filter by Year:</h6>
\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Year buttons\">
\t\t\t\t\t";
        // line 10
        $context["years"] = [];
        // line 11
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 12
            echo "\t\t\t\t\t\t";
            if (!twig_in_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 12), "Y"), (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 12, $this->source); })()))) {
                // line 13
                echo "\t\t\t\t\t\t\t";
                $context["years"] = twig_array_merge((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 13, $this->source); })()), [twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 13), "Y")]);
                // line 14
                echo "\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" onclick=\"showEvents('";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 14), "Y"), "html", null, true);
                echo "')\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 14), "Y"), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            // line 16
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md mt-2\">
\t\t\t\t<h6>Filter by Tags:</h6>
\t\t\t\t";
        // line 21
        $context["all_tags"] = [];
        // line 22
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 23
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "tags", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 24
                echo "\t\t\t\t\t\t";
                if (!twig_in_filter($context["tag"], (isset($context["all_tags"]) || array_key_exists("all_tags", $context) ? $context["all_tags"] : (function () { throw new RuntimeError('Variable "all_tags" does not exist.', 24, $this->source); })()))) {
                    // line 25
                    echo "\t\t\t\t\t\t\t";
                    $context["all_tags"] = twig_array_merge((isset($context["all_tags"]) || array_key_exists("all_tags", $context) ? $context["all_tags"] : (function () { throw new RuntimeError('Variable "all_tags" does not exist.', 25, $this->source); })()), [$context["tag"]]);
                    // line 26
                    echo "\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<button type=\"button\" class=\"col-auto btn btn-success\" onclick=\"selectAllTags(true)\">Select All</button>
\t\t\t\t\t<button type=\"button\" class=\"col-auto btn btn-secondary\" onclick=\"selectAllTags(false)\">Deselect All</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_tags"]) || array_key_exists("all_tags", $context) ? $context["all_tags"] : (function () { throw new RuntimeError('Variable "all_tags" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 35
            echo "\t\t\t\t\t\t<input type=\"checkbox\" class=\"col-auto btn-check\" id=\"btn-check-outlined-";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\" name=\"tags\" value=\"";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\" checked>
\t\t\t\t\t\t<label class=\"col-auto btn btn-outline-primary\" for=\"btn-check-outlined-";
            // line 36
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</label><br>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row \">
\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 43, $this->source); })()));
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
            echo "\t\t\t\t<div class=\"events-wrapper  mb-5\" id=\"events-";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\" style=\"display: ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 44)) ? ("block") : ("none"));
            echo ";\">
\t\t\t\t\t<h4 class=\"text-center py-2 border border-light\">";
            // line 45
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</h4>
\t\t\t\t\t<div class=\"border border-light\" style=\"overflow-y: auto; overflow-x: hidden; height: 50vh; width: 100%;\">
\t\t\t\t\t\t";
            // line 47
            $context["events_in_year"] = twig_array_filter($this->env, (isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 47, $this->source); })()), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 47, $this->source); })()), "startDate", [], "any", false, false, false, 47), "Y") == $context["year"]); });
            // line 48
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["events_in_year"]) || array_key_exists("events_in_year", $context) ? $context["events_in_year"] : (function () { throw new RuntimeError('Variable "events_in_year" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 49
                echo "\t\t\t\t\t\t\t<div class=\"timeline-event border rounded-4 border-light bg-dark mx-auto\" data-tags=\"";
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["event"], "tags", [], "any", false, false, false, 49), ","), "html", null, true);
                echo "\" style=\"height: 100%;\">

\t\t\t\t\t\t\t\t<div class=\"main-bg row\">
\t\t\t\t\t\t\t\t\t<h6 class=\"col-12 col-md accent-color m-2\">";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 52), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t\t\t<span class=\"col-12 col-md white-text m-2\">";
                // line 53
                echo twig_escape_filter($this->env, ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "startDate", [], "any", false, false, false, 53), "Y-m") . " - ") . twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "endDate", [], "any", false, false, false, 53), "Y-m")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12 list-group\" style=\"overflow-y: auto; overflow-x: hidden; height: auto; \">
\t\t\t\t\t\t\t\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["event"], "bulletpoints", [], "any", false, false, false, 56));
                foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t\t\t<P style=\"font-size: 14px;\" class=\"list-group-item list-group-item-action bg-dark text-light\">";
                    echo twig_escape_filter($this->env, $context["point"], "html", null, true);
                    echo "</P>
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
                // line 62
                echo "\t\t\t\t\t\t\t\t<div class=\"tags\" style=\"display: none;\">";
                echo json_encode(twig_get_attribute($this->env, $this->source, $context["event"], "tags", [], "any", false, false, false, 62));
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "\t\t\t\t\t</div>
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
        echo "\t\t</div>
\t</div>
</section>


<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/timeLine.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  264 => 73,  257 => 68,  241 => 65,  231 => 62,  227 => 59,  218 => 57,  214 => 56,  208 => 53,  204 => 52,  197 => 49,  192 => 48,  190 => 47,  185 => 45,  178 => 44,  161 => 43,  154 => 38,  144 => 36,  137 => 35,  133 => 34,  126 => 29,  120 => 28,  114 => 27,  111 => 26,  108 => 25,  105 => 24,  100 => 23,  95 => 22,  93 => 21,  87 => 17,  81 => 16,  73 => 14,  70 => 13,  67 => 12,  62 => 11,  60 => 10,  53 => 5,  51 => 4,  46 => 2,  43 => 1,);
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

\t\t\t\t\t\t\t\t<div class=\"main-bg row\">
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
