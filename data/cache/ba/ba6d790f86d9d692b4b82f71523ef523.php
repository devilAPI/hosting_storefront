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

/* mod_orderbutton_checkout.html.twig */
class __TwigTemplate_c023d0e90b484657e5414b978357b5d8 extends Template
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
        $context["cart"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get", [], "any", false, false, false, 1);
        // line 2
        yield "<div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
        <button class=\"accordion-button ";
        // line 4
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "checkout", [], "any", false, false, false, 4)) {
            yield "collapsed";
        }
        yield "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#checkout\" aria-expanded=\"false\" aria-controls=\"checkout\">
            <svg class=\"svg-icon me-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M17,18A2,2 0 0,1 19,20A2,2 0 0,1 17,22C15.89,22 15,21.1 15,20C15,18.89 15.89,18 17,18M1,2H4.27L5.21,4H20A1,1 0 0,1 21,5C21,5.17 20.95,5.34 20.88,5.5L17.3,11.97C16.96,12.58 16.3,13 15.55,13H8.1L7.2,14.63L7.17,14.75A0.25,0.25 0 0,0 7.42,15H19V17H7C5.89,17 5,16.1 5,15C5,14.65 5.09,14.32 5.24,14.04L6.6,11.59L3,4H1V2M7,18A2,2 0 0,1 9,20A2,2 0 0,1 7,22C5.89,22 5,21.1 5,20C5,18.89 5.89,18 7,18M16,11L18.78,6H6.14L8.5,11H16Z\" /></svg>
            <span>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Cart"), "html", null, true);
        yield "</span>&nbsp;<span class=\"badge bg-success\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 6)), "html", null, true);
        yield "</span>
        </button>
    </h2>
    ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 9)) {
            // line 10
            yield "    <div id=\"checkout\" class=\"accordion-collapse collapse ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "checkout", [], "any", false, false, false, 10) && ($context["client"] ?? null))) {
                yield "show";
            }
            yield "\" data-bs-parent=\"#orderManager\">
        <div class=\"accordion-body\">
            <div class=\"accordion-inner\" id=\"checkout-inner\">
                <table class=\"table table-striped table-bordered table-sm\">
                    <thead>
                    <tr>
                        <th>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Product"), "html", null, true);
            yield "</th>
                        <th>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Price"), "html", null, true);
            yield "</th>
                        <th style=\"width: 3%; text-align: center\"></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, false, 22));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 23
                yield "                        <tr>
                            <td>
                                ";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 25), "html", null, true);
                yield "
                                ";
                // line 26
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 26) > 1)) {
                    // line 27
                    yield "                                    x ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 27), "html", null, true);
                    yield "
                                ";
                }
                // line 29
                yield "
                                ";
                // line 30
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "period", [], "any", false, false, false, 30)) {
                    // line 31
                    yield "                                    (";
                    yield $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "period", [], "any", false, false, false, 31));
                    yield ")
                                ";
                }
                // line 33
                yield "                            </td>
                            <td>
                                ";
                // line 35
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 35)) {
                    // line 36
                    yield "                                    <del>";
                    yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 36));
                    yield "</del>
                                    <strong class=\"text-success\">";
                    // line 37
                    yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 37) - CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discount_price", [], "any", false, false, false, 37)));
                    yield "</strong>


                                ";
                } else {
                    // line 41
                    yield "                                    ";
                    yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 41));
                    yield "
                                ";
                }
                // line 43
                yield "                            </td>
                            <td><button data-cart-item-id=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 44), "html", null, true);
                yield "\" class=\"btn btn-dark btn-sm remove-cart-item\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Remove item"), "html", null, true);
                yield "\"><strong><i class=\"awe-remove\"></i></strong></button></td>
                        </tr>

                        ";
                // line 47
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "show_custom_form_values", [], "any", false, false, false, 47)) {
                    // line 48
                    yield "                            <tr>
                                <td>
                                    ";
                    // line 50
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "form_id", [], "any", false, false, false, 50) && CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "formbuilder"]], "method", false, false, false, 50))) {
                        // line 51
                        yield "                                        ";
                        $context["form"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "formbuilder_get", [["id" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "form_id", [], "any", false, false, false, 51)]], "method", false, false, false, 51);
                        // line 52
                        yield "                                        ";
                        // line 53
                        yield "                                        <div class=\"well\">
                                            <dl class=\"row\">
                                                ";
                        // line 55
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["item"]);
                        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                            // line 56
                            yield "                                                    ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "fields", [], "any", false, false, false, 56));
                            foreach ($context['_seq'] as $context["_key"] => $context["form_field"]) {
                                // line 57
                                yield "                                                        ";
                                if ( !Twig\Extension\CoreExtension::testEmpty($context["value"])) {
                                    // line 58
                                    yield "                                                            ";
                                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["form_field"], "name", [], "any", false, false, false, 58) == $context["field"])) {
                                        // line 59
                                        yield "                                                                <dt>
                                                                    ";
                                        // line 60
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["form_field"], "label", [], "any", false, false, false, 60), "html", null, true);
                                        yield "
                                                                </dt>
                                                                <dd>
                                                                    ";
                                        // line 63
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["form_field"], "type", [], "any", false, false, false, 63) == "checkbox")) {
                                            // line 64
                                            yield "                                                                        ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                                            foreach ($context['_seq'] as $context["_key"] => $context["selection"]) {
                                                // line 65
                                                yield "                                                                            ";
                                                $context['_parent'] = $context;
                                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["form_field"], "options", [], "any", false, false, false, 65));
                                                foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                    // line 66
                                                    yield "                                                                                ";
                                                    if (($context["field_value"] == $context["selection"])) {
                                                        // line 67
                                                        yield "                                                                                    ";
                                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_key"], "html", null, true);
                                                        yield "
                                                                                ";
                                                    }
                                                    // line 69
                                                    yield "                                                                            ";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 70
                                                yield "                                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selection'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 71
                                            yield "                                                                    ";
                                        } elseif (((CoreExtension::getAttribute($this->env, $this->source, $context["form_field"], "type", [], "any", false, false, false, 71) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["form_field"], "type", [], "any", false, false, false, 71) == "radio"))) {
                                            // line 72
                                            yield "                                                                        ";
                                            $context['_parent'] = $context;
                                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["form_field"], "options", [], "any", false, false, false, 72));
                                            foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                // line 73
                                                yield "                                                                            ";
                                                if (($context["field_value"] == $context["value"])) {
                                                    // line 74
                                                    yield "                                                                                ";
                                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_key"], "html", null, true);
                                                    yield "
                                                                            ";
                                                }
                                                // line 76
                                                yield "                                                                        ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 77
                                            yield "                                                                    ";
                                        } else {
                                            // line 78
                                            yield "                                                                        ";
                                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                                            yield "
                                                                    ";
                                        }
                                        // line 80
                                        yield "                                                                </dd>
                                                            ";
                                    }
                                    // line 82
                                    yield "                                                        ";
                                }
                                // line 83
                                yield "                                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 84
                            yield "                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 85
                        yield "                                            </dl>
                                        </div>
                                    ";
                    }
                    // line 88
                    yield "                                </td>
                                <td></td>
                            </tr>
                        ";
                }
                // line 92
                yield "
                        ";
                // line 93
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 93) != 0)) {
                    // line 94
                    yield "                            <tr>
                                <td>";
                    // line 95
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 95), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("setup"), "html", null, true);
                    yield "</td>
                                <td>
                                    ";
                    // line 97
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 97)) {
                        // line 98
                        yield "                                    <del>";
                        yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 98));
                        yield "</del>
                                    ";
                        // line 99
                        yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 99) - CoreExtension::getAttribute($this->env, $this->source, $context["item"], "discount_setup", [], "any", false, false, false, 99)));
                        yield "
                                    ";
                    } else {
                        // line 101
                        yield "                                    ";
                        yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "setup_price", [], "any", false, false, false, 101));
                        yield "</td>
                                ";
                    }
                    // line 103
                    yield "                            </tr>
                        ";
                }
                // line 105
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            yield "                    </tbody>
                </table>

                <div class=\"row-fluid\">
                    <div class=\"span6\">
                        ";
            // line 112
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 112)) {
                // line 113
                yield "                            <a href=\"#\" id=\"show-promo-field\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Have a coupon code?"), "html", null, true);
                yield "</a>
                        ";
            }
            // line 115
            yield "
                        <form action=\"";
            // line 116
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/apply_promo");
            yield "\" method=\"post\" class=\"api-form well\" data-api-msg=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Promo code was applied for your order"), "html", null, true);
            yield "\"
                            data-api-reload=\"1\" ";
            // line 117
            if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 117)) {
                yield "style=\"display:none\"";
            }
            yield " id=\"apply-promo\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
            yield "\"/>
                            <div class=\"control-group\">
                                <div class=\"form-controls\">
                                    <div class=\"input-append\">
                                        <input class=\"span8\" type=\"text\" name=\"promocode\" id=\"promocode\" value=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "promocode", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "promocode", [], "any", false, false, false, 122), CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 122))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 122))), "html", null, true);
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["promo"] ?? null), "required", [], "any", false, false, false, 122)) {
                yield "required=\"required\"";
            }
            yield " placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Enter code"), "html", null, true);
            yield "\">
                                        ";
            // line 123
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "promocode", [], "any", false, false, false, 123)) {
                // line 124
                yield "                                            <a class=\"btn btn-warning btn-sm mb-1 api-link\" href=\"";
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/cart/remove_promo", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
                yield "\" type=\"button\" data-api-reload=\"1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Remove"), "html", null, true);
                yield "</a>
                                        ";
            } else {
                // line 126
                yield "                                            <button class=\"btn btn-primary btn-sm mb-1\" type=\"submit\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Apply"), "html", null, true);
                yield "</button>
                                        ";
            }
            // line 128
            yield "                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class=\"span6\">
                        <table class=\"table table-bordered table-striped\">

                            ";
            // line 137
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "discount", [], "any", false, false, false, 137) > 0)) {
                // line 138
                yield "                                <tr>
                                    <td><strong>";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Subtotal:"), "html", null, true);
                yield "</strong></td>
                                    <td><strong>";
                // line 140
                yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "subtotal", [], "any", false, false, false, 140));
                yield "</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Discount:"), "html", null, true);
                yield "</strong></td>
                                    <td><strong>- ";
                // line 144
                yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "discount", [], "any", false, false, false, 144));
                yield "</strong></td>
                                </tr>
                            ";
            }
            // line 147
            yield "
                            ";
            // line 148
            $context["tax_amount"] = 0;
            // line 149
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "client_is_taxable", [], "any", false, false, false, 149)) {
                // line 150
                yield "                                ";
                $context["tax_rate"] = CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_tax_rate", [], "any", false, false, false, 150);
                // line 151
                yield "                                ";
                $context["tax_amount"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 151) * ($context["tax_rate"] ?? null)) / 100);
                // line 152
                yield "                                <tr>
                                    <td><strong>";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("VAT"), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["tax_rate"] ?? null), "html", null, true);
                yield "%) :</strong></td>
                                    <td><strong>";
                // line 154
                yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, ($context["tax_amount"] ?? null));
                yield "</strong></td>
                                </tr>
                            ";
            }
            // line 157
            yield "                            <tr>
                                <td><strong>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Total:"), "html", null, true);
            yield "</strong></td>
                                <td><strong>";
            // line 159
            yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, (CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 159) + ($context["tax_amount"] ?? null)));
            yield "</strong></td>
                            </tr>

                        </table>

                        <form class=\"api-form\" method=\"post\" action=\"";
            // line 164
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/client/cart/checkout");
            yield "\" data-api-jsonp=\"onOrderCheckout\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
            yield "\"/>
                            <fieldset>
                                ";
            // line 167
            $context["enough_in_balance"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "client_balance_get_total", [], "any", false, false, false, 167) >= CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 167));
            // line 168
            yield "                                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, false, 168) &&  !($context["enough_in_balance"] ?? null))) {
                // line 169
                yield "                                    <div class=\"control-group\">
                                        ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "invoice_gateways", [], "any", false, false, false, 170));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                    // line 171
                    yield "                                            ";
                    if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["cart"] ?? null), "currency", [], "any", false, false, false, 171), "code", [], "any", false, false, false, 171), CoreExtension::getAttribute($this->env, $this->source, $context["gtw"], "accepted_currencies", [], "any", false, false, false, 171))) {
                        // line 172
                        yield "                                                <label class=\"radio\" for=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 172), "html", null, true);
                        yield "\">
                                                    <input type=\"radio\" name=\"gateway_id\" id=";
                        // line 173
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 173), "html", null, true);
                        yield " value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gtw"], "id", [], "any", false, false, false, 173), "html", null, true);
                        yield "\" ";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 173)) ? ("checked") : (""));
                        yield "/>
                                                    ";
                        // line 174
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Pay by"), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["gtw"], "title", [], "any", false, false, false, 174), "html", null, true);
                        yield "
                                                </label>
                                            ";
                    }
                    // line 177
                    yield "                                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                yield "                                    </div>
                                ";
            }
            // line 180
            yield "                                <div class=\"control-group\">
                                    <div class=\"controls mt-3\">
                                        ";
            // line 182
            if (($context["enough_in_balance"] ?? null)) {
                // line 183
                yield "                                            <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Total amount will be deducted from account balance"), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 185
            yield "                                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "checkout_tos", [], "any", false, false, false, 185) == "explicit")) {
                // line 186
                yield "                                            <div class=\"form-check mb-1\">
                                                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\" required>
                                                <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                                    ";
                // line 190
                yield "                                                    <span>I agree to the <a href=\"";
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/tos");
                yield "\" target=\"_blank\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("terms of service"), "html", null, true);
                yield "</a> and <a href=\"";
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/privacy-policy");
                yield "\" target=\"_blank\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("privacy policy"), "html", null, true);
                yield "</a>.</span>
                                                </label>
                                            </div>
                                        ";
            }
            // line 194
            yield "                                        <button class=\"btn btn-primary btn-large\" type=\"submit\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Checkout"), "html", null, true);
            yield "</button>
                                    </div>
                                </div>
                            </fieldset>
                            ";
            // line 198
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "checkout_tos", [], "any", false, false, false, 198) == "implicit")) {
                // line 199
                yield "                                ";
                // line 200
                yield "                                <span class=\"text-muted\">By completing your order, you agree to our <a href=\"";
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/tos");
                yield "\" target=\"_blank\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("terms of service"), "html", null, true);
                yield "</a> and <a href=\"";
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/privacy-policy");
                yield "\" target=\"_blank\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("privacy policy"), "html", null, true);
                yield "</a>.</span>
                            ";
            }
            // line 202
            yield "                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 209
        yield "</div>

