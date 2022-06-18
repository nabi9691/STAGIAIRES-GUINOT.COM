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

/* contacts/modifierContacts.html.twig */
class __TwigTemplate_99a0040fdd12ff8d42b0d022243600d163ce5096ab6214612a04967c9ce673fd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/modifierContacts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/modifierContacts.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contacts/modifierContacts.html.twig", 1);
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
        echo "Modifier un contact :
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
        Modifier un contact :
        </h1>

";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

Formations: ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 16, $this->source); })()), "formation", [], "any", false, false, false, 16), 'widget');
        echo "<br>
Nom: ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 17, $this->source); })()), "nom", [], "any", false, false, false, 17), 'widget');
        echo "<br>
Prénom: ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), 'widget');
        echo " <br>
Date de naissance: ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 19, $this->source); })()), "date", [], "any", false, false, false, 19), 'widget');
        echo " <br>
Civilité: ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 20, $this->source); })()), "civilite", [], "any", false, false, false, 20), 'widget');
        echo " <br>
Téléphone: ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 21, $this->source); })()), "telephone", [], "any", false, false, false, 21), 'widget');
        echo " <br>
Email: ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'widget');
        echo " <br>
Fax: ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 23, $this->source); })()), "fax", [], "any", false, false, false, 23), 'widget');
        echo " <br>
Adresse: ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 24, $this->source); })()), "adresse", [], "any", false, false, false, 24), 'widget');
        echo " <br>
Code-Postal: ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 25, $this->source); })()), "codePostal", [], "any", false, false, false, 25), 'widget');
        echo " <br>
Villes: ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 26, $this->source); })()), "villes", [], "any", false, false, false, 26), 'widget');
        echo " <br>
Départements: ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 27, $this->source); })()), "departements", [], "any", false, false, false, 27), 'widget');
        echo " <br>
Pays: ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 28, $this->source); })()), "pays", [], "any", false, false, false, 28), 'widget');
        echo " <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 36, $this->source); })()), 'form_end');
        echo "





    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contacts/modifierContacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 36,  151 => 28,  147 => 27,  143 => 26,  139 => 25,  135 => 24,  131 => 23,  127 => 22,  123 => 21,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  98 => 14,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Modifier un contact :
{% endblock %}

{% block content %}
    
    
    <h1>
        Modifier un contact :
        </h1>

{{ form_start(formContacts) }}

Formations: {{ form_widget(formContacts.formation) }}<br>
Nom: {{ form_widget(formContacts.nom) }}<br>
Prénom: {{ form_widget(formContacts.prenom) }} <br>
Date de naissance: {{ form_widget(formContacts.date) }} <br>
Civilité: {{ form_widget(formContacts.civilite) }} <br>
Téléphone: {{ form_widget(formContacts.telephone) }} <br>
Email: {{ form_widget(formContacts.email) }} <br>
Fax: {{ form_widget(formContacts.fax) }} <br>
Adresse: {{ form_widget(formContacts.adresse) }} <br>
Code-Postal: {{ form_widget(formContacts.codePostal) }} <br>
Villes: {{ form_widget(formContacts.villes) }} <br>
Départements: {{ form_widget(formContacts.departements) }} <br>
Pays: {{ form_widget(formContacts.pays) }} <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formContacts) }}





    {% endblock %}
", "contacts/modifierContacts.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\contacts\\modifierContacts.html.twig");
    }
}
