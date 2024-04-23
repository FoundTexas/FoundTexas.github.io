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

/* json_input_component.twig */
class __TwigTemplate_d37eaa51ead037c0438a5e77268dd8ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "json_input_component.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "json_input_component.twig"));

        // line 2
        echo "
<div id=\"tag-input-component\">
    <input type=\"text\" id=\"tag-input\" placeholder=\"Add tags\">
    <div id=\"tag-container\"></div>
</div>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const tagInput = document.getElementById('tag-input');
        const tagContainer = document.getElementById('tag-container');

        tagInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' && tagInput.value.trim() !== '') {
                const tagText = tagInput.value.trim();
                const tagSpan = document.createElement('span');
                tagSpan.textContent = tagText;
                tagSpan.classList.add('tag');
                tagContainer.appendChild(tagSpan);
                tagInput.value = '';
            }
        });

        tagContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('tag')) {
                event.target.remove();
            }
        });

        // Additional code to gather tags on form submit
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            const tags = Array.from(tagContainer.querySelectorAll('.tag')).map(tag => tag.textContent);
            // Now you can do something with the tags array, like add them to a hidden input field
            const tagsInput = document.createElement('input');
            tagsInput.type = 'hidden';
            tagsInput.name = 'tags';
            tagsInput.value = JSON.stringify(tags);
            form.appendChild(tagsInput);
            form.submit(); // Submit the form
        });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "json_input_component.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/_tag_input_component.html.twig #}

<div id=\"tag-input-component\">
    <input type=\"text\" id=\"tag-input\" placeholder=\"Add tags\">
    <div id=\"tag-container\"></div>
</div>

<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        const tagInput = document.getElementById('tag-input');
        const tagContainer = document.getElementById('tag-container');

        tagInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' && tagInput.value.trim() !== '') {
                const tagText = tagInput.value.trim();
                const tagSpan = document.createElement('span');
                tagSpan.textContent = tagText;
                tagSpan.classList.add('tag');
                tagContainer.appendChild(tagSpan);
                tagInput.value = '';
            }
        });

        tagContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('tag')) {
                event.target.remove();
            }
        });

        // Additional code to gather tags on form submit
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            const tags = Array.from(tagContainer.querySelectorAll('.tag')).map(tag => tag.textContent);
            // Now you can do something with the tags array, like add them to a hidden input field
            const tagsInput = document.createElement('input');
            tagsInput.type = 'hidden';
            tagsInput.name = 'tags';
            tagsInput.value = JSON.stringify(tags);
            form.appendChild(tagsInput);
            form.submit(); // Submit the form
        });
    });
</script>
", "json_input_component.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\json_input_component.twig");
    }
}
