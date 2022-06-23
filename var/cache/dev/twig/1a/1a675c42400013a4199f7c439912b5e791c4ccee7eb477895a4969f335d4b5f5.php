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

/* utilisateurs/modifierUtilisateur.html.twig */
class __TwigTemplate_e18c84fe097464ef7a23585a49014ecb15c85b6fb74a524a34025d6f1251a689 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/modifierUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/modifierUtilisateur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateurs/modifierUtilisateur.html.twig", 1);
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
        echo "Modifier un utilisateur :
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
    
    <h1>
        Modifier un utilisateur :
        </h1>

";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 15, $this->source); })()), 'form_start');
        echo "

Formation: ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 17, $this->source); })()), "formation", [], "any", false, false, false, 17), 'widget');
        echo " <br>
Civilité: ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 18, $this->source); })()), "civilite", [], "any", false, false, false, 18), 'widget');
        echo " <br>
Nom: ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), 'widget');
        echo "<br>
Prénom: ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'widget');
        echo " <br>
Adresse: ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 21, $this->source); })()), "adresse", [], "any", false, false, false, 21), 'widget');
        echo " <br>
Code Postal: ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 22, $this->source); })()), "code_postal", [], "any", false, false, false, 22), 'widget');
        echo " <br>
Ville: ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 23, $this->source); })()), "villes", [], "any", false, false, false, 23), 'widget');
        echo " <br>
Téléphone: ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 24, $this->source); })()), "telephone", [], "any", false, false, false, 24), 'widget');
        echo " <br>
Email: ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'widget');
        echo " <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 33, $this->source); })()), 'form_end');
        echo "



</div>

<br/><br/>
";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 40
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 41
        echo "<div>
<h1>Cliquer ici pour plus de informations !</h1>
<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("historiqueGuinot_index");
        echo "\"> Qui somme nous ?</a></li>
<lu>
    <li>Formations :</li>
    <li>  Masseur-Kinésithérapeute !</li>
    <li>  Conseiller Relation Client à Distance !</li>
<li>  Développeur Web et Web Mobile  !</li>
<li> 24-26 bd Chastenet de Géry </li>
<li> 94814 Villejuif Cedex </li>
<li> Tél : 01 46 78 01 00 </li>
<li> Fax : 01 46 78 50 35</li>
<li> paul   guinot@guinot.asso.fr </li>
</lu>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateurs/modifierUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 43,  181 => 41,  171 => 40,  160 => 57,  158 => 40,  148 => 33,  137 => 25,  133 => 24,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  109 => 18,  105 => 17,  100 => 15,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Modifier un utilisateur :
{% endblock %}

{% block content %}
    
 <div class=\"container\">
    
    <h1>
        Modifier un utilisateur :
        </h1>

{{ form_start(formUtilisateur) }}

Formation: {{ form_widget(formUtilisateur.formation) }} <br>
Civilité: {{ form_widget(formUtilisateur.civilite) }} <br>
Nom: {{ form_widget(formUtilisateur.nom) }}<br>
Prénom: {{ form_widget(formUtilisateur.prenom) }} <br>
Adresse: {{ form_widget(formUtilisateur.adresse) }} <br>
Code Postal: {{ form_widget(formUtilisateur.code_postal) }} <br>
Ville: {{ form_widget(formUtilisateur.villes) }} <br>
Téléphone: {{ form_widget(formUtilisateur.telephone) }} <br>
Email: {{ form_widget(formUtilisateur.email) }} <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formUtilisateur) }}



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
<li> 24-26 bd Chastenet de Géry </li>
<li> 94814 Villejuif Cedex </li>
<li> Tél : 01 46 78 01 00 </li>
<li> Fax : 01 46 78 50 35</li>
<li> paul   guinot@guinot.asso.fr </li>
</lu>
</div>
{% endblock %}

    {% endblock %}
", "utilisateurs/modifierUtilisateur.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\utilisateurs\\modifierUtilisateur.html.twig");
    }
}
