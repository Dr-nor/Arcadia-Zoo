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

/* employe/testimonial/index.html.twig */
class __TwigTemplate_14d49ba7ca6f2cec5390bdd4091c4960 extends Template
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
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "employe/testimonial/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "
<!-- Begin testimonial List Section -->
<div class=\"content-wrapper\">
<!-- Page header -->
<section class=\"content-header\">\t\t\t\t\t
    <div class=\"container-fluid my-2\">
        <div class=\"row mb-2\">
            <div class=\"col-sm-6\">
                <h1>Témoignages</h1>
            </div>
            <div class=\"col-sm-6 text-right\">
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_testimonial_new");
        yield "\" class=\"btn btn-primary\">Ajouter un témoignage</a>
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
                <table id=\"testimonialstable\" class=\"table table-hover text-nowrap search-table\">
                    <thead>
                        <tr>
                            <th width=\"60\">ID</th>
                            <th>Active</th>
                            <th>Pseudonyme</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Note</th>
                            <th>Commentaire</th>
                            <th>Employé</th>
                            <th>créé à</th>
                            <th width=\"100\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["testimonials"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 55
            yield "                        ";
            // line 56
            yield "                        <tr>
                            <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 59
            if (CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "active", [], "any", false, false, false, 59)) {
                // line 60
                yield "                                    <i class=\"bi bi-check-circle text-success\"></i>

                                ";
            } else {
                // line 63
                yield "                                    <i class=\"bi bi-x-circle text-danger\"></i>
                                ";
            }
            // line 65
            yield "                            </td>
                            
                            <td>";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "pseudonym", [], "any", false, false, false, 67), "html", null, true);
            yield "</td>
                            <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "email", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                            <td>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "phone", [], "any", false, false, false, 69), "html", null, true);
            yield "</td>
                            <td>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "note", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                            <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "comment", [], "any", false, false, false, 71)), 0, 70) . "..."), "html", null, true);
            yield "</td>
                            <td>";
            // line 72
            ((CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "user", [], "any", false, false, false, 72)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "user", [], "any", false, false, false, 72), "fullname", [], "any", false, false, false, 72), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>";
            // line 73
            ((CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "createdAt", [], "any", false, false, false, 73)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "createdAt", [], "any", false, false, false, 73), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
            yield "</td>
                            <td>
                                ";
            // line 76
            yield "                                <a class=\"text-info w-4 h-4\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_testimonial_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\"><i class=\"nav-icon bi bi-pencil-fill\"></i></a>
                                <form class=\"display-inline\" method=\"post\" action=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_testimonial_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "id", [], "any", false, false, false, 78))), "html", null, true);
            yield "\">
                                     <button class=\"btn text-danger\"><i class=\"nav-icon bi bi-trash-fill\"></i></button>
                                </form>

                            </td>
                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            yield "                        <tr>
                            <td>Aucun enregistrement trouvé.</td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                            <td class=\"hidden\"></td>
                        </tr>
                    ";
            // line 98
            yield "
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "                        
                    </tbody>
                </table>\t\t\t\t\t\t\t\t\t\t
            </div>
        </div>
    </div>
</section>
</div>
<!-- testimonial List Section End -->


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employe/testimonial/index.html.twig";
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
        return array (  212 => 100,  205 => 98,  191 => 85,  179 => 78,  175 => 77,  170 => 76,  165 => 73,  161 => 72,  157 => 71,  153 => 70,  149 => 69,  145 => 68,  141 => 67,  137 => 65,  133 => 63,  128 => 60,  126 => 59,  121 => 57,  118 => 56,  116 => 55,  111 => 54,  68 => 14,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe/testimonial/index.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/employe/testimonial/index.html.twig");
    }
}
