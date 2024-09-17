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
class __TwigTemplate_ed791c287ad4543c0bbc23aac80f9558 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/base.html.twig"));

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
        }
        // line 39
        yield "        
        ";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/layouts/flash.html.twig");
        yield "
        <!-- Begin Main Content Area -->
          ";
        // line 42
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 43
        yield "         <!-- Main Content Area End -->
        ";
        // line 44
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/layouts/footer.html.twig");
        yield "
\t\t</div>

        ";
        // line 47
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 60
        yield "\t</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        yield "
        <!--Plugins JS-->
        <script src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/jquery-3.6.0.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/bootstrap.bundle.min.js"), "html", null, true);
        yield "\" ></script>
        <script src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/js/plugins/datatables.js"), "html", null, true);
        yield "\" ></script>
        <script src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/js/plugins/fullscreen.js"), "html", null, true);
        yield "\" ></script>
        <script src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/js/plugins/pushmenu.js"), "html", null, true);
        yield "\" ></script>
        <script src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/plugins/jquery.nice-select.js"), "html", null, true);
        yield "\"></script>
         <script src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("global-assets/js/pro.min.js"), "html", null, true);
        yield "\"></script>
        <!--Main JS-->
        <script src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/js/back.js"), "html", null, true);
        yield "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  241 => 58,  236 => 56,  232 => 55,  228 => 54,  224 => 53,  220 => 52,  216 => 51,  212 => 50,  208 => 48,  198 => 47,  179 => 42,  166 => 29,  162 => 28,  154 => 23,  150 => 22,  144 => 19,  138 => 16,  134 => 15,  131 => 14,  121 => 13,  109 => 60,  107 => 47,  101 => 44,  98 => 43,  96 => 42,  91 => 40,  88 => 39,  82 => 37,  80 => 36,  76 => 35,  70 => 31,  68 => 13,  63 => 11,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title>Panneau d'administration</title>
        
        <meta name=\"robots\" content=\"index, follow\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Favicon -->
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('front-assets/images/favicon.ico') }}\" />
    
        {% block stylesheets %}
        <!-- Icons CSS (Icon Fonts) -->
        <link rel=\"stylesheet\" href=\"{{ asset('global-assets/css/icons.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('global-assets/css/all.min.css') }}\" />
    
        <!-- Fonts CSS (Family Fonts) -->
        <link rel=\"stylesheet\" href=\"{{ asset('global-assets/css/fonts.css') }}\" />

        <!-- Plugins CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('admin-assets/css/plugins/datatables.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('global-assets/css/plugins/nice-select.css') }}\" />
        

    
        <!-- Style CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('global-assets/css/global.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('admin-assets/css/back.css') }}\">
        {% endblock %}
\t</head>
\t<body class=\"hold-transition sidebar-mini layout-fixed\">
\t\t
        <div class=\"wrapper\">
        {{ include('admin/layouts/header.html.twig') }}
        {% if is_granted('ROLE_ADMIN') %}
            {{ include('admin/layouts/admin-sidebar.html.twig') }}
        {% endif %}
        
        {{ include('admin/layouts/flash.html.twig') }}
        <!-- Begin Main Content Area -->
          {% block content %}{% endblock %}
         <!-- Main Content Area End -->
        {{ include('admin/layouts/footer.html.twig') }}
\t\t</div>

        {% block javascripts %}

        <!--Plugins JS-->
        <script src=\"{{ asset('global-assets/js/plugins/jquery-3.6.0.min.js') }}\"></script>
        <script src=\"{{ asset('global-assets/js/plugins/bootstrap.bundle.min.js') }}\" ></script>
        <script src=\"{{ asset('admin-assets/js/plugins/datatables.js') }}\" ></script>
        <script src=\"{{ asset('admin-assets/js/plugins/fullscreen.js') }}\" ></script>
        <script src=\"{{ asset('admin-assets/js/plugins/pushmenu.js') }}\" ></script>
        <script src=\"{{ asset('global-assets/js/plugins/jquery.nice-select.js') }}\"></script>
         <script src=\"{{ asset('global-assets/js/pro.min.js') }}\"></script>
        <!--Main JS-->
        <script src=\"{{ asset('admin-assets/js/back.js') }}\"></script>
        {% endblock %}
\t</body>
</html>", "admin/layouts/base.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/layouts/base.html.twig");
    }
}
