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
class __TwigTemplate_7f433c3ea3d3e7a4f4488797fd426330 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("security/layouts/base.html.twig", "security/login.html.twig", 1);
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) {
            // line 20
            yield "                            <div class=\" mt-4 mb-3\">
                                Vous êtes bien connecté en tant :                               
                                ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "userIdentifier", [], "any", false, false, false, 22), "html", null, true);
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
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
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
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })())) {
                // line 55
                yield "                            <div class=\"alert alert-danger mt-4\">
                                ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 56, $this->source); })()), "messageKey", [], "any", false, false, false, 56), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 56, $this->source); })()), "messageData", [], "any", false, false, false, 56), "security"), "html", null, true);
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  161 => 61,  157 => 59,  151 => 56,  148 => 55,  146 => 54,  121 => 32,  116 => 30,  113 => 29,  105 => 24,  100 => 22,  96 => 20,  94 => 19,  77 => 5,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'security/layouts/base.html.twig' %}
{% block body %}
    <section class=\"hold-transition login-page\">
        <a href=\"/\" class=\"login-logo\">
            <img src=\"{{ asset('front-assets/images/logo/dark.svg') }}\" width=\"200\" alt=\"Logo\" />
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
                    {% if app.user %}
                            <div class=\" mt-4 mb-3\">
                                Vous êtes bien connecté en tant :                               
                                {{ app.user.userIdentifier }}
                                ,                                
                                <a href=\"{{ path('app_logout') }}\">
                                    Déconnexion                                     
                                </a>
                            </div>
                    {% else %}
                    <form method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />
                        <div class=\"input-group mb-3\">
                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" placeholder=\"Email*\" required autofocus />
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
                        {% if error %}
                            <div class=\"alert alert-danger mt-4\">
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </div>
                        {% endif %}
                    </form>
                    {% endif %}

                </div>
            </div>
        </div>

    </section>

{% endblock %}
", "security/login.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/security/login.html.twig");
    }
}
