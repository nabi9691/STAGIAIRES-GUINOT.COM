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

/* activites/index.html.twig */
class __TwigTemplate_ba9eca8a995b0b53f45fcd17ba0f148207ad9c5900b735811457ffe422e2aed7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/index.html.twig"));

        // line 1
        echo "
<html>
    <head>
     ";
        // line 4
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
          <h2>Gerer la liste des activités</h2>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouvelleActivites_index");
        echo "\">Ajouter Une Nouvelle activités ! </a>
                <br><br>
                  ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 82
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
        // line 93
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
  ";
        // line 94
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
                    <th>Id</th>
<th> Nom </th>
                    <th> Résumé </th>
                    <th> Date </th>
                                        <th> Status </th>
                <th> Modifier </th>
<th> Afficher </th>
<th> Supprimer </t  h>
</tr>
            </thead>
         ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["activite"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 55
            echo "
<tbody>
 <tr>
                <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo " </td>
                <td> ";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "nom", [], "any", false, false, false, 59), "html", null, true);
            echo " </td>
             <td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "resume", [], "any", false, false, false, 60), "html", null, true);
            echo " </td>
                             <td> ";
            // line 61
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "date", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activite"], "status", [], "any", false, false, false, 62), "html", null, true);
            echo " </td>

                <td><a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierActivites_index", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherActivites_index", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 65)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerActivites_index", ["id" => twig_get_attribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">Supprimer</a></td>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "                <td colspan=\"5\">
                    Vous n'avez pas de médiats enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activites/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 74,  209 => 69,  201 => 66,  197 => 65,  193 => 64,  188 => 62,  184 => 61,  180 => 60,  176 => 59,  172 => 58,  167 => 55,  162 => 54,  146 => 40,  136 => 39,  118 => 94,  114 => 93,  100 => 82,  95 => 79,  93 => 39,  88 => 37,  60 => 12,  49 => 4,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html>
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
          <h2>Gerer la liste des activités</h2>
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
                <a href=\"{{ path('nouvelleActivites_index') }}\">Ajouter Une Nouvelle activités ! </a>
                <br><br>
                  {% block content %}
    
                <table class=\"table table-responsive\">
               <thead>
                  <tr>
                    <th>Id</th>
<th> Nom </th>
                    <th> Résumé </th>
                    <th> Date </th>
                                        <th> Status </th>
                <th> Modifier </th>
<th> Afficher </th>
<th> Supprimer </t  h>
</tr>
            </thead>
         {% for activite in activite %}

<tbody>
 <tr>
                <td> {{ activite.id }} </td>
                <td> {{ activite.nom }} </td>
             <td> {{ activite.resume }} </td>
                             <td> {{ activite.date|date(\"d/m/Y\") }} </td>
<td> {{ activite.status  }} </td>

                <td><a href=\"{{ path('modifierActivites_index', {'id': activite.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherActivites_index', {'id': activite.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerActivites_index', {'id': activite.id }) }}\">Supprimer</a></td>

            {% else %}
                <td colspan=\"5\">
                    Vous n'avez pas de médiats enregistré dans votre base de données !
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

", "activites/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\activites\\index.html.twig");
    }
}
