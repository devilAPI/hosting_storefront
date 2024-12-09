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

/* layout_login.html.twig */
class __TwigTemplate_3c15cd60ea6afe99ad09d8da4c2aab07 extends Template
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
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('meta_title', $context, $blocks);
        yield "</title>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"csrf-token\" content=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
        yield "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 10), "favicon_url", [], "any", false, false, false, 10), "html", null, true);
        yield "\">

    ";
        // line 12
        yield from         $this->loadTemplate("partial_bb_meta.html.twig", "layout_login.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "
    ";
        // line 14
        yield $this->env->getFunction('encore_entry_link_tags')->getCallable()("fossbilling");
        yield "
    ";
        // line 15
        yield $this->extensions['Box_TwigExtensions']->twig_script_tag($this->extensions['Box_TwigExtensions']->twig_library_url("Api/API.js"));
        yield "
    ";
        // line 16
        yield $this->env->getFunction('encore_entry_script_tags')->getCallable()("fossbilling");
        yield "
</head>

<body class=\"border-top-wide border-primary d-flex flex-column\" data-bs-theme=\"dark\">
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.body.setAttribute(\"data-bs-theme\", localStorage.getItem('theme'));
        } else {
            document.body.removeAttribute(\"data-bs-theme\");
        }
    </script>

    ";
        // line 28
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 29
        yield "    ";
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 30
        yield "
    <div class=\"d-none\">
        ";
        // line 32
        yield from         $this->loadTemplate("../build/symbol/icons-sprite.svg", "layout_login.html.twig", 32)->unwrap()->yield($context);
        // line 33
        yield "    </div>
    <div class=\"toast-container position-fixed bottom-0 end-0 p-3\" style=\"z-index: 1070;\">
    </div>
</body>
</html>
";
        return; yield '';
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    // line 29
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
        return "layout_login.html.twig";
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
        return array (  126 => 29,  119 => 28,  112 => 4,  102 => 33,  100 => 32,  96 => 30,  93 => 29,  91 => 28,  76 => 16,  72 => 15,  68 => 14,  65 => 13,  63 => 12,  58 => 10,  53 => 8,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout_login.html.twig", "C:\\xampp\\htdocs\\themes\\admin_default\\html/layout_login.html.twig");
    }
}
