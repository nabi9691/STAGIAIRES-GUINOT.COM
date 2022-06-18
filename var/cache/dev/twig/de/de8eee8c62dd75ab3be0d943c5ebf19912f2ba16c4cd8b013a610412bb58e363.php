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

/* langages/index.html.twig */
class __TwigTemplate_21e5fce2b405c8440db901800a7d003369e863d017413868775e4e9d328efafc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "langages/index.html.twig", 1);
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
        echo "Liste des langages : 
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
        // line 66
        echo "
<br/><br/>

";
        // line 69
        $this->displayBlock('footer', $context, $blocks);
        // line 71
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
     Liste des langages :
     </h1>

    <br /><br />
    <hr />
    <br />
    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouveauLangage_index");
        echo "\">Ajouter Un Nouveau langage ! </a>
<br /><br />
    
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
                <th> Modifier </th>
<th> Afficher </th>
<th> Supprimer </t  h>
</tr>
            </thead>
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["langage"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
            // line 41
            echo "<tbody>
        <tr>
                <td> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo " </td>
<td> ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "nom", [], "any", false, false, false, 44), "html", null, true);
            echo " </td>
<td> ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "prenom", [], "any", false, false, false, 45), "html", null, true);
            echo " </td>
<td> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "telephone", [], "any", false, false, false, 46), "html", null, true);
            echo " </td>
<td> ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "email", [], "any", false, false, false, 47), "html", null, true);
            echo " </td>
                <td> ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "nomLangage", [], "any", false, false, false, 48), "html", null, true);
            echo " </td>
<td> ";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "date", [], "any", false, false, false, 49), "d/m/Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "objectif", [], "any", false, false, false, 50), "html", null, true);
            echo " </td>
<td> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "coefficient", [], "any", false, false, false, 51), "html", null, true);
            echo " </td>
<td><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierLangage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["langage"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherLangage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["langage"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerLangage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["langage"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">Supprimer</a></td>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                <td colspan=\"5\">
                    Vous n'avez pas de langage enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
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
        return "langages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 69,  230 => 61,  220 => 56,  213 => 54,  209 => 53,  205 => 52,  201 => 51,  197 => 50,  193 => 49,  189 => 48,  185 => 47,  181 => 46,  177 => 45,  173 => 44,  169 => 43,  165 => 41,  160 => 40,  136 => 19,  125 => 10,  115 => 9,  104 => 71,  102 => 69,  97 => 66,  95 => 9,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Liste des langages : 
 {% endblock %}

{% block body %}

{% block content %}
<div>
    <h1>
     bienvenu(e) !
     Liste des langages :
     </h1>

    <br /><br />
    <hr />
    <br />
    <a href=\"{{ path('nouveauLangage_index') }}\">Ajouter Un Nouveau langage ! </a>
<br /><br />
    
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
                <th> Modifier </th>
<th> Afficher </th>
<th> Supprimer </t  h>
</tr>
            </thead>
            {% for langage in langage %}
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
<td><a href=\"{{ path('modifierLangage_index', {'id': langage.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherLangage_index', {'id': langage.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerLangage_index', {'id': langage.id }) }}\">Supprimer</a></td>
                {% else %}
                <td colspan=\"5\">
                    Vous n'avez pas de langage enregistré dans votre base de données !
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
", "langages/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\langages\\index.html.twig");
    }
}
