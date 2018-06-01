<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_a2c5333fba02772b6a514d9fc5c3747a78c1eb80c73d4cb1936453da84e11239 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)), "FOSUserBundle");
        echo "
";
    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)), "FOSUserBundle");
        echo "
";
    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  46 => 8,  43 => 6,  37 => 3,  34 => 1,  30 => 11,  28 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/materialdesign/htdocs/vendor/friendsofsymfony/user-bundle/FOS/UserBundle/Resources/views/Resetting/email.txt.twig");
    }
}
