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
class __TwigTemplate_4738abac3c4c5d945893c3a9022725ea extends Template
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
        // line 8
        yield "
";
        // line 17
        yield "
";
        // line 25
        yield "
";
        // line 62
        yield "
";
        // line 79
        yield "
";
        // line 103
        yield "
";
        // line 128
        yield "
";
        // line 132
        yield "
";
        // line 139
        yield "
";
        // line 147
        yield "
";
        return; yield '';
    }

    // line 1
    public function macro_q($__bool__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "bool" => $__bool__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "    ";
            if (($context["bool"] ?? null)) {
                // line 3
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Yes"), "html", null, true);
                yield "
    ";
            } else {
                // line 5
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("No"), "html", null, true);
                yield "
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 9
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
            // line 10
            yield "    <select class=\"form-select\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\"";
            if (($context["required"] ?? null)) {
                yield " required";
            }
            yield ">
        ";
            // line 11
            if (($context["nullOption"] ?? null)) {
                yield "<option value=\"\">-- ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["nullOption"] ?? null), "html", null, true);
                yield " --</option>";
            }
            // line 12
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 13
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["val"], "html", null, true);
                yield "\" label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"]);
                yield "\" ";
                if ((($context["selected"] ?? null) == $context["val"])) {
                    yield "selected=\"selected\"";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"]);
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            yield "    </select>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 18
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
            // line 19
            yield "    <select class=\"form-select\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] ?? null), "html", null, true);
            yield "\"";
            if (($context["required"] ?? null)) {
                yield " required";
            }
            yield ">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 21
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 21), "html", null, true);
                yield "\" label=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 21), "html", null, true);
                yield "\"";
                if ((($context["selected"] ?? null) == CoreExtension::getAttribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 21))) {
                    yield " selected";
                }
                yield ">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "tld", [], "any", false, false, false, 21), "html", null, true);
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            yield "    </select>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function macro_build_form($__elements__ = null, $__values__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "elements" => $__elements__,
            "values" => $__values__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 27
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["elements"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["element"]) {
                // line 28
                yield "    <div class=\"mb-3 row\">
        ";
                // line 29
                if (((($__internal_compile_0 = $context["element"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null) == "select")) {
                    // line 30
                    yield "        <label class=\"form-label col-3 col-form-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 = $context["element"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "label", [], "any", false, false, false, 30), "html", null, true);
                    if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = $context["element"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "description", [], "any", false, false, false, 30)) {
                        yield " - ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = $context["element"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "description", [], "any", false, false, false, 30), "html", null, true);
                    }
                    yield "</label>
        <div class=\"col\">
            <select class=\"form-select\" name=\"config[";
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "]\">
            ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_4 = $context["element"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[1] ?? null) : null), "multiOptions", [], "any", false, false, false, 33));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 34
                        yield "                <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                        yield "\"";
                        if (($context["k"] == (($__internal_compile_5 = ($context["values"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["name"]] ?? null) : null))) {
                            yield " selected";
                        }
                        yield "/><label>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                        yield "</label>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    yield "            </select>
        </div>
        ";
                } elseif (((($__internal_compile_6 =                 // line 38
$context["element"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null) == "radio")) {
                    // line 39
                    yield "        <label class=\"form-label col-3 col-form-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_7 = $context["element"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[1] ?? null) : null), "label", [], "any", false, false, false, 39), "html", null, true);
                    if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_8 = $context["element"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[1] ?? null) : null), "description", [], "any", false, false, false, 39)) {
                        yield " - ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_9 = $context["element"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[1] ?? null) : null), "description", [], "any", false, false, false, 39), "html", null, true);
                    }
                    yield "</label>
        <div class=\"col\">
            ";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_10 = $context["element"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10[1] ?? null) : null), "multiOptions", [], "any", false, false, false, 41));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 42
                        yield "                <div class=\"form-check form-check-inline\">
                    <input class=\"form-check-input\" id=\"el-";
                        // line 43
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] . $context["k"]), "html", null, true);
                        yield "\" type=\"radio\" name=\"config[";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                        yield "]\" value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                        yield "\"";
                        if (($context["k"] == (($__internal_compile_11 = ($context["values"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["name"]] ?? null) : null))) {
                            yield " checked";
                        }
                        yield ">
                    <label class=\"form-check-label\" for=\"el-";
                        // line 44
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["name"] . $context["k"]), "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["v"], "html", null, true);
                        yield "</label>
                </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    yield "        </div>
        ";
                } elseif (((($__internal_compile_12 =                 // line 48
$context["element"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[0] ?? null) : null) == "textarea")) {
                    // line 49
                    yield "        <label class=\"form-label col-3 col-form-label\" for=\"el-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_13 = $context["element"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[1] ?? null) : null), "label", [], "any", false, false, false, 49), "html", null, true);
                    if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_14 = $context["element"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14[1] ?? null) : null), "description", [], "any", false, false, false, 49)) {
                        yield " - ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_15 = $context["element"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[1] ?? null) : null), "description", [], "any", false, false, false, 49), "html", null, true);
                    }
                    yield "</label>
        <div class=\"col\">
            <textarea class=\"form-control\" id=\"el-";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "\" name=\"config[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "]\" rows=\"20\" required>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_16 = ($context["values"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16[$context["name"]] ?? null) : null), "html", null, true);
                    yield "</textarea>
        </div>
        ";
                } else {
                    // line 54
                    yield "        <label class=\"form-label col-3 col-form-label\" for=\"el-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_17 = $context["element"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[1] ?? null) : null), "label", [], "any", false, false, false, 54), "html", null, true);
                    if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_18 = $context["element"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18[1] ?? null) : null), "description", [], "any", false, false, false, 54)) {
                        yield " - ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_19 = $context["element"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[1] ?? null) : null), "description", [], "any", false, false, false, 54), "html", null, true);
                    }
                    yield "</label>
        <div class=\"col\">
            <input class=\"form-control\" id=\"el-";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "\" type=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_20 = $context["element"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20[0] ?? null) : null), "html", null, true);
                    yield "\" name=\"config[";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                    yield "]\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_21 = ($context["values"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[$context["name"]] ?? null) : null), "html", null, true);
                    yield "\"";
                    if (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], 1, [], "array", false, true, false, 56), "required", [], "any", true, true, false, 56) && ( !CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_22 = $context["element"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[1] ?? null) : null), "required", [], "any", false, false, false, 56) == "false"))) {
                        yield " required";
                    }
                    yield ">
        </div>
        ";
                }
                // line 59
                yield "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 63
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
            // line 64
            yield "    ";
            $context["c"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get", [["code" => ($context["currency"] ?? null)]], "method", false, false, false, 64);
            // line 65
            yield "    ";
            $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["price"] ?? null));
            // line 66
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 66) == 1)) {
                // line 67
                yield "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ".", "");
                // line 68
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 68) == 2)) {
                // line 69
                yield "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ".", ",");
                // line 70
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 70) == 3)) {
                // line 71
                yield "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ",", ".");
                // line 72
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 72) == 4)) {
                // line 73
                yield "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "0", "", ",");
                // line 74
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 74) == 5)) {
                // line 75
                yield "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), 0, "", "");
                // line 76
                yield "    ";
            }
            // line 77
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "format", [], "any", false, false, false, 77), ["{{price}}" => ($context["p"] ?? null)]), "html", null, true);
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 80
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
            // line 81
            yield "    ";
            if ((($context["currency"] ?? null) == null)) {
                // line 82
                yield "        ";
                $context["c"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get_currency", [], "any", false, false, false, 82);
                // line 83
                yield "    ";
            } else {
                // line 84
                yield "        ";
                $context["c"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get", [["code" => ($context["currency"] ?? null)]], "method", false, false, false, 84);
                // line 85
                yield "    ";
            }
            // line 86
            yield "
    ";
            // line 87
            $context["p"] = (($context["price"] ?? null) * CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "conversion_rate", [], "any", false, false, false, 87));
            // line 88
            yield "
    ";
            // line 89
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 89) == 1)) {
                // line 90
                yield "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ".", "");
                // line 91
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 91) == 2)) {
                // line 92
                yield "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ".", ",");
                // line 93
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 93) == 3)) {
                // line 94
                yield "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "2", ",", ".");
                // line 95
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 95) == 4)) {
                // line 96
                yield "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), "0", "", ",");
                // line 97
                yield "    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "price_format", [], "any", false, false, false, 97) == 5)) {
                // line 98
                yield "        ";
                $context["p"] = $this->extensions['Box_TwigExtensions']->twig_number_filter(($context["p"] ?? null), 0, "", "");
                // line 99
                yield "    ";
            }
            // line 100
            yield "
    ";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["c"] ?? null), "format", [], "any", false, false, false, 101), ["{{price}}" => ($context["p"] ?? null)]), "html", null, true);
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 104
    public function macro_status_name($__status__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "status" => $__status__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 105
            yield "    ";
            $context["status"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["status"] ?? null), ["_" => " "])));
            // line 106
            yield "    ";
            if ((($context["status"] ?? null) == "Active")) {
                // line 107
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Active"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 108
($context["status"] ?? null) == "Pending Setup")) {
                // line 109
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Pending Setup"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 110
($context["status"] ?? null) == "Failed Setup")) {
                // line 111
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Failed Setup"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 112
($context["status"] ?? null) == "Failed Renew")) {
                // line 113
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Failed Renewal"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 114
($context["status"] ?? null) == "Suspended")) {
                // line 115
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Suspended"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 116
($context["status"] ?? null) == "Canceled")) {
                // line 117
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Canceled"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 118
($context["status"] ?? null) == "Paid")) {
                // line 119
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Paid"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 120
($context["status"] ?? null) == "Unpaid")) {
                // line 121
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Unpaid"), "html", null, true);
                yield "
    ";
            } elseif ((            // line 122
($context["status"] ?? null) == "Refunded")) {
                // line 123
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Refunded"), "html", null, true);
                yield "
    ";
            } else {
                // line 125
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans(($context["status"] ?? null)), "html", null, true);
                yield "
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 129
    public function macro_period_name($__period__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "period" => $__period__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 130
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_period_title", [["code" => ($context["period"] ?? null)]], "method", false, false, false, 130), "html", null, true);
            yield "
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function macro_markdown_quote($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 134
            yield "
";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), ($context["text"] ?? null), "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 136
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

    // line 140
    public function macro_bb_editor($__selector__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "selector" => $__selector__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 141
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "wysiwyg"]], "method", false, false, false, 141)) {
                // line 142
                yield from                 $this->loadTemplate("mod_wysiwyg_js.html.twig", "macro_functions.html.twig", 142)->unwrap()->yield(CoreExtension::merge($context, ["class" => Twig\Extension\CoreExtension::trim(($context["selector"] ?? null), ".#")]));
            } else {
                // line 144
                yield "<!-- No WYSIWYG, no fancy stuff. Enable the WYSIWYG extension for a better management experience. -->
";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 148
    public function macro_table_search(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 149
            yield "<div style=\"position: relative;\">
    <div class=\"dataTables_filter\">
        <form method=\"get\" action=\"\">
            <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
            yield "\"/>
            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "_url", [], "any", false, false, false, 153), "html", null, true);
            yield "\"/>
            <label>";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Search:"), "html", null, true);
            yield " <input type=\"text\" name=\"search\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Enter search text..."), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "search", [], "any", false, false, false, 154), "html", null, true);
            yield "\"><div class=\"srch\"></div></label>
        </form>
    </div>
