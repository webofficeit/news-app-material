<?php

/* UserBundle:Resetting:reseted.html.twig */
class __TwigTemplate_ae548656ad09963d2ec5d4ac58e32efc0adfdf62bad3b3debd00275615c773a9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "UserBundle:Resetting:reseted.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class='pad'><p class='alert alert-success'>votre mot de passe a été modifié</p></div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reseted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:Resetting:reseted.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/Resetting/reseted.html.twig");
    }
}
