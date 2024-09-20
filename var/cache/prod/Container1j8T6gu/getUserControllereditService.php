<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserControllereditService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.Qh67eS1.App\Controller\Admin\UserController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Qh67eS1.App\\Controller\\Admin\\UserController::edit()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'user' => ['privates', '.errored..service_locator.Qh67eS1.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.Qh67eS1": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'user' => 'App\\Entity\\User',
            'entityManager' => '?',
            'passwordHasher' => '?',
        ]))->withContext('App\\Controller\\Admin\\UserController::edit()', $container);
    }
}
