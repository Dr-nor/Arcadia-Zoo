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

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_1a4a9b4b9b2bcbc894ab77272d835995 extends Template
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
        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'fieldset_form_row' => [$this, 'block_fieldset_form_row'],
                'submit_row' => [$this, 'block_submit_row'],
                'reset_row' => [$this, 'block_reset_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        yield "
";
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 16
        yield "
";
        // line 17
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 20
        yield "
";
        // line 22
        yield "
";
        // line 23
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 40
        yield "
";
        // line 41
        yield from $this->unwrap()->yieldBlock('fieldset_form_row', $context, $blocks);
        // line 57
        yield "
";
        // line 58
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 66
        yield "
";
        // line 67
        yield from $this->unwrap()->yieldBlock('reset_row', $context, $blocks);
        // line 75
        yield "
";
        // line 76
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 79
        yield "
";
        // line 80
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        return; yield '';
    }

    // line 5
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? null))) {
                // line 10
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 10)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 10), "")) : ("")) . " col-form-label"))]);
            }
            // line 12
            $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 12), "")) : ("")) . " ") .             $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
            // line 13
            yield from $this->yieldParentBlock("form_label", $context, $blocks);
        }
        return; yield '';
    }

    // line 17
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        yield "col-sm-2";
        return; yield '';
    }

    // line 23
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? null))) {
            // line 25
            yield from             $this->unwrap()->yieldBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            $context["widget_attr"] = [];
            // line 28
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
                // line 29
                $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
            }
            // line 31
            yield "<div";
            $__internal_compile_0 = $context;
            $__internal_compile_1 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 31)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 31), "")) : ("")) . " form-group row") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" is-invalid") : (""))))])];
            if (!is_iterable($__internal_compile_1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 31, $this->getSourceContext());
            }
            $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_0;
            yield ">";
            // line 32
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 33
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
            yield "\">";
            // line 34
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
            // line 36
            yield "</div>
    ";
            // line 37
            yield "</div>";
        }
        return; yield '';
    }

    // line 41
    public function block_fieldset_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        $context["widget_attr"] = [];
        // line 43
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 44
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 46
        yield "<fieldset";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 46)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 46), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 46, $this->getSourceContext());
        }
        $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        yield ">
        <div class=\"row";
        // line 47
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " is-invalid";
        }
        yield "\">";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 49
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 53
        yield "</div>
        </div>
";
        // line 55
        yield "</fieldset>";
        return; yield '';
    }

    // line 58
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        yield "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 59), "")) : ("")) . " form-group row"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 59, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">";
        // line 60
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 61
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 63
        yield "</div>";
        // line 64
        yield "</div>";
        return; yield '';
    }

    // line 67
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        yield "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 68), "")) : ("")) . " form-group row"))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 68, $this->getSourceContext());
        }
        $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        yield ">";
        // line 69
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 70
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 72
        yield "</div>";
        // line 73
        yield "</div>";
        return; yield '';
    }

    // line 76
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        yield "col-sm-10";
        return; yield '';
    }

    // line 80
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 81
        yield "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 81), "")) : ("")) . " form-group row"))])];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 81, $this->getSourceContext());
        }
        $__internal_compile_9 = CoreExtension::toArray($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        yield ">";
        // line 82
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 83
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 86
        yield "</div>";
        // line 87
        yield "</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  346 => 87,  344 => 86,  342 => 85,  340 => 84,  336 => 83,  332 => 82,  320 => 81,  316 => 80,  311 => 77,  307 => 76,  302 => 73,  300 => 72,  298 => 71,  294 => 70,  290 => 69,  278 => 68,  274 => 67,  269 => 64,  267 => 63,  265 => 62,  261 => 61,  257 => 60,  245 => 59,  241 => 58,  236 => 55,  232 => 53,  230 => 52,  228 => 51,  226 => 50,  222 => 49,  220 => 48,  215 => 47,  202 => 46,  199 => 44,  197 => 43,  195 => 42,  191 => 41,  185 => 37,  182 => 36,  180 => 35,  178 => 34,  174 => 33,  172 => 32,  160 => 31,  157 => 29,  155 => 28,  153 => 27,  150 => 25,  148 => 24,  144 => 23,  139 => 18,  135 => 17,  129 => 13,  127 => 12,  124 => 10,  122 => 9,  117 => 7,  115 => 6,  111 => 5,  106 => 80,  103 => 79,  101 => 76,  98 => 75,  96 => 67,  93 => 66,  91 => 58,  88 => 57,  86 => 41,  83 => 40,  81 => 23,  78 => 22,  75 => 20,  73 => 17,  70 => 16,  68 => 5,  65 => 4,  62 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_4_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
