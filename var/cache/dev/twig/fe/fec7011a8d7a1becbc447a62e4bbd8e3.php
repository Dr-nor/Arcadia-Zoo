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

/* front/layouts/pagination.html.twig */
class __TwigTemplate_af0e9ea1fcd0dd063fb624c81ea0ca10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/layouts/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/layouts/pagination.html.twig"));

        // line 1
        if (((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            yield "    <nav>
        <ul class=\"pagination\">
            ";
            // line 4
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 4, $this->source); })()) > 1)) {
                // line 5
                yield "                <li class=\"page-item\">
                    <a href=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 6, $this->source); })()), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 6, $this->source); })()) - 1)]), "html", null, true);
                yield "\" class=\"page-link\">&lt;</a>
                </li>
            ";
            } else {
                // line 9
                yield "                <li class=\"page-item disabled\">
                    <a class=\"page-link\">&lt;</a>    
                </li>
            ";
            }
            // line 13
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 13, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 14
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 14, $this->source); })()))) ? ("active") : (""));
                yield "\">
                    <a href=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 15, $this->source); })()), ["page" => $context["page"]]), "html", null, true);
                yield "\" class=\"page-link\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                yield "</a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "                ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 18, $this->source); })()) < (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 18, $this->source); })()))) {
                // line 19
                yield "                    <li class=\"page-item\">
                        <a href=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 20, $this->source); })()), ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 20, $this->source); })()) + 1)]), "html", null, true);
                yield "\" class=\"page-link\">&gt;</a>
                    </li>
                ";
            } else {
                // line 23
                yield "                    <li class=\"page-item disabled\">
                        <a class=\"page-link\">&gt;</a>    
                    </li>
                ";
            }
            // line 27
            yield "            </li>
        </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/layouts/pagination.html.twig";
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
        return array (  110 => 27,  104 => 23,  98 => 20,  95 => 19,  92 => 18,  81 => 15,  76 => 14,  71 => 13,  65 => 9,  59 => 6,  56 => 5,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if pages > 1 %}
    <nav>
        <ul class=\"pagination\">
            {% if currentPage > 1 %}
                <li class=\"page-item\">
                    <a href=\"{{ path(path, {page: currentPage - 1}) }}\" class=\"page-link\">&lt;</a>
                </li>
            {% else %}
                <li class=\"page-item disabled\">
                    <a class=\"page-link\">&lt;</a>    
                </li>
            {% endif %}
            {% for page in 1..pages %}
                <li class=\"page-item {{ (page == currentPage) ? 'active' : '' }}\">
                    <a href=\"{{ path(path, {page: page}) }}\" class=\"page-link\">{{ page }}</a>
                </li>
            {% endfor %}
                {% if currentPage < pages %}
                    <li class=\"page-item\">
                        <a href=\"{{ path(path, {page: currentPage + 1}) }}\" class=\"page-link\">&gt;</a>
                    </li>
                {% else %}
                    <li class=\"page-item disabled\">
                        <a class=\"page-link\">&gt;</a>    
                    </li>
                {% endif %}
            </li>
        </ul>
    </nav>
{% endif %}
", "front/layouts/pagination.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/layouts/pagination.html.twig");
    }
}
