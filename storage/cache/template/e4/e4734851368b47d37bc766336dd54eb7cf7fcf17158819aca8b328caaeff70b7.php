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
                    <div id=\"productCategorySection\">
                        <div class=\"w-full\">
                            <div class=\"flex flex-wrap w-full items-stretch max-h-[358px] overflow-auto\">
                                <div class=\"w-full px-[12px]\">
                                    <div class=\"sub-title mb-[20px] flex justify-between\">
                                        <h4 class=\"font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize\">EXPLORE CATEGORIES</h4>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[5px] mb-[10px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-1 bg-[#fef1f1] tab-btn active cursor-pointer\" data-tab=\"fridge\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 57
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/fridge-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Refrigerator</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe] tab-btn cursor-pointer\" data-tab=\"television\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 67
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/tv-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Television</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#e1fcf2] tab-btn cursor-pointer\" data-tab=\"ac\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 77
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/ac-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Air Conditioner</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-4 bg-[#fbf9e4] tab-btn cursor-pointer\" data-tab=\"mobile\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 87
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/mobile-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Mobile</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center justify-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2] tab-btn cursor-pointer\" data-tab=\"computer\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 97
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/computer-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Computer</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-4 bg-[#f4f1fe] tab-btn cursor-pointer\" data-tab=\"ebike\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 107
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/ebike-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">E-bike</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2] tab-btn cursor-pointer\" data-tab=\"hap\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 117
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/oven-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Microwave and Electric Oven</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe] tab-btn cursor-pointer\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 127
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/blender-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Blender and Mixer Grinder</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#e1fcf2] tab-btn cursor-pointer\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 137
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/washing-machine-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Washing Machine</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe] tab-btn cursor-pointer\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 147
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/water-heater-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Water Heater (Geyser)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe] tab-btn cursor-pointer\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 157
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/fan-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Fan</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center justify-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2] tab-btn cursor-pointer\" data-tab=\"eap\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 167
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/eap-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Electrical Accessories</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center justify-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe] tab-btn cursor-pointer\" data-tab=\"led-light\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"";
        // line 177
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/category/thumb/light-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">LED Light</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"w-full\">
                            <div class=\"flex flex-wrap w-full tab-content\" id=\"fridge\">
                                <div class=\"w-full px-[12px]\">
                                    <div class=\"sub-title my-[20px] flex justify-between\">
                                        <h4 class=\"font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize\">EXPLORE SUB-CATEGORIES</h4>
                                    </div>
                                </div>
                                <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                        <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                            <img src=\"";
        // line 196
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/new-product/1.jpg\" alt=\"new-product-1\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                        </a>
                                        <div class=\"side-contact flex flex-col\">
                                            <h4 class=\"bb-pro-title text-[15px]\">
                                                <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">NO-FROST</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                        <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                            <img src=\"";
        // line 208
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/new-product/2.jpg\" alt=\"new-product-2\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                        </a>
                                        <div class=\"side-contact flex flex-col\">
                                            <h4 class=\"bb-pro-title text-[15px]\">
                                                <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">DIRECT COOL</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                        <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                            <img src=\"";
        // line 220
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/new-product/3.jpg\" alt=\"new-product-3\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                        </a>
                                        <div class=\"side-contact flex flex-col\">
                                            <h4 class=\"bb-pro-title text-[15px]\">
                                                <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">FREEZER</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                        <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                            <img src=\"";
        // line 232
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/new-product/4.jpg\" alt=\"new-product-4\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                        </a>
                                        <div class=\"side-contact flex flex-col\">
                                            <h4 class=\"bb-pro-title text-[15px]\">
                                                <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">BEVERAGE COOLER</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Television -->
                            <div class=\"tab-content hidden\" id=\"television\">
                                    <div class=\"flex flex-wrap w-full\">
                                        <div class=\"w-full px-[12px]\">
                                            <div class=\"sub-title mb-[20px] flex justify-between\">
                                                <h4 class=\"font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize\">EXPLORE SUB-CATEGORIES</h4>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"";
        // line 253
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/new-product/1.jpg\" alt=\"new-product-1\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">=======</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"";
        // line 265
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/new-product/2.jpg\" alt=\"new-product-2\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">=========</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"";
        // line 277
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/new-product/3.jpg\" alt=\"new-product-3\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">========</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"";
        // line 289
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/new-product/4.jpg\" alt=\"new-product-4\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">=====</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"";
        // line 301
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/new-product/4.jpg\" alt=\"new-product-4\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">=====</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"";
        // line 313
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/img/new-product/4.jpg\" alt=\"new-product-4\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">=====</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <!-- AC -->
                            <div class=\"tab-content hidden\" id=\"ac\">
                                <div class=\"p-4 bg-gray-100 rounded-lg\">AC Item</div>
                            </div>
                        </div>
                    </div>
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
        return array (  422 => 313,  407 => 301,  392 => 289,  377 => 277,  362 => 265,  347 => 253,  323 => 232,  308 => 220,  293 => 208,  278 => 196,  256 => 177,  243 => 167,  230 => 157,  217 => 147,  204 => 137,  191 => 127,  178 => 117,  165 => 107,  152 => 97,  139 => 87,  126 => 77,  113 => 67,  100 => 57,  42 => 1,);
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
                    <div id=\"productCategorySection\">
                        <div class=\"w-full\">
                            <div class=\"flex flex-wrap w-full items-stretch max-h-[358px] overflow-auto\">
                                <div class=\"w-full px-[12px]\">
                                    <div class=\"sub-title mb-[20px] flex justify-between\">
                                        <h4 class=\"font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize\">EXPLORE CATEGORIES</h4>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[5px] mb-[10px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-1 bg-[#fef1f1] tab-btn active cursor-pointer\" data-tab=\"fridge\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/fridge-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Refrigerator</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe] tab-btn cursor-pointer\" data-tab=\"television\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/tv-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Television</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#e1fcf2] tab-btn cursor-pointer\" data-tab=\"ac\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/ac-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Air Conditioner</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-4 bg-[#fbf9e4] tab-btn cursor-pointer\" data-tab=\"mobile\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/mobile-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Mobile</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center justify-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2] tab-btn cursor-pointer\" data-tab=\"computer\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/computer-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Computer</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-4 bg-[#f4f1fe] tab-btn cursor-pointer\" data-tab=\"ebike\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/ebike-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">E-bike</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2] tab-btn cursor-pointer\" data-tab=\"hap\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/oven-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Microwave and Electric Oven</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe] tab-btn cursor-pointer\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/blender-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Blender and Mixer Grinder</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#e1fcf2] tab-btn cursor-pointer\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/washing-machine-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Washing Machine</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe] tab-btn cursor-pointer\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/water-heater-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Water Heater (Geyser)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe] tab-btn cursor-pointer\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/fan-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Fan</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center justify-center text-center max-[1399px]:p-[20px] category-items-2 bg-[#e1fcf2] tab-btn cursor-pointer\" data-tab=\"eap\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/eap-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">Electrical Accessories</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[1200px]:w-[16.66%] min-[768px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-box p-[10px] rounded-[20px] flex flex-col items-center justify-center text-center max-[1399px]:p-[20px] category-items-3 bg-[#f4f1fe] tab-btn cursor-pointer\" data-tab=\"led-light\">
                                        <div class=\"category-image mb-[12px]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/category/thumb/light-thumb.png\" alt=\"category\" class=\"w-[80px] h-[80px]\">
                                        </div>
                                        <div class=\"category-sub-contact h-[35px]\">
                                            <h5 class=\"mb-[2px] text-[14px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]\">LED Light</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"w-full\">
                            <div class=\"flex flex-wrap w-full tab-content\" id=\"fridge\">
                                <div class=\"w-full px-[12px]\">
                                    <div class=\"sub-title my-[20px] flex justify-between\">
                                        <h4 class=\"font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize\">EXPLORE SUB-CATEGORIES</h4>
                                    </div>
                                </div>
                                <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                        <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/new-product/1.jpg\" alt=\"new-product-1\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                        </a>
                                        <div class=\"side-contact flex flex-col\">
                                            <h4 class=\"bb-pro-title text-[15px]\">
                                                <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">NO-FROST</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                        <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/new-product/2.jpg\" alt=\"new-product-2\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                        </a>
                                        <div class=\"side-contact flex flex-col\">
                                            <h4 class=\"bb-pro-title text-[15px]\">
                                                <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">DIRECT COOL</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                        <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/new-product/3.jpg\" alt=\"new-product-3\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                        </a>
                                        <div class=\"side-contact flex flex-col\">
                                            <h4 class=\"bb-pro-title text-[15px]\">
                                                <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">FREEZER</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                    <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                        <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                            <img src=\"{{ base }}extension/blueberry/catalog/view/img/new-product/4.jpg\" alt=\"new-product-4\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                        </a>
                                        <div class=\"side-contact flex flex-col\">
                                            <h4 class=\"bb-pro-title text-[15px]\">
                                                <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">BEVERAGE COOLER</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Television -->
                            <div class=\"tab-content hidden\" id=\"television\">
                                    <div class=\"flex flex-wrap w-full\">
                                        <div class=\"w-full px-[12px]\">
                                            <div class=\"sub-title mb-[20px] flex justify-between\">
                                                <h4 class=\"font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750] capitalize\">EXPLORE SUB-CATEGORIES</h4>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"{{ base }}extension/blueberry/catalog/view/img/new-product/1.jpg\" alt=\"new-product-1\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">=======</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"{{ base }}extension/blueberry/catalog/view/img/new-product/2.jpg\" alt=\"new-product-2\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">=========</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"{{ base }}extension/blueberry/catalog/view/img/new-product/3.jpg\" alt=\"new-product-3\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">========</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"{{ base }}extension/blueberry/catalog/view/img/new-product/4.jpg\" alt=\"new-product-4\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">=====</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"{{ base }}extension/blueberry/catalog/view/img/new-product/4.jpg\" alt=\"new-product-4\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">=====</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"min-[992px]:w-[33.33%] min-[576px]:w-[50%] w-full px-[12px] mb-[24px]\">
                                            <div class=\"bb-category-cart p-[15px] overflow-hidden bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[10px] flex max-[767px]:flex-col items-center\">
                                                <a href=\"javascript:void(0)\" class=\"pro-img mr-[12px] max-[767px]:mb-[15px] max-[767px]:mr-[0]\">
                                                    <img src=\"{{ base }}extension/blueberry/catalog/view/img/new-product/4.jpg\" alt=\"new-product-4\" class=\"w-[80px] rounded-[10px] border-[1px] border-solid border-[#eee] max-[767px]:w-full\">
                                                </a>
                                                <div class=\"side-contact flex flex-col\">
                                                    <h4 class=\"bb-pro-title text-[15px]\">
                                                        <a href=\"product-left-sidebar.html\" class=\"transition-all duration-[0.3s] ease-in-out flex font-Poppins text-[15px] leading-[28px] tracking-[0.03rem] font-medium text-[#3d4750]\">=====</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <!-- AC -->
                            <div class=\"tab-content hidden\" id=\"ac\">
                                <div class=\"p-4 bg-gray-100 rounded-lg\">AC Item</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>", "extension/blueberry/catalog/view/template/common/category_popup.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\common\\category_popup.twig");
    }
}
