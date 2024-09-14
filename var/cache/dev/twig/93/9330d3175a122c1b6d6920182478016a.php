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
class __TwigTemplate_d7a01b01afd776e58b0e071e9260bbec extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/animal/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/animal/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/animal/new.html.twig", 1);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "race_id", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "habitat_id", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "medianlife", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "size", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "weight", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "diet", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "status", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "images", [], "any", false, false, false, 119), 'widget');
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 129, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "
                    </button>

                    <a href=\"/admin/animal\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                                            
                    </a>
                </div>
                ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'form_end');
        yield "

            </div>
        </section>
    </div>
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
        return array (  248 => 137,  237 => 129,  224 => 119,  208 => 106,  195 => 96,  184 => 88,  173 => 80,  162 => 72,  150 => 63,  139 => 55,  128 => 47,  117 => 38,  115 => 37,  101 => 26,  87 => 15,  73 => 3,  63 => 2,  40 => 1,);
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
                            Ajouter un animal                                           
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right\">
                        <a href=\"{{ path('app_animal_index') }}\" class=\"btn btn-primary\">
                            Retour                                         
                                                    
                        </a>
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
                            <h5 class=\"mb-3\">Informations</h5>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"name\">
                                        Nom                     
                                    </label>
                                    {{ form_widget(form.name, {'attr': {'class': 'form-control' }}
                                    ) }}
                                                             
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"description\">
                                        Description                            
                                    </label>
                                    {{ form_widget(form.description, {'attr': {'class': 'form-control' }}) }}                         
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
                            <h5 class=\" mt-6 mb-3\">Gallerie</h5>
                            <div class=\"col-md-12\">
                                <div class=\"mt-3\">
                                    
                                    {{ form_widget(form.images) }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">

                    <button class=\"btn btn-primary\">
                        {{ button_label|default('Sauvegarder') }}
                    </button>

                    <a href=\"/admin/animal\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                                            
                    </a>
                </div>
                {{ form_end(form) }}

            </div>
        </section>
    </div>
{% endblock %}
", "admin/animal/new.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/animal/new.html.twig");
    }
}
