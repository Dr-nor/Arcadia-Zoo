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

/* admin/opening/index.html.twig */
class __TwigTemplate_79ff1d88c98ccd7f439c501ac10f99b2 extends Template
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
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/opening/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "
<!-- Begin Opening time Section -->
<div class=\"content-wrapper\">
<!-- Page header -->
<section class=\"content-header\">\t\t\t\t\t
    <div class=\"container-fluid my-2\">
        <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1>Horaires d'ouverture </h1>
            </div>
            <div class=\"col-sm-6 text-right\">
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opening_new");
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
                <table id=\"openingstable\" class=\"table table-hover text-nowrap search-table\">
                    <thead>
                        <tr>
                            <th width=\"60\">ID</th>
                            <th>Jour</th>
                            <th>Heure de début</th>
                            <th>Début de pause</th>
                            <th>Fin de pause</th>
                            <th>Heure de fin</th>
                            <th>Fermé</th>
                            <th width=\"100\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["openings"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["opening"]) {
            // line 53
            yield "                        <tr>
                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "weekday", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                            <td>";
            // line 56
            ((CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "startTime", [], "any", false, false, false, 56)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "startTime", [], "any", false, false, false, 56), "H:i"), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>";
            // line 57
            ((CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "pauseStart", [], "any", false, false, false, 57)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "pauseStart", [], "any", false, false, false, 57), "H:i"), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>";
            // line 58
            ((CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "pauseEnd", [], "any", false, false, false, 58)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "pauseEnd", [], "any", false, false, false, 58), "H:i"), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>";
            // line 59
            ((CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "endTime", [], "any", false, false, false, 59)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "endTime", [], "any", false, false, false, 59), "H:i"), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>
                                ";
            // line 61
            if (CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "is_closed", [], "any", false, false, false, 61)) {
                // line 62
                yield "                                <i class=\"bi bi-check-circle text-success\"></i>

                                ";
            } else {
                // line 65
                yield "                                <i class=\"bi bi-x-circle text-danger\"></i>

                                ";
            }
            // line 68
            yield "                            </td>

                            <td>
                                <a class=\"text-info w-4 h-4\" href=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opening_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\"><i class=\"nav-icon bi bi-pencil-fill\"></i></a>
                                <form class=\"display-inline\" method=\"post\" action=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opening_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "id", [], "any", false, false, false, 73))), "html", null, true);
            yield "\">
                                     <button class=\"btn text-danger\"><i class=\"nav-icon bi bi-trash-fill\"></i></button>
                                </form>

                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            yield "                        <tr>
                            <td>Aucun enregistrement trouvé.</td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>


                        </tr>
                    ";
            // line 92
            yield "
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opening'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "                        
                    </tbody>
                </table>\t\t\t\t\t\t\t\t\t\t
            </div>
        </div>
    </div>
</section>
</div>
<!-- Opening Time  Section End -->


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/opening/index.html.twig";
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
        return array (  199 => 94,  192 => 92,  179 => 80,  167 => 73,  163 => 72,  159 => 71,  154 => 68,  149 => 65,  144 => 62,  142 => 61,  137 => 59,  133 => 58,  129 => 57,  125 => 56,  121 => 55,  117 => 54,  114 => 53,  109 => 52,  68 => 14,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/opening/index.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/opening/index.html.twig");
    }
}
