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

/* extension/blueberry/catalog/view/template/product/category_products.twig */
class __TwigTemplate_852812149bc973a76e773ab11867398748c5cb872150a4e8179ca8eb05d0f3dd extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            yield "
  <div class=\"w-full px-[12px] mb-[24px]\">
      <div class=\"bb-shop-pro-inner\">
          <div class=\"flex flex-wrap px-[-12px] mb-[-24px]\">
                <div class=\"w-full\">
                    <div class=\"bb-pro-list-top mb-[24px] rounded-[20px] hidden lg:flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between\">
                        <div class=\"flex lg:flex-wrap justify-between w-full\">
                          <div class=\"w-[50%] md:w-[20%] px-[12px] max-[420px]:w-full\">
                              <div class=\"bb-bl-btn py-[10px] flex max-[420px]:justify-center\">
                                  <button type=\"button\" id=\"button-grid\" class=\"grid-btn btn-grid-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent mr-[5px] active\" title=\"grid\">
                                      <i class=\"ri-apps-line text-[20px]\"></i>
                                  </button>
                                  <button type=\"button\" id=\"button-list\" class=\"grid-btn btn-list-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent\" title=\"grid\">
                                      <i class=\"ri-list-unordered text-[20px]\"></i>
                                  </button>
                              </div>
                          </div>

                            <div class=\"w-[50%] md:w-[35%] px-[12px] max-[420px]:w-full hidden md:block\">
                                <div class=\"bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center\">
                                    <div class=\"relative w-[180px] max-[420px]:w-[120px]\">
                                        <select id=\"input-sort\"
                                            class=\"w-full appearance-none bg-white border border-[#e5e7eb] rounded-xl px-4 py-2.5 pr-10 text-[14px] font-medium text-[#3d4750] shadow-sm cursor-pointer transition-all duration-300 hover:border-[#6c7fd8] focus:border-[#6c7fd8] focus:ring-2 focus:ring-[#6c7fd8]/20 focus:outline-none\">
                                            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 26
                yield "                                                <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 26);
                yield "\"
                                                    ";
                // line 27
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 27) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    yield " selected";
                }
                yield ">
                                                    ";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 28);
                yield "
                                                </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            yield "                                        </select>
                                        <i class=\"ri-arrow-down-s-line absolute right-3 top-1/2 -translate-y-1/2 text-[#6c7fd8] text-[18px] pointer-events-none\"></i>
                                    </div>
                                </div>
                            </div>

                            ";
            // line 52
            yield "
                        </div>
                    </div>
                    <div class=\"bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between items-center lg:hidden\">
                            <div class=\"px-[12px]\">
                                <a href=\"javascript:void(0)\" class=\"bb-toggle-filter\">
                                    <span class=\"bg-white border border-[#6c7fd8] rounded-xl px-4 py-2 text-[18px]\"> <i class=\"ri-filter-3-fill mt-1 text-[#6c7fd8]\"></i> Filter</span>
                                </a>
                            </div>

                            <div class=\"bb-pro-list-top px-[12px]\">
                                    <a href=\"";
            // line 63
            yield ($context["compare"] ?? null);
            yield "\"
                                        id=\"compare-total\"
                                        class=\"inline-flex items-center gap-2 text-dark transition duration-200 bg-white border border-[#6c7fd8] rounded-xl px-4 py-2 text-[14px]\">
                                            <i class=\"ri-arrow-left-right-line text-lg\"></i>
                                    </a>
                            </div>

                            <div class=\"px-[12px]\">
                                <div class=\"bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center\">
                                    <div class=\"relative w-[180px] max-[420px]:w-[120px]\">
                                        <select id=\"input-sort\"
                                            class=\"w-full appearance-none bg-white border border-[#6c7fd8] rounded-xl px-4 py-2.5 pr-10 text-[14px] font-medium text-[#3d4750] shadow-sm cursor-pointer transition-all duration-300 hover:border-[#6c7fd8] focus:border-[#6c7fd8] focus:ring-2 focus:ring-[#6c7fd8]/20 focus:outline-none\">
                                            ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 76
                yield "                                                <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 76);
                yield "\"
                                                    ";
                // line 77
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 77) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    yield " selected";
                }
                yield ">
                                                    ";
                // line 78
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 78);
                yield "
                                                </option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "                                        </select>
                                        <i class=\"ri-arrow-down-s-line absolute right-3 top-1/2 -translate-y-1/2 text-[#6c7fd8] text-[18px] pointer-events-none\"></i>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div id=\"product-list\" class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full\">
                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 91
                yield "                        ";
                yield $context["product"];
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                    
                </div>

              <div class=\"w-full px-[12px] mt-5\">
                  <div class=\"bb-pro-pagination mb-[24px] flex justify-between items-center max-[575px]:flex-col max-[575px]:items-center\">

                      ";
            // line 100
            yield "                      <p class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]\">
                          ";
            // line 101
            yield ($context["results"] ?? null);
            yield "
                      </p>

                      ";
            // line 105
            yield "                      <div class=\"bb-pagination\">
                          ";
            // line 106
            yield ($context["pagination"] ?? null);
            yield "
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>



 ";
        }
        // line 118
        yield "


