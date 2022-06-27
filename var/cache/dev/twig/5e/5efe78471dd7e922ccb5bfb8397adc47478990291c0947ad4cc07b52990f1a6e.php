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

/* formations/BIOInformatique/pageAccueilBIOInformatique.html.twig */
class __TwigTemplate_ad50f75b31edc46ac283fd8760d5a39bc3e74cb25cc7e2de4f6638f097789f4b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/pageAccueilBIOInformatique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/pageAccueilBIOInformatique.html.twig"));

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
        // line 11
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "


 

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Introduction de l'établissement</h2>
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
                  <h1>BioGeSoft</h1>
                  <p>11 Rue Georges Enesco, 94000 Créteil</p>
                  <p class=\"description\">
                    L’établissement Bioinformatique, est une école de Formation Professionnelle en développement Et en Informatique de Gestion, 
                    Software et Réseaux. Référencée Qualiopi. le centre propose de nombreuses formations numériques pour créer, valoriser ou développer 
                    des projet personnel ou professionnel.
                  <br><br>
                  Avec des formateurs passionnés et expérimentés dans leurs domaines attentifs à la satisfaction de chacun de ses stagiaires, mettent tout 
                  en place pour que la formation se déroule dans les meilleures conditions possibles. 
                    <br><br>
                    L’Atelier Digital ‘BIOInformatique’, est un centre de formation labellisé QUALIOPI. L’attestation QUALIOPI indique une qualité de mise en œuvre des formations,
                     pour le développement et l’acquisition des compétences. Le centre dispose également d’un parc informatique à la pointe de la technologie pour les formations numériques. </br><br>
                    
                    <b>Formations :</b> 
                    <br> <br>
                      Liste des formations proposé par l'établissement <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeDesFormations_index");
        echo "\">(lien)</a>
                    
              
                  </p>
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
        // line 69
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 70
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

        

   
  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formations/BIOInformatique/pageAccueilBIOInformatique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 70,  122 => 69,  103 => 53,  58 => 11,  47 => 3,  43 => 1,);
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
          <h2>Introduction de l'établissement</h2>
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
                  <h1>BioGeSoft</h1>
                  <p>11 Rue Georges Enesco, 94000 Créteil</p>
                  <p class=\"description\">
                    L’établissement Bioinformatique, est une école de Formation Professionnelle en développement Et en Informatique de Gestion, 
                    Software et Réseaux. Référencée Qualiopi. le centre propose de nombreuses formations numériques pour créer, valoriser ou développer 
                    des projet personnel ou professionnel.
                  <br><br>
                  Avec des formateurs passionnés et expérimentés dans leurs domaines attentifs à la satisfaction de chacun de ses stagiaires, mettent tout 
                  en place pour que la formation se déroule dans les meilleures conditions possibles. 
                    <br><br>
                    L’Atelier Digital ‘BIOInformatique’, est un centre de formation labellisé QUALIOPI. L’attestation QUALIOPI indique une qualité de mise en œuvre des formations,
                     pour le développement et l’acquisition des compétences. Le centre dispose également d’un parc informatique à la pointe de la technologie pour les formations numériques. </br><br>
                    
                    <b>Formations :</b> 
                    <br> <br>
                      Liste des formations proposé par l'établissement <a href=\"{{ path('listeDesFormations_index') }}\">(lien)</a>
                    
              
                  </p>
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

</html>", "formations/BIOInformatique/pageAccueilBIOInformatique.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\BIOInformatique\\pageAccueilBIOInformatique.html.twig");
    }
}
