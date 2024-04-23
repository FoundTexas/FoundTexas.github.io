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

/* timeline_cv/index.html.twig */
class __TwigTemplate_62bd6a581a2f2649414f0d7c8e29e736 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timeline_cv/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "timeline_cv/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "timeline_cv/index.html.twig", 1);
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

        // line 4
        yield "\tTimeline CV
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "
\t<style>
\t\t.timeline-container {
\t\t\tposition: relative; /* Ensure positioning context for pseudo-elements */
\t\t}

\t\t.timeline-container:before {
\t\t\tcontent: '';
\t\t\tposition: absolute;
\t\t\tleft: 48.5vw;
\t\t\ttop: 0;
\t\t\tbottom: 0;
\t\t\twidth: 1vw;
\t\t\tbackground: #ccc;
\t\t\tbox-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
\t\t\tbackground: linear-gradient(0deg, #1a7c43 0%, #daa715 100%);
\t\t}
\t</style>

\t<div id=\"timeline\" class=\"row m-0 p-0 accent-bg-dark\" style=\"min-height: 75vh;\">
\t\t";
        // line 28
        yield from         $this->loadTemplate("index/IndexHeader.twig", "timeline_cv/index.html.twig", 28)->unwrap()->yield(CoreExtension::arrayMerge($context, ["upRef" => "aboutme", "textRef" => "timeline", "headText" => "timeline", "darkbg" => true]));
        // line 29
        yield "
\t\t<div class=\"col-12 row fixed-top py-2 position-sticky bg-main-dark rounded-4\" style=\"z-index: 1042;\">

\t\t\t<div class=\"col-md-8 m-0 p-0\">
\t\t\t\t";
        // line 33
        $context["all_tags"] = [];
        // line 34
        yield "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 35
            yield "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 35), "tags", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 36
                yield "\t\t\t\t\t\t";
                if (!CoreExtension::inFilter($context["tag"], (isset($context["all_tags"]) || array_key_exists("all_tags", $context) ? $context["all_tags"] : (function () { throw new RuntimeError('Variable "all_tags" does not exist.', 36, $this->source); })()))) {
                    // line 37
                    yield "\t\t\t\t\t\t\t";
                    $context["all_tags"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["all_tags"]) || array_key_exists("all_tags", $context) ? $context["all_tags"] : (function () { throw new RuntimeError('Variable "all_tags" does not exist.', 37, $this->source); })()), [$context["tag"]]);
                    // line 38
                    yield "\t\t\t\t\t\t";
                }
                // line 39
                yield "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h6 class=\"col-auto \">Filter by Tags:</h6>

\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"options-outlined\" id=\"success-outlined\" autocomplete=\"off\" checked>
\t\t\t\t\t<label class=\"col-auto btn btn-outline-success\" for=\"success-outlined\" onclick=\"selectAllTags(true)\">All</label>

\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"options-outlined\" id=\"danger-outlined\" autocomplete=\"off\">
\t\t\t\t\t<label class=\"col-auto btn btn-outline-danger\" for=\"danger-outlined\" onclick=\"selectAllTags(false)\">None</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["all_tags"]) || array_key_exists("all_tags", $context) ? $context["all_tags"] : (function () { throw new RuntimeError('Variable "all_tags" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 52
            yield "\t\t\t\t\t\t<input type=\"checkbox\" class=\"col-auto btn-check\" id=\"btn-check-outlined-";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["tag"], "html", null, true);
            yield "\" name=\"tags\" value=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["tag"], "html", null, true);
            yield "\" checked>
\t\t\t\t\t\t<label class=\"col-auto btn btn-outline-main\" for=\"btn-check-outlined-";
            // line 53
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["tag"], "html", null, true);
            yield "\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["tag"], "html", null, true);
            yield "</label><br>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 m-0 p-0\">
\t\t\t\t<h6>Filter by Year:</h6>
\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Year buttons\">
\t\t\t\t\t";
        // line 61
        $context["years"] = [];
        // line 62
        yield "
