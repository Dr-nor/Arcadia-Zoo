<?php

namespace ContainerTPTxEjG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rKMHrg5.App\Controller\Admin\HabitatController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rKMHrg5.App\\Controller\\Admin\\HabitatController::index()'] = ($container->privates['.service_locator.rKMHrg5'] ?? $container->load('get_ServiceLocator_RKMHrg5Service'))->withContext('App\\Controller\\Admin\\HabitatController::index()', $container);
    }
}
