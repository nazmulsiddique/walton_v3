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

/* extension/blueberry/catalog/view/template/module/banner.twig */
class __TwigTemplate_3acd84432261edab4cb25456abbe6e377758f3f1b85c64bb6bd548d7e097bbf4 extends Template
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
        yield "<div id=\"carousel-banner-";
        yield ($context["module"] ?? null);
        yield "\" class=\"relative w-full overflow-hidden max-w-[1320px] mx-auto pb-5\">

  ";
        // line 4
        yield "  ";
        if ((($context["indicators"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 5
            yield "    <div class=\"absolute bottom-3 left-1/2 -translate-x-1/2 z-20 flex gap-2\" id=\"carousel-indicators-";
            yield ($context["module"] ?? null);
            yield "\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(0, (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::batch(($context["banners"] ?? null), ($context["items"] ?? null))) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 7
                yield "        <button
          type=\"button\"
          data-index=\"";
                // line 9
                yield $context["i"];
                yield "\"
          class=\"h-2 w-2 rounded-full bg-white/50 transition-all duration-300 carousel-dot-";
                // line 10
                yield ($context["module"] ?? null);
                yield "\"
          aria-label=\"Slide ";
                // line 11
                yield ($context["i"] + 1);
                yield "\"
        ></button>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "    </div>
  ";
        }
        // line 16
        yield "
  ";
        // line 18
        yield "  <div class=\"relative w-full\">
    ";
        // line 19
        $context["banner_row"] = 0;
        // line 20
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(($context["banners"] ?? null), ($context["items"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["carousel"]) {
            // line 21
            yield "      <div
        class=\"w-full carousel-slide-";
            // line 22
            yield ($context["module"] ?? null);
            if ((($context["effect"] ?? null) == "fade")) {
                yield " absolute inset-0";
            }
            if ((($context["banner_row"] ?? null) == 0)) {
                yield " opacity-100 relative z-5";
            } else {
                yield " opacity-0";
                if ((($context["effect"] ?? null) == "fade")) {
                    yield " z-0";
                } else {
                    yield " hidden";
                }
            }
            yield " transition-opacity duration-700\"
        data-index=\"";
            // line 23
            yield ($context["banner_row"] ?? null);
            yield "\"
      >
        <div class=\"flex flex-wrap justify-center\">
          ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["carousel"]);
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 27
                yield "            ";
                $context["col_width"] = Twig\Extension\CoreExtension::round((12 / ($context["items"] ?? null)));
                // line 28
                yield "            <div class=\"";
                if ((($context["col_width"] ?? null) == 12)) {
                    yield "w-full";
                } elseif ((($context["col_width"] ?? null) == 6)) {
                    yield "w-1/2";
                } elseif ((($context["col_width"] ?? null) == 4)) {
                    yield "w-1/3";
                } elseif ((($context["col_width"] ?? null) == 3)) {
                    yield "w-1/4";
                } elseif ((($context["col_width"] ?? null) == 2)) {
                    yield "w-1/6";
                } else {
                    yield "w-full";
                }
                yield " text-center px-2\">
              ";
                // line 29
                if (CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 29)) {
                    // line 30
                    yield "                <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 30);
                    yield "\" class=\"bg-[#ededed] inline-block\">
                  <img src=\"";
                    // line 31
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 31);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 31);
                    yield "\" class=\"max-w-full h-auto mx-auto rounded-lg\"/>
                </a>
              ";
                } else {
                    // line 34
                    yield "                <div class=\"bg-[#ededed] inline-block\">
                  <img src=\"";
                    // line 35
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 35);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 35);
                    yield "\" class=\"max-w-full h-auto mx-auto rounded-lg\"/>
                </div>
              ";
                }
                // line 38
                yield "            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['banner'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "        </div>
      </div>
      ";
            // line 42
            $context["banner_row"] = (($context["banner_row"] ?? null) + 1);
            // line 43
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['carousel'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "  </div>

  ";
        // line 47
        yield "  ";
        if ((($context["controls"] ?? null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::batch(($context["banners"] ?? null), ($context["items"] ?? null))) > 1))) {
            // line 48
            yield "    <button
      type=\"button\"
      class=\"carousel-prev-";
            // line 50
            yield ($context["module"] ?? null);
            yield " absolute left-2 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-10 h-10 rounded-full bg-black/30 hover:bg-black/50 text-white transition-colors cursor-pointer\"
      aria-label=\"Previous\"
    >
      <i class=\"ri-arrow-left-s-line\"></i>
    </button>
    <button
      type=\"button\"
      class=\"carousel-next-";
            // line 57
            yield ($context["module"] ?? null);
            yield " absolute right-2 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-10 h-10 rounded-full bg-black/30 hover:bg-black/50 text-white transition-colors cursor-pointer\"
      aria-label=\"Next\"
    >
      <i class=\"ri-arrow-right-s-line\"></i>
    </button>
  ";
        }
        // line 63
        yield "
</div>

