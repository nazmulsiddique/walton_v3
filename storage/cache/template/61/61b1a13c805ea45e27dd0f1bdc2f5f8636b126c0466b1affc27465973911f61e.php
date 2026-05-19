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

/* extension/blueberry/catalog/view/template/common/header.twig */
class __TwigTemplate_631e2d7cbd3d819a7c6d62e1d2ce4010a3a657adee6dc3576cb82763eed8205a extends Template
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
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        yield ($context["title"] ?? null);
        yield "</title>
  <base href=\"";
        // line 8
        yield ($context["base"] ?? null);
        yield "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            yield "    <meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\"/>
  ";
        }
        // line 12
        yield "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            yield "    <meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\"/>
  ";
        }
        // line 15
        yield "
  
  <!-- My custom styles -->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/stylesheet/assets/css/vendor/remixicon.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 19
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/stylesheet/assets/css/vendor/aos.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 20
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/stylesheet/assets/css/vendor/swiper-bundle.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/stylesheet/assets/css/vendor/owl.carousel.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 22
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/stylesheet/assets/css/vendor/slick.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 23
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/stylesheet/assets/css/vendor/animate.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 24
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/stylesheet/assets/css/vendor/jquery-range-ui.css\">
  <!-- <link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\"> -->

    <!-- tailwindcss -->
    <script src=\"";
        // line 28
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/javascript/vendor/tailwindcss3.4.5.js\"></script>

    <!-- Main Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 31
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/stylesheet/assets/css/style.css\">
    <!-- Custom Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 33
        yield ($context["base"] ?? null);
        yield "extension/blueberry/catalog/view/stylesheet/assets/css/customstyle.css\">


    
