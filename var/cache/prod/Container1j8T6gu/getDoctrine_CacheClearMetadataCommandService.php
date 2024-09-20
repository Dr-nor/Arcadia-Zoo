<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_CacheClearMetadataCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['doctrine.cache_clear_metadata_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\ClearCache\MetadataCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:cache:clear-metadata');

        return $instance;
    }
}
