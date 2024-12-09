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
class __TwigTemplate_3179d4a186cdd3b4774043e70e4dff0e extends Template
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
            'head' => [$this, 'block_head'],
            'content_wide' => [$this, 'block_content_wide'],
            'nav' => [$this, 'block_nav'],
            'before_content' => [$this, 'block_before_content'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'top_content' => [$this, 'block_top_content'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "layout_default.html.twig", 1)->unwrap();
        // line 2
        yield "
";
        // line 3
        $context["profile"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "profile_get", [], "any", false, false, false, 3);
        // line 4
        $context["company"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 4);
        // line 5
        yield "
<!DOCTYPE html>
<html lang=\"\">

<head>
    <title>";
        // line 10
        yield from $this->unwrap()->yieldBlock('meta_title', $context, $blocks);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        yield "</title>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"csrf-token\" content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
        yield "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "favicon_url", [], "any", false, false, false, 16), "html", null, true);
        yield "\">

    ";
        // line 18
        yield from         $this->loadTemplate("partial_bb_meta.html.twig", "layout_default.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "
    ";
        // line 20
        yield $this->env->getFunction('encore_entry_link_tags')->getCallable()("fossbilling");
        yield "
    ";
        // line 21
        yield $this->extensions['Box_TwigExtensions']->twig_script_tag($this->extensions['Box_TwigExtensions']->twig_library_url("Api/API.js"));
        yield "
    ";
        // line 22
        yield $this->env->getFunction('encore_entry_script_tags')->getCallable()("fossbilling");
        yield "
    ";
        // line 23
        yield $this->extensions['FOSSBilling\TwigExtensions\DebugBar']->renderHead();
        yield "

    ";
        // line 25
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 26
        yield "</head>

<body data-bs-theme=\"dark\">
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.body.setAttribute(\"data-bs-theme\", localStorage.getItem('theme'));
        } else {
            document.body.removeAttribute(\"data-bs-theme\");
        }

        ";
        // line 36
        if ( !($context["admin"] ?? null)) {
            // line 37
            yield "            \$(function () {
                bb.redirect(\"";
            // line 38
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/login");
            yield "\");
            });
        ";
        } else {
            // line 41
            yield "    </script>
    ";
            // line 42
            if (($context["hide_menu"] ?? null)) {
                // line 43
                yield "    ";
                yield from $this->unwrap()->yieldBlock('content_wide', $context, $blocks);
                // line 44
                yield "    ";
            } else {
                // line 45
                yield "    <div class=\"page\">
        ";
                // line 46
                yield from $this->unwrap()->yieldBlock('nav', $context, $blocks);
                // line 47
                yield "        <div class=\"page-wrapper\">
            ";
                // line 48
                yield from $this->unwrap()->yieldBlock('before_content', $context, $blocks);
                // line 49
                yield "            <header class=\"navbar navbar-expand-lg navbar-light d-print-none\">
               <div class=\"container-xl\">
                   <div class=\"d-flex gap-3 align-items-center\">
                       <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" aria-controls=\"navbar-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                           <span class=\"navbar-toggler-icon\"></span>
                       </button>
                       <h1 class=\"d-none d-sm-flex navbar-brand d-none-navbar-horizontal pe-0 pe-md-3 a\">
                           <a href=\"";
                // line 56
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
                yield "\">
                               <img class=\"navbar-brand-image hide-theme-light\" src=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "logo_url_dark", [], "any", false, false, false, 57), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 57), "html", null, true);
                yield "\">
                               <img class=\"navbar-brand-image hide-theme-dark\" src=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 58), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 58), "html", null, true);
                yield "\">
                           </a>
                       </h1>
                   </div>
                  <div class=\"navbar-nav flex-row order-md-last gap-2\">
                    ";
                // line 63
                $context["languages"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_languages", [true], "method", false, false, false, 63);
                // line 64
                yield "                    ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["languages"] ?? null)) > 1)) {
                    // line 65
                    yield "                    <div class=\"nav-item\">
                        <select name=\"lang\" class=\"form-select js-language-selector\">
                            ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                        // line 68
                        yield "                                <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 68), "html", null, true);
                        yield "\" data-custom-properties=\"&lt;span class=&quot;flag flag-country-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), (($__internal_compile_0 = Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "locale", [], "any", false, false, false, 68), "_")) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[1] ?? null) : null)), "html", null, true);
                        yield " &quot;&gt;&lt;/span&gt;\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lang"], "title", [], "any", false, false, false, 68), "html", null, true);
                        yield "</option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    yield "                        </select>
                    </div>
                    ";
                }
                // line 73
                yield "                     <div class=\"nav-item d-none d-sm-flex\">
                        <div class=\"btn-list gap-2\">
                           <a href=\"https://github.com/FOSSBilling/FOSSBilling\" class=\"btn px-3\" target=\"_blank\" rel=\"noreferrer\">
                              <svg class=\"icon icon-tabler icon-tabler-arrow-back-up m-0\">
                                 <use xlink:href=\"#brand-github\" />
                              </svg>
                              <span class=\"d-none d-md-block ms-2\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Source code"), "html", null, true);
                yield "</span>
                           </a>
                           <a href=\"https://github.com/sponsors/FOSSBilling\" class=\"btn px-3\" target=\"_blank\" rel=\"noreferrer\">
                              <svg class=\"icon icon-tabler icon-tabler-heart m-0 text-pink\">
                                 <use xlink:href=\"#heart\" />
                              </svg>
                              <span class=\"d-none d-md-block ms-2\">";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Sponsor"), "html", null, true);
                yield "</span>
                           </a>
                        </div>
                     </div>
                      <div class=\"nav-item\">
                        <a class=\"nav-link px-0 hide-theme-dark js-theme-toggler\"
                           href=\"?theme=dark\"
                           data-bs-toggle=\"tooltip\"
                           data-bs-placement=\"bottom\"
                           data-bs-original-title=\"";
                // line 94
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Enable dark mode"), "html", null, true);
                yield "\">
                           <svg class=\"icon text-dark\">
                              <use xlink:href=\"#moon\" />
                           </svg>
                        </a>
                        <a class=\"nav-link px-0 hide-theme-light js-theme-toggler\"
                           href=\"?theme=light\"
                           data-bs-toggle=\"tooltip\"
                           data-bs-placement=\"bottom\"
                           data-bs-original-title=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Enable light mode"), "html", null, true);
                yield "\">
                           <svg class=\"icon text-white\">
                              <use xlink:href=\"#sun\" />
                           </svg>
                        </a>
                     </div>
                     <div class=\"nav-item dropdown\">
                        <a class=\"nav-link d-flex lh-1 text-reset p-0\"
                           href=\"";
                // line 111
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/profile");
                yield "\"
                           data-bs-toggle=\"dropdown\"
                           aria-label=\"Open user menu\"
                           aria-expanded=\"false\">
                           <span class=\"avatar avatar-sm\" style=\"background-image: url(";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_gravatar_filter(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 115)), "html", null, true);
                yield "&size=32)\"></span>
                           <div class=\"d-none d-xl-block ps-2\">
                              <div>";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "name", [], "any", false, false, false, 117), "html", null, true);
                yield "</div>
                              <div class=\"mt-1 small text-muted\">";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["profile"] ?? null), "role", [], "any", false, false, false, 118), "html", null, true);
                yield "</div>
                           </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-end dropdown-menu-arrow\">
                           <a class=\"dropdown-item\"
                              href=\"";
                // line 123
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/profile");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Profile"), "html", null, true);
                yield "</a>
                           <a class=\"dropdown-item\"
                              href=\"";
                // line 125
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Settings"), "html", null, true);
                yield "</a>
                           <div class=\"dropdown-divider\"></div>
                           <a class=\"dropdown-item api-link\"
                              href=\"";
                // line 128
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/profile/logout", ["CSRFToken" => ($context["CSRFToken"] ?? null)]);
                yield "\"
                              data-api-redirect=\"";
                // line 129
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/login");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Logout"), "html", null, true);
                yield "</a>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <header class=\"navbar-expand-lg\">
                <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
                    <div class=\"navbar navbar-light\">
                        <div class=\"container-xl\">
                             ";
                // line 139
                $context["navigation"] = CoreExtension::getAttribute($this->env, $this->source, ($context["admin"] ?? null), "extension_get_navigation", [["url" => CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_current_url", [], "any", false, false, false, 139)]], "method", false, false, false, 139);
                // line 140
                yield "                             <ul class=\"navbar-nav\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
                // line 142
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
                yield "\">
                                        <span class=\"d-none d-xxl-block me-1\">
                                            <svg class=\"icon\">
                                                <use xlink:href=\"#home\" />
                                            </svg>
                                        </span>
                                        <span>";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Dashboard"), "html", null, true);
                yield "</span>
                                    </a>
                                  </li>
                             ";
                // line 151
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["navigation"] ?? null));
                foreach ($context['_seq'] as $context["location"] => $context["group"]) {
                    // line 152
                    yield "                             ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["group"], "subpages", [], "any", false, false, false, 152)) {
                        // line 153
                        yield "                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\" >
                                        <svg class=\"icon icon-tabler icon-tabler-arrow-back-up d-none d-xxl-block me-1\">
                                            <use xlink:href=\"#";
                        // line 156
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "class", [], "any", false, false, false, 156), "html", null, true);
                        yield "\" />
                                         </svg>
                                        <span class=\"nav-link-title\">";
                        // line 158
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "label", [], "any", false, false, false, 158)), "html", null, true);
                        yield "</span>
                                      </a>
                                      <div class=\"dropdown-menu\">
                                        <div class=\"dropdown-menu-columns\">
                                            <div class=\"dropdown-menu-column\">
                                                ";
                        // line 163
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "subpages", [], "any", false, false, false, 163));
                        foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                            // line 164
                            yield "                                                <a class=\"dropdown-item\" href=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subpage"], "uri", [], "any", false, false, false, 164), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans(CoreExtension::getAttribute($this->env, $this->source, $context["subpage"], "label", [], "any", false, false, false, 164)), "html", null, true);
                            yield "</a>
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 166
                        yield "                                            </div>
                                        </div>
                                    </div>
                                </li>
                            ";
                    }
                    // line 171
                    yield "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['location'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                yield "                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link dropdown-toggle\" href=\"#navbar-base\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" role=\"button\" aria-expanded=\"false\" >
                                    <svg class=\"icon icon-tabler icon-tabler-arrow-back-up d-none d-xxl-block me-1\">
                                        <use xlink:href=\"#help\" />
                                     </svg>
                                    <span class=\"nav-link-title\">";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Help"), "html", null, true);
                yield "</span>
                                  </a>
                                  <div class=\"dropdown-menu\">
                                    <div class=\"dropdown-menu-columns\">
                                        <div class=\"dropdown-menu-column\">
                                            <a class=\"dropdown-item\" href=\"https://fossbilling.org/docs\" target=\"_blank\" rel=\"noopener\">";
                // line 182
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Documentation"), "html", null, true);
                yield "</a>
                                            <a class=\"dropdown-item\" href=\"https://github.com/FOSSBilling/FOSSBilling\" target=\"_blank\" rel=\"noopener\">";
                // line 183
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Source code"), "html", null, true);
                yield "</a>
                                            <a class=\"dropdown-item\" href=\"https://github.com/FOSSBilling/FOSSBilling/issues\" target=\"_blank\" rel=\"noopener\">";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Report a bug"), "html", null, true);
                yield "</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        </div>
                    </div>
                  </div>
            </header>
            <main class=\"page-body\">
                <div class=\"container-xl\">
                    <nav class=\"mb-3\" aria-label=\"breadcrumb\">
                        ";
                // line 197
                yield from $this->unwrap()->yieldBlock('breadcrumbs', $context, $blocks);
                // line 209
                yield "                    </nav>
                    ";
                // line 210
                yield from $this->unwrap()->yieldBlock('top_content', $context, $blocks);
                // line 211
                yield "                    ";
                yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
                // line 212
                yield "                </div>
            </main>

            <footer class=\"footer footer-transparent d-print-none\">
                <div class=\"container-xl\">
                    <div>Copyright &copy; ";
                // line 217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, ($context["now"] ?? null), "medium", "yyyy"), "html", null, true);
                yield ". All rights reserved. Powered by <a href=\"https://fossbilling.org\" title=\"Billing system\" target=\"_blank\" rel=\"noopener\">FOSSBilling ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["FOSSBillingVersion"] ?? null), "html", null, true);
                yield "</a></div>
                </div>
            </footer>
        </div>
    </div>
    ";
            }
            // line 223
            yield "
    <div class=\"loading dim\"></div>

    <div class=\"d-none\">
        ";
            // line 227
            yield from             $this->loadTemplate("../build/symbol/icons-sprite.svg", "layout_default.html.twig", 227)->unwrap()->yield($context);
            // line 228
            yield "    </div>

    <button type=\"button\" aria-label=\"Back to top\" class=\"btn btn-floating btn-lg btn-icon hidden\" id=\"back-to-top\">
        <svg class=\"icon\">
            <use xlink:href=\"#arrow-up\" />
        </svg>
    </button>

    ";
            // line 236
            yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
            // line 237
            yield "
    <noscript id=\"noscript\">
        <div class=\"msg error\">NOTE: Many features on FOSSBilling require Javascript and cookies. You can enable both via your browser's preference settings.</div>
    </noscript>
    ";
        }
        // line 242
        yield "
    ";
        // line 243
        yield $this->extensions['FOSSBilling\TwigExtensions\DebugBar']->render();
        yield "

    <div class=\"toast-container position-fixed bottom-0 end-0 p-3\" style=\"z-index: 1070;\">
    </div>
