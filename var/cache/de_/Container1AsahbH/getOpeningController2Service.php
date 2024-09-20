<?php

namespace Container1AsahbH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOpeningController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OpeningController' shared autowired service.
     *
     * @return \App\Controller\OpeningController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/OpeningController.php';

        $container->services['App\\Controller\\OpeningController'] = $instance = new \App\Controller\OpeningController();

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\OpeningController', $container));

        return $instance;
    }
}
