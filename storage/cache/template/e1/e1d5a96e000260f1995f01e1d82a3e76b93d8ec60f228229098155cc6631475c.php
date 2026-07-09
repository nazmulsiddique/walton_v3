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

/* extension/blueberry/catalog/view/template/common/search.twig */
class __TwigTemplate_d277386389981e80fc2240e14b4dcfadd93d40cc37cb7474578bec42bff98b13 extends Template
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
<div class=\"header-search w-[650px] max-[1399px]:w-[550px] max-[1199px]:w-[400px] max-[991px]:w-full max-[991px]:min-w-[300px] max-[767px]:py-[15px] max-[480px]:min-w-[auto]\">
\t<form action=\"";
        // line 3
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" class=\"bb-btn-group-form flex relative max-[991px]:ml-[20px] max-[767px]:m-[0]\">
\t\t<input class=\"form-control bb-search-bar bg-[#fff] block w-full min-h-[45px] h-[48px] py-[10px] pr-[10px] pl-[10px] max-[991px]:min-h-[40px] max-[991px]:h-[40px] max-[991px]:p-[10px] text-[14px] font-normal leading-[1] text-[#777] rounded-[10px] border-[1px] border-solid border-[#eee] tracking-[0.5px]\" name=\"search\" value=\"";
        // line 4
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_search"] ?? null);
        yield "\" type=\"text\">
\t\t<button class=\"submit absolute top-[0] left-[auto] right-[0] flex items-center justify-center w-[45px] h-full bg-transparent text-[#555] text-[16px] rounded-[0] outline-[0] border-[0] padding-[0]\" type=\"submit\">
\t\t\t<i class=\"ri-search-line text-[18px] leading-[12px] text-[#555]\"></i>
\t\t</button>
\t</form>
</div> ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/common/search.twig";
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
        return array (  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<div class=\"header-search w-[650px] max-[1399px]:w-[550px] max-[1199px]:w-[400px] max-[991px]:w-full max-[991px]:min-w-[300px] max-[767px]:py-[15px] max-[480px]:min-w-[auto]\">
\t<form action=\"{{ action }}\" method=\"post\" class=\"bb-btn-group-form flex relative max-[991px]:ml-[20px] max-[767px]:m-[0]\">
\t\t<input class=\"form-control bb-search-bar bg-[#fff] block w-full min-h-[45px] h-[48px] py-[10px] pr-[10px] pl-[10px] max-[991px]:min-h-[40px] max-[991px]:h-[40px] max-[991px]:p-[10px] text-[14px] font-normal leading-[1] text-[#777] rounded-[10px] border-[1px] border-solid border-[#eee] tracking-[0.5px]\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ text_search }}\" type=\"text\">
\t\t<button class=\"submit absolute top-[0] left-[auto] right-[0] flex items-center justify-center w-[45px] h-full bg-transparent text-[#555] text-[16px] rounded-[0] outline-[0] border-[0] padding-[0]\" type=\"submit\">
\t\t\t<i class=\"ri-search-line text-[18px] leading-[12px] text-[#555]\"></i>
\t\t</button>
\t</form>
</div> ", "extension/blueberry/catalog/view/template/common/search.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\common\\search.twig");
    }
}
