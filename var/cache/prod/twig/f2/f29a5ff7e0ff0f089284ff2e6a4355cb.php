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

/* admin/animal/new.html.twig */
class __TwigTemplate_c8dc6eb646be39813695265f78ab94ee extends Template
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
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/animal/new.html.twig", 1);
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
                            Ajouter un animal                                           
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right\">
                        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_index");
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
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        yield "

                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <h5 class=\"mb-3\">Informations</h5>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"name\">
                                        Nom                     
                                    </label>
                                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 38
        yield "
                                                             
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"description\">
                                        Description                            
                                    </label>
                                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"race_id\">
                                        Race                            
                                    </label>
                                    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "race_id", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
        yield "                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"habitat_id\">
                                        Habitat                            
                                    </label>
                                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "habitat_id", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
        yield "                         
                                </div>
                            </div>

                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"medianlife\">
                                        Espérance de vie médiane                           
                                    </label>
                                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "medianlife", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"size\">
                                        Taille                          
                                    </label>
                                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "size", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"weight\">
                                        Poids                          
                                    </label>
                                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weight", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                            <div class=\"mb-3\">
                                <label for=\"diet\">
                                    Nourriture                          
                                </label>
                                ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "diet", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                         
                            </div>
                        </div>
                            
                            
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"status\">
                                        Statut                    
                                    </label>
                                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
        yield "                         
                                </div>
                            </div>
                            

                        </div>


                        <div class=\"row\">
                            <h5 class=\" mt-6 mb-3\">Gallerie</h5>
                            <div class=\"col-md-12\">
                                <div class=\"mt-3\">
                                    
                                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, false, 119), 'widget');
        yield "
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">

                    <button class=\"btn btn-primary\">
                        ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "
                    </button>

                    <a href=\"/admin/animal\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                                            
                    </a>
                </div>
                ";
        // line 137
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
        return "admin/animal/new.html.twig";
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
        return array (  230 => 137,  219 => 129,  206 => 119,  190 => 106,  177 => 96,  166 => 88,  155 => 80,  144 => 72,  132 => 63,  121 => 55,  110 => 47,  99 => 38,  97 => 37,  83 => 26,  69 => 15,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/animal/new.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/animal/new.html.twig");
    }
}
