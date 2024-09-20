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
class __TwigTemplate_a6a87da766d5cf4a6e6e389d9bf0343b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/veterinary-dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/veterinary-dashboard.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/dashboard/veterinary-dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["animalrepports"]) || array_key_exists("animalrepports", $context) ? $context["animalrepports"] : (function () { throw new RuntimeError('Variable "animalrepports" does not exist.', 29, $this->source); })())), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["habitatrepports"]) || array_key_exists("habitatrepports", $context) ? $context["habitatrepports"] : (function () { throw new RuntimeError('Variable "habitatrepports" does not exist.', 50, $this->source); })())), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  140 => 59,  128 => 50,  113 => 38,  101 => 29,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/base.html.twig' %}
{% block content %}
    <!-- Begin Dashboard Section -->
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
                                    {{ animalrepports|length }}
                                </h3>
                                <p>
                                    Rapports animal                     
                                </p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fal fa-file-chart-line\"></i>
                            </div>
                            <a href=\"{{ path('vet_vetreport_index') }}\" class=\"small-box-footer text-dark\">
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
                                    {{ habitatrepports|length }}
                                </h3>
                                <p>
                                    Rapports habitat                       
                                </p>
                            </div>
                            <div class=\"icon\">
                                <i class=\"fal fa-file-chart-line\"></i>
                            </div>
                            <a href=\"{{ path('vet_habitatreport_index') }}\" class=\"small-box-footer text-dark\">
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
{% endblock %}
", "admin/dashboard/veterinary-dashboard.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/dashboard/veterinary-dashboard.html.twig");
    }
}
