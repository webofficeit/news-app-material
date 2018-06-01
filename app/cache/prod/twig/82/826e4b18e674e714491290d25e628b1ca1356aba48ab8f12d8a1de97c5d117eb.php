<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_13576f7a08129c8ec39c3accfcee3044d5d86ebbab39734dbe219e786b4e2941 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"pad col-md-offset-4 col-md-4\">
\t";
        // line 2
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t        <div class=\"form-group label-floating is-empty\">
                ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "first", array()), 'label');
        echo "
                ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"error-form\">
                ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "first", array()), 'errors');
        echo "
                </span>
            </div>
\t\t     <div class=\"form-group label-floating is-empty\">
                ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "second", array()), 'label');
        echo "
                ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                <span class=\"error-form\">
                ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "new", array()), "second", array()), 'errors');
        echo "
                </span>
            </div> 
\t<input type=\"submit\" class=\"btn btn-primary  btn-raised col-md-12\" name=\"\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 18,  62 => 17,  56 => 14,  51 => 12,  47 => 11,  40 => 7,  35 => 5,  31 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:reset_content.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/Resetting/reset_content.html.twig");
    }
}
