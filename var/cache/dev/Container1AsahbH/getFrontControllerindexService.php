<?php

namespace Container1AsahbH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFrontControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.za2P_c4.App\Controller\FrontController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.za2P_c4.App\\Controller\\FrontController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serviceRepository' => ['privates', 'App\\Repository\\ServiceRepository', 'getServiceRepositoryService', true],
            'habitatRepository' => ['privates', 'App\\Repository\\HabitatRepository', 'getHabitatRepositoryService', true],
            'animalRepository' => ['privates', 'App\\Repository\\AnimalRepository', 'getAnimalRepositoryService', true],
            'testimonialRepository' => ['privates', 'App\\Repository\\TestimonialRepository', 'getTestimonialRepositoryService', true],
        ], [
            'entityManager' => '?',
            'serviceRepository' => 'App\\Repository\\ServiceRepository',
            'habitatRepository' => 'App\\Repository\\HabitatRepository',
            'animalRepository' => 'App\\Repository\\AnimalRepository',
            'testimonialRepository' => 'App\\Repository\\TestimonialRepository',
        ]))->withContext('App\\Controller\\FrontController::index()', $container);
    }
}
