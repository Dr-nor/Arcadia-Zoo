<?php

namespace ContainerV9IXyW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HQ6Z48rService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HQ6Z48r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HQ6Z48r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'service' => ['privates', '.errored..service_locator.HQ6Z48r.App\\Entity\\Service', NULL, 'Cannot autowire service ".service_locator.HQ6Z48r": it needs an instance of "App\\Entity\\Service" but this type has been excluded in "config/services.yaml".'],
        ], [
            'service' => 'App\\Entity\\Service',
        ]);
    }
}
