<?php

namespace Container15VkFwS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nvY2WDd.App\Controller\Admin\HabitatController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nvY2WDd.App\\Controller\\Admin\\HabitatController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'habitat' => ['privates', '.errored..service_locator.nvY2WDd.App\\Entity\\Habitat', NULL, 'Cannot autowire service ".service_locator.nvY2WDd": it needs an instance of "App\\Entity\\Habitat" but this type has been excluded in "config/services.yaml".'],
        ], [
            'habitat' => 'App\\Entity\\Habitat',
        ]))->withContext('App\\Controller\\Admin\\HabitatController::show()', $container);
    }
}
