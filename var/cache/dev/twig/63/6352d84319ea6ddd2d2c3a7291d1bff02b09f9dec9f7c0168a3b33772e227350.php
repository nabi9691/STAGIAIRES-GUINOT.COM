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

/* formations/BIOInformatique/listeDesFormationsBIOInformatique.html.twig */
class __TwigTemplate_080455cfac75edfb7b3ea7d4f943756e42031c376934899ccfe3c5d8f5c80a76 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/listeDesFormationsBIOInformatique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/listeDesFormationsBIOInformatique.html.twig"));

        // line 1
        echo "<html>
    <head>
    ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo " 
        
        <title>Centre Guinot</title>
    </head>

<body>

   


   ";
        // line 13
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Les formations de l'établissement</h2>
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
                  <h1>Formation de l'établissement</h1>
                  <p class=\"description\">
                    <b>Liste des formations :</b> 
                    <br> <br>
                    •  <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursEnVideo_index");
        echo "\">Cours en video</a>  <br>
                    •   <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursEnVideo_index");
        echo "\">Formation en Php</a>  <br>
                    •   <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursEnVideo_index");
        echo "\">Formation en Java</a> <br>
                    •  <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursEnVideo_index");
        echo "\">Formation en Symfony</a> <br>
                    •   Formation en Developement Web (En cours de réalisation)<br>
                    •   Formation en Python (En cours de réalisation)<br>
                    •   Formation en JavaScipt (En cours de réalisation)<br>
                    •   Formation en DotNet (En cours de réalisation)<br>
                    •   Formation en C++ (En cours de réalisation)<br>

                  </p>
\t\t\t\t  
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"meetings.html\">Back To Meetings List</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  

    ";
        // line 67
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 68
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

   
  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formations/BIOInformatique/listeDesFormationsBIOInformatique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 68,  129 => 67,  103 => 44,  99 => 43,  95 => 42,  91 => 41,  60 => 13,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
    {{ include('linkCss.html.twig') }} 
        
        <title>Centre Guinot</title>
    </head>

<body>

   


   {{ include('navbar.html.twig') }}

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Les formations de l'établissement</h2>
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
                  <h1>Formation de l'établissement</h1>
                  <p class=\"description\">
                    <b>Liste des formations :</b> 
                    <br> <br>
                    •  <a href=\"{{ path('coursEnVideo_index') }}\">Cours en video</a>  <br>
                    •   <a href=\"{{ path('coursEnVideo_index') }}\">Formation en Php</a>  <br>
                    •   <a href=\"{{ path('coursEnVideo_index') }}\">Formation en Java</a> <br>
                    •  <a href=\"{{ path('coursEnVideo_index') }}\">Formation en Symfony</a> <br>
                    •   Formation en Developement Web (En cours de réalisation)<br>
                    •   Formation en Python (En cours de réalisation)<br>
                    •   Formation en JavaScipt (En cours de réalisation)<br>
                    •   Formation en DotNet (En cours de réalisation)<br>
                    •   Formation en C++ (En cours de réalisation)<br>

                  </p>
\t\t\t\t  
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"meetings.html\">Back To Meetings List</a>
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

</html>", "formations/BIOInformatique/listeDesFormationsBIOInformatique.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\BIOInformatique\\listeDesFormationsBIOInformatique.html.twig");
    }
}
