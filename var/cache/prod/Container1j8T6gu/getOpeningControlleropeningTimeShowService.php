<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpeningControlleropeningTimeShowService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.T8_IsXR.App\Controller\OpeningController::openingTimeShow()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.T8_IsXR.App\\Controller\\OpeningController::openingTimeShow()'] = ($container->privates['.service_locator.T8_IsXR'] ?? $container->load('get_ServiceLocator_T8IsXRService'))->withContext('App\\Controller\\OpeningController::openingTimeShow()', $container);
    }
}
