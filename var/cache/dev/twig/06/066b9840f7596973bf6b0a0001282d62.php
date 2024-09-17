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
class __TwigTemplate_11f127a73be8d57c72cc79a7771e0525 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/admin-sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/admin-sidebar.html.twig"));

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
            <li class=\"nav-item\">
                    <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_habitat_index");
        yield "\" class=\"nav-link\">
                        <i class=\"nav-icon  fal fa-tree\"></i>
                        <p>
                            Habitats
                        </p>
                    </a>
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
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_index");
        yield "\" class=\"nav-link\">
                        <p>
                            Liste des animaux
                        </p>
                    </a>
                </li>
            
                <li class=\"nav-item ml-4\">
                    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_race_index");
        yield "\" class=\"nav-link\">
                        <p>
                            Races
                        </p>
                    </a>
                </li>
            </ul>
        </li>

            <li class=\"nav-item\">
                <a href=\"";
        // line 82
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  158 => 82,  145 => 72,  134 => 64,  113 => 46,  102 => 38,  91 => 30,  80 => 22,  69 => 14,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Begin Sidebar Area -->
<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Logo -->
    <a href=\"{{ path('app_admin_dashboard') }}\" class=\"brand-link\">
        <img src=\"{{ asset('front-assets/images/logo/light.svg') }}\" width=\"180\" alt=\"Logo\" />
    </a>
    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar user -->

        <!-- Begin Sidebar Nav -->
            <nav class=\"mt-2\"> <ul class=\"nav nav-pills nav-sidebar flex-column\" role=\"menu\" data-accordion=\"false\">
                <li class=\"nav-item\">
                    <a href=\"{{ path('app_admin_dashboard') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-tachometer-alt-average\"></i> 
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class=\"nav-item\">
                <a href=\"{{ path('app_user_index') }}\" class=\"nav-link\">
                    <i class=\"nav-icon fal fa-user-cog\"></i>
                    <p>
                        Utilisateurs
                    </p>
                </a>
            </li>
            <li class=\"nav-item\">
                    <a href=\"{{ path('app_opening_index') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-clock\"></i>
                        <p>
                            Horaires d'ouverture
                        </p>
                    </a>
            </li>
            <li class=\"nav-item\">
                    <a href=\"{{ path('app_service_index') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-concierge-bell\"></i>
                        <p>
                            Services
                        </p>
                    </a>
            </li>
            <li class=\"nav-item\">
                    <a href=\"{{ path('app_habitat_index') }}\" class=\"nav-link\">
                        <i class=\"nav-icon  fal fa-tree\"></i>
                        <p>
                            Habitats
                        </p>
                    </a>
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
                    <a href=\"{{ path('app_animal_index') }}\" class=\"nav-link\">
                        <p>
                            Liste des animaux
                        </p>
                    </a>
                </li>
            
                <li class=\"nav-item ml-4\">
                    <a href=\"{{ path('app_race_index') }}\" class=\"nav-link\">
                        <p>
                            Races
                        </p>
                    </a>
                </li>
            </ul>
        </li>

            <li class=\"nav-item\">
                <a href=\"{{ path('app_testimonial_index') }}\" class=\"nav-link\">
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
", "admin/layouts/admin-sidebar.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/layouts/admin-sidebar.html.twig");
    }
}
