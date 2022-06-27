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

/* test/index.html.twig */
class __TwigTemplate_06a959463141c0ee3520c36c4e30f7fc1782e23b1e1031ec3db3aa9075299c50 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/index.html.twig"));

        // line 1
        echo "<html>
    <head>
      ";
        // line 3
        echo twig_include($this->env, $context, "linkCss.html.twig");
        echo "
        <title>Acceuil</title>
    </head>

<body>

  <!-- Sub Header -->
  <div class=\"sub-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-sm-8\">
          <div class=\"left-content\">
            <p>Ce site web a été <em> Mohammed NABI</em> dans le cadre de sa formation</p>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-4\">
          <div class=\"right-icons\">
            <ul>
              <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
";
        // line 31
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
                  <div class=\"scroll-to-section\"><a href=\"#contact\">Pour plus d'information sur le centre Guinot!</a></div>
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
                <img src=\"/images/service-icon-01.png\" alt=\"\">
              </div>
              <div class=\"down-content\">
                <h4>Best Education</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-02.png\" alt=\"\">
              </div>
              <div class=\"down-content\">
                <h4>Best Teachers</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-03.png\" alt=\"\">
              </div>
              <div class=\"down-content\">
                <h4>Best Students</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-02.png\" alt=\"\">
              </div>
              <div class=\"down-content\">
                <h4>Online Meeting</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-03.png\" alt=\"\">
              </div>
              <div class=\"down-content\">
                <h4>Best Networking</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
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
            <h2>Our Popular Courses</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">
          <div class=\"owl-courses-item owl-carousel\">
            <div class=\"item\">
              <img src=\"/images/course-01.jpg\" alt=\"Course One\">
              <div class=\"down-content\">
                <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
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
                <h4>Curabitur molestie dignissim purus vel</h4>
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
                <h4>Nulla at ipsum a mauris egestas tempor</h4>
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
                <h4>Aenean molestie quis libero gravida</h4>
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
                <h4>Lorem ipsum dolor sit amet adipiscing elit</h4>
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
                <h4>TemplateMo is the best website for Free CSS</h4>
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
                <h4>Web Design Templates at your finger tips</h4>
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
                <h4>Please visit our website again</h4>
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
                <h4>Responsive HTML Templates for you</h4>
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
                <h4>Download Free CSS Layouts for your business</h4>
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
                <h4>Morbi in libero blandit lectus cursus</h4>
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
                <h4>Curabitur molestie dignissim purus</h4>
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
              <h2>A Few Facts About Our University</h2>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"count-area-content percentage\">
                    <div class=\"count-digit\">94</div>
                    <div class=\"count-title\">Succesed Students</div>
                  </div>
                </div>
                <div class=\"col-12\">
                  <div class=\"count-area-content\">
                    <div class=\"count-digit\">126</div>
                    <div class=\"count-title\">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"count-area-content new-students\">
                    <div class=\"count-digit\">2345</div>
                    <div class=\"count-title\">New Students</div>
                  </div>
                </div> 
                <div class=\"col-12\">
                  <div class=\"count-area-content\">
                    <div class=\"count-digit\">32</div>
                    <div class=\"count-title\">Awards</div>
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

  <section class=\"contact-us\" id=\"contact\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-9 align-self-center\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <form id=\"contact\" action=\"\" method=\"post\">
                <div class=\"row\">
                  <div class=\"col-lg-12\">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class=\"col-lg-4\">
                    <fieldset>
                      <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"YOURNAME...*\" required=\"\">
                    </fieldset>
                  </div>
                  <div class=\"col-lg-4\">
                    <fieldset>
                    <input name=\"email\" type=\"text\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"YOUR EMAIL...\" required=\"\">
                  </fieldset>
                  </div>
                  <div class=\"col-lg-4\">
                    <fieldset>
                      <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"SUBJECT...*\" required=\"\">
                    </fieldset>
                  </div>
                  <div class=\"col-lg-12\">
                    <fieldset>
                      <textarea name=\"message\" type=\"text\" class=\"form-control\" id=\"message\" placeholder=\"YOUR MESSAGE...\" required=\"\"></textarea>
                    </fieldset>
                  </div>
                  <div class=\"col-lg-12\">
                    <fieldset>
                      <button type=\"submit\" id=\"form-submit\" class=\"button\">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"right-info\">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>010-020-0340</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>info@meeting.edu</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.meeting.edu</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
     ";
        // line 515
        echo twig_include($this->env, $context, "footer.html.twig");
        echo "
";
        // line 516
        echo twig_include($this->env, $context, "scriptJS.html.twig");
        echo "
   
  
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  569 => 516,  565 => 515,  78 => 31,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
      {{ include('linkCss.html.twig') }}
        <title>Acceuil</title>
    </head>

