<?php

namespace ContainerTPTxEjG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDailydietControllernewService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.P.blNFL.App\Controller\Admin\DailydietController::new()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.P.blNFL'] ?? $container->load('get_ServiceLocator_P_BlNFLService'));

        if (isset($container->privates['.service_locator.P.blNFL.App\\Controller\\Admin\\DailydietController::new()'])) {
            return $container->privates['.service_locator.P.blNFL.App\\Controller\\Admin\\DailydietController::new()'];
        }

        return $container->privates['.service_locator.P.blNFL.App\\Controller\\Admin\\DailydietController::new()'] = $a->withContext('App\\Controller\\Admin\\DailydietController::new()', $container);
    }
}
