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

/* @FMElfinder/Elfinder/summernote.html.twig */
class __TwigTemplate_7a684baa0af0e133938bc47b9d8b2c2d6eeac0890080f9778a7a22032046a899 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/summernote.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/summernote.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=2\">
    <script data-main=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_main_js");
        echo "\" src=\"//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js\"></script>
    <script>
        define('elFinderConfig', {
            // elFinder options (REQUIRED)
            // Documentation for client options:
            // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
            defaultOpts : {
                url : '";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_connect", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 14, $this->source); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new RuntimeError('Variable "homeFolder" does not exist.', 14, $this->source); })())]), "html", null, true);
        echo "',
                lang : '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
                onlyMimes: ";
        // line 16
        echo (isset($context["onlyMimes"]) || array_key_exists("onlyMimes", $context) ? $context["onlyMimes"] : (function () { throw new RuntimeError('Variable "onlyMimes" does not exist.', 16, $this->source); })());
        echo ",
                destroyOnClose : true,
                getFileCallback : function(files, fm) {
                    if (files.mime.match('application')) {
                        window.opener.\$('.summernote').summernote('createLink', {
                            text: files.name,
                            url: files.url,
                            newWindow: true
                        });
                        window.close();
                    }
                    if(files.mime.match('image')){
                        window.opener.\$('.summernote').summernote('editor.insertImage', files.url);
                        window.close();
                    }
                },
                commandsOptions : {
                    edit : {
                        extraOptions : {
                            // set API key to enable Creative Cloud image editor
                            // see https://console.adobe.io/
                            creativeCloudApiKey : '',
                            // browsing manager URL for CKEditor, TinyMCE
                            // uses self location with the empty value
                            managerUrl : ''
                        }
                    },
                    quicklook : {
                        // to enable CAD-Files and 3D-Models preview with sharecad.org
                        sharecadMimes : ['image/vnd.dwg', 'image/vnd.dxf', 'model/vnd.dwf', 'application/vnd.hp-hpgl', 'application/plt', 'application/step', 'model/iges', 'application/vnd.ms-pki.stl', 'application/sat', 'image/cgm', 'application/x-msmetafile'],
                        // to enable preview with Google Docs Viewer
                        googleDocsMimes : ['application/pdf', 'image/tiff', 'application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/postscript', 'application/rtf'],
                        // to enable preview with Microsoft Office Online Viewer
                        // these MIME types override \"googleDocsMimes\"
                        officeOnlineMimes : ['application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet', 'application/vnd.oasis.opendocument.presentation']
                    }
                },
                // bootCalback calls at before elFinder boot up
                bootCallback : function(fm, extraObj) {
                    /* any bind functions etc. */
                    fm.bind('init', function() {
                        // any your code
                    });
                    // for example set document.title dynamically.
                    var title = document.title;
                    fm.bind('open', function() {
                        var path = '',
                            cwd  = fm.cwd();
                        if (cwd) {
                            path = fm.path(cwd.hash) || null;
                        }
                        document.title = path? path + ':' + title : title;
                    }).bind('destroy', function() {
                        document.title = title;
                    });
                }
            },
            managers : {
                // 'DOM Element ID': { /* elFinder options of this DOM Element */ }
                'elfinder': {}
            }
        });
    </script>
</head>
<body>

<!-- Element where elFinder will be created (REQUIRED) -->
<div id=\"elfinder\"></div>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/summernote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  65 => 15,  61 => 14,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=2\">
    <script data-main=\"{{path('ef_main_js')}}\" src=\"//cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js\"></script>
    <script>
        define('elFinderConfig', {
            // elFinder options (REQUIRED)
            // Documentation for client options:
            // https://github.com/Studio-42/elFinder/wiki/Client-configuration-options
            defaultOpts : {
                url : '{{path('ef_connect', { 'instance': instance, 'homeFolder': homeFolder } )}}',
                lang : '{{locale}}',
                onlyMimes: {{ onlyMimes|raw }},
                destroyOnClose : true,
                getFileCallback : function(files, fm) {
                    if (files.mime.match('application')) {
                        window.opener.\$('.summernote').summernote('createLink', {
                            text: files.name,
                            url: files.url,
                            newWindow: true
                        });
                        window.close();
                    }
                    if(files.mime.match('image')){
                        window.opener.\$('.summernote').summernote('editor.insertImage', files.url);
                        window.close();
                    }
                },
                commandsOptions : {
                    edit : {
                        extraOptions : {
                            // set API key to enable Creative Cloud image editor
                            // see https://console.adobe.io/
                            creativeCloudApiKey : '',
                            // browsing manager URL for CKEditor, TinyMCE
                            // uses self location with the empty value
                            managerUrl : ''
                        }
                    },
                    quicklook : {
                        // to enable CAD-Files and 3D-Models preview with sharecad.org
                        sharecadMimes : ['image/vnd.dwg', 'image/vnd.dxf', 'model/vnd.dwf', 'application/vnd.hp-hpgl', 'application/plt', 'application/step', 'model/iges', 'application/vnd.ms-pki.stl', 'application/sat', 'image/cgm', 'application/x-msmetafile'],
                        // to enable preview with Google Docs Viewer
                        googleDocsMimes : ['application/pdf', 'image/tiff', 'application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/postscript', 'application/rtf'],
                        // to enable preview with Microsoft Office Online Viewer
                        // these MIME types override \"googleDocsMimes\"
                        officeOnlineMimes : ['application/vnd.ms-office', 'application/msword', 'application/vnd.ms-word', 'application/vnd.ms-excel', 'application/vnd.ms-powerpoint', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/vnd.oasis.opendocument.text', 'application/vnd.oasis.opendocument.spreadsheet', 'application/vnd.oasis.opendocument.presentation']
                    }
                },
                // bootCalback calls at before elFinder boot up
                bootCallback : function(fm, extraObj) {
                    /* any bind functions etc. */
                    fm.bind('init', function() {
                        // any your code
                    });
                    // for example set document.title dynamically.
                    var title = document.title;
                    fm.bind('open', function() {
                        var path = '',
                            cwd  = fm.cwd();
                        if (cwd) {
                            path = fm.path(cwd.hash) || null;
                        }
                        document.title = path? path + ':' + title : title;
                    }).bind('destroy', function() {
                        document.title = title;
                    });
                }
            },
            managers : {
                // 'DOM Element ID': { /* elFinder options of this DOM Element */ }
                'elfinder': {}
            }
        });
    </script>
</head>
<body>

<!-- Element where elFinder will be created (REQUIRED) -->
<div id=\"elfinder\"></div>

</body>
</html>
", "@FMElfinder/Elfinder/summernote.html.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Resources\\views\\Elfinder\\summernote.html.twig");
    }
}
