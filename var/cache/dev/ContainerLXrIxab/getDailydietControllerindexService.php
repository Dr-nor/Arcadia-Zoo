<?php

namespace ContainerLXrIxab;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDailydietControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.i8XRal3.App\Controller\Admin\DailydietController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i8XRal3.App\\Controller\\Admin\\DailydietController::index()'] = ($container->privates['.service_locator.i8XRal3'] ?? $container->load('get_ServiceLocator_I8XRal3Service'))->withContext('App\\Controller\\Admin\\DailydietController::index()', $container);
    }
}
