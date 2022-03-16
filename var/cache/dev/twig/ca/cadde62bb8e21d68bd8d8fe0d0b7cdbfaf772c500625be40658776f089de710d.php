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

/* @Twig/Exception/error500.html.twig */
class __TwigTemplate_8071c660d9fe316986041cbf19350857319b4ab81aaf4d8aa039a4f36dc6eeed extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error500.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error500.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"robots\" content=\"noindex\"/>
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>
        ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>
    <style>
        body {
            background: #141829;
            font-family: 'Nova Square', cursive;
        }

        .text-500 {
            margin-top: 80px;
            font-size: 200px;
            line-height: 200px;
            text-align: center;
            letter-spacing: 5px;
            background: -webkit-linear-gradient(#FF2525, #FFE53B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0px;
            padding-bottom: 0px;
        }

        .text {
            text-align: center;
            font-size: 20px;
            color: #f6f6e3;
            letter-spacing: 5px;
            margin-top: 0px;
        }

        .text-btn {
            text-align: center;
            margin-top: 75px;
        }

        .btn-outline-primary {
            border-color: #ffc8c8;
            color: #9e1515;
            border-radius: 0px;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        .btn-outline-primary:hover {
            background-color: #ffc8c8;
            right: 0px;
            border-color: #ffc8c8;
            color: #141829;
        }

        @media screen and (max-width:500px) {
            .text-500 {
                font-size: 150px;
            }
        }

        @media screen and (max-width:345px) {
            .text-500 {
                font-size: 120px;
            }
        }
    </style>
</head>
<body>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-2\"></div>
        <div class=\"col-lg-8\">
            <div class=\"col-lg-12 text-500\">
                <b>500</b>
            </div>
            <div class=\"col-lg-12 text\">
                <b> Erreur du server </b>
            </div>
            <div class=\"col-lg-12 text-btn\">
                <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">
                    Retour page d'accueil
                </a>
            </div>
        </div>
        <div class=\"col-lg-2\"></div>
    </div>
</div>
</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("homepage.error.500"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 10,  133 => 85,  57 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"robots\" content=\"noindex\"/>
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>
        {% block title 'homepage.error.500'|trans %}
    </title>
    <style>
        body {
            background: #141829;
            font-family: 'Nova Square', cursive;
        }

        .text-500 {
            margin-top: 80px;
            font-size: 200px;
            line-height: 200px;
            text-align: center;
            letter-spacing: 5px;
            background: -webkit-linear-gradient(#FF2525, #FFE53B);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0px;
            padding-bottom: 0px;
        }

        .text {
            text-align: center;
            font-size: 20px;
            color: #f6f6e3;
            letter-spacing: 5px;
            margin-top: 0px;
        }

        .text-btn {
            text-align: center;
            margin-top: 75px;
        }

        .btn-outline-primary {
            border-color: #ffc8c8;
            color: #9e1515;
            border-radius: 0px;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        .btn-outline-primary:hover {
            background-color: #ffc8c8;
            right: 0px;
            border-color: #ffc8c8;
            color: #141829;
        }

        @media screen and (max-width:500px) {
            .text-500 {
                font-size: 150px;
            }
        }

        @media screen and (max-width:345px) {
            .text-500 {
                font-size: 120px;
            }
        }
    </style>
</head>
<body>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-2\"></div>
        <div class=\"col-lg-8\">
            <div class=\"col-lg-12 text-500\">
                <b>500</b>
            </div>
            <div class=\"col-lg-12 text\">
                <b> Erreur du server </b>
            </div>
            <div class=\"col-lg-12 text-btn\">
                <a href=\"{{ path('index') }}\">
                    Retour page d'accueil
                </a>
            </div>
        </div>
        <div class=\"col-lg-2\"></div>
    </div>
</div>
</body>
</html>


", "@Twig/Exception/error500.html.twig", "C:\\wamp64\\www\\Retrouvailles_NABI.com\\templates\\bundles\\TwigBundle\\Exception\\error500.html.twig");
    }
}
