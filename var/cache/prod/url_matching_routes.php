<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/animal' => [[['_route' => 'app_animal_index', '_controller' => 'App\\Controller\\Admin\\AnimalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/animal/new' => [[['_route' => 'app_animal_new', '_controller' => 'App\\Controller\\Admin\\AnimalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dailydiet' => [[['_route' => 'app_dailydiet_index', '_controller' => 'App\\Controller\\Admin\\DailydietController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/dailydiet/new' => [[['_route' => 'app_dailydiet_new', '_controller' => 'App\\Controller\\Admin\\DailydietController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/employe/dashboard' => [[['_route' => 'app_employe_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::employe'], null, null, null, false, false, null]],
        '/user/dashboard' => [[['_route' => 'app_user_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::user'], null, null, null, false, false, null]],
        '/veterinary/dashboard' => [[['_route' => 'app_veterinary_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::veterinary'], null, null, null, false, false, null]],
        '/admin/habitat' => [[['_route' => 'app_habitat_index', '_controller' => 'App\\Controller\\Admin\\HabitatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/habitat/new' => [[['_route' => 'app_habitat_new', '_controller' => 'App\\Controller\\Admin\\HabitatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/habitatreport' => [[['_route' => 'app_habitatreport_index', '_controller' => 'App\\Controller\\Admin\\HabitatreportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/habitatreport/new' => [[['_route' => 'app_habitatreport_new', '_controller' => 'App\\Controller\\Admin\\HabitatreportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/opening' => [[['_route' => 'app_opening_index', '_controller' => 'App\\Controller\\Admin\\OpeningController::index'], null, ['GET' => 0], null, true, false, null]],
        '/opening/new' => [[['_route' => 'app_opening_new', '_controller' => 'App\\Controller\\Admin\\OpeningController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/editpassword' => [[['_route' => 'app_editpass', '_controller' => 'App\\Controller\\Admin\\ProfileController::editpass'], null, null, null, false, false, null]],
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
        '/veterinary/dailydiet' => [[['_route' => 'vet_dailydiet_index', '_controller' => 'App\\Controller\\Veterinary\\DailydietController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veterinary/habitatreport' => [[['_route' => 'vet_habitatreport_index', '_controller' => 'App\\Controller\\Veterinary\\HabitatreportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veterinary/habitatreport/new' => [[['_route' => 'vet_habitatreport_new', '_controller' => 'App\\Controller\\Veterinary\\HabitatreportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/veterinary/vetreport' => [[['_route' => 'vet_vetreport_index', '_controller' => 'App\\Controller\\Veterinary\\VetreportController::index'], null, ['GET' => 0], null, true, false, null]],
        '/veterinary/vetreport/new' => [[['_route' => 'vet_vetreport_new', '_controller' => 'App\\Controller\\Veterinary\\VetreportController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|animal/(?'
                            .'|([^/]++)(?'
                                .'|(*:41)'
                                .'|/edit(*:53)'
                                .'|(*:60)'
                            .')'
                            .'|delete/image/([^/]++)(*:89)'
                        .')'
                        .'|dailydiet/([^/]++)(?'
                            .'|(*:118)'
                            .'|/edit(*:131)'
                            .'|(*:139)'
                        .')'
                        .'|habitat(?'
                            .'|/(?'
                                .'|([^/]++)(?'
                                    .'|(*:173)'
                                    .'|/edit(*:186)'
                                    .'|(*:194)'
                                .')'
                                .'|delete/image/([^/]++)(*:224)'
                            .')'
                            .'|report/([^/]++)(?'
                                .'|(*:251)'
                                .'|/edit(*:264)'
                                .'|(*:272)'
                            .')'
                        .')'
                        .'|race/([^/]++)(?'
                            .'|(*:298)'
                            .'|/edit(*:311)'
                            .'|(*:319)'
                        .')'
                        .'|service/(?'
                            .'|([^/]++)(?'
                                .'|(*:350)'
                                .'|/edit(*:363)'
                                .'|(*:371)'
                            .')'
                            .'|delete/image/([^/]++)(*:401)'
                        .')'
                        .'|testimonial/([^/]++)(?'
                            .'|(*:433)'
                            .'|/edit(*:446)'
                            .'|(*:454)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|(*:479)'
                            .'|/edit(*:492)'
                            .'|(*:500)'
                        .')'
                        .'|vetreport/([^/]++)(?'
                            .'|(*:530)'
                            .'|/edit(*:543)'
                            .'|(*:551)'
                        .')'
                    .')'
                    .'|nimals/([^/]++)(*:576)'
                .')'
                .'|/opening/([^/]++)(?'
                    .'|(*:605)'
                    .'|/edit(*:618)'
                    .'|(*:626)'
                .')'
                .'|/employe/(?'
                    .'|dailydiet/([^/]++)(?'
                        .'|(*:668)'
                        .'|/edit(*:681)'
                        .'|(*:689)'
                    .')'
                    .'|service/(?'
                        .'|([^/]++)(?'
                            .'|(*:720)'
                            .'|/edit(*:733)'
                            .'|(*:741)'
                        .')'
                        .'|delete/image/([^/]++)(*:771)'
                    .')'
                    .'|testimonial/([^/]++)(?'
                        .'|(*:803)'
                        .'|/edit(*:816)'
                        .'|(*:824)'
                    .')'
                .')'
                .'|/habitats/([^/]++)(*:852)'
                .'|/services/([^/]++)(*:878)'
                .'|/veterinary/(?'
                    .'|dailydiet/([^/]++)(?'
                        .'|(*:922)'
                    .')'
                    .'|habitatreport/([^/]++)(?'
                        .'|(*:956)'
                        .'|/edit(*:969)'
                        .'|(*:977)'
                    .')'
                    .'|vetreport/([^/]++)(?'
                        .'|(*:1007)'
                        .'|/edit(*:1021)'
                        .'|(*:1030)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'app_animal_show', '_controller' => 'App\\Controller\\Admin\\AnimalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        53 => [[['_route' => 'app_animal_edit', '_controller' => 'App\\Controller\\Admin\\AnimalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        60 => [[['_route' => 'app_animal_delete', '_controller' => 'App\\Controller\\Admin\\AnimalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        89 => [[['_route' => 'app_animal_delete_image', '_controller' => 'App\\Controller\\Admin\\AnimalController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        118 => [[['_route' => 'app_dailydiet_show', '_controller' => 'App\\Controller\\Admin\\DailydietController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        131 => [[['_route' => 'app_dailydiet_edit', '_controller' => 'App\\Controller\\Admin\\DailydietController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        139 => [[['_route' => 'app_dailydiet_delete', '_controller' => 'App\\Controller\\Admin\\DailydietController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        173 => [[['_route' => 'app_habitat_show', '_controller' => 'App\\Controller\\Admin\\HabitatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        186 => [[['_route' => 'app_habitat_edit', '_controller' => 'App\\Controller\\Admin\\HabitatController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        194 => [[['_route' => 'app_habitat_delete', '_controller' => 'App\\Controller\\Admin\\HabitatController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        224 => [[['_route' => 'app_habitat_delete_image', '_controller' => 'App\\Controller\\Admin\\HabitatController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        251 => [[['_route' => 'app_habitatreport_show', '_controller' => 'App\\Controller\\Admin\\HabitatreportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'app_habitatreport_edit', '_controller' => 'App\\Controller\\Admin\\HabitatreportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => 'app_habitatreport_delete', '_controller' => 'App\\Controller\\Admin\\HabitatreportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        298 => [[['_route' => 'app_race_show', '_controller' => 'App\\Controller\\Admin\\RaceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'app_race_edit', '_controller' => 'App\\Controller\\Admin\\RaceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        319 => [[['_route' => 'app_race_delete', '_controller' => 'App\\Controller\\Admin\\RaceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        350 => [[['_route' => 'app_service_show', '_controller' => 'App\\Controller\\Admin\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        363 => [[['_route' => 'app_service_edit', '_controller' => 'App\\Controller\\Admin\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        371 => [[['_route' => 'app_service_delete', '_controller' => 'App\\Controller\\Admin\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        401 => [[['_route' => 'app_service_delete_image', '_controller' => 'App\\Controller\\Admin\\ServiceController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        433 => [[['_route' => 'app_testimonial_show', '_controller' => 'App\\Controller\\Admin\\TestimonialController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        446 => [[['_route' => 'app_testimonial_edit', '_controller' => 'App\\Controller\\Admin\\TestimonialController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        454 => [[['_route' => 'app_testimonial_delete', '_controller' => 'App\\Controller\\Admin\\TestimonialController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        479 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        492 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        500 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        530 => [[['_route' => 'app_vetreport_show', '_controller' => 'App\\Controller\\Admin\\VetreportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        543 => [[['_route' => 'app_vetreport_edit', '_controller' => 'App\\Controller\\Admin\\VetreportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        551 => [[['_route' => 'app_vetreport_delete', '_controller' => 'App\\Controller\\Admin\\VetreportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        576 => [[['_route' => 'animal_details', '_controller' => 'App\\Controller\\AnimalsController::details'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        605 => [[['_route' => 'app_opening_show', '_controller' => 'App\\Controller\\Admin\\OpeningController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        618 => [[['_route' => 'app_opening_edit', '_controller' => 'App\\Controller\\Admin\\OpeningController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        626 => [[['_route' => 'app_opening_delete', '_controller' => 'App\\Controller\\Admin\\OpeningController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        668 => [[['_route' => 'employe_dailydiet_show', '_controller' => 'App\\Controller\\Employe\\DailydietController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        681 => [[['_route' => 'employe_dailydiet_edit', '_controller' => 'App\\Controller\\Employe\\DailydietController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        689 => [[['_route' => 'employe_dailydiet_delete', '_controller' => 'App\\Controller\\Employe\\DailydietController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        720 => [[['_route' => 'employe_service_show', '_controller' => 'App\\Controller\\Employe\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        733 => [[['_route' => 'employe_service_edit', '_controller' => 'App\\Controller\\Employe\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        741 => [[['_route' => 'employe_service_delete', '_controller' => 'App\\Controller\\Employe\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        771 => [[['_route' => 'employe_service_delete_image', '_controller' => 'App\\Controller\\Employe\\ServiceController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        803 => [[['_route' => 'employe_testimonial_show', '_controller' => 'App\\Controller\\Employe\\TestimonialController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        816 => [[['_route' => 'employe_testimonial_edit', '_controller' => 'App\\Controller\\Employe\\TestimonialController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        824 => [[['_route' => 'employe_testimonial_delete', '_controller' => 'App\\Controller\\Employe\\TestimonialController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        852 => [[['_route' => 'habitats_details', '_controller' => 'App\\Controller\\HabitatsController::details'], ['slug'], null, null, false, true, null]],
        878 => [[['_route' => 'services_details', '_controller' => 'App\\Controller\\ServicesController::details'], ['slug'], null, null, false, true, null]],
        922 => [
            [['_route' => 'vet_dailydiet_show', '_controller' => 'App\\Controller\\Veterinary\\DailydietController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'vet_dailydiet_delete', '_controller' => 'App\\Controller\\Veterinary\\DailydietController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        956 => [[['_route' => 'vet_habitatreport_show', '_controller' => 'App\\Controller\\Veterinary\\HabitatreportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        969 => [[['_route' => 'vet_habitatreport_edit', '_controller' => 'App\\Controller\\Veterinary\\HabitatreportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        977 => [[['_route' => 'vet_habitatreport_delete', '_controller' => 'App\\Controller\\Veterinary\\HabitatreportController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1007 => [[['_route' => 'vet_vetreport_show', '_controller' => 'App\\Controller\\Veterinary\\VetreportController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1021 => [[['_route' => 'vet_vetreport_edit', '_controller' => 'App\\Controller\\Veterinary\\VetreportController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1030 => [
            [['_route' => 'vet_vetreport_delete', '_controller' => 'App\\Controller\\Veterinary\\VetreportController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
