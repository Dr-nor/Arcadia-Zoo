<?php

namespace ContainerZxPxr8x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpeningControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9ibgz36.App\Controller\Admin\OpeningController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9ibgz36.App\\Controller\\Admin\\OpeningController::delete()'] = ($container->privates['.service_locator.9ibgz36'] ?? $container->load('get_ServiceLocator_9ibgz36Service'))->withContext('App\\Controller\\Admin\\OpeningController::delete()', $container);
    }
}
