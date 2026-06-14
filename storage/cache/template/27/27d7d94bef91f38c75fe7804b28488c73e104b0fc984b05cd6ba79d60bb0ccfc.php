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

/* extension/blueberry/catalog/view/template/common/home.twig */
class __TwigTemplate_4e4d462242a847222afa5a093b7a84cd9a4c94b7b73d58dd8946c20a3f858007 extends Template
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

<div id=\"common-home\" class=\"max-w-[1320px] mx-auto px-4\">

    ";
        // line 5
        $context["content_class"] = "col-span-12";
        // line 6
        yield "
    ";
        // line 7
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 8
            yield "        ";
            $context["content_class"] = "col-span-12 lg:col-span-6";
            // line 9
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 10
            yield "        ";
            $context["content_class"] = "col-span-12 lg:col-span-9";
            // line 11
            yield "    ";
        }
        // line 12
        yield "
    <div class=\"grid grid-cols-12 gap-6\">

        ";
        // line 15
        if (($context["column_left"] ?? null)) {
            // line 16
            yield "            <div class=\"col-span-12 lg:col-span-3\">
                ";
            // line 17
            yield ($context["column_left"] ?? null);
            yield "
            </div>
        ";
        }
        // line 20
        yield "
        <main id=\"content\" class=\"";
        // line 21
        yield ($context["content_class"] ?? null);
        yield "\">
            ";
        // line 22
        yield ($context["content_top"] ?? null);
        yield "
            ";
        // line 23
        yield ($context["content_bottom"] ?? null);
        yield "
        </main>

        ";
        // line 26
        if (($context["column_right"] ?? null)) {
            // line 27
            yield "            <div class=\"col-span-12 lg:col-span-3\">
                ";
            // line 28
            yield ($context["column_right"] ?? null);
            yield "
            </div>
        ";
        }
        // line 31
        yield "
    </div>

</div>

";
        // line 36
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/common/home.twig";
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
        return array (  119 => 36,  112 => 31,  106 => 28,  103 => 27,  101 => 26,  95 => 23,  91 => 22,  87 => 21,  84 => 20,  78 => 17,  75 => 16,  73 => 15,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div id=\"common-home\" class=\"max-w-[1320px] mx-auto px-4\">

    {% set content_class = 'col-span-12' %}

    {% if column_left and column_right %}
        {% set content_class = 'col-span-12 lg:col-span-6' %}
    {% elseif column_left or column_right %}
        {% set content_class = 'col-span-12 lg:col-span-9' %}
    {% endif %}

    <div class=\"grid grid-cols-12 gap-6\">

        {% if column_left %}
            <div class=\"col-span-12 lg:col-span-3\">
                {{ column_left }}
            </div>
        {% endif %}

        <main id=\"content\" class=\"{{ content_class }}\">
            {{ content_top }}
            {{ content_bottom }}
        </main>

        {% if column_right %}
            <div class=\"col-span-12 lg:col-span-3\">
                {{ column_right }}
            </div>
        {% endif %}

    </div>

</div>

{{ footer }}", "extension/blueberry/catalog/view/template/common/home.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\common\\home.twig");
    }
}
