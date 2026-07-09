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
                <div class=\"mt-2 ml-2 h-[40px]\">
                    ";
        // line 6
        if (($context["product_ribbon"] ?? null)) {
            // line 7
            yield "                    ";
            if ((($context["product_ribbon"] ?? null) == "available")) {
                // line 8
                yield "                        ";
                $context["ribbon_class"] = "bg-green-500";
                // line 9
                yield "                    ";
            } elseif ((($context["product_ribbon"] ?? null) == "Available (New)")) {
                // line 10
                yield "                        ";
                $context["ribbon_class"] = "bg-green-600";
                // line 11
                yield "                    ";
            } elseif ((($context["product_ribbon"] ?? null) == "Upcoming")) {
                // line 12
                yield "                        ";
                $context["ribbon_class"] = "bg-blue-500";
                // line 13
                yield "                    ";
            } elseif ((($context["product_ribbon"] ?? null) == "Limited")) {
                // line 14
                yield "                        ";
                $context["ribbon_class"] = "bg-orange-500";
                // line 15
                yield "                    ";
            } elseif ((($context["product_ribbon"] ?? null) == "Stock Out")) {
                // line 16
                yield "                        ";
                $context["ribbon_class"] = "bg-red-600";
                // line 17
                yield "                    ";
            } elseif ((($context["product_ribbon"] ?? null) == "New Arrival")) {
                // line 18
                yield "                        ";
                $context["ribbon_class"] = "bg-pink-500";
                // line 19
                yield "                    ";
            } elseif ((($context["product_ribbon"] ?? null) == "5 Star Rating")) {
                // line 20
                yield "                        ";
                $context["ribbon_class"] = "bg-yellow-400 text-black";
                // line 21
                yield "                    ";
            } elseif ((($context["product_ribbon"] ?? null) == "Exchange Price")) {
                // line 22
                yield "                        ";
                $context["ribbon_class"] = "bg-purple-500";
                // line 23
                yield "                    ";
            } elseif ((($context["product_ribbon"] ?? null) == "Export Only")) {
                // line 24
                yield "                        ";
                $context["ribbon_class"] = "bg-indigo-500";
                // line 25
                yield "                    ";
            } elseif ((($context["product_ribbon"] ?? null) == "Stock Limited")) {
                // line 26
                yield "                        ";
                $context["ribbon_class"] = "bg-amber-500";
                // line 27
                yield "                    ";
            } else {
                // line 28
                yield "                        ";
                $context["ribbon_class"] = "bg-black";
                // line 29
                yield "                    ";
            }
            // line 30
            yield "                    <div class=\"inline-flex items-center ";
            yield ($context["ribbon_class"] ?? null);
            yield " text-white text-[12px] pl-1 pr-6 py-1 rounded-[25px_0px_40px_25px]\">
                        <div class=\"w-5 h-5 bg-white rounded-full flex-shrink-0 mr-2\"></div>
                        <span class=\"tracking-wide\">";
            // line 32
            yield ($context["product_ribbon"] ?? null);
            yield "</span>
                    </div>
                    ";
        }
        // line 35
        yield "                </div>

              <div class=\"inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]\">
                  <img class=\"main-img transition-all duration-[0.3s] ease-in-out w-full\" src=\"";
        // line 38
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
        // line 58
        yield "
                    <!-- QUICK VIEW (NO FORM ACTION NEEDED) -->
                    <li class=\"w-[35px] h-[35px] mx-[2px] flex items-center justify-center bg-white border border-gray-200 rounded-[10px] hover:bg-blue-50 transition\">

                        <a href=\"javascript:void(0)\"
                        class=\"bb-modal-toggle w-full h-full flex items-center justify-center\"
                        title=\"Quick View\"
                        data-product-id=\"";
        // line 65
        yield ($context["product_id"] ?? null);
        yield "\">

                            <i class=\"ri-eye-line text-[18px] text-gray-600 hover:text-blue-500 transition\"></i>
                        </a>

                    </li>

                    <!-- COMPARE -->
                    <li class=\"w-[35px] h-[35px] mx-[2px] flex items-center justify-center bg-white border border-gray-200 rounded-[10px] hover:bg-purple-50 transition\">

                        <button type=\"submit\"
                            formaction=\"";
        // line 76
        yield ($context["compare_add"] ?? null);
        yield "\"
                            title=\"";
        // line 77
        yield ($context["button_compare"] ?? null);
        yield "\"
                            class=\"w-full h-full flex items-center justify-center\">

                            <i class=\"ri-repeat-line text-[18px] text-gray-600 hover:text-purple-500 transition\"></i>
                        </button>

                    </li>

                </ul>

                <!-- hidden fields (VERY IMPORTANT for OpenCart) -->
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 88
        yield ($context["product_id"] ?? null);
        yield "\"/>

            </form>
      </div>
      <div class=\"bb-pro-contact p-[20px]\">
          <h4 class=\"bb-pro-title mb-[8px] text-[16px] leading-[18px]\">
          <a href=\"";
        // line 94
        yield ($context["href"] ?? null);
        yield "\" class=\"transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]\">";
        yield ($context["name"] ?? null);
        yield "</a></h4>
          <p class=\"hidden font-Poppins text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">
              ";
        // line 96
        yield ($context["description"] ?? null);
        yield "
          </p>
          ";
        // line 98
        if (($context["price"] ?? null)) {
            // line 99
            yield "          <div class=\"bb-price flex flex-wrap justify-between\">
               ";
            // line 100
            if ( !($context["special"] ?? null)) {
                // line 101
                yield "              <div class=\"inner-price mx-[-3px]\">
                  <span class=\"new-price px-[3px] text-[16px] text-[#686e7d] font-bold\">";
                // line 102
                yield ($context["price"] ?? null);
                yield "</span>
              </div>
              ";
            } else {
                // line 105
                yield "              <div class=\"inner-price mx-[-3px]\">
                  <span class=\"new-price px-[3px] text-[16px] text-[#686e7d] font-bold\">";
                // line 106
                yield ($context["special"] ?? null);
                yield "</span>
                  <span class=\"old-price px-[3px] text-[14px] text-[#686e7d] line-through\">";
                // line 107
                yield ($context["price"] ?? null);
                yield "</span>
              </div>
              ";
            }
            // line 110
            yield "          </div>
          ";
        }
        // line 112
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
        return array (  251 => 112,  247 => 110,  241 => 107,  237 => 106,  234 => 105,  228 => 102,  225 => 101,  223 => 100,  220 => 99,  218 => 98,  213 => 96,  206 => 94,  197 => 88,  183 => 77,  179 => 76,  165 => 65,  156 => 58,  140 => 38,  135 => 35,  129 => 32,  123 => 30,  120 => 29,  117 => 28,  114 => 27,  111 => 26,  108 => 25,  105 => 24,  102 => 23,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  69 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  52 => 6,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"product-thumb pro-bb-content aos-init aos-animate width-100\">
    <div class=\"bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]\">
      <div class=\"bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]\">
          <a href=\"{{ href }}\">
                <div class=\"mt-2 ml-2 h-[40px]\">
                    {% if product_ribbon %}
                    {% if product_ribbon == 'available' %}
                        {% set ribbon_class = 'bg-green-500' %}
                    {% elseif product_ribbon == 'Available (New)' %}
                        {% set ribbon_class = 'bg-green-600' %}
                    {% elseif product_ribbon == 'Upcoming' %}
                        {% set ribbon_class = 'bg-blue-500' %}
                    {% elseif product_ribbon == 'Limited' %}
                        {% set ribbon_class = 'bg-orange-500' %}
                    {% elseif product_ribbon == 'Stock Out' %}
                        {% set ribbon_class = 'bg-red-600' %}
                    {% elseif product_ribbon == 'New Arrival' %}
                        {% set ribbon_class = 'bg-pink-500' %}
                    {% elseif product_ribbon == '5 Star Rating' %}
                        {% set ribbon_class = 'bg-yellow-400 text-black' %}
                    {% elseif product_ribbon == 'Exchange Price' %}
                        {% set ribbon_class = 'bg-purple-500' %}
                    {% elseif product_ribbon == 'Export Only' %}
                        {% set ribbon_class = 'bg-indigo-500' %}
                    {% elseif product_ribbon == 'Stock Limited' %}
                        {% set ribbon_class = 'bg-amber-500' %}
                    {% else %}
                        {% set ribbon_class = 'bg-black' %}
                    {% endif %}
                    <div class=\"inline-flex items-center {{ ribbon_class }} text-white text-[12px] pl-1 pr-6 py-1 rounded-[25px_0px_40px_25px]\">
                        <div class=\"w-5 h-5 bg-white rounded-full flex-shrink-0 mr-2\"></div>
                        <span class=\"tracking-wide\">{{ product_ribbon }}</span>
                    </div>
                    {% endif %}
                </div>

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
