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

/* messages/nouveauMessage.html.twig */
class __TwigTemplate_abb901730df381c9022aa60d34a68383967e7944743f0d976eb7621e13e71388 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/nouveauMessage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/nouveauMessage.html.twig"));

        // line 1
        echo "<html>
    <head>
     ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "
        
        
        <title>Enregistrement d'un nouveau message</title>
    </head>

<body>

   ";
        // line 11
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

                  <h1 style=\"color: rgb(37, 79, 194);\">Enregistrement d'un nouveau message </h1>
                  <div class=\"container bg-white\">
                    ";
        // line 27
        echo twig_include($this->env, $context, "messages/formulaireMessage.html.twig");
        echo "<br>
                </div>
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
        echo "\">Liste des messages</a><br>
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
               <a href=\"";
        // line 33
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
        // line 42
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 43
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
        return "messages/nouveauMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 43,  101 => 42,  89 => 33,  82 => 29,  77 => 27,  58 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
     {{ include('linkCss.html.twig') }}
        
        
        <title>Enregistrement d'un nouveau message</title>
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

                  <h1 style=\"color: rgb(37, 79, 194);\">Enregistrement d'un nouveau message </h1>
                  <div class=\"container bg-white\">
                    {{ include('messages/formulaireMessage.html.twig') }}<br>
                </div>
                <a href=\"{{ path('message_index') }}\">Liste des messages</a><br>
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

</html>

", "messages/nouveauMessage.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\messages\\nouveauMessage.html.twig");
    }
}
