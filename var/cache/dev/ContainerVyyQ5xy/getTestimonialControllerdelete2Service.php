<?php

namespace ContainerVyyQ5xy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestimonialControllerdelete2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ga.aiw8.App\Controller\Employe\TestimonialController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ga.aiw8.App\\Controller\\Employe\\TestimonialController::delete()'] = ($container->privates['.service_locator.Ga.aiw8'] ?? $container->load('get_ServiceLocator_Ga_Aiw8Service'))->withContext('App\\Controller\\Employe\\TestimonialController::delete()', $container);
    }
}
