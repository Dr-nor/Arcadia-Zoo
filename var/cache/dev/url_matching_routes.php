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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/animal' => [[['_route' => 'app_animal_index', '_controller' => 'App\\Controller\\Admin\\AnimalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/animal/new' => [[['_route' => 'app_animal_new', '_controller' => 'App\\Controller\\Admin\\AnimalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/habitat' => [[['_route' => 'app_habitat_index', '_controller' => 'App\\Controller\\Admin\\HabitatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/habitat/new' => [[['_route' => 'app_habitat_new', '_controller' => 'App\\Controller\\Admin\\HabitatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/opening' => [[['_route' => 'app_opening_index', '_controller' => 'App\\Controller\\Admin\\OpeningController::index'], null, ['GET' => 0], null, true, false, null]],
        '/opening/new' => [[['_route' => 'app_opening_new', '_controller' => 'App\\Controller\\Admin\\OpeningController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/race' => [[['_route' => 'app_race_index', '_controller' => 'App\\Controller\\Admin\\RaceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/race/new' => [[['_route' => 'app_race_new', '_controller' => 'App\\Controller\\Admin\\RaceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/service' => [[['_route' => 'app_service_index', '_controller' => 'App\\Controller\\Admin\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/service/new' => [[['_route' => 'app_service_new', '_controller' => 'App\\Controller\\Admin\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/testimonial' => [[['_route' => 'app_testimonial_index', '_controller' => 'App\\Controller\\Admin\\TestimonialController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/testimonial/new' => [[['_route' => 'app_testimonial_new', '_controller' => 'App\\Controller\\Admin\\TestimonialController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\FrontController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|animal/(?'
                        .'|([^/]++)(?'
                            .'|(*:233)'
                            .'|/edit(*:246)'
                            .'|(*:254)'
                        .')'
                        .'|delete/image/([^/]++)(*:284)'
                    .')'
                    .'|habitat/(?'
                        .'|([^/]++)(?'
                            .'|(*:315)'
                            .'|/edit(*:328)'
                            .'|(*:336)'
                        .')'
                        .'|delete/image/([^/]++)(*:366)'
                    .')'
                    .'|race/([^/]++)(?'
                        .'|(*:391)'
                        .'|/edit(*:404)'
                        .'|(*:412)'
                    .')'
                    .'|service/(?'
                        .'|([^/]++)(?'
                            .'|(*:443)'
                            .'|/edit(*:456)'
                            .'|(*:464)'
                        .')'
                        .'|delete/image/([^/]++)(*:494)'
                    .')'
                    .'|testimonial/([^/]++)(?'
                        .'|(*:526)'
                        .'|/edit(*:539)'
                        .'|(*:547)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:572)'
                        .'|/edit(*:585)'
                        .'|(*:593)'
                    .')'
                .')'
                .'|/opening/([^/]++)(?'
                    .'|(*:623)'
                    .'|/edit(*:636)'
                    .'|(*:644)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        233 => [[['_route' => 'app_animal_show', '_controller' => 'App\\Controller\\Admin\\AnimalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'app_animal_edit', '_controller' => 'App\\Controller\\Admin\\AnimalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        254 => [[['_route' => 'app_animal_delete', '_controller' => 'App\\Controller\\Admin\\AnimalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        284 => [[['_route' => 'app_animal_delete_image', '_controller' => 'App\\Controller\\Admin\\AnimalController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        315 => [[['_route' => 'app_habitat_show', '_controller' => 'App\\Controller\\Admin\\HabitatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        328 => [[['_route' => 'app_habitat_edit', '_controller' => 'App\\Controller\\Admin\\HabitatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        336 => [[['_route' => 'app_habitat_delete', '_controller' => 'App\\Controller\\Admin\\HabitatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        366 => [[['_route' => 'app_habitat_delete_image', '_controller' => 'App\\Controller\\Admin\\HabitatController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        391 => [[['_route' => 'app_race_show', '_controller' => 'App\\Controller\\Admin\\RaceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        404 => [[['_route' => 'app_race_edit', '_controller' => 'App\\Controller\\Admin\\RaceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [[['_route' => 'app_race_delete', '_controller' => 'App\\Controller\\Admin\\RaceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        443 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\Admin\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        456 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\Admin\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        464 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\Admin\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        494 => [[['_route' => 'app_service_delete_image', '_controller' => 'App\\Controller\\Admin\\ServiceController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        526 => [[['_route' => 'app_testimonial_show', '_controller' => 'App\\Controller\\Admin\\TestimonialController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        539 => [[['_route' => 'app_testimonial_edit', '_controller' => 'App\\Controller\\Admin\\TestimonialController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        547 => [[['_route' => 'app_testimonial_delete', '_controller' => 'App\\Controller\\Admin\\TestimonialController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        572 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        585 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        593 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        623 => [[['_route' => 'app_opening_show', '_controller' => 'App\\Controller\\Admin\\OpeningController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        636 => [[['_route' => 'app_opening_edit', '_controller' => 'App\\Controller\\Admin\\OpeningController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        644 => [
            [['_route' => 'app_opening_delete', '_controller' => 'App\\Controller\\Admin\\OpeningController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
