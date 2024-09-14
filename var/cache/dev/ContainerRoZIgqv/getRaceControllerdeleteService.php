<?php

namespace ContainerRoZIgqv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRaceControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1eOBTXe.App\Controller\Admin\RaceController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1eOBTXe.App\\Controller\\Admin\\RaceController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'race' => ['privates', '.errored..service_locator.1eOBTXe.App\\Entity\\Race', NULL, 'Cannot autowire service ".service_locator.1eOBTXe": it needs an instance of "App\\Entity\\Race" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'race' => 'App\\Entity\\Race',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\Admin\\RaceController::delete()', $container);
    }
}
