<?php

/* AppBundle:Videos:index.html.twig */
class __TwigTemplate_093d28f1db3aaed8f2b9d39ed7125df7d56064139403e09f2051b225e984ab51 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Videos:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Videos:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"card\">
        <div class=\"action-header palette-Teal-400 bg clearfix\">
            <div class=\"ah-label hidden-xs palette-White text\">Search for articles by title</div>

            <div class=\"ah-search\">
                <form action=\"#\" method=\"get\" accept-charset=\"utf-8\">
 
                
                <input type=\"text\" name=\"title\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\" placeholder=\"Search for articles by title\" class=\"ahs-input\">
                <i class=\"ah-search-close zmdi zmdi-long-arrow-left\" data-ma-action=\"ah-search-close\"></i>
                <button type=\"submit\" class=\"class-27\">Search</button>
                </form>
            </div>

            <ul class=\"ah-actions actions a-alt\">
                <li>
                    <a href=\"\" class=\"ah-search-trigger\" data-ma-action=\"ah-search-open\">
                        <i class=\"zmdi zmdi-search\"></i>
                    </a>
                </li>

                <li>
                    <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_add");
        echo "\">
                        <i class=\"zmdi  zmdi-file-plus\"></i>
                    </a>
                </li>
                <li class=\"dropdown\">
                    <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                        <i class=\"zmdi zmdi-sort\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li>
                            ";
        // line 37
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 37, $this->source); })()), "Sort by title", "a.title");
        echo "
                        </li>
                        <li>
                            ";
        // line 40
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 40, $this->source); })()), "Sort by created date ", "a.created");
        echo "
                        </li>
                        <li>
                            ";
        // line 43
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 43, $this->source); })()), "Sort by Publish ", "a.enabled");
        echo "
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                        <i class=\"zmdi zmdi-more-vert\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li>
                            <a href=\"\">Refresh</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"row\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 62, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "        <div class=\"col-sm-4\">
\t\t\t<div class=\"card\">
\t\t\t\t\t<ul class=\"actions a-alt\">
                            <li class=\"dropdown\">
                                <a href=\"\" data-toggle=\"dropdown\">
                                    <i class=\"zmdi zmdi-more-vert\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                    </li>
                                    ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "enabled", array()) == true)) {
                // line 78
                echo "                                         <li>
                                            <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_notif", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
                echo "\">Send notification</a>
                                        </li>
                                    ";
            }
            // line 82
            echo "                                </ul>
                            </li>
                        </ul>
                <div class=\"card-header ch-img  class-24\" style=\"background-image: url(";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "media", array()), "link", array()), "product_img")), "html", null, true);
            echo "); height: 170px;\">
                <div class=\"class-30\"></div>
                <small style=\" margin: 10px; background: rgba(0, 0, 0, 0.59);padding: 5px;top: -1px;position: absolute;\">";
            // line 87
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["item"], "created", array()));
            echo "</small>

                <div class=\"card-header class-23\">
                    <h5>
                        ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "
                    </h5>

                </div>
                </div>
                <div class=\"card-body card-padding class-25\" >
                    <p style=\"font-size: 12px;text-align: justify;    margin-bottom: 0px;\">";
            // line 97
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_convert_encoding(strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "content", array())), "UTF-8", "HTML-ENTITIES"), 120, true), "html", null, true);
            echo "</p>
                     <ul class=\"lgi-attrs\" style=\"position: absolute;bottom: 5px;\">
                        <li class=\"primary\">
                        Published: 
                            ";
            // line 101
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "enabled", array()) == true)) {
                // line 102
                echo "                                Yes
                            ";
            } else {
                // line 104
                echo "                                No
                            ";
            }
            // line 106
            echo "                        </li>
                     </ul>
                    <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_view", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"view-more pull-right class-26\"><i class=\"zmdi zmdi-long-arrow-right\"></i> View Article...</a>
                </div>
            </div>
\t    </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 113
            echo "        <div class=\"col-sm-12\">
            <div class=\"card\">
            <p style=\"text-align:center\">
                 <img style=\"padding:50px;\" src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
            </p>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        <div class=\"col-sm-12 \">
                     <div class=\"pull-right\" style=\"padding-right:30px;\">
                ";
        // line 123
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 123, $this->source); })()));
        echo "
            </div>   
        </div>

    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Videos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 123,  231 => 121,  220 => 116,  215 => 113,  205 => 108,  201 => 106,  197 => 104,  193 => 102,  191 => 101,  184 => 97,  175 => 91,  168 => 87,  163 => 85,  158 => 82,  152 => 79,  149 => 78,  147 => 77,  142 => 75,  136 => 72,  125 => 63,  120 => 62,  98 => 43,  92 => 40,  86 => 37,  72 => 26,  55 => 12,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body %}
