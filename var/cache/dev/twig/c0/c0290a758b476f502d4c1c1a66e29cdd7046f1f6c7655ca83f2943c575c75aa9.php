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

/* navbar.html.twig */
class __TwigTemplate_24f0d255781ca27542e239c69a9008d632e3f73102bdf08b3e53729c36cd703a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo " 
 <div class=\"sub-header\">
    <div class=\"container\">
      <div class=\"row\">
    ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "user", [], "any", false, false, false, 5)) {
            // line 6
            echo "    

        
              
                        ";
            // line 10
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 11
                echo "                        <div class=\"col-12\">
                        <div class=\"right-icons\">
                            <ul>
                            <li><a href=\"\"> Espace Admin : </a></li>
                            <li><a href=\"";
                // line 15
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
                echo "\"> Liste des utilisateurs </a></li>
                            <li><a href=\"";
                // line 16
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
                echo "\"> Liste des contacts </a></li>
                            <li><a href=\"";
                // line 17
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index");
                echo "\"> Liste des formations </a> </li>
                            <li><a href=\"";
                // line 18
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("langages_index");
                echo "\"> Liste des langages </a> </li>
                        
                            <li><a href=\"";
                // line 20
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites_index");
                echo "\"> Liste des activités </a></li>
                            <li><a href=\"";
                // line 21
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
                echo "\"> Liste des médias </a></li>
                            </ul>
                        ";
            }
            // line 24
            echo "
                        ";
            // line 25
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_GUINOT")) {
                // line 26
                echo "                            <div class=\"col-12\">
                            <div class=\"right-icons\">
                                <ul>
                            <li><a href=\"\"> Espace Admin_Guinot : </a></li>
                            <li><a href=\"";
                // line 30
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
                echo "\"> Liste des utilisateurs </a></li>
                            <li><a href=\"";
                // line 31
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations_index");
                echo "\"> Liste des formations </a> </li>
                            <li><a href=\"";
                // line 32
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
                echo "\"> Liste des contacts  </a></li>
                            <li><a href=\"";
                // line 33
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites_index");
                echo "\"> Liste des activités  </a></li>
                            <li><a href=\"";
                // line 34
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
                echo "\"> Liste des médias </a></li>
                            </ul>
                        ";
            }
            // line 37
            echo "
                        ";
            // line 38
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN_BIOGESOFT")) {
                // line 39
                echo "                            <div class=\"col-12\">
                            <div class=\"right-icons\">
                                <ul>
                            <li><a href=\"\"> Espace Admin_BIOGESOFT : </a></li>
                            <li><a href=\"";
                // line 43
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("utilisateur_index");
                echo "\"> Liste des utilisateurs </a></li>
                            <li><a href=\"";
                // line 44
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeDesFormations_index");
                echo "\"> Liste des formations </a> </li>
                            <li><a href=\"";
                // line 45
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("langages_index");
                echo "\"> Liste des langages </a> </li>
                            <a href=\"";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cours_index");
                echo "\">Gestion des cours </a> <br>
                            <li><a href=\"";
                // line 47
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
                echo "\"> Liste des contacts  </a></li>
                            <li><a href=\"";
                // line 48
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites_index");
                echo "\"> Liste des activités  </a></li>
                            <li><a href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
                echo "\"> Liste des médias </a></li>
                            </ul>
                        ";
            }
            // line 52
            echo "
                        ";
            // line 53
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STAGIAIRE")) {
                // line 54
                echo "                            <div class=\"col-12\">
                            <div class=\"right-icons\">
                                <ul>
                            <li><a href=\"";
                // line 57
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pageAccueilEspacePerso_index");
                echo "\"> Espace Stagiaire : </a></li>
                            <li><a href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contacts_index");
                echo "\"> Liste de mes contacts </a>
                            <li><a href=\"";
                // line 59
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activites_index");
                echo "\"> Liste de mes activités </a></li>
                            <li><a href=\"";
                // line 60
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("medias_index");
                echo "\"> Liste de mes médias </a></li>             
                            </ul>
                        ";
            }
            // line 63
            echo "                        ";
        }
        // line 64
        echo "
               
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
 
 <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-12\">
                  <nav class=\"main-nav\">
                      <!-- ***** Logo Start ***** -->
                      <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\" class=\"logo\">
                          Intern-finding
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class=\"nav\">
                          
                    ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88)) {
            // line 89
            echo "                            <li class=\"scroll-to-section\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\" class=\"active\">Accueil</a></li>
                            <li class=\"scroll-to-section\"><a href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherMedias_index");
            echo "\" >Menu Guinot</a></li>
                            <li class=\"scroll-to-section\"><a href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu_bio_ge_soft");
            echo "\">Biogesoft</a></li>
                            <li class=\"scroll-to-section\"><a href=\"";
            // line 92
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\">messagerie Public</a></li> 
                            <li class=\"scroll-to-section\"><a href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a></li>


                ";
        } else {
            // line 97
            echo "                        <li class=\"scroll-to-section\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
            echo "\" class=\"active\">Accueil</a></li>
                        <li class=\"scroll-to-section\"><a href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherMedias_index");
            echo "\" >Menu Guinot</a></li>
                        <li class=\"scroll-to-section\"><a href=\"";
            // line 99
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu_bio_ge_soft");
            echo "\">Biogesoft</a></li>
                        <li class=\"scroll-to-section\"><a href=\"";
            // line 100
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\">messagerie Public</a></li>
                        <li class=\"scroll-to-section\"><a href=\"";
            // line 101
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a></li> 
                        <li class=\"scroll-to-section\"><a href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Deconnexion</a></li> 
                                                    
                    ";
        }
        // line 105
        echo "
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
  

 ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 105,  273 => 102,  269 => 101,  265 => 100,  261 => 99,  257 => 98,  252 => 97,  245 => 93,  241 => 92,  237 => 91,  233 => 90,  228 => 89,  226 => 88,  216 => 81,  197 => 64,  194 => 63,  188 => 60,  184 => 59,  180 => 58,  176 => 57,  171 => 54,  169 => 53,  166 => 52,  160 => 49,  156 => 48,  152 => 47,  148 => 46,  144 => 45,  140 => 44,  136 => 43,  130 => 39,  128 => 38,  125 => 37,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  97 => 26,  95 => 25,  92 => 24,  86 => 21,  82 => 20,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  59 => 11,  57 => 10,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" 
 <div class=\"sub-header\">
    <div class=\"container\">
      <div class=\"row\">
    {% if app.user %}
    

        
              
                        {% if is_granted('ROLE_ADMIN') %}
                        <div class=\"col-12\">
                        <div class=\"right-icons\">
                            <ul>
                            <li><a href=\"\"> Espace Admin : </a></li>
                            <li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs </a></li>
                            <li><a href=\"{{ path('contacts_index') }}\"> Liste des contacts </a></li>
                            <li><a href=\"{{ path('formations_index') }}\"> Liste des formations </a> </li>
                            <li><a href=\"{{ path('langages_index') }}\"> Liste des langages </a> </li>
                        
                            <li><a href=\"{{ path('activites_index') }}\"> Liste des activités </a></li>
                            <li><a href=\"{{ path('medias_index') }}\"> Liste des médias </a></li>
                            </ul>
                        {% endif %}

                        {% if is_granted('ROLE_ADMIN_GUINOT') %}
                            <div class=\"col-12\">
                            <div class=\"right-icons\">
                                <ul>
                            <li><a href=\"\"> Espace Admin_Guinot : </a></li>
                            <li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs </a></li>
                            <li><a href=\"{{ path('formations_index') }}\"> Liste des formations </a> </li>
                            <li><a href=\"{{ path('contacts_index') }}\"> Liste des contacts  </a></li>
                            <li><a href=\"{{ path('activites_index') }}\"> Liste des activités  </a></li>
                            <li><a href=\"{{ path('medias_index') }}\"> Liste des médias </a></li>
                            </ul>
                        {% endif %}

                        {% if is_granted('ROLE_ADMIN_BIOGESOFT') %}
                            <div class=\"col-12\">
                            <div class=\"right-icons\">
                                <ul>
                            <li><a href=\"\"> Espace Admin_BIOGESOFT : </a></li>
                            <li><a href=\"{{ path('utilisateur_index') }}\"> Liste des utilisateurs </a></li>
                            <li><a href=\"{{ path('listeDesFormations_index') }}\"> Liste des formations </a> </li>
                            <li><a href=\"{{ path('langages_index') }}\"> Liste des langages </a> </li>
                            <a href=\"{{ path('cours_index') }}\">Gestion des cours </a> <br>
                            <li><a href=\"{{ path('contacts_index') }}\"> Liste des contacts  </a></li>
                            <li><a href=\"{{ path('activites_index') }}\"> Liste des activités  </a></li>
                            <li><a href=\"{{ path('medias_index') }}\"> Liste des médias </a></li>
                            </ul>
                        {% endif %}

                        {% if is_granted('ROLE_STAGIAIRE') %}
                            <div class=\"col-12\">
                            <div class=\"right-icons\">
                                <ul>
                            <li><a href=\"{{ path('pageAccueilEspacePerso_index') }}\"> Espace Stagiaire : </a></li>
                            <li><a href=\"{{ path('contacts_index') }}\"> Liste de mes contacts </a>
                            <li><a href=\"{{ path('activites_index') }}\"> Liste de mes activités </a></li>
                            <li><a href=\"{{ path('medias_index') }}\"> Liste de mes médias </a></li>             
                            </ul>
                        {% endif %}
                        {% endif %}

               
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
 
 <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-12\">
                  <nav class=\"main-nav\">
                      <!-- ***** Logo Start ***** -->
                      <a href=\"{{ path('accueil_index') }}\" class=\"logo\">
                          Intern-finding
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class=\"nav\">
                          
                    {% if app.user %}
                            <li class=\"scroll-to-section\"><a href=\"{{ path('accueil_index') }}\" class=\"active\">Accueil</a></li>
                            <li class=\"scroll-to-section\"><a href=\"{{ path('afficherMedias_index') }}\" >Menu Guinot</a></li>
                            <li class=\"scroll-to-section\"><a href=\"{{ path('app_menu_bio_ge_soft') }}\">Biogesoft</a></li>
                            <li class=\"scroll-to-section\"><a href=\"{{ path('message_index') }}\">messagerie Public</a></li> 
                            <li class=\"scroll-to-section\"><a href=\"{{ path('app_logout') }}\">Deconnexion</a></li>


                {% else %}
                        <li class=\"scroll-to-section\"><a href=\"{{ path('accueil_index') }}\" class=\"active\">Accueil</a></li>
                        <li class=\"scroll-to-section\"><a href=\"{{ path('afficherMedias_index') }}\" >Menu Guinot</a></li>
                        <li class=\"scroll-to-section\"><a href=\"{{ path('app_menu_bio_ge_soft') }}\">Biogesoft</a></li>
                        <li class=\"scroll-to-section\"><a href=\"{{ path('message_index') }}\">messagerie Public</a></li>
                        <li class=\"scroll-to-section\"><a href=\"{{ path('app_login') }}\">Connexion</a></li> 
                        <li class=\"scroll-to-section\"><a href=\"{{ path('app_logout') }}\">Deconnexion</a></li> 
                                                    
                    {% endif %}

                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
  

 ", "navbar.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\navbar.html.twig");
    }
}
