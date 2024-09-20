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

/* admin/dailydiet/index.html.twig */
class __TwigTemplate_d2a190b9f3cd9df0675d3a36939c248c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dailydiet/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dailydiet/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/dailydiet/index.html.twig", 1);
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
<!-- Begin dailydiet List Section -->
<div class=\"content-wrapper\">
<!-- Page header -->
<section class=\"content-header\">\t\t\t\t\t
    <div class=\"container-fluid my-2\">
        <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1>Alimentation quotidienne</h1>
            </div>
            <div class=\"col-sm-6 text-right\">
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dailydiet_new");
        yield "\" class=\"btn btn-primary\">Ajouter</a>
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
                <table id=\"dailydietstable\" class=\"table table-hover text-nowrap search-table\">
                    <thead>
                        <tr>
                            <th width=\"60\">ID</th>
                            <th>Date</th>
                            <th>Animal</th>
                            <th>Nourriture</th>
                            <th>Quantité</th>
                            <th>Employé</th>
                            <th width=\"100\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["dailydiets"]) || array_key_exists("dailydiets", $context) ? $context["dailydiets"] : (function () { throw new RuntimeError('Variable "dailydiets" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dailydiet"]) {
            // line 52
            yield "                        <tr>
                            <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                            <td>";
            // line 54
            ((CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "createdAt", [], "any", false, false, false, 54)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "createdAt", [], "any", false, false, false, 54), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "AnimalId", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "diet", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                            <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "qty", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                            <td>";
            // line 58
            ((CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "user", [], "any", false, false, false, 58)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "user", [], "any", false, false, false, 58), "fullname", [], "any", false, false, false, 58), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>
                                <a class=\"text-info w-4 h-4\" href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dailydiet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\"><i class=\"nav-icon bi bi-pencil-fill\"></i></a>
                                <form class=\"display-inline\" method=\"post\" action=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dailydiet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "id", [], "any", false, false, false, 62))), "html", null, true);
            yield "\">
                                     <button class=\"btn text-danger\"><i class=\"nav-icon bi bi-trash-fill\"></i></button>
                                </form>

                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            yield "                        <tr>
                            <td>Aucun enregistrement trouvé.</td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                        </tr>
                    ";
            // line 77
            yield "
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dailydiet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        yield "                        
                    </tbody>
                </table>\t\t\t\t\t\t\t\t\t\t
            </div>
        </div>
    </div>
</section>
</div>
<!-- dailydiet Section End -->

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
        return "admin/dailydiet/index.html.twig";
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
        return array (  195 => 79,  188 => 77,  179 => 69,  167 => 62,  163 => 61,  159 => 60,  154 => 58,  150 => 57,  146 => 56,  142 => 55,  138 => 54,  134 => 53,  131 => 52,  126 => 51,  86 => 14,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/base.html.twig' %}
{% block content %}

<!-- Begin dailydiet List Section -->
<div class=\"content-wrapper\">
<!-- Page header -->
<section class=\"content-header\">\t\t\t\t\t
    <div class=\"container-fluid my-2\">
        <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1>Alimentation quotidienne</h1>
            </div>
            <div class=\"col-sm-6 text-right\">
                <a href=\"{{ path('app_dailydiet_new') }}\" class=\"btn btn-primary\">Ajouter</a>
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
                <table id=\"dailydietstable\" class=\"table table-hover text-nowrap search-table\">
                    <thead>
                        <tr>
                            <th width=\"60\">ID</th>
                            <th>Date</th>
                            <th>Animal</th>
                            <th>Nourriture</th>
                            <th>Quantité</th>
                            <th>Employé</th>
                            <th width=\"100\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for dailydiet in dailydiets %}
                        <tr>
                            <td>{{ dailydiet.id }}</td>
                            <td>{{ dailydiet.createdAt ? dailydiet.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                            <td>{{ dailydiet.AnimalId.name }}</td>
                            <td>{{ dailydiet.diet }}</td>
                            <td>{{ dailydiet.qty }}</td>
                            <td>{{ dailydiet.user ? dailydiet.user.fullname }}</td>
                            <td>
                                <a class=\"text-info w-4 h-4\" href=\"{{ path('app_dailydiet_edit', {'id': dailydiet.id}) }}\"><i class=\"nav-icon bi bi-pencil-fill\"></i></a>
                                <form class=\"display-inline\" method=\"post\" action=\"{{ path('app_dailydiet_delete', {'id': dailydiet.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ dailydiet.id) }}\">
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
<!-- dailydiet Section End -->

{% endblock %}
", "admin/dailydiet/index.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/dailydiet/index.html.twig");
    }
}
