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

/* gm.html */
class __TwigTemplate_71bc923464a022c73c7bce6081699454 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gm.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gm.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\">
    <meta name=\"author\" content=\"Coderthemes\">

    <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

    <title>Adminto - Responsive Admin Dashboard Template</title>

    <!--Morris Chart CSS -->
    <link rel=\"stylesheet\" href=\"assets/plugins/morris/morris.css\">

    <!-- App css -->
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />

    <script src=\"assets/js/modernizr.min.js\"></script>
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/js/popper.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/detect.js\"></script>
    <script src=\"assets/js/fastclick.js\"></script>
    <script src=\"assets/js/jquery.blockUI.js\"></script>
    <script src=\"assets/js/waves.js\"></script>
    <script src=\"assets/js/jquery.nicescroll.js\"></script>
    <script src=\"assets/js/jquery.slimscroll.js\"></script>
    <script src=\"assets/js/jquery.scrollTo.min.js\"></script>

    <!-- KNOB JS -->
    <!--[if IE]>
    <script type=\"text/javascript\" src=\"assets/plugins/jquery-knob/excanvas.js\"></script>
    <![endif]-->
    <script src=\"assets/plugins/jquery-knob/jquery.knob.js\"></script>

    <!--Morris Chart-->
    <script src=\"assets/plugins/morris/morris.min.js\"></script>
    <script src=\"assets/plugins/raphael/raphael-min.js\"></script>

    <!-- Dashboard init -->
    <script src=\"assets/pages/jquery.dashboard.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/jquery.core.js\"></script>
    <script src=\"assets/js/jquery.app.js\"></script>



</head>
<body>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "gm.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Title</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\">
    <meta name=\"author\" content=\"Coderthemes\">

    <link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

    <title>Adminto - Responsive Admin Dashboard Template</title>

    <!--Morris Chart CSS -->
    <link rel=\"stylesheet\" href=\"assets/plugins/morris/morris.css\">

    <!-- App css -->
    <link href=\"assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/css/icons.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"assets/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />

    <script src=\"assets/js/modernizr.min.js\"></script>
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/js/popper.min.js\"></script>
    <script src=\"assets/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/detect.js\"></script>
    <script src=\"assets/js/fastclick.js\"></script>
    <script src=\"assets/js/jquery.blockUI.js\"></script>
    <script src=\"assets/js/waves.js\"></script>
    <script src=\"assets/js/jquery.nicescroll.js\"></script>
    <script src=\"assets/js/jquery.slimscroll.js\"></script>
    <script src=\"assets/js/jquery.scrollTo.min.js\"></script>

    <!-- KNOB JS -->
    <!--[if IE]>
    <script type=\"text/javascript\" src=\"assets/plugins/jquery-knob/excanvas.js\"></script>
    <![endif]-->
    <script src=\"assets/plugins/jquery-knob/jquery.knob.js\"></script>

    <!--Morris Chart-->
    <script src=\"assets/plugins/morris/morris.min.js\"></script>
    <script src=\"assets/plugins/raphael/raphael-min.js\"></script>

    <!-- Dashboard init -->
    <script src=\"assets/pages/jquery.dashboard.js\"></script>

    <!-- App js -->
    <script src=\"assets/js/jquery.core.js\"></script>
    <script src=\"assets/js/jquery.app.js\"></script>



</head>
<body>

</body>
</html>", "gm.html", "C:\\Users\\MSI\\Desktop\\GitHub\\templates\\gm.html");
    }
}
