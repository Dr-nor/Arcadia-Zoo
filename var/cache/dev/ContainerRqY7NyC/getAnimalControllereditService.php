<?php

namespace ContainerRqY7NyC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Q2VRjS4.App\Controller\Admin\AnimalController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Q2VRjS4.App\\Controller\\Admin\\AnimalController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Animal' => ['privates', '.errored..service_locator.Q2VRjS4.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.Q2VRjS4": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'imageService' => ['privates', 'App\\Service\\ImageService', 'getImageServiceService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'Animal' => 'App\\Entity\\Animal',
            'entityManager' => '?',
            'imageService' => 'App\\Service\\ImageService',
            'slugger' => '?',
        ]))->withContext('App\\Controller\\Admin\\AnimalController::edit()', $container);
    }
}
