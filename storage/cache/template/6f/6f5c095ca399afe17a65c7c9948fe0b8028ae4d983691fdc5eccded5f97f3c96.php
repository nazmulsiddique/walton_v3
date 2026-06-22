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

/* wadmin/view/template/catalog/product_form.twig */
class __TwigTemplate_6c2f1813520010c063940f7845d7eb0ece633b5915ec9ce0660830b83eb427a9 extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["back"] ?? null);
        yield "\" data-bs-toggle=\"tooltip\" title=\"";
        yield ($context["button_back"] ?? null);
        yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["master_id"] ?? null)) {
            // line 18
            yield "      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> ";
            yield ($context["text_variant"] ?? null);
            yield "</div>
    ";
        }
        // line 20
        yield "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 21
        yield ($context["text_form"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"";
        // line 23
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">";
        // line 25
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 26
        yield ($context["tab_data"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 27
        yield ($context["tab_links"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 28
        yield ($context["tab_attribute"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 29
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 30
        yield ($context["tab_subscription"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 31
        yield ($context["tab_discount"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 32
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 33
        yield ($context["tab_reward"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 34
        yield ($context["tab_seo"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 35
        yield ($context["tab_design"] ?? null);
        yield "</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">";
        // line 36
        yield ($context["tab_report"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            yield "                  <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 42)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 42);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 42);
            yield "</a></li>
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
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "              </ul>
              <div class=\"tab-content\">
                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 47
            yield "                  <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 47)) {
                yield " active";
            }
            yield "\">
                    <div class=\"row mb-3 required\">
                      <label for=\"input-name-";
            // line 49
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_name"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 52
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
            yield "][name]\" value=\"";
            yield (((($_v0 = ($context["product_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["product_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52)] ?? null) : null), "name", [], "any", false, false, false, 52)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
            yield "\" class=\"form-control\"/>
                          ";
            // line 53
            if (($context["master_id"] ?? null)) {
                // line 54
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 56
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
                yield "][name]\" value=\"1\" id=\"input-variant-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 56)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56)] ?? null) : null), "name", [], "any", false, false, false, 56)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-name-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 56);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 60
            yield "                        </div>
                        <div id=\"error-name-";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-description-";
            // line 65
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[";
            // line 69
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            yield "][description]\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            yield "\" data-oc-toggle=\"ckeditor\" data-lang=\"";
            yield ($context["ckeditor"] ?? null);
            yield "\" class=\"w-100 position-relative\">";
            yield (((($_v3 = ($context["product_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v4 = ($context["product_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null), "description", [], "any", false, false, false, 69)) : (""));
            yield "</textarea>
                          </div>
                          ";
            // line 71
            if (($context["master_id"] ?? null)) {
                // line 72
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 74
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
                yield "][description]\" value=\"1\" id=\"input-variant-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 74)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74)] ?? null) : null), "description", [], "any", false, false, false, 74)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 74);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 78
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-product-ribbon\">
                          Product Ribbon
                      </label>
                      <div class=\"col-sm-10\">
                          <select name=\"product_description[";
            // line 86
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 86);
            yield "][product_ribbon]\"
                                  id=\"input-product-ribbon-";
            // line 87
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            yield "\"
                                  class=\"form-select\">

                            <option value=\"\">-- Select Ribbon --</option>

                            <option value=\"upcoming\"
                              ";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, (($_v6 = ($context["product_description"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 93)] ?? null) : null), "product_ribbon", [], "any", false, false, false, 93) == "upcoming")) {
                yield "selected";
            }
            yield ">
                              UPCOMING
                            </option>

                            <option value=\"available\"
                              ";
            // line 98
            if ((CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["product_description"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 98)] ?? null) : null), "product_ribbon", [], "any", false, false, false, 98) == "available")) {
                yield "selected";
            }
            yield ">
                              AVAILABLE
                            </option>

                            <option value=\"available_new\"
                              ";
            // line 103
            if ((CoreExtension::getAttribute($this->env, $this->source, (($_v8 = ($context["product_description"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 103)] ?? null) : null), "product_ribbon", [], "any", false, false, false, 103) == "available_new")) {
                yield "selected";
            }
            yield ">
                              AVAILABLE (NEW)
                            </option>

                            <option value=\"5_star_rating\"
                              ";
            // line 108
            if ((CoreExtension::getAttribute($this->env, $this->source, (($_v9 = ($context["product_description"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 108)] ?? null) : null), "product_ribbon", [], "any", false, false, false, 108) == "5_star_rating")) {
                yield "selected";
            }
            yield ">
                              5 STAR RATING
                            </option>

                            <option value=\"exchange_price\"
                              ";
            // line 113
            if ((CoreExtension::getAttribute($this->env, $this->source, (($_v10 = ($context["product_description"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 113)] ?? null) : null), "product_ribbon", [], "any", false, false, false, 113) == "exchange_price")) {
                yield "selected";
            }
            yield ">
                              EXCHANGE PRICE
                            </option>

                            <option value=\"new_arrival\"
                              ";
            // line 118
            if ((CoreExtension::getAttribute($this->env, $this->source, (($_v11 = ($context["product_description"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 118)] ?? null) : null), "product_ribbon", [], "any", false, false, false, 118) == "new_arrival")) {
                yield "selected";
            }
            yield ">
                              NEW ARRIVAL
                            </option>

                            <option value=\"limited\"
                              ";
            // line 123
            if ((CoreExtension::getAttribute($this->env, $this->source, (($_v12 = ($context["product_description"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 123)] ?? null) : null), "product_ribbon", [], "any", false, false, false, 123) == "limited")) {
                yield "selected";
            }
            yield ">
                              LIMITED
                            </option>

                            <option value=\"stock_out\"
                              ";
            // line 128
            if ((CoreExtension::getAttribute($this->env, $this->source, (($_v13 = ($context["product_description"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 128)] ?? null) : null), "product_ribbon", [], "any", false, false, false, 128) == "stock_out")) {
                yield "selected";
            }
            yield ">
                              STOCK OUT
                            </option>

                            <option value=\"export_only\"
                              ";
            // line 133
            if ((CoreExtension::getAttribute($this->env, $this->source, (($_v14 = ($context["product_description"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 133)] ?? null) : null), "product_ribbon", [], "any", false, false, false, 133) == "export_only")) {
                yield "selected";
            }
            yield ">
                              EXPORT ONLY
                            </option>

                            <option value=\"stock_limited\"
                              ";
            // line 138
            if ((CoreExtension::getAttribute($this->env, $this->source, (($_v15 = ($context["product_description"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 138)] ?? null) : null), "product_ribbon", [], "any", false, false, false, 138) == "stock_limited")) {
                yield "selected";
            }
            yield ">
                              STOCK LIMITED
                            </option>

                          </select>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label for=\"input-meta-title-";
            // line 146
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 146);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 149
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149);
            yield "][meta_title]\" value=\"";
            yield (((($_v16 = ($context["product_description"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v17 = ($context["product_description"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149)] ?? null) : null), "meta_title", [], "any", false, false, false, 149)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 149);
            yield "\" class=\"form-control\"/>
                          ";
            // line 150
            if (($context["master_id"] ?? null)) {
                // line 151
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 153
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
                yield "][meta_title]\" value=\"1\" id=\"input-variant-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v18 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 153)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153)] ?? null) : null), "meta_title", [], "any", false, false, false, 153)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-title-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 153);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 157
            yield "                        </div>
                        <div id=\"error-meta-title-";
            // line 158
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 158);
            yield "\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-description-";
            // line 162
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 162);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 165
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165);
            yield "\" class=\"form-control\">";
            yield (((($_v19 = ($context["product_description"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v20 = ($context["product_description"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 165)] ?? null) : null), "meta_description", [], "any", false, false, false, 165)) : (""));
            yield "</textarea>
                          ";
            // line 166
            if (($context["master_id"] ?? null)) {
                // line 167
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 169
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                yield "][meta_description]\" value=\"1\" id=\"input-variant-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v21 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 169)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169)] ?? null) : null), "meta_description", [], "any", false, false, false, 169)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-description-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 169);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 173
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-";
            // line 177
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 177);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[";
            // line 180
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180);
            yield "\" class=\"form-control\">";
            yield (((($_v22 = ($context["product_description"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v23 = ($context["product_description"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 180)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 180)) : (""));
            yield "</textarea>
                          ";
            // line 181
            if (($context["master_id"] ?? null)) {
                // line 182
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 184
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
                yield "][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v24 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 184)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 184)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-meta-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 184);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 188
            yield "                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-tag-";
            // line 192
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 192);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_tag"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[";
            // line 195
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195);
            yield "][tag]\" value=\"";
            yield (((($_v25 = ($context["product_description"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v26 = ($context["product_description"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195)] ?? null) : null), "tag", [], "any", false, false, false, 195)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_tag"] ?? null);
            yield "\" id=\"input-tag-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 195);
            yield "\" class=\"form-control\"/>
                          ";
            // line 196
            if (($context["master_id"] ?? null)) {
                // line 197
                yield "                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][";
                // line 199
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199);
                yield "][tag]\" value=\"1\" id=\"input-variant-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199);
                yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199);
                yield "\" class=\"form-check-input\"";
                if (CoreExtension::getAttribute($this->env, $this->source, (($_v27 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_description", [], "any", false, false, false, 199)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199)] ?? null) : null), "tag", [], "any", false, false, false, 199)) {
                    yield " checked";
                }
                yield "/> <label for=\"input-variant-tag-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 199);
                yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          ";
            }
            // line 203
            yield "                        </div>
                        <div class=\"form-text\">";
            // line 204
            yield ($context["help_tag"] ?? null);
            yield "</div>
                      </div>
                    </div>
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
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        yield "              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"";
        // line 212
        yield ($context["master_id"] ?? null);
        yield "\"/>
              <fieldset>
                <legend>";
        // line 214
        yield ($context["text_model"] ?? null);
        yield "</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">";
        // line 216
        yield ($context["entry_model"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"";
        // line 219
        yield ($context["model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\"/>
                      ";
        // line 220
        if (($context["master_id"] ?? null)) {
            // line 221
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"";
            // line 223
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "model", [], "any", false, false, false, 223)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 227
        yield "                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 232
        yield ($context["entry_product_code"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select id=\"input-code\" class=\"form-select\">
                        ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["identifiers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["identifier"]) {
            // line 237
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["identifier"], "code", [], "any", false, false, false, 237);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["identifier"], "code", [], "any", false, false, false, 237);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['identifier'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        yield "                      </select>
                      <input type=\"text\" value=\"\" placeholder=\"";
        // line 240
        yield ($context["entry_product_code"] ?? null);
        yield "\" id=\"input-value\" class=\"form-control w-75\"/>
                      <button type=\"button\" id=\"button-code\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button>
                    </div>
                    <div class=\"input-group\">
                      <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                        <table id=\"product-code\" class=\"table m-0\">
                          <tbody>
                            ";
        // line 247
        $context["code_row"] = 0;
        // line 248
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_codes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_code"]) {
            // line 249
            yield "                              <tr id=\"code-row-";
            yield ($context["code_row"] ?? null);
            yield "\">
                                <td style=\"width: 1px;\">";
            // line 250
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 250);
            yield "<input type=\"hidden\" name=\"product_code[";
            yield ($context["code_row"] ?? null);
            yield "][code]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "code", [], "any", false, false, false, 250);
            yield "\"/></td>
                                <td id=\"input-code-";
            // line 251
            yield ($context["code_row"] ?? null);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 251);
            yield "
                                  <div id=\"error-code-";
            // line 252
            yield ($context["code_row"] ?? null);
            yield "\" class=\"invalid-feedback\"></div>
                                  <input type=\"hidden\" name=\"product_code[";
            // line 253
            yield ($context["code_row"] ?? null);
            yield "][value]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_code"], "value", [], "any", false, false, false, 253);
            yield "\"></td>
                                <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                              </tr>
                              ";
            // line 256
            $context["code_row"] = (($context["code_row"] ?? null) + 1);
            // line 257
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_code'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        yield "                          </tbody>
                        </table>
                      </div>
                      ";
        // line 261
        if (($context["master_id"] ?? null)) {
            // line 262
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_code]\" value=\"1\" id=\"input-variant-code\" data-oc-toggle=\"switch\" data-oc-target=\"#input-code, #product-code\" class=\"form-check-input\"";
            // line 264
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_code", [], "any", false, false, false, 264)) {
                yield " checked";
            }
            yield "/>
                            <label for=\"input-variant-code\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 269
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 270
        yield ($context["help_product_code"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 275
        yield ($context["text_price"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">";
        // line 277
        yield ($context["entry_price"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"";
        // line 280
        yield ($context["price"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_price"] ?? null);
        yield "\" id=\"input-price\" class=\"form-control\"/>
                      ";
        // line 281
        if (($context["master_id"] ?? null)) {
            // line 282
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"";
            // line 284
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "price", [], "any", false, false, false, 284)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 288
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">";
        // line 292
        yield ($context["entry_tax_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">";
        // line 296
        yield ($context["text_none"] ?? null);
        yield "</option>
                        ";
        // line 297
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 298
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 298);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 298) == ($context["tax_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 298);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tax_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        yield "                      </select>
                      ";
        // line 301
        if (($context["master_id"] ?? null)) {
            // line 302
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"";
            // line 304
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "tax_class_id", [], "any", false, false, false, 304)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 308
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 313
        yield ($context["text_stock"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">";
        // line 315
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"";
        // line 317
        yield ($context["quantity"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">";
        // line 321
        yield ($context["entry_minimum"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"";
        // line 324
        yield ($context["minimum"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_minimum"] ?? null);
        yield "\" id=\"input-minimum\" class=\"form-control\"/>
                      ";
        // line 325
        if (($context["master_id"] ?? null)) {
            // line 326
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"";
            // line 328
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "minimum", [], "any", false, false, false, 328)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 332
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 333
        yield ($context["help_minimum"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 337
        yield ($context["entry_subtract"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"";
        // line 341
        if (($context["subtract"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 343
        if (($context["master_id"] ?? null)) {
            // line 344
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"";
            // line 346
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "subtract", [], "any", false, false, false, 346)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 350
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">";
        // line 354
        yield ($context["entry_stock_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        ";
        // line 358
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 359
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 359);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 359) == ($context["stock_status_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 359);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stock_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        yield "                      </select>
                      ";
        // line 362
        if (($context["master_id"] ?? null)) {
            // line 363
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"";
            // line 365
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "stock_status_id", [], "any", false, false, false, 365)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 369
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 370
        yield ($context["help_stock_status"] ?? null);
        yield "</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">";
        // line 374
        yield ($context["entry_location"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"";
        // line 377
        yield ($context["location"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_location"] ?? null);
        yield "\" id=\"input-location\" class=\"form-control\"/>
                      ";
        // line 378
        if (($context["master_id"] ?? null)) {
            // line 379
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"";
            // line 381
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "location", [], "any", false, false, false, 381)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 385
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">";
        // line 389
        yield ($context["entry_date_available"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"";
        // line 392
        yield ($context["date_available"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_available"] ?? null);
        yield "\" id=\"input-date-available\" class=\"form-control\"/>
                      ";
        // line 393
        if (($context["master_id"] ?? null)) {
            // line 394
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"";
            // line 396
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "date_available", [], "any", false, false, false, 396)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 400
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 405
        yield ($context["text_specification"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 407
        yield ($context["entry_shipping"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"";
        // line 411
        if (($context["shipping"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 413
        if (($context["master_id"] ?? null)) {
            // line 414
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"";
            // line 416
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "shipping", [], "any", false, false, false, 416)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 420
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">";
        // line 424
        yield ($context["entry_dimension"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 427
        yield ($context["length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_length"] ?? null);
        yield "\" id=\"input-length\" class=\"form-control\"/>
                      ";
        // line 428
        if (($context["master_id"] ?? null)) {
            // line 429
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"";
            // line 431
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "length", [], "any", false, false, false, 431)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 435
        yield "                      <input type=\"text\" name=\"width\" value=\"";
        yield ($context["width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-width\" class=\"form-control\"/>
                      ";
        // line 436
        if (($context["master_id"] ?? null)) {
            // line 437
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"";
            // line 439
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "width", [], "any", false, false, false, 439)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 443
        yield "                      <input type=\"text\" name=\"height\" value=\"";
        yield ($context["height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-height\" class=\"form-control\"/>
                      ";
        // line 444
        if (($context["master_id"] ?? null)) {
            // line 445
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"";
            // line 447
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "height", [], "any", false, false, false, 447)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 451
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">";
        // line 455
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        ";
        // line 459
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 460
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 460);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 460) == ($context["length_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 460);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 462
        yield "                      </select>
                      ";
        // line 463
        if (($context["master_id"] ?? null)) {
            // line 464
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"";
            // line 466
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "length_class_id", [], "any", false, false, false, 466)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 470
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">";
        // line 474
        yield ($context["entry_weight"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"";
        // line 477
        yield ($context["weight"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_weight"] ?? null);
        yield "\" id=\"input-weight\" class=\"form-control\"/>
                      ";
        // line 478
        if (($context["master_id"] ?? null)) {
            // line 479
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"";
            // line 481
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "weight", [], "any", false, false, false, 481)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 485
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">";
        // line 489
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        ";
        // line 493
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 494
            yield "                          <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 494);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 494) == ($context["weight_class_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 494);
            yield "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 496
        yield "                      </select>
                      ";
        // line 497
        if (($context["master_id"] ?? null)) {
            // line 498
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"";
            // line 500
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "weight_class_id", [], "any", false, false, false, 500)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 504
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">";
        // line 508
        yield ($context["entry_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 512
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
                      </div>
                      ";
        // line 514
        if (($context["master_id"] ?? null)) {
            // line 515
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"";
            // line 517
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "status", [], "any", false, false, false, 517)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 521
        yield "                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">";
        // line 525
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"sort_order\" value=\"";
        // line 528
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
                      ";
        // line 529
        if (($context["master_id"] ?? null)) {
            // line 530
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"";
            // line 532
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "sort_order", [], "any", false, false, false, 532)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 536
        yield "                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 543
        yield ($context["entry_manufacturer"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 546
        yield ($context["manufacturer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_manufacturer"] ?? null);
        yield "\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    ";
        // line 547
        if (($context["master_id"] ?? null)) {
            // line 548
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"";
            // line 550
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "manufacturer", [], "any", false, false, false, 550)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 554
        yield "                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 555
        yield ($context["manufacturer_id"] ?? null);
        yield "\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">";
        // line 557
        yield ($context["help_manufacturer"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 561
        yield ($context["entry_category"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 563
        yield ($context["entry_category"] ?? null);
        yield "\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 569
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 570
            yield "                            <tr id=\"product-category-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 570);
            yield "\">
                              <td>";
            // line 571
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 571);
            yield "<input type=\"hidden\" name=\"product_category[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 571);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 575
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 578
        if (($context["master_id"] ?? null)) {
            // line 579
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"";
            // line 581
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_category", [], "any", false, false, false, 581)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 585
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 586
        yield ($context["help_category"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 590
        yield ($context["entry_filter"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 592
        yield ($context["entry_filter"] ?? null);
        yield "\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 598
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 599
            yield "                            <tr id=\"product-filter-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 599);
            yield "\">
                              <td>";
            // line 600
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 600);
            yield "<input type=\"hidden\" name=\"product_filter[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 600);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 604
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 607
        if (($context["master_id"] ?? null)) {
            // line 608
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"";
            // line 610
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_filter", [], "any", false, false, false, 610)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 614
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 615
        yield ($context["help_filter"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 619
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      ";
        // line 623
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 624
            yield "                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"";
            // line 625
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 625);
            yield "\" id=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 625);
            yield "\" class=\"form-check-input\"";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 625), ($context["product_store"] ?? null))) {
                yield " checked";
            }
            yield "/> <label for=\"input-store-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 625);
            yield "\" class=\"form-check-label\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 625);
            yield "</label>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 628
        yield "                    </div>
                    ";
        // line 629
        if (($context["master_id"] ?? null)) {
            // line 630
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"";
            // line 632
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_store", [], "any", false, false, false, 632)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 636
        yield "                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 640
        yield ($context["entry_download"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 642
        yield ($context["entry_download"] ?? null);
        yield "\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 648
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 649
            yield "                            <tr id=\"product-download-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 649);
            yield "\">
                              <td>";
            // line 650
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 650);
            yield "<input type=\"hidden\" name=\"product_download[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 650);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_download'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 654
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 657
        if (($context["master_id"] ?? null)) {
            // line 658
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"";
            // line 660
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_download", [], "any", false, false, false, 660)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 664
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 665
        yield ($context["help_download"] ?? null);
        yield "</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 669
        yield ($context["entry_related"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 671
        yield ($context["entry_related"] ?? null);
        yield "\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          ";
        // line 677
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 678
            yield "                            <tr id=\"product-related-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 678);
            yield "\">
                              <td>";
            // line 679
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 679);
            yield "<input type=\"hidden\" name=\"product_related[]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 679);
            yield "\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_related'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 683
        yield "                        </tbody>
                      </table>
                    </div>
                    ";
        // line 686
        if (($context["master_id"] ?? null)) {
            // line 687
            yield "                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"";
            // line 689
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_related", [], "any", false, false, false, 689)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 693
        yield "                  </div>
                  <div class=\"form-text\">";
        // line 694
        yield ($context["help_related"] ?? null);
        yield "</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 703
        yield ($context["entry_attribute"] ?? null);
        yield "</th>
                      <th>";
        // line 704
        yield ($context["entry_text"] ?? null);
        yield "</th>
                      <th>";
        // line 705
        if (($context["master_id"] ?? null)) {
            // line 706
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"";
            // line 707
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_attribute", [], "any", false, false, false, 707)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 709
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 713
        $context["attribute_row"] = 0;
        // line 714
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 715
            yield "                      <tr id=\"attribute-row-";
            yield ($context["attribute_row"] ?? null);
            yield "\">
                        <td>
                          <input type=\"hidden\" name=\"product_attribute[";
            // line 717
            yield ($context["attribute_row"] ?? null);
            yield "][attribute_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 717);
            yield "\" id=\"input-attribute-id-";
            yield ($context["attribute_row"] ?? null);
            yield "\"/> <input type=\"text\" name=\"product_attribute[";
            yield ($context["attribute_row"] ?? null);
            yield "][name]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 717);
            yield "\" placeholder=\"";
            yield ($context["entry_attribute"] ?? null);
            yield "\" id=\"input-attribute-";
            yield ($context["attribute_row"] ?? null);
            yield "\" data-oc-target=\"autocomplete-attribute-";
            yield ($context["attribute_row"] ?? null);
            yield "\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <ul id=\"autocomplete-attribute-";
            // line 718
            yield ($context["attribute_row"] ?? null);
            yield "\" class=\"dropdown-menu\"></ul>
                        </td>

                        <td>";
            // line 721
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 722
                yield "                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 723
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 723);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 723);
                yield "\"/></div>
                              <textarea name=\"product_attribute[";
                // line 724
                yield ($context["attribute_row"] ?? null);
                yield "][product_attribute_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 724);
                yield "][text]\" rows=\"5\" placeholder=\"";
                yield ($context["entry_text"] ?? null);
                yield "\" id=\"input-text-";
                yield ($context["attribute_row"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 724);
                yield "\" class=\"form-control\">";
                yield (((($_v28 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 724)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 724)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v29 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 724)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 724)] ?? null) : null), "text", [], "any", false, false, false, 724)) : (""));
                yield "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 726
            yield "</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-";
            // line 727
            yield ($context["attribute_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 729
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 730
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_attribute'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 731
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"";
        // line 735
        yield ($context["button_attribute_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            ";
        // line 741
        if ( !($context["master_id"] ?? null)) {
            // line 742
            yield "              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">

                  ";
            // line 746
            $context["option_row"] = 0;
            // line 747
            yield "                  ";
            $context["option_value_row"] = 0;
            // line 748
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 749
                yield "
                    <fieldset id=\"option-row-";
                // line 750
                yield ($context["option_row"] ?? null);
                yield "\">
                      <legend>";
                // line 751
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 751);
                yield "</legend>
                      <input type=\"hidden\" name=\"product_option[";
                // line 752
                yield ($context["option_row"] ?? null);
                yield "][product_option_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 752);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][name]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 752);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][option_id]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 752);
                yield "\"/> <input type=\"hidden\" name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][type]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 752);
                yield "\"/>

                      <div class=\"row align-items-center\">
                        <div class=\"col-11\">

                          <div class=\"mb-3\">
                            <label for=\"input-required-";
                // line 758
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-label\">";
                yield ($context["entry_required"] ?? null);
                yield "</label> <select name=\"product_option[";
                yield ($context["option_row"] ?? null);
                yield "][required]\" id=\"input-required-";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-select\">
                              <option value=\"1\"";
                // line 759
                if (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 759)) {
                    yield " selected";
                }
                yield ">";
                yield ($context["text_enabled"] ?? null);
                yield "</option>
                              <option value=\"0\"";
                // line 760
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 760)) {
                    yield " selected";
                }
                yield ">";
                yield ($context["text_disabled"] ?? null);
                yield "</option>
                            </select>
                          </div>

                          ";
                // line 764
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 764) == "text")) {
                    // line 765
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 766
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"text\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 766);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 769
                yield "
                          ";
                // line 770
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 770) == "textarea")) {
                    // line 771
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 772
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <textarea name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" rows=\"5\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 772);
                    yield "</textarea>
                            </div>
                          ";
                }
                // line 775
                yield "
                          ";
                // line 776
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 776) == "file")) {
                    // line 777
                    yield "                            <div class=\"mb-3 d-none\">
                              <label for=\"input-option-";
                    // line 778
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"text\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 778);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 781
                yield "
                          ";
                // line 782
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 782) == "date")) {
                    // line 783
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 784
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"date\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 784);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 787
                yield "
                          ";
                // line 788
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 788) == "time")) {
                    // line 789
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 790
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"time\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 790);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 793
                yield "
                          ";
                // line 794
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 794) == "datetime")) {
                    // line 795
                    yield "                            <div class=\"mb-3\">
                              <label for=\"input-option-";
                    // line 796
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-label\">";
                    yield ($context["entry_option_value"] ?? null);
                    yield "</label> <input type=\"datetime-local\" name=\"product_option[";
                    yield ($context["option_row"] ?? null);
                    yield "][value]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 796);
                    yield "\" placeholder=\"";
                    yield ($context["entry_option_value"] ?? null);
                    yield "\" id=\"input-option-";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"form-control\"/>
                            </div>
                          ";
                }
                // line 799
                yield "
                          ";
                // line 800
                if (((((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 800) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 800) == "radio")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 800) == "checkbox")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 800) == "image"))) {
                    // line 801
                    yield "                            <div class=\"table-responsive\">
                              <table class=\"table table-bordered table-hover\">
                                <thead>
                                  <tr>
                                    <th>";
                    // line 805
                    yield ($context["entry_option_value"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 806
                    yield ($context["entry_quantity"] ?? null);
                    yield "</th>
                                    <th>";
                    // line 807
                    yield ($context["entry_subtract"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 808
                    yield ($context["entry_price"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 809
                    yield ($context["entry_points"] ?? null);
                    yield "</th>
                                    <th class=\"text-end\">";
                    // line 810
                    yield ($context["entry_weight"] ?? null);
                    yield "</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id=\"option-value-";
                    // line 814
                    yield ($context["option_row"] ?? null);
                    yield "\">
                                  ";
                    // line 815
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 815));
                    foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                        // line 816
                        yield "                                    <tr id=\"option-value-row-";
                        yield ($context["option_value_row"] ?? null);
                        yield "\">
                                      <td>";
                        // line 817
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "name", [], "any", false, false, false, 817);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 818
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][option_value_id]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 818);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][product_option_value_id]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 818);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 819
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 819);
                        yield " <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][quantity]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 819);
                        yield "\"/></td>
                                      <td>";
                        // line 820
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 820)) {
                            // line 821
                            yield "                                          ";
                            yield ($context["text_yes"] ?? null);
                            yield "
                                        ";
                        } else {
                            // line 823
                            yield "                                          ";
                            yield ($context["text_no"] ?? null);
                            yield "
                                        ";
                        }
                        // line 825
                        yield "                                        <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][subtract]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 825);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 826
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 826);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 826);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 827
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][price_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 827);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][price]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 827);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 828
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 828);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 828);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 829
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][points_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 829);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][points]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 829);
                        yield "\"/></td>
                                      <td class=\"text-end\">";
                        // line 830
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 830);
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 830);
                        yield "
                                        <input type=\"hidden\" name=\"product_option[";
                        // line 831
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][weight_prefix]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 831);
                        yield "\"/> <input type=\"hidden\" name=\"product_option[";
                        yield ($context["option_row"] ?? null);
                        yield "][product_option_value][";
                        yield ($context["option_value_row"] ?? null);
                        yield "][weight]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 831);
                        yield "\"/></td>
                                      <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                        // line 832
                        yield ($context["button_edit"] ?? null);
                        yield "\" data-option-row=\"";
                        yield ($context["option_row"] ?? null);
                        yield "\" data-option-value-row=\"";
                        yield ($context["option_value_row"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-";
                        yield ($context["option_value_row"] ?? null);
                        yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
                        yield ($context["button_remove"] ?? null);
                        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                    </tr>
                                    ";
                        // line 834
                        $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                        // line 835
                        yield "                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['product_option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 836
                    yield "                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=\"6\"></td>
                                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 840
                    yield ($context["button_option_value_add"] ?? null);
                    yield "\" data-option-row=\"";
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                                  </tr>
                                </tfoot>
                              </table>
                              <select id=\"product-option-values-";
                    // line 844
                    yield ($context["option_row"] ?? null);
                    yield "\" class=\"d-none\">
                                ";
                    // line 845
                    if ((($_v30 = ($context["option_values"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 845)] ?? null) : null)) {
                        // line 846
                        yield "                                  ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((($_v31 = ($context["option_values"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 846)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 847
                            yield "                                    <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 847);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 847);
                            yield "</option>
                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 849
                        yield "                                ";
                    }
                    // line 850
                    yield "                              </select>
                            </div>
                          ";
                }
                // line 853
                yield "                        </div>

                        <div class=\"col\">
                          <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\" title=\"";
                // line 856
                yield ($context["button_remove"] ?? null);
                yield "\" onclick=\"\$('#option-row-";
                yield ($context["option_row"] ?? null);
                yield "').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                        </div>
                      </div>
                    </fieldset>
                    ";
                // line 860
                $context["option_row"] = (($context["option_row"] ?? null) + 1);
                // line 861
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product_option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 862
            yield "                </div>
                <fieldset>
                  <legend class=\"float-none\">";
            // line 864
            yield ($context["text_option_add"] ?? null);
            yield "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">";
            // line 866
            yield ($context["entry_option"] ?? null);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
            // line 868
            yield ($context["entry_option"] ?? null);
            yield "\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">";
            // line 870
            yield ($context["help_option"] ?? null);
            yield "</div>
                    </div>
                  </div>
                </fieldset>
              </div>
            ";
        } else {
            // line 876
            yield "              <div id=\"tab-option\" class=\"tab-pane\">
                ";
            // line 877
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 878
                yield "                  <fieldset>
                    <legend class=\"float-none\">";
                // line 879
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 879);
                yield "</legend>

                    ";
                // line 881
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 881) == "select")) {
                    // line 882
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 882)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 883
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 883);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[";
                    // line 886
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 886);
                    yield "]\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 886);
                    yield "\" class=\"form-select\">
                              <option value=\"\">";
                    // line 887
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                              ";
                    // line 888
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 888));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 889
                        yield "                                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 889);
                        yield "\"";
                        if (((($_v32 = ($context["variant"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 889)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 889) == (($_v33 = ($context["variant"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 889)] ?? null) : null)))) {
                            yield " selected";
                        }
                        yield ">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 889);
                        yield "
                                  ";
                        // line 890
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 890)) {
                            // line 891
                            yield "                                    (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 891);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 891);
                            yield ")
                                  ";
                        }
                        // line 892
                        yield "</option>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 894
                    yield "                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 897
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 897);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 897);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 897);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v34 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 897)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 897)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 897);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 901
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 901);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 905
                yield "
                    ";
                // line 906
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 906) == "radio")) {
                    // line 907
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 907)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 908
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 908);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 911
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 911);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 912
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 912));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 913
                        yield "                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[";
                        // line 914
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 914);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 914);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 914);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v35 = ($context["variant"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 914)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 914) == (($_v36 = ($context["variant"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 914)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> 
\t\t\t\t\t\t\t\t                  <label for=\"input-option-value-";
                        // line 915
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 915);
                        yield "\" class=\"form-check-label\">
                                    ";
                        // line 916
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 916)) {
                            // line 917
                            yield "                                      <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 917);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 917);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 917)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 917);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 917);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 918
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 918);
                        yield "
                                    ";
                        // line 919
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 919)) {
                            // line 920
                            yield "                                      (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 920);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 920);
                            yield ")
                                    ";
                        }
                        // line 921
                        yield "</label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 924
                    yield "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 927
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 927);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 927);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 927);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v37 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 927)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 927)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 927);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 931
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 931);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 935
                yield "
                    ";
                // line 936
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 936) == "checkbox")) {
                    // line 937
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 937)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 938
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 938);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-";
                    // line 941
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 941);
                    yield "\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              ";
                    // line 942
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 942));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 943
                        yield "                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[";
                        // line 944
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 944);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 944);
                        yield "\" id=\"input-option-value-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 944);
                        yield "\" class=\"form-check-input\"";
                        if (((($_v38 = ($context["variant"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 944)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 944), (($_v39 = ($context["variant"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 944)] ?? null) : null)))) {
                            yield " checked";
                        }
                        yield "/> 
                                  <label for=\"input-option-value-";
                        // line 945
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 945);
                        yield "\" class=\"form-check-label\">
                                    ";
                        // line 946
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 946)) {
                            yield " 
                                      <img src=\"";
                            // line 947
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 947);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 947);
                            yield " ";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 947)) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 947);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 947);
                                yield " ";
                            }
                            yield "\" class=\"img-thumbnail\"/>";
                        }
                        // line 948
                        yield "                                    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 948);
                        yield "
                                    ";
                        // line 949
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 949)) {
                            // line 950
                            yield "                                      (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 950);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 950);
                            yield ")
                                    ";
                        }
                        // line 951
                        yield "</label>
                                </div>
                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 954
                    yield "                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 957
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 957);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 957);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 957);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v40 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 957)) && is_array($_v40) || $_v40 instanceof ArrayAccess ? ($_v40[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 957)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 957);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 961
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 961);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 965
                yield "
                    ";
                // line 966
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 966) == "text")) {
                    // line 967
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 967)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 968
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 968);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 968);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[";
                    // line 971
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 971);
                    yield "]\" value=\"";
                    yield (((($_v41 = ($context["variant"] ?? null)) && is_array($_v41) || $_v41 instanceof ArrayAccess ? ($_v41[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 971)] ?? null) : null)) ? ((($_v42 = ($context["variant"] ?? null)) && is_array($_v42) || $_v42 instanceof ArrayAccess ? ($_v42[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 971)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 971)));
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 971);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 971);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 974
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 974);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 974);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 974);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v43 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 974)) && is_array($_v43) || $_v43 instanceof ArrayAccess ? ($_v43[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 974)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 974);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 978
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 978);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 982
                yield "
                    ";
                // line 983
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 983) == "textarea")) {
                    // line 984
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 984)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 985
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 985);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 985);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[";
                    // line 988
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 988);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 988);
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 988);
                    yield "\" class=\"form-control\">";
                    yield (((($_v44 = ($context["variant"] ?? null)) && is_array($_v44) || $_v44 instanceof ArrayAccess ? ($_v44[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 988)] ?? null) : null)) ? ((($_v45 = ($context["variant"] ?? null)) && is_array($_v45) || $_v45 instanceof ArrayAccess ? ($_v45[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 988)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 988)));
                    yield "</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 991
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 991);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 991);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 991);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v46 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 991)) && is_array($_v46) || $_v46 instanceof ArrayAccess ? ($_v46[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 991)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 991);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 995
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 995);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 999
                yield "
                    ";
                // line 1000
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1000) == "file")) {
                    // line 1001
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1001)) {
                        yield " required";
                    }
                    yield "\">
                        <label class=\"col-sm-2 col-form-label\">";
                    // line 1002
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1002);
                    yield "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                    // line 1005
                    yield ($context["upload"] ?? null);
                    yield "\" id=\"button-upload-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1005);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1005);
                    yield "\" data-oc-size-max=\"";
                    yield ($context["config_file_max_size"] ?? null);
                    yield "\" data-oc-size-error=\"";
                    yield ($context["error_upload_size"] ?? null);
                    yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
                            <input type=\"text\" name=\"variant[";
                    // line 1006
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1006);
                    yield "]\" value=\"";
                    yield (((($_v47 = ($context["variant"] ?? null)) && is_array($_v47) || $_v47 instanceof ArrayAccess ? ($_v47[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1006)] ?? null) : null)) ? ((($_v48 = ($context["variant"] ?? null)) && is_array($_v48) || $_v48 instanceof ArrayAccess ? ($_v48[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1006)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1006)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1006);
                    yield "\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-";
                    // line 1007
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1007);
                    yield "\"";
                    if ( !(($_v49 = ($context["variant"] ?? null)) && is_array($_v49) || $_v49 instanceof ArrayAccess ? ($_v49[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1007)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> ";
                    yield ($context["button_download"] ?? null);
                    yield "</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 1008
                    yield ($context["button_clear"] ?? null);
                    yield "\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008);
                    yield "\"";
                    if ( !(($_v50 = ($context["variant"] ?? null)) && is_array($_v50) || $_v50 instanceof ArrayAccess ? ($_v50[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1008)] ?? null) : null)) {
                        yield " disabled";
                    }
                    yield " class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1011
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v51 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1011)) && is_array($_v51) || $_v51 instanceof ArrayAccess ? ($_v51[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1011);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1015
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1015);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1019
                yield "
                    ";
                // line 1020
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1020) == "date")) {
                    // line 1021
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1021)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1022
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1022);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1022);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"date\" name=\"variant[";
                    // line 1025
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1025);
                    yield "]\" value=\"";
                    yield (((($_v52 = ($context["variant"] ?? null)) && is_array($_v52) || $_v52 instanceof ArrayAccess ? ($_v52[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1025)] ?? null) : null)) ? ((($_v53 = ($context["variant"] ?? null)) && is_array($_v53) || $_v53 instanceof ArrayAccess ? ($_v53[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1025)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1025)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1025);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1028
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v54 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1028)) && is_array($_v54) || $_v54 instanceof ArrayAccess ? ($_v54[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1028);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1032
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1032);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1036
                yield "
                    ";
                // line 1037
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1037) == "time")) {
                    // line 1038
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1038)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1039
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1039);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1039);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-";
                    // line 1041
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1041);
                    yield "\" class=\"input-group\">
                            <input type=\"time\" name=\"variant[";
                    // line 1042
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1042);
                    yield "]\" value=\"";
                    yield (((($_v55 = ($context["variant"] ?? null)) && is_array($_v55) || $_v55 instanceof ArrayAccess ? ($_v55[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1042)] ?? null) : null)) ? ((($_v56 = ($context["variant"] ?? null)) && is_array($_v56) || $_v56 instanceof ArrayAccess ? ($_v56[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1042)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1042)));
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1045
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1045);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1045);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1045);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v57 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1045)) && is_array($_v57) || $_v57 instanceof ArrayAccess ? ($_v57[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1045)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1045);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1049
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1049);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1053
                yield "
                    ";
                // line 1054
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 1054) == "datetime")) {
                    // line 1055
                    yield "                      <div class=\"row mb-3";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 1055)) {
                        yield " required";
                    }
                    yield "\">
                        <label for=\"input-option-";
                    // line 1056
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1056);
                    yield "\" class=\"col-sm-2 col-form-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 1056);
                    yield "</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"datetime-local\" name=\"variant[";
                    // line 1059
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1059);
                    yield "]\" value=\"";
                    yield (((($_v58 = ($context["variant"] ?? null)) && is_array($_v58) || $_v58 instanceof ArrayAccess ? ($_v58[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1059)] ?? null) : null)) ? ((($_v59 = ($context["variant"] ?? null)) && is_array($_v59) || $_v59 instanceof ArrayAccess ? ($_v59[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1059)] ?? null) : null)) : (CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 1059)));
                    yield "\" id=\"input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1059);
                    yield "\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][";
                    // line 1062
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1062);
                    yield "]\" value=\"1\" id=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1062);
                    yield "\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1062);
                    yield "\" class=\"form-check-input\"";
                    if ((($_v60 = CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "variant", [], "any", false, false, false, 1062)) && is_array($_v60) || $_v60 instanceof ArrayAccess ? ($_v60[CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1062)] ?? null) : null)) {
                        yield " checked";
                    }
                    yield "/> <label for=\"input-variant-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1062);
                    yield "\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-";
                    // line 1066
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 1066);
                    yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
                }
                // line 1070
                yield "                  </fieldset>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1072
            yield "              </div>
            ";
        }
        // line 1074
        yield "            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1079
        yield ($context["entry_subscription"] ?? null);
        yield "</th>
                      <th>";
        // line 1080
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                      <th>";
        // line 1081
        yield ($context["entry_trial_price"] ?? null);
        yield "</th>
                      <th>";
        // line 1082
        yield ($context["entry_price"] ?? null);
        yield "</th>
                      <th>
                        ";
        // line 1084
        if (($context["master_id"] ?? null)) {
            // line 1085
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"";
            // line 1086
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_subscription", [], "any", false, false, false, 1086)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1088
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1092
        $context["subscription_row"] = 0;
        // line 1093
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_subscriptions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_subscription"]) {
            // line 1094
            yield "                      <tr id=\"subscription-row-";
            yield ($context["subscription_row"] ?? null);
            yield "\">
                        <td><select name=\"product_subscription[";
            // line 1095
            yield ($context["subscription_row"] ?? null);
            yield "][subscription_plan_id]\" class=\"form-select\">
                            ";
            // line 1096
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
                // line 1097
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1097);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1097) == CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "subscription_plan_id", [], "any", false, false, false, 1097))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1097);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1099
            yield "                          </select></td>
                        <td><select name=\"product_subscription[";
            // line 1100
            yield ($context["subscription_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1102
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1102);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1102) == CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "customer_group_id", [], "any", false, false, false, 1102))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1102);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1104
            yield "                          </select></td>
                        <td><input type=\"text\" name=\"product_subscription[";
            // line 1105
            yield ($context["subscription_row"] ?? null);
            yield "][trial_price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "trial_price", [], "any", false, false, false, 1105);
            yield "\" placeholder=\"";
            yield ($context["entry_trial_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><input type=\"text\" name=\"product_subscription[";
            // line 1106
            yield ($context["subscription_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_subscription"], "price", [], "any", false, false, false, 1106);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-";
            // line 1107
            yield ($context["subscription_row"] ?? null);
            yield "').remove()\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1109
            $context["subscription_row"] = (($context["subscription_row"] ?? null) + 1);
            // line 1110
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_subscription'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1111
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1115
        yield ($context["button_subscription_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1126
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1127
        yield ($context["entry_quantity"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1128
        yield ($context["entry_priority"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1129
        yield ($context["entry_price"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1130
        yield ($context["entry_type"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1131
        yield ($context["entry_special"] ?? null);
        yield "</th>
                      <th>";
        // line 1132
        yield ($context["entry_date_start"] ?? null);
        yield "</th>
                      <th>";
        // line 1133
        yield ($context["entry_date_end"] ?? null);
        yield "</th>
                      <th class=\"text-end\">";
        // line 1134
        if (($context["master_id"] ?? null)) {
            // line 1135
            yield "                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"";
            // line 1136
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_discount", [], "any", false, false, false, 1136)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1138
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1142
        $context["discount_row"] = 0;
        // line 1143
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 1144
            yield "                      <tr id=\"discount-row-";
            yield ($context["discount_row"] ?? null);
            yield "\">
                        <td><select name=\"product_discount[";
            // line 1145
            yield ($context["discount_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-select\">
                            ";
            // line 1146
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1147
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1147);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1147) == CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 1147))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1147);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1149
            yield "                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1150
            yield ($context["discount_row"] ?? null);
            yield "][quantity]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 1150);
            yield "\" placeholder=\"";
            yield ($context["entry_quantity"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1151
            yield ($context["discount_row"] ?? null);
            yield "][priority]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 1151);
            yield "\" placeholder=\"";
            yield ($context["entry_priority"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[";
            // line 1152
            yield ($context["discount_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 1152);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><select name=\"product_discount[";
            // line 1153
            yield ($context["discount_row"] ?? null);
            yield "][type]\" class=\"form-select\">
                            <option value=\"F\"";
            // line 1154
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1154) == "F")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_fixed"] ?? null);
            yield "</option>
                            <option value=\"S\"";
            // line 1155
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1155) == "S")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_subtract"] ?? null);
            yield "</option>
                            <option value=\"P\"";
            // line 1156
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "type", [], "any", false, false, false, 1156) == "P")) {
                yield " selected";
            }
            yield ">";
            yield ($context["text_percentage"] ?? null);
            yield "</option>
                          </select></td>
                        <td><div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"product_discount[";
            // line 1159
            yield ($context["discount_row"] ?? null);
            yield "][special]\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"product_discount[";
            // line 1160
            yield ($context["discount_row"] ?? null);
            yield "][special]\" value=\"1\" class=\"form-check-input\"";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "special", [], "any", false, false, false, 1160)) {
                yield " checked";
            }
            yield "/>
                          </div></td>
                        <td><input type=\"date\" name=\"product_discount[";
            // line 1162
            yield ($context["discount_row"] ?? null);
            yield "][date_start]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 1162);
            yield "\" placeholder=\"";
            yield ($context["entry_date_start"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td><input type=\"date\" name=\"product_discount[";
            // line 1163
            yield ($context["discount_row"] ?? null);
            yield "][date_end]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 1163);
            yield "\" placeholder=\"";
            yield ($context["entry_date_end"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-";
            // line 1164
            yield ($context["discount_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1166
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 1167
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_discount'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1168
        yield "                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"8\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1172
        yield ($context["button_discount_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1180
        yield ($context["text_image"] ?? null);
        yield "</legend>
                <div id=\"image\" class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"";
        // line 1182
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"image\" value=\"";
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1184
        yield ($context["button_edit"] ?? null);
        yield "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1185
        yield ($context["button_clear"] ?? null);
        yield "</button>
                    ";
        // line 1186
        if (($context["master_id"] ?? null)) {
            // line 1187
            yield "                      <div class=\"mx-auto w-25\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"";
            // line 1189
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "image", [], "any", false, false, false, 1189)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    ";
        }
        // line 1193
        yield "                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1197
        yield ($context["text_image_additional"] ?? null);
        yield "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>";
        // line 1202
        yield ($context["entry_image"] ?? null);
        yield "</th>
                        <th>";
        // line 1203
        yield ($context["entry_sort_order"] ?? null);
        yield "</th>
                        <th class=\"text-end\">
                          ";
        // line 1205
        if (($context["master_id"] ?? null)) {
            // line 1206
            yield "                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"";
            // line 1207
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_image", [], "any", false, false, false, 1207)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          ";
        }
        // line 1209
        yield "</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1213
        $context["image_row"] = 0;
        // line 1214
        yield "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1215
            yield "                        <tr id=\"product-image-row-";
            yield ($context["image_row"] ?? null);
            yield "\">
                          <td>
                            <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                              <img src=\"";
            // line 1218
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1218);
            yield "\" alt=\"\" title=\"\" id=\"product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[";
            yield ($context["image_row"] ?? null);
            yield "][image]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1218);
            yield "\" id=\"input-product-image-";
            yield ($context["image_row"] ?? null);
            yield "\"/>
                              <div class=\"d-grid\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-";
            // line 1220
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
            yield ($context["button_edit"] ?? null);
            yield "</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-";
            // line 1221
            yield ($context["image_row"] ?? null);
            yield "\" data-oc-thumb=\"#product-image-";
            yield ($context["image_row"] ?? null);
            yield "\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
            yield ($context["button_clear"] ?? null);
            yield "</button>
                              </div>
                            </div>
                          </td>
                          <td><input type=\"text\" name=\"product_image[";
            // line 1225
            yield ($context["image_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1225);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-";
            // line 1226
            yield ($context["image_row"] ?? null);
            yield "').remove();\" data-bs-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        ";
            // line 1228
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1229
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1230
        yield "                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1234
        yield ($context["button_image_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1244
        yield ($context["text_reward"] ?? null);
        yield "</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">";
        // line 1246
        yield ($context["entry_points"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"";
        // line 1249
        yield ($context["points"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_points"] ?? null);
        yield "\" id=\"input-points\" class=\"form-control\"/>
                      ";
        // line 1250
        if (($context["master_id"] ?? null)) {
            // line 1251
            yield "                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"";
            // line 1253
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "points", [], "any", false, false, false, 1253)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      ";
        }
        // line 1257
        yield "                    </div>
                    <div class=\"form-text\">";
        // line 1258
        yield ($context["help_points"] ?? null);
        yield "</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1263
        yield ($context["text_points"] ?? null);
        yield "</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>";
        // line 1268
        yield ($context["entry_customer_group"] ?? null);
        yield "</th>
                        <th class=\"text-end\">";
        // line 1269
        yield ($context["entry_reward"] ?? null);
        yield "&nbsp;&nbsp;";
        if (($context["master_id"] ?? null)) {
            // line 1270
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"";
            // line 1271
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_reward", [], "any", false, false, false, 1271)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                          </div>
                          ";
        }
        // line 1273
        yield "</th>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 1277
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1278
            yield "                        <tr>
                          <td>";
            // line 1279
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1279);
            yield "</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[";
            // line 1280
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1280);
            yield "][points]\" value=\"";
            yield (((($_v61 = ($context["product_reward"] ?? null)) && is_array($_v61) || $_v61 instanceof ArrayAccess ? ($_v61[CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1280)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v62 = ($context["product_reward"] ?? null)) && is_array($_v62) || $_v62 instanceof ArrayAccess ? ($_v62[CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1280)] ?? null) : null), "points", [], "any", false, false, false, 1280)) : (""));
            yield "\" class=\"form-control\"/></td>
                        </tr>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1283
        yield "                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> ";
        // line 1290
        yield ($context["text_keyword"] ?? null);
        yield "</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1295
        yield ($context["entry_store"] ?? null);
        yield "</th>
                      <th>";
        // line 1296
        yield ($context["entry_keyword"] ?? null);
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1300
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1301
            yield "                      <tr>
                        <td>";
            // line 1302
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1302);
            yield "</td>
                        <td>
                          ";
            // line 1304
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1305
                yield "                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"";
                // line 1306
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1306);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1306);
                yield "\"/></div>
                              <input type=\"text\" name=\"product_seo_url[";
                // line 1307
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1307);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1307);
                yield "]\" value=\"";
                if ((($_v63 = (($_v64 = ($context["product_seo_url"] ?? null)) && is_array($_v64) || $_v64 instanceof ArrayAccess ? ($_v64[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1307)] ?? null) : null)) && is_array($_v63) || $_v63 instanceof ArrayAccess ? ($_v63[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1307)] ?? null) : null)) {
                    yield (($_v65 = (($_v66 = ($context["product_seo_url"] ?? null)) && is_array($_v66) || $_v66 instanceof ArrayAccess ? ($_v66[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1307)] ?? null) : null)) && is_array($_v65) || $_v65 instanceof ArrayAccess ? ($_v65[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1307)] ?? null) : null);
                }
                yield "\" id=\"input-keyword-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1307);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1307);
                yield "\" placeholder=\"";
                yield ($context["entry_keyword"] ?? null);
                yield "\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-";
                // line 1309
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1309);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1309);
                yield "\" class=\"invalid-feedback\"></div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1310
            yield "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1313
        yield "                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>";
        // line 1323
        yield ($context["entry_store"] ?? null);
        yield "</th>
                      <th>";
        // line 1324
        yield ($context["entry_layout"] ?? null);
        if (($context["master_id"] ?? null)) {
            // line 1325
            yield "                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"";
            // line 1326
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["override"] ?? null), "product_layout", [], "any", false, false, false, 1326)) {
                yield " checked";
            }
            yield "/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        ";
        }
        // line 1328
        yield "</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1332
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1333
            yield "                      <tr>
                        <td>";
            // line 1334
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1334);
            yield "</td>
                        <td><select name=\"product_layout[";
            // line 1335
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1335);
            yield "]\" class=\"form-select\">
                            <option value=\"\"></option>
                            ";
            // line 1337
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1338
                yield "                              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1338);
                yield "\"";
                if (((($_v67 = ($context["product_layout"] ?? null)) && is_array($_v67) || $_v67 instanceof ArrayAccess ? ($_v67[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1338)] ?? null) : null) && ((($_v68 = ($context["product_layout"] ?? null)) && is_array($_v68) || $_v68 instanceof ArrayAccess ? ($_v68[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1338)] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1338)))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1338);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1340
            yield "                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1343
        yield "                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>";
        // line 1350
        yield ($context["text_report"] ?? null);
        yield "</legend>
                <div id=\"report\">";
        // line 1351
        yield ($context["report"] ?? null);
        yield "</div>
              </fieldset>
            </div>

          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 1356
        yield ($context["product_id"] ?? null);
        yield "\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '";
        // line 1364
        yield ($context["ckeditor"] ?? null);
        yield "'
});

