<?php

namespace ContainerQ5xgnED;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T8IsXRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T8_IsXR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T8_IsXR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'openingRepository' => ['privates', 'App\\Repository\\OpeningRepository', 'getOpeningRepositoryService', true],
        ], [
            'openingRepository' => 'App\\Repository\\OpeningRepository',
        ]);
    }
}
