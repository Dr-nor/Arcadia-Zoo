<?php

namespace ContainerC3hK6LM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllerService extends App_KernelRodDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\ServiceController' shared autowired service.
     *
     * @return \App\Controller\Admin\ServiceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/ServiceController.php';

        $container->services['App\\Controller\\Admin\\ServiceController'] = $instance = new \App\Controller\Admin\ServiceController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\Admin\\ServiceController', $container));

        return $instance;
    }
}
