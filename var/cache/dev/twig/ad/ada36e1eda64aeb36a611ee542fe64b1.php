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
class __TwigTemplate_275b502b7effff6bd57db39e054e4f82 extends Template
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
        // line 11
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
                                        <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services_index");
        yield "\">
                                            Découvrir                                      
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide animation-style-01\">
                        <div class=\"slide-inner bg-height overlay\" data-bg-image=\"";
        // line 33
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
                                        <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"#\">
                                            Découvrir                                        
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-slide animation-style-01\">
                    <div class=\"slide-inner bg-height overlay\" data-bg-image=\"";
        // line 55
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
                                    <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitats_index");
        yield "\">
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
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/about/about.jpg"), "html", null, true);
        yield "\" alt=\"About Banner\" />
                        </div>
                    </div>

                </div>
            </div>
        </div>    
        <!-- End About Area -->

          <!-- Begin Services Area -->
        <div class=\"services-area section-space-y-axis-50\">
          <div class=\"container\">
              <div class=\"title-box\">
                  <h2>
                      Nos services                                           
                  </h2>
                  <p class=\"text-primary\">
                      Nous proposons une gamme complète de services                  
                  </p>
              </div>
              <div class=\"row mt-10\">
                  <div class=\"col-lg-12\">
                      <div class=\"swiper-container service-slider\">
                          <div class=\"swiper-wrapper text-heading\">

                              ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 139
            yield "                                  <div class=\"swiper-slide\">
                                      <div class=\"service-item\">
                                          <div class=\"service-img img-hover-effect\">
                                              <a class=\"img-zoom-effect\" href=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "slug", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\">
                                                  ";
            // line 143
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 143)) > 0)) {
                // line 144
                yield "                                                      <img
                                                  src=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 145), 0, [], "array", false, false, false, 145), "name", [], "any", false, false, false, 145))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 145), "html", null, true);
                yield "\" />
                                                      ";
            } else {
                // line 147
                yield "                                                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder.webp"), "html", null, true);
                yield "\" />
                                                  ";
            }
            // line 149
            yield "                                              </a>
                                          </div>
                                          <div class=\"service-content pt-6\">

                                              <h2 class=\"mb-3\">
                                                  <a class=\"title\">
                                                      ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "title", [], "any", false, false, false, 155), "html", null, true);
            yield "
                                                  </a>
                                              </h2>
                                              <p class=\"short-desc mb-7\">
                                                  ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 159)), 0, 70) . "..."), "html", null, true);
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
        // line 166
        yield "                          </div>

                      </div>
                      <!-- Add Arrows -->
                      <div class=\"service-button-wrap\">
                          <div class=\"service-button-prev\">
                              <i class=\"bi bi-chevron-left\"></i>
                          </div>
                          <div class=\"service-button-next\">
                              <i class=\"bi bi-chevron-right\"></i>
                          </div>
                      </div>

                  </div>
              </div>
        </div>
      </div>
      <!-- Services Area End  -->


        <!-- Begin Habitas Area -->
        <div class=\"services-area section-space-y-axis-50\">
          <div class=\"container\">
              <div class=\"title-box\">
                  <h2>
                      Nos habitas                                           
                  </h2>
                  <p class=\"text-primary\">
                    Explorez les différents habitats du Zoo Arcadia 
                  </p>
              </div>
              <div class=\"row mt-10\">
                  <div class=\"col-lg-12\">
                      <div class=\"swiper-container habitat-slider\">
                          <div class=\"swiper-wrapper text-heading\">

                              ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 202, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 203
            yield "                                  <div class=\"swiper-slide\">
                                      <div class=\"service-item\">
                                          <div class=\"service-img img-hover-effect\">
                                              <a class=\"img-zoom-effect\" href=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitats_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "slug", [], "any", false, false, false, 206)]), "html", null, true);
            yield "\">
                                                  ";
            // line 207
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "images", [], "any", false, false, false, 207)) > 0)) {
                // line 208
                yield "                                                      <img
                                                  src=\"";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/habitats/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "images", [], "any", false, false, false, 209), 0, [], "array", false, false, false, 209), "name", [], "any", false, false, false, 209))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "title", [], "any", false, false, false, 209), "html", null, true);
                yield "\" />
                                                      ";
            } else {
                // line 211
                yield "                                                      <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder.webp"), "html", null, true);
                yield "\" />
                                                  ";
            }
            // line 213
            yield "                                              </a>
                                          </div>
                                          <div class=\"service-content pt-6\">

                                              <h2 class=\"mb-3\">
                                                  <a class=\"title\">
                                                      ";
            // line 219
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "title", [], "any", false, false, false, 219), "html", null, true);
            yield "
                                                  </a>
                                              </h2>
                                              <p class=\"short-desc mb-7\">
                                                  ";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "description", [], "any", false, false, false, 223)), 0, 70) . "..."), "html", null, true);
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
        // line 230
        yield "                          </div>

                      </div>
                      <!-- Add Arrows -->
                      <div class=\"service-button-wrap\">
                          <div class=\"service-button-prev\">
                              <i class=\"bi bi-chevron-left\"></i>
                          </div>
                          <div class=\"service-button-next\">
                              <i class=\"bi bi-chevron-right\"></i>
                          </div>
                      </div>

                  </div>
              </div>
        </div>
      </div>
      <!-- Habitats Area End  -->


        <!-- Begin Animals Area -->
        <div class=\"animals-section\">
            <div class=\"animal-area section-space-y-axis-50\">
                <div class=\"container\">
                    <div class=\"title-box\">
                        <h2>
                            Nos animaux                    
                        </h2>
                        <p class=\"text-primary\">
                        Rencontrez les animaux qui habitent le zoo   !                    
                        </p>
                    </div>
                    <div class=\"row mt-10\">
                        <div class=\"col-lg-12\">
                            <div class=\"swiper-container animal-slider\">
                                <div class=\"swiper-wrapper text-heading\">
                                    ";
        // line 266
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["animals"]) || array_key_exists("animals", $context) ? $context["animals"] : (function () { throw new RuntimeError('Variable "animals" does not exist.', 266, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 267
            yield "                                        <div class=\"swiper-slide\">
                                        <div class=\"animal-item\">
                                        <div class=\"animal-inner\">
                                            <a class='animal-link' href=\"";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 270)]), "html", null, true);
            yield "\"></a>
                                            <div class=\"animal-header\">
                                                <div class=\"vprice_wrap\">
                                                        <div class=\"price\">
                                                            ";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "status", [], "any", false, false, false, 274), "html", null, true);
            yield "
                
                                                        </div>
                                                    </div>
                                                    <a href=\"";
            // line 278
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 278)]), "html", null, true);
            yield "\">
                                                        <div class=\"animal-img\">
                                                            ";
            // line 280
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 280)) > 0)) {
                // line 281
                yield "                                                                <img
                                                            src=\"";
                // line 282
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 282), 0, [], "array", false, false, false, 282), "name", [], "any", false, false, false, 282))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 282), "html", null, true);
                yield "\" />
                                                                ";
            } else {
                // line 284
                yield "                                                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/images/placeholder.webp"), "html", null, true);
                yield "\" />
                                                            ";
            }
            // line 286
            yield "                                                        </div>
                                                    </a>
                                                </div>
                                            <div class=\"animal-content\">
                                                <div class=\"animal-content-top\">
                                                    <div class=\"animal-content-top-left\">
                                                        <a href=\"";
            // line 292
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_details", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "slug", [], "any", false, false, false, 292)]), "html", null, true);
            yield "\" class=\"vtitle\">
                                                            ";
            // line 293
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "name", [], "any", false, false, false, 293), "html", null, true);
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
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "HabitatId", [], "any", false, false, false, 305), "title", [], "any", false, false, false, 305), "html", null, true);
            yield "                                                                
                                                            </span>
                                                        </div>
                                                        <div class=\"inline-item\">
                                                            <span class=\"attr\">
                                                            <b>Race:  </b>                                                                                                                                                      
                                                            </span>
                                                            <span>
                                                                ";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "RaceId", [], "any", false, false, false, 313), "name", [], "any", false, false, false, 313), "html", null, true);
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
            // line 325
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "weight", [], "any", false, false, false, 325), "html", null, true);
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
        // line 341
        yield "                                </div>
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
                                <a class=\"btn btn-link text-primary with-underline p-0\" href=\"";
        // line 353
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_index");
        yield "\">
                                    Venez découvrir tous nos animaux                     
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Animals Area End  -->

           <!-- Begin Testimonial Area -->
           <div class=\"testimonial-area  section-space-y-axis-50\">
           <div class=\"container\">
               <div class=\"row\">
                   <div class=\"col-lg-12\">
                       <div class=\"title-box\">
                           <h2>
                               Témoignages                       
                           </h2>
                           <p class=\"text-primary\">
                               Ce que disent nos clients                          
                           </p>
                       </div>
                       <div class=\"testimonial-swiper\">
                           <div class=\"swiper-container testimonial-slider\">
                               <div class=\"swiper-wrapper\">
                                   ";
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["testimonials"]) || array_key_exists("testimonials", $context) ? $context["testimonials"] : (function () { throw new RuntimeError('Variable "testimonials" does not exist.', 381, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["testimonial"]) {
            // line 382
            yield "                                   <div class=\"swiper-slide testimonial-item\">
                                       <div class=\"user-info mb-3\">
                                           <div class=\"user-shape-wrap\">
                                               <div class=\"user-shape\">
                                                   <img src=\"";
            // line 386
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/testimonial/user/shape/1.png"), "html", null, true);
            yield "\" alt=\"User Image\" />
                                               </div>
                                               <div class=\"user-img\">
                                                   <img src=\"";
            // line 389
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/testimonial/user/user.png"), "html", null, true);
            yield "\" alt=\"User Image\" />
                                               </div>
                                           </div>
                                           <div class=\"user-content\">
                                               <h4 class=\"user-name mb-1\">
                                                   ";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "Pseudonym", [], "any", false, false, false, 394), "html", null, true);
            yield "                                              
                                               </h4>
                                               ";
            // line 396
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "note", [], "any", false, false, false, 396)) > 0)) {
                // line 397
                yield "                                               <div class=\"rating-box\">
                                                   <ul>
                                                       ";
                // line 399
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "note", [], "any", false, false, false, 399)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 400
                    yield "                                                       <li>
                                                           <i class=\"bi bi-star-fill\"></i>
                                                       </li>
                                                       ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 404
                yield "                                                       
                                                      
                                                   </ul>
                                               </div>
                                                   
                                               ";
            }
            // line 410
            yield "                                               
                                           </div>
                                       </div>
                                       <p class=\"user-comment mb-6\">
                                          ";
            // line 414
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["testimonial"], "comment", [], "any", false, false, false, 414), "html", null, true);
            yield "                               
                                       </p>

                                   </div>
                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['testimonial'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 419
        yield "                                   
                               </div>
                               <!-- Add Pagination -->
                               <div class=\"testimonial-pagination with-bg\"></div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Testimonial Area End  -->

       <!-- Begin Feedback Form Area -->
      
       <div class=\"section-space-y-axis-50\">
           <div class=\"container\">
               <div class=\"row\">
                   <div class=\"flash-wrapper my-2\">
                   ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 437, $this->source); })()), "flashes", [], "any", false, false, false, 437));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 438
            yield "                       ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 439
                yield "                           <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible mt-4\" role=\"alert\">
                               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"><i class=\"bi bi-x\"></i></button>
                               <div class=\"alert-message\">
                                   ";
                // line 442
                yield $context["message"];
                yield "
                               </div>
                           </div>
                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 446
            yield "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        yield "                   </div>
                   <div class=\"col-lg-12\">
                       <div class=\"title-box\">
                           <h2>
                               Laisser un témoignage                            
                           </h2>
                           <p class=\"text-primary\">
                               Votre adresse e-mail et votre numéro de téléphone ne seront pas publiés.                                                            
                           </p>
                       </div>
                       

                      
                       ";
        // line 460
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 460, $this->source); })()), 'form_start', ["attr" => ["class" => "feedback-form pt-8"]]);
        yield "
                           <div class=\"rating\">
                               <span>
                                   Évaluation                                                                      
                               </span>
                               <input type=\"radio\" id=\"star1\" name=\"";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()), "note", [], "any", false, false, false, 465)), "html", null, true);
        yield "\" value=\"5\" />
                               <label class=\"star\" for=\"star1\" title=\"Awesome\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star2\" name=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 467, $this->source); })()), "note", [], "any", false, false, false, 467)), "html", null, true);
        yield "\" value=\"4\" />
                               <label class=\"star\" for=\"star2\" title=\"Great\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star3\" name=\"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 469, $this->source); })()), "note", [], "any", false, false, false, 469)), "html", null, true);
        yield "\" value=\"3\" />
                               <label class=\"star\" for=\"star3\" title=\"Very good\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star4\" name=\"";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 471, $this->source); })()), "note", [], "any", false, false, false, 471)), "html", null, true);
        yield "\" value=\"2\" />
                               <label class=\"star\" for=\"star4\" title=\"Good\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star5\" name=\"";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 473, $this->source); })()), "note", [], "any", false, false, false, 473)), "html", null, true);
        yield "\" value=\"1\" />
                               <label class=\"star\" for=\"star5\" title=\"Bad\" aria-hidden=\"true\"></label>
                           </div>
                           <div class=\"group-input\">
                               <div class=\"form-field me-md-6 mb-6 mb-md-0\">
                                   ";
        // line 478
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 478, $this->source); })()), "pseudonym", [], "any", false, false, false, 478), 'widget', ["attr" => ["class" => "input-field", "placeholder" => "Nom*"]]);
        yield " 
                               </div>
                               <div class=\"form-field me-md-6 mb-6 mb-md-0\">
                                   ";
        // line 481
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 481, $this->source); })()), "email", [], "any", false, false, false, 481), 'widget', ["attr" => ["class" => "input-field", "placeholder" => "Email*"]]);
        yield " 
                               </div>
                               <div class=\"form-field  mb-6 mb-md-0\">
                                   ";
        // line 484
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 484, $this->source); })()), "phone", [], "any", false, false, false, 484), 'widget', ["attr" => ["class" => "input-field", "placeholder" => "Numéro de téléphone"]]);
        yield " 
                               </div>
                           </div>
                           <div class=\"form-field  mt-6\">
                               ";
        // line 488
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 488, $this->source); })()), "comment", [], "any", false, false, false, 488), 'widget', ["attr" => ["class" => "textarea-field", "placeholder" => "Décrivez votre expérience..."]]);
        yield " 

                           </div>
                           <div class=\"button-wrap mt-8\">
                               <button class=\"btn btn-custom-size lg-size btn-primary\">";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 492, $this->source); })()), "Envoyer")) : ("Envoyer")), "html", null, true);
        yield "</button>
                           </div>

                           
                       ";
        // line 496
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 496, $this->source); })()), 'form_end');
        yield "

                           </div>
                       </div>

                   </div>
               </div>
           </div>
       </div>
   <!-- Feedback Form Area End  -->
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
        return array (  797 => 496,  790 => 492,  783 => 488,  776 => 484,  770 => 481,  764 => 478,  756 => 473,  751 => 471,  746 => 469,  741 => 467,  736 => 465,  728 => 460,  713 => 447,  707 => 446,  697 => 442,  690 => 439,  685 => 438,  681 => 437,  661 => 419,  650 => 414,  644 => 410,  636 => 404,  627 => 400,  623 => 399,  619 => 397,  617 => 396,  612 => 394,  604 => 389,  598 => 386,  592 => 382,  588 => 381,  557 => 353,  543 => 341,  521 => 325,  506 => 313,  495 => 305,  480 => 293,  476 => 292,  468 => 286,  462 => 284,  455 => 282,  452 => 281,  450 => 280,  445 => 278,  438 => 274,  431 => 270,  426 => 267,  422 => 266,  384 => 230,  371 => 223,  364 => 219,  356 => 213,  350 => 211,  343 => 209,  340 => 208,  338 => 207,  334 => 206,  329 => 203,  325 => 202,  287 => 166,  274 => 159,  267 => 155,  259 => 149,  253 => 147,  246 => 145,  243 => 144,  241 => 143,  237 => 142,  232 => 139,  228 => 138,  200 => 113,  152 => 68,  136 => 55,  111 => 33,  99 => 24,  83 => 11,  73 => 3,  63 => 2,  40 => 1,);
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
                                        <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"{{ path('services_index') }}\">
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
                                        <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"#\">
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
                                    <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"{{ path('habitats_index') }}\">
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

          <!-- Begin Services Area -->
        <div class=\"services-area section-space-y-axis-50\">
          <div class=\"container\">
              <div class=\"title-box\">
                  <h2>
                      Nos services                                           
                  </h2>
                  <p class=\"text-primary\">
                      Nous proposons une gamme complète de services                  
                  </p>
              </div>
              <div class=\"row mt-10\">
                  <div class=\"col-lg-12\">
                      <div class=\"swiper-container service-slider\">
                          <div class=\"swiper-wrapper text-heading\">

                              {% for service in services %}
                                  <div class=\"swiper-slide\">
                                      <div class=\"service-item\">
                                          <div class=\"service-img img-hover-effect\">
                                              <a class=\"img-zoom-effect\" href=\"{{ path('services_details', {\"slug\": service.slug }) }}\">
                                                  {% if service.images|length > 0 %}
                                                      <img
                                                  src=\"{{ asset('uploads/services/' ~ service.images[0].name) }}\" alt=\"{{ service.title }}\" />
                                                      {% else %}
                                                      <img src=\"{{ asset('admin-assets/images/placeholder.webp') }}\" />
                                                  {% endif %}
                                              </a>
                                          </div>
                                          <div class=\"service-content pt-6\">

                                              <h2 class=\"mb-3\">
                                                  <a class=\"title\">
                                                      {{ service.title }}
                                                  </a>
                                              </h2>
                                              <p class=\"short-desc mb-7\">
                                                  {{ service.description|striptags|slice(0, 70) ~ '...' }}
                                              </p>

                                          </div>
                                      </div>
                                  </div>
                              {% endfor %}
                          </div>

                      </div>
                      <!-- Add Arrows -->
                      <div class=\"service-button-wrap\">
                          <div class=\"service-button-prev\">
                              <i class=\"bi bi-chevron-left\"></i>
                          </div>
                          <div class=\"service-button-next\">
                              <i class=\"bi bi-chevron-right\"></i>
                          </div>
                      </div>

                  </div>
              </div>
        </div>
      </div>
      <!-- Services Area End  -->


        <!-- Begin Habitas Area -->
        <div class=\"services-area section-space-y-axis-50\">
          <div class=\"container\">
              <div class=\"title-box\">
                  <h2>
                      Nos habitas                                           
                  </h2>
                  <p class=\"text-primary\">
                    Explorez les différents habitats du Zoo Arcadia 
                  </p>
              </div>
              <div class=\"row mt-10\">
                  <div class=\"col-lg-12\">
                      <div class=\"swiper-container habitat-slider\">
                          <div class=\"swiper-wrapper text-heading\">

                              {% for habitat in habitats %}
                                  <div class=\"swiper-slide\">
                                      <div class=\"service-item\">
                                          <div class=\"service-img img-hover-effect\">
                                              <a class=\"img-zoom-effect\" href=\"{{ path('habitats_details', {\"slug\": habitat.slug }) }}\">
                                                  {% if habitat.images|length > 0 %}
                                                      <img
                                                  src=\"{{ asset('uploads/habitats/' ~ habitat.images[0].name) }}\" alt=\"{{ habitat.title }}\" />
                                                      {% else %}
                                                      <img src=\"{{ asset('admin-assets/images/placeholder.webp') }}\" />
                                                  {% endif %}
                                              </a>
                                          </div>
                                          <div class=\"service-content pt-6\">

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

                      </div>
                      <!-- Add Arrows -->
                      <div class=\"service-button-wrap\">
                          <div class=\"service-button-prev\">
                              <i class=\"bi bi-chevron-left\"></i>
                          </div>
                          <div class=\"service-button-next\">
                              <i class=\"bi bi-chevron-right\"></i>
                          </div>
                      </div>

                  </div>
              </div>
        </div>
      </div>
      <!-- Habitats Area End  -->


        <!-- Begin Animals Area -->
        <div class=\"animals-section\">
            <div class=\"animal-area section-space-y-axis-50\">
                <div class=\"container\">
                    <div class=\"title-box\">
                        <h2>
                            Nos animaux                    
                        </h2>
                        <p class=\"text-primary\">
                        Rencontrez les animaux qui habitent le zoo   !                    
                        </p>
                    </div>
                    <div class=\"row mt-10\">
                        <div class=\"col-lg-12\">
                            <div class=\"swiper-container animal-slider\">
                                <div class=\"swiper-wrapper text-heading\">
                                    {% for animal in animals %}
                                        <div class=\"swiper-slide\">
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
                                <a class=\"btn btn-link text-primary with-underline p-0\" href=\"{{ path('animal_index') }}\">
                                    Venez découvrir tous nos animaux                     
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Animals Area End  -->

           <!-- Begin Testimonial Area -->
           <div class=\"testimonial-area  section-space-y-axis-50\">
           <div class=\"container\">
               <div class=\"row\">
                   <div class=\"col-lg-12\">
                       <div class=\"title-box\">
                           <h2>
                               Témoignages                       
                           </h2>
                           <p class=\"text-primary\">
                               Ce que disent nos clients                          
                           </p>
                       </div>
                       <div class=\"testimonial-swiper\">
                           <div class=\"swiper-container testimonial-slider\">
                               <div class=\"swiper-wrapper\">
                                   {% for testimonial in testimonials %}
                                   <div class=\"swiper-slide testimonial-item\">
                                       <div class=\"user-info mb-3\">
                                           <div class=\"user-shape-wrap\">
                                               <div class=\"user-shape\">
                                                   <img src=\"{{ asset('front-assets/images/testimonial/user/shape/1.png') }}\" alt=\"User Image\" />
                                               </div>
                                               <div class=\"user-img\">
                                                   <img src=\"{{ asset('front-assets/images/testimonial/user/user.png') }}\" alt=\"User Image\" />
                                               </div>
                                           </div>
                                           <div class=\"user-content\">
                                               <h4 class=\"user-name mb-1\">
                                                   {{testimonial.Pseudonym}}                                              
                                               </h4>
                                               {% if testimonial.note|length  >0 %}
                                               <div class=\"rating-box\">
                                                   <ul>
                                                       {% for i in 1.. testimonial.note %}
                                                       <li>
                                                           <i class=\"bi bi-star-fill\"></i>
                                                       </li>
                                                       {% endfor %}
                                                       
                                                      
                                                   </ul>
                                               </div>
                                                   
                                               {% endif %}
                                               
                                           </div>
                                       </div>
                                       <p class=\"user-comment mb-6\">
                                          {{testimonial.comment}}                               
                                       </p>

                                   </div>
                                   {% endfor %}
                                   
                               </div>
                               <!-- Add Pagination -->
                               <div class=\"testimonial-pagination with-bg\"></div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       <!-- Testimonial Area End  -->

       <!-- Begin Feedback Form Area -->
      
       <div class=\"section-space-y-axis-50\">
           <div class=\"container\">
               <div class=\"row\">
                   <div class=\"flash-wrapper my-2\">
                   {% for label, messages in app.flashes %}
                       {% for message in messages %}
                           <div class=\"alert alert-{{ label }} alert-dismissible mt-4\" role=\"alert\">
                               <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"><i class=\"bi bi-x\"></i></button>
                               <div class=\"alert-message\">
                                   {{ message|raw }}
                               </div>
                           </div>
                       {% endfor %}
                   {% endfor %}
                   </div>
                   <div class=\"col-lg-12\">
                       <div class=\"title-box\">
                           <h2>
                               Laisser un témoignage                            
                           </h2>
                           <p class=\"text-primary\">
                               Votre adresse e-mail et votre numéro de téléphone ne seront pas publiés.                                                            
                           </p>
                       </div>
                       

                      
                       {{ form_start(form , {'attr': {'class': 'feedback-form pt-8'}}) }}
                           <div class=\"rating\">
                               <span>
                                   Évaluation                                                                      
                               </span>
                               <input type=\"radio\" id=\"star1\" name=\"{{ field_name(form.note) }}\" value=\"5\" />
                               <label class=\"star\" for=\"star1\" title=\"Awesome\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star2\" name=\"{{ field_name(form.note) }}\" value=\"4\" />
                               <label class=\"star\" for=\"star2\" title=\"Great\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star3\" name=\"{{ field_name(form.note) }}\" value=\"3\" />
                               <label class=\"star\" for=\"star3\" title=\"Very good\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star4\" name=\"{{ field_name(form.note) }}\" value=\"2\" />
                               <label class=\"star\" for=\"star4\" title=\"Good\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star5\" name=\"{{ field_name(form.note) }}\" value=\"1\" />
                               <label class=\"star\" for=\"star5\" title=\"Bad\" aria-hidden=\"true\"></label>
                           </div>
                           <div class=\"group-input\">
                               <div class=\"form-field me-md-6 mb-6 mb-md-0\">
                                   {{ form_widget(form.pseudonym, {'attr': {'class': 'input-field', \"placeholder\":\"Nom*\"}}) }} 
                               </div>
                               <div class=\"form-field me-md-6 mb-6 mb-md-0\">
                                   {{ form_widget(form.email, {'attr': {'class': 'input-field', \"placeholder\":\"Email*\"}}) }} 
                               </div>
                               <div class=\"form-field  mb-6 mb-md-0\">
                                   {{ form_widget(form.phone, {'attr': {'class': 'input-field', \"placeholder\":\"Numéro de téléphone\"}}) }} 
                               </div>
                           </div>
                           <div class=\"form-field  mt-6\">
                               {{ form_widget(form.comment, {'attr': {'class': 'textarea-field', \"placeholder\":\"Décrivez votre expérience...\"}}) }} 

                           </div>
                           <div class=\"button-wrap mt-8\">
                               <button class=\"btn btn-custom-size lg-size btn-primary\">{{ button_label|default('Envoyer') }}</button>
                           </div>

                           
                       {{ form_end(form) }}

                           </div>
                       </div>

                   </div>
               </div>
           </div>
       </div>
   <!-- Feedback Form Area End  -->
    </section>
{% endblock %}
", "front/home.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/home.html.twig");
    }
}
