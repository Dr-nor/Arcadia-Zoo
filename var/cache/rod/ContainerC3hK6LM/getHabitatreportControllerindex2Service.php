<?php

namespace ContainerC3hK6LM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatreportControllerindex2Service extends App_KernelRodDebugContainer
{
    /**
     * Gets the private '.service_locator.NuhFOKn.App\Controller\Veterinary\HabitatreportController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NuhFOKn.App\\Controller\\Veterinary\\HabitatreportController::index()'] = ($container->privates['.service_locator.NuhFOKn'] ?? $container->load('get_ServiceLocator_NuhFOKnService'))->withContext('App\\Controller\\Veterinary\\HabitatreportController::index()', $container);
    }
}