var code_row = ";
        // line 1367
        yield ($context["code_row"] ?? null);
        yield ";

\$('#button-code').on('click', function() {
    var html = '';

    let code = \$('#input-code').val();
    let value = \$('#input-value').val();

    html += '<tr id=\"code-row-' + code_row + '\">';
    html += '  <td style=\"width: 1px;\">' + code + '<input type=\"hidden\" name=\"product_code[' + code_row + '][code]\" value=\"' + code + '\"/></td>';
    html += '  <td>' + value + '<div id=\"error-code-' + code_row + '\" class=\"invalid-feedback\"></div><input type=\"hidden\" name=\"product_code[' + code_row + '][value]\" value=\"' + value + '\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-code').append(html);

    code_row++;
});

\$('#product-code').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token=";
        // line 1394
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '";
        // line 1399
        yield ($context["text_none"] ?? null);
        yield "'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token=";
        // line 1421
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token=";
        // line 1455
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token=";
        // line 1489
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token=";
        // line 1523
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function(attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token=";
        // line 1557
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-attribute-' + attribute_row).val(decodeHTMLEntities(item['label']));
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = ";
        // line 1577
        yield ($context["attribute_row"] ?? null);
        yield ";

\$('#product-attribute tr').each(function(index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function() {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td>';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1586
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_attribute"] ?? null), "js");
        yield "\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td>';
  ";
        // line 1591
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1592
            yield "    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"";
            // line 1593
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 1593);
            yield "\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1593), "js");
            yield "\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            // line 1594
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1594);
            yield "][text]\" rows=\"5\" placeholder=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_text"] ?? null), "js");
            yield "\" id=\"input-text-' + attribute_row + '-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1594);
            yield "\" class=\"form-control\"></textarea>';
    html += '</div>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1597
        yield "    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1598
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

