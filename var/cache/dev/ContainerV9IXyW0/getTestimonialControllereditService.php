<?php

namespace ContainerV9IXyW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestimonialControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ga.aiw8.App\Controller\Admin\TestimonialController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.Ga.aiw8'] ?? $container->load('get_ServiceLocator_Ga_Aiw8Service'));

        if (isset($container->privates['.service_locator.Ga.aiw8.App\\Controller\\Admin\\TestimonialController::edit()'])) {
            return $container->privates['.service_locator.Ga.aiw8.App\\Controller\\Admin\\TestimonialController::edit()'];
        }

        return $container->privates['.service_locator.Ga.aiw8.App\\Controller\\Admin\\TestimonialController::edit()'] = $a->withContext('App\\Controller\\Admin\\TestimonialController::edit()', $container);
    }
}
