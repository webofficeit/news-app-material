<?php

/* AppBundle:Support:view.html.twig */
class __TwigTemplate_8751d170bc05eb06187ff2841fe156f81a0fd640ceeba5e36648b7dbb63e9f13 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Support:view.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Support:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"card\" id=\"todo-lists\">
    <div class=\"card-header ch-dark palette-Teal-600 bg\">
        <h2>Full name : ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new Twig_Error_Runtime('Variable "support" does not exist.', 5, $this->source); })()), "subject", array()), "html", null, true);
        echo "
        <small>E-mail : ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new Twig_Error_Runtime('Variable "support" does not exist.', 6, $this->source); })()), "email", array()), "html", null, true);
        echo "</small>
        </h2>

        <ul class=\"actions a-alt\">
            <li class=\"dropdown\">
                <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"zmdi zmdi-more-vert\"></i>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li>
                        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_support_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new Twig_Error_Runtime('Variable "support" does not exist.', 17, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Delete</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_support_view", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new Twig_Error_Runtime('Variable "support" does not exist.', 20, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">View</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class=\"card-body\">
        <div class=\"list-group lg-alt\">
            <div class=\"list-group-item-header palette-Purple text\">Message</div>
            <div style=\"padding:40px; text-align: justify;padding:40px;\">
            \t";
        // line 31
        echo twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new Twig_Error_Runtime('Variable "support" does not exist.', 31, $this->source); })()), "message", array());
        echo "
            \t<br>
            \t<br>
            \t<br>
\t            <ul class=\"lgi-attrs pull-right\">
\t                <li>Sending Date:";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new Twig_Error_Runtime('Variable "support" does not exist.', 36, $this->source); })()), "created", array()), "d/m/Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new Twig_Error_Runtime('Variable "support" does not exist.', 36, $this->source); })()), "created", array()), "H:i"), "html", null, true);
        echo "</li>
\t            </ul>
            </div>

        </div>
        <a href=\"mailto:";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["support"]) || array_key_exists("support", $context) ? $context["support"] : (function () { throw new Twig_Error_Runtime('Variable "support" does not exist.', 41, $this->source); })()), "email", array()), "html", null, true);
        echo "?subject=feedback\" class=\"btn palette-Blue-300 bg btn-float waves-effect waves-circle waves-float\"><i class=\"zmdi zmdi-mail-reply\"></i></a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Support:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 41,  94 => 36,  86 => 31,  72 => 20,  66 => 17,  52 => 6,  48 => 5,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body%}
<div class=\"card\" id=\"todo-lists\">
    <div class=\"card-header ch-dark palette-Teal-600 bg\">
        <h2>Full name : {{support.subject}}
        <small>E-mail : {{support.email}}</small>
        </h2>

        <ul class=\"actions a-alt\">
            <li class=\"dropdown\">
                <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"zmdi zmdi-more-vert\"></i>
                </a>

                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li>
                        <a href=\"{{path(\"app_support_delete\",{\"id\":support.id})}}\">Delete</a>
                    </li>
                    <li>
                        <a href=\"{{path(\"app_support_view\",{\"id\":support.id})}}\">View</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <div class=\"card-body\">
        <div class=\"list-group lg-alt\">
            <div class=\"list-group-item-header palette-Purple text\">Message</div>
            <div style=\"padding:40px; text-align: justify;padding:40px;\">
            \t{{ support.message | raw }}
            \t<br>
            \t<br>
            \t<br>
\t            <ul class=\"lgi-attrs pull-right\">
\t                <li>Sending Date:{{support.created|date(\"d/m/Y\")}} at {{support.created|date(\"H:i\")}}</li>
\t            </ul>
            </div>

        </div>
        <a href=\"mailto:{{support.email}}?subject=feedback\" class=\"btn palette-Blue-300 bg btn-float waves-effect waves-circle waves-float\"><i class=\"zmdi zmdi-mail-reply\"></i></a>
    </div>
</div>
{% endblock%}", "AppBundle:Support:view.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Support/view.html.twig");
    }
}
