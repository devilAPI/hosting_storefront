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

/* layout_default.html.twig */
class __TwigTemplate_4110553d1b1f79ad264829c3c2816313 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'opengraph' => [$this, 'block_opengraph'],
            'head' => [$this, 'block_head'],
            'js' => [$this, 'block_js'],
            'body_class' => [$this, 'block_body_class'],
            'body' => [$this, 'block_body'],
            'content_before' => [$this, 'block_content_before'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content' => [$this, 'block_content'],
            'content_after' => [$this, 'block_content_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" data-bs-theme=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", false, false, false, 2), "light")) : ("light")), "html", null, true);
        yield "\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('meta_title', $context, $blocks);
        yield "</title>

    <meta property=\"bb:url\" content=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("SYSTEM_URL"), "html", null, true);
        yield "\">
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        yield "\">
    <meta name=\"csrf-token\" content=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
        yield "\">

    <meta name=\"description\" content=\"";
        // line 11
        yield from $this->unwrap()->yieldBlock('meta_description', $context, $blocks);
        yield "\">
    <meta name=\"robots\" content=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 12), "html", null, true);
        yield "\">
    <meta name=\"author\" content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "meta_author", [], "any", false, false, false, 13), "html", null, true);
        yield "\">
    <meta name=\"generator\" content=\"FOSSBilling\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 17
        yield from $this->unwrap()->yieldBlock('opengraph', $context, $blocks);
        // line 18
        yield "    <link rel='stylesheet' type='text/css' href=\"";
        yield $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/font-awesome.css");
        yield "\">
    ";
        // line 19
        yield $this->env->getFunction('encore_entry_link_tags')->getCallable()("huraga");
        yield "
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 20), "favicon_url", [], "any", false, false, false, 20), "html", null, true);
        yield "\">

    ";
        // line 22
        yield $this->extensions['Box_TwigExtensions']->twig_script_tag($this->extensions['Box_TwigExtensions']->twig_library_url("Api/API.js"));
        yield "
    ";
        // line 23
        yield $this->env->getFunction('encore_entry_script_tags')->getCallable()("huraga");
        yield "

    ";
        // line 25
        yield $this->extensions['FOSSBilling\TwigExtensions\DebugBar']->renderHead();
        yield "

    ";
        // line 27
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 28
        yield "    ";
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 29
        yield "</head>

<body class=\"";
        // line 31
        yield from $this->unwrap()->yieldBlock('body_class', $context, $blocks);
        yield "\">

";
        // line 33
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 253
        yield "
    ";
        // line 254
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 254)) {
            // line 255
            yield "        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 255);
            yield "
    ";
        }
        // line 257
        yield "    ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("partial_pending_messages.html.twig", "layout_default.html.twig", 257);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield($context);
        }
        // line 258
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "cookieconsent"]], "method", false, false, false, 258)) {
            // line 259
            yield "        ";
            $__internal_compile_1 = null;
            try {
                $__internal_compile_1 =                 $this->loadTemplate("mod_cookieconsent_index.html.twig", "layout_default.html.twig", 259);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_1) {
                yield from $__internal_compile_1->unwrap()->yield($context);
            }
            // line 260
            yield "    ";
        }
        // line 261
        yield "</div>
";
        // line 262
        yield $this->extensions['FOSSBilling\TwigExtensions\DebugBar']->render();
        yield "
