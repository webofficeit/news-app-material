<?php

/* AppBundle:Videos:view.html.twig */
class __TwigTemplate_5b04435b8709a2689db0415bcc8843588964e7336928db642abf463c4f0bfeaf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Videos:view.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Videos:view.html.twig"));

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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_notif", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 6, $this->source); })()), "id", array()))), "html", null, true);
            echo "\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 30pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-active\"></i> Send notification</h2>
                </a>
            ";
        } else {
            // line 10
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 10, $this->source); })()), "id", array()))), "html", null, true);
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
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_index");
        echo "\" class=\"zmdi zmdi-arrow-left\"></a>
                    <p>";
        // line 19
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 19, $this->source); })()), "title", array())), 40, true), "html", null, true);
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
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_delete", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 28, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Delete</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 31, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"embed-responsive embed-responsive-16by9\">
                    <iframe class=\"embed-responsive-item\" id=\"video-view\" src=\"https://www.youtube.com/embed/";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 37, $this->source); })()), "video", array()), "html", null, true);
        echo "\"></iframe>
                </div>
                <div class=\"class-28\">
                    <h3>
                    ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 41, $this->source); })()), "title", array()), "html", null, true);
        echo "
                    </h3>
                    ";
        // line 43
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 43, $this->source); })()), "content", array());
        echo "
                </div>
                <div class=\"class-28\">
                    <ul class=\"lgi-attrs\">
                        <li>Date Created:";
        // line 47
        echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 47, $this->source); })()), "created", array()));
        echo "</li>
                        <li>
                            Published:
                            ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 50, $this->source); })()), "enabled", array()) == true)) {
            // line 51
            echo "                                Yes
                            ";
        } else {
            // line 53
            echo "                                No
                            ";
        }
        // line 55
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
        // line 69
        $context["k"] = 0;
        // line 70
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 70, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 71
            echo "                        <div class=\"list-group-item media\">
                            <div class=\"pull-left\">
                                ";
            // line 73
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 73, $this->source); })()) == 0)) {
                // line 74
                echo "                                    <div class=\"avatar-char palette-Light-Blue bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 75
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 75, $this->source); })()) == 1)) {
                // line 76
                echo "                                    <div class=\"avatar-char palette-Purple-300 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 77
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 77, $this->source); })()) == 2)) {
                // line 78
                echo "                                    <div class=\"avatar-char palette-Green-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 79
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 79, $this->source); })()) == 3)) {
                // line 80
                echo "                                    <div class=\"avatar-char palette-Red-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            }
            // line 82
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
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()))), "html", null, true);
            echo "\">Delete</a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_hide", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()))), "html", null, true);
            echo "\">
                                                    ";
            // line 96
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "enabled", array()) == true)) {
                // line 97
                echo "                                                        Hide
                                                    ";
            } else {
                // line 99
                echo "                                                        Show
                                                    ";
            }
            // line 101
            echo "                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"media-body\">
                                <div class=\"lgi-heading\"> <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_user_edit", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "id", array()))), "html", null, true);
            echo "\" title=\"\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()), "html", null, true);
            echo "</a> </div>
                                <small class=\"lgi-text\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", array()), "html", null, true);
            echo "</small>
                                <ul class=\"lgi-attrs\">
                                    <li>Date Created:";
            // line 111
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", array()), "d/m/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", array()), "H:i"), "html", null, true);
            echo "</li>
                                    <li>
                                        Published:
                                        ";
            // line 114
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "enabled", array()) == true)) {
                // line 115
                echo "                                            Yes
                                        ";
            } else {
                // line 117
                echo "                                            No
                                        ";
            }
            // line 119
            echo "                                    
                                    </li>
                                </ul>
                            </div>
                        </div>
                        ";
            // line 124
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 124, $this->source); })()) == 3)) {
                // line 125
                echo "                            ";
                $context["k"] = 0;
                // line 126
                echo "                        ";
            } else {
                // line 127
                echo "                            ";
                $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 127, $this->source); })()) + 1);
                // line 128
                echo "                        ";
            }
            // line 129
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            echo "                        <p style=\"text-align:center\">
                            <img style=\"padding:50px; width:100%\" src=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                    <div class=\" pull-right\">
                        ";
        // line 135
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 135, $this->source); })()));
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
        return "AppBundle:Videos:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 135,  303 => 134,  294 => 131,  291 => 130,  286 => 129,  283 => 128,  280 => 127,  277 => 126,  274 => 125,  272 => 124,  265 => 119,  261 => 117,  257 => 115,  255 => 114,  247 => 111,  242 => 109,  236 => 108,  227 => 101,  223 => 99,  219 => 97,  217 => 96,  213 => 95,  207 => 92,  195 => 82,  189 => 80,  187 => 79,  182 => 78,  180 => 77,  175 => 76,  173 => 75,  168 => 74,  166 => 73,  162 => 71,  156 => 70,  154 => 69,  138 => 55,  134 => 53,  130 => 51,  128 => 50,  122 => 47,  115 => 43,  110 => 41,  103 => 37,  94 => 31,  88 => 28,  76 => 19,  72 => 18,  66 => 14,  58 => 10,  50 => 6,  48 => 5,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AppBundle::layout.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"col-sm-6\">
            {% if article.enabled == true %}
                <a href=\"{{path(\"app_videos_notif\",{id:article.id})}}\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 30pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-active\"></i> Send notification</h2>
                </a>
            {% else %}
                <a href=\"{{path(\"app_videos_edit\",{id:article.id})}}\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 20pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-off\"></i> Enable to send notification</h2>
                </a>
            {% endif %}
            <div class=\"card\">

                <div class=\"status-bar\"></div>
                <div class=\"action-bar\">
                    <a href=\"{{path(\"app_videos_index\")}}\" class=\"zmdi zmdi-arrow-left\"></a>
                    <p>{{article.title|striptags|truncate(40, true)}}</p>
                </div>
                <ul class=\"actions a-alt\" style=\"right: 4px;top: 34px;position: absolute;\">
                    <li class=\"dropdown\">
                        <a href=\"\" data-toggle=\"dropdown\">
                            <i class=\"zmdi zmdi-more-vert\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                            <li>
                                <a href=\"{{path(\"app_videos_delete\",{\"id\":article.id})}}\">Delete</a>
                            </li>
                            <li>
                                <a href=\"{{path(\"app_videos_edit\",{\"id\":article.id})}}\">Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"embed-responsive embed-responsive-16by9\">
                    <iframe class=\"embed-responsive-item\" id=\"video-view\" src=\"https://www.youtube.com/embed/{{article.video}}\"></iframe>
                </div>
                <div class=\"class-28\">
                    <h3>
                    {{article.title}}
                    </h3>
                    {{article.content|raw}}
                </div>
                <div class=\"class-28\">
                    <ul class=\"lgi-attrs\">
                        <li>Date Created:{{article.created|ago}}</li>
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
{% endblock %}", "AppBundle:Videos:view.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Videos/view.html.twig");
    }
}
