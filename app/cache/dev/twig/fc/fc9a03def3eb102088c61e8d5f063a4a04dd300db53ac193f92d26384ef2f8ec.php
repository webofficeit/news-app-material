<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_11fcbcc6a17393bf55a8924d1ead3b85144eb371fc3902a43c53ed87dd4d4d2e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container\">
    <div class=\"col-md-offset-1 col-sm-8\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h2>Chnage your password<small>
            </small></h2>
        </div>
        <div class=\"card-body card-padding\"> 
            ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "current_password", array()), 'label');
        echo " 
\t\t\t";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "current_password", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "new", array()), "first", array()), 'label');
        echo "
\t\t\t";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "new", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "new", array()), "first", array()), 'errors');
        echo " 
\t\t</div>
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "new", array()), "second", array()), 'label');
        echo " 
\t\t\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "new", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "new", array()), "second", array()), 'errors');
        echo "
\t\t</div>
\t\t<button  class=\"btn btn-raised btn-primary pull-right\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change password"), "html", null, true);
        echo "</button> 
\t\t";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
             
            <br>
            <br>
        </div>
    </div>
</div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  101 => 28,  96 => 26,  92 => 25,  88 => 24,  82 => 21,  78 => 20,  74 => 19,  68 => 16,  64 => 15,  60 => 14,  55 => 12,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}

<div class=\"container\">
    <div class=\"col-md-offset-1 col-sm-8\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h2>Chnage your password<small>
            </small></h2>
        </div>
        <div class=\"card-body card-padding\"> 
            {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t{{form_label(form.current_password)}} 
\t\t\t{{ form_widget(form.current_password,{attr:{\"class\":\"form-control\"}})}}
\t\t\t{{ form_errors(form.current_password)}}
\t\t</div>
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t{{form_label(form.new.first)}}
\t\t\t{{ form_widget(form.new.first,{attr:{\"class\":\"form-control\"}})}}
\t\t\t{{ form_errors(form.new.first)}} 
\t\t</div>
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t{{form_label(form.new.second)}} 
\t\t\t{{ form_widget(form.new.second,{attr:{\"class\":\"form-control\"}})}}
\t\t\t{{ form_errors(form.new.second)}}
\t\t</div>
\t\t<button  class=\"btn btn-raised btn-primary pull-right\">{{ 'Change password'|trans }}</button> 
\t\t{{ form_end(form) }}
             
            <br>
            <br>
        </div>
    </div>
</div>

</div>
{% endblock %}", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/ChangePassword/changePassword_content.html.twig");
    }
}
