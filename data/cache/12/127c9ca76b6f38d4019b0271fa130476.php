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

/* mod_orderbutton_product_configuration.html.twig */
class __TwigTemplate_93b25fd0ca342ebab98e78b1792a59fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ( !($context["product"] ?? null)) {
            // line 2
            yield "    ";
            $context["product"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "product", [], "any", false, false, false, 2)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "product_get", [["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "product", [], "any", false, false, false, 2)]], "method", false, false, false, 2)) : (null));
        }
        // line 4
        yield "<div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
        <button class=\"accordion-button ";
        // line 6
        if ( !($context["product"] ?? null)) {
            yield "collapsed";
        }
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#order\" aria-expanded=\"true\" aria-controls=\"order\">
            <svg class=\"svg-icon me-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M12,10A2,2 0 0,0 10,12A2,2 0 0,0 12,14A2,2 0 0,0 14,12A2,2 0 0,0 12,10M10,22C9.75,22 9.54,21.82 9.5,21.58L9.13,18.93C8.5,18.68 7.96,18.34 7.44,17.94L4.95,18.95C4.73,19.03 4.46,18.95 4.34,18.73L2.34,15.27C2.21,15.05 2.27,14.78 2.46,14.63L4.57,12.97L4.5,12L4.57,11L2.46,9.37C2.27,9.22 2.21,8.95 2.34,8.73L4.34,5.27C4.46,5.05 4.73,4.96 4.95,5.05L7.44,6.05C7.96,5.66 8.5,5.32 9.13,5.07L9.5,2.42C9.54,2.18 9.75,2 10,2H14C14.25,2 14.46,2.18 14.5,2.42L14.87,5.07C15.5,5.32 16.04,5.66 16.56,6.05L19.05,5.05C19.27,4.96 19.54,5.05 19.66,5.27L21.66,8.73C21.79,8.95 21.73,9.22 21.54,9.37L19.43,11L19.5,12L19.43,13L21.54,14.63C21.73,14.78 21.79,15.05 21.66,15.27L19.66,18.73C19.54,18.95 19.27,19.04 19.05,18.95L16.56,17.95C16.04,18.34 15.5,18.68 14.87,18.93L14.5,21.58C14.46,21.82 14.25,22 14,22H10M11.25,4L10.88,6.61C9.68,6.86 8.62,7.5 7.85,8.39L5.44,7.35L4.69,8.65L6.8,10.2C6.4,11.37 6.4,12.64 6.8,13.8L4.68,15.36L5.43,16.66L7.86,15.62C8.63,16.5 9.68,17.14 10.87,17.38L11.24,20H12.76L13.13,17.39C14.32,17.14 15.37,16.5 16.14,15.62L18.57,16.66L19.32,15.36L17.2,13.81C17.6,12.64 17.6,11.37 17.2,10.2L19.31,8.65L18.56,7.35L16.15,8.39C15.38,7.5 14.32,6.86 13.12,6.62L12.75,4H11.25Z\" /></svg>
            ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Product Configuration"), "html", null, true);
        yield "
        </button>
    </h2>
    ";
        // line 11
        if (($context["product"] ?? null)) {
            // line 12
            yield "    <div id=\"order\" class=\"accordion-collapse collapse ";
            if (($context["product"] ?? null)) {
                yield "show";
            }
            yield "\" data-bs-parent=\"#orderManager\">
        <div class=\"accordion-body\">
            <div class=\"accordion-inner\">
                <form method=\"post\" style=\"background:none;\" class=\"api-form form-";
            // line 15
            ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 15)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "formbuilder_get", [["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 15)]], "method", false, false, false, 15), "style", [], "any", false, false, false, 15), "type", [], "any", false, false, false, 15), "html", null, true)) : (yield 0));
            yield "\"
                    action=\"";
            // line 16
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/add_item");
            yield "\" data-api-msg=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Product was added to shopping cart"), "html", null, true);
            yield "\"
                    data-api-redirect=\"";
            // line 17
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order", ["checkout" => 1]);
            yield "\" + \"";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "show_custom_form_values", [], "any", false, false, false, 17)) {
                yield "&show_custom_form_values=1";
            }
            yield "\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
            yield "\"/>
                    ";
            // line 19
            $context["product_details"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 20
                yield "                        <div class=\"well\">
                            <h3>";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, false, 21), "html", null, true);
                yield "</h3>
                            ";
                // line 22
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 22)) {
                    // line 23
                    yield "                                ";
                    yield $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 23));
                    yield "
                            ";
                }
                // line 25
                yield "
                            <hr>

                            <h5 class=\"mt-4 mb-1\"><strong>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Billing"), "html", null, true);
                yield "</strong></h5>

                            <div class=\"row\">
                                <div class=\"col-12 col-md-4 col-xl-3\">
                                    ";
                // line 32
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 32), "type", [], "any", false, false, false, 32) == "recurrent")) {
                    // line 33
                    yield "                                    <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Billing cycle"), "html", null, true);
                    yield "</span>
                                    ";
                } else {
                    // line 35
                    yield "                                    <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("One-time payment"), "html", null, true);
                    yield "</span>
                                    ";
                }
                // line 37
                yield "                                </div>
                                <div class=\"col\">
                                    ";
                // line 39
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 39), "type", [], "any", false, false, false, 39) == "recurrent")) {
                    // line 40
                    yield "                                    ";
                    $context["periods"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 40);
                    // line 41
                    yield "                                    <select class=\"form-select\" name=\"period\" id=\"period-selector\">
                                        ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 42), "recurrent", [], "any", false, false, false, 42));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 43
                        yield "                                            ";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["prices"], "enabled", [], "any", false, false, false, 43)) {
                            // line 44
                            yield "                                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
                            yield "\" data-bb-price=\"";
                            yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 44));
                            yield "\" name=\"period\">";
                            yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["prices"], "price", [], "any", false, false, false, 44));
                            yield " (";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_0 = ($context["periods"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["code"]] ?? null) : null), "html", null, true);
                            yield ")</option>
                                            ";
                        }
                        // line 46
                        yield "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    yield "                                    </select>
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 48
($context["product"] ?? null), "pricing", [], "any", false, false, false, 48), "type", [], "any", false, false, false, 48) == "free")) {
                    // line 49
                    yield "                                    <span class=\"badge bg-success\">";
                    yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, 0);
                    yield "</span>
                                    ";
                } else {
                    // line 51
                    yield "                                    <span class=\"badge bg-success\">";
                    yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 51), "once", [], "any", false, false, false, 51), "price", [], "any", false, false, false, 51));
                    yield "</span>
                                    ";
                }
                // line 53
                yield "                                </div>
                            </div>
                        </div>
                    ";
                return; yield '';
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 57
            yield "
                    ";
            // line 58
            $context["tpl"] = (("mod_service" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "type", [], "any", false, false, false, 58)) . "_order_form.html.twig");
            // line 59
            yield "                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_template_exists", [["file" => ($context["tpl"] ?? null)]], "method", false, false, false, 59)) {
                // line 60
                yield "                        ";
                yield from                 $this->loadTemplate(($context["tpl"] ?? null), "mod_orderbutton_product_configuration.html.twig", 60)->unwrap()->yield(CoreExtension::merge($context, ($context["product"] ?? null)));
                // line 61
                yield "                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 61) && CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "formbuilder"]], "method", false, false, false, 61))) {
                // line 62
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["product_details"] ?? null), "html", null, true);
                yield "
                        ";
                // line 63
                $context["form"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "formbuilder_get", [["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form_id", [], "any", false, false, false, 63)]], "method", false, false, false, 63);
                // line 64
                yield "                        ";
                yield from                 $this->loadTemplate("mod_formbuilder_build.html.twig", "mod_orderbutton_product_configuration.html.twig", 64)->unwrap()->yield(CoreExtension::merge($context, ($context["product"] ?? null)));
                // line 65
                yield "                    ";
            } else {
                // line 66
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["product_details"] ?? null), "html", null, true);
                yield "
                    ";
            }
            // line 68
            yield "
                    ";
            // line 69
            yield from             $this->loadTemplate("mod_orderbutton_addons.html.twig", "mod_orderbutton_product_configuration.html.twig", 69)->unwrap()->yield(CoreExtension::merge($context, ($context["product"] ?? null)));
            // line 70
            yield "
                    <input type=\"hidden\" name=\"multiple\" value=\"1\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 72), "html", null, true);
            yield "\" />
                    <div class=\"mt-2 mb-0\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"config-next\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Next"), "html", null, true);
            yield "</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    ";
        }
        // line 81
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_orderbutton_product_configuration.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  255 => 81,  245 => 74,  240 => 72,  236 => 70,  234 => 69,  231 => 68,  225 => 66,  222 => 65,  219 => 64,  217 => 63,  212 => 62,  209 => 61,  206 => 60,  203 => 59,  201 => 58,  198 => 57,  191 => 53,  185 => 51,  179 => 49,  177 => 48,  174 => 47,  168 => 46,  156 => 44,  153 => 43,  149 => 42,  146 => 41,  143 => 40,  141 => 39,  137 => 37,  131 => 35,  125 => 33,  123 => 32,  116 => 28,  111 => 25,  105 => 23,  103 => 22,  99 => 21,  96 => 20,  94 => 19,  90 => 18,  82 => 17,  76 => 16,  72 => 15,  63 => 12,  61 => 11,  55 => 8,  48 => 6,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_product_configuration.html.twig", "C:\\xampp\\htdocs\\modules\\Orderbutton\\html_client/mod_orderbutton_product_configuration.html.twig");
    }
}
