<?php

/* AppBundle:Support:index.html.twig */
class __TwigTemplate_c49a32cfb3d6a3349a982642194ef96dbf65dd6898029735ddb22d344400dd97 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Support:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 17, $this->source); })()), "Sort by full name", "s.subject");
        echo "
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 20
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 20, $this->source); })()), "Sort by Sending date", "s.created");
        echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 24
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 24, $this->source); })()), "Sort by Sending email", "s.email");
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
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 41, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["support"]) {
            // line 42
            echo "\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t<div class=\"list-group-item media\">
\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t";
            // line 45
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 45, $this->source); })()) == 0)) {
                // line 46
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Light-Blue bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 47
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 47, $this->source); })()) == 1)) {
                // line 48
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Purple-300 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 49
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 49, $this->source); })()) == 2)) {
                // line 50
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Green-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, $context["support"], "email", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 51
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 51, $this->source); })()) == 3)) {
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
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 81, $this->source); })()) == 3)) {
                // line 82
                echo "\t\t\t\t\t";
                $context["k"] = 0;
                // line 83
                echo "\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t";
                $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 84, $this->source); })()) + 1);
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 92, $this->source); })()));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  218 => 92,  215 => 91,  206 => 88,  203 => 87,  198 => 86,  195 => 85,  192 => 84,  189 => 83,  186 => 82,  184 => 81,  174 => 76,  169 => 74,  161 => 73,  151 => 66,  145 => 63,  134 => 54,  128 => 52,  126 => 51,  121 => 50,  119 => 49,  114 => 48,  112 => 47,  107 => 46,  105 => 45,  100 => 42,  94 => 41,  92 => 40,  73 => 24,  66 => 20,  60 => 17,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body%}
\t<div class=\"container\">
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
\t\t\t\t\t\t\t\t{{ knp_pagination_sortable(pagination, 'Sort by full name', 's.subject') }}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{{ knp_pagination_sortable(pagination, 'Sort by Sending date', 's.created') }}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{{ knp_pagination_sortable(pagination, 'Sort by Sending email', 's.email') }}
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
\t\t\t{% set k= 0 %}
\t\t\t{% for support in pagination %}
\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t<div class=\"list-group-item media\">
\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t{% if k==0 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Light-Blue bg\">{{support.email|first|lower}}</div>
\t\t\t\t\t\t\t{% elseif k==1 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Purple-300 bg\">{{support.email|first|lower}}</div>
\t\t\t\t\t\t\t{% elseif k==2 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Green-400 bg\">{{support.email|first|lower}}</div>
\t\t\t\t\t\t\t{% elseif k==3 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Red-400 bg\">{{support.email|first|lower}}</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<ul class=\"actions\">
\t\t\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-more-vert\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_support_delete\",{\"id\":support.id})}}\">Delete</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_support_view\",{\"id\":support.id})}}\">View</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"lgi-heading\"><a  href=\"mailto:{{support.subject}}?subject=feedback\" >{{support.email}} :  {{support.subject}} </a></div>
\t\t\t\t\t\t\t<small class=\"lgi-text\">{{support.message|striptags|convert_encoding('UTF-8', 'HTML-ENTITIES')|truncate(300, true)}}</small>
\t\t\t\t\t\t\t<ul class=\"lgi-attrs\">
\t\t\t\t\t\t\t\t<li>Sending Date:{{support.created|date(\"d/m/Y\")}} at {{support.created|date(\"H:i\")}}</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% if k==3 %}
\t\t\t\t\t{% set k=0 %}
\t\t\t\t{% else %}
\t\t\t\t\t{% set k=k+1 %}
\t\t\t\t{% endif %}
\t\t\t{% else %}
\t\t\t\t<p style=\"text-align:center\">
\t\t\t\t\t<img style=\"padding:50px;\" src=\"{{asset(\"img/bg_empty.png\")}}\" alt=\"\">
\t\t\t\t</p>
\t\t\t{% endfor %}
\t\t\t<div class=\" pull-right\">
\t\t\t\t{{ knp_pagination_render(pagination) }}
\t\t\t</div>
\t\t</div>
\t</div>
\t
{% endblock%}", "AppBundle:Support:index.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Support/index.html.twig");
    }
}
