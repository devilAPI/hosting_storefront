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

/* mod_orderbutton_choose_product.html.twig */
class __TwigTemplate_6f23c209afc8aea7765e7d0e484f245d extends Template
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
        $context["products"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "product_get_list", [], "any", false, false, false, 1);
        // line 2
        yield "<div class=\"accordion-item\">
    <h2 class=\"accordion-header\">
        <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#products\" aria-expanded=\"false\" aria-controls=\"products\">
            <svg class=\"svg-icon me-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M16.7 4.5L19.5 7.3L16.7 10.1L13.9 7.3L16.7 4.5M9 5V9H5V5H9M19 15V19H15V15H19M16.7 1.7L11 7.3L16.7 13H13V21H21V13H16.7L22.3 7.3L16.7 1.7M11 3H3V11H11V3M9 15V19H5V15H9M11 13H3V21H11V13Z\" /></svg>
            <span>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Select Product"), "html", null, true);
        yield "</span>&nbsp;<span class=\"badge bg-info\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["products"] ?? null), "list", [], "any", false, false, false, 6)), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Items"), "html", null, true);
        yield "</span>
        </button>
    </h2>
    <div id=\"products\" class=\"accordion-collapse collapse\" data-bs-parent=\"#orderManager\">
        <div class=\"accordion-body\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "product_category_get_list", [], "any", false, false, false, 11), "list", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["i"] => $context["category"]) {
            // line 12
            yield "                <h5 ";
            if (($context["i"] > 0)) {
                yield " class=\"mt-3\" ";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 12), "html", null, true);
            yield "</h5>
                <span>";
            // line 13
            yield $this->extensions['Box_TwigExtensions']->twig_markdown_filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 13));
            yield "</span>
                <div class=\"list-group\">
                    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->extensions['Box_TwigExtensions']->filteredSort(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 15), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "priority", [], "any", false, false, false, 15) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "priority", [], "any", false, false, false, 15)); }));
            foreach ($context['_seq'] as $context["i"] => $context["product"]) {
                // line 16
                yield "                        <a class=\"list-group-item\" href=\"";
                yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order", ["product" => CoreExtension::getAttribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 16), "show_custom_form_values" => CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "show_custom_form_values", [], "any", false, false, false, 16)]);
                yield "\">
                            ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "title", [], "any", false, false, false, 17), "html", null, true);
                yield "
                            <svg class=\"svg-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\"><path d=\"M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z\" /></svg>
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "        </div>
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
        return "mod_orderbutton_choose_product.html.twig";
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
        return array (  102 => 23,  95 => 21,  85 => 17,  80 => 16,  76 => 15,  71 => 13,  62 => 12,  58 => 11,  46 => 6,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_choose_product.html.twig", "C:\\xampp\\htdocs\\modules\\Orderbutton\\html_client/mod_orderbutton_choose_product.html.twig");
    }
}
