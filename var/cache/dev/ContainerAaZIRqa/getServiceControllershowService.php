<?php

namespace ContainerAaZIRqa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HQ6Z48r.App\Controller\Admin\ServiceController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HQ6Z48r.App\\Controller\\Admin\\ServiceController::show()'] = ($container->privates['.service_locator.HQ6Z48r'] ?? $container->load('get_ServiceLocator_HQ6Z48rService'))->withContext('App\\Controller\\Admin\\ServiceController::show()', $container);
    }
}
