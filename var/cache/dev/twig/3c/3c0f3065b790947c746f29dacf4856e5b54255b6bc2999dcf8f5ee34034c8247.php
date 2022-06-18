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

/* langages/modifierLangage.html.twig */
class __TwigTemplate_2625ffda7ef2ac88b64fda38c11b78e4e840334fec558a8696011a4ad775df2c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/modifierLangage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/modifierLangage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "langages/modifierLangage.html.twig", 1);
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
        echo "Modifier un langage :
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
        Modifier un langage :
        </h1>

";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

Nom du stagiaire: ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget');
        echo "<br>
Prenom du stagiaire: ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), 'widget');
        echo "<br>
Téléphone du stagiaire: ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 18, $this->source); })()), "telephone", [], "any", false, false, false, 18), 'widget');
        echo "<br>
Email du stagiaire: ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 19, $this->source); })()), "email", [], "any", false, false, false, 19), 'widget');
        echo "<br>
Nom du langage: ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 20, $this->source); })()), "nom_langage", [], "any", false, false, false, 20), 'widget');
        echo "<br>
Durée: ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 21, $this->source); })()), "date", [], "any", false, false, false, 21), 'widget');
        echo " <br>
Objectif: ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 22, $this->source); })()), "objectif", [], "any", false, false, false, 22), 'widget');
        echo " <br>
Coefficient: ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 23, $this->source); })()), "coefficient", [], "any", false, false, false, 23), 'widget');
        echo " <br>




<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 32, $this->source); })()), 'form_end');
        echo "




    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("langages_index");
        echo "\">Liste des langages :</a><br>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "langages/modifierLangage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 37,  143 => 32,  131 => 23,  127 => 22,  123 => 21,  119 => 20,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  98 => 14,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Modifier un langage :
{% endblock %}

{% block content %}
    
    
    <h1>
        Modifier un langage :
        </h1>

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




    <a href=\"{{ path('langages_index') }}\">Liste des langages :</a><br>

    {% endblock %}
", "langages/modifierLangage.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\langages\\modifierLangage.html.twig");
    }
}