\t\t\t\t\t";
        // line 64
        yield "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 65
            yield "\t\t\t\t\t\t";
            if (!CoreExtension::inFilter(Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 65), "startDate", [], "any", false, false, false, 65), "Y"), (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 65, $this->source); })()))) {
                // line 66
                yield "\t\t\t\t\t\t\t";
                $context["years"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 66, $this->source); })()), [Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 66), "startDate", [], "any", false, false, false, 66), "Y")]);
                // line 67
                yield "\t\t\t\t\t\t";
            }
            // line 68
            yield "\t\t\t\t\t\t";
            if (!CoreExtension::inFilter(Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 68), "endDate", [], "any", false, false, false, 68), "Y"), (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 68, $this->source); })()))) {
                // line 69
                yield "\t\t\t\t\t\t\t";
                $context["years"] = Twig\Extension\CoreExtension::arrayMerge((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 69, $this->source); })()), [Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 69), "endDate", [], "any", false, false, false, 69), "Y")]);
                // line 70
                yield "\t\t\t\t\t\t";
            }
            // line 71
            yield "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "
\t\t\t\t\t";
        // line 74
        yield "\t\t\t\t\t";
        $context["years"] = Twig\Extension\CoreExtension::sortFilter($this->env, (isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 74, $this->source); })()));
        // line 75
        yield "
\t\t\t\t\t";
        // line 77
        yield "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 77, $this->source); })()));
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
            // line 78
            yield "\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 78), "html", null, true);
            yield "\" autocomplete=\"off\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 78) == 1)) {
                yield " checked ";
            }
            yield ">
\t\t\t\t\t\t<label class=\"btn btn-outline-main\" for=\"btnradio";
            // line 79
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 79), "html", null, true);
            yield "\" onclick=\"showEvents('";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["year"], "html", null, true);
            yield "')\">";
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["year"], "html", null, true);
            yield "</label>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 86
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 86, $this->source); })()))) {
            // line 87
            yield "
\t\t\t<h3 class=\"col-6 my-5 accent-bg-dark text-center mx-auto py-3 text-warning border border-warning rounded-3\">
\t\t\t\tNo events available.
\t\t\t</h3>

\t\t";
        }
        // line 93
        yield "
\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["years"]) || array_key_exists("years", $context) ? $context["years"] : (function () { throw new RuntimeError('Variable "years" does not exist.', 94, $this->source); })()));
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
            // line 95
            yield "\t\t\t";
            $context["events_in_year"] = Twig\Extension\CoreExtension::arrayFilter($this->env, (isset($context["timeline_events"]) || array_key_exists("timeline_events", $context) ? $context["timeline_events"] : (function () { throw new RuntimeError('Variable "timeline_events" does not exist.', 95, $this->source); })()), function ($__e__) use ($context, $macros) { $context["e"] = $__e__; return ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 95, $this->source); })()), "main", [], "any", false, false, false, 95), "startDate", [], "any", false, false, false, 95), "Y") == $context["year"]) || (Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 95, $this->source); })()), "main", [], "any", false, false, false, 95), "endDate", [], "any", false, false, false, 95), "Y") == $context["year"])); });
            // line 96
            yield "
\t\t\t<div class=\"events-wrapper container-fluid row justify-content-center align-items-center m-0\" id=\"events-";
            // line 97
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["year"], "html", null, true);
            yield "\" style=\"display: ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 97)) ? ("block") : ("none"));
            yield ";\">
\t\t\t\t<div class=\"row justify-content-center mt-4 m-0\">
\t\t\t\t\t<h4 class=\"col-auto bg-dark text-center shadow-custom m-0 px-5 py-3 text-warning border border-warning rounded-3\">";
            // line 99
            yield Twig\Extension\EscaperExtension::escape($this->env, $context["year"], "html", null, true);
            yield "</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"timeline-container row justify-content-center p-0 m-0 \">
\t\t\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events_in_year"]) || array_key_exists("events_in_year", $context) ? $context["events_in_year"] : (function () { throw new RuntimeError('Variable "events_in_year" does not exist.', 102, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 103
                yield "\t\t\t\t\t\t<div class=\" col-12 row justify-content-center text-white\">

\t\t\t\t\t\t\t<div class=\"timeline-event card rounded-4 m-5 shadow-custom bg-main-gradient";
                // line 105
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 105) % 2) == 0)) {
                    yield "-alter";
                }
                yield "\" style=\"width: 36rem; max-width: 90vw;\">

\t\t\t\t\t\t\t\t<div class=\"card-body row m-0 justify-content-center text-center\">

