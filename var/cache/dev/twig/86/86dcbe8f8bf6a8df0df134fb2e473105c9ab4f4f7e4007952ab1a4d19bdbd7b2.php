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

/* home/index.html.twig */
class __TwigTemplate_476528dca790da02a1fa2eaccba5ea9d326218da8f383b18a61c3b8604b4d330 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        echo "<html>
    <head>
      ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "
        <title>Accueil</title>
    </head>

<body>

  
";
        // line 10
        echo twig_include($this->env, $context, "navbar.html.twig");
        echo "

  <!-- ***** Main Banner Area Start ***** -->
  <section class=\"section main-banner\" id=\"top\" data-section=\"section1\">
      <video autoplay muted loop id=\"bg-video\">
          <source src=\"/images/course-video.mp4\" type=\"video/mp4\" />
      </video>

      <div class=\"video-overlay header-text\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <div class=\"caption\">
              <h6>Bonjour Cher Stagiaire</h6>
              <h2>Bienvenu au centre Guinot</h2>
              <p>Retrouvez les anciens stagiaires de Guinot ! </br> Nos stagiaires d'aujourd'hui, sont nos formateurs de demain !  </p>
              <div class=\"main-button-red\">
                  <div class=\"scroll-to-section\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("introductionGuinot_index");
        echo "\">Pour plus d'information sur le centre Guinot!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class=\"services\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"owl-service-item owl-carousel\">
          
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-01.png\" alt=\"Best Education\">
              </div>
              <div class=\"down-content\">
                <h4>La Meilleure Education</h4>
                <p>le meilleur programme</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-02.png\" alt=\"Best Teachers\">
              </div>
              <div class=\"down-content\">
                <h4>Les meilleurs proffesseurs</h4>
                <p>Proffesseurs reconnues mondialement et tous doctorant</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-03.png\" alt=\"Best Students\">
              </div>
              <div class=\"down-content\">
                <h4> Les meilleurs Etudiants</h4>
                <p> Des etudiants internationaux et avec un niveau elever  </p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-02.png\" alt=\"Online Meeting\">
              </div>
              <div class=\"down-content\">
                <h4>un reseau Almuni</h4>
                <p>un reseau connecté pour les étudiants et les anciens etudiants</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-03.png\" alt=\"Best Networking\">
              </div>
              <div class=\"down-content\">
                <h4>Un haut debit de connexion</h4>
                <p>Une connexion parmis l'une des meilleurs qualités</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
 
 </br></br></br>

  <section class=\"our-courses\" id=\"courses\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <h2>Nos cours populaires</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">
          <div class=\"owl-courses-item owl-carousel\">
            <div class=\"item\">
              <img src=\"/images/course-01.jpg\" alt=\"Course One\">
              <div class=\"down-content\">
                <h4>Cours de symfony</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$160</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-02.jpg\" alt=\"Course Two\">
              <div class=\"down-content\">
                <h4>Cours de programmation Web</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$180</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-03.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Algorithmique</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$140</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-04.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Anglais</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-01.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Francais</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$250</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-02.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Java</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$270</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-03.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en designer</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$340</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-04.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Photoshop</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$360</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-01.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Boostrap Css</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$400</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-02.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en JavaScript</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$430</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-03.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Python</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$480</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-04.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en theorie des graphe</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$560</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"our-facts\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <h2>Quelques faits sur notre université</h2>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"count-area-content percentage\">
                    <div class=\"count-digit\">94</div>
                    <div class=\"count-title\">Reussite des etudiants</div>
                  </div>
                </div>
                <div class=\"col-12\">
                  <div class=\"count-area-content\">
                    <div class=\"count-digit\">126</div>
                    <div class=\"count-title\">Enseignants actuels</div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"count-area-content new-students\">
                    <div class=\"count-digit\">2345</div>
                    <div class=\"count-title\">Nouveaux etudiants</div>
                  </div>
                </div> 
                <div class=\"col-12\">
                  <div class=\"count-area-content\">
                    <div class=\"count-digit\">32</div>
                    <div class=\"count-title\">Prix</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class=\"col-lg-6 align-self-center\">
          <div class=\"video\">
            <img src=\"/images/play-icon.png\" alt=\"\"> 
          </div>
        </div>
      </div>
    </div>
  </section>

 
     ";
        // line 430
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 431
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "
   
  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 431,  483 => 430,  77 => 27,  57 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
      {{ include('linkCss.html.twig') }}
        <title>Accueil</title>
    </head>

