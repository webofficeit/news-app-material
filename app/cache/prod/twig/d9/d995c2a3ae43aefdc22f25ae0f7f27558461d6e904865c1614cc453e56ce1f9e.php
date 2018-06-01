<?php

/* AppBundle:Categories:index.html.twig */
class __TwigTemplate_9c0f63eaeca069c263c83ed4fcdcb34fc77ddc3c85bb490ed1f61fc367cd7226 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Categories:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
<div class=\"container\">
        <div class=\"row\">
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_add");
        echo "\" title=\"\">
                    <div class=\"bg col-sm-4\" style=\"padding:10px;\">
                    <div class=\"card palette-Light-Blue bg\">
     
                            <div>
                                <div class=\"cw-current media\">
                                    <div class=\"cwc-info media-body\">
                                            <div class=\"cwci-temp\">New Category</div>
                                            <br>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "            <div class=\"bg col-sm-4\" style=\"padding:10px;\">
                <div class=\"card \"  style=\"background-color:#00b3a2\">
                    <ul class=\"actions a-alt\">
                            <li class=\"dropdown\">
                                <a href=\"\" data-toggle=\"dropdown\">
                                    <i class=\"zmdi zmdi-more-vert\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_up", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">Up</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_down", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">Down</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div>
                            <div class=\"cw-current media\">
                                <div class=\"cwc-info media-body\">
                                        <div class=\"cwci-temp\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "</div>
                                        <br>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Categories:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 56,  102 => 48,  91 => 40,  85 => 37,  79 => 34,  73 => 31,  62 => 22,  58 => 21,  40 => 6,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Categories:index.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Categories/index.html.twig");
    }
}
