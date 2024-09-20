<?php

namespace Container1j8T6gu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigService extends App_KernelProdContainer
{
    /*
     * Gets the private 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Twig\Loader\FilesystemLoader([], \dirname(__DIR__, 4));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/templates'), 'Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/templates'), '!Doctrine');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), 'DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/doctrine/doctrine-migrations-bundle/Resources/views'), '!DoctrineMigrations');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $a->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), '!Twig');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $a->addPath((\dirname(__DIR__, 4).'/templates'));
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 'email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), '!email');
        $a->addPath((\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'));

        $container->privates['twig'] = $instance = new \Twig\Environment($a, ['cache' => ($container->targetDir.''.'/twig'), 'charset' => 'UTF-8', 'debug' => false, 'strict_variables' => false, 'autoescape' => 'name']);

        $b = ($container->services['translator'] ?? self::getTranslatorService($container));
        $c = ($container->services['router'] ?? self::getRouterService($container));
        $d = ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack());
        $e = ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container));
        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('prod');
        $f->setDebug(false);
        $f->setTokenStorage($e);
        if ($container->has('request_stack')) {
            $f->setRequestStack($d);
        }
        $f->setLocaleSwitcher(($container->privates['translation.locale_switcher'] ?? $container->load('getTranslation_LocaleSwitcherService')));
        $f->setEnabledLocales([]);

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CsrfExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(($container->privates['assets.packages'] ?? $container->load('getAssets_PackagesService'))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension($c));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($container->privates['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)), false));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper($d, $c)));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($d));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SerializerExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension($b));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ImportMapExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($container->privates['security.logout_url_generator'] ?? self::getSecurity_LogoutUrlGeneratorService($container))));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(($container->privates['security.authorization_checker'] ?? self::getSecurity_AuthorizationCheckerService($container)), new \Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator($d, ($container->privates['security.firewall.map'] ?? self::getSecurity_Firewall_MapService($container)), $e)));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\UX\StimulusBundle\Twig\UxControllersTwigExtension());
        $instance->addExtension(new \Symfony\UX\Turbo\Twig\TwigExtension(($container->privates['.service_locator.GIuJv7e'] ??= new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [], [])), 'default'));
        $instance->addExtension(new \Twig\Extra\String\StringExtension());
        $instance->addExtension(new \Symfony\UX\StimulusBundle\Twig\StimulusTwigExtension(new \Symfony\UX\StimulusBundle\Helper\StimulusHelper($instance)));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService', true],
            'Symfony\\Bridge\\Twig\\Extension\\SerializerRuntime' => ['privates', 'twig.runtime.serializer', 'getTwig_Runtime_SerializerService', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService', true],
            'Symfony\\Bridge\\Twig\\Extension\\ImportMapRuntime' => ['privates', 'twig.runtime.importmap', 'getTwig_Runtime_ImportmapService', true],
            'Symfony\\UX\\StimulusBundle\\Twig\\UxControllersTwigRuntime' => ['privates', 'stimulus.ux_controllers_twig_runtime', 'getStimulus_UxControllersTwigRuntimeService', true],
        ], [
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\SerializerRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\ImportMapRuntime' => '?',
            'Symfony\\UX\\StimulusBundle\\Twig\\UxControllersTwigRuntime' => '?',
        ])));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }
}
