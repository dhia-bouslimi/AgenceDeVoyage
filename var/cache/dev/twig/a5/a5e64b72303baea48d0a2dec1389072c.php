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

/* users/addUsers.html.twig */
class __TwigTemplate_236addebf26230cc1985565a2e3e01a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/addUsers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/addUsers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/addUsers.html.twig", 1);
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
                <h1>Add User</h1>
            </div>

            <div class=\"row\">

                <div class=\"col-md-12\"  style=\"display: flex; justify-content: center;align-items:center;width: 100%\" >
                    <div class=\"card-box\">
                        <div class=\"dropdown pull-right\">
                            <a href=\"#\" class=\"dropdown-toggle arrow-none card-drop\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"mdi mdi-dots-vertical\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">Action</a>
                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">Another action</a>
                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">Something else</a>
                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">Separated link</a>
                            </div>
                        </div>

                        <h4 class=\"header-title m-t-0 m-b-30\">Basic Form</h4>
                        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 38, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                        <div class=\"form-group\">
                            <label for=\"nom\">Nom*</label>

                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                        </div>
                        <div class=\"form-group\">
                            <label for=\"prenom\">Prenom*</label>


                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 51, $this->source); })()), "password", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "


                            </div>

                            <div class=\"form-group\">

                                <label for=\"adresse\">adresse</label>


                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 61, $this->source); })()), "name", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>


                        <div class=\"form-group text-right m-b-0\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 66, $this->source); })()), "Submit", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "btn btn-primary waves-effect waves-light"]]);
        echo "
                            <button type=\"reset\" class=\"btn btn-secondary waves-effect waves-light m-l-5\">Reset
                            </button>
                            ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 69, $this->source); })()), 'form_end');
        echo "

                        </div>
                    </div>


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
        return "users/addUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 69,  144 => 66,  136 => 61,  123 => 51,  112 => 43,  104 => 38,  68 => 4,  58 => 3,  35 => 1,);
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
                <h1>Add User</h1>
            </div>

            <div class=\"row\">

                <div class=\"col-md-12\"  style=\"display: flex; justify-content: center;align-items:center;width: 100%\" >
                    <div class=\"card-box\">
                        <div class=\"dropdown pull-right\">
                            <a href=\"#\" class=\"dropdown-toggle arrow-none card-drop\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"mdi mdi-dots-vertical\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right\">
                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">Action</a>
                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">Another action</a>
                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">Something else</a>
                                <!-- item-->
                                <a href=\"javascript:void(0);\" class=\"dropdown-item\">Separated link</a>
                            </div>
                        </div>

                        <h4 class=\"header-title m-t-0 m-b-30\">Basic Form</h4>
                        {{ form_start(f, {attr: {novalidate: 'novalidate'}}) }}

                        <div class=\"form-group\">
                            <label for=\"nom\">Nom*</label>

                            {{ form_widget(f.email, {'attr': {'class': 'form-control'}}) }}


                        </div>
                        <div class=\"form-group\">
                            <label for=\"prenom\">Prenom*</label>


                                {{ form_widget(f.password, {'attr': {'class': 'form-control'}}) }}


                            </div>

                            <div class=\"form-group\">

                                <label for=\"adresse\">adresse</label>


                                {{ form_widget(f.name, {'attr': {'class': 'form-control'}}) }}
                            </div>


                        <div class=\"form-group text-right m-b-0\">
                            {{ form_widget(f.Submit, {'attr': {'class': 'btn btn-primary waves-effect waves-light'}}) }}
                            <button type=\"reset\" class=\"btn btn-secondary waves-effect waves-light m-l-5\">Reset
                            </button>
                            {{ form_end(f) }}

                        </div>
                    </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

{% endblock %}", "users/addUsers.html.twig", "C:\\Users\\MSI\\Desktop\\GitHub\\templates\\users\\addUsers.html.twig");
    }
}
