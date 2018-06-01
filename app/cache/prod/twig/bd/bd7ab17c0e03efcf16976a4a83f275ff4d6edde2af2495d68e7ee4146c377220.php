<?php

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_4c2127c672ab878bc31ffdf306c9abee7ec7d5b6bc519fa917860a10f8807334 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, ($context["categories_count"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["articles_count"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["videos_count"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["comments_count"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["users_count"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["messages_count"] ?? null), "html", null, true);
        echo "
                    </h2>
                    <h2 class=\"m-t-0 m-b-15 c-white\">Messages</h2>
                </div>
            </div>
        </div>
    </div>
</div>
";
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
        return array (  115 => 66,  101 => 55,  87 => 44,  73 => 33,  59 => 22,  45 => 11,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Home:index.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
