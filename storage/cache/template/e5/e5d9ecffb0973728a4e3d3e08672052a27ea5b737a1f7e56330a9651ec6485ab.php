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
          <div class=\"flex flex-wrap mx-[-12px] mb-[-24px]\">
                <div class=\"w-full\">
                    <div class=\"bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between\">
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

                          <div class=\"w-[50%] md:w-[30%] px-[12px] max-[420px]:w-full\">
                              <a href=\"";
            // line 21
            yield ($context["compare"] ?? null);
            yield "\"
                                  id=\"compare-total\"
                                  class=\"inline-flex items-center gap-2 mt-2 px-4 py-2 text-dark rounded-md transition duration-200\">
                                      <i class=\"ri-arrow-left-right-line text-lg\"></i>
                                      <span class=\"hidden xl:inline\">
                                          ";
            // line 26
            yield ($context["text_compare"] ?? null);
            yield "
                                      </span>
                              </a>
                          </div>

                          <div class=\"w-[50%] md:w-[35%] px-[12px] max-[420px]:w-full hidden md:block\">
                            <div class=\"bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center\">
                              <div class=\"w-[130px] mr-[30px] flex justify-end text-[#777]  items-center text-[14px] relative max-[420px]:w-[100px] max-[420px]:justify-left\">
                                  <select id=\"input-sort\" class=\"w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border-none rounded-md\">
                                       ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 36
                yield "                                            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 36);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 36) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 36);
                yield "</option>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                                  </select>
                              </div>
                            </div>
                          </div>

                            <div class=\"w-[50%] md:w-[35%] px-[12px] hidden max-[991px]:flex\">
                                <a href=\"javascript:void(0)\" class=\"bb-toggle-filter\">
                                    <div class=\"py-[10px] flex items-center justify-end max-[420px]:justify-center\"> <i class=\"ri-filter-3-fill text-[22px] text-[#6c7fd8]\"></i> </div>
                                </a>
                            </div>


                          <div class=\"w-[50%] md:w-[15%] px-[12px] max-[420px]:w-full\">
                            <div class=\"bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center\">
                              <div class=\"w-[130px] mr-[30px] flex justify-end text-[#777]  items-center text-[14px] relative max-[420px]:w-[100px] max-[420px]:justify-left\">
                                  <select id=\"input-limit\" class=\"w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border-none rounded-md\">
                                      ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 55
                yield "                                          <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 55);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 55) == ($context["limit"] ?? null))) {
                    yield " selected";
                }
                yield ">
                                              ";
                // line 56
                yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 56);
                yield "
                                          </option>
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                                  </select>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <div id=\"product-list\" class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
                    ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 69
                yield "                        ";
                yield $context["product"];
                yield "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "                    
                </div>

              <div class=\"w-full px-[12px] mt-5\">
                  <div class=\"bb-pro-pagination mb-[24px] flex justify-between items-center max-[575px]:flex-col max-[575px]:items-center\">

                      ";
            // line 78
            yield "                      <p class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]\">
                          ";
            // line 79
            yield ($context["results"] ?? null);
            yield "
                      </p>

                      ";
            // line 83
            yield "                      <div class=\"bb-pagination\">
                          ";
            // line 84
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
        // line 96
        yield "


";
        // line 99
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 100
            yield "<div class=\"space-y-4\">
    <p>";
            // line 101
            yield ($context["text_no_results"] ?? null);
            yield "</p>

    <div class=\"text-right\">
        <a href=\"";
            // line 104
            yield ($context["continue"] ?? null);
            yield "\"
           class=\"inline-block bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md transition\">
            ";
            // line 106
            yield ($context["button_continue"] ?? null);
            yield "
        </a>
    </div>
</div>
";
        }
        // line 111
        yield "


