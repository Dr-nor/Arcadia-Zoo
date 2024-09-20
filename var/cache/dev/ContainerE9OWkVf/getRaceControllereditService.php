<?php

namespace ContainerE9OWkVf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRaceControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RxbP3ZI.App\Controller\Admin\RaceController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RxbP3ZI.App\\Controller\\Admin\\RaceController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'race' => ['privates', '.errored..service_locator.RxbP3ZI.App\\Entity\\Race', NULL, 'Cannot autowire service ".service_locator.RxbP3ZI": it needs an instance of "App\\Entity\\Race" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'race' => 'App\\Entity\\Race',
            'entityManager' => '?',
            'slugger' => '?',
        ]))->withContext('App\\Controller\\Admin\\RaceController::edit()', $container);
    }
}
