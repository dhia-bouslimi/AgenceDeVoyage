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

/* users/detailUsers.html.twig */
class __TwigTemplate_2c556ca4caa72638c98edd08b085acb0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/detailUsers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/detailUsers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/detailUsers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class=\"content-page\">
        <!-- Start content -->
        <div class=\"content\">
            <div class=\"container-fluid\">


                <div class=\"row\">
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_list");
        echo "\">
                        <i class=\"fa fa-arrow-circle-left\" style=\"font-size: 30px;\"></i>

                    </a>

                </div>
                <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;\">

                    <div class=\"col-md-6 col-lg-3\">

                        <div class=\"card m-b-20\">
                            <img class=\"card-img-top img-fluid\" src=\" ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/gallery/2.jpg"), "html", null, true);
        echo "\" alt=\"Card image cap\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Detail Utilisateur:  ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "</h4>


                            </div>
                            <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;\"
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">nom :  ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "</li>
                                <li class=\"list-group-item\">prenom:  ";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "</li>
                                <li class=\"list-group-item\">telephone:  ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new RuntimeError('Variable "password" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "</li>
                               


                            </ul>



                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/detailUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  113 => 35,  109 => 34,  100 => 28,  95 => 26,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class=\"content-page\">
        <!-- Start content -->
        <div class=\"content\">
            <div class=\"container-fluid\">


                <div class=\"row\">
                    <a href=\"{{ path('users_list') }}\">
                        <i class=\"fa fa-arrow-circle-left\" style=\"font-size: 30px;\"></i>

                    </a>

                </div>
                <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;\">

                    <div class=\"col-md-6 col-lg-3\">

                        <div class=\"card m-b-20\">
                            <img class=\"card-img-top img-fluid\" src=\" {{  asset('assets/images/gallery/2.jpg')}}\" alt=\"Card image cap\">
                            <div class=\"card-body\">
                                <h4 class=\"card-title\">Detail Utilisateur:  {{id}}</h4>


                            </div>
                            <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center;\"
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item\">nom :  {{ name}}</li>
                                <li class=\"list-group-item\">prenom:  {{email}}</li>
                                <li class=\"list-group-item\">telephone:  {{password}}</li>
                               


                            </ul>



                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>

{% endblock %}", "users/detailUsers.html.twig", "C:\\Users\\MSI\\Desktop\\GitHub\\templates\\users\\detailUsers.html.twig");
    }
}
