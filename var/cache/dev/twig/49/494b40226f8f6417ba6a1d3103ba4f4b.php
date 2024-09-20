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
class __TwigTemplate_d2e90ecc4152ac7135cf69314c9c002e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/animals/_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/animals/_content.html.twig"));

        // line 1
        yield "<div class=\"tab-content text-charcoal pt-8\">
    <div class=\"page-count\">
    <span>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</span> Résultats trouvés                             
    </div>
    <div class=\"tab-pane fade show active\" id=\"grid-view\" role=\"tabpanel\" aria-labelledby=\"grid-view-tab\">
        <div class=\"animal-grid-view row\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 7, $this->source); })()), "data", [], "any", false, false, false, 7));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 23), 0, [], "array", false, false, false, 23), "name", [], "any", false, false, false, 23))), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 86, $this->source); })()), "data", [], "any", false, false, false, 86));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 94), 0, [], "array", false, false, false, 94), "name", [], "any", false, false, false, 94))), "html", null, true);
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
        $context["queryParams"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "request", [], "any", false, false, false, 133), "query", [], "any", false, false, false, 133), "all", [], "any", false, false, false, 133);
        // line 134
        $context["queryString"] = Twig\Extension\CoreExtension::urlencode(Twig\Extension\CoreExtension::filter($this->env, (isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 134, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 134, $this->source); })()) != "page") && ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 134, $this->source); })()) != "ajax")); }));
        // line 135
        yield "

<ul class=\"pagination\">
    <li class=\"";
        // line 138
        yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 138, $this->source); })()) == 1)) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"?page=1&";
        // line 139
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 139, $this->source); })()), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-bar-left\"></i>
        </a>
    </li>    
    <li class=\"";
        // line 143
        yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 143, $this->source); })()) == 1)) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"";
        // line 144
        ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 144, $this->source); })()) > 1)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("?page=" . ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 144, $this->source); })()) - 1)), "html", null, true)) : (yield ""));
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 144, $this->source); })()), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-left\"></i>
        </a>
    </li>
    ";
        // line 148
        $context["pages"] = Twig\Extension\CoreExtension::round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 148, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 148, $this->source); })())), 0, "ceil");
        // line 149
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 149, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 150
            yield "        <li class=\"";
            yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 150, $this->source); })()) == $context["item"])) ? ("active") : (""));
            yield " page-item\">
            <a href=\"?page=";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "&";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 151, $this->source); })()), "html", null, true);
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
        yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 154, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 154, $this->source); })()))) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"";
        // line 155
        ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 155, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 155, $this->source); })()))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("?page=" . ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 155, $this->source); })()) + 1)), "html", null, true)) : (yield ""));
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 155, $this->source); })()), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-right\"></i>
        </a>
    </li>
    <li class=\"";
        // line 159
        yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 159, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 159, $this->source); })()))) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"?page=";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 160, $this->source); })()), "html", null, true);
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 160, $this->source); })()), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-bar-right\"></i>
        </a>
    </li>

