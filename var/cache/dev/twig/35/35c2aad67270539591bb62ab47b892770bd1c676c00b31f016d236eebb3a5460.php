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

/* langages/afficherLangage.html.twig */
class __TwigTemplate_85f877b15047d476b3038c7642670e18f973aee616c0613bdf30f8a93213e2d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/afficherLangage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/afficherLangage.html.twig"));

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
          <h6>BioGeSoft</h6>
          <h2>La formation</h2>
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
        // line 75
        echo "
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"meetings.html\">Back To Meetings List</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  ";
        // line 88
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 89
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
                <th> Nom du stagiaire </th>
<th> Prénom du stagiaire </th>
                <th> Téléphone </th>
                <th> Email </th>
                                        <th> Nom du langage </th>
                    <th> Durée </th>
<th> Objectif </th>
                    <th> Coefficient </th>
                                        </tr>
            </thead>
            
            
<tbody>
        <tr>
                <td> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
        echo " </td>
                <td> ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), "html", null, true);
        echo " </td>
<td> ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 62, $this->source); })()), "prenom", [], "any", false, false, false, 62), "html", null, true);
        echo " </td>
<td> ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 63, $this->source); })()), "telephone", [], "any", false, false, false, 63), "html", null, true);
        echo " </td>
<td> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), "html", null, true);
        echo " </td>
                <td> ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 65, $this->source); })()), "nomLangage", [], "any", false, false, false, 65), "html", null, true);
        echo " </td>
<td> ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 66, $this->source); })()), "date", [], "any", false, false, false, 66), "d/m/Y"), "html", null, true);
        echo " </td>
<td> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 67, $this->source); })()), "objectif", [], "any", false, false, false, 67), "html", null, true);
        echo " </td>
<td> ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["langage"]) || array_key_exists("langage", $context) ? $context["langage"] : (function () { throw new RuntimeError('Variable "langage" does not exist.', 68, $this->source); })()), "coefficient", [], "any", false, false, false, 68), "html", null, true);
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
        return "langages/afficherLangage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 68,  193 => 67,  189 => 66,  185 => 65,  181 => 64,  177 => 63,  173 => 62,  169 => 61,  165 => 60,  142 => 39,  132 => 38,  110 => 89,  106 => 88,  91 => 75,  89 => 38,  59 => 11,  48 => 3,  44 => 1,);
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
          <h6>BioGeSoft</h6>
          <h2>La formation</h2>
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
                <th> Nom du stagiaire </th>
<th> Prénom du stagiaire </th>
                <th> Téléphone </th>
                <th> Email </th>
                                        <th> Nom du langage </th>
                    <th> Durée </th>
<th> Objectif </th>
                    <th> Coefficient </th>
                                        </tr>
            </thead>
            
            
<tbody>
        <tr>
                <td> {{ langage.id }} </td>
                <td> {{ langage.nom }} </td>
<td> {{ langage.prenom }} </td>
<td> {{ langage.telephone }} </td>
<td> {{ langage.email }} </td>
                <td> {{ langage.nomLangage }} </td>
<td> {{ langage.date|date(\"d/m/Y\") }} </td>
<td> {{ langage.objectif }} </td>
<td> {{ langage.coefficient }} </td>
                        </tr>
           
        </tbody>
    </table>

    {% endblock %}

                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"meetings.html\">Back To Meetings List</a>
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


", "langages/afficherLangage.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\langages\\afficherLangage.html.twig");
    }
}
