<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Twig/Exception/error403.html.twig */
class __TwigTemplate_d7de632faf0cdc32b212d0a702bb3eef extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "security/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("security/layouts/base.html.twig", "@Twig/Exception/error403.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "    <section class=\"hold-transition login-page\">
        <a href=\"/\" class=\"login-logo\">
            <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/logo/dark.svg"), "html", null, true);
        yield "\" width=\"200\" alt=\"Logo\" />
        </a>
        <div class=\"login-box\">
            <div class=\"card card-outline card-primary\">
                <div class=\"card-header text-center\">
                    <h3>
                        Page 403
                    </h3>
                </div>
                <div class=\"card-body text-center\">
                    <h5>
                     Accès refusé
                    </h5>
                    <p>L'adresse Internet demandée ne peut pas être affichée !<p>
                    <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">Revenir à la page d'accueil</a>

                </div>
            </div>
        </div>

    </section>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Twig/Exception/error403.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  76 => 19,  59 => 5,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@Twig/Exception/error403.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/bundles/TwigBundle/Exception/error403.html.twig");
    }
}
