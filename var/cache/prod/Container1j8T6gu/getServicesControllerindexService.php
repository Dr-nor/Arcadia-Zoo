<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServicesControllerindexService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.PuhjwKK.App\Controller\ServicesController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PuhjwKK.App\\Controller\\ServicesController::index()'] = ($container->privates['.service_locator.PuhjwKK'] ?? $container->load('get_ServiceLocator_PuhjwKKService'))->withContext('App\\Controller\\ServicesController::index()', $container);
    }
}
