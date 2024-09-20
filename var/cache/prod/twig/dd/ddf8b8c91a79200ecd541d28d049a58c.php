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

/* admin/animal/edit.html.twig */
class __TwigTemplate_9a505d1d7925ad40f47639f8493b3313 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/animal/edit.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "id", [], "any", false, false, false, 16))), "html", null, true);
        yield "\" />
                            <button class=\"btn btn-secondary  ml-3\">
                                Delete
                            </button>
                        </form>
                        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_index");
        yield "\" class=\"btn btn-primary\">Retour</a>
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
                            <h5 class=\"mb-3\">
                                Informations                                
                            </h5>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"name\">Nom</label>
                                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 41
        yield "                                  
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"description\">
                                        Description                                                                    
                                    </label>
                                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 50
        yield "                                  
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"race_id\">
                                        Race                            
                                    </label>
                                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "race_id", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
        yield "                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"habitat_id\">
                                        Habitat                            
                                    </label>
                                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "habitat_id", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
        yield "                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"medianlife\">
                                        Espérance de vie médiane                           
                                    </label>
                                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "medianlife", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"size\">
                                        Taille                          
                                    </label>
                                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "size", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"weight\">
                                        Poids                          
                                    </label>
                                    ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "weight", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                            <div class=\"mb-3\">
                                <label for=\"diet\">
                                    Nourriture                          
                                </label>
                                ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "diet", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                         
                            </div>
                        </div>
                            
                              
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"status\">
                                        Statut                    
                                    </label>
                                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "status", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
        yield "                         
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <h5 class=\" mt-6 mb-3\">
                                Gallerie                     
                                                                                                
                                                            
                            </h5>
                            <div class=\"col-md-12\">
                                <div class=\"mt-3\">

                                    <ul class=\"image-list\">
                                        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["animal"] ?? null), "images", [], "any", false, false, false, 123));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 124
            yield "                                            <li>
                                                <img src=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/animals/mini/300x300-" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 125))), "html", null, true);
            yield "\" alt=\"Image\" width=\"150\" />
                                                <a class=\"delete-img\" href=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_delete_image", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 126)]), "html", null, true);
            yield "\" data-delete data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 126))), "html", null, true);
            yield "\">
                                                    <i class=\"nav-icon bi bi-trash-fill\"></i>
                                                </a>
                                            </li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "                                    </ul>
                                    ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, false, 132), 'widget');
        yield "

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "</button>
                </div>
                ";
        // line 144
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
            </div>
        </section>
    </div>
";
        return; yield '';
    }

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/js/images.js"), "html", null, true);
        yield "\" defer></script> <!-- defer:  charger aprés le contenu de la page -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/animal/edit.html.twig";
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
        return array (  281 => 152,  276 => 151,  272 => 150,  262 => 144,  257 => 142,  244 => 132,  241 => 131,  228 => 126,  224 => 125,  221 => 124,  217 => 123,  199 => 108,  186 => 98,  175 => 90,  164 => 82,  153 => 74,  142 => 66,  131 => 58,  121 => 50,  119 => 49,  109 => 41,  107 => 40,  93 => 29,  82 => 21,  74 => 16,  70 => 15,  56 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/animal/edit.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/animal/edit.html.twig");
    }
}
