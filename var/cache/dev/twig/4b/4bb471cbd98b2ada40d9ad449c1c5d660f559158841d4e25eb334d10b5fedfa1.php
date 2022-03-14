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

/* messages/modifierMessage.html.twig */
class __TwigTemplate_0c0d65f9f8f018c0998e0c225f2388dadd438453d46d1ca8f79dfaecc5c4e1e5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/modifierMessage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/modifierMessage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "messages/modifierMessage.html.twig", 1);
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
        echo "Modifier un message :
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
        Modifier un message :
        </h1>

";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
Titre: ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), 'widget');
        echo "<br>
Résumé: ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 16, $this->source); })()), "resume", [], "any", false, false, false, 16), 'widget');
        echo " <br>
Pays: ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 17, $this->source); })()), "pays", [], "any", false, false, false, 17), 'widget');
        echo " <br>
Status: ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 18, $this->source); })()), "status", [], "any", false, false, false, 18), 'widget');
        echo " <br>
createdAt: ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 19, $this->source); })()), "createdAt", [], "any", false, false, false, 19), 'widget');
        echo " <br>
utilisateur: ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 20, $this->source); })()), "utilisateur", [], "any", false, false, false, 20), 'widget');
        echo " <br>





<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 30, $this->source); })()), 'form_end');
        echo "





    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "messages/modifierMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  122 => 20,  118 => 19,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  98 => 14,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Modifier un message :
{% endblock %}

{% block content %}
    
    
    <h1>
        Modifier un message :
        </h1>

{{ form_start(formMessage) }}
Titre: {{ form_widget(formMessage.titre) }}<br>
Résumé: {{ form_widget(formMessage.resume) }} <br>
Pays: {{ form_widget(formMessage.pays) }} <br>
Status: {{ form_widget(formMessage.status) }} <br>
createdAt: {{ form_widget(formMessage.createdAt) }} <br>
utilisateur: {{ form_widget(formMessage.utilisateur) }} <br>





<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formMessage) }}





    {% endblock %}
", "messages/modifierMessage.html.twig", "C:\\wamp64\\www\\Retrouvailles_NABI.com\\templates\\messages\\modifierMessage.html.twig");
    }
}
