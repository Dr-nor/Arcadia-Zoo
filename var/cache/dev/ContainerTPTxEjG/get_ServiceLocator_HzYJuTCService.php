<?php

namespace ContainerTPTxEjG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HzYJuTCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hzYJuTC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hzYJuTC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Dailydiet' => ['privates', '.errored..service_locator.hzYJuTC.App\\Entity\\Dailydiet', NULL, 'Cannot autowire service ".service_locator.hzYJuTC": it needs an instance of "App\\Entity\\Dailydiet" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'Dailydiet' => 'App\\Entity\\Dailydiet',
            'entityManager' => '?',
        ]);
    }
}