<script type=\"text/javascript\"><!--
\$(document).ready(function () {
  var id       = '#carousel-banner-";
        // line 68
        yield ($context["module"] ?? null);
        yield "';
  var slideSel = '.carousel-slide-";
        // line 69
        yield ($context["module"] ?? null);
        yield "';
  var dotSel   = '.carousel-dot-";
        // line 70
        yield ($context["module"] ?? null);
        yield "';
  var fade     = ";
        // line 71
        yield (((($context["effect"] ?? null) == "fade")) ? ("true") : ("false"));
        yield ";
  var interval = ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["interval"] ?? null), "js");
        yield ";
  var total    = \$(slideSel).length;
  var current  = 0;
  var timer    = null;

  function goTo(index) {
    \$(slideSel).each(function () {
      var i = parseInt(\$(this).data('index'));
      if (i === index) {
        if (fade) {
          \$(this).removeClass('opacity-0 z-0').addClass('opacity-100 z-5');
        } else {
          \$(this).removeClass('hidden opacity-0').addClass('opacity-100');
        }
      } else {
        if (fade) {
          \$(this).removeClass('opacity-100 z-5').addClass('opacity-0 z-0');
        } else {
          \$(this).removeClass('opacity-100').addClass('hidden opacity-0');
        }
      }
    });

    \$(dotSel).each(function () {
      var i = parseInt(\$(this).data('index'));
      if (i === index) {
        \$(this).removeClass('bg-white/50 w-2').addClass('bg-white w-6');
      } else {
        \$(this).removeClass('bg-white w-6').addClass('bg-white/50 w-2');
      }
    });

    current = index;
  }

  function next() { goTo((current + 1) % total); }
  function prev() { goTo((current - 1 + total) % total); }

  function startAuto() {
    if (interval > 0) {
      timer = setInterval(next, interval);
    }
  }

  function resetAuto() {
    clearInterval(timer);
    startAuto();
  }

  // Init first dot
  \$(dotSel).first().removeClass('bg-white/50 w-2').addClass('bg-white w-6');

  // Bind controls
  \$(id).find('.carousel-prev-";
        // line 125
        yield ($context["module"] ?? null);
        yield "').on('click', function () { prev(); resetAuto(); });
  \$(id).find('.carousel-next-";
        // line 126
        yield ($context["module"] ?? null);
        yield "').on('click', function () { next(); resetAuto(); });

  // Bind dots
  \$(dotSel).on('click', function () {
    goTo(parseInt(\$(this).data('index')));
    resetAuto();
  });

  startAuto();
});
//--></script>



