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

/* medias/guinot/historiqueGuinot.html.twig */
class __TwigTemplate_c61119d7641864b75988d73f6d03607aec2521411e894188b86f05884af1d941 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/historiqueGuinot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/guinot/historiqueGuinot.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medias/guinot/historiqueGuinot.html.twig", 1);
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
        echo "Bienvenu(e) sur la page de l'historique de Guinot !
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
      
    <h1> Bienvenu(e) sur la page de l'historique de Guinot !</h1>
<br/><br/>
    
    <div>
    <h1> Historique : </h1>
    
    <p>
        Paul Guinot est durant près d’un siècle l’une des grandes figures du monde des aveugles et 
des malvoyants. Connu pour son caractère indomptable et très actif, 
il est à l’origine d’un grand nombre d’actions tendant à mettre en place un minimum de protection
juridique et sociale en faveur des personnes handicapées visuelles.
Mais la partie la plus novatrice de son action est son acharnement à essayer de regrouper 
Les aveugles pour qu’ils prennent eux-mêmes leur destin en main, sortant ainsi du domaine 
de la charité‚ pour accéder à celui de la citoyenneté.
Né le 13 mai 1884 à Mirecourt dans les Vosges, il est d’abord dessinateur dans une maison 
De broderie. Aveugle à la suite d’un accident à l’âge de 25 ans, il arrive à Cannes en 1915. 
Après une formation de masseur, il y crée en avril 1917, une « Maison des Aveugles » pouvant
soigner et recevoir les grands blessés de la vue dans un environnement favorable. La
rééducation des aveugles de guerre étant terminée, Paul GUINOT crée en 1921,
« l’Établissement Professionnel Climatique d’Aveugles » qui permettra de prolonger
l’action de son Centre, en l’étendant aux aveugles civils.
C’est alors qu’il prend conscience de la fracture qui est en train de se produire entre aveugles
de guerre et aveugles civils. Les premiers sont solidaires, organisés, et bénéficient du soutien
de la « patrie reconnaissante » ; alors que les aveugles civils sont dispersés, inorganisés, sans
moyens, ne pouvant compter que sur le soutien d’œuvres caritatives.
Dès 1923, Paul Guinot prend l’initiative d’une action d’envergure en créant son propre
journal la « Voix des Aveugles ». C’est un acte fondamental visant à promouvoir
l’amélioration du sort des aveugles par la loi. II n’est plus question de charité mais d’équité.
Tout doit être entrepris pour les aveugles et, dans la mesure du possible, par les aveugles.
Le mouvement est lancé : les aveugles civils, à l’image des aveugles de guerre se regroupent
pour réclamer leur place dans la société. Le premier secrétariat général de leur Groupement
National s’installe à Cannes.
Les succès sont rapides et reconnus puisqu’en 1928 la «  Maison des Aveugles »
obtient du gouvernement sa reconnaissance d’utilité publique.
Page 4 sur 21
Chapitre I -4
&quot;Guide pour le personnel de l’Association Paul Guinot&quot; – septembre 2020
Les principales étapes
de ce long travail seront:
L’inlassable travail
législatif recommence.
51 départements
attribuent aux
personnes
aveugles dont ils
ont la charge des
suppléments
d’allocation.
1926:
1928:
Les grands réseaux
de chemin de fer
accordent à tous les
aveugles civils
français la gratuité de
transport de leur
guide.
1930:
La loi Lambert
accorde le droit à
l’aide constante d’un
tiers, aux aveugles et
aux grands infirmes.
Puis le mouvement
s’accélère : fondation
de la Canne Blanche,
congrès de New
York,
perfectionnement de
la loi Lambert,
création de la
Fédération
Internationale des
Unions d’Aveugles,
première journée
nationale des Cannes
Blanches, etc.
  C’est alors que survient la seconde guerre
mondiale. Paul Guinot ne reste pas inactif. II
met en place en 1942, à Paris, une structure
spécialisée dans le reclassement des aveugles
par le travail: le «Centre général
d’Orientation et de Rééducation pour
Aveugles». A la libération, ce centre se
développant, il faut louer un hôtel particulier et
des locaux pour commercialiser le travail des
brossiers. Une coopérative est même créée
pour leur venir en aide. La section kinésithérapie
devient rapidement très importante avec de
bons résultats au tout nouveau diplôme de
masseur kinésithérapeute
Le premier gouvernement de libération
promulgue l’ordonnance, préparée
antérieurement, tendant à coordonner
l’activité‚ de toutes les institutions
d’aveugles, publiques ou privées,
prévoyant l’organisation de leur travail
sous l’autorité‚ de l’Etat, instituant une
allocation de compensation pour les
aveugles travailleurs.
La préparation de la loi Cordonnier fut
l’occasion d’un intense travail préparatoire inter
associatif. Voté en 1949, cette loi instaure la
priorité des aveugles brossiers dans les
commandes de l’État, donne accès à la fonction
publique aux professeurs aveugles et améliore le
régime des allocations compensatrices.
Les cendres de Louis Braille sont transférées
au Panthéon à l’occasion du centenaire de sa
mort. Paul Guinot a été l’un des principaux
artisans de cette opération.
Dès
1945
1948-1949
1952
1962
L’Association transfère son
siège à Paris.
  Le 12 juin 1969, Paul Guinot décède.


    </p>
    
<br/><br/>

";
        // line 137
        $this->displayBlock('footer', $context, $blocks);
        // line 151
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 138
        echo "<div>
