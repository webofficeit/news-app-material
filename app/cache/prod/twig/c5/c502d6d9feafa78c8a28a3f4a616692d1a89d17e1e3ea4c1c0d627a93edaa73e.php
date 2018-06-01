<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_fad7010718c76a23decd4c153e7426a4a24e049eb29833b40aa8986491144027 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 1);
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
    <div class=\"col-md-offset-1 col-sm-8\">
    <div class=\"card\">
        <div class=\"card-header\">
            <h2>Chnage your password<small>
            </small></h2>
        </div>
        <div class=\"card-body card-padding\"> 
            ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "current_password", array()), 'label');
        echo " 
\t\t\t";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "current_password", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "current_password", array()), 'errors');
        echo "
\t\t</div>
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "first", array()), 'label');
        echo "
\t\t\t";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "first", array()), 'errors');
        echo " 
\t\t</div>
\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "second", array()), 'label');
        echo " 
\t\t\t";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "second", array()), 'errors');
        echo "
\t\t</div>
\t\t<button  class=\"btn btn-raised btn-primary pull-right\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Change password"), "html", null, true);
        echo "</button> 
\t\t";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
             
            <br>
            <br>
        </div>
    </div>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  92 => 28,  87 => 26,  83 => 25,  79 => 24,  73 => 21,  69 => 20,  65 => 19,  59 => 16,  55 => 15,  51 => 14,  46 => 12,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/ChangePassword/changePassword_content.html.twig");
    }
}
