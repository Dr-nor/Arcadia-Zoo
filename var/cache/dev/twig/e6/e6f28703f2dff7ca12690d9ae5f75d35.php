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

/* front/layouts/footer.html.twig */
class __TwigTemplate_8a4163c384f7356af3f61d9906fde22c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/layouts/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/layouts/footer.html.twig"));

        // line 1
        yield "<!-- Begin Footer Area -->
<footer class=\"footer-area\">
    <div class=\"footer-top section-space-y-axis-50 text-lavender\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"widget-item\">
                        <div class=\"footer-logo pb-4\">
                            <a href=\"/\">
                                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/logo/light.svg"), "html", null, true);
        yield "\" width=\"200\" alt=\"Logo\" />
                            </a>
                        </div>
                        <p class=\"short-desc mb-2\">
                    Rejoignez-nous pour vivre une aventure immersive au cœur de la nature, où la beauté et la richesse de la vie sauvage sont célébrées à chaque instant.                        </p>

                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"widget-item\">
                        <h3 class=\"widget-title mb-5\">
                            Liens utiles                          
                        </h3>
                        <ul class=\"widget-list-item\">
                            <li>
                                <a href=\"/\">Accueil                                                                                                                                                               
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services_index");
        yield "\">
                                    Nos Services                                  
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitats_index");
        yield "\">
                                    Habitas                                
                                </a>
                            </li>
                            <li>
                                <a href=\"/contact\">
                                    contact                                  
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"widget-item\">
                        <h3 class=\"widget-title mb-5\">
                            Contact                       
                        </h3>

                        <div class=\"pb-2\">
                            <ul>
                                <li>
                                    <p>
                                        Adresse:                                                                       
                                        <span class=\"text-primary\">
                                            Bretagne, France.                                                                                 
                                        </span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span>
                                            Email:                                         
                                        </span>
                                        <a class=\"text-primary\" href=\"mailto://contact@arcadia-zoo.com \">
                                            contact@arcadia-zoo.com                                           
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span>
                                            Téléphone:                                        
                                        </span>
                                        <a class=\"text-primary\" href=\"tel://+33xxxxxxxxx\">
                                            (+33)xxxxxxxxx                                            
                                        </a>
                                    </p>
                                </li>
                            </ul>
                        </div>

                    </div>
                   
                </div>
                <div class=\"col-lg-3\">
                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\OpeningController::openingTimeShow"));
        // line 93
        yield "

                </div>
            </div>
            </div>
        </div>
    </div>
    <div class=\"footer-bottom bg-midnight-express py-3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"copyright\">
                        <span class=\"copyright-text\">
                            &copy; 2024 Arcadia Zoo, Tous droits réservés. 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin Scroll To Top -->
    <a class=\"scroll-to-top\" href=\"\">
        <i class=\"bi bi-chevron-up\"></i>
    </a>
<!-- Scroll To Top End -->
</footer>
<!-- Footer Area End -->
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
        return "front/layouts/footer.html.twig";
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
        return array (  151 => 93,  149 => 91,  89 => 34,  81 => 29,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Begin Footer Area -->
<footer class=\"footer-area\">
    <div class=\"footer-top section-space-y-axis-50 text-lavender\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3\">
                    <div class=\"widget-item\">
                        <div class=\"footer-logo pb-4\">
                            <a href=\"/\">
                                <img src=\"{{ asset('front-assets/images/logo/light.svg') }}\" width=\"200\" alt=\"Logo\" />
                            </a>
                        </div>
                        <p class=\"short-desc mb-2\">
                    Rejoignez-nous pour vivre une aventure immersive au cœur de la nature, où la beauté et la richesse de la vie sauvage sont célébrées à chaque instant.                        </p>

                    </div>
                </div>
                <div class=\"col-lg-2\">
                    <div class=\"widget-item\">
                        <h3 class=\"widget-title mb-5\">
                            Liens utiles                          
                        </h3>
                        <ul class=\"widget-list-item\">
                            <li>
                                <a href=\"/\">Accueil                                                                                                                                                               
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('services_index') }}\">
                                    Nos Services                                  
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('habitats_index') }}\">
                                    Habitas                                
                                </a>
                            </li>
                            <li>
                                <a href=\"/contact\">
                                    contact                                  
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class=\"col-lg-4\">
                    <div class=\"widget-item\">
                        <h3 class=\"widget-title mb-5\">
                            Contact                       
                        </h3>

                        <div class=\"pb-2\">
                            <ul>
                                <li>
                                    <p>
                                        Adresse:                                                                       
                                        <span class=\"text-primary\">
                                            Bretagne, France.                                                                                 
                                        </span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span>
                                            Email:                                         
                                        </span>
                                        <a class=\"text-primary\" href=\"mailto://contact@arcadia-zoo.com \">
                                            contact@arcadia-zoo.com                                           
                                        </a>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <span>
                                            Téléphone:                                        
                                        </span>
                                        <a class=\"text-primary\" href=\"tel://+33xxxxxxxxx\">
                                            (+33)xxxxxxxxx                                            
                                        </a>
                                    </p>
                                </li>
                            </ul>
                        </div>

                    </div>
                   
                </div>
                <div class=\"col-lg-3\">
                {{ render(controller(
                    'App\\\\Controller\\\\OpeningController::openingTimeShow'
                )) }}

                </div>
            </div>
            </div>
        </div>
    </div>
    <div class=\"footer-bottom bg-midnight-express py-3\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"copyright\">
                        <span class=\"copyright-text\">
                            &copy; 2024 Arcadia Zoo, Tous droits réservés. 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin Scroll To Top -->
    <a class=\"scroll-to-top\" href=\"\">
        <i class=\"bi bi-chevron-up\"></i>
    </a>
<!-- Scroll To Top End -->
</footer>
<!-- Footer Area End -->
", "front/layouts/footer.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/layouts/footer.html.twig");
    }
}
