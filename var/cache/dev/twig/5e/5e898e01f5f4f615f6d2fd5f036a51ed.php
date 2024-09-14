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
class __TwigTemplate_26d4d17960eb6e55660182834c153d58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/animal/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/animal/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/animal/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_animal_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16))), "html", null, true);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "race_id", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "habitat_id", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "medianlife", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "size", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "weight", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "diet", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "status", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["animal"]) || array_key_exists("animal", $context) ? $context["animal"] : (function () { throw new RuntimeError('Variable "animal" does not exist.', 123, $this->source); })()), "images", [], "any", false, false, false, 123));
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "images", [], "any", false, false, false, 132), 'widget');
        yield "

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 142, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "</button>
                </div>
                ";
        // line 144
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), 'form_end');
        yield "
            </div>
        </section>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 151
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin-assets/js/images.js"), "html", null, true);
        yield "\" defer></script> <!-- defer:  charger aprés le contenu de la page -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  311 => 152,  306 => 151,  296 => 150,  280 => 144,  275 => 142,  262 => 132,  259 => 131,  246 => 126,  242 => 125,  239 => 124,  235 => 123,  217 => 108,  204 => 98,  193 => 90,  182 => 82,  171 => 74,  160 => 66,  149 => 58,  139 => 50,  137 => 49,  127 => 41,  125 => 40,  111 => 29,  100 => 21,  92 => 16,  88 => 15,  74 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layouts/base.html.twig' %}
{% block content %}

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
                        <form class=\"mr-4\" method=\"post\" action=\"{{ path('app_animal_delete', {'id': animal.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ animal.id) }}\" />
                            <button class=\"btn btn-secondary  ml-3\">
                                Delete
                            </button>
                        </form>
                        <a href=\"{{ path('app_animal_index') }}\" class=\"btn btn-primary\">Retour</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                {{ form_start(form) }}

                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <h5 class=\"mb-3\">
                                Informations                                
                            </h5>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"name\">Nom</label>
                                    {{ form_widget(form.name, {'attr': {'class': 'form-control' }}
                                    ) }}                                  
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"description\">
                                        Description                                                                    
                                    </label>
                                    {{ form_widget(form.description, {'attr': {'class': 'form-control' }}
                                    ) }}                                  
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"race_id\">
                                        Race                            
                                    </label>
                                    {{ form_widget(form.race_id, {'attr': {'class': 'form-control nice-select' }}) }}                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"habitat_id\">
                                        Habitat                            
                                    </label>
                                    {{ form_widget(form.habitat_id, {'attr': {'class': 'form-control nice-select' }}) }}                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"medianlife\">
                                        Espérance de vie médiane                           
                                    </label>
                                    {{ form_widget(form.medianlife, {'attr': {'class': 'form-control' }}) }}                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"size\">
                                        Taille                          
                                    </label>
                                    {{ form_widget(form.size, {'attr': {'class': 'form-control' }}) }}                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"weight\">
                                        Poids                          
                                    </label>
                                    {{ form_widget(form.weight, {'attr': {'class': 'form-control' }}) }}                         
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                            <div class=\"mb-3\">
                                <label for=\"diet\">
                                    Nourriture                          
                                </label>
                                {{ form_widget(form.diet, {'attr': {'class': 'form-control' }}) }}                         
                            </div>
                        </div>
                            
                              
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"status\">
                                        Statut                    
                                    </label>
                                    {{ form_widget(form.status, {'attr': {'class': 'form-control nice-select' }}) }}                         
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
                                        {% for image in animal.images %}
                                            <li>
                                                <img src=\"{{ asset('uploads/animals/mini/300x300-' ~ image.name ) }}\" alt=\"Image\" width=\"150\" />
                                                <a class=\"delete-img\" href=\"{{ path('app_animal_delete_image', {id: image.id}) }}\" data-delete data-token=\"{{ csrf_token('delete' ~ image.id) }}\">
                                                    <i class=\"nav-icon bi bi-trash-fill\"></i>
                                                </a>
                                            </li>
                                        {% endfor %}
                                    </ul>
                                    {{ form_widget(form.images) }}

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">{{ button_label|default('Sauvegarder') }}</button>
                </div>
                {{ form_end(form) }}
            </div>
        </section>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('admin-assets/js/images.js') }}\" defer></script> <!-- defer:  charger aprés le contenu de la page -->
{% endblock %}
", "admin/animal/edit.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/animal/edit.html.twig");
    }
}
