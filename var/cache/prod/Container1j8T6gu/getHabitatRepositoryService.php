<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHabitatRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\HabitatRepository' shared autowired service.
     *
     * @return \App\Repository\HabitatRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\HabitatRepository'] = new \App\Repository\HabitatRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
