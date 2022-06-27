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

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/index.html.twig"));

        // line 1
        echo "

  <html>
    <head>
     ";
        // line 5
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "
        
        
        <title>Messagerie</title>
    </head>

<body>

   ";
        // line 13
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "


 

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Messagerie</h2>
        </div>
      </div>
    </div>
  </section>

  <section class=\"meetings-page\" id=\"meetings\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"meeting-single-item\">
                <div class=\"thumb\">
                  <img src=\"/images/single-meeting.jpg\" alt=\"\">
                </div>
                <div class=\"down-content\">
                  ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 81
        echo "    <p>Expediteur :";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81), "nom", [], "any", false, false, false, 81), "html", null, true);
        echo "</p>
<p> Prenom :";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "prenom", [], "any", false, false, false, 82), "html", null, true);
        echo "</p>
<p>Messages envoyer :";
        // line 83
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83), "messageEnvoyer", [], "any", false, false, false, 83)), "html", null, true);
        echo "</p>
<p>Messages reçu :";
        // line 84
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "messageRecu", [], "any", false, false, false, 84)), "html", null, true);
        echo "</p>
<br />
<p>Destinataire :";
        // line 86
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "messageEnvoyer", [], "any", false, false, false, 86)), "html", null, true);
        echo "</p>
<p>Messages envoyer :";
        // line 87
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "messageEnvoyer", [], "any", false, false, false, 87)), "html", null, true);
        echo "</p>
<p>Messages reçu :";
        // line 88
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "messageRecu", [], "any", false, false, false, 88)), "html", null, true);
        echo "</p>

                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a \"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">retour a la page d'Acceuil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  ";
        // line 102
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 103
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

        

   
  
</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 40
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 41
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouveauMessage_index");
        echo "\">Nouveau message </a>

    <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                   
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
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["message"]);
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 61
            echo "
            
<tbody>
<tr>
                                <td> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo " </td>
<td> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "titreMessage", [], "any", false, false, false, 66), "html", null, true);
            echo " </td>
                <td> ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "contenuMessage", [], "any", false, false, false, 67), "html", null, true);
            echo " </td>
                <td> ";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "creerDate", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "siMessageLu", [], "any", false, false, false, 69), "html", null, true);
            echo " </td>
                <td> ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "expediteur", [], "any", false, false, false, 70), "nom", [], "any", false, false, false, 70), "html", null, true);
            echo " </td>
                <td> ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "destinataire", [], "any", false, false, false, 71), "nom", [], "any", false, false, false, 71), "html", null, true);
            echo " </td>
                                <td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierMessage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherMessage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerMessage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">Supprimer</a></td>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "            </tr>
        </tbody>
    </table>

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
        return array (  251 => 76,  243 => 74,  239 => 73,  235 => 72,  231 => 71,  227 => 70,  223 => 69,  219 => 68,  215 => 67,  211 => 66,  207 => 65,  201 => 61,  197 => 60,  174 => 41,  164 => 40,  143 => 103,  139 => 102,  127 => 93,  119 => 88,  115 => 87,  111 => 86,  106 => 84,  102 => 83,  98 => 82,  93 => 81,  91 => 40,  61 => 13,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

  <html>
    <head>
     {{ include('linkCss.html.twig') }}
        
        
        <title>Messagerie</title>
    </head>

<body>

   {{ include('navbar.html.twig') }}


 

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Messagerie</h2>
        </div>
      </div>
    </div>
  </section>

  <section class=\"meetings-page\" id=\"meetings\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"meeting-single-item\">
                <div class=\"thumb\">
                  <img src=\"/images/single-meeting.jpg\" alt=\"\">
                </div>
                <div class=\"down-content\">
                  {% block content %}
    <a href=\"{{ path('nouveauMessage_index') }}\">Nouveau message </a>

    <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                   
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
            {% endfor %}
            </tr>
        </tbody>
    </table>

    {% endblock %}
    <p>Expediteur :{{ app.user.nom }}</p>
<p> Prenom :{{ app.user.prenom }}</p>
<p>Messages envoyer :{{ app.user.messageEnvoyer|length }}</p>
<p>Messages reçu :{{ app.user.messageRecu|length }}</p>
<br />
<p>Destinataire :{{ app.user.messageEnvoyer|length }}</p>
<p>Messages envoyer :{{ app.user.messageEnvoyer|length }}</p>
<p>Messages reçu :{{ app.user.messageRecu|length }}</p>

                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a \"{{ path('accueil_index') }}\">retour a la page d'Acceuil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  {{ include('footer.html.twig') }}
{{ include('scriptJS.html.twig') }}

        

   
  
</body>

</html>

", "messages/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\messages\\index.html.twig");
    }
}
