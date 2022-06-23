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

/* formations/modifierFormations.html.twig */
class __TwigTemplate_c2020302689ab5861a07173fd6b0c6b633b9af29f421deb9b95c4a69edcf93a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/modifierFormations.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/modifierFormations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formations/modifierFormations.html.twig", 1);
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
        echo "Modifier une formation  :
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
    
    <h1>
        Modifier une formation :
        </h1>

";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

Nom du stagiaire: ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget');
        echo "<br>
Prénom du stagiaire: ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), 'widget');
        echo "<br>
Numéro de téléphone: ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 18, $this->source); })()), "telephone", [], "any", false, false, false, 18), 'widget');
        echo "<br>
Email: ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'widget');
        echo "<br>
Nom de la formation: ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 20, $this->source); })()), "nom_formation", [], "any", false, false, false, 20), 'widget');
        echo "<br>
Civilité: ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 21, $this->source); })()), "civilite", [], "any", false, false, false, 21), 'widget');
        echo " <br>
Objectif de la formation: ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 22, $this->source); })()), "objectif_formation", [], "any", false, false, false, 22), 'widget');
        echo " <br>
Durée de la formation: ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 23, $this->source); })()), "date_formation", [], "any", false, false, false, 23), 'widget');
        echo " <br>
Cout de la formation: ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 24, $this->source); })()), "cout_formation", [], "any", false, false, false, 24), 'widget');
        echo " <br>
Titre professionnel: ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 25, $this->source); })()), "titre_professionnel", [], "any", false, false, false, 25), 'widget');
        echo " <br>
Vos prérequis: ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 26, $this->source); })()), "preRequis", [], "any", false, false, false, 26), 'widget');
        echo " <br>
Session de formation: ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 27, $this->source); })()), "sessions", [], "any", false, false, false, 27), 'widget');
        echo " <br>
Status: ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28), 'widget');
        echo " <br>




    

<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 39, $this->source); })()), 'form_end');
        echo "





    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formations/modifierFormations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 39,  151 => 28,  147 => 27,  143 => 26,  139 => 25,  135 => 24,  131 => 23,  127 => 22,  123 => 21,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  98 => 14,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Modifier une formation  :
{% endblock %}

{% block content %}
    
    
    <h1>
        Modifier une formation :
        </h1>

{{ form_start(formFormations) }}

Nom du stagiaire: {{ form_widget(formFormations.nom) }}<br>
Prénom du stagiaire: {{ form_widget(formFormations.prenom) }}<br>
Numéro de téléphone: {{ form_widget(formFormations.telephone) }}<br>
Email: {{ form_widget(formFormations.email) }}<br>
Nom de la formation: {{ form_widget(formFormations.nom_formation) }}<br>
Civilité: {{ form_widget(formFormations.civilite) }} <br>
Objectif de la formation: {{ form_widget(formFormations.objectif_formation) }} <br>
Durée de la formation: {{ form_widget(formFormations.date_formation) }} <br>
Cout de la formation: {{ form_widget(formFormations.cout_formation) }} <br>
Titre professionnel: {{ form_widget(formFormations.titre_professionnel) }} <br>
Vos prérequis: {{ form_widget(formFormations.preRequis) }} <br>
Session de formation: {{ form_widget(formFormations.sessions) }} <br>
Status: {{ form_widget(formFormations.status) }} <br>




    

<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formFormations) }}





    {% endblock %}
", "formations/modifierFormations.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\modifierFormations.html.twig");
    }
}
