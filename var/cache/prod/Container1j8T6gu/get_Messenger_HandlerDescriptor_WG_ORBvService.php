<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_WG_ORBvService extends App_KernelProdContainer
{
    /*
     * Gets the private '.messenger.handler_descriptor.WG.oRBv' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.messenger.handler_descriptor.WG.oRBv'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Mailer\Messenger\MessageHandler(($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService'))), []);
    }
}
