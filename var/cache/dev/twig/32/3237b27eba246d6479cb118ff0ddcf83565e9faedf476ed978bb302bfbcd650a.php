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

/* @FMElfinder/Elfinder/helper/main.js.twig */
class __TwigTemplate_d7261047901cfb0e08214c284a66783dd7a1217180c070c2099a6957ee666f2b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/helper/main.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/helper/main.js.twig"));

        // line 1
        echo "(function(){
    \"use strict\";
    var // jQuery and jQueryUI version
        jqver = '3.3.1',
        uiver = '1.12.1',

        // Detect language (optional)
        lang = (function() {
            var locq = window.location.search,
                map = {
                    'pt' : 'pt_BR',
                    'ug' : 'ug_CN',
                    'zh' : 'zh_CN'
                },
                full = {
                    'zh_tw' : 'zh_TW',
                    'zh_cn' : 'zh_CN',
                    'fr_ca' : 'fr_CA'
                },
                fullLang, locm, lang;
            if (locq && (locm = locq.match(/lang=([a-zA-Z_-]+)/))) {
                // detection by url query (?lang=xx)
                fullLang = locm[1];
            } else {
                // detection by browser language
                fullLang = (navigator.browserLanguage || navigator.language || navigator.userLanguage || '');
            }
            fullLang = fullLang.replace('-', '_').substr(0,5).toLowerCase();
            if (full[fullLang]) {
                lang = full[fullLang];
            } else {
                lang = (fullLang || 'en').substr(0,2);
                if (map[lang]) {
                    lang = map[lang];
                }
            }
            return lang;
        })(),

        // Start elFinder (REQUIRED)
        start = function(elFinder, editors, config) {
            // load jQueryUI CSS
            elFinder.prototype.loadCss('//cdnjs.cloudflare.com/ajax/libs/jqueryui/'+uiver+'/themes/smoothness/jquery-ui.css');

            \$(function() {
                var optEditors = {
                        commandsOptions: {
                            edit: {
                                editors: Array.isArray(editors)? editors : []
                            }
                        }
                    },
                    opts = {};

                // Interpretation of \"elFinderConfig\"
                if (config && config.managers) {
                    \$.each(config.managers, function(id, mOpts) {
                        opts = Object.assign(opts, config.defaultOpts || {});
                        // editors marges to opts.commandOptions.edit
                        try {
                            mOpts.commandsOptions.edit.editors = mOpts.commandsOptions.edit.editors.concat(editors || []);
                        } catch(e) {
                            Object.assign(mOpts, optEditors);
                        }
                        // Make elFinder
                        \$('#' + id).elfinder(
                            // 1st Arg - options
                            \$.extend(true, { lang: lang }, opts, mOpts || {}),
                            // 2nd Arg - before boot up function
                            function(fm, extraObj) {
                                // `init` event callback function
                                fm.bind('init', function() {
                                    // Optional for Japanese decoder \"encoding-japanese\"
                                    if (fm.lang === 'ja') {
                                        require(
                                            [ 'encoding-japanese' ],
                                            function(Encoding) {
                                                if (Encoding && Encoding.convert) {
                                                    fm.registRawStringDecoder(function(s) {
                                                        return Encoding.convert(s, {to:'UNICODE',type:'string'});
                                                    });
                                                }
                                            }
                                        );
                                    }
                                });
                            }
                        );
                    });
                } else {
                    alert('\"elFinderConfig\" object is wrong.');
                }
            });
        },

        // JavaScript loader (REQUIRED)
        load = function() {
            require([
                    'elfinder'
                    , 'extras/editors.default.min'               // load text, image editors
                    , 'elFinderConfig'
                    //\t, 'extras/quicklook.googledocs.min'          // optional preview for GoogleApps contents on the GoogleDrive volume
                ],
                start,
                function(error) {
                    alert(error.message);
                }
            );
        },

        // is IE8 or :? for determine the jQuery version to use (optional)
        old = (typeof window.addEventListener === 'undefined' && typeof document.getElementsByClassName === 'undefined')
            ||
            (!window.chrome && !document.unqueID && !window.opera && !window.sidebar && 'WebkitAppearance' in document.documentElement.style && document.body.style && typeof document.body.style.webkitFilter === 'undefined');

    // config of RequireJS (REQUIRED)
    require.config({
        baseUrl : \"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/fmelfinder/js"), "js", null, true);
        echo "\",
        paths : {
            'jquery'   : '//cdnjs.cloudflare.com/ajax/libs/jquery/'+(old? '1.12.4' : jqver)+'/jquery.min',
            'jquery-ui': '//cdnjs.cloudflare.com/ajax/libs/jqueryui/'+uiver+'/jquery-ui.min',
            'elfinder' : 'elfinder.min',
            'encoding-japanese': '//cdn.rawgit.com/polygonplanet/encoding.js/1.0.26/encoding.min'
        },
        waitSeconds : 10 // optional
    });

    // load JavaScripts (REQUIRED)
    load();

})();
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/main.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 118,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("(function(){
    \"use strict\";
    var // jQuery and jQueryUI version
        jqver = '3.3.1',
        uiver = '1.12.1',

        // Detect language (optional)
        lang = (function() {
            var locq = window.location.search,
                map = {
                    'pt' : 'pt_BR',
                    'ug' : 'ug_CN',
                    'zh' : 'zh_CN'
                },
                full = {
                    'zh_tw' : 'zh_TW',
                    'zh_cn' : 'zh_CN',
                    'fr_ca' : 'fr_CA'
                },
                fullLang, locm, lang;
            if (locq && (locm = locq.match(/lang=([a-zA-Z_-]+)/))) {
                // detection by url query (?lang=xx)
                fullLang = locm[1];
            } else {
                // detection by browser language
                fullLang = (navigator.browserLanguage || navigator.language || navigator.userLanguage || '');
            }
            fullLang = fullLang.replace('-', '_').substr(0,5).toLowerCase();
            if (full[fullLang]) {
                lang = full[fullLang];
            } else {
                lang = (fullLang || 'en').substr(0,2);
                if (map[lang]) {
                    lang = map[lang];
                }
            }
            return lang;
        })(),

        // Start elFinder (REQUIRED)
        start = function(elFinder, editors, config) {
            // load jQueryUI CSS
            elFinder.prototype.loadCss('//cdnjs.cloudflare.com/ajax/libs/jqueryui/'+uiver+'/themes/smoothness/jquery-ui.css');

            \$(function() {
                var optEditors = {
                        commandsOptions: {
                            edit: {
                                editors: Array.isArray(editors)? editors : []
                            }
                        }
                    },
                    opts = {};

                // Interpretation of \"elFinderConfig\"
                if (config && config.managers) {
                    \$.each(config.managers, function(id, mOpts) {
                        opts = Object.assign(opts, config.defaultOpts || {});
                        // editors marges to opts.commandOptions.edit
                        try {
                            mOpts.commandsOptions.edit.editors = mOpts.commandsOptions.edit.editors.concat(editors || []);
                        } catch(e) {
                            Object.assign(mOpts, optEditors);
                        }
                        // Make elFinder
                        \$('#' + id).elfinder(
                            // 1st Arg - options
                            \$.extend(true, { lang: lang }, opts, mOpts || {}),
                            // 2nd Arg - before boot up function
                            function(fm, extraObj) {
                                // `init` event callback function
                                fm.bind('init', function() {
                                    // Optional for Japanese decoder \"encoding-japanese\"
                                    if (fm.lang === 'ja') {
                                        require(
                                            [ 'encoding-japanese' ],
                                            function(Encoding) {
                                                if (Encoding && Encoding.convert) {
                                                    fm.registRawStringDecoder(function(s) {
                                                        return Encoding.convert(s, {to:'UNICODE',type:'string'});
                                                    });
                                                }
                                            }
                                        );
                                    }
                                });
                            }
                        );
                    });
                } else {
                    alert('\"elFinderConfig\" object is wrong.');
                }
            });
        },

        // JavaScript loader (REQUIRED)
        load = function() {
            require([
                    'elfinder'
                    , 'extras/editors.default.min'               // load text, image editors
                    , 'elFinderConfig'
                    //\t, 'extras/quicklook.googledocs.min'          // optional preview for GoogleApps contents on the GoogleDrive volume
                ],
                start,
                function(error) {
                    alert(error.message);
                }
            );
        },

        // is IE8 or :? for determine the jQuery version to use (optional)
        old = (typeof window.addEventListener === 'undefined' && typeof document.getElementsByClassName === 'undefined')
            ||
            (!window.chrome && !document.unqueID && !window.opera && !window.sidebar && 'WebkitAppearance' in document.documentElement.style && document.body.style && typeof document.body.style.webkitFilter === 'undefined');

    // config of RequireJS (REQUIRED)
    require.config({
        baseUrl : \"{{ asset('bundles/fmelfinder/js') }}\",
        paths : {
            'jquery'   : '//cdnjs.cloudflare.com/ajax/libs/jquery/'+(old? '1.12.4' : jqver)+'/jquery.min',
            'jquery-ui': '//cdnjs.cloudflare.com/ajax/libs/jqueryui/'+uiver+'/jquery-ui.min',
            'elfinder' : 'elfinder.min',
            'encoding-japanese': '//cdn.rawgit.com/polygonplanet/encoding.js/1.0.26/encoding.min'
        },
        waitSeconds : 10 // optional
    });

    // load JavaScripts (REQUIRED)
    load();

})();
", "@FMElfinder/Elfinder/helper/main.js.twig", "C:\\wamp64\\www\\STAGIAIRES-GUINOT.COM\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Resources\\views\\Elfinder\\helper\\main.js.twig");
    }
}
