<?php

namespace ContainerIMMgl8V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControlleredit2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B6iH7lH.App\Controller\Employe\ServiceController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B6iH7lH.App\\Controller\\Employe\\ServiceController::edit()'] = ($container->privates['.service_locator.B6iH7lH'] ?? $container->load('get_ServiceLocator_B6iH7lHService'))->withContext('App\\Controller\\Employe\\ServiceController::edit()', $container);
    }
}
