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
        '/admin/dailydiet' => [[['_route' => 'app_dailydiet_index', '_controller' => 'App\\Controller\\Admin\\DailydietController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/dailydiet/new' => [[['_route' => 'app_dailydiet_new', '_controller' => 'App\\Controller\\Admin\\DailydietController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/employe/dashboard' => [[['_route' => 'app_employe_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::employe'], null, null, null, false, false, null]],
        '/user/dashboard' => [[['_route' => 'app_user_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::user'], null, null, null, false, false, null]],
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
        '/admin/vetreport' => [[['_route' => 'app_vetreport_index', '_controller' => 'App\\Controller\\Admin\\VetreportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/vetreport/new' => [[['_route' => 'app_vetreport_new', '_controller' => 'App\\Controller\\Admin\\VetreportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/animals' => [[['_route' => 'animal_index', '_controller' => 'App\\Controller\\AnimalsController::index'], null, null, null, true, false, null]],
        '/employe/dailydiet' => [[['_route' => 'employe_dailydiet_index', '_controller' => 'App\\Controller\\Employe\\DailydietController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employe/dailydiet/new' => [[['_route' => 'employe_dailydiet_new', '_controller' => 'App\\Controller\\Employe\\DailydietController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe/service' => [[['_route' => 'employe_service_index', '_controller' => 'App\\Controller\\Employe\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employe/service/new' => [[['_route' => 'employe_service_new', '_controller' => 'App\\Controller\\Employe\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/employe/testimonial' => [[['_route' => 'employe_testimonial_index', '_controller' => 'App\\Controller\\Employe\\TestimonialController::index'], null, ['GET' => 0], null, true, false, null]],
        '/employe/testimonial/new' => [[['_route' => 'employe_testimonial_new', '_controller' => 'App\\Controller\\Employe\\TestimonialController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\FrontController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\FrontController::contact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/habitats' => [[['_route' => 'habitats_index', '_controller' => 'App\\Controller\\HabitatsController::index'], null, null, null, true, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'services_index', '_controller' => 'App\\Controller\\ServicesController::index'], null, null, null, true, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|animal/(?'
                            .'|([^/]++)(?'
                                .'|(*:236)'
                                .'|/edit(*:249)'
                                .'|(*:257)'
                            .')'
                            .'|delete/image/([^/]++)(*:287)'
                        .')'
                        .'|dailydiet/([^/]++)(?'
                            .'|(*:317)'
                            .'|/edit(*:330)'
                            .'|(*:338)'
                        .')'
                        .'|habitat/(?'
                            .'|([^/]++)(?'
                                .'|(*:369)'
                                .'|/edit(*:382)'
                                .'|(*:390)'
                            .')'
                            .'|delete/image/([^/]++)(*:420)'
                        .')'
                        .'|race/([^/]++)(?'
                            .'|(*:445)'
                            .'|/edit(*:458)'
                            .'|(*:466)'
                        .')'
                        .'|service/(?'
                            .'|([^/]++)(?'
                                .'|(*:497)'
                                .'|/edit(*:510)'
                                .'|(*:518)'
                            .')'
                            .'|delete/image/([^/]++)(*:548)'
                        .')'
                        .'|testimonial/([^/]++)(?'
                            .'|(*:580)'
                            .'|/edit(*:593)'
                            .'|(*:601)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:626)'
                            .'|/edit(*:639)'
                            .'|(*:647)'
                        .')'
                        .'|vetreport/([^/]++)(?'
                            .'|(*:677)'
                            .'|/edit(*:690)'
                            .'|(*:698)'
                        .')'
                    .')'
                    .'|nimals/([^/]++)(*:723)'
                .')'
                .'|/opening/([^/]++)(?'
                    .'|(*:752)'
                    .'|/edit(*:765)'
                    .'|(*:773)'
                .')'
                .'|/employe/(?'
                    .'|dailydiet/([^/]++)(?'
                        .'|(*:815)'
                        .'|/edit(*:828)'
                        .'|(*:836)'
                    .')'
                    .'|service/(?'
                        .'|([^/]++)(?'
                            .'|(*:867)'
                            .'|/edit(*:880)'
                            .'|(*:888)'
                        .')'
                        .'|delete/image/([^/]++)(*:918)'
                    .')'
                    .'|testimonial/([^/]++)(?'
                        .'|(*:950)'
                        .'|/edit(*:963)'
                        .'|(*:971)'
                    .')'
                .')'
                .'|/habitats/([^/]++)(*:999)'
                .'|/services/([^/]++)(*:1025)'
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
        236 => [[['_route' => 'app_animal_show', '_controller' => 'App\\Controller\\Admin\\AnimalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'app_animal_edit', '_controller' => 'App\\Controller\\Admin\\AnimalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [[['_route' => 'app_animal_delete', '_controller' => 'App\\Controller\\Admin\\AnimalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        287 => [[['_route' => 'app_animal_delete_image', '_controller' => 'App\\Controller\\Admin\\AnimalController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        317 => [[['_route' => 'app_dailydiet_show', '_controller' => 'App\\Controller\\Admin\\DailydietController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        330 => [[['_route' => 'app_dailydiet_edit', '_controller' => 'App\\Controller\\Admin\\DailydietController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        338 => [[['_route' => 'app_dailydiet_delete', '_controller' => 'App\\Controller\\Admin\\DailydietController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        369 => [[['_route' => 'app_habitat_show', '_controller' => 'App\\Controller\\Admin\\HabitatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        382 => [[['_route' => 'app_habitat_edit', '_controller' => 'App\\Controller\\Admin\\HabitatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        390 => [[['_route' => 'app_habitat_delete', '_controller' => 'App\\Controller\\Admin\\HabitatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        420 => [[['_route' => 'app_habitat_delete_image', '_controller' => 'App\\Controller\\Admin\\HabitatController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        445 => [[['_route' => 'app_race_show', '_controller' => 'App\\Controller\\Admin\\RaceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        458 => [[['_route' => 'app_race_edit', '_controller' => 'App\\Controller\\Admin\\RaceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        466 => [[['_route' => 'app_race_delete', '_controller' => 'App\\Controller\\Admin\\RaceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        497 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\Admin\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        510 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\Admin\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        518 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\Admin\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        548 => [[['_route' => 'app_service_delete_image', '_controller' => 'App\\Controller\\Admin\\ServiceController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        580 => [[['_route' => 'app_testimonial_show', '_controller' => 'App\\Controller\\Admin\\TestimonialController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        593 => [[['_route' => 'app_testimonial_edit', '_controller' => 'App\\Controller\\Admin\\TestimonialController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        601 => [[['_route' => 'app_testimonial_delete', '_controller' => 'App\\Controller\\Admin\\TestimonialController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        626 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        639 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        647 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        677 => [[['_route' => 'app_vetreport_show', '_controller' => 'App\\Controller\\Admin\\VetreportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        690 => [[['_route' => 'app_vetreport_edit', '_controller' => 'App\\Controller\\Admin\\VetreportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        698 => [[['_route' => 'app_vetreport_delete', '_controller' => 'App\\Controller\\Admin\\VetreportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        723 => [[['_route' => 'animal_details', '_controller' => 'App\\Controller\\AnimalsController::details'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        752 => [[['_route' => 'app_opening_show', '_controller' => 'App\\Controller\\Admin\\OpeningController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        765 => [[['_route' => 'app_opening_edit', '_controller' => 'App\\Controller\\Admin\\OpeningController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        773 => [[['_route' => 'app_opening_delete', '_controller' => 'App\\Controller\\Admin\\OpeningController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        815 => [[['_route' => 'employe_dailydiet_show', '_controller' => 'App\\Controller\\Employe\\DailydietController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        828 => [[['_route' => 'employe_dailydiet_edit', '_controller' => 'App\\Controller\\Employe\\DailydietController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        836 => [[['_route' => 'employe_dailydiet_delete', '_controller' => 'App\\Controller\\Employe\\DailydietController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        867 => [[['_route' => 'employe_service_show', '_controller' => 'App\\Controller\\Employe\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        880 => [[['_route' => 'employe_service_edit', '_controller' => 'App\\Controller\\Employe\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        888 => [[['_route' => 'employe_service_delete', '_controller' => 'App\\Controller\\Employe\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        918 => [[['_route' => 'employe_service_delete_image', '_controller' => 'App\\Controller\\Employe\\ServiceController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        950 => [[['_route' => 'employe_testimonial_show', '_controller' => 'App\\Controller\\Employe\\TestimonialController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        963 => [[['_route' => 'employe_testimonial_edit', '_controller' => 'App\\Controller\\Employe\\TestimonialController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        971 => [[['_route' => 'employe_testimonial_delete', '_controller' => 'App\\Controller\\Employe\\TestimonialController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        999 => [[['_route' => 'habitats_details', '_controller' => 'App\\Controller\\HabitatsController::details'], ['slug'], null, null, false, true, null]],
        1025 => [
            [['_route' => 'services_details', '_controller' => 'App\\Controller\\ServicesController::details'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
