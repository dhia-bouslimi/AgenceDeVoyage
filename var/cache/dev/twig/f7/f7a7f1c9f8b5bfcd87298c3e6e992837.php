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

/* security/login.html.twig */
class __TwigTemplate_588ac79ff339976bebaa52bb3fac2a25 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->
";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<h1 class=\"h3 mb-3 font-weight-normal\" style=\"display: flex; justify-content: center;align-items:center;width: 100%\">\"Login\"</h1><!DOCTYPE html>

    <html>
<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

    <!--Fontawesome CDN-->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    <!--Custom styles-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\">
</head>

";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "<form method=\"post\">
    ";
        // line 26
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })()), "messageKey", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 27, $this->source); })()), "messageData", [], "any", false, false, false, 27), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 29
        echo "
    <div class=\"container\">
        <div class=\"d-flex justify-content-center h-100\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Login</h3>
                    <div class=\"d-flex justify-content-end social_icon\">
                        <span><i class=\"fab fa-facebook-square\"></i></span>
                        <span><i class=\"fab fa-google-plus-square\"></i></span>
                        <span><i class=\"fab fa-twitter-square\"></i></span>
                    </div>
                </div>

    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                <div class=\"card-body\">
                    <form>
                        <div class=\"input-group form-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                            </div>
                            <input type=\"text\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus>

                        </div>

                        <div class=\"input-group form-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
                            </div>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                        </div>



    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >

    ";
        // line 76
        echo "
    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
</form>
</html>
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
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 76,  159 => 63,  142 => 49,  120 => 29,  114 => 27,  112 => 26,  109 => 25,  90 => 24,  53 => 7,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<link href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\"></script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->
{% block title %}<h1 class=\"h3 mb-3 font-weight-normal\" style=\"display: flex; justify-content: center;align-items:center;width: 100%\">\"Login\"</h1><!DOCTYPE html>

    <html>
<head>
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css\" integrity=\"sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO\" crossorigin=\"anonymous\">

    <!--Fontawesome CDN-->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    <!--Custom styles-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"styles.css\">
</head>

{% block body %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <div class=\"container\">
        <div class=\"d-flex justify-content-center h-100\">
            <div class=\"card\">
                <div class=\"card-header\">
                    <h3>Login</h3>
                    <div class=\"d-flex justify-content-end social_icon\">
                        <span><i class=\"fab fa-facebook-square\"></i></span>
                        <span><i class=\"fab fa-google-plus-square\"></i></span>
                        <span><i class=\"fab fa-twitter-square\"></i></span>
                    </div>
                </div>

    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
                <div class=\"card-body\">
                    <form>
                        <div class=\"input-group form-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><i class=\"fas fa-user\"></i></span>
                            </div>
                            <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"username\" required autofocus>

                        </div>

                        <div class=\"input-group form-group\">
                            <div class=\"input-group-prepend\">
                                <span class=\"input-group-text\"><i class=\"fas fa-key\"></i></span>
                            </div>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                        </div>



    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >

    {#
        Uncomment this section and add a remember_me option below your firewall to activate remember me functionality.
        See https://symfony.com/doc/current/security/remember_me.html

        <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Remember me
            </label>
        </div>
    #}

    <button class=\"btn btn-lg btn-primary\" type=\"submit\">
        Sign in
    </button>
</form>
</html>
</div>
    </div>
    </div>
    </div>
{% endblock %}
{% endblock %}
", "security/login.html.twig", "C:\\Users\\MSI\\Desktop\\GitHub\\templates\\security\\login.html.twig");
    }
}
