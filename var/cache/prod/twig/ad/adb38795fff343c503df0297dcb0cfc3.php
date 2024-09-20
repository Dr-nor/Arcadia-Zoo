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

/* security/login.html.twig */
class __TwigTemplate_5567fb21215528f3dd063000529bf07e extends Template
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
        return "security/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("security/layouts/base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "    <section class=\"hold-transition login-page\">
        <a href=\"/\" class=\"login-logo\">
            <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/logo/dark.svg"), "html", null, true);
        yield "\" width=\"200\" alt=\"Logo\" />
        </a>
        <div class=\"login-box\">
            <div class=\"card card-outline card-primary\">
                <div class=\"card-header text-center\">
                    <h3>
                        Connexion
                    </h3>
                </div>
                <div class=\"card-body\">
                    <p class=\"login-box-msg\">
                        Heureux de vous revoir !                   
                                            
                    </p>
                    ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 19)) {
            // line 20
            yield "                            <div class=\" mt-4 mb-3\">
                                Vous êtes bien connecté en tant :                               
                                ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 22), "userIdentifier", [], "any", false, false, false, 22), "html", null, true);
            yield "
                                ,                                
                                <a href=\"";
            // line 24
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">
                                    Déconnexion                                     
                                </a>
                            </div>
                    ";
        } else {
            // line 29
            yield "                    <form method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            yield "\" />
                        <div class=\"input-group mb-3\">
                            <input type=\"email\" value=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_username"] ?? null), "html", null, true);
            yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" placeholder=\"Email*\" required autofocus />
                            <div class=\"input-group-append\">
                                <div class=\"input-group-text\">
                                    <span class=\"fa fa-envelope\"></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"input-group mb-3\">
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" placeholder=\"Mot de passe*\" required />
                            <div class=\"input-group-append\">
                                <div class=\"input-group-text\">
                                    <span class=\"fa fa-lock\"></span>
                                </div>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">
                                    Se connecter
                                </button>
                            </div>
                        </div>
                        ";
            // line 54
            if (($context["error"] ?? null)) {
                // line 55
                yield "                            <div class=\"alert alert-danger mt-4\">
                                ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 56), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 56), "security"), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 59
            yield "                    </form>
                    ";
        }
        // line 61
        yield "
                </div>
            </div>
        </div>

    </section>

";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  143 => 61,  139 => 59,  133 => 56,  130 => 55,  128 => 54,  103 => 32,  98 => 30,  95 => 29,  87 => 24,  82 => 22,  78 => 20,  76 => 19,  59 => 5,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/security/login.html.twig");
    }
}
