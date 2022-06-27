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

/* activites/formulaireActivites.html.twig */
class __TwigTemplate_acf1dc14da2abf5e9a0bce2a6f3fff2bc460628ec8e02b2d8eedae4b8cca6e0f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/formulaireActivites.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activites/formulaireActivites.html.twig"));

        // line 1
        echo "
    
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formActivites"]) || array_key_exists("formActivites", $context) ? $context["formActivites"] : (function () { throw new RuntimeError('Variable "formActivites" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

Nom: ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivites"]) || array_key_exists("formActivites", $context) ? $context["formActivites"] : (function () { throw new RuntimeError('Variable "formActivites" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'widget');
        echo "<br>
Contenu: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivites"]) || array_key_exists("formActivites", $context) ? $context["formActivites"] : (function () { throw new RuntimeError('Variable "formActivites" does not exist.', 6, $this->source); })()), "contenu", [], "any", false, false, false, 6), 'widget');
        echo " <br>
Date: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivites"]) || array_key_exists("formActivites", $context) ? $context["formActivites"] : (function () { throw new RuntimeError('Variable "formActivites" does not exist.', 7, $this->source); })()), "date", [], "any", false, false, false, 7), 'widget');
        echo " <br>
Status: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formActivites"]) || array_key_exists("formActivites", $context) ? $context["formActivites"] : (function () { throw new RuntimeError('Variable "formActivites" does not exist.', 8, $this->source); })()), "status", [], "any", false, false, false, 8), 'widget');
        echo " <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formActivites"]) || array_key_exists("formActivites", $context) ? $context["formActivites"] : (function () { throw new RuntimeError('Variable "formActivites" does not exist.', 15, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "activites/formulaireActivites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    
{{ form_start(formActivites) }}

Nom: {{ form_widget(formActivites.nom) }}<br>
Contenu: {{ form_widget(formActivites.contenu) }} <br>
Date: {{ form_widget(formActivites.date) }} <br>
Status: {{ form_widget(formActivites.status) }} <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formActivites) }}
", "activites/formulaireActivites.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\activites\\formulaireActivites.html.twig");
    }
}
