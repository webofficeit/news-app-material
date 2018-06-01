<?php

/* @App/Articles/api_all.html.php */
class __TwigTemplate_61084ea28ed45a3f73366744be2ddacc842e966de6be755878f4b496f757837c extends Twig_Template
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
        echo "<?php 
function truncate(\$text, \$length=38)
   {
      \$trunc = (strlen(\$text)>\$length)?true:false;
      if(\$trunc)
         return substr(\$text, 0, \$length).'...';
      else
         return \$text;
   }
\$list=array();
foreach (\$articles as \$key => \$article) {
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
\t\$list[]=\$a;
}
echo json_encode(\$list, JSON_UNESCAPED_UNICODE);
?>";
    }

    public function getTemplateName()
    {
        return "@App/Articles/api_all.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Articles/api_all.html.php", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Articles/api_all.html.php");
    }
}
