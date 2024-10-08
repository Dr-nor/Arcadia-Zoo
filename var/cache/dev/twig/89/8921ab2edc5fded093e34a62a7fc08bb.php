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

/* employe/dailydiet/new.html.twig */
class __TwigTemplate_d7af7ca6f1b2cbf465e0cc99401b538b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/dailydiet/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/dailydiet/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "employe/dailydiet/new.html.twig", 1);
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
                            Ajouter                                        
                                                    
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right\">
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employe_dailydiet_index");
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
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        yield "

                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"animal_id\">
                                        Animal                            
                                                                    
                                    </label>
                                    ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "animal_id", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
        // line 39
        yield "                         
                                                            
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"mb-3\">
                                    <label for=\"diet\">
                                        Nourriture                     
                                                                            
                                    </label>
                                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "diet", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 50
        yield "                                                  
                                                                    
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"qty\">
                                        Quantité                            
                                                                            
                                    </label>
                                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "qty", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 61
        yield "                         
                                                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">

                    <button class=\"btn btn-primary\">
                        ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 72, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "
                    </button>

                    <a href=\"/employe/dailydiet\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                                                                    
                                            
                    </a>
                </div>
                ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
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
        return "employe/dailydiet/new.html.twig";
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
        return array (  171 => 81,  159 => 72,  146 => 61,  144 => 60,  132 => 50,  130 => 49,  118 => 39,  116 => 38,  102 => 27,  88 => 16,  73 => 3,  63 => 2,  40 => 1,);
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
                            Ajouter                                        
                                                    
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right\">
                        <a href=\"{{ path('employe_dailydiet_index') }}\" class=\"btn btn-primary\">
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
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"animal_id\">
                                        Animal                            
                                                                    
                                    </label>
                                    {{ form_widget(form.animal_id, {'attr': {'class': 'form-control nice-select' }}
                                    ) }}                         
                                                            
                                </div>
                            </div>
                            <div class=\"col-md-3\">
                                <div class=\"mb-3\">
                                    <label for=\"diet\">
                                        Nourriture                     
                                                                            
                                    </label>
                                    {{ form_widget(form.diet, {'attr': {'class': 'form-control' }}
                                    ) }}                                                  
                                                                    
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"qty\">
                                        Quantité                            
                                                                            
                                    </label>
                                    {{ form_widget(form.qty, {'attr': {'class': 'form-control' }}
                                    ) }}                         
                                                                    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">

                    <button class=\"btn btn-primary\">
                        {{ button_label|default('Sauvegarder') }}
                    </button>

                    <a href=\"/employe/dailydiet\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                                                                    
                                            
                    </a>
                </div>
                {{ form_end(form) }}

            </div>
        </section>
    </div>
{% endblock %}
", "employe/dailydiet/new.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/employe/dailydiet/new.html.twig");
    }
}