<body>

  
{{ include('navbar.html.twig') }}

  <!-- ***** Main Banner Area Start ***** -->
  <section class=\"section main-banner\" id=\"top\" data-section=\"section1\">
      <video autoplay muted loop id=\"bg-video\">
          <source src=\"/images/course-video.mp4\" type=\"video/mp4\" />
      </video>

      <div class=\"video-overlay header-text\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <div class=\"caption\">
              <h6>Bonjour Cher Stagiaire</h6>
              <h2>Bienvenu au centre Guinot</h2>
              <p>Retrouvez les anciens stagiaires de Guinot ! </br> Nos stagiaires d'aujourd'hui, sont nos formateurs de demain !  </p>
              <div class=\"main-button-red\">
                  <div class=\"scroll-to-section\"><a href=\"{{ path('introductionGuinot_index') }}\">Pour plus d'information sur le centre Guinot!</a></div>
              </div>
          </div>
              </div>
            </div>
          </div>
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <section class=\"services\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"owl-service-item owl-carousel\">
          
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-01.png\" alt=\"Best Education\">
              </div>
              <div class=\"down-content\">
                <h4>La Meilleure Education</h4>
                <p>le meilleur programme</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-02.png\" alt=\"Best Teachers\">
              </div>
              <div class=\"down-content\">
                <h4>Les meilleurs proffesseurs</h4>
                <p>Proffesseurs reconnues mondialement et tous doctorant</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-03.png\" alt=\"Best Students\">
              </div>
              <div class=\"down-content\">
                <h4> Les meilleurs Etudiants</h4>
                <p> Des etudiants internationaux et avec un niveau elever  </p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-02.png\" alt=\"Online Meeting\">
              </div>
              <div class=\"down-content\">
                <h4>un reseau Almuni</h4>
                <p>un reseau connecté pour les étudiants et les anciens etudiants</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-03.png\" alt=\"Best Networking\">
              </div>
              <div class=\"down-content\">
                <h4>Un haut debit de connexion</h4>
                <p>Une connexion parmis l'une des meilleurs qualités</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
 
 </br></br></br>

  <section class=\"our-courses\" id=\"courses\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"section-heading\">
            <h2>Nos cours populaires</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">
          <div class=\"owl-courses-item owl-carousel\">
            <div class=\"item\">
              <img src=\"/images/course-01.jpg\" alt=\"Course One\">
              <div class=\"down-content\">
                <h4>Cours de symfony</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$160</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-02.jpg\" alt=\"Course Two\">
              <div class=\"down-content\">
                <h4>Cours de programmation Web</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$180</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-03.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Algorithmique</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$140</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-04.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Anglais</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$120</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-01.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Francais</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$250</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-02.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Java</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$270</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-03.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en designer</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$340</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-04.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Photoshop</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$360</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-01.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Boostrap Css</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$400</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-02.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en JavaScript</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$430</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-03.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en Python</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$480</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"item\">
              <img src=\"/images/course-04.jpg\" alt=\"\">
              <div class=\"down-content\">
                <h4>Cours en theorie des graphe</h4>
                <div class=\"info\">
                  <div class=\"row\">
                    <div class=\"col-8\">
                      <ul>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                        <li><i class=\"fa fa-star\"></i></li>
                      </ul>
                    </div>
                    <div class=\"col-4\">
                       <span>\$560</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"our-facts\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <h2>Quelques faits sur notre université</h2>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"count-area-content percentage\">
                    <div class=\"count-digit\">94</div>
                    <div class=\"count-title\">Reussite des etudiants</div>
                  </div>
                </div>
                <div class=\"col-12\">
                  <div class=\"count-area-content\">
                    <div class=\"count-digit\">126</div>
                    <div class=\"count-title\">Enseignants actuels</div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"count-area-content new-students\">
                    <div class=\"count-digit\">2345</div>
                    <div class=\"count-title\">Nouveaux etudiants</div>
                  </div>
                </div> 
                <div class=\"col-12\">
                  <div class=\"count-area-content\">
                    <div class=\"count-digit\">32</div>
                    <div class=\"count-title\">Prix</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class=\"col-lg-6 align-self-center\">
          <div class=\"video\">
            <img src=\"/images/play-icon.png\" alt=\"\"> 
          </div>
        </div>
      </div>
    </div>
  </section>

 
     {{ include('footer.html.twig') }}
{{ include('scriptJS.html.twig') }}
   
  
</body>

</html>", "home/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\home\\index.html.twig");
    }
}
