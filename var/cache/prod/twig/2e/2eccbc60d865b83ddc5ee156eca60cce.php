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
class __TwigTemplate_9b81baceb14993eee9337f5ef52e388b extends Template
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
                                        <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services_index");
        yield "\">
                                            Services
                                                                                        
                                        </a>
                                    </li>
                                    <li class=\"drop-holder\">
                                        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitats_index");
        yield "\">
                                            Habitats
                                                                                        
                                        </a>
                                    </li>
                                    <li class=\"menu-item-has-children\">
                                    <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_index");
        yield "\">
                                        <span class=\"mm-text\">
                                            Animaux                                          
                                        </span>
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
        // line 89
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 90
            yield "                            <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                Déconnecter                                                
                            </a>
                        ";
        } else {
            // line 94
            yield "                            <a class=\"btn btn-custom-size lg-size btn-primary\" href=\"/login\">
                            Se connecter                                                
                            </a>
                        ";
        }
        // line 98
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
        // line 132
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
                                <a href=\"";
        // line 150
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services_index");
        yield "\">
                                    <span class=\"mm-text\">
                                        Services                                        
                                    </span>
                                </a>
                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("habitats_index");
        yield "\">
                                    <span class=\"mm-text\">
                                        Habitats                                          
                                    </span>
                                </a>

                            </li>
                            <li class=\"menu-item-has-children\">
                                <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("animal_index");
        yield "\">
                                    <span class=\"mm-text\">
                                        Animaux                                          
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
        return array (  238 => 165,  227 => 157,  217 => 150,  196 => 132,  160 => 98,  154 => 94,  146 => 90,  144 => 89,  124 => 72,  115 => 66,  106 => 60,  90 => 47,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/layouts/header.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/layouts/header.html.twig");
    }
}
