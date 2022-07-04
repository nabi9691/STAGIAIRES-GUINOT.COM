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

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/index.html.twig"));

        // line 1
        echo "<html>
    <head>
     ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo " 
        
        <title>Admin</title>
    </head>

<body>

   

";
        // line 12
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>Admin</h6>
          <h2>Gerer la liste des Utilisateur</h2>
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
                  <h1>Admin</h1><br>
                <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelUtilisateur_index");
        echo "\">Nouvelle utilisateur</a>
                <br><br>
                  ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 89
        echo "                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 92
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
        // line 103
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
  ";
        // line 104
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "
 

</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "    
                <table class=\"table table-responsive\">
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
                <th> Modifier </th>
                <th> Afficher </th>
                <th> Supprimer </th>
                </tr>
                </thead>
       ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["utilisateur"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 60
            echo "
<tbody>
<tr>
<td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
<td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "formation", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
<td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "civilite", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
<td>";
            // line 66
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nom", [], "any", false, false, false, 66)), "html", null, true);
            echo "</td>
<td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenom", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
<td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "adresse", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "codePostal", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "villes", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
<td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "telephone", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
<td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
<td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierUtilisateur_index", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherUtilisateur_index", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerUtilisateur_index", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">Supprimer</a></td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
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
        // line 84
        echo "        </tbody>
    </table>

</div>
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
        return array (  244 => 84,  233 => 78,  225 => 75,  221 => 74,  217 => 73,  213 => 72,  209 => 71,  205 => 70,  201 => 69,  197 => 68,  193 => 67,  189 => 66,  185 => 65,  181 => 64,  177 => 63,  172 => 60,  167 => 59,  146 => 40,  136 => 39,  118 => 104,  114 => 103,  100 => 92,  95 => 89,  93 => 39,  88 => 37,  60 => 12,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
     {{ include('linkCss.html.twig') }} 
        
        <title>Admin</title>
    </head>

<body>

   

{{ include('navbar.html.twig') }}

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>Admin</h6>
          <h2>Gerer la liste des Utilisateur</h2>
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
                  <h1>Admin</h1><br>
                <a href=\"{{ path('nouvelUtilisateur_index') }}\">Nouvelle utilisateur</a>
                <br><br>
                  {% block content %}
    
                <table class=\"table table-responsive\">
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
                <th> Modifier </th>
                <th> Afficher </th>
                <th> Supprimer </th>
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
<td><a href=\"{{ path('modifierUtilisateur_index', {'id': utilisateur.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherUtilisateur_index', {'id': utilisateur.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerUtilisateur_index', {'id': utilisateur.id }) }}\">Supprimer</a></td>
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

", "utilisateurs/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\utilisateurs\\index.html.twig");
    }
}