";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/module/banner.twig";
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
        return array (  306 => 126,  302 => 125,  246 => 72,  242 => 71,  238 => 70,  234 => 69,  230 => 68,  223 => 63,  214 => 57,  204 => 50,  200 => 48,  197 => 47,  193 => 44,  187 => 43,  185 => 42,  181 => 40,  174 => 38,  166 => 35,  163 => 34,  155 => 31,  150 => 30,  148 => 29,  131 => 28,  128 => 27,  124 => 26,  118 => 23,  101 => 22,  98 => 21,  93 => 20,  91 => 19,  88 => 18,  85 => 16,  81 => 14,  72 => 11,  68 => 10,  64 => 9,  60 => 7,  56 => 6,  51 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"carousel-banner-{{ module }}\" class=\"relative w-full overflow-hidden max-w-[1320px] mx-auto pb-5\">

  {# Indicators #}
  {% if indicators and banners|batch(items)|length > 1 %}
    <div class=\"absolute bottom-3 left-1/2 -translate-x-1/2 z-20 flex gap-2\" id=\"carousel-indicators-{{ module }}\">
      {% for i in range(0, banners|batch(items)|length - 1) %}
        <button
          type=\"button\"
          data-index=\"{{ i }}\"
          class=\"h-2 w-2 rounded-full bg-white/50 transition-all duration-300 carousel-dot-{{ module }}\"
          aria-label=\"Slide {{ i + 1 }}\"
        ></button>
      {% endfor %}
    </div>
  {% endif %}

  {# Slides #}
  <div class=\"relative w-full\">
    {% set banner_row = 0 %}
    {% for carousel in banners|batch(items) %}
      <div
        class=\"w-full carousel-slide-{{ module }}{% if effect == 'fade' %} absolute inset-0{% endif %}{% if banner_row == 0 %} opacity-100 relative z-5{% else %} opacity-0{% if effect == 'fade' %} z-0{% else %} hidden{% endif %}{% endif %} transition-opacity duration-700\"
        data-index=\"{{ banner_row }}\"
      >
        <div class=\"flex flex-wrap justify-center\">
          {% for banner in carousel %}
            {% set col_width = (12 / items)|round %}
            <div class=\"{% if col_width == 12 %}w-full{% elseif col_width == 6 %}w-1/2{% elseif col_width == 4 %}w-1/3{% elseif col_width == 3 %}w-1/4{% elseif col_width == 2 %}w-1/6{% else %}w-full{% endif %} text-center px-2\">
              {% if banner.link %}
                <a href=\"{{ banner.link }}\" class=\"bg-[#ededed] inline-block\">
                  <img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"max-w-full h-auto mx-auto rounded-lg\"/>
                </a>
              {% else %}
                <div class=\"bg-[#ededed] inline-block\">
                  <img src=\"{{ banner.image }}\" alt=\"{{ banner.title }}\" class=\"max-w-full h-auto mx-auto rounded-lg\"/>
                </div>
              {% endif %}
            </div>
          {% endfor %}
        </div>
      </div>
      {% set banner_row = banner_row + 1 %}
    {% endfor %}
  </div>

  {# Controls #}
  {% if controls and banners|batch(items)|length > 1 %}
    <button
      type=\"button\"
      class=\"carousel-prev-{{ module }} absolute left-2 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-10 h-10 rounded-full bg-black/30 hover:bg-black/50 text-white transition-colors cursor-pointer\"
      aria-label=\"Previous\"
    >
      <i class=\"ri-arrow-left-s-line\"></i>
    </button>
    <button
      type=\"button\"
      class=\"carousel-next-{{ module }} absolute right-2 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-10 h-10 rounded-full bg-black/30 hover:bg-black/50 text-white transition-colors cursor-pointer\"
      aria-label=\"Next\"
    >
      <i class=\"ri-arrow-right-s-line\"></i>
    </button>
  {% endif %}

</div>

<script type=\"text/javascript\"><!--
\$(document).ready(function () {
  var id       = '#carousel-banner-{{ module }}';
  var slideSel = '.carousel-slide-{{ module }}';
  var dotSel   = '.carousel-dot-{{ module }}';
  var fade     = {{ effect == 'fade' ? 'true' : 'false' }};
  var interval = {{ interval|escape('js') }};
  var total    = \$(slideSel).length;
  var current  = 0;
  var timer    = null;

  function goTo(index) {
    \$(slideSel).each(function () {
      var i = parseInt(\$(this).data('index'));
      if (i === index) {
        if (fade) {
          \$(this).removeClass('opacity-0 z-0').addClass('opacity-100 z-5');
        } else {
          \$(this).removeClass('hidden opacity-0').addClass('opacity-100');
        }
      } else {
        if (fade) {
          \$(this).removeClass('opacity-100 z-5').addClass('opacity-0 z-0');
        } else {
          \$(this).removeClass('opacity-100').addClass('hidden opacity-0');
        }
      }
    });

    \$(dotSel).each(function () {
      var i = parseInt(\$(this).data('index'));
      if (i === index) {
        \$(this).removeClass('bg-white/50 w-2').addClass('bg-white w-6');
      } else {
        \$(this).removeClass('bg-white w-6').addClass('bg-white/50 w-2');
      }
    });

    current = index;
  }

  function next() { goTo((current + 1) % total); }
  function prev() { goTo((current - 1 + total) % total); }

  function startAuto() {
    if (interval > 0) {
      timer = setInterval(next, interval);
    }
  }

  function resetAuto() {
    clearInterval(timer);
    startAuto();
  }

  // Init first dot
  \$(dotSel).first().removeClass('bg-white/50 w-2').addClass('bg-white w-6');

  // Bind controls
  \$(id).find('.carousel-prev-{{ module }}').on('click', function () { prev(); resetAuto(); });
  \$(id).find('.carousel-next-{{ module }}').on('click', function () { next(); resetAuto(); });

  // Bind dots
  \$(dotSel).on('click', function () {
    goTo(parseInt(\$(this).data('index')));
    resetAuto();
  });

  startAuto();
});
//--></script>



{# 
<section class=\"mx-auto max-w-[1320px] section-certificate overflow-hidden pt-[15px] pb-[10px] max-[1199px]:pb-[10px]\">
    <div id=\"swiper-certificate-{{ module }}\" class=\"myCertificate-{{ module }} swiper px-[12px] lg:px-0\">
        <div class=\"swiper-wrapper\">
            {% for banner in banners %}
                <div class=\"swiper-slide\">
                    <div class=\"bg-[#ededed] rounded-lg flex items-center justify-center\">
                        {% if banner.link %}
                            <a href=\"{{ banner.link }}\" class=\"block\">
                                <img
                                    src=\"{{ banner.image }}\"
                                    alt=\"{{ banner.title }}\"
                                    class=\"max-w-full h-auto\"
                                    loading=\"lazy\"
                                />
                            </a>
                        {% else %}
                            <img
                                src=\"{{ banner.image }}\"
                                alt=\"{{ banner.title }}\"
                                class=\"max-w-full h-auto\"
                                loading=\"lazy\"
                            />
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>

        {% if indicators and banners|length > 1 %}
            <div class=\"swiper-pagination mt-4\"></div>
        {% endif %}

        {% if controls and banners|length > 1 %}
            <div class=\"swiper-button-prev !text-black after:!text-xl\"></div>
            <div class=\"swiper-button-next !text-black after:!text-xl\"></div>
        {% endif %}
    </div>
</section>
 #}
", "extension/blueberry/catalog/view/template/module/banner.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\module\\banner.twig");
    }
}
