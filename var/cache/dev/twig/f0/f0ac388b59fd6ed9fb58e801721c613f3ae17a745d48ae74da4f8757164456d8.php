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

/* activites/nouvelleActivites.html.twig */
class __TwigTemplate_8271b7dc74d7da5e8c78966b9f67bd6afbd2a79ca31011e71bbec3d914c3a1e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/nouvelleActivites.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/nouvelleActivites.html.twig"));

        // line 1
        echo "

<html>
    <head>

    ";
        // line 6
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "    
        
        <title>Activités</title>
    </head>

<body>

   


  ";
        // line 16
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Mes activités !</h2>
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
                  <h1> Ajoutée une activité  </h1> <br><br>
                   ";
        // line 41
        echo twig_include($this->env, $context, "activites/formulaireActivites.html.twig");
        echo "
\t\t\t\t  
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                 <a href=\"";
        // line 46
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
        // line 56
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 57
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

   
  
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "activites/nouvelleActivites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 57,  112 => 56,  99 => 46,  91 => 41,  63 => 16,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<html>
    <head>

    {{ include('linkCss.html.twig') }}    
        
        <title>Activités</title>
    </head>

<body>

   


  {{ include('navbar.html.twig') }}

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Mes activités !</h2>
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
                  <h1> Ajoutée une activité  </h1> <br><br>
                   {{ include('activites/formulaireActivites.html.twig') }}
\t\t\t\t  
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
", "activites/nouvelleActivites.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\activites\\nouvelleActivites.html.twig");
    }
}
