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
class __TwigTemplate_ab12563cc59a550b933f9562fb3b06bb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/services/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/services/details.html.twig"));

        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/services/details.html.twig", 1);
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
        yield "    <section class=\"service-page\">
    ";
        // line 4
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 4, $this->source); })()), "images", [], "any", false, false, false, 4)) {
            // line 5
            yield "    <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 5, $this->source); })()), "images", [], "any", false, false, false, 5), 0, [], "array", false, false, false, 5), "name", [], "any", false, false, false, 5))), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 25, $this->source); })()), "title", [], "any", false, false, false, 25), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 42, $this->source); })()), "images", [], "any", false, false, false, 42));
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 45, $this->source); })()), "title", [], "any", false, false, false, 45), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 60, $this->source); })()), "images", [], "any", false, false, false, 60));
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 75, $this->source); })()), "title", [], "any", false, false, false, 75), "html", null, true);
        yield "                
                            </h2>
                            <p class=\"short-desc\">
                            ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), "html", null, true);
        yield "                            
                            </p>
                            
 
                        </div>

                    </div>
                </div>
            </div>
        </div>
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
        return array (  208 => 78,  202 => 75,  190 => 65,  181 => 62,  178 => 61,  174 => 60,  163 => 51,  154 => 49,  143 => 45,  139 => 44,  136 => 43,  131 => 42,  111 => 25,  97 => 14,  90 => 9,  84 => 7,  78 => 5,  76 => 4,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layouts/base.html.twig' %}
{% block body %}
    <section class=\"service-page\">
    {% if service.images %}
    <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"{{ asset('uploads/services/' ~ service.images[0].name) }}\">
    {% else %}
    <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"{{ asset('front-assets/images/breadcrumb/bg/1.jpg') }}\">
    {% endif %}
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                            {{ service.title}}          
                            </h2>
                            <ul>
                                <li>
                                    <a class=\"text-primary\" href=\"/\">
                                        Accueil 
                                                                                
                                        <i class=\"bi bi-chevron-double-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    {{ service.title}}                
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
                                    {% for image in service.images %}
                                            <div class=\"swiper-slide\">
                                                <a href=\"{{ asset('uploads/services/' ~ image.name) }}\" class=\"single-img gallery-popup\">
                                                    <img class=\"img-full\" src=\"{{ asset('uploads/services/' ~ image.name) }}\" alt=\"{{ service.title }}\" />
                                                </a>
                                            </div>
                                        {% else %}
                                        <img src=\"{{ asset('admin-assets/images/placeholder.webp') }}\" />
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                        <div class=\"service-thumb-wrap pt-5 pt-lg-0 row\">
                            <div class=\"col-12\">
                                <div class=\"thumbs-arrow-holder p-0\">
                                    <div class=\"swiper-container single-service-thumbs\">
                                        <div class=\"swiper-wrapper\">
                                            
                                            {% for image in service.images %}
                                                <a href=\"#\" class=\"swiper-slide\">
                                                    <img class=\"img-full\" src=\"{{ asset('uploads/services/mini/300x300-' ~ image.name ) }}\" alt=\"Thumbnail\"  />
                                                </a>
                                            {% endfor %}
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 pt-9 pt-lg-0\">
                        <div class=\"single-service-content\">
                            <h2 class=\"title mb-3\">
                               {{service.title}}                
                            </h2>
                            <p class=\"short-desc\">
                            {{service.description}}                            
                            </p>
                            
 
                        </div>

                    </div>
                </div>
            </div>
        </div>
{% endblock %}", "front/services/details.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/services/details.html.twig");
    }
}
