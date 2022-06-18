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
class __TwigTemplate_ed45c58c8d84cd8e56a57c9cf263e59cb14d9c5cad6a087b343dd0d038b50e7b extends Template
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

Formation: ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 5, $this->source); })()), "formation", [], "any", false, false, false, 5), 'widget');
        echo " <br>
Civilité: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 6, $this->source); })()), "civilite", [], "any", false, false, false, 6), 'widget');
        echo " <br>
Nom: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'widget');
        echo "<br>
Prénom: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 8, $this->source); })()), "prenom", [], "any", false, false, false, 8), 'widget');
        echo " <br>
Adresse: ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 9, $this->source); })()), "adresse", [], "any", false, false, false, 9), 'widget');
        echo " <br>
Code Postal: ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 10, $this->source); })()), "code_postal", [], "any", false, false, false, 10), 'widget');
        echo " <br>
Ville: ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 11, $this->source); })()), "villes", [], "any", false, false, false, 11), 'widget');
        echo " <br>
Téléphone: ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 12, $this->source); })()), "telephone", [], "any", false, false, false, 12), 'widget');
        echo " <br>
Email: ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 13, $this->source); })()), "login", [], "any", false, false, false, 13), 'widget');
        echo " <br>
Message envoyer: ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 14, $this->source); })()), "message_envoyer", [], "any", false, false, false, 14), 'widget');
        echo " <br>
Message reçu: ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 15, $this->source); })()), "message_recu", [], "any", false, false, false, 15), 'widget');
        echo " <br>
Login: ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 16, $this->source); })()), "login", [], "any", false, false, false, 16), 'widget');
        echo " <br>
Mot de passe: ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 17, $this->source); })()), "password", [], "any", false, false, false, 17), 'widget');
        echo " <br>
Pièce identité: ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 18, $this->source); })()), "media", [], "any", false, false, false, 18), 'widget');
        echo " <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUtilisateur"]) || array_key_exists("formUtilisateur", $context) ? $context["formUtilisateur"] : (function () { throw new RuntimeError('Variable "formUtilisateur" does not exist.', 25, $this->source); })()), 'form_end');
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
        return array (  114 => 25,  104 => 18,  100 => 17,  96 => 16,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    
{{ form_start(formUtilisateur) }}

Formation: {{ form_widget(formUtilisateur.formation) }} <br>
Civilité: {{ form_widget(formUtilisateur.civilite) }} <br>
Nom: {{ form_widget(formUtilisateur.nom) }}<br>
Prénom: {{ form_widget(formUtilisateur.prenom) }} <br>
Adresse: {{ form_widget(formUtilisateur.adresse) }} <br>
Code Postal: {{ form_widget(formUtilisateur.code_postal) }} <br>
Ville: {{ form_widget(formUtilisateur.villes) }} <br>
Téléphone: {{ form_widget(formUtilisateur.telephone) }} <br>
Email: {{ form_widget(formUtilisateur.login) }} <br>
Message envoyer: {{ form_widget(formUtilisateur.message_envoyer) }} <br>
Message reçu: {{ form_widget(formUtilisateur.message_recu) }} <br>
Login: {{ form_widget(formUtilisateur.login) }} <br>
Mot de passe: {{ form_widget(formUtilisateur.password) }} <br>
Pièce identité: {{ form_widget(formUtilisateur.media) }} <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formUtilisateur) }}
", "utilisateurs/formulaireUtilisateur.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\utilisateurs\\formulaireUtilisateur.html.twig");
    }
}
