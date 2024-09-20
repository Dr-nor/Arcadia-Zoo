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
class __TwigTemplate_55dd00b652c18811d91e2f46919ed725 extends Template
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
        if ((($context["pages"] ?? null) > 1)) {
            // line 2
            yield "    <nav>
        <ul class=\"pagination\">
            ";
            // line 4
            if ((($context["currentPage"] ?? null) > 1)) {
                // line 5
                yield "                <li class=\"page-item\">
                    <a href=\"";
                // line 6
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["path"] ?? null), ["page" => (($context["currentPage"] ?? null) - 1)]), "html", null, true);
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
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, ($context["pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 14
                yield "                <li class=\"page-item ";
                yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                yield "\">
                    <a href=\"";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["path"] ?? null), ["page" => $context["page"]]), "html", null, true);
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
            if ((($context["currentPage"] ?? null) < ($context["pages"] ?? null))) {
                // line 19
                yield "                    <li class=\"page-item\">
                        <a href=\"";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["path"] ?? null), ["page" => (($context["currentPage"] ?? null) + 1)]), "html", null, true);
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
        return array (  104 => 27,  98 => 23,  92 => 20,  89 => 19,  86 => 18,  75 => 15,  70 => 14,  65 => 13,  59 => 9,  53 => 6,  50 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/layouts/pagination.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/layouts/pagination.html.twig");
    }
}
