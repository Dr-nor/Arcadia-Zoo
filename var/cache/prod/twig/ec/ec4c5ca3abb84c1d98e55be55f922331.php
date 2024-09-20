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

/* front/contact.html.twig */
class __TwigTemplate_f8cc67cc83b45b7064a21d5628038f99 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/layouts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("front/layouts/base.html.twig", "front/contact.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "
    <section class=\"contact-page\">

        <div class=\"breadcrumb-area breadcrumb-height overlay\" data-bg-image=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-assets/images/breadcrumb/bg/1.jpg"), "html", null, true);
        yield "\">
            <div class=\"container h-100\">
                <div class=\"row h-100\">
                    <div class=\"col-lg-12\">
                        <div class=\"breadcrumb-item text-white\">
                            <h2 class=\"breadcrumb-heading\">
                                Contact Us               
                            </h2>
                            <ul>
                                <li>
                                    <a class=\"text-primary\" href=\"/\">
                                        Accueil                            
                                        <i class=\"bi bi-chevron-double-right\"></i>
                                    </a>
                                </li>
                                <li>
                                    Contact                      
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"flash-wrapper my-2\">
            <div class=\"container\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 34
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 35
                yield "                        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible mt-4\" role=\"alert\">
                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"><i class=\"bi bi-x\"></i></button>
                            <div class=\"alert-message\">
                                ";
                // line 38
                yield $context["message"];
                yield "
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "            </div>
        </div>

        <!-- Begin Contact info Area -->
        <div class=\"contact-info-area  section-space-y-axis-100\">
            <div class=\"container\">
                <div class=\"row contact-info-wrap py-5 py-xl-0\">
                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"contact-info-item\">
                            <div class=\"contact-info-icon buzz-out-on-hover\">
                                <i class=\"bi bi-telephone-fill\"></i>
                            </div>
                            <div class=\"contact-info-content\">
                                <h2 class=\"title\">
                                    TÉLÉPHONE                    
                                </h2>
                                <p class=\"short-desc mb-0\">
                                    +33 xxx xxx xxx               
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 pt-4 pt-xl-0\">
                        <div class=\"contact-info-item\">
                            <div class=\"contact-info-icon buzz-out-on-hover\">
                                <i class=\"bi bi-send-fill \"></i>
                            </div>
                            <div class=\"contact-info-content\">
                                <h2 class=\"title\">
                                    E-MAIL                       
                                </h2>
                                <p class=\"short-desc mb-0\">
                                    contact@arcadia.com 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6 pt-4 pt-xl-0\">
                        <div class=\"contact-info-item\">
                            <div class=\"contact-info-icon buzz-out-on-hover\">
                                <i class=\"bi bi-geo-fill\"></i>
                            </div>
                            <div class=\"contact-info-content\">
                                <h2 class=\"title\">
                                    ADRESSE                        
                                </h2>
                                <p class=\"short-desc mb-0\">
                                Bretagne, France.             
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact info Area End -->

        <!-- Begin Contact form Area -->
        <div class=\"contact-form-area section-space-bottom-50\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                    ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => " mb-6", "id" => "contact"]]);
        yield "
                            <div class=\"row\">
                                <div class=\"col-lg-5\">
                                    <div id=\"map\">
                                        <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1364672.4684936965!2d-4.400339164147115!3d48.08368801028216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4811ca61ae7e8eaf%3A0x10ca5cd36df24b0!2sBretagne%2C%20France!5e0!3m2!1sfr!2sdz!4v1726612405028!5m2!1sfr!2sdz\" width=\"100%\" height=\"500px\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                                    </div>
                                </div>
                                <div class=\"col-lg-7\">

                                    <div class=\"fill-form\">
                                        <h3 class=\"text-start\">
                                            Envoyez-nous un message                
                                        </h3>
                                        <div class=\"row\">
                                            <div class=\"col-lg-6\">
                                                <fieldset>
                                                    ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fullname", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom & Prénom*"]]);
        yield " 

                                                </fieldset>
                                                <fieldset>
                                                    ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email*"]]);
        yield " 
                                                </fieldset>
                                                <fieldset>
                                                    ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro de téléphone"]]);
        yield " 
                                                </fieldset>
                                            </div>
                                            <div class=\"col-lg-6\">
                                                <fieldest>
                                                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "subject", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Objet"]]);
        yield " 
                                                </fieldest>
                                                <fieldset>
                                                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre demande..."]]);
        yield " 
                                                </fieldset>
                                            </div>
                                            <div class=\"button-wrap  text-start mt-8 \">
                                                <button class=\"btn btn-custom-size lg-size btn-primary\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default(($context["button_label"] ?? null), "Envoyer")) : ("Envoyer")), "html", null, true);
        yield "</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        ";
        // line 147
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        yield "
                    </div>
                </div>

            </div>
        </div>
    </div>
</div></div><!-- Contact form Area End --></section>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front/contact.html.twig";
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
        return array (  249 => 147,  239 => 140,  232 => 136,  226 => 133,  218 => 128,  212 => 125,  205 => 121,  186 => 105,  122 => 43,  116 => 42,  106 => 38,  99 => 35,  94 => 34,  90 => 33,  60 => 6,  55 => 3,  51 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "front/contact.html.twig", "/Applications/MAMP/htdocs/Arcadia-Zoo/templates/front/contact.html.twig");
    }
}
