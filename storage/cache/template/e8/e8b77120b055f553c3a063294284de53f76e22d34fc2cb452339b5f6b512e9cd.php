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
use Twig\TemplateWrapper;

/* extension/blueberry/catalog/view/template/product/thumb.twig */
class __TwigTemplate_61ee5048a849acd7b02dc53617d7f59066156423712f20a7cff08888c8c1b5cc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<div class=\"product-thumb pro-bb-content aos-init aos-animate width-100\">
    <div class=\"bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]\">
      <div class=\"bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]\">
          <a href=\"";
        // line 4
        yield ($context["href"] ?? null);
        yield "\">
                ";
        // line 5
        if (($context["product_ribbon"] ?? null)) {
            // line 6
            yield "                <span class=\"flags transition-all duration-300 ease-in-out absolute z-[5] top-[10px] left-[6px]\">
                <span class=\"text-[12px] tracking-[-3px] font-bold uppercase text-white px-2 py-2 rounded-full
                    ";
            // line 8
            if ((($context["product_ribbon"] ?? null) == "available")) {
                // line 9
                yield "                    bg-green-500
                    ";
            } elseif ((            // line 10
($context["product_ribbon"] ?? null) == "available_new")) {
                // line 11
                yield "                    bg-green-600
                    ";
            } elseif ((            // line 12
($context["product_ribbon"] ?? null) == "upcoming")) {
                // line 13
                yield "                    bg-blue-500
                    ";
            } elseif ((            // line 14
($context["product_ribbon"] ?? null) == "limited")) {
                // line 15
                yield "                    bg-orange-500
                    ";
            } elseif ((            // line 16
($context["product_ribbon"] ?? null) == "stock_out")) {
                // line 17
                yield "                    bg-red-600
                    ";
            } elseif ((            // line 18
($context["product_ribbon"] ?? null) == "new_arrival")) {
                // line 19
                yield "                    bg-pink-500
                    ";
            } elseif ((            // line 20
($context["product_ribbon"] ?? null) == "5_star_rating")) {
                // line 21
                yield "                    bg-yellow-400 text-black
                    ";
            } elseif ((            // line 22
($context["product_ribbon"] ?? null) == "exchange_price")) {
                // line 23
                yield "                    bg-purple-500
                    ";
            } elseif ((            // line 24
($context["product_ribbon"] ?? null) == "export_only")) {
                // line 25
                yield "                    bg-indigo-500
                    ";
            } elseif ((            // line 26
($context["product_ribbon"] ?? null) == "stock_limited")) {
                // line 27
                yield "                    bg-amber-500
                    ";
            } else {
                // line 29
                yield "                    bg-gray-500
                    ";
            }
            // line 31
            yield "                \">
                    ";
            // line 32
            yield Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(($context["product_ribbon"] ?? null), ["_" => " "]));
            yield "
                </span>

                </span>

                ";
        }
        // line 38
        yield "              <div class=\"inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]\">
                  <img class=\"main-img transition-all duration-[0.3s] ease-in-out w-full\" src=\"";
        // line 39
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"";
        yield ($context["name"] ?? null);
        yield "\" title=\"";
        yield ($context["name"] ?? null);
        yield "\" >
                  <img class=\"hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full\" src=\"extension/blueberry/catalog/view/img/product/refrigerator/WNR-6D6-GDFS-DI/04.jpg\"
                      alt=\"product-3\">
              </div>
          </a>
          <form method=\"post\"
                data-oc-toggle=\"ajax\">
                <ul class=\"bb-pro-actions transition-all duration-300 ease-in-out my-0 mx-auto absolute z-[9] left-0 right-0 bottom-0 flex flex-row items-center justify-center opacity-0 group-hover:opacity-100\">
                    <!-- WISHLIST -->
                    ";
        // line 59
        yield "
                    <!-- QUICK VIEW (NO FORM ACTION NEEDED) -->
                    <li class=\"w-[35px] h-[35px] mx-[2px] flex items-center justify-center bg-white border border-gray-200 rounded-[10px] hover:bg-blue-50 transition\">

                        <a href=\"javascript:void(0)\"
                        class=\"bb-modal-toggle w-full h-full flex items-center justify-center\"
                        title=\"Quick View\"
                        data-product-id=\"";
        // line 66
        yield ($context["product_id"] ?? null);
        yield "\">

                            <i class=\"ri-eye-line text-[18px] text-gray-600 hover:text-blue-500 transition\"></i>
                        </a>

                    </li>

                    <!-- COMPARE -->
                    <li class=\"w-[35px] h-[35px] mx-[2px] flex items-center justify-center bg-white border border-gray-200 rounded-[10px] hover:bg-purple-50 transition\">

                        <button type=\"submit\"
                            formaction=\"";
        // line 77
        yield ($context["compare_add"] ?? null);
        yield "\"
                            title=\"";
        // line 78
        yield ($context["button_compare"] ?? null);
        yield "\"
                            class=\"w-full h-full flex items-center justify-center\">

                            <i class=\"ri-repeat-line text-[18px] text-gray-600 hover:text-purple-500 transition\"></i>
                        </button>

                    </li>

                </ul>

                <!-- hidden fields (VERY IMPORTANT for OpenCart) -->
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 89
        yield ($context["product_id"] ?? null);
        yield "\"/>

            </form>
      </div>
      <div class=\"bb-pro-contact p-[20px]\">
          <div class=\"bb-pro-subtitle mb-[8px] flex flex-wrap justify-between\">
              <a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]\">Refrigerator</a>
          </div>
          <h4 class=\"bb-pro-title mb-[8px] text-[16px] leading-[18px]\">
          <a href=\"";
        // line 98
        yield ($context["href"] ?? null);
        yield "\" class=\"transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]\">";
        yield ($context["name"] ?? null);
        yield "</a></h4>
          <p class=\"hidden font-Poppins text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">
              ";
        // line 100
        yield ($context["description"] ?? null);
        yield "
          </p>
          ";
        // line 102
        if (($context["price"] ?? null)) {
            // line 103
            yield "          <div class=\"bb-price flex flex-wrap justify-between\">
               ";
            // line 104
            if ( !($context["special"] ?? null)) {
                // line 105
                yield "              <div class=\"inner-price mx-[-3px]\">
                  <span class=\"new-price px-[3px] text-[16px] text-[#686e7d] font-bold\">";
                // line 106
                yield ($context["price"] ?? null);
                yield "</span>
              </div>
              ";
            } else {
                // line 109
                yield "              <div class=\"inner-price mx-[-3px]\">
                  <span class=\"new-price px-[3px] text-[16px] text-[#686e7d] font-bold\">";
                // line 110
                yield ($context["special"] ?? null);
                yield "</span>
                  <span class=\"old-price px-[3px] text-[14px] text-[#686e7d] line-through\">";
                // line 111
                yield ($context["price"] ?? null);
                yield "</span>
              </div>
              ";
            }
            // line 114
            yield "          </div>
          ";
        }
        // line 116
        yield "      </div>
  </div>
