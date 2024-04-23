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

/* projectDetail.twig */
class __TwigTemplate_7e594f7bae7ae1cbb343e9ed30b0b551 extends Template
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
            'foot' => [$this, 'block_foot'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projectDetail.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projectDetail.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projectDetail.twig", 1);
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
        yield "\t";
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 8
        yield "\t";
        $context["buttons"] = [["id" => "#aboutme", "label" => "About Me"], ["id" => "#timeline", "label" => "CV"], ["id" => "#projects", "label" => "Projects"]];
        // line 13
        yield "\t";
        yield from         $this->loadTemplate("pausemenu.html.twig", "projectDetail.twig", 13)->unwrap()->yield(CoreExtension::arrayMerge($context, ["buttons" => (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 13, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        yield "\t<hr>
\t<div class=\"mx-3\">
\t\t<div class=\"card bg-dark\">
\t\t\t<div class=\"card-header text-center bg-main-dark\">
\t\t\t\t<h3>";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        yield "</h3>
\t\t\t</div>
\t\t\t<div class=\"card-body bg-dark d-flex justify-content-center align-items-center\" style=\"overflow: hidden;\">
\t\t\t\t<div>
\t\t\t\t\t";
        // line 25
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 25, $this->source); })()), "fileref", [], "any", false, false, false, 25);
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<hr>

\t\t<div class=\"row\">
\t\t\t<section id=\"comments container bg-dark\" class=\"col-md-4\">
\t\t\t\t<div class=\"card bg-dark\">
\t\t\t\t\t<div class=\"card-body bg-dark\">
\t\t\t\t\t\t<h3>";
        // line 36
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        yield "</h3>
\t\t\t\t\t\t";
        // line 37
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 37, $this->source); })()), "iconref", [], "any", false, false, false, 37))) {
            // line 38
            yield "\t\t\t\t\t\t\t<img src=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 38, $this->source); })()), "iconref", [], "any", false, false, false, 38), "html", null, true);
            yield "\" alt=\"Project Icon\" class=\"img-fluid\" style=\"max-width: 50px;\">
\t\t\t\t\t\t";
        }
        // line 40
        yield "\t\t\t\t\t\t<p>Milestone:
\t\t\t\t\t\t\t";
        // line 41
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 41, $this->source); })()), "mileStone", [], "any", false, false, false, 41)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 41, $this->source); })()), "mileStone", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true)) : (yield "No milestone associated."));
        yield "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<div id=\"comments container bg-dark\" class=\"col-md-8\">
\t\t\t\t<div class=\"card bg-dark\">
\t\t\t\t\t<div class=\"card-header bg-dark m-3 text-center\">
\t\t\t\t\t\t<h5>COMMENTS</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body bg-dark\">
\t\t\t\t\t\t";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            yield "\t\t\t\t\t\t\t<form action=\"";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_create", ["projectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"row align-items-center mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong\" src=\"";
            // line 56
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "avatar", [], "any", false, false, false, 56))) {
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "avatar", [], "any", false, false, false, 56), "html", null, true);
            } else {
                yield "https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg";
            }
            yield "\" alt=\"avatar\" width=\"40vw\" height=\"40vw\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Add a comment\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
        } else {
            // line 67
            yield "\t\t\t\t\t\t\t<p>Please
\t\t\t\t\t\t\t\t<a href=\"";
            // line 68
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">log in</a>
\t\t\t\t\t\t\t\tto leave a comment.</p>
\t\t\t\t\t\t";
        }
        // line 71
        yield "
