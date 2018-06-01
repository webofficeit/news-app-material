<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c37fdcc3cb25fe5d2bc74b0fd68f0970dbffb140b3d7046a1f9e74be8c33a5ac extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>

<head>
  <title>Secu-transac</title>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

  <!-- Mobile support -->
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <!-- Material Design fonts -->
  <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

  <!-- Bootstrap -->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Bootstrap Material Design -->
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-material-design.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/ripples.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Dropdown.js -->
  <link href=\"//cdn.rawgit.com/FezVrasta/dropdown.js/master/jquery.dropdown.css\" rel=\"stylesheet\">

  <!-- Page style -->
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- jQuery -->
  <script src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>

</head>
<body>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 36
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 37
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
        <div>
            ";
        // line 44
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 46
        echo "        </div>
    </body>
</html>
";
    }

    // line 44
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 45
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 45,  114 => 44,  107 => 46,  105 => 44,  101 => 42,  95 => 41,  86 => 38,  81 => 37,  76 => 36,  72 => 35,  62 => 28,  53 => 22,  49 => 21,  43 => 18,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle::layout.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/layout.html.twig");
    }
}
