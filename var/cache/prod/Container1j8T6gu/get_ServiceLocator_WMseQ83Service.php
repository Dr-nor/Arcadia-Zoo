<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WMseQ83Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.WMseQ83' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WMseQ83'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Dailydiet' => ['privates', '.errored..service_locator.WMseQ83.App\\Entity\\Dailydiet', NULL, 'Cannot autowire service ".service_locator.WMseQ83": it needs an instance of "App\\Entity\\Dailydiet" but this type has been excluded in "config/services.yaml".'],
        ], [
            'Dailydiet' => 'App\\Entity\\Dailydiet',
        ]);
    }
}
