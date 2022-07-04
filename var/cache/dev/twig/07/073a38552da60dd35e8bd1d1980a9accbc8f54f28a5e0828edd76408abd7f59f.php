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

/* activites/afficherActivites.html.twig */
class __TwigTemplate_1e774e599387b801c0b82d76275e798fb414bbd645691bdbe79d4a7c0bc09fd8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/afficherActivites.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/afficherActivites.html.twig"));

        // line 1
        echo "<html>
    <head>
     ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "
        
        
        <title>Activités</title>
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
          <h6>BioGeSoft</h6>
          <h2>Mes activités !</h2>
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
                  ";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                 <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\">Revenir à l'accueil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  ";
        // line 78
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 79
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "

        

   
  
</body>

</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 38
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 39
        echo "    

    <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                   
                <tr>
                    <th> Id </th>
                <th> Nom </th>
                                        <th> Résumé </th>
                    <th> Date </th>
<th> Status </th>
                                                            </tr>
            </thead>
                    <tbody>
        <tr>
                <td> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
        echo " </td>
                <td> ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), "html", null, true);
        echo " </td>
                <td> ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 56, $this->source); })()), "resume", [], "any", false, false, false, 56), "html", null, true);
        echo " </td>
<td> ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 57, $this->source); })()), "date", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
        echo " </td>
<td> ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 58, $this->source); })()), "status", [], "any", false, false, false, 58), "html", null, true);
        echo " </td>
                        </tr>
           
        </tbody>
    </table>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "activites/afficherActivites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 58,  174 => 57,  170 => 56,  166 => 55,  162 => 54,  145 => 39,  135 => 38,  113 => 79,  109 => 78,  97 => 69,  91 => 65,  89 => 38,  59 => 11,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
     {{ include('linkCss.html.twig') }}
        
        
        <title>Activités</title>
    </head>

<body>

   {{ include('navbar.html.twig') }}


 

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>BioGeSoft</h6>
          <h2>Mes activités !</h2>
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
                  {% block content %}
    

    <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                   
                <tr>
                    <th> Id </th>
                <th> Nom </th>
                                        <th> Résumé </th>
                    <th> Date </th>
<th> Status </th>
                                                            </tr>
            </thead>
                    <tbody>
        <tr>
                <td> {{ activite.id }} </td>
                <td> {{ activite.nom }} </td>
                <td> {{ activite.resume }} </td>
<td> {{ activite.date|date(\"d/m/Y\") }} </td>
<td> {{ activite.status }} </td>
                        </tr>
           
        </tbody>
    </table>

    {% endblock %}

                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                 <a href=\"{{ path('accueil_index') }}\">Revenir à l'accueil</a>
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


", "activites/afficherActivites.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\activites\\afficherActivites.html.twig");
    }
}
