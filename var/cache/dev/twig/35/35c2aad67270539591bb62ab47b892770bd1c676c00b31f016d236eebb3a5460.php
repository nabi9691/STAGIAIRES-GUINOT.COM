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

/* langages/afficherLangage.html.twig */
class __TwigTemplate_85f877b15047d476b3038c7642670e18f973aee616c0613bdf30f8a93213e2d4 extends Template
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
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/afficherLangage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/afficherLangage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "langages/afficherLangage.html.twig", 1);
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
        echo "Afficher un langage : 
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "
<br/><br/>

";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<div>
    <h1>
     bienvenu(e) !
     Afficher un langage :
     </h1>

    <br /><br />
    <hr />
    <br />
    
    <table border=\"1\">
            <thead>
                <tr>
                    <th> Id </th>
                <th> Nom du stagiaire </th>
<th> Prénom du stagiaire </th>
                <th> Téléphone </th>
                <th> Email </th>
                                        <th> Nom du langage </th>
                    <th> Durée </th>
<th> Objectif </th>
                    <th> Coefficient </th>
                                        </tr>
            </thead>
            <tbody>
        <tr>
                <td> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
        echo " </td>
                <td> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 37, $this->source); })()), "nom", [], "any", false, false, false, 37), "html", null, true);
        echo " </td>
<td> ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 38, $this->source); })()), "prenom", [], "any", false, false, false, 38), "html", null, true);
        echo " </td>
<td> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 39, $this->source); })()), "telephone", [], "any", false, false, false, 39), "html", null, true);
        echo " </td>
<td> ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "html", null, true);
        echo " </td>
                <td> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 41, $this->source); })()), "nomLangage", [], "any", false, false, false, 41), "html", null, true);
        echo " </td>
<td> ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 42, $this->source); })()), "date", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
        echo " </td>
<td> ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 43, $this->source); })()), "objectif", [], "any", false, false, false, 43), "html", null, true);
        echo " </td>
<td> ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 44, $this->source); })()), "coefficient", [], "any", false, false, false, 44), "html", null, true);
        echo " </td>
                        </tr>
            </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "<div>
<h1> Contactez nous ... </h1>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "langages/afficherLangage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 55,  202 => 54,  185 => 44,  181 => 43,  177 => 42,  173 => 41,  169 => 40,  165 => 39,  161 => 38,  157 => 37,  153 => 36,  125 => 10,  115 => 9,  104 => 61,  102 => 54,  97 => 51,  95 => 9,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Afficher un langage : 
 {% endblock %}

{% block body %}

{% block content %}
<div>
    <h1>
     bienvenu(e) !
     Afficher un langage :
     </h1>

    <br /><br />
    <hr />
    <br />
    
    <table border=\"1\">
            <thead>
                <tr>
                    <th> Id </th>
                <th> Nom du stagiaire </th>
<th> Prénom du stagiaire </th>
                <th> Téléphone </th>
                <th> Email </th>
                                        <th> Nom du langage </th>
                    <th> Durée </th>
<th> Objectif </th>
                    <th> Coefficient </th>
                                        </tr>
            </thead>
            <tbody>
        <tr>
                <td> {{ langage.id }} </td>
                <td> {{ langage.nom }} </td>
<td> {{ langage.prenom }} </td>
<td> {{ langage.telephone }} </td>
<td> {{ langage.email }} </td>
                <td> {{ langage.nomLangage }} </td>
<td> {{ langage.date|date(\"d/m/Y\") }} </td>
<td> {{ langage.objectif }} </td>
<td> {{ langage.coefficient }} </td>
                        </tr>
            </tbody>
    </table>

</div>
{% endblock %}

<br/><br/>

{% block footer %}
<div>
<h1> Contactez nous ... </h1>

</div>

{% endblock %}

{% endblock %}
", "langages/afficherLangage.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\langages\\afficherLangage.html.twig");
    }
}
