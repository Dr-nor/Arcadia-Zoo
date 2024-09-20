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

/* front/layouts/opening.html.twig */
class __TwigTemplate_631372baecf9b1bfc1065fa426f14ec2 extends Template
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
        yield "<div class=\"widget-item\">
    <h3 class=\"widget-title mb-5\">
        horaires d'ouverture 
            
    </h3>
    <div class=\"pb-2\">
        <ul>
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["openings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["opening"]) {
            // line 9
            yield "            <li class=\"d-flex justify-content-between\">
            <div>
                ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "weekday", [], "any", false, false, false, 11), "html", null, true);
            yield "         
            </div>
            <div>
                ";
            // line 14
            if (CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "is_closed", [], "any", false, false, false, 14)) {
                // line 15
                yield "                    Fermé
                ";
            } else {
                // line 17
                yield "                <span>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "StartTime", [], "any", false, false, false, 17), "H:i"), "html", null, true);
                yield "<span> <span>- ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["opening"], "EndTime", [], "any", false, false, false, 17), "H:i"), "html", null, true);
                yield "</span>
                ";
            }
            // line 19
            yield "            </div>
        </li>
                
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opening'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "           
           
        </ul>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/layouts/opening.html.twig";
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
        return array (  88 => 23,  79 => 19,  71 => 17,  67 => 15,  65 => 14,  59 => 11,  55 => 9,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/layouts/opening.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/layouts/opening.html.twig");
    }
}
