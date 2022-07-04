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

/* menu_bio_ge_soft/index.html.twig */
class __TwigTemplate_281d8db5551cccc2e618b06bbcd7f3cad2827babd0f0769b1bb4d67a64ad6dc9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu_bio_ge_soft/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu_bio_ge_soft/index.html.twig"));

        // line 1
        echo "<html>
    <head>
    ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo " 
        
        <title>BioGeSoft</title>
    </head>

<body>

   ";
        // line 10
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
                  <h1>Menu de navigation BioGeSoft</h1>
                  <p class=\"description\">
                <br> <br>
                    •  <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilBIOInformatique_index");
        echo "\">Biogesoft</a>  <br>
                    •   <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeDesFormations_index");
        echo "\">Liste des formations</a>  <br>
                    •   <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index");
        echo "\">Gestion des formations </a> <br>
                    •  <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("langages_index");
        echo "\">Gestion des langages</a> <br>
                    •  <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_index");
        echo "\">Gestion des cours </a> <br>
                    •  <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
        echo "\">Gestion des contacts </a> <br>
                    •  <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
        echo "\">Gestion des médias </a> <br>
                    •  <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites_index");
        echo "\">Gestion des activitées </a> <br>

                              </p>
\t\t\t\t  
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 40
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
        // line 51
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 52
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

   
  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu_bio_ge_soft/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 52,  128 => 51,  114 => 40,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
    {{ include('linkCss.html.twig') }} 
        
        <title>BioGeSoft</title>
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
                  <h1>Menu de navigation BioGeSoft</h1>
                  <p class=\"description\">
                <br> <br>
                    •  <a href=\"{{ path('pageAccueilBIOInformatique_index') }}\">Biogesoft</a>  <br>
                    •   <a href=\"{{ path('listeDesFormations_index') }}\">Liste des formations</a>  <br>
                    •   <a href=\"{{ path('formations_index') }}\">Gestion des formations </a> <br>
                    •  <a href=\"{{ path('langages_index') }}\">Gestion des langages</a> <br>
                    •  <a href=\"{{ path('cours_index') }}\">Gestion des cours </a> <br>
                    •  <a href=\"{{ path('contacts_index') }}\">Gestion des contacts </a> <br>
                    •  <a href=\"{{ path('medias_index') }}\">Gestion des médias </a> <br>
                    •  <a href=\"{{ path('activites_index') }}\">Gestion des activitées </a> <br>

                              </p>
\t\t\t\t  
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

</html>", "menu_bio_ge_soft/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\menu_bio_ge_soft\\index.html.twig");
    }
}
