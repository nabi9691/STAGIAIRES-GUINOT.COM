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

/* formations/BIOInformatique/coursEnVidéo.html.twig */
class __TwigTemplate_b38fd9cb192ff74a7e99328d60c67190fd6237be6e6a49ed5f5f95f431f91c55 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/coursEnVidéo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/coursEnVidéo.html.twig"));

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
        // line 12
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
                  <h1>Voici le cours </h1>
                  <p class=\"description\">
                    <b>Votre cours : </b> 
                    
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 32
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
        // line 41
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 42
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "


  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formations/BIOInformatique/coursEnVidéo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 42,  94 => 41,  82 => 32,  59 => 12,  47 => 3,  43 => 1,);
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
                  <h1>Voici le cours </h1>
                  <p class=\"description\">
                    <b>Votre cours : </b> 
                    
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

</html>", "formations/BIOInformatique/coursEnVidéo.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\BIOInformatique\\coursEnVidéo.html.twig");
    }
}
