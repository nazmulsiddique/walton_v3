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

/* extension/blueberry/catalog/view/template/product/quickview.twig */
class __TwigTemplate_612b0bd11c8d29ecc6e701fc17363718654cf333e2849e72f0c1345ad05bf490 extends Template
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
        yield " <!-- Quick view Modal -->
    <div class=\"bb-modal-overlay w-full h-screen hidden fixed top-0 left-0 z-[26] bg-[#000000b3]\"></div>
    <div class=\"bb-modal quickview-modal max-[575px]:w-full fixed top-[45%] max-[767px]:top-[50%] left-[50%] z-[30] max-[767px]:w-full hidden max-[767px]:max-h-full max-[767px]:overflow-y-auto\">
        <div class=\"bb-modal-dialog h-full my-[0%] mx-auto max-w-[700px] w-[700px] max-[991px]:max-w-[650px] max-[991px]:w-[650px] max-[767px]:w-[80%] max-[767px]:h-auto max-[767px]:max-w-[80%] max-[767px]:m-[0] max-[767px]:py-[35px] max-[767px]:mx-auto max-[575px]:w-[90%] transition-transform duration-[0.3s] ease-out cr-fadeOutUp\">
            <div class=\"modal-content p-[24px] relative bg-[#fff] rounded-[20px] overflow-hidden\">
                <button type=\"button\" class=\"bb-close-modal transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]\" title=\"Close\"></button>
                <div class=\"modal-body mx-[-12px] max-[767px]:mx-[0]\">
                    <div class=\"flex flex-wrap mx-[-12px] mb-[-24px]\">
                        <div class=\"min-[768px]:w-[41.66%] min-[576px]:w-full px-[12px] mb-[24px]\">
                            <div class=\"single-pro-img single-pro-img-no-sidebar h-full border-[1px] border-solid border-[#eee] overflow-hidden rounded-[20px]\">
                                <div class=\"single-product-scroll h-full\">
                                    <div class=\"single-slide zoom-image-hover h-full bg-[#fff] flex items-center\">
                                        <img class=\"img-responsive max-w-full block\" src=\"";
        // line 13
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"";
        yield ($context["name"] ?? null);
        yield "\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"min-[768px]:w-[58.33%] min-[576px]:w-full px-[12px] mb-[24px]\">
                            <div class=\"quickview-pro-content\">
                                <h5 class=\"bb-quick-title\">
                                    <a href=\"\" class=\"font-Poppins tracking-[0.03rem] mb-[10px] block text-[#3d4750] text-[20px] leading-[30px] font-medium\">";
        // line 21
        yield ($context["name"] ?? null);
        yield "</a>
                                </h5>
                                <div class=\"bb-quickview-desc mb-[10px] text-[15px] leading-[24px] text-[#777] font-light\">
                                    <ul class=\"font-Poppins text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] list-disc pl-5 space-y-1\">
                                        <li>Type: No-Frost</li>
                                        <li>HCFC free: Cyclopentane</li>
                                        <li>Gross Volume: 646 Ltr (V.0101)</li>
                                        <li>Net Volume: 598 Ltr (V.0101)</li>
                                        <li>CFC Free: R600a</li>
                                        <li>Using Latest MSO Plus INVERTER technology</li>
                                        <li>No need to use Voltage Stabilizer</li>
                                    </ul>
                                </div>
                                <div class=\"bb-quickview-price pt-[5px] pb-[10px] flex items-center justify-left\">
                                    <span class=\"new-price px-[3px] text-[16px] text-[#686e7d] font-bold\">";
        // line 35
        yield ($context["price"] ?? null);
        yield "</span>
                                    <span class=\"old-price px-[3px] text-[14px] text-[#686e7d] line-through\">";
        // line 36
        yield ($context["price"] ?? null);
        yield "</span>
                                </div>
                                <div class=\"bb-pro-variation mt-[15px] mb-[25px]\">
                                    <ul class=\"flex flex-wrap m-[-2px]\">
                                        <li class=\"h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal active\">
                                            <a href=\"javascript:void(0)\" class=\"bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]\" data-tooltip=\"Small\">No-Frost</a>
                                        </li>
                                        <li class=\"h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal\">
                                            <a href=\"javascript:void(0)\" class=\"bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]\" data-tooltip=\"Medium\">Cyclopentane</a>
                                        </li>
                                        <li class=\"h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal\">
                                            <a href=\"javascript:void(0)\" class=\"bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]\" data-tooltip=\"Large\">R600a</a>
                                        </li>
                                        <li class=\"h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal\">
                                            <a href=\"javascript:void(0)\" class=\"bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]\" data-tooltip=\"Extra Large\">646 Ltr</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/product/quickview.twig";
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
        return array (  90 => 36,  86 => 35,  69 => 21,  56 => 13,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" <!-- Quick view Modal -->
    <div class=\"bb-modal-overlay w-full h-screen hidden fixed top-0 left-0 z-[26] bg-[#000000b3]\"></div>
    <div class=\"bb-modal quickview-modal max-[575px]:w-full fixed top-[45%] max-[767px]:top-[50%] left-[50%] z-[30] max-[767px]:w-full hidden max-[767px]:max-h-full max-[767px]:overflow-y-auto\">
        <div class=\"bb-modal-dialog h-full my-[0%] mx-auto max-w-[700px] w-[700px] max-[991px]:max-w-[650px] max-[991px]:w-[650px] max-[767px]:w-[80%] max-[767px]:h-auto max-[767px]:max-w-[80%] max-[767px]:m-[0] max-[767px]:py-[35px] max-[767px]:mx-auto max-[575px]:w-[90%] transition-transform duration-[0.3s] ease-out cr-fadeOutUp\">
            <div class=\"modal-content p-[24px] relative bg-[#fff] rounded-[20px] overflow-hidden\">
                <button type=\"button\" class=\"bb-close-modal transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]\" title=\"Close\"></button>
                <div class=\"modal-body mx-[-12px] max-[767px]:mx-[0]\">
                    <div class=\"flex flex-wrap mx-[-12px] mb-[-24px]\">
                        <div class=\"min-[768px]:w-[41.66%] min-[576px]:w-full px-[12px] mb-[24px]\">
                            <div class=\"single-pro-img single-pro-img-no-sidebar h-full border-[1px] border-solid border-[#eee] overflow-hidden rounded-[20px]\">
                                <div class=\"single-product-scroll h-full\">
                                    <div class=\"single-slide zoom-image-hover h-full bg-[#fff] flex items-center\">
                                        <img class=\"img-responsive max-w-full block\" src=\"{{ thumb }}\" alt=\"{{ name }}\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"min-[768px]:w-[58.33%] min-[576px]:w-full px-[12px] mb-[24px]\">
                            <div class=\"quickview-pro-content\">
                                <h5 class=\"bb-quick-title\">
                                    <a href=\"\" class=\"font-Poppins tracking-[0.03rem] mb-[10px] block text-[#3d4750] text-[20px] leading-[30px] font-medium\">{{ name }}</a>
                                </h5>
                                <div class=\"bb-quickview-desc mb-[10px] text-[15px] leading-[24px] text-[#777] font-light\">
                                    <ul class=\"font-Poppins text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] list-disc pl-5 space-y-1\">
                                        <li>Type: No-Frost</li>
                                        <li>HCFC free: Cyclopentane</li>
                                        <li>Gross Volume: 646 Ltr (V.0101)</li>
                                        <li>Net Volume: 598 Ltr (V.0101)</li>
                                        <li>CFC Free: R600a</li>
                                        <li>Using Latest MSO Plus INVERTER technology</li>
                                        <li>No need to use Voltage Stabilizer</li>
                                    </ul>
                                </div>
                                <div class=\"bb-quickview-price pt-[5px] pb-[10px] flex items-center justify-left\">
                                    <span class=\"new-price px-[3px] text-[16px] text-[#686e7d] font-bold\">{{ price }}</span>
                                    <span class=\"old-price px-[3px] text-[14px] text-[#686e7d] line-through\">{{ price }}</span>
                                </div>
                                <div class=\"bb-pro-variation mt-[15px] mb-[25px]\">
                                    <ul class=\"flex flex-wrap m-[-2px]\">
                                        <li class=\"h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal active\">
                                            <a href=\"javascript:void(0)\" class=\"bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]\" data-tooltip=\"Small\">No-Frost</a>
                                        </li>
                                        <li class=\"h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal\">
                                            <a href=\"javascript:void(0)\" class=\"bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]\" data-tooltip=\"Medium\">Cyclopentane</a>
                                        </li>
                                        <li class=\"h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal\">
                                            <a href=\"javascript:void(0)\" class=\"bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]\" data-tooltip=\"Large\">R600a</a>
                                        </li>
                                        <li class=\"h-[22px] m-[2px] py-[2px] px-[8px] cursor-pointer border-[1px] border-solid border-[#eee] text-[#777] flex items-center justify-center text-[12px] leading-[22px] rounded-[20px] font-normal\">
                                            <a href=\"javascript:void(0)\" class=\"bb-opt-sz font-Poppins text-[12px] leading-[22px] font-normal text-[#777] tracking-[0.03rem]\" data-tooltip=\"Extra Large\">646 Ltr</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
", "extension/blueberry/catalog/view/template/product/quickview.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\product\\quickview.twig");
    }
}
