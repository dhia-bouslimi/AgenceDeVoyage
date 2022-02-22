<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base2.html.twig */
class __TwigTemplate_793d9eaf637db39b75d09346c7992a9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Travelix</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Travelix Project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo " rel=\"stylesheet type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main_styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/responsive.css"), "html", null, true);
        echo "\">
    <style>
        .home_slider_background {
            background-image: url('";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(" ../public/images/home_slider.jpg "), "html", null, true);
        echo "')> </div>
        }
    </style>
</head>

<body>

<div class=\"super_container\">

    <header class=\"header\">

        <!-- Top Bar -->

        <div class=\"top_bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col d-flex flex-row\">
                        <div class=\"phone\">+45 345 3324 56789</div>
                        <div class=\"social\">
                            <ul class=\"social_list\">
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                        <div class=\"user_box ml-auto\">
                            <div class=\"user_box_login user_box_link\"><a href=\"#\">login</a></div>
                            <div class=\"user_box_register user_box_link\"><a href=\"#\">register</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class=\"main_nav\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
                        <div class=\"logo_container\">
                            <div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
                        </div>
                        <div class=\"main_nav_container ml-auto\">
                            <ul class=\"main_nav_list\">
                                <li class=\"main_nav_item\"><a href=\"#\">home</a></li>
                                <li class=\"main_nav_item\"><a href=\"about.html\">hotels</a></li>
                                <li class=\"main_nav_item\"><a href=\"\">vols</a></li>
                                <li class=\"main_nav_item\"><a href=\"blog.html\">voitures</a></li>
                                <li class=\"main_nav_item\"><a href=\"contact.html\">utilisateur</a></li>
                                <li class=\"main_nav_item\"><a href=\"contact.html\">shop</a></li>
                                <li class=\"main_nav_item\"><a href=\"contact.html\">reclamation</a></li>
                                <li class=\"main_nav_item\"><a href=\"\">admin</a></li>




                            </ul>
                        </div>
                        <div class=\"content_search ml-lg-0 ml-auto\">
                            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"></path>
                                        </g>
                                    </g>
                                </g>
\t\t\t\t\t\t\t</svg>
                        </div>

                        <form id=\"search_form\" class=\"search_form bez_1\">
                            <input type=\"search\" class=\"search_content_input bez_1\">
                        </form>

                        <div class=\"hamburger\">
                            <i class=\"fa fa-bars trans_200\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class=\"menu trans_500\">
        <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
            <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
            <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
            <ul>
                <li class=\"menu_item\"><a href=\"#\">home</a></li>
                <li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
                <li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
                <li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
                <li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>

            </ul>
        </div>
    </div>
    <!-- Home -->
    <div class=\"home\">

        <!-- Home Slider -->

        <div class=\"home_slider_container\">

            <div class=\"owl-carousel owl-theme home_slider\">

                <!-- Slider Item -->
                <div class=\"owl-item home_slider_item\">
                    <!-- Image by https://unsplash.com/@anikindimitry -->
                    <div class=\"home_slider_background\" style=\"background-image:url('";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../public/images/home_slider.jpg"), "html", null, true);
        echo "')>
                            </div>

                    <div class=\"home_slider_content text-center\">
                        <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class=\"owl-item home_slider_item\">
                    <div class=\"home_slider_background\" style=\"background-image:url(../public/images/home_slider.jpg)\"></div>

                    <div class=\"home_slider_content text-center\">
                        <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class=\"owl-item home_slider_item\">
                    <div class=\"home_slider_background\" style=\"background-image:url(../public/images/home_slider.jpg)\"></div>

                    <div class=\"home_slider_content text-center\">
                        <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Nav - Prev -->
            <div class=\"home_slider_nav home_slider_prev\">
                <svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                     width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
                        <linearGradient id='home_grad_prev'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                    <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                    <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t</svg>
            </div>

            <!-- Home Slider Nav - Next -->
            <div class=\"home_slider_nav home_slider_next\">
                <svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                     width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
                        <linearGradient id='home_grad_next'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                    <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                    <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
\t\t\t\t17.046,15.554 \"/>
\t\t\t\t</svg>
            </div>

            <!-- Home Slider Dots -->

            <div class=\"home_slider_dots\">
                <ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
                    <li class=\"home_slider_custom_dot active\"><div></div>01.</li>
                    <li class=\"home_slider_custom_dot\"><div></div>02.</li>
                    <li class=\"home_slider_custom_dot\"><div></div>03.</li>
                </ul>
            </div>

        </div>

    </div>



    <!-- Search -->

    <div class=\"search\">


        <!-- Search Contents -->

        <div class=\"container fill_height\">
            <div class=\"row fill_height\">
                <div class=\"col fill_height\">

                    <!-- Search Tabs -->

                    <div class=\"search_tabs_container\">
                        <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/suitcase.png\" alt=\"\"><span>hotels</span></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/bus.png\" alt=\"\">car rentals</div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/departure.png\" alt=\"\">flights</div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/island.png\" alt=\"\">trips</div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/cruise.png\" alt=\"\">cruises</div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/diving.png\" alt=\"\">activities</div>
                        </div>
                    </div>

                    <!--les Search -----amel rouhek me rithomch hata nouslou lel metier-------------Panel -->


                    <!-- Search Panel -->

                    <div class=\"search_panel active\">
                        <form action=\"#\" id=\"search_form_1\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_1\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_1\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class=\"search_panel\">
                        <form action=\"#\" id=\"search_form_2\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_2\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_2\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class=\"search_panel\">
                        <form action=\"#\" id=\"search_form_3\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_3\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_3\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class=\"search_panel\">
                        <form action=\"#\" id=\"search_form_4\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_4\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_4\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class=\"search_panel\">
                        <form action=\"#\" id=\"search_form_5\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_5\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_5\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class=\"search_panel\">
                        <form action=\"#\" id=\"search_form_6\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_6\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_6\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>



                    <!--les Search ------------------Panel -->

                </div>
            </div>
        </div>
    </div>


    ";
        // line 486
        $this->displayBlock('body', $context, $blocks);
        // line 491
        echo "



    <!-- Footer -->
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_content footer_about\">
                            <div class=\"logo_container footer_logo\">
                                <div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
                            </div>
                            <p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
                            <ul class=\"footer_social_list\">
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">blog posts</div>
                        <div class=\"footer_content footer_blog\">

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"images/footer_blog_1.jpg\" alt=\"https://unsplash.com/@avidenov\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"images/footer_blog_2.jpg\" alt=\"https://unsplash.com/@deannaritchie\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"images/footer_blog_3.jpg\" alt=\"https://unsplash.com/@bergeryap87\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">tags</div>
                        <div class=\"footer_content footer_tags\">
                            <ul class=\"tags_list clearfix\">
                                <li class=\"tag_item\"><a href=\"#\">design</a></li>
                                <li class=\"tag_item\"><a href=\"#\">fashion</a></li>
                                <li class=\"tag_item\"><a href=\"#\">music</a></li>
                                <li class=\"tag_item\"><a href=\"#\">video</a></li>
                                <li class=\"tag_item\"><a href=\"#\">party</a></li>
                                <li class=\"tag_item\"><a href=\"#\">photography</a></li>
                                <li class=\"tag_item\"><a href=\"#\">adventure</a></li>
                                <li class=\"tag_item\"><a href=\"#\">travel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">contact info</div>
                        <div class=\"footer_content footer_contact\">
                            <ul class=\"contact_info_list\">
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">2556-808-8613</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Copyright -->
    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 order-lg-1 order-2  \">
                    <div class=\"copyright_content d-flex flex-row align-items-center\">
                        <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright ©<script>document.write(new Date().getFullYear());</script>2022 All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
                <div class=\"col-lg-9 order-lg-2 order-1\">
                    <div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
                        <div class=\"footer_nav\">
                            <ul class=\"footer_nav_list\">
                                <li class=\"footer_nav_item\"><a href=\"#\">home</a></li>
                                <li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
                                <li class=\"footer_nav_item\"><a href=\"blog.html\">news</a></li>
                                <li class=\"footer_nav_item\"><a href=\"contact.html\">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>














<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"styles/bootstrap4/popper.js\"></script>
<script src=\"styles/bootstrap4/bootstrap.min.js\"></script>
<script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
<script src=\"plugins/easing/easing.js\"></script>
<script src=\"js/custom.js\"></script>


<div id=\"sfwdt949a8d\" class=\"sf-toolbar sf-display-none\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\"></div><script nonce=\"2d3e18ed9a5b14380fb938ac87369bac\">/*<![CDATA[*/    if (typeof Sfjs === 'undefined' || typeof Sfjs.loadToolbar === 'undefined') {    Sfjs = (function() {        \"use strict\";        if ('classList' in document.documentElement) {            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };            var addClass = function(el, cssClass) { el.classList.add(cssClass); };            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };        } else {            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };        }        var noop = function() {};        var profilerStorageKey = 'symfony/profiler/';        var addEventListener;        var el = document.createElement('div');        if (!('addEventListener' in el)) {            addEventListener = function (element, eventName, callback) {                element.attachEvent('on' + eventName, callback);            };        } else {            addEventListener = function (element, eventName, callback) {                element.addEventListener(eventName, callback, false);            };        }        var request = function(url, onSuccess, onError, payload, options) {            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');            options = options || {};            options.maxTries = options.maxTries || 0;            xhr.open(options.method || 'GET', url, true);            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');            xhr.onreadystatechange = function(state) {                if (4 !== xhr.readyState) {                    return null;                }                if (xhr.status == 404 && options.maxTries > 1) {                    setTimeout(function(){                        options.maxTries--;                        request(url, onSuccess, onError, payload, options);                    }, 1000);                    return null;                }                if (200 === xhr.status) {                    (onSuccess || noop)(xhr);                } else {                    (onError || noop)(xhr);                }            };            xhr.send(payload || '');        };        var getPreference = function(name) {            if (!window.localStorage) {                return null;            }            return localStorage.getItem(profilerStorageKey + name);        };        var setPreference = function(name, value) {            if (!window.localStorage) {                return null;            }            localStorage.setItem(profilerStorageKey + name, value);        };        var requestStack = [];        var extractHeaders = function(xhr, stackElement) {            /* Here we avoid to call xhr.getResponseHeader in order to */            /* prevent polluting the console with CORS security errors */            var allHeaders = xhr.getAllResponseHeaders();            var ret;            if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {                stackElement.profile = ret[1];            }            if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {                stackElement.profilerUrl = ret[1];            }            if (ret = allHeaders.match(/^Symfony-Debug-Toolbar-Replace:\\s+(.*)\$/im)) {                stackElement.toolbarReplaceFinished = false;                stackElement.toolbarReplace = '1' === ret[1];            }        };        var successStreak = 4;        var pendingRequests = 0;        var renderAjaxRequests = function() {            var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');            if (!requestCounter) {                return;            }            requestCounter.textContent = requestStack.length;            var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");            if (infoSpan) {                infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');            }            var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');            if (requestStack.length) {                ajaxToolbarPanel.style.display = 'block';            } else {                ajaxToolbarPanel.style.display = 'none';            }            if (pendingRequests > 0) {                addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else if (successStreak < 4) {                addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else {                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');                removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');            }        };        var startAjaxRequest = function(index) {            var tbody = document.querySelector('.sf-toolbar-ajax-request-list');            if (!tbody) {                return;            }            var nbOfAjaxRequest = tbody.rows.length;            if (nbOfAjaxRequest >= 100) {                tbody.deleteRow(0);            }            var request = requestStack[index];            pendingRequests++;            var row = document.createElement('tr');            request.DOMNode = row;            var requestNumberCell = document.createElement('td');            requestNumberCell.textContent = index + 1;            row.appendChild(requestNumberCell);            var profilerCell = document.createElement('td');            profilerCell.textContent = 'n/a';            row.appendChild(profilerCell);            var methodCell = document.createElement('td');            methodCell.textContent = request.method;            row.appendChild(methodCell);            var typeCell = document.createElement('td');            typeCell.textContent = request.type;            row.appendChild(typeCell);            var statusCodeCell = document.createElement('td');            var statusCode = document.createElement('span');            statusCode.textContent = 'n/a';            statusCodeCell.appendChild(statusCode);            row.appendChild(statusCodeCell);            var pathCell = document.createElement('td');            pathCell.className = 'sf-ajax-request-url';            if ('GET' === request.method) {                var pathLink = document.createElement('a');                pathLink.setAttribute('href', request.url);                pathLink.textContent = request.url;                pathCell.appendChild(pathLink);            } else {                pathCell.textContent = request.url;            }            pathCell.setAttribute('title', request.url);            row.appendChild(pathCell);            var durationCell = document.createElement('td');            durationCell.className = 'sf-ajax-request-duration';            durationCell.textContent = 'n/a';            row.appendChild(durationCell);            request.liveDurationHandle = setInterval(function() {                durationCell.textContent = (new Date() - request.start) + 'ms';            }, 100);            row.className = 'sf-ajax-request sf-ajax-request-loading';            tbody.insertBefore(row, null);            var toolbarInfo = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');            toolbarInfo.scrollTop = toolbarInfo.scrollHeight;            renderAjaxRequests();        };        var finishAjaxRequest = function(index) {            var request = requestStack[index];            clearInterval(request.liveDurationHandle);            if (!request.DOMNode) {                return;            }            if (request.toolbarReplace && !request.toolbarReplaceFinished && request.profile) {                /* Flag as complete because finishAjaxRequest can be called multiple times. */                request.toolbarReplaceFinished = true;                /* Search up through the DOM to find the toolbar's container ID. */                for (var elem = request.DOMNode; elem && elem !== document; elem = elem.parentNode) {                    if (elem.id.match(/^sfwdt/)) {                        Sfjs.loadToolbar(elem.id.replace(/^sfwdt/, ''), request.profile);                        break;                    }                }            }            pendingRequests--;            var row = request.DOMNode;            /* Unpack the children from the row */            var profilerCell = row.children[1];            var methodCell = row.children[2];            var statusCodeCell = row.children[4];            var statusCodeElem = statusCodeCell.children[0];            var durationCell = row.children[6];            if (request.error) {                row.className = 'sf-ajax-request sf-ajax-request-error';                methodCell.className = 'sf-ajax-request-error';                successStreak = 0;            } else {                row.className = 'sf-ajax-request sf-ajax-request-ok';                successStreak++;            }            if (request.statusCode) {                if (request.statusCode < 300) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status');                } else if (request.statusCode < 400) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');                } else {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');                }                statusCodeElem.textContent = request.statusCode;            } else {                statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');            }            if (request.duration) {                durationCell.textContent = request.duration + 'ms';            }            if (request.profilerUrl) {                profilerCell.textContent = '';                var profilerLink = document.createElement('a');                profilerLink.setAttribute('href', request.profilerUrl);                profilerLink.textContent = request.profile;                profilerCell.appendChild(profilerLink);            }            renderAjaxRequests();        };                    if (window.fetch && window.fetch.polyfill === undefined) {                var oldFetch = window.fetch;                window.fetch = function () {                    var promise = oldFetch.apply(this, arguments);                    var url = arguments[0];                    var params = arguments[1];                    var paramType = Object.prototype.toString.call(arguments[0]);                    if (paramType === '[object Request]') {                        url = arguments[0].url;                        params = {                            method: arguments[0].method,                            credentials: arguments[0].credentials,                            headers: arguments[0].headers,                            mode: arguments[0].mode,                            redirect: arguments[0].redirect                        };                    } else {                        url = String(url);                    }                    if (!url.match(new RegExp(\"^\\/((index|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var method = 'GET';                        if (params && params.method !== undefined) {                            method = params.method;                        }                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'fetch',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        promise.then(function (r) {                            stackElement.duration = new Date() - stackElement.start;                            stackElement.error = r.status < 200 || r.status >= 400;                            stackElement.statusCode = r.status;                            stackElement.profile = r.headers.get('x-debug-token');                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');                            stackElement.toolbarReplaceFinished = false;                            stackElement.toolbarReplace = '1' === r.headers.get('Symfony-Debug-Toolbar-Replace');                            finishAjaxRequest(idx);                        }, function (e){                            stackElement.error = true;                            finishAjaxRequest(idx);                        });                        startAjaxRequest(idx);                    }                    return promise;                };            }            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {                var proxied = XMLHttpRequest.prototype.open;                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {                    var self = this;                    /* prevent logging AJAX calls to static and inline files, like templates */                    var path = url;                    if (url.substr(0, 1) === '/') {                        if (0 === url.indexOf('')) {                            path = url.substr(0);                        }                    }                    else if (0 === url.indexOf('http\\u003A\\/\\/127.0.0.1\\u003A8000')) {                        path = url.substr(21);                    }                    if (!path.match(new RegExp(\"^\\/((index|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'xhr',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        this.addEventListener('readystatechange', function() {                            if (self.readyState == 4) {                                stackElement.duration = new Date() - stackElement.start;                                stackElement.error = self.status < 200 || self.status >= 400;                                stackElement.statusCode = self.status;                                extractHeaders(self, stackElement);                                finishAjaxRequest(idx);                            }                        }, false);                        startAjaxRequest(idx);                    }                    proxied.apply(this, Array.prototype.slice.call(arguments));                };            }                return {            hasClass: hasClass,            removeClass: removeClass,            addClass: addClass,            toggleClass: toggleClass,            getPreference: getPreference,            setPreference: setPreference,            addEventListener: addEventListener,            request: request,            renderAjaxRequests: renderAjaxRequests,            load: function(selector, url, onSuccess, onError, options) {                var el = document.getElementById(selector);                if (el && el.getAttribute('data-sfurl') !== url) {                    request(                        url,                        function(xhr) {                            el.innerHTML = xhr.responseText;                            el.setAttribute('data-sfurl', url);                            removeClass(el, 'loading');                            var pending = pendingRequests;                            for (var i = 0; i < requestStack.length; i++) {                                startAjaxRequest(i);                                if (requestStack[i].duration) {                                    finishAjaxRequest(i);                                }                            }                            /* Revert the pending state in case there was a start called without a finish above. */                            pendingRequests = pending;                            (onSuccess || noop)(xhr, el);                        },                        function(xhr) { (onError || noop)(xhr, el); },                        '',                        options                    );                }                return this;            },            loadToolbar: function(token, newToken) {                newToken = (newToken || token);                this.load(                    'sfwdt' + token,                    'http\\u003A\\/\\/127.0.0.1\\u003A8000\\/_wdt\\/xxxxxx'.replace(/xxxxxx/, newToken),                    function(xhr, el) {                        /* Do nothing in the edge case where the toolbar has already been replaced with a new one */                        if (!document.getElementById('sfToolbarMainContent-' + newToken)) {                            return;                        }                        /* Evaluate in global scope scripts embedded inside the toolbar */                        var i, scripts = [].slice.call(el.querySelectorAll('script'));                        for (i = 0; i < scripts.length; ++i) {                            eval.call({}, scripts[i].firstChild.nodeValue);                        }                        el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';                        if (el.style.display == 'none') {                            return;                        }                        if (getPreference('toolbar/displayState') == 'none') {                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';                        } else {                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'none';                        }                        /* Handle toolbar-info position */                        var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));                        for (i = 0; i < toolbarBlocks.length; ++i) {                            toolbarBlocks[i].onmouseover = function () {                                var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];                                var pageWidth = document.body.clientWidth;                                var elementWidth = toolbarInfo.offsetWidth;                                var leftValue = (elementWidth + this.offsetLeft) - pageWidth;                                var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;                                /* Reset right and left value, useful on window resize */                                toolbarInfo.style.right = '';                                toolbarInfo.style.left = '';                                if (elementWidth > pageWidth) {                                    toolbarInfo.style.left = 0;                                }                                else if (leftValue > 0 && rightValue > 0) {                                    toolbarInfo.style.right = (rightValue * -1) + 'px';                                } else if (leftValue < 0) {                                    toolbarInfo.style.left = 0;                                } else {                                    toolbarInfo.style.right = '0px';                                }                            };                        }                        addEventListener(document.getElementById('sfToolbarHideButton-' + newToken), 'click', function (event) {                            event.preventDefault();                            var p = this.parentNode;                            p.style.display = 'none';                            (p.previousElementSibling || p.previousSibling).style.display = 'none';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';                            setPreference('toolbar/displayState', 'none');                        });                        addEventListener(document.getElementById('sfToolbarMiniToggler-' + newToken), 'click', function (event) {                            event.preventDefault();                            var elem = this.parentNode;                            if (elem.style.display == 'none') {                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';                                elem.style.display = 'block';                            } else {                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';                                elem.style.display = 'none'                            }                            setPreference('toolbar/displayState', 'block');                        });                        renderAjaxRequests();                        addEventListener(document.querySelector('.sf-toolbar-ajax-clear'), 'click', function() {                            requestStack = [];                            renderAjaxRequests();                            successStreak = 4;                            document.querySelector('.sf-toolbar-ajax-request-list').innerHTML = '';                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax'), 'mouseenter', function (event) {                            var elem = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');                            elem.scrollTop = elem.scrollHeight;                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {                            event.preventDefault();                            toggleClass(this.parentNode, 'hover');                        });                        var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');                        if (null !== dumpInfo) {                            addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {                                dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';                            });                            addEventListener(dumpInfo, 'mouseleave', function () {                                dumpInfo.style.minHeight = '';                            });                        }                    },                    function(xhr) {                        if (xhr.status !== 0) {                            var sfwdt = document.getElementById('sfwdt' + token);                            sfwdt.innerHTML = '\\                                <div class=\"sf-toolbarreset\">\\                                    <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\                                    An error occurred while loading the web debug toolbar. <a href=\"http\\u003A\\/\\/127.0.0.1\\u003A8000\\/_profiler\\/' + newToken + '>Open the web profiler.</a>\\                                </div>\\                            ';                            sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');                        }                    },                    { maxTries: 5 }                );                return this;            },            toggle: function(selector, elOn, elOff) {                var tmp = elOn.style.display,                    el = document.getElementById(selector);                elOn.style.display = elOff.style.display;                elOff.style.display = tmp;                if (el) {                    el.style.display = 'none' === tmp ? 'none' : 'block';                }                return this;            },            createTabs: function() {                var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');                /* create the tab navigation for each group of tabs */                for (var i = 0; i < tabGroups.length; i++) {                    var tabs = tabGroups[i].querySelectorAll(':scope > .tab');                    var tabNavigation = document.createElement('ul');                    tabNavigation.className = 'tab-navigation';                    var selectedTabId = 'tab-' + i + '-0'; /* select the first tab by default */                    for (var j = 0; j < tabs.length; j++) {                        var tabId = 'tab-' + i + '-' + j;                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;                        var tabNavigationItem = document.createElement('li');                        tabNavigationItem.setAttribute('data-tab-id', tabId);                        if (hasClass(tabs[j], 'active')) { selectedTabId = tabId; }                        if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }                        tabNavigationItem.innerHTML = tabTitle;                        tabNavigation.appendChild(tabNavigationItem);                        var tabContent = tabs[j].querySelector('.tab-content');                        tabContent.parentElement.setAttribute('id', tabId);                    }                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);                    addClass(document.querySelector('[data-tab-id=\"' + selectedTabId + '\"]'), 'active');                }                /* display the active tab and add the 'click' event listeners */                for (i = 0; i < tabGroups.length; i++) {                    tabNavigation = tabGroups[i].querySelectorAll(':scope > .tab-navigation li');                    for (j = 0; j < tabNavigation.length; j++) {                        tabId = tabNavigation[j].getAttribute('data-tab-id');                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';                        if (hasClass(tabNavigation[j], 'active')) {                            document.getElementById(tabId).className = 'block';                        } else {                            document.getElementById(tabId).className = 'hidden';                        }                        tabNavigation[j].addEventListener('click', function(e) {                            var activeTab = e.target || e.srcElement;                            /* needed because when the tab contains HTML contents, user can click */                            /* on any of those elements instead of their parent '<li>' element */                            while (activeTab.tagName.toLowerCase() !== 'li') {                                activeTab = activeTab.parentNode;                            }                            /* get the full list of tabs through the parent of the active tab element */                            var tabNavigation = activeTab.parentNode.children;                            for (var k = 0; k < tabNavigation.length; k++) {                                var tabId = tabNavigation[k].getAttribute('data-tab-id');                                document.getElementById(tabId).className = 'hidden';                                removeClass(tabNavigation[k], 'active');                            }                            addClass(activeTab, 'active');                            var activeTabId = activeTab.getAttribute('data-tab-id');                            document.getElementById(activeTabId).className = 'block';                        });                    }                    tabGroups[i].setAttribute('data-processed', 'true');                }            },            createToggles: function() {                var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');                for (var i = 0; i < toggles.length; i++) {                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');                    var element = document.querySelector(elementSelector);                    addClass(element, 'sf-toggle-content');                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {                        addClass(toggles[i], 'sf-toggle-on');                        addClass(element, 'sf-toggle-visible');                    } else {                        addClass(toggles[i], 'sf-toggle-off');                        addClass(element, 'sf-toggle-hidden');                    }                    addEventListener(toggles[i], 'click', function(e) {                        e.preventDefault();                        if ('' !== window.getSelection().toString()) {                            /* Don't do anything on text selection */                            return;                        }                        var toggle = e.target || e.srcElement;                        /* needed because when the toggle contains HTML contents, user can click */                        /* on any of those elements instead of their parent '.sf-toggle' element */                        while (!hasClass(toggle, 'sf-toggle')) {                            toggle = toggle.parentNode;                        }                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));                        toggleClass(toggle, 'sf-toggle-on');                        toggleClass(toggle, 'sf-toggle-off');                        toggleClass(element, 'sf-toggle-hidden');                        toggleClass(element, 'sf-toggle-visible');                        /* the toggle doesn't change its contents when clicking on it */                        if (!toggle.hasAttribute('data-toggle-alt-content')) {                            return;                        }                        if (!toggle.hasAttribute('data-toggle-original-content')) {                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);                        }                        var currentContent = toggle.innerHTML;                        var originalContent = toggle.getAttribute('data-toggle-original-content');                        var altContent = toggle.getAttribute('data-toggle-alt-content');                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;                    });                    /* Prevents from disallowing clicks on links inside toggles */                    var toggleLinks = toggles[i].querySelectorAll('a');                    for (var j = 0; j < toggleLinks.length; j++) {                        addEventListener(toggleLinks[j], 'click', function(e) {                            e.stopPropagation();                        });                    }                    toggles[i].setAttribute('data-processed', 'true');                }            },            createFilters: function() {                document.querySelectorAll('[data-filters] [data-filter]').forEach(function (filter) {                    var filters = filter.closest('[data-filters]'),                        type = 'choice',                        name = filter.dataset.filter,                        ucName = name.charAt(0).toUpperCase()+name.slice(1),                        list = document.createElement('ul'),                        values = filters.dataset['filter'+ucName] || filters.querySelectorAll('[data-filter-'+name+']'),                        labels = {},                        defaults = null,                        indexed = {},                        processed = {};                    if (typeof values === 'string') {                        type = 'level';                        labels = values.split(',');                        values = values.toLowerCase().split(',');                        defaults = values.length - 1;                    }                    addClass(list, 'filter-list');                    addClass(list, 'filter-list-'+type);                    values.forEach(function (value, i) {                        if (value instanceof HTMLElement) {                            value = value.dataset['filter'+ucName];                        }                        if (value in processed) {                            return;                        }                        var option = document.createElement('li'),                            label = i in labels ? labels[i] : value,                            active = false,                            matches;                        if ('' === label) {                            option.innerHTML = '<em>(none)</em>';                        } else {                            option.innerText = label;                        }                        option.dataset.filter = value;                        option.setAttribute('title', 1 === (matches = filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').length) ? 'Matches 1 row' : 'Matches '+matches+' rows');                        indexed[value] = i;                        list.appendChild(option);                        addEventListener(option, 'click', function () {                            if ('choice' === type) {                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {                                    if (option.dataset.filter === row.dataset['filter'+ucName]) {                                        toggleClass(row, 'filter-hidden-'+name);                                    }                                });                                toggleClass(option, 'active');                            } else if ('level' === type) {                                if (i === this.parentNode.querySelectorAll('.active').length - 1) {                                    return;                                }                                this.parentNode.querySelectorAll('li').forEach(function (currentOption, j) {                                    if (j <= i) {                                        addClass(currentOption, 'active');                                        if (i === j) {                                            addClass(currentOption, 'last-active');                                        } else {                                            removeClass(currentOption, 'last-active');                                        }                                    } else {                                        removeClass(currentOption, 'active');                                        removeClass(currentOption, 'last-active');                                    }                                });                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {                                    if (i < indexed[row.dataset['filter'+ucName]]) {                                        addClass(row, 'filter-hidden-'+name);                                    } else {                                        removeClass(row, 'filter-hidden-'+name);                                    }                                });                            }                        });                        if ('choice' === type) {                            active = null === defaults || 0 <= defaults.indexOf(value);                        } else if ('level' === type) {                            active = i <= defaults;                            if (active && i === defaults) {                                addClass(option, 'last-active');                            }                        }                        if (active) {                            addClass(option, 'active');                        } else {                            filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').forEach(function (row) {                                toggleClass(row, 'filter-hidden-'+name);                            });                        }                        processed[value] = true;                    });                    if (1 < list.childNodes.length) {                        filter.appendChild(list);                        filter.dataset.filtered = '';                    }                });            }        };    })();    Sfjs.addEventListener(document, 'DOMContentLoaded', function() {        Sfjs.createTabs();        Sfjs.createToggles();    });}/*]]>*/</script><style nonce=\"1dc0b38d2c7f750b5ad29fe11bfb7205\">    .sf-minitoolbar {    background-color: #222;    border-top-left-radius: 4px;    bottom: 0;    box-sizing: border-box;    display: none;    height: 36px;    padding: 6px;    position: fixed;    right: 0;    z-index: 99999;}.sf-minitoolbar a {    display: block;}.sf-minitoolbar svg,.sf-minitoolbar img {    max-height: 24px;    max-width: 24px;    display: inline;}.sf-toolbar-clearer {    clear: both;    height: 36px;}.sf-display-none {    display: none;}.sf-toolbarreset * {    box-sizing: content-box;    vertical-align: baseline;    letter-spacing: normal;    width: auto;}.sf-toolbarreset {    background-color: #222;    bottom: 0;    box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);    color: #EEE;    font: 11px Arial, sans-serif;    left: 0;    margin: 0;    padding: 0 36px 0 0;    position: fixed;    right: 0;    text-align: left;    text-transform: none;    z-index: 99999;    direction: ltr;    /* neutralize the aliasing defined by external CSS styles */    -webkit-font-smoothing: subpixel-antialiased;    -moz-osx-font-smoothing: auto;}.sf-toolbarreset abbr {    border: dashed #777;    border-width: 0 0 1px;}.sf-toolbarreset svg,.sf-toolbarreset img {    height: 20px;    width: 20px;    display: inline-block;}.sf-toolbarreset .hide-button {    background: #444;    display: block;    position: absolute;    top: 0;    right: 0;    width: 36px;    height: 36px;    cursor: pointer;    text-align: center;}.sf-toolbarreset .hide-button svg {    max-height: 18px;    margin-top: 10px;}.sf-toolbar-block {    cursor: default;    display: block;    float: left;    height: 36px;    margin-right: 0;    white-space: nowrap;    max-width: 15%;}.sf-toolbar-block > a,.sf-toolbar-block > a:hover {    display: block;    text-decoration: none;    background-color: transparent;    color: inherit;}.sf-toolbar-block span {    display: inline-block;}.sf-toolbar-block .sf-toolbar-value {    color: #F5F5F5;    font-size: 13px;    line-height: 36px;    padding: 0;}.sf-toolbar-block .sf-toolbar-label,.sf-toolbar-block .sf-toolbar-class-separator {    color: #AAA;    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    border-collapse: collapse;    display: table;    z-index: 100000;}.sf-toolbar-block hr {    border-top: 1px solid #777;    margin: 4px 0;    padding-top: 4px;}.sf-toolbar-block .sf-toolbar-info-piece {    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */    border-bottom: solid transparent 3px;    display: table-row;}.sf-toolbar-block .sf-toolbar-info-piece-additional,.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    display: none;}.sf-toolbar-block .sf-toolbar-info-group {    margin-bottom: 4px;    padding-bottom: 2px;    border-bottom: 1px solid #333333;}.sf-toolbar-block .sf-toolbar-info-group:last-child {    margin-bottom: 0;    padding-bottom: 0;    border-bottom: none;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {    padding: 2px 5px;    margin-bottom: 0;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {    margin-left: 4px;}.sf-toolbar-block .sf-toolbar-info-piece:last-child {    margin-bottom: 0;}div.sf-toolbar .sf-toolbar-block .sf-toolbar-info-piece a {    color: #99CDD8;    text-decoration: underline;}div.sf-toolbar .sf-toolbar-block a:hover {    text-decoration: none;}.sf-toolbar-block .sf-toolbar-info-piece b {    color: #AAA;    display: table-cell;    font-size: 11px;    padding: 4px 8px 4px 0;}.sf-toolbar-block:not(.sf-toolbar-block-dump) .sf-toolbar-info-piece span {    color: #F5F5F5;}.sf-toolbar-block .sf-toolbar-info-piece span {    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    background-color: #444;    bottom: 36px;    color: #F5F5F5;    display: none;    padding: 9px 0;    position: absolute;}.sf-toolbar-block .sf-toolbar-info:empty {    visibility: hidden;}.sf-toolbar-block .sf-toolbar-status {    display: inline-block;    color: #FFF;    background-color: #666;    padding: 3px 6px;    margin-bottom: 2px;    vertical-align: middle;    min-width: 15px;    min-height: 13px;    text-align: center;}.sf-toolbar-block .sf-toolbar-status-green {    background-color: #4F805D;}.sf-toolbar-block .sf-toolbar-status-red {    background-color: #B0413E;}.sf-toolbar-block .sf-toolbar-status-yellow {    background-color: #A46A1F;}.sf-toolbar-block.sf-toolbar-status-green {    background-color: #4F805D;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-red {    background-color: #B0413E;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-yellow {    background-color: #A46A1F;    color: #FFF;}.sf-toolbar-block-request .sf-toolbar-status {    color: #FFF;    display: inline-block;    font-size: 14px;    height: 36px;    line-height: 36px;    padding: 0 10px;}.sf-toolbar-block-request .sf-toolbar-info-piece a {    background-color: transparent;    text-decoration: none;}.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {    text-decoration: underline;}.sf-toolbar-block-request .sf-toolbar-redirection-status {    font-weight: normal;    padding: 2px 4px;    line-height: 18px;}.sf-toolbar-block-request .sf-toolbar-info-piece span.sf-toolbar-redirection-method {    font-size: 12px;    height: 17px;    line-height: 17px;    margin-right: 5px;}.sf-toolbar-block-ajax .sf-toolbar-icon {    cursor: pointer;}.sf-toolbar-status-green .sf-toolbar-label,.sf-toolbar-status-yellow .sf-toolbar-label,.sf-toolbar-status-red .sf-toolbar-label {    color: #FFF;}.sf-toolbar-status-green svg path,.sf-toolbar-status-green svg .sf-svg-path,.sf-toolbar-status-red svg path,.sf-toolbar-status-red svg .sf-svg-path,.sf-toolbar-status-yellow svg path,.sf-toolbar-status-yellow svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block-config svg path,.sf-toolbar-block-config svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block .sf-toolbar-icon {    display: block;    height: 36px;    padding: 0 7px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-block-request .sf-toolbar-icon {    padding-left: 0;    padding-right: 0;}.sf-toolbar-block .sf-toolbar-icon img,.sf-toolbar-block .sf-toolbar-icon svg {    border-width: 0;    position: relative;    top: 8px;    vertical-align: baseline;}.sf-toolbar-block .sf-toolbar-icon img + span,.sf-toolbar-block .sf-toolbar-icon svg + span {    margin-left: 4px;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {    margin-left: 4px;}.sf-toolbar-block:hover,.sf-toolbar-block.hover {    position: relative;}.sf-toolbar-block:hover .sf-toolbar-icon,.sf-toolbar-block.hover .sf-toolbar-icon {    background-color: #444;    position: relative;    z-index: 10002;}.sf-toolbar-block-ajax.hover .sf-toolbar-info {    z-index: 10001;}.sf-toolbar-block:hover .sf-toolbar-info,.sf-toolbar-block.hover .sf-toolbar-info {    display: block;    padding: 10px;    max-width: 480px;    max-height: 480px;    word-wrap: break-word;    overflow: hidden;    overflow-y: auto;}.sf-toolbar-info-piece b.sf-toolbar-ajax-info {    color: #F5F5F5;}.sf-toolbar-ajax-requests {    table-layout: auto;    width: 100%;}.sf-toolbar-ajax-requests td {    background-color: #444;    border-bottom: 1px solid #777;    color: #F5F5F5;    font-size: 12px;    padding: 4px;}.sf-toolbar-ajax-requests tr:last-child td {    border-bottom: 0;}.sf-toolbar-ajax-requests th {    background-color: #222;    border-bottom: 0;    color: #AAA;    font-size: 11px;    padding: 4px;}.sf-ajax-request-url {    max-width: 250px;    line-height: 9px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-ajax-requests .sf-ajax-request-url a {    text-decoration: none;}.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {    text-decoration: underline;}.sf-ajax-request-duration {    text-align: right;}.sf-ajax-request-loading {    animation: sf-blink .5s ease-in-out infinite;}@keyframes sf-blink {    0% { background: #222; }    50% { background: #444; }    100% { background: #222; }}.sf-toolbar-block.sf-toolbar-block-dump .sf-toolbar-info {    max-width: none;    width: 100%;    position: fixed;    box-sizing: border-box;    left: 0;}.sf-toolbar-block-dump pre.sf-dump {    background-color: #222;    border-color: #777;    border-radius: 0;    margin: 6px 0 12px 0;}.sf-toolbar-block-dump pre.sf-dump:last-child {    margin-bottom: 0;}.sf-toolbar-block-dump pre.sf-dump .sf-dump-search-wrapper {    margin-bottom: 5px;}.sf-toolbar-block-dump pre.sf-dump span.sf-dump-search-count {    color: #333;    font-size: 12px;}.sf-toolbar-block-dump .sf-toolbar-info-piece {    display: block;}.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {    color: #AAA;    margin-left: 4px;}.sf-toolbar-block-dump .sf-toolbar-info img {    display: none;}/* Responsive Design */.sf-toolbar-icon .sf-toolbar-label,.sf-toolbar-icon .sf-toolbar-value {    display: none;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {    display: inline-block;}/* Legacy Design - these styles are maintained to make old panels look   a bit better on the new toolbar */.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    color: #AAA;    font-size: 12px;}.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {    color: #FFF;}@media (min-width: 768px) {    .sf-toolbar-icon .sf-toolbar-label,    .sf-toolbar-icon .sf-toolbar-value {        display: inline;    }    .sf-toolbar-block .sf-toolbar-icon img,    .sf-toolbar-block .sf-toolbar-icon svg {        top: 6px;    }    .sf-toolbar-block-time .sf-toolbar-icon svg,    .sf-toolbar-block-memory .sf-toolbar-icon svg {        display: none;    }    .sf-toolbar-block-time .sf-toolbar-icon svg + span,    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {        margin-left: 0;    }    .sf-toolbar-block .sf-toolbar-icon {        padding: 0 10px;    }    .sf-toolbar-block-time .sf-toolbar-icon {        padding-right: 5px;    }    .sf-toolbar-block-memory .sf-toolbar-icon {        padding-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon {        padding-left: 0;        padding-right: 0;    }    .sf-toolbar-block-request .sf-toolbar-label {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-status + svg {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon svg + .sf-toolbar-label {        margin-left: 0;     }    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {        margin-right: 10px;    }    .sf-toolbar-block-request:hover .sf-toolbar-info {        max-width: none;    }    .sf-toolbar-block .sf-toolbar-info-piece b {        font-size: 12px;    }    .sf-toolbar-block .sf-toolbar-info-piece span {        font-size: 13px;    }    .sf-toolbar-block-right {        float: right;        margin-left: 0;        margin-right: 0;    }}@media (min-width: 1024px) {    .sf-toolbar-block .sf-toolbar-info-piece-additional,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {        display: inline;    }    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {        display: none;    }}/***** Error Toolbar *****/.sf-error-toolbar .sf-toolbarreset {    background: #222;    color: #f5f5f5;    font: 13px/36px Arial, sans-serif;    height: 36px;    padding: 0 15px;    text-align: left;}.sf-error-toolbar .sf-toolbarreset svg {    height: auto;}.sf-error-toolbar .sf-toolbarreset a {    color: #99cdd8;    margin-left: 5px;    text-decoration: underline;}.sf-error-toolbar .sf-toolbarreset a:hover {    text-decoration: none;}.sf-error-toolbar .sf-toolbarreset .sf-toolbar-icon {    float: left;    padding: 5px 0;    margin-right: 10px;}/***** Media query print: Do not print the Toolbar. *****/@media print {    .sf-toolbar {        display: none !important;    }}</style><script nonce=\"2d3e18ed9a5b14380fb938ac87369bac\">/*<![CDATA[*/    (function () {        Sfjs.loadToolbar('949a8d');    })();/*]]>*/</script>
</body>



</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 486
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 487
        echo "


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  750 => 487,  740 => 486,  560 => 491,  558 => 486,  210 => 141,  84 => 18,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>Travelix</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"Travelix Project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css')}}\">
    <link href=\"{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}} rel=\"stylesheet type=\"text/css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/main_styles.css')}}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/responsive.css')}}\">
    <style>
        .home_slider_background {
            background-image: url('{{ asset(' ../public/images/home_slider.jpg ')}}')> </div>
        }
    </style>
</head>

<body>

<div class=\"super_container\">

    <header class=\"header\">

        <!-- Top Bar -->

        <div class=\"top_bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col d-flex flex-row\">
                        <div class=\"phone\">+45 345 3324 56789</div>
                        <div class=\"social\">
                            <ul class=\"social_list\">
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                            </ul>
                        </div>
                        <div class=\"user_box ml-auto\">
                            <div class=\"user_box_login user_box_link\"><a href=\"#\">login</a></div>
                            <div class=\"user_box_register user_box_link\"><a href=\"#\">register</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class=\"main_nav\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
                        <div class=\"logo_container\">
                            <div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
                        </div>
                        <div class=\"main_nav_container ml-auto\">
                            <ul class=\"main_nav_list\">
                                <li class=\"main_nav_item\"><a href=\"#\">home</a></li>
                                <li class=\"main_nav_item\"><a href=\"about.html\">hotels</a></li>
                                <li class=\"main_nav_item\"><a href=\"\">vols</a></li>
                                <li class=\"main_nav_item\"><a href=\"blog.html\">voitures</a></li>
                                <li class=\"main_nav_item\"><a href=\"contact.html\">utilisateur</a></li>
                                <li class=\"main_nav_item\"><a href=\"contact.html\">shop</a></li>
                                <li class=\"main_nav_item\"><a href=\"contact.html\">reclamation</a></li>
                                <li class=\"main_nav_item\"><a href=\"\">admin</a></li>




                            </ul>
                        </div>
                        <div class=\"content_search ml-lg-0 ml-auto\">
                            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
\t\t\t\t\t\t\t\t<g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"></path>
                                        </g>
                                    </g>
                                </g>
\t\t\t\t\t\t\t</svg>
                        </div>

                        <form id=\"search_form\" class=\"search_form bez_1\">
                            <input type=\"search\" class=\"search_content_input bez_1\">
                        </form>

                        <div class=\"hamburger\">
                            <i class=\"fa fa-bars trans_200\"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class=\"menu trans_500\">
        <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
            <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
            <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\"></a></div>
            <ul>
                <li class=\"menu_item\"><a href=\"#\">home</a></li>
                <li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
                <li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
                <li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
                <li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>

            </ul>
        </div>
    </div>
    <!-- Home -->
    <div class=\"home\">

        <!-- Home Slider -->

        <div class=\"home_slider_container\">

            <div class=\"owl-carousel owl-theme home_slider\">

                <!-- Slider Item -->
                <div class=\"owl-item home_slider_item\">
                    <!-- Image by https://unsplash.com/@anikindimitry -->
                    <div class=\"home_slider_background\" style=\"background-image:url('{{ asset('../public/images/home_slider.jpg')}}')>
                            </div>

                    <div class=\"home_slider_content text-center\">
                        <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class=\"owl-item home_slider_item\">
                    <div class=\"home_slider_background\" style=\"background-image:url(../public/images/home_slider.jpg)\"></div>

                    <div class=\"home_slider_content text-center\">
                        <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class=\"owl-item home_slider_item\">
                    <div class=\"home_slider_background\" style=\"background-image:url(../public/images/home_slider.jpg)\"></div>

                    <div class=\"home_slider_content text-center\">
                        <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                            <h1>discover</h1>
                            <h1>the world</h1>
                            <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Home Slider Nav - Prev -->
            <div class=\"home_slider_nav home_slider_prev\">
                <svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                     width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
                        <linearGradient id='home_grad_prev'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                    <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                    <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t</svg>
            </div>

            <!-- Home Slider Nav - Next -->
            <div class=\"home_slider_nav home_slider_next\">
                <svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                     width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
                        <linearGradient id='home_grad_next'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                    <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                    <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
\t\t\t\t17.046,15.554 \"/>
\t\t\t\t</svg>
            </div>

            <!-- Home Slider Dots -->

            <div class=\"home_slider_dots\">
                <ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
                    <li class=\"home_slider_custom_dot active\"><div></div>01.</li>
                    <li class=\"home_slider_custom_dot\"><div></div>02.</li>
                    <li class=\"home_slider_custom_dot\"><div></div>03.</li>
                </ul>
            </div>

        </div>

    </div>



    <!-- Search -->

    <div class=\"search\">


        <!-- Search Contents -->

        <div class=\"container fill_height\">
            <div class=\"row fill_height\">
                <div class=\"col fill_height\">

                    <!-- Search Tabs -->

                    <div class=\"search_tabs_container\">
                        <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/suitcase.png\" alt=\"\"><span>hotels</span></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/bus.png\" alt=\"\">car rentals</div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/departure.png\" alt=\"\">flights</div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/island.png\" alt=\"\">trips</div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/cruise.png\" alt=\"\">cruises</div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"images/diving.png\" alt=\"\">activities</div>
                        </div>
                    </div>

                    <!--les Search -----amel rouhek me rithomch hata nouslou lel metier-------------Panel -->


                    <!-- Search Panel -->

                    <div class=\"search_panel active\">
                        <form action=\"#\" id=\"search_form_1\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_1\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_1\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class=\"search_panel\">
                        <form action=\"#\" id=\"search_form_2\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_2\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_2\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class=\"search_panel\">
                        <form action=\"#\" id=\"search_form_3\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_3\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_3\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class=\"search_panel\">
                        <form action=\"#\" id=\"search_form_4\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_4\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_4\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class=\"search_panel\">
                        <form action=\"#\" id=\"search_form_5\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_5\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_5\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>

                    <!-- Search Panel -->

                    <div class=\"search_panel\">
                        <form action=\"#\" id=\"search_form_6\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_item\">
                                <div>destination</div>
                                <input type=\"text\" class=\"destination search_input\" required=\"required\">
                            </div>
                            <div class=\"search_item\">
                                <div>check in</div>
                                <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>check out</div>
                                <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                            </div>
                            <div class=\"search_item\">
                                <div>adults</div>
                                <select name=\"adults\" id=\"adults_6\" class=\"dropdown_item_select search_input\">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <div class=\"search_item\">
                                <div>children</div>
                                <select name=\"children\" id=\"children_6\" class=\"dropdown_item_select search_input\">
                                    <option>0</option>
                                    <option>02</option>
                                    <option>03</option>
                                </select>
                            </div>
                            <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                        </form>
                    </div>



                    <!--les Search ------------------Panel -->

                </div>
            </div>
        </div>
    </div>


    {% block body %}



    {% endblock %}




    <!-- Footer -->
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_content footer_about\">
                            <div class=\"logo_container footer_logo\">
                                <div class=\"logo\"><a href=\"#\"><img src=\"images/logo.png\" alt=\"\">travelix</a></div>
                            </div>
                            <p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
                            <ul class=\"footer_social_list\">
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">blog posts</div>
                        <div class=\"footer_content footer_blog\">

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"images/footer_blog_1.jpg\" alt=\"https://unsplash.com/@avidenov\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"images/footer_blog_2.jpg\" alt=\"https://unsplash.com/@deannaritchie\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"images/footer_blog_3.jpg\" alt=\"https://unsplash.com/@bergeryap87\"></div>
                                <div class=\"footer_blog_content\">
                                    <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                    <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">tags</div>
                        <div class=\"footer_content footer_tags\">
                            <ul class=\"tags_list clearfix\">
                                <li class=\"tag_item\"><a href=\"#\">design</a></li>
                                <li class=\"tag_item\"><a href=\"#\">fashion</a></li>
                                <li class=\"tag_item\"><a href=\"#\">music</a></li>
                                <li class=\"tag_item\"><a href=\"#\">video</a></li>
                                <li class=\"tag_item\"><a href=\"#\">party</a></li>
                                <li class=\"tag_item\"><a href=\"#\">photography</a></li>
                                <li class=\"tag_item\"><a href=\"#\">adventure</a></li>
                                <li class=\"tag_item\"><a href=\"#\">travel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">contact info</div>
                        <div class=\"footer_content footer_contact\">
                            <ul class=\"contact_info_list\">
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"images/placeholder.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"images/phone-call.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">2556-808-8613</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"images/message.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"images/planet-earth.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- Copyright -->
    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 order-lg-1 order-2  \">
                    <div class=\"copyright_content d-flex flex-row align-items-center\">
                        <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright ©<script>document.write(new Date().getFullYear());</script>2022 All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
                <div class=\"col-lg-9 order-lg-2 order-1\">
                    <div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
                        <div class=\"footer_nav\">
                            <ul class=\"footer_nav_list\">
                                <li class=\"footer_nav_item\"><a href=\"#\">home</a></li>
                                <li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
                                <li class=\"footer_nav_item\"><a href=\"blog.html\">news</a></li>
                                <li class=\"footer_nav_item\"><a href=\"contact.html\">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>














<script src=\"js/jquery-3.2.1.min.js\"></script>
<script src=\"styles/bootstrap4/popper.js\"></script>
<script src=\"styles/bootstrap4/bootstrap.min.js\"></script>
<script src=\"plugins/OwlCarousel2-2.2.1/owl.carousel.js\"></script>
<script src=\"plugins/easing/easing.js\"></script>
<script src=\"js/custom.js\"></script>


<div id=\"sfwdt949a8d\" class=\"sf-toolbar sf-display-none\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\"></div><script nonce=\"2d3e18ed9a5b14380fb938ac87369bac\">/*<![CDATA[*/    if (typeof Sfjs === 'undefined' || typeof Sfjs.loadToolbar === 'undefined') {    Sfjs = (function() {        \"use strict\";        if ('classList' in document.documentElement) {            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };            var addClass = function(el, cssClass) { el.classList.add(cssClass); };            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };        } else {            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };        }        var noop = function() {};        var profilerStorageKey = 'symfony/profiler/';        var addEventListener;        var el = document.createElement('div');        if (!('addEventListener' in el)) {            addEventListener = function (element, eventName, callback) {                element.attachEvent('on' + eventName, callback);            };        } else {            addEventListener = function (element, eventName, callback) {                element.addEventListener(eventName, callback, false);            };        }        var request = function(url, onSuccess, onError, payload, options) {            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');            options = options || {};            options.maxTries = options.maxTries || 0;            xhr.open(options.method || 'GET', url, true);            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');            xhr.onreadystatechange = function(state) {                if (4 !== xhr.readyState) {                    return null;                }                if (xhr.status == 404 && options.maxTries > 1) {                    setTimeout(function(){                        options.maxTries--;                        request(url, onSuccess, onError, payload, options);                    }, 1000);                    return null;                }                if (200 === xhr.status) {                    (onSuccess || noop)(xhr);                } else {                    (onError || noop)(xhr);                }            };            xhr.send(payload || '');        };        var getPreference = function(name) {            if (!window.localStorage) {                return null;            }            return localStorage.getItem(profilerStorageKey + name);        };        var setPreference = function(name, value) {            if (!window.localStorage) {                return null;            }            localStorage.setItem(profilerStorageKey + name, value);        };        var requestStack = [];        var extractHeaders = function(xhr, stackElement) {            /* Here we avoid to call xhr.getResponseHeader in order to */            /* prevent polluting the console with CORS security errors */            var allHeaders = xhr.getAllResponseHeaders();            var ret;            if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {                stackElement.profile = ret[1];            }            if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {                stackElement.profilerUrl = ret[1];            }            if (ret = allHeaders.match(/^Symfony-Debug-Toolbar-Replace:\\s+(.*)\$/im)) {                stackElement.toolbarReplaceFinished = false;                stackElement.toolbarReplace = '1' === ret[1];            }        };        var successStreak = 4;        var pendingRequests = 0;        var renderAjaxRequests = function() {            var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');            if (!requestCounter) {                return;            }            requestCounter.textContent = requestStack.length;            var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");            if (infoSpan) {                infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');            }            var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');            if (requestStack.length) {                ajaxToolbarPanel.style.display = 'block';            } else {                ajaxToolbarPanel.style.display = 'none';            }            if (pendingRequests > 0) {                addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else if (successStreak < 4) {                addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');            } else {                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');                removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');            }        };        var startAjaxRequest = function(index) {            var tbody = document.querySelector('.sf-toolbar-ajax-request-list');            if (!tbody) {                return;            }            var nbOfAjaxRequest = tbody.rows.length;            if (nbOfAjaxRequest >= 100) {                tbody.deleteRow(0);            }            var request = requestStack[index];            pendingRequests++;            var row = document.createElement('tr');            request.DOMNode = row;            var requestNumberCell = document.createElement('td');            requestNumberCell.textContent = index + 1;            row.appendChild(requestNumberCell);            var profilerCell = document.createElement('td');            profilerCell.textContent = 'n/a';            row.appendChild(profilerCell);            var methodCell = document.createElement('td');            methodCell.textContent = request.method;            row.appendChild(methodCell);            var typeCell = document.createElement('td');            typeCell.textContent = request.type;            row.appendChild(typeCell);            var statusCodeCell = document.createElement('td');            var statusCode = document.createElement('span');            statusCode.textContent = 'n/a';            statusCodeCell.appendChild(statusCode);            row.appendChild(statusCodeCell);            var pathCell = document.createElement('td');            pathCell.className = 'sf-ajax-request-url';            if ('GET' === request.method) {                var pathLink = document.createElement('a');                pathLink.setAttribute('href', request.url);                pathLink.textContent = request.url;                pathCell.appendChild(pathLink);            } else {                pathCell.textContent = request.url;            }            pathCell.setAttribute('title', request.url);            row.appendChild(pathCell);            var durationCell = document.createElement('td');            durationCell.className = 'sf-ajax-request-duration';            durationCell.textContent = 'n/a';            row.appendChild(durationCell);            request.liveDurationHandle = setInterval(function() {                durationCell.textContent = (new Date() - request.start) + 'ms';            }, 100);            row.className = 'sf-ajax-request sf-ajax-request-loading';            tbody.insertBefore(row, null);            var toolbarInfo = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');            toolbarInfo.scrollTop = toolbarInfo.scrollHeight;            renderAjaxRequests();        };        var finishAjaxRequest = function(index) {            var request = requestStack[index];            clearInterval(request.liveDurationHandle);            if (!request.DOMNode) {                return;            }            if (request.toolbarReplace && !request.toolbarReplaceFinished && request.profile) {                /* Flag as complete because finishAjaxRequest can be called multiple times. */                request.toolbarReplaceFinished = true;                /* Search up through the DOM to find the toolbar's container ID. */                for (var elem = request.DOMNode; elem && elem !== document; elem = elem.parentNode) {                    if (elem.id.match(/^sfwdt/)) {                        Sfjs.loadToolbar(elem.id.replace(/^sfwdt/, ''), request.profile);                        break;                    }                }            }            pendingRequests--;            var row = request.DOMNode;            /* Unpack the children from the row */            var profilerCell = row.children[1];            var methodCell = row.children[2];            var statusCodeCell = row.children[4];            var statusCodeElem = statusCodeCell.children[0];            var durationCell = row.children[6];            if (request.error) {                row.className = 'sf-ajax-request sf-ajax-request-error';                methodCell.className = 'sf-ajax-request-error';                successStreak = 0;            } else {                row.className = 'sf-ajax-request sf-ajax-request-ok';                successStreak++;            }            if (request.statusCode) {                if (request.statusCode < 300) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status');                } else if (request.statusCode < 400) {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');                } else {                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');                }                statusCodeElem.textContent = request.statusCode;            } else {                statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');            }            if (request.duration) {                durationCell.textContent = request.duration + 'ms';            }            if (request.profilerUrl) {                profilerCell.textContent = '';                var profilerLink = document.createElement('a');                profilerLink.setAttribute('href', request.profilerUrl);                profilerLink.textContent = request.profile;                profilerCell.appendChild(profilerLink);            }            renderAjaxRequests();        };                    if (window.fetch && window.fetch.polyfill === undefined) {                var oldFetch = window.fetch;                window.fetch = function () {                    var promise = oldFetch.apply(this, arguments);                    var url = arguments[0];                    var params = arguments[1];                    var paramType = Object.prototype.toString.call(arguments[0]);                    if (paramType === '[object Request]') {                        url = arguments[0].url;                        params = {                            method: arguments[0].method,                            credentials: arguments[0].credentials,                            headers: arguments[0].headers,                            mode: arguments[0].mode,                            redirect: arguments[0].redirect                        };                    } else {                        url = String(url);                    }                    if (!url.match(new RegExp(\"^\\/((index|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var method = 'GET';                        if (params && params.method !== undefined) {                            method = params.method;                        }                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'fetch',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        promise.then(function (r) {                            stackElement.duration = new Date() - stackElement.start;                            stackElement.error = r.status < 200 || r.status >= 400;                            stackElement.statusCode = r.status;                            stackElement.profile = r.headers.get('x-debug-token');                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');                            stackElement.toolbarReplaceFinished = false;                            stackElement.toolbarReplace = '1' === r.headers.get('Symfony-Debug-Toolbar-Replace');                            finishAjaxRequest(idx);                        }, function (e){                            stackElement.error = true;                            finishAjaxRequest(idx);                        });                        startAjaxRequest(idx);                    }                    return promise;                };            }            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {                var proxied = XMLHttpRequest.prototype.open;                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {                    var self = this;                    /* prevent logging AJAX calls to static and inline files, like templates */                    var path = url;                    if (url.substr(0, 1) === '/') {                        if (0 === url.indexOf('')) {                            path = url.substr(0);                        }                    }                    else if (0 === url.indexOf('http\\u003A\\/\\/127.0.0.1\\u003A8000')) {                        path = url.substr(21);                    }                    if (!path.match(new RegExp(\"^\\/((index|app(_[\\\\w]+)?)\\\\.php\\/)?_wdt\"))) {                        var stackElement = {                            error: false,                            url: url,                            method: method,                            type: 'xhr',                            start: new Date()                        };                        var idx = requestStack.push(stackElement) - 1;                        this.addEventListener('readystatechange', function() {                            if (self.readyState == 4) {                                stackElement.duration = new Date() - stackElement.start;                                stackElement.error = self.status < 200 || self.status >= 400;                                stackElement.statusCode = self.status;                                extractHeaders(self, stackElement);                                finishAjaxRequest(idx);                            }                        }, false);                        startAjaxRequest(idx);                    }                    proxied.apply(this, Array.prototype.slice.call(arguments));                };            }                return {            hasClass: hasClass,            removeClass: removeClass,            addClass: addClass,            toggleClass: toggleClass,            getPreference: getPreference,            setPreference: setPreference,            addEventListener: addEventListener,            request: request,            renderAjaxRequests: renderAjaxRequests,            load: function(selector, url, onSuccess, onError, options) {                var el = document.getElementById(selector);                if (el && el.getAttribute('data-sfurl') !== url) {                    request(                        url,                        function(xhr) {                            el.innerHTML = xhr.responseText;                            el.setAttribute('data-sfurl', url);                            removeClass(el, 'loading');                            var pending = pendingRequests;                            for (var i = 0; i < requestStack.length; i++) {                                startAjaxRequest(i);                                if (requestStack[i].duration) {                                    finishAjaxRequest(i);                                }                            }                            /* Revert the pending state in case there was a start called without a finish above. */                            pendingRequests = pending;                            (onSuccess || noop)(xhr, el);                        },                        function(xhr) { (onError || noop)(xhr, el); },                        '',                        options                    );                }                return this;            },            loadToolbar: function(token, newToken) {                newToken = (newToken || token);                this.load(                    'sfwdt' + token,                    'http\\u003A\\/\\/127.0.0.1\\u003A8000\\/_wdt\\/xxxxxx'.replace(/xxxxxx/, newToken),                    function(xhr, el) {                        /* Do nothing in the edge case where the toolbar has already been replaced with a new one */                        if (!document.getElementById('sfToolbarMainContent-' + newToken)) {                            return;                        }                        /* Evaluate in global scope scripts embedded inside the toolbar */                        var i, scripts = [].slice.call(el.querySelectorAll('script'));                        for (i = 0; i < scripts.length; ++i) {                            eval.call({}, scripts[i].firstChild.nodeValue);                        }                        el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';                        if (el.style.display == 'none') {                            return;                        }                        if (getPreference('toolbar/displayState') == 'none') {                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';                        } else {                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'none';                        }                        /* Handle toolbar-info position */                        var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));                        for (i = 0; i < toolbarBlocks.length; ++i) {                            toolbarBlocks[i].onmouseover = function () {                                var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];                                var pageWidth = document.body.clientWidth;                                var elementWidth = toolbarInfo.offsetWidth;                                var leftValue = (elementWidth + this.offsetLeft) - pageWidth;                                var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;                                /* Reset right and left value, useful on window resize */                                toolbarInfo.style.right = '';                                toolbarInfo.style.left = '';                                if (elementWidth > pageWidth) {                                    toolbarInfo.style.left = 0;                                }                                else if (leftValue > 0 && rightValue > 0) {                                    toolbarInfo.style.right = (rightValue * -1) + 'px';                                } else if (leftValue < 0) {                                    toolbarInfo.style.left = 0;                                } else {                                    toolbarInfo.style.right = '0px';                                }                            };                        }                        addEventListener(document.getElementById('sfToolbarHideButton-' + newToken), 'click', function (event) {                            event.preventDefault();                            var p = this.parentNode;                            p.style.display = 'none';                            (p.previousElementSibling || p.previousSibling).style.display = 'none';                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';                            setPreference('toolbar/displayState', 'none');                        });                        addEventListener(document.getElementById('sfToolbarMiniToggler-' + newToken), 'click', function (event) {                            event.preventDefault();                            var elem = this.parentNode;                            if (elem.style.display == 'none') {                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';                                elem.style.display = 'block';                            } else {                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';                                elem.style.display = 'none'                            }                            setPreference('toolbar/displayState', 'block');                        });                        renderAjaxRequests();                        addEventListener(document.querySelector('.sf-toolbar-ajax-clear'), 'click', function() {                            requestStack = [];                            renderAjaxRequests();                            successStreak = 4;                            document.querySelector('.sf-toolbar-ajax-request-list').innerHTML = '';                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax'), 'mouseenter', function (event) {                            var elem = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');                            elem.scrollTop = elem.scrollHeight;                        });                        addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {                            event.preventDefault();                            toggleClass(this.parentNode, 'hover');                        });                        var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');                        if (null !== dumpInfo) {                            addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {                                dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';                            });                            addEventListener(dumpInfo, 'mouseleave', function () {                                dumpInfo.style.minHeight = '';                            });                        }                    },                    function(xhr) {                        if (xhr.status !== 0) {                            var sfwdt = document.getElementById('sfwdt' + token);                            sfwdt.innerHTML = '\\                                <div class=\"sf-toolbarreset\">\\                                    <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\                                    An error occurred while loading the web debug toolbar. <a href=\"http\\u003A\\/\\/127.0.0.1\\u003A8000\\/_profiler\\/' + newToken + '>Open the web profiler.</a>\\                                </div>\\                            ';                            sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');                        }                    },                    { maxTries: 5 }                );                return this;            },            toggle: function(selector, elOn, elOff) {                var tmp = elOn.style.display,                    el = document.getElementById(selector);                elOn.style.display = elOff.style.display;                elOff.style.display = tmp;                if (el) {                    el.style.display = 'none' === tmp ? 'none' : 'block';                }                return this;            },            createTabs: function() {                var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');                /* create the tab navigation for each group of tabs */                for (var i = 0; i < tabGroups.length; i++) {                    var tabs = tabGroups[i].querySelectorAll(':scope > .tab');                    var tabNavigation = document.createElement('ul');                    tabNavigation.className = 'tab-navigation';                    var selectedTabId = 'tab-' + i + '-0'; /* select the first tab by default */                    for (var j = 0; j < tabs.length; j++) {                        var tabId = 'tab-' + i + '-' + j;                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;                        var tabNavigationItem = document.createElement('li');                        tabNavigationItem.setAttribute('data-tab-id', tabId);                        if (hasClass(tabs[j], 'active')) { selectedTabId = tabId; }                        if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }                        tabNavigationItem.innerHTML = tabTitle;                        tabNavigation.appendChild(tabNavigationItem);                        var tabContent = tabs[j].querySelector('.tab-content');                        tabContent.parentElement.setAttribute('id', tabId);                    }                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);                    addClass(document.querySelector('[data-tab-id=\"' + selectedTabId + '\"]'), 'active');                }                /* display the active tab and add the 'click' event listeners */                for (i = 0; i < tabGroups.length; i++) {                    tabNavigation = tabGroups[i].querySelectorAll(':scope > .tab-navigation li');                    for (j = 0; j < tabNavigation.length; j++) {                        tabId = tabNavigation[j].getAttribute('data-tab-id');                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';                        if (hasClass(tabNavigation[j], 'active')) {                            document.getElementById(tabId).className = 'block';                        } else {                            document.getElementById(tabId).className = 'hidden';                        }                        tabNavigation[j].addEventListener('click', function(e) {                            var activeTab = e.target || e.srcElement;                            /* needed because when the tab contains HTML contents, user can click */                            /* on any of those elements instead of their parent '<li>' element */                            while (activeTab.tagName.toLowerCase() !== 'li') {                                activeTab = activeTab.parentNode;                            }                            /* get the full list of tabs through the parent of the active tab element */                            var tabNavigation = activeTab.parentNode.children;                            for (var k = 0; k < tabNavigation.length; k++) {                                var tabId = tabNavigation[k].getAttribute('data-tab-id');                                document.getElementById(tabId).className = 'hidden';                                removeClass(tabNavigation[k], 'active');                            }                            addClass(activeTab, 'active');                            var activeTabId = activeTab.getAttribute('data-tab-id');                            document.getElementById(activeTabId).className = 'block';                        });                    }                    tabGroups[i].setAttribute('data-processed', 'true');                }            },            createToggles: function() {                var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');                for (var i = 0; i < toggles.length; i++) {                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');                    var element = document.querySelector(elementSelector);                    addClass(element, 'sf-toggle-content');                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {                        addClass(toggles[i], 'sf-toggle-on');                        addClass(element, 'sf-toggle-visible');                    } else {                        addClass(toggles[i], 'sf-toggle-off');                        addClass(element, 'sf-toggle-hidden');                    }                    addEventListener(toggles[i], 'click', function(e) {                        e.preventDefault();                        if ('' !== window.getSelection().toString()) {                            /* Don't do anything on text selection */                            return;                        }                        var toggle = e.target || e.srcElement;                        /* needed because when the toggle contains HTML contents, user can click */                        /* on any of those elements instead of their parent '.sf-toggle' element */                        while (!hasClass(toggle, 'sf-toggle')) {                            toggle = toggle.parentNode;                        }                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));                        toggleClass(toggle, 'sf-toggle-on');                        toggleClass(toggle, 'sf-toggle-off');                        toggleClass(element, 'sf-toggle-hidden');                        toggleClass(element, 'sf-toggle-visible');                        /* the toggle doesn't change its contents when clicking on it */                        if (!toggle.hasAttribute('data-toggle-alt-content')) {                            return;                        }                        if (!toggle.hasAttribute('data-toggle-original-content')) {                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);                        }                        var currentContent = toggle.innerHTML;                        var originalContent = toggle.getAttribute('data-toggle-original-content');                        var altContent = toggle.getAttribute('data-toggle-alt-content');                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;                    });                    /* Prevents from disallowing clicks on links inside toggles */                    var toggleLinks = toggles[i].querySelectorAll('a');                    for (var j = 0; j < toggleLinks.length; j++) {                        addEventListener(toggleLinks[j], 'click', function(e) {                            e.stopPropagation();                        });                    }                    toggles[i].setAttribute('data-processed', 'true');                }            },            createFilters: function() {                document.querySelectorAll('[data-filters] [data-filter]').forEach(function (filter) {                    var filters = filter.closest('[data-filters]'),                        type = 'choice',                        name = filter.dataset.filter,                        ucName = name.charAt(0).toUpperCase()+name.slice(1),                        list = document.createElement('ul'),                        values = filters.dataset['filter'+ucName] || filters.querySelectorAll('[data-filter-'+name+']'),                        labels = {},                        defaults = null,                        indexed = {},                        processed = {};                    if (typeof values === 'string') {                        type = 'level';                        labels = values.split(',');                        values = values.toLowerCase().split(',');                        defaults = values.length - 1;                    }                    addClass(list, 'filter-list');                    addClass(list, 'filter-list-'+type);                    values.forEach(function (value, i) {                        if (value instanceof HTMLElement) {                            value = value.dataset['filter'+ucName];                        }                        if (value in processed) {                            return;                        }                        var option = document.createElement('li'),                            label = i in labels ? labels[i] : value,                            active = false,                            matches;                        if ('' === label) {                            option.innerHTML = '<em>(none)</em>';                        } else {                            option.innerText = label;                        }                        option.dataset.filter = value;                        option.setAttribute('title', 1 === (matches = filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').length) ? 'Matches 1 row' : 'Matches '+matches+' rows');                        indexed[value] = i;                        list.appendChild(option);                        addEventListener(option, 'click', function () {                            if ('choice' === type) {                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {                                    if (option.dataset.filter === row.dataset['filter'+ucName]) {                                        toggleClass(row, 'filter-hidden-'+name);                                    }                                });                                toggleClass(option, 'active');                            } else if ('level' === type) {                                if (i === this.parentNode.querySelectorAll('.active').length - 1) {                                    return;                                }                                this.parentNode.querySelectorAll('li').forEach(function (currentOption, j) {                                    if (j <= i) {                                        addClass(currentOption, 'active');                                        if (i === j) {                                            addClass(currentOption, 'last-active');                                        } else {                                            removeClass(currentOption, 'last-active');                                        }                                    } else {                                        removeClass(currentOption, 'active');                                        removeClass(currentOption, 'last-active');                                    }                                });                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {                                    if (i < indexed[row.dataset['filter'+ucName]]) {                                        addClass(row, 'filter-hidden-'+name);                                    } else {                                        removeClass(row, 'filter-hidden-'+name);                                    }                                });                            }                        });                        if ('choice' === type) {                            active = null === defaults || 0 <= defaults.indexOf(value);                        } else if ('level' === type) {                            active = i <= defaults;                            if (active && i === defaults) {                                addClass(option, 'last-active');                            }                        }                        if (active) {                            addClass(option, 'active');                        } else {                            filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').forEach(function (row) {                                toggleClass(row, 'filter-hidden-'+name);                            });                        }                        processed[value] = true;                    });                    if (1 < list.childNodes.length) {                        filter.appendChild(list);                        filter.dataset.filtered = '';                    }                });            }        };    })();    Sfjs.addEventListener(document, 'DOMContentLoaded', function() {        Sfjs.createTabs();        Sfjs.createToggles();    });}/*]]>*/</script><style nonce=\"1dc0b38d2c7f750b5ad29fe11bfb7205\">    .sf-minitoolbar {    background-color: #222;    border-top-left-radius: 4px;    bottom: 0;    box-sizing: border-box;    display: none;    height: 36px;    padding: 6px;    position: fixed;    right: 0;    z-index: 99999;}.sf-minitoolbar a {    display: block;}.sf-minitoolbar svg,.sf-minitoolbar img {    max-height: 24px;    max-width: 24px;    display: inline;}.sf-toolbar-clearer {    clear: both;    height: 36px;}.sf-display-none {    display: none;}.sf-toolbarreset * {    box-sizing: content-box;    vertical-align: baseline;    letter-spacing: normal;    width: auto;}.sf-toolbarreset {    background-color: #222;    bottom: 0;    box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);    color: #EEE;    font: 11px Arial, sans-serif;    left: 0;    margin: 0;    padding: 0 36px 0 0;    position: fixed;    right: 0;    text-align: left;    text-transform: none;    z-index: 99999;    direction: ltr;    /* neutralize the aliasing defined by external CSS styles */    -webkit-font-smoothing: subpixel-antialiased;    -moz-osx-font-smoothing: auto;}.sf-toolbarreset abbr {    border: dashed #777;    border-width: 0 0 1px;}.sf-toolbarreset svg,.sf-toolbarreset img {    height: 20px;    width: 20px;    display: inline-block;}.sf-toolbarreset .hide-button {    background: #444;    display: block;    position: absolute;    top: 0;    right: 0;    width: 36px;    height: 36px;    cursor: pointer;    text-align: center;}.sf-toolbarreset .hide-button svg {    max-height: 18px;    margin-top: 10px;}.sf-toolbar-block {    cursor: default;    display: block;    float: left;    height: 36px;    margin-right: 0;    white-space: nowrap;    max-width: 15%;}.sf-toolbar-block > a,.sf-toolbar-block > a:hover {    display: block;    text-decoration: none;    background-color: transparent;    color: inherit;}.sf-toolbar-block span {    display: inline-block;}.sf-toolbar-block .sf-toolbar-value {    color: #F5F5F5;    font-size: 13px;    line-height: 36px;    padding: 0;}.sf-toolbar-block .sf-toolbar-label,.sf-toolbar-block .sf-toolbar-class-separator {    color: #AAA;    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    border-collapse: collapse;    display: table;    z-index: 100000;}.sf-toolbar-block hr {    border-top: 1px solid #777;    margin: 4px 0;    padding-top: 4px;}.sf-toolbar-block .sf-toolbar-info-piece {    /* this 'border-bottom' trick is needed because 'margin-bottom' doesn't work for table rows */    border-bottom: solid transparent 3px;    display: table-row;}.sf-toolbar-block .sf-toolbar-info-piece-additional,.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    display: none;}.sf-toolbar-block .sf-toolbar-info-group {    margin-bottom: 4px;    padding-bottom: 2px;    border-bottom: 1px solid #333333;}.sf-toolbar-block .sf-toolbar-info-group:last-child {    margin-bottom: 0;    padding-bottom: 0;    border-bottom: none;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status {    padding: 2px 5px;    margin-bottom: 0;}.sf-toolbar-block .sf-toolbar-info-piece .sf-toolbar-status + .sf-toolbar-status {    margin-left: 4px;}.sf-toolbar-block .sf-toolbar-info-piece:last-child {    margin-bottom: 0;}div.sf-toolbar .sf-toolbar-block .sf-toolbar-info-piece a {    color: #99CDD8;    text-decoration: underline;}div.sf-toolbar .sf-toolbar-block a:hover {    text-decoration: none;}.sf-toolbar-block .sf-toolbar-info-piece b {    color: #AAA;    display: table-cell;    font-size: 11px;    padding: 4px 8px 4px 0;}.sf-toolbar-block:not(.sf-toolbar-block-dump) .sf-toolbar-info-piece span {    color: #F5F5F5;}.sf-toolbar-block .sf-toolbar-info-piece span {    font-size: 12px;}.sf-toolbar-block .sf-toolbar-info {    background-color: #444;    bottom: 36px;    color: #F5F5F5;    display: none;    padding: 9px 0;    position: absolute;}.sf-toolbar-block .sf-toolbar-info:empty {    visibility: hidden;}.sf-toolbar-block .sf-toolbar-status {    display: inline-block;    color: #FFF;    background-color: #666;    padding: 3px 6px;    margin-bottom: 2px;    vertical-align: middle;    min-width: 15px;    min-height: 13px;    text-align: center;}.sf-toolbar-block .sf-toolbar-status-green {    background-color: #4F805D;}.sf-toolbar-block .sf-toolbar-status-red {    background-color: #B0413E;}.sf-toolbar-block .sf-toolbar-status-yellow {    background-color: #A46A1F;}.sf-toolbar-block.sf-toolbar-status-green {    background-color: #4F805D;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-red {    background-color: #B0413E;    color: #FFF;}.sf-toolbar-block.sf-toolbar-status-yellow {    background-color: #A46A1F;    color: #FFF;}.sf-toolbar-block-request .sf-toolbar-status {    color: #FFF;    display: inline-block;    font-size: 14px;    height: 36px;    line-height: 36px;    padding: 0 10px;}.sf-toolbar-block-request .sf-toolbar-info-piece a {    background-color: transparent;    text-decoration: none;}.sf-toolbar-block-request .sf-toolbar-info-piece a:hover {    text-decoration: underline;}.sf-toolbar-block-request .sf-toolbar-redirection-status {    font-weight: normal;    padding: 2px 4px;    line-height: 18px;}.sf-toolbar-block-request .sf-toolbar-info-piece span.sf-toolbar-redirection-method {    font-size: 12px;    height: 17px;    line-height: 17px;    margin-right: 5px;}.sf-toolbar-block-ajax .sf-toolbar-icon {    cursor: pointer;}.sf-toolbar-status-green .sf-toolbar-label,.sf-toolbar-status-yellow .sf-toolbar-label,.sf-toolbar-status-red .sf-toolbar-label {    color: #FFF;}.sf-toolbar-status-green svg path,.sf-toolbar-status-green svg .sf-svg-path,.sf-toolbar-status-red svg path,.sf-toolbar-status-red svg .sf-svg-path,.sf-toolbar-status-yellow svg path,.sf-toolbar-status-yellow svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block-config svg path,.sf-toolbar-block-config svg .sf-svg-path {    fill: #FFF;}.sf-toolbar-block .sf-toolbar-icon {    display: block;    height: 36px;    padding: 0 7px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-block-request .sf-toolbar-icon {    padding-left: 0;    padding-right: 0;}.sf-toolbar-block .sf-toolbar-icon img,.sf-toolbar-block .sf-toolbar-icon svg {    border-width: 0;    position: relative;    top: 8px;    vertical-align: baseline;}.sf-toolbar-block .sf-toolbar-icon img + span,.sf-toolbar-block .sf-toolbar-icon svg + span {    margin-left: 4px;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-value {    margin-left: 4px;}.sf-toolbar-block:hover,.sf-toolbar-block.hover {    position: relative;}.sf-toolbar-block:hover .sf-toolbar-icon,.sf-toolbar-block.hover .sf-toolbar-icon {    background-color: #444;    position: relative;    z-index: 10002;}.sf-toolbar-block-ajax.hover .sf-toolbar-info {    z-index: 10001;}.sf-toolbar-block:hover .sf-toolbar-info,.sf-toolbar-block.hover .sf-toolbar-info {    display: block;    padding: 10px;    max-width: 480px;    max-height: 480px;    word-wrap: break-word;    overflow: hidden;    overflow-y: auto;}.sf-toolbar-info-piece b.sf-toolbar-ajax-info {    color: #F5F5F5;}.sf-toolbar-ajax-requests {    table-layout: auto;    width: 100%;}.sf-toolbar-ajax-requests td {    background-color: #444;    border-bottom: 1px solid #777;    color: #F5F5F5;    font-size: 12px;    padding: 4px;}.sf-toolbar-ajax-requests tr:last-child td {    border-bottom: 0;}.sf-toolbar-ajax-requests th {    background-color: #222;    border-bottom: 0;    color: #AAA;    font-size: 11px;    padding: 4px;}.sf-ajax-request-url {    max-width: 250px;    line-height: 9px;    overflow: hidden;    text-overflow: ellipsis;}.sf-toolbar-ajax-requests .sf-ajax-request-url a {    text-decoration: none;}.sf-toolbar-ajax-requests .sf-ajax-request-url a:hover {    text-decoration: underline;}.sf-ajax-request-duration {    text-align: right;}.sf-ajax-request-loading {    animation: sf-blink .5s ease-in-out infinite;}@keyframes sf-blink {    0% { background: #222; }    50% { background: #444; }    100% { background: #222; }}.sf-toolbar-block.sf-toolbar-block-dump .sf-toolbar-info {    max-width: none;    width: 100%;    position: fixed;    box-sizing: border-box;    left: 0;}.sf-toolbar-block-dump pre.sf-dump {    background-color: #222;    border-color: #777;    border-radius: 0;    margin: 6px 0 12px 0;}.sf-toolbar-block-dump pre.sf-dump:last-child {    margin-bottom: 0;}.sf-toolbar-block-dump pre.sf-dump .sf-dump-search-wrapper {    margin-bottom: 5px;}.sf-toolbar-block-dump pre.sf-dump span.sf-dump-search-count {    color: #333;    font-size: 12px;}.sf-toolbar-block-dump .sf-toolbar-info-piece {    display: block;}.sf-toolbar-block-dump .sf-toolbar-info-piece .sf-toolbar-file-line {    color: #AAA;    margin-left: 4px;}.sf-toolbar-block-dump .sf-toolbar-info img {    display: none;}/* Responsive Design */.sf-toolbar-icon .sf-toolbar-label,.sf-toolbar-icon .sf-toolbar-value {    display: none;}.sf-toolbar-block-config .sf-toolbar-icon .sf-toolbar-label {    display: inline-block;}/* Legacy Design - these styles are maintained to make old panels look   a bit better on the new toolbar */.sf-toolbar-block .sf-toolbar-info-piece-additional-detail {    color: #AAA;    font-size: 12px;}.sf-toolbar-status-green .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-yellow .sf-toolbar-info-piece-additional-detail,.sf-toolbar-status-red .sf-toolbar-info-piece-additional-detail {    color: #FFF;}@media (min-width: 768px) {    .sf-toolbar-icon .sf-toolbar-label,    .sf-toolbar-icon .sf-toolbar-value {        display: inline;    }    .sf-toolbar-block .sf-toolbar-icon img,    .sf-toolbar-block .sf-toolbar-icon svg {        top: 6px;    }    .sf-toolbar-block-time .sf-toolbar-icon svg,    .sf-toolbar-block-memory .sf-toolbar-icon svg {        display: none;    }    .sf-toolbar-block-time .sf-toolbar-icon svg + span,    .sf-toolbar-block-memory .sf-toolbar-icon svg + span {        margin-left: 0;    }    .sf-toolbar-block .sf-toolbar-icon {        padding: 0 10px;    }    .sf-toolbar-block-time .sf-toolbar-icon {        padding-right: 5px;    }    .sf-toolbar-block-memory .sf-toolbar-icon {        padding-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon {        padding-left: 0;        padding-right: 0;    }    .sf-toolbar-block-request .sf-toolbar-label {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-status + svg {        margin-left: 5px;    }    .sf-toolbar-block-request .sf-toolbar-icon svg + .sf-toolbar-label {        margin-left: 0;     }    .sf-toolbar-block-request .sf-toolbar-label + .sf-toolbar-value {        margin-right: 10px;    }    .sf-toolbar-block-request:hover .sf-toolbar-info {        max-width: none;    }    .sf-toolbar-block .sf-toolbar-info-piece b {        font-size: 12px;    }    .sf-toolbar-block .sf-toolbar-info-piece span {        font-size: 13px;    }    .sf-toolbar-block-right {        float: right;        margin-left: 0;        margin-right: 0;    }}@media (min-width: 1024px) {    .sf-toolbar-block .sf-toolbar-info-piece-additional,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail {        display: inline;    }    .sf-toolbar-block .sf-toolbar-info-piece-additional:empty,    .sf-toolbar-block .sf-toolbar-info-piece-additional-detail:empty {        display: none;    }}/***** Error Toolbar *****/.sf-error-toolbar .sf-toolbarreset {    background: #222;    color: #f5f5f5;    font: 13px/36px Arial, sans-serif;    height: 36px;    padding: 0 15px;    text-align: left;}.sf-error-toolbar .sf-toolbarreset svg {    height: auto;}.sf-error-toolbar .sf-toolbarreset a {    color: #99cdd8;    margin-left: 5px;    text-decoration: underline;}.sf-error-toolbar .sf-toolbarreset a:hover {    text-decoration: none;}.sf-error-toolbar .sf-toolbarreset .sf-toolbar-icon {    float: left;    padding: 5px 0;    margin-right: 10px;}/***** Media query print: Do not print the Toolbar. *****/@media print {    .sf-toolbar {        display: none !important;    }}</style><script nonce=\"2d3e18ed9a5b14380fb938ac87369bac\">/*<![CDATA[*/    (function () {        Sfjs.loadToolbar('949a8d');    })();/*]]>*/</script>
</body>



</html>
", "base2.html.twig", "C:\\Users\\MSI\\Desktop\\AgenceDeVoyage\\templates\\base2.html.twig");
    }
}
