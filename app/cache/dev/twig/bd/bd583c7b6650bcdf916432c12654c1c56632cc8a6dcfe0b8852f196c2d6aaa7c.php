<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_980045a3459f9cd8a0e292d1ae687e39cad6345b56b9837d9255de2395230ebb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

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
    <div class=\"row\">

        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Light-Blue bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-format-list-bulleted zmdi-48\"></i><font><font>
                        ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["categories_count"]) || array_key_exists("categories_count", $context) ? $context["categories_count"] : (function () { throw new Twig_Error_Runtime('Variable "categories_count" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Categories</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-green bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-collection-text\"></i><font><font>
                        ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["articles_count"]) || array_key_exists("articles_count", $context) ? $context["articles_count"] : (function () { throw new Twig_Error_Runtime('Variable "articles_count" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Articles</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Cyan bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-collection-video\"></i><font><font>
                        ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["videos_count"]) || array_key_exists("videos_count", $context) ? $context["videos_count"] : (function () { throw new Twig_Error_Runtime('Variable "videos_count" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Videos</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Purple bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-comments\"></i><font><font>
                        ";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["comments_count"]) || array_key_exists("comments_count", $context) ? $context["comments_count"] : (function () { throw new Twig_Error_Runtime('Variable "comments_count" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Comments</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Pink bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-account\"></i><font><font>
                        ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["users_count"]) || array_key_exists("users_count", $context) ? $context["users_count"] : (function () { throw new Twig_Error_Runtime('Variable "users_count" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Users</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Blue-Grey bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-help m-r-5 zmdi-48\"></i><font><font>
                        ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["messages_count"]) || array_key_exists("messages_count", $context) ? $context["messages_count"] : (function () { throw new Twig_Error_Runtime('Variable "messages_count" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Messages</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Light-Blue bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-format-list-bulleted zmdi-48\"></i><font><font>
                        ";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["pollquestionary_count"]) || array_key_exists("pollquestionary_count", $context) ? $context["pollquestionary_count"] : (function () { throw new Twig_Error_Runtime('Variable "pollquestionary_count" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Poll</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Light-Blue bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-format-list-bulleted zmdi-48\"></i><font><font>
                        ";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["subscription_count"]) || array_key_exists("subscription_count", $context) ? $context["subscription_count"] : (function () { throw new Twig_Error_Runtime('Variable "subscription_count" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Subscription</h2>
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
        return "AppBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 88,  138 => 77,  124 => 66,  110 => 55,  96 => 44,  82 => 33,  68 => 22,  54 => 11,  44 => 3,  38 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body%}
<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Light-Blue bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-format-list-bulleted zmdi-48\"></i><font><font>
                        {{categories_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Categories</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-green bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-collection-text\"></i><font><font>
                        {{articles_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Articles</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Cyan bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-collection-video\"></i><font><font>
                        {{videos_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Videos</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Purple bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-comments\"></i><font><font>
                        {{comments_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Comments</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Pink bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-account\"></i><font><font>
                        {{users_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Users</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Blue-Grey bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-help m-r-5 zmdi-48\"></i><font><font>
                        {{messages_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Messages</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Light-Blue bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-format-list-bulleted zmdi-48\"></i><font><font>
                        {{pollquestionary_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Poll</h2>
                </div>
            </div>
        </div>
        <div class=\"col-sm-4\"  style=\"padding:10px\">
            <div class=\"card c-dark palette-Light-Blue bg \">
                <div class=\"card-body card-padding\">
                    <h2 class=\"m-t-0 m-b-15 c-white\">
                        <i class=\"zmdi zmdi-format-list-bulleted zmdi-48\"></i><font><font>
                        {{subscription_count}}
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Subscription</h2>
                </div>
            </div>
        </div>            
    </div>
</div>
{% endblock%}
", "AppBundle:Home:index.html.twig", "/var/www/news-app-material/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
