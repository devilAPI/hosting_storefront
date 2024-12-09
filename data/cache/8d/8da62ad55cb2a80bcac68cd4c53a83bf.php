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

/* macro_functions.html.twig */
class __TwigTemplate_95542cb247578a7996920a918d0aa25f extends Template
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
        // line 9
        yield "
";
        // line 17
        yield "
";
        // line 22
        yield "
";
        // line 27
        yield "
";
        // line 52
        yield "
";
        // line 57
        yield "
";
        // line 66
        yield "

";
        return; yield '';
    }

    // line 1
    public function macro_selectbox($__name__ = null, $__options__ = null, $__selected__ = null, $__required__ = null, $__nullOption__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "required" => $__required__,
            "nullOption" => $__nullOption__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "    <select name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" class=\"form-control";
            if (($context["required"] ?? null)) {
                yield " is-required";
            }
            yield "\">
        ";
            // line 3
            if (($context["nullOption"] ?? null)) {
                yield "<option value=\"\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nullOption"] ?? null), "html", null, true);
                yield "</option>";
            }
            // line 4
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 5
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\" ";
                if ((($context["selected"] ?? null) == $context["val"])) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            yield "    </select>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function macro_selectboxtld($__name__ = null, $__options__ = null, $__selected__ = null, $__required__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "required" => $__required__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "    <select name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" class=\"form-control";
            if (($context["required"] ?? null)) {
                yield " is-required";
            }
            yield "\" style=\"width: 80px;\">
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 13), "html", null, true);
                yield "\" ";
                if ((($context["selected"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 13))) {
                    yield "selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 13), "html", null, true);
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "    </select>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function macro_currency_format($__price__ = null, $__currency__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "price" => $__price__,
            "currency" => $__currency__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 20
            yield "    ";
            yield $this->extensions['Box_TwigExtensions']->twig_money($this->env, ($context["price"] ?? null), ($context["currency"] ?? null));
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function macro_currency($__price__ = null, $__currency__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "price" => $__price__,
            "currency" => $__currency__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 25
            yield "    ";
            yield $this->extensions['Box_TwigExtensions']->twig_money_convert($this->env, ($context["price"] ?? null), ($context["currency"] ?? null));
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function macro_status_name($__status__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "status" => $__status__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 29
            yield "    ";
            $context["status"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["status"] ?? null), ["_" => " "])));
            // line 30
            yield "    ";
            if ((($context["status"] ?? null) == "Active")) {
                // line 31
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Active"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 32
($context["status"] ?? null) == "Pending Setup")) {
                // line 33
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Pending Setup"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 34
($context["status"] ?? null) == "Failed Setup")) {
                // line 35
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Failed Setup"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 36
($context["status"] ?? null) == "Failed Renew")) {
                // line 37
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Failed Renewal"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 38
($context["status"] ?? null) == "Suspended")) {
                // line 39
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Suspended"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 40
($context["status"] ?? null) == "Canceled")) {
                // line 41
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Canceled"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 42
($context["status"] ?? null) == "Paid")) {
                // line 43
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Paid"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 44
($context["status"] ?? null) == "Unpaid")) {
                // line 45
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Unpaid"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 46
($context["status"] ?? null) == "Refunded")) {
                // line 47
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Refunded"), "html", null, true);
                yield "
    ";
            } else {
                // line 49
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans(($context["status"] ?? null)), "html", null, true);
                yield "
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 54
    public function macro_period_name($__period__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "period" => $__period__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 55
            yield "    ";
            yield $this->extensions['Box_TwigExtensions']->twig_period_title($this->env, ($context["period"] ?? null));
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function macro_markdown_quote($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 59
            yield "


";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["text"] ?? null), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 63
                yield "> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["line"], "html", null, true);
                yield "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 68
    public function macro_recaptcha(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 69
            yield "
";
            // line 70
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "spamchecker"]], "method", false, false, false, 70)) {
                // line 71
                $context["rc"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "spamchecker_recaptcha", [], "any", false, false, false, 71);
                // line 72
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["rc"] ?? null), "enabled", [], "any", false, false, false, 72)) {
                    // line 73
                    yield "        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["rc"] ?? null), "version", [], "any", false, false, false, 73) == 2)) {
                        // line 74
                        yield "            <script src='https://www.google.com/recaptcha/api.js' async defer></script>
            <div class=\"g-recaptcha\" data-sitekey=\"";
                        // line 75
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["rc"] ?? null), "publickey", [], "any", false, false, false, 75), "html", null, true);
                        yield "\"></div>
        ";
                    }
                    // line 77
                    yield "    ";
                }
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "macro_functions.html.twig";
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
        return array (  393 => 77,  388 => 75,  385 => 74,  382 => 73,  379 => 72,  377 => 71,  375 => 70,  372 => 69,  361 => 68,  348 => 63,  343 => 62,  338 => 59,  326 => 58,  317 => 55,  305 => 54,  295 => 49,  289 => 47,  287 => 46,  282 => 45,  280 => 44,  275 => 43,  273 => 42,  268 => 41,  266 => 40,  261 => 39,  259 => 38,  254 => 37,  252 => 36,  247 => 35,  245 => 34,  240 => 33,  238 => 32,  233 => 31,  230 => 30,  227 => 29,  215 => 28,  206 => 25,  193 => 24,  184 => 20,  171 => 19,  164 => 15,  149 => 13,  145 => 12,  136 => 11,  121 => 10,  114 => 7,  99 => 5,  94 => 4,  88 => 3,  79 => 2,  63 => 1,  56 => 66,  53 => 57,  50 => 52,  47 => 27,  44 => 22,  41 => 17,  38 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "macro_functions.html.twig", "C:\\xampp\\htdocs\\themes\\huraga\\html/macro_functions.html.twig");
    }
}
