<?php

namespace ContainerV9IXyW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnimalControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Yqc1f8K.App\Controller\Admin\AnimalController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Yqc1f8K.App\\Controller\\Admin\\AnimalController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Animal' => ['privates', '.errored..service_locator.Yqc1f8K.App\\Entity\\Animal', NULL, 'Cannot autowire service ".service_locator.Yqc1f8K": it needs an instance of "App\\Entity\\Animal" but this type has been excluded in "config/services.yaml".'],
        ], [
            'Animal' => 'App\\Entity\\Animal',
        ]))->withContext('App\\Controller\\Admin\\AnimalController::show()', $container);
    }
}
