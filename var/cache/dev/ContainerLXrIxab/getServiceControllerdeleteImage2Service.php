<?php

namespace ContainerLXrIxab;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllerdeleteImage2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.t3TbjcM.App\Controller\Employe\ServiceController::deleteImage()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.t3TbjcM.App\\Controller\\Employe\\ServiceController::deleteImage()'] = ($container->privates['.service_locator.t3TbjcM'] ?? $container->load('get_ServiceLocator_T3TbjcMService'))->withContext('App\\Controller\\Employe\\ServiceController::deleteImage()', $container);
    }
}
