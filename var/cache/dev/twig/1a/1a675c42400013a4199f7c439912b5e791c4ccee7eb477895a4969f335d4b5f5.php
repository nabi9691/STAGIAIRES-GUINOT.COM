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
    
    <h1>
        Modifier un utilisateur :
        </h1>

";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 14, $this->source); })()), 'form_start');
        echo "

Nom: ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), 'widget');
        echo "<br>
Prénom: ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 17, $this->source); })()), "prenom", [], "any", false, false, false, 17), 'widget');
        echo " <br>
Civilité: ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 18, $this->source); })()), "civilite", [], "any", false, false, false, 18), 'widget');
        echo " <br>
Datedenaissance: ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 19, $this->source); })()), "dateNaiss", [], "any", false, false, false, 19), 'widget');
        echo " <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 26, $this->source); })()), 'form_end');
        echo "





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
        return array (  125 => 26,  115 => 19,  111 => 18,  107 => 17,  103 => 16,  98 => 14,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
Modifier un utilisateur :
{% endblock %}

{% block content %}
    
    
    <h1>
        Modifier un utilisateur :
        </h1>

{{ form_start(formUtilisateur) }}

Nom: {{ form_widget(formUtilisateur.nom) }}<br>
Prénom: {{ form_widget(formUtilisateur.prenom) }} <br>
Civilité: {{ form_widget(formUtilisateur.civilite) }} <br>
Datedenaissance: {{ form_widget(formUtilisateur.dateNaiss) }} <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formUtilisateur) }}





    {% endblock %}
", "utilisateurs/modifierUtilisateur.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\utilisateurs\\modifierUtilisateur.html.twig");
    }
}
