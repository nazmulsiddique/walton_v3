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

/* extension/opencart/admin/view/template/module/banner.twig */
class __TwigTemplate_ca8e1f080db133e7ef512a82c18f059a6ccc2c850e63ce33551733f9d5293290 extends Template
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
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 18
        yield ($context["text_edit"] ?? null);
        yield "</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"";
        // line 20
        yield ($context["save"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">";
        // line 22
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 24
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-banner\" class=\"col-sm-2 col-form-label\">";
        // line 29
        yield ($context["entry_banner"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"banner_id\" id=\"input-banner\" class=\"form-select\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 33
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 33);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "banner_id", [], "any", false, false, false, 33) == ($context["banner_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "name", [], "any", false, false, false, 33);
            yield "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-effect\" class=\"col-sm-2 col-form-label\">";
        // line 39
        yield ($context["entry_effect"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"effect\" id=\"input-effect\" class=\"form-select\">
                <option value=\"slide\"";
        // line 42
        if ((($context["effect"] ?? null) == "slide")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_slide"] ?? null);
        yield "</option>
                <option value=\"fade\"";
        // line 43
        if ((($context["effect"] ?? null) == "fade")) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_fade"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-items\" class=\"col-sm-2 col-form-label\">";
        // line 48
        yield ($context["entry_items"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"items\" value=\"";
        // line 50
        yield ($context["items"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_items"] ?? null);
        yield "\" id=\"input-items\" class=\"form-control\"/>
              <div class=\"form-text text-muted\">";
        // line 51
        yield ($context["help_items"] ?? null);
        yield "</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-controls\" class=\"col-sm-2 col-form-label\">";
        // line 55
        yield ($context["entry_controls"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"controls\" id=\"input-controls\" class=\"form-select\">
                <option value=\"1\"";
        // line 58
        if ((($context["controls"] ?? null) == 1)) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_yes"] ?? null);
        yield "</option>
                <option value=\"0\"";
        // line 59
        if ((($context["controls"] ?? null) == 0)) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_no"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-indicators\" class=\"col-sm-2 col-form-label\">";
        // line 64
        yield ($context["entry_indicators"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"indicators\" id=\"input-indicators\" class=\"form-select\">
                <option value=\"1\"";
        // line 67
        if ((($context["indicators"] ?? null) == 1)) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_yes"] ?? null);
        yield "</option>
                <option value=\"0\"";
        // line 68
        if ((($context["indicators"] ?? null) == 0)) {
            yield " selected";
        }
        yield ">";
        yield ($context["text_no"] ?? null);
        yield "</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-interval\" class=\"col-sm-2 col-form-label\">";
        // line 73
        yield ($context["entry_interval"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"interval\" value=\"";
        // line 75
        yield ($context["interval"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_interval"] ?? null);
        yield "\" id=\"input-interval\" class=\"form-control\"/>
              <div id=\"error-interval\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-width\" class=\"col-sm-2 col-form-label\">";
        // line 80
        yield ($context["entry_width"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 82
        yield ($context["width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-width\" class=\"form-control\"/>
              <div id=\"error-width\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-height\" class=\"col-sm-2 col-form-label\">";
        // line 87
        yield ($context["entry_height"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 89
        yield ($context["height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-height\" class=\"form-control\"/>
              <div id=\"error-height\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 94
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 98
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 102
        yield ($context["module_id"] ?? null);
        yield "\" id=\"input-module-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 108
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
        return "extension/opencart/admin/view/template/module/banner.twig";
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
        return array (  310 => 108,  301 => 102,  292 => 98,  285 => 94,  275 => 89,  270 => 87,  260 => 82,  255 => 80,  245 => 75,  240 => 73,  228 => 68,  220 => 67,  214 => 64,  202 => 59,  194 => 58,  188 => 55,  181 => 51,  175 => 50,  170 => 48,  158 => 43,  150 => 42,  144 => 39,  138 => 35,  123 => 33,  119 => 32,  113 => 29,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}{{ column_left }}
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"{{ button_save }}\" class=\"btn btn-primary\"><i class=\"fa-solid fa-save\"></i></button>
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
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-pencil\"></i> {{ text_edit }}</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"{{ save }}\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3 required\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-banner\" class=\"col-sm-2 col-form-label\">{{ entry_banner }}</label>
            <div class=\"col-sm-10\">
              <select name=\"banner_id\" id=\"input-banner\" class=\"form-select\">
                {% for banner in banners %}
                  <option value=\"{{ banner.banner_id }}\"{% if banner.banner_id == banner_id %} selected{% endif %}>{{ banner.name }}</option>
                {% endfor %}
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-effect\" class=\"col-sm-2 col-form-label\">{{ entry_effect }}</label>
            <div class=\"col-sm-10\">
              <select name=\"effect\" id=\"input-effect\" class=\"form-select\">
                <option value=\"slide\"{% if effect == 'slide' %} selected{% endif %}>{{ text_slide }}</option>
                <option value=\"fade\"{% if effect == 'fade' %} selected{% endif %}>{{ text_fade }}</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-items\" class=\"col-sm-2 col-form-label\">{{ entry_items }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"items\" value=\"{{ items }}\" placeholder=\"{{ entry_items }}\" id=\"input-items\" class=\"form-control\"/>
              <div class=\"form-text text-muted\">{{ help_items }}</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-controls\" class=\"col-sm-2 col-form-label\">{{ entry_controls }}</label>
            <div class=\"col-sm-10\">
              <select name=\"controls\" id=\"input-controls\" class=\"form-select\">
                <option value=\"1\"{% if controls == 1 %} selected{% endif %}>{{ text_yes }}</option>
                <option value=\"0\"{% if controls == 0 %} selected{% endif %}>{{ text_no }}</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-indicators\" class=\"col-sm-2 col-form-label\">{{ entry_indicators }}</label>
            <div class=\"col-sm-10\">
              <select name=\"indicators\" id=\"input-indicators\" class=\"form-select\">
                <option value=\"1\"{% if indicators == 1 %} selected{% endif %}>{{ text_yes }}</option>
                <option value=\"0\"{% if indicators == 0 %} selected{% endif %}>{{ text_no }}</option>
              </select>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label for=\"input-interval\" class=\"col-sm-2 col-form-label\">{{ entry_interval }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"interval\" value=\"{{ interval }}\" placeholder=\"{{ entry_interval }}\" id=\"input-interval\" class=\"form-control\"/>
              <div id=\"error-interval\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-width\" class=\"col-sm-2 col-form-label\">{{ entry_width }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"{{ width }}\" placeholder=\"{{ entry_width }}\" id=\"input-width\" class=\"form-control\"/>
              <div id=\"error-width\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-height\" class=\"col-sm-2 col-form-label\">{{ entry_height }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"{{ height }}\" placeholder=\"{{ entry_height }}\" id=\"input-height\" class=\"form-control\"/>
              <div id=\"error-height\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">{{ entry_status }}</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"{% if status %} checked{% endif %}/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"module_id\" value=\"{{ module_id }}\" id=\"input-module-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
{{ footer }}
", "extension/opencart/admin/view/template/module/banner.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\opencart\\admin\\view\\template\\module\\banner.twig");
    }
}
