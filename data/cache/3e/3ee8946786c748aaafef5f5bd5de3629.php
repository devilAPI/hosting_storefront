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

/* mod_index_dashboard.html.twig */
class __TwigTemplate_25e571c06efb5f3f1fbeabd32f9b5381 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_index_dashboard.html.twig", 3)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("layout_default.html.twig", "mod_index_dashboard.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Dashboard"), "html", null, true);
        return; yield '';
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "system_cas_messages", [], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 9
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "type", [], "any", false, false, false, 9), "html", null, true);
            yield " ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "dismissible", [], "any", false, false, false, 9)) ? ("alert-dismissible") : (""));
            yield "\" role=\"alert\">
        <h3 class=\"mb-1\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "title", [], "any", false, false, false, 10), "html", null, true);
            yield "</h3>
        <p>";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "message", [], "any", false, false, false, 11), "html", null, true);
            yield "</p>
        ";
            // line 12
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "buttons", [], "any", false, false, false, 12)) > 0)) {
                // line 13
                yield "            <div class=\"btn-list\">
            ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "buttons", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 15
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "link", [], "any", false, false, false, 15), "html", null, true);
                    yield "\" class=\"btn ";
                    ((CoreExtension::getAttribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 15)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("btn-" . CoreExtension::getAttribute($this->env, $this->source, $context["button"], "type", [], "any", false, false, false, 15)), "html", null, true)) : (yield ""));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["button"], "text", [], "any", false, false, false, 15), "html", null, true);
                    yield "</a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                yield "            </div>
        ";
            }
            // line 19
            yield "        ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["alert"], "dismissible", [], "any", false, false, false, 19)) {
                // line 20
                yield "            <a class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"close\"></a>
        ";
            }
            // line 22
            yield "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "system_messages", [["type" => "danger"]], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 25
            yield "    <div class=\"alert alert-danger alert-dismissible fade show mb-3\" role=\"alert\">
        <strong>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Danger!"), "html", null, true);
            yield "</strong> ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 26))) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 26), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 26), "html", null, true);
                yield "</a>";
            } else {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 26), "html", null, true);
                yield " ";
            }
            // line 27
            yield "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "system_messages", [["type" => "warning"]], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 31
            yield "    <div class=\"alert alert-warning alert-dismissible fade show mb-3\" role=\"alert\">
        <strong>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Warning"), "html", null, true);
            yield ":</strong> ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 32))) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 32), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 32), "html", null, true);
                yield "</a>";
            } else {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 32), "html", null, true);
                yield " ";
            }
            // line 33
            yield "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "system_messages", [["type" => "info"]], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 37
            yield "    <div class=\"alert alert-primary alert-dismissible fade show mb-3\" role=\"alert\">
        <strong>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Information"), "html", null, true);
            yield ":</strong> ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 38))) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "url", [], "any", false, false, false, 38), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 38), "html", null, true);
                yield "</a>";
            } else {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["msg"], "text", [], "any", false, false, false, 38), "html", null, true);
                yield " ";
            }
            // line 39
            yield "        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "
