<?php

namespace Container15VkFwS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRaceControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DXXF1Kz.App\Controller\Admin\RaceController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DXXF1Kz.App\\Controller\\Admin\\RaceController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'raceRepository' => ['privates', 'App\\Repository\\RaceRepository', 'getRaceRepositoryService', true],
        ], [
            'raceRepository' => 'App\\Repository\\RaceRepository',
        ]))->withContext('App\\Controller\\Admin\\RaceController::index()', $container);
    }
}
