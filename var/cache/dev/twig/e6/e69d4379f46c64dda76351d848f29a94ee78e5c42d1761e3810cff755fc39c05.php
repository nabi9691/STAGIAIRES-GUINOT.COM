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
class __TwigTemplate_c6059fdbc27bccfee9415f378e7af24a6d39f3992ca6413c308a1f1886d54d0f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/afficherUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/afficherUtilisateur.html.twig"));

        // line 1
        echo "<html>
    <head>
     ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "
        
        
        <title>Afficher utilisateur</title>
    </head>

<body>

   ";
        // line 11
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "


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
                <h1>Afficher utilisateur</h1> 
                  ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 68
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
        // line 77
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 78
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

        

   
  
</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "    

    <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                            <tr>
                                <th>Id</th>
                                <th> Formation </th>
                                <th>Civilité</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th> Adresse </th> 
                                <th> Code postal </th> 
                                <th> Villes </th> 
                <th> Téléphone </th>
                <th> Email </th>
                </tr>
        </thead>
            
            
                <tbody>
                                    <tr>
                        <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 49, $this->source); })()), "formation", [], "any", false, false, false, 49), "html", null, true);
        echo "</td>
                        <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 50, $this->source); })()), "civilite", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                                                <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 51, $this->source); })()), "nom", [], "any", false, false, false, 51)), "html", null, true);
        echo "</td>
                        <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 52, $this->source); })()), "prenom", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
                        <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 53, $this->source); })()), "adresse", [], "any", false, false, false, 53), "html", null, true);
        echo "</td>
                        <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 54, $this->source); })()), "codePostal", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                        <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 55, $this->source); })()), "pays", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                        <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 56, $this->source); })()), "telephone", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
                        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), "html", null, true);
        echo "</td>
                                            </tr>
                    </tbody>
    </table>
    </div>

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
        return array (  191 => 57,  187 => 56,  183 => 55,  179 => 54,  175 => 53,  171 => 52,  167 => 51,  163 => 50,  159 => 49,  155 => 48,  132 => 27,  122 => 26,  101 => 78,  97 => 77,  85 => 68,  79 => 64,  77 => 26,  59 => 11,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
     {{ include('linkCss.html.twig') }}
        
        
        <title>Afficher utilisateur</title>
    </head>

<body>

   {{ include('navbar.html.twig') }}


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
                <h1>Afficher utilisateur</h1> 
                  {% block content %}
    

    <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                            <tr>
                                <th>Id</th>
                                <th> Formation </th>
                                <th>Civilité</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th> Adresse </th> 
                                <th> Code postal </th> 
                                <th> Villes </th> 
                <th> Téléphone </th>
                <th> Email </th>
                </tr>
        </thead>
            
            
                <tbody>
                                    <tr>
                        <td>{{ utilisateur.id }}</td>
                        <td>{{ utilisateur.formation }}</td>
                        <td>{{ utilisateur.civilite }}</td>
                                                <td>{{ utilisateur.nom|upper }}</td>
                        <td>{{ utilisateur.prenom }}</td>
                        <td>{{ utilisateur.adresse }}</td>
                        <td>{{ utilisateur.codePostal }}</td>
                        <td>{{ utilisateur.pays }}</td>
                        <td>{{ utilisateur.telephone }}</td>
                        <td>{{ utilisateur.email }}</td>
                                            </tr>
                    </tbody>
    </table>
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

", "utilisateurs/afficherUtilisateur.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\utilisateurs\\afficherUtilisateur.html.twig");
    }
}
