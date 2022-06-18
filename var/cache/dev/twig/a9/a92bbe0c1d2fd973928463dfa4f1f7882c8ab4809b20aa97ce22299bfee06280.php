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

/* formations/BIOInformatique/coursEnVideo.html.twig */
class __TwigTemplate_845e2be64ca12dcae49330298dc25b1708ad1445dd3ad517e1d7bf37c20cd727 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/coursEnVideo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/coursEnVideo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formations/BIOInformatique/coursEnVideo.html.twig", 1);
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
        echo "Cours en vidéo :
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<style>
\t\t.contenu {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}

\t\t.contenu code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>
<br/><br/>

";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "
 <div class=\"container\">
<h1> Cours en vidéo :
 </h1>      
    <div>
    <a href=\"https://youtu.be/kQS41p1B9ks\">
Cours sur Symfony :</a>
    <p>
    Symfony est un ensemble de composants réutilisable
et un Framework  web php
un ensemble d'outils pour nous facilité à effectuer des taches la création et la conseption d'une application web.

    </p>
    <br/><br/>
    
<a href=\"https://youtu.be/SG7GgcnR1F4\">Introduction à API Platform dans un projet Symfony !</a>
<p>
Introduction à API Platform dans un projet Symfony
</p>
<br/><br/>
    
    <a href=\"https://youtu.be/SG7GgcnR1F4\">CREER UNE API AVEC SYMFONY 5 - EPISODE 1 - LE SERIALIZER !</a>
<p>
CREER UNE API AVEC SYMFONY 5 - EPISODE 1 - LE SERIALIZER
</p>
<br/><br/>
    



 </div>


<br/><br/>
";
        // line 58
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 59
        echo "<div>
<h1>Cliquer ici pour plus d'informations !</h1>
<lu>
    <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeDesFormations_index");
        echo "\"> Découvrez nos formations !</a></li>
        </lu>
    <p>
directeur des études  : saidani akli, 
Adresse : 70 Avenue du général De Gaulle, 94000  Créteil.
Tel : 06 13 54 10 16 
Fax : +33 6 13 54 10 16
Email : akli.saidani2000@gmail.com
</p>


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/BIOInformatique/coursEnVideo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 62,  187 => 59,  177 => 58,  166 => 75,  164 => 58,  128 => 24,  109 => 23,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Cours en vidéo :
{% endblock %}

{% block body %}
\t<style>
\t\t.contenu {
\t\t\tmargin: 1em auto;
\t\t\tmax-width: 800px;
\t\t\twidth: 95%;
\t\t\tfont: 18px / 1.5 sans-serif;
\t\t}

\t\t.contenu code {
\t\t\tbackground: #F5F5F5;
\t\t\tpadding: 2px 6px;
\t\t}
\t</style>
<br/><br/>

{% block content %}

 <div class=\"container\">
<h1> Cours en vidéo :
 </h1>      
    <div>
    <a href=\"https://youtu.be/kQS41p1B9ks\">
Cours sur Symfony :</a>
    <p>
    Symfony est un ensemble de composants réutilisable
et un Framework  web php
un ensemble d'outils pour nous facilité à effectuer des taches la création et la conseption d'une application web.

    </p>
    <br/><br/>
    
<a href=\"https://youtu.be/SG7GgcnR1F4\">Introduction à API Platform dans un projet Symfony !</a>
<p>
Introduction à API Platform dans un projet Symfony
</p>
<br/><br/>
    
    <a href=\"https://youtu.be/SG7GgcnR1F4\">CREER UNE API AVEC SYMFONY 5 - EPISODE 1 - LE SERIALIZER !</a>
<p>
CREER UNE API AVEC SYMFONY 5 - EPISODE 1 - LE SERIALIZER
</p>
<br/><br/>
    



 </div>


<br/><br/>
{% block footer %}
<div>
<h1>Cliquer ici pour plus d'informations !</h1>
<lu>
    <li><a href=\"{{ path('listeDesFormations_index') }}\"> Découvrez nos formations !</a></li>
        </lu>
    <p>
directeur des études  : saidani akli, 
Adresse : 70 Avenue du général De Gaulle, 94000  Créteil.
Tel : 06 13 54 10 16 
Fax : +33 6 13 54 10 16
Email : akli.saidani2000@gmail.com
</p>


</div>
{% endblock %}

{% endblock %}
{% endblock %}
", "formations/BIOInformatique/coursEnVideo.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\BIOInformatique\\coursEnVideo.html.twig");
    }
}
