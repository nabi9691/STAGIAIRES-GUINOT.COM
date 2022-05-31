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
class __TwigTemplate_97cffe2785488297b7a93d24e0e46f9b6ccfb5d891db96f7f3b8cbfcc0268f1b extends Template
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
        // line 62
        echo "
<br/><br/>

";
        // line 65
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
    <hr />
    <br />
    <a href=\"";
        // line 18
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["message"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            echo "<tbody>
<tr>
                                <td> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo " </td>
<td> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "titreMessage", [], "any", false, false, false, 40), "html", null, true);
            echo " </td>
                <td> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "contenuMessage", [], "any", false, false, false, 41), "html", null, true);
            echo " </td>
                <td> ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "creerDate", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "siMessageLu", [], "any", false, false, false, 43), "html", null, true);
            echo " </td>
                <td> ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "expediteur", [], "any", false, false, false, 44), "nom", [], "any", false, false, false, 44), "html", null, true);
            echo " </td>
                <td> ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "destinataire", [], "any", false, false, false, 45), "nom", [], "any", false, false, false, 45), "html", null, true);
            echo " </td>
                                <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierMessage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherMessage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerMessage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Supprimer</a></td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
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
        // line 57
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 65
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 66
        echo "<p>
<a href=\"";
        // line 67
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
        return array (  243 => 67,  240 => 66,  230 => 65,  216 => 57,  205 => 51,  197 => 48,  193 => 47,  189 => 46,  185 => 45,  181 => 44,  177 => 43,  173 => 42,  169 => 41,  165 => 40,  161 => 39,  157 => 37,  152 => 36,  131 => 18,  120 => 9,  110 => 8,  100 => 65,  95 => 62,  93 => 8,  90 => 7,  80 => 6,  61 => 3,  38 => 1,);
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
