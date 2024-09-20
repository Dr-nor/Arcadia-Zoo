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

/* tailwind_2_layout.html.twig */
class __TwigTemplate_9b12c864e53023df72f3f0182d5cdcdc extends Template
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

        // line 1
        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "tailwind_2_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_row' => [$this, 'block_form_row'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'form_label' => [$this, 'block_form_label'],
                'form_help' => [$this, 'block_form_help'],
                'form_errors' => [$this, 'block_form_errors'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 8
        yield from $this->unwrap()->yieldBlock('widget_attributes', $context, $blocks);
        // line 13
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 18
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 23
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 33
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 45
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 61
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 66
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        return; yield '';
    }

    // line 3
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 4), ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "mb-6")) : ("mb-6"))))]);
        // line 5
        yield from $this->yieldParentBlock("form_row", $context, $blocks);
        return; yield '';
    }

    // line 8
    public function block_widget_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => ((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 9), ((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "mt-1 w-full")) : ("mt-1 w-full")))) : (((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "mt-1 w-full")) : ("mt-1 w-full")))) . ((($context["disabled"] ?? null)) ? ((" " . ((array_key_exists("widget_disabled_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_disabled_class"] ?? null), "border-gray-300 text-gray-500")) : ("border-gray-300 text-gray-500")))) : (""))) . ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null))) ? ((" " . ((array_key_exists("widget_errors_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_errors_class"] ?? null), "border-red-700")) : ("border-red-700")))) : ("")))]);
        // line 10
        yield from $this->yieldParentBlock("widget_attributes", $context, $blocks);
        return; yield '';
    }

    // line 13
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), ((array_key_exists("label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_class"] ?? null), "block text-gray-800")) : ("block text-gray-800")))) : (((array_key_exists("label_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["label_class"] ?? null), "block text-gray-800")) : ("block text-gray-800"))))]);
        // line 15
        yield from $this->yieldParentBlock("form_label", $context, $blocks);
        return; yield '';
    }

    // line 18
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        $context["help_attr"] = Twig\Extension\CoreExtension::merge(($context["help_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 19)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", false, false, false, 19), ((array_key_exists("help_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["help_class"] ?? null), "mt-1 text-gray-600")) : ("mt-1 text-gray-600")))) : (((array_key_exists("help_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["help_class"] ?? null), "mt-1 text-gray-600")) : ("mt-1 text-gray-600"))))]);
        // line 20
        yield from $this->yieldParentBlock("form_help", $context, $blocks);
        return; yield '';
    }

    // line 23
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["errors"] ?? null)) > 0)) {
            // line 25
            yield "<ul>";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 27
                yield "<li class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("error_item_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["error_item_class"] ?? null), "text-red-700")) : ("text-red-700")), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 27), "html", null, true);
                yield "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            yield "</ul>";
        }
        return; yield '';
    }

    // line 33
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 34), "mt-2")) : ("mt-2"))]);
        // line 35
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 37
            yield "            <div class=\"flex items-center\">";
            // line 38
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 39
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["translation_domain" => ($context["choice_translation_domain"] ?? null)]);
            // line 40
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "</div>";
        return; yield '';
    }

    // line 45
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        $context["row_attr"] = Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 46), ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "mb-6")) : ("mb-6")))) : (((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), "mb-6")) : ("mb-6"))))]);
        // line 47
        $context["widget_attr"] = [];
        // line 48
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 49
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 51
        yield "<div";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => ($context["row_attr"] ?? null)];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 51, $this->getSourceContext());
        }
        $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        yield ">";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 53
        yield "<div class=\"inline-flex items-center\">";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 56
        yield "</div>";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 58
        yield "</div>";
        return; yield '';
    }

    // line 61
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "mr-2")) : ("mr-2"));
        // line 63
        yield from $this->yieldParentBlock("checkbox_widget", $context, $blocks);
        return; yield '';
    }

    // line 66
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        $context["widget_class"] = ((array_key_exists("widget_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["widget_class"] ?? null), "mr-2")) : ("mr-2"));
        // line 68
        yield from $this->yieldParentBlock("radio_widget", $context, $blocks);
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tailwind_2_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  247 => 68,  245 => 67,  241 => 66,  236 => 63,  234 => 62,  230 => 61,  225 => 58,  223 => 57,  221 => 56,  219 => 55,  217 => 54,  215 => 53,  213 => 52,  201 => 51,  198 => 49,  196 => 48,  194 => 47,  192 => 46,  188 => 45,  183 => 42,  176 => 40,  174 => 39,  172 => 38,  170 => 37,  166 => 36,  162 => 35,  160 => 34,  156 => 33,  150 => 29,  140 => 27,  136 => 26,  134 => 25,  132 => 24,  128 => 23,  123 => 20,  121 => 19,  117 => 18,  112 => 15,  110 => 14,  106 => 13,  101 => 10,  99 => 9,  95 => 8,  90 => 5,  88 => 4,  84 => 3,  79 => 66,  77 => 61,  75 => 45,  73 => 33,  71 => 23,  69 => 18,  67 => 13,  65 => 8,  63 => 3,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tailwind_2_layout.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/vendor/symfony/twig-bridge/Resources/views/Form/tailwind_2_layout.html.twig");
    }
}
