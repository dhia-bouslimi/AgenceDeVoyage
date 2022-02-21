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

/* users/updateUsers.html.twig */
class __TwigTemplate_88347e90408ba7ed7c878d866d269a45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/updateUsers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/updateUsers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/updateUsers.html.twig", 1);
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
        echo "    <div class=\"content-page\">
        <!-- Start content -->
        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_list");
        echo "\">
                        <i class=\"fa fa-arrow-circle-left\" style=\"font-size: 30px;\"></i>

                    </a>

                </div>
                <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center\">
                    <div class=\"col-md-6\">
                        <div class=\"card-box\">
                            <h4 class=\"m-t-0 m-b-30 header-title\">Modifier utilisateur</h4>
                            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 19, $this->source); })()), 'form_start');
        echo "

                            <div class=\"form-group\">
                                <label for=\"name\">Nom</label>
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label for=\"name\">Prenom</label>
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>

                            <div class=\"form-group\">
                                <label for=\"name\">telephone</label>
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 32, $this->source); })()), "telephone", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>

                            <div class=\"form-group\">
                                <label for=\"name\">adresse</label>
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 37, $this->source); })()), "adresse", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                            </div>
                            <div class=\"form-group\">
                                <label for=\"name\">mail</label>
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 42, $this->source); })()), "mail", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                            </div>
                            <div class=\"form-group\">
                                <label for=\"name\">role</label>
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 47, $this->source); })()), "role", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label for=\"name\">mot_de_passe</label>
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 51, $this->source); })()), "Mot_de_passe", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                <label for=\"name\">Confirmation</label>
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 55, $this->source); })()), "confirm_de_passe", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 58, $this->source); })()), "Submit", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "btn btn-pink btn-rounded w-md waves-effect waves-light m-b-5"]]);
        echo "
                            </div>
                            ";
        // line 60
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 60, $this->source); })()), 'form_end');
        echo "

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
        return "users/updateUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 60,  154 => 58,  148 => 55,  141 => 51,  134 => 47,  126 => 42,  118 => 37,  110 => 32,  102 => 27,  95 => 23,  88 => 19,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
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
                    <a href=\"{{ path('users_list') }}\">
                        <i class=\"fa fa-arrow-circle-left\" style=\"font-size: 30px;\"></i>

                    </a>

                </div>
                <div class=\"row\" style=\"display: flex;align-items: center;justify-content: center\">
                    <div class=\"col-md-6\">
                        <div class=\"card-box\">
                            <h4 class=\"m-t-0 m-b-30 header-title\">Modifier utilisateur</h4>
                            {{form_start(f)}}

                            <div class=\"form-group\">
                                <label for=\"name\">Nom</label>
                                {{ form_widget(f.nom, {'attr':{'class':'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                <label for=\"name\">Prenom</label>
                                {{ form_widget(f.prenom, {'attr':{'class':'form-control'}})}}
                            </div>

                            <div class=\"form-group\">
                                <label for=\"name\">telephone</label>
                                {{ form_widget(f.telephone, {'attr':{'class':'form-control'}})}}
                            </div>

                            <div class=\"form-group\">
                                <label for=\"name\">adresse</label>
                                {{ form_widget(f.adresse, {'attr':{'class':'form-control'}})}}

                            </div>
                            <div class=\"form-group\">
                                <label for=\"name\">mail</label>
                                {{ form_widget(f.mail, {'attr':{'class':'form-control'}})}}

                            </div>
                            <div class=\"form-group\">
                                <label for=\"name\">role</label>
                                {{ form_widget(f.role, {'attr':{'class':'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                <label for=\"name\">mot_de_passe</label>
                                {{ form_widget(f.Mot_de_passe, {'attr':{'class':'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                <label for=\"name\">Confirmation</label>
                                {{ form_widget(f.confirm_de_passe, {'attr':{'class':'form-control'}})}}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(f.Submit,{'attr':{'class':'btn btn-pink btn-rounded w-md waves-effect waves-light m-b-5'}}) }}
                            </div>
                            {{ form_end(f) }}

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>




{% endblock %}", "users/updateUsers.html.twig", "C:\\Users\\MSI\\Desktop\\GitHub\\templates\\users\\updateUsers.html.twig");
    }
}
