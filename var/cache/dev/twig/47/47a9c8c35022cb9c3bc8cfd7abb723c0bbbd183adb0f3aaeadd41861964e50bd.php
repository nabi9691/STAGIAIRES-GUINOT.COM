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
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
            'footer' => [$this, 'block_footer'],
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

<li><a href=\"";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilGuinot_index");
            echo "\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilBIOInformatique_index");
            echo "\"> Page d'accueil BIOInformatique !</a> </li>
<li><a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs : </a></li>

<li><a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> accéder au service de tchat public !</a></li>
<li><a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilEspacePerso_index");
            echo "\"> accéder à mon espace personnel ! </a> </li>

<li><a href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index");
            echo "\"> Consultez nos formations !</a></li>
<li><a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("langages_index");
            echo "\"> Liste de nos langages ! </a> </li>


                                <li><a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> se déconnecter </a></li>



";
            // line 49
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 50
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
                echo "\"> Liste des utilisateurs : </a></li>

";
            }
            // line 53
            echo "

";
            // line 55
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STAGIAIRE")) {
                // line 56
                echo "<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilEspacePerso_index");
                echo "\">Page d'accueil de votre espace personnel<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
                echo "\"> Liste des médias ! </a></li>
<li><a href=\"";
                // line 57
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
                echo "\"> Liste des contacts ! </a></li>

";
            }
            // line 60
            echo "

                    ";
        } else {
            // line 63
            echo "<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>
<li><a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("test_index");
            echo "\"> Ceci est un test ! </a></li>
    
<li><a href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilGuinot_index");
            echo "\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilBIOInformatique_index");
            echo "\"> Page d'accueil BIOInformatique !</a> </li>


<li><a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\"> accéder au service de tchat public !</a></li>
<li><a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilEspacePerso_index");
            echo "\"> accéder à mon espace personnel ! </a> </li>
                                            <li><a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index");
            echo "\"> Liste de nos formations ! </a> </li>
<li><a href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("langages_index");
            echo "\"> Liste de nos langages ! </a> </li>

                        <li><a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\"> Se connecter </a> </li>
                    <li><a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\"> Création de compte </a> </li>
<li><a href=\"";
            // line 77
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\"> se déconnecter </a></li>
<li><a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
            echo "\"> Liste des utilisateurs : </a></li>
                                            
                                            ";
        }
        // line 81
        echo "
                    ";
        // line 82
        if ((0 === twig_compare("register", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "request", [], "any", false, false, false, 82), "attributes", [], "any", false, false, false, 82), "get", [0 => "_route"], "method", false, false, false, 82)))) {
            // line 83
            echo "
<li><a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>



                    ";
        }
        // line 89
        echo "                        
                        ";
        // line 90
        if ((0 === twig_compare("login", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "request", [], "any", false, false, false, 90), "attributes", [], "any", false, false, false, 90), "get", [0 => "_route"], "method", false, false, false, 90)))) {
            // line 91
            echo "
<li><a href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\"> accueil </a></li>



                    ";
        }
        // line 97
        echo "                </ul>
            </div>
        </div>
    </nav>

  

<!-- -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"#\">Navbar</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Link</a>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Dropdown
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"#\">Action</a>
          <a class=\"dropdown-item\" href=\"#\">Another action</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </div>
</nav>
<!-- end bootstap nav bar-->
    ";
        // line 141
        $this->displayBlock('content', $context, $blocks);
        // line 144
        echo "
    ";
        // line 145
        $this->displayBlock('scripts', $context, $blocks);
        // line 162
        echo "    

    
    
    ";
        // line 166
        $this->displayBlock('footer', $context, $blocks);
        // line 263
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

    // line 141
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 142
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 146
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/lightbox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/tabs.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/video.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slick-slider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <script type=\"text/javascript\">
        \$('select').formSelect();
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 167
        echo "<!-- Footer -->
