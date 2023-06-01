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

/* login/index.html.twig */
class __TwigTemplate_9a45e4c6ab3f489a68938238c1e76752 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 2, $this->source); })()), "messageKey", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 2, $this->source); })()), "messageData", [], "any", false, false, false, 2), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<div class=\"h-screen flex\">
  <form
    action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"
    method=\"post\"
    class=\"m-auto max-w-xs w-full flex flex-col gap-4\"
  >
    <h1 class=\"text-center mb-8 text-[32px] font-semibold\">Connexion</h1>
    <label for=\"username\">Adresse email</label>
    <input
      type=\"text\"
      id=\"username\"
      name=\"_username\"
      value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"
      class=\"block w-full px-2 py-2 bg-gray-800 rounded-md\"
    />
    <label for=\"password\">Mot de passe</label>
    <input
      type=\"password\"
      id=\"password\"
      name=\"_password\"
      class=\"block w-full px-2 py-2 bg-gray-800 rounded-md\"
    />
    <input
      type=\"hidden\"
      name=\"_csrf_token\"
      value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    />

    ";
        // line 35
        echo "
    <button
      type=\"submit\"
      class=\"mt-8 px-2 py-2 bg-gray-800 border-2 border-gray-700 rounded-md\"
    >
      Connexion
    </button>
  </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 35,  109 => 30,  93 => 17,  80 => 7,  75 => 4,  69 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block body %} {% if error %}
<div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"h-screen flex\">
  <form
    action=\"{{ path('app_login') }}\"
    method=\"post\"
    class=\"m-auto max-w-xs w-full flex flex-col gap-4\"
  >
    <h1 class=\"text-center mb-8 text-[32px] font-semibold\">Connexion</h1>
    <label for=\"username\">Adresse email</label>
    <input
      type=\"text\"
      id=\"username\"
      name=\"_username\"
      value=\"{{ last_username }}\"
      class=\"block w-full px-2 py-2 bg-gray-800 rounded-md\"
    />
    <label for=\"password\">Mot de passe</label>
    <input
      type=\"password\"
      id=\"password\"
      name=\"_password\"
      class=\"block w-full px-2 py-2 bg-gray-800 rounded-md\"
    />
    <input
      type=\"hidden\"
      name=\"_csrf_token\"
      value=\"{{ csrf_token('authenticate') }}\"
    />

    {# If you want to control the URL the user is redirected to on success
    <input type=\"hidden\" name=\"_target_path\" value=\"/account\" /> #}

    <button
      type=\"submit\"
      class=\"mt-8 px-2 py-2 bg-gray-800 border-2 border-gray-700 rounded-md\"
    >
      Connexion
    </button>
  </form>
</div>
{% endblock %}
", "login/index.html.twig", "/Users/hugolgc/Desktop/Diroshow-Club/templates/login/index.html.twig");
    }
}
