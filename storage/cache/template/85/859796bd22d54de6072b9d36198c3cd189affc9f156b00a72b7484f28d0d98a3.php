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
        yield "<div class=\"bb-sidebar-block pt-4\">

        ";
        // line 8
        yield "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 10
            yield "
        <div class=\"border-b border-solid border-[#eee] pt-[10px] mb-[10px] last:border-b-0\">

            <h4 class=\"text-[16px] font-semibold text-[#3d4750] mb-[15px]\">
                ";
            // line 14
            yield CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 14);
            yield "
            </h4>

            <div id=\"filter-group-";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 17);
            yield "\">
                <ul>

                    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 21
                yield "
                        <li class=\"relative block mb-[14px]\">

                            <label class=\"bb-sidebar-block-item relative flex items-center cursor-pointer\">

                                <input
                                    type=\"checkbox\"
                                    name=\"filter[]\"
                                    value=\"";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 29);
                yield "\"
                                    id=\"input-filter-";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 30);
                yield "\"
                                    class=\"mr-3 h-[18px] w-[18px] rounded border-[#ddd]\"
                                    ";
                // line 32
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 32), ($context["filter_category"] ?? null))) {
                    yield "checked";
                }
                // line 33
                yield "                                >

                                <span class=\"text-[#777] text-[14px] leading-[20px] font-normal capitalize\">
                                    ";
                // line 36
                yield CoreExtension::getAttribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 36);
                yield "
                                </span>

                            </label>

                        </li>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['filter'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "
                </ul>
            </div>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['filter_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "
    <div class=\"text-center\">
        <button
            type=\"button\"
            id=\"button-clear-filters\"
            class=\"bg-red-500 hover:bg-red-600 text-white font-medium py-1 px-4 rounded-lg transition-all duration-300\">
            <i class=\"ri-refresh-line mr-2\"></i>
            Reset
        </button>
    </div>

</div>


<script type=\"text/javascript\"><!--
(function() {
    var baseUrl = '";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "js");
        yield "';
    var debounceTimer = null;

    function loadCategoryProducts(url) {
        var separator = url.indexOf('?') > -1 ? '&' : '?';
        var ajaxUrl = url + separator + 'ajax=1';

        \$('#category-products').css('opacity', '0.5');
        \$('input[name^=\\'filter\\'], #input-sort, #input-limit').prop('disabled', true);

        \$.ajax({
            url: ajaxUrl,
            type: 'get',
            dataType: 'json',
            success: function(json) {
                if (json['success']) {
                    \$('#category-products').html(json['html']);
                    history.pushState({}, '', url);
                }
            },
            error: function() {},
            complete: function() {
                \$('#category-products').css('opacity', '1');
                \$('input[name^=\\'filter\\'], #input-sort, #input-limit').prop('disabled', false);
                \$('#input-sort, #input-limit').removeClass('hide-select').addClass('block');
                \$('#category-products .pro-bb-content').removeClass('width-100');
                
                updateClearLink();
            }
        });
    }

    function buildFilterUrl() {
        var filter = [];
        \$('input[name^=\\'filter\\']:checked').each(function() {
            filter.push(this.value);
        });

        var url = baseUrl;
        if (filter.length > 0) {
            url += '&filter=' + filter.join(',');
        }

        return url;
    }

    function updateClearLink() {
        var hasFilters = \$('input[name^=\\'filter\\']:checked').length > 0;
        \$('#button-clear-filters').toggle(hasFilters);
    }

    // Event delegation for dynamic elements (sort, limit, pagination, view toggle)
    \$(document).on('change', '#input-sort', function() {
        loadCategoryProducts(this.value);
    });

    \$(document).on('change', '#input-limit', function() {
        loadCategoryProducts(this.value);
    });

    \$(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        loadCategoryProducts(\$(this).attr('href'));
    });

    \$('input[name^=\\'filter\\']').on('change', function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(function() {
            loadCategoryProducts(buildFilterUrl());
        }, 300);
    });

    \$('#button-clear-filters').on('click', function() {
        \$('input[name^=\\'filter\\']:checked').prop('checked', false);
        loadCategoryProducts(baseUrl);
    });

    window.addEventListener('popstate', function() {
        var url = window.location.href;
        url = url.replace(/[&?]ajax=\\d/, '');
        loadCategoryProducts(url);
    });

})();
//--></script>

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
        return array (  147 => 67,  129 => 51,  117 => 44,  103 => 36,  98 => 33,  94 => 32,  89 => 30,  85 => 29,  75 => 21,  71 => 20,  65 => 17,  59 => 14,  53 => 10,  49 => 9,  46 => 8,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"bb-sidebar-block pt-4\">

        {# <div class=\"bb-sidebar-title mb-[20px] flex items-center justify-between\">
            <h3 class=\"font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]\">
                {{ heading_title }}
            </h3>
        </div> #}

    {% for filter_group in filter_groups %}

        <div class=\"border-b border-solid border-[#eee] pt-[10px] mb-[10px] last:border-b-0\">

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

    <div class=\"text-center\">
        <button
            type=\"button\"
            id=\"button-clear-filters\"
            class=\"bg-red-500 hover:bg-red-600 text-white font-medium py-1 px-4 rounded-lg transition-all duration-300\">
            <i class=\"ri-refresh-line mr-2\"></i>
            Reset
        </button>
    </div>

</div>


<script type=\"text/javascript\"><!--
(function() {
    var baseUrl = '{{ action|escape('js') }}';
    var debounceTimer = null;

    function loadCategoryProducts(url) {
        var separator = url.indexOf('?') > -1 ? '&' : '?';
        var ajaxUrl = url + separator + 'ajax=1';

        \$('#category-products').css('opacity', '0.5');
        \$('input[name^=\\'filter\\'], #input-sort, #input-limit').prop('disabled', true);

        \$.ajax({
            url: ajaxUrl,
            type: 'get',
            dataType: 'json',
            success: function(json) {
                if (json['success']) {
                    \$('#category-products').html(json['html']);
                    history.pushState({}, '', url);
                }
            },
            error: function() {},
            complete: function() {
                \$('#category-products').css('opacity', '1');
                \$('input[name^=\\'filter\\'], #input-sort, #input-limit').prop('disabled', false);
                \$('#input-sort, #input-limit').removeClass('hide-select').addClass('block');
                \$('#category-products .pro-bb-content').removeClass('width-100');
                
                updateClearLink();
            }
        });
    }

    function buildFilterUrl() {
        var filter = [];
        \$('input[name^=\\'filter\\']:checked').each(function() {
            filter.push(this.value);
        });

        var url = baseUrl;
        if (filter.length > 0) {
            url += '&filter=' + filter.join(',');
        }

        return url;
    }

    function updateClearLink() {
        var hasFilters = \$('input[name^=\\'filter\\']:checked').length > 0;
        \$('#button-clear-filters').toggle(hasFilters);
    }

    // Event delegation for dynamic elements (sort, limit, pagination, view toggle)
    \$(document).on('change', '#input-sort', function() {
        loadCategoryProducts(this.value);
    });

    \$(document).on('change', '#input-limit', function() {
        loadCategoryProducts(this.value);
    });

    \$(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        loadCategoryProducts(\$(this).attr('href'));
    });

    \$('input[name^=\\'filter\\']').on('change', function() {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(function() {
            loadCategoryProducts(buildFilterUrl());
        }, 300);
    });

    \$('#button-clear-filters').on('click', function() {
        \$('input[name^=\\'filter\\']:checked').prop('checked', false);
        loadCategoryProducts(baseUrl);
    });

    window.addEventListener('popstate', function() {
        var url = window.location.href;
        url = url.replace(/[&?]ajax=\\d/, '');
        loadCategoryProducts(url);
    });

})();
//--></script>

", "extension/blueberry/catalog/view/template/module/filter.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\module\\filter.twig");
    }
}
