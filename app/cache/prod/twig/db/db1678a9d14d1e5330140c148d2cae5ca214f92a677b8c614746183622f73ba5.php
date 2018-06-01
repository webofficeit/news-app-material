<?php

/* AppBundle:Support:index.html.twig */
class __TwigTemplate_11ecbfa2e927228c0e96314d5abbba1bc26d46b099a0316f4252f99c2b1ca17d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Support:index.html.twig", 1);
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
        echo "\t<div class=\"container\">
\t\t<div class=\"c-header\">
\t\t\t<h2>Support messages</h2>
\t\t</div>
\t\t<div class=\"card\">
\t\t\t<div class=\"action-header palette-Teal-400 bg clearfix\">
\t\t\t\t<div class=\"ah-label hidden-xs palette-White text\"></div>
\t\t\t\t<ul class=\"ah-actions actions a-alt\">
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-sort\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 17
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Sort by full name", "s.subject");
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Sort by Sending date", "s.created");
        echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 24
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, ($context["pagination"] ?? null), "Sort by Sending email", "s.email");
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
\t\t\t\t\t\t\t<i class=\"zmdi zmdi-more-vert\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"\">Refresh</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        // line 40
        $context["k"] = 0;
        // line 41
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["support"]) {
            // line 42
            echo "\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t<div class=\"list-group-item media\">
\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t";
            // line 45
            if ((($context["k"] ?? null) == 0)) {
                // line 46
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Light-Blue bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 47
($context["k"] ?? null) == 1)) {
                // line 48
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Purple-300 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 49
($context["k"] ?? null) == 2)) {
                // line 50
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Green-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 51
($context["k"] ?? null) == 3)) {
                // line 52
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Red-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-more-vert\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_support_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["support"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_support_view", array("id" => twig_get_attribute($this->env, $this->source, $context["support"], "id", array()))), "html", null, true);
            echo "\">View</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"lgi-heading\"><a  href=\"mailto:";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "subject", array()), "html", null, true);
            echo "?subject=feedback\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "email", array()), "html", null, true);
            echo " :  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "subject", array()), "html", null, true);
            echo " </a></div>
\t\t\t\t\t\t\t<small class=\"lgi-text\">";
            // line 74
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_convert_encoding(strip_tags(twig_get_attribute($this->env, $this->source, $context["support"], "message", array())), "UTF-8", "HTML-ENTITIES"), 300, true), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t<ul class=\"lgi-attrs\">
\t\t\t\t\t\t\t\t<li>Sending Date:";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "created", array()), "d/m/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "created", array()), "H:i"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 81
            if ((($context["k"] ?? null) == 3)) {
                // line 82
                echo "\t\t\t\t\t";
                $context["k"] = 0;
                // line 83
                echo "\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t";
                $context["k"] = (($context["k"] ?? null) + 1);
                // line 85
                echo "\t\t\t\t";
            }
            // line 86
            echo "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 87
            echo "\t\t\t\t<p style=\"text-align:center\">
\t\t\t\t\t<img style=\"padding:50px;\" src=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['support'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "\t\t\t<div class=\" pull-right\">
\t\t\t\t";
        // line 92
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Support:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 92,  206 => 91,  197 => 88,  194 => 87,  189 => 86,  186 => 85,  183 => 84,  180 => 83,  177 => 82,  175 => 81,  165 => 76,  160 => 74,  152 => 73,  142 => 66,  136 => 63,  125 => 54,  119 => 52,  117 => 51,  112 => 50,  110 => 49,  105 => 48,  103 => 47,  98 => 46,  96 => 45,  91 => 42,  85 => 41,  83 => 40,  64 => 24,  57 => 20,  51 => 17,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Support:index.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Support/index.html.twig");
    }
}
