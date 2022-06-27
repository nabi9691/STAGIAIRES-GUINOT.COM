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

/* medias/guinot/conseillerGuinot.html.twig */
class __TwigTemplate_a673d24b2dff39a94132094a7e84c5274043379e46a192f8f1a45c28af5c1e00 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/conseillerGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/conseillerGuinot.html.twig"));

        // line 1
        echo "<html>
    <head>
        <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"css/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"/css/templatemo-edu-meeting.css\">
    <link rel=\"stylesheet\" href=\"/css/owl.css\">
    <link rel=\"stylesheet\" href=\"/css/lightbox.css\">
    <link rel=\"stylesheet\" href=\"/css/flex-slider.css\">
<!-- Additional CSS Files -->

<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        
        
        <title>Centre Guinot</title>
    </head>

<body>

   


  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-12\">
                  <nav class=\"main-nav\">
                      <!-- ***** Logo Start ***** -->
                      <a href=\"index.html\" class=\"logo\">
                          Intern-finding
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class=\"nav\">
                          <li class=\"scroll-to-section\"><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\" class=\"active\">Acceuil</a></li>
                          <li class=\"has-sub\">
                              <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("introductionGuinot_index");
        echo "\">Centre Guinot</a>
                              <ul class=\"sub-menu\">
                                 <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("introductionGuinot_index");
        echo "\">Guinot</a></li>
                                  <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("motDuPresidentDeGuinot_index");
        echo "\">Mot du président</a></li>
                                  <li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historiqueGuinot_index");
        echo "\">Historique du centre</a></li>
                                  <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formationGuinot_index");
        echo "\">Liste des formations</a></li>
                              </ul>
                          </li>
                          <li class=\"has-sub\">
                              <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilBIOInformatique_index");
        echo "\">Biogesoft</a>
                              <ul class=\"sub-menu\">
                                  <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilBIOInformatique_index");
        echo "\">Biogesoft</a></li>
                                  <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index");
        echo "\">liste des formations</a></li>
                                  <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("langages_index");
        echo "\">liste des langages</a></li>
                                  
                              </ul>
                          </li>
                          <li class=\"scroll-to-section\"><a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
        echo "\">messagerie Public</a></li>
                          <li class=\"scroll-to-section\"><a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a></li> 
                          <li class=\"scroll-to-section\"><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Deconnexion</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>Centre Guinot</h6>
          <h2>Formation du centre Guinot</h2>
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
                  <h1>CONSEILLER RELATION CLIENT À DISTANCE</h1>
                  <p class=\"description\">

                    <b>Le métier et ses débouchés</b> <br><br>
                    Qu’il s’appelle téléacteur, téléconseiller, chargé de clientèle, le « Conseiller Relation Client à Distance » accueille,
                     conseille et assiste les clients ou les usagers par téléphone pour leur apporter une réponse adaptée à leur demande ou assure
                      des missions commerciales de conquête de marchés ou de fidélisation de clientèle. <br><br>
                      Longtemps considéré comme un « job » d’étudiant, le métier de téléconseiller se professionnalise et les entreprises recherchent de plus en plus des candidats compétents. <br><br>
                      L’évolution constante de la technologie permet d’offrir aujourd’hui dans le secteur des centres d’appels de réelles nouvelles opportunités d’emploi pour les personnes handicapées visuelles. <br><br>
                      La plupart des éditeurs de logiciels de centres d’appels permettent une bonne compatibilité avec les aides techniques adaptées sans aménagement spécifique important. <br><br>
                      Les centres d’appels proposent une multitude de métiers aux compétences spécifiques, permettant à chacun de se spécialiser dans le domaine qu’il souhaite : Conseiller Client dans une banque, 
                      3Hotliner informatique, Agent de réservation pour un club de vacances, Chargé Service Après Vente pour un fournisseur Internet ou de téléphonie mobile … <br><br>

                      Une première expérience professionnelle dans le domaine de la vente ou des compétences linguistiques comme une bonne connaissance de l’anglais ou d’une 2ème langue
                       européenne multiplient les chances de trouver rapidement un poste <br><br>

                      <b>Conditions d’admission</b> <br><br>
                      •  RQTH et orientation professionnelle de la CDAPH du département de résidence ; <br>
                      •  Participation à la journée d’accueil des candidats organisée au Centre Guinot ;
                 
                
                  </p>
\t\t\t\t  
                  
                    
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">Revenir à l'acceuil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  

  <section  class=\"meetings-page\" id=\"meetings\">
    <div class=\"footer\">
      <p>Copyright © 2022 Mohammed Nabi. All Rights Reserved. 
          <br>Design: <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">Mohammed NABI</a></p>
    </div>
  </section>
   
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "medias/guinot/conseillerGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 133,  202 => 119,  136 => 56,  132 => 55,  128 => 54,  121 => 50,  117 => 49,  113 => 48,  108 => 46,  101 => 42,  97 => 41,  93 => 40,  89 => 39,  84 => 37,  79 => 35,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
        <!-- Additional CSS Files -->
    <link rel=\"stylesheet\" href=\"css/fontawesome.css\">
    <link rel=\"stylesheet\" href=\"/css/templatemo-edu-meeting.css\">
    <link rel=\"stylesheet\" href=\"/css/owl.css\">
    <link rel=\"stylesheet\" href=\"/css/lightbox.css\">
    <link rel=\"stylesheet\" href=\"/css/flex-slider.css\">
