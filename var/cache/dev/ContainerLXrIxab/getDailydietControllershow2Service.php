<?php

namespace ContainerLXrIxab;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDailydietControllershow2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WMseQ83.App\Controller\Employe\DailydietController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WMseQ83.App\\Controller\\Employe\\DailydietController::show()'] = ($container->privates['.service_locator.WMseQ83'] ?? $container->load('get_ServiceLocator_WMseQ83Service'))->withContext('App\\Controller\\Employe\\DailydietController::show()', $container);
    }
}
