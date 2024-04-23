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

/* index/IndexHeader.twig */
class __TwigTemplate_d04568ac0712ed9563430e3b3f75e573 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/IndexHeader.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/IndexHeader.twig"));

        // line 2
        yield "
<div class=\"row m-0 p-0 justify-content-center ";
        // line 3
        if ((isset($context["darkbg"]) || array_key_exists("darkbg", $context) ? $context["darkbg"] : (function () { throw new RuntimeError('Variable "darkbg" does not exist.', 3, $this->source); })())) {
            yield " bg-dark rounded-5 border border-light ";
        }
        yield "\">
\t<a class=\"col-auto pt-1\" href=\"#";
        // line 4
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["textRef"]) || array_key_exists("textRef", $context) ? $context["textRef"] : (function () { throw new RuntimeError('Variable "textRef" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\">
\t\t<h6 class=\"text-center text-capitalize mb-4 white-text d-block d-md-none\">";
        // line 5
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["headText"]) || array_key_exists("headText", $context) ? $context["headText"] : (function () { throw new RuntimeError('Variable "headText" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "</h6>
\t\t<h4 class=\"text-center text-capitalize mb-4 white-text d-none d-md-block\">";
        // line 6
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["headText"]) || array_key_exists("headText", $context) ? $context["headText"] : (function () { throw new RuntimeError('Variable "headText" does not exist.', 6, $this->source); })()), "html", null, true);
        yield "</h4>
\t</a>
</div>
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
        return "index/IndexHeader.twig";
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
        return array (  61 => 6,  57 => 5,  53 => 4,  47 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/contact.html.twig #}

<div class=\"row m-0 p-0 justify-content-center {% if darkbg %} bg-dark rounded-5 border border-light {% endif %}\">
\t<a class=\"col-auto pt-1\" href=\"#{{ textRef }}\">
\t\t<h6 class=\"text-center text-capitalize mb-4 white-text d-block d-md-none\">{{ headText }}</h6>
\t\t<h4 class=\"text-center text-capitalize mb-4 white-text d-none d-md-block\">{{ headText }}</h4>
\t</a>
</div>
", "index/IndexHeader.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\index\\IndexHeader.twig");
    }
}
