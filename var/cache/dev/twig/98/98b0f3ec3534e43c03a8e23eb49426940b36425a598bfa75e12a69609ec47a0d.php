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

/* utilisateurs/index.html.twig */
class __TwigTemplate_27b2211b2195ff74f939bba0fe83dc931d57b6e8fd1f8dc6816f086c3d86a0c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateurs/index.html.twig", 1);
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

        echo "Liste des utilisateurs!
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<style>
\t\t.contenu {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}

\t\t.contenu code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>
<br/><br/>


";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 104
        echo "
\t\t<br/><br/>

\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "\t<div class=\"container\">

<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelUtilisateur_index");
        echo "\">Nouvelle utilisateur</a>

<br/><br/>
\t\t<h1>
\t\t\tListe des utilisateurs :
\t\t</h1>
\t\t<br/><br/>
\t\t<hr/>
\t\t<br/>

\t\t<table border=\"1\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tCivilité
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tNom
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tPrénom
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tDate de naissance
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t</th>
<th>Status</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tRole
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>Modifier</th>
\t\t\t\t\t\t\t<th>Afficher</th>
\t\t\t\t\t\t\t<th>Supprimer</th>
</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateur"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 66
            echo "<tr>
\t\t\t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "civilite", [], "any", false, false, false, 67), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 69)), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 71), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "dateNaiss", [], "any", false, false, false, 73), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "login", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>
<td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "status", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
\t\t\t\t\t\t

\t\t\t\t\t\t";
            // line 81
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "roles", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 82
                echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                // line 83
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo ", 
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
<td><a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierUtilisateur_index", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherUtilisateur_index", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerUtilisateur_index", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">Supprimer</a></td>
</tr>

\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tVous n'avez pas d'enregistrement!
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t\t</tbody>
\t\t</table>
\t\t</div>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateurs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 100,  257 => 94,  248 => 90,  244 => 89,  240 => 88,  236 => 86,  227 => 83,  224 => 82,  219 => 81,  213 => 77,  208 => 75,  203 => 73,  198 => 71,  193 => 69,  188 => 67,  185 => 66,  180 => 65,  138 => 26,  134 => 24,  124 => 23,  110 => 104,  108 => 23,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des utilisateurs!
{% endblock %}

{% block body %}
\t<style>
\t\t.contenu {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}

\t\t.contenu code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>
<br/><br/>


{% block content %}
\t<div class=\"container\">

<a href=\"{{ path('nouvelUtilisateur_index') }}\">Nouvelle utilisateur</a>

<br/><br/>
\t\t<h1>
\t\t\tListe des utilisateurs :
\t\t</h1>
\t\t<br/><br/>
\t\t<hr/>
\t\t<br/>

\t\t<table border=\"1\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tCivilité
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tNom
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tPrénom
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tDate de naissance
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tLogin
\t\t\t\t\t\t\t</th>
<th>Status</th>
\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\tRole
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t<th>Modifier</th>
\t\t\t\t\t\t\t<th>Afficher</th>
\t\t\t\t\t\t\t<th>Supprimer</th>
</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
{% for utilisateur in utilisateur %}
<tr>
\t\t\t\t\t\t<td>{{ utilisateur.civilite }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ utilisateur.nom|upper }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ utilisateur.prenom }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ utilisateur.dateNaiss|date(\"d/m/Y\") }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ utilisateur.login }}</td>
\t\t\t\t\t\t<td>
<td>{{ utilisateur.status }}</td>
\t\t\t\t\t\t

\t\t\t\t\t\t{# affichage du role de l'utilisateur #}
\t\t\t\t\t\t{% for role in utilisateur.roles %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{{ role }}, 
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t
<td><a href=\"{{ path('modifierUtilisateur_index', {'id': utilisateur.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherUtilisateur_index', {'id': utilisateur.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerUtilisateur_index', {'id': utilisateur.id }) }}\">Supprimer</a></td>
</tr>

\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\tVous n'avez pas d'enregistrement!
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t</div>
\t\t{% endblock %}

\t\t<br/><br/>

\t
\t{% endblock %}
", "utilisateurs/index.html.twig", "C:\\wamp64\\www\\Retrouvailles_NABI.com\\templates\\utilisateurs\\index.html.twig");
    }
}