<footer class=\"text-center text-lg-start bg-light text-muted\">
    <section class=\"d-flex justify-content-center justify-content-lg-between p-2 \"> </section>
   
  
    <!-- Section: Links  -->
    <section class=\"\">
      <div class=\"container text-center text-md-start mt-5\">
        <!-- Grid row -->
        <div class=\"row mt-3\">
          <!-- Grid column -->
          <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
            <!-- Content -->
            <h6 class=\"text-uppercase fw-bold mb-4\">
              <i class=\"fas fa-gem me-3\"></i>Stagiaire de Guinot
            </h6>
            <p>
              <a href=\"";
        // line 184
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historiqueGuinot_index");
        echo "\"> Qui somme nous ?</a></li>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
            <!-- Links -->
            <h6 class=\"text-uppercase fw-bold mb-4\">
              Formations 
            </h6>
            <p>
              <a  class=\"text-reset\">Développeur Web et Web Mobile</a>
            </p>
            <p>
              <a  class=\"text-reset\">Conseiller Relation Client à Distance</a>
            </p>
            <p>
              <a  class=\"text-reset\">Masseur-Kinésithérapeute</a>
            </p>
            <p>
              <a  class=\"text-reset\">Intelligence Artificielle</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
            <!-- Links -->
            <h6 class=\"text-uppercase fw-bold mb-4\">
              Liens Utiles
            </h6>
            <p>
              <a href=\"#!\" class=\"text-reset\">Pricing</a>
            </p>
            <p>
              <a href=\"#!\" class=\"text-reset\">Settings</a>
            </p>
            <p>
              <a href=\"#!\" class=\"text-reset\">Orders</a>
            </p>
            <p>
              <a href=\"#!\" class=\"text-reset\">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
            <!-- Links -->
            <h6 class=\"text-uppercase fw-bold mb-4\">
              Contact
            </h6>
            <p><i class=\"fas fa-home me-3\"></i> 24-26 bd Chastenet de Géry, 94814 Villejuif Cedex</p>
            <p>
              <i class=\"fas fa-envelope me-3\"></i>
              paul.guinot@guinot.asso.fr
            </p>
            <p><i class=\"fas fa-phone me-3\"></i> + 01 46 78 01 00</p>
            <p><i class=\"fas fa-print me-3\"></i> + 01 46 78 01 00</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
      © 2021 Copyright:
      <a class=\"text-reset fw-bold\" href=\"\">MohammedNabi.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  
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
        return array (  492 => 184,  473 => 167,  463 => 166,  447 => 156,  443 => 155,  439 => 154,  435 => 153,  431 => 152,  427 => 151,  423 => 150,  417 => 146,  407 => 145,  396 => 142,  386 => 141,  373 => 17,  369 => 16,  365 => 15,  361 => 14,  357 => 13,  353 => 12,  349 => 10,  339 => 9,  320 => 5,  307 => 263,  305 => 166,  299 => 162,  297 => 145,  294 => 144,  292 => 141,  246 => 97,  238 => 92,  235 => 91,  233 => 90,  230 => 89,  222 => 84,  219 => 83,  217 => 82,  214 => 81,  208 => 78,  204 => 77,  200 => 76,  196 => 75,  191 => 73,  187 => 72,  183 => 71,  179 => 70,  173 => 67,  169 => 66,  164 => 64,  159 => 63,  154 => 60,  148 => 57,  141 => 56,  139 => 55,  135 => 53,  128 => 50,  126 => 49,  119 => 45,  113 => 42,  109 => 41,  104 => 39,  100 => 38,  95 => 36,  91 => 35,  87 => 34,  81 => 32,  79 => 31,  72 => 27,  63 => 20,  61 => 9,  54 => 5,  48 => 1,);
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

<li><a href=\"{{ path('pageAccueilGuinot_index') }}\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"{{ path('pageAccueilBIOInformatique_index') }}\"> Page d'accueil BIOInformatique !</a> </li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>

<li><a href=\"{{ path('message_index') }}\"> accéder au service de tchat public !</a></li>
<li><a href=\"{{ path('pageAccueilEspacePerso_index') }}\"> accéder à mon espace personnel ! </a> </li>

<li><a href=\"{{ path('formations_index') }}\"> Consultez nos formations !</a></li>
<li><a href=\"{{ path('langages_index') }}\"> Liste de nos langages ! </a> </li>


                                <li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>



{% if is_granted('ROLE_ADMIN') %}
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>

{% endif %}


{% if is_granted('ROLE_STAGIAIRE') %}
<li><a href=\"{{ path('pageAccueilEspacePerso_index') }}\">Page d'accueil de votre espace personnel<li><a href=\"{{ path('medias_index') }}\"> Liste des médias ! </a></li>
<li><a href=\"{{ path('contacts_index') }}\"> Liste des contacts ! </a></li>

{% endif %}


                    {% else %}
<li><a href=\"{{ path('accueil_index') }}\"> accueil </a></li>
<li><a href=\"{{ path('test_index') }}\"> Ceci est un test ! </a></li>
    
<li><a href=\"{{ path('pageAccueilGuinot_index') }}\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"{{ path('pageAccueilBIOInformatique_index') }}\"> Page d'accueil BIOInformatique !</a> </li>


