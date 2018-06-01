<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_34f665275923e1729484c49766a223622486cd4acd05334830ed74ef29686ef9 extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", array())) {
            // line 2
            echo "    at ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "class", array()) . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "type", array())) . twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "function", array()));
            echo "(";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatArgsAsText(twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "args", array()));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array(), "any", true, true) && twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "file", array());
            echo " line ";
            echo twig_get_attribute($this->env, $this->source, ($context["trace"] ?? null), "line", array());
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  37 => 6,  33 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:trace.txt.twig", "/var/www/materialdesign/htdocs/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.txt.twig");
    }
}
