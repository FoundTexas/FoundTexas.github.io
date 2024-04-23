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

/* GameHighlights.twig */
class __TwigTemplate_4b64504d293a46a6d21ea3d929dfe57f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GameHighlights.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "GameHighlights.twig"));

        yield "<style>


\t.container-games {
\t\toverflow: hidden;
\t\tdisplay: flex;
\t\talign-items: center;
\t\tjustify-content: center;
\t\tcolor: #fff;
\t\theight: 80vh;
\t}

\t.slider {
\t\twidth: 100% !important;
\t\theight: 100% !important;
\t\ttransition: transform 900ms;
\t\tposition: relative;
\t\tperspective: 1000px;
\t\tmax-height: 100%;
\t\tmax-width: 100%;
\t\twill-change: transform;

\t\t&:not(.zoom) {
\t\t\t.item {
\t\t\t\ttransition: all 900ms ease-in-out, opacity 400ms linear 0;
\t\t\t\topacity: 0;

\t\t\t\t&.active {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t\theight: 100% !important;
\t\t\t\t\tline-height: 100%;
\t\t\t\t\tposition: relative;
\t\t\t\t\tdisplay: flex;
\t\t\t\t\topacity: 1;
\t\t\t\t\tpointer-events: all;


\t\t\t\t\t.custom-btn {
\t\t\t\t\t\ttransform: scale(3);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t&:not(.active) {
\t\t\t\t\tdisplay: none;
\t\t\t\t}

\t\t\t\t&.item1 {
\t\t\t\t\ttransform: rotateY(0deg) translateZ(0);
\t\t\t\t}

\t\t\t\t&.item2 {
\t\t\t\t\ttransform: rotateY(60deg) translateZ(0);
\t\t\t\t}

\t\t\t\t&.item3 {
\t\t\t\t\ttransform: rotateY(120deg) translateZ(0);
\t\t\t\t}
\t\t\t\t&.item4 {
\t\t\t\t\ttransform: rotateY(180deg) translateZ(0);
\t\t\t\t}

\t\t\t\t&.item5 {
\t\t\t\t\ttransform: rotateY(240deg) translateZ(0);
\t\t\t\t}

\t\t\t\t&.item6 {
\t\t\t\t\ttransform: rotateY(300deg) translateZ(0);
\t\t\t\t}
\t\t\t}
\t\t}

\t\t&.zoom {
\t\t\t.item {
\t\t\t\ttransition: all 900ms ease-in-out, opacity 300ms linear 500ms;
\t\t\t\topacity: 0.5;
\t\t\t}
\t\t\tspan {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t.custom-btn {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t}

\t}

\t.wrapper {
\t\theight: 100%;
\t\twidth: 100%;
\t\tposition: absolute;
\t\ttransform-style: preserve-3d;
\t\ttransition: transform 900ms ease-in-out;
\t\tdisplay: flex;
\t\talign-items: center;
\t\tjustify-content: center;
\t\twill-change: transform;
\t}

\t.item {
\t\tdisplay: flex;
\t\talign-items: center;
\t\tjustify-content: center;
\t\tposition: absolute;
\t\twidth: 39%;
\t\theight: 50%;
\t\tline-height: 50%;
\t\tcolor: #fff;
\t\tbackground-repeat: no-repeat;
\t\tbackground-size: cover !important;
\t\tbackground-position: center;
\t\ttransition: all 900ms ease-in-out;
\t\ttransform-origin: center;
\t\tpointer-events: none;
\t\twill-change: transform;

\t\t&.item1 {
\t\t\ttransform: rotateY(0deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(0deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}

\t\t&.item2 {
\t\t\ttransform: rotateY(60deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(60deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}

\t\t&.item3 {
\t\t\ttransform: rotateY(120deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(120deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}

\t\t&.item4 {
\t\t\ttransform: rotateY(180deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(180deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}

\t\t&.item5 {
\t\t\ttransform: rotateY(240deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(240deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}

\t\t&.item6 {
\t\t\ttransform: rotateY(300deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(300deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}
\t}

\t.arrow {
\t\tposition: absolute;
\t\ttop: 50%;
\t\tcursor: pointer;
\t\tborder-radius: 50%;
\t\twidth: 2rem;
\t\theight: 2rem;
\t\ttransition: all 0.1s ease-in-out;
\t\twill-change: transform;

\t\t&.arrow-next {
\t\t\tright: 1rem;
\t\t\tbackground: url('https://alikinvv.github.io/3d-carousel/build/img/arrow-right.svg') no-repeat center #6f1b6f39;
\t\t\tbackground-size: 2rem !important;

\t\t\t&:hover {
\t\t\t\ttransform: scale(1.1);
\t\t\t\tbackground: url('https://alikinvv.github.io/3d-carousel/build/img/arrow-right.svg') no-repeat center #6F1B6F;
\t\t\t}
\t\t}

\t\t&.arrow-prev {
\t\t\tleft: 1rem;
\t\t\tbackground: url('https://alikinvv.github.io/3d-carousel/build/img/arrow-left.svg') no-repeat center #6f1b6f39;
\t\t\tbackground-size: 2rem !important;

\t\t\t&:hover {
\t\t\t\ttransform: scale(1.1);
\t\t\t\tbackground: url('https://alikinvv.github.io/3d-carousel/build/img/arrow-left.svg') no-repeat center #6F1B6F;
\t\t\t}
\t\t}
\t}
</style>

<section id=\"Games\" class=\"bg-main-dark rounded-top-4 m-0 w-100 row p-0 m-0 justify-content-evenly\" style=\"min-height: 93vh;\">

\t<h3 class='text-center py-3 m-0'>Game Highlights</h3>

\t<div class=\"container-games p-0 m-0 w-100\">
\t\t<div class=\"slider\">
\t\t\t<div class=\"wrapper\">
\t\t\t\t<div style=\"background-image: url('https://i.natgeofe.com/k/75ac774d-e6c7-44fa-b787-d0e20742f797/giant-panda-eating_4x3.jpg')\" class=\"item item1 active\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1483 - 1484</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>BIRH OF VENUS</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<buton href=\"javascript:void(0)\" class=\" custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</buton>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"background-image: url('https://alikinvv.github.io/3d-carousel/build/img/slide1.jpg')\" class=\"item item2\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1481 - 1484</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>BIRH OF VENUS</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"background-image: url('https://alikinvv.github.io/3d-carousel/build/img/slide3.jpg')\" class=\"item item3\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1500 - 1501</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>THE STORY OF VIRGINIA</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"background-image: url('https://i.natgeofe.com/k/75ac774d-e6c7-44fa-b787-d0e20742f797/giant-panda-eating_4x3.jpg')\" class=\"item item4\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1483 - 1484</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>BIRH OF VENUS</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"background-image: url('https://alikinvv.github.io/3d-carousel/build/img/slide1.jpg')\" class=\"item item5\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1481 - 1484</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>BIRH OF VENUS</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\" custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"background-image: url('https://alikinvv.github.io/3d-carousel/build/img/slide3.jpg')\" class=\"item item6\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1500 - 1501</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>THE STORY OF VIRGINIA</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\" custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"arrow arrow-next\"></div>
\t\t\t<div class=\"arrow arrow-prev\"></div>
\t\t</div>

\t</div>
</section>


<script>
let slider = document.querySelector('.slider');
let wrapper = document.querySelector('.wrapper');
let next = document.querySelector('.arrow-next');
let prev = document.querySelector('.arrow-prev');
let item = document.querySelectorAll('.item');
let currdeg = 0;
let active = 0;

next.addEventListener('click', () => {
    slider.classList.toggle('zoom');

    currdeg = currdeg - 60;

    if (active === item.length - 1) {
        active = 0;
    } else {
        active++;
    } toggle();
});

prev.addEventListener('click', () => {
    slider.classList.toggle('zoom');

    currdeg = currdeg + 60;

    if (active === 0) {
        active = item.length - 1;
    } else {
        active--;
    } toggle();
});

let toggle = () => {
    setTimeout(() => {
        for (let i = 0; i < item.length; i++) {
            item[i].classList.remove('active');
        }

        item[active].classList.add('active')
        wrapper.style.transform = 'rotateY(' + currdeg + 'deg)';
    }, 900);

    setTimeout(() => {
        slider.classList.toggle('zoom');
    }, 1900);
}
</script>


<script>
\t// Get all carousel indicators
var indicators = document.querySelectorAll('.carousel-indicator');
var curindex = 0;

function updateActiveIndicator(updatevalue) { // Calculate the new index
curindex += updatevalue;

// Loop if curindex is larger than or equal to the length of indicators
if (curindex >= indicators.length) {
curindex = 0;
} else if (curindex < 0) {
curindex = indicators.length - 1;
}

// Remove 'active' class from all indicators
indicators.forEach(function (indicator, index) {
indicator.classList.remove('active');
if (index === curindex) {
indicator.classList.add('active');
// Scroll to the selected indicator
indicator.scrollIntoView({behavior: 'smooth', block: 'nearest'});
}
});

// Activate the corresponding carousel item
var carousel = document.getElementById('carouselExampleIndicators');
var carouselInstance = new bootstrap.Carousel(carousel);
carouselInstance.to(curindex);
}

// Loop through each indicator and add click event listener
indicators.forEach(function (indicator, index) {
indicator.addEventListener('click', function () { // Remove 'active' class from all indicators
indicators.forEach(function (indicator) {
indicator.classList.remove('active');
});

// Add 'active' class to the clicked indicator
this.classList.add('active');

// Update the current index
curindex = index;

// Activate the corresponding carousel item
var carousel = document.getElementById('carouselExampleIndicators');
var carouselInstance = new bootstrap.Carousel(carousel);
carouselInstance.to(index);
});
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "GameHighlights.twig";
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
        return new Source("<style>


\t.container-games {
\t\toverflow: hidden;
\t\tdisplay: flex;
\t\talign-items: center;
\t\tjustify-content: center;
\t\tcolor: #fff;
\t\theight: 80vh;
\t}

\t.slider {
\t\twidth: 100% !important;
\t\theight: 100% !important;
\t\ttransition: transform 900ms;
\t\tposition: relative;
\t\tperspective: 1000px;
\t\tmax-height: 100%;
\t\tmax-width: 100%;
\t\twill-change: transform;

\t\t&:not(.zoom) {
\t\t\t.item {
\t\t\t\ttransition: all 900ms ease-in-out, opacity 400ms linear 0;
\t\t\t\topacity: 0;

\t\t\t\t&.active {
\t\t\t\t\twidth: 100% !important;
\t\t\t\t\theight: 100% !important;
\t\t\t\t\tline-height: 100%;
\t\t\t\t\tposition: relative;
\t\t\t\t\tdisplay: flex;
\t\t\t\t\topacity: 1;
\t\t\t\t\tpointer-events: all;


\t\t\t\t\t.custom-btn {
\t\t\t\t\t\ttransform: scale(3);
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t&:not(.active) {
\t\t\t\t\tdisplay: none;
\t\t\t\t}

\t\t\t\t&.item1 {
\t\t\t\t\ttransform: rotateY(0deg) translateZ(0);
\t\t\t\t}

\t\t\t\t&.item2 {
\t\t\t\t\ttransform: rotateY(60deg) translateZ(0);
\t\t\t\t}

\t\t\t\t&.item3 {
\t\t\t\t\ttransform: rotateY(120deg) translateZ(0);
\t\t\t\t}
\t\t\t\t&.item4 {
\t\t\t\t\ttransform: rotateY(180deg) translateZ(0);
\t\t\t\t}

\t\t\t\t&.item5 {
\t\t\t\t\ttransform: rotateY(240deg) translateZ(0);
\t\t\t\t}

\t\t\t\t&.item6 {
\t\t\t\t\ttransform: rotateY(300deg) translateZ(0);
\t\t\t\t}
\t\t\t}
\t\t}

\t\t&.zoom {
\t\t\t.item {
\t\t\t\ttransition: all 900ms ease-in-out, opacity 300ms linear 500ms;
\t\t\t\topacity: 0.5;
\t\t\t}
\t\t\tspan {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t.custom-btn {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t}

\t}

\t.wrapper {
\t\theight: 100%;
\t\twidth: 100%;
\t\tposition: absolute;
\t\ttransform-style: preserve-3d;
\t\ttransition: transform 900ms ease-in-out;
\t\tdisplay: flex;
\t\talign-items: center;
\t\tjustify-content: center;
\t\twill-change: transform;
\t}

\t.item {
\t\tdisplay: flex;
\t\talign-items: center;
\t\tjustify-content: center;
\t\tposition: absolute;
\t\twidth: 39%;
\t\theight: 50%;
\t\tline-height: 50%;
\t\tcolor: #fff;
\t\tbackground-repeat: no-repeat;
\t\tbackground-size: cover !important;
\t\tbackground-position: center;
\t\ttransition: all 900ms ease-in-out;
\t\ttransform-origin: center;
\t\tpointer-events: none;
\t\twill-change: transform;

\t\t&.item1 {
\t\t\ttransform: rotateY(0deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(0deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}

\t\t&.item2 {
\t\t\ttransform: rotateY(60deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(60deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}

\t\t&.item3 {
\t\t\ttransform: rotateY(120deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(120deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}

\t\t&.item4 {
\t\t\ttransform: rotateY(180deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(180deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}

\t\t&.item5 {
\t\t\ttransform: rotateY(240deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(240deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}

\t\t&.item6 {
\t\t\ttransform: rotateY(300deg) translateZ(1000px);

\t\t\t&.active {
\t\t\t\ttransform: rotateY(300deg) translateZ(500px);
\t\t\t\topacity: 1;
\t\t\t}
\t\t}
\t}

\t.arrow {
\t\tposition: absolute;
\t\ttop: 50%;
\t\tcursor: pointer;
\t\tborder-radius: 50%;
\t\twidth: 2rem;
\t\theight: 2rem;
\t\ttransition: all 0.1s ease-in-out;
\t\twill-change: transform;

\t\t&.arrow-next {
\t\t\tright: 1rem;
\t\t\tbackground: url('https://alikinvv.github.io/3d-carousel/build/img/arrow-right.svg') no-repeat center #6f1b6f39;
\t\t\tbackground-size: 2rem !important;

\t\t\t&:hover {
\t\t\t\ttransform: scale(1.1);
\t\t\t\tbackground: url('https://alikinvv.github.io/3d-carousel/build/img/arrow-right.svg') no-repeat center #6F1B6F;
\t\t\t}
\t\t}

\t\t&.arrow-prev {
\t\t\tleft: 1rem;
\t\t\tbackground: url('https://alikinvv.github.io/3d-carousel/build/img/arrow-left.svg') no-repeat center #6f1b6f39;
\t\t\tbackground-size: 2rem !important;

\t\t\t&:hover {
\t\t\t\ttransform: scale(1.1);
\t\t\t\tbackground: url('https://alikinvv.github.io/3d-carousel/build/img/arrow-left.svg') no-repeat center #6F1B6F;
\t\t\t}
\t\t}
\t}
</style>

<section id=\"Games\" class=\"bg-main-dark rounded-top-4 m-0 w-100 row p-0 m-0 justify-content-evenly\" style=\"min-height: 93vh;\">

\t<h3 class='text-center py-3 m-0'>Game Highlights</h3>

\t<div class=\"container-games p-0 m-0 w-100\">
\t\t<div class=\"slider\">
\t\t\t<div class=\"wrapper\">
\t\t\t\t<div style=\"background-image: url('https://i.natgeofe.com/k/75ac774d-e6c7-44fa-b787-d0e20742f797/giant-panda-eating_4x3.jpg')\" class=\"item item1 active\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1483 - 1484</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>BIRH OF VENUS</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<buton href=\"javascript:void(0)\" class=\" custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</buton>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"background-image: url('https://alikinvv.github.io/3d-carousel/build/img/slide1.jpg')\" class=\"item item2\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1481 - 1484</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>BIRH OF VENUS</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"background-image: url('https://alikinvv.github.io/3d-carousel/build/img/slide3.jpg')\" class=\"item item3\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1500 - 1501</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>THE STORY OF VIRGINIA</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"background-image: url('https://i.natgeofe.com/k/75ac774d-e6c7-44fa-b787-d0e20742f797/giant-panda-eating_4x3.jpg')\" class=\"item item4\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1483 - 1484</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>BIRH OF VENUS</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"background-image: url('https://alikinvv.github.io/3d-carousel/build/img/slide1.jpg')\" class=\"item item5\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1481 - 1484</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>BIRH OF VENUS</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\" custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style=\"background-image: url('https://alikinvv.github.io/3d-carousel/build/img/slide3.jpg')\" class=\"item item6\">
\t\t\t\t\t<div class=\"item__info\">
\t\t\t\t\t\t<p class=\"item__year\">
\t\t\t\t\t\t\t<span>1500 - 1501</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<p class=\"item__name\">
\t\t\t\t\t\t\t<span>THE STORY OF VIRGINIA</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\" custom-btn rounded-2 p-1 m-2 accent-bg text-white\">
\t\t\t\t\t\t\t<span>Discover more</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"arrow arrow-next\"></div>
\t\t\t<div class=\"arrow arrow-prev\"></div>
\t\t</div>

\t</div>
</section>


<script>
let slider = document.querySelector('.slider');
let wrapper = document.querySelector('.wrapper');
let next = document.querySelector('.arrow-next');
let prev = document.querySelector('.arrow-prev');
let item = document.querySelectorAll('.item');
let currdeg = 0;
let active = 0;

next.addEventListener('click', () => {
    slider.classList.toggle('zoom');

    currdeg = currdeg - 60;

    if (active === item.length - 1) {
        active = 0;
    } else {
        active++;
    } toggle();
});

prev.addEventListener('click', () => {
    slider.classList.toggle('zoom');

    currdeg = currdeg + 60;

    if (active === 0) {
        active = item.length - 1;
    } else {
        active--;
    } toggle();
});

let toggle = () => {
    setTimeout(() => {
        for (let i = 0; i < item.length; i++) {
            item[i].classList.remove('active');
        }

        item[active].classList.add('active')
        wrapper.style.transform = 'rotateY(' + currdeg + 'deg)';
    }, 900);

    setTimeout(() => {
        slider.classList.toggle('zoom');
    }, 1900);
}
</script>


<script>
\t// Get all carousel indicators
var indicators = document.querySelectorAll('.carousel-indicator');
var curindex = 0;

function updateActiveIndicator(updatevalue) { // Calculate the new index
curindex += updatevalue;

// Loop if curindex is larger than or equal to the length of indicators
if (curindex >= indicators.length) {
curindex = 0;
} else if (curindex < 0) {
curindex = indicators.length - 1;
}

// Remove 'active' class from all indicators
indicators.forEach(function (indicator, index) {
indicator.classList.remove('active');
if (index === curindex) {
indicator.classList.add('active');
// Scroll to the selected indicator
indicator.scrollIntoView({behavior: 'smooth', block: 'nearest'});
}
});

// Activate the corresponding carousel item
var carousel = document.getElementById('carouselExampleIndicators');
var carouselInstance = new bootstrap.Carousel(carousel);
carouselInstance.to(curindex);
}

// Loop through each indicator and add click event listener
indicators.forEach(function (indicator, index) {
indicator.addEventListener('click', function () { // Remove 'active' class from all indicators
indicators.forEach(function (indicator) {
indicator.classList.remove('active');
});

// Add 'active' class to the clicked indicator
this.classList.add('active');

// Update the current index
curindex = index;

// Activate the corresponding carousel item
var carousel = document.getElementById('carouselExampleIndicators');
var carouselInstance = new bootstrap.Carousel(carousel);
carouselInstance.to(index);
});
});
</script>", "GameHighlights.twig", "C:\\Users\\Rodolfo\\Documents\\OPTIMO environment\\Portafolio\\templates\\GameHighlights.twig");
    }
}
