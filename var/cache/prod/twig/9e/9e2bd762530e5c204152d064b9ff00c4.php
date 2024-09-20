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

/* front/services/index.html.twig */
class __TwigTemplate_72b473d1cdc123f6e64938144a79ea90 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/services/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "    <section class=\"services-page\">
        <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/breadcrumb/bg/1.jpg"), "html", null, true);
        yield "\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                                Nos services                             
                                                            
                            </h2>
                            <ul>
                                <li>
                                    <a class=\"text-primary\" href=\"/\">
                                        Accueil                                     
                                                                                
                                        <i class=\"bi bi-chevron-double-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    Services                          
                                                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"services-area section-space-y-axis-50\">
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["services"] ?? null), "data", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 36
            yield "                        <div class=\"col-xl-4 col-sm-6 \">
                            <div class=\"service-item\">
                                <div class=\"service-img img-hover-effect\">
                                    <a class=\"img-zoom-effect\" href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "slug", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\">
                                        ";
            // line 40
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 40)) > 0)) {
                // line 41
                yield "                                            <img
                                        src=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 42)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "name", [], "any", false, false, false, 42))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 42), "html", null, true);
                yield "\" />
                                            ";
            } else {
                // line 44
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder.webp"), "html", null, true);
                yield "\" />
                                        ";
            }
            // line 46
            yield "                                    </a>
                                </div>
                                <div class=\"service-content pt-6\">

                                    <h2 class=\"mb-3\">
                                        <a class=\"title\">
                                            ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 52), "html", null, true);
            yield "
                                        </a>
                                    </h2>
                                    <p class=\"short-desc mb-7\">
                                        ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 56)), 0, 70) . "..."), "html", null, true);
            yield "
                                    </p>

                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                </div>
                
                ";
        // line 65
        $context["path"] = "services_index";
        // line 66
        yield "                ";
        $context["pages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["services"] ?? null), "pages", [], "any", false, false, false, 66);
        // line 67
        yield "                ";
        $context["currentPage"] = CoreExtension::getAttribute($this->env, $this->source, ($context["services"] ?? null), "page", [], "any", false, false, false, 67);
        // line 68
        yield "                ";
        yield from         $this->loadTemplate("front/layouts/pagination.html.twig", "front/services/index.html.twig", 68)->unwrap()->yield($context);
        // line 69
        yield "            </div>
        </div>

    </section>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/services/index.html.twig";
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
        return array (  166 => 69,  163 => 68,  160 => 67,  157 => 66,  155 => 65,  151 => 63,  138 => 56,  131 => 52,  123 => 46,  117 => 44,  110 => 42,  107 => 41,  105 => 40,  101 => 39,  96 => 36,  92 => 35,  58 => 4,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/services/index.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/services/index.html.twig");
    }
}