<li><a href=\"{{ path('message_index') }}\"> accéder au service de tchat public !</a></li>
<li><a href=\"{{ path('pageAccueilEspacePerso_index') }}\"> accéder à mon espace personnel ! </a> </li>
                                            <li><a href=\"{{ path('formations_index') }}\"> Liste de nos formations ! </a> </li>
<li><a href=\"{{ path('langages_index') }}\"> Liste de nos langages ! </a> </li>

                        <li><a href=\"{{ path('app_login') }}\"> Se connecter </a> </li>
                    <li><a href=\"{{ path('app_register') }}\"> Création de compte </a> </li>
<li><a href=\"{{ path('app_logout') }}\"> se déconnecter </a></li>
<li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs : </a></li>
                                            
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

  

<!-- -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"#\">Navbar</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Link</a>
      </li>
      <li class=\"nav-item dropdown\">
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Dropdown
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
          <a class=\"dropdown-item\" href=\"#\">Action</a>
          <a class=\"dropdown-item\" href=\"#\">Another action</a>
          <div class=\"dropdown-divider\"></div>
          <a class=\"dropdown-item\" href=\"#\">Something else here</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
      </li>
    </ul>
    <form class=\"form-inline my-2 my-lg-0\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
    </form>
  </div>
</nav>
<!-- end bootstap nav bar-->
    {% block content %}

    {% endblock %}

    {% block scripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset('js/isotope.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/owl-carousel.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/lightbox.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/tabs.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/video.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/slick-slider.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/custom.js') }}\" type=\"text/javascript\"></script>
    
    <script type=\"text/javascript\">
        \$('select').formSelect();
    </script>
    {% endblock %}
    

    
    
    {% block footer %}
<!-- Footer -->
<footer class=\"text-center text-lg-start bg-light text-muted\">
    <section class=\"d-flex justify-content-center justify-content-lg-between p-2 \"> </section>
   
  
    <!-- Section: Links  -->
    <section class=\"\">
      <div class=\"container text-center text-md-start mt-5\">
        <!-- Grid row -->
        <div class=\"row mt-3\">
          <!-- Grid column -->
          <div class=\"col-md-3 col-lg-4 col-xl-3 mx-auto mb-4\">
            <!-- Content -->
            <h6 class=\"text-uppercase fw-bold mb-4\">
              <i class=\"fas fa-gem me-3\"></i>Stagiaire de Guinot
            </h6>
            <p>
              <a href=\"{{ path('historiqueGuinot_index') }}\"> Qui somme nous ?</a></li>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class=\"col-md-2 col-lg-2 col-xl-2 mx-auto mb-4\">
            <!-- Links -->
            <h6 class=\"text-uppercase fw-bold mb-4\">
              Formations 
            </h6>
            <p>
              <a  class=\"text-reset\">Développeur Web et Web Mobile</a>
            </p>
            <p>
              <a  class=\"text-reset\">Conseiller Relation Client à Distance</a>
            </p>
            <p>
              <a  class=\"text-reset\">Masseur-Kinésithérapeute</a>
            </p>
            <p>
              <a  class=\"text-reset\">Intelligence Artificielle</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class=\"col-md-3 col-lg-2 col-xl-2 mx-auto mb-4\">
            <!-- Links -->
            <h6 class=\"text-uppercase fw-bold mb-4\">
              Liens Utiles
            </h6>
            <p>
              <a href=\"#!\" class=\"text-reset\">Pricing</a>
            </p>
            <p>
              <a href=\"#!\" class=\"text-reset\">Settings</a>
            </p>
            <p>
              <a href=\"#!\" class=\"text-reset\">Orders</a>
            </p>
            <p>
              <a href=\"#!\" class=\"text-reset\">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class=\"col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4\">
            <!-- Links -->
            <h6 class=\"text-uppercase fw-bold mb-4\">
              Contact
            </h6>
            <p><i class=\"fas fa-home me-3\"></i> 24-26 bd Chastenet de Géry, 94814 Villejuif Cedex</p>
            <p>
              <i class=\"fas fa-envelope me-3\"></i>
              paul.guinot@guinot.asso.fr
            </p>
            <p><i class=\"fas fa-phone me-3\"></i> + 01 46 78 01 00</p>
            <p><i class=\"fas fa-print me-3\"></i> + 01 46 78 01 00</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class=\"text-center p-4\" style=\"background-color: rgba(0, 0, 0, 0.05);\">
      © 2021 Copyright:
      <a class=\"text-reset fw-bold\" href=\"\">MohammedNabi.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  
{% endblock %}
</body>

</html>
", "base.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\base.html.twig");
    }
}
