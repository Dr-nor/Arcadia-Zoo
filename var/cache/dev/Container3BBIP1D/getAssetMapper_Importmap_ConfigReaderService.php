<?php

namespace Container3BBIP1D;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_ConfigReaderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.importmap.config_reader' shared service.
     *
     * @return \Symfony\Component\AssetMapper\ImportMap\ImportMapConfigReader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/ImportMap/ImportMapConfigReader.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset-mapper/ImportMap/RemotePackageStorage.php';

        return $container->privates['asset_mapper.importmap.config_reader'] = new \Symfony\Component\AssetMapper\ImportMap\ImportMapConfigReader((\dirname(__DIR__, 4).'/importmap.php'), ($container->privates['asset_mapper.importmap.remote_package_storage'] ??= new \Symfony\Component\AssetMapper\ImportMap\RemotePackageStorage((\dirname(__DIR__, 4).'/assets/vendor'))));
    }
}
