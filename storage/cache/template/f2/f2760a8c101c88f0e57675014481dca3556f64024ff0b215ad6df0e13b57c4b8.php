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

/* extension/blueberry/catalog/view/template/product/search.twig */
class __TwigTemplate_1f6f06999ae43598a301994d42bc3c11b1333927907233e9833e08f833a5e3e1 extends Template
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
        yield ($context["header"] ?? null);
        yield "
<div id=\"product-search\" class=\"max-w-[1320px] mx-auto px-4\">
   <!-- Breadcrumb -->
   <section class=\"section-breadcrumb mb-[20px] max-[1199px]:mb-[15px] border-b border-solid border-[#eee] bg-[#f8f8fb]\">
      <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
         <div class=\"flex flex-wrap w-full\">
            <div class=\"w-full px-[12px]\">
               <div class=\"flex flex-wrap w-full bb-breadcrumb-inner m-0 py-[20px] items-center\">
                  <!-- Breadcrumb List -->
                  <div class=\"w-full px-[12px]\">
                     <ul class=\"bb-breadcrumb-list mx-[-5px] flex justify-start max-[767px]:justify-center flex-wrap\">
                        <li class=\"bb-breadcrumb-item text-[14px] font-normal px-[5px]\"><a href=\"";
        // line 12
        yield ($context["base"] ?? null);
        yield "\" class=\"font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]\"> Home</a></li>
                        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            yield "                        ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) {
                // line 15
                yield "                        <li class=\"text-[14px] font-normal px-[5px]\">
                           <i class=\"ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]\"></i>
                        </li>
                        ";
            }
            // line 19
            yield "                        <li class=\"bb-breadcrumb-item px-[5px]\">
                           ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 20)) {
                // line 21
                yield "                           <span class=\"font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem]\">
                           ";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 22);
                yield "
                           </span>
                           ";
            } else {
                // line 25
                yield "                           <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 25);
                yield "\"
                              class=\"font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d] hover:text-[#3bb77e] transition-all duration-300\">
                           ";
                // line 27
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 27);
                yield "
                           </a>
                           ";
            }
            // line 30
            yield "                        </li>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class=\"w-full\">
      ";
        // line 40
        yield ($context["column_left"] ?? null);
        yield "
      <div id=\"content\">
         ";
        // line 42
        yield ($context["content_top"] ?? null);
        yield "
         <h1 class=\"text-2xl font-bold text-gray-800 mb-6\">";
        // line 43
        yield ($context["heading_title"] ?? null);
        yield "</h1>
         <div class=\"mb-6\">
            <label for=\"input-search\" class=\"block text-sm font-medium text-gray-700 mb-2\">
            ";
        // line 46
        yield ($context["entry_search"] ?? null);
        yield "
            </label>
            <div class=\"flex items-center gap-3\">
               <input
                  type=\"text\"
                  name=\"search\"
                  value=\"";
        // line 52
        yield ($context["search"] ?? null);
        yield "\"
                  placeholder=\"";
        // line 53
        yield ($context["text_keyword"] ?? null);
        yield "\"
                  id=\"input-search\"
                  class=\"flex-1 border border-gray-300 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder-gray-400
                  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition\"
                  />
               <button
                  type=\"button\"
                  id=\"button-search\"
                  class=\"shrink-0 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white text-sm font-medium
                  px-5 py-2.5 rounded-lg transition-colors\"
                  >
               ";
        // line 64
        yield ($context["button_search"] ?? null);
        yield "
               </button>
            </div>
         </div>
         <hr class=\"border-gray-200 my-6\"/>
         <h2 class=\"text-lg font-semibold text-gray-700 mb-4\">";
        // line 69
        yield ($context["text_search"] ?? null);
        yield "</h2>
         ";
        // line 70
        if (($context["products"] ?? null)) {
            // line 71
            yield "         <div class=\"w-full px-[12px]\">
            <div class=\"bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between\">
               <div class=\"flex flex-wrap w-full\">
                  <div class=\"w-[30%] px-[12px] max-[420px]:w-full\">
                     <div class=\"bb-bl-btn py-[10px] flex max-[420px]:justify-center\">
                        <button type=\"button\" class=\"grid-btn btn-grid-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent mr-[5px] active\" title=\"grid\">
                        <i class=\"ri-apps-line text-[20px]\"></i>
                        </button>
                        <button type=\"button\" class=\"grid-btn btn-list-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent\" title=\"grid\">
                        <i class=\"ri-list-unordered text-[20px]\"></i>
                        </button>
                     </div>
                  </div>
                  <div class=\"w-[40%] px-[12px] max-[420px]:w-full\">
                     <a href=\"";
            // line 85
            yield ($context["compare"] ?? null);
            yield "\"
                        id=\"compare-total\"
                        class=\"inline-flex items-center gap-2 mt-2 px-4 py-2 text-dark rounded-md transition duration-200\">
                     <i class=\"ri-arrow-left-right-line text-lg\"></i>
                     <span class=\"hidden xl:inline\">
                     ";
            // line 90
            yield ($context["text_compare"] ?? null);
            yield "
                     </span>
                     </a>
                  </div>
                  <div class=\"w-[30%] px-[12px] max-[420px]:w-full\">
                     <select onchange=\"if(this.value) window.location.href=this.value\"
                        class=\"sort-select w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border-none rounded-md\">
                     ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 98
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 98) != "Default")) {
                    // line 99
                    yield "                     <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 99);
                    yield "\"
                     ";
                    // line 100
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 100) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort_by"] ?? null), ($context["order"] ?? null)))) {
                        yield "selected";
                    }
                    yield ">
                     ";
                    // line 101
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 101);
                    yield "
                     </option>
                     ";
                }
                // line 104
                yield "                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "                     </select>
                  </div>
                  <style>
                     .hide-select {
                     display: block !important;
                     visibility: visible !important;
                     opacity: 1 !important;
                     pointer-events: auto !important;
                     position: relative !important;
                     z-index: 10;
                     }
                     .custom-select{
                     display: none !important;
                     visibility: hidden !important;
                     opacity: 0 !important;
                     pointer-events: none !important;
                     position: absolute !important;
                     z-index: -1 !important;
                     }
                  </style>
               </div>
            </div>
         </div>
         <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
            ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 130
                yield "            <div>";
                yield $context["product"];
                yield "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            yield "         </div>
         <div class=\"w-full px-[12px]\">
            <div class=\"bb-pro-pagination mb-[24px] flex justify-between items-center max-[575px]:flex-col max-[575px]:items-center\">
               <p class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]\">
                  ";
            // line 136
            yield ($context["results"] ?? null);
            yield "
               </p>
               <div class=\"bb-pagination\">
                  ";
            // line 139
            yield ($context["pagination"] ?? null);
            yield "
               </div>
            </div>
         </div>
         ";
        } else {
            // line 144
            yield "         <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
         ";
        }
        // line 146
        yield "         ";
        yield ($context["content_bottom"] ?? null);
        yield "
      </div>
      ";
        // line 148
        yield ($context["column_right"] ?? null);
        yield "
   </div>
