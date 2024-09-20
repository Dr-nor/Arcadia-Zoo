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

/* admin/layouts/veterinary-sidebar.html.twig */
class __TwigTemplate_f899eff0c4de6fed69010c57df1129ba extends Template
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
        yield "<!-- Begin Sidebar Area -->
<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Logo -->
    <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinary_dashboard");
        yield "\" class=\"brand-link\">
        <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/logo/light.svg"), "html", null, true);
        yield "\" width=\"180\" alt=\"Logo\" />
    </a>
    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar user -->

        <!-- Begin Sidebar Nav -->
            <nav class=\"mt-2\"> 
            <ul class=\"nav nav-pills nav-sidebar flex-column\" role=\"menu\" data-accordion=\"false\">
                <li class=\"nav-item\">
                    <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_veterinary_dashboard");
        yield "\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-tachometer-alt-average\"></i> 
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                
           
            <li class=\"nav-item\">
                    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_vetreport_index");
        yield "\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-file-chart-line\"></i>
                        <p>
                            Rapports Animal
                        </p>
                    </a>
            </li>
            <li class=\"nav-item\">
                    <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_habitatreport_index");
        yield "\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-file-chart-line\"></i>
                        <p>
                            Rapports Habitat
                        </p>
                    </a>
            </li>
            <li class=\"nav-item\">
            <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_dailydiet_index");
        yield "\" class=\"nav-link\">
                <i class=\"nav-icon fal fa-paw\"></i>
                <p>
                    Alimentation animaux
                </p>
            </a>
        </li>

            
            </ul>
        </nav>
    <!-- sidebar Nav end -->
    </div>
</aside>

<!-- Sidebar Area End -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/layouts/veterinary-sidebar.html.twig";
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
        return array (  99 => 41,  88 => 33,  77 => 25,  64 => 15,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/layouts/veterinary-sidebar.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/layouts/veterinary-sidebar.html.twig");
    }
}
