<?php

namespace ContainerLXrIxab;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatreportControlleredit2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2jYvYwd.App\Controller\Veterinary\HabitatreportController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2jYvYwd.App\\Controller\\Veterinary\\HabitatreportController::edit()'] = ($container->privates['.service_locator.2jYvYwd'] ?? $container->load('get_ServiceLocator_2jYvYwdService'))->withContext('App\\Controller\\Veterinary\\HabitatreportController::edit()', $container);
    }
}
