<?php

namespace ContainerTPTxEjG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVetreportControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gFLsUIg.App\Controller\Admin\VetreportController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gFLsUIg.App\\Controller\\Admin\\VetreportController::show()'] = ($container->privates['.service_locator.gFLsUIg'] ?? $container->load('get_ServiceLocator_GFLsUIgService'))->withContext('App\\Controller\\Admin\\VetreportController::show()', $container);
    }
}
