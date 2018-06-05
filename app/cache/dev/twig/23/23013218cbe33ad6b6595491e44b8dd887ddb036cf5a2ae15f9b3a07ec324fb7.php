<?php

/* AppBundle:Subcription:restrict.html.twig */
class __TwigTemplate_015022a948705621230c2255194c7116e203ac2d68140a50ff6b6da9895f0881 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Subcription:restrict.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Subcription:restrict.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"card  col-sm-9\">
        <div class=\"card-header\">
            <h1>Already a user have been liked to this account. So it can't be deleted</h1>
        </div>
        <div class=\"card-body card-padding\">
\t\t
        <div class=\"form-group\">
            <div class=\"col-md-3 col-md-offset-9\">
              <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subcription_index");
        echo "\" class=\"btn btn-raised btn-lg  btn-warning\">ok</a>
              
            </div>
        </div>
        <br>
        <br>
\t\t
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Subcription:restrict.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}
<div class=\"container\">
    <div class=\"card  col-sm-9\">
        <div class=\"card-header\">
            <h1>Already a user have been liked to this account. So it can't be deleted</h1>
        </div>
        <div class=\"card-body card-padding\">
\t\t
        <div class=\"form-group\">
            <div class=\"col-md-3 col-md-offset-9\">
              <a href=\"{{path(\"app_subcription_index\")}}\" class=\"btn btn-raised btn-lg  btn-warning\">ok</a>
              
            </div>
        </div>
        <br>
        <br>
\t\t
\t</div>
</div>
{% endblock %}
", "AppBundle:Subcription:restrict.html.twig", "/var/www/news-app-material/src/AppBundle/Resources/views/Subcription/restrict.html.twig");
    }
}
