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

/* mod_order_index.html.twig */
class __TwigTemplate_09e8d688e05cfe2b5f415382fb2dedfa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'body_class' => [$this, 'block_body_class'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'sidebar2' => [$this, 'block_sidebar2'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.html.twig") : ("layout_default.html.twig")), "mod_order_index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.html.twig", "mod_order_index.html.twig", 3)->unwrap();
        // line 7
        $context["loader_nr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", false, false, false, 7), "8")) : ("8"));
        // line 8
        $context["loader_url"] = (("img/assets/loaders/loader" . ($context["loader_nr"] ?? null)) . ".gif");
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Order"), "html", null, true);
        return; yield '';
    }

    // line 10
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "order-index";
        return; yield '';
    }

    // line 11
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        yield "    <li class=\"active breadcrumb-item\" aria-current=\"page\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Order"), "html", null, true);
        yield "</li>
";
        return; yield '';
    }

    // line 14
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        yield "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card mb-4\">
                <div class=\"card-header py-3 py-3\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"w-100\">
                            <h5 class=\"mb-1\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Products"), "html", null, true);
        yield "</h5>
                            ";
        // line 24
        yield from         $this->loadTemplate("mod_orderbutton_currency.html.twig", "mod_order_index.html.twig", 24)->unwrap()->yield($context);
        // line 25
        yield "                        </div>
                    </div>
                </div>
                <div class=\"card-body overflow-hidden\">
                    ";
        // line 29
        yield from         $this->loadTemplate("mod_orderbutton_index.html.twig", "mod_order_index.html.twig", 29)->unwrap()->yield($context);
        // line 30
        yield "                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 36
    public function block_sidebar2($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        yield "    ";
        yield from         $this->loadTemplate("partial_currency.html.twig", "mod_order_index.html.twig", 37)->unwrap()->yield($context);
        return; yield '';
    }

    // line 40
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        yield "<script type=\"text/javascript\">
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
        \$('#loader-image').hide();
    }
</script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "mod_order_index.html.twig";
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
        return array (  143 => 41,  139 => 40,  133 => 37,  129 => 36,  120 => 30,  118 => 29,  112 => 25,  110 => 24,  106 => 23,  98 => 17,  94 => 16,  87 => 14,  79 => 12,  75 => 11,  67 => 10,  59 => 5,  55 => 1,  53 => 8,  51 => 7,  49 => 3,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_order_index.html.twig", "C:\\xampp\\htdocs\\modules\\Order\\html_client/mod_order_index.html.twig");
    }
}
