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

/* registration/index.html.twig */
class __TwigTemplate_618595def6473232d031ebdbb3c948df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"content-page\">
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

                            <h4 class=\"header-title m-t-0 m-b-30\">Registration Form</h4>


                    <p></p>  <p></p>  <p></p> <p></p>  <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p>
                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
                    <div class=\"form_group\">
                        <label for=\"nom\">Nom:</label>
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>

            <div class=\"form_group\">
                <label for=\"nom\">Email:</label>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>

                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), "first", [], "any", false, false, false, 49), 'row', ["attr" => ["class" => "form-control"]]);
        // line 50
        echo "
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), "second", [], "any", false, false, false, 55), 'row', ["attr" => ["class" => "form-control"]]);
        // line 56
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fa fa-btn fa-user\"></i> Register
                            </button>
                        </div>
                    </div>
                    ";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_end');
        echo "
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
        return "registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 66,  136 => 56,  134 => 55,  127 => 50,  125 => 49,  117 => 44,  109 => 39,  103 => 36,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
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

                            <h4 class=\"header-title m-t-0 m-b-30\">Registration Form</h4>


                    <p></p>  <p></p>  <p></p> <p></p>  <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p> <p></p>
                    {{ form_start(form) }}
                    <div class=\"form_group\">
                        <label for=\"nom\">Nom:</label>
                            {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
                        </div>

            <div class=\"form_group\">
                <label for=\"nom\">Email:</label>
                            {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                        </div>

                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            {{ form_row(form.password.first, {'attr': {'class':
                                'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form_group\">
                        <div class=\"col-md-12 mb-3\">
                            {{ form_row(form.password.second, {'attr': {'class':
                                'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-md-8 col-md-offset-4\" style=\"margin-top:5px;\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"fa fa-btn fa-user\"></i> Register
                            </button>
                        </div>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    </div>


{% endblock %}", "registration/index.html.twig", "C:\\Users\\MSI\\Desktop\\GitHub\\templates\\registration\\index.html.twig");
    }
}
