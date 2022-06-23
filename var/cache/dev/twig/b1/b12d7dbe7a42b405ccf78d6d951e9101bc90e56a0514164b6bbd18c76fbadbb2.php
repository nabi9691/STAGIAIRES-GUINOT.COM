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

/* medias/guinot/motDuPresidentDeGuinot.html.twig */
class __TwigTemplate_cfdba368c685142e1f1f1782ba4f57898de7f5d93304c4544892e88b6aab6985 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/motDuPresidentDeGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/motDuPresidentDeGuinot.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medias/guinot/motDuPresidentDeGuinot.html.twig", 1);
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
        echo "Bienvenu(e) sur la page de mot du président de Guinot !
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
      
    <h1> Bienvenu(e) sur la page de mot du président de Guinot !</h1>
    <div>
        
<p>
Mot du président
L’année 2021 devait être la fin de cette période exceptionnelle qu’est la 
pandémie de Covid-19, pourtant en ce début d’année 2022 il serait plus juste 
d’admettre que l’extraordinaire s’est transformé en étrange normalité. 
Pour l’association Paul Guinot, cela se ressent le plus fortement sur nos 
activités de formations qualifiantes au sein de notre Etablissement et Services 
de Réhabilitation Professionnelle, qui forme chaque année environ 150 
stagiaires et étudiants aux métiers de masseur-kinésithérapeute, conseiller 
relation client à distance et développeur web et web mobile.
En effet, si la qualité des formations repose en grande partie sur 
l’expertise de nos formateurs, les moyens à notre disposition pour adapter 
efficacement les supports de formation aux capacités des personnes 
déficientes visuelles sont cruciaux. Or, en cette période de crise sanitaire, la 
nécessité d’acquérir des outils techniques de compensation et de mettre en 
place des solutions innovantes pour le téléenseignement est d’autant plus
renforcée. 
Il peut paraître trivial de rappeler que les personnes aveugles ont pour 
caractéristique de ne pas voir, mais ce simple fait est parfois oublié par leurs 
pairs voyants qui extrapolent la cécité à d’autres limitations. Entendons-nous 
bien : l’incapacité à traiter des informations visuelles ne veut pas dire 
incapacité à traiter l’information. Celle-ci peut être transmise autrement que 
par voie visuelle, par exemple par le biais de dispositif tactile, comme les plages 
brailles, ou par voie auditive, avec les logiciels de synthèse vocale.
Similairement, les personnes malvoyantes ne voient pas « comme tout le 
monde », mais elles en sont capables grâce à une luminosité particulière ou un 
logiciel d’agrandissement d’écran. Avec ces outils, la personne aveugle ou 
malvoyante peut révéler son potentiel productif, à égalité avec la personne 
voyante. C’est le principe même d’une société inclusive. 
Pour financer ces outils, mais aussi les innovations liées aux technologies 
de téléenseignement adapté – indispensable en ces temps de pandémie – nous 
passons principalement par le biais de la taxe d’apprentissage. Celle-ci est une
contribution obligatoire à la formation professionnelle égale à 0.68% de la 
masse salariale, versée par les entreprises exerçant une activité industrielle, commerciale ou artisanale, soumises au droit français et assujetties à l’impôt 
sur les sociétés, sans distinction de taille ou de revenus.
La taxe d’apprentissage ne se justifie pas seulement par son aspect 
pécuniaire, elle est aussi l’occasion de nouer une relation d’échange entre le 
monde du travail et la formation - deux faces d’une même pièce. Pour notre 
ESRP, il s’agit d’une belle opportunité pour mettre à jour nos contenus de 
formation, afin de répondre aux critères évolutifs de l’entreprise, tout en 
démontrant la compatibilité entre un parcours professionnel riche en milieu 
ordinaire et les compétences de la personne en situation de handicap visuel.
Aussi, si vous êtes salarié ou susceptible de connaitre une entreprise 
intéressée par les activités de l’association Paul Guinot, nous vous invitons à 
mobiliser votre réseau professionnel pour proposer le versement de la taxe 
d’apprentissage à notre établissement, en copiant collant le texte suivant : 
« Bonjour, Concernant le versement de la taxe d’apprentissage de 2022, je 
souhaitais vous suggérer l’association Paul Guinot qui gère un centre de 
formation pour les personnes aveugles et malvoyantes. Trois formations y sont 
proposées : masseur-kinésithérapeute, développeur web et web mobile, 
conseiller relation client à distance. Ils utilisent la taxe d’apprentissage pour 
acheter du matériel adapté et améliorer le contenu des formations. Ainsi, en la 
leur versant, vous contribuez directement à l’inclusion professionnelle des 
personnes aveugles et malvoyantes. Vous pouvez leur verser ici : [lien]» 
Si vous êtes chef d’entreprise, verser la taxe d’apprentissage de 2022 à 
notre structure est une manière de contribuer efficacement à l’inclusion 
professionnelle des personnes aveugles et malvoyantes en leur garantissant 
des conditions de formation optimales.
Je vous invite donc chaleureusement à verser la taxe d’apprentissage 2022 à 
l’association Paul Guinot : cliquez ici
En vous souhaitant une belle et fructueuse année 2022,
Bachir Kerroumi
Le Président 


    </p>
    
<br/><br/>
";
        // line 83
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 84
        echo "<div>
<h3>
Qui sommes nous !
Cliquer ici pour plus de informations !
</h3>
<lu>
    
