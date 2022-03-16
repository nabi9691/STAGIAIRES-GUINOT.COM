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

/* mediats/formulaireMediats.html.twig */
class __TwigTemplate_e0820f6fb624adcf015af1b46e17b83822dcf0d6fb5e083bfd7f0a6289bd2c6b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mediats/formulaireMediats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mediats/formulaireMediats.html.twig"));

        // line 1
        echo "
    
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

Titre: ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), 'widget');
        echo "<br>
Contenu: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 6, $this->source); })()), "contenu", [], "any", false, false, false, 6), 'widget');
        echo " <br>
Date: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 7, $this->source); })()), "date", [], "any", false, false, false, 7), 'widget');
        echo " <br>
Status: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 8, $this->source); })()), "status", [], "any", false, false, false, 8), 'widget');
        echo " <br>
Catégories: ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 9, $this->source); })()), "categories", [], "any", false, false, false, 9), 'widget');
        echo " <br>
Auteurs: ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 10, $this->source); })()), "auteurs", [], "any", false, false, false, 10), 'widget');
        echo " <br>
Utilisateur: ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 11, $this->source); })()), "utilisateur", [], "any", false, false, false, 11), 'widget');
        echo " <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMediats"]) || array_key_exists("formMediats", $context) ? $context["formMediats"] : (function () { throw new RuntimeError('Variable "formMediats" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mediats/formulaireMediats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 19,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    
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
", "mediats/formulaireMediats.html.twig", "C:\\wamp64\\www\\Retrouvailles_NABI.com\\templates\\mediats\\formulaireMediats.html.twig");
    }
}