";
        // line 1608
        if ( !($context["master_id"] ?? null)) {
            // line 1609
            yield "var option_row = ";
            yield ($context["option_row"] ?? null);
            yield ";

\$('#input-option').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token=";
            // line 1614
            yield ($context["user_token"] ?? null);
            yield "&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + '</legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + decodeHTMLEntities(item['label']) + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row align-items-center\">';
        html += '    <div class=\"col-11\">';

        html += '      <div class=\"mb-3\">';
        html += '        <label for=\"input-required-' + option_row + '\" class=\"form-label\">";
            // line 1641
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_required"] ?? null), "js");
            yield "</label>';
        html += '\t       <select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t         <option value=\"1\">";
            // line 1643
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '\t         <option value=\"0\">";
            // line 1644
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
        html += '\t       </select>';
        html += '      </div>';

        if (item['type'] == 'text') {
            html += '  <div class=\"mb-3\">';
            html += '     <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1650
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '     <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1651
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '\t </div>';
        }

        if (item['type'] == 'textarea') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1657
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
            // line 1658
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea>';
            html += '\t </div>';
        }

        if (item['type'] == 'file') {
            html += '  <div class=\"mb-3 d-none\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1664
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1665
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'date') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1671
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"date\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1672
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'time') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1678
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"time\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1679
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">";
            // line 1685
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
            html += '    <input type=\"datetime-local\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
            // line 1686
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td>";
            // line 1695
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1696
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "</td>';
            html += '        <td>";
            // line 1697
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subtract"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1698
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1699
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "</td>';
            html += '        <td class=\"text-end\">";
            // line 1700
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody id=\"option-value-' + option_row + '\"></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1708
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_option_value_add"] ?? null), "js");
            yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '<select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '</select>';
        }

        html += '\t </div>';
        html += '\t <div class=\"col\">';
        html += '    <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
        html += '  </div>';
        html += '</fieldset>';

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = ";
            // line 1735
            yield ($context["option_value_row"] ?? null);
            yield ";

