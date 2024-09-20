<?php

namespace ContainerXJgDIBj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVetreportControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\VetreportController' shared autowired service.
     *
     * @return \App\Controller\Admin\VetreportController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/VetreportController.php';

        $container->services['App\\Controller\\Admin\\VetreportController'] = $instance = new \App\Controller\Admin\VetreportController(($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\Admin\\VetreportController', $container));

        return $instance;
    }
}
