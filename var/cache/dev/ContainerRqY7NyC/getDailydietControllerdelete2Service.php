<?php

namespace ContainerRqY7NyC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDailydietControllerdelete2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hzYJuTC.App\Controller\Employe\DailydietController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hzYJuTC.App\\Controller\\Employe\\DailydietController::delete()'] = ($container->privates['.service_locator.hzYJuTC'] ?? $container->load('get_ServiceLocator_HzYJuTCService'))->withContext('App\\Controller\\Employe\\DailydietController::delete()', $container);
    }
}
