<?php

namespace ContainerRqY7NyC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ServicesController' shared autowired service.
     *
     * @return \App\Controller\ServicesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ServicesController.php';

        $container->services['App\\Controller\\ServicesController'] = $instance = new \App\Controller\ServicesController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\ServicesController', $container));

        return $instance;
    }
}
