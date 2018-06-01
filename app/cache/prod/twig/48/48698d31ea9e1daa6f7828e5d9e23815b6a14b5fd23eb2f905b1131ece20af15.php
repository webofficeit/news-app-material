<?php

/* @App/Articles/get.html.php */
class __TwigTemplate_68351e2e020159aa53af70cbced3b3f4d210641d4b22c74c7678e1d2cf1abafd extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "@App/Articles/get.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Articles/get.html.php", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Articles/get.html.php");
    }
}
