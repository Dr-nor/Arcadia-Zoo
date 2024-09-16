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

/* front/animals/details.html.twig */
class __TwigTemplate_6d1d7b03840a4b38fed1292f41767ae5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/animals/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/animals/details.html.twig"));

        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/animals/details.html.twig", 1);
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
        yield "    <section class=\"single-animal-page\">

        <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/breadcrumb/bg/1.jpg"), "html", null, true);
        yield "\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                                ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
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
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        yield "
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single-animal-area section-space-top-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"single-animal-img\">
                            <div class=\"swiper-container single-animal-slider\">
                                <div class=\"swiper-wrapper\">
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 38, $this->source); })()), "images", [], "any", false, false, false, 38));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 39
            yield "                                        <div class=\"swiper-slide\">
                                            <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 40))), "html", null, true);
            yield "\" class=\"single-img gallery-popup\">
                                                <img class=\"img-full\" src=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 41))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 41), "html", null, true);
            yield "\" />
                                            </a>
                                        </div>
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            yield "                                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder.webp"), "html", null, true);
            yield "\" />
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                                </div>
                            </div>
                        </div>
                        <div class=\"animal-thumb-wrap pt-5 pt-lg-0 row\">
                            <div class=\"col-12\">
                                <div class=\"thumbs-arrow-holder p-0\">
                                    <div class=\"swiper-container single-animal-thumbs\">
                                        <div class=\"swiper-wrapper\">
                                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 55, $this->source); })()), "images", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 56
            yield "                                                <a href=\"#\" class=\"swiper-slide\">
                                                    <img class=\"img-full\" src=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/mini/300x300-" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 57))), "html", null, true);
            yield "\" alt=\"Thumbnail\" />
                                                </a>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 pt-9 pt-lg-0\">
                        <div class=\"single-animal-content\">
                            <div class=\"d-flex  justify-content-between\">
                                <div>
                                    <h2 class=\"title mb-3\">
                                        ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 71, $this->source); })()), "name", [], "any", false, false, false, 71), "html", null, true);
        yield "
                                    </h2>
                                    <p class=\"subtitl\">
                                        ";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), "html", null, true);
        yield "
                                    </p>
                                </div>

                            </div>

                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                    Habitat :                                                             
                                </span>
                                <ul>
                                    <li><a>";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 85, $this->source); })()), "HabitatId", [], "any", false, false, false, 85), "title", [], "any", false, false, false, 85), "html", null, true);
        yield "</a></li>
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                    Race :                                                             
                                </span>
                                <ul>
                                    <li><a>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 93, $this->source); })()), "RaceId", [], "any", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
        yield "</a></li>
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                Espérance de vie médiane:                                                            
                                </span>
                                <ul>
                                    <li><a>";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 101, $this->source); })()), "medianlife", [], "any", false, false, false, 101), "html", null, true);
        yield "</a></li> Ans
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                Taille:                                                             
                                </span>
                                <ul>
                                    <li><a>";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 109, $this->source); })()), "size", [], "any", false, false, false, 109), "html", null, true);
        yield "</a></li>
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                Poids:                                                             
                                </span>
                                <ul>
                                    <li><a>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 117, $this->source); })()), "weight", [], "any", false, false, false, 117), "html", null, true);
        yield "</a></li>
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                    Nouriture:                                                             
                                </span>
                                <ul>
                                    <li><a>";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 125, $this->source); })()), "diet", [], "any", false, false, false, 125), "html", null, true);
        yield "</a></li>
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                Statut de conservation:                                                           
                                </span>
                                <ul>
                                    <li><a>";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 133, $this->source); })()), "status", [], "any", false, false, false, 133), "html", null, true);
        yield "</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    <!--    <div class=\"animal-tab-area section-space-y-axis-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ul class=\"nav animal-tab-nav mb-10\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"tab-btn active\" id=\"information-tab\" data-bs-toggle=\"tab\" href=\"#information\" role=\"tab\" aria-controls=\"information\" aria-selected=\"false\">
                                    Information                                 
                                                                    
                                </a>
                            </li>

                        </ul>
                        <div class=\"tab-content animal-tab-content\">
                            <div class=\"tab-pane fade show active\" id=\"information\" role=\"tabpanel\" aria-labelledby=\"information-tab\">
                                <div class=\"animal-information-body\">
                                    <div class=\"d-flex flex-wrap mb-3\">
                                        ";
        // line 161
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 161, $this->source); })()), "medianlife", [], "any", false, false, false, 161)) {
            // line 162
            yield "                                            <div class=\"mb-5 w-50\">
                                                <div class=\"op-text\">
                                                Espérance de vie médiane:                                         
                                                                                                
                                                </div>
                                                <div class=\"op-text-base\">
                                                    ";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 168, $this->source); })()), "medianlife", [], "any", false, false, false, 168), "html", null, true);
            yield "
                                                </div>
                                            </div>
                                        ";
        }
        // line 172
        yield "                                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 172, $this->source); })()), "size", [], "any", false, false, false, 172)) {
            // line 173
            yield "                                            <div class=\"mb-5 w-50\">
                                                <div class=\"op-text\">
                                                    Taille                                           
                                                                                                
                                                </div>
                                                <div class=\"op-text-base\">
                                                    ";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 179, $this->source); })()), "size", [], "any", false, false, false, 179), "html", null, true);
            yield "
                                                </div>
                                            </div>
                                        ";
        }
        // line 183
        yield "                                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 183, $this->source); })()), "weight", [], "any", false, false, false, 183)) {
            // line 184
            yield "                                            <div class=\"mb-5 w-50\">
                                                <div class=\"op-text\">
                                                    Poids
                                                                                                    
                                                </div>
                                                <div class=\"op-text-base\">
                                                    ";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 190, $this->source); })()), "weight", [], "any", false, false, false, 190), "html", null, true);
            yield "
                                                </div>
                                            </div>

                                        ";
        }
        // line 195
        yield "
                                        ";
        // line 196
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 196, $this->source); })()), "diet", [], "any", false, false, false, 196)) {
            // line 197
            yield "                                            <div class=\"mb-5 w-50\">
                                                <div class=\"op-text\">
                                                Nouriture                                      
                                                                                                
                                                </div>
                                                <div class=\"op-text-base\">
                                                    ";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 203, $this->source); })()), "diet", [], "any", false, false, false, 203), "html", null, true);
            yield "
                                                </div>
                                            </div>

                                        ";
        }
        // line 208
        yield "                                        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 208, $this->source); })()), "status", [], "any", false, false, false, 208)) {
            // line 209
            yield "                                            <div class=\"mb-5 w-50\">
                                                <div class=\"op-text\">
                                                Statut de conservation                                         
                                                                                                    
                                                </div>
                                                <div class=\"op-text-base\">
                                                    ";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 215, $this->source); })()), "status", [], "any", false, false, false, 215), "html", null, true);
            yield "
                                                </div>
                                            </div>

                                        ";
        }
        // line 220
        yield "                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        -->

        <!-- Begin Related animals Area -->
        <div class=\"cars-related\">
            <div class=\"animal-area section-space-y-axis-50\">
                <div class=\"container\">
                    <div class=\"title-box\">
                        <h2>
                            Animaux similaires                     
                        </h2>
                        <p class=\"text-primary\">
                            Ces animaux peuvent également vous intéresser                            
                        </p>
                    </div>
                    <div class=\"row mt-10\">
                        <div class=\"col-lg-12\">
                            <div class=\"swiper-container animal-slider\">
                                <div class=\"swiper-wrapper text-heading\">
                                    ";
        // line 249
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["similarAnimals"]) || array_key_exists("similarAnimals", $context) ? $context["similarAnimals"] : (function () { throw new RuntimeError('Variable "similarAnimals" does not exist.', 249, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["similarAnimal"]) {
            // line 250
            yield "                                        <div class=\"swiper-slide\">
                                            <div class=\"animal-item\">
                                                <div class=\"animal-inner\">
                                                    <a class='animal-link' href=\"";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "slug", [], "any", false, false, false, 253)]), "html", null, true);
            yield "\"></a>
                                                    <div class=\"animal-header\">
                                                        
                                                        <a href=\"";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "slug", [], "any", false, false, false, 256)]), "html", null, true);
            yield "\">
                                                            <div class=\"animal-img\">
                                                                ";
            // line 258
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "images", [], "any", false, false, false, 258)) > 0)) {
                // line 259
                yield "                                                                    <img
                                                                src=\"";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "images", [], "any", false, false, false, 260), 0, [], "array", false, false, false, 260), "name", [], "any", false, false, false, 260))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "name", [], "any", false, false, false, 260), "html", null, true);
                yield "\" />
                                                                    ";
            } else {
                // line 262
                yield "                                                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder.webp"), "html", null, true);
                yield "\" />
                                                                ";
            }
            // line 264
            yield "                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=\"animal-content\">
                                                        <div class=\"animal-content-top\">
                                                            
                                                            <div class=\"animal-content-top-left\">
                                                                <a href=\"";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "slug", [], "any", false, false, false, 271)]), "html", null, true);
            yield "\" class=\"vtitle\">
                                                                    ";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "name", [], "any", false, false, false, 272), "html", null, true);
            yield "

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"animal-content-middle\">
                                                            <p class=\"description\">
                                                                ";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "description", [], "any", false, false, false, 279)), 0, 70) . "..."), "html", null, true);
            yield "
                                                            </p>
                                                            <div class=\"inline-group\">
                                                                <div class=\"inline-item\">
                                                                    <span class=\"attr\">
                                                                <b>Habitat: </b>                                                                                                                                   
                                                                    </span>
                                                                    <span>
                                                                        ";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "HabitatId", [], "any", false, false, false, 287), "title", [], "any", false, false, false, 287), "html", null, true);
            yield "
                                                                    </span>
                                                                </div>
                                                                <div class=\"inline-item\">
                                                                    <span class=\"attr\">
                                                                    <b> Race : </b>                                                     
                                                                    </span>
                                                                    <span>
                                                                        ";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "RaceId", [], "any", false, false, false, 295), "name", [], "any", false, false, false, 295), "html", null, true);
            yield "

                                                                    </span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class=\"animal-content-bottom\">
                                                          

                                                            <div class=\"detail-btn\">
                                                                <a class=\"text-primary\" href=\"";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["similarAnimal"], "slug", [], "any", false, false, false, 306)]), "html", null, true);
            yield "\">
                                                                    Voir plus                                             
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['similarAnimal'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        yield "
                                </div>
                            </div>
                            <div class=\"animal-slider-bottom d-flex justify-content-between\">
                                <!-- Add Arrows -->
                                <div class=\"animal-button-wrap\">
                                    <div class=\"animal-button-prev\">
                                        <i class=\"bi bi-chevron-left\"></i>
                                    </div>
                                    <div class=\"animal-button-next\">
                                        <i class=\"bi bi-chevron-right\"></i>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <!-- Related Animal Area End -->

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
        return "front/animals/details.html.twig";
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
        return array (  546 => 317,  529 => 306,  515 => 295,  504 => 287,  493 => 279,  483 => 272,  479 => 271,  470 => 264,  464 => 262,  457 => 260,  454 => 259,  452 => 258,  447 => 256,  441 => 253,  436 => 250,  432 => 249,  401 => 220,  393 => 215,  385 => 209,  382 => 208,  374 => 203,  366 => 197,  364 => 196,  361 => 195,  353 => 190,  345 => 184,  342 => 183,  335 => 179,  327 => 173,  324 => 172,  317 => 168,  309 => 162,  307 => 161,  276 => 133,  265 => 125,  254 => 117,  243 => 109,  232 => 101,  221 => 93,  210 => 85,  196 => 74,  190 => 71,  177 => 60,  168 => 57,  165 => 56,  161 => 55,  151 => 47,  142 => 45,  131 => 41,  127 => 40,  124 => 39,  119 => 38,  101 => 23,  86 => 11,  77 => 5,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layouts/base.html.twig' %}
{% block body %}
    <section class=\"single-animal-page\">

        <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"{{ asset('front-assets/images/breadcrumb/bg/1.jpg') }}\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                                {{ animal.name }}
                            </h2>
                            <ul>
                                <li>
                                    <a class=\"text-primary\" href=\"/\">
                                        Accueil 
                                                                                                                        
                                                                                
                                        <i class=\"bi bi-chevron-double-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    {{ animal.name }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single-animal-area section-space-top-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6\">
                        <div class=\"single-animal-img\">
                            <div class=\"swiper-container single-animal-slider\">
                                <div class=\"swiper-wrapper\">
                                    {% for image in animal.images %}
                                        <div class=\"swiper-slide\">
                                            <a href=\"{{ asset('uploads/animals/' ~ image.name) }}\" class=\"single-img gallery-popup\">
                                                <img class=\"img-full\" src=\"{{ asset('uploads/animals/' ~ image.name) }}\" alt=\"{{ image.name }}\" />
                                            </a>
                                        </div>
                                    {% else %}
                                        <img src=\"{{ asset('admin-assets/images/placeholder.webp') }}\" />
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                        <div class=\"animal-thumb-wrap pt-5 pt-lg-0 row\">
                            <div class=\"col-12\">
                                <div class=\"thumbs-arrow-holder p-0\">
                                    <div class=\"swiper-container single-animal-thumbs\">
                                        <div class=\"swiper-wrapper\">
                                            {% for image in animal.images %}
                                                <a href=\"#\" class=\"swiper-slide\">
                                                    <img class=\"img-full\" src=\"{{ asset('uploads/animals/mini/300x300-' ~ image.name ) }}\" alt=\"Thumbnail\" />
                                                </a>
                                            {% endfor %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 pt-9 pt-lg-0\">
                        <div class=\"single-animal-content\">
                            <div class=\"d-flex  justify-content-between\">
                                <div>
                                    <h2 class=\"title mb-3\">
                                        {{ animal.name }}
                                    </h2>
                                    <p class=\"subtitl\">
                                        {{ animal.description }}
                                    </p>
                                </div>

                            </div>

                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                    Habitat :                                                             
                                </span>
                                <ul>
                                    <li><a>{{ animal.HabitatId.title}}</a></li>
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                    Race :                                                             
                                </span>
                                <ul>
                                    <li><a>{{ animal.RaceId.name}}</a></li>
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                Espérance de vie médiane:                                                            
                                </span>
                                <ul>
                                    <li><a>{{ animal.medianlife}}</a></li> Ans
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                Taille:                                                             
                                </span>
                                <ul>
                                    <li><a>{{ animal.size}}</a></li>
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                Poids:                                                             
                                </span>
                                <ul>
                                    <li><a>{{ animal.weight}}</a></li>
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                    Nouriture:                                                             
                                </span>
                                <ul>
                                    <li><a>{{ animal.diet}}</a></li>
                                </ul>
                            </div>
                            <div class=\"animal-category pt-4\">
                                <span class=\"title\">
                                Statut de conservation:                                                           
                                </span>
                                <ul>
                                    <li><a>{{ animal.status}}</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    <!--    <div class=\"animal-tab-area section-space-y-axis-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <ul class=\"nav animal-tab-nav mb-10\" role=\"tablist\">
                            <li class=\"nav-item\" role=\"presentation\">
                                <a class=\"tab-btn active\" id=\"information-tab\" data-bs-toggle=\"tab\" href=\"#information\" role=\"tab\" aria-controls=\"information\" aria-selected=\"false\">
                                    Information                                 
                                                                    
                                </a>
                            </li>

                        </ul>
                        <div class=\"tab-content animal-tab-content\">
                            <div class=\"tab-pane fade show active\" id=\"information\" role=\"tabpanel\" aria-labelledby=\"information-tab\">
                                <div class=\"animal-information-body\">
                                    <div class=\"d-flex flex-wrap mb-3\">
                                        {% if animal.medianlife %}
                                            <div class=\"mb-5 w-50\">
                                                <div class=\"op-text\">
                                                Espérance de vie médiane:                                         
                                                                                                
                                                </div>
                                                <div class=\"op-text-base\">
                                                    {{ animal.medianlife }}
                                                </div>
                                            </div>
                                        {% endif %}
                                        {% if animal.size %}
                                            <div class=\"mb-5 w-50\">
                                                <div class=\"op-text\">
                                                    Taille                                           
                                                                                                
                                                </div>
                                                <div class=\"op-text-base\">
                                                    {{ animal.size }}
                                                </div>
                                            </div>
                                        {% endif %}
                                        {% if animal.weight %}
                                            <div class=\"mb-5 w-50\">
                                                <div class=\"op-text\">
                                                    Poids
                                                                                                    
                                                </div>
                                                <div class=\"op-text-base\">
                                                    {{ animal.weight }}
                                                </div>
                                            </div>

                                        {% endif %}

                                        {% if animal.diet %}
                                            <div class=\"mb-5 w-50\">
                                                <div class=\"op-text\">
                                                Nouriture                                      
                                                                                                
                                                </div>
                                                <div class=\"op-text-base\">
                                                    {{ animal.diet }}
                                                </div>
                                            </div>

                                        {% endif %}
                                        {% if animal.status %}
                                            <div class=\"mb-5 w-50\">
                                                <div class=\"op-text\">
                                                Statut de conservation                                         
                                                                                                    
                                                </div>
                                                <div class=\"op-text-base\">
                                                    {{ animal.status }}
                                                </div>
                                            </div>

                                        {% endif %}
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        -->

        <!-- Begin Related animals Area -->
        <div class=\"cars-related\">
            <div class=\"animal-area section-space-y-axis-50\">
                <div class=\"container\">
                    <div class=\"title-box\">
                        <h2>
                            Animaux similaires                     
                        </h2>
                        <p class=\"text-primary\">
                            Ces animaux peuvent également vous intéresser                            
                        </p>
                    </div>
                    <div class=\"row mt-10\">
                        <div class=\"col-lg-12\">
                            <div class=\"swiper-container animal-slider\">
                                <div class=\"swiper-wrapper text-heading\">
                                    {% for similarAnimal in similarAnimals %}
                                        <div class=\"swiper-slide\">
                                            <div class=\"animal-item\">
                                                <div class=\"animal-inner\">
                                                    <a class='animal-link' href=\"{{ path('animal_details', {\"slug\": similarAnimal.slug }) }}\"></a>
                                                    <div class=\"animal-header\">
                                                        
                                                        <a href=\"{{ path('animal_details', {\"slug\": similarAnimal.slug }) }}\">
                                                            <div class=\"animal-img\">
                                                                {% if similarAnimal.images|length > 0 %}
                                                                    <img
                                                                src=\"{{ asset('uploads/animals/' ~ similarAnimal.images[0].name) }}\" alt=\"{{ similarAnimal.name }}\" />
                                                                    {% else %}
                                                                    <img src=\"{{ asset('admin-assets/images/placeholder.webp') }}\" />
                                                                {% endif %}
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class=\"animal-content\">
                                                        <div class=\"animal-content-top\">
                                                            
                                                            <div class=\"animal-content-top-left\">
                                                                <a href=\"{{ path('animal_details', {\"slug\": similarAnimal.slug }) }}\" class=\"vtitle\">
                                                                    {{ similarAnimal.name }}

                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class=\"animal-content-middle\">
                                                            <p class=\"description\">
                                                                {{ similarAnimal.description|striptags|slice(0, 70) ~ '...'   }}
                                                            </p>
                                                            <div class=\"inline-group\">
                                                                <div class=\"inline-item\">
                                                                    <span class=\"attr\">
                                                                <b>Habitat: </b>                                                                                                                                   
                                                                    </span>
                                                                    <span>
                                                                        {{ similarAnimal.HabitatId.title  }}
                                                                    </span>
                                                                </div>
                                                                <div class=\"inline-item\">
                                                                    <span class=\"attr\">
                                                                    <b> Race : </b>                                                     
                                                                    </span>
                                                                    <span>
                                                                        {{ similarAnimal.RaceId.name }}

                                                                    </span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class=\"animal-content-bottom\">
                                                          

                                                            <div class=\"detail-btn\">
                                                                <a class=\"text-primary\" href=\"{{ path('animal_details', {\"slug\": similarAnimal.slug }) }}\">
                                                                    Voir plus                                             
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}

                                </div>
                            </div>
                            <div class=\"animal-slider-bottom d-flex justify-content-between\">
                                <!-- Add Arrows -->
                                <div class=\"animal-button-wrap\">
                                    <div class=\"animal-button-prev\">
                                        <i class=\"bi bi-chevron-left\"></i>
                                    </div>
                                    <div class=\"animal-button-next\">
                                        <i class=\"bi bi-chevron-right\"></i>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    <!-- Related Animal Area End -->

    </section>
{% endblock %}
", "front/animals/details.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/animals/details.html.twig");
    }
}