\$('#option').on('click', '.btn-primary', function() {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> ";
            // line 1752
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_option_value"] ?? null), "js");
            yield "</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">";
            // line 1756
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_option_value"] ?? null), "js");
            yield "</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">";
            // line 1773
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"";
            // line 1774
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
            yield "\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">";
            // line 1777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_subtract"] ?? null), "js");
            yield "</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>";
            // line 1781
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '      \t <option value=\"0\">";
            // line 1782
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
    } else {
        html += '      \t <option value=\"1\">";
            // line 1784
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "</option>';
        html += '      \t <option value=\"0\" selected>";
            // line 1785
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">";
            // line 1791
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"";
            // line 1808
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
            yield "\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">";
            // line 1812
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"";
            // line 1829
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_points"] ?? null), "js");
            yield "\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">";
            // line 1833
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"";
            // line 1850
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_weight"] ?? null), "js");
            yield "\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"modal-footer\">';
    html += '\t       <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">";
            // line 1855
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_save"] ?? null), "js");
            yield "</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_cancel"] ?? null), "js");
            yield "</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function() {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td>' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td>' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '";
            // line 1869
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_yes"] ?? null), "js");
            yield "' : '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_no"] ?? null), "js");
            yield "') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
            // line 1873
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
            yield "\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
            yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
";
        }
        // line 1888
        yield "
var discount_row = ";
        // line 1889
        yield ($context["discount_row"] ?? null);
        yield ";

\$('#button-discount').on('click', function() {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1894
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1895
            yield "    html += '    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1895);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1895), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1897
        yield "    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"1\" placeholder=\"";
        // line 1898
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_quantity"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1899
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_priority"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1900
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td><select name=\"product_discount[' + discount_row + '][type]\" class=\"form-select\">';
    html += '    <option value=\"F\">";
        // line 1902
        yield ($context["text_fixed"] ?? null);
        yield "</option>';
    html += '    <option value=\"S\">";
        // line 1903
        yield ($context["text_subtract"] ?? null);
        yield "</option>';
    html += '    <option value=\"P\">";
        // line 1904
        yield ($context["text_percentage"] ?? null);
        yield "</option>';
    html += '  </select></td>';
    html += '  <td><div class=\"form-check form-switch form-switch-lg\">';
    html += '    <input type=\"hidden\" name=\"product_discount[' + discount_row + '][special]\" value=\"0\"/>';
    html += '    <input type=\"checkbox\" name=\"product_discount[' + discount_row + '][special]\" value=\"1\" class=\"form-check-input\"/>';
    html += '  </div></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1910
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_start"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1911
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_date_end"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1912
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var image_row = ";
        // line 1920
        yield ($context["image_row"] ?? null);
        yield ";

\$('#button-image').on('click', function() {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"";
        // line 1925
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["placeholder"] ?? null), "js");
        yield "\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 1927
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_edit"] ?? null), "js");
        yield "</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 1928
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_clear"] ?? null), "js");
        yield "</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"";
        // line 1931
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_sort_order"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1932
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = ";
        // line 1940
        yield ($context["subscription_row"] ?? null);
        yield ";

\$('#button-subscription').on('click', function() {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  ";
        // line 1945
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["subscription_plans"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription_plan"]) {
            // line 1946
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "subscription_plan_id", [], "any", false, false, false, 1946);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subscription_plan"], "name", [], "any", false, false, false, 1946), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['subscription_plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1948
        yield "    html += '  </select></td>';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  ";
        // line 1950
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1951
            yield "    html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1951);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1951), "js");
            yield "</option>';
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1953
        yield "    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"";
        // line 1954
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_trial_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"";
        // line 1955
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["entry_price"] ?? null), "js");
        yield "\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"";
        // line 1956
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["button_remove"] ?? null), "js");
        yield "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

";
        // line 1964
        if (($context["master_id"] ?? null)) {
            // line 1965
            yield "// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function(e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function(i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function() {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function(e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
";
        }
        // line 2031
        yield "
