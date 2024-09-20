<?php

namespace ContainerLXrIxab;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestimonialController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Employe\TestimonialController' shared autowired service.
     *
     * @return \App\Controller\Employe\TestimonialController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Employe/TestimonialController.php';

        $container->services['App\\Controller\\Employe\\TestimonialController'] = $instance = new \App\Controller\Employe\TestimonialController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\Employe\\TestimonialController', $container));

        return $instance;
    }
}
