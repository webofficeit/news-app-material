<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_9b1b987cbaba53fc0dddce4a2542cc65ed1dffb232fc35df398fa9f681d6196b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"pad\">
\t<p class=\"alert alert-primary\">
\t";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.check_email", array("%email%" => ($context["email"] ?? null)), "FOSUserBundle"), "html", null, true);
        echo "
\t</p>
</div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:checkEmail.html.twig", "/var/www/materialdesign/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/checkEmail.html.twig");
    }
}
