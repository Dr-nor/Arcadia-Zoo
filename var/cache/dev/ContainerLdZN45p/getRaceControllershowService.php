<?php

namespace ContainerLdZN45p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRaceControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.WNi.TcG.App\Controller\Admin\RaceController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.WNi.TcG.App\\Controller\\Admin\\RaceController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'race' => ['privates', '.errored..service_locator.WNi.TcG.App\\Entity\\Race', NULL, 'Cannot autowire service ".service_locator.WNi.TcG": it needs an instance of "App\\Entity\\Race" but this type has been excluded in "config/services.yaml".'],
        ], [
            'race' => 'App\\Entity\\Race',
        ]))->withContext('App\\Controller\\Admin\\RaceController::show()', $container);
    }
}
