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
class __TwigTemplate_db58d9651b9c7a443668d66b2f0a15df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/opening/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/opening/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/opening/new.html.twig", 1);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "weekday", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "is_closed", [], "any", false, false, false, 43), 'widget');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "start_time", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "pause_start", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "pause_end", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "end_time", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                                 </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 84, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "</button>

                    <a href=\"/admin/opening\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                    </a>
                </div>
            ";
        // line 90
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), 'form_end');
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
        return array (  189 => 90,  180 => 84,  168 => 75,  157 => 67,  146 => 59,  135 => 51,  124 => 43,  113 => 35,  100 => 25,  87 => 15,  73 => 3,  63 => 2,  40 => 1,);
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
                            Ajouter un horaire d'ouverture                      
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right\">
                        <a href=\"{{ path('app_opening_index') }}\" class=\"btn btn-primary\">
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
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"weekday\">
                                    Jour
                                    </label>
                                    {{ form_widget(form.weekday, {'attr': {'class': 'form-control'}}) }}
                                 </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"is_closed\">
                                    Fermé
                                    </label>
                                    {{ form_widget(form.is_closed) }}
                                 </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"start_time\">
                                        Heure de début
                                    </label>
                                {{ form_widget(form.start_time, {'attr': {'class': 'form-control'}}) }}                                
                                </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"pause_start\">
                                    Début de pause
                                    </label>
                                     {{ form_widget(form.pause_start, {'attr': {'class': 'form-control'}}) }}                                
                                 </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"pause_end\">
                                    Fin de pause
                                    </label>
                                     {{ form_widget(form.pause_end, {'attr': {'class': 'form-control'}}) }}                                
                                 </div>
                            </div>
                            <div class=\"col-md-2\">
                                <div class=\"mb-3\">
                                    <label for=\"end_time\">
                                    Heure de fin
                                    </label>
                                     {{ form_widget(form.end_time, {'attr': {'class': 'form-control'}}) }}                                
                                 </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">{{ button_label|default('Sauvegarder') }}</button>

                    <a href=\"/admin/opening\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                    </a>
                </div>
            {{ form_end(form) }}

            </div>
        </section>
    </div>
{% endblock %}

", "admin/opening/new.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/opening/new.html.twig");
    }
}
