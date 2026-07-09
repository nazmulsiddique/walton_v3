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

/* extension/blueberry/catalog/view/template/common/pagination.twig */
class __TwigTemplate_7b40cb9397cb62748100b844e999b3edc3dcd82b3fdd0f2a6c0a12aa57e6285c extends Template
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
        yield "<ul class=\"flex flex-wrap items-center pagination\">

    ";
        // line 3
        if (($context["first"] ?? null)) {
            // line 4
            yield "        <li class=\"leading-[28px] mr-[6px]\">
            <a href=\"";
            // line 5
            yield ($context["first"] ?? null);
            yield "\"
               class=\"transition-all duration-[0.3s] ease-in-out px-[10px] h-[32px] bg-[#f8f8fb] text-[#777] border border-[#eee] rounded-[10px] flex items-center justify-center hover:bg-[#3d4750] hover:text-white\">
                |&lt; First
            </a>
        </li>
    ";
        }
        // line 11
        yield "
    ";
        // line 12
        if (($context["prev"] ?? null)) {
            // line 13
            yield "        <li class=\"leading-[28px] mr-[6px]\">
            <a href=\"";
            // line 14
            yield ($context["prev"] ?? null);
            yield "\"
               class=\"transition-all duration-[0.3s] ease-in-out px-[10px] h-[32px] bg-[#f8f8fb] text-[#777] border border-[#eee] rounded-[10px] flex items-center justify-center hover:bg-[#3d4750] hover:text-white\">
                &lt; Previous
            </a>
        </li>
    ";
        }
        // line 20
        yield "
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 22
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 22) == ($context["page"] ?? null))) {
                // line 23
                yield "            <li class=\"leading-[28px] mr-[6px]\">
                <span class=\"w-[32px] h-[32px] bg-[#3d4750] text-white border border-[#3d4750] rounded-[10px] flex items-center justify-center text-[15px]\">
                    ";
                // line 25
                yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 25);
                yield "
                </span>
            </li>
        ";
            } else {
                // line 29
                yield "            <li class=\"leading-[28px] mr-[6px]\">
                <a href=\"";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 30);
                yield "\"
                   class=\"transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] bg-[#f8f8fb] border border-[#eee] rounded-[10px] flex items-center justify-center text-[15px] hover:bg-[#3d4750] hover:text-white\">
                    ";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, false, 32);
                yield "
                </a>
            </li>
        ";
            }
            // line 36
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "
    ";
        // line 38
        if (($context["next"] ?? null)) {
            // line 39
            yield "        <li class=\"leading-[28px] mr-[6px]\">
            <a href=\"";
            // line 40
            yield ($context["next"] ?? null);
            yield "\"
               class=\"transition-all duration-[0.3s] ease-in-out px-[10px] h-[32px] bg-[#f8f8fb] text-[#777] border border-[#eee] rounded-[10px] flex items-center justify-center hover:bg-[#3d4750] hover:text-white\">
                Next &gt;
            </a>
        </li>
    ";
        }
        // line 46
        yield "
    ";
        // line 47
        if (($context["last"] ?? null)) {
            // line 48
            yield "        <li class=\"leading-[28px]\">
            <a href=\"";
            // line 49
            yield ($context["last"] ?? null);
            yield "\"
               class=\"transition-all duration-[0.3s] ease-in-out px-[10px] h-[32px] bg-[#f8f8fb] text-[#777] border border-[#eee] rounded-[10px] flex items-center justify-center hover:bg-[#3d4750] hover:text-white\">
               Last &gt;|
            </a>
        </li>
    ";
        }
        // line 55
        yield "
</ul>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/common/pagination.twig";
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
        return array (  153 => 55,  144 => 49,  141 => 48,  139 => 47,  136 => 46,  127 => 40,  124 => 39,  122 => 38,  119 => 37,  113 => 36,  106 => 32,  101 => 30,  98 => 29,  91 => 25,  87 => 23,  84 => 22,  80 => 21,  77 => 20,  68 => 14,  65 => 13,  63 => 12,  60 => 11,  51 => 5,  48 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<ul class=\"flex flex-wrap items-center pagination\">

    {% if first %}
        <li class=\"leading-[28px] mr-[6px]\">
            <a href=\"{{ first }}\"
               class=\"transition-all duration-[0.3s] ease-in-out px-[10px] h-[32px] bg-[#f8f8fb] text-[#777] border border-[#eee] rounded-[10px] flex items-center justify-center hover:bg-[#3d4750] hover:text-white\">
                |&lt; First
            </a>
        </li>
    {% endif %}

    {% if prev %}
        <li class=\"leading-[28px] mr-[6px]\">
            <a href=\"{{ prev }}\"
               class=\"transition-all duration-[0.3s] ease-in-out px-[10px] h-[32px] bg-[#f8f8fb] text-[#777] border border-[#eee] rounded-[10px] flex items-center justify-center hover:bg-[#3d4750] hover:text-white\">
                &lt; Previous
            </a>
        </li>
    {% endif %}

    {% for link in links %}
        {% if link.page == page %}
            <li class=\"leading-[28px] mr-[6px]\">
                <span class=\"w-[32px] h-[32px] bg-[#3d4750] text-white border border-[#3d4750] rounded-[10px] flex items-center justify-center text-[15px]\">
                    {{ link.page }}
                </span>
            </li>
        {% else %}
            <li class=\"leading-[28px] mr-[6px]\">
                <a href=\"{{ link.href }}\"
                   class=\"transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] bg-[#f8f8fb] border border-[#eee] rounded-[10px] flex items-center justify-center text-[15px] hover:bg-[#3d4750] hover:text-white\">
                    {{ link.page }}
                </a>
            </li>
        {% endif %}
    {% endfor %}

    {% if next %}
        <li class=\"leading-[28px] mr-[6px]\">
            <a href=\"{{ next }}\"
               class=\"transition-all duration-[0.3s] ease-in-out px-[10px] h-[32px] bg-[#f8f8fb] text-[#777] border border-[#eee] rounded-[10px] flex items-center justify-center hover:bg-[#3d4750] hover:text-white\">
                Next &gt;
            </a>
        </li>
    {% endif %}

    {% if last %}
        <li class=\"leading-[28px]\">
            <a href=\"{{ last }}\"
               class=\"transition-all duration-[0.3s] ease-in-out px-[10px] h-[32px] bg-[#f8f8fb] text-[#777] border border-[#eee] rounded-[10px] flex items-center justify-center hover:bg-[#3d4750] hover:text-white\">
               Last &gt;|
            </a>
        </li>
    {% endif %}

</ul>", "extension/blueberry/catalog/view/template/common/pagination.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\common\\pagination.twig");
    }
}