<script type=\"text/javascript\">
    \$('.remove-cart-item').on('click', function(e) {
        e.preventDefault();

        var btn = \$(this);

        if (confirm(\"";
        // line 217
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Are you sure you want to remove this item from cart?"), "html", null, true);
        yield "\")) {
            var item_id = \$(btn).attr('data-cart-item-id');

            bb.post(\"guest/cart/remove_item\", { id: item_id, CSRFToken: \"";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
        yield "\" }, function(r) {
                FOSSBilling.message(\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Item was removed from cart"), "html", null, true);
        yield "\");
                location.reload(false);
            });
        }
    });
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_orderbutton_checkout.html.twig";
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
        return array (  637 => 221,  633 => 220,  627 => 217,  617 => 209,  608 => 202,  596 => 200,  594 => 199,  592 => 198,  584 => 194,  570 => 190,  565 => 186,  562 => 185,  556 => 183,  554 => 182,  550 => 180,  546 => 178,  532 => 177,  524 => 174,  516 => 173,  511 => 172,  508 => 171,  491 => 170,  488 => 169,  485 => 168,  483 => 167,  478 => 165,  474 => 164,  466 => 159,  462 => 158,  459 => 157,  453 => 154,  447 => 153,  444 => 152,  441 => 151,  438 => 150,  435 => 149,  433 => 148,  430 => 147,  424 => 144,  420 => 143,  414 => 140,  410 => 139,  407 => 138,  405 => 137,  394 => 128,  388 => 126,  380 => 124,  378 => 123,  368 => 122,  361 => 118,  355 => 117,  349 => 116,  346 => 115,  340 => 113,  338 => 112,  331 => 107,  324 => 105,  320 => 103,  314 => 101,  309 => 99,  304 => 98,  302 => 97,  295 => 95,  292 => 94,  290 => 93,  287 => 92,  281 => 88,  276 => 85,  270 => 84,  264 => 83,  261 => 82,  257 => 80,  251 => 78,  248 => 77,  242 => 76,  236 => 74,  233 => 73,  228 => 72,  225 => 71,  219 => 70,  213 => 69,  207 => 67,  204 => 66,  199 => 65,  194 => 64,  192 => 63,  186 => 60,  183 => 59,  180 => 58,  177 => 57,  172 => 56,  168 => 55,  164 => 53,  162 => 52,  159 => 51,  157 => 50,  153 => 48,  151 => 47,  143 => 44,  140 => 43,  134 => 41,  127 => 37,  122 => 36,  120 => 35,  116 => 33,  110 => 31,  108 => 30,  105 => 29,  99 => 27,  97 => 26,  93 => 25,  89 => 23,  85 => 22,  77 => 17,  73 => 16,  61 => 10,  59 => 9,  51 => 6,  44 => 4,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_checkout.html.twig", "C:\\xampp\\htdocs\\modules\\Orderbutton\\html_client/mod_orderbutton_checkout.html.twig");
    }
}
