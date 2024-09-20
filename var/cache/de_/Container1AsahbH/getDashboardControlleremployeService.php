<?php

namespace Container1AsahbH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControlleremployeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RddNrxu.App\Controller\Admin\DashboardController::employe()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RddNrxu.App\\Controller\\Admin\\DashboardController::employe()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'serviceRepository' => ['privates', 'App\\Repository\\ServiceRepository', 'getServiceRepositoryService', true],
            'testimonialRepository' => ['privates', 'App\\Repository\\TestimonialRepository', 'getTestimonialRepositoryService', true],
        ], [
            'serviceRepository' => 'App\\Repository\\ServiceRepository',
            'testimonialRepository' => 'App\\Repository\\TestimonialRepository',
        ]))->withContext('App\\Controller\\Admin\\DashboardController::employe()', $container);
    }
}
