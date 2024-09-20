<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_RepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'asset_mapper.repository' shared service.
     *
     * @return \Symfony\Component\AssetMapper\AssetMapperRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['asset_mapper.repository'] = new \Symfony\Component\AssetMapper\AssetMapperRepository([(\dirname(__DIR__, 4).'/vendor/symfony/ux-turbo/src/DependencyInjection/../../assets/dist') => '@symfony/ux-turbo', (\dirname(__DIR__, 4).'/vendor/symfony/stimulus-bundle/src/DependencyInjection/../../assets/dist') => '@symfony/stimulus-bundle', 'assets/' => ''], \dirname(__DIR__, 4), ['#^(?=[^\\.]).*\\.d\\.ts$#', '#^(?=[^\\.]).*.*/(?=[^\\.])controllers\\.json$#'], true, false);
    }
}
