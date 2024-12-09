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

/* mod_orderbutton_client.html.twig */
class __TwigTemplate_7b2a6a382425e0db4c8cc8b7724bc875 extends Template
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
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_orderbutton_client.html.twig", 1)->unwrap();
        // line 2
        yield "
<div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
        <button class=\"accordion-button";
        // line 5
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "checkout", [], "any", false, false, false, 5)) {
            yield " collapsed";
        }
        yield "\" type=\"button\"
                data-bs-toggle=\"collapse\" data-bs-target=\"#register\" aria-controls=\"register\">
            <svg class=\"svg-icon me-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                <path
                    d=\"M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M12,13C14.67,13 20,14.33 20,17V20H4V17C4,14.33 9.33,13 12,13M12,14.9C9.03,14.9 5.9,16.36 5.9,17V18.1H18.1V17C18.1,16.36 14.97,14.9 12,14.9Z\"/>
            </svg>
            <span>";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Login or Sign up"), "html", null, true);
        yield "</span>
        </button>
    </h2>
    <div id=\"register\" class=\"accordion-collapse collapse";
        // line 14
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "checkout", [], "any", false, false, false, 14) &&  !($context["client"] ?? null))) {
            yield " show";
        }
        yield "\"
         data-bs-parent=\"#orderManager\">
        <div class=\"accordion-body\">
            <div role=\"tablist\">
                <div class=\"tab-content\" id=\"nav-tabContent\">
                    <div class=\"tab-pane show active\" id=\"sign-in\" role=\"tabpanel\" aria-labelledby=\"in-tab\"
                         tabindex=\"0\">
                        <form method=\"post\" class=\"api-form\" action=\"";
        // line 21
        yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/client/login");
        yield "\" data-api-jsonp=\"onLogin\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
        yield "\"/>
                            <div class=\"row\">
                                <div class=\"col-md-7 mb-3\">
                                    <label for=\"email\" class=\"visually-hidden\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Email Address"), "html", null, true);
        yield "</label>
                                    <input class=\"form-control form-control-sm\" type=\"email\" name=\"email\" id=\"email\"
                                           required=\"required\"
                                           value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 28), "html", null, true);
        yield "\"
                                           placeholder=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Email Address"), "html", null, true);
        yield "\"
                                           data-validation-required-message=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("You must fill in your email."), "html", null, true);
        yield "\">
                                </div>
                                <div class=\"col-md-7 mb-3\">
                                    <label for=\"password\" class=\"visually-hidden\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Password"), "html", null, true);
        yield "</label>
                                    <input class=\"form-control form-control-sm\" type=\"password\" name=\"password\" id=\"password\"
                                           required=\"required\"
                                           value=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 36), "html", null, true);
        yield "\"
                                           placeholder=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Password"), "html", null, true);
        yield "\"
                                           data-validation-required-message=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("You must fill in your password."), "html", null, true);
        yield "\">
                                </div>
                            </div>
                            <div class=\"d-flex gap-2\">
                                <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                                    ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Login"), "html", null, true);
        yield "
                                </button>
                                <button class=\"btn btn-sm btn-link\" id=\"up-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#sign-up\"
                                        type=\"button\" role=\"tab\" aria-controls=\"sign-up\"
                                        aria-selected=\"false\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Create account"), "html", null, true);
        yield "</button>
                            </div>
                        </form>
                    </div>
                    <div class=\"tab-pane\" id=\"sign-up\" role=\"tabpanel\" aria-labelledby=\"up-tab\" tabindex=\"0\">
                        <form class=\"api-form\" action=\"";
        // line 52
        yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/client/create");
        yield "\" method=\"post\" data-api-jsonp=\"onAccountCreate\">
                            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
        yield "\"/>
                            ";
        // line 54
        $context["r"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "client_required", [], "any", false, false, false, 54);
        // line 55
        yield "                            <div class=\"row\">
                                <div class=\"col-md-7 mb-3\">
                                    <label for=\"reg-email\" class=\"visually-hidden\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Email Address"), "html", null, true);
        yield "</label>
                                    <input class=\"form-control form-control-sm\" type=\"email\" name=\"email\" id=\"reg-email\"
                                           required=\"required\"
                                           value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 60), "html", null, true);
        yield "\"
                                           placeholder=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Email Address"), "html", null, true);
        yield "\">
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-7 mb-3\">
                                    <label for=\"first-name\" class=\"visually-hidden\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("First Name"), "html", null, true);
        yield "</label>
                                    <input class=\"form-control form-control-sm\" type=\"text\" name=\"first_name\" id=\"first-name\"
                                           required=\"required\"
                                           value=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", false, false, false, 70), "html", null, true);
        yield "\"
                                           placeholder=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("First Name"), "html", null, true);
        yield "\">
                                </div>
                            </div>

                            ";
        // line 75
        if (CoreExtension::inFilter("last_name", ($context["r"] ?? null))) {
            // line 76
            yield "                            <div class=\"row\">
                                <div class=\"col-md-7 mb-3\">
                                    <label for=\"last_name\" class=\"visually-hidden\">";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Last Name"), "html", null, true);
            yield "</label>
                                    <input class=\"form-control form-control-sm\" type=\"text\" name=\"last_name\" id=\"last_name\"
                                           required=\"required\"
                                           value=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", false, false, false, 81), "html", null, true);
            yield "\"
                                           placeholder=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Last Name"), "html", null, true);
            yield "\">
                                </div>
                            </div>
                            ";
        }
        // line 86
        yield "
                            ";
        // line 87
        if (CoreExtension::inFilter("company", ($context["r"] ?? null))) {
            // line 88
            yield "                                <div class=\"row\">
                                    <div class=\"col-md-7 mb-3\">
                                        <label for=\"company\" class=\"visually-hidden\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Company"), "html", null, true);
            yield "</label>
                                        <input class=\"form-control form-control-sm\" type=\"text\" name=\"company\" id=\"company\"
                                               required=\"required\"
                                               value=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", false, false, false, 93), "html", null, true);
            yield "\"
                                               placeholder=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Company"), "html", null, true);
            yield "\">
                                    </div>
                                </div>
                            ";
        }
        // line 98
        yield "
                            ";
        // line 99
        if (CoreExtension::inFilter("birthday", ($context["r"] ?? null))) {
            // line 100
            yield "                                <div class=\"row\">
                                    <div class=\"col-md-7 mb-3\">
                                        <label for=\"birthday\" class=\"visually-hidden\">";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Birthday"), "html", null, true);
            yield "</label>
                                        <input class=\"form-control form-control-sm\" type=\"date\" name=\"birthday\" id=\"birthday\"
                                               placeholder=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Birthday"), "html", null, true);
            yield "\">
                                    </div>
                                </div>
                            ";
        }
        // line 108
        yield "
                            ";
        // line 109
        if (CoreExtension::inFilter("gender", ($context["r"] ?? null))) {
            // line 110
            yield "                                <div class=\"row\">
                                    <div class=\"col-md-7 mb-3\">
                                        <label for=\"gender\" class=\"visually-hidden\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("You are"), "html", null, true);
            yield "</label>
                                        <select class=\"form-select form-select-sm\" name=\"gender\" id=\"gender\">
                                            <option value=\"male\">Male</option>
                                            <option value=\"female\">Female</option>
                                            <option value=\"nonbinary\">Non-binary</option>
                                            <option value=\"other\">Other</option>
                                        </select>
                                    </div>
                                </div>
                            ";
        }
        // line 122
        yield "
                            <div class=\"row\">
                                <div class=\"col-md-7 mb-3\">
                                    <label for=\"reg-password\" class=\"visually-hidden\">";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Password"), "html", null, true);
        yield "</label>
                                    <input class=\"form-control form-control-sm\" type=\"password\" name=\"password\" id=\"reg-password\"
                                           required=\"required\"
                                           placeholder=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Password"), "html", null, true);
        yield "\">
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-7 mb-3\">
                                    <label for=\"password-confirm\" class=\"visually-hidden\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Confirm password"), "html", null, true);
        yield "</label>
                                    <input class=\"form-control form-control-sm\" type=\"password\" name=\"password_confirm\" id=\"password-confirm\"
                                           required=\"required\"
                                           placeholder=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Confirm password"), "html", null, true);
        yield "\">
                                </div>
                            </div>

                            ";
        // line 141
        if (CoreExtension::inFilter("address_1", ($context["r"] ?? null))) {
            // line 142
            yield "                            <div class=\"row\">
                                <div class=\"col-md-7 mb-3\">
                                    <label for=\"address_1\" class=\"visually-hidden\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Address"), "html", null, true);
            yield "</label>
                                    <input class=\"form-control form-control-sm\" type=\"text\" name=\"address_1\" id=\"address_1\"
                                           value=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "address_1", [], "any", false, false, false, 146), "html", null, true);
            yield "\"
                                           placeholder=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Address"), "html", null, true);
            yield "\">
                                </div>
                            </div>
                            ";
        }
        // line 151
        yield "
                            ";
        // line 152
        if (CoreExtension::inFilter("address_2", ($context["r"] ?? null))) {
            // line 153
            yield "                            <div class=\"row\">
                                <div class=\"col-md-7 mb-3\">
                                    <label for=\"address_2\" class=\"visually-hidden\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Address 2"), "html", null, true);
            yield "</label>
                                    <input class=\"form-control form-control-sm\" type=\"text\" name=\"address_2\" id=\"address_2\"
                                           value=\"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "address_1", [], "any", false, false, false, 157), "html", null, true);
            yield "\"
                                           placeholder=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Address 2"), "html", null, true);
            yield "\">
                                </div>
                            </div>
                            ";
        }
        // line 162
        yield "
                            ";
        // line 163
        if (CoreExtension::inFilter("city", ($context["r"] ?? null))) {
            // line 164
            yield "                                <div class=\"row\">
                                    <div class=\"col-md-7 mb-3\">
                                        <label for=\"city\" class=\"visually-hidden\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("City"), "html", null, true);
            yield "</label>
                                        <input class=\"form-control form-control-sm\" type=\"text\" name=\"city\" id=\"city\"
                                               value=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", false, false, false, 168), "html", null, true);
            yield "\"
                                               placeholder=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("City"), "html", null, true);
            yield "\">
                                    </div>
                                </div>
                            ";
        }
        // line 173
        yield "
                            ";
        // line 174
        if (CoreExtension::inFilter("country", ($context["r"] ?? null))) {
            // line 175
            yield "                                <div class=\"row\">
                                    <div class=\"col-md-7 mb-3\">
                                        <label for=\"country\" class=\"visually-hidden\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Country"), "html", null, true);
            yield "</label>
                                        <select class=\"form-select form-select-sm\" name=\"country\" id=\"country\"
                                                required=\"required\">
                                            <option value=\"\">";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("-- Select country --"), "html", null, true);
            yield "</option>
                                            ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 181));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 182
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\" label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"]);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"]);
                yield "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            yield "                                        </select>
                                    </div>
                                </div>
                            ";
        }
        // line 188
        yield "
                            ";
        // line 189
        if (CoreExtension::inFilter("state", ($context["r"] ?? null))) {
            // line 190
            yield "                                <div class=\"row\">
                                    <div class=\"col-md-7 mb-3\">
                                        <label for=\"state\" class=\"visually-hidden\">";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("State"), "html", null, true);
            yield "</label>
                                        <input class=\"form-control form-control-sm\" type=\"text\" name=\"state\" id=\"state\"
                                               value=\"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", false, false, false, 194), "html", null, true);
            yield "\"
                                               placeholder=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("State"), "html", null, true);
            yield "\">
                                    </div>
                                </div>
                            ";
        }
        // line 199
        yield "
                            ";
        // line 200
        if (CoreExtension::inFilter("postcode", ($context["r"] ?? null))) {
            // line 201
            yield "                                <div class=\"row\">
                                    <div class=\"col-md-7 mb-3\">
                                        <label for=\"postcode\" class=\"visually-hidden\">";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Zip/Postal Code"), "html", null, true);
            yield "</label>
                                        <input class=\"form-control form-control-sm\" type=\"text\" name=\"postcode\" id=\"postcode\"
                                               value=\"";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", false, false, false, 205), "html", null, true);
            yield "\"
                                               placeholder=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Zip/Postal Code"), "html", null, true);
            yield "\">
                                    </div>
                                </div>
                            ";
        }
        // line 210
        yield "
                            ";
        // line 211
        if (CoreExtension::inFilter("phone", ($context["r"] ?? null))) {
            // line 212
            yield "                                <div class=\"row\">
                                    <div class=\"col-md-7 mb-3\">
                                        <label for=\"phone\" class=\"visually-hidden\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Phone Number"), "html", null, true);
            yield "</label>
                                        <label for=\"phone_cc\" class=\"visually-hidden\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Phone Code"), "html", null, true);
            yield "</label>
                                        <div class=\"input-group\">
                                            <input class=\"form-control form-control-sm w-25\" type=\"text\" name=\"phone_cc\" id=\"phone_cc\"
                                                   placeholder=\"";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Phone Code"), "html", null, true);
            yield "\">
                                            <input class=\"form-control form-control-sm w-50\" type=\"text\" name=\"phone\" id=\"phone\"
                                                   placeholder=\"";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Phone Number"), "html", null, true);
            yield "\">
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 225
        yield "
                            ";
        // line 226
        $context["custom_fields"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "client_custom_fields", [], "any", false, false, false, 226);
        // line 227
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 228
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "active", [], "any", false, false, false, 228)) {
                // line 229
                yield "                                    <div class=\"row\">
                                        <div class=\"col-md-7 mb-3\">
                                            <label class=\"visually-hidden\" for=\"";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                yield "\">";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 231))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 231), "html", null, true);
                } else {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["field_name"]), "html", null, true);
                    yield " ";
                }
                yield "</label>
                                            <input class=\"form-control form-control-sm\" type=\"text\" name=\"";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["field_name"], "html", null, true);
                yield "\"
                                                   value=\"";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), $context["field_name"], [], "any", false, false, false, 233), "html", null, true);
                yield "\"
                                                   ";
                // line 234
                if (CoreExtension::getAttribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 234)) {
                    yield "required=\"required\"";
                }
                // line 235
                yield "                                                   placeholder=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["field_name"]), "html", null, true);
                yield "\">
                                        </div>
                                    </div>
                                ";
            }
            // line 239
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        yield "                            ";
        yield CoreExtension::callMacro($macros["mf"], "macro_recaptcha", [], 240, $context, $this->getSourceContext());
        yield "
                            ";
        // line 241
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "signup_tos", [], "any", false, false, false, 241) == "explicit")) {
            // line 242
            yield "                                <div class=\"form-check mb-1\">
                                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\" required>
                                    <label class=\"form-check-label\" for=\"flexCheckDefault\">
                                        ";
            // line 246
            yield "                                        <span>I agree to the <a href=\"";
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/tos");
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("terms of service"), "html", null, true);
            yield "</a> and <a href=\"";
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/privacy-policy");
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("privacy policy"), "html", null, true);
            yield ".</span>
                                    </label>
                                </div>
                            ";
        }
        // line 250
        yield "                            <div class=\"d-flex gap-2\">
                                <button class=\"btn btn-sm btn-primary\" type=\"submit\">";
        // line 251
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Sign up"), "html", null, true);
        yield "</button>
                                <button class=\"btn btn-sm btn-link active\" id=\"in-tab\" data-bs-toggle=\"tab\"
                                        data-bs-target=\"#sign-in\" type=\"button\" role=\"tab\"
                                        aria-controls=\"sign-in\"
                                        aria-selected=\"true\">";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Already a user?"), "html", null, true);
        yield "
                                </button>
                            </div>
                            ";
        // line 258
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "signup_tos", [], "any", false, false, false, 258) == "implicit")) {
            // line 259
            yield "                                <div class=\"mb-1\">
                                    ";
            // line 261
            yield "                                    <span class=\"text-muted mb-1\">By creating an account, you agree to our <a href=\"";
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/tos");
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("terms of service"), "html", null, true);
            yield "</a> and <a href=\"";
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/privacy-policy");
            yield "\" target=\"_blank\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("privacy policy"), "html", null, true);
            yield "</a>.</span>
                                </div>
                            ";
        }
        // line 264
        yield "                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_orderbutton_client.html.twig";
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
        return array (  629 => 264,  616 => 261,  613 => 259,  611 => 258,  605 => 255,  598 => 251,  595 => 250,  581 => 246,  576 => 242,  574 => 241,  569 => 240,  563 => 239,  555 => 235,  551 => 234,  547 => 233,  541 => 232,  529 => 231,  525 => 229,  522 => 228,  517 => 227,  515 => 226,  512 => 225,  504 => 220,  499 => 218,  493 => 215,  489 => 214,  485 => 212,  483 => 211,  480 => 210,  473 => 206,  469 => 205,  464 => 203,  460 => 201,  458 => 200,  455 => 199,  448 => 195,  444 => 194,  439 => 192,  435 => 190,  433 => 189,  430 => 188,  424 => 184,  411 => 182,  407 => 181,  403 => 180,  397 => 177,  393 => 175,  391 => 174,  388 => 173,  381 => 169,  377 => 168,  372 => 166,  368 => 164,  366 => 163,  363 => 162,  356 => 158,  352 => 157,  347 => 155,  343 => 153,  341 => 152,  338 => 151,  331 => 147,  327 => 146,  322 => 144,  318 => 142,  316 => 141,  309 => 137,  303 => 134,  294 => 128,  288 => 125,  283 => 122,  270 => 112,  266 => 110,  264 => 109,  261 => 108,  254 => 104,  249 => 102,  245 => 100,  243 => 99,  240 => 98,  233 => 94,  229 => 93,  223 => 90,  219 => 88,  217 => 87,  214 => 86,  207 => 82,  203 => 81,  197 => 78,  193 => 76,  191 => 75,  184 => 71,  180 => 70,  174 => 67,  165 => 61,  161 => 60,  155 => 57,  151 => 55,  149 => 54,  145 => 53,  141 => 52,  133 => 47,  126 => 43,  118 => 38,  114 => 37,  110 => 36,  104 => 33,  98 => 30,  94 => 29,  90 => 28,  84 => 25,  78 => 22,  74 => 21,  62 => 14,  56 => 11,  45 => 5,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_client.html.twig", "C:\\xampp\\htdocs\\modules\\Orderbutton\\html_client/mod_orderbutton_client.html.twig");
    }
}