\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
";
        // line 2038
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
        return "wadmin/view/template/catalog/product_form.twig";
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
        return array (  4950 => 2038,  4941 => 2031,  4873 => 1965,  4871 => 1964,  4860 => 1956,  4856 => 1955,  4852 => 1954,  4849 => 1953,  4838 => 1951,  4834 => 1950,  4830 => 1948,  4819 => 1946,  4815 => 1945,  4807 => 1940,  4796 => 1932,  4792 => 1931,  4786 => 1928,  4782 => 1927,  4775 => 1925,  4767 => 1920,  4756 => 1912,  4752 => 1911,  4748 => 1910,  4739 => 1904,  4735 => 1903,  4731 => 1902,  4726 => 1900,  4722 => 1899,  4718 => 1898,  4715 => 1897,  4704 => 1895,  4700 => 1894,  4692 => 1889,  4689 => 1888,  4669 => 1873,  4660 => 1869,  4641 => 1855,  4633 => 1850,  4613 => 1833,  4606 => 1829,  4586 => 1812,  4579 => 1808,  4559 => 1791,  4550 => 1785,  4546 => 1784,  4541 => 1782,  4537 => 1781,  4530 => 1777,  4524 => 1774,  4520 => 1773,  4500 => 1756,  4493 => 1752,  4473 => 1735,  4443 => 1708,  4432 => 1700,  4428 => 1699,  4424 => 1698,  4420 => 1697,  4416 => 1696,  4412 => 1695,  4400 => 1686,  4396 => 1685,  4387 => 1679,  4383 => 1678,  4374 => 1672,  4370 => 1671,  4361 => 1665,  4357 => 1664,  4348 => 1658,  4344 => 1657,  4335 => 1651,  4331 => 1650,  4322 => 1644,  4318 => 1643,  4313 => 1641,  4283 => 1614,  4274 => 1609,  4272 => 1608,  4259 => 1598,  4256 => 1597,  4243 => 1594,  4237 => 1593,  4234 => 1592,  4230 => 1591,  4222 => 1586,  4210 => 1577,  4187 => 1557,  4150 => 1523,  4113 => 1489,  4076 => 1455,  4039 => 1421,  4014 => 1399,  4006 => 1394,  3976 => 1367,  3970 => 1364,  3959 => 1356,  3951 => 1351,  3947 => 1350,  3938 => 1343,  3930 => 1340,  3915 => 1338,  3911 => 1337,  3906 => 1335,  3902 => 1334,  3899 => 1333,  3895 => 1332,  3889 => 1328,  3881 => 1326,  3878 => 1325,  3875 => 1324,  3871 => 1323,  3859 => 1313,  3851 => 1310,  3841 => 1309,  3824 => 1307,  3818 => 1306,  3815 => 1305,  3811 => 1304,  3806 => 1302,  3803 => 1301,  3799 => 1300,  3792 => 1296,  3788 => 1295,  3780 => 1290,  3771 => 1283,  3760 => 1280,  3756 => 1279,  3753 => 1278,  3749 => 1277,  3743 => 1273,  3735 => 1271,  3732 => 1270,  3728 => 1269,  3724 => 1268,  3716 => 1263,  3708 => 1258,  3705 => 1257,  3696 => 1253,  3692 => 1251,  3690 => 1250,  3684 => 1249,  3678 => 1246,  3673 => 1244,  3660 => 1234,  3654 => 1230,  3648 => 1229,  3646 => 1228,  3639 => 1226,  3631 => 1225,  3620 => 1221,  3612 => 1220,  3597 => 1218,  3590 => 1215,  3585 => 1214,  3583 => 1213,  3577 => 1209,  3569 => 1207,  3566 => 1206,  3564 => 1205,  3559 => 1203,  3555 => 1202,  3547 => 1197,  3541 => 1193,  3532 => 1189,  3528 => 1187,  3526 => 1186,  3522 => 1185,  3518 => 1184,  3509 => 1182,  3504 => 1180,  3493 => 1172,  3487 => 1168,  3481 => 1167,  3479 => 1166,  3472 => 1164,  3464 => 1163,  3456 => 1162,  3447 => 1160,  3443 => 1159,  3433 => 1156,  3425 => 1155,  3417 => 1154,  3413 => 1153,  3405 => 1152,  3397 => 1151,  3389 => 1150,  3386 => 1149,  3371 => 1147,  3367 => 1146,  3363 => 1145,  3358 => 1144,  3353 => 1143,  3351 => 1142,  3345 => 1138,  3337 => 1136,  3334 => 1135,  3332 => 1134,  3328 => 1133,  3324 => 1132,  3320 => 1131,  3316 => 1130,  3312 => 1129,  3308 => 1128,  3304 => 1127,  3300 => 1126,  3286 => 1115,  3280 => 1111,  3274 => 1110,  3272 => 1109,  3265 => 1107,  3257 => 1106,  3249 => 1105,  3246 => 1104,  3231 => 1102,  3227 => 1101,  3223 => 1100,  3220 => 1099,  3205 => 1097,  3201 => 1096,  3197 => 1095,  3192 => 1094,  3187 => 1093,  3185 => 1092,  3179 => 1088,  3171 => 1086,  3168 => 1085,  3166 => 1084,  3161 => 1082,  3157 => 1081,  3153 => 1080,  3149 => 1079,  3142 => 1074,  3138 => 1072,  3131 => 1070,  3124 => 1066,  3107 => 1062,  3097 => 1059,  3089 => 1056,  3082 => 1055,  3080 => 1054,  3077 => 1053,  3070 => 1049,  3053 => 1045,  3045 => 1042,  3041 => 1041,  3034 => 1039,  3027 => 1038,  3025 => 1037,  3022 => 1036,  3015 => 1032,  2998 => 1028,  2988 => 1025,  2980 => 1022,  2973 => 1021,  2971 => 1020,  2968 => 1019,  2961 => 1015,  2944 => 1011,  2932 => 1008,  2922 => 1007,  2914 => 1006,  2900 => 1005,  2894 => 1002,  2887 => 1001,  2885 => 1000,  2882 => 999,  2875 => 995,  2858 => 991,  2846 => 988,  2838 => 985,  2831 => 984,  2829 => 983,  2826 => 982,  2819 => 978,  2802 => 974,  2790 => 971,  2782 => 968,  2775 => 967,  2773 => 966,  2770 => 965,  2763 => 961,  2746 => 957,  2741 => 954,  2733 => 951,  2726 => 950,  2724 => 949,  2719 => 948,  2705 => 947,  2701 => 946,  2697 => 945,  2685 => 944,  2682 => 943,  2678 => 942,  2674 => 941,  2668 => 938,  2661 => 937,  2659 => 936,  2656 => 935,  2649 => 931,  2632 => 927,  2627 => 924,  2619 => 921,  2612 => 920,  2610 => 919,  2605 => 918,  2590 => 917,  2588 => 916,  2584 => 915,  2572 => 914,  2569 => 913,  2565 => 912,  2561 => 911,  2555 => 908,  2548 => 907,  2546 => 906,  2543 => 905,  2536 => 901,  2519 => 897,  2514 => 894,  2507 => 892,  2500 => 891,  2498 => 890,  2487 => 889,  2483 => 888,  2479 => 887,  2473 => 886,  2467 => 883,  2460 => 882,  2458 => 881,  2453 => 879,  2450 => 878,  2446 => 877,  2443 => 876,  2434 => 870,  2429 => 868,  2424 => 866,  2419 => 864,  2415 => 862,  2409 => 861,  2407 => 860,  2398 => 856,  2393 => 853,  2388 => 850,  2385 => 849,  2374 => 847,  2369 => 846,  2367 => 845,  2363 => 844,  2354 => 840,  2348 => 836,  2342 => 835,  2340 => 834,  2327 => 832,  2313 => 831,  2308 => 830,  2294 => 829,  2289 => 828,  2275 => 827,  2270 => 826,  2261 => 825,  2255 => 823,  2249 => 821,  2247 => 820,  2237 => 819,  2223 => 818,  2219 => 817,  2214 => 816,  2210 => 815,  2206 => 814,  2199 => 810,  2195 => 809,  2191 => 808,  2187 => 807,  2183 => 806,  2179 => 805,  2173 => 801,  2171 => 800,  2168 => 799,  2152 => 796,  2149 => 795,  2147 => 794,  2144 => 793,  2128 => 790,  2125 => 789,  2123 => 788,  2120 => 787,  2104 => 784,  2101 => 783,  2099 => 782,  2096 => 781,  2080 => 778,  2077 => 777,  2075 => 776,  2072 => 775,  2056 => 772,  2053 => 771,  2051 => 770,  2048 => 769,  2032 => 766,  2029 => 765,  2027 => 764,  2016 => 760,  2008 => 759,  1998 => 758,  1975 => 752,  1971 => 751,  1967 => 750,  1964 => 749,  1959 => 748,  1956 => 747,  1954 => 746,  1948 => 742,  1946 => 741,  1937 => 735,  1931 => 731,  1925 => 730,  1923 => 729,  1916 => 727,  1913 => 726,  1894 => 724,  1888 => 723,  1885 => 722,  1881 => 721,  1875 => 718,  1857 => 717,  1851 => 715,  1846 => 714,  1844 => 713,  1838 => 709,  1830 => 707,  1827 => 706,  1825 => 705,  1821 => 704,  1817 => 703,  1805 => 694,  1802 => 693,  1793 => 689,  1789 => 687,  1787 => 686,  1782 => 683,  1770 => 679,  1765 => 678,  1761 => 677,  1752 => 671,  1747 => 669,  1740 => 665,  1737 => 664,  1728 => 660,  1724 => 658,  1722 => 657,  1717 => 654,  1705 => 650,  1700 => 649,  1696 => 648,  1687 => 642,  1682 => 640,  1676 => 636,  1667 => 632,  1663 => 630,  1661 => 629,  1658 => 628,  1639 => 625,  1636 => 624,  1632 => 623,  1625 => 619,  1618 => 615,  1615 => 614,  1606 => 610,  1602 => 608,  1600 => 607,  1595 => 604,  1583 => 600,  1578 => 599,  1574 => 598,  1565 => 592,  1560 => 590,  1553 => 586,  1550 => 585,  1541 => 581,  1537 => 579,  1535 => 578,  1530 => 575,  1518 => 571,  1513 => 570,  1509 => 569,  1500 => 563,  1495 => 561,  1488 => 557,  1483 => 555,  1480 => 554,  1471 => 550,  1467 => 548,  1465 => 547,  1459 => 546,  1453 => 543,  1444 => 536,  1435 => 532,  1431 => 530,  1429 => 529,  1423 => 528,  1417 => 525,  1411 => 521,  1402 => 517,  1398 => 515,  1396 => 514,  1389 => 512,  1382 => 508,  1376 => 504,  1367 => 500,  1363 => 498,  1361 => 497,  1358 => 496,  1343 => 494,  1339 => 493,  1332 => 489,  1326 => 485,  1317 => 481,  1313 => 479,  1311 => 478,  1305 => 477,  1299 => 474,  1293 => 470,  1284 => 466,  1280 => 464,  1278 => 463,  1275 => 462,  1260 => 460,  1256 => 459,  1249 => 455,  1243 => 451,  1234 => 447,  1230 => 445,  1228 => 444,  1221 => 443,  1212 => 439,  1208 => 437,  1206 => 436,  1199 => 435,  1190 => 431,  1186 => 429,  1184 => 428,  1178 => 427,  1172 => 424,  1166 => 420,  1157 => 416,  1153 => 414,  1151 => 413,  1144 => 411,  1137 => 407,  1132 => 405,  1125 => 400,  1116 => 396,  1112 => 394,  1110 => 393,  1104 => 392,  1098 => 389,  1092 => 385,  1083 => 381,  1079 => 379,  1077 => 378,  1071 => 377,  1065 => 374,  1058 => 370,  1055 => 369,  1046 => 365,  1042 => 363,  1040 => 362,  1037 => 361,  1022 => 359,  1018 => 358,  1011 => 354,  1005 => 350,  996 => 346,  992 => 344,  990 => 343,  983 => 341,  976 => 337,  969 => 333,  966 => 332,  957 => 328,  953 => 326,  951 => 325,  945 => 324,  939 => 321,  930 => 317,  925 => 315,  920 => 313,  913 => 308,  904 => 304,  900 => 302,  898 => 301,  895 => 300,  880 => 298,  876 => 297,  872 => 296,  865 => 292,  859 => 288,  850 => 284,  846 => 282,  844 => 281,  838 => 280,  832 => 277,  827 => 275,  819 => 270,  816 => 269,  806 => 264,  802 => 262,  800 => 261,  795 => 258,  789 => 257,  787 => 256,  779 => 253,  775 => 252,  769 => 251,  761 => 250,  756 => 249,  751 => 248,  749 => 247,  739 => 240,  736 => 239,  725 => 237,  721 => 236,  714 => 232,  707 => 227,  698 => 223,  694 => 221,  692 => 220,  686 => 219,  680 => 216,  675 => 214,  670 => 212,  665 => 209,  646 => 204,  643 => 203,  626 => 199,  622 => 197,  620 => 196,  610 => 195,  602 => 192,  596 => 188,  579 => 184,  575 => 182,  573 => 181,  563 => 180,  555 => 177,  549 => 173,  532 => 169,  528 => 167,  526 => 166,  516 => 165,  508 => 162,  501 => 158,  498 => 157,  481 => 153,  477 => 151,  475 => 150,  465 => 149,  457 => 146,  444 => 138,  434 => 133,  424 => 128,  414 => 123,  404 => 118,  394 => 113,  384 => 108,  374 => 103,  364 => 98,  354 => 93,  345 => 87,  341 => 86,  331 => 78,  314 => 74,  310 => 72,  308 => 71,  295 => 69,  286 => 65,  279 => 61,  276 => 60,  259 => 56,  255 => 54,  253 => 53,  243 => 52,  235 => 49,  225 => 47,  208 => 46,  204 => 44,  177 => 42,  160 => 41,  152 => 36,  148 => 35,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  128 => 30,  124 => 29,  120 => 28,  116 => 27,  112 => 26,  108 => 25,  103 => 23,  98 => 21,  95 => 20,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-product\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-floppy-disk\"></i></button>
        <a href=\"{{ back }}\" data-bs-toggle=\"tooltip\" title=\"{{ button_back }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-reply\"></i></a></div>
      <h1>{{ heading_title }}</h1>
      <ol class=\"breadcrumb\">
        {% for breadcrumb in breadcrumbs %}
          <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
        {% endfor %}
      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    {% if master_id %}
      <div class=\"alert alert-warning\"><i class=\"fa-solid fa-circle-exclamation\"></i> {{ text_variant }}</div>
    {% endif %}
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_form }}</div>
      <div class=\"card-body\">
        <form id=\"form-product\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <ul class=\"nav nav-tabs\">
            <li class=\"nav-item\"><a href=\"#tab-general\" data-bs-toggle=\"tab\" class=\"nav-link active\">{{ tab_general }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-data\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_data }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-links\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_links }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-attribute\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_attribute }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-option\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_option }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-subscription\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_subscription }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-discount\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_discount }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-image\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_image }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-reward\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_reward }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-seo\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_seo }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-design\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_design }}</a></li>
            <li class=\"nav-item\"><a href=\"#tab-report\" data-bs-toggle=\"tab\" class=\"nav-link\">{{ tab_report }}</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\">
                {% for language in languages %}
                  <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
                {% endfor %}
              </ul>
              <div class=\"tab-content\">
                {% for language in languages %}
                  <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                    <div class=\"row mb-3 required\">
                      <label for=\"input-name-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][name]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name-{{ language.language_id }}\" class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][name]\" value=\"1\" id=\"input-variant-name-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-name-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].name %} checked{% endif %}/> <label for=\"input-variant-name-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                        <div id=\"error-name-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <div class=\"form-control h-100 p-0 border-0 rounded-0\">
                            <textarea name=\"product_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\" id=\"input-description-{{ language.language_id }}\" data-oc-toggle=\"ckeditor\" data-lang=\"{{ ckeditor }}\" class=\"w-100 position-relative\">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>
                          </div>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][description]\" value=\"1\" id=\"input-variant-description-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-description-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].description %} checked{% endif %}/> <label for=\"input-variant-description-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-2 col-form-label\" for=\"input-product-ribbon\">
                          Product Ribbon
                      </label>
                      <div class=\"col-sm-10\">
                          <select name=\"product_description[{{ language.language_id }}][product_ribbon]\"
                                  id=\"input-product-ribbon-{{ language.language_id }}\"
                                  class=\"form-select\">

                            <option value=\"\">-- Select Ribbon --</option>

                            <option value=\"upcoming\"
                              {% if product_description[language.language_id].product_ribbon == 'upcoming' %}selected{% endif %}>
                              UPCOMING
                            </option>

                            <option value=\"available\"
                              {% if product_description[language.language_id].product_ribbon == 'available' %}selected{% endif %}>
                              AVAILABLE
                            </option>

                            <option value=\"available_new\"
                              {% if product_description[language.language_id].product_ribbon == 'available_new' %}selected{% endif %}>
                              AVAILABLE (NEW)
                            </option>

                            <option value=\"5_star_rating\"
                              {% if product_description[language.language_id].product_ribbon == '5_star_rating' %}selected{% endif %}>
                              5 STAR RATING
                            </option>

                            <option value=\"exchange_price\"
                              {% if product_description[language.language_id].product_ribbon == 'exchange_price' %}selected{% endif %}>
                              EXCHANGE PRICE
                            </option>

                            <option value=\"new_arrival\"
                              {% if product_description[language.language_id].product_ribbon == 'new_arrival' %}selected{% endif %}>
                              NEW ARRIVAL
                            </option>

                            <option value=\"limited\"
                              {% if product_description[language.language_id].product_ribbon == 'limited' %}selected{% endif %}>
                              LIMITED
                            </option>

                            <option value=\"stock_out\"
                              {% if product_description[language.language_id].product_ribbon == 'stock_out' %}selected{% endif %}>
                              STOCK OUT
                            </option>

                            <option value=\"export_only\"
                              {% if product_description[language.language_id].product_ribbon == 'export_only' %}selected{% endif %}>
                              EXPORT ONLY
                            </option>

                            <option value=\"stock_limited\"
                              {% if product_description[language.language_id].product_ribbon == 'stock_limited' %}selected{% endif %}>
                              STOCK LIMITED
                            </option>

                          </select>
                      </div>
                    </div>
                    <div class=\"row mb-3 required\">
                      <label for=\"input-meta-title-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_title }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][meta_title]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}\" placeholder=\"{{ entry_meta_title }}\" id=\"input-meta-title-{{ language.language_id }}\" class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_title]\" value=\"1\" id=\"input-variant-meta-title-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-title-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_title %} checked{% endif %}/> <label for=\"input-variant-meta-title-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                        <div id=\"error-meta-title-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_description }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[{{ language.language_id }}][meta_description]\" rows=\"5\" placeholder=\"{{ entry_meta_description }}\" id=\"input-meta-description-{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_description]\" value=\"1\" id=\"input-variant-meta-description-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-description-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_description %} checked{% endif %}/> <label for=\"input-variant-meta-description-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-meta-keyword-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_meta_keyword }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <textarea name=\"product_description[{{ language.language_id }}][meta_keyword]\" rows=\"5\" placeholder=\"{{ entry_meta_keyword }}\" id=\"input-meta-keyword-{{ language.language_id }}\" class=\"form-control\">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][meta_keyword]\" value=\"1\" id=\"input-variant-meta-keyword-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-meta-keyword-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].meta_keyword %} checked{% endif %}/> <label for=\"input-variant-meta-keyword-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                      </div>
                    </div>
                    <div class=\"row mb-3\">
                      <label for=\"input-tag-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_tag }}</label>
                      <div class=\"col-sm-10\">
                        <div class=\"input-group\">
                          <input type=\"text\" name=\"product_description[{{ language.language_id }}][tag]\" value=\"{{ product_description[language.language_id] ? product_description[language.language_id].tag }}\" placeholder=\"{{ entry_tag }}\" id=\"input-tag-{{ language.language_id }}\" class=\"form-control\"/>
                          {% if master_id %}
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[product_description][{{ language.language_id }}][tag]\" value=\"1\" id=\"input-variant-tag-{{ language.language_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tag-{{ language.language_id }}\" class=\"form-check-input\"{% if override.product_description[language.language_id].tag %} checked{% endif %}/> <label for=\"input-variant-tag-{{ language.language_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          {% endif %}
                        </div>
                        <div class=\"form-text\">{{ help_tag }}</div>
                      </div>
                    </div>
                  </div>
                {% endfor %}
              </div>
            </div>
            <div id=\"tab-data\" class=\"tab-pane\">
              <input type=\"hidden\" name=\"master_id\" value=\"{{ master_id }}\"/>
              <fieldset>
                <legend>{{ text_model }}</legend>
                <div class=\"row mb-3 required\">
                  <label for=\"input-model\" class=\"col-sm-2 col-form-label\">{{ entry_model }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"model\" value=\"{{ model }}\" placeholder=\"{{ entry_model }}\" id=\"input-model\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[model]\" value=\"1\" id=\"input-variant-model\" data-oc-toggle=\"switch\" data-oc-target=\"#input-model\" class=\"form-check-input\"{% if override.model %} checked{% endif %}/> <label for=\"input-variant-model\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div id=\"error-model\" class=\"invalid-feedback\"></div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_product_code }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select id=\"input-code\" class=\"form-select\">
                        {% for identifier in identifiers %}
                          <option value=\"{{ identifier.code }}\">{{ identifier.code }}</option>
                        {% endfor %}
                      </select>
                      <input type=\"text\" value=\"\" placeholder=\"{{ entry_product_code }}\" id=\"input-value\" class=\"form-control w-75\"/>
                      <button type=\"button\" id=\"button-code\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button>
                    </div>
                    <div class=\"input-group\">
                      <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                        <table id=\"product-code\" class=\"table m-0\">
                          <tbody>
                            {% set code_row = 0 %}
                            {% for product_code in product_codes %}
                              <tr id=\"code-row-{{ code_row }}\">
                                <td style=\"width: 1px;\">{{ product_code.code }}<input type=\"hidden\" name=\"product_code[{{ code_row }}][code]\" value=\"{{ product_code.code }}\"/></td>
                                <td id=\"input-code-{{ code_row }}\">{{ product_code.value }}
                                  <div id=\"error-code-{{ code_row }}\" class=\"invalid-feedback\"></div>
                                  <input type=\"hidden\" name=\"product_code[{{ code_row }}][value]\" value=\"{{ product_code.value }}\"></td>
                                <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                              </tr>
                              {% set code_row = code_row + 1 %}
                            {% endfor %}
                          </tbody>
                        </table>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_code]\" value=\"1\" id=\"input-variant-code\" data-oc-toggle=\"switch\" data-oc-target=\"#input-code, #product-code\" class=\"form-check-input\"{% if override.product_code %} checked{% endif %}/>
                            <label for=\"input-variant-code\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_product_code }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_price }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-price\" class=\"col-sm-2 col-form-label\">{{ entry_price }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"price\" value=\"{{ price }}\" placeholder=\"{{ entry_price }}\" id=\"input-price\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[price]\" value=\"1\" id=\"input-variant-price\" data-oc-toggle=\"switch\" data-oc-target=\"#input-price\" class=\"form-check-input\"{% if override.price %} checked{% endif %}/> <label for=\"input-variant-price\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-tax-class\" class=\"col-sm-2 col-form-label\">{{ entry_tax_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-select\">
                        <option value=\"0\">{{ text_none }}</option>
                        {% for tax_class in tax_classes %}
                          <option value=\"{{ tax_class.tax_class_id }}\"{% if tax_class.tax_class_id == tax_class_id %} selected{% endif %}>{{ tax_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[tax_class_id]\" value=\"1\" id=\"input-variant-tax-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-tax-class\" class=\"form-check-input\"{% if override.tax_class_id %} checked{% endif %}/> <label for=\"input-variant-tax-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_stock }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-quantity\" class=\"col-sm-2 col-form-label\">{{ entry_quantity }}</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"quantity\" value=\"{{ quantity }}\" placeholder=\"{{ entry_quantity }}\" id=\"input-quantity\" class=\"form-control\"/>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-minimum\" class=\"col-sm-2 col-form-label\">{{ entry_minimum }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"minimum\" value=\"{{ minimum }}\" placeholder=\"{{ entry_minimum }}\" id=\"input-minimum\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[minimum]\" value=\"1\" id=\"input-variant-minimum\" data-oc-toggle=\"switch\" data-oc-target=\"#input-minimum\" class=\"form-check-input\"{% if override.minimum %} checked{% endif %}/> <label for=\"input-variant-minimum\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_minimum }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_subtract }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-subtract\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"subtract\" value=\"0\"/> <input type=\"checkbox\" name=\"subtract\" value=\"1\" class=\"form-check-input\"{% if subtract %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[subtract]\" value=\"1\" id=\"input-variant-subtract\" data-oc-toggle=\"switch\" data-oc-target=\"#input-subtract\" class=\"form-check-input\"{% if override.subtract %} checked{% endif %}/> <label for=\"input-variant-subtract\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-stock-status\" class=\"col-sm-2 col-form-label\">{{ entry_stock_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-select\">
                        {% for stock_status in stock_statuses %}
                          <option value=\"{{ stock_status.stock_status_id }}\"{% if stock_status.stock_status_id == stock_status_id %} selected{% endif %}>{{ stock_status.name }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[stock_status_id]\" value=\"1\" id=\"input-variant-stock-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-stock-status\" class=\"form-check-input\"{% if override.stock_status_id %} checked{% endif %}/> <label for=\"input-variant-stock-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_stock_status }}</div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-location\" class=\"col-sm-2 col-form-label\">{{ entry_location }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"location\" value=\"{{ location }}\" placeholder=\"{{ entry_location }}\" id=\"input-location\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[location]\" value=\"1\" id=\"input-variant-location\" data-oc-toggle=\"switch\" data-oc-target=\"#input-location\" class=\"form-check-input\"{% if override.location %} checked{% endif %}/> <label for=\"input-variant-location\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-date-available\" class=\"col-sm-2 col-form-label\">{{ entry_date_available }}</label>
                  <div class=\"col-sm-10 col-md-4\">
                    <div class=\"input-group\">
                      <input type=\"date\" name=\"date_available\" value=\"{{ date_available }}\" placeholder=\"{{ entry_date_available }}\" id=\"input-date-available\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[date_available]\" value=\"1\" id=\"input-variant-date-available\" data-oc-toggle=\"switch\" data-oc-target=\"#input-date-available\" class=\"form-check-input\"{% if override.date_available %} checked{% endif %}/> <label for=\"input-variant-date-available\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_specification }}</legend>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_shipping }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div id=\"input-shipping\" class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"shipping\" value=\"0\"/> <input type=\"checkbox\" name=\"shipping\" value=\"1\" class=\"form-check-input\"{% if shipping %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[shipping]\" value=\"1\" id=\"input-variant-shipping\" data-oc-toggle=\"switch\" data-oc-target=\"#input-shipping\" class=\"form-check-input\"{% if override.shipping %} checked{% endif %}/> <label for=\"input-variant-shipping\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length\" class=\"col-sm-2 col-form-label\">{{ entry_dimension }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"length\" value=\"{{ length }}\" placeholder=\"{{ entry_length }}\" id=\"input-length\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length]\" value=\"1\" id=\"input-variant-length\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length\" class=\"form-check-input\"{% if override.length %} checked{% endif %}/> <label for=\"input-variant-length\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                      <input type=\"text\" name=\"width\" value=\"{{ width }}\" placeholder=\"{{ entry_width }}\" id=\"input-width\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[width]\" value=\"1\" id=\"input-variant-width\" data-oc-toggle=\"switch\" data-oc-target=\"#input-width\" class=\"form-check-input\"{% if override.width %} checked{% endif %}/> <label for=\"input-variant-width\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                      <input type=\"text\" name=\"height\" value=\"{{ height }}\" placeholder=\"{{ entry_height }}\" id=\"input-height\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[height]\" value=\"1\" id=\"input-variant-height\" data-oc-toggle=\"switch\" data-oc-target=\"#input-height\" class=\"form-check-input\"{% if override.height %} checked{% endif %}/> <label for=\"input-variant-height\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-length-class\" class=\"col-sm-2 col-form-label\">{{ entry_length_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-select\">
                        {% for length_class in length_classes %}
                          <option value=\"{{ length_class.length_class_id }}\"{% if length_class.length_class_id == length_class_id %} selected{% endif %}>{{ length_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[length_class_id]\" value=\"1\" id=\"input-variant-length-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-length-class\" class=\"form-check-input\"{% if override.length_class_id %} checked{% endif %}/> <label for=\"input-variant-length-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight\" class=\"col-sm-2 col-form-label\">{{ entry_weight }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"weight\" value=\"{{ weight }}\" placeholder=\"{{ entry_weight }}\" id=\"input-weight\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight]\" value=\"1\" id=\"input-variant-weight\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight\" class=\"form-check-input\"{% if override.weight %} checked{% endif %}/> <label for=\"input-variant-weight\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-weight-class\" class=\"col-sm-2 col-form-label\">{{ entry_weight_class }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-select\">
                        {% for weight_class in weight_classes %}
                          <option value=\"{{ weight_class.weight_class_id }}\"{% if weight_class.weight_class_id == weight_class_id %} selected{% endif %}>{{ weight_class.title }}</option>
                        {% endfor %}
                      </select>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[weight_class_id]\" value=\"1\" id=\"input-variant-weight-class\" data-oc-toggle=\"switch\" data-oc-target=\"#input-weight-class\" class=\"form-check-input\"{% if override.weight_class_id %} checked{% endif %}/> <label for=\"input-variant-weight-class\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <div class=\"form-check form-switch form-switch-lg\">
                        <input type=\"hidden\" name=\"status\" value=\"0\"/> <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
                      </div>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[status]\" value=\"1\" id=\"input-variant-status\" data-oc-toggle=\"switch\" data-oc-target=\"#input-status\" class=\"form-check-input\"{% if override.status %} checked{% endif %}/> <label for=\"input-variant-status\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"row mb-3\">
                  <label for=\"input-sort-order\" class=\"col-sm-2 col-form-label\">{{ entry_sort_order }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"number\" name=\"sort_order\" value=\"{{ sort_order }}\" placeholder=\"{{ entry_sort_order }}\" id=\"input-sort-order\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[sort_order]\" value=\"1\" id=\"input-variant-sort-order\" data-oc-toggle=\"switch\" data-oc-target=\"#input-sort-order\" class=\"form-check-input\"{% if override.sort_order %} checked{% endif %}/> <label for=\"input-variant-sort-order\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div id=\"tab-links\" class=\"tab-pane\">
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_manufacturer }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"manufacturer\" value=\"{{ manufacturer }}\" placeholder=\"{{ entry_manufacturer }}\" id=\"input-manufacturer\" data-oc-target=\"autocomplete-manufacturer\" class=\"form-control\" autocomplete=\"off\"/>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[manufacturer]\" value=\"1\" id=\"input-variant-manufacturer\" data-oc-toggle=\"switch\" data-oc-target=\"#input-manufacturer\" class=\"form-check-input\"{% if override.manufacturer %} checked{% endif %}/> <label for=\"input-variant-manufacturer\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"{{ manufacturer_id }}\" id=\"input-manufacturer-id\"/>
                  <ul id=\"autocomplete-manufacturer\" class=\"dropdown-menu\"></ul>
                  <div class=\"form-text\">{{ help_manufacturer }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_category }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"{{ entry_category }}\" id=\"input-category\" data-oc-target=\"autocomplete-category\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-category\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-category\" class=\"table m-0\">
                        <tbody>
                          {% for product_category in product_categories %}
                            <tr id=\"product-category-{{ product_category.category_id }}\">
                              <td>{{ product_category.name }}<input type=\"hidden\" name=\"product_category[]\" value=\"{{ product_category.category_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_category]\" value=\"1\" id=\"input-variant-category\" data-oc-toggle=\"switch\" data-oc-target=\"#input-category, #product-category\" class=\"form-check-input\"{% if override.product_category %} checked{% endif %}/> <label for=\"input-variant-category\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_category }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_filter }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"{{ entry_filter }}\" id=\"input-filter\" data-oc-target=\"autocomplete-filter\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-filter\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-filter\" class=\"table m-0\">
                        <tbody>
                          {% for product_filter in product_filters %}
                            <tr id=\"product-filter-{{ product_filter.filter_id }}\">
                              <td>{{ product_filter.name }}<input type=\"hidden\" name=\"product_filter[]\" value=\"{{ product_filter.filter_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_filter]\" value=\"1\" id=\"input-variant-filter\" data-oc-toggle=\"switch\" data-oc-target=\"#input-filter, #product-filter\" class=\"form-check-input\"{% if override.product_filter %} checked{% endif %}/> <label for=\"input-variant-filter\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_filter }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_store }}</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <div id=\"product-store\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                      {% for store in stores %}
                        <div class=\"form-check\">
                          <input type=\"checkbox\" name=\"product_store[]\" value=\"{{ store.store_id }}\" id=\"input-store-{{ store.store_id }}\" class=\"form-check-input\"{% if store.store_id in product_store %} checked{% endif %}/> <label for=\"input-store-{{ store.store_id }}\" class=\"form-check-label\">{{ store.name }}</label>
                        </div>
                      {% endfor %}
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_store]\" value=\"1\" id=\"input-variant-store\" data-oc-toggle=\"switch\" data-oc-target=\"#product-store\" class=\"form-check-input\"{% if override.product_store %} checked{% endif %}/> <label for=\"input-variant-store\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_download }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"{{ entry_download }}\" id=\"input-download\" data-oc-target=\"autocomplete-download\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-download\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-download\" class=\"table m-0\">
                        <tbody>
                          {% for product_download in product_downloads %}
                            <tr id=\"product-download-{{ product_download.download_id }}\">
                              <td>{{ product_download.name }}<input type=\"hidden\" name=\"product_download[]\" value=\"{{ product_download.download_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_download]\" value=\"1\" id=\"input-variant-download\" data-oc-toggle=\"switch\" data-oc-target=\"#input-download, #product-download\" class=\"form-check-input\"{% if override.product_download %} checked{% endif %}/> <label for=\"input-variant-download\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_download }}</div>
                </div>
              </div>
              <div class=\"row mb-3\">
                <label class=\"col-sm-2 col-form-label\">{{ entry_related }}</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"{{ entry_related }}\" id=\"input-related\" data-oc-target=\"autocomplete-related\" class=\"form-control\" autocomplete=\"off\"/>
                  <ul id=\"autocomplete-related\" class=\"dropdown-menu\"></ul>
                  <div class=\"input-group\">
                    <div class=\"form-control p-0\" style=\"height: 150px; overflow: auto;\">
                      <table id=\"product-related\" class=\"table m-0\">
                        <tbody>
                          {% for product_related in product_relateds %}
                            <tr id=\"product-related-{{ product_related.product_id }}\">
                              <td>{{ product_related.name }}<input type=\"hidden\" name=\"product_related[]\" value=\"{{ product_related.product_id }}\"/></td>
                              <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                    {% if master_id %}
                      <div class=\"input-group-text\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[product_related]\" value=\"1\" id=\"input-variant-related\" data-oc-toggle=\"switch\" data-oc-target=\"#input-related, #product-related\" class=\"form-check-input\"{% if override.product_related %} checked{% endif %}/> <label for=\"input-variant-related\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                  <div class=\"form-text\">{{ help_related }}</div>
                </div>
              </div>
            </div>
            <div id=\"tab-attribute\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-attribute\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_attribute }}</th>
                      <th>{{ entry_text }}</th>
                      <th>{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_attribute]\" value=\"1\" id=\"input-variant-product-attribute\" data-oc-toggle=\"switch\" data-oc-target=\"#product-attribute\" class=\"form-check-input\"{% if override.product_attribute %} checked{% endif %}/> <label for=\"input-variant-product-attribute\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set attribute_row = 0 %}
                    {% for product_attribute in product_attributes %}
                      <tr id=\"attribute-row-{{ attribute_row }}\">
                        <td>
                          <input type=\"hidden\" name=\"product_attribute[{{ attribute_row }}][attribute_id]\" value=\"{{ product_attribute.attribute_id }}\" id=\"input-attribute-id-{{ attribute_row }}\"/> <input type=\"text\" name=\"product_attribute[{{ attribute_row }}][name]\" value=\"{{ product_attribute.name }}\" placeholder=\"{{ entry_attribute }}\" id=\"input-attribute-{{ attribute_row }}\" data-oc-target=\"autocomplete-attribute-{{ attribute_row }}\" class=\"form-control\" autocomplete=\"new-password\"/>
                          <ul id=\"autocomplete-attribute-{{ attribute_row }}\" class=\"dropdown-menu\"></ul>
                        </td>

                        <td>{% for language in languages %}
                            <div class=\"input-group mb-12\">
                              <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                              <textarea name=\"product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text }}\" id=\"input-text-{{ attribute_row }}-{{ language.language_id }}\" class=\"form-control\">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>
                            </div>
                          {% endfor %}</td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#attribute-row-{{ attribute_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set attribute_row = attribute_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-attribute\" data-bs-toggle=\"tooltip\" title=\"{{ button_attribute_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            {% if not master_id %}
              <div id=\"tab-option\" class=\"tab-pane\">

                <div id=\"option\">

                  {% set option_row = 0 %}
                  {% set option_value_row = 0 %}
                  {% for product_option in product_options %}

                    <fieldset id=\"option-row-{{ option_row }}\">
                      <legend>{{ product_option.name }}</legend>
                      <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_id]\" value=\"{{ product_option.product_option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][name]\" value=\"{{ product_option.name }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][option_id]\" value=\"{{ product_option.option_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][type]\" value=\"{{ product_option.type }}\"/>

                      <div class=\"row align-items-center\">
                        <div class=\"col-11\">

                          <div class=\"mb-3\">
                            <label for=\"input-required-{{ option_row }}\" class=\"form-label\">{{ entry_required }}</label> <select name=\"product_option[{{ option_row }}][required]\" id=\"input-required-{{ option_row }}\" class=\"form-select\">
                              <option value=\"1\"{% if product_option.required %} selected{% endif %}>{{ text_enabled }}</option>
                              <option value=\"0\"{% if not product_option.required %} selected{% endif %}>{{ text_disabled }}</option>
                            </select>
                          </div>

                          {% if product_option.type == 'text' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'textarea' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <textarea name=\"product_option[{{ option_row }}][value]\" rows=\"5\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\">{{ product_option.value }}</textarea>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'file' %}
                            <div class=\"mb-3 d-none\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"text\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'date' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"date\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'time' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"time\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'datetime' %}
                            <div class=\"mb-3\">
                              <label for=\"input-option-{{ option_row }}\" class=\"form-label\">{{ entry_option_value }}</label> <input type=\"datetime-local\" name=\"product_option[{{ option_row }}][value]\" value=\"{{ product_option.value }}\" placeholder=\"{{ entry_option_value }}\" id=\"input-option-{{ option_row }}\" class=\"form-control\"/>
                            </div>
                          {% endif %}

                          {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}
                            <div class=\"table-responsive\">
                              <table class=\"table table-bordered table-hover\">
                                <thead>
                                  <tr>
                                    <th>{{ entry_option_value }}</th>
                                    <th class=\"text-end\">{{ entry_quantity }}</th>
                                    <th>{{ entry_subtract }}</th>
                                    <th class=\"text-end\">{{ entry_price }}</th>
                                    <th class=\"text-end\">{{ entry_points }}</th>
                                    <th class=\"text-end\">{{ entry_weight }}</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody id=\"option-value-{{ option_row }}\">
                                  {% for product_option_value in product_option.product_option_value %}
                                    <tr id=\"option-value-row-{{ option_value_row }}\">
                                      <td>{{ product_option_value.name }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]\" value=\"{{ product_option_value.option_value_id }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]\" value=\"{{ product_option_value.product_option_value_id }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.quantity }} <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]\" value=\"{{ product_option_value.quantity }}\"/></td>
                                      <td>{% if product_option_value.subtract %}
                                          {{ text_yes }}
                                        {% else %}
                                          {{ text_no }}
                                        {% endif %}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]\" value=\"{{ product_option_value.subtract }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.price_prefix }}{{ product_option_value.price }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]\" value=\"{{ product_option_value.price_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]\" value=\"{{ product_option_value.price }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.points_prefix }}{{ product_option_value.points }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]\" value=\"{{ product_option_value.points_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]\" value=\"{{ product_option_value.points }}\"/></td>
                                      <td class=\"text-end\">{{ product_option_value.weight_prefix }}{{ product_option_value.weight }}
                                        <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]\" value=\"{{ product_option_value.weight_prefix }}\"/> <input type=\"hidden\" name=\"product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]\" value=\"{{ product_option_value.weight }}\"/></td>
                                      <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit }}\" data-option-row=\"{{ option_row }}\" data-option-value-row=\"{{ option_value_row }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$('#option-value-row-{{ option_value_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                                    </tr>
                                    {% set option_value_row = option_value_row + 1 %}
                                  {% endfor %}
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan=\"6\"></td>
                                    <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add }}\" data-option-row=\"{{ option_row }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                                  </tr>
                                </tfoot>
                              </table>
                              <select id=\"product-option-values-{{ option_row }}\" class=\"d-none\">
                                {% if option_values[product_option.option_id] %}
                                  {% for option_value in option_values[product_option.option_id] %}
                                    <option value=\"{{ option_value.option_value_id }}\">{{ option_value.name }}</option>
                                  {% endfor %}
                                {% endif %}
                              </select>
                            </div>
                          {% endif %}
                        </div>

                        <div class=\"col\">
                          <button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" onclick=\"\$('#option-row-{{ option_row }}').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                        </div>
                      </div>
                    </fieldset>
                    {% set option_row = option_row + 1 %}
                  {% endfor %}
                </div>
                <fieldset>
                  <legend class=\"float-none\">{{ text_option_add }}</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-option\" class=\"col-sm-2 col-form-label\">{{ entry_option }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"{{ entry_option }}\" id=\"input-option\" data-oc-target=\"autocomplete-option\" class=\"form-control\" autocomplete=\"off\"/>
                      <ul id=\"autocomplete-option\" class=\"dropdown-menu\"></ul>
                      <div class=\"form-text\">{{ help_option }}</div>
                    </div>
                  </div>
                </fieldset>
              </div>
            {% else %}
              <div id=\"tab-option\" class=\"tab-pane\">
                {% for option in options %}
                  <fieldset>
                    <legend class=\"float-none\">{{ option.name }}</legend>

                    {% if option.type == 'select' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <select name=\"variant[{{ option.product_option_id }}]\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-select\">
                              <option value=\"\">{{ text_select }}</option>
                              {% for option_value in option.product_option_value %}
                                <option value=\"{{ option_value.product_option_value_id }}\"{% if variant[option.product_option_id] and option_value.product_option_value_id == variant[option.product_option_id] %} selected{% endif %}>{{ option_value.name }}
                                  {% if option_value.price %}
                                    ({{ option_value.price_prefix }}{{ option_value.price }})
                                  {% endif %}</option>
                              {% endfor %}
                            </select>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'radio' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for option_value in option.product_option_value %}
                                <div class=\"form-check\">
                                  <input type=\"radio\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"{% if variant[option.product_option_id] and option_value.product_option_value_id == variant[option.product_option_id] %} checked{% endif %}/> 
