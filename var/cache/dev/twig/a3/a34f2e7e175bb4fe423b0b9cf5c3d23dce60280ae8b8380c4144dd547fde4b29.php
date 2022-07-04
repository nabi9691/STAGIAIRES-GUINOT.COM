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

/* contacts/afficherContacts.html.twig */
class __TwigTemplate_c931390c5e9f9ac8ca9b8a58ef7bc7face61ece567d94516550d6246caf0c1b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/afficherContacts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/afficherContacts.html.twig"));

        // line 1
        echo "<html>
    <head>
     ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "
        
        
        <title>Afficher utilisateur</title>
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
                <h1>Afficher un contact</h1> 
                  ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "
                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 79
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

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 27
        echo "    

    <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                            <tr>
                    <th> Id </th>
                    <th> Formations </th>
                    <th> Nom </th>
                    <th> Prénom </th>
                    <th> Date de naissance </th>
                    <th> Téléphone </th>
                                        <th> Email </th>
                    <th> Fax : </th>
<th> Civilité </th>
                                        <th> Adresse </th>
                    <th> Code-Postal </th>
                    <th> Villes </th>
                <th> Départements </th>
                    <th> Pays </th>
                    
                    </tr>
            </thead>
            
            
                <tbody>
                                   <tr>
                <td> ";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53), "html", null, true);
        echo " </td>
                <td> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 54, $this->source); })()), "formation", [], "any", false, false, false, 54), "html", null, true);
        echo " </td>
<td> ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), "html", null, true);
        echo " </td>

                <td> ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 57, $this->source); })()), "prenom", [], "any", false, false, false, 57), "html", null, true);
        echo " </td>
                <td> ";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 58, $this->source); })()), "date", [], "any", false, false, false, 58), "d/m/Y"), "html", null, true);
        echo " </td>
<td> ";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 59, $this->source); })()), "telephone", [], "any", false, false, false, 59), "html", null, true);
        echo " </td>
<td> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 60, $this->source); })()), "email", [], "any", false, false, false, 60), "html", null, true);
        echo " </td>
<td> ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 61, $this->source); })()), "fax", [], "any", false, false, false, 61), "html", null, true);
        echo " </td>
<td> ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 62, $this->source); })()), "civilite", [], "any", false, false, false, 62), "html", null, true);
        echo " </td>
<td> ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 63, $this->source); })()), "adresse", [], "any", false, false, false, 63), "html", null, true);
        echo " </td>
<td> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 64, $this->source); })()), "codePostal", [], "any", false, false, false, 64), "html", null, true);
        echo " </td>
                <td> ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 65, $this->source); })()), "villes", [], "any", false, false, false, 65), "html", null, true);
        echo " </td>
<td> ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 66, $this->source); })()), "departements", [], "any", false, false, false, 66), "html", null, true);
        echo " </td>
<td> ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 67, $this->source); })()), "pays", [], "any", false, false, false, 67), "html", null, true);
        echo " </td>
            
            </tr>
                    </tbody>
    </table>
    </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contacts/afficherContacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 67,  209 => 66,  205 => 65,  201 => 64,  197 => 63,  193 => 62,  189 => 61,  185 => 60,  181 => 59,  177 => 58,  173 => 57,  168 => 55,  164 => 54,  160 => 53,  132 => 27,  122 => 26,  101 => 89,  97 => 88,  85 => 79,  79 => 75,  77 => 26,  59 => 11,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
     {{ include('linkCss.html.twig') }}
        
        
        <title>Afficher utilisateur</title>
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
                <h1>Afficher un contact</h1> 
                  {% block content %}
    

    <table class=\"table table-responsive\">
                <thead class=\"thead-dark\">
                            <tr>
                    <th> Id </th>
                    <th> Formations </th>
                    <th> Nom </th>
                    <th> Prénom </th>
                    <th> Date de naissance </th>
                    <th> Téléphone </th>
                                        <th> Email </th>
                    <th> Fax : </th>
<th> Civilité </th>
                                        <th> Adresse </th>
                    <th> Code-Postal </th>
                    <th> Villes </th>
                <th> Départements </th>
                    <th> Pays </th>
                    
                    </tr>
            </thead>
            
            
                <tbody>
                                   <tr>
                <td> {{ contact.id }} </td>
                <td> {{ contact.formation }} </td>
<td> {{ contact.nom }} </td>

                <td> {{ contact.prenom }} </td>
                <td> {{ contact.date|date(\"d/m/Y\") }} </td>
<td> {{ contact.telephone }} </td>
<td> {{ contact.email }} </td>
<td> {{ contact.fax }} </td>
<td> {{ contact.civilite }} </td>
<td> {{ contact.adresse }} </td>
<td> {{ contact.codePostal }} </td>
                <td> {{ contact.villes }} </td>
<td> {{ contact.departements }} </td>
<td> {{ contact.pays }} </td>
            
            </tr>
                    </tbody>
    </table>
    </div>

    {% endblock %}

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

</html>

", "contacts/afficherContacts.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\contacts\\afficherContacts.html.twig");
    }
}
