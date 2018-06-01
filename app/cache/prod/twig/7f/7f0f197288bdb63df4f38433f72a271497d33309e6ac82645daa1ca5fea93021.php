<?php

/* AppBundle:Videos:view.html.twig */
class __TwigTemplate_33cda2e6b4623cd8f5b9fa2f01c111391225d36dcb85f1afb8a97de2275a23fd extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_notif", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
            echo "\"  title=\"\" style=\"\">
                    <h2 style=\"background: #03a9f4;margin: 0px;color: white;height: 77px;line-height: 50px;margin-bottom: 10px;padding: 16px;font-size: 30pt;width: 100%;\"  class=\"btn\" > <i class=\"zmdi zmdi-notifications-active\"></i> Send notification</h2>
                </a>
            ";
        } else {
            // line 10
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
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
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_delete", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
        echo "\">Delete</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class=\"embed-responsive embed-responsive-16by9\">
                    <iframe class=\"embed-responsive-item\" id=\"video-view\" src=\"https://www.youtube.com/embed/";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "video", array()), "html", null, true);
        echo "\"></iframe>
                </div>
                <div class=\"class-28\">
                    <h3>
                    ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", array()), "html", null, true);
        echo "
                    </h3>
                    ";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", array());
        echo "
                </div>
                <div class=\"class-28\">
                    <ul class=\"lgi-attrs\">
                        <li>Date Created:";
        // line 47
        echo $this->extensions['Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension']->diff(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "created", array()));
        echo "</li>
                        <li>
                            Published:
                            ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "enabled", array()) == true)) {
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
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 71
            echo "                        <div class=\"list-group-item media\">
                            <div class=\"pull-left\">
                                ";
            // line 73
            if ((($context["k"] ?? null) == 0)) {
                // line 74
                echo "                                    <div class=\"avatar-char palette-Light-Blue bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 75
($context["k"] ?? null) == 1)) {
                // line 76
                echo "                                    <div class=\"avatar-char palette-Purple-300 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 77
($context["k"] ?? null) == 2)) {
                // line 78
                echo "                                    <div class=\"avatar-char palette-Green-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 79
($context["k"] ?? null) == 3)) {
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
            if ((($context["k"] ?? null) == 3)) {
                // line 125
                echo "                            ";
                $context["k"] = 0;
                // line 126
                echo "                        ";
            } else {
                // line 127
                echo "                            ";
                $context["k"] = (($context["k"] ?? null) + 1);
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
        return "AppBundle:Videos:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 135,  294 => 134,  285 => 131,  282 => 130,  277 => 129,  274 => 128,  271 => 127,  268 => 126,  265 => 125,  263 => 124,  256 => 119,  252 => 117,  248 => 115,  246 => 114,  238 => 111,  233 => 109,  227 => 108,  218 => 101,  214 => 99,  210 => 97,  208 => 96,  204 => 95,  198 => 92,  186 => 82,  180 => 80,  178 => 79,  173 => 78,  171 => 77,  166 => 76,  164 => 75,  159 => 74,  157 => 73,  153 => 71,  147 => 70,  145 => 69,  129 => 55,  125 => 53,  121 => 51,  119 => 50,  113 => 47,  106 => 43,  101 => 41,  94 => 37,  85 => 31,  79 => 28,  67 => 19,  63 => 18,  57 => 14,  49 => 10,  41 => 6,  39 => 5,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Videos:view.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Videos/view.html.twig");
    }
}
