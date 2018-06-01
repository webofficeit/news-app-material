<?php

/* AppBundle:Videos:add.html.twig */
class __TwigTemplate_e8ace3ff1baa086dd3a23ae5b3dfa7bbb3ae6cb01baa8e8665450a42a36a04d5 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/image.png"), "product_img"), "html", null, true);
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
                    <h2>ADD NEW ARTICLE<small>
                    </small></h2>
                </div>
                <div class=\"card-body card-padding\">
                    
                    <div class=\"form-group fg-line\">
                        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group fg-line\">
                        ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "video", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "video", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "video", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group fg-line\">
                        ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                        ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'widget', array("attr" => array("class" => "selectpicker bs-select-hidden")));
        echo "
                        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group fg-line\">
                        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "7")));
        echo "
                        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", array()), 'errors');
        echo "
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Publish
                        </label>
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Allows comments
                        </label>
                    </div>
                    <br>
                    ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo "
                    
                    <br>
                    <br>
                </div>
            </div>
            ";
        // line 60
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
    ";
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
        return array (  151 => 60,  142 => 54,  133 => 48,  123 => 41,  116 => 37,  112 => 36,  108 => 35,  102 => 32,  98 => 31,  94 => 30,  88 => 27,  84 => 26,  80 => 25,  74 => 22,  70 => 21,  66 => 20,  55 => 12,  48 => 8,  44 => 7,  39 => 5,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Videos:add.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Videos/add.html.twig");
    }
}
