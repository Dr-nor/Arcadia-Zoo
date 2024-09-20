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

/* bootstrap_5_horizontal_layout.html.twig */
class __TwigTemplate_290a4b8c7e4aae207e46a75f5f65d2ba extends Template
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
        $_trait_0 = $this->loadTemplate("bootstrap_5_layout.html.twig", "bootstrap_5_horizontal_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_5_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
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
                'button_row' => [$this, 'block_button_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
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
        // line 19
        yield "
";
        // line 20
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 23
        yield "
";
        // line 25
        yield "
";
        // line 26
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 72
        yield "
";
        // line 73
        yield from $this->unwrap()->yieldBlock('fieldset_form_row', $context, $blocks);
        // line 89
        yield "
";
        // line 90
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 98
        yield "
";
        // line 99
        yield from $this->unwrap()->yieldBlock('reset_row', $context, $blocks);
        // line 107
        yield "
";
        // line 108
        yield from $this->unwrap()->yieldBlock('button_row', $context, $blocks);
        // line 116
        yield "
";
        // line 117
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        // line 127
        yield "
";
        // line 128
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
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
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 9), "")) : (""))));
            // line 10
            if ((!CoreExtension::inFilter("form-floating", ($context["row_class"] ?? null)) && !CoreExtension::inFilter("input-group", ($context["row_class"] ?? null)))) {
                // line 11
                if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? null))) {
                    // line 12
                    $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 12)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 12), "")) : ("")) . " col-form-label"))]);
                }
                // line 14
                $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .                 $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
            }
            // line 16
            yield from $this->yieldParentBlock("form_label", $context, $blocks);
        }
        return; yield '';
    }

    // line 20
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        yield "col-sm-2";
        return; yield '';
    }

    // line 26
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? null))) {
            // line 28
            yield from             $this->unwrap()->yieldBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 30
            $context["widget_attr"] = [];
            // line 31
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
                // line 32
                $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
            }
            // line 34
            $context["row_class"] = ((array_key_exists("row_class", $context)) ? (Twig\Extension\CoreExtension::default(($context["row_class"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 34), "mb-3")) : ("mb-3")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 34), "mb-3")) : ("mb-3"))));
            // line 35
            $context["is_form_floating"] = ((array_key_exists("is_form_floating", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_form_floating"] ?? null), CoreExtension::inFilter("form-floating", ($context["row_class"] ?? null)))) : (CoreExtension::inFilter("form-floating", ($context["row_class"] ?? null))));
            // line 36
            $context["is_input_group"] = ((array_key_exists("is_input_group", $context)) ? (Twig\Extension\CoreExtension::default(($context["is_input_group"] ?? null), CoreExtension::inFilter("input-group", ($context["row_class"] ?? null)))) : (CoreExtension::inFilter("input-group", ($context["row_class"] ?? null))));
            // line 38
            $context["row_class"] = Twig\Extension\CoreExtension::replace(($context["row_class"] ?? null), ["form-floating" => "", "input-group" => ""]);
            // line 39
            yield "<div";
            $__internal_compile_0 = $context;
            $__internal_compile_1 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((($context["row_class"] ?? null) . " row") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" is-invalid") : (""))))])];
            if (!is_iterable($__internal_compile_1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 39, $this->getSourceContext());
            }
            $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $__internal_compile_0;
            yield ">";
            // line 40
            if ((($context["is_form_floating"] ?? null) || ($context["is_input_group"] ?? null))) {
                // line 41
                yield "<div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
                yield "\"></div>
                <div class=\"";
                // line 42
                yield from                 $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
                yield "\">";
                // line 43
                if (($context["is_form_floating"] ?? null)) {
                    // line 44
                    yield "<div class=\"form-floating\">";
                    // line 45
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                    // line 46
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    // line 47
                    yield "</div>";
                } elseif (                // line 48
($context["is_input_group"] ?? null)) {
                    // line 49
                    yield "<div class=\"input-group\">";
                    // line 50
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                    // line 51
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                    // line 53
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                    // line 54
                    yield "</div>";
                }
                // line 56
                if ( !($context["is_input_group"] ?? null)) {
                    // line 57
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                }
                // line 59
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 60
                yield "</div>";
            } else {
                // line 62
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
                // line 63
                yield "<div class=\"";
                yield from                 $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
                yield "\">";
                // line 64
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
                // line 65
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
                // line 66
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
                // line 67
                yield "</div>";
            }
            // line 69
            yield "</div>";
        }
        return; yield '';
    }

    // line 73
    public function block_fieldset_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        $context["widget_attr"] = [];
        // line 75
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 76
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 78
        yield "<fieldset";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 78)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 78), "mb-3")) : ("mb-3")))])];
        if (!is_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 78, $this->getSourceContext());
        }
        $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        yield ">
        <div class=\"row";
        // line 79
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            yield " is-invalid";
        }
        yield "\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 81
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 85
        yield "</div>
        </div>
    </fieldset>";
        return; yield '';
    }

    // line 90
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        yield "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 91), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 91, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">";
        // line 92
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 93
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 95
        yield "</div>";
        // line 96
        yield "</div>";
        return; yield '';
    }

    // line 99
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        yield "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 100), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 100, $this->getSourceContext());
        }
        $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        yield ">";
        // line 101
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 102
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 104
        yield "</div>";
        // line 105
        yield "</div>";
        return; yield '';
    }

    // line 108
    public function block_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        yield "<div";
        $__internal_compile_8 = $context;
        $__internal_compile_9 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 109)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 109), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_9)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 109, $this->getSourceContext());
        }
        $__internal_compile_9 = CoreExtension::toArray($__internal_compile_9);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_9));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_8;
        yield ">";
        // line 110
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 111
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 113
        yield "</div>";
        // line 114
        yield "</div>";
        return; yield '';
    }

    // line 117
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        yield "<div";
        $__internal_compile_10 = $context;
        $__internal_compile_11 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 118)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 118), "mb-3")) : ("mb-3")) . " row"))])];
        if (!is_iterable($__internal_compile_11)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 118, $this->getSourceContext());
        }
        $__internal_compile_11 = CoreExtension::toArray($__internal_compile_11);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_11));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_10;
        yield ">";
        // line 119
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 120
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 124
        yield "</div>";
        // line 125
        yield "</div>";
        return; yield '';
    }

    // line 128
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 129
        yield "col-sm-10";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_5_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  443 => 129,  439 => 128,  434 => 125,  432 => 124,  430 => 123,  428 => 122,  426 => 121,  422 => 120,  418 => 119,  406 => 118,  402 => 117,  397 => 114,  395 => 113,  393 => 112,  389 => 111,  385 => 110,  373 => 109,  369 => 108,  364 => 105,  362 => 104,  360 => 103,  356 => 102,  352 => 101,  340 => 100,  336 => 99,  331 => 96,  329 => 95,  327 => 94,  323 => 93,  319 => 92,  307 => 91,  303 => 90,  296 => 85,  294 => 84,  292 => 83,  290 => 82,  286 => 81,  284 => 80,  279 => 79,  266 => 78,  263 => 76,  261 => 75,  259 => 74,  255 => 73,  249 => 69,  246 => 67,  244 => 66,  242 => 65,  240 => 64,  236 => 63,  234 => 62,  231 => 60,  229 => 59,  226 => 57,  224 => 56,  221 => 54,  219 => 53,  217 => 51,  215 => 50,  213 => 49,  211 => 48,  209 => 47,  207 => 46,  205 => 45,  203 => 44,  201 => 43,  198 => 42,  193 => 41,  191 => 40,  179 => 39,  177 => 38,  175 => 36,  173 => 35,  171 => 34,  168 => 32,  166 => 31,  164 => 30,  161 => 28,  159 => 27,  155 => 26,  150 => 21,  146 => 20,  140 => 16,  137 => 14,  134 => 12,  132 => 11,  130 => 10,  128 => 9,  123 => 7,  121 => 6,  117 => 5,  112 => 128,  109 => 127,  107 => 117,  104 => 116,  102 => 108,  99 => 107,  97 => 99,  94 => 98,  92 => 90,  89 => 89,  87 => 73,  84 => 72,  82 => 26,  79 => 25,  76 => 23,  74 => 20,  71 => 19,  69 => 5,  66 => 4,  63 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_5_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_5_horizontal_layout.html.twig");
    }
}
