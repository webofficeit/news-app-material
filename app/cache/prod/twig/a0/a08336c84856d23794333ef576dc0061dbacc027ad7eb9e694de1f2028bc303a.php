<?php

/* AppBundle:Articles:edit.html.twig */
class __TwigTemplate_a8cd3e0e6b08501093bd6804a29cecba1073c60c08d798864687446b07035cda extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Articles:edit.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"container\">
    ";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    <div class=\"col-md-offset-1 col-sm-8\">
    <img id=\"img-preview\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "value", array()), "media", array()), "link", array()), "product_img")), "html", null, true);
        echo "\" />
     ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), 'widget', array("attr" => array("class" => "input-file img-selector")));
        echo "
     
     <a href=\"#\" class=\"btn btn-info btn-lg waves-effect btn-select\"> <i class=\"zmdi zmdi-attachment zmdi-hc-fw\"></i> Select image</a>
    <div class=\"card\">
    ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), 'errors');
        echo "
        <div class=\"card-header\">
            <h2>EDIT : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "value", array()), "title", array()), "html", null, true);
        echo "<small>
            </small></h2>
        </div>
        <div class=\"card-body card-padding\">
\t\t\t                    
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'widget', array("attr" => array("class" => "selectpicker bs-select-hidden")));
        echo "
\t                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7")));
        echo "
\t                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", array()), 'errors');
        echo "
                </div>

                 

                <div class=\"checkbox\">
                        <label>
                        \t";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Publish
                        </label>
                    </div>
               \t<div class=\"checkbox\">
                        <label>
                            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Allows comments
                        </label>
                    </div>
                <br>
 \t\t\t\t";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo " 
            
            <br>
            <br>
        </div>
    </div>
    </div>
    ";
        // line 59
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Articles:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 59,  134 => 52,  125 => 46,  115 => 39,  105 => 32,  101 => 31,  97 => 30,  91 => 27,  87 => 26,  83 => 25,  77 => 22,  73 => 21,  69 => 20,  60 => 14,  55 => 12,  48 => 8,  44 => 7,  39 => 5,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Articles:edit.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Articles/edit.html.twig");
    }
}
