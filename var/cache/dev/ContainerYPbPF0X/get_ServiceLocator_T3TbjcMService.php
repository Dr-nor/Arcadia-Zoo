<?php

namespace ContainerYPbPF0X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_T3TbjcMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t3TbjcM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t3TbjcM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'image' => ['privates', '.errored..service_locator.t3TbjcM.App\\Entity\\Image', NULL, 'Cannot autowire service ".service_locator.t3TbjcM": it needs an instance of "App\\Entity\\Image" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'imageService' => ['privates', 'App\\Service\\ImageService', 'getImageServiceService', true],
        ], [
            'image' => 'App\\Entity\\Image',
            'em' => '?',
            'imageService' => 'App\\Service\\ImageService',
        ]);
    }
}
