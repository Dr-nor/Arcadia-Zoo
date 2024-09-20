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

/* admin/dashboard/veterinary-dashboard.html.twig */
class __TwigTemplate_78af3a8b72f205d66b2ddcb7eebeff21 extends Template
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
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/dashboard/veterinary-dashboard.html.twig", 1);
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
                  
                    <!-- Rapport animal widget -->
                    <div class=\"col-lg-3 col-6\">
                        <div class=\"small-box card\">
                            <div class=\"inner\">
                                <h3>
                                    ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["animalrepports"] ?? null)), "html", null, true);
        yield "
                                </h3>
                                <p>
                                    Rapports animal                     
                                </p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fal fa-file-chart-line\"></i>
                            </div>
                            <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_vetreport_index");
        yield "\" class=\"small-box-footer text-dark\">
                                Plus d'info  
                                                        
                                <i class=\"fa fa-arrow-circle-right\"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Rapport habitat widget -->
                    <div class=\"col-lg-3 col-6\">
                        <div class=\"small-box card\">
                            <div class=\"inner\">
                                <h3>
                                    ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["habitatrepports"] ?? null)), "html", null, true);
        yield "
                                </h3>
                                <p>
                                    Rapports habitat                       
                                </p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fal fa-file-chart-line\"></i>
                            </div>
                            <a href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_habitatreport_index");
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
        return "admin/dashboard/veterinary-dashboard.html.twig";
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
        return array (  122 => 59,  110 => 50,  95 => 38,  83 => 29,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/dashboard/veterinary-dashboard.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/dashboard/veterinary-dashboard.html.twig");
    }
}
