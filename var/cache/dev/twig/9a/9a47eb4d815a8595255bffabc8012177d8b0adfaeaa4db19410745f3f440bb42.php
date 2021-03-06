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

/* formations/BIOInformatique/aProposDeBIOInformatique.html.twig */
class __TwigTemplate_226554bf8bb9c7e55d64726308889f8c3df84a885932933682fe4c215d3ea0e9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/aProposDeBIOInformatique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/BIOInformatique/aProposDeBIOInformatique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formations/BIOInformatique/aProposDeBIOInformatique.html.twig", 1);
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
        echo "A propos de BIOInformatique :
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
<br/><br/>
      
    <h1> A propos de BIOInformatique  :</h1>
<br/><br/>
    
    <div>
    <h1>
BIOINFORMATIQUE
</h1>
    
    <p>
Projet  de l???organisme de formation BIOGESOFT :

Afin de Compl??ter le projet  de fin de stage de Mohammed NABI,

Le module ???Formations??? a ??t?? ajout?? 

Cet extension du projet consiste ?? mettre en Place un Syst??me d???inscription  des  candidats  dans diff??rentes formations propos??es par BIOGESOFT   suivant  le processus suivant :
A partir d???une page d???accueil de l?????cole on a un catalogue 
o?? on peut consulter toutes les formations  existantes .

pour chacune des  formations, on a :

 le nom de  formation, 
sa dur??e, 
le co??t de la formation , 
titre, 
objectif, 
pr??requis.

 Chacune des formations  est  organis??e en sessions :  
soit  2 sessions par ann??e . 

Chaque formation est  compos??e de plusieurs  modules  
Chacun  de  ces  modules  est compos?? de plusieurs  cours :  
cours th??oriques , 
travaux pratiques , 
exercices.   

Pr??voir aussi des cours sous forme de vid??o que le candidat peut visualiser sans interagir 
en direct avec son formateur (juste visualise la vid??o).

Voici  quelques  contraintes :

Un  cours  quelconque (th??orique, pratique, exercice ou vid??o)  peut  figurer  dans un ou plusieurs modules de formation. 
Chaque module a un nom, une dur??e , un coefficient, objectif.
Chaque cours a un nom, une dur??e, un contenu  de plusieurs pages en PDF  ou  une  Vid??o.
Un candidat  peut ??tre dispens?? de certains modules  compte tenu de son niveau pr??requis et cette dispense est d??termin??e  par l???organisme de formation. Le candidat peut seulement choisir une formation   et  la session.  
La mise ?? jour du catalogue des formations, des  modules  et de leurs contenus  est  confi??e   ?? l???administration.
Cette  extension  va servir  surtout   aux ??l??ves de BIOGESOFT  de suivre des cours ?? distance en  ??ditant chez eux les cours ou les vid??os  mis en ligne.

Remarque :

On peut toujours ajouter  des attributs  dans  chaque  classe objets   ou  table relationnelle de la base de donn??es celant les exigences et les besoins du client.

compte tenu du temps restant, nous n???int??resserons pas  ??  la formulation des  demandes  d???inscription  avec  l???automatisation des r??ponses positives ou refus. On suppose que le candidat peut s???inscrire directement en ligne pour une seule formation de son choix et l???inscription est valid??e  lorsque le candidat joint  avec  son inscription  les documents demand??s (pi??ce d???identit??, justificatif de son niveau de formation si demand??, un RIB.

    </p>
    
<br/><br/>

";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 107
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 88
        echo "<div>
<h3>
Pied de page :

Cliquer ici pour plus de informations !
</h3>
<lu>
    <li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listeDesFormations_index");
        echo "\"> D??couvrez nos formations !</a></li>
        </lu>
        <p>
directeur des ??tudes  : saidani akli, 
Adresse : 70 Avenue du g??n??ral De Gaulle, 94000  Cr??teil.
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
        return "formations/BIOInformatique/aProposDeBIOInformatique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 95,  216 => 88,  206 => 87,  195 => 107,  193 => 87,  128 => 24,  109 => 23,  92 => 8,  82 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
A propos de BIOInformatique :
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
<br/><br/>
      
    <h1> A propos de BIOInformatique  :</h1>
<br/><br/>
    
    <div>
    <h1>
BIOINFORMATIQUE
</h1>
    
    <p>
Projet  de l???organisme de formation BIOGESOFT :

Afin de Compl??ter le projet  de fin de stage de Mohammed NABI,

Le module ???Formations??? a ??t?? ajout?? 

Cet extension du projet consiste ?? mettre en Place un Syst??me d???inscription  des  candidats  dans diff??rentes formations propos??es par BIOGESOFT   suivant  le processus suivant :
A partir d???une page d???accueil de l?????cole on a un catalogue 
o?? on peut consulter toutes les formations  existantes .

pour chacune des  formations, on a :

 le nom de  formation, 
sa dur??e, 
le co??t de la formation , 
titre, 
objectif, 
pr??requis.

 Chacune des formations  est  organis??e en sessions :  
soit  2 sessions par ann??e . 

Chaque formation est  compos??e de plusieurs  modules  
Chacun  de  ces  modules  est compos?? de plusieurs  cours :  
cours th??oriques , 
travaux pratiques , 
exercices.   

Pr??voir aussi des cours sous forme de vid??o que le candidat peut visualiser sans interagir 
en direct avec son formateur (juste visualise la vid??o).

Voici  quelques  contraintes :

Un  cours  quelconque (th??orique, pratique, exercice ou vid??o)  peut  figurer  dans un ou plusieurs modules de formation. 
Chaque module a un nom, une dur??e , un coefficient, objectif.
Chaque cours a un nom, une dur??e, un contenu  de plusieurs pages en PDF  ou  une  Vid??o.
Un candidat  peut ??tre dispens?? de certains modules  compte tenu de son niveau pr??requis et cette dispense est d??termin??e  par l???organisme de formation. Le candidat peut seulement choisir une formation   et  la session.  
La mise ?? jour du catalogue des formations, des  modules  et de leurs contenus  est  confi??e   ?? l???administration.
Cette  extension  va servir  surtout   aux ??l??ves de BIOGESOFT  de suivre des cours ?? distance en  ??ditant chez eux les cours ou les vid??os  mis en ligne.

Remarque :

On peut toujours ajouter  des attributs  dans  chaque  classe objets   ou  table relationnelle de la base de donn??es celant les exigences et les besoins du client.

compte tenu du temps restant, nous n???int??resserons pas  ??  la formulation des  demandes  d???inscription  avec  l???automatisation des r??ponses positives ou refus. On suppose que le candidat peut s???inscrire directement en ligne pour une seule formation de son choix et l???inscription est valid??e  lorsque le candidat joint  avec  son inscription  les documents demand??s (pi??ce d???identit??, justificatif de son niveau de formation si demand??, un RIB.

    </p>
    
<br/><br/>

{% block footer %}
<div>
<h3>
Pied de page :

Cliquer ici pour plus de informations !
</h3>
<lu>
    <li><a href=\"{{ path('listeDesFormations_index') }}\"> D??couvrez nos formations !</a></li>
        </lu>
        <p>
directeur des ??tudes  : saidani akli, 
Adresse : 70 Avenue du g??n??ral De Gaulle, 94000  Cr??teil.
Tel : 06 13 54 10 16 
Fax : +33 6 13 54 10 16
Email : akli.saidani2000@gmail.com
</p>

</div>
{% endblock %}

{% endblock %}
{% endblock %}
", "formations/BIOInformatique/aProposDeBIOInformatique.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\BIOInformatique\\aProposDeBIOInformatique.html.twig");
    }
}
