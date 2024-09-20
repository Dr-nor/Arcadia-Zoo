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

/* veterinary/vetreport/edit.html.twig */
class __TwigTemplate_d80ab6befaab5e7309c10cac3d727185 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary/vetreport/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "veterinary/vetreport/edit.html.twig"));

        $this->parent = $this->loadTemplate("admin/layouts/base.html.twig", "veterinary/vetreport/edit.html.twig", 1);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_vetreport_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["vetreport"]) || array_key_exists("vetreport", $context) ? $context["vetreport"] : (function () { throw new RuntimeError('Variable "vetreport" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["vetreport"]) || array_key_exists("vetreport", $context) ? $context["vetreport"] : (function () { throw new RuntimeError('Variable "vetreport" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16))), "html", null, true);
        yield "\" />
                            <button class=\"btn btn-secondary  ml-3\">
                                Delete
                            </button>
                        </form>
                        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vet_vetreport_index");
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
                        <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"animal_id\">
                                        Animal                            
                                    </label>
                                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "animal_id", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control nice-select"]]);
        yield "                         
                                </div>
                            </div>

                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"diet\">Nourriture</label>
                                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "diet", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 47
        yield "                                  
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"grammage\">
                                        Grammage                            
                                                                            
                                    </label>
                                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "grammage", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 57
        yield "                         
                                                                    
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"state\">
                                        Etat                     
                                                                            
                                    </label>
                                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "state", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 68
        yield "                                                  
                                                                    
                                </div>
                            </div>
                            <div class=\"col-md-8\">
                                <div class=\"mb-3\">
                                    <label for=\"detail\">
                                    Détail de l’état de l’animal                      
                                                                            
                                    </label>
                                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "detail", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 79
        yield "                                                  
                                                                    
                                </div>
                            </div>
                            

                        </div>

                       
                    </div>
                </div>
                <div class=\"pb-5 pt-3\">
                    
                    <button class=\"btn btn-primary\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 92, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "</button>
                </div>
                ";
        // line 94
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        yield "
            </div>
        </section>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 100
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 101
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 102
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
        return "veterinary/vetreport/edit.html.twig";
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
        return array (  228 => 102,  223 => 101,  213 => 100,  197 => 94,  192 => 92,  177 => 79,  175 => 78,  163 => 68,  161 => 67,  149 => 57,  147 => 56,  136 => 47,  134 => 46,  124 => 39,  111 => 29,  100 => 21,  92 => 16,  88 => 15,  74 => 3,  64 => 2,  41 => 1,);
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
                        <form class=\"mr-4\" method=\"post\" action=\"{{ path('vet_vetreport_delete', {'id': vetreport.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ vetreport.id) }}\" />
                            <button class=\"btn btn-secondary  ml-3\">
                                Delete
                            </button>
                        </form>
                        <a href=\"{{ path('vet_vetreport_index') }}\" class=\"btn btn-primary\">Retour</a>
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
                                    {{ form_widget(form.animal_id, {'attr': {'class': 'form-control nice-select' }}) }}                         
                                </div>
                            </div>

                            <div class=\"col-md-4\">
                                <div class=\"mb-3\">
                                    <label for=\"diet\">Nourriture</label>
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
", "veterinary/vetreport/edit.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/veterinary/vetreport/edit.html.twig");
    }
}
