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

/* medias/index.html.twig */
class __TwigTemplate_2833c53804fa19b6c053ebc0e8aa8605c30f43402da5fddb2c4a4480695057a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/index.html.twig"));

        // line 1
        echo "<html>
    <head>
     ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "  
        
        <title>Médias</title>
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
          <h2>Gérer la liste des médias</h2>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouveauMedias_index");
        echo "\">Ajouter Un Nouveau médias ! </a>
<br 
                <br><br>
                  ";
        // line 39
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
                    <th scope=\"col\">Titre du média </th>
                    <th scope=\"col\">Contenu</th>
                    <th scope=\"col\">Date d'inportation  </th>

                    <th scope=\"col\">Modifier</th>
                    <th scope=\"col\">Afficher</th>
                    <th scope=\"col\">Supprimer</th>
                    </tr>
                </thead>
            
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["medias"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["medias"]) {
            // line 56
            echo "<tbody>
        <tr>
                <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medias"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo " </td>
<td> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medias"], "imageFile", [], "any", false, false, false, 59), "html", null, true);
            echo " </td>
                <td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medias"], "contenu", [], "any", false, false, false, 60), "html", null, true);
            echo " </td>
<td> ";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["medias"], "date", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true);
            echo " </td>
<td><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierMedias_index", ["id" => twig_get_attribute($this->env, $this->source, $context["medias"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherMedias_index", ["id" => twig_get_attribute($this->env, $this->source, $context["medias"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerMedias_index", ["id" => twig_get_attribute($this->env, $this->source, $context["medias"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Supprimer</a></td>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "                <td colspan=\"5\">
                    Vous n'avez pas de médias enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['medias'], $context['_parent'], $context['loop']);
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
        return "medias/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 71,  205 => 66,  198 => 64,  194 => 63,  190 => 62,  186 => 61,  182 => 60,  178 => 59,  174 => 58,  170 => 56,  165 => 55,  148 => 40,  138 => 39,  118 => 92,  114 => 91,  100 => 80,  95 => 77,  93 => 39,  87 => 36,  59 => 11,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
     {{ include('linkCss.html.twig') }}  
        
        <title>Médias</title>
    </head>

<body>

   
{{ include('navbar.html.twig') }}

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Gérer la liste des médias</h2>
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
                  <a href=\"{{ path('nouveauMedias_index') }}\">Ajouter Un Nouveau médias ! </a>
<br 
                <br><br>
                  {% block content %}
    
                <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                    <tr>
                    <th scope=\"col\">ID</th>
                    <th scope=\"col\">Titre du média </th>
                    <th scope=\"col\">Contenu</th>
                    <th scope=\"col\">Date d'inportation  </th>

                    <th scope=\"col\">Modifier</th>
                    <th scope=\"col\">Afficher</th>
                    <th scope=\"col\">Supprimer</th>
                    </tr>
                </thead>
            
            {% for medias in medias %}
<tbody>
        <tr>
                <td> {{ medias.id }} </td>
<td> {{ medias.imageFile }} </td>
                <td> {{ medias.contenu }} </td>
<td> {{ medias.date|date(\"d/m/Y\") }} </td>
<td><a href=\"{{ path('modifierMedias_index', {'id': medias.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherMedias_index', {'id': medias.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerMedias_index', {'id': medias.id }) }}\">Supprimer</a></td>
                {% else %}
                <td colspan=\"5\">
                    Vous n'avez pas de médias enregistré dans votre base de données !
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




", "medias/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\index.html.twig");
    }
}
