<?php

namespace ContainerVyyQ5xy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerveterinaryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SMEzWKM.App\Controller\Admin\DashboardController::veterinary()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SMEzWKM.App\\Controller\\Admin\\DashboardController::veterinary()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'vetreportRepository' => ['privates', 'App\\Repository\\VetreportRepository', 'getVetreportRepositoryService', true],
            'habitatreportRepository' => ['privates', 'App\\Repository\\HabitatreportRepository', 'getHabitatreportRepositoryService', true],
        ], [
            'vetreportRepository' => 'App\\Repository\\VetreportRepository',
            'habitatreportRepository' => 'App\\Repository\\HabitatreportRepository',
        ]))->withContext('App\\Controller\\Admin\\DashboardController::veterinary()', $container);
    }
}
