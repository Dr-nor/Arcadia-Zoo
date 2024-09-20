<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDailydietController3Service extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Veterinary\DailydietController' shared autowired service.
     *
     * @return \App\Controller\Veterinary\DailydietController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Veterinary\\DailydietController'] = $instance = new \App\Controller\Veterinary\DailydietController(($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));

        $instance->setContainer(($container->privates['.service_locator.QaaoWjx'] ?? $container->load('get_ServiceLocator_QaaoWjxService'))->withContext('App\\Controller\\Veterinary\\DailydietController', $container));

        return $instance;
    }
}
