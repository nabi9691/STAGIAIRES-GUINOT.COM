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

/* formations/index.html.twig */
class __TwigTemplate_5b5b0f17157e350705c000cc3a4f04f65a4f70dd548d2790ef9801a3e93c2614 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formations/index.html.twig", 1);
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
        echo "Liste des formations : 
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
        // line 78
        echo "
<br/><br/>

";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 83
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
     Liste des formations :
     </h1>

    <br /><br />
    <hr />
    <br />
    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelleFormation_index");
        echo "\">Ajouter Une Nouvelle Formation ! </a>
<br /><br />
    
    
    <table border=\"1\">
            
            <thead>
                <tr>
                    <th>Id</th>
                    <th> Nom du stagiaire </th>
<th> Prénom du stagiaire </th>
                <th> Téléphone </th>
                <th> Email </th>
                                    <th> Nom de la formation </th>
                    <th> Votre civilité </th>
                    <th> Objectif de la formation </th>
                    <th> Durée de la formation </th>
                                                        <th> Cout de la formation </th>
                                <th> Titre professionnel </th>
                <th> Vos prérequis </th>
                <th> Session de formation </th>
<th> Status </th>
            <th> Modifier </th>
<th> Afficher </th>
<th> Supprimer </t  h>
</tr>
            </thead>
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 46, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 47
            echo "<tbody>
        <tr>
                <td> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo " </td>
<td> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "nom", [], "any", false, false, false, 50), "html", null, true);
            echo " </td>
<td> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "prenom", [], "any", false, false, false, 51), "html", null, true);
            echo " </td>
<td> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "telephone", [], "any", false, false, false, 52), "html", null, true);
            echo " </td>
<td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "email", [], "any", false, false, false, 53), "html", null, true);
            echo " </td>

                <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "nomFormation", [], "any", false, false, false, 55), "html", null, true);
            echo " </td>
                <td> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "civilite", [], "any", false, false, false, 56), "html", null, true);
            echo " </td>
                <td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "objectifFormation", [], "any", false, false, false, 57), "html", null, true);
            echo " </td>
                                <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dateFormation", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "coutFormation", [], "any", false, false, false, 59), "html", null, true);
            echo " </td>
<td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "titreProfessionnel", [], "any", false, false, false, 60), "html", null, true);
            echo " </td>
                <td> ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "preRequis", [], "any", false, false, false, 61), "html", null, true);
            echo " </td>
<td> ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "sessions", [], "any", false, false, false, 62), "html", null, true);
            echo " </td>
<td> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "status", [], "any", false, false, false, 63), "html", null, true);
            echo " </td>
<td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierFormations_index", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherFormations_index", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerFormations_index", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">Supprimer</a></td>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "                <td colspan=\"5\">
                    Vous n'avez pas de médiats enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 81,  257 => 73,  247 => 68,  240 => 66,  236 => 65,  232 => 64,  228 => 63,  224 => 62,  220 => 61,  216 => 60,  212 => 59,  208 => 58,  204 => 57,  200 => 56,  196 => 55,  191 => 53,  187 => 52,  183 => 51,  179 => 50,  175 => 49,  171 => 47,  166 => 46,  136 => 19,  125 => 10,  115 => 9,  104 => 83,  102 => 81,  97 => 78,  95 => 9,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Liste des formations : 
 {% endblock %}

{% block body %}

{% block content %}
<div>
    <h1>
     bienvenu(e) !
     Liste des formations :
     </h1>

    <br /><br />
    <hr />
    <br />
    <a href=\"{{ path('nouvelleFormation_index') }}\">Ajouter Une Nouvelle Formation ! </a>
<br /><br />
    
    
    <table border=\"1\">
            
            <thead>
                <tr>
                    <th>Id</th>
                    <th> Nom du stagiaire </th>
<th> Prénom du stagiaire </th>
                <th> Téléphone </th>
                <th> Email </th>
                                    <th> Nom de la formation </th>
                    <th> Votre civilité </th>
                    <th> Objectif de la formation </th>
                    <th> Durée de la formation </th>
                                                        <th> Cout de la formation </th>
                                <th> Titre professionnel </th>
                <th> Vos prérequis </th>
                <th> Session de formation </th>
<th> Status </th>
            <th> Modifier </th>
<th> Afficher </th>
<th> Supprimer </t  h>
</tr>
            </thead>
            {% for formation in formations %}
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
<td><a href=\"{{ path('modifierFormations_index', {'id': formation.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherFormations_index', {'id': formation.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerFormations_index', {'id': formation.id }) }}\">Supprimer</a></td>
                {% else %}
                <td colspan=\"5\">
                    Vous n'avez pas de médiats enregistré dans votre base de données !
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

</div>
{% endblock %}

<br/><br/>

{% block footer %}
{% endblock %}

{% endblock %}
", "formations/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\index.html.twig");
    }
}