<div class=\"bb-mobile-filter-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[16]\"></div>
<div id=\"bb-mobile-filter\" class=\"bb-mobile-filter transition-all duration-[0.3s] ease-in-out w-[340px] h-full pt-[15px] px-[20px] pb-[20px] fixed top-[0] right-[auto] left-[0] bg-[#fff] translate-x-[-100%] flex flex-col z-[17] overflow-auto max-[480px]:w-[300px]\">
   <div class=\"bb-menu-title w-full pb-[10px] flex flex-wrap justify-between\"> 
        <span class=\"menu_title font-Poppins flex items-center text-[16px] text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem]\">My Filter</span> 
        <button type=\"button\" class=\"bb-close-filter relative border-[0] text-[30px] leading-[1] text-[#ff0000] bg-transparent\">×</button> 
    </div>
   <div class=\"bb-filter-inner\">
        ";
        // line 121
        yield ($context["column_left"] ?? null);
        yield "
        <h1>Filter Content</h1>
        <h2>Filter Content</h2>
        <h3>Filter Content</h3>
   </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {

    const filterBtn = document.querySelector('.bb-toggle-filter');
    const filterPanel = document.getElementById('bb-mobile-filter');
    const overlay = document.querySelector('.bb-mobile-filter-overlay');
    const closeBtn = document.querySelector('.bb-close-filter');

    if (filterBtn) {
        filterBtn.addEventListener('click', function (e) {
            e.preventDefault();

            overlay.classList.remove('hidden');
            filterPanel.classList.add('bb-filter-open');
        });
    }

    if (overlay) {
        overlay.addEventListener('click', function () {
            overlay.classList.add('hidden');
            filterPanel.classList.remove('bb-filter-open');
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            overlay.classList.add('hidden');
            filterPanel.classList.remove('bb-filter-open');
        });
    }

});
</script>       ";
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
        return array (  244 => 121,  232 => 111,  224 => 106,  219 => 104,  213 => 101,  210 => 100,  208 => 99,  203 => 96,  188 => 84,  185 => 83,  179 => 79,  176 => 78,  168 => 71,  159 => 69,  155 => 68,  144 => 59,  135 => 56,  126 => 55,  122 => 54,  104 => 38,  89 => 36,  85 => 35,  73 => 26,  65 => 21,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}

  <div class=\"w-full px-[12px] mb-[24px]\">
      <div class=\"bb-shop-pro-inner\">
          <div class=\"flex flex-wrap mx-[-12px] mb-[-24px]\">
                <div class=\"w-full\">
                    <div class=\"bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between\">
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

                          <div class=\"w-[50%] md:w-[30%] px-[12px] max-[420px]:w-full\">
                              <a href=\"{{ compare }}\"
                                  id=\"compare-total\"
                                  class=\"inline-flex items-center gap-2 mt-2 px-4 py-2 text-dark rounded-md transition duration-200\">
                                      <i class=\"ri-arrow-left-right-line text-lg\"></i>
                                      <span class=\"hidden xl:inline\">
                                          {{ text_compare }}
                                      </span>
                              </a>
                          </div>

                          <div class=\"w-[50%] md:w-[35%] px-[12px] max-[420px]:w-full hidden md:block\">
                            <div class=\"bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center\">
                              <div class=\"w-[130px] mr-[30px] flex justify-end text-[#777]  items-center text-[14px] relative max-[420px]:w-[100px] max-[420px]:justify-left\">
                                  <select id=\"input-sort\" class=\"w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border-none rounded-md\">
                                       {% for sorts in sorts %}
                                            <option value=\"{{ sorts.href }}\"{% if sorts.value == '%s-%s'|format(sort, order) %} selected{% endif %}>{{ sorts.text }}</option>
                                        {% endfor %}
                                  </select>
                              </div>
                            </div>
                          </div>

                            <div class=\"w-[50%] md:w-[35%] px-[12px] hidden max-[991px]:flex\">
                                <a href=\"javascript:void(0)\" class=\"bb-toggle-filter\">
                                    <div class=\"py-[10px] flex items-center justify-end max-[420px]:justify-center\"> <i class=\"ri-filter-3-fill text-[22px] text-[#6c7fd8]\"></i> </div>
                                </a>
                            </div>


                          <div class=\"w-[50%] md:w-[15%] px-[12px] max-[420px]:w-full\">
                            <div class=\"bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center\">
                              <div class=\"w-[130px] mr-[30px] flex justify-end text-[#777]  items-center text-[14px] relative max-[420px]:w-[100px] max-[420px]:justify-left\">
                                  <select id=\"input-limit\" class=\"w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border-none rounded-md\">
                                      {% for limits in limits %}
                                          <option value=\"{{ limits.href }}\"{% if limits.value == limit %} selected{% endif %}>
                                              {{ limits.text }}
                                          </option>
                                      {% endfor %}
                                  </select>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <div id=\"product-list\" class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
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
   <div class=\"bb-filter-inner\">
        {{ column_left }}
        <h1>Filter Content</h1>
        <h2>Filter Content</h2>
        <h3>Filter Content</h3>
   </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {

    const filterBtn = document.querySelector('.bb-toggle-filter');
    const filterPanel = document.getElementById('bb-mobile-filter');
    const overlay = document.querySelector('.bb-mobile-filter-overlay');
    const closeBtn = document.querySelector('.bb-close-filter');

    if (filterBtn) {
        filterBtn.addEventListener('click', function (e) {
            e.preventDefault();

            overlay.classList.remove('hidden');
            filterPanel.classList.add('bb-filter-open');
        });
    }

    if (overlay) {
        overlay.addEventListener('click', function () {
            overlay.classList.add('hidden');
            filterPanel.classList.remove('bb-filter-open');
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', function () {
            overlay.classList.add('hidden');
            filterPanel.classList.remove('bb-filter-open');
        });
    }

});
</script>       ", "extension/blueberry/catalog/view/template/product/category_products.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\product\\category_products.twig");
    }
}
