<?php

/* AppBundle:Elements:menu.html.twig */
class __TwigTemplate_d658c3f55e3b88ab616ae5291d27c48de4b5db1ab7a16fe7a13360a89930ec71 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<ul class=\"smm-alerts\">
  <li>
   <a  class=\"class-29\"href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\" title=\"\"><i class=\"zmdi zmdi-power\" style=\"margin-top: 11px;\"></i></a>
  </li>
  <li>
    <a  class=\"class-29\"href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_index");
        echo "\" title=\"\"><i class=\"zmdi zmdi-home\"  style=\"margin-top: 11px;\"></i></a>
  </li>
</ul>
<ul class=\"main-menu\">    
  <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_index");
        echo "\"  ><i class=\"zmdi zmdi-home\"></i>Home</a></li>
  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-format-list-bulleted\"></i>Categories</a>
    <ul>
      <li><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_index");
        echo "\">Categories List</a></li>
      <li><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories_add");
        echo "\">New Category</a></li>
    </ul>
  </li>
  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-collection-text\"></i>Articles</a>
    <ul>
      <li><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_index");
        echo "\">Articles List</a></li>
      <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles_add");
        echo "\">New Article</a></li>
    </ul>
  </li>
  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-collection-video\"></i>Videos</a>
    <ul>
      <li><a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_index");
        echo "\">Videos List</a></li>
      <li><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_videos_add");
        echo "\">New Video</a></li>
    </ul>
  </li>
    <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_index");
        echo "\"  ><i class=\"zmdi zmdi-comments\"></i>Comments</a></li>
    <li><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_user_index");
        echo "\"  ><i class=\"zmdi zmdi-account\"></i>Users</a></li>
    <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_support_index");
        echo "\"  ><i class=\"zmdi zmdi-help\"></i>Support messages</a></li>
  </ul>";
    }

    public function getTemplateName()
    {
        return "AppBundle:Elements:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  87 => 33,  83 => 32,  77 => 29,  73 => 28,  64 => 22,  60 => 21,  51 => 15,  47 => 14,  40 => 10,  33 => 6,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Elements:menu.html.twig", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Elements/menu.html.twig");
    }
}
