<?php

/* MediaBundle:Media:add.html.twig */
class __TwigTemplate_7d19f000e8c8b3ec54736edbca3cb84c4f738efbf7e2cfc063efb6089d027eb0 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "id", array()) != null)) {
            // line 4
            echo "\t\t<script type=\"text/javascript\">
\t\tsendToParent(\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "link", array())), "media_article"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_index", array("CKEditor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "langCode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "langCode"), "method"))), "html", null, true);
        echo "\" class=\"notif-close\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>Images list</a>
\t\t\t<span class=\"notif-title\">Add image</span>
\t\t</div>
\t\t";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t
\t\t<div class=\"notif-body clearfix\" dir=\"rtl\">
\t\t\t<div class=\"thumb img-thumbnail upload\" onclick=\"document.getElementById('form_file').click()\">
\t\t\t\t<img>
\t\t\t\t<div class=\"select\"> Click to add image to article <br>\t <i class=\"fa fa-camera fa-5x\" aria-hidden=\"true\"></i></div>
\t\t\t\t";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), 'widget', array("attr" => array("style" => "opacity:0;")));
        echo "
\t\t\t</div>
\t\t\t<div class=\"errors-form\">
\t\t\t\t";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), 'errors');
        echo "
\t\t\t</div>
\t\t\t<br>
\t\t\t<button class=\"btn btn-hiya\" style=\"width:300px;\" >Upload image<i class=\"fa fa-send\" aria-hidden=\"true\"></i></button>
\t\t\t";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t</div>
\t</div>
";
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
        return array (  80 => 27,  73 => 23,  67 => 20,  58 => 14,  52 => 11,  48 => 9,  41 => 5,  38 => 4,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MediaBundle:Media:add.html.twig", "/var/www/materialdesign/htdocs/src/MediaBundle/Resources/views/Media/add.html.twig");
    }
}
