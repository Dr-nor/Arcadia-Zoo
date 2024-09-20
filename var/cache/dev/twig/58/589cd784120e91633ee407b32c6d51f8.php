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

/* admin/layouts/employe-sidebar.html.twig */
class __TwigTemplate_6a80a3c54518ce78d850fd43ba0aa02a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/employe-sidebar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/employe-sidebar.html.twig"));

        // line 1
        yield "<!-- Begin Sidebar Area -->
<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Logo -->
    <a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_dashboard");
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_employe_dashboard");
        yield "\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-tachometer-alt-average\"></i> 
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                
           
            <li class=\"nav-item\">
                    <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_service_index");
        yield "\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-concierge-bell\"></i>
                        <p>
                            Services
                        </p>
                    </a>
            </li>
            <li class=\"nav-item\">
            <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_dailydiet_index");
        yield "\" class=\"nav-link\">
                <i class=\"nav-icon fal fa-paw\"></i>
                <p>
                    Alimentation animaux
                </p>
            </a>
        </li>

            <li class=\"nav-item\">
                <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_testimonial_index");
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
        return "admin/layouts/employe-sidebar.html.twig";
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
        return array (  105 => 41,  93 => 32,  82 => 24,  69 => 14,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Begin Sidebar Area -->
<aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
    <!-- Logo -->
    <a href=\"{{ path('app_employe_dashboard') }}\" class=\"brand-link\">
        <img src=\"{{ asset('front-assets/images/logo/light.svg') }}\" width=\"180\" alt=\"Logo\" />
    </a>
    <!-- Sidebar -->
    <div class=\"sidebar\">
        <!-- Sidebar user -->

        <!-- Begin Sidebar Nav -->
            <nav class=\"mt-2\"> <ul class=\"nav nav-pills nav-sidebar flex-column\" role=\"menu\" data-accordion=\"false\">
                <li class=\"nav-item\">
                    <a href=\"{{ path('app_employe_dashboard') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-tachometer-alt-average\"></i> 
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                
           
            <li class=\"nav-item\">
                    <a href=\"{{ path('employe_service_index') }}\" class=\"nav-link\">
                        <i class=\"nav-icon fal fa-concierge-bell\"></i>
                        <p>
                            Services
                        </p>
                    </a>
            </li>
            <li class=\"nav-item\">
            <a href=\"{{ path('employe_dailydiet_index') }}\" class=\"nav-link\">
                <i class=\"nav-icon fal fa-paw\"></i>
                <p>
                    Alimentation animaux
                </p>
            </a>
        </li>

            <li class=\"nav-item\">
                <a href=\"{{ path('employe_testimonial_index') }}\" class=\"nav-link\">
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
", "admin/layouts/employe-sidebar.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/layouts/employe-sidebar.html.twig");
    }
}
