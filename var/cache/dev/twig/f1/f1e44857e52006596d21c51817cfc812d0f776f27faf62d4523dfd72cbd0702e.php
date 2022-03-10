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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"> Accueil </a> -->
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                    
                    ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "                    
                    <li><a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\"> accueil </a></li>

                    <li><a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_index");
            echo "\"> Liste des messages </a> </li>


";
            // line 31
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 32
                echo "                            <h1> Espace Réservé au administrateurs :</h1>
                            <li><a href=\"";
                // line 33
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
                echo "\"> accueil </a></li>
<li><a href=\"";
                // line 34
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
                echo "\"> Liste des utilisateurs </a> </li>
";
            }
            // line 36
            echo "                    

";
            // line 38
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ABONNER")) {
                // line 39
                echo "<h1> Bien venu sur votre espace personnel !</h1>
<li><a href=\"";
                // line 40
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilEspacePerso_index");
                echo "\">Page d'accueil de votre espace perso ! </a> </li>
<li><a href=\"";
                // line 41
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("monEspacePersonel_index");
                echo "\">Mon espace personnel : </a> </li>
";
            }
            // line 43
            echo "

                    
                    <li><a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> se déconnecter </a></li>

                    

                    ";
        } else {
            // line 51
            echo "<h1> Bien venu sur le site Retrouvailles.com ! </h1>
                    
                    <li><a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\"> accueil </a></li>
                    
                    <li><a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"> S'inscrire : </a> </li>
                    <li><a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Se connecter : </a></li>

<h1> Retrouvailles et Témoignages ! </h1>
<div>
<a href=\"https://youtu.be/vk-wuWhyCsw\">Retrouvailles plutôt inhabituelles dans un tribunal ! </a>
<p>
MIAMI – 30 juin 2015 – Retrouvailles plutôt inhabituelles dans un tribunal de Miami. La juge a en face d'elle un prévenu. Accusé de plusieurs cambriolages, l'homme écoute tête baissée. Jusqu'à cette incroyable scène : \"M. Booth, j'ai une question. Êtes-vous allé à l'école Nautilus ?\"  l'interroge Mindy Glazer, la juge. \"Je suis désolée de vous voir ici. Je me suis toujours demandée ce que vous étiez devenu.\" poursuit-elle. L'homme éclate en sanglots, répétant la tête entre les mains \"Oh mon dieu \".
\"Il était le meilleur à l'école. Je jouais au foot avec lui. Comme tous les enfants . Et regardez ce qui arrive. Je suis désolée de voir cela. M. Booth, j'espère que vous serez capable de changer 
votre comportement. Bonne chance à vous. \" a conclu la juge.
</p>
<br/><br/>

<a href=\"https://youtu.be/kY-RibxCgyQ\"> On s'était dit rendez-vous dans 10 ans !   </a>
<p>
Aujourd’hui on se replonge dans nos années lycée ! Marqués par des amis 
ou des professeurs, ils se sont donnés rendez-vous comme dans la chanson : dans 10, 
20 ou même 30 ans. 
des hommes et des femmes qui évoquent des événements marquants de leur existence.
» diffusée le 11/12/2019 à 13.50 sur France 2.
</p>
<br/><br/>

<a href=\"https://youtu.be/mm42WPo5U9g\"> retrouvailles 75 ans après  ! </a>
<p>
Découvrez l'histoire de deux sœurs séparées pendant la seconde guerre mondiale et réunies grâce aux efforts de nos équipes du Rétablissement des Liens Familiaux (RLF)
</p>        
                    </div>
                                        ";
        }
        // line 84
        echo "
                    ";
        // line 85
        if ((0 === twig_compare("register", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "request", [], "any", false, false, false, 85), "attributes", [], "any", false, false, false, 85), "get", [0 => "_route"], "method", false, false, false, 85)))) {
            // line 86
            echo "                    <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\"> accueil </a></li>
                    
                    <li><a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs </a> </li>
                    <li><a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_index");
            echo "\"> Liste des messages </a> </li>

                    ";
        }
        // line 92
        echo "                        ";
        if ((0 === twig_compare("login", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "attributes", [], "any", false, false, false, 92), "get", [0 => "_route"], "method", false, false, false, 92)))) {
            // line 93
            echo "                        
                    <li><a href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\"> accueil </a></li>

                    <li><a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs </a> </li>
                    <li><a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_index");
            echo "\"> Liste des messages </a> </li>
                    
                    ";
        }
        // line 100
        echo "                </ul>
            </div>
        </div>
    </nav>

    ";
        // line 105
        $this->displayBlock('content', $context, $blocks);
        // line 108
        echo "
    ";
        // line 109
        $this->displayBlock('scripts', $context, $blocks);
        // line 117
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

    // line 105
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 106
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 110
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
        return array (  330 => 110,  320 => 109,  309 => 106,  299 => 105,  287 => 12,  283 => 11,  280 => 10,  270 => 9,  251 => 5,  238 => 117,  236 => 109,  233 => 108,  231 => 105,  224 => 100,  218 => 97,  214 => 96,  209 => 94,  206 => 93,  203 => 92,  197 => 89,  193 => 88,  187 => 86,  185 => 85,  182 => 84,  151 => 56,  147 => 55,  142 => 53,  138 => 51,  130 => 46,  125 => 43,  120 => 41,  116 => 40,  113 => 39,  111 => 38,  107 => 36,  102 => 34,  98 => 33,  95 => 32,  93 => 31,  87 => 28,  82 => 26,  79 => 25,  77 => 24,  71 => 21,  62 => 14,  60 => 9,  53 => 5,  47 => 1,);
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
                
                <!-- <a href=\"{{ path('index') }}\"> Accueil </a> -->
                <ul id=\"nav-mobile\" class=\"right hide-on-med-and-down\">
                    
                    {% if app.user %}
                    
                    <li><a href=\"{{ path('index') }}\"> accueil </a></li>

                    <li><a href=\"{{ path('messages_index') }}\"> Liste des messages </a> </li>


