<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_5fdd1e39a8198501ef21fff1d3817ce4e903fc80aab6d6682e73658d33abb88e extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/choice_options.html.php", "/var/www/materialdesign/htdocs/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