<body>

  <!-- Sub Header -->
  <div class=\"sub-header\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-sm-8\">
          <div class=\"left-content\">
            <p>Ce site web a été <em> Mohammed NABI</em> dans le cadre de sa formation</p>
          </div>
        </div>
        <div class=\"col-lg-4 col-sm-4\">
          <div class=\"right-icons\">
            <ul>
              <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
              <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
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
                  <div class=\"scroll-to-section\"><a href=\"#contact\">Pour plus d'information sur le centre Guinot!</a></div>
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
                <img src=\"/images/service-icon-01.png\" alt=\"\">
              </div>
              <div class=\"down-content\">
                <h4>Best Education</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-02.png\" alt=\"\">
              </div>
              <div class=\"down-content\">
                <h4>Best Teachers</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-03.png\" alt=\"\">
              </div>
              <div class=\"down-content\">
                <h4>Best Students</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-02.png\" alt=\"\">
              </div>
              <div class=\"down-content\">
                <h4>Online Meeting</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
              </div>
            </div>
            
            <div class=\"item\">
              <div class=\"icon\">
                <img src=\"/images/service-icon-03.png\" alt=\"\">
              </div>
              <div class=\"down-content\">
                <h4>Best Networking</h4>
                <p>Suspendisse tempor mauris a sem elementum bibendum. Praesent facilisis massa non vestibulum.</p>
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
            <h2>Our Popular Courses</h2>
          </div>
        </div>
        <div class=\"col-lg-12\">
          <div class=\"owl-courses-item owl-carousel\">
            <div class=\"item\">
              <img src=\"/images/course-01.jpg\" alt=\"Course One\">
              <div class=\"down-content\">
                <h4>Morbi tincidunt elit vitae justo rhoncus</h4>
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
                <h4>Curabitur molestie dignissim purus vel</h4>
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
                <h4>Nulla at ipsum a mauris egestas tempor</h4>
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
                <h4>Aenean molestie quis libero gravida</h4>
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
                <h4>Lorem ipsum dolor sit amet adipiscing elit</h4>
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
                <h4>TemplateMo is the best website for Free CSS</h4>
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
                <h4>Web Design Templates at your finger tips</h4>
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
                <h4>Please visit our website again</h4>
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
                <h4>Responsive HTML Templates for you</h4>
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
                <h4>Download Free CSS Layouts for your business</h4>
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
                <h4>Morbi in libero blandit lectus cursus</h4>
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
                <h4>Curabitur molestie dignissim purus</h4>
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
              <h2>A Few Facts About Our University</h2>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"count-area-content percentage\">
                    <div class=\"count-digit\">94</div>
                    <div class=\"count-title\">Succesed Students</div>
                  </div>
                </div>
                <div class=\"col-12\">
                  <div class=\"count-area-content\">
                    <div class=\"count-digit\">126</div>
                    <div class=\"count-title\">Current Teachers</div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-lg-6\">
              <div class=\"row\">
                <div class=\"col-12\">
                  <div class=\"count-area-content new-students\">
                    <div class=\"count-digit\">2345</div>
                    <div class=\"count-title\">New Students</div>
                  </div>
                </div> 
                <div class=\"col-12\">
                  <div class=\"count-area-content\">
                    <div class=\"count-digit\">32</div>
                    <div class=\"count-title\">Awards</div>
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

  <section class=\"contact-us\" id=\"contact\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-9 align-self-center\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <form id=\"contact\" action=\"\" method=\"post\">
                <div class=\"row\">
                  <div class=\"col-lg-12\">
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class=\"col-lg-4\">
                    <fieldset>
                      <input name=\"name\" type=\"text\" id=\"name\" placeholder=\"YOURNAME...*\" required=\"\">
                    </fieldset>
                  </div>
                  <div class=\"col-lg-4\">
                    <fieldset>
                    <input name=\"email\" type=\"text\" id=\"email\" pattern=\"[^ @]*@[^ @]*\" placeholder=\"YOUR EMAIL...\" required=\"\">
                  </fieldset>
                  </div>
                  <div class=\"col-lg-4\">
                    <fieldset>
                      <input name=\"subject\" type=\"text\" id=\"subject\" placeholder=\"SUBJECT...*\" required=\"\">
                    </fieldset>
                  </div>
                  <div class=\"col-lg-12\">
                    <fieldset>
                      <textarea name=\"message\" type=\"text\" class=\"form-control\" id=\"message\" placeholder=\"YOUR MESSAGE...\" required=\"\"></textarea>
                    </fieldset>
                  </div>
                  <div class=\"col-lg-12\">
                    <fieldset>
                      <button type=\"submit\" id=\"form-submit\" class=\"button\">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"right-info\">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span>010-020-0340</span>
              </li>
              <li>
                <h6>Email Address</h6>
                <span>info@meeting.edu</span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Rio de Janeiro - RJ, 22795-008, Brazil</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.meeting.edu</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
     {{ include('footer.html.twig') }}
{{ include('scriptJS.html.twig') }}
   
  
</body>

</html>", "test/index.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\test\\index.html.twig");
    }
}
