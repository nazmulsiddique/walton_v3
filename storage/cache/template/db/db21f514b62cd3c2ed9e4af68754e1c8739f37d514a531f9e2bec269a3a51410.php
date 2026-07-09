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

/* extension/blueberry/catalog/view/template/module/category.twig */
class __TwigTemplate_3882da2f6b46ef8c63a0afb5965a3ba267362cf1414c6426696dc024b6d1be04 extends Template
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
        yield "<div class=\"rounded-lg border border-gray-200 overflow-hidden\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 3) == ($context["category_id"] ?? null))) {
                // line 4
                yield "            <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 4);
                yield "\"
               class=\"block px-4 py-3 text-sm font-medium text-white bg-blue-600 border-b border-gray-200\">
                ";
                // line 6
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6);
                yield "
            </a>

            ";
                // line 9
                if (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 9)) {
                    // line 10
                    yield "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 10));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 11
                        yield "                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["child"], "category_id", [], "any", false, false, false, 11) == ($context["child_id"] ?? null))) {
                            // line 12
                            yield "                        <a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 12);
                            yield "\"
                           class=\"block pl-8 pr-4 py-3 text-sm text-white bg-blue-500 border-b border-gray-200\">
                            - ";
                            // line 14
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 14);
                            yield "
                        </a>
                    ";
                        } else {
                            // line 17
                            yield "                        <a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 17);
                            yield "\"
                           class=\"block pl-8 pr-4 py-3 text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-200 transition\">
                            - ";
                            // line 19
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 19);
                            yield "
                        </a>
                    ";
                        }
                        // line 22
                        yield "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    yield "            ";
                }
                // line 24
                yield "
        ";
            } else {
                // line 26
                yield "            ";
                // line 30
                yield "        ";
            }
            // line 31
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        yield "</div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/module/category.twig";
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
        return array (  122 => 32,  116 => 31,  113 => 30,  111 => 26,  107 => 24,  104 => 23,  98 => 22,  92 => 19,  86 => 17,  80 => 14,  74 => 12,  71 => 11,  66 => 10,  64 => 9,  58 => 6,  52 => 4,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"rounded-lg border border-gray-200 overflow-hidden\">
    {% for category in categories %}
        {% if category.category_id == category_id %}
            <a href=\"{{ category.href }}\"
               class=\"block px-4 py-3 text-sm font-medium text-white bg-blue-600 border-b border-gray-200\">
                {{ category.name }}
            </a>

            {% if category.children %}
                {% for child in category.children %}
                    {% if child.category_id == child_id %}
                        <a href=\"{{ child.href }}\"
                           class=\"block pl-8 pr-4 py-3 text-sm text-white bg-blue-500 border-b border-gray-200\">
                            - {{ child.name }}
                        </a>
                    {% else %}
                        <a href=\"{{ child.href }}\"
                           class=\"block pl-8 pr-4 py-3 text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-200 transition\">
                            - {{ child.name }}
                        </a>
                    {% endif %}
                {% endfor %}
            {% endif %}

        {% else %}
            {# <a href=\"{{ category.href }}\"
               class=\"block px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 border-b border-gray-200 transition\">
                {{ category.name }}
            </a> #}
        {% endif %}
    {% endfor %}
</div>", "extension/blueberry/catalog/view/template/module/category.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\module\\category.twig");
    }
}