{% if is_granted('ROLE_ADMIN') %}
                            <h1> Espace Réservé au administrateurs :</h1>
                            <li><a href=\"{{ path('index') }}\"> accueil </a></li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs </a> </li>
{% endif %}
                    

{% if is_granted('ROLE_ABONNER') %}
<h1> Bien venu sur votre espace personnel !</h1>
<li><a href=\"{{ path('pageAccueilEspacePerso_index') }}\">Page d'accueil de votre espace perso ! </a> </li>
<li><a href=\"{{ path('monEspacePersonel_index') }}\">Mon espace personnel : </a> </li>
{% endif %}


                    
                    <li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>

                    

                    {% else %}
<h1> Bien venu sur le site Retrouvailles.com ! </h1>
                    
                    <li><a href=\"{{ path('index') }}\"> accueil </a></li>
                    
                    <li><a href=\"{{ path('app_register')}}\"> S'inscrire : </a> </li>
                    <li><a href=\"{{ path('app_login')}}\"> Se connecter : </a></li>

<h1> Retrouvailles et Témoignages ! </h1>
<div>
<a href=\"https://youtu.be/vk-wuWhyCsw\">Retrouvailles plutôt inhabituelles dans un tribunal ! </a>
<p>
MIAMI – 30 juin 2015 – Retrouvailles plutôt inhabituelles dans un tribunal de Miami. La juge a en face d'elle un prévenu. Accusé de plusieurs cambriolages, l'homme écoute tête baissée. Jusqu'à cette incroyable scène : \"M. Booth, j'ai une question. Êtes-vous allé à l'école Nautilus ?\"  l'interroge Mindy Glazer, la juge. \"Je suis désolée de vous voir ici. Je me suis toujours demandée ce que vous étiez devenu.\" poursuit-elle. L'homme éclate en sanglots, répétant la tête entre les mains \"Oh mon dieu \".
\"Il était le meilleur à l'école. Je jouais au foot avec lui. Comme tous les enfants . Et regardez ce qui arrive. Je suis désolée de voir cela. M. Booth, j'espère que vous serez capable de changer 
votre comportement. Bonne chance à vous. \" a conclu la juge.
</p>
<br/><br/>

<a href=\"https://youtu.be/kY-RibxCgyQ\"> On s'était dit rendez-vous dans 10 ans !   </a>
<p>
Aujourd’hui on se replonge dans nos années lycée ! Marqués par des amis 
ou des professeurs, ils se sont donnés rendez-vous comme dans la chanson : dans 10, 
20 ou même 30 ans. 
des hommes et des femmes qui évoquent des événements marquants de leur existence.
» diffusée le 11/12/2019 à 13.50 sur France 2.
</p>
<br/><br/>

<a href=\"https://youtu.be/mm42WPo5U9g\"> retrouvailles 75 ans après  ! </a>
<p>
Découvrez l'histoire de deux sœurs séparées pendant la seconde guerre mondiale et réunies grâce aux efforts de nos équipes du Rétablissement des Liens Familiaux (RLF)
</p>        
                    </div>
                                        {% endif %}

                    {% if 'register' == app.request.attributes.get('_route') %}
                    <li><a href=\"{{ path('index') }}\"> accueil </a></li>
                    
                    <li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs </a> </li>
                    <li><a href=\"{{ path('messages_index') }}\"> Liste des messages </a> </li>

                    {% endif %}
                        {% if 'login' == app.request.attributes.get('_route') %}
                        
                    <li><a href=\"{{ path('index') }}\"> accueil </a></li>

                    <li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs </a> </li>
                    <li><a href=\"{{ path('messages_index') }}\"> Liste des messages </a> </li>
                    
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
", "base.html.twig", "C:\\wamp64\\www\\Retrouvailles_NABI.com\\templates\\base.html.twig");
    }
}
