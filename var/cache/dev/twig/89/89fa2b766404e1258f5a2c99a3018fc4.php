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
class __TwigTemplate_11216504a68947c3d586c571e72083dc extends Template
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
        yield "<div class=\"tab-content text-charcoal\">
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
                                                Ans                                                                   
                                            </span>
                                        </div>
                                        
                                        
                                        <div class=\"inline-item\">
                                            <span class=\"attr\">
                                    <b>Poids :  </b>                                                                                           
                                                                                                             
                                            </span>
                                            <span>
                                                ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "weight", [], "any", false, false, false, 66), "html", null, true);
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
        // line 82
        yield "        </div>
    </div>

    <div class=\"tab-pane fade\" id=\"list-view\" role=\"tabpanel\" aria-labelledby=\"list-view-tab\">
        <div class=\"animal-list-view row\">
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 87, $this->source); })()), "data", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 88
            yield "                <div class=\"col-12\">
                    <div class=\"animal-list-item mb-2\">
                        <div class=\"animal-list-img\">
                            <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\">
                                <div class=\"single-animal-img img-zoom-effect\">
                                    ";
            // line 93
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 93)) > 0)) {
                // line 94
                yield "                                        <img
                                    src=\"";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 95), 0, [], "array", false, false, false, 95), "name", [], "any", false, false, false, 95))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 95), "html", null, true);
                yield "\" />
                                        ";
            } else {
                // line 97
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder.webp"), "html", null, true);
                yield "\" />
                                    ";
            }
            // line 99
            yield "                                </div>

                            </a>
                        </div>
                        <div class=\"animal-list-content\">
                            <a class=\"animal-name pb-2\" href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\">
                                ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 105), "html", null, true);
            yield "

                            </a>
                            <p class=\"text-primary\">
                                ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "description", [], "any", false, false, false, 109), "html", null, true);
            yield "
                            </p>
                            

                         
                            <div class=\"animal-content-bottom\">

                            

                                <div class=\"detail-btn\">
                                    <a class=\"text-primary\" href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 119)]), "html", null, true);
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
        // line 130
        yield "        </div>
    </div>
</div>

";
        // line 134
        $context["queryParams"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "request", [], "any", false, false, false, 134), "query", [], "any", false, false, false, 134), "all", [], "any", false, false, false, 134);
        // line 135
        $context["queryString"] = Twig\Extension\CoreExtension::urlencode(Twig\Extension\CoreExtension::filter($this->env, (isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 135, $this->source); })()), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 135, $this->source); })()) != "page") && ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 135, $this->source); })()) != "ajax")); }));
        // line 136
        yield "

<ul class=\"pagination\">
    <li class=\"";
        // line 139
        yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 139, $this->source); })()) == 1)) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"?page=1&";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 140, $this->source); })()), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-bar-left\"></i>
        </a>
    </li>    
    <li class=\"";
        // line 144
        yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 144, $this->source); })()) == 1)) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"";
        // line 145
        ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 145, $this->source); })()) > 1)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("?page=" . ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 145, $this->source); })()) - 1)), "html", null, true)) : (yield ""));
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 145, $this->source); })()), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-left\"></i>
        </a>
    </li>
    ";
        // line 149
        $context["pages"] = Twig\Extension\CoreExtension::round(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 149, $this->source); })()) / (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 149, $this->source); })())), 0, "ceil");
        // line 150
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 150, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 151
            yield "        <li class=\"";
            yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 151, $this->source); })()) == $context["item"])) ? ("active") : (""));
            yield " page-item\">
            <a href=\"?page=";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "&";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 152, $this->source); })()), "html", null, true);
            yield "\" class=\"page-link\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
            yield "</a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "    <li class=\"";
        yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 155, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 155, $this->source); })()))) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"";
        // line 156
        ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 156, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 156, $this->source); })()))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("?page=" . ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 156, $this->source); })()) + 1)), "html", null, true)) : (yield ""));
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 156, $this->source); })()), "html", null, true);
        yield "\" class=\"page-link\">
            <i class=\"bi bi-chevron-right\"></i>
        </a>
    </li>
    <li class=\"";
        // line 160
        yield ((((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 160, $this->source); })()) == (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 160, $this->source); })()))) ? ("disabled") : (""));
        yield " page-item\">
        <a href=\"?page=";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 161, $this->source); })()), "html", null, true);
        yield "&";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queryString"]) || array_key_exists("queryString", $context) ? $context["queryString"] : (function () { throw new RuntimeError('Variable "queryString" does not exist.', 161, $this->source); })()), "html", null, true);
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
        return array (  349 => 161,  345 => 160,  336 => 156,  331 => 155,  318 => 152,  313 => 151,  308 => 150,  306 => 149,  297 => 145,  293 => 144,  286 => 140,  282 => 139,  277 => 136,  275 => 135,  273 => 134,  267 => 130,  250 => 119,  237 => 109,  230 => 105,  226 => 104,  219 => 99,  213 => 97,  206 => 95,  203 => 94,  201 => 93,  196 => 91,  191 => 88,  187 => 87,  180 => 82,  158 => 66,  143 => 54,  132 => 46,  117 => 34,  113 => 33,  105 => 27,  99 => 25,  92 => 23,  89 => 22,  87 => 21,  82 => 19,  75 => 15,  68 => 11,  63 => 8,  59 => 7,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"tab-content text-charcoal\">
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
                                                Ans                                                                   
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
                            <p class=\"text-primary\">
                                {{ animal.description }}
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
