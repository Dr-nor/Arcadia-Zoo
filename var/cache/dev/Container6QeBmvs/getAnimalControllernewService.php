<?php

namespace Container6QeBmvs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vMw.xEU.App\Controller\Admin\AnimalController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.vMw.xEU'] ?? $container->load('get_ServiceLocator_VMw_XEUService'));

        if (isset($container->privates['.service_locator.vMw.xEU.App\\Controller\\Admin\\AnimalController::new()'])) {
            return $container->privates['.service_locator.vMw.xEU.App\\Controller\\Admin\\AnimalController::new()'];
        }

        return $container->privates['.service_locator.vMw.xEU.App\\Controller\\Admin\\AnimalController::new()'] = $a->withContext('App\\Controller\\Admin\\AnimalController::new()', $container);
    }
}
