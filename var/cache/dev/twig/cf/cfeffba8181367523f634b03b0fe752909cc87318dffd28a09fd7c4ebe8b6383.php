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

/* medias/guinot/pageAccueilGuinot.html.twig */
class __TwigTemplate_016cbb28c4ff9928c94c8bc58a82b52ef512e5b4796cd077b99096b203260424 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/pageAccueilGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/pageAccueilGuinot.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medias/guinot/pageAccueilGuinot.html.twig", 1);
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
        echo "Bienvenu(e) sur la page d'accueil de Guinot !
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
 <div class=\"container\">
<br/><br/>
      
    <h1> 
Bienvenu(e) sur la page d'accueil de Guinot !
</h1>

<br/><br/>
    
    <div>
    
<h1> 

</h1>
    
    <lu>
<li> SOMMAIRE :</li>    
<li><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("introductionGuinot_index");
        echo "\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("motDuPresidentDeGuinot_index");
        echo "\"> Mot du président de Guinot ! </a></li>
<li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historiqueGuinot_index");
        echo "\"> D'écouvrez l'historique de Guinot ! </a></li>
<li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formationGuinot_index");
        echo "\"> Liste des formations de Guinot :</a></li>

";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 32
        echo "<div>
<h1>Cliquer ici pour plus de informations !</h1>
<a href=\"";
        // line 34
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
        return "medias/guinot/pageAccueilGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 34,  151 => 32,  141 => 31,  130 => 48,  128 => 31,  123 => 29,  119 => 28,  115 => 27,  111 => 26,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Bienvenu(e) sur la page d'accueil de Guinot !
{% endblock %}

{% block content %}

 <div class=\"container\">
<br/><br/>
      
    <h1> 
Bienvenu(e) sur la page d'accueil de Guinot !
</h1>

<br/><br/>
    
    <div>
    
<h1> 

</h1>
    
    <lu>
<li> SOMMAIRE :</li>    
<li><a href=\"{{ path('introductionGuinot_index') }}\"> INTRODUCTION SUR GUINOT ! </a></li>
<li><a href=\"{{ path('motDuPresidentDeGuinot_index') }}\"> Mot du président de Guinot ! </a></li>
<li><a href=\"{{ path('historiqueGuinot_index') }}\"> D'écouvrez l'historique de Guinot ! </a></li>
<li><a href=\"{{ path('formationGuinot_index') }}\"> Liste des formations de Guinot :</a></li>

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
", "medias/guinot/pageAccueilGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\pageAccueilGuinot.html.twig");
    }
}
