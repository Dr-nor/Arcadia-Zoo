<?php

namespace ContainerE9OWkVf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestimonialControllershow2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZKETimn.App\Controller\Employe\TestimonialController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZKETimn.App\\Controller\\Employe\\TestimonialController::show()'] = ($container->privates['.service_locator.ZKETimn'] ?? $container->load('get_ServiceLocator_ZKETimnService'))->withContext('App\\Controller\\Employe\\TestimonialController::show()', $container);
    }
}
