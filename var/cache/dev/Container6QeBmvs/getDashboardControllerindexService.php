<?php

namespace Container6QeBmvs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pmIsgEj.App\Controller\Admin\DashboardController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pmIsgEj.App\\Controller\\Admin\\DashboardController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serviceRepository' => ['privates', 'App\\Repository\\ServiceRepository', 'getServiceRepositoryService', true],
            'habitatRepository' => ['privates', 'App\\Repository\\HabitatRepository', 'getHabitatRepositoryService', true],
        ], [
            'userRepository' => 'App\\Repository\\UserRepository',
            'entityManager' => '?',
            'serviceRepository' => 'App\\Repository\\ServiceRepository',
            'habitatRepository' => 'App\\Repository\\HabitatRepository',
        ]))->withContext('App\\Controller\\Admin\\DashboardController::index()', $container);
    }
}
