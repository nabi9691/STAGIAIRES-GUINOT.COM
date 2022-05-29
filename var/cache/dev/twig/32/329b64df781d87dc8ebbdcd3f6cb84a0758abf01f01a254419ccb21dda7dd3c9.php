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

/* contacts/index.html.twig */
class __TwigTemplate_ea017136eb5df92ca2c39cc65486ae0e1296f3ace5e91961e4a205471d7e5873 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contacts/index.html.twig", 1);
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
        echo "Liste des contacts : 
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
        // line 76
        echo "
<br/><br/>

";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 81
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
     Liste des contacts :
     </h1>

    <br /><br />
    <hr />
    <br />
    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouveauContacts_index");
        echo "\">Ajouter Un Nouveau contact ! </a>
<br /><br />
    
    <table border=\"1\">
            
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Nom </th>
                    <th> Prénom </th>
                    <th> Date de naissance </th>
                    <th> Téléphone </th>
                                        <th> Email </th>
                    <th> Fax : </th>
<th> Civilité </th>
                                        <th> Adresse </th>
                    <th> Code-Postal </th>
                    <th> Villes </th>
                <th> Départements </th>
                    <th> Pays </th>
                    <th> Status </th>
                    <th> Modifier </th>
<th> Afficher </th>
<th> Supprimer </t  h>
</tr>
            </thead>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["contact"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 46
            echo "<tbody>
        <tr>
                <td> ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo " </td>
                <td> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 49), "html", null, true);
            echo " </td>
                <td> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 50), "html", null, true);
            echo " </td>
                <td> ";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "date", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "telephone", [], "any", false, false, false, 52), "html", null, true);
            echo " </td>
<td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 53), "html", null, true);
            echo " </td>
<td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "fax", [], "any", false, false, false, 54), "html", null, true);
            echo " </td>
<td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "civilite", [], "any", false, false, false, 55), "html", null, true);
            echo " </td>
<td> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "adresse", [], "any", false, false, false, 56), "html", null, true);
            echo " </td>
<td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "codePostal", [], "any", false, false, false, 57), "html", null, true);
            echo " </td>
                <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "villes", [], "any", false, false, false, 58), "html", null, true);
            echo " </td>
<td> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "departements", [], "any", false, false, false, 59), "html", null, true);
            echo " </td>
<td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "pays", [], "any", false, false, false, 60), "html", null, true);
            echo " </td>
<td> ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "status", [], "any", false, false, false, 61), "html", null, true);
            echo " </td>
<td><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierContacts_index", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherContacts_index", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerContacts_index", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Supprimer</a></td>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "                <td colspan=\"5\">
                    Vous n'avez pas de contacts enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
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
        return "contacts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 79,  255 => 71,  245 => 66,  238 => 64,  234 => 63,  230 => 62,  226 => 61,  222 => 60,  218 => 59,  214 => 58,  210 => 57,  206 => 56,  202 => 55,  198 => 54,  194 => 53,  190 => 52,  186 => 51,  182 => 50,  178 => 49,  174 => 48,  170 => 46,  165 => 45,  136 => 19,  125 => 10,  115 => 9,  104 => 81,  102 => 79,  97 => 76,  95 => 9,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Liste des contacts : 
 {% endblock %}

{% block body %}

{% block content %}
<div>
    <h1>
     bienvenu(e) !
     Liste des contacts :
     </h1>

    <br /><br />
    <hr />
    <br />
    <a href=\"{{ path('nouveauContacts_index') }}\">Ajouter Un Nouveau contact ! </a>
<br /><br />
    
    <table border=\"1\">
            
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Nom </th>
                    <th> Prénom </th>
                    <th> Date de naissance </th>
                    <th> Téléphone </th>
                                        <th> Email </th>
                    <th> Fax : </th>
<th> Civilité </th>
                                        <th> Adresse </th>
                    <th> Code-Postal </th>
                    <th> Villes </th>
                <th> Départements </th>
                    <th> Pays </th>
                    <th> Status </th>
                    <th> Modifier </th>
<th> Afficher </th>
<th> Supprimer </t  h>
</tr>
            </thead>
            {% for contact in contact %}
<tbody>
        <tr>
                <td> {{ contact.id }} </td>
                <td> {{ contact.nom }} </td>
                <td> {{ contact.prenom }} </td>
                <td> {{ contact.date|date(\"d/m/Y\") }} </td>
<td> {{ contact.telephone }} </td>
<td> {{ contact.email }} </td>
<td> {{ contact.fax }} </td>
<td> {{ contact.civilite }} </td>
<td> {{ contact.adresse }} </td>
<td> {{ contact.codePostal }} </td>
                <td> {{ contact.villes }} </td>
<td> {{ contact.departements }} </td>
<td> {{ contact.pays }} </td>
<td> {{ contact.status }} </td>
<td><a href=\"{{ path('modifierContacts_index', {'id': contact.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherContacts_index', {'id': contact.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerContacts_index', {'id': contact.id }) }}\">Supprimer</a></td>
                {% else %}
                <td colspan=\"5\">
                    Vous n'avez pas de contacts enregistré dans votre base de données !
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
", "contacts/index.html.twig", "C:\\wamp64\\www\\Symfony\\STAGIAIRES-GUINOT.COM\\templates\\contacts\\index.html.twig");
    }
}
