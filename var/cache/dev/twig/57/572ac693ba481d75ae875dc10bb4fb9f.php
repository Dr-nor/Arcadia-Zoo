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

/* admin/opening/edit.html.twig */
class __TwigTemplate_9e6fb2b941f8d152bfba3c2673966162 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/opening/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/opening/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "admin/opening/edit.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_opening_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["opening"]) || array_key_exists("opening", $context) ? $context["opening"] : (function () { throw new RuntimeError('Variable "opening" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["opening"]) || array_key_exists("opening", $context) ? $context["opening"] : (function () { throw new RuntimeError('Variable "opening" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16))), "html", null, true);
        yield "\">
                            <button class=\"btn btn-secondary  ml-3\">Delete</button>
                        </form>
                        <a href=\"";
        // line 19
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
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
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
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "weekday", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                         </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"is_closed\">
                            Fermé
                            </label>
                            ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "is_closed", [], "any", false, false, false, 47), 'widget');
        yield "
                         </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"start_time\">
                                Heure de début
                            </label>
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "start_time", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                        </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"pause_start\">
                            Début de pause
                            </label>
                             ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "pause_start", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                         </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"pause_end\">
                            Fin de pause
                            </label>
                             ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "pause_end", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                         </div>
                    </div>
                    <div class=\"col-md-2\">
                        <div class=\"mb-3\">
                            <label for=\"end_time\">
                            Heure de fin
                            </label>
                             ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "end_time", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                
                         </div>
                    </div>
                    
                </div>
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 88, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "</button>
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
        return "admin/opening/edit.html.twig";
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
        return array (  195 => 90,  190 => 88,  178 => 79,  167 => 71,  156 => 63,  145 => 55,  134 => 47,  123 => 39,  110 => 29,  97 => 19,  91 => 16,  87 => 15,  73 => 3,  63 => 2,  40 => 1,);
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
                        <form class=\"mr-4\" method=\"post\" action=\"{{ path('app_opening_delete', {'id': opening.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ opening.id) }}\">
                            <button class=\"btn btn-secondary  ml-3\">Delete</button>
                        </form>
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
                </div>
            {{ form_end(form) }}

            </div>
        </section>
    </div>
{% endblock %}

", "admin/opening/edit.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/admin/opening/edit.html.twig");
    }
}
