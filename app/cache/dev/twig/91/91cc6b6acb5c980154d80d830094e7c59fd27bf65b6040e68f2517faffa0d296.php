<?php

/* UserBundle:User:edit.html.twig */
class __TwigTemplate_2d2757e6626a0d96d2aa7ca9b8fa729a300fbb411c2dd03490098fe9abda74e0 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

<div class=\"container\">
    <div class=\"card col-sm-6\">
        <div class=\"card-header\">
            <h2>EDIT : ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), "vars", array()), "value", array()), "name", array()), "html", null, true);
        echo "<small>
            </small></h2>
        </div>
        <div class=\"card-body card-padding\">
\t\t\t";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "                    
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "name", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "name", array()), 'errors');
        echo "
                </div>
               \t<div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "email", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "email", array()), 'errors');
        echo "
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "type", array()), 'label', array("label_attr" => array("class" => "")));
        echo "
\t                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 25, $this->source); })()), "type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->source); })()), "type", array()), 'errors');
        echo "
                </div>
                <div class=\"checkbox\">
                        <label>
                        \t";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "enabled", array()), 'widget');
        echo "
                            <i class=\"input-helper\"></i>
                            Enabled
                        </label>
                    </div>
               \t<br>
 \t\t\t\t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-success btn-lg waves-effect pull-right")));
        echo " 
            ";
        // line 37
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 52
            echo "                        <div class=\"list-group-item media\">
                            <div class=\"pull-left\">
                                ";
            // line 54
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 54, $this->source); })()) == 0)) {
                // line 55
                echo "                                    <div class=\"avatar-char palette-Light-Blue bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 56
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 56, $this->source); })()) == 1)) {
                // line 57
                echo "                                    <div class=\"avatar-char palette-Purple-300 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 58
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 58, $this->source); })()) == 2)) {
                // line 59
                echo "                                    <div class=\"avatar-char palette-Green-400 bg\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_first($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", array()), "name", array()))), "html", null, true);
                echo "</div>
                                ";
            } elseif ((            // line 60
(isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 60, $this->source); })()) == 3)) {
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
            if (((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 111, $this->source); })()) == 3)) {
                // line 112
                echo "                            ";
                $context["k"] = 0;
                // line 113
                echo "                        ";
            } else {
                // line 114
                echo "                            ";
                $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new Twig_Error_Runtime('Variable "k" does not exist.', 114, $this->source); })()) + 1);
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
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new Twig_Error_Runtime('Variable "pagination" does not exist.', 122, $this->source); })()));
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
        return "UserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 122,  300 => 121,  291 => 118,  288 => 117,  283 => 116,  280 => 115,  277 => 114,  274 => 113,  271 => 112,  269 => 111,  262 => 106,  258 => 104,  254 => 102,  252 => 101,  244 => 98,  239 => 96,  236 => 95,  228 => 93,  220 => 91,  218 => 90,  208 => 82,  204 => 80,  200 => 78,  198 => 77,  194 => 76,  188 => 73,  176 => 63,  170 => 61,  168 => 60,  163 => 59,  161 => 58,  156 => 57,  154 => 56,  149 => 55,  147 => 54,  143 => 52,  137 => 51,  135 => 50,  119 => 37,  115 => 36,  106 => 30,  99 => 26,  95 => 25,  91 => 24,  85 => 21,  81 => 20,  77 => 19,  71 => 16,  67 => 15,  63 => 14,  58 => 12,  51 => 8,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body%}


<div class=\"container\">
    <div class=\"card col-sm-6\">
        <div class=\"card-header\">
            <h2>EDIT : {{ form.vars.value.name}}<small>
            </small></h2>
        </div>
        <div class=\"card-body card-padding\">
\t\t\t{{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}                    
\t\t\t\t<div class=\"form-group fg-line\">
\t\t\t\t\t{{form_label(form.name,null,{label_attr:{\"class\":\"\"}})}}
\t                {{form_widget(form.name,{attr:{\"class\":\"form-control\"}})}}
\t                {{form_errors(form.name)}}
                </div>
               \t<div class=\"form-group fg-line\">
\t\t\t\t\t{{form_label(form.email,null,{label_attr:{\"class\":\"\"}})}}
\t                {{form_widget(form.email,{attr:{\"class\":\"form-control\"}})}}
\t                {{form_errors(form.email)}}
                </div>
                <div class=\"form-group fg-line\">
\t\t\t\t\t{{form_label(form.type,null,{label_attr:{\"class\":\"\"}})}}
\t                {{form_widget(form.type,{attr:{\"class\":\"form-control\"}})}}
\t                {{form_errors(form.type)}}
                </div>
                <div class=\"checkbox\">
                        <label>
                        \t{{form_widget(form.enabled)}}
                            <i class=\"input-helper\"></i>
                            Enabled
                        </label>
                    </div>
               \t<br>
 \t\t\t\t{{form_widget(form.save,{attr:{\"class\":\"btn btn-success btn-lg waves-effect pull-right\"}})}} 
            {{ form_end(form) }}
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
                                                <a href=\"{{path(\"app_comments_delete\",{\"id\":comment.id,\"from\":\"user\"})}}\">Delete</a>
                                            </li>
                                            <li>
                                                <a href=\"{{path(\"app_comments_hide\",{\"id\":comment.id,\"from\":\"user\"})}}\">
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
                                <div class=\"lgi-heading\"> 
                                \t{% if comment.article.video==\"\" %}
                                \t  <a href=\"{{path(\"app_articles_view\",{\"id\":comment.article.id})}}\" title=\"\">{{comment.article.title}}</a> 
                                \t{% else %}
                                \t  <a href=\"{{path(\"app_videos_view\",{\"id\":comment.article.id})}}\" title=\"\">{{comment.article.title}}</a> 
                                \t{% endif %}
                                </div>
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

{% endblock%}", "UserBundle:User:edit.html.twig", "/var/www/materialdesign/htdocs/src/UserBundle/Resources/views/User/edit.html.twig");
    }
}
