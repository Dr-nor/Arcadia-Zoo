<?php

namespace ContainerQ5xgnED;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalsControllerdetailsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WfXzZIK.App\Controller\AnimalsController::details()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WfXzZIK.App\\Controller\\AnimalsController::details()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'animal' => ['privates', '.errored..service_locator.WfXzZIK.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.WfXzZIK": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".'],
            'animalRepository' => ['privates', 'App\\Repository\\AnimalRepository', 'getAnimalRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'animal' => 'App\\Entity\\Animal',
            'animalRepository' => 'App\\Repository\\AnimalRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\AnimalsController::details()', $container);
    }
}