<div class=\"container\">
    <div class=\"card\">
        <div class=\"action-header palette-Teal-400 bg clearfix\">
            <div class=\"ah-label hidden-xs palette-White text\">Search for articles by title</div>

            <div class=\"ah-search\">
                <form action=\"#\" method=\"get\" accept-charset=\"utf-8\">
 
                
                <input type=\"text\" name=\"title\" value=\"{{app.request.get('title')}}\" placeholder=\"Search for articles by title\" class=\"ahs-input\">
                <i class=\"ah-search-close zmdi zmdi-long-arrow-left\" data-ma-action=\"ah-search-close\"></i>
                <button type=\"submit\" class=\"class-27\">Search</button>
                </form>
            </div>

            <ul class=\"ah-actions actions a-alt\">
                <li>
                    <a href=\"\" class=\"ah-search-trigger\" data-ma-action=\"ah-search-open\">
                        <i class=\"zmdi zmdi-search\"></i>
                    </a>
                </li>

                <li>
                    <a href=\"{{path(\"app_videos_add\")}}\">
                        <i class=\"zmdi  zmdi-file-plus\"></i>
                    </a>
                </li>
                <li class=\"dropdown\">
                    <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                        <i class=\"zmdi zmdi-sort\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li>
                            {{ knp_pagination_sortable(articles, 'Sort by title', 'a.title') }}
                        </li>
                        <li>
                            {{ knp_pagination_sortable(articles, 'Sort by created date ', 'a.created') }}
                        </li>
                        <li>
                            {{ knp_pagination_sortable(articles, 'Sort by Publish ', 'a.enabled') }}
                        </li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                        <i class=\"zmdi zmdi-more-vert\"></i>
                    </a>

                    <ul class=\"dropdown-menu dropdown-menu-right\">
                        <li>
                            <a href=\"\">Refresh</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"row\">
        {% for item in articles %}
        <div class=\"col-sm-4\">
\t\t\t<div class=\"card\">
\t\t\t\t\t<ul class=\"actions a-alt\">
                            <li class=\"dropdown\">
                                <a href=\"\" data-toggle=\"dropdown\">
                                    <i class=\"zmdi zmdi-more-vert\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <a href=\"{{path(\"app_videos_delete\",{\"id\":item.id})}}\">Delete</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"app_videos_edit\",{\"id\":item.id})}}\">Edit</a>
                                    </li>
                                    {% if item.enabled == true %}
                                         <li>
                                            <a href=\"{{path(\"app_videos_notif\",{\"id\":item.id})}}\">Send notification</a>
                                        </li>
                                    {% endif %}
                                </ul>
                            </li>
                        </ul>
                <div class=\"card-header ch-img  class-24\" style=\"background-image: url({{asset(item.media.link|imagine_filter(\"product_img\"))}}); height: 170px;\">
                <div class=\"class-30\"></div>
                <small style=\" margin: 10px; background: rgba(0, 0, 0, 0.59);padding: 5px;top: -1px;position: absolute;\">{{item.created|ago}}</small>

                <div class=\"card-header class-23\">
                    <h5>
                        {{item.title}}
                    </h5>

                </div>
                </div>
                <div class=\"card-body card-padding class-25\" >
                    <p style=\"font-size: 12px;text-align: justify;    margin-bottom: 0px;\">{{item.content|striptags|convert_encoding('UTF-8', 'HTML-ENTITIES')|truncate(120, true)}}</p>
                     <ul class=\"lgi-attrs\" style=\"position: absolute;bottom: 5px;\">
                        <li class=\"primary\">
                        Published: 
                            {% if item.enabled == true %}
                                Yes
                            {% else %}
                                No
                            {% endif %}
                        </li>
                     </ul>
                    <a href=\"{{path(\"app_videos_view\",{'id':item.id})}}\" class=\"view-more pull-right class-26\"><i class=\"zmdi zmdi-long-arrow-right\"></i> View Article...</a>
                </div>
            </div>
\t    </div>
        {% else %}
        <div class=\"col-sm-12\">
            <div class=\"card\">
            <p style=\"text-align:center\">
                 <img style=\"padding:50px;\" src=\"{{asset(\"img/bg_empty.png\")}}\" alt=\"\">
            </p>
            </div>
        </div>
        {% endfor %}
        <div class=\"col-sm-12 \">
                     <div class=\"pull-right\" style=\"padding-right:30px;\">
                {{ knp_pagination_render(articles) }}
            </div>   
        </div>

    </div>
</div>
{% endblock%}", "AppBundle:Videos:index.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Videos/index.html.twig");
    }
}
