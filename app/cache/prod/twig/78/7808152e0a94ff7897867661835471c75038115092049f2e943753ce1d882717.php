<?php

/* @App/Comments/api_by.html.php */
class __TwigTemplate_0d918f7e7dc08262eba13bd3d93c54167fee7169c6b4a22128fddc95f19de4ca extends Twig_Template
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
        echo "<?php 
\$list=array();
foreach (\$comments as \$key => \$comment) {
\t\$a[\"id\"]=\$comment->getId();
\t\$a[\"author\"]=\$comment->getUser()->getName();
\t\$a[\"content\"]=\$comment->getContent();
\t\$a[\"content\"]=\$comment->getContent();
\t\$a[\"enabled\"]=\$comment->getEnabled();
\t\$a[\"created\"]=\$view['time']->diff(\$comment->getCreated());
\t\$list[]=\$a;
}
echo json_encode(\$list, JSON_UNESCAPED_UNICODE);
?>";
    }

    public function getTemplateName()
    {
        return "@App/Comments/api_by.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Comments/api_by.html.php", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Comments/api_by.html.php");
    }
}
