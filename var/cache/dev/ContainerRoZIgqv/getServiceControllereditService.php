<?php

namespace ContainerRoZIgqv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getServiceControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B6iH7lH.App\Controller\Admin\ServiceController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B6iH7lH.App\\Controller\\Admin\\ServiceController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'service' => ['privates', '.errored..service_locator.B6iH7lH.App\\Entity\\Service', NULL, 'Cannot autowire service ".service_locator.B6iH7lH": it needs an instance of "App\\Entity\\Service" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'imageService' => ['privates', 'App\\Service\\ImageService', 'getImageServiceService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'service' => 'App\\Entity\\Service',
            'entityManager' => '?',
            'imageService' => 'App\\Service\\ImageService',
            'slugger' => '?',
        ]))->withContext('App\\Controller\\Admin\\ServiceController::edit()', $container);
    }
}
