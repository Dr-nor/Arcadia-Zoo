<?php

namespace ContainerIMMgl8V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_RememberMe_MainService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.listener.remember_me.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\RememberMeListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EventListener/RememberMeListener.php';

        return $container->privates['security.listener.remember_me.main'] = new \Symfony\Component\Security\Http\EventListener\RememberMeListener(($container->privates['security.authenticator.remember_me_handler.main'] ?? $container->load('getSecurity_Authenticator_RememberMeHandler_MainService')), ($container->privates['monolog.logger.security'] ?? self::getMonolog_Logger_SecurityService($container)));
    }
}
