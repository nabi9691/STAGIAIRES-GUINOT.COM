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

/* messages/afficherMessage.html.twig */
class __TwigTemplate_13fc5a4b4d0128be59a0aada6a9b91043a2958af232d72699258db383cfc3bb2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/afficherMessage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/afficherMessage.html.twig"));

        // line 1
        echo "<html>
    <head>
     ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "
        
        
        <title>Centre Guinot</title>
    </head>

<body>

   ";
        // line 11
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "


 

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>La formation</h2>
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
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">REVENIR À L'ACCEUIL</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  ";
        // line 84
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 85
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

        

   
  
</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 39
        echo "    

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
                    </tr>
                </thead>
            
 <tbody>
<tr>
                                <td> ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
        echo " </td>
<td> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 57, $this->source); })()), "titreMessage", [], "any", false, false, false, 57), "html", null, true);
        echo " </td>
                <td> ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 58, $this->source); })()), "contenuMessage", [], "any", false, false, false, 58), "html", null, true);
        echo " </td>
                <td> ";
        // line 59
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 59, $this->source); })()), "creerDate", [], "any", false, false, false, 59), "d/m/Y"), "html", null, true);
        echo " </td>
<td> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 60, $this->source); })()), "siMessageLu", [], "any", false, false, false, 60), "html", null, true);
        echo " </td>
                <td> ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 61, $this->source); })()), "expediteur", [], "any", false, false, false, 61), "nom", [], "any", false, false, false, 61), "html", null, true);
        echo " </td>
                <td> ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 62, $this->source); })()), "destinataire", [], "any", false, false, false, 62), "nom", [], "any", false, false, false, 62), "html", null, true);
        echo " </td>
                </tr>
<tr>
</tr>
</tbody>
    </table>
    <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
        echo "\"> Retour à la liste des messages :</a>
</div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "messages/afficherMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 68,  187 => 62,  183 => 61,  179 => 60,  175 => 59,  171 => 58,  167 => 57,  163 => 56,  144 => 39,  134 => 38,  113 => 85,  109 => 84,  97 => 75,  91 => 71,  89 => 38,  59 => 11,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
     {{ include('linkCss.html.twig') }}
        
        
        <title>Centre Guinot</title>
    </head>

<body>

   {{ include('navbar.html.twig') }}


 

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>La formation</h2>
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
                    </tr>
                </thead>
            
 <tbody>
<tr>
                                <td> {{ message.id }} </td>
<td> {{ message.titreMessage }} </td>
                <td> {{ message.contenuMessage }} </td>
                <td> {{ message.creerDate|date(\"d/m/Y\") }} </td>
<td> {{ message.siMessageLu }} </td>
                <td> {{ message.expediteur.nom }} </td>
                <td> {{ message.destinataire.nom }} </td>
                </tr>
<tr>
</tr>
</tbody>
    </table>
    <a href=\"{{ path('message_index') }}\"> Retour à la liste des messages :</a>
</div>
    {% endblock %}

                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"{{ path('accueil_index') }}\">REVENIR À L'ACCEUIL</a>
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

", "messages/afficherMessage.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\messages\\afficherMessage.html.twig");
    }
}
