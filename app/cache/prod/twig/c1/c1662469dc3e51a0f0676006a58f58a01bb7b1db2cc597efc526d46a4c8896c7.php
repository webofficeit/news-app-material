<?php

/* AppBundle:Categories:edit.html.twig */
class __TwigTemplate_fc183b5371456633f39c80e34818aa6f1b23a0fc2e1f25671803bde3398879b9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Categories:edit.html.twig", 1);
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
    <div class=\"card col-md-offset-1 col-sm-8\">
        <div class=\"card-header\">
            <h1> Edit : ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "value", array()), "title", array()), "html", null, true);
        echo "  <small>
            </small></h1>
        </div>
        <div class=\"card-body card-padding\">
\t\t\t";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "                               
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
                  ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
                  ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                  ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'errors');
        echo "
                </div>
               \t<br>
 \t\t\t\t       ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo " 
            ";
        // line 24
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            <br>
            <br>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Categories:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  81 => 23,  75 => 20,  71 => 19,  67 => 18,  61 => 15,  57 => 14,  53 => 13,  48 => 11,  41 => 7,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Categories:edit.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Categories/edit.html.twig");
    }
}
