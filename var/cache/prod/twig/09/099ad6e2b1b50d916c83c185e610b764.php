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

/* front/animals/_content.html.twig */
class __TwigTemplate_7012e84efdc3106ede6e7bbab4270ded extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"tab-content text-charcoal pt-8\">
    <div class=\"page-count\">
    <span>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["total"] ?? null), "html", null, true);
        yield "</span> Résultats trouvés                             
    </div>
    <div class=\"tab-pane fade show active\" id=\"grid-view\" role=\"tabpanel\" aria-labelledby=\"grid-view-tab\">
        <div class=\"animal-grid-view row\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["animals"] ?? null), "data", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 8
            yield "                <div class=\"col-xl-4 col-sm-6 \">
                    <div class=\"animal-item\">
                        <div class=\"animal-inner\">
                            <a class='animal-link' href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 11)]), "html", null, true);
            yield "\"></a>
                            <div class=\"animal-header\">
                                <div class=\"vprice_wrap\">
                                        <div class=\"price\">
                                            ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "status", [], "any", false, false, false, 15), "html", null, true);
            yield "

                                        </div>
                                    </div>
                                    <a href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\">
                                        <div class=\"animal-img\">
                                            ";
            // line 21
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 21)) > 0)) {
                // line 22
                yield "                                                <img
                                            src=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 23)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "name", [], "any", false, false, false, 23))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 23), "html", null, true);
                yield "\" />
                                                ";
            } else {
                // line 25
                yield "                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder.webp"), "html", null, true);
                yield "\" />
                                            ";
            }
            // line 27
            yield "                                        </div>
                                    </a>
                                </div>
                            <div class=\"animal-content\">
                                <div class=\"animal-content-top\">
                                    <div class=\"animal-content-top-left\">
                                        <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"vtitle\">
                                            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 34), "html", null, true);
            yield "

                                        </a>
                                    </div>
                                </div>
                                <div class=\"animal-content-middle\">
                                    <div class=\"inline-group\">
                                    <div class=\"inline-item\">
                                            <span class=\"attr\">
                                            <b>Habitat:</b>                                                                                                                                                      
                                            </span>
                                            <span>
                                                ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "HabitatId", [], "any", false, false, false, 46), "title", [], "any", false, false, false, 46), "html", null, true);
            yield "                                                                
                                            </span>
                                        </div>
                                        <div class=\"inline-item\">
                                            <span class=\"attr\">
                                            <b>Race:  </b>                                                                                                                                                      
                                            </span>
                                            <span>
                                                ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "RaceId", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            yield "                                                                 
                                            </span>
                                        </div>
                                        
                                        
                                        <div class=\"inline-item\">
                                            <span class=\"attr\">
                                    <b>Poids :  </b>                                                                                           
                                                                                                             
                                            </span>
                                            <span>
                                                ";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "weight", [], "any", false, false, false, 65), "html", null, true);
            yield "

                                            </span>
                                        </div>
                                        
                                    </div>

                                </div>
                              

                            </div>
                        </div>
                    </div>

                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "        </div>
    </div>

    <div class=\"tab-pane fade\" id=\"list-view\" role=\"tabpanel\" aria-labelledby=\"list-view-tab\">
        <div class=\"animal-list-view row\">
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["animals"] ?? null), "data", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 87
            yield "                <div class=\"col-12\">
                    <div class=\"animal-list-item mb-2\">
                        <div class=\"animal-list-img\">
                            <a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\">
                                <div class=\"single-animal-img img-zoom-effect\">
                                    ";
            // line 92
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 92)) > 0)) {
                // line 93
                yield "                                        <img
                                    src=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 94)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "name", [], "any", false, false, false, 94))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 94), "html", null, true);
                yield "\" />
                                        ";
            } else {
                // line 96
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder.webp"), "html", null, true);
                yield "\" />
                                    ";
            }
            // line 98
            yield "                                </div>

                            </a>
                        </div>
                        <div class=\"animal-list-content\">
                            <a class=\"animal-name pb-2\" href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\">
                                ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 104), "html", null, true);
            yield "

                            </a>
                            <p class=\"text\">
                                ";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "description", [], "any", false, false, false, 108)), 0, 70) . "..."), "html", null, true);
            yield "
                            </p>
                            

                         
                            <div class=\"animal-content-bottom\">

                            

                                <div class=\"detail-btn\">
                                    <a class=\"text-primary\" href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 118)]), "html", null, true);
            yield "\">
                                        Voir plus                                                                                                                                                                        
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        yield "        </div>
    </div>
</div>

";
        // line 133
        $context["queryParams"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 133), "query", [], "any", false, false, false, 133), "all", [], "any", false, false, false, 133);
        // line 134
        $context["queryString"] = Twig\Extension\CoreExtension::urlencode(Twig\Extension\CoreExtension::filter($this->env, ($context["queryParams"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((($context["k"] ?? null) != "page") && (($context["k"] ?? null) != "ajax")); }));
        // line 135
        yield "

<ul class=\"pagination\">
    <li class=\"";
        // line 138
        yield (((($context["page"] ?? null) == 1)) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"?page=1&";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-bar-left\"></i>
        </a>
    </li>    
    <li class=\"";
        // line 143
        yield (((($context["page"] ?? null) == 1)) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"";
        // line 144
        (((($context["page"] ?? null) > 1)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("?page=" . (($context["page"] ?? null) - 1)), "html", null, true)) : (yield ""));
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-left\"></i>
        </a>
    </li>
    ";
        // line 148
        $context["pages"] = Twig\Extension\CoreExtension::round((($context["total"] ?? null) / ($context["limit"] ?? null)), 0, "ceil");
        // line 149
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["pages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 150
            yield "        <li class=\"";
            yield (((($context["page"] ?? null) == $context["item"])) ? ("active") : (""));
            yield " page-item\">
            <a href=\"?page=";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "&";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
            yield "\" class=\"page-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "    <li class=\"";
        yield (((($context["page"] ?? null) == ($context["pages"] ?? null))) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"";
        // line 155
        (((($context["page"] ?? null) < ($context["pages"] ?? null))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("?page=" . (($context["page"] ?? null) + 1)), "html", null, true)) : (yield ""));
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-right\"></i>
        </a>
    </li>
    <li class=\"";
        // line 159
        yield (((($context["page"] ?? null) == ($context["pages"] ?? null))) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"?page=";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["pages"] ?? null), "html", null, true);
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["queryString"] ?? null), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-bar-right\"></i>
        </a>
    </li>

</ul>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/animals/_content.html.twig";
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
        return array (  342 => 160,  338 => 159,  329 => 155,  324 => 154,  311 => 151,  306 => 150,  301 => 149,  299 => 148,  290 => 144,  286 => 143,  279 => 139,  275 => 138,  270 => 135,  268 => 134,  266 => 133,  260 => 129,  243 => 118,  230 => 108,  223 => 104,  219 => 103,  212 => 98,  206 => 96,  199 => 94,  196 => 93,  194 => 92,  189 => 90,  184 => 87,  180 => 86,  173 => 81,  151 => 65,  137 => 54,  126 => 46,  111 => 34,  107 => 33,  99 => 27,  93 => 25,  86 => 23,  83 => 22,  81 => 21,  76 => 19,  69 => 15,  62 => 11,  57 => 8,  53 => 7,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/animals/_content.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/animals/_content.html.twig");
    }
}
