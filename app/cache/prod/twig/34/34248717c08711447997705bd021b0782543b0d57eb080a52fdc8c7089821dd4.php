<?php

/* UserBundle:User:edit.html.twig */
class __TwigTemplate_922b315e22b3cfd35c9a91679f4e9470f84f2ce0642c7cec3fc1295cb0b94776 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:User:edit.html.twig", 1);
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
    <div class=\"card col-sm-6\">
        <div class=\"card-header\">
            <h2>EDIT : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "value", array()), "name", array()), "html", null, true);
        echo "<small>
            </small></h2>
        </div>
        <div class=\"card-body card-padding\">
\t\t\t";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "                    
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'errors');
        echo "
                </div>
               \t<div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", array()), 'errors');
        echo "
                </div>
                <div class=\"checkbox\">
                        <label>
                        \t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "enabled", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Enabled
                        </label>
                    </div>
               \t<br>
 \t\t\t\t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo " 
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            <br>
            <br>
        </div>
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
        // line 50
        $context["k"] = 0;
        // line 51
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 52
            echo "                        <div class=\"list-group-item media\">
                            <div class=\"pull-left\">
                                ";
            // line 54
            if ((($context["k"] ?? null) == 0)) {
                // line 55
                echo "                                    <div class=\"avatar-char palette-Light-Blue bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 56
($context["k"] ?? null) == 1)) {
                // line 57
                echo "                                    <div class=\"avatar-char palette-Purple-300 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 58
($context["k"] ?? null) == 2)) {
                // line 59
                echo "                                    <div class=\"avatar-char palette-Green-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 60
($context["k"] ?? null) == 3)) {
                // line 61
                echo "                                    <div class=\"avatar-char palette-Red-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            }
            // line 63
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
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_delete", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()), "from" => "user")), "html", null, true);
            echo "\">Delete</a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_hide", array("id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", array()), "from" => "user")), "html", null, true);
            echo "\">
                                                    ";
            // line 77
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "enabled", array()) == true)) {
                // line 78
                echo "                                                        Hide
                                                    ";
            } else {
                // line 80
                echo "                                                        Show
                                                    ";
            }
            // line 82
            echo "                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"media-body\">
                                <div class=\"lgi-heading\"> 
                                \t";
            // line 90
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", array()), "video", array()) == "")) {
                // line 91
                echo "                                \t  <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_view", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", array()), "id", array()))), "html", null, true);
                echo "\" title=\"\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", array()), "title", array()), "html", null, true);
                echo "</a> 
                                \t";
            } else {
                // line 93
                echo "                                \t  <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_view", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", array()), "id", array()))), "html", null, true);
                echo "\" title=\"\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", array()), "title", array()), "html", null, true);
                echo "</a> 
                                \t";
            }
            // line 95
            echo "                                </div>
                                <small class=\"lgi-text\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", array()), "html", null, true);
            echo "</small>
                                <ul class=\"lgi-attrs\">
                                    <li>Date Created:";
            // line 98
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", array()), "d/m/Y"), "html", null, true);
            echo " at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "created", array()), "H:i"), "html", null, true);
            echo "</li>
                                    <li>
                                        Published:
                                        ";
            // line 101
            if ((twig_get_attribute($this->env, $this->source, $context["comment"], "enabled", array()) == true)) {
                // line 102
                echo "                                            Yes
                                        ";
            } else {
                // line 104
                echo "                                            No
                                        ";
            }
            // line 106
            echo "                                    
                                    </li>
                                </ul>
                            </div>
                        </div>
                        ";
            // line 111
            if ((($context["k"] ?? null) == 3)) {
                // line 112
                echo "                            ";
                $context["k"] = 0;
                // line 113
                echo "                        ";
            } else {
                // line 114
                echo "                            ";
                $context["k"] = (($context["k"] ?? null) + 1);
                // line 115
                echo "                        ";
            }
            // line 116
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 117
            echo "                        <p style=\"text-align:center\">
                            <img style=\"padding:50px; width:100%\" src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\" alt=\"\">
                        </p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                    <div class=\" pull-right\">
                        ";
        // line 122
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
        return "UserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 122,  291 => 121,  282 => 118,  279 => 117,  274 => 116,  271 => 115,  268 => 114,  265 => 113,  262 => 112,  260 => 111,  253 => 106,  249 => 104,  245 => 102,  243 => 101,  235 => 98,  230 => 96,  227 => 95,  219 => 93,  211 => 91,  209 => 90,  199 => 82,  195 => 80,  191 => 78,  189 => 77,  185 => 76,  179 => 73,  167 => 63,  161 => 61,  159 => 60,  154 => 59,  152 => 58,  147 => 57,  145 => 56,  140 => 55,  138 => 54,  134 => 52,  128 => 51,  126 => 50,  110 => 37,  106 => 36,  97 => 30,  90 => 26,  86 => 25,  82 => 24,  76 => 21,  72 => 20,  68 => 19,  62 => 16,  58 => 15,  54 => 14,  49 => 12,  42 => 8,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "UserBundle:User:edit.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/User/edit.html.twig");
    }
}
