<?php

/* MediaBundle:Media:index.html.twig */
class __TwigTemplate_e4da67a31abe0ff671316f5b2d088a358903174c14f0cd73d83a9793486bdbfb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<div class=\"notif\">
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media_add", array("CKEditor" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "CKEditor"), "method"), "CKEditorFuncNum" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "CKEditorFuncNum"), "method"), "langCode" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "langCode"), "method"))), "html", null, true);
        echo "\" class=\"notif-close\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>Add image</a>
\t\t\t<span class=\"notif-title\">Images List</span>
\t\t</div>
\t\t<div class=\"notif-body clearfix\">
\t\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
\t\t</div>
\t</div>

";
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
        return array (  81 => 20,  77 => 18,  70 => 16,  62 => 13,  58 => 12,  54 => 11,  51 => 10,  46 => 9,  39 => 5,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MediaBundle:Media:index.html.twig", "/var/www/materialdesign/htdocs/src/MediaBundle/Resources/views/Media/index.html.twig");
    }
}
