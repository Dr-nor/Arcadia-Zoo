<?php

namespace ContainerE9OWkVf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllernew2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vMw.xEU.App\Controller\Employe\ServiceController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vMw.xEU.App\\Controller\\Employe\\ServiceController::new()'] = ($container->privates['.service_locator.vMw.xEU'] ?? $container->load('get_ServiceLocator_VMw_XEUService'))->withContext('App\\Controller\\Employe\\ServiceController::new()', $container);
    }
}
