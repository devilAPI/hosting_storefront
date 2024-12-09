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

/* mod_orderbutton_index.html.twig */
class __TwigTemplate_6ef07b2459fb60256ba5b92ecfdfd567 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout_public.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["loader_nr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", true, true, false, 2)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["request"] ?? null), "loader", [], "any", false, false, false, 2), "8")) : ("8"));
        // line 3
        $context["loader_url"] = (("img/assets/loaders/loader" . ($context["loader_nr"] ?? null)) . ".gif");
        // line 1
        $this->parent = $this->loadTemplate("layout_public.html.twig", "mod_orderbutton_index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Order"), "html", null, true);
        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        yield "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"card border-0\" id=\"orderbutton\" style=\"margin-bottom: 0\">
            <div class=\"card-body p-1\">
                <div id=\"orderManager\" class=\"accordion\">

                    ";
        // line 13
        yield from         $this->loadTemplate("mod_orderbutton_choose_product.html.twig", "mod_orderbutton_index.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "
                    ";
        // line 15
        yield from         $this->loadTemplate("mod_orderbutton_product_configuration.html.twig", "mod_orderbutton_index.html.twig", 15)->unwrap()->yield($context);
        // line 16
        yield "
                    ";
        // line 17
        if ( !($context["client"] ?? null)) {
            // line 18
            yield "                        ";
            yield from             $this->loadTemplate("mod_orderbutton_client.html.twig", "mod_orderbutton_index.html.twig", 18)->unwrap()->yield($context);
            // line 19
            yield "                    ";
        }
        // line 20
        yield "
                    ";
        // line 21
        yield from         $this->loadTemplate("mod_orderbutton_checkout.html.twig", "mod_orderbutton_index.html.twig", 21)->unwrap()->yield($context);
        // line 22
        yield "
                    <div class=\"accordion-item\">
                        <h2 class=\"accordion-header\">
                            <button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                                    data-bs-target=\"#payment-html\" aria-expanded=\"false\" aria-controls=\"payment-html\">
                                <svg class=\"svg-icon me-2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\">
                                    <path
                                        d=\"M20,8H4V6H20M20,18H4V12H20M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z\"/>
                                </svg>
                                ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Payment"), "html", null, true);
        yield "
                            </button>
                        </h2>
                        <div id=\"payment-html\" class=\"accordion-collapse collapse\" data-bs-parent=\"#orderManager\">
                            <div class=\"accordion-body\">
                                <div class=\"accordion-inner\" id=\"payment-html-inner\"></div>
                            </div>
                        </div>
                    </div>

                </div>
                ";
        // line 42
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [["mod" => "branding"]], "method", false, false, false, 42)) {
            // line 43
            yield "                    <div class=\"d-flex justify-content-center small text-muted pt-3 pb-2\">
                        <span>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("Powered by"), "html", null, true);
            yield "</span>&nbsp;<a href=\"https://fossbilling.org\"
                                                                      title=\"Billing Software\" target=\"_blank\">FOSSBilling
                            Community</a>
                    </div>
                ";
        }
        // line 49
        yield "
            </div>
        </div>
    </div>
</div>
<div class=\"loading\"
     style=\"display: none; background: rgba(0,0,0,.5) no-repeat; width:100%; height:100%; position:fixed; top:0; left:0; z-index:999;\">
    <img src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Box_TwigExtensions']->twig_mod_asset_url(($context["loader_url"] ?? null), "orderbutton"), "html", null, true);
        yield "\"
         style=\"display: block; margin-left: auto; margin-right: auto;position: relative; top : 50%\">
</div>
";
        return; yield '';
    }

    // line 60
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        yield "<script>
    \$(function () {
        \$('.accordion-body').on('shown', function () {
            \$('#popup-iframe').height(\$('body').height());
        });

        \$('#show-promo-field').on('click', function (event) {
            \$('#apply-promo').show();
            \$(this).hide();
            \$('#promocode').focus();
        });

        \$('.register-login a').on('click', function (e) {
            e.preventDefault();
            \$(this).tab('show');
        });

    });

    function onOrderCheckout(result){
        if (result.invoice_hash) {
            bb.post('guest/invoice/payment', {
            hash: result.invoice_hash,
            gateway_id: result.gateway_id,
            auto_redirect: true
            }, function (r) {
                let checkoutEl = document.getElementById('checkout');
                let paymentHtmlEl = document.getElementById('payment-html');
                if (r.iframe) {
                    \$('#payment-html-inner').html(r.result);
                    bootstrap.Collapse.getOrCreateInstance(checkoutEl).hide();
                    \$('#checkout').remove();
                    bootstrap.Collapse.getOrCreateInstance(paymentHtmlEl).show();
                } else {
                    var link = '";
        // line 95
        yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("invoice/banklink");
        yield "' + '/' + result.invoice_hash + '/' + result.gateway_id;
                    \$('#payment-html-inner').html('<a href=\"' + link + '\" target=\"_parent\" id=\"redirect-to-gateway\">Redirect to payment gateway</a>');
                    bootstrap.Collapse.getOrCreateInstance(checkoutEl).hide();
                    \$('#checkout-inner').remove();
                    bootstrap.Collapse.getOrCreateInstance(paymentHtmlEl).show();
                    \$('#redirect-to-gateway')[0].click();
                }
            });
        } else {
            window.top.location.href = ('";
        // line 104
        yield $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order/service/manage");
        yield "' + '/' + result.order_id);
        }
    }

    function onLogin(result){
        FOSSBilling.message(\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("You logged in successfully"), "html", null, true);
        yield "\");
        let registerEl = document.getElementById('register');
        new bootstrap.Collapse('#register').hide();
        setTimeout(() => {
            registerEl.parentElement.remove();
            new bootstrap.Collapse('#checkout').show();
        }, 500);
    }

    function onAccountCreate(result){
        //login after registration
        var login_details = {
            email: \$('#reg-email').val(),
            password: \$('#reg-password').val()
        };
        bb.post(
            'guest/client/login',
            login_details,
            function (result) {
                FOSSBilling.message(\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(__trans("You logged in successfully"), "html", null, true);
        yield "\");
                let registerEl = document.getElementById('register');
                new bootstrap.Collapse('#register').hide();
                setTimeout(() => {
                    registerEl.parentElement.remove();
                    new bootstrap.Collapse('#checkout').show();
                    }, 500);
            }
        );
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
        return "mod_orderbutton_index.html.twig";
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
        return array (  235 => 128,  213 => 109,  205 => 104,  193 => 95,  157 => 61,  153 => 60,  144 => 56,  135 => 49,  127 => 44,  124 => 43,  122 => 42,  108 => 31,  97 => 22,  95 => 21,  92 => 20,  89 => 19,  86 => 18,  84 => 17,  81 => 16,  79 => 15,  76 => 14,  74 => 13,  66 => 7,  62 => 6,  54 => 4,  49 => 1,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "mod_orderbutton_index.html.twig", "C:\\xampp\\htdocs\\modules\\Orderbutton\\html_client/mod_orderbutton_index.html.twig");
    }
}