</div>
";
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
        return array (  717 => 154,  713 => 153,  709 => 152,  704 => 149,  693 => 148,  685 => 144,  682 => 142,  680 => 141,  668 => 140,  655 => 136,  650 => 135,  647 => 134,  635 => 133,  626 => 130,  614 => 129,  604 => 125,  598 => 123,  596 => 122,  591 => 121,  589 => 120,  584 => 119,  582 => 118,  577 => 117,  575 => 116,  570 => 115,  568 => 114,  563 => 113,  561 => 112,  556 => 111,  554 => 110,  549 => 109,  547 => 108,  542 => 107,  539 => 106,  536 => 105,  524 => 104,  516 => 101,  513 => 100,  510 => 99,  507 => 98,  504 => 97,  501 => 96,  498 => 95,  495 => 94,  492 => 93,  489 => 92,  486 => 91,  483 => 90,  481 => 89,  478 => 88,  476 => 87,  473 => 86,  470 => 85,  467 => 84,  464 => 83,  461 => 82,  458 => 81,  445 => 80,  436 => 77,  433 => 76,  430 => 75,  427 => 74,  424 => 73,  421 => 72,  418 => 71,  415 => 70,  412 => 69,  409 => 68,  406 => 67,  403 => 66,  400 => 65,  397 => 64,  384 => 63,  373 => 59,  357 => 56,  345 => 54,  335 => 51,  323 => 49,  321 => 48,  318 => 47,  307 => 44,  295 => 43,  292 => 42,  288 => 41,  278 => 39,  276 => 38,  272 => 36,  257 => 34,  253 => 33,  249 => 32,  239 => 30,  237 => 29,  234 => 28,  229 => 27,  216 => 26,  209 => 23,  192 => 21,  188 => 20,  179 => 19,  164 => 18,  157 => 15,  140 => 13,  135 => 12,  129 => 11,  118 => 10,  102 => 9,  92 => 5,  86 => 3,  83 => 2,  71 => 1,  65 => 147,  62 => 139,  59 => 132,  56 => 128,  53 => 103,  50 => 79,  47 => 62,  44 => 25,  41 => 17,  38 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "macro_functions.html.twig", "C:\\xampp\\htdocs\\themes\\admin_default\\html/macro_functions.html.twig");
    }
}
