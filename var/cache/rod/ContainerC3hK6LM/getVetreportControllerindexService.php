<?php

namespace ContainerC3hK6LM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVetreportControllerindexService extends App_KernelRodDebugContainer
{
    /**
     * Gets the private '.service_locator.ZSL8qBo.App\Controller\Admin\VetreportController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZSL8qBo.App\\Controller\\Admin\\VetreportController::index()'] = ($container->privates['.service_locator.ZSL8qBo'] ?? $container->load('get_ServiceLocator_ZSL8qBoService'))->withContext('App\\Controller\\Admin\\VetreportController::index()', $container);
    }
}
