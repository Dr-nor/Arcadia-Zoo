<?php

namespace ContainerLdZN45p;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_SchemaUpdateCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/AbstractEntityManagerCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/SchemaTool/AbstractCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/src/Tools/Console/Command/SchemaTool/UpdateCommand.php';

        $container->privates['doctrine.schema_update_command'] = $instance = new \Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand(($container->privates['doctrine.orm.command.entity_manager_provider'] ?? $container->load('getDoctrine_Orm_Command_EntityManagerProviderService')));

        $instance->setName('doctrine:schema:update');

        return $instance;
    }
}
