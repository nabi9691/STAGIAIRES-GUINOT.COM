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

/* utilisateurs/afficherUtilisateur.html.twig */
class __TwigTemplate_88aa51637e64831e085460b9651bc8cea4951247b67597f049fc2f18b1ee943e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/afficherUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/afficherUtilisateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateurs/afficherUtilisateur.html.twig", 1);
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
afficher utilisateur :
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
    Afficher utilisateur :
    </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th> Formation </th>
                 <th>Civilité</th>
                <th>Nom</th>
                <th>Prenom</th>
                 <th> Date de naissance</th> 
                 <th>Adresse</th> 
                 <th>Email</th> 
</tr>
        </thead>
        <tbody>
            <tr>
<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
<td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 29, $this->source); })()), "formation", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
<td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 30, $this->source); })()), "civilite", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
                        <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 31, $this->source); })()), "nom", [], "any", false, false, false, 31)), "html", null, true);
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), "html", null, true);
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 35, $this->source); })()), "dateNaiss", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 37, $this->source); })()), "pays", [], "any", false, false, false, 37), "html", null, true);
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 39, $this->source); })()), "telephone", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 41, $this->source); })()), "periode", [], "any", false, false, false, 41), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 42, $this->source); })()), "login", [], "any", false, false, false, 42), "html", null, true);
        echo "</td>
\t\t\t\t\t\t<td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 43, $this->source); })()), "password", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 46
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 46, $this->source); })()), "roles", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 47
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_escape_filter($this->env, $context["role"], "html", null, true);
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "

        </tr>
        </tbody>
    </table>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateurs/afficherUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 51,  173 => 48,  170 => 47,  165 => 46,  160 => 43,  156 => 42,  152 => 41,  148 => 40,  144 => 39,  139 => 37,  134 => 35,  129 => 33,  124 => 31,  120 => 30,  116 => 29,  112 => 28,  91 => 9,  81 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}

afficher utilisateur :
{% endblock %}

{% block content %}
    <h1>
    Afficher utilisateur :
    </h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th> Formation </th>
                 <th>Civilité</th>
                <th>Nom</th>
                <th>Prenom</th>
                 <th> Date de naissance</th> 
                 <th>Adresse</th> 
                 <th>Email</th> 
</tr>
        </thead>
        <tbody>
            <tr>
<td>{{ utilisateur.id }}</td>
<td>{{ utilisateur.formation }}</td>
<td>{{ utilisateur.civilite }}</td>
                        <td>{{ utilisateur.nom|upper }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ utilisateur.prenom }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ utilisateur.dateNaiss|date(\"d/m/Y\") }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ utilisateur.pays }}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>{{ utilisateur.telephone }}</td>
\t\t\t\t\t\t<td>{{ utilisateur.email }}</td>
\t\t\t\t\t\t<td>{{ utilisateur.periode }}</td>
\t\t\t\t\t\t<td>{{ utilisateur.login }}</td>
\t\t\t\t\t\t<td>{{ utilisateur.password }}</td>
\t\t\t\t\t\t
\t\t\t\t\t\t{# affichage du role de l'utilisateur #}
\t\t\t\t\t\t{% for role in utilisateur.roles %}
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{{ role }}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% endfor %}


        </tr>
        </tbody>
    </table>

    {% endblock %}
", "utilisateurs/afficherUtilisateur.html.twig", "C:\\wamp64\\www\\Symfony\\STAGIAIRES-GUINOT.COM\\templates\\utilisateurs\\afficherUtilisateur.html.twig");
    }
}
