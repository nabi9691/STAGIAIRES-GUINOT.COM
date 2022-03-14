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

/* mediats/modifierMediats.html.twig */
class __TwigTemplate_9a3f63df61831756dcfb167466b6a3b0d4763bb85126482cee7b5bd213ae0d42 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mediats/modifierMediats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mediats/modifierMediats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "mediats/modifierMediats.html.twig", 1);
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
        echo "Modifier un médiats :
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
        Modifier un médiats :
        </h1>

";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

Titre: ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), 'widget');
        echo "<br>
Contenu: ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 17, $this->source); })()), "contenu", [], "any", false, false, false, 17), 'widget');
        echo " <br>
Date: ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 18, $this->source); })()), "date", [], "any", false, false, false, 18), 'widget');
        echo " <br>
Status: ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 19, $this->source); })()), "status", [], "any", false, false, false, 19), 'widget');
        echo " <br>
Catégories: ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 20, $this->source); })()), "categories", [], "any", false, false, false, 20), 'widget');
        echo " <br>
Auteurs: ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 21, $this->source); })()), "auteurs", [], "any", false, false, false, 21), 'widget');
        echo " <br>
Utilisateur: ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 22, $this->source); })()), "utilisateur", [], "any", false, false, false, 22), 'widget');
        echo " <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 30, $this->source); })()), 'form_end');
        echo "





    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "mediats/modifierMediats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 30,  127 => 22,  123 => 21,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  98 => 14,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Modifier un médiats :
{% endblock %}

{% block content %}
    
    
    <h1>
        Modifier un médiats :
        </h1>

{{ form_start(formMediats) }}

Titre: {{ form_widget(formMediats.titre) }}<br>
Contenu: {{ form_widget(formMediats.contenu) }} <br>
Date: {{ form_widget(formMediats.date) }} <br>
Status: {{ form_widget(formMediats.status) }} <br>
Catégories: {{ form_widget(formMediats.categories) }} <br>
Auteurs: {{ form_widget(formMediats.auteurs) }} <br>
Utilisateur: {{ form_widget(formMediats.utilisateur) }} <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formMediats) }}





    {% endblock %}
", "mediats/modifierMediats.html.twig", "C:\\wamp64\\www\\Retrouvailles_NABI.com\\templates\\mediats\\modifierMediats.html.twig");
    }
}
