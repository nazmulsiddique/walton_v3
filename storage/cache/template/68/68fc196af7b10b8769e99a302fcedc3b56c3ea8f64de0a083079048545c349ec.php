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

/* catalog/view/template/error/not_found.twig */
class __TwigTemplate_d5192f3a50ac69e95db64042abbc2715bc20c7b59eb4bb5842b87fea50e4f68c extends Template
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

<div id=\"error-not-found\" class=\"max-w-[1320px] mx-auto px-4\">
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
        // line 13
        yield ($context["base"] ?? null);
        yield "\" class=\"font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]\"> Home</a></li>
                              ";
        // line 14
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
            // line 15
            yield "                                  ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 15)) {
                // line 16
                yield "                                      <li class=\"text-[14px] font-normal px-[5px]\">
                                          <i class=\"ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]\"></i>
                                      </li>
                                  ";
            }
            // line 20
            yield "                                  <li class=\"bb-breadcrumb-item px-[5px]\">
                                      ";
            // line 21
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 21)) {
                // line 22
                yield "                                          <span class=\"font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem]\">
                                              ";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 23);
                yield "
                                          </span>
                                      ";
            } else {
                // line 26
                yield "                                          <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 26);
                yield "\"
                                            class=\"font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d] hover:text-[#3bb77e] transition-all duration-300\">
                                              ";
                // line 28
                yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 28);
                yield "
                                          </a>
                                      ";
            }
            // line 31
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
        // line 33
        yield "                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <div class=\"grid grid-cols-12 gap-6\">
        <main id=\"content\" class=\"w-full col-span-12 max-[1199px]:col-span-12 max-[1199px]:order-2\">
            ";
        // line 42
        yield ($context["content_top"] ?? null);
        yield "

            <div class=\"py-12 text-center\">
                <h1 class=\"text-3xl font-bold text-gray-800 mb-4\">";
        // line 45
        yield ($context["heading_title"] ?? null);
        yield "</h1>
                <p class=\"text-gray-500 mb-8\">";
        // line 46
        yield ($context["text_error"] ?? null);
        yield "</p>
                <div class=\"flex justify-center\">
                    <a href=\"";
        // line 48
        yield ($context["continue"] ?? null);
        yield "\" class=\"inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition-colors\">
                        ";
        // line 49
        yield ($context["button_continue"] ?? null);
        yield "
                    </a>
                </div>
            </div>

            ";
        // line 54
        yield ($context["content_bottom"] ?? null);
        yield "
        </main>


    </div>

</div>

";
        // line 62
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
        return "catalog/view/template/error/not_found.twig";
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
        return array (  177 => 62,  166 => 54,  158 => 49,  154 => 48,  149 => 46,  145 => 45,  139 => 42,  128 => 33,  113 => 31,  107 => 28,  101 => 26,  95 => 23,  92 => 22,  90 => 21,  87 => 20,  81 => 16,  78 => 15,  61 => 14,  57 => 13,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}

<div id=\"error-not-found\" class=\"max-w-[1320px] mx-auto px-4\">
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
    <div class=\"grid grid-cols-12 gap-6\">
        <main id=\"content\" class=\"w-full col-span-12 max-[1199px]:col-span-12 max-[1199px]:order-2\">
            {{ content_top }}

            <div class=\"py-12 text-center\">
                <h1 class=\"text-3xl font-bold text-gray-800 mb-4\">{{ heading_title }}</h1>
                <p class=\"text-gray-500 mb-8\">{{ text_error }}</p>
                <div class=\"flex justify-center\">
                    <a href=\"{{ continue }}\" class=\"inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium px-6 py-3 rounded-lg transition-colors\">
                        {{ button_continue }}
                    </a>
                </div>
            </div>

            {{ content_bottom }}
        </main>


    </div>

</div>

{{ footer }}
", "catalog/view/template/error/not_found.twig", "C:\\xampp\\htdocs\\walton_v3\\catalog\\view\\template\\error\\not_found.twig");
    }
}
