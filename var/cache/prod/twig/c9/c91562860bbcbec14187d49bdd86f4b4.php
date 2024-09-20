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

/* admin/animal/index.html.twig */
class __TwigTemplate_d6bafd89522cb66c7375373a5e6cb74c extends Template
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
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/animal/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "
<!-- Begin animal List Section -->
<div class=\"content-wrapper\">
<!-- Page header -->
<section class=\"content-header\">\t\t\t\t\t
    <div class=\"container-fluid my-2\">
        <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1>Animaux</h1>
            </div>
            <div class=\"col-sm-6 text-right\">
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_new");
        yield "\" class=\"btn btn-primary\">Ajouter un animal</a>
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
                <table id=\"animalstable\" class=\"table table-hover text-nowrap search-table\">
                    <thead>
                        <tr>
                            <th width=\"60\">ID</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Race</th>
                            <th>Habitat</th>
                            <th>Statut de conservation</th>
                            <th>Créé à</th>
                            <th width=\"100\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["animals"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 53
            yield "                        <tr>
                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 56
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 56)) > 0)) {
                // line 57
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/mini/300x300-" . CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 57)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "name", [], "any", false, false, false, 57))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 57), "html", null, true);
                yield "\" width=\"50\"/>
                                ";
            } else {
                // line 59
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder-square.jpeg"), "html", null, true);
                yield "\" width=\"50\"/>
                                ";
            }
            // line 61
            yield "                                
                            </td>
                            <td>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 63), "html", null, true);
            yield "</td>
                            <td>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "RaceId", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            yield "</td>
                            <td>";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "HabitatId", [], "any", false, false, false, 65), "title", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                            <td>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "status", [], "any", false, false, false, 66), "html", null, true);
            yield "</td>
                            <td>";
            // line 67
            ((CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "createdAt", [], "any", false, false, false, 67)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "createdAt", [], "any", false, false, false, 67), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>
                                <a class=\"text-info w-4 h-4\" href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\"><i class=\"nav-icon bi bi-pencil-fill\"></i></a>
                                <form class=\"display-inline\" method=\"post\" action=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 71))), "html", null, true);
            yield "\">
                                     <button class=\"btn text-danger\"><i class=\"nav-icon bi bi-trash-fill\"></i></button>
                                </form>

                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            yield "                        <tr>
                            <td>Aucun enregistrement trouvé.</td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                        </tr>
                    ";
            // line 86
            yield "
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                        
                    </tbody>
                </table>\t\t\t\t\t\t\t\t\t\t
            </div>
        </div>
    </div>
</section>
</div>
<!-- animal Section End -->

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/animal/index.html.twig";
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
        return array (  199 => 88,  192 => 86,  183 => 78,  171 => 71,  167 => 70,  163 => 69,  158 => 67,  154 => 66,  150 => 65,  146 => 64,  142 => 63,  138 => 61,  132 => 59,  124 => 57,  122 => 56,  117 => 54,  114 => 53,  109 => 52,  68 => 14,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/animal/index.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/animal/index.html.twig");
    }
}
