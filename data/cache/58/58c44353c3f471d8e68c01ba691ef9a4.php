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
class __TwigTemplate_3dea64cdaf4bbe971ec489739ff0aaf8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'page_header' => [$this, 'block_page_header'],
            'body_class' => [$this, 'block_body_class'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_index_dashboard.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_index_dashboard.html.twig", 16)->unwrap();
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Client Area"), "html", null, true);
        return; yield '';
    }

    // line 4
    public function block_page_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Dashboard"), "html", null, true);
        return; yield '';
    }

    // line 6
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "dashboard";
        return; yield '';
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        yield "    ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "hide_dashboard_breadcrumb", [], "any", false, false, false, 8)) {
            // line 9
            yield "        <ul class=\"breadcrumb\">
            <li><a href=\"";
            // line 10
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Home"), "html", null, true);
            yield "</a> <span class=\"dropdown-divider\">/</span></li>
            <li class=\"active\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Dashboard"), "html", null, true);
            yield "</li>
        </ul>
    ";
        }
        return; yield '';
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_enabled", [], "any", false, false, false, 19)) {
            // line 20
            yield "        <div class=\"alert alert-info\" role=\"alert\">
            <p>";
            // line 21
            yield $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_text", [], "any", false, false, false, 21));
            yield "</p>

            ";
            // line 23
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_url", [], "any", false, false, false, 23) && CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_title", [], "any", false, false, false, 23))) {
                // line 24
                yield "                <a class=\"btn btn-primary btn-large\"
                   href=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_url", [], "any", false, false, false, 25), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "showcase_button_title", [], "any", false, false, false, 25), "html", null, true);
                yield "</a>
            ";
            }
            // line 27
            yield "        </div>
    ";
        }
        // line 29
        yield "
    ";
        // line 30
        if (($context["client"] ?? null)) {
            // line 31
            yield "        ";
            $context["tickets"] = CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 31);
            // line 32
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["tickets"] ?? null), "total", [], "any", false, false, false, 32) > 0)) {
                // line 33
                yield "            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["tickets"] ?? null), "list", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 36
                    yield "                        <div class=\"alert alert-info d-flex justify-content-between\" role=\"alert\">
                            <span>Ticket <strong>#";
                    // line 37
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 37), "html", null, true);
                    yield "</strong> was responded ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_timeago_filter(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 37)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("ago"), "html", null, true);
                    yield ".</span><a
                                href=\"";
                    // line 38
                    yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 38), "html", null, true);
                    yield "\"
                                class=\"alert-link\">";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Reply"), "html", null, true);
                    yield "</a>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield "                </div>
            </div>
        ";
            }
            // line 45
            yield "
        <div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Profile"), "html", null, true);
            yield "</span>
                            <div class=\"py-2\">
                                <a class=\"btn btn-sm btn-dark\"
                                   href=\"";
            // line 54
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/profile");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Update"), "html", null, true);
            yield "</a>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Client ID"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">#";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "id", [], "any", false, false, false, 60), "html", null, true);
            yield "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Email"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 62), "html", null, true);
            yield "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Balance"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 64
            yield $this->extensions['Box_TwigExtensions']->twig_money($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 64), CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 64));
            yield "</dd>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Invoices"), "html", null, true);
            yield "</span>
                            <div class=\"py-2\">
                                <a class=\"btn btn-sm btn-dark\"
                                   href=\"";
            // line 76
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("All Invoices"), "html", null, true);
            yield "</a>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Total"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [], "method", false, false, false, 82), "total", [], "any", false, false, false, 82), "html", null, true);
            yield "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Paid"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "paid"]], "method", false, false, false, 84), "total", [], "any", false, false, false, 84), "html", null, true);
            yield "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Unpaid"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "invoice_get_list", [["status" => "unpaid"]], "method", false, false, false, 86), "total", [], "any", false, false, false, 86), "html", null, true);
            yield "</dd>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Orders"), "html", null, true);
            yield "</span>
                            <div class=\"py-2\">
                                <a class=\"btn btn-sm btn-primary order-button\"
                                   href=\"";
            // line 100
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("New order"), "html", null, true);
            yield "</a>
                                <a class=\"btn btn-sm btn-dark\"
                                   href=\"";
            // line 102
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("All orders"), "html", null, true);
            yield "</a>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Total"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["hide_addons" => 1]], "method", false, false, false, 108), "total", [], "any", false, false, false, 108), "html", null, true);
            yield "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Active"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["hide_addons" => 1, "status" => "active"]], "method", false, false, false, 110), "total", [], "any", false, false, false, 110), "html", null, true);
            yield "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Expiring"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["expiring" => 1]], "method", false, false, false, 112), "total", [], "any", false, false, false, 112), "html", null, true);
            yield "</dd>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Tickets"), "html", null, true);
            yield "</span>
                            <div class=\"py-2\">
                                <a class=\"btn btn-sm btn-primary\"
                                   href=\"";
            // line 124
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support", ["ticket" => 1]);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("New ticket"), "html", null, true);
            yield "</a>
                                <a class=\"btn btn-sm btn-dark\" href=\"";
            // line 125
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("All tickets"), "html", null, true);
            yield "</a>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Total"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [], "method", false, false, false, 131), "total", [], "any", false, false, false, 131), "html", null, true);
            yield "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Open"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "open"]], "method", false, false, false, 133), "total", [], "any", false, false, false, 133), "html", null, true);
            yield "</dd>
                                <dt class=\"col-sm-4 text-muted small fw-normal\">";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("On Hold"), "html", null, true);
            yield "</dt>
                                <dd class=\"col-sm-8\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["status" => "on_hold"]], "method", false, false, false, 135), "total", [], "any", false, false, false, 135), "html", null, true);
            yield "</dd>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header py-3\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Recent orders"), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"card-body p-1\">
                            ";
            // line 147
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["per_page" => 5, "page" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 147), "hide_addons" => 1]], "method", false, false, false, 147), "list", [], "any", false, false, false, 147)) {
                // line 148
                yield "                                <div class=\"list-group list-group-flush\">
                                    ";
                // line 149
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "order_get_list", [["per_page" => 5, "page" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 149), "hide_addons" => 1]], "method", false, false, false, 149), "list", [], "any", false, false, false, 149));
                foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                    // line 150
                    yield "                                        <a href=\"";
                    yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 150), "html", null, true);
                    yield "\"
                                           class=\"list-group-item d-flex justify-content-between align-items-center\" aria-current=\"true\">
                                            <div>
                                                <div>
                                                    <span><strong>#";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 154), "html", null, true);
                    yield "</strong></span>&nbsp;<span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "title", [], "any", false, false, false, 154), 45), "html", null, true);
                    yield "</span>
                                                </div>
                                                <span class=\"text-secondary small\" title=\"";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "updated_at", [], "any", false, false, false, 156)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_timeago_filter(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "updated_at", [], "any", false, false, false, 156)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("ago"), "html", null, true);
                    yield "</span>
                                            </div>
                                            <div>
                                                <span class=\"badge ";
                    // line 159
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "active")) {
                        yield "bg-success";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "pending_setup")) {
                        yield "bg-warning";
                    } elseif ((((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "failed_setup") || (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "suspended")) || (CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "failed_renew"))) {
                        yield "bg-danger";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159) == "canceled")) {
                        yield "bg-secondary";
                    }
                    yield "\">";
                    yield CoreExtension::callMacro($macros["mf"], "macro_status_name", [CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 159)], 159, $context, $this->getSourceContext());
                    yield "</span>
                                            </div>
                                        </a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                yield "                                </div>
                            ";
            } else {
                // line 165
                yield "                                <div class=\"d-flex justify-content-center my-2 p-2\">
                                    <span class=\"m-0\">";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("No recent orders"), "html", null, true);
                yield "</span>
                                </div>
                            ";
            }
            // line 169
            yield "                        </div>
                    </div>
                </div>

                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header py-3\">
                            <span class=\"h6 m-0 pt-1\">";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Support tickets"), "html", null, true);
            yield "</span>
                        </div>
                        <div class=\"card-body p-1\">
                            ";
            // line 179
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["per_page" => 5]], "method", false, false, false, 179), "list", [], "any", false, false, false, 179)) {
                // line 180
                yield "                                <div class=\"list-group list-group-flush\">
                                    ";
                // line 181
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "support_ticket_get_list", [["per_page" => 5]], "method", false, false, false, 181), "list", [], "any", false, false, false, 181));
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 182
                    yield "                                        <a href=\"";
                    yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("support/ticket");
                    yield "/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 182), "html", null, true);
                    yield "\"
                                           class=\"list-group-item d-flex justify-content-between align-items-center\" aria-current=\"true\">
                                            <div>
                                                <div>
                                                    <span><strong>#";
                    // line 186
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 186), "html", null, true);
                    yield "</strong></span>&nbsp;<span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_truncate_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "subject", [], "any", false, false, false, 186), 45), "html", null, true);
                    yield "</span>
                                                </div>
                                                <span class=\"text-secondary small\" title=\"";
                    // line 188
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 188)), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_timeago_filter(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "updated_at", [], "any", false, false, false, 188)), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("ago"), "html", null, true);
                    yield "</span>
                                            </div>
                                            <div>
                                                <span class=\"badge ";
                    // line 191
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 191) == "open")) {
                        yield "bg-success";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 191) == "on_hold")) {
                        yield "bg-warning";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 191) == "closed")) {
                        yield "bg-secondary";
                    }
                    yield "\">";
                    yield CoreExtension::callMacro($macros["mf"], "macro_status_name", [CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "status", [], "any", false, false, false, 191)], 191, $context, $this->getSourceContext());
                    yield "</span>
                                            </div>
                                        </a>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                yield "                                </div>
                            ";
            } else {
                // line 197
                yield "                                <div class=\"d-flex justify-content-center my-2 p-2\">
                                    <span class=\"m-0\">";
                // line 198
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("No recent support tickets"), "html", null, true);
                yield "</span>
                                </div>
                            ";
            }
            // line 201
            yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        } else {
            // line 207
            yield "        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"card mb-4\">
                    <div class=\"card-header h6 py-3\">";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Profile"), "html", null, true);
            yield "</div>
                    <div class=\"card-body\">
                        <p>";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("You are logged out"), "html", null, true);
            yield "</p>
                        <div class=\"d-flex gap-2\">
                            <a class=\"btn btn-sm  btn-primary\" href=\"";
            // line 214
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/login");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Login"), "html", null, true);
            yield "</a>
                            <a class=\"btn btn-sm btn-dark\" href=\"";
            // line 215
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/signup");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Sign up"), "html", null, true);
            yield "</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6\">
                <div class=\"card mb-4\">
                    <div class=\"card-header h6 py-3\">";
            // line 223
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Order"), "html", null, true);
            yield "</div>
                    <div class=\"card-body\">
                        <p>";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Products and services"), "html", null, true);
            yield "</p>
                        <div class=\"d-flex gap-2\">
                            <a class=\"btn btn-sm btn-dark\" href=\"";
            // line 227
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Order"), "html", null, true);
            yield "</a>
                        </div>
                    </div>
                </div>
            </div>

            ";
            // line 233
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "news"]], "method", false, false, false, 233)) {
                // line 234
                yield "                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header h6 py-3\">";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("News"), "html", null, true);
                yield "</div>
                        <div class=\"card-body\">
                            <p>";
                // line 238
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Latest news and announcements"), "html", null, true);
                yield "</p>
                            <div class=\"d-flex gap-2\">
                                <a class=\"btn btn-sm btn-dark\" href=\"";
                // line 240
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/news");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Announcements"), "html", null, true);
                yield "</a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 246
            yield "
            ";
            // line 247
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "support_kb_enabled", [], "method", false, false, false, 247)) {
                // line 248
                yield "                <div class=\"col-md-6\">
                    <div class=\"card mb-4\">
                        <div class=\"card-header h6 py-3\">";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Knowledge base"), "html", null, true);
                yield "</div>
                        <div class=\"card-body\">
                            <p>";
                // line 252
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Browse our KB for answers and FAQ"), "html", null, true);
                yield "</p>
                            <div class=\"d-flex gap-2\">
                                <a class=\"btn btn-sm btn-dark\" href=\"";
                // line 254
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/support/kb");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Knowledge base"), "html", null, true);
                yield "</a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 260
            yield "        </div>
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
        return array (  675 => 260,  664 => 254,  659 => 252,  654 => 250,  650 => 248,  648 => 247,  645 => 246,  634 => 240,  629 => 238,  624 => 236,  620 => 234,  618 => 233,  607 => 227,  602 => 225,  597 => 223,  584 => 215,  578 => 214,  573 => 212,  568 => 210,  563 => 207,  555 => 201,  549 => 198,  546 => 197,  542 => 195,  524 => 191,  514 => 188,  507 => 186,  497 => 182,  493 => 181,  490 => 180,  488 => 179,  482 => 176,  473 => 169,  467 => 166,  464 => 165,  460 => 163,  440 => 159,  430 => 156,  423 => 154,  413 => 150,  409 => 149,  406 => 148,  404 => 147,  398 => 144,  386 => 135,  382 => 134,  378 => 133,  374 => 132,  370 => 131,  366 => 130,  356 => 125,  350 => 124,  344 => 121,  332 => 112,  328 => 111,  324 => 110,  320 => 109,  316 => 108,  312 => 107,  302 => 102,  295 => 100,  289 => 97,  275 => 86,  271 => 85,  267 => 84,  263 => 83,  259 => 82,  255 => 81,  245 => 76,  239 => 73,  227 => 64,  223 => 63,  219 => 62,  215 => 61,  211 => 60,  207 => 59,  197 => 54,  191 => 51,  183 => 45,  178 => 42,  169 => 39,  163 => 38,  155 => 37,  152 => 36,  148 => 35,  144 => 33,  141 => 32,  138 => 31,  136 => 30,  133 => 29,  129 => 27,  122 => 25,  119 => 24,  117 => 23,  112 => 21,  109 => 20,  106 => 19,  102 => 18,  93 => 11,  87 => 10,  84 => 9,  81 => 8,  77 => 7,  69 => 6,  61 => 4,  53 => 3,  49 => 1,  47 => 16,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_index_dashboard.html.twig", "C:\\xampp\\htdocs\\modules\\Index\\html_client/mod_index_dashboard.html.twig");
    }
}
