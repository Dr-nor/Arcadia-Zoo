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

/* front/home.html.twig */
class __TwigTemplate_e5040195b3491b0eb6e4b9c675de037b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home.html.twig"));

        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/home.html.twig", 1);
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
        yield "
    <section class=\"homepage\">
        <!-- Begin Slider Area -->
        <div class=\"slider-area\">

            <!-- Main Slider -->
            <div class=\"swiper-container home-slider swiper-arrow with-bg_white\">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide animation-style-01\">
                        <div class=\"slide-inner bg-height overlay\" data-bg-image=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/slider/bg/21.jpg"), "html", null, true);
        yield "\">
                            <div class=\"container\">
                                <div class=\"slide-content text-white\">
                                    <h3 class=\"sub-title\">
                                        Bienvenue!                                 
                                    </h3>
                                    <h2 class=\"title mb-3\">
                                        ARCADIA ZOO                                    
                                    </h2>
                                    <p class=\"short-desc different-width mb-10\">
                                        Rencontrez les merveilles du règne animal au Parc Arcadia                                  
                                    </p>
                                    <div class=\"button-wrap\">
                                        <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"/services\">
                                            Découvrir                                      
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide animation-style-01\">
                        <div class=\"slide-inner bg-height overlay\" data-bg-image=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/slider/bg/22.jpg"), "html", null, true);
        yield "\">
                            <div class=\"container\">
                                <div class=\"slide-content text-white\">
                                    <h3 class=\"sub-title\">
                                        Un monde animal à découvrir                                
                                    </h3>
                                    <h2 class=\"title mb-3\">
                                        ARCADIA ZOO                                  
                                    </h2>
                                    <p class=\"short-desc different-width mb-10\">
                                        Émerveillement garanti à chaque visite                                     
                                    </p>
                                    <div class=\"button-wrap\">
                                        <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"/occasions\">
                                            Découvrir                                        
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide animation-style-01\">
                    <div class=\"slide-inner bg-height overlay\" data-bg-image=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/slider/bg/23.jpg"), "html", null, true);
        yield "\">
                        <div class=\"container\">
                            <div class=\"slide-content text-white\">
                                <h3 class=\"sub-title\">
                                    La nature, la faune, et vous                                  
                                </h3>
                                <h2 class=\"title mb-3\">
                                    ARCADIA ZOO                                  
                                </h2>
                                <p class=\"short-desc different-width mb-10\">
                                    Voyagez au cœur de la nature avec Parc Arcadia                                    
                                </p>
                                <div class=\"button-wrap\">
                                    <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"/occasions\">
                                        Découvrir                                        
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Add Pagination -->
                <div class=\"swiper-pagination with-bg d-md-none\"></div>

                <!-- Custom Arrows -->
                <div class=\"custom-arrow-wrap d-none d-md-block\">
                    <div class=\"custom-button-prev\"></div>
                    <div class=\"custom-button-next\"></div>
                </div>
            </div>

        </div>
        <!-- Slider Area End Here -->

        <!-- Begin About Area -->
        <div class=\"about-area section-space-y-axis-50\">
            <div class=\"container\">
                <div class=\"row  py-5 py-xl-0\">
                    <div class=\"col-lg-6\">
                        <div class=\"title-box\">
                            <h2>
                                À propos de                        
                            </h2>
                            <p class=\"text-primary\">
                                ARCADIA ZOO                                  
                            </p>
                        </div>

                        <p class=\"short-desc mb-0\">
                        Situé en Bretagne, près de la forêt de Brocéliande, Parc Arcadia est un zoo emblématique depuis 1960. Nous abritons une grande variété d'animaux dans des habitats conçus pour imiter leur environnement naturel, comme la savane, la jungle et les marais.

                        Nous veillons attentivement au bien-être de nos animaux avec des contrôles vétérinaires quotidiens et une alimentation rigoureusement mesurée. Le zoo, en pleine forme financière, est un véritable fierté pour notre directeur, José, qui a de grandes ambitions pour l’avenir.

                        Venez découvrir la magie de la nature au Parc Arcadia, où chaque visite est une célébration de la faune.
                    </p>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"single-img img-hover-effect\">
                            <img class=\"img-full\" src=\"";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/about/about.jpg"), "html", null, true);
        yield "\" alt=\"About Banner\" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End About Area -->
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
        return "front/home.html.twig";
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
        return array (  196 => 115,  134 => 56,  109 => 34,  84 => 12,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layouts/base.html.twig' %}
{% block body %}

    <section class=\"homepage\">
        <!-- Begin Slider Area -->
        <div class=\"slider-area\">

            <!-- Main Slider -->
            <div class=\"swiper-container home-slider swiper-arrow with-bg_white\">
                <div class=\"swiper-wrapper\">
                    <div class=\"swiper-slide animation-style-01\">
                        <div class=\"slide-inner bg-height overlay\" data-bg-image=\"{{ asset('front-assets/images/slider/bg/21.jpg') }}\">
                            <div class=\"container\">
                                <div class=\"slide-content text-white\">
                                    <h3 class=\"sub-title\">
                                        Bienvenue!                                 
                                    </h3>
                                    <h2 class=\"title mb-3\">
                                        ARCADIA ZOO                                    
                                    </h2>
                                    <p class=\"short-desc different-width mb-10\">
                                        Rencontrez les merveilles du règne animal au Parc Arcadia                                  
                                    </p>
                                    <div class=\"button-wrap\">
                                        <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"/services\">
                                            Découvrir                                      
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide animation-style-01\">
                        <div class=\"slide-inner bg-height overlay\" data-bg-image=\"{{ asset('front-assets/images/slider/bg/22.jpg') }}\">
                            <div class=\"container\">
                                <div class=\"slide-content text-white\">
                                    <h3 class=\"sub-title\">
                                        Un monde animal à découvrir                                
                                    </h3>
                                    <h2 class=\"title mb-3\">
                                        ARCADIA ZOO                                  
                                    </h2>
                                    <p class=\"short-desc different-width mb-10\">
                                        Émerveillement garanti à chaque visite                                     
                                    </p>
                                    <div class=\"button-wrap\">
                                        <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"/occasions\">
                                            Découvrir                                        
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide animation-style-01\">
                    <div class=\"slide-inner bg-height overlay\" data-bg-image=\"{{ asset('front-assets/images/slider/bg/23.jpg') }}\">
                        <div class=\"container\">
                            <div class=\"slide-content text-white\">
                                <h3 class=\"sub-title\">
                                    La nature, la faune, et vous                                  
                                </h3>
                                <h2 class=\"title mb-3\">
                                    ARCADIA ZOO                                  
                                </h2>
                                <p class=\"short-desc different-width mb-10\">
                                    Voyagez au cœur de la nature avec Parc Arcadia                                    
                                </p>
                                <div class=\"button-wrap\">
                                    <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"/occasions\">
                                        Découvrir                                        
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- Add Pagination -->
                <div class=\"swiper-pagination with-bg d-md-none\"></div>

                <!-- Custom Arrows -->
                <div class=\"custom-arrow-wrap d-none d-md-block\">
                    <div class=\"custom-button-prev\"></div>
                    <div class=\"custom-button-next\"></div>
                </div>
            </div>

        </div>
        <!-- Slider Area End Here -->

        <!-- Begin About Area -->
        <div class=\"about-area section-space-y-axis-50\">
            <div class=\"container\">
                <div class=\"row  py-5 py-xl-0\">
                    <div class=\"col-lg-6\">
                        <div class=\"title-box\">
                            <h2>
                                À propos de                        
                            </h2>
                            <p class=\"text-primary\">
                                ARCADIA ZOO                                  
                            </p>
                        </div>

                        <p class=\"short-desc mb-0\">
                        Situé en Bretagne, près de la forêt de Brocéliande, Parc Arcadia est un zoo emblématique depuis 1960. Nous abritons une grande variété d'animaux dans des habitats conçus pour imiter leur environnement naturel, comme la savane, la jungle et les marais.

                        Nous veillons attentivement au bien-être de nos animaux avec des contrôles vétérinaires quotidiens et une alimentation rigoureusement mesurée. Le zoo, en pleine forme financière, est un véritable fierté pour notre directeur, José, qui a de grandes ambitions pour l’avenir.

                        Venez découvrir la magie de la nature au Parc Arcadia, où chaque visite est une célébration de la faune.
                    </p>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"single-img img-hover-effect\">
                            <img class=\"img-full\" src=\"{{ asset('front-assets/images/about/about.jpg') }}\" alt=\"About Banner\" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End About Area -->
    </section>
{% endblock %}
", "front/home.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/home.html.twig");
    }
}
