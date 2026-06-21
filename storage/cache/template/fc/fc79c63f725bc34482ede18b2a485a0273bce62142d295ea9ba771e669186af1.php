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

/* extension/opencart/admin/view/template/module/html.twig */
class __TwigTemplate_48c8d0b70469d4f8242c3fee540764415082274a9fb775324b481dcf25dda162 extends Template
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
          <div class=\"row mb-3\">
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
          <div class=\"tab-pane\">
            <ul class=\"nav nav-tabs\">
              ";
        // line 30
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
            // line 31
            yield "                <li class=\"nav-item\"><a href=\"#language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 31);
            yield "\" data-bs-toggle=\"tab\" class=\"nav-link";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 31)) {
                yield " active";
            }
            yield "\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "image", [], "any", false, false, false, 31);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 31);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 31);
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
        // line 33
        yield "            </ul>
            <div class=\"tab-content\">
              ";
        // line 35
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
            // line 36
            yield "                <div id=\"language-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 36);
            yield "\" class=\"tab-pane";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 36)) {
                yield " active";
            }
            yield "\">
                  <div class=\"row mb-3\">
                    <label for=\"input-title-";
            // line 38
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 38);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_title"] ?? null);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_description[";
            // line 40
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40);
            yield "][title]\" placeholder=\"";
            yield ($context["entry_title"] ?? null);
            yield "\" id=\"input-title-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40);
            yield "\" value=\"";
            yield (((($_v0 = ($context["module_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["module_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 40)] ?? null) : null), "title", [], "any", false, false, false, 40)) : (""));
            yield "\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-description-";
            // line 44
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            yield "\" class=\"col-sm-2 col-form-label\">";
            yield ($context["entry_description"] ?? null);
            yield "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"module_description[";
            // line 46
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            yield "][description]\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            yield "\" data-oc-toggle=\"ckeditor\" class=\"form-control\">";
            yield (((($_v2 = ($context["module_description"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46)] ?? null) : null)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v3 = ($context["module_description"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46)] ?? null) : null), "description", [], "any", false, false, false, 46)) : (""));
            yield "</textarea>
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
        // line 51
        yield "            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 54
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"status\" value=\"0\"/>
                <input type=\"checkbox\" name=\"status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 58
        if (($context["status"] ?? null)) {
            yield " checked";
        }
        yield "/>
              </div>
            </div>
          </div>
          <input type=\"hidden\" name=\"module_id\" value=\"";
        // line 62
        yield ($context["module_id"] ?? null);
        yield "\" id=\"input-module-id\"/>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language:'";
        // line 70
        yield ($context["ckeditor"] ?? null);
        yield "'
});
//--></script>
";
        // line 73
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
        return "extension/opencart/admin/view/template/module/html.twig";
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
        return array (  279 => 73,  273 => 70,  262 => 62,  253 => 58,  246 => 54,  241 => 51,  216 => 46,  209 => 44,  196 => 40,  189 => 38,  179 => 36,  162 => 35,  158 => 33,  131 => 31,  114 => 30,  103 => 24,  98 => 22,  93 => 20,  88 => 18,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
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
          <div class=\"row mb-3\">
            <label for=\"input-name\" class=\"col-sm-2 col-form-label\">{{ entry_name }}</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"{{ name }}\" placeholder=\"{{ entry_name }}\" id=\"input-name\" class=\"form-control\"/>
              <div id=\"error-name\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"tab-pane\">
            <ul class=\"nav nav-tabs\">
              {% for language in languages %}
                <li class=\"nav-item\"><a href=\"#language-{{ language.language_id }}\" data-bs-toggle=\"tab\" class=\"nav-link{% if loop.first %} active{% endif %}\"><img src=\"{{ language.image }}\" title=\"{{ language.name }}\"/> {{ language.name }}</a></li>
              {% endfor %}
            </ul>
            <div class=\"tab-content\">
              {% for language in languages %}
                <div id=\"language-{{ language.language_id }}\" class=\"tab-pane{% if loop.first %} active{% endif %}\">
                  <div class=\"row mb-3\">
                    <label for=\"input-title-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_title }}</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"module_description[{{ language.language_id }}][title]\" placeholder=\"{{ entry_title }}\" id=\"input-title-{{ language.language_id }}\" value=\"{{ module_description[language.language_id] ? module_description[language.language_id].title }}\" class=\"form-control\"/>
                    </div>
                  </div>
                  <div class=\"row mb-3\">
                    <label for=\"input-description-{{ language.language_id }}\" class=\"col-sm-2 col-form-label\">{{ entry_description }}</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"module_description[{{ language.language_id }}][description]\" placeholder=\"{{ entry_description }}\" id=\"input-description-{{ language.language_id }}\" data-oc-toggle=\"ckeditor\" class=\"form-control\">{{ module_description[language.language_id] ? module_description[language.language_id].description }}</textarea>
                    </div>
                  </div>
                </div>
              {% endfor %}
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
<script type=\"text/javascript\"><!--
\$('textarea[data-oc-toggle=\\'ckeditor\\']').ckeditor({
    language:'{{ ckeditor }}'
});
//--></script>
{{ footer }}
", "extension/opencart/admin/view/template/module/html.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\opencart\\admin\\view\\template\\module\\html.twig");
    }
}
