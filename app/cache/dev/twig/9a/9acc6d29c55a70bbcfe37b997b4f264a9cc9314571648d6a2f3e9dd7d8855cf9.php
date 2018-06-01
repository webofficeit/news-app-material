<?php

/* AppBundle:Articles:index.html.twig */
class __TwigTemplate_323ada9a952d0c80d456debe97aa7c20866cf6c890c6c554d0dd098b80663df7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Articles:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Articles:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"card\">
            <div class=\"action-header palette-Teal-400 bg clearfix\">
                <div class=\"ah-label hidden-xs palette-White text\">Search for articles by title</div>
                <div class=\"ah-search\">
                    <form action=\"#\" method=\"get\" accept-charset=\"utf-8\">
                        <input type=\"text\" name=\"title\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
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
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_add");
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
        // line 31
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 31, $this->source); })()), "Sort by title", "a.title");
        echo "
                            </li>
                            <li>
                                ";
        // line 34
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 34, $this->source); })()), "Sort by created date ", "a.created");
        echo "
                            </li>
                            <li>
                                ";
        // line 37
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->sortable($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 37, $this->source); })()), "Sort by Publish ", "a.enabled");
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
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "                <div class=\"col-sm-4\">
                    <div class=\"card\">
                        <ul class=\"actions a-alt\">
                            <li class=\"dropdown\">
                                <a href=\"\" data-toggle=\"dropdown\">
                                    <i class=\"zmdi zmdi-more-vert\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                                    </li>
                                    ";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "enabled", array()) == true)) {
                // line 71
                echo "                                         <li>
                                            <a href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_notif", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
                echo "\">Send notification</a>
                                        </li>
                                    ";
            }
            // line 75
            echo "                                </ul>
                            </li>
                        </ul>
                        <div class=\"card-header ch-img  class-24\" style=\"background-image: url(";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "media", array()), "link", array()), "product_img")), "html", null, true);
            echo "); height: 170px;\">
                            <small style=\" margin: 10px; background: rgba(0, 0, 0, 0.59);padding: 5px;top: -1px;position: absolute;\">";
            // line 79
            echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, $context["item"], "created", array()));
            echo "</small>
                            <div class=\"card-header class-23\">
                                <h5>
                                ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", array()), "html", null, true);
            echo "
                                </h5>
                            </div>
                        </div>
                        <div class=\"card-body card-padding class-25\" >
                            <p style=\"font-size: 12px;text-align: justify;    margin-bottom: 0px;\">";
            // line 87
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, twig_convert_encoding(strip_tags(twig_get_attribute($this->env, $this->source, $context["item"], "content", array())), "UTF-8", "HTML-ENTITIES"), 120, true), "html", null, true);
            echo "</p>
                            <ul class=\"lgi-attrs\" style=\"position: absolute;bottom: 5px;\">
                                <li class=\"primary\">
                                    Published:
                                    ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "enabled", array()) == true)) {
                // line 92
                echo "                                        Yes
                                    ";
            } else {
                // line 94
                echo "                                        No
                                    ";
            }
            // line 96
            echo "                                </li>
                            </ul>
                            <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_view", array("id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", array()))), "html", null, true);
            echo "\" class=\"view-more pull-right class-26\"><i class=\"zmdi zmdi-long-arrow-right\"></i> View Article...</a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 103
            echo "                <div class=\"col-sm-12\">
                    <div class=\"card\">
                        <p style=\"text-align:center\">
                            <img style=\"padding:50px;\" src=\"";
            // line 106
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
        // line 111
        echo "            <div class=\"col-sm-12 \">
                <div class=\"pull-right\" style=\"padding-right:30px;\">
                    ";
        // line 113
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 113, $this->source); })()));
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
        return "AppBundle:Articles:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 113,  221 => 111,  210 => 106,  205 => 103,  195 => 98,  191 => 96,  187 => 94,  183 => 92,  181 => 91,  174 => 87,  166 => 82,  160 => 79,  156 => 78,  151 => 75,  145 => 72,  142 => 71,  140 => 70,  135 => 68,  129 => 65,  118 => 56,  113 => 55,  92 => 37,  86 => 34,  80 => 31,  67 => 21,  52 => 9,  44 => 3,  38 => 2,  15 => 1,);
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
                        <a href=\"{{path(\"app_articles_add\")}}\">
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
                    <div class=\"card\">
                        <ul class=\"actions a-alt\">
                            <li class=\"dropdown\">
                                <a href=\"\" data-toggle=\"dropdown\">
                                    <i class=\"zmdi zmdi-more-vert\"></i>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <a href=\"{{path(\"app_articles_delete\",{\"id\":item.id})}}\">Delete</a>
                                    </li>
                                    <li>
                                        <a href=\"{{path(\"app_articles_edit\",{\"id\":item.id})}}\">Edit</a>
                                    </li>
                                    {% if item.enabled == true %}
                                         <li>
                                            <a href=\"{{path(\"app_articles_notif\",{\"id\":item.id})}}\">Send notification</a>
                                        </li>
                                    {% endif %}
                                </ul>
                            </li>
                        </ul>
                        <div class=\"card-header ch-img  class-24\" style=\"background-image: url({{asset(item.media.link|imagine_filter(\"product_img\"))}}); height: 170px;\">
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
                            <a href=\"{{path(\"app_articles_view\",{'id':item.id})}}\" class=\"view-more pull-right class-26\"><i class=\"zmdi zmdi-long-arrow-right\"></i> View Article...</a>
                        </div>
                    </div>
                </div>
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
{% endblock%}", "AppBundle:Articles:index.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Articles/index.html.twig");
    }
}
