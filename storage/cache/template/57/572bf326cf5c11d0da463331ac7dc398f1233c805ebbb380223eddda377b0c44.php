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
<div id=\"product-category\">
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
            yield "                                  ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) {
                // line 15
                yield "                                      <li class=\"text-[14px] font-normal px-[5px]\">
                                          <i class=\"ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]\"></i>
                                      </li>
                                  ";
            }
            // line 19
            yield "                                  <li class=\"bb-breadcrumb-item px-[5px]\">
                                      ";
            // line 20
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 20)) {
                // line 21
                yield "                                          <span class=\"font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem]\">
                                              ";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 22);
                yield "
                                          </span>
                                      ";
            } else {
                // line 25
                yield "                                          <a href=\"";
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
        // line 32
        yield "                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section> 
    ";
        // line 39
        yield ($context["content_top"] ?? null);
        yield "

    <!-- Button Section-->
    <section>
        <!-- Tabs / big rounded-top buttons -->
        <div class=\"max-w-6xl mx-auto pt-5 lg:pt-0 pb-4 px-[12px] lg:px-0\">
            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-4 lg6488:gap-10\">
                <button
                type=\"button\"
                class=\"w-full h-24 rounded-t-3xl rounded-b-none
                        bg-gradient-to-b from-sky-100 to-sky-300
                        border border-sky-200 shadow-sm
                        text-3xl font-semibold text-slate-900
                        flex items-center justify-center
                        hover:from-sky-200 hover:to-sky-400
                        focus:outline-none focus:ring-4 focus:ring-sky-200\"
                >
                Dreamer's Canvas
                </button>

                <button
                type=\"button\"
                class=\"w-full h-24 rounded-t-3xl rounded-b-none
                        bg-gradient-to-b from-sky-100 to-sky-300
                        border border-sky-200 shadow-sm
                        text-3xl font-semibold text-slate-900
                        flex items-center justify-center
                        hover:from-sky-200 hover:to-sky-400
                        focus:outline-none focus:ring-4 focus:ring-sky-200\"
                >
                Find Your Perfect Fridge
                </button>
            </div>
        </div>
    </section>
    
    <!-- Category section -->
    <section class=\"section-category pt-[10px] max-[1199px]:pt-[15px] mb-[24px]\">
        <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
            <div class=\"flex flex-wrap w-full\">
                <div class=\"w-full px-[12px]\">
                    <div class=\"bb-category-5-colum owl-carousel\">
                    ";
        // line 82
        yield "                    ";
        $context["bg_classes"] = ["bg-[#fef1f1]", "bg-[#e1fcf2]", "bg-[#f4f1fe]", "bg-[#e1fcf2]", "bg-[#fbf9e4]"];
        // line 89
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
            // line 90
            yield "                        ";
            $context["bg_class"] = (($_v0 = ($context["bg_classes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 90) % Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["bg_classes"] ?? null)))] ?? null) : null);
            // line 91
            yield "                        ";
            $context["delay"] = (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 91) * 200);
            // line 92
            yield "                        <div class=\"bb-category-box p-[15px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] ";
            yield ($context["bg_class"] ?? null);
            yield "\"
                             data-aos=\"flip-left\"
                             data-aos-duration=\"1000\"
                             data-aos-delay=\"";
            // line 95
            yield ($context["delay"] ?? null);
            yield "\">
                            <!-- Category Image -->
                            <div class=\"category-image mb-[12px]\">
                                ";
            // line 98
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb", [], "any", true, true, false, 98) && CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 98))) {
                // line 99
                yield "                                    <img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 99);
                yield "\"
                                         alt=\"";
                // line 100
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 100);
                yield "\"
                                         class=\"w-[80px] h-[80px] object-contain
                                                max-[1399px]:h-[65px] max-[1399px]:w-[65px]
                                                max-[1199px]:h-[50px] max-[1199px]:w-[50px]\">
                                ";
            } else {
                // line 105
                yield "                                    <img src=\"catalog/view/theme/your_theme/assets/img/category/default-category.png\"
                                         alt=\"";
                // line 106
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 106);
                yield "\"
                                         class=\"w-[80px] h-[80px] object-contain
                                                max-[1399px]:h-[65px] max-[1399px]:w-[65px]
                                                max-[1199px]:h-[50px] max-[1199px]:w-[50px]\">
                                ";
            }
            // line 111
            yield "                            </div>
                            <!-- Category Content -->
                            <div class=\"category-sub-contact\">
                                <h5 class=\"mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2] h-[35px]\">
                                    <a href=\"";
            // line 115
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 115);
            yield "\"
                                       class=\"font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize hover:text-[#3bb77e] transition-all duration-300\">
                                        ";
            // line 117
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 117);
            yield "
                                    </a>
                                </h5>
                                ";
            // line 120
            if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "product_count", [], "any", true, true, false, 120)) {
                // line 121
                yield "                                    <p class=\"font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]\">
                                        ";
                // line 122
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "product_count", [], "any", false, false, false, 122);
                yield " items
                                    </p>
                                ";
            }
            // line 125
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
        // line 129
        yield "
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop section -->
    <section class=\"section-shop pb-[50px] max-[1199px]:pb-[35px]\">
        <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
            <div class=\"flex flex-wrap w-full mb-[-24px]\">
                <div class=\"min-[992px]:w-[25%] w-full px-[12px] mb-[24px]\">
                    <div class=\"bb-shop-wrap bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px] sticky top-[0]\">
                        <div class=\"bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]\">
                            <div class=\"bb-sidebar-title mb-[20px]\">
                                <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">Category</h3>
                            </div>
                            <div class=\"bb-sidebar-contact\">
                                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 148
            yield "                                    <ul>
                                        <li class=\"relative block mb-[14px]\">
                                            <div class=\"bb-sidebar-block-item relative\">
                                                <input type=\"checkbox\" class=\"w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]\">
                                                <a href=\"javascript:void(0)\" class=\"ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer\">";
            // line 152
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 152);
            yield "</a>
                                                <span class=\"checked absolute top-[0] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden\"></span>
                                            </div>
                                        </li>
                                    </ul>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "                            </div>
                        </div>
                        <div class=\"bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]\">
                            <div class=\"bb-sidebar-title mb-[20px]\">
                                <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">Color</h3>
                            </div>
                            <div class=\"bb-color-contact\">
                                <ul>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px] color-sidebar-active\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-1 w-[22px] h-[22px] block rounded-[20px] bg-[#c4d6f9]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-2 w-[22px] h-[22px] block rounded-[20px] bg-[#ff748b]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-3 w-[22px] h-[22px] block rounded-[20px] bg-[#000000]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-4 w-[22px] h-[22px] block rounded-[20px] bg-[#2bff4a]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-5 w-[22px] h-[22px] block rounded-[20px] bg-[#ff7c5e]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-6 w-[22px] h-[22px] block rounded-[20px] bg-[#f155ff]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-7 w-[22px] h-[22px] block rounded-[20px] bg-[#ffef00]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-8 w-[22px] h-[22px] block rounded-[20px] bg-[#c89fff]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-9 w-[22px] h-[22px] block rounded-[20px] bg-[#7bfffa]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-10 w-[22px] h-[22px] block rounded-[20px] bg-[#56ffc1]\"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]\">
                            <div class=\"bb-sidebar-title mb-[20px]\">
                                <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">Price</h3>
                            </div>
                            <div class=\"bb-price-range\">
                                <div class=\"price-range-slider relative w-full mb-[7px]\">
                                    <p class=\"range-value m-[0]\">
                                        <input type=\"text\" id=\"amount\" readonly class=\"w-full bg-[#fff] text-[#000] text-[16px] mb-[15px] font-initial border-[1px] border-solid border-[#eee] p-[10px] text-center outline-[0] rounded-[10px]\">
                                    </p>
                                    <div id=\"slider-range\" class=\"range-bar\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"bb-sidebar-block p-[20px]\">
                            <div class=\"bb-sidebar-title mb-[20px]\">
                                <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">Tags</h3>
                            </div>
                            <div class=\"bb-tags\">
                                <ul class=\"flex flex-wrap m-[-5px]\">
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Refrigerator & Freezer</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Air Conditioner</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Mobile</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Computer</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Microwave and Electric Oven</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Washing Machine</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Television</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">E-Bike</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">PCB</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        ";
        // line 268
        yield ($context["column_left"] ?? null);
        yield "
                    </div>
                </div>

                <!-- ";
        // line 272
        if (($context["products"] ?? null)) {
            yield " -->

                <div class=\"min-[992px]:w-[75%] w-full px-[12px] mb-[24px]\">
                    <div class=\"bb-shop-pro-inner\">
                        <div class=\"flex flex-wrap mx-[-12px] mb-[-24px]\">
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
                                            <a href=\"";
            // line 291
            yield ($context["compare"] ?? null);
            yield "\"
                                                id=\"compare-total\"
                                                class=\"inline-flex items-center gap-2 mt-2 px-4 py-2 text-dark rounded-md transition duration-200\">
                                                    <i class=\"ri-arrow-left-right-line text-lg\"></i>
                                                    <span class=\"hidden xl:inline\">
                                                        ";
            // line 296
            yield ($context["text_compare"] ?? null);
            yield "
                                                    </span>
                                            </a>
                                        </div>


    
                                        <div class=\"w-[30%] px-[12px] max-[420px]:w-full\">
                                            <select onchange=\"if(this.value) window.location.href=this.value\"
                                                    class=\"sort-select w-full mt-2 px-3 py-2 text-gray-700 bg-transparent border-none rounded-md\">

                                                ";
            // line 307
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["sorts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 308
                yield "                                                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 308) != "Default")) {
                    // line 309
                    yield "                                                        <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 309);
                    yield "\"
                                                            ";
                    // line 310
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 310) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort_by"] ?? null), ($context["order"] ?? null)))) {
                        yield "selected";
                    }
                    yield ">
                                                            ";
                    // line 311
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 311);
                    yield "
                                                        </option>
                                                    ";
                }
                // line 314
                yield "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 315
            yield "
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

                            ";
            // line 343
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 344
                yield "                            <div class=\"min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
                                ";
                // line 345
                yield $context["product"];
                yield "
                            </div>
                            
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 349
            yield "
                            <div class=\"w-full px-[12px]\">
                                <div class=\"bb-pro-pagination mb-[24px] flex justify-between items-center max-[575px]:flex-col max-[575px]:items-center\">

                                    ";
            // line 354
            yield "                                    <p class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]\">
                                        ";
            // line 355
            yield ($context["results"] ?? null);
            yield "
                                    </p>

                                    ";
            // line 359
            yield "                                    <div class=\"bb-pagination\">
                                        ";
            // line 360
            yield ($context["pagination"] ?? null);
            yield "
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ";
        }
        // line 369
        yield " -->
            </div>
        </div>
    </section>


    ";
        // line 375
        yield ($context["content_bottom"] ?? null);
        yield "</div>