</div>
<script type=\"text/javascript\"><!--
   \$('#button-search').bind('click', function() {
       url = 'index.php?route=product/search&language=";
        // line 153
        yield ($context["language"] ?? null);
        yield "';
   
       var search = \$('#input-search').val();
   
       if (search) {
           url += '&search=' + encodeURIComponent(search);
       }
   
       var category_id = \$('#input-category').prop('value');
   
       if (category_id > 0) {
           url += '&category_id=' + encodeURIComponent(category_id);
       }
   
       var sub_category = \$('#input-sub-category:checked').prop('value');
   
       if (sub_category) {
           url += '&sub_category=1';
       }
   
       var description = \$('#input-description:checked').prop('value');
   
       if (description) {
           url += '&description=1';
       }
   
       location = url;
   });
   
   \$('#input-search').bind('keydown', function(e) {
       if (e.keyCode == 13) {
           \$('#button-search').trigger('click');
       }
   });
   
   \$('#input-category').on('change', function() {
       \$('#input-sub-category').prop('disabled', (this.value == '0' ? true : false));
   });
   
   \$('#input-category').trigger('change');
   //-->
</script>
";
        // line 195
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/product/search.twig";
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
        return array (  381 => 195,  336 => 153,  328 => 148,  322 => 146,  316 => 144,  308 => 139,  302 => 136,  296 => 132,  287 => 130,  283 => 129,  257 => 105,  251 => 104,  245 => 101,  239 => 100,  234 => 99,  231 => 98,  227 => 97,  217 => 90,  209 => 85,  193 => 71,  191 => 70,  187 => 69,  179 => 64,  165 => 53,  161 => 52,  152 => 46,  146 => 43,  142 => 42,  137 => 40,  127 => 32,  112 => 30,  106 => 27,  100 => 25,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  80 => 15,  77 => 14,  60 => 13,  56 => 12,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-search\" class=\"max-w-[1320px] mx-auto px-4\">
   <!-- Breadcrumb -->
   <section class=\"section-breadcrumb mb-[20px] max-[1199px]:mb-[15px] border-b border-solid border-[#eee] bg-[#f8f8fb]\">
      <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
         <div class=\"flex flex-wrap w-full\">
            <div class=\"w-full px-[12px]\">
               <div class=\"flex flex-wrap w-full bb-breadcrumb-inner m-0 py-[20px] items-center\">
                  <!-- Breadcrumb List -->
                  <div class=\"w-full px-[12px]\">
                     <ul class=\"bb-breadcrumb-list mx-[-5px] flex justify-start max-[767px]:justify-center flex-wrap\">
                        <li class=\"bb-breadcrumb-item text-[14px] font-normal px-[5px]\"><a href=\"{{ base }}\" class=\"font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]\"> Home</a></li>
                        {% for breadcrumb in breadcrumbs %}
                        {% if not loop.first %}
                        <li class=\"text-[14px] font-normal px-[5px]\">
                           <i class=\"ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]\"></i>
                        </li>
                        {% endif %}
                        <li class=\"bb-breadcrumb-item px-[5px]\">
                           {% if loop.last %}
                           <span class=\"font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem]\">
                           {{ breadcrumb.text }}
                           </span>
                           {% else %}
                           <a href=\"{{ breadcrumb.href }}\"
                              class=\"font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d] hover:text-[#3bb77e] transition-all duration-300\">
                           {{ breadcrumb.text }}
                           </a>
                           {% endif %}
                        </li>
                        {% endfor %}
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <div class=\"w-full\">
      {{ column_left }}
      <div id=\"content\">
         {{ content_top }}
         <h1 class=\"text-2xl font-bold text-gray-800 mb-6\">{{ heading_title }}</h1>
         <div class=\"mb-6\">
            <label for=\"input-search\" class=\"block text-sm font-medium text-gray-700 mb-2\">
            {{ entry_search }}
            </label>
            <div class=\"flex items-center gap-3\">
               <input
                  type=\"text\"
                  name=\"search\"
                  value=\"{{ search }}\"
                  placeholder=\"{{ text_keyword }}\"
                  id=\"input-search\"
                  class=\"flex-1 border border-gray-300 rounded-lg px-4 py-2.5 text-sm text-gray-800 placeholder-gray-400
                  focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition\"
                  />
               <button
                  type=\"button\"
                  id=\"button-search\"
                  class=\"shrink-0 bg-blue-600 hover:bg-blue-700 active:bg-blue-800 text-white text-sm font-medium
                  px-5 py-2.5 rounded-lg transition-colors\"
                  >
               {{ button_search }}
               </button>
            </div>
         </div>
         <hr class=\"border-gray-200 my-6\"/>
         <h2 class=\"text-lg font-semibold text-gray-700 mb-4\">{{ text_search }}</h2>
         {% if products %}
         <div class=\"w-full px-[12px]\">
            <div class=\"bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between\">
               <div class=\"flex flex-wrap w-full\">
                  <div class=\"w-[30%] px-[12px] max-[420px]:w-full\">
                     <div class=\"bb-bl-btn py-[10px] flex max-[420px]:justify-center\">
                        <button type=\"button\" class=\"grid-btn btn-grid-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent mr-[5px] active\" title=\"grid\">
                        <i class=\"ri-apps-line text-[20px]\"></i>
                        </button>
                        <button type=\"button\" class=\"grid-btn btn-list-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent\" title=\"grid\">
                        <i class=\"ri-list-unordered text-[20px]\"></i>
                        </button>
                     </div>
                  </div>
                  <div class=\"w-[40%] px-[12px] max-[420px]:w-full\">
                     <a href=\"{{ compare }}\"
                        id=\"compare-total\"
                        class=\"inline-flex items-center gap-2 mt-2 px-4 py-2 text-dark rounded-md transition duration-200\">
                     <i class=\"ri-arrow-left-right-line text-lg\"></i>
                     <span class=\"hidden xl:inline\">
                     {{ text_compare }}
                     </span>
                     </a>
                  </div>
                  <div class=\"w-[30%] px-[12px] max-[420px]:w-full\">
                     <select onchange=\"if(this.value) window.location.href=this.value\"
                        class=\"sort-select w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border-none rounded-md\">
                     {% for item in sorts %}
                     {% if item.text != 'Default' %}
                     <option value=\"{{ item.href }}\"
                     {% if item.value == '%s-%s'|format(sort_by, order) %}selected{% endif %}>
                     {{ item.text }}
                     </option>
                     {% endif %}
                     {% endfor %}
                     </select>
                  </div>
                  <style>
                     .hide-select {
                     display: block !important;
                     visibility: visible !important;
                     opacity: 1 !important;
                     pointer-events: auto !important;
                     position: relative !important;
                     z-index: 10;
                     }
                     .custom-select{
                     display: none !important;
                     visibility: hidden !important;
                     opacity: 0 !important;
                     pointer-events: none !important;
                     position: absolute !important;
                     z-index: -1 !important;
                     }
                  </style>
               </div>
            </div>
         </div>
         <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
            {% for product in products %}
            <div>{{ product }}</div>
            {% endfor %}
         </div>
         <div class=\"w-full px-[12px]\">
            <div class=\"bb-pro-pagination mb-[24px] flex justify-between items-center max-[575px]:flex-col max-[575px]:items-center\">
               <p class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]\">
                  {{ results }}
               </p>
               <div class=\"bb-pagination\">
                  {{ pagination }}
               </div>
            </div>
         </div>
         {% else %}
         <p>{{ text_no_results }}</p>
         {% endif %}
         {{ content_bottom }}
      </div>
      {{ column_right }}
   </div>
</div>
<script type=\"text/javascript\"><!--
   \$('#button-search').bind('click', function() {
       url = 'index.php?route=product/search&language={{ language }}';
   
       var search = \$('#input-search').val();
   
       if (search) {
           url += '&search=' + encodeURIComponent(search);
       }
   
       var category_id = \$('#input-category').prop('value');
   
       if (category_id > 0) {
           url += '&category_id=' + encodeURIComponent(category_id);
       }
   
       var sub_category = \$('#input-sub-category:checked').prop('value');
   
       if (sub_category) {
           url += '&sub_category=1';
       }
   
       var description = \$('#input-description:checked').prop('value');
   
       if (description) {
           url += '&description=1';
       }
   
       location = url;
   });
   
   \$('#input-search').bind('keydown', function(e) {
       if (e.keyCode == 13) {
           \$('#button-search').trigger('click');
       }
   });
   
   \$('#input-category').on('change', function() {
       \$('#input-sub-category').prop('disabled', (this.value == '0' ? true : false));
   });
   
   \$('#input-category').trigger('change');
   //-->
</script>
{{ footer }}", "extension/blueberry/catalog/view/template/product/search.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\product\\search.twig");
    }
}