\t\t\t\t\t\t\t\t                  <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                    {% if option_value.image %}
                                      <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                    {{ option_value.name }}
                                    {% if option_value.price %}
                                      ({{ option_value.price_prefix }}{{ option_value.price }})
                                    {% endif %}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'checkbox' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <div id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                              {% for option_value in option.product_option_value %}
                                <div class=\"form-check\">
                                  <input type=\"checkbox\" name=\"variant[{{ option.product_option_id }}][]\" value=\"{{ option_value.product_option_value_id }}\" id=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-input\"{% if variant[option.product_option_id] and option_value.product_option_value_id in variant[option.product_option_id] %} checked{% endif %}/> 
                                  <label for=\"input-option-value-{{ option_value.product_option_value_id }}\" class=\"form-check-label\">
                                    {% if option_value.image %} 
                                      <img src=\"{{ option_value.image }}\" alt=\"{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}\" class=\"img-thumbnail\"/>{% endif %}
                                    {{ option_value.name }}
                                    {% if option_value.price %}
                                      ({{ option_value.price_prefix }}{{ option_value.price }})
                                    {% endif %}</label>
                                </div>
                              {% endfor %}
                            </div>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'text' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <input type=\"text\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'textarea' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <textarea name=\"variant[{{ option.product_option_id }}]\" rows=\"5\" placeholder=\"{{ option.name }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\">{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}</textarea>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'file' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group\">
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" id=\"button-upload-{{ option.product_option_id }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                            <input type=\"text\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <button type=\"button\" data-oc-toggle=\"download\" data-oc-target=\"#input-option-{{ option.product_option_id }}\"{% if not variant[option.product_option_id] %} disabled{% endif %} class=\"btn btn-outline-secondary\"><i class=\"fa-solid fa-download\"></i> {{ button_download }}</button>
                            <button type=\"button\" data-oc-toggle=\"clear\" data-bs-toggle=\"tooltip\" title=\"{{ button_clear }}\" data-oc-target=\"#input-option-{{ option.product_option_id }}\"{% if not variant[option.product_option_id] %} disabled{% endif %} class=\"btn btn-outline-danger\"><i class=\"fa-solid fa-eraser\"></i></button>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#button-upload-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'date' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"date\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'time' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div id=\"input-option-{{ option.product_option_id }}\" class=\"input-group\">
                            <input type=\"time\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if option.type == 'datetime' %}
                      <div class=\"row mb-3{% if option.required %} required{% endif %}\">
                        <label for=\"input-option-{{ option.product_option_id }}\" class=\"col-sm-2 col-form-label\">{{ option.name }}</label>
                        <div class=\"col-sm-10 col-md-4\">
                          <div class=\"input-group\">
                            <input type=\"datetime-local\" name=\"variant[{{ option.product_option_id }}]\" value=\"{{ variant[option.product_option_id] ? variant[option.product_option_id] : option.value }}\" id=\"input-option-{{ option.product_option_id }}\" class=\"form-control\"/>
                            <div class=\"input-group-text\">
                              <div class=\"form-check form-switch\">
                                <input type=\"checkbox\" name=\"override[variant][{{ option.product_option_id }}]\" value=\"1\" id=\"input-variant-option-{{ option.product_option_id }}\" data-oc-toggle=\"switch\" data-oc-target=\"#input-option-{{ option.product_option_id }}\" class=\"form-check-input\"{% if override.variant[option.product_option_id] %} checked{% endif %}/> <label for=\"input-variant-option-{{ option.product_option_id }}\" class=\"form-check-label\"></label>
                              </div>
                            </div>
                          </div>
                          <div id=\"error-option-{{ option.product_option_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}
                  </fieldset>
                {% endfor %}
              </div>
            {% endif %}
            <div id=\"tab-subscription\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-subscription\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_subscription }}</th>
                      <th>{{ entry_customer_group }}</th>
                      <th>{{ entry_trial_price }}</th>
                      <th>{{ entry_price }}</th>
                      <th>
                        {% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_subscription]\" value=\"1\" id=\"input-variant-product-subscription\" data-oc-toggle=\"switch\" data-oc-target=\"#product-subscription\" class=\"form-check-input\"{% if override.product_subscription %} checked{% endif %}/> <label for=\"input-variant-product-subscription\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set subscription_row = 0 %}
                    {% for product_subscription in product_subscriptions %}
                      <tr id=\"subscription-row-{{ subscription_row }}\">
                        <td><select name=\"product_subscription[{{ subscription_row }}][subscription_plan_id]\" class=\"form-select\">
                            {% for subscription_plan in subscription_plans %}
                              <option value=\"{{ subscription_plan.subscription_plan_id }}\"{% if subscription_plan.subscription_plan_id == product_subscription.subscription_plan_id %} selected{% endif %}>{{ subscription_plan.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td><select name=\"product_subscription[{{ subscription_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_subscription.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td><input type=\"text\" name=\"product_subscription[{{ subscription_row }}][trial_price]\" value=\"{{ product_subscription.trial_price }}\" placeholder=\"{{ entry_trial_price }}\" class=\"form-control\"/></td>
                        <td><input type=\"text\" name=\"product_subscription[{{ subscription_row }}][price]\" value=\"{{ product_subscription.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#subscription-row-{{ subscription_row }}').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set subscription_row = subscription_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"4\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-subscription\" data-bs-toggle=\"tooltip\" title=\"{{ button_subscription_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-discount\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-discount\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_customer_group }}</th>
                      <th class=\"text-end\">{{ entry_quantity }}</th>
                      <th class=\"text-end\">{{ entry_priority }}</th>
                      <th class=\"text-end\">{{ entry_price }}</th>
                      <th class=\"text-end\">{{ entry_type }}</th>
                      <th class=\"text-end\">{{ entry_special }}</th>
                      <th>{{ entry_date_start }}</th>
                      <th>{{ entry_date_end }}</th>
                      <th class=\"text-end\">{% if master_id %}
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[product_discount]\" value=\"1\" id=\"input-variant-product-discount\" data-oc-toggle=\"switch\" data-oc-target=\"#product-discount\" class=\"form-check-input\"{% if override.product_discount %} checked{% endif %}/> <label for=\"input-variant-product-discount\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% set discount_row = 0 %}
                    {% for product_discount in product_discounts %}
                      <tr id=\"discount-row-{{ discount_row }}\">
                        <td><select name=\"product_discount[{{ discount_row }}][customer_group_id]\" class=\"form-select\">
                            {% for customer_group in customer_groups %}
                              <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == product_discount.customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                            {% endfor %}
                          </select></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][quantity]\" value=\"{{ product_discount.quantity }}\" placeholder=\"{{ entry_quantity }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][priority]\" value=\"{{ product_discount.priority }}\" placeholder=\"{{ entry_priority }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><input type=\"text\" name=\"product_discount[{{ discount_row }}][price]\" value=\"{{ product_discount.price }}\" placeholder=\"{{ entry_price }}\" class=\"form-control\"/></td>
                        <td><select name=\"product_discount[{{ discount_row }}][type]\" class=\"form-select\">
                            <option value=\"F\"{% if product_discount.type == 'F' %} selected{% endif %}>{{ text_fixed }}</option>
                            <option value=\"S\"{% if product_discount.type == 'S' %} selected{% endif %}>{{ text_subtract }}</option>
                            <option value=\"P\"{% if product_discount.type == 'P' %} selected{% endif %}>{{ text_percentage }}</option>
                          </select></td>
                        <td><div class=\"form-check form-switch form-switch-lg\">
                            <input type=\"hidden\" name=\"product_discount[{{ discount_row }}][special]\" value=\"0\"/>
                            <input type=\"checkbox\" name=\"product_discount[{{ discount_row }}][special]\" value=\"1\" class=\"form-check-input\"{% if product_discount.special %} checked{% endif %}/>
                          </div></td>
                        <td><input type=\"date\" name=\"product_discount[{{ discount_row }}][date_start]\" value=\"{{ product_discount.date_start }}\" placeholder=\"{{ entry_date_start }}\" class=\"form-control\"/></td>
                        <td><input type=\"date\" name=\"product_discount[{{ discount_row }}][date_end]\" value=\"{{ product_discount.date_end }}\" placeholder=\"{{ entry_date_end }}\" class=\"form-control\"/></td>
                        <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#discount-row-{{ discount_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                      </tr>
                      {% set discount_row = discount_row + 1 %}
                    {% endfor %}
                  </tbody>
                  <tfoot>
                    <tr>
                      <td colspan=\"8\"></td>
                      <td class=\"text-end\"><button type=\"button\" id=\"button-discount\" data-bs-toggle=\"tooltip\" title=\"{{ button_discount_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div id=\"tab-image\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_image }}</legend>
                <div id=\"image\" class=\"border rounded d-block\" style=\"max-width: 300px;\">
                  <img src=\"{{ thumb }}\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"image\" value=\"{{ image }}\" id=\"input-image\"/>
                  <div class=\"d-grid\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                    {% if master_id %}
                      <div class=\"mx-auto w-25\">
                        <div class=\"form-check form-switch\">
                          <input type=\"checkbox\" name=\"override[image]\" value=\"1\" id=\"input-variant-image\" data-oc-toggle=\"switch\" data-oc-target=\"#image\" class=\"form-check-input\"{% if override.image %} checked{% endif %}/> <label for=\"input-variant-image\" class=\"form-check-label\"></label>
                        </div>
                      </div>
                    {% endif %}
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_image_additional }}</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-image\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>{{ entry_image }}</th>
                        <th>{{ entry_sort_order }}</th>
                        <th class=\"text-end\">
                          {% if master_id %}
                            <div class=\"form-check form-switch\">
                              <input type=\"checkbox\" name=\"override[product_image]\" value=\"1\" id=\"input-variant-product-image\" data-oc-toggle=\"switch\" data-oc-target=\"#product-image\" class=\"form-check-input\"{% if override.product_image %} checked{% endif %}/> <label for=\"input-variant-product-image\" class=\"form-check-label\"></label>
                            </div>
                          {% endif %}</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% set image_row = 0 %}
                      {% for product_image in product_images %}
                        <tr id=\"product-image-row-{{ image_row }}\">
                          <td>
                            <div class=\"border rounded d-block\" style=\"max-width: 300px;\">
                              <img src=\"{{ product_image.thumb }}\" alt=\"\" title=\"\" id=\"product-image-{{ image_row }}\" data-oc-placeholder=\"{{ placeholder }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[{{ image_row }}][image]\" value=\"{{ product_image.image }}\" id=\"input-product-image-{{ image_row }}\"/>
                              <div class=\"d-grid\">
                                <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit }}</button>
                                <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-{{ image_row }}\" data-oc-thumb=\"#product-image-{{ image_row }}\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear }}</button>
                              </div>
                            </div>
                          </td>
                          <td><input type=\"text\" name=\"product_image[{{ image_row }}][sort_order]\" value=\"{{ product_image.sort_order }}\" placeholder=\"{{ entry_sort_order }}\" class=\"form-control\"/></td>
                          <td class=\"text-end\"><button type=\"button\" onclick=\"\$('#product-image-row-{{ image_row }}').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>
                        </tr>
                        {% set image_row = image_row + 1 %}
                      {% endfor %}
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan=\"2\"></td>
                        <td class=\"text-end\"><button type=\"button\" id=\"button-image\" data-bs-toggle=\"tooltip\" title=\"{{ button_image_add }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-reward\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_reward }}</legend>
                <div class=\"row mb-3\">
                  <label for=\"input-points\" class=\"col-sm-2 col-form-label\">{{ entry_points }}</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"points\" value=\"{{ points }}\" placeholder=\"{{ entry_points }}\" id=\"input-points\" class=\"form-control\"/>
                      {% if master_id %}
                        <div class=\"input-group-text\">
                          <div class=\"form-check form-switch\">
                            <input type=\"checkbox\" name=\"override[points]\" value=\"1\" id=\"input-variant-points\" data-oc-toggle=\"switch\" data-oc-target=\"#input-points\" class=\"form-check-input\"{% if override.points %} checked{% endif %}/> <label for=\"input-variant-points\" class=\"form-check-label\"></label>
                          </div>
                        </div>
                      {% endif %}
                    </div>
                    <div class=\"form-text\">{{ help_points }}</div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>{{ text_points }}</legend>
                <div class=\"table-responsive\">
                  <table id=\"product-reward\" class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <th>{{ entry_customer_group }}</th>
                        <th class=\"text-end\">{{ entry_reward }}&nbsp;&nbsp;{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_reward]\" value=\"1\" id=\"input-variant-product-reward\" data-oc-toggle=\"switch\" data-oc-target=\"#product-reward\" class=\"form-check-input\"{% if override.product_reward %} checked{% endif %}/> <label for=\"input-variant-product-reward\" class=\"form-check-label\"></label>
                          </div>
                          {% endif %}</th>
                      </tr>
                    </thead>
                    <tbody>
                      {% for customer_group in customer_groups %}
                        <tr>
                          <td>{{ customer_group.name }}</td>
                          <td class=\"text-end\"><input type=\"text\" name=\"product_reward[{{ customer_group.customer_group_id }}][points]\" value=\"{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}\" class=\"form-control\"/></td>
                        </tr>
                      {% endfor %}
                    </tbody>
                  </table>
                </div>
              </fieldset>
            </div>

            <div id=\"tab-seo\" class=\"tab-pane\">
              <div class=\"alert alert-info\"><i class=\"fa-solid fa-info-circle\"></i> {{ text_keyword }}</div>
              <div id=\"product-seo\" class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_store }}</th>
                      <th>{{ entry_keyword }}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td>{{ store.name }}</td>
                        <td>
                          {% for language in languages %}
                            <div class=\"input-group\">
                              <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/></div>
                              <input type=\"text\" name=\"product_seo_url[{{ store.store_id }}][{{ language.language_id }}]\" value=\"{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}\" id=\"input-keyword-{{ store.store_id }}-{{ language.language_id }}\" placeholder=\"{{ entry_keyword }}\" class=\"form-control\"/>
                            </div>
                            <div id=\"error-keyword-{{ store.store_id }}-{{ language.language_id }}\" class=\"invalid-feedback\"></div>
                          {% endfor %}</td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-design\" class=\"tab-pane\">
              <div class=\"table-responsive\">
                <table id=\"product-layout\" class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <th>{{ entry_store }}</th>
                      <th>{{ entry_layout }}{% if master_id %}
                          <div class=\"form-check form-switch float-end\">
                            <input type=\"checkbox\" name=\"override[product_layout]\" value=\"1\" id=\"input-variant-product-layout\" data-oc-toggle=\"switch\" data-oc-target=\"#product-layout\" class=\"form-check-input\"{% if override.product_layout %} checked{% endif %}/> <label for=\"input-variant-product-layout\" class=\"form-check-label\"></label>
                          </div>
                        {% endif %}</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for store in stores %}
                      <tr>
                        <td>{{ store.name }}</td>
                        <td><select name=\"product_layout[{{ store.store_id }}]\" class=\"form-select\">
                            <option value=\"\"></option>
                            {% for layout in layouts %}
                              <option value=\"{{ layout.layout_id }}\"{% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %} selected{% endif %}>{{ layout.name }}</option>
                            {% endfor %}
                          </select></td>
                      </tr>
                    {% endfor %}
                  </tbody>
                </table>
              </div>
            </div>

            <div id=\"tab-report\" class=\"tab-pane\">
              <fieldset>
                <legend>{{ text_report }}</legend>
                <div id=\"report\">{{ report }}</div>
              </fieldset>
            </div>

          </div>
          <input type=\"hidden\" name=\"product_id\" value=\"{{ product_id }}\" id=\"input-product-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language: '{{ ckeditor }}'
});

