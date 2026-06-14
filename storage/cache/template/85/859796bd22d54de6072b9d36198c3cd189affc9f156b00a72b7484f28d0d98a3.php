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

/* extension/blueberry/catalog/view/template/module/filter.twig */
class __TwigTemplate_1013b9332c43d798a87ef6a4423228b8c6f1b2086f59a86996bd7125c5e7bd99 extends Template
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
        yield "
<div class=\"bb-shop-wrap bg-[#f8f8fb] border border-solid border-[#eee] rounded-[20px] sticky top-0\">

    <div class=\"bb-sidebar-block p-[20px]\">

        <div class=\"bb-sidebar-title mb-[20px]\">
            <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">
                ";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "
            </h3>
        </div>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 13
            yield "
            <div class=\"border-b border-solid border-[#eee] pb-[20px] mb-[20px] last:border-b-0\">

                <h4 class=\"text-[16px] font-semibold text-[#3d4750] mb-[15px]\">
                    ";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 17);
            yield "
                </h4>

                <div id=\"filter-group-";
            // line 20
            yield CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 20);
            yield "\">
                    <ul>

                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 24
                yield "
                            <li class=\"relative block mb-[14px]\">

                                <label class=\"bb-sidebar-block-item relative flex items-center cursor-pointer\">

                                    <input
                                        type=\"checkbox\"
                                        name=\"filter[]\"
                                        value=\"";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 32);
                yield "\"
                                        id=\"input-filter-";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 33);
                yield "\"
                                        class=\"mr-3 h-[18px] w-[18px] rounded border-[#ddd]\"
                                        ";
                // line 35
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 35), ($context["filter_category"] ?? null))) {
                    yield "checked";
                }
                // line 36
                yield "                                    >

                                    <span class=\"text-[#777] text-[14px] leading-[20px] font-normal capitalize\">
                                        ";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 39);
                yield "
                                    </span>

                                </label>

                            </li>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "
                    </ul>
                </div>

            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filter_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "
        <button
          type=\"button\"
          id=\"button-reset-filter\"
          class=\"w-full bg-[#ef4444] hover:bg-[#dc2626] text-white font-medium py-[12px] px-[20px] rounded-[10px] transition-all duration-300\">
          <i class=\"ri-refresh-line mr-2\"></i>
          Reset Filter
      </button>

    </div>

</div>
<script>
let filterTimeout;

\$('input[name^=\"filter\"]').on('change', function() {

    clearTimeout(filterTimeout);

    filterTimeout = setTimeout(function() {

        let filter = [];

        \$('input[name^=\"filter\"]:checked').each(function() {
            filter.push(\$(this).val());
        });

        if (filter.length) {
            location = '";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "js");
        yield "&filter=' + filter.join(',');
        } else {
            location = '";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "js");
        yield "';
        }

    }, 500);

});
\$('#button-reset-filter').on('click', function() {
    window.location.href = '";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "js");
        yield "';
});
</script>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/module/filter.twig";
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
        return array (  183 => 91,  173 => 84,  168 => 82,  138 => 54,  126 => 47,  112 => 39,  107 => 36,  103 => 35,  98 => 33,  94 => 32,  84 => 24,  80 => 23,  74 => 20,  68 => 17,  62 => 13,  58 => 12,  51 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<div class=\"bb-shop-wrap bg-[#f8f8fb] border border-solid border-[#eee] rounded-[20px] sticky top-0\">

    <div class=\"bb-sidebar-block p-[20px]\">

        <div class=\"bb-sidebar-title mb-[20px]\">
            <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">
                {{ heading_title }}
            </h3>
        </div>

        {% for filter_group in filter_groups %}

            <div class=\"border-b border-solid border-[#eee] pb-[20px] mb-[20px] last:border-b-0\">

                <h4 class=\"text-[16px] font-semibold text-[#3d4750] mb-[15px]\">
                    {{ filter_group.name }}
                </h4>

                <div id=\"filter-group-{{ filter_group.filter_group_id }}\">
                    <ul>

                        {% for filter in filter_group.filter %}

                            <li class=\"relative block mb-[14px]\">

                                <label class=\"bb-sidebar-block-item relative flex items-center cursor-pointer\">

                                    <input
                                        type=\"checkbox\"
                                        name=\"filter[]\"
                                        value=\"{{ filter.filter_id }}\"
                                        id=\"input-filter-{{ filter.filter_id }}\"
                                        class=\"mr-3 h-[18px] w-[18px] rounded border-[#ddd]\"
                                        {% if filter.filter_id in filter_category %}checked{% endif %}
                                    >

                                    <span class=\"text-[#777] text-[14px] leading-[20px] font-normal capitalize\">
                                        {{ filter.name }}
                                    </span>

                                </label>

                            </li>

                        {% endfor %}

                    </ul>
                </div>

            </div>

        {% endfor %}

        <button
          type=\"button\"
          id=\"button-reset-filter\"
          class=\"w-full bg-[#ef4444] hover:bg-[#dc2626] text-white font-medium py-[12px] px-[20px] rounded-[10px] transition-all duration-300\">
          <i class=\"ri-refresh-line mr-2\"></i>
          Reset Filter
      </button>

    </div>

</div>
<script>
let filterTimeout;

\$('input[name^=\"filter\"]').on('change', function() {

    clearTimeout(filterTimeout);

    filterTimeout = setTimeout(function() {

        let filter = [];

        \$('input[name^=\"filter\"]:checked').each(function() {
            filter.push(\$(this).val());
        });

        if (filter.length) {
            location = '{{ action|escape('js') }}&filter=' + filter.join(',');
        } else {
            location = '{{ action|escape('js') }}';
        }

    }, 500);

});
\$('#button-reset-filter').on('click', function() {
    window.location.href = '{{ action|escape('js') }}';
});
</script>

", "extension/blueberry/catalog/view/template/module/filter.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\module\\filter.twig");
    }
}
