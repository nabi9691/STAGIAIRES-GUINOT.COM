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

/* cours/index.html.twig */
class __TwigTemplate_ef07f38178d739c26b2086a13d0c8e43531fafacb6a6df8f49f3ac3e1194fd32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/index.html.twig"));

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
        // line 11
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Gérer la liste des formations</h2>
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
                  <img src=\"/images/single-meeting.jpg\" alt=\"BioGeSoft\">
                </div>
                <div class=\"down-content\">
                  <h1>BioGeSoft</h1><br>
                  <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouveauCours_index");
        echo "\">Ajouter Un Nouveau cours ! </a>
<br 
                <br><br>
                  ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                 <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">Revenir à l'acceuil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  

 ";
        // line 96
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 97
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
                    <th scope=\"col\">Civilité </th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Titre du cours</th>
                    <th scope=\"col\">Résumé</th>
                    <th scope=\"col\">Type du cours</th>
                    <th scope=\"col\">Date du cours</th>
                    <th scope=\"col\">Modifier</th>
                    <th scope=\"col\">Afficher</th>
                    <th scope=\"col\">Supprimer</th>
                    </tr>
                </thead>
            
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["cours"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 58
            echo "<tbody>
        <tr>
                <td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo " </td>
<td> ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "civilite", [], "any", false, false, false, 61), "html", null, true);
            echo " </td>
                <td> ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "nom", [], "any", false, false, false, 62), "html", null, true);
            echo " </td>
<td> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "titreCours", [], "any", false, false, false, 63), "html", null, true);
            echo " </td>
<td> ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "resume", [], "any", false, false, false, 64), "html", null, true);
            echo " </td>
<td> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "typeCours", [], "any", false, false, false, 65), "html", null, true);
            echo " </td>
<td> ";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "dateCours", [], "any", false, false, false, 66), "d/m/Y"), "html", null, true);
            echo " </td>
<td><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierCours_index", ["id" => twig_get_attribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherCours_index", ["id" => twig_get_attribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerCours_index", ["id" => twig_get_attribute($this->env, $this->source, $context["cours"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\">Supprimer</a></td>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            echo "                <td colspan=\"5\">
                    Vous n'avez pas de cours enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "           
        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 76,  219 => 71,  212 => 69,  208 => 68,  204 => 67,  200 => 66,  196 => 65,  192 => 64,  188 => 63,  184 => 62,  180 => 61,  176 => 60,  172 => 58,  167 => 57,  148 => 40,  138 => 39,  118 => 97,  114 => 96,  100 => 85,  95 => 82,  93 => 39,  87 => 36,  59 => 11,  48 => 3,  44 => 1,);
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
          <h2>Gérer la liste des formations</h2>
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
                  <img src=\"/images/single-meeting.jpg\" alt=\"BioGeSoft\">
                </div>
                <div class=\"down-content\">
                  <h1>BioGeSoft</h1><br>
                  <a href=\"{{ path('nouveauCours_index') }}\">Ajouter Un Nouveau cours ! </a>
<br 
                <br><br>
                  {% block content %}
    
                <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                    <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Civilité </th>
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Titre du cours</th>
                    <th scope=\"col\">Résumé</th>
                    <th scope=\"col\">Type du cours</th>
                    <th scope=\"col\">Date du cours</th>
                    <th scope=\"col\">Modifier</th>
                    <th scope=\"col\">Afficher</th>
                    <th scope=\"col\">Supprimer</th>
                    </tr>
                </thead>
            
            {% for cours in cours %}
<tbody>
        <tr>
                <td> {{ cours.id }} </td>
<td> {{ cours.civilite }} </td>
                <td> {{ cours.nom }} </td>
<td> {{ cours.titreCours }} </td>
<td> {{ cours.resume }} </td>
<td> {{ cours.typeCours }} </td>
<td> {{ cours.dateCours|date(\"d/m/Y\") }} </td>
<td><a href=\"{{ path('modifierCours_index', {'id': cours.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherCours_index', {'id': cours.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerCours_index', {'id': cours.id }) }}\">Supprimer</a></td>
                {% else %}
                <td colspan=\"5\">
                    Vous n'avez pas de cours enregistré dans votre base de données !
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
                 <a href=\"{{ path('accueil_index') }}\">Revenir à l'acceuil</a>
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




", "cours/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\cours\\index.html.twig");
    }
}