var code_row = {{ code_row }};

\$('#button-code').on('click', function() {
    var html = '';

    let code = \$('#input-code').val();
    let value = \$('#input-value').val();

    html += '<tr id=\"code-row-' + code_row + '\">';
    html += '  <td style=\"width: 1px;\">' + code + '<input type=\"hidden\" name=\"product_code[' + code_row + '][code]\" value=\"' + code + '\"/></td>';
    html += '  <td>' + value + '<div id=\"error-code-' + code_row + '\" class=\"invalid-feedback\"></div><input type=\"hidden\" name=\"product_code[' + code_row + '][value]\" value=\"' + value + '\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-code').append(html);

    code_row++;
});

\$('#product-code').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Manufacturer
\$('#input-manufacturer').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/manufacturer.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                json.unshift({
                    manufacturer_id: 0,
                    name: '{{ text_none }}'
                });

                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['manufacturer_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-manufacturer').val(decodeHTMLEntities(item['label']));
        \$('#input-manufacturer-id').val(item['value']);
    }
});

// Category
\$('#input-category').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/category.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['category_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-category').val('');

        \$('#product-category-' + item['value']).remove();

        html = '<tr id=\"product-category-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-category tbody').append(html);
    }
});

\$('#product-category').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Filter
\$('#input-filter').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/filter.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['filter_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-filter').val('');

        \$('#product-filter-' + item['value']).remove();

        html = '<tr id=\"product-filter-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-filter tbody').append(html);
    }
});

\$('#product-filter').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Downloads
\$('#input-download').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/download.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['download_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-download').val('');

        \$('#product-download-' + item['value']).remove();

        html = '<tr id=\"product-download-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-download tbody').append(html);
    }
});

\$('#product-download').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

// Related
\$('#input-related').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/product.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        label: item['name'],
                        value: item['product_id']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        \$('#input-related').val('');

        \$('#product-related-' + item['value']).remove();

        html = '<tr id=\"product-related-' + item['value'] + '\">';
        html += '  <td>' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        \$('#product-related tbody').append(html);
    }
});

\$('#product-related').on('click', '.btn', function() {
    \$(this).parent().parent().remove();
});

var attributeautocomplete = function(attribute_row) {
    \$('#input-attribute-' + attribute_row).autocomplete({
        'source': function(request, response) {
            \$.ajax({
                url: 'index.php?route=catalog/attribute.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
                dataType: 'json',
                success: function(json) {
                    response(\$.map(json, function(item) {
                        return {
                            category: item.attribute_group,
                            label: item.name,
                            value: item.attribute_id
                        }
                    }));
                }
            });
        },
        'select': function(item) {
            \$('#input-attribute-' + attribute_row).val(decodeHTMLEntities(item['label']));
            \$('#input-attribute-id-' + attribute_row).val(item['value']);
        }
    });
}

var attribute_row = {{ attribute_row }};

\$('#product-attribute tr').each(function(index) {
    attributeautocomplete(index);
});

