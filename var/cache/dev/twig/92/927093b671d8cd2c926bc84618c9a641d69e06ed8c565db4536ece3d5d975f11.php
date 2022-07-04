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

/* contacts/index.html.twig */
class __TwigTemplate_21c4abe533e1bbec400ea91c44cb3216877e8ae32b857a7a32576d097ecdb9ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/index.html.twig"));

        // line 1
        echo "

<html>
    <head>
     ";
        // line 5
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo " 
        
        <title>Admin</title>
    </head>

<body>

   

";
        // line 14
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>Admin</h6>
          <h2>Gerer la liste des contacts</h2>
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
                  <h1>Admin</h1><br>
                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nouveauContacts_index");
        echo "\">Ajouter Un Nouveau contact ! </a>
                <br><br>
                  ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 99
        echo "                </div>
            <div class=\"col-lg-12\">
              <div class=\"main-button-red\">
                <a href=\"";
        // line 102
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
        // line 113
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
  ";
        // line 114
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "
 

</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "    
                <table class=\"table table-responsive\">
               <thead>
                <tr>
                <th> Id </th>
                
                <th>Nom  </th>
                <th> Prénom </th> 
                <th> Date </th>
                <th> Téléphone </th>
                 <th> Email </th>
                 <th> Fax </th>
                 <th>Civilité  </th>
                <th>Adresse  </th>
                <th> Code Postal </th>
                <th> Villes </th>
                <th> Departement </th>
                 <th> Pays </th>
               
                <th> Modifier </th>
                <th> Afficher </th>
                <th> Supprimer </th>
                </tr>
                </thead>
       ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["contact"]);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 67
            echo "<tbody>
        <tr>
                <td> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo " </td>
               
                <td> ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 71), "html", null, true);
            echo " </td>
                
                <td> ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 73), "html", null, true);
            echo " </td>
                <td> ";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "date", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
            echo " </td>
<td> ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "telephone", [], "any", false, false, false, 75), "html", null, true);
            echo " </td>
<td> ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 76), "html", null, true);
            echo " </td>
<td> ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "fax", [], "any", false, false, false, 77), "html", null, true);
            echo " </td>
<td> ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "civilite", [], "any", false, false, false, 78), "html", null, true);
            echo " </td>
<td> ";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "adresse", [], "any", false, false, false, 79), "html", null, true);
            echo " </td>
<td> ";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "codePostal", [], "any", false, false, false, 80), "html", null, true);
            echo " </td>
                <td> ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "villes", [], "any", false, false, false, 81), "html", null, true);
            echo " </td>
<td> ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "departements", [], "any", false, false, false, 82), "html", null, true);
            echo " </td>
<td> ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "pays", [], "any", false, false, false, 83), "html", null, true);
            echo " </td>
<td><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifierContacts_index", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">Modifier</a></td>
<td><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherContacts_index", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\">afficher</a></td>
<td><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprimerContacts_index", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">Supprimer</a></td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 89
            echo "                <td colspan=\"5\">
                    Vous n'avez pas de contacts enregistré dans votre base de données !
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </tbody>
    </table>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contacts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 94,  253 => 89,  245 => 86,  241 => 85,  237 => 84,  233 => 83,  229 => 82,  225 => 81,  221 => 80,  217 => 79,  213 => 78,  209 => 77,  205 => 76,  201 => 75,  197 => 74,  193 => 73,  188 => 71,  183 => 69,  179 => 67,  174 => 66,  148 => 42,  138 => 41,  120 => 114,  116 => 113,  102 => 102,  97 => 99,  95 => 41,  90 => 39,  62 => 14,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<html>
    <head>
     {{ include('linkCss.html.twig') }} 
        
        <title>Admin</title>
    </head>

<body>

   

{{ include('navbar.html.twig') }}

  <section class=\"heading-page header-text\" id=\"top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h6>Admin</h6>
          <h2>Gerer la liste des contacts</h2>
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
                  <h1>Admin</h1><br>
                <a href=\"{{ path('nouveauContacts_index') }}\">Ajouter Un Nouveau contact ! </a>
                <br><br>
                  {% block content %}
    
                <table class=\"table table-responsive\">
               <thead>
                <tr>
                <th> Id </th>
                
                <th>Nom  </th>
                <th> Prénom </th> 
                <th> Date </th>
                <th> Téléphone </th>
                 <th> Email </th>
                 <th> Fax </th>
                 <th>Civilité  </th>
                <th>Adresse  </th>
                <th> Code Postal </th>
                <th> Villes </th>
                <th> Departement </th>
                 <th> Pays </th>
               
                <th> Modifier </th>
                <th> Afficher </th>
                <th> Supprimer </th>
                </tr>
                </thead>
       {% for contact in contact %}
<tbody>
        <tr>
                <td> {{ contact.id }} </td>
               
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
<td><a href=\"{{ path('modifierContacts_index', {'id': contact.id }) }}\">Modifier</a></td>
<td><a href=\"{{ path('afficherContacts_index', {'id': contact.id }) }}\">afficher</a></td>
<td><a href=\"{{ path('supprimerContacts_index', {'id': contact.id }) }}\">Supprimer</a></td>
                </tr>
                {% else %}
                <td colspan=\"5\">
                    Vous n'avez pas de contacts enregistré dans votre base de données !
                </td>
            </tr>
            {% endfor %}
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

", "contacts/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\contacts\\index.html.twig");
    }
}
