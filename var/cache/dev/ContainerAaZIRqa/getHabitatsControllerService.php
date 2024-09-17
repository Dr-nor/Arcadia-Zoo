<?php

namespace ContainerAaZIRqa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HabitatsController' shared autowired service.
     *
     * @return \App\Controller\HabitatsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HabitatsController.php';

        $container->services['App\\Controller\\HabitatsController'] = $instance = new \App\Controller\HabitatsController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\HabitatsController', $container));

        return $instance;
    }
}
