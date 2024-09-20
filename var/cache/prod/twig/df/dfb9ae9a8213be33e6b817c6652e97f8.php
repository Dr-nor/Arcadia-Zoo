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

/* admin/layouts/admin-sidebar.html.twig */
class __TwigTemplate_a3618a9a92dd60d7abbe820e17d5ca1c extends Template
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
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
            <nav class=\"mt-2\"> <ul class=\"nav nav-pills nav-sidebar flex-column\" role=\"menu\" data-accordion=\"false\">
                <li class=\"nav-item\">
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-tachometer-alt-average\"></i> 
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class=\"nav-item\">
                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"nav-link\">
                    <i class=\"nav-icon fal fa-user-cog\"></i>
                    <p>
                        Utilisateurs
                    </p>
                </a>
            </li>
            <li class=\"nav-item\">
                    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opening_index");
        yield "\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-clock\"></i>
                        <p>
                            Horaires d'ouverture
                        </p>
                    </a>
            </li>
            <li class=\"nav-item\">
                    <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_index");
        yield "\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-concierge-bell\"></i>
                        <p>
                            Services
                        </p>
                    </a>
            </li>

            <li class=\"nav-item animal-dropdown dropdown\" aria-expanded=\"true\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\">
                    <i class=\"nav-icon fal  fal fa-tree\"></i>
                    <p>
                        Habitats
                    </p>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-dark\">
                    <li class=\"nav-item ml-4\">
                        <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_index");
        yield "\" class=\"nav-link\">
                            <p>
                                Liste des habitats
                            </p>
                        </a>
                        
                    </li>
                    <li class=\"nav-item ml-4\">
                    <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitatreport_index");
        yield "\" class=\"nav-link\">
                        <p>
                            Rapports vétérinaire
                        </p>
                    </a>
                </li>

                </ul>
            </li>


            <li class=\"nav-item  animal-dropdown dropdown \" aria-expanded=\"true\">
                <a href=\"#\" class=\"nav-link dropdown-toggle\">
                    <i class=\"nav-icon fal fa-paw\"></i>
                    <p>
                        Animaux
                    </p>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-dark\">
                    <li class=\"nav-item ml-4\">
                        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_index");
        yield "\" class=\"nav-link\">
                            <p>
                                Liste des animaux
                            </p>
                        </a>
                    </li>
            
                    <li class=\"nav-item ml-4\">
                        <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_race_index");
        yield "\" class=\"nav-link\">
                            <p>
                                Races
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item ml-4\">
                    <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dailydiet_index");
        yield "\" class=\"nav-link\">
                        <p>
                            Alimentation
                        </p>
                    </a>
                </li>
                <li class=\"nav-item ml-4\">
                    <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vetreport_index");
        yield "\" class=\"nav-link\">
                        <p>
                            Rapports vétérinaire
                        </p>
                    </a>
                </li>
            </ul>
        </li>

            <li class=\"nav-item\">
                <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial_index");
        yield "\" class=\"nav-link\">
                    <i class=\"nav-icon fal fa-comment-lines\"></i>
                    <p>
                        Témoignages
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
        return "admin/layouts/admin-sidebar.html.twig";
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
        return array (  195 => 116,  182 => 106,  172 => 99,  162 => 92,  151 => 84,  127 => 63,  116 => 55,  96 => 38,  85 => 30,  74 => 22,  63 => 14,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/layouts/admin-sidebar.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/layouts/admin-sidebar.html.twig");
    }
}
