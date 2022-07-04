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

/* contacts/nouveauContacts.html.twig */
class __TwigTemplate_45d4844cd94c6c53c4d5545060b0b5eabf755ada04d2dffc39bad0ffa6274119 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/nouveauContacts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/nouveauContacts.html.twig"));

        // line 1
        echo "
<html>
    <head>

    ";
        // line 5
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "    
        
        <title>Enregistrement d'un utilisateurs :</title>
    </head>

<body>

   


  ";
        // line 15
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "

  

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
                  <h1> Enregistrement d'un nouveau contact</h1> <br><br>
                 ";
        // line 31
        echo twig_include($this->env, $context, "contacts/formulaireContacts.html.twig");
        echo "<br>
\t\t\t\t  
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
               <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">REVENIR À L'ACCEUIL</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  
 ";
        // line 46
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 47
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

   
  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contacts/nouveauContacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 47,  102 => 46,  89 => 36,  81 => 31,  62 => 15,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<html>
    <head>

    {{ include('linkCss.html.twig') }}    
        
        <title>Enregistrement d'un utilisateurs :</title>
    </head>

<body>

   


  {{ include('navbar.html.twig') }}

  

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
                  <h1> Enregistrement d'un nouveau contact</h1> <br><br>
                 {{ include('contacts/formulaireContacts.html.twig') }}<br>
\t\t\t\t  
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
               <a href=\"{{ path('accueil_index') }}\">REVENIR À L'ACCEUIL</a>
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

</html>", "contacts/nouveauContacts.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\contacts\\nouveauContacts.html.twig");
    }
}
