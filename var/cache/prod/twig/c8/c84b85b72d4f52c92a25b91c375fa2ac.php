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
class __TwigTemplate_e458296d8b86fb408c2cd66e4b91a3b4 extends Template
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
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["services"] ?? null));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/services/" . CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 145)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "name", [], "any", false, false, false, 145))), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["habitats"] ?? null));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/habitats/" . CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "images", [], "any", false, false, false, 209)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "name", [], "any", false, false, false, 209))), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["animals"] ?? null));
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
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/" . CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, $context["animal"], "images", [], "any", false, false, false, 282)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "name", [], "any", false, false, false, 282))), "html", null, true);
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["testimonials"] ?? null));
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 437));
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "feedback-form pt-8"]]);
        yield "
                           <div class=\"rating\">
                               <span>
                                   Évaluation                                                                      
                               </span>
                               <input type=\"radio\" id=\"star1\" name=\"";
        // line 465
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 465)), "html", null, true);
        yield "\" value=\"5\" />
                               <label class=\"star\" for=\"star1\" title=\"Awesome\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star2\" name=\"";
        // line 467
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 467)), "html", null, true);
        yield "\" value=\"4\" />
                               <label class=\"star\" for=\"star2\" title=\"Great\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star3\" name=\"";
        // line 469
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 469)), "html", null, true);
        yield "\" value=\"3\" />
                               <label class=\"star\" for=\"star3\" title=\"Very good\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star4\" name=\"";
        // line 471
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 471)), "html", null, true);
        yield "\" value=\"2\" />
                               <label class=\"star\" for=\"star4\" title=\"Good\" aria-hidden=\"true\"></label>
                               <input type=\"radio\" id=\"star5\" name=\"";
        // line 473
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 473)), "html", null, true);
        yield "\" value=\"1\" />
                               <label class=\"star\" for=\"star5\" title=\"Bad\" aria-hidden=\"true\"></label>
                           </div>
                           <div class=\"group-input\">
                               <div class=\"form-field me-md-6 mb-6 mb-md-0\">
                                   ";
        // line 478
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pseudonym", [], "any", false, false, false, 478), 'widget', ["attr" => ["class" => "input-field", "placeholder" => "Nom*"]]);
        yield " 
                               </div>
                               <div class=\"form-field me-md-6 mb-6 mb-md-0\">
                                   ";
        // line 481
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 481), 'widget', ["attr" => ["class" => "input-field", "placeholder" => "Email*"]]);
        yield " 
                               </div>
                               <div class=\"form-field  mb-6 mb-md-0\">
                                   ";
        // line 484
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 484), 'widget', ["attr" => ["class" => "input-field", "placeholder" => "Numéro de téléphone"]]);
        yield " 
                               </div>
                           </div>
                           <div class=\"form-field  mt-6\">
                               ";
        // line 488
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, false, 488), 'widget', ["attr" => ["class" => "textarea-field", "placeholder" => "Décrivez votre expérience..."]]);
        yield " 

                           </div>
                           <div class=\"button-wrap mt-8\">
                               <button class=\"btn btn-custom-size lg-size btn-primary\">";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Envoyer")) : ("Envoyer")), "html", null, true);
        yield "</button>
                           </div>

                           
                       ";
        // line 496
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  779 => 496,  772 => 492,  765 => 488,  758 => 484,  752 => 481,  746 => 478,  738 => 473,  733 => 471,  728 => 469,  723 => 467,  718 => 465,  710 => 460,  695 => 447,  689 => 446,  679 => 442,  672 => 439,  667 => 438,  663 => 437,  643 => 419,  632 => 414,  626 => 410,  618 => 404,  609 => 400,  605 => 399,  601 => 397,  599 => 396,  594 => 394,  586 => 389,  580 => 386,  574 => 382,  570 => 381,  539 => 353,  525 => 341,  503 => 325,  488 => 313,  477 => 305,  462 => 293,  458 => 292,  450 => 286,  444 => 284,  437 => 282,  434 => 281,  432 => 280,  427 => 278,  420 => 274,  413 => 270,  408 => 267,  404 => 266,  366 => 230,  353 => 223,  346 => 219,  338 => 213,  332 => 211,  325 => 209,  322 => 208,  320 => 207,  316 => 206,  311 => 203,  307 => 202,  269 => 166,  256 => 159,  249 => 155,  241 => 149,  235 => 147,  228 => 145,  225 => 144,  223 => 143,  219 => 142,  214 => 139,  210 => 138,  182 => 113,  134 => 68,  118 => 55,  93 => 33,  81 => 24,  65 => 11,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/home.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/home.html.twig");
    }
}
