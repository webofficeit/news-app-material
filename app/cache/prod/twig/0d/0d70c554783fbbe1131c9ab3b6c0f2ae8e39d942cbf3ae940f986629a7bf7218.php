<?php

/* AppBundle:Articles:view.html.twig */
class __TwigTemplate_fe7a5ec1398dbb3ff73c5b82248f00aea30872dcc29dd19e79580a2c3ebec7b1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"container\">
        <div class=\"col-sm-6\">
            ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "enabled", array()) == true)) {
            // line 6
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_notif", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
            echo "\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 30pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-active\"></i> Send notification</h2>
                </a>
            ";
        } else {
            // line 10
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_truncate_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", array())), 40, true), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_delete", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
        echo "\">Delete</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"card-header ch-img  class-24\" style=\"background-image: url(";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "media", array()), "link", array()), "product_img")), "html", null, true);
        echo "); height: 300px;\">
                    <small style=\" margin: 10px; background: rgba(0, 0, 0, 0.59);padding: 5px;top: -1px;position: absolute;\">";
        // line 36
        echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "created", array()));
        echo "</small>
                    <div class=\"card-header class-23\">
                        <h3 style=\"color:white\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", array()), "html", null, true);
        echo "
                        </h3>
                    </div>
                </div>
                <div class=\"class-28\">";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", array());
        echo "</div>
                <div class=\"class-28\">
                    <ul class=\"lgi-attrs\">
                        <li>Date Created:";
        // line 46
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "created", array()), "d/m/Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "created", array()), "H:i"), "html", null, true);
        echo "</li>
                        <li>
                            Published:
                            ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "enabled", array()) == true)) {
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
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 72
            echo "                        <div class=\"list-group-item media\">
                            <div class=\"pull-left\">
                                ";
            // line 74
            if ((($context["k"] ?? null) == 0)) {
                // line 75
                echo "                                    <div class=\"avatar-char palette-Light-Blue bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 76
($context["k"] ?? null) == 1)) {
                // line 77
                echo "                                    <div class=\"avatar-char palette-Purple-300 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 78
($context["k"] ?? null) == 2)) {
                // line 79
                echo "                                    <div class=\"avatar-char palette-Green-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 80
($context["k"] ?? null) == 3)) {
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
            if ((($context["k"] ?? null) == 3)) {
                // line 126
                echo "                            ";
                $context["k"] = 0;
                // line 127
                echo "                        ";
            } else {
                // line 128
                echo "                            ";
                $context["k"] = (($context["k"] ?? null) + 1);
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
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
        return array (  303 => 136,  300 => 135,  291 => 132,  288 => 131,  283 => 130,  280 => 129,  277 => 128,  274 => 127,  271 => 126,  269 => 125,  262 => 120,  258 => 118,  254 => 116,  252 => 115,  244 => 112,  239 => 110,  233 => 109,  224 => 102,  220 => 100,  216 => 98,  214 => 97,  210 => 96,  204 => 93,  192 => 83,  186 => 81,  184 => 80,  179 => 79,  177 => 78,  172 => 77,  170 => 76,  165 => 75,  163 => 74,  159 => 72,  153 => 71,  151 => 70,  133 => 54,  129 => 52,  125 => 50,  123 => 49,  115 => 46,  109 => 43,  102 => 39,  96 => 36,  92 => 35,  84 => 30,  78 => 27,  66 => 18,  62 => 17,  57 => 14,  49 => 10,  41 => 6,  39 => 5,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Articles:view.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Articles/view.html.twig");
    }
}