<div class=\"row row-deck row-cards\">
    ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "stats"]], "method", false, false, false, 44)) {
            // line 45
            yield "        ";
            $context["stats"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_summary", [], "any", false, false, false, 45);
            // line 46
            yield "        ";
            $context["income"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_summary_income", [], "any", false, false, false, 46);
            // line 47
            yield "        ";
            $context["client_statuses"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "client_get_statuses", [], "any", false, false, false, 47);
            // line 48
            yield "        ";
            $context["order_statuses"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_statuses", [], "any", false, false, false, 48);
            // line 49
            yield "        ";
            $context["invoice_statuses"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_get_statuses", [], "any", false, false, false, 49);
            // line 50
            yield "        ";
            $context["support_statuses"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "support_ticket_get_statuses", [], "any", false, false, false, 50);
            // line 51
            yield "
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 53
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            yield "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["client_statuses"] ?? null), "suspended", [], "any", false, false, false, 55) > 0)) {
                // line 56
                yield "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client_statuses"] ?? null), "suspended", [], "any", false, false, false, 56), "html", null, true);
                yield "</span>
                    ";
            }
            // line 58
            yield "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-blue text-white avatar\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#contacts\" />
                                </svg>
                            </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "clients_total", [], "any", false, false, false, 67), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("clients"), "html", null, true);
            yield "</div>
                            <div class=\"text-muted\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["client_statuses"] ?? null), "suspended", [], "any", false, false, false, 68), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("suspended"), "html", null, true);
            yield "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 75
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            yield "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 77
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["order_statuses"] ?? null), "suspended", [], "any", false, false, false, 77) > 0)) {
                // line 78
                yield "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order_statuses"] ?? null), "suspended", [], "any", false, false, false, 78), "html", null, true);
                yield "</span>
                    ";
            }
            // line 80
            yield "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                        <span class=\"bg-green text-white avatar\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#orders\" />
                            </svg>
                        </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "orders_total", [], "any", false, false, false, 89), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("orders"), "html", null, true);
            yield "</div>
                            <div class=\"text-muted\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["order_statuses"] ?? null), "suspended", [], "any", false, false, false, 90), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("suspended"), "html", null, true);
            yield "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 97
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            yield "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 99
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["invoice_statuses"] ?? null), "unpaid", [], "any", false, false, false, 99) > 0)) {
                // line 100
                yield "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["invoice_statuses"] ?? null), "unpaid", [], "any", false, false, false, 100), "html", null, true);
                yield "</span>
                    ";
            }
            // line 102
            yield "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                            <span class=\"bg-danger text-white avatar\">
                                <svg class=\"icon\">
                                    <use xlink:href=\"#currency-dollar\" />
                                </svg>
                            </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_total", [], "any", false, false, false, 111), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("invoices"), "html", null, true);
            yield "</div>
                            <div class=\"text-muted\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["invoice_statuses"] ?? null), "unpaid", [], "any", false, false, false, 112), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("unpaid"), "html", null, true);
            yield "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <a href=\"";
            // line 119
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            yield "\" class=\"card card-sm\">
                <div class=\"card-body\">
                    ";
            // line 121
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["support_statuses"] ?? null), "open", [], "any", false, false, false, 121) > 0)) {
                // line 122
                yield "                    <span class=\"position-absolute top-0 translate-middle badge rounded-pill bg-danger text-light\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["support_statuses"] ?? null), "open", [], "any", false, false, false, 122), "html", null, true);
                yield "</span>
                    ";
            }
            // line 124
            yield "                    <div class=\"row align-items-center\">
                        <div class=\"col-auto\">
                        <span class=\"bg-warning text-white avatar\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#support\" />
                            </svg>
                        </span>
                        </div>
                        <div class=\"col\">
                            <div class=\"font-weight-medium\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_total", [], "any", false, false, false, 133), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("tickets"), "html", null, true);
            yield "</div>
                            <div class=\"text-muted\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["support_statuses"] ?? null), "open", [], "any", false, false, false, 134), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("waiting for staff reply"), "html", null, true);
            yield "</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

        <div class=\"col-12\">
            <div class=\"card overflow-x-auto\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Statistics"), "html", null, true);
            yield "</h3>
                </div>
                <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <thead>
                        <tr>
                            <th></th>
                            <th class=\"text-center\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Today"), "html", null, true);
            yield "</th>
                            <th class=\"text-center\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Yesterday"), "html", null, true);
            yield "</th>
                            <th class=\"text-center\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("This month so far"), "html", null, true);
            yield "</th>
                            <th class=\"text-center\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Last month"), "html", null, true);
            yield "</th>
                            <th class=\"text-center\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Total"), "html", null, true);
            yield "</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Income"), "html", null, true);
            yield "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 162
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["paid_at" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]);
            yield "\" class=\"text-danger\">";
            yield CoreExtension::callMacro($macros["mf"], "macro_currency_format", [CoreExtension::getAttribute($this->env, $this->source, ($context["income"] ?? null), "today", [], "any", false, false, false, 162)], 162, $context, $this->getSourceContext());
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 165
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["paid_at" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("yesterday", "Y-m-d")]);
            yield "\" class=\"text-danger\">";
            yield CoreExtension::callMacro($macros["mf"], "macro_currency_format", [CoreExtension::getAttribute($this->env, $this->source, ($context["income"] ?? null), "yesterday", [], "any", false, false, false, 165)], 165, $context, $this->getSourceContext());
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 168
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            yield "\" class=\"text-danger\">";
            yield CoreExtension::callMacro($macros["mf"], "macro_currency_format", [CoreExtension::getAttribute($this->env, $this->source, ($context["income"] ?? null), "this_month", [], "any", false, false, false, 168)], 168, $context, $this->getSourceContext());
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 171
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            yield "\" class=\"text-danger\">";
            yield CoreExtension::callMacro($macros["mf"], "macro_currency_format", [CoreExtension::getAttribute($this->env, $this->source, ($context["income"] ?? null), "last_month", [], "any", false, false, false, 171)], 171, $context, $this->getSourceContext());
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 174
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            yield "\" class=\"text-danger\">";
            yield CoreExtension::callMacro($macros["mf"], "macro_currency_format", [CoreExtension::getAttribute($this->env, $this->source, ($context["income"] ?? null), "total", [], "any", false, false, false, 174)], 174, $context, $this->getSourceContext());
            yield "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Clients"), "html", null, true);
            yield "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 180
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["created_at" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]);
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "clients_today", [], "any", false, false, false, 180), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 183
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client", ["created_at" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("yesterday", "Y-m-d")]);
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "clients_yesterday", [], "any", false, false, false, 183), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 186
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "clients_this_month", [], "any", false, false, false, 186), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 189
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "clients_last_month", [], "any", false, false, false, 189), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 192
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "clients_total", [], "any", false, false, false, 192), "html", null, true);
            yield "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Orders"), "html", null, true);
            yield "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 198
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["created_at" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]);
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "orders_today", [], "any", false, false, false, 198), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 201
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order", ["created_at" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("yesterday", "Y-m-d")]);
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "orders_yesterday", [], "any", false, false, false, 201), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 204
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "orders_this_month", [], "any", false, false, false, 204), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 207
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "orders_last_month", [], "any", false, false, false, 207), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 210
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "orders_total", [], "any", false, false, false, 210), "html", null, true);
            yield "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Invoices"), "html", null, true);
            yield "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 216
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["created_at" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]);
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_today", [], "any", false, false, false, 216), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 219
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice", ["created_at" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("yesterday", "Y-m-d")]);
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_yesterday", [], "any", false, false, false, 219), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 222
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_this_month", [], "any", false, false, false, 222), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 225
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_last_month", [], "any", false, false, false, 225), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 228
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "invoices_total", [], "any", false, false, false, 228), "html", null, true);
            yield "</a>
                            </td>
                        </tr>
                        <tr>
                            <td>";
            // line 232
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Tickets"), "html", null, true);
            yield "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 234
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["created_at" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d")]);
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_today", [], "any", false, false, false, 234), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 237
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support", ["created_at" => $this->extensions['Twig\Extension\CoreExtension']->formatDate("yesterday", "Y-m-d")]);
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_yesterday", [], "any", false, false, false, 237), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 240
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_this_month", [], "any", false, false, false, 240), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 243
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_last_month", [], "any", false, false, false, 243), "html", null, true);
            yield "</a>
                            </td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 246
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("support");
            yield "\" class=\"text-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["stats"] ?? null), "tickets_total", [], "any", false, false, false, 246), "html", null, true);
            yield "</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    ";
        }
        // line 255
        yield "
    ";
        // line 256
        $context["invoicesUnpaid"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 256);
        // line 257
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["invoicesUnpaid"] ?? null), "list", [], "any", false, false, false, 257)) > 0)) {
            // line 258
            yield "    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Invoices"), "html", null, true);
            yield "</h3>
                <div class=\"card-actions\">
                    <a href=\"";
            // line 263
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice");
            yield "\" class=\"btn-action\">
                        <svg class=\"icon\">
                            <use xlink:href=\"#dots-vertical\" />
                        </svg>
                    </a>
                </div>
            </div>

            <div class=\"table-responsive\">
                <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                    <tbody>
                        ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["invoicesUnpaid"] ?? null), "list", [], "any", false, false, false, 274));
            foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
                // line 275
                yield "                        <tr>
                            <td class=\"w-1\">
                                <a href=\"";
                // line 277
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/invoice/manage");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 277), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "serie_nr", [], "any", false, false, false, 277), "html", null, true);
                yield "</a>
                            </td>
                            <td class=\"w-1\">
                                <a href=\"";
                // line 280
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
                yield "/manage/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "client", [], "any", false, false, false, 280), "id", [], "any", false, false, false, 280), "html", null, true);
                yield "\">
                                    <span class=\"avatar avatar-xs\" style=\"background-image: url(";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_gravatar_filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 281), "email", [], "any", false, false, false, 281)), "html", null, true);
                yield "&size=24\"></span>
                                </a>
                            </td>
                            <td>
                                <a href=\"";
                // line 285
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client");
                yield "/manage/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "client", [], "any", false, false, false, 285), "id", [], "any", false, false, false, 285), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 285), "first_name", [], "any", false, false, false, 285), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "buyer", [], "any", false, false, false, 285), "last_name", [], "any", false, false, false, 285), "html", null, true);
                yield "</a>
                            </td>
                            <td class=\"text-center\">";
                // line 287
                yield CoreExtension::callMacro($macros["mf"], "macro_currency_format", [CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "total", [], "any", false, false, false, 287), CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "currency", [], "any", false, false, false, 287)], 287, $context, $this->getSourceContext());
                yield "</td>
                            <td class=\"text-center\">";
                // line 288
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "created_at", [], "any", false, false, false, 288)), "html", null, true);
                yield "</td>
                            <td>
                                ";
                // line 290
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 290) == "paid")) {
                    // line 291
                    yield "                                    <span class=\"badge bg-success me-1\"></span>
                                ";
                }
                // line 293
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 293) == "unpaid")) {
                    // line 294
                    yield "                                    <span class=\"badge bg-danger me-1\"></span>
                                ";
                }
                // line 296
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 296) == "refunded")) {
                    // line 297
                    yield "                                    <span class=\"badge bg-warning me-1\"></span>
                                ";
                }
                // line 299
                yield "                                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 299) == "canceled")) {
                    // line 300
                    yield "                                    <span class=\"badge bg-secondary me-1\"></span>
                                ";
                }
                // line 302
                yield "                                ";
                yield CoreExtension::callMacro($macros["mf"], "macro_status_name", [CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "status", [], "any", false, false, false, 302)], 302, $context, $this->getSourceContext());
                yield "
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 306
            yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    ";
        }
        // line 312
        yield "
    ";
        // line 313
        $context["orders"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "order_get_list", [["per_page" => "5", "status" => "active"]], "method", false, false, false, 313);
        // line 314
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 314)) > 0)) {
            // line 315
            yield "        <div class=\"col-lg-6\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\">";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Latest orders"), "html", null, true);
            yield "</h3>
                    <span class=\"ms-2 badge bg-success\">
                        <a href=\"";
            // line 320
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order");
            yield "\" class=\"text-white\">+";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["orders"] ?? null), "total", [], "any", false, false, false, 320), "html", null, true);
            yield "</a>
                    </span>
                    <div class=\"card-actions\">
                        <a href=\"";
            // line 323
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/order");
            yield "\" class=\"btn-action\">
                            <svg class=\"icon\">
                                <use xlink:href=\"#dots-vertical\" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class=\"table-responsive\">
                    <table class=\"table card-table table-vcenter table-striped text-nowrap\">
                        <tbody>
                        ";
            // line 334
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["orders"] ?? null), "list", [], "any", false, false, false, 334));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 335
                yield "                            <tr title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_timeago_filter(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "created_at", [], "any", false, false, false, 335)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("ago"), "html", null, true);
                yield "\">
                                <td>
                                    <a href=\"";
                // line 337
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "client_id", [], "any", false, false, false, 337), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 337), "first_name", [], "any", false, false, false, 337), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "client", [], "any", false, false, false, 337), "last_name", [], "any", false, false, false, 337), "html", null, true);
                yield "</a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 340
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("order/manage");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 340), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 340), 35), "html", null, true);
                yield "</a>
                                </td>
                            </tr>
                        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 344
                yield "                        <tr>
                            <td colspan=\"2\" align=\"center\">";
                // line 345
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("The list is empty"), "html", null, true);
                yield "</td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        ";
            // line 385
            yield "    ";
        }
        // line 386
        yield "
    ";
        // line 387
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "stats"]], "method", false, false, false, 387)) {
            // line 388
            yield "    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h5>";
            // line 391
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Define date interval for graphs"), "html", null, true);
            yield "</h5>
                <form method=\"get\" action=\"\">
                    <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
            yield "\"/>
                    <input type=\"hidden\" name=\"_url\" value=\"";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 394), "html", null, true);
            yield "\">
                    <div class=\"input-group\">
                        <div class=\"input-icon\">
                            <input class=\"form-control datepicker\"
                                   style=\"width: 16rem\"
                                   id=\"graph_interval\"
                                   value=\"";
            // line 400
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 400)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 400), "Y-m-d"), "html", null, true);
            }
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 400)) {
                yield " to ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 400), "Y-m-d"), "html", null, true);
            }
            yield "\"
                                   data-name-from=\"date_from\"
                                   data-name-to=\"date_to\"
                            >
                            <span class=\"input-icon-addon\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" stroke-width=\"2\" stroke=\"currentColor\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                    <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"></path>
                                    <path d=\"M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z\"></path>
                                    <path d=\"M16 3l0 4\"></path>
                                    <path d=\"M8 3l0 4\"></path>
                                    <path d=\"M4 11l16 0\"></path>
                                    <path d=\"M11 15l1 0\"></path>
                                    <path d=\"M12 15l0 3\"></path>
                                </svg>
                            </span>
                        </div>
                        <input type=\"submit\" value=\"";
            // line 416
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Update graphs"), "html", null, true);
            yield "\" class=\"btn btn-primary\">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h3 class=\"card-title\">";
            // line 426
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Income"), "html", null, true);
            yield "</h3>
            </div>
            <div id=\"chart-income\" style=\"width: 100%; height: 200px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 435
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Orders"), "html", null, true);
            yield "</div>
            </div>
            <div id=\"chart-orders\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Invoices"), "html", null, true);
            yield "</div>
            </div>
            <div id=\"chart-invoices\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 453
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Clients"), "html", null, true);
            yield "</div>
            </div>
            <div id=\"chart-clients\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>

    <div class=\"col-sm-6 col-lg-3\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"subheader\">";
            // line 462
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Tickets"), "html", null, true);
            yield "</div>
            </div>
            <div id=\"chart-tickets\" class=\"chart-sm\" style=\"min-height: 40px;\"></div>
        </div>
    </div>
    ";
        }
        // line 468
        yield "
    ";
        // line 469
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "activity"]], "method", false, false, false, 469)) {
            // line 470
            yield "    <div class=\"col-12 d-block\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link active\" href=\"#tab-index\" role=\"tab\" data-bs-toggle=\"tab\">";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Recent clients activity"), "html", null, true);
            yield "</a>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
                <a class=\"nav-link\" href=\"#tab-staff\" role=\"tab\" data-bs-toggle=\"tab\">";
            // line 476
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Recent staff activity"), "html", null, true);
            yield "</a>
            </li>
        </ul>

        <div class=\"card\">
            <div class=\"tab-content\" id=\"tabs\">
                <div class=\"tab-pane fade show active\" id=\"tab-index\" role=\"tabpanel\">
                    <table class=\"table table-vcenter card-table table-striped\">
                        <tbody>
                            ";
            // line 485
            $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "activity_log_get_list", [["per_page" => 10, "only_clients" => 1]], "method", false, false, false, 485);
            // line 486
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 486));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 487
                yield "                            <tr>
                                <td class=\"w-1\">
                                    <a href=\"";
                // line 489
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 489), "id", [], "any", false, false, false, 489), "html", null, true);
                yield "\">
                                        <span class=\"avatar avatar-xs\" style=\"background-image: url(";
                // line 490
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_gravatar_filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 490), "email", [], "any", false, false, false, 490)), "html", null, true);
                yield "&size=24\"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 494
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("client/manage");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 494), "id", [], "any", false, false, false, 494), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "client", [], "any", false, false, false, 494), "name", [], "any", false, false, false, 494), 40), "html", null, true);
                yield "</a>
                                </td>
                                <td>";
                // line 496
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 496), 50), "html", null, true);
                yield "</td>
                                <td>";
                // line 497
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 497)), "html", null, true);
                yield "</td>
                                <td>";
                // line 498
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_timeago_filter(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 498)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("ago"), "html", null, true);
                yield "</td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 501
                yield "                            <tr>
                                <td class=\"text-muted\" colspan=\"4\">";
                // line 502
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("The list is empty"), "html", null, true);
                yield "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 505
            yield "                        </tbody>
                    </table>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-staff\" role=\"tabpanel\">
                    <table class=\"table table-vcenter card-table table-striped\">
                        <tbody>
                            ";
            // line 512
            $context["events"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "activity_log_get_list", [["per_page" => 10, "only_staff" => 1]], "method", false, false, false, 512);
            // line 513
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["events"] ?? null), "list", [], "any", false, false, false, 513));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 514
                yield "                            <tr>
                                <td class=\"w-1\">
                                    <a href=\"";
                // line 516
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 516), "id", [], "any", false, false, false, 516), "html", null, true);
                yield "\">
                                        <span class=\"avatar avatar-xs\" style=\"background-image: url(";
                // line 517
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_gravatar_filter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 517), "email", [], "any", false, false, false, 517)), "html", null, true);
                yield "&size=24\"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href=\"";
                // line 521
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/manage");
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 521), "id", [], "any", false, false, false, 521), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "staff", [], "any", false, false, false, 521), "name", [], "any", false, false, false, 521), "html", null, true);
                yield "</a>
                                </td>
                                <td>";
                // line 523
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "message", [], "any", false, false, false, 523), 50), "html", null, true);
                yield "</td>
                                <td>";
                // line 524
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 524)), "html", null, true);
                yield "</td>
                                <td>";
                // line 525
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_timeago_filter(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "created_at", [], "any", false, false, false, 525)), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("ago"), "html", null, true);
                yield "</td>
                            </tr>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 528
                yield "                            <tr>
                                <td class=\"text-muted\" colspan=\"4\">";
                // line 529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("The list is empty"), "html", null, true);
                yield "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 532
            yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 539
        yield "</div>
