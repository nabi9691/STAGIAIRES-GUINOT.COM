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

/* mediats/afficherMediats.html.twig */
class __TwigTemplate_ab66cca9d279cab30931d3f1b274c1671cb38b9f91b4575e082465b34b72db1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mediats/afficherMediats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mediats/afficherMediats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mediats/afficherMediats.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
afficher médiats :
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <h1>
    Afficher médiats :
    </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th> Titre </th>
                <th> Contenu </th>
                <th> Date </th>
                 <th> Status </th>
                <th> Catégories </th>
                 <th> Auteurs </th>
                 <th> Utilisateurs </th>
                 </tr>
        </thead>
        <tbody>
            <tr>
<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediats"]) || array_key_exists("mediats", $context) ? $context["mediats"] : (function () { throw new RuntimeError('Variable "mediats" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediats"]) || array_key_exists("mediats", $context) ? $context["mediats"] : (function () { throw new RuntimeError('Variable "mediats" does not exist.', 29, $this->source); })()), "titre", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediats"]) || array_key_exists("mediats", $context) ? $context["mediats"] : (function () { throw new RuntimeError('Variable "mediats" does not exist.', 30, $this->source); })()), "contenu", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
<td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediats"]) || array_key_exists("mediats", $context) ? $context["mediats"] : (function () { throw new RuntimeError('Variable "mediats" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
        echo "</td>
<td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediats"]) || array_key_exists("mediats", $context) ? $context["mediats"] : (function () { throw new RuntimeError('Variable "mediats" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediats"]) || array_key_exists("mediats", $context) ? $context["mediats"] : (function () { throw new RuntimeError('Variable "mediats" does not exist.', 33, $this->source); })()), "categories", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
<td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediats"]) || array_key_exists("mediats", $context) ? $context["mediats"] : (function () { throw new RuntimeError('Variable "mediats" does not exist.', 34, $this->source); })()), "auteurs", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
<td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["mediats"]) || array_key_exists("mediats", $context) ? $context["mediats"] : (function () { throw new RuntimeError('Variable "mediats" does not exist.', 35, $this->source); })()), "utilisateur", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                        </tr>
        </tbody>
    </table>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mediats/afficherMediats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  91 => 9,  81 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}

afficher médiats :
{% endblock %}

{% block content %}
    <h1>
    Afficher médiats :
    </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th> Titre </th>
                <th> Contenu </th>
                <th> Date </th>
                 <th> Status </th>
                <th> Catégories </th>
                 <th> Auteurs </th>
                 <th> Utilisateurs </th>
                 </tr>
        </thead>
        <tbody>
            <tr>
<td>{{ mediats.id }}</td>
<td>{{ mediats.titre }}</td>
                        <td>{{ mediats.contenu }}</td>
<td>{{ mediats.date|date(\"d/m/Y\") }}</td>
<td>{{ mediats.status }}</td>
<td>{{ mediats.categories }}</td>
<td>{{ mediats.auteurs }}</td>
<td>{{ mediats.utilisateur }}</td>
                        </tr>
        </tbody>
    </table>

    {% endblock %}
", "mediats/afficherMediats.html.twig", "C:\\wamp64\\www\\Retrouvailles_NABI.com\\templates\\mediats\\afficherMediats.html.twig");
    }
}
