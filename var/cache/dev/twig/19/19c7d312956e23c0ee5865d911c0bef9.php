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

/* base.html.twig */
class __TwigTemplate_821737516226440419e38ef99f6257df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 51
        echo "    </head>


    <body class=\"fixed-left\">

    <!-- Begin page -->
    <div id=\"wrapper\">

        <!-- Top Bar Start -->
        <div class=\"topbar\">

            <!-- LOGO -->
            <div class=\"topbar-left\">
                <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"logo\"><span>Admin<span>to</span></span><i class=\"mdi mdi-layers\"></i></a>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container-fluid\">

                    <!-- Page title -->
                    <ul class=\"nav navbar-nav list-inline navbar-left\">
                        <li class=\"list-inline-item\">
                            <button class=\"button-menu-mobile open-left\">
                                <i class=\"mdi mdi-menu\"></i>
                            </button>
                        </li>
                        <li class=\"list-inline-item\">
                            <h4 class=\"page-title\">Dashboard</h4>
                        </li>
                    </ul>

                    <nav class=\"navbar-custom\">

                        <ul class=\"list-unstyled topbar-right-menu float-right mb-0\">

                            <li>
                                <!-- Notification -->
                                <div class=\"notification-box\">
                                    <ul class=\"list-inline mb-0\">
                                        <li>
                                            <a href=\"javascript:void(0);\" class=\"right-bar-toggle\">
                                                <i class=\"mdi mdi-bell-outline noti-icon\"></i>
                                            </a>
                                            <div class=\"noti-dot\">
                                                <span class=\"dot\"></span>
                                                <span class=\"pulse\"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>

                            <li class=\"hide-phone\">
                                <form class=\"app-search\">
                                    <input type=\"text\" placeholder=\"Search...\"
                                           class=\"form-control\">
                                    <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                                </form>
                            </li>

                        </ul>
                    </nav>
                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->



        <!-- ========== Left Sidebar Start ========== -->
        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">

                <!-- User -->
                <div class=\"user-box\">
                    <div class=\"user-img\">
                        <img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" title=\"Mat Helme\" class=\"rounded-circle img-thumbnail img-responsive\">
                        <div class=\"user-status offline\"><i class=\"mdi mdi-adjust\"></i></div>
                    </div>
                    <h5><a href=\"#\">Mat Helme</a> </h5>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\">
                            <a href=\"#\" >
                                <i class=\"mdi mdi-settings\"></i>
                            </a>
                        </li>

                        <li class=\"list-inline-item\">
                            <a href=\"#\" class=\"text-custom\">
                                <i class=\"mdi mdi-power\"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div id=\"sidebar-menu\">
                    <ul>
                        <li class=\"text-muted menu-title\">Navigation</li>
                        <li>
                            <a  class=\"waves-effect\"><i class=\"mdi mdi-view-dashboard\"></i> <span> Gestion Produit </span> </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\" class=\"waves-effect\"><i class=\"mdi mdi-view-dashboard\"></i> <span> Inscription client </span> </a>
                        </li>

                        <li>
                            <a   href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration_admin");
        echo "\" class=\"waves-effect\"><i class=\"mdi mdi-view-dashboard\"></i> <span> inscription admin </span> </a>
                        </li>
                        <li>
                            <a  href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"  class=\"waves-effect\"><i class=\"mdi mdi-view-dashboard\"></i> <span> Login</span> </a>
                        </li>
                        <li>
                            <a  class=\"waves-effect\"><i class=\"mdi mdi-view-dashboard\"></i> <span> Gestion Voiture </span> </a>
                        </li>
                        <li class=\"has_sub\">
                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-invert-colors\"></i> <span> Gestion Utilisateurs</span> <span class=\"menu-arrow\"></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                <li><a href=\"ui-cards.html\">Cards</a></li>
                                <li><a href=\"ui-draggable-cards.html\">Draggable Cards</a></li>
                                <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                <li><a href=\"ui-material-icons.html\">Material Design Icons</a></li>
                                <li><a href=\"ui-font-awesome-icons.html\">Font Awesome</a></li>
                                <li><a href=\"ui-dripicons.html\">Dripicons</a></li>
                                <li><a href=\"ui-themify-icons.html\">Themify Icons</a></li>
                                <li><a href=\"ui-modals.html\">Modals</a></li>
                                <li><a href=\"ui-notification.html\">Notification</a></li>
                                <li><a href=\"ui-range-slider.html\">Range Slider</a></li>
                                <li><a href=\"ui-components.html\">Components</a>
                                <li><a href=\"ui-sweetalert.html\">Sweet Alert</a>
                                <li><a href=\"ui-treeview.html\">Tree view</a>
                                <li><a href=\"ui-widgets.html\">Widgets</a></li>
                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-texture\"></i><span class=\"badge badge-warning pull-right\">7</span><span> Shop </span> </a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"form-elements.html\">General Elements</a></li>
                                <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                <li><a href=\"form-validation.html\">Form Validation</a></li>
                                <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                <li><a href=\"form-fileupload.html\">Form Uploads</a></li>
                                <li><a href=\"form-wysiwig.html\">Wysiwig Editors</a></li>
                                <li><a href=\"form-xeditable.html\">X-editable</a></li>
                            </ul>
                        </li>

                    <div class=\"clearfix\"></div>
                </div>
                <!-- Sidebar -->
                <div class=\"clearfix\"></div>

            </div>

        </div>

    <body>

        ";
        // line 212
        $this->displayBlock('body', $context, $blocks);
        // line 213
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        // line 10
        echo "            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta name=\"description\" content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\">
            <meta name=\"author\" content=\"Coderthemes\">

            <link rel=\"shortcut icon\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\">

            <title>Adminto - Responsive Admin Dashboard Template</title>

            <!--Morris Chart CSS -->
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "            ";
        // line 29
        echo "


            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/jquery-knob/excanvas.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/jquery-knob/jquery.knob.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/morris/morris.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/plugins/raphael/raphael-min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.core.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 212
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 212,  407 => 49,  403 => 48,  399 => 47,  395 => 46,  390 => 44,  386 => 43,  382 => 42,  378 => 41,  374 => 40,  370 => 39,  366 => 38,  362 => 37,  358 => 36,  354 => 35,  350 => 34,  346 => 33,  342 => 32,  337 => 29,  335 => 28,  325 => 27,  312 => 23,  308 => 22,  304 => 21,  300 => 20,  292 => 15,  285 => 10,  283 => 9,  273 => 8,  254 => 5,  242 => 213,  240 => 212,  186 => 161,  180 => 158,  173 => 154,  80 => 64,  65 => 51,  63 => 27,  60 => 26,  57 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
            <meta charset=\"utf-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <meta name=\"description\" content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\">
            <meta name=\"author\" content=\"Coderthemes\">

            <link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.ico') }}\">

            <title>Adminto - Responsive Admin Dashboard Template</title>

            <!--Morris Chart CSS -->
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/icons.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
            <script src=\"{{ asset('assets/js/modernizr.min.js') }}\"></script>

        {% endblock %}

        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}



            <script src=\"{{ asset('assets/js/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/detect.js') }}\"></script>
            <script src=\"{{ asset('assets/js/fastclick.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.blockUI.js') }}\"></script>
            <script src=\"{{ asset('assets/js/waves.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.nicescroll.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.slimscroll.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.scrollTo.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/plugins/jquery-knob/excanvas.js') }}\"></script>
            <script src=\"{{ asset('assets/plugins/jquery-knob/jquery.knob.js') }}\"></script>
            <script src=\"{{ asset('assets/plugins/morris/morris.min.js') }}\"></script>

            <script src=\"{{ asset('assets/plugins/raphael/raphael-min.js') }}\"></script>
            <script src=\"{{ asset('assets/pages/jquery.dashboard.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.core.js') }}\"></script>
            <script src=\"{{ asset('assets/js/jquery.app.js') }}\"></script>
        {% endblock %}
    </head>


    <body class=\"fixed-left\">

    <!-- Begin page -->
    <div id=\"wrapper\">

        <!-- Top Bar Start -->
        <div class=\"topbar\">

            <!-- LOGO -->
            <div class=\"topbar-left\">
                <a href=\"{{ path('home') }}\" class=\"logo\"><span>Admin<span>to</span></span><i class=\"mdi mdi-layers\"></i></a>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container-fluid\">

                    <!-- Page title -->
                    <ul class=\"nav navbar-nav list-inline navbar-left\">
                        <li class=\"list-inline-item\">
                            <button class=\"button-menu-mobile open-left\">
                                <i class=\"mdi mdi-menu\"></i>
                            </button>
                        </li>
                        <li class=\"list-inline-item\">
                            <h4 class=\"page-title\">Dashboard</h4>
                        </li>
                    </ul>

                    <nav class=\"navbar-custom\">

                        <ul class=\"list-unstyled topbar-right-menu float-right mb-0\">

                            <li>
                                <!-- Notification -->
                                <div class=\"notification-box\">
                                    <ul class=\"list-inline mb-0\">
                                        <li>
                                            <a href=\"javascript:void(0);\" class=\"right-bar-toggle\">
                                                <i class=\"mdi mdi-bell-outline noti-icon\"></i>
                                            </a>
                                            <div class=\"noti-dot\">
                                                <span class=\"dot\"></span>
                                                <span class=\"pulse\"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Notification bar -->
                            </li>

                            <li class=\"hide-phone\">
                                <form class=\"app-search\">
                                    <input type=\"text\" placeholder=\"Search...\"
                                           class=\"form-control\">
                                    <button type=\"submit\"><i class=\"fa fa-search\"></i></button>
                                </form>
                            </li>

                        </ul>
                    </nav>
                </div><!-- end container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->



        <!-- ========== Left Sidebar Start ========== -->
        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">

                <!-- User -->
                <div class=\"user-box\">
                    <div class=\"user-img\">
                        <img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" title=\"Mat Helme\" class=\"rounded-circle img-thumbnail img-responsive\">
                        <div class=\"user-status offline\"><i class=\"mdi mdi-adjust\"></i></div>
                    </div>
                    <h5><a href=\"#\">Mat Helme</a> </h5>
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\">
                            <a href=\"#\" >
                                <i class=\"mdi mdi-settings\"></i>
                            </a>
                        </li>

                        <li class=\"list-inline-item\">
                            <a href=\"#\" class=\"text-custom\">
                                <i class=\"mdi mdi-power\"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div id=\"sidebar-menu\">
                    <ul>
                        <li class=\"text-muted menu-title\">Navigation</li>
                        <li>
                            <a  class=\"waves-effect\"><i class=\"mdi mdi-view-dashboard\"></i> <span> Gestion Produit </span> </a>
                        </li>
                        <li>
                            <a href=\"{{ path('registration') }}\" class=\"waves-effect\"><i class=\"mdi mdi-view-dashboard\"></i> <span> Inscription client </span> </a>
                        </li>

                        <li>
                            <a   href=\"{{ path('registration_admin') }}\" class=\"waves-effect\"><i class=\"mdi mdi-view-dashboard\"></i> <span> inscription admin </span> </a>
                        </li>
                        <li>
                            <a  href=\"{{ path('app_login') }}\"  class=\"waves-effect\"><i class=\"mdi mdi-view-dashboard\"></i> <span> Login</span> </a>
                        </li>
                        <li>
                            <a  class=\"waves-effect\"><i class=\"mdi mdi-view-dashboard\"></i> <span> Gestion Voiture </span> </a>
                        </li>
                        <li class=\"has_sub\">
                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-invert-colors\"></i> <span> Gestion Utilisateurs</span> <span class=\"menu-arrow\"></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                <li><a href=\"ui-cards.html\">Cards</a></li>
                                <li><a href=\"ui-draggable-cards.html\">Draggable Cards</a></li>
                                <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                <li><a href=\"ui-material-icons.html\">Material Design Icons</a></li>
                                <li><a href=\"ui-font-awesome-icons.html\">Font Awesome</a></li>
                                <li><a href=\"ui-dripicons.html\">Dripicons</a></li>
                                <li><a href=\"ui-themify-icons.html\">Themify Icons</a></li>
                                <li><a href=\"ui-modals.html\">Modals</a></li>
                                <li><a href=\"ui-notification.html\">Notification</a></li>
                                <li><a href=\"ui-range-slider.html\">Range Slider</a></li>
                                <li><a href=\"ui-components.html\">Components</a>
                                <li><a href=\"ui-sweetalert.html\">Sweet Alert</a>
                                <li><a href=\"ui-treeview.html\">Tree view</a>
                                <li><a href=\"ui-widgets.html\">Widgets</a></li>
                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><i class=\"mdi mdi-texture\"></i><span class=\"badge badge-warning pull-right\">7</span><span> Shop </span> </a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"form-elements.html\">General Elements</a></li>
                                <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                <li><a href=\"form-validation.html\">Form Validation</a></li>
                                <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                <li><a href=\"form-fileupload.html\">Form Uploads</a></li>
                                <li><a href=\"form-wysiwig.html\">Wysiwig Editors</a></li>
                                <li><a href=\"form-xeditable.html\">X-editable</a></li>
                            </ul>
                        </li>

                    <div class=\"clearfix\"></div>
                </div>
                <!-- Sidebar -->
                <div class=\"clearfix\"></div>

            </div>

        </div>

    <body>

        {% block body %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\MSI\\Desktop\\AgenceDeVoyage\\templates\\base.html.twig");
    }
}
