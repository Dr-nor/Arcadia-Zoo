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

/* veterinary/vetreport/index.html.twig */
class __TwigTemplate_8c3a49e0504f63999f2d30b77c8ae709 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary/vetreport/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary/vetreport/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "veterinary/vetreport/index.html.twig", 1);
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
        yield "
<!-- Begin vetreport List Section -->
<div class=\"content-wrapper\">
<!-- Page header -->
<section class=\"content-header\">\t\t\t\t\t
    <div class=\"container-fluid my-2\">
        <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1>Rapports vétérinaire</h1>
            </div>
            <div class=\"col-sm-6 text-right\">
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_vetreport_new");
        yield "\" class=\"btn btn-primary\">Ajouter un rapport</a>
            </div>
        </div>
    </div>
</section>
<!-- Main content -->
<section class=\"content\">
    <!-- Default box -->
    <div class=\"container-fluid\">
        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"card-tools\">
                    <div class=\"input-group input-group\" style=\"width: 250px;\">
                        <input type=\"text\" name=\"table_search\" class=\"form-control float-right search-input\" placeholder=\"Search\">
    
                        <div class=\"input-group-append\">
                          <button type=\"submit\" class=\"btn btn-default\">
                            <i class=\"bi bi-search\"></i>
                          </button>
                        </div>
                      </div>
                </div>
            </div>
            <div class=\"card-body table-responsive p-0\">\t\t\t\t\t\t\t\t
                <table id=\"vetreportstable\" class=\"table table-hover text-nowrap search-table\">
                    <thead>
                        <tr>
                            <th width=\"60\">ID</th>
                            <th>Date</th>
                            <th>Animal</th>
                            <th>Nourriture</th>
                            <th>grammage</th>
                            <th>Etat</th>
                            <th>Vétérinaire</th>
                            <th width=\"100\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vetreports"]) || array_key_exists("vetreports", $context) ? $context["vetreports"] : (function () { throw new RuntimeError('Variable "vetreports" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["vetreport"]) {
            // line 53
            yield "                        <tr>
                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                            <td>";
            // line 55
            ((CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "createdAt", [], "any", false, false, false, 55)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "createdAt", [], "any", false, false, false, 55), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "AnimalId", [], "any", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                            <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "diet", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                            <td>";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "grammage", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                            <td>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "state", [], "any", false, false, false, 59), "html", null, true);
            yield "</td>
                            <td>";
            // line 60
            ((CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "user", [], "any", false, false, false, 60)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "user", [], "any", false, false, false, 60), "fullname", [], "any", false, false, false, 60), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>
                                <a class=\"text-info w-4 h-4\" href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_vetreport_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            yield "\"><i class=\"nav-icon bi bi-pencil-fill\"></i></a>
                                <form class=\"display-inline\" method=\"post\" action=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_vetreport_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["vetreport"], "id", [], "any", false, false, false, 64))), "html", null, true);
            yield "\">
                                     <button class=\"btn text-danger\"><i class=\"nav-icon bi bi-trash-fill\"></i></button>
                                </form>

                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            yield "                        <tr>
                            <td>Aucun enregistrement trouvé.</td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                        </tr>
                    ";
            // line 79
            yield "
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vetreport'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                        
                    </tbody>
                </table>\t\t\t\t\t\t\t\t\t\t
            </div>
        </div>
    </div>
</section>
</div>
<!-- vetreport Section End -->

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
        return "veterinary/vetreport/index.html.twig";
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
        return array (  200 => 81,  193 => 79,  184 => 71,  172 => 64,  168 => 63,  164 => 62,  159 => 60,  155 => 59,  151 => 58,  147 => 57,  143 => 56,  139 => 55,  135 => 54,  132 => 53,  127 => 52,  86 => 14,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/base.html.twig' %}
{% block content %}

<!-- Begin vetreport List Section -->
<div class=\"content-wrapper\">
<!-- Page header -->
<section class=\"content-header\">\t\t\t\t\t
    <div class=\"container-fluid my-2\">
        <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1>Rapports vétérinaire</h1>
            </div>
            <div class=\"col-sm-6 text-right\">
                <a href=\"{{ path('vet_vetreport_new') }}\" class=\"btn btn-primary\">Ajouter un rapport</a>
            </div>
        </div>
    </div>
</section>
<!-- Main content -->
<section class=\"content\">
    <!-- Default box -->
    <div class=\"container-fluid\">
        <div class=\"card\">
            <div class=\"card-header\">
                <div class=\"card-tools\">
                    <div class=\"input-group input-group\" style=\"width: 250px;\">
                        <input type=\"text\" name=\"table_search\" class=\"form-control float-right search-input\" placeholder=\"Search\">
    
                        <div class=\"input-group-append\">
                          <button type=\"submit\" class=\"btn btn-default\">
                            <i class=\"bi bi-search\"></i>
                          </button>
                        </div>
                      </div>
                </div>
            </div>
            <div class=\"card-body table-responsive p-0\">\t\t\t\t\t\t\t\t
                <table id=\"vetreportstable\" class=\"table table-hover text-nowrap search-table\">
                    <thead>
                        <tr>
                            <th width=\"60\">ID</th>
                            <th>Date</th>
                            <th>Animal</th>
                            <th>Nourriture</th>
                            <th>grammage</th>
                            <th>Etat</th>
                            <th>Vétérinaire</th>
                            <th width=\"100\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for vetreport in vetreports %}
                        <tr>
                            <td>{{ vetreport.id }}</td>
                            <td>{{ vetreport.createdAt ? vetreport.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                            <td>{{ vetreport.AnimalId.name }}</td>
                            <td>{{ vetreport.diet }}</td>
                            <td>{{ vetreport.grammage }}</td>
                            <td>{{ vetreport.state }}</td>
                            <td>{{ vetreport.user ? vetreport.user.fullname }}</td>
                            <td>
                                <a class=\"text-info w-4 h-4\" href=\"{{ path('vet_vetreport_edit', {'id': vetreport.id}) }}\"><i class=\"nav-icon bi bi-pencil-fill\"></i></a>
                                <form class=\"display-inline\" method=\"post\" action=\"{{ path('vet_vetreport_delete', {'id': vetreport.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ vetreport.id) }}\">
                                     <button class=\"btn text-danger\"><i class=\"nav-icon bi bi-trash-fill\"></i></button>
                                </form>

                            </td>
                        </tr>
                        {% else %}
                        <tr>
                            <td>Aucun enregistrement trouvé.</td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                        </tr>
                    {# {% endif %} #}

                         {% endfor %}
                        
                    </tbody>
                </table>\t\t\t\t\t\t\t\t\t\t
            </div>
        </div>
    </div>
</section>
</div>
<!-- vetreport Section End -->

{% endblock %}
", "veterinary/vetreport/index.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/veterinary/vetreport/index.html.twig");
    }
}
