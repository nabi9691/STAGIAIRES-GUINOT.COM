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

/* utilisateurs/modifierUtilisateur.html.twig */
class __TwigTemplate_e18c84fe097464ef7a23585a49014ecb15c85b6fb74a524a34025d6f1251a689 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/modifierUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/modifierUtilisateur.html.twig"));

        // line 1
        echo "<html>
    <head>
    ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo " 
        
        <title>Modifier un utilisateur</title>
    </head>

<body>

   

";
        // line 12
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
                  <h1>Modifier un utilisateur</h1> <br><br>
                  ";
        // line 27
        echo twig_include($this->env, $context, "utilisateurs/formulaireUtilisateur.html.twig");
        echo "



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
\t\t\t\t  
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 40
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
        // line 51
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
  ";
        // line 52
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "
  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "utilisateurs/modifierUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 52,  110 => 51,  96 => 40,  88 => 35,  77 => 27,  59 => 12,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
    {{ include('linkCss.html.twig') }} 
        
        <title>Modifier un utilisateur</title>
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
                  <h1>Modifier un utilisateur</h1> <br><br>
                  {{ include('utilisateurs/formulaireUtilisateur.html.twig') }}



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formUtilisateur) }}
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

</html>", "utilisateurs/modifierUtilisateur.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\utilisateurs\\modifierUtilisateur.html.twig");
    }
}
