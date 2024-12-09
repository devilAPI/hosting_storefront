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

/* ../build/symbol/icons-sprite.svg */
class __TwigTemplate_c1be68f7089668448b0fc0ee0c4810b5 extends Template
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
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\"><defs><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-alert-triangle\" viewBox=\"0 0 24 24\" id=\"alert-triangle\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M12 9v2m0 4v.01M5 19h14a2 2 0 0 0 1.84-2.75L13.74 4a2 2 0 0 0-3.5 0l-7.1 12.25A2 2 0 0 0 4.89 19\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-arrow-back-up\" viewBox=\"0 0 24 24\" id=\"arrow-back-up\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M9 13 5 9l4-4M5 9h11a4 4 0 0 1 0 8h-1\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-arrow-right\" viewBox=\"0 0 24 24\" id=\"arrow-right\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M5 12h14M13 18l6-6M13 6l6 6\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"arrow-sm-left\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m11 17-5-5m0 0 5-5m-5 5h12\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-arrow-up\" viewBox=\"0 0 24 24\" id=\"arrow-up\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M12 5v14M18 11l-6-6M6 11l6-6\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-brand-github\" viewBox=\"0 0 24 24\" id=\"brand-github\"><desc>Download more icon variants from https://tabler-icons.io/i/brand-github</desc><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 0 0-1.3-3.2 4.2 4.2 0 0 0-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 0 0-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 0 0-.1 3.2A4.6 4.6 0 0 0 4 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"chat\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.9 9.9 0 0 1-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"check\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m5 13 4 4L19 7\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"chevron-left\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m15 19-7-7 7-7\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"chevron-right\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m9 5 7 7-7 7\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-circle-check\" viewBox=\"0 0 24 24\" id=\"circle-check\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M3 12a9 9 0 1 0 18 0 9 9 0 1 0-18 0\" /><path d=\"m9 12 2 2 4-4\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-clock\" viewBox=\"0 0 24 24\" id=\"clock\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M3 12a9 9 0 1 0 18 0 9 9 0 0 0-18 0\" /><path d=\"M12 7v5l3 3\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"close\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18 18 6M6 6l12 12\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" viewBox=\"0 0 24 24\" id=\"cog\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065\" /><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" viewBox=\"0 0 24 24\" id=\"cog-play\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066-2.573c-.94-1.543.826-3.31 2.37-2.37 1 .608 2.296.07 2.572-1.065\" /><path d=\"M10 9v6l5-3z\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"contacts\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M5.121 17.804A13.94 13.94 0 0 1 12 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 1 1-6 0 3 3 0 0 1 6 0m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-copy\" viewBox=\"0 0 24 24\" id=\"copy\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><rect width=\"12\" height=\"12\" x=\"8\" y=\"8\" rx=\"2\" /><path d=\"M16 8V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-currency-dollar\" viewBox=\"0 0 24 24\" id=\"currency-dollar\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M16.7 8A3 3 0 0 0 14 6h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1-2.7-2M12 3v3m0 12v3\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"delete\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m19 7-.867 12.142A2 2 0 0 1 16.138 21H7.862a2 2 0 0 1-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v3M4 7h16\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"dots-vertical\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 1 1 0-2 1 1 0 0 1 0 2m0 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2m0 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"download\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 16v1a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-1m-4-4-4 4m0 0-4-4m4 4V4\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"edit\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M11 5H6a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2v-5m-1.414-9.414a2 2 0 1 1 2.828 2.828L11.828 15H9v-2.828z\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"eye\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0\" /><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7s-8.268-2.943-9.542-7\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"eye-off\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M13.875 18.825A10 10 0 0 1 12 19c-4.478 0-8.268-2.943-9.543-7A10 10 0 0 1 4.02 8.971m5.858.908a3 3 0 1 1 4.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88 6.59 6.59m7.532 7.532 3.29 3.29M3 3l3.59 3.59m0 0A9.95 9.95 0 0 1 12 5c4.478 0 8.268 2.943 9.543 7a10.03 10.03 0 0 1-4.132 5.411m0 0L21 21\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"graphs\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 5H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-2M9 5a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2M9 5a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-heart\" viewBox=\"0 0 24 24\" id=\"heart\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M19.5 12.572 12 20l-7.5-7.428m0 0A5 5 0 1 1 12 6.006a5 5 0 1 1 7.5 6.572\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"help\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m18.364 5.636-3.536 3.536m0 5.656 3.536 3.536M9.172 9.172 5.636 5.636m3.536 9.192-3.536 3.536M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0m-5 0a4 4 0 1 1-8 0 4 4 0 0 1 8 0\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"home\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m3 12 2-2m0 0 7-7 7 7M5 10v10a1 1 0 0 0 1 1h3m10-11 2 2m-2-2v10a1 1 0 0 1-1 1h-3m-6 0a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1m-6 0h6\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"iPlugin\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M11 4a2 2 0 1 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a2 2 0 1 0 0 4h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1v-1a2 2 0 1 0-4 0v1a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H4a2 2 0 1 1 0-4h1a1 1 0 0 0 1-1V7a1 1 0 0 1 1-1h3a1 1 0 0 0 1-1z\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"info\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"invoices\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17 9V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2m2 4h10a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2m7-5a2 2 0 1 1-4 0 2 2 0 0 1 4 0\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"key\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 7a2 2 0 0 1 2 2m4 0a6 6 0 0 1-7.743 5.743L11 17H9v2H7v2H4a1 1 0 0 1-1-1v-2.586a1 1 0 0 1 .293-.707l5.964-5.964A6 6 0 1 1 21 9\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"link\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M13.828 10.172a4 4 0 0 0-5.656 0l-4 4a4 4 0 1 0 5.656 5.656l1.102-1.101m-.758-4.899a4 4 0 0 0 5.656 0l4-4a4 4 0 0 0-5.656-5.656l-1.1 1.1\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"lock-closed\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 15v2m-6 4h12a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2m10-10V7a4 4 0 0 0-8 0v4z\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"lock-open\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8 11V7a4 4 0 1 1 8 0m-4 8v2m-6 4h12a2 2 0 0 0 2-2v-6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"login\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m11 16-4-4m0 0 4-4m-4 4h14m-5 4v1a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3h7a3 3 0 0 1 3 3v1\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"mail\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m3 8 7.89 5.26a2 2 0 0 0 2.22 0L21 8M5 19h14a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"moon\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M20.354 15.354A9 9 0 0 1 8.646 3.646 9.003 9.003 0 0 0 12 21a9 9 0 0 0 8.354-5.646\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-notes\" viewBox=\"0 0 24 24\" id=\"notes\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M5 5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2zM9 7h6M9 11h6M9 15h4\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"orders\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 3h2l.4 2M7 13h10l4-8H5.4M7 13 5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-8 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"pause\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M10 9v6m4-6v6m7-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"pic\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><rect width=\"6\" height=\"6\" x=\"4\" y=\"4\" rx=\"1\" /><rect width=\"6\" height=\"6\" x=\"4\" y=\"14\" rx=\"1\" /><rect width=\"6\" height=\"6\" x=\"14\" y=\"14\" rx=\"1\" /><path d=\"M14 7h6M17 4v6\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"play\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m14.752 11.168-3.197-2.132A1 1 0 0 0 10 9.87v4.263a1 1 0 0 0 1.555.832l3.197-2.132a1 1 0 0 0 0-1.664z\" /><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"plus\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 6v6m0 0v6m0-6h6m-6 0H6\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-question-mark\" viewBox=\"0 0 24 24\" id=\"question-mark\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><path d=\"M8 8a3.5 3 0 0 1 3.5-3h1A3.5 3 0 0 1 16 8a3 3 0 0 1-2 3 3 4 0 0 0-2 4M12 19v.01\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"receipt-refund\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M16 15v-1a4 4 0 0 0-4-4H8m0 0 3 3m-3-3 3-3m9 14V5a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v16l4-2 4 2 4-2z\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"refresh\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M4 4v5h.582m15.356 2A8.001 8.001 0 0 0 4.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 0 1-15.357-2m15.357 2H15\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"search\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-6-6m2-5a7 7 0 1 1-14 0 7 7 0 0 1 14 0\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" class=\"icon icon-tabler icon-tabler-server-2\" viewBox=\"0 0 24 24\" id=\"server\"><path stroke=\"none\" d=\"M0 0h24v24H0z\" /><rect width=\"18\" height=\"8\" x=\"3\" y=\"4\" rx=\"3\" /><rect width=\"18\" height=\"8\" x=\"3\" y=\"12\" rx=\"3\" /><path d=\"M7 8v.01M7 16v.01M11 8h6M11 16h6\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"settings\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 6V4m0 2a2 2 0 1 0 0 4m0-4a2 2 0 1 1 0 4m-6 8a2 2 0 1 0 0-4m0 4a2 2 0 1 1 0-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 1 0 0-4m0 4a2 2 0 1 1 0-4m0 4v2m0-6V4\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"sun\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364-.707-.707M6.343 6.343l-.707-.707m12.728 0-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"support\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M7 8h10M7 12h4m1 8-4-4H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-3z\" /></symbol><symbol fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" class=\"h-6 w-6\" viewBox=\"0 0 24 24\" id=\"wifi\"><path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M8.111 16.404a5.5 5.5 0 0 1 7.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0\" /></symbol></defs></svg>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "../build/symbol/icons-sprite.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "../build/symbol/icons-sprite.svg", "C:\\xampp\\htdocs\\themes\\admin_default\\html_custom/../build/symbol/icons-sprite.svg");
    }
}