</body>
</html>
";
        return; yield '';
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "meta_title", [], "any", false, false, false, 5), "html", null, true);
        return; yield '';
    }

    // line 11
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "meta_description", [], "any", false, false, false, 11), "html", null, true);
        return; yield '';
    }

    // line 17
    public function block_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 27
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 28
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 31
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        if (( !($context["client"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "require_login", [], "any", false, false, false, 34))) {
            // line 35
            yield "    <script>
        \$(function () {
            bb.redirect('";
            // line 37
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
            yield "');
        });
    </script>
";
        }
        // line 41
        yield "
";
        // line 42
        if (($context["client"] ?? null)) {
            // line 43
            yield "    ";
            $context["profile"] = CoreExtension::getAttribute($this->env, $this->source, ($context["client"] ?? null), "profile_get", [], "any", false, false, false, 43);
        }
        // line 45
        $context["company"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 45);
        // line 46
        yield "
";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "theme", [], "any", false, false, false, 47) == "dark")) {
            // line 48
            yield "    ";
            $context["logo_url"] = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "logo_url_dark", [], "any", false, false, false, 48);
        } else {
            // line 50
            yield "    ";
            $context["logo_url"] = CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 50);
        }
        // line 52
        yield "<div class=\"container\">
    <header>
        <nav class=\"navbar navbar-expand-md py-4\">
            <div class=\"container-fluid\">
                ";
        // line 56
        if ((($context["logo_url"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "show_company_logo", [], "any", false, false, false, 56))) {
            // line 57
            yield "                    <a class=\"navbar-brand\" href=\"";
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            yield "\">
                        <img class=\"d-none d-sm-block\" src=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["logo_url"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 58), "html", null, true);
            yield "\" height=\"45px\"
                             title=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 59), "html", null, true);
            yield "\">
                        <span class=\"d-sm-none\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 60), "html", null, true);
            yield "</span>
                    </a>
                ";
        } else {
            // line 63
            yield "                    <a class=\"navbar-brand\" href=\"";
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
            yield "\">
                        <span>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 64), "html", null, true);
            yield "</span>
                    </a>
                ";
        }
        // line 67
        yield "                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                        data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <div class=\"navbar-nav me-auto mb-2 mb-lg-0 w-100 d-flex justify-content-end\">


                        ";
        // line 76
        $context["languages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_languages", [true], "method", false, false, false, 76);
        // line 77
        yield "                        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["languages"] ?? null)) > 1)) {
            // line 78
            yield "                            <li class=\"nav-item\">
                                <select name=\"lang\" class=\"form-select js-language-selector\">
                                    ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                // line 81
                yield "                                        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 81), "html", null, true);
                yield "\" data-custom-properties=\"&lt;span class=&quot;fi fi-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($__internal_compile_2 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 81), "_")) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null)), "html", null, true);
                yield "&quot;&gt;&lt;/span&gt;\">&nbsp;";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "title", [], "any", false, false, false, 81), "html", null, true);
                yield "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "                                </select>
                            </li>
                        ";
        }
        // line 86
        yield "
                        ";
        // line 87
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_dashboard", [], "any", false, false, false, 87)) {
            // line 88
            yield "                            <li class=\"nav-item d-none d-md-block\">
                                <a class=\"nav-link\" href=\"";
            // line 89
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Dashboard"), "html", null, true);
            yield "</a>
                            </li>
                        ";
        }
        // line 92
        yield "
                        ";
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_order", [], "any", false, false, false, 93)) {
            // line 94
            yield "                            <li class=\"nav-item d-none d-md-block\">
                                <a class=\"nav-link\" href=\"";
            // line 95
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/order");
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Order"), "html", null, true);
            yield "</a>
                            </li>
                        ";
        }
        // line 98
        yield "
                        ";
        // line 99
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_profile", [], "any", false, false, false, 99)) {
            // line 100
            yield "                            <li class=\"nav-item d-none d-md-block\">
                                ";
            // line 101
            if ( !($context["client"] ?? null)) {
                // line 102
                yield "                                    <a class=\"nav-link\" href=\"";
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Login"), "html", null, true);
                yield "</a>
                                ";
            }
            // line 104
            yield "                            </li>
                        ";
        }
        // line 106
        yield "
                        ";
        // line 107
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_signout", [], "any", false, false, false, 107)) {
            // line 108
            yield "                            <li class=\"nav-item d-none d-md-block\">
                                ";
            // line 109
            if (($context["client"] ?? null)) {
                // line 110
                yield "                                    <div class=\"dropdown\">
                                        <button class=\"btn dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <img class=\"img-fluid rounded-circle\" alt=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 112), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 112), "html", null, true);
                yield " gravatar\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_gravatar_filter(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 112), 60), "html", null, true);
                yield "\" height=\"25px\" width=\"25px\">
                                            ";
                // line 113
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "company", [], "any", false, false, false, 113)) {
                    // line 114
                    yield "                                                <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 114), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 114), "html", null, true);
                    yield "|";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "company", [], "any", false, false, false, 114), "html", null, true);
                    yield "</span>
                                            ";
                } else {
                    // line 116
                    yield "                                                <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 116), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 116), "html", null, true);
                    yield "</span>
                                            ";
                }
                // line 118
                yield "                                        </button>
                                        <ul class=\"dropdown-menu\">
                                            <li><a class=\"dropdown-item\"
                                                   href=\"";
                // line 121
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/profile");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Profile"), "html", null, true);
                yield "</a></li>
                                            <li><a class=\"dropdown-item\"
                                                   href=\"";
                // line 123
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/logout");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Sign out"), "html", null, true);
                yield "</a></li>
                                        </ul>
                                    </div>
                                ";
            } else {
                // line 127
                yield "                                    <a class=\"ms-2 btn btn-outline-primary d-none d-md-block\"
                                       href=\"";
                // line 128
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("signup");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Sign up"), "html", null, true);
                yield "</a>
                                ";
            }
            // line 130
            yield "                            </li>
                        ";
        }
        // line 132
        yield "
                        <div class=\"d-md-none\">
                            ";
        // line 134
        yield from         $this->loadTemplate("mobile_menu.html.twig", "layout_default.html.twig", 134)->unwrap()->yield($context);
        // line 135
        yield "                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-3 d-none d-md-block\">
                ";
        // line 144
        yield from         $this->loadTemplate("partial_menu.html.twig", "layout_default.html.twig", 144)->unwrap()->yield($context);
        // line 145
        yield "            </div>
            <div class=\"col-12 col-md-9\">
                <div id=\"wrapper\">
                    <section role=\"main\">
                        ";
        // line 149
        yield from $this->unwrap()->yieldBlock('content_before', $context, $blocks);
        // line 150
        yield "                        <div class=\"content-block\" role=\"main\">
                            ";
        // line 151
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "show_breadcrumb", [], "any", false, false, false, 151)) {
            // line 152
            yield "                                ";
            yield from $this->unwrap()->yieldBlock('breadcrumbs', $context, $blocks);
            // line 163
            yield "                            ";
        }
        // line 164
        yield "
                            ";
        // line 165
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 166
        yield "
                            ";
        // line 167
        yield from         $this->loadTemplate("partial_message.html.twig", "layout_default.html.twig", 167)->unwrap()->yield($context);
        // line 168
        yield "
                            ";
        // line 169
        yield from $this->unwrap()->yieldBlock('content_after', $context, $blocks);
        // line 170
        yield "                        </div>
                    </section>
                    <div id=\"push\"></div>
                </div>

                ";
        // line 175
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_enabled", [], "any", false, false, false, 175)) {
            // line 176
            yield "                    <footer id=\"footer\" class=\"small text-muted mt-2 mb-3\">
                        <div class=\"d-flex flex-column\">
                            <div class=\"d-flex justify-content-center\">
                                <span>&copy; ";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, ($context["now"] ?? null), "medium", "yyyy"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", true, true, false, 179)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", false, false, false, 179), CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 179))) : (CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 179))), "html", null, true);
            yield "
                                    ";
            // line 180
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "bank_info_pagebottom", [], "any", false, false, false, 180) == 1)) {
                // line 181
                yield "                                        <br/>
                                        <b>";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Payment Information"), "html", null, true);
                yield "</b> - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Bank Name"), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "bank_name", [], "any", false, false, false, 182), "html", null, true);
                yield " | ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("BIC / SWIFT Code"), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "bic", [], "any", false, false, false, 182), "html", null, true);
                yield " | ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Account Number"), "html", null, true);
                yield ": ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "account_number", [], "any", false, false, false, 182), "html", null, true);
                yield "
                                    ";
            }
            // line 184
            yield "                                </span>
                            </div>
                            <div class=\"d-flex justify-content-center\">
                                ";
            // line 187
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_enabled", [], "any", false, false, false, 187)) {
                // line 188
                yield "                                    ";
                if ((CoreExtension::inFilter("http://", CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 188)) || CoreExtension::inFilter("https://", CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 188)))) {
                    // line 189
                    yield "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 190
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 190), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_title", [], "any", false, false, false, 190), "html", null, true);
                    yield "</a>
                                    ";
                } else {
                    // line 192
                    yield "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 193
                    yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 193));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_title", [], "any", false, false, false, 193), "html", null, true);
                    yield "</a>
                                    ";
                }
                // line 195
                yield "                                ";
            }
            // line 196
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_enabled", [], "any", false, false, false, 196)) {
                // line 197
                yield "                                    &nbsp;&#x2022;&nbsp;
                                    ";
                // line 198
                if ((CoreExtension::inFilter("http://", CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 198)) || CoreExtension::inFilter("https://", CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 198)))) {
                    // line 199
                    yield "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 200
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 200), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_title", [], "any", false, false, false, 200), "html", null, true);
                    yield "</a>
                                    ";
                } else {
                    // line 202
                    yield "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 203
                    yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 203));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_title", [], "any", false, false, false, 203), "html", null, true);
                    yield "</a>
                                    ";
                }
                // line 205
                yield "                                ";
            }
            // line 206
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_enabled", [], "any", false, false, false, 206)) {
                // line 207
                yield "                                    &nbsp;&#x2022;&nbsp;
                                    ";
                // line 208
                if ((CoreExtension::inFilter("http://", CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 208)) || CoreExtension::inFilter("https://", CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 208)))) {
                    // line 209
                    yield "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 210
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 210), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_title", [], "any", false, false, false, 210), "html", null, true);
                    yield "</a>
                                    ";
                } else {
                    // line 212
                    yield "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 213
                    yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 213));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_title", [], "any", false, false, false, 213), "html", null, true);
                    yield "</a>
                                    ";
                }
                // line 215
                yield "                                ";
            }
            // line 216
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_enabled", [], "any", false, false, false, 216)) {
                // line 217
                yield "                                    &nbsp;&#x2022;&nbsp;
                                    ";
                // line 218
                if ((CoreExtension::inFilter("http://", CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 218)) || CoreExtension::inFilter("https://", CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 218)))) {
                    // line 219
                    yield "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 220
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 220), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_title", [], "any", false, false, false, 220), "html", null, true);
                    yield "</a>
                                    ";
                } else {
                    // line 222
                    yield "                                        <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                           href=\"";
                    // line 223
                    yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 223));
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_title", [], "any", false, false, false, 223), "html", null, true);
                    yield "</a>
                                    ";
                }
                // line 225
                yield "                                ";
            }
            // line 226
            yield "                            </div>
                            ";
            // line 227
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "branding"]], "method", false, false, false, 227)) {
                // line 228
                yield "                                <div class=\"d-flex justify-content-center\">
                                    <span>Powered by the&nbsp;</span>
                                    <a class=\"link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover\"
                                        href=\"https://fossbilling.org\" title=\"Billing Software\"
                                       target=\"_blank\">";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("FOSSBilling Community"), "html", null, true);
                yield "</a>
                                </div>
                            ";
            }
            // line 235
            yield "                        </div>
                    </footer>
                ";
        }
        // line 238
        yield "            </div>
        </div>
    </div>
    <div class=\"toast-container position-fixed bottom-0 end-0 p-3\" style=\"z-index: 1070;\"></div>
    ";
        // line 242
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["settings"] ?? null), "footer_to_top_enabled", [], "any", false, false, false, 242)) {
            // line 243
            yield "        <a href=\"#top\" class=\"position-fixed btn btn-primary bottom-0 end-0 m-3\">
            <span class=\"awe-arrow-up\"></span> ";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Top"), "html", null, true);
            yield "</a>
    ";
        }
        // line 246
        yield "    <div class=\"wait\" style=\"display:none\" onclick=\"\$(this).hide();\">
        <div class=\"spinner-border\"
             style=\"width: 4rem; height: 4rem; top: 50%; left: 50%; position: fixed; z-index: 999\"></div>
    </div>
    <noscript>NOTE: Many features on FOSSBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>

    ";
        return; yield '';
    }

    // line 149
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 152
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        yield "                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb d-none d-md-flex\">
                                            <li class=\"breadcrumb-item\"><a href=\"";
        // line 155
        yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Home"), "html", null, true);
        yield "</a>
                                            </li>
                                            ";
        // line 157
        yield from $this->unwrap()->yieldBlock('breadcrumb', $context, $blocks);
        // line 160
        yield "                                        </ol>
                                    </nav>
                                ";
        return; yield '';
    }

    // line 157
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        yield "                                                <li class=\"active breadcrumb-item\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Dashboard"), "html", null, true);
        yield "</li>
                                            ";
        return; yield '';
    }

    // line 165
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 169
    public function block_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout_default.html.twig";
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
        return array (  807 => 169,  800 => 165,  792 => 158,  788 => 157,  781 => 160,  779 => 157,  772 => 155,  768 => 153,  764 => 152,  757 => 149,  746 => 246,  741 => 244,  738 => 243,  736 => 242,  730 => 238,  725 => 235,  719 => 232,  713 => 228,  711 => 227,  708 => 226,  705 => 225,  698 => 223,  695 => 222,  688 => 220,  685 => 219,  683 => 218,  680 => 217,  677 => 216,  674 => 215,  667 => 213,  664 => 212,  657 => 210,  654 => 209,  652 => 208,  649 => 207,  646 => 206,  643 => 205,  636 => 203,  633 => 202,  626 => 200,  623 => 199,  621 => 198,  618 => 197,  615 => 196,  612 => 195,  605 => 193,  602 => 192,  595 => 190,  592 => 189,  589 => 188,  587 => 187,  582 => 184,  565 => 182,  562 => 181,  560 => 180,  554 => 179,  549 => 176,  547 => 175,  540 => 170,  538 => 169,  535 => 168,  533 => 167,  530 => 166,  528 => 165,  525 => 164,  522 => 163,  519 => 152,  517 => 151,  514 => 150,  512 => 149,  506 => 145,  504 => 144,  493 => 135,  491 => 134,  487 => 132,  483 => 130,  476 => 128,  473 => 127,  464 => 123,  457 => 121,  452 => 118,  444 => 116,  434 => 114,  432 => 113,  424 => 112,  420 => 110,  418 => 109,  415 => 108,  413 => 107,  410 => 106,  406 => 104,  398 => 102,  396 => 101,  393 => 100,  391 => 99,  388 => 98,  380 => 95,  377 => 94,  375 => 93,  372 => 92,  364 => 89,  361 => 88,  359 => 87,  356 => 86,  351 => 83,  338 => 81,  334 => 80,  330 => 78,  327 => 77,  325 => 76,  314 => 67,  308 => 64,  303 => 63,  297 => 60,  293 => 59,  287 => 58,  282 => 57,  280 => 56,  274 => 52,  270 => 50,  266 => 48,  264 => 47,  261 => 46,  259 => 45,  255 => 43,  253 => 42,  250 => 41,  243 => 37,  239 => 35,  237 => 34,  233 => 33,  226 => 31,  219 => 28,  212 => 27,  205 => 17,  197 => 11,  189 => 5,  180 => 262,  177 => 261,  174 => 260,  163 => 259,  160 => 258,  149 => 257,  143 => 255,  141 => 254,  138 => 253,  136 => 33,  131 => 31,  127 => 29,  124 => 28,  122 => 27,  117 => 25,  112 => 23,  108 => 22,  103 => 20,  99 => 19,  94 => 18,  92 => 17,  85 => 13,  81 => 12,  77 => 11,  72 => 9,  68 => 8,  64 => 7,  59 => 5,  53 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_default.html.twig", "C:\\xampp\\htdocs\\themes\\huraga\\html/layout_default.html.twig");
    }
}
