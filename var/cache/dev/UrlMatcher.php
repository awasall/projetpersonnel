<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/compte' => [[['_route' => 'compte', '_controller' => 'App\\Controller\\CompteController::compte'], null, ['POST' => 0], null, false, false, null]],
        '/api/rechercheCompte' => [[['_route' => 'rechercheComptecompte', '_controller' => 'App\\Controller\\CompteController::recherchCompte'], null, ['POST' => 0], null, false, false, null]],
        '/api/listeCompte' => [[['_route' => 'list_compte', '_controller' => 'App\\Controller\\CompteController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/listecompP' => [[['_route' => 'listcompP', '_controller' => 'App\\Controller\\CompteController::listCompteP'], null, ['GET' => 0], null, false, false, null]],
        '/api/depot' => [[['_route' => 'depot', '_controller' => 'App\\Controller\\DepotController::versement'], null, ['POST' => 0], null, false, false, null]],
        '/api/partenaire' => [[['_route' => 'partenaire', '_controller' => 'App\\Controller\\PartenaireController::ajout'], null, ['POST' => 0], null, false, false, null]],
        '/api/listepartenaire' => [[['_route' => 'list_partenaire', '_controller' => 'App\\Controller\\PartenaireController::list'], null, ['GET' => 0], null, false, false, null]],
        '/api/rechercheparte' => [[['_route' => 'rechercheParte', '_controller' => 'App\\Controller\\PartenaireController::recherchParte'], null, ['POST' => 0], null, false, false, null]],
        '/api/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\RegistrationController::login'], null, ['POST' => 0], null, false, false, null]],
        '/api/listeuser' => [[['_route' => 'list_user', '_controller' => 'App\\Controller\\RegistrationController::list'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'transaction_index', '_controller' => 'App\\Controller\\TransactionController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/transaction' => [[['_route' => 'transaction', '_controller' => 'App\\Controller\\TransactionController::new'], null, ['POST' => 0], null, false, false, null]],
        '/api/retrait' => [[['_route' => 'statut', '_controller' => 'App\\Controller\\TransactionController::retrait'], null, ['POST' => 0], null, false, false, null]],
        '/api/rechercheCode' => [[['_route' => 'rechercheCode', '_controller' => 'App\\Controller\\TransactionController::recherchCode'], null, ['POST' => 0], null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/api/(?'
                    .'|partenaire(?'
                        .'|/([^/]++)(*:72)'
                        .'|statut/([^/]++)(*:94)'
                    .')'
                    .'|statut/([^/]++)(*:117)'
                    .'|affectation/([^/]++)(*:145)'
                .')'
                .'|/([^/]++)(*:163)'
                .'|/api(?'
                    .'|/listeoperation/([^/]++)(*:202)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:238)'
                    .'|/(?'
                        .'|d(?'
                            .'|ocs(?:\\.([^/]++))?(*:272)'
                            .'|epots(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:306)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:344)'
                                .')'
                            .')'
                        .')'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:383)'
                        .'|t(?'
                            .'|ransactions(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:427)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:465)'
                                .')'
                            .')'
                            .'|arifs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:501)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:539)'
                                .')'
                            .')'
                        .')'
                        .'|partenaires(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:582)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:620)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'updatepartenaire', '_controller' => 'App\\Controller\\PartenaireController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        94 => [[['_route' => 'partenairestatut', '_controller' => 'App\\Controller\\PartenaireController::statut'], ['id'], ['GET' => 0], null, false, true, null]],
        117 => [[['_route' => 'statutt', '_controller' => 'App\\Controller\\RegistrationController::statut'], ['id'], ['GET' => 0], null, false, true, null]],
        145 => [[['_route' => 'affectation', '_controller' => 'App\\Controller\\RegistrationController::affectation'], ['id'], ['PUT' => 0], null, false, true, null]],
        163 => [[['_route' => 'transaction_show', '_controller' => 'App\\Controller\\TransactionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'list_operation', '_controller' => 'App\\Controller\\TransactionController::list'], ['id'], ['POST' => 0], null, false, true, null]],
        238 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        272 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        306 => [
            [['_route' => 'api_depots_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_depots_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        344 => [
            [['_route' => 'api_depots_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_depots_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_depots_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Depot', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        383 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        427 => [
            [['_route' => 'api_transactions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        465 => [
            [['_route' => 'api_transactions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_transactions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_transactions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Transaction', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        501 => [
            [['_route' => 'api_tarifs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tarif', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tarifs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tarif', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        539 => [
            [['_route' => 'api_tarifs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tarif', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_tarifs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tarif', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_tarifs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Tarif', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        582 => [
            [['_route' => 'api_partenaires_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        620 => [
            [['_route' => 'api_partenaires_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_partenaires_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Partenaire', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
