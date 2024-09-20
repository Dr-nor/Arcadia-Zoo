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

/* front/layouts/base.html.twig */
class __TwigTemplate_a5a667fc1dafa2a0bf73e70edcb89485 extends Template
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
        <title>
            Arcadia Zoo       
        </title>
        <meta name=\"robots\" content=\"index, follow\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Favicon -->
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/favicon.ico"), "html", null, true);
        yield "\" />

        ";
        // line 15
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 36
        yield "
    </head>

    <body>

        
        ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "front/layouts/header.html.twig");
        yield "
        <!-- Begin Main Content Area -->
        ";
        // line 44
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 45
        yield "        <!-- Main Content Area End -->
        ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "front/layouts/footer.html.twig");
        yield "

        ";
        // line 48
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 68
        yield "
    </body>

</html>
";
        return; yield '';
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        yield "
            <!-- Icons CSS (Icon Fonts) -->
            <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/icons.css"), "html", null, true);
        yield "\" />

            <!-- Fonts CSS (Family Fonts) -->
            <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/fonts.css"), "html", null, true);
        yield "\" />

            <!-- Plugins CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/css/plugins/animate.min.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/css/plugins/jquery-ui.min.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/css/plugins/swiper-bundle.min.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/css/plugins/magnific-popup.min.css"), "html", null, true);
        yield "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/css/plugins/ion.rangeSlider.min.css"), "html", null, true);
        yield "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/plugins/nice-select.css"), "html", null, true);
        yield "\" />

            <!-- Style CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/global.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/css/front.css"), "html", null, true);
        yield "\">

        ";
        return; yield '';
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        yield "
            <!--Plugins JS-->
            <script src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/jquery-migrate-3.3.2.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/jquery-ui.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/js/plugins/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/js/plugins/modernizr-3.11.2.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/js/plugins/wow.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/js/plugins/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/js/plugins/parallax.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/js/plugins/tippy.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/js/plugins/ion.rangeSlider.min.js"), "html", null, true);
        yield "\"></script>
            <script src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/jquery.nice-select.js"), "html", null, true);
        yield "\"></script>

            <!--Main JS-->
            <script src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/js/front.js"), "html", null, true);
        yield "\"></script>

        ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/layouts/base.html.twig";
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
        return array (  223 => 65,  217 => 62,  213 => 61,  209 => 60,  205 => 59,  201 => 58,  197 => 57,  193 => 56,  189 => 55,  185 => 54,  181 => 53,  177 => 52,  173 => 51,  169 => 49,  165 => 48,  158 => 44,  150 => 33,  146 => 32,  140 => 29,  136 => 28,  132 => 27,  128 => 26,  124 => 25,  120 => 24,  114 => 21,  108 => 18,  104 => 16,  100 => 15,  91 => 68,  89 => 48,  84 => 46,  81 => 45,  79 => 44,  74 => 42,  66 => 36,  64 => 15,  59 => 13,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/layouts/base.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/layouts/base.html.twig");
    }
}
