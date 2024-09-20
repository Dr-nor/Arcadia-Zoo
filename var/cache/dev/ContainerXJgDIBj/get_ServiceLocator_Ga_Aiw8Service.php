<?php

namespace ContainerXJgDIBj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ga_Aiw8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ga.aiw8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ga.aiw8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'testimonial' => ['privates', '.errored..service_locator.Ga.aiw8.App\\Entity\\Testimonial', NULL, 'Cannot autowire service ".service_locator.Ga.aiw8": it needs an instance of "App\\Entity\\Testimonial" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'testimonial' => 'App\\Entity\\Testimonial',
            'entityManager' => '?',
        ]);
    }
}
