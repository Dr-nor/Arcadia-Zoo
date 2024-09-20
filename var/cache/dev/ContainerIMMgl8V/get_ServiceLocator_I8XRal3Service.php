<?php

namespace ContainerIMMgl8V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I8XRal3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i8XRal3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i8XRal3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'dailydietepository' => ['privates', 'App\\Repository\\DailydietRepository', 'getDailydietRepositoryService', true],
        ], [
            'dailydietepository' => 'App\\Repository\\DailydietRepository',
        ]);
    }
}
