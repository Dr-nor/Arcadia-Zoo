<?php

namespace ContainerAaZIRqa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatControllerdeleteImageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sDoT5rV.App\Controller\Admin\HabitatController::deleteImage()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sDoT5rV.App\\Controller\\Admin\\HabitatController::deleteImage()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'image' => ['privates', '.errored..service_locator.sDoT5rV.App\\Entity\\Image', NULL, 'Cannot autowire service ".service_locator.sDoT5rV": it needs an instance of "App\\Entity\\Image" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'imageHabitat' => ['privates', 'App\\Service\\ImageService', 'getImageServiceService', true],
        ], [
            'image' => 'App\\Entity\\Image',
            'em' => '?',
            'imageHabitat' => 'App\\Service\\ImageService',
        ]))->withContext('App\\Controller\\Admin\\HabitatController::deleteImage()', $container);
    }
}
