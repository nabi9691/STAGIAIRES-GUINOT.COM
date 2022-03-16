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

/* utilisateurs/formulaireUtilisateur.html.twig */
class __TwigTemplate_eccaa603a4bf56a7fec1d77401b738fe8637c51ad7573a3a932ff2da8046d2cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/formulaireUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateurs/formulaireUtilisateur.html.twig"));

        // line 1
        echo "
    
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

Nom: ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 5, $this->source); })()), "nom", [], "any", false, false, false, 5), 'widget');
        echo "<br>
Prénom: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 6, $this->source); })()), "prenom", [], "any", false, false, false, 6), 'widget');
        echo " <br>
Civilité: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 7, $this->source); })()), "civilite", [], "any", false, false, false, 7), 'widget');
        echo " <br>
Email: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 8, $this->source); })()), "login", [], "any", false, false, false, 8), 'widget');
        echo " <br>

Mot de passe: ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 10, $this->source); })()), "password", [], "any", false, false, false, 10), 'widget');
        echo " <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "utilisateurs/formulaireUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 17,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    
{{ form_start(formUtilisateur) }}

Nom: {{ form_widget(formUtilisateur.nom) }}<br>
Prénom: {{ form_widget(formUtilisateur.prenom) }} <br>
Civilité: {{ form_widget(formUtilisateur.civilite) }} <br>
Email: {{ form_widget(formUtilisateur.login) }} <br>

Mot de passe: {{ form_widget(formUtilisateur.password) }} <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formUtilisateur) }}
", "utilisateurs/formulaireUtilisateur.html.twig", "C:\\wamp64\\www\\Retrouvailles_NABI.com\\templates\\utilisateurs\\formulaireUtilisateur.html.twig");
    }
}
