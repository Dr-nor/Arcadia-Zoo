<?php

namespace ContainerVyyQ5xy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVetreportControllerindex2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZSL8qBo.App\Controller\Veterinary\VetreportController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZSL8qBo.App\\Controller\\Veterinary\\VetreportController::index()'] = ($container->privates['.service_locator.ZSL8qBo'] ?? $container->load('get_ServiceLocator_ZSL8qBoService'))->withContext('App\\Controller\\Veterinary\\VetreportController::index()', $container);
    }
}