";
        // line 121
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 122
            yield "<div class=\"space-y-4\">
    <p>";
            // line 123
            yield ($context["text_no_results"] ?? null);
            yield "</p>

    <div class=\"text-right\">
        <a href=\"";
            // line 126
            yield ($context["continue"] ?? null);
            yield "\"
           class=\"inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition\">
            ";
            // line 128
            yield ($context["button_continue"] ?? null);
            yield "
        </a>
    </div>
</div>
";
        }
        // line 133
        yield "


<div class=\"bb-mobile-filter-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[16]\"></div>
<div id=\"bb-mobile-filter\" class=\"bb-mobile-filter transition-all duration-[0.3s] ease-in-out w-[340px] h-full pt-[15px] px-[20px] pb-[20px] fixed top-[0] right-[auto] left-[0] bg-[#fff] translate-x-[-100%] flex flex-col z-[17] overflow-auto max-[480px]:w-[300px]\">
   <div class=\"bb-menu-title w-full pb-[10px] flex flex-wrap justify-between\"> 
        <span class=\"menu_title font-Poppins flex items-center text-[16px] text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem]\">My Filter</span> 
        <button type=\"button\" class=\"bb-close-filter relative border-[0] text-[30px] leading-[1] text-[#ff0000] bg-transparent\">×</button> 
    </div>
   <div id=\"column_left_content_show\" class=\"bb-filter-inner\">
   </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/product/category_products.twig";
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
        return array (  241 => 133,  233 => 128,  228 => 126,  222 => 123,  219 => 122,  217 => 121,  212 => 118,  197 => 106,  194 => 105,  188 => 101,  185 => 100,  177 => 93,  168 => 91,  164 => 90,  153 => 81,  144 => 78,  138 => 77,  133 => 76,  129 => 75,  114 => 63,  101 => 52,  93 => 31,  84 => 28,  78 => 27,  73 => 26,  69 => 25,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}

  <div class=\"w-full px-[12px] mb-[24px]\">
      <div class=\"bb-shop-pro-inner\">
          <div class=\"flex flex-wrap px-[-12px] mb-[-24px]\">
                <div class=\"w-full\">
                    <div class=\"bb-pro-list-top mb-[24px] rounded-[20px] hidden lg:flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between\">
                        <div class=\"flex lg:flex-wrap justify-between w-full\">
                          <div class=\"w-[50%] md:w-[20%] px-[12px] max-[420px]:w-full\">
                              <div class=\"bb-bl-btn py-[10px] flex max-[420px]:justify-center\">
                                  <button type=\"button\" id=\"button-grid\" class=\"grid-btn btn-grid-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent mr-[5px] active\" title=\"grid\">
                                      <i class=\"ri-apps-line text-[20px]\"></i>
                                  </button>
                                  <button type=\"button\" id=\"button-list\" class=\"grid-btn btn-list-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent\" title=\"grid\">
                                      <i class=\"ri-list-unordered text-[20px]\"></i>
                                  </button>
                              </div>
                          </div>

                            <div class=\"w-[50%] md:w-[35%] px-[12px] max-[420px]:w-full hidden md:block\">
                                <div class=\"bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center\">
                                    <div class=\"relative w-[180px] max-[420px]:w-[120px]\">
                                        <select id=\"input-sort\"
                                            class=\"w-full appearance-none bg-white border border-[#e5e7eb] rounded-xl px-4 py-2.5 pr-10 text-[14px] font-medium text-[#3d4750] shadow-sm cursor-pointer transition-all duration-300 hover:border-[#6c7fd8] focus:border-[#6c7fd8] focus:ring-2 focus:ring-[#6c7fd8]/20 focus:outline-none\">
                                            {% for sorts in sorts %}
                                                <option value=\"{{ sorts.href }}\"
                                                    {% if sorts.value == '%s-%s'|format(sort, order) %} selected{% endif %}>
                                                    {{ sorts.text }}
                                                </option>
                                            {% endfor %}
                                        </select>
                                        <i class=\"ri-arrow-down-s-line absolute right-3 top-1/2 -translate-y-1/2 text-[#6c7fd8] text-[18px] pointer-events-none\"></i>
                                    </div>
                                </div>
                            </div>

                            {# <div class=\"w-[50%] md:w-[15%] px-[12px] max-[420px]:w-full\">
                                <div class=\"bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center\">
                                    <div class=\"relative w-[130px] max-[420px]:w-[100px]\">
                                        <select id=\"input-limit\"
                                            class=\"w-full appearance-none bg-white border border-[#e5e7eb] rounded-xl px-4 py-2.5 pr-10 text-[14px] font-medium text-[#3d4750] shadow-sm cursor-pointer transition-all duration-300 hover:border-[#6c7fd8] focus:border-[#6c7fd8] focus:ring-2 focus:ring-[#6c7fd8]/20 focus:outline-none\">
                                            {% for limits in limits %}
                                                <option value=\"{{ limits.href }}\"{% if limits.value == limit %} selected{% endif %}>
                                                    {{ limits.text }}
                                                </option>
                                            {% endfor %}
                                        </select>
                                        <i class=\"ri-arrow-down-s-line absolute right-3 top-1/2 -translate-y-1/2 text-[#6c7fd8] text-[18px] pointer-events-none\"></i>
                                    </div>
                                </div>
                            </div> #}

                        </div>
                    </div>
                    <div class=\"bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between items-center lg:hidden\">
                            <div class=\"px-[12px]\">
                                <a href=\"javascript:void(0)\" class=\"bb-toggle-filter\">
                                    <span class=\"bg-white border border-[#6c7fd8] rounded-xl px-4 py-2 text-[18px]\"> <i class=\"ri-filter-3-fill mt-1 text-[#6c7fd8]\"></i> Filter</span>
                                </a>
                            </div>

                            <div class=\"bb-pro-list-top px-[12px]\">
                                    <a href=\"{{ compare }}\"
                                        id=\"compare-total\"
                                        class=\"inline-flex items-center gap-2 text-dark transition duration-200 bg-white border border-[#6c7fd8] rounded-xl px-4 py-2 text-[14px]\">
                                            <i class=\"ri-arrow-left-right-line text-lg\"></i>
                                    </a>
                            </div>

                            <div class=\"px-[12px]\">
                                <div class=\"bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center\">
                                    <div class=\"relative w-[180px] max-[420px]:w-[120px]\">
                                        <select id=\"input-sort\"
                                            class=\"w-full appearance-none bg-white border border-[#6c7fd8] rounded-xl px-4 py-2.5 pr-10 text-[14px] font-medium text-[#3d4750] shadow-sm cursor-pointer transition-all duration-300 hover:border-[#6c7fd8] focus:border-[#6c7fd8] focus:ring-2 focus:ring-[#6c7fd8]/20 focus:outline-none\">
                                            {% for sorts in sorts %}
                                                <option value=\"{{ sorts.href }}\"
                                                    {% if sorts.value == '%s-%s'|format(sort, order) %} selected{% endif %}>
                                                    {{ sorts.text }}
                                                </option>
                                            {% endfor %}
                                        </select>
                                        <i class=\"ri-arrow-down-s-line absolute right-3 top-1/2 -translate-y-1/2 text-[#6c7fd8] text-[18px] pointer-events-none\"></i>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div id=\"product-list\" class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full\">
                    {% for product in products %}
                        {{ product }}
                    {% endfor %}
                    
                </div>

              <div class=\"w-full px-[12px] mt-5\">
                  <div class=\"bb-pro-pagination mb-[24px] flex justify-between items-center max-[575px]:flex-col max-[575px]:items-center\">

                      {# Results Text #}
                      <p class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]\">
                          {{ results }}
                      </p>

                      {# Pagination Links #}
                      <div class=\"bb-pagination\">
                          {{ pagination }}
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>



 {% endif %}



{% if not categories and not products %}
<div class=\"space-y-4\">
    <p>{{ text_no_results }}</p>

    <div class=\"text-right\">
        <a href=\"{{ continue }}\"
           class=\"inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition\">
            {{ button_continue }}
        </a>
    </div>
</div>
{% endif %}



<div class=\"bb-mobile-filter-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[16]\"></div>
<div id=\"bb-mobile-filter\" class=\"bb-mobile-filter transition-all duration-[0.3s] ease-in-out w-[340px] h-full pt-[15px] px-[20px] pb-[20px] fixed top-[0] right-[auto] left-[0] bg-[#fff] translate-x-[-100%] flex flex-col z-[17] overflow-auto max-[480px]:w-[300px]\">
   <div class=\"bb-menu-title w-full pb-[10px] flex flex-wrap justify-between\"> 
        <span class=\"menu_title font-Poppins flex items-center text-[16px] text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem]\">My Filter</span> 
        <button type=\"button\" class=\"bb-close-filter relative border-[0] text-[30px] leading-[1] text-[#ff0000] bg-transparent\">×</button> 
    </div>
   <div id=\"column_left_content_show\" class=\"bb-filter-inner\">
   </div>
</div>
", "extension/blueberry/catalog/view/template/product/category_products.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\product\\category_products.twig");
    }
}
