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

/* article/index.html.twig */
class __TwigTemplate_3334d364061bb89528f8cab0cc07b8c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        echo "Hello ArticleController!
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div class=\"max-w-3xl bg-[#181A2A] min-h-screen text-white mx-auto text-lg\">
\t\t<h1 class=\"text-2xl font-bold pt-4\">The Impact of Technology on the Workplace: How Technology is Changing</h1>
\t\t<div class=\"flex gap-x-2 text-sm my-6 text-gray-500\">
\t\t\t<div class=\"flex \">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"mr-2\">
\t\t\t\t\t<circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
\t\t\t\t\t<circle cx=\"12\" cy=\"10\" r=\"3\"></circle>
\t\t\t\t\t<path d=\"M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662\"></path>
\t\t\t\t</svg>
\t\t\t\t<span>Tracey Wilson</span>
\t\t\t</div>
\t\t\t<div>August 20, 2022</div>
\t\t</div>
\t\t<img class=\"h-96 w-full mt-2 object-cover rounded-xl\" src=\"https://images.unsplash.com/photo-1682685795463-0674c065f315?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1026&q=80\"/>
\t\t<div class=\"whitespace-pre-line mx-auto  text-gray-400\">
\t\t\tLorem ipsum dolor sit amet consectetur adipisicing elit. Soluta mollitia ut qui est. Ut harum corrupti vel aliquam hic placeat laudantium consequuntur, culpa saepe molestias incidunt temporibus? Adipisci ea obcaecati nobis esse beatae ratione laboriosam repellendus ipsam magnam hic libero ipsa magni amet aliquam nulla, cumque iusto dolorem dignissimos! Fuga!

\t\t</div>


\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ArticleController!
{% endblock %}

{% block body %}

\t<div class=\"max-w-3xl bg-[#181A2A] min-h-screen text-white mx-auto text-lg\">
\t\t<h1 class=\"text-2xl font-bold pt-4\">The Impact of Technology on the Workplace: How Technology is Changing</h1>
\t\t<div class=\"flex gap-x-2 text-sm my-6 text-gray-500\">
\t\t\t<div class=\"flex \">
\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"mr-2\">
\t\t\t\t\t<circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
\t\t\t\t\t<circle cx=\"12\" cy=\"10\" r=\"3\"></circle>
\t\t\t\t\t<path d=\"M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662\"></path>
\t\t\t\t</svg>
\t\t\t\t<span>Tracey Wilson</span>
\t\t\t</div>
\t\t\t<div>August 20, 2022</div>
\t\t</div>
\t\t<img class=\"h-96 w-full mt-2 object-cover rounded-xl\" src=\"https://images.unsplash.com/photo-1682685795463-0674c065f315?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1026&q=80\"/>
\t\t<div class=\"whitespace-pre-line mx-auto  text-gray-400\">
\t\t\tLorem ipsum dolor sit amet consectetur adipisicing elit. Soluta mollitia ut qui est. Ut harum corrupti vel aliquam hic placeat laudantium consequuntur, culpa saepe molestias incidunt temporibus? Adipisci ea obcaecati nobis esse beatae ratione laboriosam repellendus ipsam magnam hic libero ipsa magni amet aliquam nulla, cumque iusto dolorem dignissimos! Fuga!

\t\t</div>


\t{% endblock %}
", "article/index.html.twig", "/Users/hugolgc/Desktop/Diroshow-Club/templates/article/index.html.twig");
    }
}