\$('#button-attribute').on('click', function() {
    html = '<tr id=\"attribute-row-' + attribute_row + '\">';
    html += '  <td>';
    html += '    <input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"{{ entry_attribute|escape('js') }}\" id=\"input-attribute-' + attribute_row + '\" data-oc-target=\"autocomplete-attribute-' + attribute_row + '\" class=\"form-control\" autocomplete=\"off\"/>';
    html += '    <input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" id=\"input-attribute-id-' + attribute_row + '\"/>';
    html += '    <ul id=\"autocomplete-attribute-' + attribute_row + '\" class=\"dropdown-menu\"></ul>';
    html += '  </td>';
    html += '  <td>';
  {% for language in languages %}
    html += '<div class=\"input-group\">';
    html += '  <div class=\"input-group-text\"><img src=\"{{ language.image }}\" title=\"{{ language.name|escape('js') }}\" /></div>';
    html += '  <textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]\" rows=\"5\" placeholder=\"{{ entry_text|escape('js') }}\" id=\"input-text-' + attribute_row + '-{{ language.language_id }}\" class=\"form-control\"></textarea>';
    html += '</div>';
  {% endfor %}
    html += '  </td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#attribute-row-' + attribute_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-attribute').append(html);

    attributeautocomplete(attribute_row);

    attribute_row++;
});

{% if not master_id %}
var option_row = {{ option_row }};

\$('#input-option').autocomplete({
    'source': function(request, response) {
        \$.ajax({
            url: 'index.php?route=catalog/option.autocomplete&user_token={{ user_token }}&filter_name=' + encodeURIComponent(request),
            dataType: 'json',
            success: function(json) {
                response(\$.map(json, function(item) {
                    return {
                        category: item['category'],
                        label: item['name'],
                        value: item['option_id'],
                        type: item['type'],
                        option_value: item['option_value']
                    }
                }));
            }
        });
    },
    'select': function(item) {
        html = '<fieldset id=\"option-row-' + option_row + '\">';
        html += '  <legend class=\"float-none\">' + item['label'] + '</legend>';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + decodeHTMLEntities(item['label']) + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
        html += '  <input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

        html += '  <div class=\"row align-items-center\">';
        html += '    <div class=\"col-11\">';

        html += '      <div class=\"mb-3\">';
        html += '        <label for=\"input-required-' + option_row + '\" class=\"form-label\">{{ entry_required|escape('js') }}</label>';
        html += '\t       <select name=\"product_option[' + option_row + '][required]\" id=\"input-required-' + option_row + '\" class=\"form-select\">';
        html += '\t         <option value=\"1\">{{ text_yes|escape('js') }}</option>';
        html += '\t         <option value=\"0\">{{ text_no|escape('js') }}</option>';
        html += '\t       </select>';
        html += '      </div>';

        if (item['type'] == 'text') {
            html += '  <div class=\"mb-3\">';
            html += '     <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '     <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '\t </div>';
        }

        if (item['type'] == 'textarea') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"></textarea>';
            html += '\t </div>';
        }

        if (item['type'] == 'file') {
            html += '  <div class=\"mb-3 d-none\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'date') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"date\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'time') {
            html += '  <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"time\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'datetime') {
            html += '\t <div class=\"mb-3\">';
            html += '    <label for=\"input-option-' + option_row + '\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
            html += '    <input type=\"datetime-local\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"{{ entry_option_value|escape('js') }}\" id=\"input-option-' + option_row + '\" class=\"form-control\"/>';
            html += '  </div>';
        }

        if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
            html += '<div class=\"table-responsive\">';
            html += '  <table class=\"table table-bordered table-hover\">';
            html += '  \t <thead>';
            html += '      <tr>';
            html += '        <td>{{ entry_option_value|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_quantity|escape('js') }}</td>';
            html += '        <td>{{ entry_subtract|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_price|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_points|escape('js') }}</td>';
            html += '        <td class=\"text-end\">{{ entry_weight|escape('js') }}</td>';
            html += '        <td></td>';
            html += '      </tr>';
            html += '    </thead>';
            html += '    <tbody id=\"option-value-' + option_row + '\"></tbody>';
            html += '    <tfoot>';
            html += '      <tr>';
            html += '        <td colspan=\"6\"></td>';
            html += '        <td class=\"text-end\"><button type=\"button\" data-option-row=\"' + option_row + '\" data-bs-toggle=\"tooltip\" title=\"{{ button_option_value_add|escape('js') }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-plus-circle\"></i></button></td>';
            html += '      </tr>';
            html += '    </tfoot>';
            html += '  </table>';
            html += '</div>';

            html += '<select id=\"product-option-values-' + option_row + '\" class=\"d-none\">';

            for (i = 0; i < item['option_value'].length; i++) {
                html += '<option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '</select>';
        }

        html += '\t </div>';
        html += '\t <div class=\"col\">';
        html += '    <button type=\"button\" class=\"btn btn-danger\" onclick=\"\$(\\'#option-row-' + option_row + '\\').remove();\"><i class=\"fa-solid fa-minus-circle\"></i></button>';
        html += '  </div>';
        html += '</fieldset>';

        \$('#option').append(html);

        option_row++;
    }
});

var option_value_row = {{ option_value_row }};

\$('#option').on('click', '.btn-primary', function() {
    var element = this;

    if (\$(element).attr('data-option-value-row')) {
        element.option_value_row = \$(element).attr('data-option-value-row');
    } else {
        element.option_value_row = option_value_row;
    }

    \$('.modal').remove();

    html = '<div id=\"modal-option\" class=\"modal fade\">';
    html += '  <div class=\"modal-dialog\">';
    html += '    <div class=\"modal-content\">';
    html += '      <div class=\"modal-header\">';
    html += '        <h5 class=\"modal-title\"><i class=\"fa-solid fa-pencil\"></i> {{ text_option_value|escape('js') }}</h5> <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>';
    html += '      </div>';
    html += '      <div class=\"modal-body\">';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-option-value\" class=\"form-label\">{{ entry_option_value|escape('js') }}</label>';
    html += '      \t   <select name=\"option_value_id\" id=\"input-modal-option-value\" class=\"form-select\">';

    option_value = \$('#product-option-values-' + \$(element).attr('data-option-row') + ' option');

    for (i = 0; i < option_value.length; i++) {
        if (\$(element).attr('data-option-value-row') && \$(option_value[i]).val() == \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\\']').val()) {
            html += '<option value=\"' + \$(option_value[i]).val() + '\" selected>' + \$(option_value[i]).text() + '</option>';
        } else {
            html += '<option value=\"' + \$(option_value[i]).val() + '\">' + \$(option_value[i]).text() + '</option>';
        }
    }

    html += '      \t   </select>';
    html += '          <input type=\"hidden\" name=\"product_option_value_id\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\\']').val() : '') + '\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-quantity\" class=\"form-label\">{{ entry_quantity|escape('js') }}</label>';
    html += '      \t   <input type=\"text\" name=\"quantity\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\\']').val() : '1') + '\" placeholder=\"{{ entry_quantity|escape('js') }}\" id=\"input-modal-quantity\" class=\"form-control\"/>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-subtract\" class=\"form-label\">{{ entry_subtract|escape('js') }}</label>';
    html += '      \t   <select name=\"subtract\" id=\"input-modal-subtract\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\\']').val() == '1') {
        html += '        <option value=\"1\" selected>{{ text_yes|escape('js') }}</option>';
        html += '      \t <option value=\"0\">{{ text_no|escape('js') }}</option>';
    } else {
        html += '      \t <option value=\"1\">{{ text_yes|escape('js') }}</option>';
        html += '      \t <option value=\"0\" selected>{{ text_no|escape('js') }}</option>';
    }

    html += '      \t   </select>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-price\" class=\"form-label\">{{ entry_price|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '            <select name=\"price_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '+') {
        html += '      \t   <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t   <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"price\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\\']').val() : '0') + '\" placeholder=\"{{ entry_price|escape('js') }}\" id=\"input-modal-price\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-points\" class=\"form-label\">{{ entry_points|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"points_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"points\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\\']').val() : '0') + '\" placeholder=\"{{ entry_points|escape('js') }}\" id=\"input-modal-points\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '        <div class=\"mb-3\">';
    html += '      \t   <label for=\"input-modal-weight\" class=\"form-label\">{{ entry_weight|escape('js') }}</label>';
    html += '          <div class=\"input-group\">';
    html += '      \t     <select name=\"weight_prefix\" class=\"form-select\">';

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '+') {
        html += '      \t       <option value=\"+\" selected>+</option>';
    } else {
        html += '      \t       <option value=\"+\">+</option>';
    }

    if (\$(element).attr('data-option-value-row') && \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\\']').val() == '-') {
        html += '      \t       <option value=\"-\" selected>-</option>';
    } else {
        html += '      \t       <option value=\"-\">-</option>';
    }

    html += '      \t     </select>';
    html += '      \t     <input type=\"text\" name=\"weight\" value=\"' + (\$(element).attr('data-option-value-row') ? \$('input[name=\\'product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\\']').val() : '0') + '\" placeholder=\"{{ entry_weight|escape('js') }}\" id=\"input-modal-weight\" class=\"form-control\"/>';
    html += '          </div>';
    html += '        </div>';
    html += '      </div>';
    html += '      <div class=\"modal-footer\">';
    html += '\t       <button type=\"button\" id=\"button-save\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\" class=\"btn btn-primary\">{{ button_save|escape('js') }}</button> <button type=\"button\" class=\"btn btn-light\" data-bs-dismiss=\"modal\">{{ button_cancel|escape('js') }}</button>';
    html += '      </div>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';

    \$('body').append(html);

    \$('#modal-option').modal('show');

    \$('#modal-option #button-save').on('click', function() {
        html = '<tr id=\"option-value-row-' + element.option_value_row + '\">';
        html += '  <td>' + \$('#modal-option select[name=\\'option_value_id\\'] option:selected').text() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][option_value_id]\" value=\"' + \$('#modal-option select[name=\\'option_value_id\\']').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][product_option_value_id]\" value=\"' + \$('#modal-option input[name=\\'product_option_value_id\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option input[name=\\'quantity\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][quantity]\" value=\"' + \$('#modal-option input[name=\\'quantity\\']').val() + '\"/></td>';
        html += '  <td>' + (\$('#modal-option select[name=\\'subtract\\'] option:selected').val() == '1' ? '{{ text_yes|escape('js') }}' : '{{ text_no|escape('js') }}') + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][subtract]\" value=\"' + \$('#modal-option select[name=\\'subtract\\'] option:selected').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'price\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price_prefix]\" value=\"' + \$('#modal-option select[name=\\'price_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][price]\" value=\"' + \$('#modal-option input[name=\\'price\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"> ' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'points\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points_prefix]\" value=\"' + \$('#modal-option select[name=\\'points_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][points]\" value=\"' + \$('#modal-option input[name=\\'points\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\">' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + \$('#modal-option input[name=\\'weight\\']').val() + '<input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight_prefix]\" value=\"' + \$('#modal-option select[name=\\'weight_prefix\\'] option:selected').val() + '\"/><input type=\"hidden\" name=\"product_option[' + \$(element).attr('data-option-row') + '][product_option_value][' + element.option_value_row + '][weight]\" value=\"' + \$('#modal-option input[name=\\'weight\\']').val() + '\"/></td>';
        html += '  <td class=\"text-end\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"{{ button_edit|escape('js') }}\" data-option-row=\"' + \$(element).attr('data-option-row') + '\" data-option-value-row=\"' + element.option_value_row + '\"class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></button> <button type=\"button\" onclick=\"\$(\\'#option-value-row-' + element.option_value_row + '\\').remove();\" data-bs-toggle=\"tooltip\" rel=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
        html += '</tr>';

        if (\$(element).attr('data-option-value-row')) {
            \$('#option-value-row-' + element.option_value_row).replaceWith(html);
        } else {
            \$('#option-value-' + \$(element).attr('data-option-row')).append(html);

            option_value_row++;
        }

        \$('#modal-option').modal('hide');
    });
});
{% endif %}

var discount_row = {{ discount_row }};

\$('#button-discount').on('click', function() {
    html = '<tr id=\"discount-row-' + discount_row + '\">';
    html += '  <td><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '    <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select><input type=\"hidden\" name=\"product_discount[' + discount_row + '][product_discount_id]\" value=\"\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"1\" placeholder=\"{{ entry_quantity|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"{{ entry_priority|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td><select name=\"product_discount[' + discount_row + '][type]\" class=\"form-select\">';
    html += '    <option value=\"F\">{{ text_fixed }}</option>';
    html += '    <option value=\"S\">{{ text_subtract }}</option>';
    html += '    <option value=\"P\">{{ text_percentage }}</option>';
    html += '  </select></td>';
    html += '  <td><div class=\"form-check form-switch form-switch-lg\">';
    html += '    <input type=\"hidden\" name=\"product_discount[' + discount_row + '][special]\" value=\"0\"/>';
    html += '    <input type=\"checkbox\" name=\"product_discount[' + discount_row + '][special]\" value=\"1\" class=\"form-check-input\"/>';
    html += '  </div></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"{{ entry_date_start|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td><input type=\"date\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"{{ entry_date_end|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#discount-row-' + discount_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-discount tbody').append(html);

    discount_row++;
});

var image_row = {{ image_row }};

\$('#button-image').on('click', function() {
    html = '<tr id=\"product-image-row-' + image_row + '\">';
    html += '  <td><div class=\"border rounded d-block\" style=\"max-width: 300px;\">';
    html += '    <img src=\"{{ placeholder|escape('js') }}\" alt=\"\" title=\"\" id=\"thumb-image-' + image_row + '\" data-oc-placeholder=\"{{ placeholder|escape('js') }}\" class=\"img-fluid\"/> <input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-product-image-' + image_row + '\"/>';
    html += '    <div class=\"d-grid\">';
    html += '      <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-primary rounded-0\"><i class=\"fa-solid fa-pencil\"></i> {{ button_edit|escape('js') }}</button>';
    html += '      <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-product-image-' + image_row + '\" data-oc-thumb=\"#thumb-image-' + image_row + '\" class=\"btn btn-warning rounded-0\"><i class=\"fa-regular fa-trash-can\"></i> {{ button_clear|escape('js') }}</button>';
    html += '    </div>';
    html += '  </div></td>';
    html += '  <td><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"0\" placeholder=\"{{ entry_sort_order|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#product-image-row-' + image_row + '\\').remove();\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-image tbody').append(html);

    image_row++;
});

var subscription_row = {{ subscription_row }};

\$('#button-subscription').on('click', function() {
    html = '<tr id=\"subscription-row-' + subscription_row + '\">';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][subscription_plan_id]\" class=\"form-select\">';
  {% for subscription_plan in subscription_plans %}
    html += '      <option value=\"{{ subscription_plan.subscription_plan_id }}\">{{ subscription_plan.name|escape('js') }}</option>';
  {% endfor %}
    html += '  </select></td>';
    html += '  <td><select name=\"product_subscription[' + subscription_row + '][customer_group_id]\" class=\"form-select\">';
  {% for customer_group in customer_groups %}
    html += '      <option value=\"{{ customer_group.customer_group_id }}\">{{ customer_group.name|escape('js') }}</option>';
  {% endfor %}
    html += '  <select></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][trial_price]\" value=\"\" placeholder=\"{{ entry_trial_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><input type=\"text\" name=\"product_subscription[' + subscription_row + '][price]\" value=\"\" placeholder=\"{{ entry_price|escape('js') }}\" class=\"form-control\"/></td>';
    html += '  <td class=\"text-end\"><button type=\"button\" onclick=\"\$(\\'#subscription-row-' + subscription_row + '\\').remove()\" data-bs-toggle=\"tooltip\" title=\"{{ button_remove|escape('js') }}\" class=\"btn btn-danger\"><i class=\"fa-solid fa-minus-circle\"></i></button></td>';
    html += '</tr>';

    \$('#product-subscription tbody').append(html);

    subscription_row++;
});

{% if master_id %}
// Variable products
\$('input[data-oc-toggle=\\'switch\\']').on('change', function(e) {
    var element = this;

    var target = \$(this).attr('data-oc-target');

    // First we need to grab the default values
    // Now we need to enable or disable any fields in the targets
    \$.merge(\$(target), \$(target).find('input, textarea, select, button')).not('[data-oc-toggle=\\'switch\\']').each(function(i, elem) {
        // Text Textarea
        if (\$(this).is('input[type=\\'text\\'], textarea')) {
            \$(this).prop('readonly', !\$(element).prop('checked'));
        }

        // CKEditor readonly
        if (\$(this).is('[data-oc-toggle=\\'ckeditor\\']')) {
            var editor = CKEDITOR.instances[\$(this).attr('id')];

            if (editor.editable() == undefined) {
                editor.on('instanceReady', function() {
                    this.setReadOnly(!\$(element).prop('checked'));
                });
            } else {
                editor.setReadOnly(!\$(element).prop('checked'));
            }
        }

        // Radio Checkbox
        if (\$(this).is('input[type=\\'radio\\'], input[type=\\'checkbox\\'], div[data-bs-toggle=\\'buttons\\']')) {
            if (!\$(element).prop('checked')) {
                \$(this).on('click', function(e) {
                    return false;
                });
            } else {
                \$(this).off('click');
            }
        }

        // Select
        if (\$(this).is('select')) {
            if (!\$(element).prop('checked')) {
                \$(this).addClass('.disabled');

                \$(this).prop('readonly', true);
            } else {
                \$(this).removeClass('disabled');

                \$(this).prop('readonly', false);
            }

            \$(this).find('option').not(':selected').prop('disabled', !\$(element).prop('checked'));
        }

        // Button
        if (\$(this).is('button')) {
            if (!\$(element).prop('checked')) {
                \$(this).prop('disabled', true);
            } else {
                \$(this).prop('disabled', false);
            }
        }
    });
});

\$('input[data-oc-toggle=\\'switch\\']').trigger('change');
{% endif %}

\$('#report').on('click', '.pagination a', function(e) {
    e.preventDefault();

    \$('#report').load(this.href);
});
//--></script>
{{ footer }}
", "wadmin/view/template/catalog/product_form.twig", "C:\\xampp\\htdocs\\walton_v3\\wadmin\\view\\template\\catalog\\product_form.twig");
    }
}
