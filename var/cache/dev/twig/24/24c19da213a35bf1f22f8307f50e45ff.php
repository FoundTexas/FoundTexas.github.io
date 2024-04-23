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

/* projectDetail.twig */
class __TwigTemplate_c0b428da00d4e2c19bda967ebcfd2730 extends Template
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

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "\t";
        $context["buttons"] = [["id" => "#aboutme", "label" => "About Me"], ["id" => "#timeline", "label" => "CV"], ["id" => "#projects", "label" => "Projects"]];
        // line 13
        echo "\t";
        $this->loadTemplate("pausemenu.html.twig", "projectDetail.twig", 13)->display(twig_array_merge($context, ["buttons" => (isset($context["buttons"]) || array_key_exists("buttons", $context) ? $context["buttons"] : (function () { throw new RuntimeError('Variable "buttons" does not exist.', 13, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "\t<hr>
\t<div class=\"mx-3\">
\t\t<div class=\"card bg-dark\">
\t\t\t<div class=\"card-header text-center main-bg-dark\">
\t\t\t\t<h3>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 21, $this->source); })()), "name", [], "any", false, false, false, 21), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"card-body bg-dark d-flex justify-content-center align-items-center\" style=\"overflow: hidden;\">
\t\t\t\t<div>
\t\t\t\t\t";
        // line 25
        echo twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 25, $this->source); })()), "fileref", [], "any", false, false, false, 25);
        echo "
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t";
        // line 37
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 37, $this->source); })()), "iconref", [], "any", false, false, false, 37))) {
            // line 38
            echo "\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 38, $this->source); })()), "iconref", [], "any", false, false, false, 38), "html", null, true);
            echo "\" alt=\"Project Icon\" class=\"img-fluid\" style=\"max-width: 50px;\">
\t\t\t\t\t\t";
        }
        // line 40
        echo "\t\t\t\t\t\t<p>Milestone:
\t\t\t\t\t\t\t";
        // line 41
        ((twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 41, $this->source); })()), "mileStone", [], "any", false, false, false, 41)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 41, $this->source); })()), "mileStone", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true))) : (print ("No milestone associated.")));
        echo "</p>
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            echo "\t\t\t\t\t\t\t<form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_create", ["projectId" => twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<div class=\"row align-items-center mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong\" src=\"";
            // line 56
            if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "avatar", [], "any", false, false, false, 56))) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "avatar", [], "any", false, false, false, 56), "html", null, true);
            } else {
                echo "https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg";
            }
            echo "\" alt=\"avatar\" width=\"40vw\" height=\"40vw\">
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
            echo "\t\t\t\t\t\t\t<p>Please
\t\t\t\t\t\t\t\t<a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">log in</a>
\t\t\t\t\t\t\t\tto leave a comment.</p>
\t\t\t\t\t\t";
        }
        // line 71
        echo "
\t\t\t\t\t\t<!-- Display comments -->
\t\t\t\t\t\t";
        // line 73
        if ((isset($context["commentsWithSubcomments"]) || array_key_exists("commentsWithSubcomments", $context) ? $context["commentsWithSubcomments"] : (function () { throw new RuntimeError('Variable "commentsWithSubcomments" does not exist.', 73, $this->source); })())) {
            // line 74
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commentsWithSubcomments"]) || array_key_exists("commentsWithSubcomments", $context) ? $context["commentsWithSubcomments"] : (function () { throw new RuntimeError('Variable "commentsWithSubcomments" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["commentWithSubcomments"]) {
                // line 75
                echo "\t\t\t\t\t\t\t\t<div class=\"d-flex flex-start my-3\">
\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong me-3\" src=\"";
                // line 76
                if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 76), "user", [], "any", false, false, false, 76), "avatar", [], "any", false, false, false, 76))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 76), "user", [], "any", false, false, false, 76), "avatar", [], "any", false, false, false, 76), "html", null, true);
                } else {
                    echo "https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg";
                }
                echo "\" alt=\"avatar\" width=\"40vw\" height=\"40vw\">
\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 flex-shrink-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 80), "user", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">-</span>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t<a data-bs-toggle=\"collapse\" href=\"#collapseComments";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\" aria-expanded=\"false\" aria-controls=\"collapseComments";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-reply fa-xs\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">reply</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-0\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 88), "textdata", [], "any", false, false, false, 88), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t";
                // line 89
                if (twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "subComments", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "subComments", [], "any", false, false, false, 90));
                    foreach ($context['_seq'] as $context["_key"] => $context["subComment"]) {
                        // line 91
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-start my-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"me-3\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong me-3\" src=\"";
                        // line 93
                        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 93), "user", [], "any", false, false, false, 93), "avatar", [], "any", false, false, false, 93))) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 93), "user", [], "any", false, false, false, 93), "avatar", [], "any", false, false, false, 93), "html", null, true);
                        } else {
                            echo "https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg";
                        }
                        echo "\" alt=\"avatar\" width=\"40vh\" height=\"40vw\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1 flex-shrink-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 99
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subComment"], "user", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">-</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 104
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subComment"], "textdata", [], "any", false, false, false, 104), "html", null, true);
                        echo "
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
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 111
                echo "\t\t\t\t\t\t\t\t\t\t<div class=\"collapse\" id=\"collapseComments";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 112
                if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112)) {
                    // line 113
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<form action=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment_create", ["projectId" => twig_get_attribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)]), "html", null, true);
                    echo "\" method=\"post\" class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle shadow-1-strong\" src=\"";
                    // line 116
                    if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "avatar", [], "any", false, false, false, 116))) {
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "avatar", [], "any", false, false, false, 116), "html", null, true);
                    } else {
                        echo "https://t3.ftcdn.net/jpg/05/16/27/58/360_F_516275801_f3Fsp17x6HQK0xQgDQEELoTuERO4SsWV.jpg";
                    }
                    echo "\" alt=\"avatar\" width=\"65\" height=\"65\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Add a comment\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"parentId\" value=\"";
                    // line 121
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commentWithSubcomments"], "parentComment", [], "any", false, false, false, 121), "id", [], "any", false, false, false, 121), "html", null, true);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 128
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<h5>Please
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 129
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                    echo "\">log in</a>
\t\t\t\t\t\t\t\t\t\t\t\t\tto leave a comment.
\t\t\t\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 133
                echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentWithSubcomments'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "\t\t\t\t\t\t";
        } else {
            // line 138
            echo "\t\t\t\t\t\t\t<p>No comments yet.</p>
\t\t\t\t\t\t";
        }
        // line 140
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<hr>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        echo "\t<footer class=\"bg-dark text-white text-center py-3\" style=\"min-height: 25vh;\">
\t\t<p>&copy; 2024 . All Rights Reserved.</p>
\t</footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  392 => 151,  382 => 150,  364 => 140,  360 => 138,  357 => 137,  348 => 133,  341 => 129,  338 => 128,  328 => 121,  316 => 116,  309 => 113,  307 => 112,  302 => 111,  299 => 110,  287 => 104,  279 => 99,  266 => 93,  262 => 91,  257 => 90,  255 => 89,  251 => 88,  241 => 83,  235 => 80,  224 => 76,  221 => 75,  216 => 74,  214 => 73,  210 => 71,  204 => 68,  201 => 67,  183 => 56,  176 => 53,  174 => 52,  160 => 41,  157 => 40,  151 => 38,  149 => 37,  145 => 36,  131 => 25,  124 => 21,  118 => 17,  108 => 16,  97 => 13,  94 => 8,  84 => 7,  71 => 4,  61 => 3,  38 => 1,);
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
\t\t\t<div class=\"card-header text-center main-bg-dark\">
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
