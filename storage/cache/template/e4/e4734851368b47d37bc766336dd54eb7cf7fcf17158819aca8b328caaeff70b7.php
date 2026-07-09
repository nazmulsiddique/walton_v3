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

/* extension/blueberry/catalog/view/template/common/category_popup.twig */
class __TwigTemplate_4636a268b9c7d5d957244df39fce57a0f382d16127aa141937d0fc73b7b01c82 extends Template
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
        yield "    <!-- Category Popup -->
    <div class=\"bb-category-sidebar transition-all duration-[0.3s] ease-in-out w-full h-full fixed top-[0] z-[17] hidden\">
        <div class=\"bb-category-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#00000080] z-[17]\"></div>
        <div class=\"category-sidebar w-[calc(100%-30px)] max-[1199px]:h-[calc(100vh-60px)] max-w-[1200px] my-[15px] mx-[auto] py-[30px] px-[15px] text-[14px] font-normal transition-all duration-[0.5s] ease-in-out delay-[0s] bg-[#fff] overflow-auto rounded-[30px] z-[18] relative\">
            <button type=\"button\" class=\"bb-category-close transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]\" title=\"Close\"></button>
            <div class=\"w-full mx-auto\">
                <div class=\"flex flex-wrap w-full mb-[-24px]\">
                    <div class=\"w-full px-[12px]\">
                        <div class=\"bb-category-tags mb-[24px]\">
                            <div class=\"sub-title mb-[20px] flex justify-between\">
                                <h4 class=\"font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize\">keywords</h4>
                            </div>
                            <div class=\"bb-tags\">
                                <ul class=\"flex flex-wrap m-[-5px]\">
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Fridge</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">TV</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">AC</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Fan</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Light</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Laptop</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">SSD</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Mobile</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Oven</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    ";
        // line 46
        yield ($context["menupopup"] ?? null);
        yield "
                </div>
            </div>
        </div>
    </div>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/common/category_popup.twig";
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
        return array (  89 => 46,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("    <!-- Category Popup -->
    <div class=\"bb-category-sidebar transition-all duration-[0.3s] ease-in-out w-full h-full fixed top-[0] z-[17] hidden\">
        <div class=\"bb-category-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#00000080] z-[17]\"></div>
        <div class=\"category-sidebar w-[calc(100%-30px)] max-[1199px]:h-[calc(100vh-60px)] max-w-[1200px] my-[15px] mx-[auto] py-[30px] px-[15px] text-[14px] font-normal transition-all duration-[0.5s] ease-in-out delay-[0s] bg-[#fff] overflow-auto rounded-[30px] z-[18] relative\">
            <button type=\"button\" class=\"bb-category-close transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]\" title=\"Close\"></button>
            <div class=\"w-full mx-auto\">
                <div class=\"flex flex-wrap w-full mb-[-24px]\">
                    <div class=\"w-full px-[12px]\">
                        <div class=\"bb-category-tags mb-[24px]\">
                            <div class=\"sub-title mb-[20px] flex justify-between\">
                                <h4 class=\"font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize\">keywords</h4>
                            </div>
                            <div class=\"bb-tags\">
                                <ul class=\"flex flex-wrap m-[-5px]\">
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Fridge</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">TV</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">AC</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Fan</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Light</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Laptop</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">SSD</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Mobile</a>
                                    </li>
                                    <li class=\"transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] cursor-pointer\">
                                        <a href=\"javascript:void(0)\" class=\"text-[13px] capitalize font-Poppins text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">Oven</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{ menupopup }}
                </div>
            </div>
        </div>
    </div>", "extension/blueberry/catalog/view/template/common/category_popup.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\common\\category_popup.twig");
    }
}