</body>
</html>
";
        return; yield '';
    }

    // line 10
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 25
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 43
    public function block_content_wide($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 46
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 48
    public function block_before_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 197
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 198
        yield "                        <ol class=\"breadcrumb\">
                            <li class=\"breadcrumb-item\">
                                <a href=\"";
        // line 200
        yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        yield "\">
                                    <svg class=\"icon\">
                                        <use xlink:href=\"#home\" />
                                    </svg>
                                </a>
                            </li>
                            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 206
        yield from         $this->unwrap()->yieldBlock("meta_title", $context, $blocks);
        yield "</li>
                        </ol>
                        ";
        return; yield '';
    }

    // line 210
    public function block_top_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 211
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 236
    public function block_js($context, array $blocks = [])
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
        return array (  577 => 236,  570 => 211,  563 => 210,  555 => 206,  546 => 200,  542 => 198,  538 => 197,  531 => 48,  524 => 46,  517 => 43,  510 => 25,  503 => 10,  491 => 243,  488 => 242,  481 => 237,  479 => 236,  469 => 228,  467 => 227,  461 => 223,  450 => 217,  443 => 212,  440 => 211,  438 => 210,  435 => 209,  433 => 197,  417 => 184,  413 => 183,  409 => 182,  401 => 177,  394 => 172,  388 => 171,  381 => 166,  370 => 164,  366 => 163,  358 => 158,  353 => 156,  348 => 153,  345 => 152,  341 => 151,  335 => 148,  326 => 142,  322 => 140,  320 => 139,  305 => 129,  301 => 128,  293 => 125,  286 => 123,  278 => 118,  274 => 117,  269 => 115,  262 => 111,  251 => 103,  239 => 94,  227 => 85,  218 => 79,  210 => 73,  205 => 70,  192 => 68,  188 => 67,  184 => 65,  181 => 64,  179 => 63,  169 => 58,  163 => 57,  159 => 56,  150 => 49,  148 => 48,  145 => 47,  143 => 46,  140 => 45,  137 => 44,  134 => 43,  132 => 42,  129 => 41,  123 => 38,  120 => 37,  118 => 36,  106 => 26,  104 => 25,  99 => 23,  95 => 22,  91 => 21,  87 => 20,  84 => 19,  82 => 18,  77 => 16,  72 => 14,  63 => 10,  56 => 5,  54 => 4,  52 => 3,  49 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_default.html.twig", "C:\\xampp\\htdocs\\themes\\admin_default\\html/layout_default.html.twig");
    }
}