</ul>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  348 => 160,  344 => 159,  335 => 155,  330 => 154,  317 => 151,  312 => 150,  307 => 149,  305 => 148,  296 => 144,  292 => 143,  285 => 139,  281 => 138,  276 => 135,  274 => 134,  272 => 133,  266 => 129,  249 => 118,  236 => 108,  229 => 104,  225 => 103,  218 => 98,  212 => 96,  205 => 94,  202 => 93,  200 => 92,  195 => 90,  190 => 87,  186 => 86,  179 => 81,  157 => 65,  143 => 54,  132 => 46,  117 => 34,  113 => 33,  105 => 27,  99 => 25,  92 => 23,  89 => 22,  87 => 21,  82 => 19,  75 => 15,  68 => 11,  63 => 8,  59 => 7,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"tab-content text-charcoal pt-8\">
    <div class=\"page-count\">
    <span>{{ total }}</span> Résultats trouvés                             
    </div>
    <div class=\"tab-pane fade show active\" id=\"grid-view\" role=\"tabpanel\" aria-labelledby=\"grid-view-tab\">
        <div class=\"animal-grid-view row\">
            {% for animal in animals.data %}
                <div class=\"col-xl-4 col-sm-6 \">
                    <div class=\"animal-item\">
                        <div class=\"animal-inner\">
                            <a class='animal-link' href=\"{{ path('animal_details', {\"slug\": animal.slug }) }}\"></a>
                            <div class=\"animal-header\">
                                <div class=\"vprice_wrap\">
                                        <div class=\"price\">
                                            {{ animal.status }}

                                        </div>
                                    </div>
                                    <a href=\"{{ path('animal_details', {\"slug\": animal.slug }) }}\">
                                        <div class=\"animal-img\">
                                            {% if animal.images|length > 0 %}
                                                <img
                                            src=\"{{ asset('uploads/animals/' ~ animal.images[0].name) }}\" alt=\"{{ animal.name }}\" />
                                                {% else %}
                                                <img src=\"{{ asset('admin-assets/images/placeholder.webp') }}\" />
                                            {% endif %}
                                        </div>
                                    </a>
                                </div>
                            <div class=\"animal-content\">
                                <div class=\"animal-content-top\">
                                    <div class=\"animal-content-top-left\">
                                        <a href=\"{{ path('animal_details', {\"slug\": animal.slug }) }}\" class=\"vtitle\">
                                            {{ animal.name }}

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
                                                {{ animal.HabitatId.title  }}                                                                
                                            </span>
                                        </div>
                                        <div class=\"inline-item\">
                                            <span class=\"attr\">
                                            <b>Race:  </b>                                                                                                                                                      
                                            </span>
                                            <span>
                                                {{ animal.RaceId.name }}                                                                 
                                            </span>
                                        </div>
                                        
                                        
                                        <div class=\"inline-item\">
                                            <span class=\"attr\">
                                    <b>Poids :  </b>                                                                                           
                                                                                                             
                                            </span>
                                            <span>
                                                {{ animal.weight }}

                                            </span>
                                        </div>
                                        
                                    </div>

                                </div>
                              

                            </div>
                        </div>
                    </div>

                </div>
            {% endfor %}
        </div>
    </div>

    <div class=\"tab-pane fade\" id=\"list-view\" role=\"tabpanel\" aria-labelledby=\"list-view-tab\">
        <div class=\"animal-list-view row\">
            {% for animal in animals.data %}
                <div class=\"col-12\">
                    <div class=\"animal-list-item mb-2\">
                        <div class=\"animal-list-img\">
                            <a href=\"{{ path('animal_details', {\"slug\": animal.slug }) }}\">
                                <div class=\"single-animal-img img-zoom-effect\">
                                    {% if animal.images|length > 0 %}
                                        <img
                                    src=\"{{ asset('uploads/animals/' ~ animal.images[0].name) }}\" alt=\"{{ animal.name }}\" />
                                        {% else %}
                                        <img src=\"{{ asset('admin-assets/images/placeholder.webp') }}\" />
                                    {% endif %}
                                </div>

                            </a>
                        </div>
                        <div class=\"animal-list-content\">
                            <a class=\"animal-name pb-2\" href=\"{{ path('animal_details', {\"slug\": animal.slug }) }}\">
                                {{ animal.name }}

                            </a>
                            <p class=\"text\">
                                {{ animal.description|striptags|slice(0, 70) ~ '...'  }}
                            </p>
                            

                         
                            <div class=\"animal-content-bottom\">

                            

                                <div class=\"detail-btn\">
                                    <a class=\"text-primary\" href=\"{{ path('animal_details', {\"slug\": animal.slug }) }}\">
                                        Voir plus                                                                                                                                                                        
                                    </a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>

{% set queryParams = app.request.query.all %}
{% set queryString = queryParams|filter((v, k) => k != \"page\" and k != \"ajax\")|url_encode %}


<ul class=\"pagination\">
    <li class=\"{{ (page == 1) ? 'disabled' : '' }} page-item\">
        <a href=\"?page=1&{{queryString}}\" class=\"page-link\">
            <i class=\"bi bi-chevron-bar-left\"></i>
        </a>
    </li>    
    <li class=\"{{ (page == 1) ? 'disabled' : '' }} page-item\">
        <a href=\"{{ (page > 1) ? '?page=' ~ (page - 1) : '' }}&{{queryString}}\" class=\"page-link\">
            <i class=\"bi bi-chevron-left\"></i>
        </a>
    </li>
    {% set pages = (total / limit)|round(0, 'ceil') %}
    {% for item in 1..pages %}
        <li class=\"{{ (page == item) ? 'active' : '' }} page-item\">
            <a href=\"?page={{ item }}&{{queryString}}\" class=\"page-link\">{{ item }}</a>
        </li>
    {% endfor %}
    <li class=\"{{ (page == pages) ? 'disabled' : '' }} page-item\">
        <a href=\"{{ (page < pages) ? '?page=' ~ (page + 1) : '' }}&{{queryString}}\" class=\"page-link\">
            <i class=\"bi bi-chevron-right\"></i>
        </a>
    </li>
    <li class=\"{{ (page == pages) ? 'disabled' : '' }} page-item\">
        <a href=\"?page={{ pages }}&{{queryString}}\" class=\"page-link\">
            <i class=\"bi bi-chevron-bar-right\"></i>
        </a>
    </li>

</ul>
", "front/animals/_content.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/animals/_content.html.twig");
    }
}
