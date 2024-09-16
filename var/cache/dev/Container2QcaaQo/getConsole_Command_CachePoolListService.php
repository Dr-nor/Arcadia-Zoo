<?php

namespace Container2QcaaQo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolListService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/CachePoolListCommand.php';

        $container->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand(['cache.app', 'cache.system', 'cache.validator', 'cache.serializer', 'cache.property_info', 'cache.asset_mapper', 'cache.messenger.restart_workers_signal', 'cache.validator_expression_language', 'cache.doctrine.orm.default.result', 'cache.doctrine.orm.default.query', 'cache.security_expression_language', 'cache.security_is_granted_attribute_expression_language', 'cache.security_is_csrf_token_valid_attribute_expression_language', 'cache.security_token_verifier']);

        $instance->setName('cache:pool:list');
        $instance->setDescription('List available cache pools');

        return $instance;
    }
}