<!-- Additional CSS Files -->

<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        
        
        <title>Centre Guinot</title>
    </head>

<body>

   


  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-12\">
                  <nav class=\"main-nav\">
                      <!-- ***** Logo Start ***** -->
                      <a href=\"index.html\" class=\"logo\">
                          Intern-finding
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class=\"nav\">
                          <li class=\"scroll-to-section\"><a href=\"{{ path('accueil_index') }}\" class=\"active\">Acceuil</a></li>
                          <li class=\"has-sub\">
                              <a href=\"{{ path('introductionGuinot_index') }}\">Centre Guinot</a>
                              <ul class=\"sub-menu\">
                                 <li><a href=\"{{ path('introductionGuinot_index') }}\">Guinot</a></li>
                                  <li><a href=\"{{ path('motDuPresidentDeGuinot_index') }}\">Mot du président</a></li>
                                  <li><a href=\"{{ path('historiqueGuinot_index') }}\">Historique du centre</a></li>
                                  <li><a href=\"{{ path('formationGuinot_index') }}\">Liste des formations</a></li>
                              </ul>
                          </li>
                          <li class=\"has-sub\">
                              <a href=\"{{ path('pageAccueilBIOInformatique_index') }}\">Biogesoft</a>
                              <ul class=\"sub-menu\">
                                  <li><a href=\"{{ path('pageAccueilBIOInformatique_index') }}\">Biogesoft</a></li>
                                  <li><a href=\"{{ path('formations_index') }}\">liste des formations</a></li>
                                  <li><a href=\"{{ path('langages_index') }}\">liste des langages</a></li>
                                  
                              </ul>
                          </li>
                          <li class=\"scroll-to-section\"><a href=\"{{ path('message_index') }}\">messagerie Public</a></li>
                          <li class=\"scroll-to-section\"><a href=\"{{ path('app_login') }}\">Connexion</a></li> 
                          <li class=\"scroll-to-section\"><a href=\"{{ path('app_logout') }}\">Deconnexion</a></li> 
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>Centre Guinot</h6>
          <h2>Formation du centre Guinot</h2>
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
                  <h1>CONSEILLER RELATION CLIENT À DISTANCE</h1>
                  <p class=\"description\">

                    <b>Le métier et ses débouchés</b> <br><br>
                    Qu’il s’appelle téléacteur, téléconseiller, chargé de clientèle, le « Conseiller Relation Client à Distance » accueille,
                     conseille et assiste les clients ou les usagers par téléphone pour leur apporter une réponse adaptée à leur demande ou assure
                      des missions commerciales de conquête de marchés ou de fidélisation de clientèle. <br><br>
                      Longtemps considéré comme un « job » d’étudiant, le métier de téléconseiller se professionnalise et les entreprises recherchent de plus en plus des candidats compétents. <br><br>
                      L’évolution constante de la technologie permet d’offrir aujourd’hui dans le secteur des centres d’appels de réelles nouvelles opportunités d’emploi pour les personnes handicapées visuelles. <br><br>
                      La plupart des éditeurs de logiciels de centres d’appels permettent une bonne compatibilité avec les aides techniques adaptées sans aménagement spécifique important. <br><br>
                      Les centres d’appels proposent une multitude de métiers aux compétences spécifiques, permettant à chacun de se spécialiser dans le domaine qu’il souhaite : Conseiller Client dans une banque, 
                      3Hotliner informatique, Agent de réservation pour un club de vacances, Chargé Service Après Vente pour un fournisseur Internet ou de téléphonie mobile … <br><br>

                      Une première expérience professionnelle dans le domaine de la vente ou des compétences linguistiques comme une bonne connaissance de l’anglais ou d’une 2ème langue
                       européenne multiplient les chances de trouver rapidement un poste <br><br>

                      <b>Conditions d’admission</b> <br><br>
                      •  RQTH et orientation professionnelle de la CDAPH du département de résidence ; <br>
                      •  Participation à la journée d’accueil des candidats organisée au Centre Guinot ;
                 
                
                  </p>
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
  
  

  <section  class=\"meetings-page\" id=\"meetings\">
    <div class=\"footer\">
      <p>Copyright © 2022 Mohammed Nabi. All Rights Reserved. 
          <br>Design: <a href=\"{{ path('accueil_index') }}\">Mohammed NABI</a></p>
    </div>
  </section>
   
", "medias/guinot/conseillerGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\conseillerGuinot.html.twig");
    }
}
