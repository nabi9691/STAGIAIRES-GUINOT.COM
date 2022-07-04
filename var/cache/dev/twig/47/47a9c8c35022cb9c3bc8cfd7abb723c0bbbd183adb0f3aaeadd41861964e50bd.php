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

/* base.html.twig */
class __TwigTemplate_b9d1614783eaccf6fa0ffc00745be45f614fc47be12292a5f977327f0c68d35a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "</head>

<body>
    <nav>
        <div class=\"nav-wrapper\">
            <div class=\"container\">
                
                <!-- <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\"> Accueil </a> -->
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">


                    ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>


";
            // line 35
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 36
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilGuinot_index");
                echo "\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"";
                // line 37
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilBIOInformatique_index");
                echo "\"> Page d'accueil BIOInformatique !</a> </li>
<li><a href=\"";
                // line 38
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
                echo "\"> Liste des utilisateurs de guinot: </a></li>
 <li><a href=\"";
                // line 39
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index");
                echo "\"> Liste des formations de Guinot ! </a> </li>
<li><a href=\"";
                // line 40
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("langages_index");
                echo "\"> Liste des langages de BioGeSoft ! </a> </li>
<li><a href=\"";
                // line 41
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
                echo "\"> accéder au service de tchat public !</a></li>
<li><a href=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites_index");
                echo "\"> Liste des activités  !</a></li>
<li><a href=\"";
                // line 43
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
                echo "\"> Liste des médias !</a></li>
<li><a href=\"";
                // line 44
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\"> se déconnecter </a></li>
";
            }
            // line 46
            echo "

";
            // line 48
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_GUINOT")) {
                // line 49
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilGuinot_index");
                echo "\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"";
                // line 50
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
                echo "\"> Liste des utilisateurs de GUINOT : </a></li>
<li><a href=\"";
                // line 51
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index");
                echo "\"> Liste des formations de Guinot ! </a> </li>
<li><a href=\"";
                // line 52
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
                echo "\"> accéder au service de tchat public </a></li>
<li><a href=\"";
                // line 53
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
                echo "\"> Liste des contacts de Guinot ! </a></li>
<li><a href=\"";
                // line 54
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites_index");
                echo "\"> Liste des activités  </a></li>
<li><a href=\"";
                // line 55
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
                echo "\"> Liste des médias de Guinot !</a></li>
  <li><a href=\"";
                // line 56
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\"> se déconnecter </a></li>
";
            }
            // line 58
            echo "

";
            // line 60
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_BIOGESOFT")) {
                // line 61
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilBIOInformatique_index");
                echo "\"> Page d'accueil BIOGESOFT !</a> </li>
<li><a href=\"";
                // line 62
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
                echo "\"> Liste des utilisateurs de BIOGESOFT : </a></li>
<li><a href=\"";
                // line 63
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeDesFormations_index");
                echo "\"> Liste des formations de BIOGESOFT ! </a> </li>
<li><a href=\"";
                // line 64
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("langages_index");
                echo "\"> Liste des langages de BIOGESOFT ! </a> </li>
<li><a href=\"";
                // line 65
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
                echo "\"> accéder au service de tchat public de BIOGESOFT !</a></li>
<li><a href=\"";
                // line 66
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
                echo "\"> Liste des contacts de Biogesoft ! </a></li>
<li><a href=\"";
                // line 67
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites_index");
                echo "\"> Liste des activités  de BIOGESOFT !</a></li>
<li><a href=\"";
                // line 68
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
                echo "\"> Liste des médias de BIOGESOFT !</a></li>
<li><a href=\"";
                // line 69
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\"> se déconnecter </a></li>
";
            }
            // line 71
            echo "

";
            // line 73
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STAGIAIRE")) {
                // line 74
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilEspacePerso_index");
                echo "\">Page d'accueil de votre espace personnel<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
                echo "\"> Liste des médias ! </a></li>
