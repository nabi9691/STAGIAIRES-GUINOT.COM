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

/* medias/guinot/introductionGuinot.html.twig */
class __TwigTemplate_ffca6d88d5cbb6cbb90e8254217e60232556a6920bdffa7a0901b64c69b132f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/introductionGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/introductionGuinot.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medias/guinot/introductionGuinot.html.twig", 1);
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
        echo "Bienvenu(e) sur la page d'introduction de Guinot !
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
Bienvenu(e) sur la page d'introduction de Guinot !</h1>
<br/><br/>
    
    <div>
    <h1> INTRODUCTION : </h1>
    
    <p>
    L’Etablissement et Service de Réadaptation Professionnelle Paul et Liliane Guinot 
forme des personnes handicapées visuelles en vue d’une intégration professionnelle 
en milieu ordinaire de travail 
par le biais d’une formation professionnelle 
et d’un accompagnement social en milieu spécialisé.
Le centre accueille chaque année 125 personnes aveugles et malvoyantes, en primo-formation ou en reclassement professionnel. 
Pour s’inscrire à une des formations proposées par l’ESRP, 
les personnes en situation de handicap visuel doivent s’adresser à leur MDPH (Maisons Départementales des Personnes Handicapées) 
pour obtenir une Reconnaissance de la Qualité de Travailleur Handicapé (RQTH) 
ainsi qu’une Orientation professionnelle (OP).


Formations
 Masseur-Kinésithérapeute
 Conseiller Relation Client à Distance
 Développeur Web et Web Mobile


    </p>
    
<br/><br/>

";
        // line 42
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 43
        echo "<div>
<h3>
Pied de page :

Cliquer ici pour plus de informations !
</h3>
<lu>
    <li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\"> Retour à la page d'accueil ! </a></li>
        
</lu>
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "medias/guinot/introductionGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 50,  150 => 43,  140 => 42,  129 => 56,  127 => 42,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Bienvenu(e) sur la page d'introduction de Guinot !
{% endblock %}

{% block content %}

 <div class=\"container\">
<br/><br/>
      
    <h1> 
Bienvenu(e) sur la page d'introduction de Guinot !</h1>
<br/><br/>
    
    <div>
    <h1> INTRODUCTION : </h1>
    
    <p>
    L’Etablissement et Service de Réadaptation Professionnelle Paul et Liliane Guinot 
forme des personnes handicapées visuelles en vue d’une intégration professionnelle 
en milieu ordinaire de travail 
par le biais d’une formation professionnelle 
et d’un accompagnement social en milieu spécialisé.
Le centre accueille chaque année 125 personnes aveugles et malvoyantes, en primo-formation ou en reclassement professionnel. 
Pour s’inscrire à une des formations proposées par l’ESRP, 
les personnes en situation de handicap visuel doivent s’adresser à leur MDPH (Maisons Départementales des Personnes Handicapées) 
pour obtenir une Reconnaissance de la Qualité de Travailleur Handicapé (RQTH) 
ainsi qu’une Orientation professionnelle (OP).


Formations
 Masseur-Kinésithérapeute
 Conseiller Relation Client à Distance
 Développeur Web et Web Mobile


    </p>
    
<br/><br/>

{% block footer %}
<div>
<h3>
Pied de page :

Cliquer ici pour plus de informations !
</h3>
<lu>
    <li><a href=\"{{ path('accueil_index') }}\"> Retour à la page d'accueil ! </a></li>
        
</lu>
    
</div>
{% endblock %}

{% endblock %}
", "medias/guinot/introductionGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\introductionGuinot.html.twig");
    }
}
