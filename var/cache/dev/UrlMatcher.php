<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admins' => [[['_route' => 'admins', '_controller' => 'App\\Controller\\AdminsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthentificationController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthentificationController::logout'], null, null, null, false, false, null]],
        '/contacts/formulaireContacts' => [[['_route' => 'formulaireContacts_index', '_controller' => 'App\\Controller\\ContactsController::formulaireContacts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contacts/nouveauContacts' => [[['_route' => 'nouveauContacts_index', '_controller' => 'App\\Controller\\ContactsController::nouveauContacts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'contacts_index', '_controller' => 'App\\Controller\\HomeController::contacts'], null, null, null, true, false, null]],
        '/mediats' => [[['_route' => 'mediats_index', '_controller' => 'App\\Controller\\MediatsController::index'], null, null, null, true, false, null]],
        '/mediats/formulaireMediats' => [[['_route' => 'formulaireMediats_index', '_controller' => 'App\\Controller\\MediatsController::formulaireMediats'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mediats/nouveauMediats' => [[['_route' => 'nouveauMediats_index', '_controller' => 'App\\Controller\\MediatsController::nouveauMediats'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mediatstemoignages' => [[['_route' => 'temoignages_index', '_controller' => 'App\\Controller\\MediatsController::temoignage'], null, ['GET' => 0], null, false, false, null]],
        '/messages' => [[['_route' => 'messages_index', '_controller' => 'App\\Controller\\MessagesController::index'], null, null, null, true, false, null]],
        '/messages/formulaireMessages' => [[['_route' => 'formulaireMessages_index', '_controller' => 'App\\Controller\\MessagesController::formulaireMessages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/nouveauMessages' => [[['_route' => 'nouveauMessage_index', '_controller' => 'App\\Controller\\MessagesController::nouveauMessages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register-admin' => [[['_route' => 'app_register_admin', '_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], null, null, null, false, false, null]],
        '/register-abonner' => [[['_route' => 'app_register_abonner', '_controller' => 'App\\Controller\\RegistrationController::registerAbonner'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::index'], null, ['GET' => 0], null, false, false, null]],
        '/formulaireUtilisateur' => [[['_route' => 'formulaireUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::formulaireUtilisateur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nouvelUtilisateur' => [[['_route' => 'nouvelUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::nouvelUtilisateur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/abonner' => [
            [['_route' => 'monEspacePersonel_index', '_controller' => 'App\\Controller\\UtilisateursController::monEspacePersonnel'], null, null, null, false, false, null],
            [['_route' => 'pageAccueilEspacePerso_index', '_controller' => 'App\\Controller\\UtilisateursController::pageAccueilEspacePersonnel'], null, null, null, false, false, null],
        ],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/contacts/(?'
                    .'|rechercheContacts/([^/]++)(*:208)'
                    .'|afficherContacts/([^/]++)(*:241)'
                    .'|modifierContacts/([^/]++)(*:274)'
                    .'|supprimerContacts/([^/]++)(*:308)'
                .')'
                .'|/m(?'
                    .'|e(?'
                        .'|diats/(?'
                            .'|rechercheMediats/([^/]++)(*:360)'
                            .'|afficherMediats/([^/]++)(*:392)'
                            .'|modifierMediats/([^/]++)(*:424)'
                            .'|supprimerMediats/([^/]++)(*:457)'
                        .')'
                        .'|ssages/(?'
                            .'|rechercheMessages/([^/]++)(*:502)'
                            .'|afficherMessage/([^/]++)(*:534)'
                            .'|modifierMessage/([^/]++)(*:566)'
                            .'|supprimerMessages/([^/]++)(*:600)'
                        .')'
                    .')'
                    .'|odifierUtilisateur/([^/]++)(*:637)'
                .')'
                .'|/rechercheUtilisateur/([^/]++)(*:676)'
                .'|/afficherUtilisateur/([^/]++)(*:713)'
                .'|/supprimerUtilisateur/([^/]++)(*:751)'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:800)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:843)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        208 => [[['_route' => 'rechercheContacts_index', '_controller' => 'App\\Controller\\ContactsController::rechercheContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        241 => [[['_route' => 'afficherContacts_index', '_controller' => 'App\\Controller\\ContactsController::afficherContacts'], ['id'], ['GET' => 0], null, false, true, null]],
        274 => [[['_route' => 'modifierContacts_index', '_controller' => 'App\\Controller\\ContactsController::modifierContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        308 => [[['_route' => 'supprimerContacts_index', '_controller' => 'App\\Controller\\ContactsController::supprimerContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        360 => [[['_route' => 'rechercheMediats_index', '_controller' => 'App\\Controller\\MediatsController::rechercheMediats'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        392 => [[['_route' => 'afficherMediats_index', '_controller' => 'App\\Controller\\MediatsController::afficherMediats'], ['id'], ['GET' => 0], null, false, true, null]],
        424 => [[['_route' => 'modifierMediats_index', '_controller' => 'App\\Controller\\MediatsController::modifierMediats'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        457 => [[['_route' => 'supprimerMediats_index', '_controller' => 'App\\Controller\\MediatsController::supprimerMediats'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        502 => [[['_route' => 'rechercheMessages_index', '_controller' => 'App\\Controller\\MessagesController::rechercheMessages'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        534 => [[['_route' => 'afficherMessage_index', '_controller' => 'App\\Controller\\MessagesController::afficherMessage'], ['id'], ['GET' => 0], null, false, true, null]],
        566 => [[['_route' => 'modifierMessage_index', '_controller' => 'App\\Controller\\MessagesController::modifierMessage'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        600 => [[['_route' => 'supprimerMessages_index', '_controller' => 'App\\Controller\\MessagesController::supprimerMessages'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        637 => [[['_route' => 'modifierUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::modifierUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        676 => [[['_route' => 'rechercheUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::rechercheUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        713 => [[['_route' => 'afficherUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::afficherUtilisateur'], ['id'], ['GET' => 0], null, false, true, null]],
        751 => [[['_route' => 'supprimerUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::supprimerUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        800 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        843 => [
            [['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
