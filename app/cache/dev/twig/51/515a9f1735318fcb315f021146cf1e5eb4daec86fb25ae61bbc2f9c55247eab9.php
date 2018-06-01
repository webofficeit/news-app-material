<?php

/* @App/Articles/get.html.php */
class __TwigTemplate_e01a7916d0112beaae1e2f9a707eea189c2c8509582a862c6fab24317eb61139 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Articles/get.html.php"));

        // line 1
        echo "<?php 
function truncate(\$text, \$length=38)
   {
      \$trunc = (strlen(\$text)>\$length)?true:false;
      if(\$trunc)
         return substr(\$text, 0, \$length).'...';
      else
         return \$text;
   }
\t\$a[\"id\"]=\$article->getId();
\t\$a[\"title\"]=\$article->getTitle();
\t\$a[\"category\"]=\$article->getCategory()->getTitle();
\t\$a[\"short\"]=str_replace(array(\"\\n\",\"\\r\",\"\\t\",\"&nbsp;\",\"&quot;\"), array(\" \",\" \",\" \",\"\"), strip_tags(\$article->getContent()));
\t\$a[\"content\"]=\$article->getContent();
\t\$a[\"video\"]=\$article->getVideo();
\t\$a[\"comment\"]=\$article->getComment();
\t\$a[\"image\"]= \$this['imagine']->filter(\$view['assets']->getUrl(\$article->getMedia()->getLink()), 'api_img');
\t\$a[\"created\"]=\$view['time']->diff(\$article->getCreated());
\tif (\$article->getVideo()!=\"\") {
\t\t\$a[\"type\"]=\"video\";
\t}else{
\t\t\$a[\"type\"]=\"article\";
\t}

echo json_encode(\$a, JSON_UNESCAPED_UNICODE);
?>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Articles/get.html.php";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php 
function truncate(\$text, \$length=38)
   {
      \$trunc = (strlen(\$text)>\$length)?true:false;
      if(\$trunc)
         return substr(\$text, 0, \$length).'...';
      else
         return \$text;
   }
\t\$a[\"id\"]=\$article->getId();
\t\$a[\"title\"]=\$article->getTitle();
\t\$a[\"category\"]=\$article->getCategory()->getTitle();
\t\$a[\"short\"]=str_replace(array(\"\\n\",\"\\r\",\"\\t\",\"&nbsp;\",\"&quot;\"), array(\" \",\" \",\" \",\"\"), strip_tags(\$article->getContent()));
\t\$a[\"content\"]=\$article->getContent();
\t\$a[\"video\"]=\$article->getVideo();
\t\$a[\"comment\"]=\$article->getComment();
\t\$a[\"image\"]= \$this['imagine']->filter(\$view['assets']->getUrl(\$article->getMedia()->getLink()), 'api_img');
\t\$a[\"created\"]=\$view['time']->diff(\$article->getCreated());
\tif (\$article->getVideo()!=\"\") {
\t\t\$a[\"type\"]=\"video\";
\t}else{
\t\t\$a[\"type\"]=\"article\";
\t}

echo json_encode(\$a, JSON_UNESCAPED_UNICODE);
?>", "@App/Articles/get.html.php", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Articles/get.html.php");
    }
}
