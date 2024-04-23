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

/* index/cookies.twig */
class __TwigTemplate_7ed8b944db916f59c0b730ff93c2c558 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/cookies.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/cookies.twig"));

        yield "<ul class=\" ms-2 row\">

\t<li>
\t\t<h1>Cookie Policy</h1>
\t\t<p>This website uses cookies to ensure you get the best experience on our website.</p>
\t\t<h2>What Are Cookies?</h2>
\t\t<p>Cookies are small text files that are stored on your computer or mobile device when you visit a website. They allow the website to recognize your device and remember certain information about your visit.</p>
\t</li>
\t<li>
\t\t<h2>How We Use Cookies</h2>
\t</li>
\t<p>We use cookies for a variety of purposes, including:</p>
\t<ul>
\t\t<li>To provide a personalized experience for our users.</li>
\t\t<li>To analyze how users interact with our website so we can improve its performance and functionality.</li>
\t\t<li>To display targeted advertisements to users who have visited our website.</li>
\t</ul>
\t<li>
\t\t<h2>Your Choices Regarding Cookies</h2>
\t\t<p>You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser settings to decline cookies if you prefer. However, this may prevent you from taking full advantage of the website.</p>
\t</li>
\t<li>
\t\t<h2>Changes to Our Cookie Policy</h2>
\t\t<p>We may update our Cookie Policy from time to time. We will notify you of any changes by posting the new Cookie Policy on this page.</p>
\t</li>
\t<li>
\t\t<h2>Contact Us</h2>
\t</li>
\t<li>
\t\t<p>If you have any questions about our Cookie Policy, please contact us.</p>
\t</li>
\t<li>
\t\t<p>
\t\t\t<a href=\"/#contact\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Contact Us</a>
\t\t</p>
\t</li>
</ul>
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
        return "index/cookies.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\" ms-2 row\">

\t<li>
\t\t<h1>Cookie Policy</h1>
\t\t<p>This website uses cookies to ensure you get the best experience on our website.</p>
\t\t<h2>What Are Cookies?</h2>
\t\t<p>Cookies are small text files that are stored on your computer or mobile device when you visit a website. They allow the website to recognize your device and remember certain information about your visit.</p>
\t</li>
\t<li>
\t\t<h2>How We Use Cookies</h2>
\t</li>
\t<p>We use cookies for a variety of purposes, including:</p>
\t<ul>
\t\t<li>To provide a personalized experience for our users.</li>
\t\t<li>To analyze how users interact with our website so we can improve its performance and functionality.</li>
\t\t<li>To display targeted advertisements to users who have visited our website.</li>
\t</ul>
\t<li>
\t\t<h2>Your Choices Regarding Cookies</h2>
\t\t<p>You can choose to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser settings to decline cookies if you prefer. However, this may prevent you from taking full advantage of the website.</p>
\t</li>
\t<li>
\t\t<h2>Changes to Our Cookie Policy</h2>
\t\t<p>We may update our Cookie Policy from time to time. We will notify you of any changes by posting the new Cookie Policy on this page.</p>
\t</li>
\t<li>
\t\t<h2>Contact Us</h2>
\t</li>
\t<li>
\t\t<p>If you have any questions about our Cookie Policy, please contact us.</p>
\t</li>
\t<li>
\t\t<p>
\t\t\t<a href=\"/#contact\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Contact Us</a>
\t\t</p>
\t</li>
</ul>
", "index/cookies.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\index\\cookies.twig");
    }
}
