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
        '/activites' => [[['_route' => 'activites_index', '_controller' => 'App\\Controller\\ActivitesController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/activites/formulaireActivites' => [[['_route' => 'formulaireActivites_index', '_controller' => 'App\\Controller\\ActivitesController::formulaireActivites'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/activites/nouvelleActivites' => [[['_route' => 'nouvelleActivites_index', '_controller' => 'App\\Controller\\ActivitesController::nouvelleActivites'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admins' => [[['_route' => 'admins', '_controller' => 'App\\Controller\\AdminsController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthentificationController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthentificationController::logout'], null, null, null, false, false, null]],
        '/categories' => [[['_route' => 'app_categories', '_controller' => 'App\\Controller\\CategoriesController::index'], null, null, null, false, false, null]],
        '/contacts' => [[['_route' => 'contacts_index', '_controller' => 'App\\Controller\\ContactsController::index'], null, null, null, true, false, null]],
        '/contacts/formulaireContacts' => [[['_route' => 'formulaireContacts_index', '_controller' => 'App\\Controller\\ContactsController::formulaireContacts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contacts/nouveauContacts' => [[['_route' => 'nouveauContacts_index', '_controller' => 'App\\Controller\\ContactsController::nouveauContacts'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cours' => [[['_route' => 'cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/cours/formulaireCours' => [[['_route' => 'formulaireCours_index', '_controller' => 'App\\Controller\\CoursController::formulaireCours'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cours/nouveauCours' => [[['_route' => 'nouveauCours_index', '_controller' => 'App\\Controller\\CoursController::nouveauCours'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formations' => [[['_route' => 'formations_index', '_controller' => 'App\\Controller\\FormationsController::index'], null, null, null, true, false, null]],
        '/formations/formulaireFormations' => [[['_route' => 'formulaireFormations_index', '_controller' => 'App\\Controller\\FormationsController::formulaireFormations'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formations/nouvelleFormation' => [[['_route' => 'nouvelleFormation_index', '_controller' => 'App\\Controller\\FormationsController::nouvelleFormation'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formationspageAccueilBIOInformatique' => [[['_route' => 'pageAccueilBIOInformatique_index', '_controller' => 'App\\Controller\\FormationsController::pageAccueilBIOInformatique'], null, ['GET' => 0], null, false, false, null]],
        '/formationsformationPHP' => [[['_route' => 'formationPHP_index', '_controller' => 'App\\Controller\\FormationsController::formationPHP'], null, ['GET' => 0], null, false, false, null]],
        '/formationsformationJAVA' => [[['_route' => 'formationJAVA_index', '_controller' => 'App\\Controller\\FormationsController::formationJAVA'], null, ['GET' => 0], null, false, false, null]],
        '/formationsformationDeveloppeurWEB' => [[['_route' => 'developpeurWEB_index', '_controller' => 'App\\Controller\\FormationsController::developpeurWEB'], null, ['GET' => 0], null, false, false, null]],
        '/formationsformationSymfony' => [[['_route' => 'formationSymfony_index', '_controller' => 'App\\Controller\\FormationsController::formationSymfony'], null, ['GET' => 0], null, false, false, null]],
        '/formationslisteFormations' => [[['_route' => 'listeDesFormations_index', '_controller' => 'App\\Controller\\FormationsController::listeDesFormations'], null, ['GET' => 0], null, false, false, null]],
        '/formationsaProposFormations' => [[['_route' => 'aProposBioInformatique_index', '_controller' => 'App\\Controller\\FormationsController::aProposBioInformatique'], null, ['GET' => 0], null, false, false, null]],
        '/formationscoursEnVideo' => [[['_route' => 'coursEnVideo_index', '_controller' => 'App\\Controller\\FormationsController::coursEnVideo'], null, ['GET' => 0], null, false, false, null]],
        '/formationslisteDesCours' => [[['_route' => 'listeDesCours_index', '_controller' => 'App\\Controller\\FormationsController::listeDesCours'], null, ['GET' => 0], null, false, false, null]],
        '/' => [
            [['_route' => 'accueil_index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/langages' => [[['_route' => 'langages_index', '_controller' => 'App\\Controller\\LangagesController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/langages/formulaireLangages' => [[['_route' => 'formulaireLangages_index', '_controller' => 'App\\Controller\\LangagesController::formulaireLangages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/langages/nouveauLangage' => [[['_route' => 'nouveauLangage_index', '_controller' => 'App\\Controller\\LangagesController::nouveauLangage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/medias' => [[['_route' => 'medias_index', '_controller' => 'App\\Controller\\MediasController::index'], null, null, null, true, false, null]],
        '/medias/formulaireMedias' => [[['_route' => 'formulaireMedias_index', '_controller' => 'App\\Controller\\MediasController::formulaireMedias'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/medias/nouveauMedias' => [[['_route' => 'nouveauMedias_index', '_controller' => 'App\\Controller\\MediasController::nouveauMedias'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/mediaspageAccueilGuinot' => [[['_route' => 'pageAccueilGuinot_index', '_controller' => 'App\\Controller\\MediasController::pageAccueilGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasmotDuPresidentDeGuinot' => [[['_route' => 'motDuPresidentDeGuinot_index', '_controller' => 'App\\Controller\\MediasController::motDuPresidentDeGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediashistoriqueDeGuinot' => [[['_route' => 'historiqueGuinot_index', '_controller' => 'App\\Controller\\MediasController::historiqueGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasintroductionSurGuinot' => [[['_route' => 'introductionGuinot_index', '_controller' => 'App\\Controller\\MediasController::introductionGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationMasseurGuinot' => [[['_route' => 'masseurGuinot_index', '_controller' => 'App\\Controller\\MediasController::masseurGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationGuinot' => [[['_route' => 'formationGuinot_index', '_controller' => 'App\\Controller\\MediasController::formationGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationDeveloppeurGuinot' => [[['_route' => 'developpeurGuinot_index', '_controller' => 'App\\Controller\\MediasController::developpeurGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediasformationConseillerGuinot' => [[['_route' => 'conseillerGuinot_index', '_controller' => 'App\\Controller\\MediasController::conseillerGuinot'], null, ['GET' => 0], null, false, false, null]],
        '/mediastemoignages' => [[['_route' => 'temoignages_index', '_controller' => 'App\\Controller\\MediasController::temoignages'], null, ['GET' => 0], null, false, false, null]],
        '/menu/bio/ge/soft' => [[['_route' => 'app_menu_bio_ge_soft', '_controller' => 'App\\Controller\\MenuBioGeSoftController::index'], null, null, null, false, false, null]],
        '/messages' => [[['_route' => 'message_index', '_controller' => 'App\\Controller\\MessagesController::index'], null, null, null, true, false, null]],
        '/messagesdixDernierMessages' => [[['_route' => 'dixDernierMessages_index', '_controller' => 'App\\Controller\\MessagesController::dixDernierMessages'], null, null, null, false, false, null]],
        '/messages/formulaireMessages' => [[['_route' => 'formulaireMessages_index', '_controller' => 'App\\Controller\\MessagesController::formulaireMessages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/nouveauMessages' => [[['_route' => 'nouveauMessage_index', '_controller' => 'App\\Controller\\MessagesController::nouveauMessages'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/messagesEnvoyer' => [[['_route' => 'messagesEnvoyer_index', '_controller' => 'App\\Controller\\MessagesController::messageEnvoyer'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/messages/messagesRecu' => [[['_route' => 'messagesRecu_index', '_controller' => 'App\\Controller\\MessagesController::messageReçu'], null, null, null, false, false, null]],
        '/messages/listeMessagesEnvoyer' => [[['_route' => 'listeMessagesEnvoyer_index', '_controller' => 'App\\Controller\\MessagesController::listeMessagesEnvoyer'], null, null, null, false, false, null]],
        '/messages/listeMessagesRecu' => [[['_route' => 'listeMessagesRecu_index', '_controller' => 'App\\Controller\\MessagesController::listeMessagesRecu'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/register-admin' => [[['_route' => 'app_register_admin_index', '_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], null, null, null, false, false, null]],
        '/register-admin-guinot' => [[['_route' => 'app_register_admin_guinot_index', '_controller' => 'App\\Controller\\RegistrationController::registerAdminGuinot'], null, null, null, false, false, null]],
        '/register-admin-biogesoft' => [[['_route' => 'app_register_admin_biogesoft_index', '_controller' => 'App\\Controller\\RegistrationController::registerAdminBiogesoft'], null, null, null, false, false, null]],
        '/register-stagiaires' => [[['_route' => 'app_register_stagiaires_index', '_controller' => 'App\\Controller\\RegistrationController::registerStagiaire'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'utilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::index'], null, ['GET' => 0], null, false, false, null]],
        '/formulaireUtilisateur' => [[['_route' => 'formulaireUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::formulaireUtilisateur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nouvelUtilisateur' => [[['_route' => 'nouvelUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::nouvelUtilisateur'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/stagiaire' => [[['_route' => 'pageAccueilEspacePerso_index', '_controller' => 'App\\Controller\\UtilisateursController::pageAccueilEspacePersonnel'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/destinataire' => [[['_route' => 'destinataire_index', '_controller' => 'App\\Controller\\UtilisateursController::destinataire'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
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
                .'|/a(?'
                    .'|ctivites/(?'
                        .'|afficherActivites/([^/]++)(*:212)'
                        .'|modifierActivites/([^/]++)(*:246)'
                        .'|supprimerActivites/([^/]++)(*:281)'
                    .')'
                    .'|fficherUtilisateur/([^/]++)(*:317)'
                .')'
                .'|/co(?'
                    .'|ntacts/(?'
                        .'|afficherContacts/([^/]++)(*:367)'
                        .'|modifierContacts/([^/]++)(*:400)'
                        .'|supprimerContacts/([^/]++)(*:434)'
                    .')'
                    .'|urs/(?'
                        .'|afficherCours/([^/]++)(*:472)'
                        .'|modifierCours/([^/]++)(*:502)'
                        .'|supprimerCours/([^/]++)(*:533)'
                    .')'
                .')'
                .'|/formations/(?'
                    .'|afficherFormations/([^/]++)(*:585)'
                    .'|modifierFormations/([^/]++)(*:620)'
                    .'|supprimerFormations/([^/]++)(*:656)'
                .')'
                .'|/langages/(?'
                    .'|afficherLangage/([^/]++)(*:702)'
                    .'|modifierLangage/([^/]++)(*:734)'
                    .'|supprimerLangage/([^/]++)(*:767)'
                .')'
                .'|/m(?'
                    .'|e(?'
                        .'|dias(?'
                            .'|afficherMedias/([^/]++)(*:815)'
                            .'|/(?'
                                .'|modifierMedias/([^/]++)(*:850)'
                                .'|supprimerMedias/([^/]++)(*:882)'
                            .')'
                        .')'
                        .'|ssages/(?'
                            .'|afficherMessage/([^/]++)(*:926)'
                            .'|m(?'
                                .'|odifierMessages/([^/]++)(*:962)'
                                .'|essagesLu/([^/]++)(*:988)'
                            .')'
                            .'|supprimerMessages/([^/]++)(*:1023)'
                        .')'
                    .')'
                    .'|odifierUtilisateur/([^/]++)(*:1061)'
                .')'
                .'|/rechercheUtilisateur/([^/]++)(*:1101)'
                .'|/supprimerUtilisateur/([^/]++)(*:1140)'
                .'|/e(?'
                    .'|xpediteur/([^/]++)(*:1172)'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:1217)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:1261)'
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
        212 => [[['_route' => 'afficherActivites_index', '_controller' => 'App\\Controller\\ActivitesController::afficherActivites'], ['id'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'modifierActivites_index', '_controller' => 'App\\Controller\\ActivitesController::modifierActivites'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        281 => [[['_route' => 'supprimerActivites_index', '_controller' => 'App\\Controller\\ActivitesController::supprimerActivites'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        317 => [[['_route' => 'afficherUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::afficherUtilisateur'], ['id'], ['GET' => 0], null, false, true, null]],
        367 => [[['_route' => 'afficherContacts_index', '_controller' => 'App\\Controller\\ContactsController::afficherContacts'], ['id'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => 'modifierContacts_index', '_controller' => 'App\\Controller\\ContactsController::modifierContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        434 => [[['_route' => 'supprimerContacts_index', '_controller' => 'App\\Controller\\ContactsController::supprimerContacts'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        472 => [[['_route' => 'afficherCours_index', '_controller' => 'App\\Controller\\CoursController::afficherCours'], ['id'], ['GET' => 0], null, false, true, null]],
        502 => [[['_route' => 'modifierCours_index', '_controller' => 'App\\Controller\\CoursController::modifierCours'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        533 => [[['_route' => 'supprimerCours_index', '_controller' => 'App\\Controller\\CoursController::supprimerCours'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        585 => [[['_route' => 'afficherFormations_index', '_controller' => 'App\\Controller\\FormationsController::afficherFormations'], ['id'], ['GET' => 0], null, false, true, null]],
        620 => [[['_route' => 'modifierFormations_index', '_controller' => 'App\\Controller\\FormationsController::modifierFormations'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        656 => [[['_route' => 'supprimerFormations_index', '_controller' => 'App\\Controller\\FormationsController::supprimerFormations'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        702 => [[['_route' => 'afficherLangage_index', '_controller' => 'App\\Controller\\LangagesController::afficherLangage'], ['id'], ['GET' => 0], null, false, true, null]],
        734 => [[['_route' => 'modifierLangage_index', '_controller' => 'App\\Controller\\LangagesController::modifierLangage'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        767 => [[['_route' => 'supprimerLangage_index', '_controller' => 'App\\Controller\\LangagesController::supprimerLangage'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        815 => [[['_route' => 'afficherMedias_index', '_controller' => 'App\\Controller\\MediasController::afficherMedias'], ['id'], ['GET' => 0], null, false, true, null]],
        850 => [[['_route' => 'modifierMedias_index', '_controller' => 'App\\Controller\\MediasController::modifierMedias'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        882 => [[['_route' => 'supprimerMedias_index', '_controller' => 'App\\Controller\\MediasController::supprimerMedias'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        926 => [[['_route' => 'afficherMessage_index', '_controller' => 'App\\Controller\\MessagesController::afficherMessage'], ['id'], ['GET' => 0], null, false, true, null]],
        962 => [[['_route' => 'modifierMessage_index', '_controller' => 'App\\Controller\\MessagesController::modifierMessages'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        988 => [[['_route' => 'messagesLu_index', '_controller' => 'App\\Controller\\MessagesController::messageLu'], ['id'], null, null, false, true, null]],
        1023 => [[['_route' => 'supprimerMessage_index', '_controller' => 'App\\Controller\\MessagesController::supprimerMessages'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1061 => [[['_route' => 'modifierUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::modifierUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1101 => [[['_route' => 'rechercheUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::rechercheUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1140 => [[['_route' => 'supprimerUtilisateur_index', '_controller' => 'App\\Controller\\UtilisateursController::supprimerUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1172 => [[['_route' => 'expediteur_index', '_controller' => 'App\\Controller\\UtilisateursController::expediteur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1217 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        1261 => [
            [['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
