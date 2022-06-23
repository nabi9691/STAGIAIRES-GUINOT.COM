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

/* langages/formulaireLangages.html.twig */
class __TwigTemplate_cf56840a5248ccbd64a736151d05d0e411402d8c7c88b27a4d6632f611a781cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/formulaireLangages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/formulaireLangages.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "langages/formulaireLangages.html.twig", 1);
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
        echo "Formulaire :
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
        echo "
";
        // line 9
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

        // line 10
        echo "<div>
    <h1>
     Formulaire :
     </h1>

    <br /><br />
    <hr />
    <br />

    
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 20, $this->source); })()), 'form_start');
        echo "

Nom du stagiaire: ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'widget');
        echo "<br>
Prenom du stagiaire: ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 23, $this->source); })()), "prenom", [], "any", false, false, false, 23), 'widget');
        echo "<br>
Téléphone du stagiaire: ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 24, $this->source); })()), "telephone", [], "any", false, false, false, 24), 'widget');
        echo "<br>
Email du stagiaire: ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'widget');
        echo "<br>
Nom du langage: ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 26, $this->source); })()), "nom_langage", [], "any", false, false, false, 26), 'widget');
        echo "<br>
Durée: ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 27, $this->source); })()), "date", [], "any", false, false, false, 27), 'widget');
        echo " <br>
Objectif: ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 28, $this->source); })()), "objectif", [], "any", false, false, false, 28), 'widget');
        echo " <br>
Coefficient: ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 29, $this->source); })()), "coefficient", [], "any", false, false, false, 29), 'widget');
        echo " <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 36, $this->source); })()), 'form_end');
        echo "

<h1> Veuillez renplir tous les champs :</h1>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "langages/formulaireLangages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 36,  158 => 29,  154 => 28,  150 => 27,  146 => 26,  142 => 25,  138 => 24,  134 => 23,  130 => 22,  125 => 20,  113 => 10,  94 => 9,  91 => 8,  81 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Formulaire :
 {% endblock %}

{% block body %}

{% block content %}
<div>
    <h1>
     Formulaire :
     </h1>

    <br /><br />
    <hr />
    <br />

    
{{ form_start(formLangages) }}

Nom du stagiaire: {{ form_widget(formLangages.nom) }}<br>
Prenom du stagiaire: {{ form_widget(formLangages.prenom) }}<br>
Téléphone du stagiaire: {{ form_widget(formLangages.telephone) }}<br>
Email du stagiaire: {{ form_widget(formLangages.email) }}<br>
Nom du langage: {{ form_widget(formLangages.nom_langage) }}<br>
Durée: {{ form_widget(formLangages.date) }} <br>
Objectif: {{ form_widget(formLangages.objectif) }} <br>
Coefficient: {{ form_widget(formLangages.coefficient) }} <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formLangages) }}

<h1> Veuillez renplir tous les champs :</h1>

</div>
{% endblock %}
{% endblock %}
", "langages/formulaireLangages.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\langages\\formulaireLangages.html.twig");
    }
}
