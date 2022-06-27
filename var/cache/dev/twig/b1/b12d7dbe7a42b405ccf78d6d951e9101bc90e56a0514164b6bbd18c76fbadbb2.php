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

/* medias/guinot/motDuPresidentDeGuinot.html.twig */
class __TwigTemplate_cfdba368c685142e1f1f1782ba4f57898de7f5d93304c4544892e88b6aab6985 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/motDuPresidentDeGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/motDuPresidentDeGuinot.html.twig"));

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
          <h2>Le mot du president</h2>
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
                  <h1>Le mot du président</h1>
                  <p class=\"description\">
                    L’année 2021 devait être la fin de cette période exceptionnelle qu’est la
                    pandémie de Covid-19, pourtant en ce début d’année 2022 il serait plus juste
                    d’admettre que l’extraordinaire s’est transformé en étrange normalité. 
                    <br><br>
                    Pour l’association Paul Guinot, cela se ressent le plus fortement sur nos
                    activités de formations qualifiantes au sein de notre Etablissement et Services
                    de Réhabilitation Professionnelle, qui forme chaque année environ 150
                    stagiaires et étudiants aux métiers de masseur-kinésithérapeute, conseiller
                    relation client à distance et développeur web et web mobile.
                    <br><br>
                    En effet, si la qualité des formations repose en grande partie sur
                    l’expertise de nos formateurs, les moyens à notre disposition pour adapter
                    efficacement les supports de formation aux capacités des personnes
                    déficientes visuelles sont cruciaux. Or, en cette période de crise sanitaire, la
                    nécessité d’acquérir des outils techniques de compensation et de mettre en
                    place des solutions innovantes pour le téléenseignement est d’autant plus
                    renforcée. 
                    <br><br>
                    Il peut paraître trivial de rappeler que les personnes aveugles ont pour
                    caractéristique de ne pas voir, mais ce simple fait est parfois oublié par leurs
                    pairs voyants qui extrapolent la cécité à d’autres limitations. Entendons-nous
                    bien : l’incapacité à traiter des informations visuelles ne veut pas dire
                    incapacité à traiter l’information. Celle-ci peut être transmise autrement que
                    par voie visuelle, par exemple par le biais de dispositif tactile, comme les plages
                    brailles, ou par voie auditive, avec les logiciels de synthèse vocale.
                    Similairement, les personnes malvoyantes ne voient pas « comme tout le
                    monde », mais elles en sont capables grâce à une luminosité particulière ou un
                    logiciel d’agrandissement d’écran. Avec ces outils, la personne aveugle ou
                    malvoyante peut révéler son potentiel productif, à égalité avec la personne
                    voyante. C’est le principe même d’une société inclusive. 
                    <br><br>

                    Pour financer ces outils, mais aussi les innovations liées aux technologies
                    de téléenseignement adapté – indispensable en ces temps de pandémie – nous
                    passons principalement par le biais de la taxe d’apprentissage. Celle-ci est une
                    contribution obligatoire à la formation professionnelle égale à 0.68% de la
                    masse salariale, versée par les entreprises exerçant une activité industrielle,
                    commerciale ou artisanale, soumises au droit français et assujetties à l’impôt
                    sur les sociétés, sans distinction de taille ou de revenus.
                    <br><br>

                    La taxe d’apprentissage ne se justifie pas seulement par son aspect
                    pécuniaire, elle est aussi l’occasion de nouer une relation d’échange entre le
                    monde du travail et la formation - deux faces d’une même pièce. Pour notre
                    ESRP, il s’agit d’une belle opportunité pour mettre à jour nos contenus de
                    formation, afin de répondre aux critères évolutifs de l’entreprise, tout en
                    démontrant la compatibilité entre un parcours professionnel riche en milieu
                    ordinaire et les compétences de la personne en situation de handicap visuel.

                    <br><br>
                    Aussi, si vous êtes salarié ou susceptible de connaitre une entreprise
                    intéressée par les activités de l’association Paul Guinot, nous vous invitons à
                    mobiliser votre réseau professionnel pour proposer le versement de la taxe
                    d’apprentissage à notre établissement, en copiant collant le texte suivant :

                    <br><br>
                    <em>« Bonjour, Concernant le versement de la taxe d’apprentissage de 2022, je
                    souhaitais vous suggérer l’association Paul Guinot qui gère un centre de
                    formation pour les personnes aveugles et malvoyantes. Trois formations y sont
                    proposées : masseur-kinésithérapeute, développeur web et web mobile,
                    conseiller relation client à distance. Ils utilisent la taxe d’apprentissage pour
                    acheter du matériel adapté et améliorer le contenu des formations. Ainsi, en la
                    leur versant, vous contribuez directement à l’inclusion professionnelle des
                    personnes aveugles et malvoyante.</em>

                    <br><br>
                    Si vous êtes chef d’entreprise, verser la taxe d’apprentissage de 2022 à
                    notre structure est une manière de contribuer efficacement à l’inclusion
                    professionnelle des personnes aveugles et malvoyantes en leur garantissant
                    des conditions de formation optimales.
                    <br><br>
                    En vous souhaitant une belle et fructueuse année 2022,
                    <br><br>
                    <b> Bachir Kerroumi </b>
                    <br><br>
                    <b> Le Président </b> 

                  </p>
                    
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 175
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
        // line 189
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">Mohammed NABI</a></p>
    </div>
  </section>
   













        ";
        // line 206
        $this->displayBlock('scripts', $context, $blocks);
        // line 226
        echo "
   
  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 206
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 207
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lightbox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tabs.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/video.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick-slider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <script type=\"text/javascript\">
        \$('select').formSelect();
    </script>
 


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "medias/guinot/motDuPresidentDeGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 217,  349 => 216,  345 => 215,  341 => 214,  337 => 213,  333 => 212,  329 => 211,  323 => 207,  313 => 206,  298 => 226,  296 => 206,  276 => 189,  259 => 175,  137 => 56,  133 => 55,  129 => 54,  122 => 50,  118 => 49,  114 => 48,  109 => 46,  102 => 42,  98 => 41,  94 => 40,  90 => 39,  85 => 37,  80 => 35,  44 => 1,);
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
          <h2>Le mot du president</h2>
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
                  <h1>Le mot du président</h1>
                  <p class=\"description\">
                    L’année 2021 devait être la fin de cette période exceptionnelle qu’est la
                    pandémie de Covid-19, pourtant en ce début d’année 2022 il serait plus juste
                    d’admettre que l’extraordinaire s’est transformé en étrange normalité. 
                    <br><br>
                    Pour l’association Paul Guinot, cela se ressent le plus fortement sur nos
                    activités de formations qualifiantes au sein de notre Etablissement et Services
                    de Réhabilitation Professionnelle, qui forme chaque année environ 150
                    stagiaires et étudiants aux métiers de masseur-kinésithérapeute, conseiller
                    relation client à distance et développeur web et web mobile.
                    <br><br>
                    En effet, si la qualité des formations repose en grande partie sur
                    l’expertise de nos formateurs, les moyens à notre disposition pour adapter
                    efficacement les supports de formation aux capacités des personnes
                    déficientes visuelles sont cruciaux. Or, en cette période de crise sanitaire, la
                    nécessité d’acquérir des outils techniques de compensation et de mettre en
                    place des solutions innovantes pour le téléenseignement est d’autant plus
                    renforcée. 
                    <br><br>
                    Il peut paraître trivial de rappeler que les personnes aveugles ont pour
                    caractéristique de ne pas voir, mais ce simple fait est parfois oublié par leurs
                    pairs voyants qui extrapolent la cécité à d’autres limitations. Entendons-nous
                    bien : l’incapacité à traiter des informations visuelles ne veut pas dire
                    incapacité à traiter l’information. Celle-ci peut être transmise autrement que
                    par voie visuelle, par exemple par le biais de dispositif tactile, comme les plages
                    brailles, ou par voie auditive, avec les logiciels de synthèse vocale.
                    Similairement, les personnes malvoyantes ne voient pas « comme tout le
                    monde », mais elles en sont capables grâce à une luminosité particulière ou un
                    logiciel d’agrandissement d’écran. Avec ces outils, la personne aveugle ou
                    malvoyante peut révéler son potentiel productif, à égalité avec la personne
                    voyante. C’est le principe même d’une société inclusive. 
                    <br><br>

                    Pour financer ces outils, mais aussi les innovations liées aux technologies
                    de téléenseignement adapté – indispensable en ces temps de pandémie – nous
                    passons principalement par le biais de la taxe d’apprentissage. Celle-ci est une
                    contribution obligatoire à la formation professionnelle égale à 0.68% de la
                    masse salariale, versée par les entreprises exerçant une activité industrielle,
                    commerciale ou artisanale, soumises au droit français et assujetties à l’impôt
                    sur les sociétés, sans distinction de taille ou de revenus.
                    <br><br>

                    La taxe d’apprentissage ne se justifie pas seulement par son aspect
                    pécuniaire, elle est aussi l’occasion de nouer une relation d’échange entre le
                    monde du travail et la formation - deux faces d’une même pièce. Pour notre
                    ESRP, il s’agit d’une belle opportunité pour mettre à jour nos contenus de
                    formation, afin de répondre aux critères évolutifs de l’entreprise, tout en
                    démontrant la compatibilité entre un parcours professionnel riche en milieu
                    ordinaire et les compétences de la personne en situation de handicap visuel.

                    <br><br>
                    Aussi, si vous êtes salarié ou susceptible de connaitre une entreprise
                    intéressée par les activités de l’association Paul Guinot, nous vous invitons à
                    mobiliser votre réseau professionnel pour proposer le versement de la taxe
                    d’apprentissage à notre établissement, en copiant collant le texte suivant :

                    <br><br>
                    <em>« Bonjour, Concernant le versement de la taxe d’apprentissage de 2022, je
                    souhaitais vous suggérer l’association Paul Guinot qui gère un centre de
                    formation pour les personnes aveugles et malvoyantes. Trois formations y sont
                    proposées : masseur-kinésithérapeute, développeur web et web mobile,
                    conseiller relation client à distance. Ils utilisent la taxe d’apprentissage pour
                    acheter du matériel adapté et améliorer le contenu des formations. Ainsi, en la
                    leur versant, vous contribuez directement à l’inclusion professionnelle des
                    personnes aveugles et malvoyante.</em>

                    <br><br>
                    Si vous êtes chef d’entreprise, verser la taxe d’apprentissage de 2022 à
                    notre structure est une manière de contribuer efficacement à l’inclusion
                    professionnelle des personnes aveugles et malvoyantes en leur garantissant
                    des conditions de formation optimales.
                    <br><br>
                    En vous souhaitant une belle et fructueuse année 2022,
                    <br><br>
                    <b> Bachir Kerroumi </b>
                    <br><br>
                    <b> Le Président </b> 

                  </p>
                    
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
   













        {% block scripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset('js/isotope.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/owl-carousel.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/lightbox.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/tabs.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/video.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/slick-slider.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/custom.js') }}\" type=\"text/javascript\"></script>
    
    <script type=\"text/javascript\">
        \$('select').formSelect();
    </script>
 


    {% endblock %}

   
  
</body>

</html>", "medias/guinot/motDuPresidentDeGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\motDuPresidentDeGuinot.html.twig");
    }
}
