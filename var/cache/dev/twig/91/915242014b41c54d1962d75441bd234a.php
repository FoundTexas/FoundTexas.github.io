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

/* pdf_generator/index.html.twig */
class __TwigTemplate_0229dc132c6b10b1af170094d9722f14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf_generator/index.html.twig"));

        // line 1
        yield "<style type=\"text/css\">
\t.tg {
\t\tborder-collapse: collapse;
\t\tborder-spacing: 0;
\t}
\t.tg td {
\t\tborder-color: black;
\t\tborder-style: solid;
\t\tborder-width: 1px;
\t\tfont-family: Arial, sans-serif;
\t\tfont-size: 14px;
\t\toverflow: hidden;
\t\tpadding: 10px 5px;
\t\tword-break: normal;
\t}
\t.tg th {
\t\tborder-color: black;
\t\tborder-style: solid;
\t\tborder-width: 1px;
\t\tfont-family: Arial, sans-serif;
\t\tfont-size: 14px;
\t\tfont-weight: normal;
\t\toverflow: hidden;
\t\tpadding: 10px 5px;
\t\tword-break: normal;
\t}
\t.tg .tg-0lax {
\t\ttext-align: center;
\t\tvertical-align: top
\t}
</style>

<table class=\"tg\" width=\"100%\" border=\"1\">
\t<thead></thead>
\t<tbody>
\t\t<tr>
\t\t\t<td colspan=\"5\">

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t<img src=\"";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["logo"]) || array_key_exists("logo", $context) ? $context["logo"] : (function () { throw new RuntimeError('Variable "logo" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "\" alt=\"logo\" style=\"height:20px; margin: 3;\">
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left; margin-left: 20%;\">
\t\t\t\t\t\t<h4 style=\"margin: 0;\">Orden de Laboratorio</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right; margin-right:5%;\">
\t\t\t\t\t\t<h4 style=\"margin: 0;\">PRO-19-A</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t\t<h5 style=\"margin: 3; text-align: right;\">Folio Ticket:</h5>

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Sucursal:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left; margin: 0px 30% 0px;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Procedencia:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Fecha:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td colspan=\"5\">

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Titular:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Edad:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t\t<h5 style=\"margin: 3; text-align: left;\">Beneficiario (*1):</h5>

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">N° (*1):</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Unidad:(*z):</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th class=\"tg-0lax\" style=\"width: 5%;\"></th>
\t\t\t<th class=\"tg-0lax\" style=\"width: 20%;\">Esfera</th>
\t\t\t<th class=\"tg-0lax\" style=\"width: 20%;\">Cilindro</th>
\t\t\t<th class=\"tg-0lax\" style=\"width: 20%;\">Eje</th>
\t\t\t<th class=\"tg-0lax\" style=\"width: 35%;\">Add</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"tg-0lax\">OD</td>
\t\t\t<td class=\"tg-0lax\">";
        // line 119
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ol"]) || array_key_exists("ol", $context) ? $context["ol"] : (function () { throw new RuntimeError('Variable "ol" does not exist.', 119, $this->source); })()), "esferaod", [], "any", false, false, false, 119), "html", null, true);
        yield "</td>
\t\t\t<td class=\"tg-0lax\">";
        // line 120
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ol"]) || array_key_exists("ol", $context) ? $context["ol"] : (function () { throw new RuntimeError('Variable "ol" does not exist.', 120, $this->source); })()), "cilindrood", [], "any", false, false, false, 120), "html", null, true);
        yield "</td>
\t\t\t<td class=\"tg-0lax\">";
        // line 121
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ol"]) || array_key_exists("ol", $context) ? $context["ol"] : (function () { throw new RuntimeError('Variable "ol" does not exist.', 121, $this->source); })()), "ejeod", [], "any", false, false, false, 121), "html", null, true);
        yield "</td>
\t\t\t<td class=\"tg-0lax\" rowspan=\"2\">
\t\t\t\t<p>
\t\t\t\t\t";
        // line 124
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ol"]) || array_key_exists("ol", $context) ? $context["ol"] : (function () { throw new RuntimeError('Variable "ol" does not exist.', 124, $this->source); })()), "avcercacaddod", [], "any", false, false, false, 124), "html", null, true);
        yield "</p>
\t\t\t\t<p>";
        // line 125
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ol"]) || array_key_exists("ol", $context) ? $context["ol"] : (function () { throw new RuntimeError('Variable "ol" does not exist.', 125, $this->source); })()), "avcercacaddoi", [], "any", false, false, false, 125), "html", null, true);
        yield "</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"tg-0lax\">OI</td>
\t\t\t<td class=\"tg-0lax\">";
        // line 130
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ol"]) || array_key_exists("ol", $context) ? $context["ol"] : (function () { throw new RuntimeError('Variable "ol" does not exist.', 130, $this->source); })()), "esferaoi", [], "any", false, false, false, 130), "html", null, true);
        yield "</td>
\t\t\t<td class=\"tg-0lax\">";
        // line 131
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ol"]) || array_key_exists("ol", $context) ? $context["ol"] : (function () { throw new RuntimeError('Variable "ol" does not exist.', 131, $this->source); })()), "cilindrooi", [], "any", false, false, false, 131), "html", null, true);
        yield "</td>
\t\t\t<td class=\"tg-0lax\">";
        // line 132
        yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ol"]) || array_key_exists("ol", $context) ? $context["ol"] : (function () { throw new RuntimeError('Variable "ol" does not exist.', 132, $this->source); })()), "ejeoi", [], "any", false, false, false, 132), "html", null, true);
        yield "</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"tg-0lax\" colspan=\"5\">
\t\t\t\t<div style=\"width: 100%; \">
\t\t\t\t\t<div style=\"float: left; margin-left:5%;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">DIP</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left;  margin: 0px 25% 0px;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">AO</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right; margin-right:35%;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">ACO</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left; \">
\t\t\t\t\t\t<h5 style=\"margin: 2;\">Marca de Armazón:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left;  \">
\t\t\t\t\t\t<h5 style=\"margin: 2;\">Modelo:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left; \">
\t\t\t\t\t\t<h5 style=\"margin: 2;\">Color:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t\t<h5 style=\"margin: 3; text-align: left;\">Diseño, material y tx:</h5>

\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"tg-0lax\" colspan=\"5\">
\t\t\t\t<div style=\"width: 100%; margin: 3;\">
\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t<h4 style=\"margin-top: 3;\">REPARACIÓN O AJUSTE:</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right;\">

\t\t\t\t\t\t<label for=\"no\" style=\" margin: 5px;\">Si</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"no\" name=\"reparacion_ajuste\" value=\"Si\" style=\"transform: scale(2);  margin-right: 100px;\" >

\t\t\t\t\t\t<label for=\"no\" style=\" margin: 5px;\">No</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"no\" name=\"reparacion_ajuste\" value=\"No\" style=\"transform: scale(2);  margin-right: 100px;\">

\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t\t<h4 style=\"margin: 2; text-align: left;\">SI (Describir):</h4>

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left; \">
\t\t\t\t\t\t<h3 style=\"margin: 2;\">Marca de Armazón:</h3>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left;  \">
\t\t\t\t\t\t<h3 style=\"margin: 2;\">Modelo:</h3>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left; \">
\t\t\t\t\t\t<h3 style=\"margin: 2;\">Color:</h3>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"tg-0lax\" colspan=\"5\"></td>
\t\t</tr>
\t</tbody>
</table>
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
        return "pdf_generator/index.html.twig";
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
        return array (  201 => 132,  197 => 131,  193 => 130,  185 => 125,  181 => 124,  175 => 121,  171 => 120,  167 => 119,  86 => 41,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
\t.tg {
\t\tborder-collapse: collapse;
\t\tborder-spacing: 0;
\t}
\t.tg td {
\t\tborder-color: black;
\t\tborder-style: solid;
\t\tborder-width: 1px;
\t\tfont-family: Arial, sans-serif;
\t\tfont-size: 14px;
\t\toverflow: hidden;
\t\tpadding: 10px 5px;
\t\tword-break: normal;
\t}
\t.tg th {
\t\tborder-color: black;
\t\tborder-style: solid;
\t\tborder-width: 1px;
\t\tfont-family: Arial, sans-serif;
\t\tfont-size: 14px;
\t\tfont-weight: normal;
\t\toverflow: hidden;
\t\tpadding: 10px 5px;
\t\tword-break: normal;
\t}
\t.tg .tg-0lax {
\t\ttext-align: center;
\t\tvertical-align: top
\t}
</style>

<table class=\"tg\" width=\"100%\" border=\"1\">
\t<thead></thead>
\t<tbody>
\t\t<tr>
\t\t\t<td colspan=\"5\">

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t<img src=\"{{ logo }}\" alt=\"logo\" style=\"height:20px; margin: 3;\">
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left; margin-left: 20%;\">
\t\t\t\t\t\t<h4 style=\"margin: 0;\">Orden de Laboratorio</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right; margin-right:5%;\">
\t\t\t\t\t\t<h4 style=\"margin: 0;\">PRO-19-A</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t\t<h5 style=\"margin: 3; text-align: right;\">Folio Ticket:</h5>

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Sucursal:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left; margin: 0px 30% 0px;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Procedencia:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Fecha:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td colspan=\"5\">

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Titular:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Edad:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t\t<h5 style=\"margin: 3; text-align: left;\">Beneficiario (*1):</h5>

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">N° (*1):</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">Unidad:(*z):</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th class=\"tg-0lax\" style=\"width: 5%;\"></th>
\t\t\t<th class=\"tg-0lax\" style=\"width: 20%;\">Esfera</th>
\t\t\t<th class=\"tg-0lax\" style=\"width: 20%;\">Cilindro</th>
\t\t\t<th class=\"tg-0lax\" style=\"width: 20%;\">Eje</th>
\t\t\t<th class=\"tg-0lax\" style=\"width: 35%;\">Add</th>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"tg-0lax\">OD</td>
\t\t\t<td class=\"tg-0lax\">{{ol.esferaod}}</td>
\t\t\t<td class=\"tg-0lax\">{{ol.cilindrood}}</td>
\t\t\t<td class=\"tg-0lax\">{{ol.ejeod}}</td>
\t\t\t<td class=\"tg-0lax\" rowspan=\"2\">
\t\t\t\t<p>
\t\t\t\t\t{{ol.avcercacaddod}}</p>
\t\t\t\t<p>{{ol.avcercacaddoi}}</p>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"tg-0lax\">OI</td>
\t\t\t<td class=\"tg-0lax\">{{ol.esferaoi}}</td>
\t\t\t<td class=\"tg-0lax\">{{ol.cilindrooi}}</td>
\t\t\t<td class=\"tg-0lax\">{{ol.ejeoi}}</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"tg-0lax\" colspan=\"5\">
\t\t\t\t<div style=\"width: 100%; \">
\t\t\t\t\t<div style=\"float: left; margin-left:5%;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">DIP</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left;  margin: 0px 25% 0px;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">AO</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right; margin-right:35%;\">
\t\t\t\t\t\t<h5 style=\"margin: 3;\">ACO</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left; \">
\t\t\t\t\t\t<h5 style=\"margin: 2;\">Marca de Armazón:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left;  \">
\t\t\t\t\t\t<h5 style=\"margin: 2;\">Modelo:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left; \">
\t\t\t\t\t\t<h5 style=\"margin: 2;\">Color:</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t\t<h5 style=\"margin: 3; text-align: left;\">Diseño, material y tx:</h5>

\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"tg-0lax\" colspan=\"5\">
\t\t\t\t<div style=\"width: 100%; margin: 3;\">
\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t<h4 style=\"margin-top: 3;\">REPARACIÓN O AJUSTE:</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: right;\">

\t\t\t\t\t\t<label for=\"no\" style=\" margin: 5px;\">Si</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"no\" name=\"reparacion_ajuste\" value=\"Si\" style=\"transform: scale(2);  margin-right: 100px;\" >

\t\t\t\t\t\t<label for=\"no\" style=\" margin: 5px;\">No</label>
\t\t\t\t\t\t<input type=\"checkbox\" id=\"no\" name=\"reparacion_ajuste\" value=\"No\" style=\"transform: scale(2);  margin-right: 100px;\">

\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t\t<h4 style=\"margin: 2; text-align: left;\">SI (Describir):</h4>

\t\t\t\t<div style=\"width: 100%;\">
\t\t\t\t\t<div style=\"float: left; \">
\t\t\t\t\t\t<h3 style=\"margin: 2;\">Marca de Armazón:</h3>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left;  \">
\t\t\t\t\t\t<h3 style=\"margin: 2;\">Modelo:</h3>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"float: left; \">
\t\t\t\t\t\t<h3 style=\"margin: 2;\">Color:</h3>
\t\t\t\t\t</div>

\t\t\t\t\t<div style=\"clear: both;\"></div>
\t\t\t\t\t<!-- Clear the floats -->
\t\t\t\t</div>

\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<td class=\"tg-0lax\" colspan=\"5\"></td>
\t\t</tr>
\t</tbody>
</table>
", "pdf_generator/index.html.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\pdf_generator\\index.html.twig");
    }
}
