<?php

/* AppBundle:Comments:index.html.twig */
class __TwigTemplate_498e3d6a5f5362d7e660f7bd4c7ac9a0fd50b323e3001c7737821c01e022078e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Comments:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Comments:index.html.twig"));

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
\t\t\t<h2>Comments List</h2>
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 17, $this->source); })()), "Sort by Posted date", "c.created");
        echo "
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t";
        // line 21
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 21, $this->source); })()), "Sort by Published", "c.enabled");
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
        // line 37
        $context["k"] = 0;
        // line 38
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 39
            echo "\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t<div class=\"list-group-item media\">
\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t";
            // line 42
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 42, $this->source); })()) == 0)) {
                // line 43
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Light-Blue bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 44
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 44, $this->source); })()) == 1)) {
                // line 45
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Purple-300 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 46
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 46, $this->source); })()) == 2)) {
                // line 47
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Green-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 48
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 48, $this->source); })()) == 3)) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Red-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t";
            }
            // line 51
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
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_delete_two", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_hide_two", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "enabled", array()) == true)) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\tHide
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\tShow
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"lgi-heading\"><a  href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_user_edit", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()), "html", null, true);
            echo " </a></div>
\t\t\t\t\t\t\t<small class=\"lgi-text\">";
            // line 77
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_convert_encoding(strip_tags(twig_get_attribute($this->env, $this->source, $context["comment"], "content", array())), "UTF-8", "HTML-ENTITIES"), 300, true), "html", null, true);
            echo "</small>
\t\t\t\t\t\t\t<ul class=\"lgi-attrs\">
\t\t\t\t\t\t\t\t<li>Sending Date:";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", array()), "d/m/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", array()), "H:i"), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\tPublished:
\t\t\t\t\t\t\t\t\t";
            // line 82
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "enabled", array()) == true)) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\tYes
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\tNo
\t\t\t\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            // line 92
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 92, $this->source); })()) == 3)) {
                // line 93
                echo "\t\t\t\t\t";
                $context["k"] = 0;
                // line 94
                echo "\t\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t\t";
                $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 95, $this->source); })()) + 1);
                // line 96
                echo "\t\t\t\t";
            }
            // line 97
            echo "\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 98
            echo "\t\t\t\t<p style=\"text-align:center\">
\t\t\t\t\t<img style=\"padding:50px;\" src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t\t\t<div class=\" pull-right\">
\t\t\t\t";
        // line 103
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 103, $this->source); })()));
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
        return "AppBundle:Comments:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 103,  235 => 102,  226 => 99,  223 => 98,  218 => 97,  215 => 96,  212 => 95,  209 => 94,  206 => 93,  204 => 92,  197 => 87,  193 => 85,  189 => 83,  187 => 82,  179 => 79,  174 => 77,  168 => 76,  159 => 69,  155 => 67,  151 => 65,  149 => 64,  145 => 63,  139 => 60,  128 => 51,  122 => 49,  120 => 48,  115 => 47,  113 => 46,  108 => 45,  106 => 44,  101 => 43,  99 => 42,  94 => 39,  88 => 38,  86 => 37,  67 => 21,  60 => 17,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body%}
\t<div class=\"container\">
\t\t<div class=\"c-header\">
\t\t\t<h2>Comments List</h2>
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
\t\t\t\t\t\t\t\t{{ knp_pagination_sortable(pagination, 'Sort by Posted date', 'c.created') }}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t{{ knp_pagination_sortable(pagination, 'Sort by Published', 'c.enabled') }}
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
\t\t\t{% for comment in pagination %}
\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t<div class=\"list-group-item media\">
\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t{% if k==0 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Light-Blue bg\">{{comment.user.name|first|lower}}</div>
\t\t\t\t\t\t\t{% elseif k==1 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Purple-300 bg\">{{comment.user.name|first|lower}}</div>
\t\t\t\t\t\t\t{% elseif k==2 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Green-400 bg\">{{comment.user.name|first|lower}}</div>
\t\t\t\t\t\t\t{% elseif k==3 %}
\t\t\t\t\t\t\t\t<div class=\"avatar-char palette-Red-400 bg\">{{comment.user.name|first|lower}}</div>
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
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_comments_delete_two\",{\"id\":comment.id})}}\">Delete</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_comments_hide_two\",{\"id\":comment.id})}}\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if comment.enabled == true %}
\t\t\t\t\t\t\t\t\t\t\t\t\tHide
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\tShow
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"lgi-heading\"><a  href=\"{{path(\"user_user_edit\",{id:comment.user.id})}}\" >{{comment.user.name}} </a></div>
\t\t\t\t\t\t\t<small class=\"lgi-text\">{{comment.content|striptags|convert_encoding('UTF-8', 'HTML-ENTITIES')|truncate(300, true)}}</small>
\t\t\t\t\t\t\t<ul class=\"lgi-attrs\">
\t\t\t\t\t\t\t\t<li>Sending Date:{{comment.created|date(\"d/m/Y\")}} at {{comment.created|date(\"H:i\")}}</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\tPublished:
\t\t\t\t\t\t\t\t\t{% if comment.enabled == true %}
\t\t\t\t\t\t\t\t\t\tYes
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\tNo
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</li>
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
{% endblock%}", "AppBundle:Comments:index.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Comments/index.html.twig");
    }
}
