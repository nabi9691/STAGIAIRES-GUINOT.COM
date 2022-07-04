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

/* langages/index.html.twig */
class __TwigTemplate_21e5fce2b405c8440db901800a7d003369e863d017413868775e4e9d328efafc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/index.html.twig"));

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
          <h2>Gerer la liste des langages</h2>
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
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouveauLangage_index");
        echo "\">Ajouter Un Nouveau langage ! </a>
                <br><br>
                  ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                 <a href=\"";
        // line 80
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
        // line 91
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 92
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
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Nom </th>
                    <th scope=\"col\">Nom du langage</th>
                    <th scope=\"col\">date du langage</th>
                    <th scope=\"col\">objectif</th>
                    <th scope=\"col\">Modifier</th>
                    <th scope=\"col\">Afficher</th>
                    <th scope=\"col\">Supprimer</th>
                    </tr>
                </thead>
            
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["langage"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["langage"]) {
            // line 55
            echo "<tbody>
        <tr>
                <td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "id", [], "any", false, false, false, 57), "html", null, true);
            echo " </td>
<td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "nom", [], "any", false, false, false, 58), "html", null, true);
            echo " </td>
                <td> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "nomLangage", [], "any", false, false, false, 59), "html", null, true);
            echo " </td>
<td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "date", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["langage"], "objectif", [], "any", false, false, false, 61), "html", null, true);
            echo " </td>
<td><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierLangage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["langage"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherLangage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["langage"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerLangage_index", ["id" => twig_get_attribute($this->env, $this->source, $context["langage"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Supprimer</a></td>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "                <td colspan=\"5\">
                    Vous n'avez pas de langage enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
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
        return "langages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 71,  208 => 66,  201 => 64,  197 => 63,  193 => 62,  189 => 61,  185 => 60,  181 => 59,  177 => 58,  173 => 57,  169 => 55,  164 => 54,  147 => 39,  137 => 38,  117 => 92,  113 => 91,  99 => 80,  94 => 77,  92 => 38,  87 => 36,  59 => 11,  48 => 3,  44 => 1,);
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
          <h2>Gerer la liste des langages</h2>
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
                <a href=\"{{ path('nouveauLangage_index') }}\">Ajouter Un Nouveau langage ! </a>
                <br><br>
                  {% block content %}
    
                <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                    <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Nom </th>
                    <th scope=\"col\">Nom du langage</th>
                    <th scope=\"col\">date du langage</th>
                    <th scope=\"col\">objectif</th>
                    <th scope=\"col\">Modifier</th>
                    <th scope=\"col\">Afficher</th>
                    <th scope=\"col\">Supprimer</th>
                    </tr>
                </thead>
            
            {% for langage in langage %}
<tbody>
        <tr>
                <td> {{ langage.id }} </td>
<td> {{ langage.nom }} </td>
                <td> {{ langage.nomLangage }} </td>
<td> {{ langage.date|date(\"d/m/Y\") }} </td>
<td> {{ langage.objectif }} </td>
<td><a href=\"{{ path('modifierLangage_index', {'id': langage.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherLangage_index', {'id': langage.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerLangage_index', {'id': langage.id }) }}\">Supprimer</a></td>
                {% else %}
                <td colspan=\"5\">
                    Vous n'avez pas de langage enregistré dans votre base de données !
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




", "langages/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\langages\\index.html.twig");
    }
}
