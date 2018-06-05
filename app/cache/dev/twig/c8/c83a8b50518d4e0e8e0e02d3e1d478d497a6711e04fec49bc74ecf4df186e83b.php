<?php

/* AppBundle:Elements:menu.html.twig */
class __TwigTemplate_4e20d627e388eb5acea0d83ace2044d53a7c7d462ac59103456be673ea820cae extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Elements:menu.html.twig"));

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
  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-collection-text\"></i>Poll</a>
    <ul>
      <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poll_index");
        echo "\">Poll List</a></li>
      <li><a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_poll_add");
        echo "\">New Poll</a></li>
    </ul>
  </li>
   <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-collection-text\"></i>Subscription</a>
    <ul>
      <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subcription_index");
        echo "\">Subscription List</a></li>
      <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subcription_add");
        echo "\">New Subscription</a></li>
    </ul>
  </li>
    <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comments_index");
        echo "\"  ><i class=\"zmdi zmdi-comments\"></i>Comments</a></li>
    <li><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_user_index");
        echo "\"  ><i class=\"zmdi zmdi-account\"></i>Users</a></li>
    <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_support_index");
        echo "\"  ><i class=\"zmdi zmdi-help\"></i>Support messages</a></li>
  </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  120 => 48,  116 => 47,  112 => 46,  106 => 43,  102 => 42,  93 => 36,  89 => 35,  80 => 29,  76 => 28,  67 => 22,  63 => 21,  54 => 15,  50 => 14,  43 => 10,  36 => 6,  30 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"smm-alerts\">
  <li>
   <a  class=\"class-29\"href=\"{{path(\"fos_user_security_logout\")}}\" title=\"\"><i class=\"zmdi zmdi-power\" style=\"margin-top: 11px;\"></i></a>
  </li>
  <li>
    <a  class=\"class-29\"href=\"{{path(\"app_home_index\")}}\" title=\"\"><i class=\"zmdi zmdi-home\"  style=\"margin-top: 11px;\"></i></a>
  </li>
</ul>
<ul class=\"main-menu\">
  <li><a href=\"{{path(\"app_home_index\")}}\"  ><i class=\"zmdi zmdi-home\"></i>Home</a></li>
  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-format-list-bulleted\"></i>Categories</a>
    <ul>
      <li><a href=\"{{path(\"app_categories_index\")}}\">Categories List</a></li>
      <li><a href=\"{{path(\"app_categories_add\")}}\">New Category</a></li>
    </ul>
  </li>
  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-collection-text\"></i>Articles</a>
    <ul>
      <li><a href=\"{{path(\"app_articles_index\")}}\">Articles List</a></li>
      <li><a href=\"{{path(\"app_articles_add\")}}\">New Article</a></li>
    </ul>
  </li>
  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-collection-video\"></i>Videos</a>
    <ul>
      <li><a href=\"{{path(\"app_videos_index\")}}\">Videos List</a></li>
      <li><a href=\"{{path(\"app_videos_add\")}}\">New Video</a></li>
    </ul>
  </li>
  <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-collection-text\"></i>Poll</a>
    <ul>
      <li><a href=\"{{path(\"app_poll_index\")}}\">Poll List</a></li>
      <li><a href=\"{{path(\"app_poll_add\")}}\">New Poll</a></li>
    </ul>
  </li>
   <li class=\"sub-menu\">
    <a href=\"#\"  data-ma-action=\"submenu-toggle\"><i class=\"zmdi zmdi-collection-text\"></i>Subscription</a>
    <ul>
      <li><a href=\"{{path(\"app_subcription_index\")}}\">Subscription List</a></li>
      <li><a href=\"{{path(\"app_subcription_add\")}}\">New Subscription</a></li>
    </ul>
  </li>
    <li><a href=\"{{path(\"app_comments_index\")}}\"  ><i class=\"zmdi zmdi-comments\"></i>Comments</a></li>
    <li><a href=\"{{path(\"user_user_index\")}}\"  ><i class=\"zmdi zmdi-account\"></i>Users</a></li>
    <li><a href=\"{{path(\"app_support_index\")}}\"  ><i class=\"zmdi zmdi-help\"></i>Support messages</a></li>
  </ul>
", "AppBundle:Elements:menu.html.twig", "/var/www/news-app-material/src/AppBundle/Resources/views/Elements/menu.html.twig");
    }
}
