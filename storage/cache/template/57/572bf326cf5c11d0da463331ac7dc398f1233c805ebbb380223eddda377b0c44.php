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

/* extension/blueberry/catalog/view/template/product/category.twig */
class __TwigTemplate_8ba95b0109346400a90a0a65f0cb54bb2311c52ec5900f3e72c11e9b6470169e extends Template
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
<div id=\"product-category\" class=\"max-w-[1320px] mx-auto\">
    ";
        // line 3
        $context["content_class"] = "col-span-12";
        // line 4
        yield "    ";
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            yield "        ";
            $context["content_class"] = "col-span-12 lg:col-span-6";
            // line 6
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            yield "        ";
            $context["content_class"] = "col-span-12 lg:col-span-9";
            // line 8
            yield "    ";
        }
        // line 9
        yield "  <!-- Breadcrumb -->
  <section class=\"section-breadcrumb mb-[20px] max-[1199px]:mb-[15px] border-b border-solid border-[#eee] bg-[#f8f8fb]\">
      <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
          <div class=\"flex flex-wrap w-full\">
              <div class=\"w-full px-[12px]\">
                  <div class=\"flex flex-wrap w-full bb-breadcrumb-inner m-0 py-[20px] items-center\">
                      <!-- Breadcrumb List -->
                      <div class=\"w-full px-[12px]\">
                          <ul class=\"bb-breadcrumb-list mx-[-5px] flex justify-start max-[767px]:justify-center flex-wrap\">
                              <li class=\"bb-breadcrumb-item text-[14px] font-normal px-[5px]\"><a href=\"";
        // line 18
        yield ($context["base"] ?? null);
        yield "\" class=\"font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]\"> Home</a></li>
                              ";
        // line 19
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
            // line 20
            yield "                                  ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 20)) {
                // line 21
                yield "                                      <li class=\"text-[14px] font-normal px-[5px]\">
                                          <i class=\"ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]\"></i>
                                      </li>
                                  ";
            }
            // line 25
            yield "                                  <li class=\"bb-breadcrumb-item px-[5px]\">
                                      ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 26)) {
                // line 27
                yield "                                          <span class=\"font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem]\">
                                              ";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 28);
                yield "
                                          </span>
                                      ";
            } else {
                // line 31
                yield "                                          <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 31);
                yield "\"
                                            class=\"font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d] hover:text-[#3bb77e] transition-all duration-300\">
                                              ";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 33);
                yield "
                                          </a>
                                      ";
            }
            // line 36
            yield "                                  </li>
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
        // line 38
        yield "                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> 
    ";
        // line 45
        yield ($context["content_top"] ?? null);
        yield "

    
    <!-- Category section -->
    <section class=\"section-category pt-[10px] max-[1199px]:pt-[15px] mb-[15px]\">
        <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
            <div class=\"flex flex-wrap w-full\">
                <div class=\"w-full px-[12px]\">
                    <div class=\"bb-category-5-colum owl-carousel\">
                    ";
        // line 55
        yield "                    ";
        $context["bg_classes"] = ["bg-[#fef1f1]", "bg-[#e1fcf2]", "bg-[#f4f1fe]", "bg-[#e1fcf2]", "bg-[#fbf9e4]"];
        // line 62
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 63
            yield "                        ";
            $context["bg_class"] = (($_v0 = ($context["bg_classes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 63) % Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["bg_classes"] ?? null)))] ?? null) : null);
            // line 64
            yield "                        ";
            $context["delay"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 64) * 200);
            // line 65
            yield "                        <div class=\"bb-category-box p-[15px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] ";
            yield ($context["bg_class"] ?? null);
            yield "\"
                             data-aos=\"flip-left\"
                             data-aos-duration=\"1000\"
                             data-aos-delay=\"";
            // line 68
            yield ($context["delay"] ?? null);
            yield "\">
                            <!-- Category Image -->
                            <div class=\"category-image mb-[12px]\">
                                ";
            // line 71
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb", [], "any", true, true, false, 71) && CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 71))) {
                // line 72
                yield "                                    <img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 72);
                yield "\"
                                         alt=\"";
                // line 73
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 73);
                yield "\"
                                         class=\"w-[150px] h-[150px] object-contain
                                                max-[1399px]:h-[65px] max-[1399px]:w-[65px]
                                                max-[1199px]:h-[50px] max-[1199px]:w-[50px]\">
                                ";
            } else {
                // line 78
                yield "                                    <img src=\"extension/blueberry/catalog/view/img/no-image/no_image.png\"
                                         alt=\"";
                // line 79
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 79);
                yield "\"
                                         class=\"w-[150px] h-[150px] object-contain
                                                max-[1399px]:h-[65px] max-[1399px]:w-[65px]
                                                max-[1199px]:h-[50px] max-[1199px]:w-[50px]\">
                                ";
            }
            // line 84
            yield "                            </div>
                            <!-- Category Content -->
                            <div class=\"category-sub-contact\">
                                <h5 class=\"mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2] h-[35px]\">
                                    <a href=\"";
            // line 88
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 88);
            yield "\"
                                       class=\"font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize hover:text-[#3bb77e] transition-all duration-300\">
                                        ";
            // line 90
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 90);
            yield "
                                    </a>
                                </h5>
                                ";
            // line 93
            if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "product_count", [], "any", true, true, false, 93)) {
                // line 94
                yield "                                    <p class=\"font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]\">
                                        ";
                // line 95
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "product_count", [], "any", false, false, false, 95);
                yield " items
                                    </p>
                                ";
            }
            // line 98
            yield "                            </div>

                        </div>
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
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        yield "
                </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"grid grid-cols-12 gap-6\">

        ";
        // line 110
        if (($context["column_left"] ?? null)) {
            // line 111
            yield "            <aside id=\"mobile_filter_content_top\" class=\"col-span-12 lg:col-span-3 hidden lg:block\">
                <div class=\"w-full\">
                    <div class=\"bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between\">
                        <div class=\"flex lg:flex-wrap justify-between w-full\">
                              <a href=\"";
            // line 115
            yield ($context["compare"] ?? null);
            yield "\"
                                  id=\"compare-total\"
                                  class=\"inline-flex items-center gap-2 px-4 py-4 text-dark rounded-md transition duration-200\">
                                      <i class=\"ri-arrow-left-right-line text-lg\"></i>
                                      <span class=\"hidden xl:inline\">
                                          ";
            // line 120
            yield ($context["text_compare"] ?? null);
            yield "
                                      </span>
                              </a>
                        </div>
                    </div>
                </div>
                <div id=\"column_left_content\" class=\"bb-shop-wrap bg-[#f8f8fb] border border-solid border-[#eee] rounded-[20px] sticky top-0 p-[20px]\">
                    ";
            // line 127
            yield ($context["column_left"] ?? null);
            yield "
                </div>
            </aside>
        ";
        }
        // line 131
        yield "
        <div class=\"
            ";
        // line 133
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 134
            yield "                col-span-12 lg:col-span-6
            ";
        } elseif ((        // line 135
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 136
            yield "                col-span-12 lg:col-span-9
            ";
        } else {
            // line 138
            yield "                col-span-12
            ";
        }
        // line 140
        yield "        \">
            <div id=\"category-products\" class=\"px-2\">
                ";
        // line 142
        yield ($context["products_html"] ?? null);
        yield "
            </div>
        </div>

        ";
        // line 146
        if (($context["column_right"] ?? null)) {
            // line 147
            yield "            <aside class=\"col-span-12 lg:col-span-3\">
                ";
            // line 148
            yield ($context["column_right"] ?? null);
            yield "
            </aside>
        ";
        }
        // line 151
        yield "
    </div>

    ";
        // line 154
        yield ($context["content_bottom"] ?? null);
        yield "
    
</div>
</div>
";
        // line 158
        yield ($context["footer"] ?? null);
        yield "
<script>
    document.addEventListener('submit', function (e) {

        const form = e.target;

        if (!form.matches('[data-oc-toggle=\"ajax\"]')) return;

        setTimeout(() => {

            // refresh compare total
            fetch('index.php?route=product/compare|info'.replace('|',''))
                .then(res => res.text())
                .then(html => {
                    const temp = document.createElement('div');
                    temp.innerHTML = html;

                    const newCompare = temp.querySelector('#compare-total');

                    if (newCompare) {
                        document.querySelector('#compare-total').innerHTML =
                            newCompare.innerHTML;
                    }
                });

        }, 300);

    });
</script>
<style>
#input-sort{
   display:block !important;
}
</style>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/product/category.twig";
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
        return array (  374 => 158,  367 => 154,  362 => 151,  356 => 148,  353 => 147,  351 => 146,  344 => 142,  340 => 140,  336 => 138,  332 => 136,  330 => 135,  327 => 134,  325 => 133,  321 => 131,  314 => 127,  304 => 120,  296 => 115,  290 => 111,  288 => 110,  278 => 102,  261 => 98,  255 => 95,  252 => 94,  250 => 93,  244 => 90,  239 => 88,  233 => 84,  225 => 79,  222 => 78,  214 => 73,  209 => 72,  207 => 71,  201 => 68,  194 => 65,  191 => 64,  188 => 63,  170 => 62,  167 => 55,  155 => 45,  146 => 38,  131 => 36,  125 => 33,  119 => 31,  113 => 28,  110 => 27,  108 => 26,  105 => 25,  99 => 21,  96 => 20,  79 => 19,  75 => 18,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-category\" class=\"max-w-[1320px] mx-auto\">
    {% set content_class = 'col-span-12' %}
    {% if column_left and column_right %}
        {% set content_class = 'col-span-12 lg:col-span-6' %}
    {% elseif column_left or column_right %}
        {% set content_class = 'col-span-12 lg:col-span-9' %}
    {% endif %}
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
    {{ content_top }}

    
    <!-- Category section -->
    <section class=\"section-category pt-[10px] max-[1199px]:pt-[15px] mb-[15px]\">
        <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
            <div class=\"flex flex-wrap w-full\">
                <div class=\"w-full px-[12px]\">
                    <div class=\"bb-category-5-colum owl-carousel\">
                    {# Background color classes to rotate #}
                    {% set bg_classes = [
                        'bg-[#fef1f1]',
                        'bg-[#e1fcf2]',
                        'bg-[#f4f1fe]',
                        'bg-[#e1fcf2]',
                        'bg-[#fbf9e4]'
                    ] %}
                    {% for category in categories %}
                        {% set bg_class = bg_classes[loop.index0 % bg_classes|length] %}
                        {% set delay = loop.index * 200 %}
                        <div class=\"bb-category-box p-[15px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] {{ bg_class }}\"
                             data-aos=\"flip-left\"
                             data-aos-duration=\"1000\"
                             data-aos-delay=\"{{ delay }}\">
                            <!-- Category Image -->
                            <div class=\"category-image mb-[12px]\">
                                {% if category.thumb is defined and category.thumb %}
                                    <img src=\"{{ category.thumb }}\"
                                         alt=\"{{ category.name }}\"
                                         class=\"w-[150px] h-[150px] object-contain
                                                max-[1399px]:h-[65px] max-[1399px]:w-[65px]
                                                max-[1199px]:h-[50px] max-[1199px]:w-[50px]\">
                                {% else %}
                                    <img src=\"extension/blueberry/catalog/view/img/no-image/no_image.png\"
                                         alt=\"{{ category.name }}\"
                                         class=\"w-[150px] h-[150px] object-contain
                                                max-[1399px]:h-[65px] max-[1399px]:w-[65px]
                                                max-[1199px]:h-[50px] max-[1199px]:w-[50px]\">
                                {% endif %}
                            </div>
                            <!-- Category Content -->
                            <div class=\"category-sub-contact\">
                                <h5 class=\"mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2] h-[35px]\">
                                    <a href=\"{{ category.href }}\"
                                       class=\"font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize hover:text-[#3bb77e] transition-all duration-300\">
                                        {{ category.name }}
                                    </a>
                                </h5>
                                {% if category.product_count is defined %}
                                    <p class=\"font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]\">
                                        {{ category.product_count }} items
                                    </p>
                                {% endif %}
                            </div>

                        </div>
                    {% endfor %}

                </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"grid grid-cols-12 gap-6\">

        {% if column_left %}
            <aside id=\"mobile_filter_content_top\" class=\"col-span-12 lg:col-span-3 hidden lg:block\">
                <div class=\"w-full\">
                    <div class=\"bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between\">
                        <div class=\"flex lg:flex-wrap justify-between w-full\">
                              <a href=\"{{ compare }}\"
                                  id=\"compare-total\"
                                  class=\"inline-flex items-center gap-2 px-4 py-4 text-dark rounded-md transition duration-200\">
                                      <i class=\"ri-arrow-left-right-line text-lg\"></i>
                                      <span class=\"hidden xl:inline\">
                                          {{ text_compare }}
                                      </span>
                              </a>
                        </div>
                    </div>
                </div>
                <div id=\"column_left_content\" class=\"bb-shop-wrap bg-[#f8f8fb] border border-solid border-[#eee] rounded-[20px] sticky top-0 p-[20px]\">
                    {{ column_left }}
                </div>
            </aside>
        {% endif %}

        <div class=\"
            {% if column_left and column_right %}
                col-span-12 lg:col-span-6
            {% elseif column_left or column_right %}
                col-span-12 lg:col-span-9
            {% else %}
                col-span-12
            {% endif %}
        \">
            <div id=\"category-products\" class=\"px-2\">
                {{ products_html }}
            </div>
        </div>

        {% if column_right %}
            <aside class=\"col-span-12 lg:col-span-3\">
                {{ column_right }}
            </aside>
        {% endif %}

    </div>

    {{ content_bottom }}
    
</div>
</div>
{{ footer }}
<script>
    document.addEventListener('submit', function (e) {

        const form = e.target;

        if (!form.matches('[data-oc-toggle=\"ajax\"]')) return;

        setTimeout(() => {

            // refresh compare total
            fetch('index.php?route=product/compare|info'.replace('|',''))
                .then(res => res.text())
                .then(html => {
                    const temp = document.createElement('div');
                    temp.innerHTML = html;

                    const newCompare = temp.querySelector('#compare-total');

                    if (newCompare) {
                        document.querySelector('#compare-total').innerHTML =
                            newCompare.innerHTML;
                    }
                });

        }, 300);

    });
</script>
<style>
#input-sort{
   display:block !important;
}
</style>", "extension/blueberry/catalog/view/template/product/category.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\product\\category.twig");
    }
}
