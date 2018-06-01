<?php

/* MediaBundle:Media:index.html.twig */
class __TwigTemplate_fc9165d234da7ff675aab34d1ee26fe59b014d54835c1a884ec47697af66cb34 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("MediaBundle::layout.html.twig", "MediaBundle:Media:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle:Media:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"notif\">
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_add", array("CKEditor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "langCode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "langCode"), "method"))), "html", null, true);
        echo "\" class=\"notif-close\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>Add image</a>
\t\t\t<span class=\"notif-title\">Images List</span>
\t\t</div>
\t\t<div class=\"notif-body clearfix\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 10
            echo "\t\t\t\t<div class=\"thumb img-thumbnail\">
\t\t\t\t\t<img  src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, $context["media"], "link", array()), "media_thumb"), "html", null, true);
            echo "\">
\t\t\t\t\t<div>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "titre", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"select\"  onclick='sendToParent(\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, $context["media"], "link", array()), "media_article"), "html", null, true);
            echo "\");window.close();'> Insert Image <i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div>
\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "\t\t\tImages list is empty \"Add new image\" to insert image
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</div>
\t\t<div>
\t\t\t";
        // line 20
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 20, $this->source); })()));
        echo "
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MediaBundle:Media:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  86 => 18,  79 => 16,  71 => 13,  67 => 12,  63 => 11,  60 => 10,  55 => 9,  48 => 5,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MediaBundle::layout.html.twig' %}
{% block body %}
\t<div class=\"notif\">
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"{{path(\"media_add\",{CKEditor:app.request.query.get(\"CKEditor\"),CKEditorFuncNum:app.request.query.get(\"CKEditorFuncNum\"),langCode:app.request.query.get(\"langCode\")})}}\" class=\"notif-close\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>Add image</a>
\t\t\t<span class=\"notif-title\">Images List</span>
\t\t</div>
\t\t<div class=\"notif-body clearfix\">
\t\t\t{% for media in pagination %}
\t\t\t\t<div class=\"thumb img-thumbnail\">
\t\t\t\t\t<img  src=\"{{media.link|imagine_filter('media_thumb')}}\">
\t\t\t\t\t<div>{{media.titre}}</div>
\t\t\t\t\t<div class=\"select\"  onclick='sendToParent(\"{{media.link|imagine_filter('media_article')}}\");window.close();'> Insert Image <i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\tImages list is empty \"Add new image\" to insert image
\t\t\t{% endfor %}
\t\t</div>
\t\t<div>
\t\t\t{{ knp_pagination_render(pagination) }}
\t\t</div>
\t</div>

{% endblock %}", "MediaBundle:Media:index.html.twig", "/var/www/materialdesign/htdocs/src/MediaBundle/Resources/views/Media/index.html.twig");
    }
}
