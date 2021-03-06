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

/* medias/guinot/pageAccueilGuinot.html.twig */
class __TwigTemplate_016cbb28c4ff9928c94c8bc58a82b52ef512e5b4796cd077b99096b203260424 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/pageAccueilGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/pageAccueilGuinot.html.twig"));

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
        // line 10
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
                  <p>24 Bd Chastenet de G??ry, 94800 Villejuif</p>
                  <p class=\"description\">
                    L???Etablissement et Service de R??adaptation Professionnelle Paul et Liliane Guinot forme des personnes handicap??es visuelles en vue d???une int??gration professionnelle en milieu ordinaire de travail par le biais d???une formation professionnelle et d???un accompagnement social en milieu sp??cialis??.
                  <br><br>
                    Le centre accueille chaque ann??e 125 personnes aveugles et malvoyantes, en primo-formation ou en reclassement professionnel. Pour s???inscrire ?? une des formations propos??es par l???ESRP, les personnes en situation de handicap visuel doivent s???adresser ?? leur MDPH (Maisons D??partementales des Personnes Handicap??es) pour obtenir une Reconnaissance de la Qualit?? de Travailleur Handicap?? (RQTH) ainsi qu???une Orientation professionnelle (OP).
                    <br><br>
                    
                    <b>Formations :</b> 
                    <br> <br>
                    ???   Masseur-Kin??sith??rapeute <br>
                    ???   Conseiller Relation Client ?? Distance <br>
                    ???   D??veloppeur Web et Web Mobile <br><br>
                    Chaque formation dispose d???une ann??e suppl??mentaire pr??paratoire sp??cifique. Pour plus d???informations, consulter les pages correspondantes.
                    br><br><br>
                    
                    <b>Prestations propos??es :</b> 
                    <br> <br>
                    ???   Appui P??dagogique et Technique <br>
                    ???   Accompagnement ?? l'orientation et l'Insertion Professionnelle <br>
                    ???   Accompagnement Psycho-Social <br>
                    ???   H??bergement et restauration <br>
                  </p>
                    
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 61
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
        // line 72
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 73
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

</body>

</html>
   
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "medias/guinot/pageAccueilGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 73,  125 => 72,  111 => 61,  57 => 10,  47 => 3,  43 => 1,);
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
                  <p>24 Bd Chastenet de G??ry, 94800 Villejuif</p>
                  <p class=\"description\">
                    L???Etablissement et Service de R??adaptation Professionnelle Paul et Liliane Guinot forme des personnes handicap??es visuelles en vue d???une int??gration professionnelle en milieu ordinaire de travail par le biais d???une formation professionnelle et d???un accompagnement social en milieu sp??cialis??.
                  <br><br>
                    Le centre accueille chaque ann??e 125 personnes aveugles et malvoyantes, en primo-formation ou en reclassement professionnel. Pour s???inscrire ?? une des formations propos??es par l???ESRP, les personnes en situation de handicap visuel doivent s???adresser ?? leur MDPH (Maisons D??partementales des Personnes Handicap??es) pour obtenir une Reconnaissance de la Qualit?? de Travailleur Handicap?? (RQTH) ainsi qu???une Orientation professionnelle (OP).
                    <br><br>
                    
                    <b>Formations :</b> 
                    <br> <br>
                    ???   Masseur-Kin??sith??rapeute <br>
                    ???   Conseiller Relation Client ?? Distance <br>
                    ???   D??veloppeur Web et Web Mobile <br><br>
                    Chaque formation dispose d???une ann??e suppl??mentaire pr??paratoire sp??cifique. Pour plus d???informations, consulter les pages correspondantes.
                    br><br><br>
                    
                    <b>Prestations propos??es :</b> 
                    <br> <br>
                    ???   Appui P??dagogique et Technique <br>
                    ???   Accompagnement ?? l'orientation et l'Insertion Professionnelle <br>
                    ???   Accompagnement Psycho-Social <br>
                    ???   H??bergement et restauration <br>
                  </p>
                    
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

</html>
   
", "medias/guinot/pageAccueilGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\pageAccueilGuinot.html.twig");
    }
}
