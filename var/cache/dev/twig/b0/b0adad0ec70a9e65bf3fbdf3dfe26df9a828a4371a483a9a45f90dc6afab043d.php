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

/* medias/guinot/historiqueGuinot.html.twig */
class __TwigTemplate_c61119d7641864b75988d73f6d03607aec2521411e894188b86f05884af1d941 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/historiqueGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/historiqueGuinot.html.twig"));

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
          <h2>Histoire du centre Guinot</h2>
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
                      <h1>Histoire du centre Guinot</h1>
                      <p class=\"description\">
                        <h5 style=\"color: rgb(199, 50, 23)\">   
                          UN PEU D’HISTOIRE …
                        </h5>
                        <br>
                        <h6 style=\"color: rgb(28, 38, 177)\">   
                          Paul GUINOT (1884 – 1969)
                        </h6><br>
      
                        Né le 13 mai 1884 à Mirecourt dans les Vosges, Paul GUINOT entre très jeune dans la vie active comme dessinateur dans une maison de broderie.
                        Devenu aveugle à la suite d’un accident à l’âge de vingt cinq ans, il entreprend aussitôt avec succès une formation de Masseur-Kinésithérapeute.
                      <br><br>

                      A partir de 1916, son activité professionnelle se double d’initiatives dans le domaine associatif. Conscient de la vétusté de la législation de 
                      l’époque concernant les personnes handicapées, il concentre son action autour de deux objectifs :
                      <br><br>

                      <b>• Obtenir une amélioration des textes en vigueur par voie législative ou réglementaire, </b><br>
                      <b>• Défendre le principe selon lequel la réinsertion par le travail doit être préférée aux mécanismes d’assistance quel que soit le niveau financier atteint par celle-ci.</b> <br> <br>
                      Pour atteindre ses buts, Paul GUINOT va participer à la mise en place du réseau associatif autour duquel s’articule la défense des intérêts des déficients visuels.
                      Avant d’aborder ses grandes actions, voyons comment est née l’Institution qui porte aujourd’hui son nom. <br><br>
                      <h6 style=\"color: rgb(28, 38, 177)\">   
                        La naissance d’une Institution
                      </h6><br>
                      Les origines de l’Institution se situent en mars 1915. Déjà, la grande guerre avait fait ses premiers « grands martyrs », les blessés aux yeux. A l’ambulance du Casino municipal de Cannes, deux d’entre eux, le Caporal Gudefin, le Brigadier Pagenel venaient d’y être reçus. II s’agissait de faire leur rééducation au massage.
                      A cette époque, sous les auspices de l’Association Valentin Haüy, un premier comité dit « Pour le Bien des Aveugles », s’organise à Cannes. II avait pour Président, M. André Capron, Maire de la ville et pour premier Patronage, son Altesse la Princesse Louis d’Orléans-Bragance.
                      II avait pour objet immédiat de participer à l’œuvre de rééducation des aveugles de la guerre dont la détresse avait soulevé d’émotion le pays tout entier.Les premiers aveugles en rééducation à la Villa Montfleury
                      Très vite l’idée vint d’attirer sous « le ciel d’azur » d’autres blessés aux yeux ayant besoin de séjourner sous un climat favorable. <br> <br>

                      II est évident qu’à cet instant, les fondateurs de l’Institution n’ont pas mesuré l’ampleur de l’œuvre qu’ils entreprenaient, ni évaluer les difficultés d’une entreprise qui se limitait alors dans l’espace et dans le temps.
                      L’Hospice-école est alors installée à la Villa Montfleury, bien allemand séquestré, réquisitionné à cet effet par la Ville de Cannes. <br><br>

                      <h6 style=\"color: rgb(28, 38, 177)\">   
                        L’Etablissement Professionnel et Climatique d’Aveugles
                      </h6>
                      <br>
                      Au 1er janvier 1920, le Centre de Rééducation des Aveugles de guerre ferme ses portes et une œuvre nouvelle lui succède : c’est l‘Etablissement Professionnel et Climatique d’Aveugles (E.P.C.A.) dont l’activité prolongera celle entreprise sous la formule initiale : La Maison des Aveugles de Cannes. 
                      Il est transféré provisoirement et jusqu’en 1925 à la Villa Ruel, propriété du Bazar de l’Hôtel de Ville. <br>
                        <b>Ainsi, depuis 1920, l’EPCA réalise une œuvre qui lui a valu, dès 1928, la reconnaissance d’utilité publique. <br></b>
                        Au contact des blessés aux yeux réadaptés à la vie utile, les aveugles civils admis à l’E.P.C.A. prennent conscience de la médiocrité de leur condition 
                        et mesurent l’abandon dans lequel la collectivité sociale les tient. <br>
                        A l’instigation de son Directeur, Paul GUINOT, l’E.P.C.A. découvre sa véritable vocation, d’autant qu’à l’Union qu’ils ont créée dès 1918, les blessés aux yeux disposent 
                        de la force morale indispensable à la mise en jeu du mot de Clemenceau « Ils ont des droits sur nous. »
                          A l’exemple des blessés aux yeux, les aveugles civils prendront conscience de leur devoir vis-à-vis d’eux-mêmes et réclameront de la solidarité, l’aide sociale qui leur est due. 
                          C’est ainsi que l’E.P.C.A. devient le creuset des idées nouvelles suivant quoi, les principes anciens de la bienfaisante charité feront place à 
                          la fraternité sociale. Dès lors, la vocation nationale de l’institution s’affirmera dans une action générale que ses animateurs intituleront : la Grande Mission. <br><br>
                          <h6 style=\"color: rgb(28, 38, 177)\">   
                            LA GRANDE MISSION
                          </h6> <br>
                          Ainsi, Paul Guinot a contribué personnellement à la création, au plan national, de la Fédération des Aveugles de France, de la Confédération Française 
                          pour la Promotion Sociale des Aveugles et des Amblyopes (CFPSAA) et, au plan international, de l’Organisation Mondiale des Aveugles. <br>
                          Cette lutte, pour une meilleure insertion des personnes handicapées visuelles dans la société, se poursuivra sans discontinuer jusqu’à son décès en 1969 
                          puisque, jusqu’au bout, il exercera ses activités, notamment à la tête de l’Association qui porte désormais son nom. <br>
                          A ce titre, il conçoit, au début des années 1960, la réalisation du Centre de Formation Professionnelle pour Aveugles et Malvoyants de Villejuif, 
                          destiné à prendre le relais des locaux parisiens inadaptés aux nouveaux besoins apparus. <br>
                          Cette présence durant cinquante années dans tous les mouvements engagés en faveur des personnes handicapées visuelles a fait de Paul GUINOT l’une des 
                          figures les plus marquantes dans ce domaine où il est unanimement reconnu comme un pionnier et un novateur efficace. <br>

                      </p>                     
                    </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 154
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
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">Mohammed NABI</a></p>
    </div>
  </section>
   













        ";
        // line 185
        $this->displayBlock('scripts', $context, $blocks);
        // line 205
        echo "
   
  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 185
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 186
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lightbox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tabs.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/video.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick-slider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 196
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
        return "medias/guinot/historiqueGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 196,  328 => 195,  324 => 194,  320 => 193,  316 => 192,  312 => 191,  308 => 190,  302 => 186,  292 => 185,  277 => 205,  275 => 185,  255 => 168,  238 => 154,  137 => 56,  133 => 55,  129 => 54,  122 => 50,  118 => 49,  114 => 48,  109 => 46,  102 => 42,  98 => 41,  94 => 40,  90 => 39,  85 => 37,  80 => 35,  44 => 1,);
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
          <h2>Histoire du centre Guinot</h2>
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
                      <h1>Histoire du centre Guinot</h1>
                      <p class=\"description\">
                        <h5 style=\"color: rgb(199, 50, 23)\">   
                          UN PEU D’HISTOIRE …
                        </h5>
                        <br>
                        <h6 style=\"color: rgb(28, 38, 177)\">   
                          Paul GUINOT (1884 – 1969)
                        </h6><br>
      
                        Né le 13 mai 1884 à Mirecourt dans les Vosges, Paul GUINOT entre très jeune dans la vie active comme dessinateur dans une maison de broderie.
                        Devenu aveugle à la suite d’un accident à l’âge de vingt cinq ans, il entreprend aussitôt avec succès une formation de Masseur-Kinésithérapeute.
                      <br><br>

                      A partir de 1916, son activité professionnelle se double d’initiatives dans le domaine associatif. Conscient de la vétusté de la législation de 
                      l’époque concernant les personnes handicapées, il concentre son action autour de deux objectifs :
                      <br><br>

                      <b>• Obtenir une amélioration des textes en vigueur par voie législative ou réglementaire, </b><br>
                      <b>• Défendre le principe selon lequel la réinsertion par le travail doit être préférée aux mécanismes d’assistance quel que soit le niveau financier atteint par celle-ci.</b> <br> <br>
                      Pour atteindre ses buts, Paul GUINOT va participer à la mise en place du réseau associatif autour duquel s’articule la défense des intérêts des déficients visuels.
                      Avant d’aborder ses grandes actions, voyons comment est née l’Institution qui porte aujourd’hui son nom. <br><br>
                      <h6 style=\"color: rgb(28, 38, 177)\">   
                        La naissance d’une Institution
                      </h6><br>
                      Les origines de l’Institution se situent en mars 1915. Déjà, la grande guerre avait fait ses premiers « grands martyrs », les blessés aux yeux. A l’ambulance du Casino municipal de Cannes, deux d’entre eux, le Caporal Gudefin, le Brigadier Pagenel venaient d’y être reçus. II s’agissait de faire leur rééducation au massage.
                      A cette époque, sous les auspices de l’Association Valentin Haüy, un premier comité dit « Pour le Bien des Aveugles », s’organise à Cannes. II avait pour Président, M. André Capron, Maire de la ville et pour premier Patronage, son Altesse la Princesse Louis d’Orléans-Bragance.
                      II avait pour objet immédiat de participer à l’œuvre de rééducation des aveugles de la guerre dont la détresse avait soulevé d’émotion le pays tout entier.Les premiers aveugles en rééducation à la Villa Montfleury
                      Très vite l’idée vint d’attirer sous « le ciel d’azur » d’autres blessés aux yeux ayant besoin de séjourner sous un climat favorable. <br> <br>

                      II est évident qu’à cet instant, les fondateurs de l’Institution n’ont pas mesuré l’ampleur de l’œuvre qu’ils entreprenaient, ni évaluer les difficultés d’une entreprise qui se limitait alors dans l’espace et dans le temps.
                      L’Hospice-école est alors installée à la Villa Montfleury, bien allemand séquestré, réquisitionné à cet effet par la Ville de Cannes. <br><br>

                      <h6 style=\"color: rgb(28, 38, 177)\">   
                        L’Etablissement Professionnel et Climatique d’Aveugles
                      </h6>
                      <br>
                      Au 1er janvier 1920, le Centre de Rééducation des Aveugles de guerre ferme ses portes et une œuvre nouvelle lui succède : c’est l‘Etablissement Professionnel et Climatique d’Aveugles (E.P.C.A.) dont l’activité prolongera celle entreprise sous la formule initiale : La Maison des Aveugles de Cannes. 
                      Il est transféré provisoirement et jusqu’en 1925 à la Villa Ruel, propriété du Bazar de l’Hôtel de Ville. <br>
                        <b>Ainsi, depuis 1920, l’EPCA réalise une œuvre qui lui a valu, dès 1928, la reconnaissance d’utilité publique. <br></b>
                        Au contact des blessés aux yeux réadaptés à la vie utile, les aveugles civils admis à l’E.P.C.A. prennent conscience de la médiocrité de leur condition 
                        et mesurent l’abandon dans lequel la collectivité sociale les tient. <br>
                        A l’instigation de son Directeur, Paul GUINOT, l’E.P.C.A. découvre sa véritable vocation, d’autant qu’à l’Union qu’ils ont créée dès 1918, les blessés aux yeux disposent 
                        de la force morale indispensable à la mise en jeu du mot de Clemenceau « Ils ont des droits sur nous. »
                          A l’exemple des blessés aux yeux, les aveugles civils prendront conscience de leur devoir vis-à-vis d’eux-mêmes et réclameront de la solidarité, l’aide sociale qui leur est due. 
                          C’est ainsi que l’E.P.C.A. devient le creuset des idées nouvelles suivant quoi, les principes anciens de la bienfaisante charité feront place à 
                          la fraternité sociale. Dès lors, la vocation nationale de l’institution s’affirmera dans une action générale que ses animateurs intituleront : la Grande Mission. <br><br>
                          <h6 style=\"color: rgb(28, 38, 177)\">   
                            LA GRANDE MISSION
                          </h6> <br>
                          Ainsi, Paul Guinot a contribué personnellement à la création, au plan national, de la Fédération des Aveugles de France, de la Confédération Française 
                          pour la Promotion Sociale des Aveugles et des Amblyopes (CFPSAA) et, au plan international, de l’Organisation Mondiale des Aveugles. <br>
                          Cette lutte, pour une meilleure insertion des personnes handicapées visuelles dans la société, se poursuivra sans discontinuer jusqu’à son décès en 1969 
                          puisque, jusqu’au bout, il exercera ses activités, notamment à la tête de l’Association qui porte désormais son nom. <br>
                          A ce titre, il conçoit, au début des années 1960, la réalisation du Centre de Formation Professionnelle pour Aveugles et Malvoyants de Villejuif, 
                          destiné à prendre le relais des locaux parisiens inadaptés aux nouveaux besoins apparus. <br>
                          Cette présence durant cinquante années dans tous les mouvements engagés en faveur des personnes handicapées visuelles a fait de Paul GUINOT l’une des 
                          figures les plus marquantes dans ce domaine où il est unanimement reconnu comme un pionnier et un novateur efficace. <br>

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

</html>", "medias/guinot/historiqueGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\historiqueGuinot.html.twig");
    }
}
