<?php

namespace Container1AsahbH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDailydietTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\DailydietType' shared autowired service.
     *
     * @return \App\Form\DailydietType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DailydietType.php';

        return $container->privates['App\\Form\\DailydietType'] = new \App\Form\DailydietType();
    }
}
