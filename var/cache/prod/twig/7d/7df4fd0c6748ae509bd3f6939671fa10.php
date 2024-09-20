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

/* admin/dashboard/employe-dashboard.html.twig */
class __TwigTemplate_faa296e20d658c2e03a5de9d431183b6 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/dashboard/employe-dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "    <!-- Begin Dashboard Section -->
    <div class=\"content-wrapper\">
        <!-- Page header -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>
                            Dashboard
                                                
                        </h1>
                    </div>
                    <div class=\"col-sm-6\"></div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                  
                    <!-- Services widget -->
                    <div class=\"col-lg-3 col-6\">
                        <div class=\"small-box card\">
                            <div class=\"inner\">
                                <h3>
                                    ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["services"] ?? null)), "html", null, true);
        yield "
                                </h3>
                                <p>
                                    Services
                                                            
                                </p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fal fa-concierge-bell\"></i>
                            </div>
                            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_service_index");
        yield "\" class=\"small-box-footer text-dark\">
                                Plus d'info  
                                                        
                                <i class=\"fa fa-arrow-circle-right\"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Animals widget -->
                    <div class=\"col-lg-3 col-6\">
                        <div class=\"small-box card\">
                            <div class=\"inner\">
                                <h3>
                                    ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["testimonials"] ?? null)), "html", null, true);
        yield "
                                </h3>
                                <p>
                                    Témoignages                       
                                </p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fal fa-paw\"></i>
                            </div>
                            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_testimonial_index");
        yield "\" class=\"small-box-footer text-dark\">
                                Plus d'info  
                                <i class=\"fa fa-arrow-circle-right\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<!--  Dashboard Section End -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/dashboard/employe-dashboard.html.twig";
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
        return array (  123 => 60,  111 => 51,  96 => 39,  83 => 29,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/dashboard/employe-dashboard.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/dashboard/employe-dashboard.html.twig");
    }
}