</head>
<body>

  <!-- Header -->
    <header class=\"bb-header relative z-[5] border-b-[1px] border-solid border-[#eee]\">
        <div class=\"top-header bg-[#001531] py-[6px] max-[991px]:hidden\">
            <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
                <div class=\"flex flex-wrap w-full\">
                    <div class=\"w-full px-[12px]\">
                        <div class=\"inner-top-header flex justify-between\">
                            <div class=\"col-left-bar\">
                                <a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins font-light text-[14px] text-[#fff] leading-[28px] tracking-[0.03rem]\">Call: 16267/08000016267</a>
                            </div>
                            <div class=\"col-right-bar flex\">
                                <div class=\"cols px-[12px]\">
                                    <a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] font-light leading-[28px] tracking-[0.03rem]\">Contact Us</a>
                                </div>
                                <div class=\"cols px-[12px]\">
                                    <div class=\"custom-dropdown relative z-50\">
                                        <a class=\"bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem]\" href=\"#\">Language</a>
                                        <ul class=\"dropdown transition-all duration-[0.3s] ease-in-out min-w-[150px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] block border-[1px] border-solid border-[#eee] block rounded-[10px]\">
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">English</a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Bangla</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class=\"cols px-[12px]\">
                                    <div class=\"custom-dropdown relative z-[5]\">
                                        <a class=\"bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem]\" href=\"#\">Currency</a>
                                        <ul class=\"dropdown transition-all duration-[0.3s] ease-in-out min-w-[150px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] block border-[1px] border-solid border-[#eee] block rounded-[10px]\">
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">USD \$</a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">EUR €</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bottom-header py-[10px] max-[991px]:py-[10px]\">
            <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
                <div class=\"flex flex-wrap w-full\">
                    <div class=\"w-full px-[12px]\">
                        <div class=\"inner-bottom-header flex justify-between max-[767px]:flex-col\">
                            <div class=\"cols bb-logo-detail flex max-[767px]:justify-between\">
                                <!-- Header Logo Start -->
                                <div class=\"header-logo flex items-center max-[575px]:justify-center\">
                                    <a href=\"index.php\">
                                        <img src=\"extension/blueberry/catalog/view/img/logo/logo.png\" alt=\"logo\" class=\"light w-[112px] max-[991px]:w-[70px] block\">
                                        <img src=\"extension/blueberry/catalog/view/img/logo/logo.png\" alt=\"logo\" class=\"dark w-[112px] max-[991px]:w-[70px] hidden\">
                                    </a>
                                </div>
                                <!-- Header Logo End -->
                               
                                <div class=\"d-flex items-center hidden max-[767px]:flex max-[767px]:ml-[20px]\">
                                    <div class=\"custom-dropdown relative z-[5] ml-[30px] max-[1199px]:ml-[20px]\">
                                        <a class=\"bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] text-[#3d4750] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem] font-medium\" href=\"#\">Support</a>
                                        <ul class=\"dropdown transition-all duration-[0.3s] ease-in-out min-w-[250px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-right opacity-[0] invisible !left-auto !right-[0] bg-[#fff] block border-[1px] border-solid border-[#eee] block rounded-[10px]\" style=\"left:auto !important; right:0 !important; text-align: end !important;\">
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">16267/08000016267</a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Store Locator </a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Customer Care</a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Service Request </a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Service Status </a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">About Product Registration </a></li>
                                        </ul>
                                    </div>

                                     <a href=\"javascript:void(0)\" class=\"bb-sidebar-toggle bb-category-toggle hidden max-[991px]:flex max-[991px]:items-center max-[991px]:ml-[20px] max-[991px]:border-[1px] max-[991px]:border-solid max-[991px]:border-[#eee] max-[991px]:w-[40px] max-[991px]:h-[40px] max-[991px]:rounded-[15px] justify-center transition-all duration-[0.3s] ease-in-out font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">
                                        <svg class=\"svg-icon h-[30px] w-[30px] max-[991px]:w-[22px] max-[991px]:h-[22px]\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path class=\"fill-[#6c7fd8]\" d=\"M384 928H192a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 608a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V640a32 32 0 0 0-32-32H192zM784 928H640a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v144a32 32 0 0 1-64 0V640a32 32 0 0 0-32-32H640a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h144a32 32 0 0 1 0 64zM384 480H192a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H192zM832 480H640a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM640 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H640z\" />
                                        </svg>
                                    </a>

                                    <a href=\"javascript:void(0)\" class=\"bb-toggle-menu hidden max-[991px]:flex max-[991px]:ml-[20px]\">
                                        <div class=\"header-icon\">
                                            <i class=\"ri-menu-3-fill text-[22px] text-[#6c7fd8]\"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class=\"cols flex justify-center\">
                                <div class=\"header-search w-[650px] max-[1399px]:w-[550px] max-[1199px]:w-[400px] max-[991px]:w-full max-[991px]:min-w-[300px] max-[767px]:py-[15px] max-[480px]:min-w-[auto]\">
                                    <form class=\"bb-btn-group-form flex relative max-[991px]:ml-[20px] max-[767px]:m-[0]\" action=\"#\">
                                        <div class=\"inner-select border-r-[1px] border-solid border-[#eee] h-full px-[20px] flex items-center absolute top-[0] left-[0] max-[991px]:hidden\">
                                            <div class=\"custom-select w-[150px] capitalize text-[#777] flex items-center justify-between transition-all duration-[0.2s] ease-in text-[14px] relative\">
                                                <select>
                                                    <option value=\"\">Select Category</option>
                                                    <option value=\"option1\">Refrigerator & Freezer</option>
                                                    <option value=\"option2\">Television</option>
                                                    <option value=\"option3\">Air conditioner</option>
                                                    <option value=\"option4\">Mobile</option>
                                                    <option value=\"option5\">Computer</option>
                                                    <option value=\"option6\">E-Bike</option>
                                                    <option value=\"option7\">PCB</option>
                                                    <option value=\"option8\">Microwave and Electric Oven</option>
                                                    <option value=\"option9\">Blender and Mixer Grinder</option>
                                                    <option value=\"option10\">Washing machine</option>
                                                    <option value=\"option11\">Water Heater (Geyser)</option>
                                                    <option value=\"option12\">Home Appliances</option>
                                                    <option value=\"option13\">Hardware Items</option>
                                                    <option value=\"option14\">Kitchen Appliances</option>
                                                    <option value=\"option15\">Fan</option>
                                                    <option value=\"option16\">LED Light</option>
                                                    <option value=\"option17\">Electrical Accessories</option>
                                                    <option value=\"option18\">Cables</option>
                                                    <option value=\"option19\">Elevator</option>
                                                    <option value=\"option20\">Compressor</option>
                                                    <option value=\"option21\">Battery</option>
                                                    <option value=\"option22\">Hardware & Sanitary Solutions</option>
                                                    <option value=\"option23\">Industrial Solutions</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input class=\"form-control bb-search-bar bg-[#fff] block w-full min-h-[45px] h-[48px] py-[10px] pr-[10px] pl-[210px] max-[991px]:min-h-[40px] max-[991px]:h-[40px] max-[991px]:p-[10px] text-[14px] font-normal leading-[1] text-[#777] rounded-[10px] border-[1px] border-solid border-[#eee] tracking-[0.5px]\" placeholder=\"Search products...\" type=\"text\">
                                        <button class=\"submit absolute top-[0] left-[auto] right-[0] flex items-center justify-center w-[45px] h-full bg-transparent text-[#555] text-[16px] rounded-[0] outline-[0] border-[0] padding-[0]\" type=\"submit\">
                                            <i class=\"ri-search-line text-[18px] leading-[12px] text-[#555]\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"cols bb-icons flex justify-center\">
                                <div class=\"bb-flex-justify max-[575px]:flex max-[575px]:justify-between\">
                                    <div class=\"bb-header-buttons h-full flex justify-end items-center\">
                                        <div class=\"bb-acc-drop relative\">
                                            <a href=\"javascript:void(0)\" class=\"bb-header-btn bb-header-user dropdown-toggle bb-user-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center whitespace-nowrap ml-[30px] max-[1199px]:ml-[20px] max-[767px]:ml-[0]\" title=\"Account\">
                                                <div class=\"bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden\">
                                                    <span class=\"bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap\">About Us</span>
                                                </div>
                                            </a>
                                        </div>
                                        <a href=\"javascript:void(0)\" class=\"bb-header-btn bb-wish-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center ml-[30px] max-[1199px]:ml-[20px]\" title=\"Wishlist\">
                                            <div class=\"bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden\">
                                                <span class=\"bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap\">Blog</span>
                                            </div>
                                        </a>
                                         <div class=\"custom-dropdown relative z-[5] ml-[30px] max-[1199px]:ml-[20px] hidden min-[991px]:flex\">
                                            <a class=\"bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] text-[#3d4750] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem] font-medium\" href=\"#\">Support</a>
                                            <ul class=\"dropdown transition-all duration-[0.3s] ease-in-out min-w-[250px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-right opacity-[0] invisible !left-auto !right-[0] bg-[#fff] block border-[1px] border-solid border-[#eee] block rounded-[10px]\" style=\"left:auto !important; right:0 !important; text-align: end !important;\">
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">16267/08000016267</a></li>
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Store Locator </a></li>
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Customer Care</a></li>
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Service Request </a></li>
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Service Status </a></li>
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">About Product Registration </a></li>
                                            </ul>
                                        </div>
                                        <!-- <a href=\"javascript:void(0)\" class=\"bb-header-btn bb-cart-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center ml-[30px] max-[1199px]:ml-[20px]\" title=\"Cart\">
                                            <div class=\"bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden\">
                                                <span class=\"bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap\">Support</span>
                                            </div>
                                        </a> -->
                                        <a href=\"javascript:void(0)\" class=\"bb-toggle-menu  hidden md:flex lg:hidden ml-[20px]\">
                                            <div class=\"header-icon\">
                                                <i class=\"ri-menu-3-fill text-[22px] text-[#6c7fd8]\"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bb-main-menu-desk bg-[#fff] py-[5px] border-t-[1px] border-solid border-[#eee] max-[991px]:hidden\">
            <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
                <div class=\"flex flex-wrap w-full\">
                    <div class=\"w-full px-[12px]\">
                        <div class=\"bb-inner-menu-desk flex max-[1199px]:relative max-[991px]:justify-between\">
                            <a href=\"javascript:void(0)\" class=\"bb-header-btn bb-sidebar-toggle bb-category-toggle transition-all duration-[0.3s] ease-in-out h-[45px] w-[45px] mr-[30px] p-[8px] flex items-center justify-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px] relative max-[767px]:m-[0] max-[575px]:hidden\">
                                <svg class=\"svg-icon w-[25px] h-[25px]\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path class=\"fill-[#6c7fd8]\" d=\"M384 928H192a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 608a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V640a32 32 0 0 0-32-32H192zM784 928H640a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v144a32 32 0 0 1-64 0V640a32 32 0 0 0-32-32H640a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h144a32 32 0 0 1 0 64zM384 480H192a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H192zM832 480H640a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM640 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H640z\" />
                                </svg>
                            </a>
                            <button class=\"navbar-toggler shadow-none hidden\" type=\"button\" data-bs-toggle=\"collapse\"
                                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <i class=\"ri-menu-2-line\"></i>
                            </button>
                            <div class=\"bb-main-menu relative flex flex-[auto] justify-start max-[991px]:hidden\" id=\"navbarSupportedContent\">
                                <ul class=\"navbar-nav flex flex-wrap flex-row \">
                                    <li class=\"nav-item flex items-center font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] mr-[35px]\">
                                        <a class=\"nav-link p-[0] font-Poppins leading-[28px] text-[15px] font-medium text-[#3d4750] tracking-[0.03rem] block\" href=\"index.php\">Home</a>
                                    </li>
                                    <li class=\"nav-item bb-main-dropdown flex items-center mr-[45px]\">
                                        <a class=\"nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium text-[#3d4750] block tracking-[0.03rem]\" href=\"javascript:void(0)\">Categories</a>
                                        <ul class=\"mega-menu min-w-full transition-all duration-[0.3s] ease-in-out mt-[25px] pl-[30px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]\">
                                            <li class=\"m-[0] flex items-start w-full\">
                                                <ul class=\"mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]\">
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"category.php\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Refrigerator & Freezer</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Television</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Air Conditioner</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Mobile</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Computer</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">E-Bike</a></li>
                                                </ul>
                                                <ul class=\"mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]\">
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">PCB</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Microwave and Electric Oven</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Blender and Mixer Grinder</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Washing Machine</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Water Heater (Geyser)</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Home Appliances</a></li>
                                                </ul>
                                                <ul class=\"mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]\">
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Hardware Items</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Kitchen Appliances</a> </li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Fan</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">LED Light</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Electrical Accessories</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Cables</a></li>
                                                </ul>
                                                <ul class=\"mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]\">
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Lift</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Compressor</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Battery</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Hardware & Sanitary Solutions</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Industrial Solutions</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item flex items-center mr-[45px]\">
                                        <a class=\"nav-link font-Poppins  p-[0] leading-[28px] text-[15px] font-medium tracking-[0.03rem] text-[#3d4750] flex\" href=\"https://waltonplaza.com.bd\" target=\"_blank\">
                                            Walton Plaza
                                        </a>
                                    </li>
                                    <li class=\"nav-item flex items-center\">
                                        <a class=\"nav-link font-Poppins  p-[0] leading-[28px] text-[15px] font-medium tracking-[0.03rem] text-[#3d4750] flex\" href=\"\">
                                            How to & Tips
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bb-mobile-menu-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[16]\"></div>
        <div id=\"bb-mobile-menu\" class=\"bb-mobile-menu transition-all duration-[0.3s] ease-in-out w-[340px] h-full pt-[15px] px-[20px] pb-[20px] fixed top-[0] right-[auto] left-[0] bg-[#fff] translate-x-[-100%] flex flex-col z-[17] overflow-auto max-[480px]:w-[300px]\">
            <div class=\"bb-menu-title w-full pb-[10px] flex flex-wrap justify-between\">
                <span class=\"menu_title font-Poppins flex items-center text-[16px] text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem]\">My Menu</span>
                <button type=\"button\" class=\"bb-close-menu relative border-[0] text-[30px] leading-[1] text-[#ff0000] bg-transparent\">×</button>
            </div>
            <div class=\"bb-menu-inner\">
                <div class=\"bb-menu-content\">
                    <ul>
                        <li class=\"relative\">
                            <a href=\"index.php\" class=\"transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]\">Home</a>
                        </li>
                        <li class=\"relative\">
                            <a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]\">Categories</a>
                            <ul class=\"sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]\">
                                <li class=\"relative\">
                                    <a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]\">Refrigerator & Freezer </a>
                                    <ul class=\"sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]\">
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">No-Frost Refrigerator </a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Direct Cool Refrigerator</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Freezer</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Beverage Cooler</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Upcoming Refrigerator & Freezer</a></li>
                                    </ul>
                                </li>
                                <li class=\"relative\">
                                    <a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]\">Television</a>
                                    <ul class=\"sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]\">
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">All TV</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">4K Ultra HD TV</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">SMART TV</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Basic LED TV</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\"> TV Accessories</a></li>
                                    </ul>
                                </li>
                                <li class=\"relative\">
                                    <a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]\">Air Conditioner</a>
                                    <ul class=\"sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]\">
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\"> Split AC</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Light Commercial AC</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Industrial HVAC</a></li>
                                    </ul>
                                </li>
                                <li class=\"relative\">
                                    <a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]\">Mobile</a>
                                    <ul class=\"sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]\">
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Smart Phone</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Feature Phone</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class=\"relative\">
                            <a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]\">Walton Plaza</a>
                        </li>
                        <li class=\"relative\">
                            <a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]\">How to & Tips</a>
                        </li>
                    </ul>
                </div>
                <div class=\"header-res-lan-curr\">
                    <!-- Social Start -->
                    <div class=\"header-res-social mt-[30px]\">
                        <div class=\"header-top-social\">
                            <ul class=\"flex flex-row justify-center mb-[0]\">
                                <li class=\"list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]\">
                                    <a href=\"#\" class=\"transition-all duration-[0.3s] ease-in-out\"><i class=\"ri-facebook-fill text-[#fff] text-[15px]\"></i></a>
                                </li>
                                <li class=\"list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]\">
                                    <a href=\"#\" class=\"transition-all duration-[0.3s] ease-in-out\"><i class=\"ri-twitter-fill text-[#fff] text-[15px]\"></i></a>
                                </li>
                                <li class=\"list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]\">
                                    <a href=\"#\" class=\"transition-all duration-[0.3s] ease-in-out\"><i class=\"ri-instagram-line text-[#fff] text-[15px]\"></i></a>
                                </li>
                                <li class=\"list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px]\">
                                    <a href=\"#\" class=\"transition-all duration-[0.3s] ease-in-out\"><i class=\"ri-linkedin-fill text-[#fff] text-[15px]\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
    </header>




        <!-- Hero Slider-->
    <section class=\"section-hero relative overflow-hidden\">
        <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
            <div class=\"flex flex-wrap w-full\">
                <div class=\"w-full\">
                    <div class=\"hero-slider swiper\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <!-- Desktop Image -->
                                <img src=\"extension/blueberry/catalog/view/img/category/banner/refrigerator/slider/fridge-slider-1.jpg\" alt=\"Slider Image\" class=\"hidden md:block w-full\" >
                                <!-- Mobile Image -->
                                <img src=\"extension/blueberry/catalog/view/img/category/banner/refrigerator/slider/fridge-slider-m-1.jpg\" alt=\"Slider Image\" class=\"block md:hidden w-full\" >
                            </div>
                            <div class=\"swiper-slide\">
                                <!-- Desktop Image -->
                                <img src=\"extension/blueberry/catalog/view/img/category/banner/refrigerator/slider/fridge-slider-2.jpg\" alt=\"Slider Image\" class=\"hidden md:block w-full\" >
                                <!-- Mobile Image -->
                                <img src=\"extension/blueberry/catalog/view/img/category/banner/refrigerator/slider/fridge-slider-m-2.jpg\" alt=\"Slider Image\" class=\"block md:hidden w-full\" >
                            </div>
                            <div class=\"swiper-slide\">
                                <!-- Desktop Image -->
                                <img src=\"extension/blueberry/catalog/view/img/hero/S01.jpg\" alt=\"Slider Image\" class=\"hidden md:block w-full\" >
                                <!-- Mobile Image -->
                                <img src=\"extension/blueberry/catalog/view/img/hero/S01-m.jpeg\" alt=\"Slider Image\" class=\"block md:hidden w-full\" >
                            </div>
                            <div class=\"swiper-slide\">
                                <!-- Desktop Image -->
                                <img src=\"extension/blueberry/catalog/view/img/hero/S02.jpg\" alt=\"Slider Image\" class=\"hidden md:block w-full\" >
                                <!-- Mobile Image -->
                                <img src=\"extension/blueberry/catalog/view/img/hero/S02-m.jpg\" alt=\"Slider Image\" class=\"block md:hidden w-full\" >
                            </div>
                            
                        </div>
                        <div class=\"swiper-pagination !bottom-[30px] !left-[20px]\"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/blueberry/catalog/view/template/common/header.twig";
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
        return array (  127 => 33,  122 => 31,  116 => 28,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  80 => 15,  74 => 13,  71 => 12,  65 => 10,  63 => 9,  59 => 8,  55 => 7,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html dir=\"{{ direction }}\" lang=\"{{ lang }}\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>{{ title }}</title>
  <base href=\"{{ base }}\"/>
  {% if description %}
    <meta name=\"description\" content=\"{{ description }}\"/>
  {% endif %}
  {% if keywords %}
    <meta name=\"keywords\" content=\"{{ keywords }}\"/>
  {% endif %}

  
  <!-- My custom styles -->
  <link rel=\"stylesheet\" href=\"{{ base }}extension/blueberry/catalog/view/stylesheet/assets/css/vendor/remixicon.css\">
  <link rel=\"stylesheet\" href=\"{{ base }}extension/blueberry/catalog/view/stylesheet/assets/css/vendor/aos.css\">
  <link rel=\"stylesheet\" href=\"{{ base }}extension/blueberry/catalog/view/stylesheet/assets/css/vendor/swiper-bundle.min.css\">
  <link rel=\"stylesheet\" href=\"{{ base }}extension/blueberry/catalog/view/stylesheet/assets/css/vendor/owl.carousel.min.css\">
  <link rel=\"stylesheet\" href=\"{{ base }}extension/blueberry/catalog/view/stylesheet/assets/css/vendor/slick.min.css\">
  <link rel=\"stylesheet\" href=\"{{ base }}extension/blueberry/catalog/view/stylesheet/assets/css/vendor/animate.min.css\">
  <link rel=\"stylesheet\" href=\"{{ base }}extension/blueberry/catalog/view/stylesheet/assets/css/vendor/jquery-range-ui.css\">
  <!-- <link href=\"https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css\" rel=\"stylesheet\"> -->

    <!-- tailwindcss -->
    <script src=\"{{ base }}extension/blueberry/catalog/view/javascript/vendor/tailwindcss3.4.5.js\"></script>

    <!-- Main Style -->
    <link rel=\"stylesheet\" href=\"{{ base }}extension/blueberry/catalog/view/stylesheet/assets/css/style.css\">
    <!-- Custom Style -->
    <link rel=\"stylesheet\" href=\"{{ base }}extension/blueberry/catalog/view/stylesheet/assets/css/customstyle.css\">


    
</head>
<body>

  <!-- Header -->
    <header class=\"bb-header relative z-[5] border-b-[1px] border-solid border-[#eee]\">
        <div class=\"top-header bg-[#001531] py-[6px] max-[991px]:hidden\">
            <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
                <div class=\"flex flex-wrap w-full\">
                    <div class=\"w-full px-[12px]\">
                        <div class=\"inner-top-header flex justify-between\">
                            <div class=\"col-left-bar\">
                                <a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins font-light text-[14px] text-[#fff] leading-[28px] tracking-[0.03rem]\">Call: 16267/08000016267</a>
                            </div>
                            <div class=\"col-right-bar flex\">
                                <div class=\"cols px-[12px]\">
                                    <a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] font-light leading-[28px] tracking-[0.03rem]\">Contact Us</a>
                                </div>
                                <div class=\"cols px-[12px]\">
                                    <div class=\"custom-dropdown relative z-50\">
                                        <a class=\"bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem]\" href=\"#\">Language</a>
                                        <ul class=\"dropdown transition-all duration-[0.3s] ease-in-out min-w-[150px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] block border-[1px] border-solid border-[#eee] block rounded-[10px]\">
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">English</a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Bangla</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class=\"cols px-[12px]\">
                                    <div class=\"custom-dropdown relative z-[5]\">
                                        <a class=\"bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem]\" href=\"#\">Currency</a>
                                        <ul class=\"dropdown transition-all duration-[0.3s] ease-in-out min-w-[150px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] block border-[1px] border-solid border-[#eee] block rounded-[10px]\">
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">USD \$</a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[13px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">EUR €</a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bottom-header py-[10px] max-[991px]:py-[10px]\">
            <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
                <div class=\"flex flex-wrap w-full\">
                    <div class=\"w-full px-[12px]\">
                        <div class=\"inner-bottom-header flex justify-between max-[767px]:flex-col\">
                            <div class=\"cols bb-logo-detail flex max-[767px]:justify-between\">
                                <!-- Header Logo Start -->
                                <div class=\"header-logo flex items-center max-[575px]:justify-center\">
                                    <a href=\"index.php\">
                                        <img src=\"extension/blueberry/catalog/view/img/logo/logo.png\" alt=\"logo\" class=\"light w-[112px] max-[991px]:w-[70px] block\">
                                        <img src=\"extension/blueberry/catalog/view/img/logo/logo.png\" alt=\"logo\" class=\"dark w-[112px] max-[991px]:w-[70px] hidden\">
                                    </a>
                                </div>
                                <!-- Header Logo End -->
                               
                                <div class=\"d-flex items-center hidden max-[767px]:flex max-[767px]:ml-[20px]\">
                                    <div class=\"custom-dropdown relative z-[5] ml-[30px] max-[1199px]:ml-[20px]\">
                                        <a class=\"bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] text-[#3d4750] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem] font-medium\" href=\"#\">Support</a>
                                        <ul class=\"dropdown transition-all duration-[0.3s] ease-in-out min-w-[250px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-right opacity-[0] invisible !left-auto !right-[0] bg-[#fff] block border-[1px] border-solid border-[#eee] block rounded-[10px]\" style=\"left:auto !important; right:0 !important; text-align: end !important;\">
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">16267/08000016267</a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Store Locator </a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Customer Care</a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Service Request </a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Service Status </a></li>
                                            <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">About Product Registration </a></li>
                                        </ul>
                                    </div>

                                     <a href=\"javascript:void(0)\" class=\"bb-sidebar-toggle bb-category-toggle hidden max-[991px]:flex max-[991px]:items-center max-[991px]:ml-[20px] max-[991px]:border-[1px] max-[991px]:border-solid max-[991px]:border-[#eee] max-[991px]:w-[40px] max-[991px]:h-[40px] max-[991px]:rounded-[15px] justify-center transition-all duration-[0.3s] ease-in-out font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\">
                                        <svg class=\"svg-icon h-[30px] w-[30px] max-[991px]:w-[22px] max-[991px]:h-[22px]\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">
                                            <path class=\"fill-[#6c7fd8]\" d=\"M384 928H192a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 608a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V640a32 32 0 0 0-32-32H192zM784 928H640a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v144a32 32 0 0 1-64 0V640a32 32 0 0 0-32-32H640a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h144a32 32 0 0 1 0 64zM384 480H192a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H192zM832 480H640a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM640 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H640z\" />
                                        </svg>
                                    </a>

                                    <a href=\"javascript:void(0)\" class=\"bb-toggle-menu hidden max-[991px]:flex max-[991px]:ml-[20px]\">
                                        <div class=\"header-icon\">
                                            <i class=\"ri-menu-3-fill text-[22px] text-[#6c7fd8]\"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class=\"cols flex justify-center\">
                                <div class=\"header-search w-[650px] max-[1399px]:w-[550px] max-[1199px]:w-[400px] max-[991px]:w-full max-[991px]:min-w-[300px] max-[767px]:py-[15px] max-[480px]:min-w-[auto]\">
                                    <form class=\"bb-btn-group-form flex relative max-[991px]:ml-[20px] max-[767px]:m-[0]\" action=\"#\">
                                        <div class=\"inner-select border-r-[1px] border-solid border-[#eee] h-full px-[20px] flex items-center absolute top-[0] left-[0] max-[991px]:hidden\">
                                            <div class=\"custom-select w-[150px] capitalize text-[#777] flex items-center justify-between transition-all duration-[0.2s] ease-in text-[14px] relative\">
                                                <select>
                                                    <option value=\"\">Select Category</option>
                                                    <option value=\"option1\">Refrigerator & Freezer</option>
                                                    <option value=\"option2\">Television</option>
                                                    <option value=\"option3\">Air conditioner</option>
                                                    <option value=\"option4\">Mobile</option>
                                                    <option value=\"option5\">Computer</option>
                                                    <option value=\"option6\">E-Bike</option>
                                                    <option value=\"option7\">PCB</option>
                                                    <option value=\"option8\">Microwave and Electric Oven</option>
                                                    <option value=\"option9\">Blender and Mixer Grinder</option>
                                                    <option value=\"option10\">Washing machine</option>
                                                    <option value=\"option11\">Water Heater (Geyser)</option>
                                                    <option value=\"option12\">Home Appliances</option>
                                                    <option value=\"option13\">Hardware Items</option>
                                                    <option value=\"option14\">Kitchen Appliances</option>
                                                    <option value=\"option15\">Fan</option>
                                                    <option value=\"option16\">LED Light</option>
                                                    <option value=\"option17\">Electrical Accessories</option>
                                                    <option value=\"option18\">Cables</option>
                                                    <option value=\"option19\">Elevator</option>
                                                    <option value=\"option20\">Compressor</option>
                                                    <option value=\"option21\">Battery</option>
                                                    <option value=\"option22\">Hardware & Sanitary Solutions</option>
                                                    <option value=\"option23\">Industrial Solutions</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input class=\"form-control bb-search-bar bg-[#fff] block w-full min-h-[45px] h-[48px] py-[10px] pr-[10px] pl-[210px] max-[991px]:min-h-[40px] max-[991px]:h-[40px] max-[991px]:p-[10px] text-[14px] font-normal leading-[1] text-[#777] rounded-[10px] border-[1px] border-solid border-[#eee] tracking-[0.5px]\" placeholder=\"Search products...\" type=\"text\">
                                        <button class=\"submit absolute top-[0] left-[auto] right-[0] flex items-center justify-center w-[45px] h-full bg-transparent text-[#555] text-[16px] rounded-[0] outline-[0] border-[0] padding-[0]\" type=\"submit\">
                                            <i class=\"ri-search-line text-[18px] leading-[12px] text-[#555]\"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"cols bb-icons flex justify-center\">
                                <div class=\"bb-flex-justify max-[575px]:flex max-[575px]:justify-between\">
                                    <div class=\"bb-header-buttons h-full flex justify-end items-center\">
                                        <div class=\"bb-acc-drop relative\">
                                            <a href=\"javascript:void(0)\" class=\"bb-header-btn bb-header-user dropdown-toggle bb-user-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center whitespace-nowrap ml-[30px] max-[1199px]:ml-[20px] max-[767px]:ml-[0]\" title=\"Account\">
                                                <div class=\"bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden\">
                                                    <span class=\"bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap\">About Us</span>
                                                </div>
                                            </a>
                                        </div>
                                        <a href=\"javascript:void(0)\" class=\"bb-header-btn bb-wish-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center ml-[30px] max-[1199px]:ml-[20px]\" title=\"Wishlist\">
                                            <div class=\"bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden\">
                                                <span class=\"bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap\">Blog</span>
                                            </div>
                                        </a>
                                         <div class=\"custom-dropdown relative z-[5] ml-[30px] max-[1199px]:ml-[20px] hidden min-[991px]:flex\">
                                            <a class=\"bb-dropdown-toggle transition-all duration-[0.3s] ease-in-out font-Poppins text-[12px] text-[#3d4750] relative pr-[15px] font-light leading-[28px] tracking-[0.03rem] font-medium\" href=\"#\">Support</a>
                                            <ul class=\"dropdown transition-all duration-[0.3s] ease-in-out min-w-[250px] py-[10px] px-[10px] mt-[25px] absolute z-[16] text-right opacity-[0] invisible !left-auto !right-[0] bg-[#fff] block border-[1px] border-solid border-[#eee] block rounded-[10px]\" style=\"left:auto !important; right:0 !important; text-align: end !important;\">
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">16267/08000016267</a></li>
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Store Locator </a></li>
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Customer Care</a></li>
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Service Request </a></li>
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">Service Status </a></li>
                                                <li class=\"font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]\"><a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out text-[12px] text-[#686e7d] hover:text-[#6c7fd8] font-normal font-Poppins py-[12px] block leading-[28px] tracking-[0.03rem]\">About Product Registration </a></li>
                                            </ul>
                                        </div>
                                        <!-- <a href=\"javascript:void(0)\" class=\"bb-header-btn bb-cart-toggle transition-all duration-[0.3s] ease-in-out relative flex w-[auto] items-center ml-[30px] max-[1199px]:ml-[20px]\" title=\"Cart\">
                                            <div class=\"bb-btn-desc flex flex-col ml-[10px] max-[1199px]:hidden\">
                                                <span class=\"bb-btn-title font-Poppins transition-all duration-[0.3s] ease-in-out text-[12px] leading-[1] text-[#3d4750] mb-[4px] tracking-[0.6px] capitalize font-medium whitespace-nowrap\">Support</span>
                                            </div>
                                        </a> -->
                                        <a href=\"javascript:void(0)\" class=\"bb-toggle-menu  hidden md:flex lg:hidden ml-[20px]\">
                                            <div class=\"header-icon\">
                                                <i class=\"ri-menu-3-fill text-[22px] text-[#6c7fd8]\"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bb-main-menu-desk bg-[#fff] py-[5px] border-t-[1px] border-solid border-[#eee] max-[991px]:hidden\">
            <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
                <div class=\"flex flex-wrap w-full\">
                    <div class=\"w-full px-[12px]\">
                        <div class=\"bb-inner-menu-desk flex max-[1199px]:relative max-[991px]:justify-between\">
                            <a href=\"javascript:void(0)\" class=\"bb-header-btn bb-sidebar-toggle bb-category-toggle transition-all duration-[0.3s] ease-in-out h-[45px] w-[45px] mr-[30px] p-[8px] flex items-center justify-center bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px] relative max-[767px]:m-[0] max-[575px]:hidden\">
                                <svg class=\"svg-icon w-[25px] h-[25px]\" viewBox=\"0 0 1024 1024\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path class=\"fill-[#6c7fd8]\" d=\"M384 928H192a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 608a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V640a32 32 0 0 0-32-32H192zM784 928H640a96 96 0 0 1-96-96V640a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v144a32 32 0 0 1-64 0V640a32 32 0 0 0-32-32H640a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h144a32 32 0 0 1 0 64zM384 480H192a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM192 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H192zM832 480H640a96 96 0 0 1-96-96V192a96 96 0 0 1 96-96h192a96 96 0 0 1 96 96v192a96 96 0 0 1-96 96zM640 160a32 32 0 0 0-32 32v192a32 32 0 0 0 32 32h192a32 32 0 0 0 32-32V192a32 32 0 0 0-32-32H640z\" />
                                </svg>
                            </a>
                            <button class=\"navbar-toggler shadow-none hidden\" type=\"button\" data-bs-toggle=\"collapse\"
                                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                                <i class=\"ri-menu-2-line\"></i>
                            </button>
                            <div class=\"bb-main-menu relative flex flex-[auto] justify-start max-[991px]:hidden\" id=\"navbarSupportedContent\">
                                <ul class=\"navbar-nav flex flex-wrap flex-row \">
                                    <li class=\"nav-item flex items-center font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] mr-[35px]\">
                                        <a class=\"nav-link p-[0] font-Poppins leading-[28px] text-[15px] font-medium text-[#3d4750] tracking-[0.03rem] block\" href=\"index.php\">Home</a>
                                    </li>
                                    <li class=\"nav-item bb-main-dropdown flex items-center mr-[45px]\">
                                        <a class=\"nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-medium text-[#3d4750] block tracking-[0.03rem]\" href=\"javascript:void(0)\">Categories</a>
                                        <ul class=\"mega-menu min-w-full transition-all duration-[0.3s] ease-in-out mt-[25px] pl-[30px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]\">
                                            <li class=\"m-[0] flex items-start w-full\">
                                                <ul class=\"mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]\">
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"category.php\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Refrigerator & Freezer</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Television</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Air Conditioner</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Mobile</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Computer</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">E-Bike</a></li>
                                                </ul>
                                                <ul class=\"mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]\">
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">PCB</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Microwave and Electric Oven</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Blender and Mixer Grinder</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Washing Machine</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Water Heater (Geyser)</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Home Appliances</a></li>
                                                </ul>
                                                <ul class=\"mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]\">
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Hardware Items</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Kitchen Appliances</a> </li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Fan</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">LED Light</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Electrical Accessories</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Cables</a></li>
                                                </ul>
                                                <ul class=\"mega-block w-[calc(25%-30px)] mr-[30px] py-[15px]\">
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Lift</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Compressor</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Battery</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Hardware & Sanitary Solutions</a></li>
                                                    <li class=\"flex items-center leading-[28px]\"><a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out font-Poppins py-[10px] leading-[22px] text-[14px] font-normal tracking-[0.03rem] text-[#686e7d] hover:text-[#6c7fd8] capitalize\">Industrial Solutions</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item flex items-center mr-[45px]\">
                                        <a class=\"nav-link font-Poppins  p-[0] leading-[28px] text-[15px] font-medium tracking-[0.03rem] text-[#3d4750] flex\" href=\"https://waltonplaza.com.bd\" target=\"_blank\">
                                            Walton Plaza
                                        </a>
                                    </li>
                                    <li class=\"nav-item flex items-center\">
                                        <a class=\"nav-link font-Poppins  p-[0] leading-[28px] text-[15px] font-medium tracking-[0.03rem] text-[#3d4750] flex\" href=\"\">
                                            How to & Tips
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"bb-mobile-menu-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[16]\"></div>
        <div id=\"bb-mobile-menu\" class=\"bb-mobile-menu transition-all duration-[0.3s] ease-in-out w-[340px] h-full pt-[15px] px-[20px] pb-[20px] fixed top-[0] right-[auto] left-[0] bg-[#fff] translate-x-[-100%] flex flex-col z-[17] overflow-auto max-[480px]:w-[300px]\">
            <div class=\"bb-menu-title w-full pb-[10px] flex flex-wrap justify-between\">
                <span class=\"menu_title font-Poppins flex items-center text-[16px] text-[#3d4750] font-semibold leading-[26px] tracking-[0.02rem]\">My Menu</span>
                <button type=\"button\" class=\"bb-close-menu relative border-[0] text-[30px] leading-[1] text-[#ff0000] bg-transparent\">×</button>
            </div>
            <div class=\"bb-menu-inner\">
                <div class=\"bb-menu-content\">
                    <ul>
                        <li class=\"relative\">
                            <a href=\"index.php\" class=\"transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]\">Home</a>
                        </li>
                        <li class=\"relative\">
                            <a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]\">Categories</a>
                            <ul class=\"sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]\">
                                <li class=\"relative\">
                                    <a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]\">Refrigerator & Freezer </a>
                                    <ul class=\"sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]\">
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">No-Frost Refrigerator </a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Direct Cool Refrigerator</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Freezer</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Beverage Cooler</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Upcoming Refrigerator & Freezer</a></li>
                                    </ul>
                                </li>
                                <li class=\"relative\">
                                    <a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]\">Television</a>
                                    <ul class=\"sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]\">
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">All TV</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">4K Ultra HD TV</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">SMART TV</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Basic LED TV</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\"> TV Accessories</a></li>
                                    </ul>
                                </li>
                                <li class=\"relative\">
                                    <a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]\">Air Conditioner</a>
                                    <ul class=\"sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]\">
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\"> Split AC</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Light Commercial AC</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Industrial HVAC</a></li>
                                    </ul>
                                </li>
                                <li class=\"relative\">
                                    <a href=\"javascript:void(0)\" class=\"transition-all duration-[0.3s] ease-in-out mb-[0] pl-[15px] pr-[0] py-[12px] capitalize block text-[14px] font-normal text-[#686e7d]\">Mobile</a>
                                    <ul class=\"sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]\">
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Smart Phone</a></li>
                                        <li class=\"relative\"><a href=\"\" class=\"font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[30px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]\">Feature Phone</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class=\"relative\">
                            <a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]\">Walton Plaza</a>
                        </li>
                        <li class=\"relative\">
                            <a href=\"\" class=\"transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize text-[#686e7d] border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-medium leading-[28px] tracking-[0.03rem]\">How to & Tips</a>
                        </li>
                    </ul>
                </div>
                <div class=\"header-res-lan-curr\">
                    <!-- Social Start -->
                    <div class=\"header-res-social mt-[30px]\">
                        <div class=\"header-top-social\">
                            <ul class=\"flex flex-row justify-center mb-[0]\">
                                <li class=\"list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]\">
                                    <a href=\"#\" class=\"transition-all duration-[0.3s] ease-in-out\"><i class=\"ri-facebook-fill text-[#fff] text-[15px]\"></i></a>
                                </li>
                                <li class=\"list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]\">
                                    <a href=\"#\" class=\"transition-all duration-[0.3s] ease-in-out\"><i class=\"ri-twitter-fill text-[#fff] text-[15px]\"></i></a>
                                </li>
                                <li class=\"list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px] mr-[.5rem]\">
                                    <a href=\"#\" class=\"transition-all duration-[0.3s] ease-in-out\"><i class=\"ri-instagram-line text-[#fff] text-[15px]\"></i></a>
                                </li>
                                <li class=\"list-inline-item w-[30px] h-[30px] flex items-center justify-center bg-[#3d4750] rounded-[10px]\">
                                    <a href=\"#\" class=\"transition-all duration-[0.3s] ease-in-out\"><i class=\"ri-linkedin-fill text-[#fff] text-[15px]\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
    </header>




        <!-- Hero Slider-->
    <section class=\"section-hero relative overflow-hidden\">
        <div class=\"flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]\">
            <div class=\"flex flex-wrap w-full\">
                <div class=\"w-full\">
                    <div class=\"hero-slider swiper\">
                        <div class=\"swiper-wrapper\">
                            <div class=\"swiper-slide\">
                                <!-- Desktop Image -->
                                <img src=\"extension/blueberry/catalog/view/img/category/banner/refrigerator/slider/fridge-slider-1.jpg\" alt=\"Slider Image\" class=\"hidden md:block w-full\" >
                                <!-- Mobile Image -->
                                <img src=\"extension/blueberry/catalog/view/img/category/banner/refrigerator/slider/fridge-slider-m-1.jpg\" alt=\"Slider Image\" class=\"block md:hidden w-full\" >
                            </div>
                            <div class=\"swiper-slide\">
                                <!-- Desktop Image -->
                                <img src=\"extension/blueberry/catalog/view/img/category/banner/refrigerator/slider/fridge-slider-2.jpg\" alt=\"Slider Image\" class=\"hidden md:block w-full\" >
                                <!-- Mobile Image -->
                                <img src=\"extension/blueberry/catalog/view/img/category/banner/refrigerator/slider/fridge-slider-m-2.jpg\" alt=\"Slider Image\" class=\"block md:hidden w-full\" >
                            </div>
                            <div class=\"swiper-slide\">
                                <!-- Desktop Image -->
                                <img src=\"extension/blueberry/catalog/view/img/hero/S01.jpg\" alt=\"Slider Image\" class=\"hidden md:block w-full\" >
                                <!-- Mobile Image -->
                                <img src=\"extension/blueberry/catalog/view/img/hero/S01-m.jpeg\" alt=\"Slider Image\" class=\"block md:hidden w-full\" >
                            </div>
                            <div class=\"swiper-slide\">
                                <!-- Desktop Image -->
                                <img src=\"extension/blueberry/catalog/view/img/hero/S02.jpg\" alt=\"Slider Image\" class=\"hidden md:block w-full\" >
                                <!-- Mobile Image -->
                                <img src=\"extension/blueberry/catalog/view/img/hero/S02-m.jpg\" alt=\"Slider Image\" class=\"block md:hidden w-full\" >
                            </div>
                            
                        </div>
                        <div class=\"swiper-pagination !bottom-[30px] !left-[20px]\"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>", "extension/blueberry/catalog/view/template/common/header.twig", "C:\\xampp\\htdocs\\walton_v3\\extension\\blueberry\\catalog\\view\\template\\common\\header.twig");
    }
}