<h3>
Pied de page :

Cliquer ici pour plus de informations !
</h3>
<lu>
    <li><a href=\"";
        // line 145
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
        return "medias/guinot/historiqueGuinot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 145,  245 => 138,  235 => 137,  224 => 151,  222 => 137,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Bienvenu(e) sur la page de l'historique de Guinot !
{% endblock %}

{% block content %}

 <div class=\"container\">
<br/><br/>
      
    <h1> Bienvenu(e) sur la page de l'historique de Guinot !</h1>
<br/><br/>
    
    <div>
    <h1> Historique : </h1>
    
    <p>
        Paul Guinot est durant près d’un siècle l’une des grandes figures du monde des aveugles et 
des malvoyants. Connu pour son caractère indomptable et très actif, 
il est à l’origine d’un grand nombre d’actions tendant à mettre en place un minimum de protection
juridique et sociale en faveur des personnes handicapées visuelles.
Mais la partie la plus novatrice de son action est son acharnement à essayer de regrouper 
Les aveugles pour qu’ils prennent eux-mêmes leur destin en main, sortant ainsi du domaine 
de la charité‚ pour accéder à celui de la citoyenneté.
Né le 13 mai 1884 à Mirecourt dans les Vosges, il est d’abord dessinateur dans une maison 
De broderie. Aveugle à la suite d’un accident à l’âge de 25 ans, il arrive à Cannes en 1915. 
Après une formation de masseur, il y crée en avril 1917, une « Maison des Aveugles » pouvant
soigner et recevoir les grands blessés de la vue dans un environnement favorable. La
rééducation des aveugles de guerre étant terminée, Paul GUINOT crée en 1921,
« l’Établissement Professionnel Climatique d’Aveugles » qui permettra de prolonger
l’action de son Centre, en l’étendant aux aveugles civils.
C’est alors qu’il prend conscience de la fracture qui est en train de se produire entre aveugles
de guerre et aveugles civils. Les premiers sont solidaires, organisés, et bénéficient du soutien
de la « patrie reconnaissante » ; alors que les aveugles civils sont dispersés, inorganisés, sans
moyens, ne pouvant compter que sur le soutien d’œuvres caritatives.
Dès 1923, Paul Guinot prend l’initiative d’une action d’envergure en créant son propre
journal la « Voix des Aveugles ». C’est un acte fondamental visant à promouvoir
l’amélioration du sort des aveugles par la loi. II n’est plus question de charité mais d’équité.
Tout doit être entrepris pour les aveugles et, dans la mesure du possible, par les aveugles.
Le mouvement est lancé : les aveugles civils, à l’image des aveugles de guerre se regroupent
pour réclamer leur place dans la société. Le premier secrétariat général de leur Groupement
National s’installe à Cannes.
Les succès sont rapides et reconnus puisqu’en 1928 la «  Maison des Aveugles »
obtient du gouvernement sa reconnaissance d’utilité publique.
Page 4 sur 21
Chapitre I -4
&quot;Guide pour le personnel de l’Association Paul Guinot&quot; – septembre 2020
Les principales étapes
de ce long travail seront:
L’inlassable travail
législatif recommence.
51 départements
attribuent aux
personnes
aveugles dont ils
ont la charge des
suppléments
d’allocation.
1926:
1928:
Les grands réseaux
de chemin de fer
accordent à tous les
aveugles civils
français la gratuité de
transport de leur
guide.
1930:
La loi Lambert
accorde le droit à
l’aide constante d’un
tiers, aux aveugles et
aux grands infirmes.
Puis le mouvement
s’accélère : fondation
de la Canne Blanche,
congrès de New
York,
perfectionnement de
la loi Lambert,
création de la
Fédération
Internationale des
Unions d’Aveugles,
première journée
nationale des Cannes
Blanches, etc.
  C’est alors que survient la seconde guerre
mondiale. Paul Guinot ne reste pas inactif. II
met en place en 1942, à Paris, une structure
spécialisée dans le reclassement des aveugles
par le travail: le «Centre général
d’Orientation et de Rééducation pour
Aveugles». A la libération, ce centre se
développant, il faut louer un hôtel particulier et
des locaux pour commercialiser le travail des
brossiers. Une coopérative est même créée
pour leur venir en aide. La section kinésithérapie
devient rapidement très importante avec de
bons résultats au tout nouveau diplôme de
masseur kinésithérapeute
Le premier gouvernement de libération
promulgue l’ordonnance, préparée
antérieurement, tendant à coordonner
l’activité‚ de toutes les institutions
d’aveugles, publiques ou privées,
prévoyant l’organisation de leur travail
sous l’autorité‚ de l’Etat, instituant une
allocation de compensation pour les
aveugles travailleurs.
La préparation de la loi Cordonnier fut
l’occasion d’un intense travail préparatoire inter
associatif. Voté en 1949, cette loi instaure la
priorité des aveugles brossiers dans les
commandes de l’État, donne accès à la fonction
publique aux professeurs aveugles et améliore le
régime des allocations compensatrices.
Les cendres de Louis Braille sont transférées
au Panthéon à l’occasion du centenaire de sa
mort. Paul Guinot a été l’un des principaux
artisans de cette opération.
Dès
1945
1948-1949
1952
1962
L’Association transfère son
siège à Paris.
  Le 12 juin 1969, Paul Guinot décède.


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
", "medias/guinot/historiqueGuinot.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\medias\\guinot\\historiqueGuinot.html.twig");
    }
}
