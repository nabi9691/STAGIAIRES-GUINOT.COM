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

/* medias/guinot/masseurGuinot.html.twig */
class __TwigTemplate_f1caedeb5155d428cf68fc8d2a7d125f32b8a2e2dd79815d2aba8bb717a2b2eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/masseurGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/masseurGuinot.html.twig"));

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
                     <h1>MASSEUR-KIN??SITH??RAPEUTE</h1>
                  <p class=\"description\">

                    <b>Le m??tier et ses d??bouch??s</b> <br><br>
                    Le Dipl??me d???Etat est un ?? dipl??me de plein exercice ?? permettant de pratiquer dans toutes les branches professionnelles et toutes ses sp??cialit??s. <br>
                    L???emploi est aujourd???hui tr??s ouvert et permet une bonne int??gration dans le milieu professionnel de sant??.<br>
                    L???exercice lib??ral peut se r??aliser sous la forme d???une installation en cabinet individuel ou de groupe ou bien en assistanat avec un confr??re d??j?? install??. <br>
                    Une formation de Cadre de Sant?? r??alisable apr??s cinq ann??es d???exercice ouvre la possibilit?? d???acc??der ?? un poste de chef de service ou ?? l???enseignement professionnel dans un Institut de Formation. <br><br>



                      <b>Conditions d???admission</b> <br><br>
                      ???  Apr??s d??cision de la Commission des Droits et de l???Autonomie des Personnes Handicap??es (CDAPH), un conseil technique retient, sur dossier, les candidatures. <br>
                      ???  Les titulaires d???un baccalaur??at scientifique (s??rie S) peuvent ??tre accept??s directement en premi??re ann??e d?????tude apr??s avis de la commission d???admission du CRP et accord du conseil p??dagogique de 
                      l???IFMK pr??sid?? par un repr??sentant de l???Agence R??gionale de Sant??. Les non-bacheliers (niveau bac) et les titulaires d???un baccalaur??at autre que scientifique<br><br>
                       <b>Contact</b> <br><br>
                       ???  courriel vers ifmk@guinot.asso.fr <br>
                       ???  t??l. 01 46 78 27 92
                
                  </p>
\t\t\t\t  
                  
                    
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 62
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

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "medias/guinot/masseurGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 73,  125 => 72,  112 => 62,  59 => 12,  47 => 3,  43 => 1,);
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
                     <h1>MASSEUR-KIN??SITH??RAPEUTE</h1>
                  <p class=\"description\">

                    <b>Le m??tier et ses d??bouch??s</b> <br><br>
                    Le Dipl??me d???Etat est un ?? dipl??me de plein exercice ?? permettant de pratiquer dans toutes les branches professionnelles et toutes ses sp??cialit??s. <br>
                    L???emploi est aujourd???hui tr??s ouvert et permet une bonne int??gration dans le milieu professionnel de sant??.<br>
                    L???exercice lib??ral peut se r??aliser sous la forme d???une installation en cabinet individuel ou de groupe ou bien en assistanat avec un confr??re d??j?? install??. <br>
                    Une formation de Cadre de Sant?? r??alisable apr??s cinq ann??es d???exercice ouvre la possibilit?? d???acc??der ?? un poste de chef de service ou ?? l???enseignement professionnel dans un Institut de Formation. <br><br>



                      <b>Conditions d???admission</b> <br><br>
                      ???  Apr??s d??cision de la Commission des Droits et de l???Autonomie des Personnes Handicap??es (CDAPH), un conseil technique retient, sur dossier, les candidatures. <br>
                      ???  Les titulaires d???un baccalaur??at scientifique (s??rie S) peuvent ??tre accept??s directement en premi??re ann??e d?????tude apr??s avis de la commission d???admission du CRP et accord du conseil p??dagogique de 
                      l???IFMK pr??sid?? par un repr??sentant de l???Agence R??gionale de Sant??. Les non-bacheliers (niveau bac) et les titulaires d???un baccalaur??at autre que scientifique<br><br>
                       <b>Contact</b> <br><br>
                       ???  courriel vers ifmk@guinot.asso.fr <br>
                       ???  t??l. 01 46 78 27 92
                
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

</html>", "medias/guinot/masseurGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\masseurGuinot.html.twig");
    }
}