";
        // line 376
        yield from $this->loadTemplate("extension/blueberry/catalog/view/template/product/product_quickview.twig", "extension/blueberry/catalog/view/template/product/category.twig", 376)->unwrap()->yield($context);
        // line 378
        yield "</div>
";
        // line 379
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
<script>

\$(document).on(\"click\", \".bb-modal-toggle\", function () {
    let product_id = \$(this).attr(\"data-product-id\");
    \$.ajax({
        url: 'index.php?route=extension/blueberry/product/quickview&product_id=' + product_id,
        type: 'GET',
        success: function (html) {

            \$(\"body\").append(html);

            \$(\".bb-modal-overlay, .bb-modal\")
                .removeClass(\"opacity-0 pointer-events-none\")
                .addClass(\"opacity-100 pointer-events-auto\");

        }
    });
});
// \$(document).on(\"click\", \".bb-close-modal, .bb-modal-overlay\", function () {

//     \$(\".bb-modal-overlay, .bb-modal\")
//         .removeClass(\"opacity-100 pointer-events-auto\")
//         .addClass(\"opacity-0 pointer-events-none\");

//     \$(\"body\").removeClass(\"bb-overflow-hidden\");

// });
</script>
";
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
        return array (  622 => 379,  619 => 378,  617 => 376,  613 => 375,  605 => 369,  592 => 360,  589 => 359,  583 => 355,  580 => 354,  574 => 349,  564 => 345,  561 => 344,  557 => 343,  527 => 315,  521 => 314,  515 => 311,  509 => 310,  504 => 309,  501 => 308,  497 => 307,  483 => 296,  475 => 291,  453 => 272,  446 => 268,  334 => 158,  322 => 152,  316 => 148,  312 => 147,  292 => 129,  275 => 125,  269 => 122,  266 => 121,  264 => 120,  258 => 117,  253 => 115,  247 => 111,  239 => 106,  236 => 105,  228 => 100,  223 => 99,  221 => 98,  215 => 95,  208 => 92,  205 => 91,  202 => 90,  184 => 89,  181 => 82,  136 => 39,  127 => 32,  112 => 30,  106 => 27,  100 => 25,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  80 => 15,  77 => 14,  60 => 13,  56 => 12,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-category\">
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

    <!-- Button Section-->
    <section>
        <!-- Tabs / big rounded-top buttons -->
        <div class=\"max-w-6xl mx-auto pt-5 lg:pt-0 pb-4 px-[12px] lg:px-0\">
            <div class=\"grid grid-cols-1 lg:grid-cols-2 gap-4 lg6488:gap-10\">
                <button
                type=\"button\"
                class=\"w-full h-24 rounded-t-3xl rounded-b-none
                        bg-gradient-to-b from-sky-100 to-sky-300
                        border border-sky-200 shadow-sm
                        text-3xl font-semibold text-slate-900
                        flex items-center justify-center
                        hover:from-sky-200 hover:to-sky-400
                        focus:outline-none focus:ring-4 focus:ring-sky-200\"
                >
                Dreamer's Canvas
                </button>

                <button
                type=\"button\"
                class=\"w-full h-24 rounded-t-3xl rounded-b-none
                        bg-gradient-to-b from-sky-100 to-sky-300
                        border border-sky-200 shadow-sm
                        text-3xl font-semibold text-slate-900
                        flex items-center justify-center
                        hover:from-sky-200 hover:to-sky-400
                        focus:outline-none focus:ring-4 focus:ring-sky-200\"
                >
                Find Your Perfect Fridge
                </button>
            </div>
        </div>
    </section>
    
    <!-- Category section -->
    <section class=\"section-category pt-[10px] max-[1199px]:pt-[15px] mb-[24px]\">
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
                                         class=\"w-[80px] h-[80px] object-contain
                                                max-[1399px]:h-[65px] max-[1399px]:w-[65px]
                                                max-[1199px]:h-[50px] max-[1199px]:w-[50px]\">
                                {% else %}
                                    <img src=\"catalog/view/theme/your_theme/assets/img/category/default-category.png\"
                                         alt=\"{{ category.name }}\"
                                         class=\"w-[80px] h-[80px] object-contain
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

    <!-- Shop section -->
    <section class=\"section-shop pb-[50px] max-[1199px]:pb-[35px]\">
        <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
            <div class=\"flex flex-wrap w-full mb-[-24px]\">
                <div class=\"min-[992px]:w-[25%] w-full px-[12px] mb-[24px]\">
                    <div class=\"bb-shop-wrap bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px] sticky top-[0]\">
                        <div class=\"bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]\">
                            <div class=\"bb-sidebar-title mb-[20px]\">
                                <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">Category</h3>
                            </div>
                            <div class=\"bb-sidebar-contact\">
                                {% for category in categories %}
                                    <ul>
                                        <li class=\"relative block mb-[14px]\">
                                            <div class=\"bb-sidebar-block-item relative\">
                                                <input type=\"checkbox\" class=\"w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]\">
                                                <a href=\"javascript:void(0)\" class=\"ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer\">{{ category.name }}</a>
                                                <span class=\"checked absolute top-[0] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden\"></span>
                                            </div>
                                        </li>
                                    </ul>
                                {% endfor %}
                            </div>
                        </div>
                        <div class=\"bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]\">
                            <div class=\"bb-sidebar-title mb-[20px]\">
                                <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">Color</h3>
                            </div>
                            <div class=\"bb-color-contact\">
                                <ul>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px] color-sidebar-active\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-1 w-[22px] h-[22px] block rounded-[20px] bg-[#c4d6f9]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-2 w-[22px] h-[22px] block rounded-[20px] bg-[#ff748b]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-3 w-[22px] h-[22px] block rounded-[20px] bg-[#000000]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-4 w-[22px] h-[22px] block rounded-[20px] bg-[#2bff4a]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-5 w-[22px] h-[22px] block rounded-[20px] bg-[#ff7c5e]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-6 w-[22px] h-[22px] block rounded-[20px] bg-[#f155ff]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-7 w-[22px] h-[22px] block rounded-[20px] bg-[#ffef00]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-8 w-[22px] h-[22px] block rounded-[20px] bg-[#c89fff]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-9 w-[22px] h-[22px] block rounded-[20px] bg-[#7bfffa]\"></span>
                                        </div>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]\">
                                        <div class=\"bb-sidebar-block-item relative\">
                                            <span class=\"pro-color-10 w-[22px] h-[22px] block rounded-[20px] bg-[#56ffc1]\"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]\">
                            <div class=\"bb-sidebar-title mb-[20px]\">
                                <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">Price</h3>
                            </div>
                            <div class=\"bb-price-range\">
                                <div class=\"price-range-slider relative w-full mb-[7px]\">
                                    <p class=\"range-value m-[0]\">
                                        <input type=\"text\" id=\"amount\" readonly class=\"w-full bg-[#fff] text-[#000] text-[16px] mb-[15px] font-initial border-[1px] border-solid border-[#eee] p-[10px] text-center outline-[0] rounded-[10px]\">
                                    </p>
                                    <div id=\"slider-range\" class=\"range-bar\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"bb-sidebar-block p-[20px]\">
                            <div class=\"bb-sidebar-title mb-[20px]\">
                                <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">Tags</h3>
                            </div>
                            <div class=\"bb-tags\">
                                <ul class=\"flex flex-wrap m-[-5px]\">
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Refrigerator & Freezer</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Air Conditioner</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Mobile</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Computer</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Microwave and Electric Oven</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Washing Machine</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">Television</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">E-Bike</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]\">PCB</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{ column_left }}
                    </div>
                </div>

                <!-- {% if products %} -->

                <div class=\"min-[992px]:w-[75%] w-full px-[12px] mb-[24px]\">
                    <div class=\"bb-shop-pro-inner\">
                        <div class=\"flex flex-wrap mx-[-12px] mb-[-24px]\">
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

                            {% for product in products %}
                            <div class=\"min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
                                {{ product }}
                            </div>
                            
                            {% endfor %}

                            <div class=\"w-full px-[12px]\">
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

                <!-- {% endif %} -->
            </div>
        </div>
    </section>


    {{ content_bottom }}</div>
{% include 'extension/blueberry/catalog/view/template/product/product_quickview.twig' %}
{# {{quickview}} #}
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
<script>

\$(document).on(\"click\", \".bb-modal-toggle\", function () {
    let product_id = \$(this).attr(\"data-product-id\");
    \$.ajax({
        url: 'index.php?route=extension/blueberry/product/quickview&product_id=' + product_id,
        type: 'GET',
        success: function (html) {

            \$(\"body\").append(html);

            \$(\".bb-modal-overlay, .bb-modal\")
                .removeClass(\"opacity-0 pointer-events-none\")
                .addClass(\"opacity-100 pointer-events-auto\");

        }
    });
});
// \$(document).on(\"click\", \".bb-close-modal, .bb-modal-overlay\", function () {

//     \$(\".bb-modal-overlay, .bb-modal\")
//         .removeClass(\"opacity-100 pointer-events-auto\")
//         .addClass(\"opacity-0 pointer-events-none\");

//     \$(\"body\").removeClass(\"bb-overflow-hidden\");

// });
</script>
", "extension/blueberry/catalog/view/template/product/category.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\product\\category.twig");
    }
}