<li><a href=\"";
                // line 75
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
                echo "\"> Liste de mes contacts personnels ! </a></li>
<li><a href=\"";
                // line 76
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
                echo "\"> accéder à ma messagerie privée !</a></li>
<li><a href=\"";
                // line 77
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites_index");
                echo "\"> Liste de mes activités  personnelles !</a></li>
<li><a href=\"";
                // line 78
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
                echo "\"> Liste de mes médias personnels !</a></li>
                                <li><a href=\"";
                // line 79
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\"> se déconnecter </a></li>
";
            }
            // line 81
            echo "

                    ";
        } else {
            // line 84
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>
    
<li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilGuinot_index");
            echo "\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilBIOInformatique_index");
            echo "\"> Page d'accueil BIOInformatique !</a> </li>
<li><a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> accéder au service de tchat public !</a></li>

                        <li><a href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Se connecter </a> </li>
                    <li><a href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"> Création de compte </a> </li>
                                            
                                            ";
        }
        // line 94
        echo "
                    ";
        // line 95
        if ((0 === twig_compare("register", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "attributes", [], "any", false, false, false, 95), "get", [0 => "_route"], "method", false, false, false, 95)))) {
            // line 96
            echo "
<li><a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>



                    ";
        }
        // line 102
        echo "                        
                        ";
        // line 103
        if ((0 === twig_compare("login", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "request", [], "any", false, false, false, 103), "attributes", [], "any", false, false, false, 103), "get", [0 => "_route"], "method", false, false, false, 103)))) {
            // line 104
            echo "
            <li><a href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>



                    ";
        }
        // line 110
        echo "                </ul>
            </div>
        </div>
    </nav>

  
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/fontawesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("owlcarousel/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("owlcarousel/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/lightbox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nabi.css"), "html", null, true);
        echo "\">
    
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 17,  374 => 16,  370 => 15,  366 => 14,  362 => 13,  358 => 12,  354 => 10,  344 => 9,  325 => 5,  309 => 110,  301 => 105,  298 => 104,  296 => 103,  293 => 102,  285 => 97,  282 => 96,  280 => 95,  277 => 94,  271 => 91,  267 => 90,  262 => 88,  258 => 87,  254 => 86,  248 => 84,  243 => 81,  238 => 79,  234 => 78,  230 => 77,  226 => 76,  222 => 75,  215 => 74,  213 => 73,  209 => 71,  204 => 69,  200 => 68,  196 => 67,  192 => 66,  188 => 65,  184 => 64,  180 => 63,  176 => 62,  171 => 61,  169 => 60,  165 => 58,  160 => 56,  156 => 55,  152 => 54,  148 => 53,  144 => 52,  140 => 51,  136 => 50,  131 => 49,  129 => 48,  125 => 46,  120 => 44,  116 => 43,  112 => 42,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  87 => 36,  85 => 35,  78 => 32,  76 => 31,  69 => 27,  60 => 20,  58 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <title>{% block title %}Symfony{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    {% block stylesheets %}
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/fontawesome.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/owl.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('owlcarousel/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('owlcarousel/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/lightbox.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/nabi.css') }}\">
    
                        {% endblock %}
</head>

<body>
    <nav>
        <div class=\"nav-wrapper\">
            <div class=\"container\">
                
                <!-- <a href=\"{{ path('accueil_index') }}\"> Accueil </a> -->
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">


                    {% if app.user %}
                    <li><a href=\"{{ path('accueil_index') }}\"> accueil </a></li>


{% if is_granted('ROLE_ADMIN') %}
<li><a href=\"{{ path('pageAccueilGuinot_index') }}\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"{{ path('pageAccueilBIOInformatique_index') }}\"> Page d'accueil BIOInformatique !</a> </li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs de guinot: </a></li>
 <li><a href=\"{{ path('formations_index') }}\"> Liste des formations de Guinot ! </a> </li>
<li><a href=\"{{ path('langages_index') }}\"> Liste des langages de BioGeSoft ! </a> </li>
<li><a href=\"{{ path('message_index') }}\"> accéder au service de tchat public !</a></li>
<li><a href=\"{{ path('activites_index') }}\"> Liste des activités  !</a></li>
<li><a href=\"{{ path('medias_index') }}\"> Liste des médias !</a></li>
<li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>
{% endif %}


{% if is_granted('ROLE_ADMIN_GUINOT') %}
<li><a href=\"{{ path('pageAccueilGuinot_index') }}\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs de GUINOT : </a></li>
<li><a href=\"{{ path('formations_index') }}\"> Liste des formations de Guinot ! </a> </li>
<li><a href=\"{{ path('message_index') }}\"> accéder au service de tchat public </a></li>
<li><a href=\"{{ path('contacts_index') }}\"> Liste des contacts de Guinot ! </a></li>
<li><a href=\"{{ path('activites_index') }}\"> Liste des activités  </a></li>
<li><a href=\"{{ path('medias_index') }}\"> Liste des médias de Guinot !</a></li>
  <li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>
{% endif %}


{% if is_granted('ROLE_ADMIN_BIOGESOFT') %}
<li><a href=\"{{ path('pageAccueilBIOInformatique_index') }}\"> Page d'accueil BIOGESOFT !</a> </li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs de BIOGESOFT : </a></li>
<li><a href=\"{{ path('listeDesFormations_index') }}\"> Liste des formations de BIOGESOFT ! </a> </li>
<li><a href=\"{{ path('langages_index') }}\"> Liste des langages de BIOGESOFT ! </a> </li>
<li><a href=\"{{ path('message_index') }}\"> accéder au service de tchat public de BIOGESOFT !</a></li>
<li><a href=\"{{ path('contacts_index') }}\"> Liste des contacts de Biogesoft ! </a></li>
<li><a href=\"{{ path('activites_index') }}\"> Liste des activités  de BIOGESOFT !</a></li>
<li><a href=\"{{ path('medias_index') }}\"> Liste des médias de BIOGESOFT !</a></li>
<li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>
{% endif %}


{% if is_granted('ROLE_STAGIAIRE') %}
<li><a href=\"{{ path('pageAccueilEspacePerso_index') }}\">Page d'accueil de votre espace personnel<li><a href=\"{{ path('medias_index') }}\"> Liste des médias ! </a></li>
<li><a href=\"{{ path('contacts_index') }}\"> Liste de mes contacts personnels ! </a></li>
<li><a href=\"{{ path('message_index') }}\"> accéder à ma messagerie privée !</a></li>
<li><a href=\"{{ path('activites_index') }}\"> Liste de mes activités  personnelles !</a></li>
<li><a href=\"{{ path('medias_index') }}\"> Liste de mes médias personnels !</a></li>
                                <li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>
{% endif %}


                    {% else %}
<li><a href=\"{{ path('accueil_index') }}\"> accueil </a></li>
    
<li><a href=\"{{ path('pageAccueilGuinot_index') }}\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"{{ path('pageAccueilBIOInformatique_index') }}\"> Page d'accueil BIOInformatique !</a> </li>
<li><a href=\"{{ path('message_index') }}\"> accéder au service de tchat public !</a></li>

                        <li><a href=\"{{ path('app_login') }}\"> Se connecter </a> </li>
                    <li><a href=\"{{ path('app_register') }}\"> Création de compte </a> </li>
                                            
                                            {% endif %}

                    {% if 'register' == app.request.attributes.get('_route') %}

<li><a href=\"{{ path('accueil_index') }}\"> accueil </a></li>



                    {% endif %}
                        
                        {% if 'login' == app.request.attributes.get('_route') %}

            <li><a href=\"{{ path('accueil_index') }}\"> accueil </a></li>



                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>

  
", "base.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\base.html.twig");
    }
}
