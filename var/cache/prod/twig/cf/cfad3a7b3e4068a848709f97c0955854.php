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

/* admin/layouts/header.html.twig */
class __TwigTemplate_eea35ae075f011f6bce6d10da2f107c1 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- Begin Header Section-->
<nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
<!-- Right navbar links -->
<ul class=\"navbar-nav\">
    <li class=\"nav-item\">
          <a class=\"nav-link pushmenu-btn\" data-widget=\"pushmenu\" href=\"#\" role=\"button\"><i class=\"bi bi-list\"></i></a>
    </li>\t\t\t\t\t
</ul>
<div class=\"navbar-nav pl-2\">
    <!-- <ol class=\"breadcrumb p-0 m-0 bg-white\">
        <li class=\"breadcrumb-item active\">Dashboard</li>
    </ol> -->
</div>

<ul class=\"navbar-nav ml-auto\">
    <li class=\"nav-item\">
        <a class=\"nav-link\" data-widget=\"fullscreen\" href=\"#\" role=\"button\">
            <i class=\"bi bi-arrows-fullscreen\"></i>
        </a>
    </li>
    <li class=\"nav-item dropdown\">
        <a class=\"nav-link  dropdown-toggle p-0 pr-3\" data-toggle=\"dropdown\" href=\"#\">
            <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/user.png"), "html", null, true);
        yield "\" class='img-circle elevation-2' width=\"40\" height=\"40\" alt=\"\"/>
        </a>
        <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right p-3\">
            <h4 class=\"h4 mb-0\"><strong>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 26), "Fullname", [], "any", false, false, false, 26), "html", null, true);
        yield "</strong></h4>
            <div class=\"mb-3\">";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 27), "userIdentifier", [], "any", false, false, false, 27), "html", null, true);
        yield "</div>
            <div class=\"dropdown-divider\"></div>
            <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_editpass");
        yield "\"class=\"dropdown-item\">
                <i class=\"bi bi-lock mr-2\"></i> Changer le mot de passe
            </a>
            <div class=\"dropdown-divider\"></div>
            <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"dropdown-item \">
                <i class=\"bi bi-box-arrow-right mr-2\"></i> Déconnexion\t\t\t\t\t\t\t
            </a>\t\t\t\t\t\t\t
        </div>
    </li>
</ul>
</nav>

<!--  Header Section End-->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/layouts/header.html.twig";
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
        return array (  88 => 33,  81 => 29,  76 => 27,  72 => 26,  66 => 23,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/layouts/header.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/layouts/header.html.twig");
    }
}
