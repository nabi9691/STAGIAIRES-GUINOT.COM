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

/* formations/formulaireFormation.html.twig */
class __TwigTemplate_4733735d956cd6066deed3662bb9a385547efa0dba5fbf2e58e64e758842dca2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/formulaireFormation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formations/formulaireFormation.html.twig"));

        // line 1
        echo "
    
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

Civilité: ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 5, $this->source); })()), "civilite", [], "any", false, false, false, 5), 'widget');
        echo " <br>
Nom du stagiaire: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget');
        echo "<br>
Numéro de téléphone: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 7, $this->source); })()), "telephone", [], "any", false, false, false, 7), 'widget');
        echo "<br>
Email: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 8, $this->source); })()), "email", [], "any", false, false, false, 8), 'widget');
        echo "<br>
Nom de la formation: ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 9, $this->source); })()), "nom_formation", [], "any", false, false, false, 9), 'widget');
        echo "<br>
Date de la formation: ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 10, $this->source); })()), "date_formation", [], "any", false, false, false, 10), 'widget');
        echo " <br>
Cout de la formation: ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 11, $this->source); })()), "cout_formation", [], "any", false, false, false, 11), 'widget');
        echo " <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFormations"]) || array_key_exists("formFormations", $context) ? $context["formFormations"] : (function () { throw new RuntimeError('Variable "formFormations" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formations/formulaireFormation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    
{{ form_start(formFormations) }}

Civilité: {{ form_widget(formFormations.civilite) }} <br>
Nom du stagiaire: {{ form_widget(formFormations.nom) }}<br>
Numéro de téléphone: {{ form_widget(formFormations.telephone) }}<br>
Email: {{ form_widget(formFormations.email) }}<br>
Nom de la formation: {{ form_widget(formFormations.nom_formation) }}<br>
Date de la formation: {{ form_widget(formFormations.date_formation) }} <br>
Cout de la formation: {{ form_widget(formFormations.cout_formation) }} <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formFormations) }}
", "formations/formulaireFormation.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\formations\\formulaireFormation.html.twig");
    }
}
