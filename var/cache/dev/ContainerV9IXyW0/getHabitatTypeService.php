<?php

namespace ContainerV9IXyW0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\HabitatType' shared autowired service.
     *
     * @return \App\Form\HabitatType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/HabitatType.php';

        return $container->privates['App\\Form\\HabitatType'] = new \App\Form\HabitatType();
    }
}
