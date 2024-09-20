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

/* admin/opening/new.html.twig */
class __TwigTemplate_23e7aec9923232e2e8fa782f94618ced extends Template
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
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/opening/new.html.twig", 1);
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
                            Ajouter un horaire d'ouverture                      
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right\">
                        <a href=\"";
        // line 15
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
        // line 25
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
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weekday", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                 </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"is_closed\">
                                    Fermé
                                    </label>
                                    ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "is_closed", [], "any", false, false, false, 43), 'widget');
        yield "
                                 </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"start_time\">
                                        Heure de début
                                    </label>
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "start_time", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                                </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"pause_start\">
                                    Début de pause
                                    </label>
                                     ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pause_start", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                                 </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"pause_end\">
                                    Fin de pause
                                    </label>
                                     ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pause_end", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                                 </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"end_time\">
                                    Heure de fin
                                    </label>
                                     ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "end_time", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                                 </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "</button>

                    <a href=\"/admin/opening\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                    </a>
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
        return "admin/opening/new.html.twig";
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
        return array (  171 => 90,  162 => 84,  150 => 75,  139 => 67,  128 => 59,  117 => 51,  106 => 43,  95 => 35,  82 => 25,  69 => 15,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/opening/new.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/opening/new.html.twig");
    }
}
