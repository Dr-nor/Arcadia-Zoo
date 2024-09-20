<?php

namespace Container1AsahbH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatsControllerdetailsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qNZ4ueE.App\Controller\HabitatsController::details()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qNZ4ueE.App\\Controller\\HabitatsController::details()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'habitat' => ['privates', '.errored..service_locator.qNZ4ueE.App\\Entity\\Habitat', NULL, 'Cannot autowire service ".service_locator.qNZ4ueE": it needs an instance of "App\\Entity\\Habitat" but this type has been excluded in "config/services.yaml".'],
            'animalRepository' => ['privates', 'App\\Repository\\AnimalRepository', 'getAnimalRepositoryService', true],
        ], [
            'habitat' => 'App\\Entity\\Habitat',
            'animalRepository' => 'App\\Repository\\AnimalRepository',
        ]))->withContext('App\\Controller\\HabitatsController::details()', $container);
    }
}
