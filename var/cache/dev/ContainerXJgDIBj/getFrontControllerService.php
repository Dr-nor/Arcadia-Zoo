<?php

namespace ContainerXJgDIBj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFrontControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\FrontController' shared autowired service.
     *
     * @return \App\Controller\FrontController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FrontController.php';

        $container->services['App\\Controller\\FrontController'] = $instance = new \App\Controller\FrontController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\FrontController', $container));

        return $instance;
    }
}
