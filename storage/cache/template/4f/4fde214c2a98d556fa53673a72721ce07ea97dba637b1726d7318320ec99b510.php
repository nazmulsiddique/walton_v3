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

/* extension/blueberry/catalog/view/template/product/compare.twig */
class __TwigTemplate_07339576b38cd5e24269fe9efb1cb49ba4a0547b25b22bb48528e6529b7cc925 extends Template
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
<div id=\"product-compare\" class=\"max-w-[1320px] mx-auto px-4 py-8\">
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
        if (($context["success"] ?? null)) {
            // line 40
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  ";
        }
        // line 44
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\" class=\"col\">";
        // line 45
        yield ($context["content_top"] ?? null);
        yield "
      ";
        // line 47
        yield "      ";
        if (($context["products"] ?? null)) {
            // line 48
            yield "<div class=\"overflow-x-auto rounded-xl border border-gray-200 bg-white shadow-sm\">
    <table class=\"min-w-full border-collapse\">

        <thead>
            <tr>
                <td colspan=\"";
            // line 53
            yield (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) + 1);
            yield "\"
                    class=\"bg-gray-100 px-4 py-3 font-semibold text-gray-800 border-b\">
                    ";
            // line 55
            yield ($context["text_product"] ?? null);
            yield "
                </td>
            </tr>
        </thead>

        <tbody>
            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">";
            // line 62
            yield ($context["text_name"] ?? null);
            yield "</td>
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 64
                yield "                    <td class=\"px-4 py-3\">
                        <a href=\"";
                // line 65
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 65);
                yield "\"
                           class=\"font-semibold text-purple-600 hover:text-purple-700\">
                            ";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 67);
                yield "
                        </a>
                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            yield "            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">";
            // line 74
            yield ($context["text_image"] ?? null);
            yield "</td>
                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 76
                yield "                    <td class=\"px-4 py-3 text-center\">
                        ";
                // line 77
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 77)) {
                    // line 78
                    yield "                            <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 78);
                    yield "\"
                                 alt=\"";
                    // line 79
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 79);
                    yield "\"
                                 title=\"";
                    // line 80
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                    yield "\"
                                 class=\"mx-auto max-w-[120px] rounded-lg border border-gray-200 p-1\">
                        ";
                }
                // line 83
                yield "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            yield "            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">";
            // line 88
            yield ($context["text_price"] ?? null);
            yield "</td>
                ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 90
                yield "                    <td class=\"px-4 py-3\">
                        ";
                // line 91
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 91)) {
                    // line 92
                    yield "                            ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92);
                    yield "
                        ";
                } else {
                    // line 94
                    yield "                            <span class=\"font-semibold text-green-600\">
                                ";
                    // line 95
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 95);
                    yield "
                            </span>
                            <span class=\"ml-2 text-sm text-gray-400 line-through\">
                                ";
                    // line 98
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 98);
                    yield "
                            </span>
                        ";
                }
                // line 101
                yield "                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            yield "            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">";
            // line 106
            yield ($context["text_model"] ?? null);
            yield "</td>
                ";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 108
                yield "                    <td class=\"px-4 py-3\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 108);
                yield "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">";
            // line 113
            yield ($context["text_manufacturer"] ?? null);
            yield "</td>
                ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 115
                yield "                    <td class=\"px-4 py-3\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 115);
                yield "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            yield "            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">";
            // line 120
            yield ($context["text_availability"] ?? null);
            yield "</td>
                ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 122
                yield "                    <td class=\"px-4 py-3\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 122);
                yield "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "            </tr>

            ";
            // line 126
            if (($context["review_status"] ?? null)) {
                // line 127
                yield "                <tr class=\"border-b\">
                    <td class=\"bg-gray-50 px-4 py-3 font-medium\">";
                // line 128
                yield ($context["text_rating"] ?? null);
                yield "</td>

                    ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 131
                    yield "                        <td class=\"px-4 py-3 text-center\">
                            <div class=\"flex justify-center gap-1\">
                                ";
                    // line 133
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 134
                        yield "                                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 134) < $context["i"])) {
                            // line 135
                            yield "                                        <i class=\"ri-star-line text-yellow-500\"></i>
                                    ";
                        } else {
                            // line 137
                            yield "                                        <i class=\"ri-star-fill text-yellow-500\"></i>
                                    ";
                        }
                        // line 139
                        yield "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 140
                    yield "                            </div>

                            <div class=\"mt-2 text-sm text-gray-500\">
                                ";
                    // line 143
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 143);
                    yield "
                            </div>
                        </td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                yield "                </tr>
            ";
            }
            // line 149
            yield "
            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">";
            // line 151
            yield ($context["text_summary"] ?? null);
            yield "</td>
                ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 153
                yield "                    <td class=\"px-4 py-3 text-sm text-gray-600\">
                        ";
                // line 154
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 154);
                yield "
                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">";
            // line 160
            yield ($context["text_weight"] ?? null);
            yield "</td>
                ";
            // line 161
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 162
                yield "                    <td class=\"px-4 py-3\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 162);
                yield "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            yield "            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">";
            // line 167
            yield ($context["text_dimension"] ?? null);
            yield "</td>
                ";
            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 169
                yield "                    <td class=\"px-4 py-3\">
                        ";
                // line 170
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 170);
                yield " × ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 170);
                yield " × ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 170);
                yield "
                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            yield "            </tr>
        </tbody>

        ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 177
                yield "            <thead>
                <tr>
                    <td colspan=\"";
                // line 179
                yield (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) + 1);
                yield "\"
                        class=\"bg-gray-100 px-4 py-3 font-semibold text-gray-800 border-y\">
                        ";
                // line 181
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 181);
                yield "
                    </td>
                </tr>
            </thead>

            <tbody>
                ";
                // line 187
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 187));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 188
                    yield "                    <tr class=\"border-b\">
                        <td class=\"bg-gray-50 px-4 py-3 font-medium\">
                            ";
                    // line 190
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 190);
                    yield "
                        </td>

                        ";
                    // line 193
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 194
                        yield "                            <td class=\"px-4 py-3\">
                                ";
                        // line 195
                        if ((($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 195)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["key"]] ?? null) : null)) {
                            // line 196
                            yield "                                    ";
                            yield (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 196)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["key"]] ?? null) : null);
                            yield "
                                ";
                        }
                        // line 198
                        yield "                            </td>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 200
                    yield "                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                yield "            </tbody>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            yield "
        <tbody>
            <tr>
                <td class=\"px-4 py-4\"></td>

                ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 210
                yield "                    <td class=\"px-4 py-4 text-center\">
                        <form action=\"";
                // line 211
                yield ($context["cart_add"] ?? null);
                yield "\"
                              method=\"post\"
                              data-oc-toggle=\"ajax\"
                              data-oc-load=\"";
                // line 214
                yield ($context["cart"] ?? null);
                yield "\"
                              data-oc-target=\"#cart\">

                            <button type=\"submit\"
                                    class=\"w-full rounded-lg bg-purple-600 px-4 py-2 text-white transition hover:bg-purple-700\">
                                ";
                // line 219
                yield ($context["button_cart"] ?? null);
                yield "
                            </button>

                            <input type=\"hidden\"
                                   name=\"product_id\"
                                   value=\"";
                // line 224
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 224);
                yield "\">

                            <input type=\"hidden\"
                                   name=\"quantity\"
                                   value=\"";
                // line 228
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 228);
                yield "\">

                            <a href=\"";
                // line 230
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 230);
                yield "\"
                               class=\"mt-2 block w-full rounded-lg bg-red-600 px-4 py-2 text-center text-white transition hover:bg-red-700\">
                                ";
                // line 232
                yield ($context["button_remove"] ?? null);
                yield "
                            </a>
                        </form>
                    </td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            yield "            </tr>
        </tbody>

    </table>