\t\t\t\t\t\t<!-- Display comments -->
\t\t\t\t\t\t";
        // line 73
        if ((isset($context["commentsWithSubcomments"]) || array_key_exists("commentsWithSubcomments", $context) ? $context["commentsWithSubcomments"] : (function () { throw new RuntimeError('Variable "commentsWithSubcomments" does not exist.', 73, $this->source); })())) {
            // line 74
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentsWithSubcomments"]) || array_key_exists("commentsWithSubcomments", $context) ? $context["commentsWithSubcomments"] : (function () { throw new RuntimeError('Variable "commentsWithSubcomments" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentWithSubcomments"]) {
                // line 75
                yield "\t\t\t\t\t\t\t\t<div class=\"d-flex flex-start my-3\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong me-3\" src=\"";
                // line 76
                if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 76), "user", [], "any", false, false, false, 76), "avatar", [], "any", false, false, false, 76))) {
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 76), "user", [], "any", false, false, false, 76), "avatar", [], "any", false, false, false, 76), "html", null, true);
                } else {
                    yield "https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg";
                }
                yield "\" alt=\"avatar\" width=\"40vw\" height=\"40vw\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 flex-shrink-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 80
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 80), "user", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">-</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<a data-bs-toggle=\"collapse\" href=\"#collapseComments";
                // line 83
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), "html", null, true);
                yield "\" aria-expanded=\"false\" aria-controls=\"collapseComments";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply fa-xs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">reply</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-0\">";
                // line 88
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 88), "textdata", [], "any", false, false, false, 88), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t\t";
                // line 89
                if (CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "subComments", [], "any", false, false, false, 89)) {
                    // line 90
                    yield "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "subComments", [], "any", false, false, false, 90));
                    foreach ($context['_seq'] as $context["_key"] => $context["subComment"]) {
                        // line 91
                        yield "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-start my-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"me-3\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong me-3\" src=\"";
                        // line 93
                        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 93), "user", [], "any", false, false, false, 93), "avatar", [], "any", false, false, false, 93))) {
                            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 93), "user", [], "any", false, false, false, 93), "avatar", [], "any", false, false, false, 93), "html", null, true);
                        } else {
                            yield "https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg";
                        }
                        yield "\" alt=\"avatar\" width=\"40vh\" height=\"40vw\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 flex-shrink-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 99
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subComment"], "user", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), "html", null, true);
                        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">-</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 104
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["subComment"], "textdata", [], "any", false, false, false, 104), "html", null, true);
                        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subComment'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    yield "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 111
                yield "\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseComments";
                yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 112
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112)) {
                    // line 113
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                    yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_create", ["projectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)]), "html", null, true);
                    yield "\" method=\"post\" class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong\" src=\"";
                    // line 116
                    if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "avatar", [], "any", false, false, false, 116))) {
                        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "avatar", [], "any", false, false, false, 116), "html", null, true);
                    } else {
                        yield "https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg";
                    }
                    yield "\" alt=\"avatar\" width=\"65\" height=\"65\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Add a comment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"parentId\" value=\"";
                    // line 121
                    yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
                    yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 128
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<h5>Please
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 129
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    yield "\">log in</a>
\t\t\t\t\t\t\t\t\t\t\t\t\tto leave a comment.
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 133
                yield "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentWithSubcomments'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "\t\t\t\t\t\t";
        } else {
            // line 138
            yield "\t\t\t\t\t\t\t<p>No comments yet.</p>
\t\t\t\t\t\t";
        }
        // line 140
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<hr>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 150
    public function block_foot($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "foot"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "foot"));

        // line 151
        yield "\t<footer class=\"bg-dark text-white text-center py-3\" style=\"min-height: 25vh;\">
\t\t<p>&copy; 2024 . All Rights Reserved.</p>
\t</footer>
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
        return "projectDetail.twig";
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
        return array (  396 => 151,  386 => 150,  367 => 140,  363 => 138,  360 => 137,  351 => 133,  344 => 129,  341 => 128,  331 => 121,  319 => 116,  312 => 113,  310 => 112,  305 => 111,  302 => 110,  290 => 104,  282 => 99,  269 => 93,  265 => 91,  260 => 90,  258 => 89,  254 => 88,  244 => 83,  238 => 80,  227 => 76,  224 => 75,  219 => 74,  217 => 73,  213 => 71,  207 => 68,  204 => 67,  186 => 56,  179 => 53,  177 => 52,  163 => 41,  160 => 40,  154 => 38,  152 => 37,  148 => 36,  134 => 25,  127 => 21,  121 => 17,  111 => 16,  99 => 13,  96 => 8,  86 => 7,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{ project.name }}
{% endblock %}

{% block head %}
\t{% set buttons = [
        { id: '#aboutme', label: 'About Me' },
        { id: '#timeline', label: 'CV' },
        { id: '#projects', label: 'Projects' }
    ] %}
\t{% include 'pausemenu.html.twig' with {'buttons': buttons} %}
{% endblock %}

