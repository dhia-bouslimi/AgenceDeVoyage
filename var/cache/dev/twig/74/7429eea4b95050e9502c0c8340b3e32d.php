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

/* users/login.html.twig */
class __TwigTemplate_d26c39b13180e841e148bab8e001957e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
        <div class=\"content-page\">
                <!-- Start content -->

            <div class=\"content\">
                        <div class=\"container-fluid\">

                                <div class=\"row\">
                                    <form action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_list");
        echo "\" method=\"post\">
                                       <div class=\"form-group\">
                                               <input placeholder= \"adresse mail...\" required name=\"_username\" type=\"text\" class=\"form-control\">
                                       </div>


                                        <div class=\"form-group\">
                                                <input placeholder= \"mot de passe...\" required name=\"_password\" type=\"password\" class=\"form-control\">
                                        </div>
                                    <div class=\"form-group\">

                                        <button type=\"submit\" class=\" btn btn-success\"> Connexion</button>
                                    </div>






                        </div>
            </div>
        </div>
            </div>
    </form>


































";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "users/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}

        <div class=\"content-page\">
                <!-- Start content -->

            <div class=\"content\">
                        <div class=\"container-fluid\">

                                <div class=\"row\">
                                    <form action=\"{{ path('users_list') }}\" method=\"post\">
                                       <div class=\"form-group\">
                                               <input placeholder= \"adresse mail...\" required name=\"_username\" type=\"text\" class=\"form-control\">
                                       </div>


                                        <div class=\"form-group\">
                                                <input placeholder= \"mot de passe...\" required name=\"_password\" type=\"password\" class=\"form-control\">
                                        </div>
                                    <div class=\"form-group\">

                                        <button type=\"submit\" class=\" btn btn-success\"> Connexion</button>
                                    </div>






                        </div>
            </div>
        </div>
            </div>
    </form>


































{% endblock %}", "users/login.html.twig", "C:\\Users\\MSI\\Desktop\\GitHub\\templates\\users\\login.html.twig");
    }
}
