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

/* messages/formulaireMessage.html.twig */
class __TwigTemplate_938fe04aa57ea69301adaaea3bd5f6a9d25710f74aafa9d15b29636f6ec79e0d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/formulaireMessage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "messages/formulaireMessage.html.twig"));

        // line 1
        echo "
    
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

Titre: ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 5, $this->source); })()), "titre", [], "any", false, false, false, 5), 'widget');
        echo "<br>
Résumé: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 6, $this->source); })()), "resume", [], "any", false, false, false, 6), 'widget');
        echo " <br>
Pays: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 7, $this->source); })()), "pays", [], "any", false, false, false, 7), 'widget');
        echo " <br>
Status: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 8, $this->source); })()), "status", [], "any", false, false, false, 8), 'widget');
        echo " <br>
createdAt: ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 9, $this->source); })()), "createdAt", [], "any", false, false, false, 9), 'widget');
        echo " <br>
utilisateur: ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 10, $this->source); })()), "utilisateur", [], "any", false, false, false, 10), 'widget');
        echo " <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessage"]) || array_key_exists("formMessage", $context) ? $context["formMessage"] : (function () { throw new RuntimeError('Variable "formMessage" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "messages/formulaireMessage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    
{{ form_start(formMessage) }}

Titre: {{ form_widget(formMessage.titre) }}<br>
Résumé: {{ form_widget(formMessage.resume) }} <br>
Pays: {{ form_widget(formMessage.pays) }} <br>
Status: {{ form_widget(formMessage.status) }} <br>
createdAt: {{ form_widget(formMessage.createdAt) }} <br>
utilisateur: {{ form_widget(formMessage.utilisateur) }} <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formMessage) }}
", "messages/formulaireMessage.html.twig", "C:\\wamp64\\www\\Retrouvailles_NABI.com\\templates\\messages\\formulaireMessage.html.twig");
    }
}
