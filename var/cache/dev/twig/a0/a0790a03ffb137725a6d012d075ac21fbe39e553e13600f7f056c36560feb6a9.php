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
                  <h1>CONSEILLER RELATION CLIENT ?? DISTANCE</h1>
                  <p class=\"description\">

                    <b>Le m??tier et ses d??bouch??s</b> <br><br>
                    Qu???il s???appelle t??l??acteur, t??l??conseiller, charg?? de client??le, le ?? Conseiller Relation Client ?? Distance ?? accueille,
                     conseille et assiste les clients ou les usagers par t??l??phone pour leur apporter une r??ponse adapt??e ?? leur demande ou assure
                      des missions commerciales de conqu??te de march??s ou de fid??lisation de client??le. <br><br>
                      Longtemps consid??r?? comme un ?? job ?? d?????tudiant, le m??tier de t??l??conseiller se professionnalise et les entreprises recherchent de plus en plus des candidats comp??tents. <br><br>
                      L?????volution constante de la technologie permet d???offrir aujourd???hui dans le secteur des centres d???appels de r??elles nouvelles opportunit??s d???emploi pour les personnes handicap??es visuelles. <br><br>
                      La plupart des ??diteurs de logiciels de centres d???appels permettent une bonne compatibilit?? avec les aides techniques adapt??es sans am??nagement sp??cifique important. <br><br>
                      Les centres d???appels proposent une multitude de m??tiers aux comp??tences sp??cifiques, permettant ?? chacun de se sp??cialiser dans le domaine qu???il souhaite : Conseiller Client dans une banque, 
                      3Hotliner informatique, Agent de r??servation pour un club de vacances, Charg?? Service Apr??s Vente pour un fournisseur Internet ou de t??l??phonie mobile ??? <br><br>

                      Une premi??re exp??rience professionnelle dans le domaine de la vente ou des comp??tences linguistiques comme une bonne connaissance de l???anglais ou d???une 2??me langue
                       europ??enne multiplient les chances de trouver rapidement un poste <br><br>

                      <b>Conditions d???admission</b> <br><br>
                      ???  RQTH et orientation professionnelle de la CDAPH du d??partement de r??sidence ; <br>
                      ???  Participation ?? la journ??e d???accueil des candidats organis??e au Centre Guinot ;
                 
                
                  </p>
\t\t\t\t  
                  
                    
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">Revenir ?? l'acceuil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  ";
        // line 73
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 74
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

</body>

</html>";
        
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
        return array (  130 => 74,  126 => 73,  114 => 64,  59 => 12,  47 => 3,  43 => 1,);
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
                  <h1>CONSEILLER RELATION CLIENT ?? DISTANCE</h1>
                  <p class=\"description\">

                    <b>Le m??tier et ses d??bouch??s</b> <br><br>
                    Qu???il s???appelle t??l??acteur, t??l??conseiller, charg?? de client??le, le ?? Conseiller Relation Client ?? Distance ?? accueille,
                     conseille et assiste les clients ou les usagers par t??l??phone pour leur apporter une r??ponse adapt??e ?? leur demande ou assure
                      des missions commerciales de conqu??te de march??s ou de fid??lisation de client??le. <br><br>
                      Longtemps consid??r?? comme un ?? job ?? d?????tudiant, le m??tier de t??l??conseiller se professionnalise et les entreprises recherchent de plus en plus des candidats comp??tents. <br><br>
                      L?????volution constante de la technologie permet d???offrir aujourd???hui dans le secteur des centres d???appels de r??elles nouvelles opportunit??s d???emploi pour les personnes handicap??es visuelles. <br><br>
                      La plupart des ??diteurs de logiciels de centres d???appels permettent une bonne compatibilit?? avec les aides techniques adapt??es sans am??nagement sp??cifique important. <br><br>
                      Les centres d???appels proposent une multitude de m??tiers aux comp??tences sp??cifiques, permettant ?? chacun de se sp??cialiser dans le domaine qu???il souhaite : Conseiller Client dans une banque, 
                      3Hotliner informatique, Agent de r??servation pour un club de vacances, Charg?? Service Apr??s Vente pour un fournisseur Internet ou de t??l??phonie mobile ??? <br><br>

                      Une premi??re exp??rience professionnelle dans le domaine de la vente ou des comp??tences linguistiques comme une bonne connaissance de l???anglais ou d???une 2??me langue
                       europ??enne multiplient les chances de trouver rapidement un poste <br><br>

                      <b>Conditions d???admission</b> <br><br>
                      ???  RQTH et orientation professionnelle de la CDAPH du d??partement de r??sidence ; <br>
                      ???  Participation ?? la journ??e d???accueil des candidats organis??e au Centre Guinot ;
                 
                
                  </p>
\t\t\t\t  
                  
                    
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"{{ path('accueil_index') }}\">Revenir ?? l'acceuil</a>
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

</html>", "medias/guinot/conseillerGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\conseillerGuinot.html.twig");
    }
}
