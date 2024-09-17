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

/* admin/testimonial/edit.html.twig */
class __TwigTemplate_89db8d551a653101a4e74500a15a4de1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/testimonial/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/testimonial/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/testimonial/edit.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["testimonial"]) || array_key_exists("testimonial", $context) ? $context["testimonial"] : (function () { throw new RuntimeError('Variable "testimonial" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["testimonial"]) || array_key_exists("testimonial", $context) ? $context["testimonial"] : (function () { throw new RuntimeError('Variable "testimonial" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16))), "html", null, true);
        yield "\">
                            <button class=\"btn btn-secondary  ml-3\">Delete</button>
                        </form>
                        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_testimonial_index");
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "note", [], "any", false, false, false, 40)), "html", null, true);
        yield "\" value=\"5\" />
                                <label class=\"star\" for=\"star1\" title=\"Awesome\" aria-hidden=\"true\"></label>
                                <input type=\"radio\" id=\"star2\" name=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "note", [], "any", false, false, false, 42)), "html", null, true);
        yield "\" value=\"4\" />
                                <label class=\"star\" for=\"star2\" title=\"Great\" aria-hidden=\"true\"></label>
                                <input type=\"radio\" id=\"star3\" name=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "note", [], "any", false, false, false, 44)), "html", null, true);
        yield "\" value=\"3\" />
                                <label class=\"star\" for=\"star3\" title=\"Very good\" aria-hidden=\"true\"></label>
                                <input type=\"radio\" id=\"star4\" name=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "note", [], "any", false, false, false, 46)), "html", null, true);
        yield "\" value=\"2\" />
                                <label class=\"star\" for=\"star4\" title=\"Good\" aria-hidden=\"true\"></label>
                                <input type=\"radio\" id=\"star5\" name=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "note", [], "any", false, false, false, 48)), "html", null, true);
        yield "\" value=\"1\" />
                                <label class=\"star\" for=\"star5\" title=\"Bad\" aria-hidden=\"true\"></label>
                                <input type=\"hidden\" name=\"notestored\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["testimonial"]) || array_key_exists("testimonial", $context) ? $context["testimonial"] : (function () { throw new RuntimeError('Variable "testimonial" does not exist.', 50, $this->source); })()), "note", [], "any", false, false, false, 50), "html", null, true);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "active", [], "any", false, false, false, 59), 'widget');
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "pseudonym", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "phone", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                         </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"mb-3\">
                            <label for=\"comment\">Commentaire</label>
                            ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "comment", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "               
                         </div>
                    </div>
                </div>
            </div>
        </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 99, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "</button>
                </div>
            ";
        // line 101
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
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
        return "admin/testimonial/edit.html.twig";
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
        return array (  221 => 101,  216 => 99,  205 => 91,  196 => 85,  185 => 77,  174 => 69,  161 => 59,  149 => 50,  144 => 48,  139 => 46,  134 => 44,  129 => 42,  124 => 40,  110 => 29,  97 => 19,  91 => 16,  87 => 15,  73 => 3,  63 => 2,  40 => 1,);
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
                        <form class=\"mr-4\" method=\"post\" action=\"{{ path('app_testimonial_delete', {'id': testimonial.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ testimonial.id) }}\">
                            <button class=\"btn btn-secondary  ml-3\">Delete</button>
                        </form>
                        <a href=\"{{ path('app_testimonial_index') }}\" class=\"btn btn-primary\">
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
                                <input type=\"hidden\" name=\"notestored\" value=\"{{testimonial.note}}\">
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
                </div>
            {{ form_end(form) }}

            </div>
        </section>
    </div>
{% endblock %}

", "admin/testimonial/edit.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/testimonial/edit.html.twig");
    }
}
