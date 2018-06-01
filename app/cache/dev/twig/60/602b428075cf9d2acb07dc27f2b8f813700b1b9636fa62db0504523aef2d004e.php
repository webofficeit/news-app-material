<?php

/* AppBundle:Videos:add.html.twig */
class __TwigTemplate_43d9c3e06a32546cf22e29e16b3cb92e0d883793ffb985f968f0c9628a9304fe extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Videos:add.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Videos:add.html.twig"));

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
        ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
        <div class=\"col-md-offset-1 col-sm-8\">
            <img id=\"img-preview\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/image.png"), "product_img"), "html", null, true);
        echo "\" />
            ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "file", array()), 'widget', array("attr" => array("class" => "input-file img-selector")));
        echo "
            
            <a href=\"#\" class=\"btn btn-info btn-lg waves-effect btn-select\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</a>
            <div class=\"card\">
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "file", array()), 'errors');
        echo "
                <div class=\"card-header\">
                    <h2>ADD NEW ARTICLE<small>
                    </small></h2>
                </div>
                <div class=\"card-body card-padding\">
                    
                    <div class=\"form-group fg-line\">
                        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "title", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group fg-line\">
                        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "video", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "video", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), "video", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group fg-line\">
                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "category", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "category", array()), 'widget', array("attr" => array("class" => "selectpicker bs-select-hidden")));
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "category", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group fg-line\">
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "content", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7")));
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "content", array()), 'errors');
        echo "
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "enabled", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Publish
                        </label>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "comment", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Allows comments
                        </label>
                    </div>
                    <br>
                    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo "
                    
                    <br>
                    <br>
                </div>
            </div>
            ";
        // line 60
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), 'form_end');
        echo "
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Videos:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 60,  151 => 54,  142 => 48,  132 => 41,  125 => 37,  121 => 36,  117 => 35,  111 => 32,  107 => 31,  103 => 30,  97 => 27,  93 => 26,  89 => 25,  83 => 22,  79 => 21,  75 => 20,  64 => 12,  57 => 8,  53 => 7,  48 => 5,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}

    <div class=\"container\">
        {{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}
        <div class=\"col-md-offset-1 col-sm-8\">
            <img id=\"img-preview\" src=\"{{asset(\"img/image.png\")|imagine_filter('product_img')}}\" />
            {{form_widget(form.file,{\"attr\":{\"class\":\"input-file img-selector\"}})}}
            
            <a href=\"#\" class=\"btn btn-info btn-lg waves-effect btn-select\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</a>
            <div class=\"card\">
                {{form_errors(form.file)}}
                <div class=\"card-header\">
                    <h2>ADD NEW ARTICLE<small>
                    </small></h2>
                </div>
                <div class=\"card-body card-padding\">
                    
                    <div class=\"form-group fg-line\">
                        {{form_label(form.title,null,{label_attr:{\"class\":\"\"}})}}
                        {{form_widget(form.title,{attr:{\"class\":\"form-control\"}})}}
                        {{form_errors(form.title)}}
                    </div>
                    <div class=\"form-group fg-line\">
                        {{form_label(form.video,null,{label_attr:{\"class\":\"\"}})}}
                        {{form_widget(form.video,{attr:{\"class\":\"form-control\"}})}}
                        {{form_errors(form.video)}}
                    </div>
                    <div class=\"form-group fg-line\">
                        {{form_label(form.category,null,{label_attr:{\"class\":\"\"}})}}
                        {{form_widget(form.category,{attr:{\"class\":\"selectpicker bs-select-hidden\"}})}}
                        {{form_errors(form.category)}}
                    </div>
                    <div class=\"form-group fg-line\">
                        {{form_label(form.content,null,{label_attr:{\"class\":\"\"}})}}
                        {{form_widget(form.content,{attr:{\"class\":\"form-control\",\"rows\":\"7\"}})}}
                        {{form_errors(form.content)}}
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            {{form_widget(form.enabled)}}
                            <i class=\"input-helper\"></i>
                            Publish
                        </label>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            {{form_widget(form.comment)}}
                            <i class=\"input-helper\"></i>
                            Allows comments
                        </label>
                    </div>
                    <br>
                    {{form_widget(form.save,{attr:{\"class\":\"btn btn-success btn-lg waves-effect pull-right\"}})}}
                    
                    <br>
                    <br>
                </div>
            </div>
            {{ form_end(form) }}
        </div>
    {% endblock %}", "AppBundle:Videos:add.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Videos/add.html.twig");
    }
}
