<?php

namespace ContainerLXrIxab;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllerdelete2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zhttGGF.App\Controller\Employe\ServiceController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zhttGGF.App\\Controller\\Employe\\ServiceController::delete()'] = ($container->privates['.service_locator.zhttGGF'] ?? $container->load('get_ServiceLocator_ZhttGGFService'))->withContext('App\\Controller\\Employe\\ServiceController::delete()', $container);
    }
}
