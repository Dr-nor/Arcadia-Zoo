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

/* employe/dailydiet/index.html.twig */
class __TwigTemplate_571baf2d0c0a4c422c6000b9b2a0260b extends Template
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
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "employe/dailydiet/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_dailydiet_new");
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
                            <th width=\"100\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["dailydiets"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["dailydiet"]) {
            // line 51
            yield "                        <tr>
                            <td>";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "</td>
                            <td>";
            // line 53
            ((CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "createdAt", [], "any", false, false, false, 53)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "createdAt", [], "any", false, false, false, 53), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "AnimalId", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "diet", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "qty", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                            <td>
                                <a class=\"text-info w-4 h-4\" href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_dailydiet_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\"><i class=\"nav-icon bi bi-pencil-fill\"></i></a>
                                <form class=\"display-inline\" method=\"post\" action=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_dailydiet_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["dailydiet"], "id", [], "any", false, false, false, 60))), "html", null, true);
            yield "\">
                                     <button class=\"btn text-danger\"><i class=\"nav-icon bi bi-trash-fill\"></i></button>
                                </form>

                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            yield "                        <tr>
                            <td>Aucun enregistrement trouvé.</td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                        </tr>
                    ";
            // line 75
            yield "
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dailydiet'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employe/dailydiet/index.html.twig";
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
        return array (  172 => 77,  165 => 75,  156 => 67,  144 => 60,  140 => 59,  136 => 58,  131 => 56,  127 => 55,  123 => 54,  119 => 53,  115 => 52,  112 => 51,  107 => 50,  68 => 14,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe/dailydiet/index.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/employe/dailydiet/index.html.twig");
    }
}
