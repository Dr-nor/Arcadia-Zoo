<?php

namespace ContainerV9gkUFW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllerdeleteImageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t3TbjcM.App\Controller\Admin\AnimalController::deleteImage()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.t3TbjcM'] ?? $container->load('get_ServiceLocator_T3TbjcMService'));

        if (isset($container->privates['.service_locator.t3TbjcM.App\\Controller\\Admin\\AnimalController::deleteImage()'])) {
            return $container->privates['.service_locator.t3TbjcM.App\\Controller\\Admin\\AnimalController::deleteImage()'];
        }

        return $container->privates['.service_locator.t3TbjcM.App\\Controller\\Admin\\AnimalController::deleteImage()'] = $a->withContext('App\\Controller\\Admin\\AnimalController::deleteImage()', $container);
    }
}
