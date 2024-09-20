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

/* veterinary/vetreport/new.html.twig */
class __TwigTemplate_b9e8df700e3dfdccb0d15f6e893067ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary/vetreport/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary/vetreport/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "veterinary/vetreport/new.html.twig", 1);
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
                            Ajouter un rapport                                        
                                                    
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right\">
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_vetreport_index");
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
                            
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"diet\">
                                        Nourriture                     
                                                                            
                                    </label>
                                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "diet", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 51
        yield "                                                  
                                                                    
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"grammage\">
                                        Grammage                            
                                                                            
                                    </label>
                                    ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "grammage", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 62
        yield "                         
                                                                    
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"state\">
                                        Etat                     
                                                                            
                                    </label>
                                    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "state", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 73
        yield "                                                  
                                                                    
                                </div>
                            </div>
                            <div class=\"col-md-8\">
                                <div class=\"mb-3\">
                                    <label for=\"detail\">
                                    Détail de l’état de l’animal                      
                                                                            
                                    </label>
                                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "detail", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 84
        yield "                                                  
                                                                    
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">

                    <button class=\"btn btn-primary\">
                        ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 96, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "
                    </button>

                    <a href=\"/veterinary/vetreport\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                                                                    
                                            
                    </a>
                </div>
                ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
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
        return "veterinary/vetreport/new.html.twig";
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
        return array (  201 => 105,  189 => 96,  175 => 84,  173 => 83,  161 => 73,  159 => 72,  147 => 62,  145 => 61,  133 => 51,  131 => 50,  118 => 39,  116 => 38,  102 => 27,  88 => 16,  73 => 3,  63 => 2,  40 => 1,);
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
                            Ajouter un rapport                                        
                                                    
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right\">
                        <a href=\"{{ path('vet_vetreport_index') }}\" class=\"btn btn-primary\">
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
                            
                            <div class=\"col-md-4\">
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
                                    <label for=\"grammage\">
                                        Grammage                            
                                                                            
                                    </label>
                                    {{ form_widget(form.grammage, {'attr': {'class': 'form-control' }}
                                    ) }}                         
                                                                    
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"state\">
                                        Etat                     
                                                                            
                                    </label>
                                    {{ form_widget(form.state, {'attr': {'class': 'form-control' }}
                                    ) }}                                                  
                                                                    
                                </div>
                            </div>
                            <div class=\"col-md-8\">
                                <div class=\"mb-3\">
                                    <label for=\"detail\">
                                    Détail de l’état de l’animal                      
                                                                            
                                    </label>
                                    {{ form_widget(form.detail, {'attr': {'class': 'form-control' }}
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

                    <a href=\"/veterinary/vetreport\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                                                                    
                                            
                    </a>
                </div>
                {{ form_end(form) }}

            </div>
        </section>
    </div>
{% endblock %}
", "veterinary/vetreport/new.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/veterinary/vetreport/new.html.twig");
    }
}
