<?php

/* MediaBundle::layout.html.twig */
class __TwigTemplate_3d1398098907933862e132a34f958f1d22a9ae248c957559e66fa2c1fe4ccb6e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title></title>
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/box.css"), "html", null, true);
        echo "\">

\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
</head>
<body>
<script type=\"text/javascript\">
function sendToParent(file_path) {
    window.opener.InsertHTML(file_path);
}
</script>
";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "</body>
</html>";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "    
";
    }

    public function getTemplateName()
    {
        return "MediaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  57 => 16,  52 => 19,  50 => 16,  39 => 8,  34 => 6,  30 => 5,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "MediaBundle::layout.html.twig", "/var/www/materialdesign/htdocs/src/MediaBundle/Resources/views/layout.html.twig");
    }
}
