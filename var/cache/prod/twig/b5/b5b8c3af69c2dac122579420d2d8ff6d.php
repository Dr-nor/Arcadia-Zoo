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

/* admin/opening/edit.html.twig */
class __TwigTemplate_bae90c43516f4c2e0c9698a0efd7f09e extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/opening/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "
    <div class=\"content-wrapper\">
        <!-- Page header -->
        <section class=\"content-header\">
            <div class=\"container-fluid my-2\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>
                            Modifier
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right d-flex flex-end\">
                        <form class=\"mr-4\" method=\"post\" action=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opening_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["opening"] ?? null), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["opening"] ?? null), "id", [], "any", false, false, false, 16))), "html", null, true);
        yield "\">
                            <button class=\"btn btn-secondary  ml-3\">Delete</button>
                        </form>
                        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opening_index");
        yield "\" class=\"btn btn-primary\">
                            Retour                                            
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
            ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "

                <div class=\"card\">
                    <div class=\"card-body\">
                    <div class=\"row\">
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"weekday\">
                            Jour
                            </label>
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weekday", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                         </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"is_closed\">
                            Fermé
                            </label>
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_closed", [], "any", false, false, false, 47), 'widget');
        yield "
                         </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"start_time\">
                                Heure de début
                            </label>
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "start_time", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"pause_start\">
                            Début de pause
                            </label>
                             ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pause_start", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                         </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"pause_end\">
                            Fin de pause
                            </label>
                             ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pause_end", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                         </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"end_time\">
                            Heure de fin
                            </label>
                             ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "end_time", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                         </div>
                    </div>
                    
                </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "</button>
                </div>
            ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "

            </div>
        </section>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/opening/edit.html.twig";
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
        return array (  177 => 90,  172 => 88,  160 => 79,  149 => 71,  138 => 63,  127 => 55,  116 => 47,  105 => 39,  92 => 29,  79 => 19,  73 => 16,  69 => 15,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/opening/edit.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/opening/edit.html.twig");
    }
}
