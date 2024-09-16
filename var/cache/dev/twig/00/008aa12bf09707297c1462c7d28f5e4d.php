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

/* front/animals/index.html.twig */
class __TwigTemplate_788c38ac9ed8353aceb75b219d8814fa extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/animals/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/animals/index.html.twig"));

        // line 3
        $context["queryParams"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "query", [], "any", false, false, false, 3), "all", [], "any", false, false, false, 3);
        // line 1
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/animals/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <section class=\"occasions-page\">
        <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/breadcrumb/bg/1.jpg"), "html", null, true);
        yield "\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                                Nos Animaux                  
                                                            
                            </h2>
                            <ul>
                                <li>
                                    <a class=\"text-primary\" href=\"/\">
                                        Accueil 
                                                                                                                        
                                                                                
                                        <i class=\"bi bi-chevron-double-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    Rencontrez les animaux qui habitent le zoo                               
                                                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"occasions-area section-space-y-axis-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0\">
                        <div class=\"sidebar-area style-2\">
                            <div  class=\"widgets-searchbox filters mb-3\">
                                <form id=\"widgets-searchbox\" action=\"#\">
                                    <input class=\"input-field\" name=\"find\" type=\"text\" placeholder=\"Recherchez...\" />
                                    ";
        // line 47
        yield "                                </form>
                            </div>
                                
                                <form id=\"filters\" class=\"filters\">
                                    <div class=\"widgets-area mb-9\">
                                        <h2 class=\"widgets-title mb-5\">
                                            Race                                  
                                        </h2>
                                        <div class=\"widgets-item\">
                                            <ul class=\"widgets-checkbox\">
                                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["races"]) || array_key_exists("races", $context) ? $context["races"] : (function () { throw new RuntimeError('Variable "races" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["race"]) {
            // line 58
            yield "                                                ";
            // line 59
            yield "                                                ";
            if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 59, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, ($context["queryParams"] ?? null), "races", [], "any", true, true, false, 59))) {
                // line 60
                yield "                                                    ";
                $context["checked"] = ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 60), CoreExtension::getAttribute($this->env, $this->source, (isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 60, $this->source); })()), "races", [], "any", false, false, false, 60))) ? ("checked") : (""));
                // line 61
                yield "                                                ";
            } else {
                // line 62
                yield "                                                    ";
                $context["checked"] = "";
                // line 63
                yield "                                                ";
            }
            // line 64
            yield "                                                <li>
                                                    <input class=\"input-checkbox\" type=\"checkbox\"  name=\"races[]\" id=\"race";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 65), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 65), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 65, $this->source); })()), "html", null, true);
            yield " />
                                                    <label class=\"label-checkbox mb-0\" for=\"race";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "id", [], "any", false, false, false, 66), "html", null, true);
            yield "\">
                                                        ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["race"], "name", [], "any", false, false, false, 67), "html", null, true);
            yield "                                          
                                                    </label>
                                                </li>
                                                    
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['race'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"widgets-area mb-9\">
                                        <h2 class=\"widgets-title mb-5\">
                                            Habitat                                
                                        </h2>
                                        <div class=\"widgets-item\">
                                            <ul class=\"widgets-checkbox\">
                                                ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["habitats"]) || array_key_exists("habitats", $context) ? $context["habitats"] : (function () { throw new RuntimeError('Variable "habitats" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["habitat"]) {
            // line 83
            yield "                                                ";
            // line 84
            yield "                                                ";
            if (( !Twig\Extension\CoreExtension::testEmpty((isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 84, $this->source); })())) && CoreExtension::getAttribute($this->env, $this->source, ($context["queryParams"] ?? null), "habitats", [], "any", true, true, false, 84))) {
                // line 85
                yield "                                                    ";
                $context["checked"] = ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 85), CoreExtension::getAttribute($this->env, $this->source, (isset($context["queryParams"]) || array_key_exists("queryParams", $context) ? $context["queryParams"] : (function () { throw new RuntimeError('Variable "queryParams" does not exist.', 85, $this->source); })()), "habitats", [], "any", false, false, false, 85))) ? ("checked") : (""));
                // line 86
                yield "                                                ";
            } else {
                // line 87
                yield "                                                    ";
                $context["checked"] = "";
                // line 88
                yield "                                                ";
            }
            // line 89
            yield "                                                <li>
                                                    <input class=\"input-checkbox\" type=\"checkbox\"  name=\"habitats[]\" id=\"habitat";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 90), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 90), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 90, $this->source); })()), "html", null, true);
            yield " />
                                                    <label class=\"label-checkbox mb-0\" for=\"habitat";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "id", [], "any", false, false, false, 91), "html", null, true);
            yield "\">
                                                        ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["habitat"], "title", [], "any", false, false, false, 92), "html", null, true);
            yield "                                          
                                                    </label>
                                                </li>
                                                    
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['habitat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                                            </ul>
                                        </div>
                                    </div>

                                 
                                    <input type=\"hidden\" name=\"page\" value=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 102, $this->source); })()), "html", null, true);
        yield "\" />

                                </form>
                        
                            
                        </div>
                    </div>
                    <div class=\"col-xl-9 col-lg-8 order-lg-2 order-1\">
                        <div id=\"content\">
                        ";
        // line 111
        yield from         $this->loadTemplate("front/animals/_content.html.twig", "front/animals/index.html.twig", 111)->unwrap()->yield($context);
        // line 112
        yield "                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 123
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/js/filters.js"), "html", null, true);
        yield "\"></script> 
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
        return "front/animals/index.html.twig";
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
        return array (  294 => 125,  289 => 124,  279 => 123,  259 => 112,  257 => 111,  245 => 102,  238 => 97,  227 => 92,  223 => 91,  215 => 90,  212 => 89,  209 => 88,  206 => 87,  203 => 86,  200 => 85,  197 => 84,  195 => 83,  191 => 82,  179 => 72,  168 => 67,  164 => 66,  156 => 65,  153 => 64,  150 => 63,  147 => 62,  144 => 61,  141 => 60,  138 => 59,  136 => 58,  132 => 57,  120 => 47,  80 => 7,  77 => 6,  67 => 5,  56 => 1,  54 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/layouts/base.html.twig' %}
{# On crée des variables personnalisées #}
{% set queryParams = app.request.query.all %}

{% block body %}
    <section class=\"occasions-page\">
        <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"{{ asset('front-assets/images/breadcrumb/bg/1.jpg') }}\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                                Nos Animaux                  
                                                            
                            </h2>
                            <ul>
                                <li>
                                    <a class=\"text-primary\" href=\"/\">
                                        Accueil 
                                                                                                                        
                                                                                
                                        <i class=\"bi bi-chevron-double-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    Rencontrez les animaux qui habitent le zoo                               
                                                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"occasions-area section-space-y-axis-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-lg-4 order-lg-1 order-2 pt-10 pt-lg-0\">
                        <div class=\"sidebar-area style-2\">
                            <div  class=\"widgets-searchbox filters mb-3\">
                                <form id=\"widgets-searchbox\" action=\"#\">
                                    <input class=\"input-field\" name=\"find\" type=\"text\" placeholder=\"Recherchez...\" />
                                    {# <button class=\"widgets-searchbox-btn\" type=\"submit\">
                                        <i class=\"bi bi-search\"></i>
                                    </button> #}
                                </form>
                            </div>
                                
                                <form id=\"filters\" class=\"filters\">
                                    <div class=\"widgets-area mb-9\">
                                        <h2 class=\"widgets-title mb-5\">
                                            Race                                  
                                        </h2>
                                        <div class=\"widgets-item\">
                                            <ul class=\"widgets-checkbox\">
                                                {% for race in races %}
                                                {# On vérifie si la race est dans les paramètres #}
                                                {% if queryParams is not empty and queryParams.races is defined %}
                                                    {% set checked = (race.id in queryParams.races) ? \"checked\" : \"\" %}
                                                {% else %}
                                                    {% set checked = \"\" %}
                                                {% endif %}
                                                <li>
                                                    <input class=\"input-checkbox\" type=\"checkbox\"  name=\"races[]\" id=\"race{{race.id}}\" value=\"{{race.id}}\" {{checked}} />
                                                    <label class=\"label-checkbox mb-0\" for=\"race{{race.id}}\">
                                                        {{race.name}}                                          
                                                    </label>
                                                </li>
                                                    
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>

                                    <div class=\"widgets-area mb-9\">
                                        <h2 class=\"widgets-title mb-5\">
                                            Habitat                                
                                        </h2>
                                        <div class=\"widgets-item\">
                                            <ul class=\"widgets-checkbox\">
                                                {% for habitat in habitats %}
                                                {# On vérifie si l'habitat est dans les paramètres #}
                                                {% if queryParams is not empty and queryParams.habitats is defined %}
                                                    {% set checked = (habitat.id in queryParams.habitats) ? \"checked\" : \"\" %}
                                                {% else %}
                                                    {% set checked = \"\" %}
                                                {% endif %}
                                                <li>
                                                    <input class=\"input-checkbox\" type=\"checkbox\"  name=\"habitats[]\" id=\"habitat{{habitat.id}}\" value=\"{{habitat.id}}\" {{checked}} />
                                                    <label class=\"label-checkbox mb-0\" for=\"habitat{{habitat.id}}\">
                                                        {{habitat.title}}                                          
                                                    </label>
                                                </li>
                                                    
                                                {% endfor %}
                                            </ul>
                                        </div>
                                    </div>

                                 
                                    <input type=\"hidden\" name=\"page\" value=\"{{page}}\" />

                                </form>
                        
                            
                        </div>
                    </div>
                    <div class=\"col-xl-9 col-lg-8 order-lg-2 order-1\">
                        <div id=\"content\">
                        {% include \"front/animals/_content.html.twig\" %}
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('front-assets/js/filters.js') }}\"></script> 
{% endblock %}
", "front/animals/index.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/animals/index.html.twig");
    }
}
