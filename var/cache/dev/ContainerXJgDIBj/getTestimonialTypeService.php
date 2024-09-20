<?php

namespace ContainerXJgDIBj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestimonialTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\TestimonialType' shared autowired service.
     *
     * @return \App\Form\TestimonialType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/TestimonialType.php';

        return $container->privates['App\\Form\\TestimonialType'] = new \App\Form\TestimonialType(($container->privates['security.authorization_checker'] ?? self::getSecurity_AuthorizationCheckerService($container)));
    }
}
