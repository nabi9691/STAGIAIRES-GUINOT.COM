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

/* medias/formulaireMedias.html.twig */
class __TwigTemplate_3b1e776e697ae43c87c70d467a96eef92cd92383fe8f16c2da74df0dafc1f0d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/formulaireMedias.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medias/formulaireMedias.html.twig"));

        // line 1
        echo "
    
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMedias"]) || array_key_exists("formMedias", $context) ? $context["formMedias"] : (function () { throw new RuntimeError('Variable "formMedias" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

Image: ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMedias"]) || array_key_exists("formMedias", $context) ? $context["formMedias"] : (function () { throw new RuntimeError('Variable "formMedias" does not exist.', 5, $this->source); })()), "imageFile", [], "any", false, false, false, 5), 'widget');
        echo "<br>
Contenu: ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMedias"]) || array_key_exists("formMedias", $context) ? $context["formMedias"] : (function () { throw new RuntimeError('Variable "formMedias" does not exist.', 6, $this->source); })()), "contenu", [], "any", false, false, false, 6), 'widget');
        echo " <br>
Date: ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMedias"]) || array_key_exists("formMedias", $context) ? $context["formMedias"] : (function () { throw new RuntimeError('Variable "formMedias" does not exist.', 7, $this->source); })()), "date", [], "any", false, false, false, 7), 'widget');
        echo " <br>
Catégories: ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMedias"]) || array_key_exists("formMedias", $context) ? $context["formMedias"] : (function () { throw new RuntimeError('Variable "formMedias" does not exist.', 8, $this->source); })()), "categories", [], "any", false, false, false, 8), 'widget');
        echo " <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMedias"]) || array_key_exists("formMedias", $context) ? $context["formMedias"] : (function () { throw new RuntimeError('Variable "formMedias" does not exist.', 15, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "medias/formulaireMedias.html.twig";
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
    
{{ form_start(formMedias) }}

Image: {{ form_widget(formMedias.imageFile) }}<br>
Contenu: {{ form_widget(formMedias.contenu) }} <br>
Date: {{ form_widget(formMedias.date) }} <br>
Catégories: {{ form_widget(formMedias.categories) }} <br>


<button type=\"submit\" class=\"btn btn-success\">envoyer</button>


      
    {{ form_end(formMedias) }}
", "medias/formulaireMedias.html.twig", "C:\\wamp64\\www\\Anciens-Stagiaires-Guinot\\templates\\medias\\formulaireMedias.html.twig");
    }
}