\t\t\t\t\t\t\t\t\t<h5 class=\"col-auto card-title\">
\t\t\t\t\t\t\t\t\t\t<strong class='accent-color'>";
                // line 110
                yield Twig\Extension\EscaperExtension::escape($this->env, ((Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 110), "startDate", [], "any", false, false, false, 110), "F-Y") . " - ") . Twig\Extension\CoreExtension::dateFormatFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 110), "endDate", [], "any", false, false, false, 110), "F-Y")), "html", null, true);
                yield "</strong>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<h3 class=\"col-auto card-title\">";
                // line 112
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true);
                yield "</h3>

\t\t\t\t\t\t\t\t\t";
                // line 114
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, true, false, 114), "description", [], "any", true, true, false, 114)) {
                    // line 115
                    yield "\t\t\t\t\t\t\t\t\t\t<div class=\"p-2 bg-dark rounded-3\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">";
                    // line 116
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 116), "description", [], "any", false, false, false, 116), "html", null, true);
                    yield "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 119
                yield "

\t\t\t\t\t\t\t\t\t";
                // line 121
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, true, false, 121), "bullets", [], "any", true, true, false, 121) && (Twig\Extension\CoreExtension::lengthFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 121), "bullets", [], "any", false, false, false, 121)) > 0))) {
                    // line 122
                    yield "\t\t\t\t\t\t\t\t\t\t<div class=\"row my-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"custom-btn rounded-2 p-1 m-2 accent-bg text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseEvent";
                    // line 124
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124), "html", null, true);
                    yield "\" aria-expanded=\"false\" aria-controls=\"collapseEvent";
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 124), "id", [], "any", false, false, false, 124), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tMore Info
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col collapse\" id=\"collapseEvent";
                    // line 131
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 131), "id", [], "any", false, false, false, 131), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 133), "bullets", [], "any", false, false, false, 133));
                    foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
                        // line 134
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item p-0 m-0\">";
                        yield Twig\Extension\EscaperExtension::escape($this->env, $context["point"], "html", null, true);
                        yield "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 136
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 140
                yield "

\t\t\t\t\t\t\t\t\t";
                // line 142
                if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "projects", [], "any", true, true, false, 142)) {
                    // line 143
                    yield "\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Asociated projects:</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 145
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "projects", [], "any", false, false, false, 145));
                    foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                        // line 146
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-4 d-flex justify-content-center bg-dark mx-auto shadow\" style=\"overflow: hidden; aspect-ratio: 1; cursor: pointer; max-width: 7rem;\" onclick=\"window.location.href='";
                        // line 147
                        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_project_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 147)]), "html", null, true);
                        yield "'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                        // line 148
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "iconref", [], "any", false, false, false, 148), "html", null, true);
                        yield "\" style=\"height: 100%; width: auto;\" alt=\"";
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 148), "html", null, true);
                        yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">";
                        // line 150
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["project"], "name", [], "any", false, false, false, 150), "html", null, true);
                        yield "</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 153
                    yield "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 155
                yield "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tags\" style=\"display: none;\">";
                // line 157
                yield Twig\Extension\EscaperExtension::escape($this->env, Twig\Extension\CoreExtension::joinFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "main", [], "any", false, false, false, 157), "tags", [], "any", false, false, false, 157), ","), "html", null, true);
                yield "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            yield "\t\t\t\t\t<div class=\"col-12 d-flex row flex-column justify-content-center align-items-center \">
\t\t\t\t\t\t<h6 id=\"noTimelineEvents\" class=\"col-6 py-5 my-5 accent-bg-dark text-center mx-auto text-secondary border border-secondary rounded-3\" style=\"display: none; z-index: 100;\">
\t\t\t\t\t\t\tNo events available.
\t\t\t\t\t\t</h6>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t";
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
        // line 171
        yield "\t\t<div class=\"row d-flex container-fluid flex-column justify-content-center align-items-center mb-5 p-0 m-0\">
\t\t\t<button class=\"btn btn-outline-success bg-dark shadow-custom col-3 text-center m-0 py-3\" onclick=\"window.location.href='/#contact'\">
\t\t\t\tLet's build together!</button>
\t\t</div>

\t</div>

