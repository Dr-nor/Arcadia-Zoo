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

/* front/habitats/index.html.twig */
class __TwigTemplate_3154e29c8f50f8d6da411b98dbaaad38 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/habitats/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/habitats/index.html.twig"));

        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/habitats/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "    <section class=\"habitats-page\">
        <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/breadcrumb/bg/1.jpg"), "html", null, true);
        yield "\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                                Nos habitats                             
                                                            
                            </h2>
                            <ul>
                                <li>
                                    <a class=\"text-primary\" href=\"/\">
                                        Accueil                                     
                                                                                
                                        <i class=\"bi bi-chevron-double-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    habitats                          
                                                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"habitats-area section-space-y-axis-50\">
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 35, $this->source); })()), "data", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 36
            yield "                        <div class=\"col-xl-4 col-sm-6 \">
                            <div class=\"habitat-item\">
                                <div class=\"habitat-img img-hover-effect\">
                                    <a class=\"img-zoom-effect\" href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitats_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "slug", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\">
                                        ";
            // line 40
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "images", [], "any", false, false, false, 40)) > 0)) {
                // line 41
                yield "                                            <img
                                        src=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/habitats/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "images", [], "any", false, false, false, 42), 0, [], "array", false, false, false, 42), "name", [], "any", false, false, false, 42))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "title", [], "any", false, false, false, 42), "html", null, true);
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
                                <div class=\"habitat-content pt-6\">

                                    <h2 class=\"mb-3\">
                                        <a class=\"title\">
                                            ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "title", [], "any", false, false, false, 52), "html", null, true);
            yield "
                                        </a>
                                    </h2>
                                    <p class=\"short-desc mb-7\">
                                        ";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "description", [], "any", false, false, false, 56)), 0, 70) . "..."), "html", null, true);
            yield "
                                    </p>

                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "                </div>
                
                ";
        // line 65
        $context["path"] = "habitats_index";
        // line 66
        yield "                ";
        $context["pages"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 66, $this->source); })()), "pages", [], "any", false, false, false, 66);
        // line 67
        yield "                ";
        $context["currentPage"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 67, $this->source); })()), "page", [], "any", false, false, false, 67);
        // line 68
        yield "                ";
        yield from         $this->loadTemplate("front/layouts/pagination.html.twig", "front/habitats/index.html.twig", 68)->unwrap()->yield($context);
        // line 69
        yield "            </div>
        </div>

    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/habitats/index.html.twig";
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
        return array (  184 => 69,  181 => 68,  178 => 67,  175 => 66,  173 => 65,  169 => 63,  156 => 56,  149 => 52,  141 => 46,  135 => 44,  128 => 42,  125 => 41,  123 => 40,  119 => 39,  114 => 36,  110 => 35,  76 => 4,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layouts/base.html.twig' %}
{% block body %}
    <section class=\"habitats-page\">
        <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"{{ asset('front-assets/images/breadcrumb/bg/1.jpg') }}\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                                Nos habitats                             
                                                            
                            </h2>
                            <ul>
                                <li>
                                    <a class=\"text-primary\" href=\"/\">
                                        Accueil                                     
                                                                                
                                        <i class=\"bi bi-chevron-double-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    habitats                          
                                                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"habitats-area section-space-y-axis-50\">
            <div class=\"container\">
                <div class=\"row\">
                    {% for habitat in habitats.data %}
                        <div class=\"col-xl-4 col-sm-6 \">
                            <div class=\"habitat-item\">
                                <div class=\"habitat-img img-hover-effect\">
                                    <a class=\"img-zoom-effect\" href=\"{{ path('habitats_details', {\"slug\": habitat.slug }) }}\">
                                        {% if habitat.images|length > 0 %}
                                            <img
                                        src=\"{{ asset('uploads/habitats/' ~ habitat.images[0].name) }}\" alt=\"{{ habitat.title }}\" />
                                            {% else %}
                                            <img src=\"{{ asset('admin-assets/images/placeholder.webp') }}\" />
                                        {% endif %}
                                    </a>
                                </div>
                                <div class=\"habitat-content pt-6\">

                                    <h2 class=\"mb-3\">
                                        <a class=\"title\">
                                            {{ habitat.title }}
                                        </a>
                                    </h2>
                                    <p class=\"short-desc mb-7\">
                                        {{ habitat.description|striptags|slice(0, 70) ~ '...' }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                
                {% set path = 'habitats_index' %}
                {% set pages = habitats.pages %}
                {% set currentPage = habitats.page %}
                {% include('front/layouts/pagination.html.twig') %}
            </div>
        </div>

    </section>

{% endblock %}
", "front/habitats/index.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/habitats/index.html.twig");
    }
}
