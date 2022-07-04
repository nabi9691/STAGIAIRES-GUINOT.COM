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

/* cours/formulaireCours.html.twig */
class __TwigTemplate_6dbaae0255e34a3b84e1efdac7d6cb16e72045a97cdaea3d158354f63974c69b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/formulaireCours.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cours/formulaireCours.html.twig"));

        // line 1
        echo "
    
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

Civilité: ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 5, $this->source); })()), "civilite", [], "any", false, false, false, 5), 'widget');
        echo " <br>
Nom: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget');
        echo "<br>
Titre du cours: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 7, $this->source); })()), "titre_cours", [], "any", false, false, false, 7), 'widget');
        echo "<br>
Résumé du cours: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 8, $this->source); })()), "resume", [], "any", false, false, false, 8), 'widget');
        echo "<br>
Type du cours: ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 9, $this->source); })()), "type_cours", [], "any", false, false, false, 9), 'widget');
        echo "<br>
Date du cours: ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 10, $this->source); })()), "date_cours", [], "any", false, false, false, 10), 'widget');
        echo " <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCours"]) || array_key_exists("formCours", $context) ? $context["formCours"] : (function () { throw new RuntimeError('Variable "formCours" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cours/formulaireCours.html.twig";
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
    
{{ form_start(formCours) }}

Civilité: {{ form_widget(formCours.civilite) }} <br>
Nom: {{ form_widget(formCours.nom) }}<br>
Titre du cours: {{ form_widget(formCours.titre_cours) }}<br>
Résumé du cours: {{ form_widget(formCours.resume) }}<br>
Type du cours: {{ form_widget(formCours.type_cours) }}<br>
Date du cours: {{ form_widget(formCours.date_cours) }} <br>



<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formCours) }}
", "cours/formulaireCours.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\cours\\formulaireCours.html.twig");
    }
}
