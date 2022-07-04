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

/* medias/guinot/introductionGuinot.html.twig */
class __TwigTemplate_ffca6d88d5cbb6cbb90e8254217e60232556a6920bdffa7a0901b64c69b132f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/introductionGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/introductionGuinot.html.twig"));

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
          <h2>Introduction du centre</h2>
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
                  <h1>Introduction du centre Guinot</h1>
                  <p>24 Bd Chastenet de Géry, 94800 Villejuif</p>
                  <p class=\"description\">
                    L’Etablissement et Service de Réadaptation Professionnelle Paul et Liliane Guinot forme des personnes handicapées visuelles en vue d’une intégration professionnelle en milieu ordinaire de travail par le biais d’une formation professionnelle et d’un accompagnement social en milieu spécialisé.
                  <br><br>
                    Le centre accueille chaque année 125 personnes aveugles et malvoyantes, en primo-formation ou en reclassement professionnel. Pour s’inscrire à une des formations proposées par l’ESRP, les personnes en situation de handicap visuel doivent s’adresser à leur MDPH (Maisons Départementales des Personnes Handicapées) pour obtenir une Reconnaissance de la Qualité de Travailleur Handicapé (RQTH) ainsi qu’une Orientation professionnelle (OP).
                    <br><br>
                    
                    <b>Formations :</b> 
                    <br> <br>
                    •   Masseur-Kinésithérapeute <br>
                    •   Conseiller Relation Client à Distance <br>
                    •   Développeur Web et Web Mobile <br><br>
                    Chaque formation dispose d’une année supplémentaire préparatoire spécifique. Pour plus d’informations, consulter les pages correspondantes.
                    br><br><br>
                    
                    <b>Prestations proposées :</b> 
                    <br> <br>
                    •   Appui Pédagogique et Technique <br>
                    •   Accompagnement à l'orientation et l'Insertion Professionnelle <br>
                    •   Accompagnement Psycho-Social <br>
                    •   Hébergement et restauration <br>
                  </p>
                    
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 62
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
        return "medias/guinot/introductionGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 74,  126 => 73,  112 => 62,  58 => 11,  47 => 3,  43 => 1,);
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
          <h2>Introduction du centre</h2>
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
                  <h1>Introduction du centre Guinot</h1>
                  <p>24 Bd Chastenet de Géry, 94800 Villejuif</p>
                  <p class=\"description\">
                    L’Etablissement et Service de Réadaptation Professionnelle Paul et Liliane Guinot forme des personnes handicapées visuelles en vue d’une intégration professionnelle en milieu ordinaire de travail par le biais d’une formation professionnelle et d’un accompagnement social en milieu spécialisé.
                  <br><br>
                    Le centre accueille chaque année 125 personnes aveugles et malvoyantes, en primo-formation ou en reclassement professionnel. Pour s’inscrire à une des formations proposées par l’ESRP, les personnes en situation de handicap visuel doivent s’adresser à leur MDPH (Maisons Départementales des Personnes Handicapées) pour obtenir une Reconnaissance de la Qualité de Travailleur Handicapé (RQTH) ainsi qu’une Orientation professionnelle (OP).
                    <br><br>
                    
                    <b>Formations :</b> 
                    <br> <br>
                    •   Masseur-Kinésithérapeute <br>
                    •   Conseiller Relation Client à Distance <br>
                    •   Développeur Web et Web Mobile <br><br>
                    Chaque formation dispose d’une année supplémentaire préparatoire spécifique. Pour plus d’informations, consulter les pages correspondantes.
                    br><br><br>
                    
                    <b>Prestations proposées :</b> 
                    <br> <br>
                    •   Appui Pédagogique et Technique <br>
                    •   Accompagnement à l'orientation et l'Insertion Professionnelle <br>
                    •   Accompagnement Psycho-Social <br>
                    •   Hébergement et restauration <br>
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

</html>", "medias/guinot/introductionGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\introductionGuinot.html.twig");
    }
}
