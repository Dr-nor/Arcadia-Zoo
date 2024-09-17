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
class __TwigTemplate_772ac6f5afbe54c05d27522d2ed700aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/layouts/opening.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/layouts/opening.html.twig"));

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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["openings"]) || array_key_exists("openings", $context) ? $context["openings"] : (function () { throw new RuntimeError('Variable "openings" does not exist.', 8, $this->source); })()));
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
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  94 => 23,  85 => 19,  77 => 17,  73 => 15,  71 => 14,  65 => 11,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"widget-item\">
    <h3 class=\"widget-title mb-5\">
        horaires d'ouverture 
            
    </h3>
    <div class=\"pb-2\">
        <ul>
            {% for opening in openings %}
            <li class=\"d-flex justify-content-between\">
            <div>
                {{opening.weekday}}         
            </div>
            <div>
                {% if opening.is_closed %}
                    Fermé
                {% else %}
                <span>{{opening.StartTime|date('H:i')}}<span> <span>- {{opening.EndTime|date('H:i')}}</span>
                {% endif %}
            </div>
        </li>
                
            {% endfor %}
           
           
        </ul>
    </div>
</div>
", "front/layouts/opening.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/layouts/opening.html.twig");
    }
}
