<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatreportControllershowService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.wT0LS6t.App\Controller\Admin\HabitatreportController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wT0LS6t.App\\Controller\\Admin\\HabitatreportController::show()'] = ($container->privates['.service_locator.wT0LS6t'] ?? $container->load('get_ServiceLocator_WT0LS6tService'))->withContext('App\\Controller\\Admin\\HabitatreportController::show()', $container);
    }
}
