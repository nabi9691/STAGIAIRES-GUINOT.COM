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

/* formations/index.html.twig */
class __TwigTemplate_5b5b0f17157e350705c000cc3a4f04f65a4f70dd548d2790ef9801a3e93c2614 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/index.html.twig"));

        // line 1
        echo "<html>
    <head>
     ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo " 
        
        <title>Biogesoft</title>
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
          <h6>BioGeSoft</h6>
          <h2>Gerer la liste des formations</h2>
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
                  <h1>BioGeSoft</h1><br>
                <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelleFormation_index");
        echo "\">Ajouter Une Nouvelle Formation ! </a>
                <br><br>
                  ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 86
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
        // line 97
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
  ";
        // line 98
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
                <thead class=\"thead-dark\">
                    <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Votre civilité</th>
                    <th scope=\"col\">Nom du stagiaire</th>
                    <th scope=\"col\">Téléphone</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Nom de la formation</th>
                    <th scope=\"col\">date de la formation</th>
                    <th scope=\"col\">Cout de la formation</th>
                    <th scope=\"col\">Modifier</th>
                    <th scope=\"col\">Afficher</th>
                    <th scope=\"col\">Supprimer</th>
                    </tr>
                </thead>
            
            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 59
            echo "<tbody>
        <tr>
                <td> ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo " </td>
                <td> ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "civilite", [], "any", false, false, false, 62), "html", null, true);
            echo " </td>
                <td> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "nom", [], "any", false, false, false, 63), "html", null, true);
            echo " </td>
                <td> ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "telephone", [], "any", false, false, false, 64), "html", null, true);
            echo " </td>
                <td> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "email", [], "any", false, false, false, 65), "html", null, true);
            echo " </td>
                <td> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "nomFormation", [], "any", false, false, false, 66), "html", null, true);
            echo " </td>
                <td> ";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dateFormation", [], "any", false, false, false, 67), "d/m/Y"), "html", null, true);
            echo " </td>
                <td> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "coutFormation", [], "any", false, false, false, 68), "html", null, true);
            echo " </td>
<td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierFormations_index", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherFormations_index", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerFormations_index", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">Supprimer</a></td>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "                <td colspan=\"5\">
                    Vous n'avez pas de formation enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 78,  222 => 73,  215 => 71,  211 => 70,  207 => 69,  203 => 68,  199 => 67,  195 => 66,  191 => 65,  187 => 64,  183 => 63,  179 => 62,  175 => 61,  171 => 59,  166 => 58,  146 => 40,  136 => 39,  118 => 98,  114 => 97,  100 => 86,  95 => 83,  93 => 39,  88 => 37,  60 => 12,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
     {{ include('linkCss.html.twig') }} 
        
        <title>Biogesoft</title>
    </head>

<body>

   

{{ include('navbar.html.twig') }}

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Gerer la liste des formations</h2>
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
                  <h1>BioGeSoft</h1><br>
                <a href=\"{{ path('nouvelleFormation_index') }}\">Ajouter Une Nouvelle Formation ! </a>
                <br><br>
                  {% block content %}
    
                <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                    <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Votre civilité</th>
                    <th scope=\"col\">Nom du stagiaire</th>
                    <th scope=\"col\">Téléphone</th>
                    <th scope=\"col\">Email</th>
                    <th scope=\"col\">Nom de la formation</th>
                    <th scope=\"col\">date de la formation</th>
                    <th scope=\"col\">Cout de la formation</th>
                    <th scope=\"col\">Modifier</th>
                    <th scope=\"col\">Afficher</th>
                    <th scope=\"col\">Supprimer</th>
                    </tr>
                </thead>
            
            {% for formation in formations %}
<tbody>
        <tr>
                <td> {{ formation.id }} </td>
                <td> {{ formation.civilite }} </td>
                <td> {{ formation.nom }} </td>
                <td> {{ formation.telephone }} </td>
                <td> {{ formation.email }} </td>
                <td> {{ formation.nomFormation }} </td>
                <td> {{ formation.dateFormation|date(\"d/m/Y\") }} </td>
                <td> {{ formation.coutFormation }} </td>
<td><a href=\"{{ path('modifierFormations_index', {'id': formation.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherFormations_index', {'id': formation.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerFormations_index', {'id': formation.id }) }}\">Supprimer</a></td>
                {% else %}
                <td colspan=\"5\">
                    Vous n'avez pas de formation enregistré dans votre base de données !
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

", "formations/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\index.html.twig");
    }
}
