<?php

namespace ContainerLXrIxab;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B38WozD.App\Controller\Admin\AnimalController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B38WozD.App\\Controller\\Admin\\AnimalController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Animal' => ['privates', '.errored..service_locator.B38WozD.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.B38WozD": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'Animal' => 'App\\Entity\\Animal',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\Admin\\AnimalController::delete()', $container);
    }
}
