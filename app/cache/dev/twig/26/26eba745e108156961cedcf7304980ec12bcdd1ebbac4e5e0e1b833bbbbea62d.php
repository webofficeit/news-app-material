<?php

/* MediaBundle:Media:delete.html.twig */
class __TwigTemplate_79327a064c6ff6d3af87d540cf4167be545fb43d59eb855af6545e4029d4fc7c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("MediaBundle::layout.html.twig", "MediaBundle:Media:delete.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle:Media:delete.html.twig"));

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
\t\t\t<span class=\"notif-close\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>  اظافة صورة جديدية</span>
\t\t\t<span class=\"notif-title\">قاءمة الصورة الخاصة بك</span>
\t\t</div>
\t\t<div class=\"notif-body clearfix\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new Twig_Error_Runtime('Variable "medias" does not exist.', 9, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 10
            echo "\t\t\t\t<div class=\"thumb img-thumbnail \">
\t\t\t\t\t<img  src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, $context["media"], "link", array()), "media_thumb"), "html", null, true);
            echo "\">
\t\t\t\t\t<div>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "titre", array()), "html", null, true);
            echo "</div>
\t\t\t\t\t<div class=\"select\"> اظافة الصورة  للمقال <i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div>
\t\t\t\t</div>
\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "\t\t\tلا توجد لذيك اي صورة حاليا اظغطي على زر \"اظاف صورة\" اعلاه لاظافة صور جديدة
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "MediaBundle:Media:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  73 => 16,  64 => 12,  60 => 11,  57 => 10,  52 => 9,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MediaBundle::layout.html.twig' %}
{% block body %}
\t<div class=\"notif\">
\t\t<div class=\"notif-head\">
\t\t\t<span class=\"notif-close\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>  اظافة صورة جديدية</span>
\t\t\t<span class=\"notif-title\">قاءمة الصورة الخاصة بك</span>
\t\t</div>
\t\t<div class=\"notif-body clearfix\">
\t\t\t{% for media in medias %}
\t\t\t\t<div class=\"thumb img-thumbnail \">
\t\t\t\t\t<img  src=\"{{media.link|imagine_filter('media_thumb')}}\">
\t\t\t\t\t<div>{{media.titre}}</div>
\t\t\t\t\t<div class=\"select\"> اظافة الصورة  للمقال <i class=\"fa fa-plus\" aria-hidden=\"true\"></i></div>
\t\t\t\t</div>
\t\t\t{% else %}
\t\t\tلا توجد لذيك اي صورة حاليا اظغطي على زر \"اظاف صورة\" اعلاه لاظافة صور جديدة
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}", "MediaBundle:Media:delete.html.twig", "/var/www/materialdesign/htdocs/src/MediaBundle/Resources/views/Media/delete.html.twig");
    }
}
