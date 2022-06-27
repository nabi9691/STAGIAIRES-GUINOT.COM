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

/* formations/BIOInformatique/listeDesCours.html.twig */
class __TwigTemplate_1fdf6880e5eb1f3c68843d2e0e5985d6aac04f3b83f431bc2c02fc6e770a8299 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/listeDesCours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/listeDesCours.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formations/BIOInformatique/listeDesCours.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Bienvenu(e) !
Liste des cours :
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
 <div class=\"container\">
<br/><br/>
      
    <h1> 
Bienvenu(e) !
Liste des cours : 
</h1>

<br/><br/>
    
    <div>
    
<h1> 
Liste des cours :
</h1>
    </div>
    
    <div>
  <lu>
    <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursEnVideo_index");
        echo "\"> Cours en vidéo : </a></li>
  <li><a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursEnPDF_index");
        echo "\"> Cours en PDF : </a></li>
  <li><a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursEnWord_index");
        echo "\"> Cours en Word : </a></li>
  <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursEnLignes_index");
        echo "\"> Cours en lignes : </a></li>
  <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursEnPresentiel_index");
        echo "\"> Cours en présentiel : </a></li>
  <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coursEnFichierZipp_index");
        echo "\"> Cours en fichiers zippés : </a></li>
</lu>
      
 </div>

<br/><br/>

";
        // line 41
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 42
        echo "<div>
<h1>Cliquer ici pour plus de informations !</h1>
<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historiqueGuinot_index");
        echo "\"> Qui somme nous ?</a></li>
<lu>
    <li>Formations :</li>
    <li>  Masseur-Kinésithérapeute !</li>
    <li>  Conseiller Relation Client à Distance !</li>
<li>  Développeur Web et Web Mobile  !</li>
<li> Adresse : 24-26 bd Chastenet de Géry </li>
<li>Code postal :  94814 Villejuif Cedex </li>
<li> Tél : 01 46 78 01 00 </li>
<li> Fax : 01 46 78 50 35</li>
<li>Email :  paul   guinot@guinot.asso.fr </li>
</lu>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/BIOInformatique/listeDesCours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 44,  167 => 42,  157 => 41,  146 => 58,  144 => 41,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  118 => 30,  114 => 29,  92 => 9,  82 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Bienvenu(e) !
Liste des cours :
{% endblock %}

{% block content %}

 <div class=\"container\">
<br/><br/>
      
    <h1> 
Bienvenu(e) !
Liste des cours : 
</h1>

<br/><br/>
    
    <div>
    
<h1> 
Liste des cours :
</h1>
    </div>
    
    <div>
  <lu>
    <li><a href=\"{{ path('coursEnVideo_index') }}\"> Cours en vidéo : </a></li>
  <li><a href=\"{{ path('coursEnPDF_index') }}\"> Cours en PDF : </a></li>
  <li><a href=\"{{ path('coursEnWord_index') }}\"> Cours en Word : </a></li>
  <li><a href=\"{{ path('coursEnLignes_index') }}\"> Cours en lignes : </a></li>
  <li><a href=\"{{ path('coursEnPresentiel_index') }}\"> Cours en présentiel : </a></li>
  <li><a href=\"{{ path('coursEnFichierZipp_index') }}\"> Cours en fichiers zippés : </a></li>
</lu>
      
 </div>

<br/><br/>

{% block footer %}
<div>
<h1>Cliquer ici pour plus de informations !</h1>
<a href=\"{{ path('historiqueGuinot_index') }}\"> Qui somme nous ?</a></li>
<lu>
    <li>Formations :</li>
    <li>  Masseur-Kinésithérapeute !</li>
    <li>  Conseiller Relation Client à Distance !</li>
<li>  Développeur Web et Web Mobile  !</li>
<li> Adresse : 24-26 bd Chastenet de Géry </li>
<li>Code postal :  94814 Villejuif Cedex </li>
<li> Tél : 01 46 78 01 00 </li>
<li> Fax : 01 46 78 50 35</li>
<li>Email :  paul   guinot@guinot.asso.fr </li>
</lu>
</div>
{% endblock %}

{% endblock %}
", "formations/BIOInformatique/listeDesCours.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\BIOInformatique\\listeDesCours.html.twig");
    }
}
