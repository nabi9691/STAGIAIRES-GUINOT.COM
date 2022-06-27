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

/* contacts/formulaireContacts.html.twig */
class __TwigTemplate_36f8d91e54b6116e401d3dce6cd7d541b2a2f1db7d5015d03d45a8de1ad05415 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/formulaireContacts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacts/formulaireContacts.html.twig"));

        // line 1
        echo "
    
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 3, $this->source); })()), 'form_start');
        echo "


Formation: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 6, $this->source); })()), "formation", [], "any", false, false, false, 6), 'widget');
        echo "<br>
Nom: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'widget');
        echo "<br>
Prénom: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 8, $this->source); })()), "prenom", [], "any", false, false, false, 8), 'widget');
        echo " <br>
Date de naissance: ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 9, $this->source); })()), "date", [], "any", false, false, false, 9), 'widget');
        echo " <br>
Civilité: ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 10, $this->source); })()), "civilite", [], "any", false, false, false, 10), 'widget');
        echo " <br>
Téléphone: ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 11, $this->source); })()), "telephone", [], "any", false, false, false, 11), 'widget');
        echo " <br>
Email: ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12), 'widget');
        echo " <br>
Fax: ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 13, $this->source); })()), "fax", [], "any", false, false, false, 13), 'widget');
        echo " <br>
Adresse: ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 14, $this->source); })()), "adresse", [], "any", false, false, false, 14), 'widget');
        echo " <br>
Code-Postal: ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 15, $this->source); })()), "codePostal", [], "any", false, false, false, 15), 'widget');
        echo " <br>
Villes: ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 16, $this->source); })()), "villes", [], "any", false, false, false, 16), 'widget');
        echo " <br>
Départements: ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 17, $this->source); })()), "departements", [], "any", false, false, false, 17), 'widget');
        echo " <br>
Pays: ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 18, $this->source); })()), "pays", [], "any", false, false, false, 18), 'widget');
        echo " <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formContacts"]) || array_key_exists("formContacts", $context) ? $context["formContacts"] : (function () { throw new RuntimeError('Variable "formContacts" does not exist.', 26, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contacts/formulaireContacts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 26,  101 => 18,  97 => 17,  93 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    
{{ form_start(formContacts) }}


Formation: {{ form_widget(formContacts.formation) }}<br>
Nom: {{ form_widget(formContacts.nom) }}<br>
Prénom: {{ form_widget(formContacts.prenom) }} <br>
Date de naissance: {{ form_widget(formContacts.date) }} <br>
Civilité: {{ form_widget(formContacts.civilite) }} <br>
Téléphone: {{ form_widget(formContacts.telephone) }} <br>
Email: {{ form_widget(formContacts.email) }} <br>
Fax: {{ form_widget(formContacts.fax) }} <br>
Adresse: {{ form_widget(formContacts.adresse) }} <br>
Code-Postal: {{ form_widget(formContacts.codePostal) }} <br>
Villes: {{ form_widget(formContacts.villes) }} <br>
Départements: {{ form_widget(formContacts.departements) }} <br>
Pays: {{ form_widget(formContacts.pays) }} <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formContacts) }}
", "contacts/formulaireContacts.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\contacts\\formulaireContacts.html.twig");
    }
}
