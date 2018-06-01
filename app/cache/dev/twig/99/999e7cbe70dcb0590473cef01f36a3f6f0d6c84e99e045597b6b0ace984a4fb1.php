<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_afb25941634c2b98242f931b3a83273d56497052db9f3f4ede102519670789af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 1
        echo "<div class=\"pad col-md-offset-4 col-md-4\">
\t";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
\t        <div class=\"form-group label-floating is-empty\">
                ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), "new", array()), "first", array()), 'label');
        echo "
                ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), "new", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"error-form\">
                ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "new", array()), "first", array()), 'errors');
        echo "
                </span>
            </div>
\t\t     <div class=\"form-group label-floating is-empty\">
                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "new", array()), "second", array()), 'label');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "new", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"error-form\">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "new", array()), "second", array()), 'errors');
        echo "
                </span>
            </div> 
\t<input type=\"submit\" class=\"btn btn-primary  btn-raised col-md-12\" name=\"\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  65 => 17,  59 => 14,  54 => 12,  50 => 11,  43 => 7,  38 => 5,  34 => 4,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"pad col-md-offset-4 col-md-4\">
\t{{form_start(form)}}
\t        <div class=\"form-group label-floating is-empty\">
                {{ form_label(form.new.first) }}
                {{ form_widget(form.new.first,{\"attr\":{\"class\":\"form-control\"}}) }}
                <span class=\"error-form\">
                {{ form_errors(form.new.first) }}
                </span>
            </div>
\t\t     <div class=\"form-group label-floating is-empty\">
                {{ form_label(form.new.second) }}
                {{ form_widget(form.new.second,{\"attr\":{\"class\":\"form-control\"}}) }}
                <span class=\"error-form\">
                {{ form_errors(form.new.second) }}
                </span>
            </div> 
\t<input type=\"submit\" class=\"btn btn-primary  btn-raised col-md-12\" name=\"\" value=\"{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}\">
\t{{form_end(form)}}
</div>
", "FOSUserBundle:Resetting:reset_content.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
