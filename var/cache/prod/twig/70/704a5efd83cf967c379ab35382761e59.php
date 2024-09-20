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

/* front/services/details.html.twig */
class __TwigTemplate_e0af05d99d67424d9c8f0eec2c6e8bb1 extends Template
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
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/services/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "    <section class=\"service-page\">
    ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "images", [], "any", false, false, false, 4)) {
            // line 5
            yield "    <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "images", [], "any", false, false, false, 5)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "name", [], "any", false, false, false, 5))), "html", null, true);
            yield "\">
    ";
        } else {
            // line 7
            yield "    <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/breadcrumb/bg/1.jpg"), "html", null, true);
            yield "\">
    ";
        }
        // line 9
        yield "            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                            ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "          
                            </h2>
                            <ul>
                                <li>
                                    <a class=\"text-primary\" href=\"/\">
                                        Accueil 
                                                                                
                                        <i class=\"bi bi-chevron-double-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        yield "                
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <div class=\"single-service-area mt-10 mb-10\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"single-service-img\">
                            <div class=\"swiper-container single-service-slider\">
                                <div class=\"swiper-wrapper\">
                                    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "images", [], "any", false, false, false, 42));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 43
            yield "                                            <div class=\"swiper-slide\">
                                                <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 44))), "html", null, true);
            yield "\" class=\"single-img gallery-popup\">
                                                    <img class=\"img-full\" src=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 45))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "title", [], "any", false, false, false, 45), "html", null, true);
            yield "\" />
                                                </a>
                                            </div>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            yield "                                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder.webp"), "html", null, true);
            yield "\" />
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"service-thumb-wrap pt-5 pt-lg-0 row\">
                            <div class=\"col-12\">
                                <div class=\"thumbs-arrow-holder p-0\">
                                    <div class=\"swiper-container single-service-thumbs\">
                                        <div class=\"swiper-wrapper\">
                                            
                                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "images", [], "any", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 61
            yield "                                                <a href=\"#\" class=\"swiper-slide\">
                                                    <img class=\"img-full\" src=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/mini/300x300-" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 62))), "html", null, true);
            yield "\" alt=\"Thumbnail\"  />
                                                </a>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 pt-9 pt-lg-0\">
                        <div class=\"single-service-content\">
                            <h2 class=\"title mb-3\">
                               ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "title", [], "any", false, false, false, 75), "html", null, true);
        yield "                
                            </h2>
                            <p class=\"short-desc\">
                            ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["service"] ?? null), "description", [], "any", false, false, false, 78), "html", null, true);
        yield "                            
                            </p>
                            
 
                        </div>

                    </div>
                </div>
            </div>
        </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/services/details.html.twig";
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
        return array (  190 => 78,  184 => 75,  172 => 65,  163 => 62,  160 => 61,  156 => 60,  145 => 51,  136 => 49,  125 => 45,  121 => 44,  118 => 43,  113 => 42,  93 => 25,  79 => 14,  72 => 9,  66 => 7,  60 => 5,  58 => 4,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/services/details.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/services/details.html.twig");
    }
}
