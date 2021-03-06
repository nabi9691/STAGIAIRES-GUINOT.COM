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
          <h2>Introduction de l'??tablissement</h2>
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
                  <p>11 Rue Georges Enesco, 94000 Cr??teil</p>
                  <p class=\"description\">
                    L?????tablissement Bioinformatique, est une ??cole de Formation Professionnelle en d??veloppement Et en Informatique de Gestion, 
                    Software et R??seaux. R??f??renc??e Qualiopi. le centre propose de nombreuses formations num??riques pour cr??er, valoriser ou d??velopper 
                    des projet personnel ou professionnel.
                  <br><br>
                  Avec des formateurs passionn??s et exp??riment??s dans leurs domaines attentifs ?? la satisfaction de chacun de ses stagiaires, mettent tout 
                  en place pour que la formation se d??roule dans les meilleures conditions possibles. 
                    <br><br>
                    L???Atelier Digital ???BIOInformatique???, est un centre de formation labellis?? QUALIOPI. L???attestation QUALIOPI indique une qualit?? de mise en ??uvre des formations,
                     pour le d??veloppement et l???acquisition des comp??tences. Le centre dispose ??galement d???un parc informatique ?? la pointe de la technologie pour les formations num??riques. </br><br>
                    
                    <b>Formations :</b> 
                    <br> <br>
                      Liste des formations propos?? par l'??tablissement <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeDesFormations_index");
        echo "\">(lien)</a>
                    
              
                  </p>
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">REVENIR ?? L'ACCEUIL</a>
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
        return array (  129 => 70,  125 => 69,  113 => 60,  103 => 53,  58 => 11,  47 => 3,  43 => 1,);
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
          <h2>Introduction de l'??tablissement</h2>
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
                  <p>11 Rue Georges Enesco, 94000 Cr??teil</p>
                  <p class=\"description\">
                    L?????tablissement Bioinformatique, est une ??cole de Formation Professionnelle en d??veloppement Et en Informatique de Gestion, 
                    Software et R??seaux. R??f??renc??e Qualiopi. le centre propose de nombreuses formations num??riques pour cr??er, valoriser ou d??velopper 
                    des projet personnel ou professionnel.
                  <br><br>
                  Avec des formateurs passionn??s et exp??riment??s dans leurs domaines attentifs ?? la satisfaction de chacun de ses stagiaires, mettent tout 
                  en place pour que la formation se d??roule dans les meilleures conditions possibles. 
                    <br><br>
                    L???Atelier Digital ???BIOInformatique???, est un centre de formation labellis?? QUALIOPI. L???attestation QUALIOPI indique une qualit?? de mise en ??uvre des formations,
                     pour le d??veloppement et l???acquisition des comp??tences. Le centre dispose ??galement d???un parc informatique ?? la pointe de la technologie pour les formations num??riques. </br><br>
                    
                    <b>Formations :</b> 
                    <br> <br>
                      Liste des formations propos?? par l'??tablissement <a href=\"{{ path('listeDesFormations_index') }}\">(lien)</a>
                    
              
                  </p>
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"{{ path('accueil_index') }}\">REVENIR ?? L'ACCEUIL</a>
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
