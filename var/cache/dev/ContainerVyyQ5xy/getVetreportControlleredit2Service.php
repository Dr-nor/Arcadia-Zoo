<?php

namespace ContainerVyyQ5xy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVetreportControlleredit2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QKXNuJ9.App\Controller\Veterinary\VetreportController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QKXNuJ9.App\\Controller\\Veterinary\\VetreportController::edit()'] = ($container->privates['.service_locator.QKXNuJ9'] ?? $container->load('get_ServiceLocator_QKXNuJ9Service'))->withContext('App\\Controller\\Veterinary\\VetreportController::edit()', $container);
    }
}
