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

/* employe/testimonial/new.html.twig */
class __TwigTemplate_9ad9f1d8aefe444227e9f711ef558ccb extends Template
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
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "employe/testimonial/new.html.twig", 1);
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
                            Ajouter un témoignage                       
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right\">
                        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_testimonial_index");
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
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <div class=\"rating\">
                                        <span>
                                        Évaluation
                                        </span>
                                        <input type=\"radio\" id=\"star1\" name=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 36)), "html", null, true);
        yield "\" value=\"5\" />
                                        <label class=\"star\" for=\"star1\" title=\"Awesome\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star2\" name=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 38)), "html", null, true);
        yield "\" value=\"4\" />
                                        <label class=\"star\" for=\"star2\" title=\"Great\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star3\" name=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 40)), "html", null, true);
        yield "\" value=\"3\" />
                                        <label class=\"star\" for=\"star3\" title=\"Very good\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star4\" name=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 42)), "html", null, true);
        yield "\" value=\"2\" />
                                        <label class=\"star\" for=\"star4\" title=\"Good\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star5\" name=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 44)), "html", null, true);
        yield "\" value=\"1\" />
                                        <label class=\"star\" for=\"star5\" title=\"Bad\" aria-hidden=\"true\"></label>
                                    </div>
                                 </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"mb-3 float-end\">
                                    <label for=\"active\">
                                    Active
                                    </label>
                                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "active", [], "any", false, false, false, 54), 'widget');
        yield " 

                                </div>
                            </div>

                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"pseudonym\">
                                        Pseudonyme*
                                    </label>
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pseudonym", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"email\">
                                        Email*
                                    </label>
                                     ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                                 </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"phone\">
                                        Téléphone
                                    </label>
                                     ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                                 </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"mb-3\">
                                    <label for=\"comment\">Commentaire</label>
                                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "               
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "</button>

                    <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_testimonial_index");
        yield "\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                    </a>
                </div>
            ";
        // line 100
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
        return "employe/testimonial/new.html.twig";
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
        return array (  196 => 100,  189 => 96,  184 => 94,  173 => 86,  164 => 80,  153 => 72,  142 => 64,  129 => 54,  116 => 44,  111 => 42,  106 => 40,  101 => 38,  96 => 36,  82 => 25,  69 => 15,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe/testimonial/new.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/employe/testimonial/new.html.twig");
    }
}
