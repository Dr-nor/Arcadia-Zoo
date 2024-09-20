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

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_4ac0eab276f3d2a81f9886c691b76efd extends Template
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
        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
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
        // line 3
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 7
        yield "
";
        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 18
        yield "
";
        // line 19
        yield from $this->unwrap()->yieldBlock('form_label_class', $context, $blocks);
        // line 22
        yield "
";
        // line 24
        yield "
";
        // line 25
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 39
        yield "
";
        // line 40
        yield from $this->unwrap()->yieldBlock('submit_row', $context, $blocks);
        // line 48
        yield "
";
        // line 49
        yield from $this->unwrap()->yieldBlock('reset_row', $context, $blocks);
        // line 57
        yield "
";
        // line 58
        yield from $this->unwrap()->yieldBlock('form_group_class', $context, $blocks);
        // line 61
        yield "
";
        // line 62
        yield from $this->unwrap()->yieldBlock('checkbox_row', $context, $blocks);
        return; yield '';
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        $context["attr"] = Twig\Extension\CoreExtension::merge(($context["attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 4)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 4), "")) : ("")) . " form-horizontal"))]);
        // line 5
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        return; yield '';
    }

    // line 10
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        if ((($context["label"] ?? null) === false)) {
            // line 12
            yield "<div class=\"";
            yield from             $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
            yield "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = Twig\Extension\CoreExtension::merge(($context["label_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 14)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 14), "")) : ("")) . " ") .             $this->unwrap()->renderBlock("form_label_class", $context, $blocks)))]);
            // line 15
            yield from $this->yieldParentBlock("form_label", $context, $blocks);
        }
        return; yield '';
    }

    // line 19
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        yield "col-sm-2";
        return; yield '';
    }

    // line 25
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        $context["widget_attr"] = [];
        // line 27
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["help"] ?? null))) {
            // line 28
            $context["widget_attr"] = ["attr" => ["aria-describedby" => (($context["id"] ?? null) . "_help")]];
        }
        // line 30
        yield "<div";
        $__internal_compile_0 = $context;
        $__internal_compile_1 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 30), "")) : ("")) . " form-group") . (((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 30, $this->getSourceContext());
        }
        $__internal_compile_1 = CoreExtension::toArray($__internal_compile_1);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_0;
        yield ">";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 32
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget', ($context["widget_attr"] ?? null));
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 36
        yield "</div>
";
        // line 37
        yield "</div>";
        return; yield '';
    }

    // line 40
    public function block_submit_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "<div";
        $__internal_compile_2 = $context;
        $__internal_compile_3 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 41), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_3)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 41, $this->getSourceContext());
        }
        $__internal_compile_3 = CoreExtension::toArray($__internal_compile_3);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_3));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_2;
        yield ">";
        // line 42
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 43
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 45
        yield "</div>";
        // line 46
        yield "</div>";
        return; yield '';
    }

    // line 49
    public function block_reset_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        yield "<div";
        $__internal_compile_4 = $context;
        $__internal_compile_5 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 50), "")) : ("")) . " form-group"))])];
        if (!is_iterable($__internal_compile_5)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 50, $this->getSourceContext());
        }
        $__internal_compile_5 = CoreExtension::toArray($__internal_compile_5);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_5));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_4;
        yield ">";
        // line 51
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 52
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 54
        yield "</div>";
        // line 55
        yield "</div>";
        return; yield '';
    }

    // line 58
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        yield "col-sm-10";
        return; yield '';
    }

    // line 62
    public function block_checkbox_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        yield "<div";
        $__internal_compile_6 = $context;
        $__internal_compile_7 = ["attr" => Twig\Extension\CoreExtension::merge(($context["row_attr"] ?? null), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", false, false, false, 63), "")) : ("")) . " form-group") . (( !($context["valid"] ?? null)) ? (" has-error") : (""))))])];
        if (!is_iterable($__internal_compile_7)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 63, $this->getSourceContext());
        }
        $__internal_compile_7 = CoreExtension::toArray($__internal_compile_7);
        $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_7));
        yield from         $this->unwrap()->yieldBlock("attributes", $context, $blocks);
        $context = $__internal_compile_6;
        yield ">";
        // line 64
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_label_class", $context, $blocks);
        yield "\"></div>";
        // line 65
        yield "<div class=\"";
        yield from         $this->unwrap()->yieldBlock("form_group_class", $context, $blocks);
        yield "\">";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'help');
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 69
        yield "</div>";
        // line 70
        yield "</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  300 => 70,  298 => 69,  296 => 68,  294 => 67,  292 => 66,  288 => 65,  284 => 64,  272 => 63,  268 => 62,  263 => 59,  259 => 58,  254 => 55,  252 => 54,  250 => 53,  246 => 52,  242 => 51,  230 => 50,  226 => 49,  221 => 46,  219 => 45,  217 => 44,  213 => 43,  209 => 42,  197 => 41,  193 => 40,  188 => 37,  185 => 36,  183 => 35,  181 => 34,  179 => 33,  175 => 32,  173 => 31,  161 => 30,  158 => 28,  156 => 27,  154 => 26,  150 => 25,  145 => 20,  141 => 19,  135 => 15,  133 => 14,  128 => 12,  126 => 11,  122 => 10,  117 => 5,  115 => 4,  111 => 3,  106 => 62,  103 => 61,  101 => 58,  98 => 57,  96 => 49,  93 => 48,  91 => 40,  88 => 39,  86 => 25,  83 => 24,  80 => 22,  78 => 19,  75 => 18,  73 => 10,  70 => 9,  67 => 7,  65 => 3,  62 => 2,  35 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "bootstrap_3_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/vendor/symfony/twig-bridge/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
