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

/* messages/index.html.twig */
class __TwigTemplate_b379cd3109b314d96c95911eb9151b8bd285da2dcd84464579dbb032f6832637 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "messages/index.html.twig", 1);
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

        echo " Liste des messages! ";
        
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
        echo "
";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "
<br/><br/>

";
        // line 75
        $this->displayBlock('footer', $context, $blocks);
        
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
        echo "<div>
    <h1>
     bienvenu(e) !
     Messagerie de Guinot :
     </h1>
<br /><br />
<p>Expediteur :";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15), "nom", [], "any", false, false, false, 15), "html", null, true);
        echo "</p>
<p> Prenom :";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "prenom", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
<p>Messages envoyer :";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "messageEnvoyer", [], "any", false, false, false, 17)), "html", null, true);
        echo "</p>
<p>Messages reçu :";
        // line 18
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "messageRecu", [], "any", false, false, false, 18)), "html", null, true);
        echo "</p>
<br />
<p>Destinataire :";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "destinataire", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
<p>Messages envoyer :";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "messageEnvoyer", [], "any", false, false, false, 21)), "html", null, true);
        echo "</p>
<p>Messages reçu :";
        // line 22
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "messageRecu", [], "any", false, false, false, 22)), "html", null, true);
        echo "</p>
<br />
        
    <br /><br />
    <hr />
    <br />
    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouveauMessage_index");
        echo "\">Nouveau message </a>
<br /><br />
    
    <table border=\"1\">
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Titre du message </th>
                    <th> Contenu du message </th>
                    <th> Creer date </th>
                    <th> Si le message est lu </th>
                    <th> Expediteur </th>
                    <th> Destinataire </th>
                    <th> Modifier </th>
<th> Afficher </th>
<th> Supprimer </t  h>
</tr>
            </thead>
            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["message"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 47
            echo "<tbody>
<tr>
                                <td> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo " </td>
<td> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "titreMessage", [], "any", false, false, false, 50), "html", null, true);
            echo " </td>
                <td> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "contenuMessage", [], "any", false, false, false, 51), "html", null, true);
            echo " </td>
                <td> ";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "creerDate", [], "any", false, false, false, 52), "d/m/Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "siMessageLu", [], "any", false, false, false, 53), "html", null, true);
            echo " </td>
                <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "expediteur", [], "any", false, false, false, 54), "nom", [], "any", false, false, false, 54), "html", null, true);
            echo " </td>
                <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "destinataire", [], "any", false, false, false, 55), "nom", [], "any", false, false, false, 55), "html", null, true);
            echo " </td>
                                <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierMessage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherMessage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerMessage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">Supprimer</a></td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "                <tr>
                <td colspan=\"5\">
                    Vous n'avez pas de messages enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 76
        echo "<p>
<a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\"> Retour à la page d'accueil :</a><br>

</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "messages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 77,  271 => 76,  261 => 75,  247 => 67,  236 => 61,  228 => 58,  224 => 57,  220 => 56,  216 => 55,  212 => 54,  208 => 53,  204 => 52,  200 => 51,  196 => 50,  192 => 49,  188 => 47,  183 => 46,  162 => 28,  153 => 22,  149 => 21,  145 => 20,  140 => 18,  136 => 17,  132 => 16,  128 => 15,  120 => 9,  110 => 8,  100 => 75,  95 => 72,  93 => 8,  90 => 7,  80 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Liste des messages! {% endblock %}


{% block body %}

{% block content %}
<div>
    <h1>
     bienvenu(e) !
     Messagerie de Guinot :
     </h1>
<br /><br />
<p>Expediteur :{{ app.user.nom }}</p>
<p> Prenom :{{ app.user.prenom }}</p>
<p>Messages envoyer :{{ app.user.messageEnvoyer|length }}</p>
<p>Messages reçu :{{ app.user.messageRecu|length }}</p>
<br />
<p>Destinataire :{{ app.user.destinataire }}</p>
<p>Messages envoyer :{{ app.user.messageEnvoyer|length }}</p>
<p>Messages reçu :{{ app.user.messageRecu|length }}</p>
<br />
        
    <br /><br />
    <hr />
    <br />
    <a href=\"{{ path('nouveauMessage_index') }}\">Nouveau message </a>
<br /><br />
    
    <table border=\"1\">
            <thead>
                <tr>
                    <th> Id </th>
                    <th> Titre du message </th>
                    <th> Contenu du message </th>
                    <th> Creer date </th>
                    <th> Si le message est lu </th>
                    <th> Expediteur </th>
                    <th> Destinataire </th>
                    <th> Modifier </th>
<th> Afficher </th>
<th> Supprimer </t  h>
</tr>
            </thead>
            {% for message in message %}
<tbody>
<tr>
                                <td> {{ message.id }} </td>
<td> {{ message.titreMessage }} </td>
                <td> {{ message.contenuMessage }} </td>
                <td> {{ message.creerDate|date(\"d/m/Y\") }} </td>
<td> {{ message.siMessageLu }} </td>
                <td> {{ message.expediteur.nom }} </td>
                <td> {{ message.destinataire.nom }} </td>
                                <td><a href=\"{{ path('modifierMessage_index', {'id': message.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherMessage_index', {'id': message.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerMessage_index', {'id': message.id }) }}\">Supprimer</a></td>
                </tr>
                {% else %}
                <tr>
                <td colspan=\"5\">
                    Vous n'avez pas de messages enregistré dans votre base de données !
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
", "messages/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\messages\\index.html.twig");
    }
}
