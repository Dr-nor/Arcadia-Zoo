<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpeningControllereditService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.9ibgz36.App\Controller\Admin\OpeningController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.9ibgz36'] ?? $container->load('get_ServiceLocator_9ibgz36Service'));

        if (isset($container->privates['.service_locator.9ibgz36.App\\Controller\\Admin\\OpeningController::edit()'])) {
            return $container->privates['.service_locator.9ibgz36.App\\Controller\\Admin\\OpeningController::edit()'];
        }

        return $container->privates['.service_locator.9ibgz36.App\\Controller\\Admin\\OpeningController::edit()'] = $a->withContext('App\\Controller\\Admin\\OpeningController::edit()', $container);
    }
}
