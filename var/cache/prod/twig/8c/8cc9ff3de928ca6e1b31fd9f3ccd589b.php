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

/* employe/testimonial/edit.html.twig */
class __TwigTemplate_799d6ed853619d63a3a8108194467026 extends Template
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
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "employe/testimonial/edit.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_testimonial_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["testimonial"] ?? null), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["testimonial"] ?? null), "id", [], "any", false, false, false, 16))), "html", null, true);
        yield "\">
                            <button class=\"btn btn-secondary  ml-3\">Delete</button>
                        </form>
                        <a href=\"";
        // line 19
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
        // line 29
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
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 40)), "html", null, true);
        yield "\" value=\"5\" />
                                <label class=\"star\" for=\"star1\" title=\"Awesome\" aria-hidden=\"true\"></label>
                                <input type=\"radio\" id=\"star2\" name=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 42)), "html", null, true);
        yield "\" value=\"4\" />
                                <label class=\"star\" for=\"star2\" title=\"Great\" aria-hidden=\"true\"></label>
                                <input type=\"radio\" id=\"star3\" name=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 44)), "html", null, true);
        yield "\" value=\"3\" />
                                <label class=\"star\" for=\"star3\" title=\"Very good\" aria-hidden=\"true\"></label>
                                <input type=\"radio\" id=\"star4\" name=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 46)), "html", null, true);
        yield "\" value=\"2\" />
                                <label class=\"star\" for=\"star4\" title=\"Good\" aria-hidden=\"true\"></label>
                                <input type=\"radio\" id=\"star5\" name=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 48)), "html", null, true);
        yield "\" value=\"1\" />
                                <label class=\"star\" for=\"star5\" title=\"Bad\" aria-hidden=\"true\"></label>
                                <input type=\"hidden\" name=\"notestored\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["testimonial"] ?? null), "note", [], "any", false, false, false, 50), "html", null, true);
        yield "\">
                            </div>
                         </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"mb-3 float-end\">
                            <label for=\"active\">
                            Active
                            </label>
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "active", [], "any", false, false, false, 59), 'widget');
        yield " 

                        </div>
                    </div>

                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <label for=\"pseudonym\">
                                Pseudonyme*
                            </label>
                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "pseudonym", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <label for=\"email\">
                                Email*
                            </label>
                             ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                         </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"mb-3\">
                            <label for=\"phone\">
                                Téléphone
                            </label>
                             ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                         </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"mb-3\">
                            <label for=\"comment\">Commentaire</label>
                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "               
                         </div>
                    </div>
                </div>
            </div>
        </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "</button>
                </div>
            ";
        // line 101
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
        return "employe/testimonial/edit.html.twig";
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
        return array (  203 => 101,  198 => 99,  187 => 91,  178 => 85,  167 => 77,  156 => 69,  143 => 59,  131 => 50,  126 => 48,  121 => 46,  116 => 44,  111 => 42,  106 => 40,  92 => 29,  79 => 19,  73 => 16,  69 => 15,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "employe/testimonial/edit.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/employe/testimonial/edit.html.twig");
    }
}