</div>

      ";
        } else {
            // line 244
            yield "        <p>";
            yield ($context["text_no_results"] ?? null);
            yield "</p>
        <div class=\"text-end\"><a href=\"";
            // line 245
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      ";
        }
        // line 247
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 248
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 250
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
        return "extension/blueberry/catalog/view/template/product/compare.twig";
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
        return array (  667 => 250,  662 => 248,  657 => 247,  650 => 245,  645 => 244,  636 => 237,  625 => 232,  620 => 230,  615 => 228,  608 => 224,  600 => 219,  592 => 214,  586 => 211,  583 => 210,  579 => 209,  572 => 204,  565 => 202,  558 => 200,  551 => 198,  545 => 196,  543 => 195,  540 => 194,  536 => 193,  530 => 190,  526 => 188,  522 => 187,  513 => 181,  508 => 179,  504 => 177,  500 => 176,  495 => 173,  482 => 170,  479 => 169,  475 => 168,  471 => 167,  466 => 164,  457 => 162,  453 => 161,  449 => 160,  444 => 157,  435 => 154,  432 => 153,  428 => 152,  424 => 151,  420 => 149,  416 => 147,  406 => 143,  401 => 140,  395 => 139,  391 => 137,  387 => 135,  384 => 134,  380 => 133,  376 => 131,  372 => 130,  367 => 128,  364 => 127,  362 => 126,  358 => 124,  349 => 122,  345 => 121,  341 => 120,  336 => 117,  327 => 115,  323 => 114,  319 => 113,  314 => 110,  305 => 108,  301 => 107,  297 => 106,  292 => 103,  285 => 101,  279 => 98,  273 => 95,  270 => 94,  264 => 92,  262 => 91,  259 => 90,  255 => 89,  251 => 88,  246 => 85,  239 => 83,  233 => 80,  229 => 79,  224 => 78,  222 => 77,  219 => 76,  215 => 75,  211 => 74,  206 => 71,  196 => 67,  191 => 65,  188 => 64,  184 => 63,  180 => 62,  170 => 55,  165 => 53,  158 => 48,  155 => 47,  151 => 45,  146 => 44,  138 => 40,  136 => 39,  127 => 32,  112 => 30,  106 => 27,  100 => 25,  94 => 22,  91 => 21,  89 => 20,  86 => 19,  80 => 15,  77 => 14,  60 => 13,  56 => 12,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"product-compare\" class=\"max-w-[1320px] mx-auto px-4 py-8\">
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
  {% if success %}
    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> {{ success }}
      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
    </div>
  {% endif %}
  <div class=\"row\">{{ column_left }}
    <div id=\"content\" class=\"col\">{{ content_top }}
      {# <h1>{{ heading_title }}</h1> #}
      {% if products %}
<div class=\"overflow-x-auto rounded-xl border border-gray-200 bg-white shadow-sm\">
    <table class=\"min-w-full border-collapse\">

        <thead>
            <tr>
                <td colspan=\"{{ products|length + 1 }}\"
                    class=\"bg-gray-100 px-4 py-3 font-semibold text-gray-800 border-b\">
                    {{ text_product }}
                </td>
            </tr>
        </thead>

        <tbody>
            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">{{ text_name }}</td>
                {% for product in products %}
                    <td class=\"px-4 py-3\">
                        <a href=\"{{ product.href }}\"
                           class=\"font-semibold text-purple-600 hover:text-purple-700\">
                            {{ product.name }}
                        </a>
                    </td>
                {% endfor %}
            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">{{ text_image }}</td>
                {% for product in products %}
                    <td class=\"px-4 py-3 text-center\">
                        {% if product.thumb %}
                            <img src=\"{{ product.thumb }}\"
                                 alt=\"{{ product.name }}\"
                                 title=\"{{ product.name }}\"
                                 class=\"mx-auto max-w-[120px] rounded-lg border border-gray-200 p-1\">
                        {% endif %}
                    </td>
                {% endfor %}
            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">{{ text_price }}</td>
                {% for product in products %}
                    <td class=\"px-4 py-3\">
                        {% if not product.special %}
                            {{ product.price }}
                        {% else %}
                            <span class=\"font-semibold text-green-600\">
                                {{ product.special }}
                            </span>
                            <span class=\"ml-2 text-sm text-gray-400 line-through\">
                                {{ product.price }}
                            </span>
                        {% endif %}
                    </td>
                {% endfor %}
            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">{{ text_model }}</td>
                {% for product in products %}
                    <td class=\"px-4 py-3\">{{ product.model }}</td>
                {% endfor %}
            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">{{ text_manufacturer }}</td>
                {% for product in products %}
                    <td class=\"px-4 py-3\">{{ product.manufacturer }}</td>
                {% endfor %}
            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">{{ text_availability }}</td>
                {% for product in products %}
                    <td class=\"px-4 py-3\">{{ product.availability }}</td>
                {% endfor %}
            </tr>

            {% if review_status %}
                <tr class=\"border-b\">
                    <td class=\"bg-gray-50 px-4 py-3 font-medium\">{{ text_rating }}</td>

                    {% for product in products %}
                        <td class=\"px-4 py-3 text-center\">
                            <div class=\"flex justify-center gap-1\">
                                {% for i in 1..5 %}
                                    {% if product.rating < i %}
                                        <i class=\"ri-star-line text-yellow-500\"></i>
                                    {% else %}
                                        <i class=\"ri-star-fill text-yellow-500\"></i>
                                    {% endif %}
                                {% endfor %}
                            </div>

                            <div class=\"mt-2 text-sm text-gray-500\">
                                {{ product.reviews }}
                            </div>
                        </td>
                    {% endfor %}
                </tr>
            {% endif %}

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">{{ text_summary }}</td>
                {% for product in products %}
                    <td class=\"px-4 py-3 text-sm text-gray-600\">
                        {{ product.description }}
                    </td>
                {% endfor %}
            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">{{ text_weight }}</td>
                {% for product in products %}
                    <td class=\"px-4 py-3\">{{ product.weight }}</td>
                {% endfor %}
            </tr>

            <tr class=\"border-b\">
                <td class=\"bg-gray-50 px-4 py-3 font-medium\">{{ text_dimension }}</td>
                {% for product in products %}
                    <td class=\"px-4 py-3\">
                        {{ product.length }} × {{ product.width }} × {{ product.height }}
                    </td>
                {% endfor %}
            </tr>
        </tbody>

        {% for attribute_group in attribute_groups %}
            <thead>
                <tr>
                    <td colspan=\"{{ products|length + 1 }}\"
                        class=\"bg-gray-100 px-4 py-3 font-semibold text-gray-800 border-y\">
                        {{ attribute_group.name }}
                    </td>
                </tr>
            </thead>

            <tbody>
                {% for key, attribute in attribute_group.attribute %}
                    <tr class=\"border-b\">
                        <td class=\"bg-gray-50 px-4 py-3 font-medium\">
                            {{ attribute.name }}
                        </td>

                        {% for product in products %}
                            <td class=\"px-4 py-3\">
                                {% if product.attribute[key] %}
                                    {{ product.attribute[key] }}
                                {% endif %}
                            </td>
                        {% endfor %}
                    </tr>
                {% endfor %}
            </tbody>
        {% endfor %}

        <tbody>
            <tr>
                <td class=\"px-4 py-4\"></td>

                {% for product in products %}
                    <td class=\"px-4 py-4 text-center\">
                        <form action=\"{{ cart_add }}\"
                              method=\"post\"
                              data-oc-toggle=\"ajax\"
                              data-oc-load=\"{{ cart }}\"
                              data-oc-target=\"#cart\">

                            <button type=\"submit\"
                                    class=\"w-full rounded-lg bg-purple-600 px-4 py-2 text-white transition hover:bg-purple-700\">
                                {{ button_cart }}
                            </button>

                            <input type=\"hidden\"
                                   name=\"product_id\"
                                   value=\"{{ product.product_id }}\">

                            <input type=\"hidden\"
                                   name=\"quantity\"
                                   value=\"{{ product.minimum }}\">

                            <a href=\"{{ product.remove }}\"
                               class=\"mt-2 block w-full rounded-lg bg-red-600 px-4 py-2 text-center text-white transition hover:bg-red-700\">
                                {{ button_remove }}
                            </a>
                        </form>
                    </td>
                {% endfor %}
            </tr>
        </tbody>

    </table>
</div>

      {% else %}
        <p>{{ text_no_results }}</p>
        <div class=\"text-end\"><a href=\"{{ continue }}\" class=\"btn btn-primary\">{{ button_continue }}</a></div>
      {% endif %}
      {{ content_bottom }}</div>
    {{ column_right }}</div>
</div>
{{ footer }} 
", "extension/blueberry/catalog/view/template/product/compare.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\product\\compare.twig");
    }
}
