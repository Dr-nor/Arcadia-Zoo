<?php

namespace ContainerItwl5kQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zhttGGF.App\Controller\Admin\ServiceController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zhttGGF.App\\Controller\\Admin\\ServiceController::delete()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'service' => ['privates', '.errored..service_locator.zhttGGF.App\\Entity\\Service', NULL, 'Cannot autowire service ".service_locator.zhttGGF": it needs an instance of "App\\Entity\\Service" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'service' => 'App\\Entity\\Service',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\Admin\\ServiceController::delete()', $container);
    }
}
