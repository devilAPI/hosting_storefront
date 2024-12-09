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

/* layout_public.html.twig */
class __TwigTemplate_5a6f9196746c8feeb9084e239bcfa772 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\" data-bs-theme=\"";
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
        yield "
    <link rel='stylesheet' type='text/css' href=\"";
        // line 19
        yield $this->extensions['Box_TwigExtensions']->twig_asset_url($this->env, "css/font-awesome.css");
        yield "\">
    ";
        // line 20
        yield $this->env->getFunction('encore_entry_link_tags')->getCallable()("huraga");
        yield "

    <link rel=\"shortcut icon\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 22), "favicon_url", [], "any", false, false, false, 22), "html", null, true);
        yield "\">

    ";
        // line 24
        yield $this->extensions['Box_TwigExtensions']->twig_script_tag($this->extensions['Box_TwigExtensions']->twig_library_url("Api/API.js"));
        yield "
    ";
        // line 25
        yield $this->env->getFunction('encore_entry_script_tags')->getCallable()("huraga");
        yield "
    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 27
        yield "    ";
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 28
        yield "</head>
<body>
    ";
        // line 30
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 31
        yield "    <div aria-live=\"polite\" aria-atomic=\"true\" class=\"position-relative\">
        <div class=\"toast-container position-fixed bottom-0 end-0 p-3\" style=\"z-index: 1070;\"></div>
    </div>
    ";
        // line 34
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("partial_pending_messages.html.twig", "layout_public.html.twig", 34);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            yield from $__internal_compile_0->unwrap()->yield($context);
        }
        // line 35
        yield "</body>
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

    // line 26
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 27
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 30
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout_public.html.twig";
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
        return array (  183 => 30,  176 => 27,  169 => 26,  162 => 17,  154 => 11,  146 => 5,  139 => 35,  129 => 34,  124 => 31,  122 => 30,  118 => 28,  115 => 27,  113 => 26,  109 => 25,  105 => 24,  100 => 22,  95 => 20,  91 => 19,  88 => 18,  86 => 17,  79 => 13,  75 => 12,  71 => 11,  66 => 9,  62 => 8,  58 => 7,  53 => 5,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_public.html.twig", "C:\\xampp\\htdocs\\themes\\huraga\\html/layout_public.html.twig");
    }
}
