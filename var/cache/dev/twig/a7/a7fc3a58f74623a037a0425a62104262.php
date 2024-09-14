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

/* front/layouts/header.html.twig */
class __TwigTemplate_7938aa1ad3e2323723b4d3d2f9b689e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/layouts/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/layouts/header.html.twig"));

        // line 1
        yield "<!-- Begin Main Header Area -->
<header class=\"main-header-area\">
    <div class=\"header-top border-bottom d-none d-lg-block pt-2 pb-2\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-6\">
                    <div class=\"header-top-left\">
                        <ul class=\"text-matterhorn\">
                            <li>
                                <i class=\"bi bi-telephone\"></i>
                                <a href=\"tel://+33xxxxxxxxx\">
                                    +33 xxx xxx xxx                              
                                </a>
                            </li>
                            <li>
                                <i class=\"bi bi-send\"></i>
                                <a href=\"mailto://contact@arcadia-zoo.com\">
                                    contact@arcadia-zoo.com
                                                                    
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"header-top-right text-matterhorn\">
                        <div class=\"social-link\">
                            <ul>
                                <li><a href=\"#\" data-tippy=\"Twitter\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-twitter\"></i></a></li>
                                <li><a href=\"#\" data-tippy=\"Youtube\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-youtube\"></i></a></li>
                                <li><a href=\"#\" data-tippy=\"Facebook\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-facebook\"></i></a></li>
                                <li><a href=\"#\" data-tippy=\"Instagram\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-instagram\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"header-middle header-sticky py-6 py-lg-0\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <div class=\"header-middle-wrap position-relative\">

                        <a href=\"/\" class=\"header-logo\">
                            <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/logo/dark.svg"), "html", null, true);
        yield "\" width=\"180\" alt=\"Header Logo\" />
                        </a>

                        <div class=\"main-menu d-none d-lg-block\">
                            <nav class=\"main-nav\">
                                <ul>
                                    <li class=\"drop-holder\">
                                        <a href=\"/\">
                                            Accueil
                                                                                        
                                        </a>
                                    </li>
                                    <li class=\"megamenu-holder\">
                                        <a href=\"#\">
                                            Services
                                                                                        
                                        </a>
                                    </li>
                                    <li class=\"drop-holder\">
                                        <a href=\"/habitat\">
                                            Habitats
                                                                                        
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"/contact\">
                                            Contact
                                                                                        
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        ";
        // line 81
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 82
            yield "                            <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                Déconnecter                                                
                            </a>
                        ";
        } else {
            // line 86
            yield "                            <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"/login\">
                            Se connecter                                                
                            </a>
                        ";
        }
        // line 90
        yield "                        <div class=\"header-right d-lg-none\">
                            <ul>
                                <li class=\"mobile-menu_wrap d-block d-lg-none\">
                                    <a href=\"#mobileMenu\" class=\"mobile-menu_btn toolbar-btn pl-0\">
                                        <i class=\"bi bi-list\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mobile-menu_wrapper\" id=\"mobileMenu\">
        <div class=\"vp-offcanvas-body\">
            <div class=\"inner-body\">
                <div class=\"vp-offcanvas-top\">
                    <a href=\"#\" class=\"button-close\">
                        <i class=\"bi bi-x\"></i>
                    </a>
                </div>
                <div class=\"text-center\">
                    <div class=\"social-link justify-content-center pb-4\">
                        <ul>
                            <li><a href=\"#\" data-tippy=\"Twitter\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-twitter\"></i></a></li>
                            <li><a href=\"#\" data-tippy=\"Youtube\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-youtube\"></i></a></li>
                            <li><a href=\"#\" data-tippy=\"Facebook\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-facebook\"></i></a></li>
                            <li><a href=\"#\" data-tippy=\"Instagram\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-instagram\"></i></a></li>
                        </ul>
                    </div>
                    <div class=\"mobile-logo justify-content-center pb-4\">
                        <a href=\"/\">
                            <img src=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/logo/light.svg"), "html", null, true);
        yield "\" width=\"140\" alt=\"Logo\" />
                        </a>
                    </div>
                </div>
                <div class=\"offcanvas-menu_area\">
                    <nav class=\"offcanvas-navigation\">
                        <ul class=\"mobile-menu\">
                            <li class=\"menu-item-has-children\">
                                <a href=\"/\">
                                    <span class=\"mm-text\">
                                        Accueil
                                                                                                                                
                                                                                    
                                    </span>
                                </a>

                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"mm-text\">
                                        Services                                        
                                    </span>
                                </a>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"/habitat\">
                                    <span class=\"mm-text\">
                                        Habitats                                          
                                    </span>
                                </a>

                            </li>
                            <li>
                                <a href=\"/contact\">
                                    <span class=\"mm-text\">
                                        Contact                                        
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- Main Header Area End -->
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
        return "front/layouts/header.html.twig";
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
        return array (  185 => 124,  149 => 90,  143 => 86,  135 => 82,  133 => 81,  96 => 47,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Begin Main Header Area -->
<header class=\"main-header-area\">
    <div class=\"header-top border-bottom d-none d-lg-block pt-2 pb-2\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-6\">
                    <div class=\"header-top-left\">
                        <ul class=\"text-matterhorn\">
                            <li>
                                <i class=\"bi bi-telephone\"></i>
                                <a href=\"tel://+33xxxxxxxxx\">
                                    +33 xxx xxx xxx                              
                                </a>
                            </li>
                            <li>
                                <i class=\"bi bi-send\"></i>
                                <a href=\"mailto://contact@arcadia-zoo.com\">
                                    contact@arcadia-zoo.com
                                                                    
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-6\">
                    <div class=\"header-top-right text-matterhorn\">
                        <div class=\"social-link\">
                            <ul>
                                <li><a href=\"#\" data-tippy=\"Twitter\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-twitter\"></i></a></li>
                                <li><a href=\"#\" data-tippy=\"Youtube\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-youtube\"></i></a></li>
                                <li><a href=\"#\" data-tippy=\"Facebook\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-facebook\"></i></a></li>
                                <li><a href=\"#\" data-tippy=\"Instagram\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-instagram\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"header-middle header-sticky py-6 py-lg-0\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-12\">
                    <div class=\"header-middle-wrap position-relative\">

                        <a href=\"/\" class=\"header-logo\">
                            <img src=\"{{ asset('front-assets/images/logo/dark.svg') }}\" width=\"180\" alt=\"Header Logo\" />
                        </a>

                        <div class=\"main-menu d-none d-lg-block\">
                            <nav class=\"main-nav\">
                                <ul>
                                    <li class=\"drop-holder\">
                                        <a href=\"/\">
                                            Accueil
                                                                                        
                                        </a>
                                    </li>
                                    <li class=\"megamenu-holder\">
                                        <a href=\"#\">
                                            Services
                                                                                        
                                        </a>
                                    </li>
                                    <li class=\"drop-holder\">
                                        <a href=\"/habitat\">
                                            Habitats
                                                                                        
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"/contact\">
                                            Contact
                                                                                        
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        {% if is_granted('ROLE_USER') %}
                            <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"{{ path('app_logout') }}\">
                                Déconnecter                                                
                            </a>
                        {% else %}
                            <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"/login\">
                            Se connecter                                                
                            </a>
                        {% endif %}
                        <div class=\"header-right d-lg-none\">
                            <ul>
                                <li class=\"mobile-menu_wrap d-block d-lg-none\">
                                    <a href=\"#mobileMenu\" class=\"mobile-menu_btn toolbar-btn pl-0\">
                                        <i class=\"bi bi-list\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"mobile-menu_wrapper\" id=\"mobileMenu\">
        <div class=\"vp-offcanvas-body\">
            <div class=\"inner-body\">
                <div class=\"vp-offcanvas-top\">
                    <a href=\"#\" class=\"button-close\">
                        <i class=\"bi bi-x\"></i>
                    </a>
                </div>
                <div class=\"text-center\">
                    <div class=\"social-link justify-content-center pb-4\">
                        <ul>
                            <li><a href=\"#\" data-tippy=\"Twitter\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-twitter\"></i></a></li>
                            <li><a href=\"#\" data-tippy=\"Youtube\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-youtube\"></i></a></li>
                            <li><a href=\"#\" data-tippy=\"Facebook\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-facebook\"></i></a></li>
                            <li><a href=\"#\" data-tippy=\"Instagram\" data-tippy-inertia=\"true\" data-tippy-animation=\"shift-away\" data-tippy-delay=\"50\" data-tippy-arrow=\"true\" data-tippy-theme=\"sharpborder\"><i class=\"bi bi-instagram\"></i></a></li>
                        </ul>
                    </div>
                    <div class=\"mobile-logo justify-content-center pb-4\">
                        <a href=\"/\">
                            <img src=\"{{ asset('front-assets/images/logo/light.svg') }}\" width=\"140\" alt=\"Logo\" />
                        </a>
                    </div>
                </div>
                <div class=\"offcanvas-menu_area\">
                    <nav class=\"offcanvas-navigation\">
                        <ul class=\"mobile-menu\">
                            <li class=\"menu-item-has-children\">
                                <a href=\"/\">
                                    <span class=\"mm-text\">
                                        Accueil
                                                                                                                                
                                                                                    
                                    </span>
                                </a>

                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"mm-text\">
                                        Services                                        
                                    </span>
                                </a>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"/habitat\">
                                    <span class=\"mm-text\">
                                        Habitats                                          
                                    </span>
                                </a>

                            </li>
                            <li>
                                <a href=\"/contact\">
                                    <span class=\"mm-text\">
                                        Contact                                        
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- Main Header Area End -->
", "front/layouts/header.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/layouts/header.html.twig");
    }
}
