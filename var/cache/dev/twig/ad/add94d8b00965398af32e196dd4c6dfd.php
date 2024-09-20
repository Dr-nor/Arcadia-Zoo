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
class __TwigTemplate_0074a1053cc2603b1c7839ee11e5a53a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/testimonial/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/testimonial/new.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "employe/testimonial/new.html.twig", 1);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "note", [], "any", false, false, false, 36)), "html", null, true);
        yield "\" value=\"5\" />
                                        <label class=\"star\" for=\"star1\" title=\"Awesome\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star2\" name=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "note", [], "any", false, false, false, 38)), "html", null, true);
        yield "\" value=\"4\" />
                                        <label class=\"star\" for=\"star2\" title=\"Great\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star3\" name=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "note", [], "any", false, false, false, 40)), "html", null, true);
        yield "\" value=\"3\" />
                                        <label class=\"star\" for=\"star3\" title=\"Very good\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star4\" name=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "note", [], "any", false, false, false, 42)), "html", null, true);
        yield "\" value=\"2\" />
                                        <label class=\"star\" for=\"star4\" title=\"Good\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star5\" name=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "note", [], "any", false, false, false, 44)), "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "active", [], "any", false, false, false, 54), 'widget');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "pseudonym", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "phone", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                                 </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"mb-3\">
                                    <label for=\"comment\">Commentaire</label>
                                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "comment", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "               
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 94, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_end');
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
        return array (  214 => 100,  207 => 96,  202 => 94,  191 => 86,  182 => 80,  171 => 72,  160 => 64,  147 => 54,  134 => 44,  129 => 42,  124 => 40,  119 => 38,  114 => 36,  100 => 25,  87 => 15,  73 => 3,  63 => 2,  40 => 1,);
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
                            Ajouter un témoignage                       
                        </h1>
                    </div>
                    <div class=\"col-sm-6 text-right\">
                        <a href=\"{{ path('employe_testimonial_index') }}\" class=\"btn btn-primary\">
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
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <div class=\"rating\">
                                        <span>
                                        Évaluation
                                        </span>
                                        <input type=\"radio\" id=\"star1\" name=\"{{ field_name(form.note) }}\" value=\"5\" />
                                        <label class=\"star\" for=\"star1\" title=\"Awesome\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star2\" name=\"{{ field_name(form.note) }}\" value=\"4\" />
                                        <label class=\"star\" for=\"star2\" title=\"Great\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star3\" name=\"{{ field_name(form.note) }}\" value=\"3\" />
                                        <label class=\"star\" for=\"star3\" title=\"Very good\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star4\" name=\"{{ field_name(form.note) }}\" value=\"2\" />
                                        <label class=\"star\" for=\"star4\" title=\"Good\" aria-hidden=\"true\"></label>
                                        <input type=\"radio\" id=\"star5\" name=\"{{ field_name(form.note) }}\" value=\"1\" />
                                        <label class=\"star\" for=\"star5\" title=\"Bad\" aria-hidden=\"true\"></label>
                                    </div>
                                 </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"mb-3 float-end\">
                                    <label for=\"active\">
                                    Active
                                    </label>
                                    {{ form_widget(form.active) }} 

                                </div>
                            </div>

                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"pseudonym\">
                                        Pseudonyme*
                                    </label>
                                {{ form_widget(form.pseudonym, {'attr': {'class': 'form-control'}}) }}                                
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"email\">
                                        Email*
                                    </label>
                                     {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}                                
                                 </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"phone\">
                                        Téléphone
                                    </label>
                                     {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}                                
                                 </div>
                            </div>
                            <div class=\"col-md-12\">
                                <div class=\"mb-3\">
                                    <label for=\"comment\">Commentaire</label>
                                    {{ form_widget(form.comment, {'attr': {'class': 'form-control' }}) }}               
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">{{ button_label|default('Sauvegarder') }}</button>

                    <a href=\"{{ path('employe_testimonial_index') }}\" class=\"btn btn-outline-dark ml-3\">
                        Annuler                  
                    </a>
                </div>
            {{ form_end(form) }}

            </div>
        </section>
    </div>
{% endblock %}

", "employe/testimonial/new.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/employe/testimonial/new.html.twig");
    }
}
