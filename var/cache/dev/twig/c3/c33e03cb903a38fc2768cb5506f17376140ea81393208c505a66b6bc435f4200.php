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
class __TwigTemplate_90a6b9c97b5f0c372145dc07e9b80b76e9868436ea236ddfc2510fca96a3de2f extends Template
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
        // line 87
        echo "
<br/><br/>

";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
        
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
<p> test : ";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25));
        echo "</p>
<a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelUtilisateur_index");
        echo "\">Nouvelle utilisateur</a>

<br/><br/>
\t\t<h1>
\t\t\tListe des utilisateurs :
</h1>
<br/><br/>
<hr/>
<br/>

<table border=\"1\">
<thead>
<tr>
<th> Id </th>
<th> Formation </th>
<th> Civilité </th>
<th> Nom </th>
<th> Prénom </th>
<th>Adresse  </th>
<th> Code Postal </th>
<th> Villes </th>
<th> Téléphone </th>
<th> Email </th>
<th> Message envoyer </th>
<th> Message reçu </th>
</tr>
</thead>
";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateur"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 54
            echo "
<tbody>
<tr>
<td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
<td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "formation", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
<td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "civilite", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 60)), "html", null, true);
            echo "</td>
<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
<td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "adresse", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "codePostal", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "villes", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "telephone", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
<td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>
<td>";
            // line 67
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "messageEnvoyer", [], "any", false, false, false, 67)), "html", null, true);
            echo "</td>
<td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "messageRecu", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "login", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "password", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                                <td><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierUtilisateur_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherUtilisateur_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerUtilisateur_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">Supprimer</a></td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 76
            echo "                <tr>
                <td colspan=\"5\">
                    Vous n'avez pas d'utilisateurs enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 91
        echo "<p>
<a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\"> Retour à la page d'accueil :</a><br>

</p>
";
        
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
        return array (  293 => 92,  290 => 91,  280 => 90,  266 => 82,  255 => 76,  247 => 73,  243 => 72,  239 => 71,  235 => 70,  231 => 69,  227 => 68,  223 => 67,  219 => 66,  215 => 65,  211 => 64,  207 => 63,  203 => 62,  199 => 61,  195 => 60,  191 => 59,  187 => 58,  183 => 57,  178 => 54,  173 => 53,  143 => 26,  139 => 25,  136 => 24,  126 => 23,  116 => 90,  111 => 87,  109 => 23,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
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
<p> test : {{ dump( app.user ) }}</p>
<a href=\"{{ path('nouvelUtilisateur_index') }}\">Nouvelle utilisateur</a>

<br/><br/>
\t\t<h1>
\t\t\tListe des utilisateurs :
</h1>
<br/><br/>
<hr/>
<br/>

<table border=\"1\">
<thead>
<tr>
<th> Id </th>
<th> Formation </th>
<th> Civilité </th>
<th> Nom </th>
<th> Prénom </th>
<th>Adresse  </th>
<th> Code Postal </th>
<th> Villes </th>
<th> Téléphone </th>
<th> Email </th>
<th> Message envoyer </th>
<th> Message reçu </th>
</tr>
</thead>
{% for utilisateur in utilisateur %}

<tbody>
<tr>
<td>{{ utilisateur.id }}</td>
<td>{{ utilisateur.formation }}</td>
<td>{{ utilisateur.civilite }}</td>
<td>{{ utilisateur.nom|upper }}</td>
<td>{{ utilisateur.prenom }}</td>
<td>{{ utilisateur.adresse }}</td>
<td>{{ utilisateur.codePostal }}</td>
<td>{{ utilisateur.villes }}</td>
<td>{{ utilisateur.telephone }}</td>
<td>{{ utilisateur.email }}</td>
<td>{{ utilisateur.messageEnvoyer|length() }}</td>
<td>{{ utilisateur.messageRecu }}</td>
<td>{{ utilisateur.login }}</td>
<td>{{ utilisateur.password }}</td>
                                <td><a href=\"{{ path('modifierUtilisateur_index', {'id': message.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherUtilisateur_index', {'id': message.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerUtilisateur_index', {'id': message.id }) }}\">Supprimer</a></td>
                </tr>
                {% else %}
                <tr>
                <td colspan=\"5\">
                    Vous n'avez pas d'utilisateurs enregistré dans votre base de données !
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>

</div>
{% endblock %}

<br/><br/>

{% block footer %}
<p>
<a href=\"{{ path('accueil_index') }}\"> Retour à la page d'accueil :</a><br>

</p>
{% endblock %}
{% endblock %}


", "utilisateurs/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\utilisateurs\\index.html.twig");
    }
}