\t<script src=\"";
        // line 178
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/timeLine.js"), "html", null, true);
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
        return "timeline_cv/index.html.twig";
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
        return array (  535 => 178,  526 => 171,  503 => 161,  485 => 157,  481 => 155,  477 => 153,  468 => 150,  461 => 148,  457 => 147,  454 => 146,  450 => 145,  446 => 143,  444 => 142,  440 => 140,  434 => 136,  425 => 134,  421 => 133,  416 => 131,  404 => 124,  400 => 122,  398 => 121,  394 => 119,  388 => 116,  385 => 115,  383 => 114,  378 => 112,  373 => 110,  363 => 105,  359 => 103,  342 => 102,  336 => 99,  329 => 97,  326 => 96,  323 => 95,  306 => 94,  303 => 93,  295 => 87,  293 => 86,  286 => 81,  266 => 79,  257 => 78,  239 => 77,  236 => 75,  233 => 74,  230 => 72,  224 => 71,  221 => 70,  218 => 69,  215 => 68,  212 => 67,  209 => 66,  206 => 65,  201 => 64,  198 => 62,  196 => 61,  188 => 55,  178 => 53,  171 => 52,  167 => 51,  155 => 41,  149 => 40,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  129 => 35,  124 => 34,  122 => 33,  116 => 29,  114 => 28,  92 => 8,  82 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tTimeline CV
{% endblock %}

{% block body %}

\t<style>
\t\t.timeline-container {
\t\t\tposition: relative; /* Ensure positioning context for pseudo-elements */
\t\t}

\t\t.timeline-container:before {
\t\t\tcontent: '';
\t\t\tposition: absolute;
\t\t\tleft: 48.5vw;
\t\t\ttop: 0;
\t\t\tbottom: 0;
\t\t\twidth: 1vw;
\t\t\tbackground: #ccc;
\t\t\tbox-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
\t\t\tbackground: linear-gradient(0deg, #1a7c43 0%, #daa715 100%);
\t\t}
\t</style>

\t<div id=\"timeline\" class=\"row m-0 p-0 accent-bg-dark\" style=\"min-height: 75vh;\">
\t\t{% include 'index/IndexHeader.twig' with {'upRef': 'aboutme', 'textRef': 'timeline', 'headText': 'timeline', 'darkbg': true} %}

\t\t<div class=\"col-12 row fixed-top py-2 position-sticky bg-main-dark rounded-4\" style=\"z-index: 1042;\">

\t\t\t<div class=\"col-md-8 m-0 p-0\">
\t\t\t\t{% set all_tags = [] %}
\t\t\t\t{% for event in timeline_events %}
\t\t\t\t\t{% for tag in event.main.tags %}
\t\t\t\t\t\t{% if tag not in all_tags %}
\t\t\t\t\t\t\t{% set all_tags = all_tags|merge([tag]) %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h6 class=\"col-auto \">Filter by Tags:</h6>

\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"options-outlined\" id=\"success-outlined\" autocomplete=\"off\" checked>
\t\t\t\t\t<label class=\"col-auto btn btn-outline-success\" for=\"success-outlined\" onclick=\"selectAllTags(true)\">All</label>

\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"options-outlined\" id=\"danger-outlined\" autocomplete=\"off\">
\t\t\t\t\t<label class=\"col-auto btn btn-outline-danger\" for=\"danger-outlined\" onclick=\"selectAllTags(false)\">None</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for tag in all_tags %}
\t\t\t\t\t\t<input type=\"checkbox\" class=\"col-auto btn-check\" id=\"btn-check-outlined-{{ tag }}\" name=\"tags\" value=\"{{ tag }}\" checked>
\t\t\t\t\t\t<label class=\"col-auto btn btn-outline-main\" for=\"btn-check-outlined-{{ tag }}\">{{ tag }}</label><br>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 m-0 p-0\">
\t\t\t\t<h6>Filter by Year:</h6>
\t\t\t\t<div class=\"btn-group\" role=\"group\" aria-label=\"Year buttons\">
\t\t\t\t\t{% set years = [] %}

\t\t\t\t\t{# Loop through events to gather unique years from both start and end dates #}
\t\t\t\t\t{% for event in timeline_events %}
\t\t\t\t\t\t{% if event.main.startDate|date('Y') not in years %}
\t\t\t\t\t\t\t{% set years = years|merge([event.main.startDate|date('Y')]) %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if event.main.endDate|date('Y') not in years %}
\t\t\t\t\t\t\t{% set years = years|merge([event.main.endDate|date('Y')]) %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{# Sort the years in ascending order #}
\t\t\t\t\t{% set years = years|sort %}

\t\t\t\t\t{# Generate radio buttons for each year #}
\t\t\t\t\t{% for year in years %}
\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio{{ loop.index }}\" autocomplete=\"off\" {% if loop.index == 1 %} checked {% endif %}>
\t\t\t\t\t\t<label class=\"btn btn-outline-main\" for=\"btnradio{{ loop.index }}\" onclick=\"showEvents('{{ year }}')\">{{ year }}</label>
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t{% if years is empty %}

\t\t\t<h3 class=\"col-6 my-5 accent-bg-dark text-center mx-auto py-3 text-warning border border-warning rounded-3\">
\t\t\t\tNo events available.
\t\t\t</h3>

\t\t{% endif %}

\t\t{% for year in years %}
\t\t\t{% set events_in_year = timeline_events|filter(e => (e.main.startDate|date('Y') == year or e.main.endDate|date('Y') == year)) %}

\t\t\t<div class=\"events-wrapper container-fluid row justify-content-center align-items-center m-0\" id=\"events-{{ year }}\" style=\"display: {{ loop.first ? 'block' : 'none' }};\">
\t\t\t\t<div class=\"row justify-content-center mt-4 m-0\">
\t\t\t\t\t<h4 class=\"col-auto bg-dark text-center shadow-custom m-0 px-5 py-3 text-warning border border-warning rounded-3\">{{ year }}</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"timeline-container row justify-content-center p-0 m-0 \">
\t\t\t\t\t{% for event in events_in_year %}
\t\t\t\t\t\t<div class=\" col-12 row justify-content-center text-white\">

\t\t\t\t\t\t\t<div class=\"timeline-event card rounded-4 m-5 shadow-custom bg-main-gradient{% if loop.index  % 2 == 0 %}-alter{% endif %}\" style=\"width: 36rem; max-width: 90vw;\">

\t\t\t\t\t\t\t\t<div class=\"card-body row m-0 justify-content-center text-center\">

\t\t\t\t\t\t\t\t\t<h5 class=\"col-auto card-title\">
\t\t\t\t\t\t\t\t\t\t<strong class='accent-color'>{{ event.main.startDate|date('F-Y') ~ ' - ' ~ event.main.endDate|date('F-Y') }}</strong>
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<h3 class=\"col-auto card-title\">{{ event.main.name }}</h3>

\t\t\t\t\t\t\t\t\t{% if event.main.description is defined %}
\t\t\t\t\t\t\t\t\t\t<div class=\"p-2 bg-dark rounded-3\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"m-0\">{{ event.main.description }}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t{% if event.main.bullets is defined and event.main.bullets|length > 0 %}
\t\t\t\t\t\t\t\t\t\t<div class=\"row my-2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"custom-btn rounded-2 p-1 m-2 accent-bg text-white\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseEvent{{ event.main.id }}\" aria-expanded=\"false\" aria-controls=\"collapseEvent{{ event.main.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tMore Info
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col collapse\" id=\"collapseEvent{{ event.main.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% for point in event.main.bullets %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-group-item p-0 m-0\">{{ point }}</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t\t{% if event.projects is defined %}
\t\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\">Asociated projects:</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t{% for project in event.projects %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-4 d-flex justify-content-center bg-dark mx-auto shadow\" style=\"overflow: hidden; aspect-ratio: 1; cursor: pointer; max-width: 7rem;\" onclick=\"window.location.href='{{ path('app_project_detail', {'id': project.id}) }}'\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ project.iconref }}\" style=\"height: 100%; width: auto;\" alt=\"{{ project.name }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"card-title\">{{project.name}}</h6>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"tags\" style=\"display: none;\">{{ event.main.tags|join(',') }}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<div class=\"col-12 d-flex row flex-column justify-content-center align-items-center \">
\t\t\t\t\t\t<h6 id=\"noTimelineEvents\" class=\"col-6 py-5 my-5 accent-bg-dark text-center mx-auto text-secondary border border-secondary rounded-3\" style=\"display: none; z-index: 100;\">
\t\t\t\t\t\t\tNo events available.
\t\t\t\t\t\t</h6>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t{% endfor %}
\t\t<div class=\"row d-flex container-fluid flex-column justify-content-center align-items-center mb-5 p-0 m-0\">
\t\t\t<button class=\"btn btn-outline-success bg-dark shadow-custom col-3 text-center m-0 py-3\" onclick=\"window.location.href='/#contact'\">
\t\t\t\tLet's build together!</button>
\t\t</div>

\t</div>

\t<script src=\"{{ asset('js/timeLine.js') }}\"></script>
{% endblock %}
", "timeline_cv/index.html.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\timeline_cv\\index.html.twig");
    }
}
