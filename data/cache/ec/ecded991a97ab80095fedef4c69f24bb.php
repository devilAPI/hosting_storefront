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

/* mod_staff_login.html.twig */
class __TwigTemplate_089ca714b5486777071c05f2a554678e extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout_login.html.twig", "mod_staff_login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Login"), "html", null, true);
        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        yield "
<div class=\"page page-center\">
    <div class=\"container-tight py-4\">
        <div class=\"text-center mb-4\">
            <a href=\"";
        // line 10
        yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        yield "\" class=\"navbar-brand\">
                <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 11), "logo_url", [], "any", false, false, false, 11), "html", null, true);
        yield "\" height=\"75\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        yield "\">
            </a>
        </div>
        <div class=\"card card-md\">
            <div class=\"card-body\">
                ";
        // line 16
        if (($context["create_admin"] ?? null)) {
            // line 17
            yield "                    <h2 class=\"card-title text-center mb-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Create main administrator account"), "html", null, true);
            yield "</h2>
                    <form class=\"api-form\" action=\"";
            // line 18
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/staff/create");
            yield "\" method=\"post\" data-api-redirect=\"";
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("index");
            yield "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
            yield "\"/>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"inputEmail\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Email"), "html", null, true);
            yield "</label>
                            <div class=\"col\">
                                <input class=\"form-control\" id=\"inputEmail\" type=\"email\" name=\"email\" value=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 23), "html", null, true);
            yield "\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Enter your email address"), "html", null, true);
            yield "\">
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"inputPassword\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Password"), "html", null, true);
            yield "</label>
                            <div class=\"col\">
                                <input class=\"form-control\" id=\"inputPassword\" type=\"password\" name=\"password\" value=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 29), "html", null, true);
            yield "\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Enter your password"), "html", null, true);
            yield "\">
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <button class=\"btn btn-primary w-100\" type=\"submit\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Create administrator account"), "html", null, true);
            yield "</button>
                        </div>
                    </form>
                ";
        } else {
            // line 37
            yield "                ";
            $context["params"] = CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_settings", [["ext" => "mod_staff"]], "method", false, false, false, 37);
            // line 38
            yield "                    <h2 class=\"h2 text-center mb-4\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Log into your account"), "html", null, true);
            yield "</h2>
                    <form class=\"api-form\" action=\"";
            // line 39
            yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/guest/staff/login");
            yield "\" method=\"post\" data-api-redirect=\"";
            yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter(((array_key_exists("redirect_uri", $context)) ? (Twig\Extension\CoreExtension::default(($context["redirect_uri"] ?? null), "/")) : ("/")));
            yield "\">
                        <input type=\"hidden\" name=\"CSRFToken\" value=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["CSRFToken"] ?? null), "html", null, true);
            yield "\"/>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"inputEmail\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Email"), "html", null, true);
            yield "</label>
                            <input class=\"form-control\"
                                id=\"inputEmail\"
                                type=\"email\"
                                name=\"email\"
                                value=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 47), "html", null, true);
            yield "\"
                                placeholder=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Enter your email address"), "html", null, true);
            yield "\"
                                required
                                autofocus>
                        </div>
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"inputPassword\">
                                ";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Password"), "html", null, true);
            yield "
                                ";
            // line 55
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["params"] ?? null), "reset_pw", [], "any", false, false, false, 55) == 1)) {
                // line 56
                yield "                                <span class=\"form-label-description\">
                                    <a href=\"";
                // line 57
                yield $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("staff/passwordreset");
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Forgot your password?"), "html", null, true);
                yield "</a>
                                </span>
                                ";
            }
            // line 60
            yield "                            </label>
                            <input class=\"form-control\"
                                id=\"inputPassword\"
                                type=\"password\"
                                name=\"password\"
                                value=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 65), "html", null, true);
            yield "\"
                                placeholder=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Enter your password"), "html", null, true);
            yield "\"
                                required>
                        </div>
                        <div class=\"form-footer\">
                            <button class=\"btn btn-primary w-100\" type=\"submit\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Login"), "html", null, true);
            yield "</button>
                        </div>
                    </form>
                ";
        }
        // line 74
        yield "            </div>
        </div>
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
        return "mod_staff_login.html.twig";
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
        return array (  215 => 74,  208 => 70,  201 => 66,  197 => 65,  190 => 60,  182 => 57,  179 => 56,  177 => 55,  173 => 54,  164 => 48,  160 => 47,  152 => 42,  147 => 40,  141 => 39,  136 => 38,  133 => 37,  126 => 33,  117 => 29,  112 => 27,  103 => 23,  98 => 21,  93 => 19,  87 => 18,  82 => 17,  80 => 16,  70 => 11,  66 => 10,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_staff_login.html.twig", "C:\\xampp\\htdocs\\modules\\Staff\\html_admin/mod_staff_login.html.twig");
    }
}
