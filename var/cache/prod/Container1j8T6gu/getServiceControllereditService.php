<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllereditService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.B6iH7lH.App\Controller\Admin\ServiceController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.B6iH7lH'] ?? $container->load('get_ServiceLocator_B6iH7lHService'));

        if (isset($container->privates['.service_locator.B6iH7lH.App\\Controller\\Admin\\ServiceController::edit()'])) {
            return $container->privates['.service_locator.B6iH7lH.App\\Controller\\Admin\\ServiceController::edit()'];
        }

        return $container->privates['.service_locator.B6iH7lH.App\\Controller\\Admin\\ServiceController::edit()'] = $a->withContext('App\\Controller\\Admin\\ServiceController::edit()', $container);
    }
}
