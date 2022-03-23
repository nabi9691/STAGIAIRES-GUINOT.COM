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
class __TwigTemplate_c81830bd1ff97e2bcc9ca131f20f53df70a725f569bb22fc63b0057e55ef5d58 extends Template
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
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
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
        // line 14
        echo "</head>

<body>
    <nav>
        <div class=\"nav-wrapper\">
            <div class=\"container\">
                
                <!-- <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\"> Accueil </a> -->
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                    
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "                    
                    <li><a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>

<li><a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("introductionGuinot_index");
            echo "\"> introduction sur Guinot ! </a></li>
<li><a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("motDuPresidentDeGuinot_index");
            echo "\"> Mot du président de Guinot ! </a></li>
<li><a href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historiqueGuinot_index");
            echo "\"> D'écouvrez l'historique de Guinot ! </a></li>

<li><a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mediats_index");
            echo "\"> Liste des médiats ! </a></li>
<li><a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
            echo "\"> Liste des contacts ! </a></li>

<li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> Liste des messages : </a></li>
<li><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs : </a></li>

                    <li><a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> se déconnecter </a></li>

";
            // line 40
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 41
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
                echo "\"> Liste des messages : </a></li>
<li><a href=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
                echo "\"> Liste des utilisateurs : </a></li>
";
            }
            // line 44
            echo "

";
            // line 46
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ABONNER")) {
                // line 47
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilEspacePerso_index");
                echo "\">Page d'accueil de votre espace perso ! </a> </li>
<li><a href=\"";
                // line 48
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("monEspacePersonel_index");
                echo "\">Mon espace personnel : </a> </li>
";
            }
            // line 50
            echo "
                    ";
        } else {
            // line 52
            echo "
 <li><a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>
                    
                    <li><a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Se connecter </a> </li>
                    <li><a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"> Création de compte </a> </li>
                    <li><a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> se déconnecter </a></li>

<li><a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilGuinot_index");
            echo "\"> Page d'accueil de GUINOT ! </a></li>

<li><a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mediats_index");
            echo "\"> Liste des médiats ! </a></li>
<li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
            echo "\"> Liste des contacts ! </a></li>
<li><a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> accéder au service de tchat public !</a></li>
<li><a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs : </a></li>
                                            
                                            ";
        }
        // line 67
        echo "
                    ";
        // line 68
        if ((0 === twig_compare("register", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "attributes", [], "any", false, false, false, 68), "get", [0 => "_route"], "method", false, false, false, 68)))) {
            // line 69
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> Liste des messages </a> </li>

                    <li><a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs </a> </li>
                    
                    
                    ";
        }
        // line 75
        echo "                        ";
        if ((0 === twig_compare("login", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "attributes", [], "any", false, false, false, 75), "get", [0 => "_route"], "method", false, false, false, 75)))) {
            // line 76
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> Liste des messages </a> </li>

                    <li><a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs </a> </li>
                        

                    
                    ";
        }
        // line 83
        echo "                </ul>
            </div>
        </div>
    </nav>

    ";
        // line 88
        $this->displayBlock('content', $context, $blocks);
        // line 91
        echo "
    ";
        // line 92
        $this->displayBlock('scripts', $context, $blocks);
        // line 100
        echo "</body>

</html>
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
        echo "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/app.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nabi.css"), "html", null, true);
        echo "\">
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 89
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 93
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>

    <script type=\"text/javascript\">
        \$('select').formSelect();
    </script>
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
        return array (  340 => 93,  330 => 92,  319 => 89,  309 => 88,  297 => 12,  293 => 11,  290 => 10,  280 => 9,  261 => 5,  248 => 100,  246 => 92,  243 => 91,  241 => 88,  234 => 83,  226 => 78,  220 => 76,  217 => 75,  210 => 71,  204 => 69,  202 => 68,  199 => 67,  193 => 64,  189 => 63,  185 => 62,  181 => 61,  176 => 59,  171 => 57,  167 => 56,  163 => 55,  158 => 53,  155 => 52,  151 => 50,  146 => 48,  141 => 47,  139 => 46,  135 => 44,  130 => 42,  125 => 41,  123 => 40,  118 => 38,  113 => 36,  109 => 35,  104 => 33,  100 => 32,  95 => 30,  91 => 29,  87 => 28,  82 => 26,  79 => 25,  77 => 24,  71 => 21,  62 => 14,  60 => 9,  53 => 5,  47 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/app.css') }}\">
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

<li><a href=\"{{ path('introductionGuinot_index') }}\"> introduction sur Guinot ! </a></li>
<li><a href=\"{{ path('motDuPresidentDeGuinot_index') }}\"> Mot du président de Guinot ! </a></li>
<li><a href=\"{{ path('historiqueGuinot_index') }}\"> D'écouvrez l'historique de Guinot ! </a></li>

<li><a href=\"{{ path('mediats_index') }}\"> Liste des médiats ! </a></li>
<li><a href=\"{{ path('contacts_index') }}\"> Liste des contacts ! </a></li>

<li><a href=\"{{ path('message_index') }}\"> Liste des messages : </a></li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>

                    <li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>

{% if is_granted('ROLE_ADMIN') %}
<li><a href=\"{{ path('message_index') }}\"> Liste des messages : </a></li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>
{% endif %}


{% if is_granted('ROLE_ABONNER') %}
<li><a href=\"{{ path('pageAccueilEspacePerso_index') }}\">Page d'accueil de votre espace perso ! </a> </li>
<li><a href=\"{{ path('monEspacePersonel_index') }}\">Mon espace personnel : </a> </li>
{% endif %}

                    {% else %}

 <li><a href=\"{{ path('accueil_index') }}\"> accueil </a></li>
                    
                    <li><a href=\"{{ path('app_login') }}\"> Se connecter </a> </li>
                    <li><a href=\"{{ path('app_register') }}\"> Création de compte </a> </li>
                    <li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>

<li><a href=\"{{ path('pageAccueilGuinot_index') }}\"> Page d'accueil de GUINOT ! </a></li>

<li><a href=\"{{ path('mediats_index') }}\"> Liste des médiats ! </a></li>
<li><a href=\"{{ path('contacts_index') }}\"> Liste des contacts ! </a></li>
<li><a href=\"{{ path('message_index') }}\"> accéder au service de tchat public !</a></li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>
                                            
                                            {% endif %}

                    {% if 'register' == app.request.attributes.get('_route') %}
<li><a href=\"{{ path('message_index') }}\"> Liste des messages </a> </li>

                    <li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs </a> </li>
                    
                    
                    {% endif %}
                        {% if 'login' == app.request.attributes.get('_route') %}
<li><a href=\"{{ path('message_index') }}\"> Liste des messages </a> </li>

                    <li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs </a> </li>
                        

                    
                    {% endif %}
                </ul>
            </div>
        </div>
    </nav>

    {% block content %}

    {% endblock %}

    {% block scripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>

    <script type=\"text/javascript\">
        \$('select').formSelect();
    </script>
    {% endblock %}
</body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\ANCIENS-RETROUVAILLES-GUINOT\\templates\\base.html.twig");
    }
}
