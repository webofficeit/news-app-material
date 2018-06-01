<?php

/* MediaBundle:Media:add.html.twig */
class __TwigTemplate_ca43b0968f169b313f8e81801f2618d697fdc8e96c94edd024c64062742a0039 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("MediaBundle::layout.html.twig", "MediaBundle:Media:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MediaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle:Media:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 3, $this->source); })()), "id", array()) != null)) {
            // line 4
            echo "\t\t<script type=\"text/javascript\">
\t\tsendToParent(\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 5, $this->source); })()), "link", array())), "media_article"), "html", null, true);
            echo "\");
\t\twindow.close();
\t\t</script>
\t";
        }
        // line 9
        echo "\t<div class=\"notif\" >
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_index", array("CKEditor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "langCode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "langCode"), "method"))), "html", null, true);
        echo "\" class=\"notif-close\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>Images list</a>
\t\t\t<span class=\"notif-title\">Add image</span>
\t\t</div>
\t\t";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
\t\t
\t\t<div class=\"notif-body clearfix\" dir=\"rtl\">
\t\t\t<div class=\"thumb img-thumbnail upload\" onclick=\"document.getElementById('form_file').click()\">
\t\t\t\t<img>
\t\t\t\t<div class=\"select\"> Click to add image to article <br>\t <i class=\"fa fa-camera fa-5x\" aria-hidden=\"true\"></i></div>
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "file", array()), 'widget', array("attr" => array("style" => "opacity:0;")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"errors-form\">
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "file", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<br>
\t\t\t<button class=\"btn btn-hiya\" style=\"width:300px;\" >Upload image<i class=\"fa fa-send\" aria-hidden=\"true\"></i></button>
\t\t\t";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MediaBundle:Media:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  82 => 23,  76 => 20,  67 => 14,  61 => 11,  57 => 9,  50 => 5,  47 => 4,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MediaBundle::layout.html.twig' %}
{% block body %}
\t{% if media.id !=null %}
\t\t<script type=\"text/javascript\">
\t\tsendToParent(\"{{asset(media.link)|imagine_filter('media_article')}}\");
\t\twindow.close();
\t\t</script>
\t{% endif %}
\t<div class=\"notif\" >
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"{{path(\"media_index\",{CKEditor:app.request.query.get(\"CKEditor\"),CKEditorFuncNum:app.request.query.get(\"CKEditorFuncNum\"),langCode:app.request.query.get(\"langCode\")})}}\" class=\"notif-close\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>Images list</a>
\t\t\t<span class=\"notif-title\">Add image</span>
\t\t</div>
\t\t{{ form_start(form)}}
\t\t
\t\t<div class=\"notif-body clearfix\" dir=\"rtl\">
\t\t\t<div class=\"thumb img-thumbnail upload\" onclick=\"document.getElementById('form_file').click()\">
\t\t\t\t<img>
\t\t\t\t<div class=\"select\"> Click to add image to article <br>\t <i class=\"fa fa-camera fa-5x\" aria-hidden=\"true\"></i></div>
\t\t\t\t{{form_widget(form.file,{\"attr\":{\"style\":\"opacity:0;\"}})}}
\t\t\t</div>
\t\t\t<div class=\"errors-form\">
\t\t\t\t{{form_errors(form.file)}}
\t\t\t</div>
\t\t\t<br>
\t\t\t<button class=\"btn btn-hiya\" style=\"width:300px;\" >Upload image<i class=\"fa fa-send\" aria-hidden=\"true\"></i></button>
\t\t\t{{form_end(form)}}
\t\t</div>
\t</div>
{% endblock %}", "MediaBundle:Media:add.html.twig", "/var/www/materialdesign/htdocs/src/MediaBundle/Resources/views/Media/add.html.twig");
    }
}
