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
class __TwigTemplate_feffad13a20fbbde439a0d784d3bf843ed558d032510ff1e755ca5131c427008 extends Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessages"]) || array_key_exists("formMessages", $context) ? $context["formMessages"] : (function () { throw new RuntimeError('Variable "formMessages" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

Titre du message: ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessages"]) || array_key_exists("formMessages", $context) ? $context["formMessages"] : (function () { throw new RuntimeError('Variable "formMessages" does not exist.', 5, $this->source); })()), "titre_message", [], "any", false, false, false, 5), 'widget');
        echo "<br>
Contenu du message: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessages"]) || array_key_exists("formMessages", $context) ? $context["formMessages"] : (function () { throw new RuntimeError('Variable "formMessages" does not exist.', 6, $this->source); })()), "contenu_message", [], "any", false, false, false, 6), 'widget');
        echo " <br>
Créer date: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessages"]) || array_key_exists("formMessages", $context) ? $context["formMessages"] : (function () { throw new RuntimeError('Variable "formMessages" does not exist.', 7, $this->source); })()), "creer_date", [], "any", false, false, false, 7), 'widget');
        echo " <br>
Si le message est lu: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessages"]) || array_key_exists("formMessages", $context) ? $context["formMessages"] : (function () { throw new RuntimeError('Variable "formMessages" does not exist.', 8, $this->source); })()), "si_messageLu", [], "any", false, false, false, 8), 'widget');
        echo " <br>
Expediteur: ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessages"]) || array_key_exists("formMessages", $context) ? $context["formMessages"] : (function () { throw new RuntimeError('Variable "formMessages" does not exist.', 9, $this->source); })()), "expediteur", [], "any", false, false, false, 9), 'widget');
        echo " <br>
Destinataire: ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMessages"]) || array_key_exists("formMessages", $context) ? $context["formMessages"] : (function () { throw new RuntimeError('Variable "formMessages" does not exist.', 10, $this->source); })()), "destinataire", [], "any", false, false, false, 10), 'widget');
        echo " <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMessages"]) || array_key_exists("formMessages", $context) ? $context["formMessages"] : (function () { throw new RuntimeError('Variable "formMessages" does not exist.', 18, $this->source); })()), 'form_end');
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
    
{{ form_start(formMessages) }}

Titre du message: {{ form_widget(formMessages.titre_message) }}<br>
Contenu du message: {{ form_widget(formMessages.contenu_message) }} <br>
Créer date: {{ form_widget(formMessages.creer_date) }} <br>
Si le message est lu: {{ form_widget(formMessages.si_messageLu) }} <br>
Expediteur: {{ form_widget(formMessages.expediteur) }} <br>
Destinataire: {{ form_widget(formMessages.destinataire) }} <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formMessages) }}
", "messages/formulaireMessage.html.twig", "C:\\wamp64\\www\\Anciens-Stagiaires-Guinot\\templates\\messages\\formulaireMessage.html.twig");
    }
}
