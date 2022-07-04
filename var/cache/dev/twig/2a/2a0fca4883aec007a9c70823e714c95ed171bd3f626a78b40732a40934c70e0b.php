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

/* medias/afficherMedias.html.twig */
class __TwigTemplate_97869d3563d3def2a354a7e6264a5a4d1980ba72e4557f4a85de2cea214991d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/afficherMedias.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/afficherMedias.html.twig"));

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
        // line 69
        echo "                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                 <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">Revenir à l'accueil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  

 ";
        // line 83
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 84
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
            

<tbody>
        <tr>
                <td> ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new RuntimeError('Variable "medias" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
        echo " </td>
<td> ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new RuntimeError('Variable "medias" does not exist.', 59, $this->source); })()), "titre", [], "any", false, false, false, 59), "html", null, true);
        echo " </td>
                <td> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new RuntimeError('Variable "medias" does not exist.', 60, $this->source); })()), "contenu", [], "any", false, false, false, 60), "html", null, true);
        echo " </td>
<td> ";
        // line 61
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new RuntimeError('Variable "medias" does not exist.', 61, $this->source); })()), "date", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true);
        echo " </td>
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
        return "medias/afficherMedias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 61,  176 => 60,  172 => 59,  168 => 58,  148 => 40,  138 => 39,  118 => 84,  114 => 83,  100 => 72,  95 => 69,  93 => 39,  87 => 36,  59 => 11,  48 => 3,  44 => 1,);
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
            

<tbody>
        <tr>
                <td> {{ medias.id }} </td>
<td> {{ medias.titre }} </td>
                <td> {{ medias.contenu }} </td>
<td> {{ medias.date|date(\"d/m/Y\") }} </td>
            </tr>
           
        </tbody>
    </table>

</div>
{% endblock %}
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                 <a href=\"{{ path('accueil_index') }}\">Revenir à l'accueil</a>
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




", "medias/afficherMedias.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\afficherMedias.html.twig");
    }
}
