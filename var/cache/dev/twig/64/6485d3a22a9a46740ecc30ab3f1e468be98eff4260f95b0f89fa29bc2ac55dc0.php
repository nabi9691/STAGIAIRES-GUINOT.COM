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

/* langages/formulaireLangages.html.twig */
class __TwigTemplate_cf56840a5248ccbd64a736151d05d0e411402d8c7c88b27a4d6632f611a781cf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/formulaireLangages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "langages/formulaireLangages.html.twig"));

        // line 1
        echo "

    
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 4, $this->source); })()), 'form_start');
        echo "

Nom du stagiaire: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget');
        echo "<br>
Prenom du stagiaire: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 7, $this->source); })()), "prenom", [], "any", false, false, false, 7), 'widget');
        echo "<br>
Téléphone du stagiaire: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 8, $this->source); })()), "telephone", [], "any", false, false, false, 8), 'widget');
        echo "<br>
Email du stagiaire: ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'widget');
        echo "<br>
Nom du langage: ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 10, $this->source); })()), "nom_langage", [], "any", false, false, false, 10), 'widget');
        echo "<br>
Durée: ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), 'widget');
        echo " <br>
Objectif: ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 12, $this->source); })()), "objectif", [], "any", false, false, false, 12), 'widget');
        echo " <br>
Coefficient: ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 13, $this->source); })()), "coefficient", [], "any", false, false, false, 13), 'widget');
        echo " <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formLangages"]) || array_key_exists("formLangages", $context) ? $context["formLangages"] : (function () { throw new RuntimeError('Variable "formLangages" does not exist.', 20, $this->source); })()), 'form_end');
        echo "



</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "langages/formulaireLangages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

    
{{ form_start(formLangages) }}

Nom du stagiaire: {{ form_widget(formLangages.nom) }}<br>
Prenom du stagiaire: {{ form_widget(formLangages.prenom) }}<br>
Téléphone du stagiaire: {{ form_widget(formLangages.telephone) }}<br>
Email du stagiaire: {{ form_widget(formLangages.email) }}<br>
Nom du langage: {{ form_widget(formLangages.nom_langage) }}<br>
Durée: {{ form_widget(formLangages.date) }} <br>
Objectif: {{ form_widget(formLangages.objectif) }} <br>
Coefficient: {{ form_widget(formLangages.coefficient) }} <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formLangages) }}



</div>

", "langages/formulaireLangages.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\templates\\langages\\formulaireLangages.html.twig");
    }
}
