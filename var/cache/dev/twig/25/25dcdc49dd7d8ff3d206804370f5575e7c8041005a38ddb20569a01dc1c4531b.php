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

/* medias/guinot/developpeurGuinot.html.twig */
class __TwigTemplate_5f6439f697c1b995a3bde84ab812b9342e9feec676d929718da776e11a885fc3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/developpeurGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/developpeurGuinot.html.twig"));

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
                  <h1>DÉVELOPPEUR WEB ET WEB MOBILE (DWWM)</h1>
                  <p class=\"description\">

                    <b>Le métier et ses débouchés</b> <br><br>
                    Le Développeur Web et Web Mobile développe et met au point un projet d’application informatique, 
                    de la phase d’étude à son intégration, selon des besoins fonctionnels et un cahier des charges. 
                    Il assure la conception des composants (traitements et données) et des interfaces, le développement 
                    et la mise au point (tests). Lorsque les applications informatiques sont en exploitation, il en assure 
                    la maintenance corrective et évolutive. <br>
                    Il peut travailler dans une Entreprise de Services Numériques (ESN) en réalisant des prestations en régie ou 
                    au forfait, ou dans une structure utilisatrice, de type entreprise du secteur privé ou public, possédant un 
                    service dédié aux études et aux développements informatiques. <br><br>

                      <b>Conditions d’admission</b> <br><br>
                      •  Reconnaissance de la Qualité de Travailleur Handicapé (RQTH) et orientation professionnelle de la Commission des Droits et de l’Autonomie des Personnes Handicapées (CDAPH), avec si besoin mention de l’internat <br>
                      •  Dossier de candidature, tests de positionnement et entretiens.<br><br>

                      <b>Validation</b> <br><br>
                      La formation est validée par le titre du Ministère du travail « Développeur web et web mobile »,
                       inscrit au Répertoire National des Certifications Professionnelles (RNCP), de niveau III (bac +2), et attribué par u
                       n jury de professionnels de l’informatique extérieur au Centre GUINOT.<br><br>
                 
                       <b>Débouchés</b> <br><br>
                       Evolutions possibles vers de nombreux métiers tels qu’architecte d’application, chef de projet informatique, …, 
                       ou poursuite d’études vers les titres « Concepteur Développeur d’application » (niveau II) ou « Ingénieur en système d’information » (niveau I).<br><br>

                       <b>Contact</b> <br><br>
                       •  Email : tertiaire@guinot.asso.fr <br>
                       •  Tél : 01 46 78 01 00 / Fax 01 46 78 50 35
                
                  </p>
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 69
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
        // line 80
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 81
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "medias/guinot/developpeurGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 81,  133 => 80,  119 => 69,  58 => 11,  47 => 3,  43 => 1,);
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
                  <h1>DÉVELOPPEUR WEB ET WEB MOBILE (DWWM)</h1>
                  <p class=\"description\">

                    <b>Le métier et ses débouchés</b> <br><br>
                    Le Développeur Web et Web Mobile développe et met au point un projet d’application informatique, 
                    de la phase d’étude à son intégration, selon des besoins fonctionnels et un cahier des charges. 
                    Il assure la conception des composants (traitements et données) et des interfaces, le développement 
                    et la mise au point (tests). Lorsque les applications informatiques sont en exploitation, il en assure 
                    la maintenance corrective et évolutive. <br>
                    Il peut travailler dans une Entreprise de Services Numériques (ESN) en réalisant des prestations en régie ou 
                    au forfait, ou dans une structure utilisatrice, de type entreprise du secteur privé ou public, possédant un 
                    service dédié aux études et aux développements informatiques. <br><br>

                      <b>Conditions d’admission</b> <br><br>
                      •  Reconnaissance de la Qualité de Travailleur Handicapé (RQTH) et orientation professionnelle de la Commission des Droits et de l’Autonomie des Personnes Handicapées (CDAPH), avec si besoin mention de l’internat <br>
                      •  Dossier de candidature, tests de positionnement et entretiens.<br><br>

                      <b>Validation</b> <br><br>
                      La formation est validée par le titre du Ministère du travail « Développeur web et web mobile »,
                       inscrit au Répertoire National des Certifications Professionnelles (RNCP), de niveau III (bac +2), et attribué par u
                       n jury de professionnels de l’informatique extérieur au Centre GUINOT.<br><br>
                 
                       <b>Débouchés</b> <br><br>
                       Evolutions possibles vers de nombreux métiers tels qu’architecte d’application, chef de projet informatique, …, 
                       ou poursuite d’études vers les titres « Concepteur Développeur d’application » (niveau II) ou « Ingénieur en système d’information » (niveau I).<br><br>

                       <b>Contact</b> <br><br>
                       •  Email : tertiaire@guinot.asso.fr <br>
                       •  Tél : 01 46 78 01 00 / Fax 01 46 78 50 35
                
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
  
  

   {{ include('footer.html.twig') }}
{{ include('scriptJS.html.twig') }}

</body>

</html>", "medias/guinot/developpeurGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\developpeurGuinot.html.twig");
    }
}
