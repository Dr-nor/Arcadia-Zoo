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

/* front/animals/index.html.twig */
class __TwigTemplate_aa8a5f49c3851daa1068c6ff7689e179 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        // line 3
        $context["queryParams"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 3), "query", [], "any", false, false, false, 3), "all", [], "any", false, false, false, 3);
        // line 1
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/animals/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "    <section class=\"occasions-page\">
        <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/breadcrumb/bg/1.jpg"), "html", null, true);
        yield "\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                                Nos Animaux                  
                                                            
                            </h2>
                            <ul>
                                <li>
                                    <a class=\"text-primary\" href=\"/\">
                                        Accueil 
                                                                                                                        
                                                                                
                                        <i class=\"bi bi-chevron-double-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    Rencontrez les animaux qui habitent le zoo                               
                                                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"occasions-area section-space-y-axis-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0\">
                        <div class=\"sidebar-area style-2\">
                            <div  class=\"widgets-searchbox filters mb-3\">
                                <form id=\"widgets-searchbox\" action=\"#\">
                                    <input class=\"input-field\" name=\"find\" type=\"text\" placeholder=\"Recherchez...\" />
                                    ";
        // line 47
        yield "                                </form>
                            </div>
                                
                                <form id=\"filters\" class=\"filters\">
                                    <div class=\"widgets-area mb-9\">
                                        <h2 class=\"widgets-title mb-5\">
                                            Race                                  
                                        </h2>
                                        <div class=\"widgets-item\">
                                            <ul class=\"widgets-checkbox\">
                                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["races"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["race"]) {
            // line 58
            yield "                                                ";
            // line 59
            yield "                                                ";
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["queryParams"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["queryParams"] ?? null), "races", [], "any", true, true, false, 59))) {
                // line 60
                yield "                                                    ";
                $context["checked"] = ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 60), CoreExtension::getAttribute($this->env, $this->source, ($context["queryParams"] ?? null), "races", [], "any", false, false, false, 60))) ? ("checked") : (""));
                // line 61
                yield "                                                ";
            } else {
                // line 62
                yield "                                                    ";
                $context["checked"] = "";
                // line 63
                yield "                                                ";
            }
            // line 64
            yield "                                                <li>
                                                    <input class=\"input-checkbox\" type=\"checkbox\"  name=\"races[]\" id=\"race";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 65), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 65), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["checked"] ?? null), "html", null, true);
            yield " />
                                                    <label class=\"label-checkbox mb-0\" for=\"race";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 66), "html", null, true);
            yield "\">
                                                        ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "name", [], "any", false, false, false, 67), "html", null, true);
            yield "                                          
                                                    </label>
                                                </li>
                                                    
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['race'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"widgets-area mb-9\">
                                        <h2 class=\"widgets-title mb-5\">
                                            Habitat                                
                                        </h2>
                                        <div class=\"widgets-item\">
                                            <ul class=\"widgets-checkbox\">
                                                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["habitats"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 83
            yield "                                                ";
            // line 84
            yield "                                                ";
            if (( !Twig\Extension\CoreExtension::testEmpty(($context["queryParams"] ?? null)) && CoreExtension::getAttribute($this->env, $this->source, ($context["queryParams"] ?? null), "habitats", [], "any", true, true, false, 84))) {
                // line 85
                yield "                                                    ";
                $context["checked"] = ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 85), CoreExtension::getAttribute($this->env, $this->source, ($context["queryParams"] ?? null), "habitats", [], "any", false, false, false, 85))) ? ("checked") : (""));
                // line 86
                yield "                                                ";
            } else {
                // line 87
                yield "                                                    ";
                $context["checked"] = "";
                // line 88
                yield "                                                ";
            }
            // line 89
            yield "                                                <li>
                                                    <input class=\"input-checkbox\" type=\"checkbox\"  name=\"habitats[]\" id=\"habitat";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 90), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 90), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["checked"] ?? null), "html", null, true);
            yield " />
                                                    <label class=\"label-checkbox mb-0\" for=\"habitat";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 91), "html", null, true);
            yield "\">
                                                        ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "title", [], "any", false, false, false, 92), "html", null, true);
            yield "                                          
                                                    </label>
                                                </li>
                                                    
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                                            </ul>
                                        </div>
                                    </div>

                                 
                                    <input type=\"hidden\" name=\"page\" value=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["page"] ?? null), "html", null, true);
        yield "\" />

                                </form>
                        
                            
                        </div>
                    </div>
                    <div class=\"col-xl-9 col-lg-8 order-lg-2 order-1\">
                    <div class=\"animal-topbar\">
                    <ul class=\"pt-2 pb-2\" >

                        <li class=\"animal-view-wrap\">
                            <ul class=\"nav\" role=\"tablist\">
                                <li class=\"grid-view\" role=\"presentation\">
                                    <a class=\"active\" id=\"grid-view-tab\" data-bs-toggle=\"tab\" href=\"#grid-view\" role=\"tab\" aria-selected=\"true\">
                                        <i class=\"fa fa-th\"></i>
                                    </a>
                                </li>
                                <li class=\"list-view\" role=\"presentation\">
                                    <a id=\"list-view-tab\" data-bs-toggle=\"tab\" href=\"#list-view\" role=\"tab\" aria-selected=\"true\">
                                        <i class=\"fa fa-th-list\"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                        <div id=\"content\">
                        ";
        // line 130
        yield from         $this->loadTemplate("front/animals/_content.html.twig", "front/animals/index.html.twig", 130)->unwrap()->yield($context);
        // line 131
        yield "                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

";
        return; yield '';
    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/js/filters.js"), "html", null, true);
        yield "\"></script> 
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/animals/index.html.twig";
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
        return array (  283 => 144,  278 => 143,  274 => 142,  260 => 131,  258 => 130,  227 => 102,  220 => 97,  209 => 92,  205 => 91,  197 => 90,  194 => 89,  191 => 88,  188 => 87,  185 => 86,  182 => 85,  179 => 84,  177 => 83,  173 => 82,  161 => 72,  150 => 67,  146 => 66,  138 => 65,  135 => 64,  132 => 63,  129 => 62,  126 => 61,  123 => 60,  120 => 59,  118 => 58,  114 => 57,  102 => 47,  62 => 7,  59 => 6,  55 => 5,  50 => 1,  48 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/animals/index.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/animals/index.html.twig");
    }
}
