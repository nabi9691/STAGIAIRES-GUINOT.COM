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

/* formations/afficherFormations.html.twig */
class __TwigTemplate_caecbdfa99e36d7497f44196de13b23a18ba8f99ec7d31adfee5a66168c067fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/afficherFormations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/afficherFormations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formations/afficherFormations.html.twig", 1);
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
afficher la formation :
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
    Afficher la formation :
    </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th> Nom du stagiaire </th>
<th> Prénom du stagiaire </th>
                <th> Téléphone </th>
                <th> Email </th>
                                                                <th> Nom de la formation </th>
                <th> Civilité </th>
                    <th> Objectif de la formation </th>
                    <th> Durée de la formation </th>
                                                        <th> Cout de la formation </th>
                                <th> Titre professionnel </th>
                <th> Vos prérequis </th>
                <th> Session de formation </th>
<th> Status </th>
</tr>
        </thead>
        <tbody>
            <tr>
                <td> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        echo " </td>
<td> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 35, $this->source); })()), "nom", [], "any", false, false, false, 35), "html", null, true);
        echo " </td>
<td> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), "html", null, true);
        echo " </td>
<td> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 37, $this->source); })()), "telephone", [], "any", false, false, false, 37), "html", null, true);
        echo " </td>
<td> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 38, $this->source); })()), "email", [], "any", false, false, false, 38), "html", null, true);
        echo " </td>
                                <td> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 39, $this->source); })()), "nomFormation", [], "any", false, false, false, 39), "html", null, true);
        echo " </td>
                <td> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 40, $this->source); })()), "civilite", [], "any", false, false, false, 40), "html", null, true);
        echo " </td>
                <td> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 41, $this->source); })()), "objectifFormation", [], "any", false, false, false, 41), "html", null, true);
        echo " </td>
                                <td> ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 42, $this->source); })()), "dateFormation", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
        echo " </td>
<td> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 43, $this->source); })()), "coutFormation", [], "any", false, false, false, 43), "html", null, true);
        echo " </td>
<td> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 44, $this->source); })()), "titreProfessionnel", [], "any", false, false, false, 44), "html", null, true);
        echo " </td>
                <td> ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 45, $this->source); })()), "preRequis", [], "any", false, false, false, 45), "html", null, true);
        echo " </td>
<td> ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 46, $this->source); })()), "sessions", [], "any", false, false, false, 46), "html", null, true);
        echo " </td>
<td> ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 47, $this->source); })()), "status", [], "any", false, false, false, 47), "html", null, true);
        echo " </td>
                        </tr>
        </tbody>
    </table>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/afficherFormations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 47,  166 => 46,  162 => 45,  158 => 44,  154 => 43,  150 => 42,  146 => 41,  142 => 40,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  118 => 34,  91 => 9,  81 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}

afficher la formation :
{% endblock %}

{% block content %}
    <h1>
    Afficher la formation :
    </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th> Nom du stagiaire </th>
<th> Prénom du stagiaire </th>
                <th> Téléphone </th>
                <th> Email </th>
                                                                <th> Nom de la formation </th>
                <th> Civilité </th>
                    <th> Objectif de la formation </th>
                    <th> Durée de la formation </th>
                                                        <th> Cout de la formation </th>
                                <th> Titre professionnel </th>
                <th> Vos prérequis </th>
                <th> Session de formation </th>
<th> Status </th>
</tr>
        </thead>
        <tbody>
            <tr>
                <td> {{ formation.id }} </td>
<td> {{ formation.nom }} </td>
<td> {{ formation.prenom }} </td>
<td> {{ formation.telephone }} </td>
<td> {{ formation.email }} </td>
                                <td> {{ formation.nomFormation }} </td>
                <td> {{ formation.civilite }} </td>
                <td> {{ formation.objectifFormation }} </td>
                                <td> {{ formation.dateFormation|date(\"d/m/Y\") }} </td>
<td> {{ formation.coutFormation }} </td>
<td> {{ formation.titreProfessionnel }} </td>
                <td> {{ formation.preRequis }} </td>
<td> {{ formation.sessions }} </td>
<td> {{ formation.status }} </td>
                        </tr>
        </tbody>
    </table>

    {% endblock %}
", "formations/afficherFormations.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\afficherFormations.html.twig");
    }
}