";
        return; yield '';
    }

    // line 542
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 543
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "system_is_allowed", [["mod" => "stats"]], "method", false, false, false, 543)) {
            // line 544
            yield "        <script>
            \$(function() {
                setPlotDataData('chart-income', ";
            // line 546
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_income", [["date_from" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 546), "date_to" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 546)]], "method", false, false, false, 546)), "html", null, true);
            yield ", \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Income"), "html", null, true);
            yield "\" );
                setPlotDataData('chart-orders', ";
            // line 547
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_orders", [["date_from" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 547), "date_to" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 547)]], "method", false, false, false, 547)), "html", null, true);
            yield ", \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Orders"), "html", null, true);
            yield "\" );
                setPlotDataData('chart-invoices', ";
            // line 548
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_invoices", [["date_from" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 548), "date_to" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 548)]], "method", false, false, false, 548)), "html", null, true);
            yield ",\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Invoices"), "html", null, true);
            yield "\" );
                setPlotDataData('chart-clients', ";
            // line 549
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_clients", [["date_from" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 549), "date_to" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 549)]], "method", false, false, false, 549)), "html", null, true);
            yield ", \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Clients"), "html", null, true);
            yield "\" );
                setPlotDataData('chart-tickets', ";
            // line 550
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_tickets", [["date_from" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_from", [], "any", false, false, false, 550), "date_to" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "date_to", [], "any", false, false, false, 550)]], "method", false, false, false, 550)), "html", null, true);
            yield ", \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Tickets"), "html", null, true);
            yield "\");
            });

            function setPlotDataData(elementId, data, displayName=\"Name Placeholder\") {
                new ApexCharts(document.getElementById(elementId), {
                    chart: {
                        type: 'area',
                        fontFamily: 'inherit',
                        height: 140,
                        parentHeightOffset: 0,
                        toolbar: {
                            show: false,
                        },
                        animations: {
                            enabled: false
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    fill: {
                        opacity: .16,
                        type: 'solid'
                    },
                    stroke: {
                        width: 2,
                        lineCap: \"round\",
                        curve: \"smooth\",
                    },
                    series: [{
                        name: displayName,
                        data: data
                    }],
                    grid: {
                        padding: {
                            top: -20,
                            right: 0,
                            left: -4,
                            bottom: -4
                        },
                        strokeDashArray: 4,
                    },
                    xaxis: {
                        labels: {
                            show: false
                        },
                        type: 'datetime',
                    },
                    yaxis: {
                        labels: {
                            show: false
                        },
                    },
                    labels: {
                        show: false,
                    },
                    colors:  (localStorage.getItem('theme') === 'dark') ? [\"#91bbed\"] : [\"#206bc4\"] ,
                    theme : {
                        mode: (localStorage.getItem('theme') === 'dark') ? 'dark' : 'light',
                        monochrome: {
                            enabled: false,
                        }
                    }
                }).render();
            }
        </script>
    ";
        }
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_index_dashboard.html.twig";
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
        return array (  1250 => 550,  1244 => 549,  1238 => 548,  1232 => 547,  1226 => 546,  1222 => 544,  1219 => 543,  1215 => 542,  1209 => 539,  1200 => 532,  1191 => 529,  1188 => 528,  1178 => 525,  1174 => 524,  1170 => 523,  1161 => 521,  1154 => 517,  1148 => 516,  1144 => 514,  1138 => 513,  1136 => 512,  1127 => 505,  1118 => 502,  1115 => 501,  1105 => 498,  1101 => 497,  1097 => 496,  1088 => 494,  1081 => 490,  1075 => 489,  1071 => 487,  1065 => 486,  1063 => 485,  1051 => 476,  1045 => 473,  1040 => 470,  1038 => 469,  1035 => 468,  1026 => 462,  1014 => 453,  1002 => 444,  990 => 435,  978 => 426,  965 => 416,  940 => 400,  931 => 394,  927 => 393,  922 => 391,  917 => 388,  915 => 387,  912 => 386,  909 => 385,  901 => 348,  892 => 345,  889 => 344,  876 => 340,  864 => 337,  856 => 335,  851 => 334,  837 => 323,  829 => 320,  824 => 318,  819 => 315,  816 => 314,  814 => 313,  811 => 312,  803 => 306,  792 => 302,  788 => 300,  785 => 299,  781 => 297,  778 => 296,  774 => 294,  771 => 293,  767 => 291,  765 => 290,  760 => 288,  756 => 287,  745 => 285,  738 => 281,  732 => 280,  722 => 277,  718 => 275,  714 => 274,  700 => 263,  695 => 261,  690 => 258,  687 => 257,  685 => 256,  682 => 255,  668 => 246,  660 => 243,  652 => 240,  644 => 237,  636 => 234,  631 => 232,  622 => 228,  614 => 225,  606 => 222,  598 => 219,  590 => 216,  585 => 214,  576 => 210,  568 => 207,  560 => 204,  552 => 201,  544 => 198,  539 => 196,  530 => 192,  522 => 189,  514 => 186,  506 => 183,  498 => 180,  493 => 178,  484 => 174,  476 => 171,  468 => 168,  460 => 165,  452 => 162,  447 => 160,  439 => 155,  435 => 154,  431 => 153,  427 => 152,  423 => 151,  413 => 144,  398 => 134,  392 => 133,  381 => 124,  375 => 122,  373 => 121,  368 => 119,  356 => 112,  350 => 111,  339 => 102,  333 => 100,  331 => 99,  326 => 97,  314 => 90,  308 => 89,  297 => 80,  291 => 78,  289 => 77,  284 => 75,  272 => 68,  266 => 67,  255 => 58,  249 => 56,  247 => 55,  242 => 53,  238 => 51,  235 => 50,  232 => 49,  229 => 48,  226 => 47,  223 => 46,  220 => 45,  218 => 44,  214 => 42,  206 => 39,  192 => 38,  189 => 37,  184 => 36,  176 => 33,  162 => 32,  159 => 31,  154 => 30,  146 => 27,  132 => 26,  129 => 25,  124 => 24,  117 => 22,  113 => 20,  110 => 19,  106 => 17,  93 => 15,  89 => 14,  86 => 13,  84 => 12,  80 => 11,  76 => 10,  69 => 9,  64 => 8,  60 => 7,  52 => 5,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_index_dashboard.html.twig", "C:\\xampp\\htdocs\\themes\\admin_default\\html/mod_index_dashboard.html.twig");
    }
}
