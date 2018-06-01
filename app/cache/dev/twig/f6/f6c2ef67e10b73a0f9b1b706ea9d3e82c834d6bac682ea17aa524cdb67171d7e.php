<?php

/* MediaBundle::layout.html.twig */
class __TwigTemplate_67c5121f46e929629f4778b20efb4311892fb19b72a0c5ddb98e866263daa32d extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MediaBundle::layout.html.twig"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  69 => 17,  63 => 16,  55 => 19,  53 => 16,  42 => 8,  37 => 6,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
\t<title></title>
  <link href=\"{{asset('css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"css/box.css\")}}\">

\t<link rel=\"stylesheet\" href=\"{{asset(\"font-awesome/css/font-awesome.min.css\")}}\">
</head>
<body>
<script type=\"text/javascript\">
function sendToParent(file_path) {
    window.opener.InsertHTML(file_path);
}
</script>
{% block body %}
    
{% endblock %}
</body>
</html>", "MediaBundle::layout.html.twig", "/var/www/materialdesign/htdocs/src/MediaBundle/Resources/views/layout.html.twig");
    }
}
