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

/* contact.twig */
class __TwigTemplate_947460b43d5bc634ed4ad4528d09c051 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact.twig"));

        // line 2
        yield "
<section id=\"contact\" class=\"accent-bg-dark\" style=\"min-height: 100vh;\">
    ";
        // line 4
        yield from         $this->loadTemplate("index/IndexHeader.twig", "contact.twig", 4)->unwrap()->yield(CoreExtension::arrayMerge($context, ["upRef" => "projects", "textRef" => "contact", "headText" => "Let's Chat! 🐼", "darkbg" => true]));
        // line 5
        yield "
    <div class=\"container px-3 py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <form id=\"contactForm\" action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_email");
        yield "\" method=\"post\" class=\"needs-validation\" novalidate>
                    <div class=\"mb-3\">
                        <label for=\"name\" class=\"form-label\">Name:</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                        <div class=\"invalid-feedback\">Please enter your name.</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">Email:</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                        <div class=\"invalid-feedback\">Please enter a valid email address.</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"message\" class=\"form-label\">Message:</label>
                        <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"4\" required></textarea>
                        <div class=\"invalid-feedback\">Please enter a message.</div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
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
        return "contact.twig";
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
        return array (  56 => 9,  50 => 5,  48 => 4,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/contact.html.twig #}

<section id=\"contact\" class=\"accent-bg-dark\" style=\"min-height: 100vh;\">
    {% include 'index/IndexHeader.twig' with {'upRef': 'projects', 'textRef': 'contact', 'headText': \"Let's Chat! 🐼\", 'darkbg': true} %}

    <div class=\"container px-3 py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <form id=\"contactForm\" action=\"{{ path('app_email') }}\" method=\"post\" class=\"needs-validation\" novalidate>
                    <div class=\"mb-3\">
                        <label for=\"name\" class=\"form-label\">Name:</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" required>
                        <div class=\"invalid-feedback\">Please enter your name.</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">Email:</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" required>
                        <div class=\"invalid-feedback\">Please enter a valid email address.</div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"message\" class=\"form-label\">Message:</label>
                        <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"4\" required></textarea>
                        <div class=\"invalid-feedback\">Please enter a message.</div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
", "contact.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\contact.twig");
    }
}
