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

/* blog/blog.html.twig */
class __TwigTemplate_ad9569558f09ae71024a90b22d847f8f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/blog.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/blog.html.twig", 1);
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

        echo "Articles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<section id=\"posts\">
\t\t<div class=\"container mx-auto px-8\">
\t\t\t<div style=\"background-image: url(https://images.unsplash.com/photo-1552674605-db6ffd4facb5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80)\" class=\"flex bg-cover bg-no-repeat bg-center\">
\t\t\t\t<h1 class=\" m-auto text-white font-semibold text-xl lg:text-2xl xl:text-3xl\">Blog</h1>
\t\t\t</div>
\t\t\t<p class=\"font-bold text-white text-lg mb-8 md:text-xl xl:text-2xl\">Derniers articles</p>
\t\t\t<ul class=\"grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3\">
\t\t\t\t
\t\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"/articles/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
\t\t\t\t\t\t<article class=\"p-4\">
\t\t\t\t\t\t\t<img class=\"w-full h-60 rounded-md\" src=\"http://placehold.it/200x200\" alt=\"image article\">
\t\t\t\t\t\t\t<h2 class=\"text-white mt-7 text-lg font-semibold md:text-xl xl:text-2xl\">How to design a product that can grow itself 10x in year</h2>
\t\t\t\t\t\t\t<p class=\"font-normal text-gray-500 text-base mt-5 text-right\">August 20, 2022</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t\t\t
\t\t\t</ul>
\t\t\t<div>
\t\t</section>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "blog/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 25,  105 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Articles{% endblock %}

{% block body %}
\t<section id=\"posts\">
\t\t<div class=\"container mx-auto px-8\">
\t\t\t<div style=\"background-image: url(https://images.unsplash.com/photo-1552674605-db6ffd4facb5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80)\" class=\"flex bg-cover bg-no-repeat bg-center\">
\t\t\t\t<h1 class=\" m-auto text-white font-semibold text-xl lg:text-2xl xl:text-3xl\">Blog</h1>
\t\t\t</div>
\t\t\t<p class=\"font-bold text-white text-lg mb-8 md:text-xl xl:text-2xl\">Derniers articles</p>
\t\t\t<ul class=\"grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3\">
\t\t\t\t
\t\t\t\t{% for article in articles %}
\t\t\t\t<li>
\t\t\t\t\t<a href=\"/articles/{{ article.id }}\">
\t\t\t\t\t\t<article class=\"p-4\">
\t\t\t\t\t\t\t<img class=\"w-full h-60 rounded-md\" src=\"http://placehold.it/200x200\" alt=\"image article\">
\t\t\t\t\t\t\t<h2 class=\"text-white mt-7 text-lg font-semibold md:text-xl xl:text-2xl\">How to design a product that can grow itself 10x in year</h2>
\t\t\t\t\t\t\t<p class=\"font-normal text-gray-500 text-base mt-5 text-right\">August 20, 2022</p>
\t\t\t\t\t\t</article>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t\t
\t\t\t</ul>
\t\t\t<div>
\t\t</section>
\t\t{% endblock %}
", "blog/blog.html.twig", "/Users/hugolgc/Desktop/Diroshow-Club/templates/blog/blog.html.twig");
    }
}
