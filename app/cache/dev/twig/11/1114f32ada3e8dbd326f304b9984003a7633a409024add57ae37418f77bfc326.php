<?php

/* AppBundle:Articles:add.html.twig */
class __TwigTemplate_d025e1abce95eaf4fc5b9ccfd53cb082663a0529b33d117a1f4aa364a8925542 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Articles:add.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Articles:add.html.twig"));

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
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "file", array()), 'errors');
        echo "
        <div class=\"card-header\">
            <h2>ADD NEW ARTICLE<small>
            </small></h2>
        </div>
        <div class=\"card-body card-padding\"> 
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "title", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "category", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "category", array()), 'widget', array("attr" => array("class" => "selectpicker bs-select-hidden")));
        echo "
\t                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "category", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "content", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7")));
        echo "
\t                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "content", array()), 'errors');
        echo "
                </div>


                <div class=\"checkbox\">
                        <label>
                        \t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "enabled", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Publish
                        </label>
                    </div>

                <div class=\"checkbox\">
                        <label>
                            ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "comment", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Allows comments
                        </label>
                    </div>
               \t<br>

 \t\t\t\t";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo " 
            
            <br>
            <br>
        </div>
    </div>
</div>
";
        // line 58
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Articles:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 58,  139 => 51,  129 => 44,  118 => 36,  109 => 30,  105 => 29,  101 => 28,  95 => 25,  91 => 24,  87 => 23,  81 => 20,  77 => 19,  73 => 18,  63 => 11,  57 => 8,  53 => 7,  48 => 5,  44 => 3,  38 => 2,  15 => 1,);
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
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t{{form_label(form.title,null,{label_attr:{\"class\":\"\"}})}}
\t                {{form_widget(form.title,{attr:{\"class\":\"form-control\"}})}}
\t                {{form_errors(form.title)}}
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t{{form_label(form.category,null,{label_attr:{\"class\":\"\"}})}}
\t                {{form_widget(form.category,{attr:{\"class\":\"selectpicker bs-select-hidden\"}})}}
\t                {{form_errors(form.category)}}
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t{{form_label(form.content,null,{label_attr:{\"class\":\"\"}})}}
\t                {{form_widget(form.content,{attr:{\"class\":\"form-control\",\"rows\":\"7\"}})}}
\t                {{form_errors(form.content)}}
                </div>


                <div class=\"checkbox\">
                        <label>
                        \t{{form_widget(form.enabled)}}
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
               \t<br>

 \t\t\t\t{{form_widget(form.save,{attr:{\"class\":\"btn btn-success btn-lg waves-effect pull-right\"}})}} 
            
            <br>
            <br>
        </div>
    </div>
</div>
{{ form_end(form) }}
</div>
{% endblock %}", "AppBundle:Articles:add.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Articles/add.html.twig");
    }
}
