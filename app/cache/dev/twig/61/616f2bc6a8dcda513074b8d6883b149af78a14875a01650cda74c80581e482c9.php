<?php

/* AppBundle:Articles:view.html.twig */
class __TwigTemplate_39325d83b6195248c28d6872e10763361c184560bfbbe47dbd2787fab25b406f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Articles:view.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Articles:view.html.twig"));

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
        <div class=\"col-sm-6\">
            ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 5, $this->source); })()), "enabled", array()) == true)) {
            // line 6
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_notif", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 6, $this->source); })()), "id", array()))), "html", null, true);
            echo "\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 30pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-active\"></i> Send notification</h2>
                </a>
            ";
        } else {
            // line 10
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 10, $this->source); })()), "id", array()))), "html", null, true);
            echo "\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 20pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-off\"></i> Enable to send notification</h2>
                </a>
            ";
        }
        // line 14
        echo "            <div class=\"card\">
                <div class=\"status-bar\"></div>
                <div class=\"action-bar\">
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_index");
        echo "\" class=\"zmdi zmdi-arrow-left\"></a>
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 18, $this->source); })()), "title", array())), 40, true), "html", null, true);
        echo "</p>
                </div>
                <ul class=\"actions a-alt\" style=\"right: 4px;top: 34px;position: absolute;\">
                    <li class=\"dropdown\">
                        <a href=\"\" data-toggle=\"dropdown\">
                            <i class=\"zmdi zmdi-more-vert\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 27, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Delete</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 30, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"card-header ch-img  class-24\" style=\"background-image: url(";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 35, $this->source); })()), "media", array()), "link", array()), "product_img")), "html", null, true);
        echo "); height: 300px;\">
                    <small style=\" margin: 10px; background: rgba(0, 0, 0, 0.59);padding: 5px;top: -1px;position: absolute;\">";
        // line 36
        echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 36, $this->source); })()), "created", array()));
        echo "</small>
                    <div class=\"card-header class-23\">
                        <h3 style=\"color:white\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 39, $this->source); })()), "title", array()), "html", null, true);
        echo "
                        </h3>
                    </div>
                </div>
                <div class=\"class-28\">";
        // line 43
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 43, $this->source); })()), "content", array());
        echo "</div>
                <div class=\"class-28\">
                    <ul class=\"lgi-attrs\">
                        <li>Date Created:";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 46, $this->source); })()), "created", array()), "d/m/Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 46, $this->source); })()), "created", array()), "H:i"), "html", null, true);
        echo "</li>
                        <li>
                            Published:
                            ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 49, $this->source); })()), "enabled", array()) == true)) {
            // line 50
            echo "                                Yes
                            ";
        } else {
            // line 52
            echo "                                No
                            ";
        }
        // line 54
        echo "                        </li>
                    </ul>
                </div>
            </div>
            <br>
        </div>
        <div class=\"col-sm-6\">

            <div class=\"card\">

                <div class=\"status-bar\"></div>
                <div class=\"action-bar\">
                    <a href=\"#\" class=\"zmdi zmdi-comment-alt\"></a>
                    <p>Comments</p>
                </div>
                <div class=\"list-group lg-alt lg-even-black\">
                    ";
        // line 70
        $context["k"] = 0;
        // line 71
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 71, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 72
            echo "                        <div class=\"list-group-item media\">
                            <div class=\"pull-left\">
                                ";
            // line 74
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 74, $this->source); })()) == 0)) {
                // line 75
                echo "                                    <div class=\"avatar-char palette-Light-Blue bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 76
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 76, $this->source); })()) == 1)) {
                // line 77
                echo "                                    <div class=\"avatar-char palette-Purple-300 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 78
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 78, $this->source); })()) == 2)) {
                // line 79
                echo "                                    <div class=\"avatar-char palette-Green-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 80
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 80, $this->source); })()) == 3)) {
                // line 81
                echo "                                    <div class=\"avatar-char palette-Red-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            }
            // line 83
            echo "                                
                            </div>
                            <div class=\"pull-right\">
                                <ul class=\"actions\">
                                    <li class=\"dropdown\">
                                        <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"zmdi zmdi-more-vert\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li>
                                                <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_hide", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()))), "html", null, true);
            echo "\">
                                                    ";
            // line 97
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "enabled", array()) == true)) {
                // line 98
                echo "                                                        Hide
                                                    ";
            } else {
                // line 100
                echo "                                                        Show
                                                    ";
            }
            // line 102
            echo "                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"media-body\">
                                <div class=\"lgi-heading\"> <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_user_edit", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "id", array()))), "html", null, true);
            echo "\" title=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()), "html", null, true);
            echo "</a> </div>
                                <small class=\"lgi-text\">";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", array()), "html", null, true);
            echo "</small>
                                <ul class=\"lgi-attrs\">
                                    <li>Date Created:";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", array()), "d/m/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", array()), "H:i"), "html", null, true);
            echo "</li>
                                    <li>
                                        Published:
                                        ";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "enabled", array()) == true)) {
                // line 116
                echo "                                            Yes
                                        ";
            } else {
                // line 118
                echo "                                            No
                                        ";
            }
            // line 120
            echo "                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                        ";
            // line 125
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 125, $this->source); })()) == 3)) {
                // line 126
                echo "                            ";
                $context["k"] = 0;
                // line 127
                echo "                        ";
            } else {
                // line 128
                echo "                            ";
                $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 128, $this->source); })()) + 1);
                // line 129
                echo "                        ";
            }
            // line 130
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 131
            echo "                        <p style=\"text-align:center\">
                            <img style=\"padding:50px; width:100%\" src=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                    <div class=\" pull-right\">
                        ";
        // line 136
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 136, $this->source); })()));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Articles:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 136,  309 => 135,  300 => 132,  297 => 131,  292 => 130,  289 => 129,  286 => 128,  283 => 127,  280 => 126,  278 => 125,  271 => 120,  267 => 118,  263 => 116,  261 => 115,  253 => 112,  248 => 110,  242 => 109,  233 => 102,  229 => 100,  225 => 98,  223 => 97,  219 => 96,  213 => 93,  201 => 83,  195 => 81,  193 => 80,  188 => 79,  186 => 78,  181 => 77,  179 => 76,  174 => 75,  172 => 74,  168 => 72,  162 => 71,  160 => 70,  142 => 54,  138 => 52,  134 => 50,  132 => 49,  124 => 46,  118 => 43,  111 => 39,  105 => 36,  101 => 35,  93 => 30,  87 => 27,  75 => 18,  71 => 17,  66 => 14,  58 => 10,  50 => 6,  48 => 5,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"col-sm-6\">
            {% if article.enabled == true %}
                <a href=\"{{path(\"app_articles_notif\",{id:article.id})}}\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 30pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-active\"></i> Send notification</h2>
                </a>
            {% else %}
                <a href=\"{{path(\"app_articles_edit\",{id:article.id})}}\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 20pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-off\"></i> Enable to send notification</h2>
                </a>
            {% endif %}
            <div class=\"card\">
                <div class=\"status-bar\"></div>
                <div class=\"action-bar\">
                    <a href=\"{{path(\"app_articles_index\")}}\" class=\"zmdi zmdi-arrow-left\"></a>
                    <p>{{article.title|striptags|truncate(40, true)}}</p>
                </div>
                <ul class=\"actions a-alt\" style=\"right: 4px;top: 34px;position: absolute;\">
                    <li class=\"dropdown\">
                        <a href=\"\" data-toggle=\"dropdown\">
                            <i class=\"zmdi zmdi-more-vert\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                                <a href=\"{{path(\"app_articles_delete\",{\"id\":article.id})}}\">Delete</a>
                            </li>
                            <li>
                                <a href=\"{{path(\"app_articles_edit\",{\"id\":article.id})}}\">Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"card-header ch-img  class-24\" style=\"background-image: url({{asset(article.media.link|imagine_filter(\"product_img\"))}}); height: 300px;\">
                    <small style=\" margin: 10px; background: rgba(0, 0, 0, 0.59);padding: 5px;top: -1px;position: absolute;\">{{article.created|ago}}</small>
                    <div class=\"card-header class-23\">
                        <h3 style=\"color:white\">
                        {{article.title}}
                        </h3>
                    </div>
                </div>
                <div class=\"class-28\">{{article.content|raw}}</div>
                <div class=\"class-28\">
                    <ul class=\"lgi-attrs\">
                        <li>Date Created:{{article.created|date(\"d/m/Y\")}} at {{article.created|date(\"H:i\")}}</li>
                        <li>
                            Published:
                            {% if article.enabled == true %}
                                Yes
                            {% else %}
                                No
                            {% endif %}
                        </li>
                    </ul>
                </div>
            </div>
            <br>
        </div>
        <div class=\"col-sm-6\">

            <div class=\"card\">

                <div class=\"status-bar\"></div>
                <div class=\"action-bar\">
                    <a href=\"#\" class=\"zmdi zmdi-comment-alt\"></a>
                    <p>Comments</p>
                </div>
                <div class=\"list-group lg-alt lg-even-black\">
                    {% set k= 0 %}
                    {% for comment in pagination %}
                        <div class=\"list-group-item media\">
                            <div class=\"pull-left\">
                                {% if k==0 %}
                                    <div class=\"avatar-char palette-Light-Blue bg\">{{comment.user.name|first|lower}}</div>
                                {% elseif k==1 %}
                                    <div class=\"avatar-char palette-Purple-300 bg\">{{comment.user.name|first|lower}}</div>
                                {% elseif k==2 %}
                                    <div class=\"avatar-char palette-Green-400 bg\">{{comment.user.name|first|lower}}</div>
                                {% elseif k==3 %}
                                    <div class=\"avatar-char palette-Red-400 bg\">{{comment.user.name|first|lower}}</div>
                                {% endif %}
                                
                            </div>
                            <div class=\"pull-right\">
                                <ul class=\"actions\">
                                    <li class=\"dropdown\">
                                        <a href=\"\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"zmdi zmdi-more-vert\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-right\">
                                            <li>
                                                <a href=\"{{path(\"app_comments_delete\",{\"id\":comment.id})}}\">Delete</a>
                                            </li>
                                            <li>
                                                <a href=\"{{path(\"app_comments_hide\",{\"id\":comment.id})}}\">
                                                    {% if comment.enabled == true %}
                                                        Hide
                                                    {% else %}
                                                        Show
                                                    {% endif %}
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"media-body\">
                                <div class=\"lgi-heading\"> <a href=\"{{path(\"user_user_edit\",{\"id\":comment.user.id})}}\" title=\"\">{{comment.user.name}}</a> </div>
                                <small class=\"lgi-text\">{{comment.content}}</small>
                                <ul class=\"lgi-attrs\">
                                    <li>Date Created:{{comment.created|date(\"d/m/Y\")}} at {{comment.created|date(\"H:i\")}}</li>
                                    <li>
                                        Published:
                                        {% if comment.enabled == true %}
                                            Yes
                                        {% else %}
                                            No
                                        {% endif %}
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {% if k==3 %}
                            {% set k=0 %}
                        {% else %}
                            {% set k=k+1 %}
                        {% endif %}
                    {% else %}
                        <p style=\"text-align:center\">
                            <img style=\"padding:50px; width:100%\" src=\"{{asset(\"img/bg_empty.png\")}}\" alt=\"\">
                        </p>
                    {% endfor %}
                    <div class=\" pull-right\">
                        {{ knp_pagination_render(pagination) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "AppBundle:Articles:view.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Articles/view.html.twig");
    }
}