</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/product/thumb.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  241 => 116,  237 => 114,  231 => 111,  227 => 110,  224 => 109,  218 => 106,  215 => 105,  213 => 104,  210 => 103,  208 => 102,  203 => 100,  196 => 98,  184 => 89,  170 => 78,  166 => 77,  152 => 66,  143 => 59,  127 => 39,  124 => 38,  115 => 32,  112 => 31,  108 => 29,  104 => 27,  102 => 26,  99 => 25,  97 => 24,  94 => 23,  92 => 22,  89 => 21,  87 => 20,  84 => 19,  82 => 18,  79 => 17,  77 => 16,  74 => 15,  72 => 14,  69 => 13,  67 => 12,  64 => 11,  62 => 10,  59 => 9,  57 => 8,  53 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"product-thumb pro-bb-content aos-init aos-animate width-100\">
    <div class=\"bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]\">
      <div class=\"bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]\">
          <a href=\"{{ href }}\">
                {% if product_ribbon %}
                <span class=\"flags transition-all duration-300 ease-in-out absolute z-[5] top-[10px] left-[6px]\">
                <span class=\"text-[12px] tracking-[-3px] font-bold uppercase text-white px-2 py-2 rounded-full
                    {% if product_ribbon == 'available' %}
                    bg-green-500
                    {% elseif product_ribbon == 'available_new' %}
                    bg-green-600
                    {% elseif product_ribbon == 'upcoming' %}
                    bg-blue-500
                    {% elseif product_ribbon == 'limited' %}
                    bg-orange-500
                    {% elseif product_ribbon == 'stock_out' %}
                    bg-red-600
                    {% elseif product_ribbon == 'new_arrival' %}
                    bg-pink-500
                    {% elseif product_ribbon == '5_star_rating' %}
                    bg-yellow-400 text-black
                    {% elseif product_ribbon == 'exchange_price' %}
                    bg-purple-500
                    {% elseif product_ribbon == 'export_only' %}
                    bg-indigo-500
                    {% elseif product_ribbon == 'stock_limited' %}
                    bg-amber-500
                    {% else %}
                    bg-gray-500
                    {% endif %}
                \">
                    {{ product_ribbon|replace({'_':' '})|title }}
                </span>

                </span>

                {% endif %}
              <div class=\"inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]\">
                  <img class=\"main-img transition-all duration-[0.3s] ease-in-out w-full\" src=\"{{ thumb }}\" alt=\"{{ name }}\" title=\"{{ name }}\" >
                  <img class=\"hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full\" src=\"extension/blueberry/catalog/view/img/product/refrigerator/WNR-6D6-GDFS-DI/04.jpg\"
                      alt=\"product-3\">
              </div>
          </a>
          <form method=\"post\"
                data-oc-toggle=\"ajax\">
                <ul class=\"bb-pro-actions transition-all duration-300 ease-in-out my-0 mx-auto absolute z-[9] left-0 right-0 bottom-0 flex flex-row items-center justify-center opacity-0 group-hover:opacity-100\">
                    <!-- WISHLIST -->
                    {# <li class=\"w-[35px] h-[35px] mx-[2px] flex items-center justify-center bg-white border border-gray-200 rounded-[10px] hover:bg-red-50 transition\">

                        <button type=\"submit\"
                            formaction=\"{{ wishlist_add }}\"
                            title=\"{{ button_wishlist }}\"
                            class=\"w-full h-full flex items-center justify-center\">

                            <i class=\"ri-heart-line text-[18px] text-gray-600 hover:text-red-500 transition\"></i>
                        </button>

                    </li> #}

                    <!-- QUICK VIEW (NO FORM ACTION NEEDED) -->
                    <li class=\"w-[35px] h-[35px] mx-[2px] flex items-center justify-center bg-white border border-gray-200 rounded-[10px] hover:bg-blue-50 transition\">

                        <a href=\"javascript:void(0)\"
                        class=\"bb-modal-toggle w-full h-full flex items-center justify-center\"
                        title=\"Quick View\"
                        data-product-id=\"{{product_id}}\">

                            <i class=\"ri-eye-line text-[18px] text-gray-600 hover:text-blue-500 transition\"></i>
                        </a>

                    </li>

                    <!-- COMPARE -->
                    <li class=\"w-[35px] h-[35px] mx-[2px] flex items-center justify-center bg-white border border-gray-200 rounded-[10px] hover:bg-purple-50 transition\">

                        <button type=\"submit\"
                            formaction=\"{{ compare_add }}\"
                            title=\"{{ button_compare }}\"
                            class=\"w-full h-full flex items-center justify-center\">

                            <i class=\"ri-repeat-line text-[18px] text-gray-600 hover:text-purple-500 transition\"></i>
                        </button>

                    </li>

                </ul>

                <!-- hidden fields (VERY IMPORTANT for OpenCart) -->
                <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>

            </form>
      </div>
      <div class=\"bb-pro-contact p-[20px]\">
          <div class=\"bb-pro-subtitle mb-[8px] flex flex-wrap justify-between\">
              <a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]\">Refrigerator</a>
          </div>
          <h4 class=\"bb-pro-title mb-[8px] text-[16px] leading-[18px]\">
          <a href=\"{{ href }}\" class=\"transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]\">{{ name }}</a></h4>
          <p class=\"hidden font-Poppins text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">
              {{ description }}
          </p>
          {% if price %}
          <div class=\"bb-price flex flex-wrap justify-between\">
               {% if not special %}
              <div class=\"inner-price mx-[-3px]\">
                  <span class=\"new-price px-[3px] text-[16px] text-[#686e7d] font-bold\">{{ price }}</span>
              </div>
              {% else %}
              <div class=\"inner-price mx-[-3px]\">
                  <span class=\"new-price px-[3px] text-[16px] text-[#686e7d] font-bold\">{{ special }}</span>
                  <span class=\"old-price px-[3px] text-[14px] text-[#686e7d] line-through\">{{ price }}</span>
              </div>
              {% endif %}
          </div>
          {% endif %}
      </div>
  </div>
</div>", "extension/blueberry/catalog/view/template/product/thumb.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\product\\thumb.twig");
    }
}
