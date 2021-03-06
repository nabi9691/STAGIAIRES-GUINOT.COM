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

/* medias/guinot/temoignages.html.twig */
class __TwigTemplate_e48066b93786bee12d46adb751129bafbacea36dbbccc8eae05436eba0e88df9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/temoignages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/temoignages.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medias/guinot/temoignages.html.twig", 1);
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
        echo "Bienvenu(e) sur la page des m??diats !
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
      
    <h1> Bienvenu(e) sur la page des retrouvailles inhabituels ! </h1>
    <h1> Retrouvailles et T??moignages ! </h1>
    <div>
    <a href=\"https://youtu.be/vk-wuWhyCsw\">Retrouvailles plut??t inhabituelles dans un tribunal ! </a>
    <p>
    MIAMI ??? 30 juin 2015 ??? Retrouvailles plut??t inhabituelles dans un tribunal de Miami. La juge a en face d'elle un pr??venu. Accus?? de plusieurs cambriolages, l'homme ??coute t??te baiss??e. Jusqu'?? cette incroyable sc??ne : \"M. Booth, j'ai une question. ??tes-vous all?? ?? l'??cole Nautilus ?\"  l'interroge Mindy Glazer, la juge. \"Je suis d??sol??e de vous voir ici. Je me suis toujours demand??e ce que vous ??tiez devenu.\" poursuit-elle. L'homme ??clate en sanglots, r??p??tant la t??te entre les mains \"Oh mon dieu \".
    \"Il ??tait le meilleur ?? l'??cole. Je jouais au foot avec lui. Comme tous les enfants . Et regardez ce qui arrive. Je suis d??sol??e de voir cela. M. Booth, j'esp??re que vous serez capable de changer 
    votre comportement. Bonne chance ?? vous. \" a conclu la juge.
    </p>
    <br/><br/>

    <a href=\"https://youtu.be/kY-RibxCgyQ\"> On s'??tait dit rendez-vous dans 10 ans !   </a>
    <p>
    Aujourd???hui on se replonge dans nos ann??es lyc??e ! Marqu??s par des amis 
    ou des professeurs, ils se sont donn??s rendez-vous comme dans la chanson : dans 10, 
    20 ou m??me 30 ans. 
    des hommes et des femmes qui ??voquent des ??v??nements marquants de leur existence.
    ?? diffus??e le 11/12/2019 ?? 13.50 sur France 2.
    </p>
    <br/><br/>

    <a href=\"https://youtu.be/mm42WPo5U9g\"> retrouvailles 75 ans apr??s  ! </a>
    <p>
    D??couvrez l'histoire de deux s??urs s??par??es pendant la seconde guerre mondiale et r??unies gr??ce aux efforts de nos ??quipes du R??tablissement des Liens Familiaux (RLF)
    </p>        
 </div>


<br/><br/>
";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "<div>
<h3>
Pied de page :

Cliquer ici pour plus de informations !
</h3>
<lu>
    <li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil_index");
        echo "\"> Retour ?? la page d'accueil ! </a></li>
        
        </lu>
    <p>
    nos ??quipes du ... !
    </p>        
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "medias/guinot/temoignages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 64,  185 => 57,  175 => 56,  164 => 72,  162 => 56,  128 => 24,  109 => 23,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Bienvenu(e) sur la page des m??diats !
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
      
    <h1> Bienvenu(e) sur la page des retrouvailles inhabituels ! </h1>
    <h1> Retrouvailles et T??moignages ! </h1>
    <div>
    <a href=\"https://youtu.be/vk-wuWhyCsw\">Retrouvailles plut??t inhabituelles dans un tribunal ! </a>
    <p>
    MIAMI ??? 30 juin 2015 ??? Retrouvailles plut??t inhabituelles dans un tribunal de Miami. La juge a en face d'elle un pr??venu. Accus?? de plusieurs cambriolages, l'homme ??coute t??te baiss??e. Jusqu'?? cette incroyable sc??ne : \"M. Booth, j'ai une question. ??tes-vous all?? ?? l'??cole Nautilus ?\"  l'interroge Mindy Glazer, la juge. \"Je suis d??sol??e de vous voir ici. Je me suis toujours demand??e ce que vous ??tiez devenu.\" poursuit-elle. L'homme ??clate en sanglots, r??p??tant la t??te entre les mains \"Oh mon dieu \".
    \"Il ??tait le meilleur ?? l'??cole. Je jouais au foot avec lui. Comme tous les enfants . Et regardez ce qui arrive. Je suis d??sol??e de voir cela. M. Booth, j'esp??re que vous serez capable de changer 
    votre comportement. Bonne chance ?? vous. \" a conclu la juge.
    </p>
    <br/><br/>

    <a href=\"https://youtu.be/kY-RibxCgyQ\"> On s'??tait dit rendez-vous dans 10 ans !   </a>
    <p>
    Aujourd???hui on se replonge dans nos ann??es lyc??e ! Marqu??s par des amis 
    ou des professeurs, ils se sont donn??s rendez-vous comme dans la chanson : dans 10, 
    20 ou m??me 30 ans. 
    des hommes et des femmes qui ??voquent des ??v??nements marquants de leur existence.
    ?? diffus??e le 11/12/2019 ?? 13.50 sur France 2.
    </p>
    <br/><br/>

    <a href=\"https://youtu.be/mm42WPo5U9g\"> retrouvailles 75 ans apr??s  ! </a>
    <p>
    D??couvrez l'histoire de deux s??urs s??par??es pendant la seconde guerre mondiale et r??unies gr??ce aux efforts de nos ??quipes du R??tablissement des Liens Familiaux (RLF)
    </p>        
 </div>


<br/><br/>
{% block footer %}
<div>
<h3>
Pied de page :

Cliquer ici pour plus de informations !
</h3>
<lu>
    <li><a href=\"{{ path('accueil_index') }}\"> Retour ?? la page d'accueil ! </a></li>
        
        </lu>
    <p>
    nos ??quipes du ... !
    </p>        
</div>
{% endblock %}

{% endblock %}
{% endblock %}
", "medias/guinot/temoignages.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\temoignages.html.twig");
    }
}
