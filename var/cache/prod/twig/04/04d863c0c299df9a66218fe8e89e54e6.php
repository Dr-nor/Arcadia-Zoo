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

/* admin/layouts/base.html.twig */
class __TwigTemplate_96be5b30187b5990f5876418e282712c extends Template
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
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Panneau d'administration</title>
        
        <meta name=\"robots\" content=\"index, follow\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Favicon -->
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/favicon.ico"), "html", null, true);
        yield "\" />
    
        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 31
        yield "\t</head>
\t<body class=\"hold-transition sidebar-mini layout-fixed\">
\t\t
        <div class=\"wrapper\">
        ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/layouts/header.html.twig");
        yield "
        ";
        // line 36
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 37
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/layouts/admin-sidebar.html.twig");
            yield "
        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EMPLOYE")) {
            // line 39
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/layouts/employe-sidebar.html.twig");
            yield "
        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_VET")) {
            // line 41
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/layouts/veterinary-sidebar.html.twig");
            yield "
        ";
        } else {
            // line 43
            yield "            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/layouts/user-sidebar.html.twig");
            yield "
        ";
        }
        // line 45
        yield "        
        ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/layouts/flash.html.twig");
        yield "
        <!-- Begin Main Content Area -->
          ";
        // line 48
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 49
        yield "         <!-- Main Content Area End -->
        ";
        // line 50
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/layouts/footer.html.twig");
        yield "
\t\t</div>

        ";
        // line 53
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 66
        yield "\t</body>
</html>";
        return; yield '';
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        yield "        <!-- Icons CSS (Icon Fonts) -->
        <link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/icons.css"), "html", null, true);
        yield "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/all.min.css"), "html", null, true);
        yield "\" />
    
        <!-- Fonts CSS (Family Fonts) -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/fonts.css"), "html", null, true);
        yield "\" />

        <!-- Plugins CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/css/plugins/datatables.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/plugins/nice-select.css"), "html", null, true);
        yield "\" />
        

    
        <!-- Style CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/css/global.css"), "html", null, true);
        yield "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/css/back.css"), "html", null, true);
        yield "\">
        ";
        return; yield '';
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        yield "
        <!--Plugins JS-->
        <script src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/bootstrap.bundle.min.js"), "html", null, true);
        yield "\" ></script>
        <script src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/js/plugins/datatables.js"), "html", null, true);
        yield "\" ></script>
        <script src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/js/plugins/fullscreen.js"), "html", null, true);
        yield "\" ></script>
        <script src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/js/plugins/pushmenu.js"), "html", null, true);
        yield "\" ></script>
        <script src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/jquery.nice-select.js"), "html", null, true);
        yield "\"></script>
         <script src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/pro.min.js"), "html", null, true);
        yield "\"></script>
        <!--Main JS-->
        <script src=\"";
        // line 64
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
        return "admin/layouts/base.html.twig";
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
        return array (  217 => 64,  212 => 62,  208 => 61,  204 => 60,  200 => 59,  196 => 58,  192 => 57,  188 => 56,  184 => 54,  180 => 53,  173 => 48,  166 => 29,  162 => 28,  154 => 23,  150 => 22,  144 => 19,  138 => 16,  134 => 15,  131 => 14,  127 => 13,  121 => 66,  119 => 53,  113 => 50,  110 => 49,  108 => 48,  103 => 46,  100 => 45,  94 => 43,  88 => 41,  82 => 39,  76 => 37,  74 => 36,  70 => 35,  64 => 31,  62 => 13,  57 => 11,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/layouts/base.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/layouts/base.html.twig");
    }
}
