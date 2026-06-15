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

/* extension/blueberry/catalog/view/template/product/category_products.twig */
class __TwigTemplate_852812149bc973a76e773ab11867398748c5cb872150a4e8179ca8eb05d0f3dd extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 3
                yield "    <div class=\"min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
      ";
                // line 4
                yield $context["product"];
                yield "
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            yield "
  <div class=\"w-full px-[12px]\">
    <div class=\"bb-pro-pagination mb-[24px] flex justify-between items-center max-[575px]:flex-col max-[575px]:items-center\">
      <p class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]\">
        ";
            // line 11
            yield ($context["results"] ?? null);
            yield "
      </p>
      <div class=\"bb-pagination\">
        ";
            // line 14
            yield ($context["pagination"] ?? null);
            yield "
      </div>
    </div>
  </div>
";
        } else {
            // line 19
            yield "  <div class=\"w-full px-[12px]\">
    <p class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] py-[30px] text-center\">
      ";
            // line 21
            yield ($context["text_no_results"] ?? null);
            yield "
    </p>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/product/category_products.twig";
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
        return array (  85 => 21,  81 => 19,  73 => 14,  67 => 11,  61 => 7,  52 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if products %}
  {% for product in products %}
    <div class=\"min-[1200px]:w-[25%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content\" data-aos=\"fade-up\" data-aos-duration=\"1000\" data-aos-delay=\"100\">
      {{ product }}
    </div>
  {% endfor %}

  <div class=\"w-full px-[12px]\">
    <div class=\"bb-pro-pagination mb-[24px] flex justify-between items-center max-[575px]:flex-col max-[575px]:items-center\">
      <p class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]\">
        {{ results }}
      </p>
      <div class=\"bb-pagination\">
        {{ pagination }}
      </div>
    </div>
  </div>
{% else %}
  <div class=\"w-full px-[12px]\">
    <p class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] py-[30px] text-center\">
      {{ text_no_results }}
    </p>
  </div>
{% endif %}
", "extension/blueberry/catalog/view/template/product/category_products.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\product\\category_products.twig");
    }
}
