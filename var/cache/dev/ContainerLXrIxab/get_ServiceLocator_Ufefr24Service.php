<?php

namespace ContainerLXrIxab;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ufefr24Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ufefr24' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ufefr24'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'testimonialRepository' => ['privates', 'App\\Repository\\TestimonialRepository', 'getTestimonialRepositoryService', true],
        ], [
            'testimonialRepository' => 'App\\Repository\\TestimonialRepository',
        ]);
    }
}