<li><a href=\"";
        // line 91
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
        return "medias/guinot/motDuPresidentDeGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 91,  190 => 84,  180 => 83,  169 => 96,  167 => 83,  91 => 9,  81 => 8,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Bienvenu(e) sur la page de mot du président de Guinot !
{% endblock %}


{% block content %}

 <div class=\"container\">
      
    <h1> Bienvenu(e) sur la page de mot du président de Guinot !</h1>
    <div>
        
<p>
Mot du président
L’année 2021 devait être la fin de cette période exceptionnelle qu’est la 
pandémie de Covid-19, pourtant en ce début d’année 2022 il serait plus juste 
d’admettre que l’extraordinaire s’est transformé en étrange normalité. 
Pour l’association Paul Guinot, cela se ressent le plus fortement sur nos 
activités de formations qualifiantes au sein de notre Etablissement et Services 
de Réhabilitation Professionnelle, qui forme chaque année environ 150 
stagiaires et étudiants aux métiers de masseur-kinésithérapeute, conseiller 
relation client à distance et développeur web et web mobile.
En effet, si la qualité des formations repose en grande partie sur 
l’expertise de nos formateurs, les moyens à notre disposition pour adapter 
efficacement les supports de formation aux capacités des personnes 
déficientes visuelles sont cruciaux. Or, en cette période de crise sanitaire, la 
nécessité d’acquérir des outils techniques de compensation et de mettre en 
place des solutions innovantes pour le téléenseignement est d’autant plus
renforcée. 
Il peut paraître trivial de rappeler que les personnes aveugles ont pour 
caractéristique de ne pas voir, mais ce simple fait est parfois oublié par leurs 
pairs voyants qui extrapolent la cécité à d’autres limitations. Entendons-nous 
bien : l’incapacité à traiter des informations visuelles ne veut pas dire 
incapacité à traiter l’information. Celle-ci peut être transmise autrement que 
par voie visuelle, par exemple par le biais de dispositif tactile, comme les plages 
brailles, ou par voie auditive, avec les logiciels de synthèse vocale.
Similairement, les personnes malvoyantes ne voient pas « comme tout le 
monde », mais elles en sont capables grâce à une luminosité particulière ou un 
logiciel d’agrandissement d’écran. Avec ces outils, la personne aveugle ou 
malvoyante peut révéler son potentiel productif, à égalité avec la personne 
voyante. C’est le principe même d’une société inclusive. 
Pour financer ces outils, mais aussi les innovations liées aux technologies 
de téléenseignement adapté – indispensable en ces temps de pandémie – nous 
passons principalement par le biais de la taxe d’apprentissage. Celle-ci est une
contribution obligatoire à la formation professionnelle égale à 0.68% de la 
masse salariale, versée par les entreprises exerçant une activité industrielle, commerciale ou artisanale, soumises au droit français et assujetties à l’impôt 
sur les sociétés, sans distinction de taille ou de revenus.
La taxe d’apprentissage ne se justifie pas seulement par son aspect 
pécuniaire, elle est aussi l’occasion de nouer une relation d’échange entre le 
monde du travail et la formation - deux faces d’une même pièce. Pour notre 
ESRP, il s’agit d’une belle opportunité pour mettre à jour nos contenus de 
formation, afin de répondre aux critères évolutifs de l’entreprise, tout en 
démontrant la compatibilité entre un parcours professionnel riche en milieu 
ordinaire et les compétences de la personne en situation de handicap visuel.
Aussi, si vous êtes salarié ou susceptible de connaitre une entreprise 
intéressée par les activités de l’association Paul Guinot, nous vous invitons à 
mobiliser votre réseau professionnel pour proposer le versement de la taxe 
d’apprentissage à notre établissement, en copiant collant le texte suivant : 
« Bonjour, Concernant le versement de la taxe d’apprentissage de 2022, je 
souhaitais vous suggérer l’association Paul Guinot qui gère un centre de 
formation pour les personnes aveugles et malvoyantes. Trois formations y sont 
proposées : masseur-kinésithérapeute, développeur web et web mobile, 
conseiller relation client à distance. Ils utilisent la taxe d’apprentissage pour 
acheter du matériel adapté et améliorer le contenu des formations. Ainsi, en la 
leur versant, vous contribuez directement à l’inclusion professionnelle des 
personnes aveugles et malvoyantes. Vous pouvez leur verser ici : [lien]» 
Si vous êtes chef d’entreprise, verser la taxe d’apprentissage de 2022 à 
notre structure est une manière de contribuer efficacement à l’inclusion 
professionnelle des personnes aveugles et malvoyantes en leur garantissant 
des conditions de formation optimales.
Je vous invite donc chaleureusement à verser la taxe d’apprentissage 2022 à 
l’association Paul Guinot : cliquez ici
En vous souhaitant une belle et fructueuse année 2022,
Bachir Kerroumi
Le Président 


    </p>
    
<br/><br/>
{% block footer %}
<div>
<h3>
Qui sommes nous !
Cliquer ici pour plus de informations !
</h3>
<lu>
    
<li><a href=\"{{ path('accueil_index') }}\"> Retour à la page d'accueil ! </a></li>
    
</lu>
    </div>
{% endblock %}

{% endblock %}
", "medias/guinot/motDuPresidentDeGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\motDuPresidentDeGuinot.html.twig");
    }
}
