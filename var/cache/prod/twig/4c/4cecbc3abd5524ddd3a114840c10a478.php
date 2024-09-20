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

/* security/layouts/base.html.twig */
class __TwigTemplate_b28d5728283b9fdd1c76b93366524397 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Arcadia Zoo</title>
    <meta name=\"robots\" content=\"index, follow\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <!-- Favicon -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/favicon.ico"), "html", null, true);
        yield "\" />

    ";
        // line 14
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 25
        yield "
</head>

<body>

    <!-- Begin Main Content Area -->
    ";
        // line 31
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 32
        yield "    <!-- Main Content Area End -->

     ";
        // line 34
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 43
        yield "
</body>

</html>
";
        return; yield '';
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        yield "    <!-- Icons CSS (Icon Fonts) -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/icons.css"), "html", null, true);
        yield "\" />

    <!-- Fonts CSS (Family Fonts) -->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/fonts.css"), "html", null, true);
        yield "\" />

    <!-- Style CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/global.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/css/back.css"), "html", null, true);
        yield "\">
    ";
        return; yield '';
    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        yield "
    <!--Plugins JS-->
    <script src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/bootstrap.bundle.min.js"), "html", null, true);
        yield "\" ></script>

     <!--Main JS-->
    <script src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/js/back.js"), "html", null, true);
        yield "\"></script>
    ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/layouts/base.html.twig";
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
        return array (  145 => 41,  139 => 38,  135 => 37,  131 => 35,  127 => 34,  120 => 31,  113 => 23,  109 => 22,  103 => 19,  97 => 16,  94 => 15,  90 => 14,  81 => 43,  79 => 34,  75 => 32,  73 => 31,  65 => 25,  63 => 14,  58 => 12,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/layouts/base.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/security/layouts/base.html.twig");
    }
}
