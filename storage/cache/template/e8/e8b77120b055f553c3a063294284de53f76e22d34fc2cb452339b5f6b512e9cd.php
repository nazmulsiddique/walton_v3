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
          <span class=\"flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]\">
              <span class=\"text-[14px] text-[#777] font-medium uppercase bg-[#ff0000] text-[#fff] py-[2px] px-[6px] rounded-full\">New</span>
          </span>
          <a href=\"";
        // line 7
        yield ($context["href"] ?? null);
        yield "\">
              <div class=\"inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]\">
                  <img class=\"main-img transition-all duration-[0.3s] ease-in-out w-full\" src=\"";
        // line 9
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
        // line 29
        yield "
                    <!-- QUICK VIEW (NO FORM ACTION NEEDED) -->
                    <li class=\"w-[35px] h-[35px] mx-[2px] flex items-center justify-center bg-white border border-gray-200 rounded-[10px] hover:bg-blue-50 transition\">

                        <a href=\"javascript:void(0)\"
                        class=\"bb-modal-toggle w-full h-full flex items-center justify-center\"
                        title=\"Quick View\"
                        data-product-id=\"";
        // line 36
        yield ($context["product_id"] ?? null);
        yield "\">

                            <i class=\"ri-eye-line text-[18px] text-gray-600 hover:text-blue-500 transition\"></i>
                        </a>

                    </li>

                    <!-- COMPARE -->
                    <li class=\"w-[35px] h-[35px] mx-[2px] flex items-center justify-center bg-white border border-gray-200 rounded-[10px] hover:bg-purple-50 transition\">

                        <button type=\"submit\"
                            formaction=\"";
        // line 47
        yield ($context["compare_add"] ?? null);
        yield "\"
                            title=\"";
        // line 48
        yield ($context["button_compare"] ?? null);
        yield "\"
                            class=\"w-full h-full flex items-center justify-center\">

                            <i class=\"ri-repeat-line text-[18px] text-gray-600 hover:text-purple-500 transition\"></i>
                        </button>

                    </li>

                </ul>

                <!-- hidden fields (VERY IMPORTANT for OpenCart) -->
                <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 59
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
        // line 68
        yield ($context["href"] ?? null);
        yield "\" class=\"transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]\">";
        yield ($context["name"] ?? null);
        yield "</a></h4>
          <p class=\"hidden font-Poppins text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">
              ";
        // line 70
        yield ($context["description"] ?? null);
        yield "
          </p>
          ";
        // line 72
        if (($context["price"] ?? null)) {
            // line 73
            yield "          <div class=\"bb-price flex flex-wrap justify-between\">
               ";
            // line 74
            if ( !($context["special"] ?? null)) {
                // line 75
                yield "              <div class=\"inner-price mx-[-3px]\">
                  <span class=\"new-price px-[3px] text-[16px] text-[#686e7d] font-bold\">";
                // line 76
                yield ($context["price"] ?? null);
                yield "</span>
              </div>
              ";
            } else {
                // line 79
                yield "              <div class=\"inner-price mx-[-3px]\">
                  <span class=\"new-price px-[3px] text-[16px] text-[#686e7d] font-bold\">";
                // line 80
                yield ($context["special"] ?? null);
                yield "</span>
                  <span class=\"old-price px-[3px] text-[14px] text-[#686e7d] line-through\">";
                // line 81
                yield ($context["price"] ?? null);
                yield "</span>
              </div>
              ";
            }
            // line 84
            yield "          </div>
          ";
        }
        // line 86
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
        return array (  169 => 86,  165 => 84,  159 => 81,  155 => 80,  152 => 79,  146 => 76,  143 => 75,  141 => 74,  138 => 73,  136 => 72,  131 => 70,  124 => 68,  112 => 59,  98 => 48,  94 => 47,  80 => 36,  71 => 29,  55 => 9,  50 => 7,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"product-thumb pro-bb-content aos-init aos-animate width-100\">
    <div class=\"bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]\">
      <div class=\"bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]\">
          <span class=\"flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]\">
              <span class=\"text-[14px] text-[#777] font-medium uppercase bg-[#ff0000] text-[#fff] py-[2px] px-[6px] rounded-full\">New</span>
          </span>
          <a href=\"{{ href }}\">
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
