<?php

namespace ContainerTPTxEjG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpeningControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.T8_IsXR.App\Controller\Admin\OpeningController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T8_IsXR.App\\Controller\\Admin\\OpeningController::index()'] = ($container->privates['.service_locator.T8_IsXR'] ?? $container->load('get_ServiceLocator_T8IsXRService'))->withContext('App\\Controller\\Admin\\OpeningController::index()', $container);
    }
}
