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

/* users/listUsers.html.twig */
class __TwigTemplate_3a17789ff41d572a2688cdaff3358ecf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/listUsers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/listUsers.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "users/listUsers.html.twig", 1);
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

                    <div class=\"col-12\">
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
                            <h4 class=\"m-t-0 header-title\">List Utilisateur</h4>
                            <p class=\"text-muted font-14 m-b-20\">

                                <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\">
                                    <button type=\"button\" class=\"btn btn-purple btn-rounded w-md waves-effect waves-light m-b-5\">Ajouter Utilisateur</button>                            </p>

                            </a>
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>

                                    <th>Modifier</th>
                                    <th>Supprimer</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 53
            echo "                                    <tr>

                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>

                                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "email", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>

                                        <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\" style=\"color:#ff5b5b;font-size:20px\"></i> </a> </td>
                                        <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppression", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"color:#00aff0;font-size:20px\"></i> </a> </td>
                                        <td><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailUsers", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\"><i class=\"fa fa-list\" style=\"color:#0eac5c;font-size:20px\"></i> </a> </td>

                                    </tr>


                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                                </tbody>
                            </table>
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
        return "users/listUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 67,  147 => 61,  143 => 60,  139 => 59,  134 => 57,  129 => 55,  125 => 53,  121 => 52,  102 => 36,  68 => 4,  58 => 3,  35 => 1,);
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

                    <div class=\"col-12\">
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
                            <h4 class=\"m-t-0 header-title\">List Utilisateur</h4>
                            <p class=\"text-muted font-14 m-b-20\">

                                <a href=\"{{ path('registration') }}\">
                                    <button type=\"button\" class=\"btn btn-purple btn-rounded w-md waves-effect waves-light m-b-5\">Ajouter Utilisateur</button>                            </p>

                            </a>
                            <table class=\"table\">
                                <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>

                                    <th>Modifier</th>
                                    <th>Supprimer</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for p in  user %}
                                    <tr>

                                        <td>{{ p.name }}</td>

                                        <td>{{ p.email }}</td>

                                        <td><a href=\"{{ path('update',{'id':p.id}) }}\"><i class=\"fa fa-pencil\" style=\"color:#ff5b5b;font-size:20px\"></i> </a> </td>
                                        <td><a href=\"{{ path('suppression',{'id':p.id}) }}\"><i class=\"fa fa-trash\" style=\"color:#00aff0;font-size:20px\"></i> </a> </td>
                                        <td><a href=\"{{ path('detailUsers',{'id':p.id}) }}\"><i class=\"fa fa-list\" style=\"color:#0eac5c;font-size:20px\"></i> </a> </td>

                                    </tr>


                                {% endfor %}
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "users/listUsers.html.twig", "C:\\Users\\MSI\\Desktop\\GitHub\\templates\\users\\listUsers.html.twig");
    }
}
