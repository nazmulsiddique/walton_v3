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

/* extension/blueberry/catalog/view/template/product/product.twig */
class __TwigTemplate_5c31f683a6608b0cc901cb6ef00469501816d640ece626d4dd03c8b773e9c2d7 extends Template
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
<div id=\"product-info\" class=\"max-w-[1320px] mx-auto px-4\">
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
<div class=\"w-full\">
   ";
        // line 41
        yield "   <div id=\"content1\" class=\"w-full\">
      ";
        // line 42
        yield ($context["content_top"] ?? null);
        yield "
        <section class=\"section-product py-[20px] max-[1199px]:py-[15px]\">
            <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
               <div class=\"flex flex-wrap w-full\">
                  <div class=\"w-full px-[12px] mb-3\"> 
                     <div class=\"bb-single-pro mb-[24px]\">
                        <div class=\"flex flex-wrap mx-[-12px]\">
                           <div class=\"min-[992px]:w-[41.66%] h-full w-full px-[12px] mb-[24px]\">
                                <div class=\"single-pro-slider h-full sticky top-[0] p-[15px] border-[1px] border-solid border-[#eee] rounded-[24px] max-[991px]:max-w-[500px] max-[991px]:m-auto\">
                                    ";
        // line 51
        if ((($context["thumb"] ?? null) || ($context["images"] ?? null))) {
            // line 52
            yield "                                    <!-- Main Images -->
                                    <div class=\"single-product-cover\">
                                       ";
            // line 54
            if (($context["thumb"] ?? null)) {
                // line 55
                yield "                                       <div class=\"single-slide zoom-image-hover rounded-tl-[15px] rounded-tr-[15px]\">
                                          <img
                                             src=\"";
                // line 57
                yield ($context["thumb"] ?? null);
                yield "\"
                                             title=\"";
                // line 58
                yield ($context["heading_title"] ?? null);
                yield "\"
                                             alt=\"";
                // line 59
                yield ($context["heading_title"] ?? null);
                yield "\"
                                             class=\"w-full rounded-tl-[15px] rounded-tr-[15px]\">
                                       </div>
                                       ";
            }
            // line 63
            yield "                                       ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 64
                yield "                                       <div class=\"single-slide zoom-image-hover rounded-tl-[15px] rounded-tr-[15px]\">
                                          <img
                                             src=\"";
                // line 66
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 66);
                yield "\"
                                             title=\"";
                // line 67
                yield ($context["heading_title"] ?? null);
                yield "\"
                                             alt=\"";
                // line 68
                yield ($context["heading_title"] ?? null);
                yield "\"
                                             class=\"w-full rounded-tl-[15px] rounded-tr-[15px]\">
                                       </div>
                                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "                                    </div>
                                    <div class=\"single-nav-thumb w-full overflow-hidden\">
                                        ";
            // line 74
            if (($context["thumb"] ?? null)) {
                // line 75
                yield "                                       <div class=\"single-slide px-[10px] block\">
                                          <img
                                             src=\"";
                // line 77
                yield ($context["thumb"] ?? null);
                yield "\"
                                             title=\"";
                // line 78
                yield ($context["heading_title"] ?? null);
                yield "\"
                                             alt=\"";
                // line 79
                yield ($context["heading_title"] ?? null);
                yield "\"
                                             class=\"w-full border border-solid border-transparent transition-all duration-300 cursor-pointer rounded-[15px]\">
                                       </div>
                                       ";
            }
            // line 83
            yield "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 84
                yield "                                          <div class=\"single-slide px-[10px] block\">
                                             <img
                                                src=\"";
                // line 86
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 86);
                yield "\"
                                                title=\"";
                // line 87
                yield ($context["heading_title"] ?? null);
                yield "\"
                                                alt=\"";
                // line 88
                yield ($context["heading_title"] ?? null);
                yield "\"
                                                class=\"w-full border border-solid border-transparent transition-all duration-300 cursor-pointer rounded-[15px]\">
                                          </div>
                                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "                                    </div>
                                    ";
        }
        // line 94
        yield "                                </div>
                            </div>
                           <div class=\"min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]\">
                              ";
        // line 142
        yield "                              <div class=\"product-attribute-info my-[20px]\">
                                 <h1>";
        // line 143
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                                 <ul class=\"list-unstyled\">
                                    ";
        // line 145
        if (($context["manufacturer"] ?? null)) {
            // line 146
            yield "                                    <li>";
            yield ($context["text_manufacturer"] ?? null);
            yield " <a href=\"";
            yield ($context["manufacturers"] ?? null);
            yield "\">";
            yield ($context["manufacturer"] ?? null);
            yield "</a></li>
                                    ";
        }
        // line 148
        yield "                                    <li>";
        yield ($context["text_model"] ?? null);
        yield " ";
        yield ($context["model"] ?? null);
        yield "</li>
                                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_codes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_code"]) {
            // line 150
            yield "                                    <li>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 150);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 150);
            yield "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_code'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                                    ";
        if (($context["reward"] ?? null)) {
            // line 153
            yield "                                    <li>";
            yield ($context["text_reward"] ?? null);
            yield " ";
            yield ($context["reward"] ?? null);
            yield "</li>
                                    ";
        }
        // line 155
        yield "                                    <li>";
        yield ($context["text_stock"] ?? null);
        yield " ";
        yield ($context["stock"] ?? null);
        yield "</li>
                                 </ul>
                                 
                                 ";
        // line 158
        if (($context["price"] ?? null)) {
            // line 159
            yield "                                 <ul class=\"list-unstyled\">
                                    ";
            // line 160
            if ( !($context["special"] ?? null)) {
                // line 161
                yield "                                    <li>
                                       <h2><span class=\"price-new\">";
                // line 162
                yield ($context["price"] ?? null);
                yield "</span></h2>
                                    </li>
                                    ";
            } else {
                // line 165
                yield "                                    <li><span class=\"price-old\">";
                yield ($context["price"] ?? null);
                yield "</span></li>
                                    <li>
                                       <h2><span class=\"price-new\">";
                // line 167
                yield ($context["special"] ?? null);
                yield "</span></h2>
                                    </li>
                                    ";
            }
            // line 170
            yield "                                    ";
            if (($context["tax"] ?? null)) {
                // line 171
                yield "                                    <li>";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</li>
                                    ";
            }
            // line 173
            yield "                                    ";
            if (($context["points"] ?? null)) {
                // line 174
                yield "                                    <li>";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</li>
                                    ";
            }
            // line 176
            yield "                                    ";
            if (($context["discounts"] ?? null)) {
                // line 177
                yield "                                    <li>
                                       <hr>
                                    </li>
                                    ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 181
                    yield "                                    <li>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 181);
                    yield ($context["text_discount"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 181);
                    yield "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['discount'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                yield "                                    ";
            }
            // line 184
            yield "                                 </ul>
                                 ";
        }
        // line 186
        yield "                                 <form method=\"post\" data-oc-toggle=\"ajax\">
                                    <div class=\"btn-group\">
                                       <button type=\"submit\" formaction=\"";
        // line 188
        yield ($context["wishlist_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_wishlist"] ?? null);
        yield "\"><i class=\"fa-solid fa-heart\"></i></button>
                                       <button type=\"submit\" formaction=\"";
        // line 189
        yield ($context["compare_add"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"";
        yield ($context["button_compare"] ?? null);
        yield "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
                                    </div>
                                    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 191
        yield ($context["product_id"] ?? null);
        yield "\"/>
                                 </form>
                                 <br/>
                                 <div id=\"product\">
                                    <form id=\"form-product\">
                                       ";
        // line 196
        if (($context["options"] ?? null)) {
            // line 197
            yield "                                       <hr>
                                       <h3>";
            // line 198
            yield ($context["text_option"] ?? null);
            yield "</h3>
                                       <div>
                                          ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 201
                yield "                                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 201) == "select")) {
                    // line 202
                    yield "                                          <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 202)) {
                        yield " required";
                    }
                    yield "\">
                                             <label for=\"input-option-";
                    // line 203
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 203);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 203);
                    yield "</label>
                                             <select name=\"option[";
                    // line 204
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 204);
                    yield "\" class=\"form-select\">
                                                <option value=\"\">";
                    // line 205
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                                                ";
                    // line 206
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 206));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 207
                        yield "                                                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 207);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 207);
                        yield "
                                                   ";
                        // line 208
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 208)) {
                            // line 209
                            yield "                                                   (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 209);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 209);
                            yield ")
                                                   ";
                        }
                        // line 211
                        yield "                                                </option>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 213
                    yield "                                             </select>
                                             <div id=\"error-option-";
                    // line 214
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 214);
                    yield "\" class=\"invalid-feedback\"></div>
                                          </div>
                                          ";
                }
                // line 217
                yield "                                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 217) == "radio")) {
                    // line 218
                    yield "                                          <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 218)) {
                        yield " required";
                    }
                    yield "\">
                                             <label class=\"form-label\">";
                    // line 219
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 219);
                    yield "</label>
                                             <div id=\"input-option-";
                    // line 220
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 220);
                    yield "\">
                                                ";
                    // line 221
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 221));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 222
                        yield "                                                <div class=\"form-check\">
                                                   <input type=\"radio\" name=\"option[";
                        // line 223
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 223);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 223);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 223);
                        yield "\" class=\"form-check-input\"/>
                                                   <label for=\"input-option-value-";
                        // line 224
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 224);
                        yield "\" class=\"form-check-label\">
                                                   ";
                        // line 225
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 225)) {
                            // line 226
                            yield "                                                   <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 226);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 226);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 226)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 226);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 226);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 227
                        yield "                                                   ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 227);
                        yield "
                                                   ";
                        // line 228
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 228)) {
                            // line 229
                            yield "                                                   (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 229);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 229);
                            yield ")
                                                   ";
                        }
                        // line 230
                        yield "</label>
                                                </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 233
                    yield "                                             </div>
                                             <div id=\"error-option-";
                    // line 234
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 234);
                    yield "\" class=\"invalid-feedback\"></div>
                                          </div>
                                          ";
                }
                // line 237
                yield "                                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 237) == "checkbox")) {
                    // line 238
                    yield "                                          <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 238)) {
                        yield " required";
                    }
                    yield "\">
                                             <label class=\"form-label\">";
                    // line 239
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 239);
                    yield "</label>
                                             <div id=\"input-option-";
                    // line 240
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 240);
                    yield "\">
                                                ";
                    // line 241
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 241));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 242
                        yield "                                                <div class=\"form-check\">
                                                   <input type=\"checkbox\" name=\"option[";
                        // line 243
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 243);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 243);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 243);
                        yield "\" class=\"form-check-input\"/> 
                                                   <label for=\"input-option-value-";
                        // line 244
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 244);
                        yield "\" class=\"form-check-label\">
                                                   ";
                        // line 245
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 245)) {
                            // line 246
                            yield "                                                   <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 246);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 246);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 246)) {
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 246);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 246);
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 247
                        yield "                                                   ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 247);
                        yield "
                                                   ";
                        // line 248
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 248)) {
                            // line 249
                            yield "                                                   (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 249);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 249);
                            yield ")
                                                   ";
                        }
                        // line 250
                        yield "</label>
                                                </div>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 253
                    yield "                                             </div>
                                             <div id=\"error-option-";
                    // line 254
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 254);
                    yield "\" class=\"invalid-feedback\"></div>
                                          </div>
                                          ";
                }
                // line 257
                yield "                                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 257) == "text")) {
                    // line 258
                    yield "                                          <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 258)) {
                        yield " required";
                    }
                    yield "\">
                                             <label for=\"input-option-";
                    // line 259
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 259);
                    yield "</label> <input type=\"text\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 259);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 259);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 259);
                    yield "\" class=\"form-control\"/>
                                             <div id=\"error-option-";
                    // line 260
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 260);
                    yield "\" class=\"invalid-feedback\"></div>
                                          </div>
                                          ";
                }
                // line 263
                yield "                                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 263) == "textarea")) {
                    // line 264
                    yield "                                          <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 264)) {
                        yield " required";
                    }
                    yield "\">
                                             <label for=\"input-option-";
                    // line 265
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 265);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 265);
                    yield "</label> 
                                             <textarea name=\"option[";
                    // line 266
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 266);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 266);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 266);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 266);
                    yield "</textarea>
                                             <div id=\"error-option-";
                    // line 267
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 267);
                    yield "\" class=\"invalid-feedback\"></div>
                                          </div>
                                          ";
                }
                // line 270
                yield "                                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 270) == "file")) {
                    // line 271
                    yield "                                          <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 271)) {
                        yield " required";
                    }
                    yield "\">
                                             <label for=\"button-upload-";
                    // line 272
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 272);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 272);
                    yield "</label>
                                             <div>
                                                <button type=\"button\" id=\"button-upload-";
                    // line 274
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                    yield "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    yield ($context["upload"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 274);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                                                <input type=\"hidden\" name=\"option[";
                    // line 275
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 275);
                    yield "]\" value=\"\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 275);
                    yield "\"/>
                                             </div>
                                             <div id=\"error-option-";
                    // line 277
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 277);
                    yield "\" class=\"invalid-feedback\"></div>
                                          </div>
                                          ";
                }
                // line 280
                yield "                                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 280) == "date")) {
                    // line 281
                    yield "                                          <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 281)) {
                        yield " required";
                    }
                    yield "\">
                                             <label for=\"input-option-";
                    // line 282
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 282);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 282);
                    yield "</label>
                                             <input type=\"date\" name=\"option[";
                    // line 283
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 283);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 283);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 283);
                    yield "\" class=\"form-control\"/>
                                             <div id=\"error-option-";
                    // line 284
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 284);
                    yield "\" class=\"invalid-feedback\"></div>
                                          </div>
                                          ";
                }
                // line 287
                yield "                                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 287) == "time")) {
                    // line 288
                    yield "                                          <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 288)) {
                        yield " required";
                    }
                    yield "\">
                                             <label for=\"input-option-";
                    // line 289
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 289);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 289);
                    yield "</label>
                                             <input type=\"time\" name=\"option[";
                    // line 290
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 290);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 290);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 290);
                    yield "\" class=\"form-control\"/>
                                             <div id=\"error-option-";
                    // line 291
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 291);
                    yield "\" class=\"invalid-feedback\"></div>
                                          </div>
                                          ";
                }
                // line 294
                yield "                                          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 294) == "datetime")) {
                    // line 295
                    yield "                                          <div class=\"mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 295)) {
                        yield " required";
                    }
                    yield "\">
                                             <label for=\"input-option-";
                    // line 296
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 296);
                    yield "\" class=\"form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 296);
                    yield "</label>
                                             <input type=\"datetime-local\" name=\"option[";
                    // line 297
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 297);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 297);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 297);
                    yield "\" class=\"form-control\"/>
                                             <div id=\"error-option-";
                    // line 298
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 298);
                    yield "\" class=\"invalid-feedback\"></div>
                                          </div>
                                          ";
                }
                // line 301
                yield "                                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 302
            yield "                                       </div>
                                       ";
        }
        // line 304
        yield "                                       ";
        if (($context["subscription_plans"] ?? null)) {
            // line 305
            yield "                                       <hr/>
                                       <h3>";
            // line 306
            yield ($context["text_subscription"] ?? null);
            yield "</h3>
                                       <div class=\"mb-3 required\">
                                          <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                                             <option value=\"\">";
            // line 309
            yield ($context["text_select"] ?? null);
            yield "</option>
                                             ";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 311
                yield "                                             <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 311);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 311);
                yield "</option>
                                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            yield "                                          </select>
                                          ";
            // line 314
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 315
                yield "                                          <div id=\"subscription-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 315);
                yield "\" class=\"form-text subscription d-none\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "description", [], "any", false, false, false, 315);
                yield "</div>
                                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 317
            yield "                                          <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                                       </div>
                                       ";
        }
        // line 320
        yield "                                       <div class=\"mb-3\">
                                          <div class=\"input-group\">
                                             <div class=\"input-group-text\">";
        // line 322
        yield ($context["entry_qty"] ?? null);
        yield "</div>
                                             <input type=\"text\" name=\"quantity\" value=\"";
        // line 323
        yield ($context["minimum"] ?? null);
        yield "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                                             <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">";
        // line 324
        yield ($context["button_cart"] ?? null);
        yield "</button>
                                          </div>
                                          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 326
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
                                          <div id=\"error-quantity\" class=\"form-text\"></div>
                                       </div>
                                       ";
        // line 329
        if ((($context["minimum"] ?? null) > 1)) {
            // line 330
            yield "                                       <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
                                       ";
        }
        // line 332
        yield "                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class=\"min-[992px]:w-[25%] w-full px-[12px] mb-[24px]\">
                              <div class=\"w-full\">
                                 <div class=\"w-full px-[12px]\">
                                    <div class=\"sub-title mb-[20px] flex justify-between\">
                                       <h4 class=\"font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] uppercase\">Recent View Product</h4>
                                    </div>
                                 </div>
                                 <div class=\"w-full px-[12px] mb-[24px]\">
                                    <div class=\"group p-[15px] overflow-hidden bg-[#f8f8fb] border border-[#eee] rounded-[12px] flex items-center 
                                       transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:bg-white\">
                                       <span class=\"pro-img mr-[12px] overflow-hidden rounded-[10px]\">
                                       <img src=\"assets/img/product/refrigerator/WNR-6D6-GDFS-DI.jpg\"
                                          class=\"w-[80px] border border-[#eee] rounded-[10px] 
                                          transition-all duration-300 group-hover:scale-110\">
                                       </span>
                                       <div class=\"side-contact flex flex-col\">
                                          <h4 class=\"text-[15px]\">
                                             <a href=\"product.php\">
                                                <p class=\"font-Poppins text-[15px] leading-[24px] font-medium text-[#3d4750] 
                                                   transition-all duration-300 group-hover:text-[#6c7fd8]\">
                                                   WNR-6D6-GDFS-DI
                                                </p>
                                                <p class=\"text-[16px] font-bold text-[#686e7d] 
                                                   transition-all duration-300 group-hover:text-black\">
                                                   ৳149990
                                                </p>
                                             </a>
                                          </h4>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"w-full px-[12px] mb-[24px]\">
                                    <div class=\"group p-[15px] overflow-hidden bg-[#f8f8fb] border border-[#eee] rounded-[12px] flex items-center 
                                       transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:bg-white\">
                                       <span class=\"pro-img mr-[12px] overflow-hidden rounded-[10px]\">
                                       <img src=\"assets/img/product/refrigerator/WNR-6D6-GDFS-DI.jpg\"
                                          class=\"w-[80px] border border-[#eee] rounded-[10px] 
                                          transition-all duration-300 group-hover:scale-110\">
                                       </span>
                                       <div class=\"side-contact flex flex-col\">
                                          <h4 class=\"text-[15px]\">
                                             <a href=\"product.php\">
                                                <p class=\"font-Poppins text-[15px] leading-[24px] font-medium text-[#3d4750] 
                                                   transition-all duration-300 group-hover:text-[#6c7fd8]\">
                                                   WNR-6D6-GDFS-DI
                                                </p>
                                                <p class=\"text-[16px] font-bold text-[#686e7d] 
                                                   transition-all duration-300 group-hover:text-black\">
                                                   ৳149990
                                                </p>
                                             </a>
                                          </h4>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"w-full px-[12px] mb-[24px]\">
                                    <div class=\"group p-[15px] overflow-hidden bg-[#f8f8fb] border border-[#eee] rounded-[12px] flex items-center 
                                       transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:bg-white\">
                                       <span class=\"pro-img mr-[12px] overflow-hidden rounded-[10px]\">
                                       <img src=\"assets/img/product/refrigerator/WNR-6D6-GDFS-DI.jpg\"
                                          class=\"w-[80px] border border-[#eee] rounded-[10px] 
                                          transition-all duration-300 group-hover:scale-110\">
                                       </span>
                                       <div class=\"side-contact flex flex-col\">
                                          <h4 class=\"text-[15px]\">
                                             <a href=\"product.php\">
                                                <p class=\"font-Poppins text-[15px] leading-[24px] font-medium text-[#3d4750] 
                                                   transition-all duration-300 group-hover:text-[#6c7fd8]\">
                                                   WNR-6D6-GDFS-DI
                                                </p>
                                                <p class=\"text-[16px] font-bold text-[#686e7d] 
                                                   transition-all duration-300 group-hover:text-black\">
                                                   ৳149990
                                                </p>
                                             </a>
                                          </h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>


                     <div class=\"bb-single-pro-tab\">

                        <!-- Tabs Navigation -->
                        <div id=\"productTabSection\" class=\"w-full\">
                           <div class=\"flex flex-wrap border-b border-gray-200\">

                                 <!-- Description -->
                                 <button data-tab=\"description\"
                                    class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#6c7fd8] active-tab\">
                                    ";
        // line 430
        yield ($context["tab_description"] ?? null);
        yield "
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>

                                 ";
        // line 435
        if (($context["attribute_groups"] ?? null)) {
            // line 436
            yield "                                 <!-- Specification -->
                                 <button data-tab=\"specification\"
                                    class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#686e7d]\">
                                    ";
            // line 439
            yield ($context["tab_attribute"] ?? null);
            yield "
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>
                                 ";
        }
        // line 444
        yield "
                                 <!-- Gallery -->
                                 <button data-tab=\"gallery\" class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#686e7d]\">
                                    Picture Gallery
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>
                                 <!-- Video Gallery -->
                                 <button data-tab=\"videos\" class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#686e7d]\">
                                    Video Gallery
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>
                                 <!-- Supports -->
                                 <button data-tab=\"supports\" class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#686e7d]\">
                                    Support
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>
                                 <!-- Download -->
                                 <button data-tab=\"download\" class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#686e7d]\">
                                    Download
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>

                           </div>

                           <!-- Tab Contents -->
                           <div class=\"pt-6\">

                                 <!-- Description -->
                                 <div id=\"description\" class=\"tab-content block\">
                                    <div class=\"bb-inner-tabs border border-[#eee] p-[20px] rounded-[20px]\">
                                       ";
        // line 478
        yield ($context["description"] ?? null);
        yield "
                                    </div>
                                 </div>

                                 ";
        // line 482
        if (($context["attribute_groups"] ?? null)) {
            // line 483
            yield "                                 <!-- Specification -->
                                 <div id=\"specification\" class=\"tab-content hidden\">
                                    <div class=\"bb-inner-tabs border border-[#eee] p-[20px] rounded-[20px] overflow-x-auto\">

                                       <table class=\"w-full border border-[#eee]\">
                                             ";
            // line 488
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 489
                yield "
                                             <thead>
                                                <tr>
                                                   <th colspan=\"2\"
                                                         class=\"bg-[#f8f8fb] p-3 text-left border border-[#eee] font-semibold\">
                                                         ";
                // line 494
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 494);
                yield "
                                                   </th>
                                                </tr>
                                             </thead>

                                             <tbody>
                                                ";
                // line 500
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 500));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 501
                    yield "                                                <tr>
                                                   <td class=\"p-3 border border-[#eee] w-[40%]\">
                                                         ";
                    // line 503
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 503);
                    yield "
                                                   </td>
                                                   <td class=\"p-3 border border-[#eee]\">
                                                         ";
                    // line 506
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 506);
                    yield "
                                                   </td>
                                                </tr>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 510
                yield "                                             </tbody>

                                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 513
            yield "                                       </table>

                                    </div>
                                 </div>
                                 ";
        }
        // line 518
        yield "
                                    <!-- Gallery -->
                                          <div id=\"gallery\" class=\"tab-content hidden\">
                                             <div class=\"bb-inner-tabs border border-[#eee] p-[15px] rounded-[20px]\">
                                                   <div class=\"information overflow-x-auto rounded-xl border border-gray-200\">

                                                      ";
        // line 524
        if (($context["thumb"] ?? null)) {
            // line 525
            yield "                                                         <img src=\"";
            yield ($context["thumb"] ?? null);
            yield "\" alt=\"";
            yield ($context["heading_title"] ?? null);
            yield "\"
                                                               class=\"w-full max-w-[800px] mx-auto\">
                                                      ";
        }
        // line 528
        yield "
                                                      ";
        // line 529
        if (($context["images"] ?? null)) {
            // line 530
            yield "                                                         ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 531
                yield "                                                               <img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 531);
                yield "\" alt=\"";
                yield ($context["heading_title"] ?? null);
                yield "\"
                                                                  class=\"w-full max-w-[800px] mx-auto\">
                                                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 534
            yield "                                                      ";
        }
        // line 535
        yield "
                                                   </div>
                                             </div>
                                          </div>

                                          <!-- Video -->
                                          <div id=\"videos\" class=\"tab-content hidden\">
                                             <div class=\"bb-inner-tabs border border-[#eee] p-[15px] rounded-[20px]\">
                                                <!-- Video Tutorial Section -->
                                                   <section class=\"py-8 lg:py-12\">
                                                      <!-- Video Grid -->
                                                      <div class=\"grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6\">

                                                         <!-- Video Card 1 -->
                                                         <div class=\"group bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 overflow-hidden\">
                                                               <div class=\"aspect-video overflow-hidden\">
                                                                  <iframe
                                                                     class=\"w-full h-full transform transition-transform duration-700 group-hover:scale-105\"
                                                                     src=\"https://www.youtube.com/embed/f-NUHvKL6WM\"
                                                                     title=\"How to Use, Clean & Maintain the Walton WNR-6D6 Fridge Water Dispenser\"
                                                                     allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                                                     referrerpolicy=\"strict-origin-when-cross-origin\"
                                                                     allowfullscreen>
                                                                  </iframe>
                                                               </div>
                                                               <!-- Optional glossy overlay -->
                                                               <div class=\"pointer-events-none absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 bg-gradient-to-tr from-white/0 via-white/10 to-white/20\"></div>
                                                         </div>

                                                         <!-- Video Card 2 -->
                                                         <div class=\"group bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 overflow-hidden\">
                                                               <div class=\"aspect-video overflow-hidden\">
                                                                  <iframe
                                                                     class=\"w-full h-full transform transition-transform duration-700 group-hover:scale-105\"
                                                                     src=\"https://www.youtube.com/embed/yMCbCMUBp4Y\"
                                                                     title=\"How to Operate Convertible Modes\"
                                                                     allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                                                     referrerpolicy=\"strict-origin-when-cross-origin\"
                                                                     allowfullscreen>
                                                                  </iframe>
                                                               </div>
                                                               <!-- Optional glossy overlay -->
                                                               <div class=\"pointer-events-none absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 bg-gradient-to-tr from-white/0 via-white/10 to-white/20\"></div>
                                                         </div>

                                                         <!-- Video Card 3 -->
                                                         <div class=\"group bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 overflow-hidden\">
                                                               <div class=\"aspect-video overflow-hidden\">
                                                                  <iframe
                                                                     class=\"w-full h-full transform transition-transform duration-700 group-hover:scale-105\"
                                                                     src=\"https://www.youtube.com/embed/rTzN2lRv-nA\"
                                                                     title=\"How to Connect Wi-Fi\"
                                                                     allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                                                     referrerpolicy=\"strict-origin-when-cross-origin\"
                                                                     allowfullscreen>
                                                                  </iframe>
                                                               </div>
                                                               <!-- Optional glossy overlay -->
                                                               <div class=\"pointer-events-none absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 bg-gradient-to-tr from-white/0 via-white/10 to-white/20\"></div>
                                                         </div>

                                                      </div>
                                                   </section>
               

                                             </div>
                                          </div>

                                          <!-- Supports -->
                                          <div id=\"supports\" class=\"tab-content hidden\">
                                             <div class=\"bb-inner-tabs border border-[#eee] p-[15px] rounded-[20px]\">
                                                   <div class=\"w-full mx-auto rounded-3xl overflow-hidden border border-gray-200 shadow-lg bg-white font-Poppins\">

                                                      <!-- Main Header -->
                                                      <div class=\"bg-gradient-to-r from-[#6c7fd8] to-[#4f46e5] px-8 py-6\">
                                                         <h2 class=\"text-white text-[28px] font-bold tracking-wide uppercase\">
                                                               Warranty Information
                                                         </h2>
                                                         <p class=\"text-white/80 text-[14px] mt-1\">
                                                               Complete coverage details for Residential & Commercial use
                                                         </p>
                                                      </div>

                                                      <!-- Warranty Cards -->
                                                      <div class=\"grid md:grid-cols-2 gap-8 p-8\">

                                                         <!-- Residential -->
                                                         <div class=\"rounded-2xl border border-gray-200 shadow-sm overflow-hidden\">
                                                               <div class=\"bg-[#f3f4f6] px-6 py-4 border-b\">
                                                                  <h3 class=\"text-[#3d4750] text-[20px] font-bold\">Residential Use</h3>
                                                               </div>

                                                               <div class=\"divide-y divide-gray-100\">
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Replacement Guarantee</span>
                                                                     <span class=\"text-[#686e7d]\">1 Year</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Main Parts (Compressor)</span>
                                                                     <span class=\"text-[#686e7d]\">12 Years</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Door</span>
                                                                     <span class=\"text-[#686e7d]\">3 Years *</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Spare Parts</span>
                                                                     <span class=\"text-[#686e7d]\">4 Years *</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">After Sales Service</span>
                                                                     <span class=\"text-[#686e7d]\">5 Years *</span>
                                                                  </div>
                                                               </div>
                                                         </div>

                                                         <!-- Commercial -->
                                                         <div class=\"rounded-2xl border border-gray-200 shadow-sm overflow-hidden\">
                                                               <div class=\"bg-[#f3f4f6] px-6 py-4 border-b\">
                                                                  <h3 class=\"text-[#3d4750] text-[20px] font-bold\">Commercial Use</h3>
                                                               </div>

                                                               <div class=\"divide-y divide-gray-100\">
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Main Parts (Compressor)</span>
                                                                     <span class=\"text-[#686e7d]\">4 Years</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Door</span>
                                                                     <span class=\"text-[#686e7d]\">1 Year *</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Spare Parts</span>
                                                                     <span class=\"text-[#686e7d]\">2 Years *</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">After Sales Service</span>
                                                                     <span class=\"text-[#686e7d]\">2 Years *</span>
                                                                  </div>
                                                               </div>
                                                         </div>

                                                      </div>

                                                      <!-- Exclusions -->
                                                      <div class=\"px-8 pb-8\">
                                                         <div class=\"rounded-2xl border border-red-100 bg-red-50 p-6 mb-6\">
                                                               <h3 class=\"text-[20px] font-bold text-red-600 mb-4\">
                                                                  Warranty Does Not Cover:
                                                               </h3>

                                                               <div class=\"space-y-3 text-[15px] text-[#555] leading-[28px]\">
                                                                  <p>• Any damage due to accident, electrical fault, natural causes, negligence or improper installation.</p>
                                                                  <p>• Any damage or failure caused by unauthorized modification or alteration.</p>
                                                                  <p>• Products with removed, distorted or unrecognized serial numbers.</p>
                                                               </div>
                                                         </div>

                                                         <!-- Important Notice -->
                                                         <div class=\"rounded-2xl border border-yellow-200 bg-yellow-50 p-6\">
                                                               <h3 class=\"text-[18px] font-bold text-[#3d4750] mb-3\">
                                                                  Important Notice
                                                               </h3>

                                                               <p class=\"text-[15px] text-[#555] leading-[28px] mb-3\">
                                                                  Authority reserves the right to change, extend, correct, stop or cancel the warranty period without prior notice.
                                                               </p>

                                                               <p class=\"text-[14px] italic text-[#777] leading-[26px]\">
                                                                  *Warranty covers manufacturing defects in products & workmanship only, subject to verification by company personnel.
                                                               </p>
                                                         </div>
                                                      </div>

                                                   </div>
                                             </div>
                                          </div>

                                          <!-- Download -->
                                          <div id=\"download\" class=\"tab-content hidden\">
                                             <div class=\"bb-inner-tabs border border-[#eee] p-[15px] rounded-[20px]\">
                                                   <div class=\"py-6 text-center\">
                                                      <a 
                                                         href=\"https://waltonbd.com/user-manuals/refrigerator/side-by-side-manual-5th-version-06-10-25.pdf\"
                                                         target=\"_blank\"
                                                         rel=\"noopener noreferrer\"
                                                         class=\"inline-flex items-center gap-3 px-6 py-3 rounded-full
                                                               bg-[#6c7fd8] text-white font-semibold text-sm md:text-base
                                                               shadow-md hover:shadow-xl hover:-translate-y-1
                                                               hover:bg-[#5a6ecf]
                                                               transition-all duration-300 ease-in-out\"
                                                      >
                                                         <!-- Download Icon -->
                                                         <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                               class=\"w-5 h-5\"
                                                               fill=\"none\"
                                                               viewBox=\"0 0 24 24\"
                                                               stroke=\"currentColor\"
                                                               stroke-width=\"2\">
                                                               <path stroke-linecap=\"round\"
                                                                  stroke-linejoin=\"round\"
                                                                  d=\"M12 3v12m0 0l4-4m-4 4l-4-4m-6 8h16\" />
                                                         </svg>
                                                         Download User Manual
                                                      </a>
                                                   </div>
                                             </div>
                                          </div>

                           </div>
                        </div>

                     </div>


                  </div>
               </div>
            </div>
         </section>

      
      ";
        // line 756
        yield ($context["related"] ?? null);
        yield "
      ";
        // line 757
        yield ($context["content_bottom"] ?? null);
        yield "
   </div>
   ";
        // line 760
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
   \$('#input-subscription').on('change', function(e) {
      var element = this;

      \$('.subscription').addClass('d-none');

      \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
   });

   \$('#form-product').on('submit', function(e) {
      e.preventDefault();

      \$.ajax({
         url: 'index.php?route=checkout/cart.add&language=";
        // line 775
        yield ($context["language"] ?? null);
        yield "',
         type: 'post',
         data: \$('#form-product').serialize(),
         dataType: 'json',
         contentType: 'application/x-www-form-urlencoded',
         cache: false,
         processData: false,
         beforeSend: function() {
               \$('#button-cart').button('loading');
         },
         complete: function() {
               \$('#button-cart').button('reset');
         },
         success: function(json) {
               console.log(json);

               \$('#form-product').find('.is-invalid').removeClass('is-invalid');
               \$('#form-product').find('.invalid-feedback').removeClass('d-block');

               if (json['error']) {
                  for (key in json['error']) {
                     \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                     \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                  }
               }

               if (json['success']) {
                  \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                  \$('#cart').load('index.php?route=common/cart.info&language=";
        // line 804
        yield ($context["language"] ?? null);
        yield "');
               }
         },
         error: function(xhr, ajaxOptions, thrownError) {
               console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
         }
      });
   });

</script>
";
        // line 814
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/product/product.twig";
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
        return array (  1539 => 814,  1526 => 804,  1494 => 775,  1477 => 760,  1472 => 757,  1468 => 756,  1245 => 535,  1242 => 534,  1230 => 531,  1225 => 530,  1223 => 529,  1220 => 528,  1211 => 525,  1209 => 524,  1201 => 518,  1194 => 513,  1186 => 510,  1176 => 506,  1170 => 503,  1166 => 501,  1162 => 500,  1153 => 494,  1146 => 489,  1142 => 488,  1135 => 483,  1133 => 482,  1126 => 478,  1090 => 444,  1082 => 439,  1077 => 436,  1075 => 435,  1067 => 430,  967 => 332,  961 => 330,  959 => 329,  953 => 326,  948 => 324,  944 => 323,  940 => 322,  936 => 320,  931 => 317,  920 => 315,  916 => 314,  913 => 313,  902 => 311,  898 => 310,  894 => 309,  888 => 306,  885 => 305,  882 => 304,  878 => 302,  872 => 301,  866 => 298,  858 => 297,  852 => 296,  845 => 295,  842 => 294,  836 => 291,  828 => 290,  822 => 289,  815 => 288,  812 => 287,  806 => 284,  798 => 283,  792 => 282,  785 => 281,  782 => 280,  776 => 277,  769 => 275,  755 => 274,  748 => 272,  741 => 271,  738 => 270,  732 => 267,  722 => 266,  716 => 265,  709 => 264,  706 => 263,  700 => 260,  686 => 259,  679 => 258,  676 => 257,  670 => 254,  667 => 253,  659 => 250,  652 => 249,  650 => 248,  645 => 247,  632 => 246,  630 => 245,  626 => 244,  618 => 243,  615 => 242,  611 => 241,  607 => 240,  603 => 239,  596 => 238,  593 => 237,  587 => 234,  584 => 233,  576 => 230,  569 => 229,  567 => 228,  562 => 227,  549 => 226,  547 => 225,  543 => 224,  535 => 223,  532 => 222,  528 => 221,  524 => 220,  520 => 219,  513 => 218,  510 => 217,  504 => 214,  501 => 213,  494 => 211,  487 => 209,  485 => 208,  478 => 207,  474 => 206,  470 => 205,  464 => 204,  458 => 203,  451 => 202,  448 => 201,  444 => 200,  439 => 198,  436 => 197,  434 => 196,  426 => 191,  419 => 189,  413 => 188,  409 => 186,  405 => 184,  402 => 183,  391 => 181,  387 => 180,  382 => 177,  379 => 176,  371 => 174,  368 => 173,  360 => 171,  357 => 170,  351 => 167,  345 => 165,  339 => 162,  336 => 161,  334 => 160,  331 => 159,  329 => 158,  320 => 155,  312 => 153,  309 => 152,  298 => 150,  294 => 149,  287 => 148,  277 => 146,  275 => 145,  270 => 143,  267 => 142,  262 => 94,  258 => 92,  248 => 88,  244 => 87,  240 => 86,  236 => 84,  231 => 83,  224 => 79,  220 => 78,  216 => 77,  212 => 75,  210 => 74,  206 => 72,  196 => 68,  192 => 67,  188 => 66,  184 => 64,  179 => 63,  172 => 59,  168 => 58,  164 => 57,  160 => 55,  158 => 54,  154 => 52,  152 => 51,  140 => 42,  137 => 41,  127 => 32,  112 => 30,  106 => 27,  100 => 25,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  80 => 15,  77 => 14,  60 => 13,  56 => 12,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-info\" class=\"max-w-[1320px] mx-auto px-4\">
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
   {# {{ column_left }} #}
   <div id=\"content1\" class=\"w-full\">
      {{ content_top }}
        <section class=\"section-product py-[20px] max-[1199px]:py-[15px]\">
            <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
               <div class=\"flex flex-wrap w-full\">
                  <div class=\"w-full px-[12px] mb-3\"> 
                     <div class=\"bb-single-pro mb-[24px]\">
                        <div class=\"flex flex-wrap mx-[-12px]\">
                           <div class=\"min-[992px]:w-[41.66%] h-full w-full px-[12px] mb-[24px]\">
                                <div class=\"single-pro-slider h-full sticky top-[0] p-[15px] border-[1px] border-solid border-[#eee] rounded-[24px] max-[991px]:max-w-[500px] max-[991px]:m-auto\">
                                    {% if thumb or images %}
                                    <!-- Main Images -->
                                    <div class=\"single-product-cover\">
                                       {% if thumb %}
                                       <div class=\"single-slide zoom-image-hover rounded-tl-[15px] rounded-tr-[15px]\">
                                          <img
                                             src=\"{{ thumb }}\"
                                             title=\"{{ heading_title }}\"
                                             alt=\"{{ heading_title }}\"
                                             class=\"w-full rounded-tl-[15px] rounded-tr-[15px]\">
                                       </div>
                                       {% endif %}
                                       {% for image in images %}
                                       <div class=\"single-slide zoom-image-hover rounded-tl-[15px] rounded-tr-[15px]\">
                                          <img
                                             src=\"{{ image.thumb }}\"
                                             title=\"{{ heading_title }}\"
                                             alt=\"{{ heading_title }}\"
                                             class=\"w-full rounded-tl-[15px] rounded-tr-[15px]\">
                                       </div>
                                       {% endfor %}
                                    </div>
                                    <div class=\"single-nav-thumb w-full overflow-hidden\">
                                        {% if thumb %}
                                       <div class=\"single-slide px-[10px] block\">
                                          <img
                                             src=\"{{ thumb }}\"
                                             title=\"{{ heading_title }}\"
                                             alt=\"{{ heading_title }}\"
                                             class=\"w-full border border-solid border-transparent transition-all duration-300 cursor-pointer rounded-[15px]\">
                                       </div>
                                       {% endif %}
                                        {% for image in images %}
                                          <div class=\"single-slide px-[10px] block\">
                                             <img
                                                src=\"{{ image.thumb }}\"
                                                title=\"{{ heading_title }}\"
                                                alt=\"{{ heading_title }}\"
                                                class=\"w-full border border-solid border-transparent transition-all duration-300 cursor-pointer rounded-[15px]\">
                                          </div>
                                          {% endfor %}
                                    </div>
                                    {% endif %}
                                </div>
                            </div>
                           <div class=\"min-[992px]:w-[33.33%] w-full px-[12px] mb-[24px]\">
                              {# <div class=\"bb-single-pro-contact\">
                                 <div class=\"bb-sub-title mb-[10px]\">
                                    <h4 class=\"font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]\">WNR-6D6-GDFS-DI</h4>
                                 </div>
                                 <ul class=\"font-Poppins text-[15px] font-light leading-[28px] tracking-[0.03rem] pl-[8px]\">
                                    <li>- Type: No-Frost</li>
                                    <li>- HCFC free: Cyclopentane</li>
                                    <li>- Gross Volume: 646 Ltr (V.0101)</li>
                                    <li>- Net Volume: 598 Ltr (V.0101)</li>
                                    <li>- CFC Free: R600a</li>
                                    <li>- Using Latest MSO Plus INVERTER technology</li>
                                    <li>- No need to use Voltage Stabilizer</li>
                                 </ul>
                                 <div class=\"bb-single-price-wrap flex justify-between py-[10px]\">
                                    <div class=\"bb-single-price py-[15px]\">
                                       <div class=\"price mb-[8px]\">
                                          <h5 class=\"font-quicksand leading-[1.2] tracking-[0.03rem] text-[20px] font-extrabold text-[#3d4750]\">৳149990 </h5>
                                       </div>
                                       <div class=\"mrp\">
                                          <p class=\"font-Poppins text-[16px] font-light text-[#686e7d] leading-[28px] tracking-[0.03rem]\">M.S.R.P. : <span class=\"text-[15px] line-through\">৳159990</span></p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"bb-single-pro-weight mb-[24px]\">
                                    <div class=\"pro-title mb-[12px]\">
                                       <h4 class=\"font-quicksand leading-[1.2] tracking-[0.03rem] text-[16px] font-bold uppercase text-[#3d4750]\">Color</h4>
                                    </div>
                                    <div class=\"bb-pro-variation-contant\">
                                       <ul class=\"flex flex-wrap m-[-2px]\">
                                          <li class=\"my-[10px] mx-[2px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer active-variation\">
                                             <span class=\"font-Poppins text-[#686e7d] font-light text-[14px] leading-[28px] tracking-[0.03rem]\">Grey</span>
                                          </li>
                                          <li class=\"my-[10px] mx-[2px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                             <span class=\"font-Poppins text-[#686e7d] font-light text-[14px] leading-[28px] tracking-[0.03rem]\">White</span>
                                          </li>
                                          <li class=\"my-[10px] mx-[2px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                             <span class=\"font-Poppins text-[#686e7d] font-light text-[14px] leading-[28px] tracking-[0.03rem]\">Light</span>
                                          </li>
                                          <li class=\"my-[10px] mx-[2px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                             <span class=\"font-Poppins text-[#686e7d] font-light text-[14px] leading-[28px] tracking-[0.03rem]\">Blue</span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div> #}
                              <div class=\"product-attribute-info my-[20px]\">
                                 <h1>{{ heading_title }}</h1>
                                 <ul class=\"list-unstyled\">
                                    {% if manufacturer %}
                                    <li>{{ text_manufacturer }} <a href=\"{{ manufacturers }}\">{{ manufacturer }}</a></li>
                                    {% endif %}
                                    <li>{{ text_model }} {{ model }}</li>
                                    {% for product_code in product_codes %}
                                    <li>{{ product_code.code }}: {{ product_code.value }}</li>
                                    {% endfor %}
                                    {% if reward %}
                                    <li>{{ text_reward }} {{ reward }}</li>
                                    {% endif %}
                                    <li>{{ text_stock }} {{ stock }}</li>
                                 </ul>
                                 
                                 {% if price %}
                                 <ul class=\"list-unstyled\">
                                    {% if not special %}
                                    <li>
                                       <h2><span class=\"price-new\">{{ price }}</span></h2>
                                    </li>
                                    {% else %}
                                    <li><span class=\"price-old\">{{ price }}</span></li>
                                    <li>
                                       <h2><span class=\"price-new\">{{ special }}</span></h2>
                                    </li>
                                    {% endif %}
                                    {% if tax %}
                                    <li>{{ text_tax }} {{ tax }}</li>
                                    {% endif %}
                                    {% if points %}
                                    <li>{{ text_points }} {{ points }}</li>
                                    {% endif %}
                                    {% if discounts %}
                                    <li>
                                       <hr>
                                    </li>
                                    {% for discount in discounts %}
                                    <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>
                                    {% endfor %}
                                    {% endif %}
                                 </ul>
                                 {% endif %}
                                 <form method=\"post\" data-oc-toggle=\"ajax\">
                                    <div class=\"btn-group\">
                                       <button type=\"submit\" formaction=\"{{ wishlist_add }}\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"{{ button_wishlist }}\"><i class=\"fa-solid fa-heart\"></i></button>
                                       <button type=\"submit\" formaction=\"{{ compare_add }}\" data-bs-toggle=\"tooltip\" class=\"btn btn-light btn-lg\" title=\"{{ button_compare }}\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
                                    </div>
                                    <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\"/>
                                 </form>
                                 <br/>
                                 <div id=\"product\">
                                    <form id=\"form-product\">
                                       {% if options %}
                                       <hr>
                                       <h3>{{ text_option }}</h3>
                                       <div>
                                          {% for option in options %}
                                          {% if option.type == 'select' %}
                                          <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                             <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                                             <select name=\"option[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                                                <option value=\"\">{{ text_select }}</option>
                                                {% for option_value in option.product_option_value %}
                                                <option value=\"{{ option_value.product_option_value_id }}\">{{ option_value.name }}
                                                   {% if option_value.price %}
                                                   ({{ option_value.price_prefix }}{{ option_value.price }})
                                                   {% endif %}
                                                </option>
                                                {% endfor %}
                                             </select>
                                             <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                          </div>
                                          {% endif %}
                                          {% if option.type == 'radio' %}
                                          <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                             <label class=\"form-label\">{{ option.name }}</label>
                                             <div id=\"input-option-{{ option.product_option_id }}\">
                                                {% for option_value in option.product_option_value %}
                                                <div class=\"form-check\">
                                                   <input type=\"radio\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/>
                                                   <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                                   {% if option_value.image %}
                                                   <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %}{{ option_value.price_prefix }} {{ option_value.price }}{% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                                   {{ option_value.name }}
                                                   {% if option_value.price %}
                                                   ({{ option_value.price_prefix }}{{ option_value.price }})
                                                   {% endif %}</label>
                                                </div>
                                                {% endfor %}
                                             </div>
                                             <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                          </div>
                                          {% endif %}
                                          {% if option.type == 'checkbox' %}
                                          <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                             <label class=\"form-label\">{{ option.name }}</label>
                                             <div id=\"input-option-{{ option.product_option_id }}\">
                                                {% for option_value in option.product_option_value %}
                                                <div class=\"form-check\">
                                                   <input type=\"checkbox\" name=\"option[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"/> 
                                                   <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                                   {% if option_value.image %}
                                                   <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %}{{ option_value.price_prefix }} {{ option_value.price }}{% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                                   {{ option_value.name }}
                                                   {% if option_value.price %}
                                                   ({{ option_value.price_prefix }}{{ option_value.price }})
                                                   {% endif %}</label>
                                                </div>
                                                {% endfor %}
                                             </div>
                                             <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                          </div>
                                          {% endif %}
                                          {% if option.type == 'text' %}
                                          <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                             <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> <input type=\"text\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                                             <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                          </div>
                                          {% endif %}
                                          {% if option.type == 'textarea' %}
                                          <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                             <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label> 
                                             <textarea name=\"option[{{ option.product_option_id }}]\" rows=\"5\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ option.value }}</textarea>
                                             <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                          </div>
                                          {% endif %}
                                          {% if option.type == 'file' %}
                                          <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                             <label for=\"button-upload-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                                             <div>
                                                <button type=\"button\" id=\"button-upload-{{ option.product_option_id }}\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-light btn-block\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                                                <input type=\"hidden\" name=\"option[{{ option.product_option_id }}]\" value=\"\" id=\"input-option-{{ option.product_option_id }}\"/>
                                             </div>
                                             <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                          </div>
                                          {% endif %}
                                          {% if option.type == 'date' %}
                                          <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                             <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                                             <input type=\"date\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                                             <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                          </div>
                                          {% endif %}
                                          {% if option.type == 'time' %}
                                          <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                             <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                                             <input type=\"time\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                                             <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                          </div>
                                          {% endif %}
                                          {% if option.type == 'datetime' %}
                                          <div class=\"mb-3{% if option.required %} required{% endif %}\">
                                             <label for=\"input-option-{{ option.product_option_id }}\" class=\"form-label\">{{ option.name }}</label>
                                             <input type=\"datetime-local\" name=\"option[{{ option.product_option_id }}]\" value=\"{{ option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                                             <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                                          </div>
                                          {% endif %}
                                          {% endfor %}
                                       </div>
                                       {% endif %}
                                       {% if subscription_plans %}
                                       <hr/>
                                       <h3>{{ text_subscription }}</h3>
                                       <div class=\"mb-3 required\">
                                          <select name=\"subscription_plan_id\" id=\"input-subscription\" class=\"form-select\">
                                             <option value=\"\">{{ text_select }}</option>
                                             {% for subscription_plan in subscription_plans %}
                                             <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name }}</option>
                                             {% endfor %}
                                          </select>
                                          {% for subscription_plan in subscription_plans %}
                                          <div id=\"subscription-description-{{ subscription_plan.subscription_plan_id }}\" class=\"form-text subscription d-none\">{{ subscription_plan.description }}</div>
                                          {% endfor %}
                                          <div id=\"error-subscription\" class=\"invalid-feedback\"></div>
                                       </div>
                                       {% endif %}
                                       <div class=\"mb-3\">
                                          <div class=\"input-group\">
                                             <div class=\"input-group-text\">{{ entry_qty }}</div>
                                             <input type=\"text\" name=\"quantity\" value=\"{{ minimum }}\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/>
                                             <button type=\"submit\" id=\"button-cart\" class=\"btn btn-primary btn-lg btn-block\">{{ button_cart }}</button>
                                          </div>
                                          <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
                                          <div id=\"error-quantity\" class=\"form-text\"></div>
                                       </div>
                                       {% if minimum > 1 %}
                                       <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-info\"></i> {{ text_minimum }}</div>
                                       {% endif %}
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class=\"min-[992px]:w-[25%] w-full px-[12px] mb-[24px]\">
                              <div class=\"w-full\">
                                 <div class=\"w-full px-[12px]\">
                                    <div class=\"sub-title mb-[20px] flex justify-between\">
                                       <h4 class=\"font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] uppercase\">Recent View Product</h4>
                                    </div>
                                 </div>
                                 <div class=\"w-full px-[12px] mb-[24px]\">
                                    <div class=\"group p-[15px] overflow-hidden bg-[#f8f8fb] border border-[#eee] rounded-[12px] flex items-center 
                                       transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:bg-white\">
                                       <span class=\"pro-img mr-[12px] overflow-hidden rounded-[10px]\">
                                       <img src=\"assets/img/product/refrigerator/WNR-6D6-GDFS-DI.jpg\"
                                          class=\"w-[80px] border border-[#eee] rounded-[10px] 
                                          transition-all duration-300 group-hover:scale-110\">
                                       </span>
                                       <div class=\"side-contact flex flex-col\">
                                          <h4 class=\"text-[15px]\">
                                             <a href=\"product.php\">
                                                <p class=\"font-Poppins text-[15px] leading-[24px] font-medium text-[#3d4750] 
                                                   transition-all duration-300 group-hover:text-[#6c7fd8]\">
                                                   WNR-6D6-GDFS-DI
                                                </p>
                                                <p class=\"text-[16px] font-bold text-[#686e7d] 
                                                   transition-all duration-300 group-hover:text-black\">
                                                   ৳149990
                                                </p>
                                             </a>
                                          </h4>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"w-full px-[12px] mb-[24px]\">
                                    <div class=\"group p-[15px] overflow-hidden bg-[#f8f8fb] border border-[#eee] rounded-[12px] flex items-center 
                                       transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:bg-white\">
                                       <span class=\"pro-img mr-[12px] overflow-hidden rounded-[10px]\">
                                       <img src=\"assets/img/product/refrigerator/WNR-6D6-GDFS-DI.jpg\"
                                          class=\"w-[80px] border border-[#eee] rounded-[10px] 
                                          transition-all duration-300 group-hover:scale-110\">
                                       </span>
                                       <div class=\"side-contact flex flex-col\">
                                          <h4 class=\"text-[15px]\">
                                             <a href=\"product.php\">
                                                <p class=\"font-Poppins text-[15px] leading-[24px] font-medium text-[#3d4750] 
                                                   transition-all duration-300 group-hover:text-[#6c7fd8]\">
                                                   WNR-6D6-GDFS-DI
                                                </p>
                                                <p class=\"text-[16px] font-bold text-[#686e7d] 
                                                   transition-all duration-300 group-hover:text-black\">
                                                   ৳149990
                                                </p>
                                             </a>
                                          </h4>
                                       </div>
                                    </div>
                                 </div>
                                 <div class=\"w-full px-[12px] mb-[24px]\">
                                    <div class=\"group p-[15px] overflow-hidden bg-[#f8f8fb] border border-[#eee] rounded-[12px] flex items-center 
                                       transition-all duration-300 hover:shadow-xl hover:-translate-y-1 hover:bg-white\">
                                       <span class=\"pro-img mr-[12px] overflow-hidden rounded-[10px]\">
                                       <img src=\"assets/img/product/refrigerator/WNR-6D6-GDFS-DI.jpg\"
                                          class=\"w-[80px] border border-[#eee] rounded-[10px] 
                                          transition-all duration-300 group-hover:scale-110\">
                                       </span>
                                       <div class=\"side-contact flex flex-col\">
                                          <h4 class=\"text-[15px]\">
                                             <a href=\"product.php\">
                                                <p class=\"font-Poppins text-[15px] leading-[24px] font-medium text-[#3d4750] 
                                                   transition-all duration-300 group-hover:text-[#6c7fd8]\">
                                                   WNR-6D6-GDFS-DI
                                                </p>
                                                <p class=\"text-[16px] font-bold text-[#686e7d] 
                                                   transition-all duration-300 group-hover:text-black\">
                                                   ৳149990
                                                </p>
                                             </a>
                                          </h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>


                     <div class=\"bb-single-pro-tab\">

                        <!-- Tabs Navigation -->
                        <div id=\"productTabSection\" class=\"w-full\">
                           <div class=\"flex flex-wrap border-b border-gray-200\">

                                 <!-- Description -->
                                 <button data-tab=\"description\"
                                    class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#6c7fd8] active-tab\">
                                    {{ tab_description }}
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>

                                 {% if attribute_groups %}
                                 <!-- Specification -->
                                 <button data-tab=\"specification\"
                                    class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#686e7d]\">
                                    {{ tab_attribute }}
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>
                                 {% endif %}

                                 <!-- Gallery -->
                                 <button data-tab=\"gallery\" class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#686e7d]\">
                                    Picture Gallery
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>
                                 <!-- Video Gallery -->
                                 <button data-tab=\"videos\" class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#686e7d]\">
                                    Video Gallery
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>
                                 <!-- Supports -->
                                 <button data-tab=\"supports\" class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#686e7d]\">
                                    Support
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>
                                 <!-- Download -->
                                 <button data-tab=\"download\" class=\"tab-btn relative px-5 py-3 text-[16px] font-medium text-[#686e7d]\">
                                    Download
                                    <span class=\"tab-line\"></span>
                                    <span class=\"tab-arrow\"></span>
                                 </button>

                           </div>

                           <!-- Tab Contents -->
                           <div class=\"pt-6\">

                                 <!-- Description -->
                                 <div id=\"description\" class=\"tab-content block\">
                                    <div class=\"bb-inner-tabs border border-[#eee] p-[20px] rounded-[20px]\">
                                       {{ description }}
                                    </div>
                                 </div>

                                 {% if attribute_groups %}
                                 <!-- Specification -->
                                 <div id=\"specification\" class=\"tab-content hidden\">
                                    <div class=\"bb-inner-tabs border border-[#eee] p-[20px] rounded-[20px] overflow-x-auto\">

                                       <table class=\"w-full border border-[#eee]\">
                                             {% for attribute_group in attribute_groups %}

                                             <thead>
                                                <tr>
                                                   <th colspan=\"2\"
                                                         class=\"bg-[#f8f8fb] p-3 text-left border border-[#eee] font-semibold\">
                                                         {{ attribute_group.name }}
                                                   </th>
                                                </tr>
                                             </thead>

                                             <tbody>
                                                {% for attribute in attribute_group.attribute %}
                                                <tr>
                                                   <td class=\"p-3 border border-[#eee] w-[40%]\">
                                                         {{ attribute.name }}
                                                   </td>
                                                   <td class=\"p-3 border border-[#eee]\">
                                                         {{ attribute.text }}
                                                   </td>
                                                </tr>
                                                {% endfor %}
                                             </tbody>

                                             {% endfor %}
                                       </table>

                                    </div>
                                 </div>
                                 {% endif %}

                                    <!-- Gallery -->
                                          <div id=\"gallery\" class=\"tab-content hidden\">
                                             <div class=\"bb-inner-tabs border border-[#eee] p-[15px] rounded-[20px]\">
                                                   <div class=\"information overflow-x-auto rounded-xl border border-gray-200\">

                                                      {% if thumb %}
                                                         <img src=\"{{ thumb }}\" alt=\"{{ heading_title }}\"
                                                               class=\"w-full max-w-[800px] mx-auto\">
                                                      {% endif %}

                                                      {% if images %}
                                                         {% for image in images %}
                                                               <img src=\"{{ image.thumb }}\" alt=\"{{ heading_title }}\"
                                                                  class=\"w-full max-w-[800px] mx-auto\">
                                                         {% endfor %}
                                                      {% endif %}

                                                   </div>
                                             </div>
                                          </div>

                                          <!-- Video -->
                                          <div id=\"videos\" class=\"tab-content hidden\">
                                             <div class=\"bb-inner-tabs border border-[#eee] p-[15px] rounded-[20px]\">
                                                <!-- Video Tutorial Section -->
                                                   <section class=\"py-8 lg:py-12\">
                                                      <!-- Video Grid -->
                                                      <div class=\"grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6\">

                                                         <!-- Video Card 1 -->
                                                         <div class=\"group bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 overflow-hidden\">
                                                               <div class=\"aspect-video overflow-hidden\">
                                                                  <iframe
                                                                     class=\"w-full h-full transform transition-transform duration-700 group-hover:scale-105\"
                                                                     src=\"https://www.youtube.com/embed/f-NUHvKL6WM\"
                                                                     title=\"How to Use, Clean & Maintain the Walton WNR-6D6 Fridge Water Dispenser\"
                                                                     allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                                                     referrerpolicy=\"strict-origin-when-cross-origin\"
                                                                     allowfullscreen>
                                                                  </iframe>
                                                               </div>
                                                               <!-- Optional glossy overlay -->
                                                               <div class=\"pointer-events-none absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 bg-gradient-to-tr from-white/0 via-white/10 to-white/20\"></div>
                                                         </div>

                                                         <!-- Video Card 2 -->
                                                         <div class=\"group bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 overflow-hidden\">
                                                               <div class=\"aspect-video overflow-hidden\">
                                                                  <iframe
                                                                     class=\"w-full h-full transform transition-transform duration-700 group-hover:scale-105\"
                                                                     src=\"https://www.youtube.com/embed/yMCbCMUBp4Y\"
                                                                     title=\"How to Operate Convertible Modes\"
                                                                     allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                                                     referrerpolicy=\"strict-origin-when-cross-origin\"
                                                                     allowfullscreen>
                                                                  </iframe>
                                                               </div>
                                                               <!-- Optional glossy overlay -->
                                                               <div class=\"pointer-events-none absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 bg-gradient-to-tr from-white/0 via-white/10 to-white/20\"></div>
                                                         </div>

                                                         <!-- Video Card 3 -->
                                                         <div class=\"group bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 overflow-hidden\">
                                                               <div class=\"aspect-video overflow-hidden\">
                                                                  <iframe
                                                                     class=\"w-full h-full transform transition-transform duration-700 group-hover:scale-105\"
                                                                     src=\"https://www.youtube.com/embed/rTzN2lRv-nA\"
                                                                     title=\"How to Connect Wi-Fi\"
                                                                     allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
                                                                     referrerpolicy=\"strict-origin-when-cross-origin\"
                                                                     allowfullscreen>
                                                                  </iframe>
                                                               </div>
                                                               <!-- Optional glossy overlay -->
                                                               <div class=\"pointer-events-none absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-700 bg-gradient-to-tr from-white/0 via-white/10 to-white/20\"></div>
                                                         </div>

                                                      </div>
                                                   </section>
               

                                             </div>
                                          </div>

                                          <!-- Supports -->
                                          <div id=\"supports\" class=\"tab-content hidden\">
                                             <div class=\"bb-inner-tabs border border-[#eee] p-[15px] rounded-[20px]\">
                                                   <div class=\"w-full mx-auto rounded-3xl overflow-hidden border border-gray-200 shadow-lg bg-white font-Poppins\">

                                                      <!-- Main Header -->
                                                      <div class=\"bg-gradient-to-r from-[#6c7fd8] to-[#4f46e5] px-8 py-6\">
                                                         <h2 class=\"text-white text-[28px] font-bold tracking-wide uppercase\">
                                                               Warranty Information
                                                         </h2>
                                                         <p class=\"text-white/80 text-[14px] mt-1\">
                                                               Complete coverage details for Residential & Commercial use
                                                         </p>
                                                      </div>

                                                      <!-- Warranty Cards -->
                                                      <div class=\"grid md:grid-cols-2 gap-8 p-8\">

                                                         <!-- Residential -->
                                                         <div class=\"rounded-2xl border border-gray-200 shadow-sm overflow-hidden\">
                                                               <div class=\"bg-[#f3f4f6] px-6 py-4 border-b\">
                                                                  <h3 class=\"text-[#3d4750] text-[20px] font-bold\">Residential Use</h3>
                                                               </div>

                                                               <div class=\"divide-y divide-gray-100\">
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Replacement Guarantee</span>
                                                                     <span class=\"text-[#686e7d]\">1 Year</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Main Parts (Compressor)</span>
                                                                     <span class=\"text-[#686e7d]\">12 Years</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Door</span>
                                                                     <span class=\"text-[#686e7d]\">3 Years *</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Spare Parts</span>
                                                                     <span class=\"text-[#686e7d]\">4 Years *</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">After Sales Service</span>
                                                                     <span class=\"text-[#686e7d]\">5 Years *</span>
                                                                  </div>
                                                               </div>
                                                         </div>

                                                         <!-- Commercial -->
                                                         <div class=\"rounded-2xl border border-gray-200 shadow-sm overflow-hidden\">
                                                               <div class=\"bg-[#f3f4f6] px-6 py-4 border-b\">
                                                                  <h3 class=\"text-[#3d4750] text-[20px] font-bold\">Commercial Use</h3>
                                                               </div>

                                                               <div class=\"divide-y divide-gray-100\">
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Main Parts (Compressor)</span>
                                                                     <span class=\"text-[#686e7d]\">4 Years</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Door</span>
                                                                     <span class=\"text-[#686e7d]\">1 Year *</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">Spare Parts</span>
                                                                     <span class=\"text-[#686e7d]\">2 Years *</span>
                                                                  </div>
                                                                  <div class=\"flex justify-between px-6 py-4 hover:bg-gray-50\">
                                                                     <span class=\"font-medium text-[#3d4750]\">After Sales Service</span>
                                                                     <span class=\"text-[#686e7d]\">2 Years *</span>
                                                                  </div>
                                                               </div>
                                                         </div>

                                                      </div>

                                                      <!-- Exclusions -->
                                                      <div class=\"px-8 pb-8\">
                                                         <div class=\"rounded-2xl border border-red-100 bg-red-50 p-6 mb-6\">
                                                               <h3 class=\"text-[20px] font-bold text-red-600 mb-4\">
                                                                  Warranty Does Not Cover:
                                                               </h3>

                                                               <div class=\"space-y-3 text-[15px] text-[#555] leading-[28px]\">
                                                                  <p>• Any damage due to accident, electrical fault, natural causes, negligence or improper installation.</p>
                                                                  <p>• Any damage or failure caused by unauthorized modification or alteration.</p>
                                                                  <p>• Products with removed, distorted or unrecognized serial numbers.</p>
                                                               </div>
                                                         </div>

                                                         <!-- Important Notice -->
                                                         <div class=\"rounded-2xl border border-yellow-200 bg-yellow-50 p-6\">
                                                               <h3 class=\"text-[18px] font-bold text-[#3d4750] mb-3\">
                                                                  Important Notice
                                                               </h3>

                                                               <p class=\"text-[15px] text-[#555] leading-[28px] mb-3\">
                                                                  Authority reserves the right to change, extend, correct, stop or cancel the warranty period without prior notice.
                                                               </p>

                                                               <p class=\"text-[14px] italic text-[#777] leading-[26px]\">
                                                                  *Warranty covers manufacturing defects in products & workmanship only, subject to verification by company personnel.
                                                               </p>
                                                         </div>
                                                      </div>

                                                   </div>
                                             </div>
                                          </div>

                                          <!-- Download -->
                                          <div id=\"download\" class=\"tab-content hidden\">
                                             <div class=\"bb-inner-tabs border border-[#eee] p-[15px] rounded-[20px]\">
                                                   <div class=\"py-6 text-center\">
                                                      <a 
                                                         href=\"https://waltonbd.com/user-manuals/refrigerator/side-by-side-manual-5th-version-06-10-25.pdf\"
                                                         target=\"_blank\"
                                                         rel=\"noopener noreferrer\"
                                                         class=\"inline-flex items-center gap-3 px-6 py-3 rounded-full
                                                               bg-[#6c7fd8] text-white font-semibold text-sm md:text-base
                                                               shadow-md hover:shadow-xl hover:-translate-y-1
                                                               hover:bg-[#5a6ecf]
                                                               transition-all duration-300 ease-in-out\"
                                                      >
                                                         <!-- Download Icon -->
                                                         <svg xmlns=\"http://www.w3.org/2000/svg\"
                                                               class=\"w-5 h-5\"
                                                               fill=\"none\"
                                                               viewBox=\"0 0 24 24\"
                                                               stroke=\"currentColor\"
                                                               stroke-width=\"2\">
                                                               <path stroke-linecap=\"round\"
                                                                  stroke-linejoin=\"round\"
                                                                  d=\"M12 3v12m0 0l4-4m-4 4l-4-4m-6 8h16\" />
                                                         </svg>
                                                         Download User Manual
                                                      </a>
                                                   </div>
                                             </div>
                                          </div>

                           </div>
                        </div>

                     </div>


                  </div>
               </div>
            </div>
         </section>

      
      {{ related }}
      {{ content_bottom }}
   </div>
   {# {{ column_right }} #}
</div>
</div>
<script type=\"text/javascript\"><!--
   \$('#input-subscription').on('change', function(e) {
      var element = this;

      \$('.subscription').addClass('d-none');

      \$('#subscription-description-' + \$(element).val()).removeClass('d-none');
   });

   \$('#form-product').on('submit', function(e) {
      e.preventDefault();

      \$.ajax({
         url: 'index.php?route=checkout/cart.add&language={{ language }}',
         type: 'post',
         data: \$('#form-product').serialize(),
         dataType: 'json',
         contentType: 'application/x-www-form-urlencoded',
         cache: false,
         processData: false,
         beforeSend: function() {
               \$('#button-cart').button('loading');
         },
         complete: function() {
               \$('#button-cart').button('reset');
         },
         success: function(json) {
               console.log(json);

               \$('#form-product').find('.is-invalid').removeClass('is-invalid');
               \$('#form-product').find('.invalid-feedback').removeClass('d-block');

               if (json['error']) {
                  for (key in json['error']) {
                     \$('#input-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                     \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                  }
               }

               if (json['success']) {
                  \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                  \$('#cart').load('index.php?route=common/cart.info&language={{ language }}');
               }
         },
         error: function(xhr, ajaxOptions, thrownError) {
               console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
         }
      });
   });

</script>
{{ footer }}
", "extension/blueberry/catalog/view/template/product/product.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\product\\product.twig");
    }
}