{% block body %}
\t<hr>
\t<div class=\"mx-3\">
\t\t<div class=\"card bg-dark\">
\t\t\t<div class=\"card-header text-center bg-main-dark\">
\t\t\t\t<h3>{{ project.name }}</h3>
\t\t\t</div>
\t\t\t<div class=\"card-body bg-dark d-flex justify-content-center align-items-center\" style=\"overflow: hidden;\">
\t\t\t\t<div>
\t\t\t\t\t{{ project.fileref|raw }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<hr>

\t\t<div class=\"row\">
\t\t\t<section id=\"comments container bg-dark\" class=\"col-md-4\">
\t\t\t\t<div class=\"card bg-dark\">
\t\t\t\t\t<div class=\"card-body bg-dark\">
\t\t\t\t\t\t<h3>{{ project.name }}</h3>
\t\t\t\t\t\t{% if project.iconref is not empty %}
\t\t\t\t\t\t\t<img src=\"{{ project.iconref }}\" alt=\"Project Icon\" class=\"img-fluid\" style=\"max-width: 50px;\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<p>Milestone:
\t\t\t\t\t\t\t{{ project.mileStone ? project.mileStone.name : 'No milestone associated.' }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<div id=\"comments container bg-dark\" class=\"col-md-8\">
\t\t\t\t<div class=\"card bg-dark\">
\t\t\t\t\t<div class=\"card-header bg-dark m-3 text-center\">
\t\t\t\t\t\t<h5>COMMENTS</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body bg-dark\">
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<form action=\"{{ path('comment_create', {'projectId': project.id}) }}\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"row align-items-center mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong\" src=\"{% if app.user.avatar is not null %}{{ app.user.avatar }}{% else %}https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg{% endif %}\" alt=\"avatar\" width=\"40vw\" height=\"40vw\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Add a comment\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>Please
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">log in</a>
\t\t\t\t\t\t\t\tto leave a comment.</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<!-- Display comments -->
\t\t\t\t\t\t{% if commentsWithSubcomments %}
\t\t\t\t\t\t\t{% for commentWithSubcomments in commentsWithSubcomments %}
\t\t\t\t\t\t\t\t<div class=\"d-flex flex-start my-3\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong me-3\" src=\"{% if commentWithSubcomments.parentComment.user.avatar is not null %}{{ commentWithSubcomments.parentComment.user.avatar }}{% else %}https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg{% endif %}\" alt=\"avatar\" width=\"40vw\" height=\"40vw\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 flex-shrink-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ commentWithSubcomments.parentComment.user.name }}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">-</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<a data-bs-toggle=\"collapse\" href=\"#collapseComments{{ commentWithSubcomments.parentComment.id }}\" aria-expanded=\"false\" aria-controls=\"collapseComments{{ commentWithSubcomments.parentComment.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply fa-xs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">reply</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-0\">{{ commentWithSubcomments.parentComment.textdata }}</p>
\t\t\t\t\t\t\t\t\t\t{% if commentWithSubcomments.subComments %}
\t\t\t\t\t\t\t\t\t\t\t{% for subComment in commentWithSubcomments.subComments %}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-start my-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"me-3\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong me-3\" src=\"{% if commentWithSubcomments.parentComment.user.avatar is not null %}{{ commentWithSubcomments.parentComment.user.avatar }}{% else %}https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg{% endif %}\" alt=\"avatar\" width=\"40vh\" height=\"40vw\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 flex-shrink-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ subComment.user.name }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">-</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ subComment.textdata }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseComments{{ commentWithSubcomments.parentComment.id }}\">
\t\t\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"{{ path('comment_create', {'projectId': project.id}) }}\" method=\"post\" class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong\" src=\"{% if app.user.avatar is not null %}{{ app.user.avatar }}{% else %}https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg{% endif %}\" alt=\"avatar\" width=\"65\" height=\"65\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Add a comment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"parentId\" value=\"{{ commentWithSubcomments.parentComment.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Please
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\">log in</a>
\t\t\t\t\t\t\t\t\t\t\t\t\tto leave a comment.
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<p>No comments yet.</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<hr>

{% endblock %}

{% block foot %}
\t<footer class=\"bg-dark text-white text-center py-3\" style=\"min-height: 25vh;\">
\t\t<p>&copy; 2024 . All Rights Reserved.</p>
\t</footer>
{% endblock %}
", "projectDetail.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\projectDetail.twig");
    }
}
