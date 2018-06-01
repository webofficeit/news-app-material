<?php

/* @App/Videos/notif.html.php */
class __TwigTemplate_6104ea0387f66ab399b597c1077938a6c0abe16064ec279a7808a666175c94c5 extends Twig_Template
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
        echo "
<?php 

    function send_notification ( \$message,\$key)    {
        \$url = 'https://fcm.googleapis.com/fcm/send';
        \$fields = array(
             'to'  => '/topics/global',
             'data' => \$message

            );
        \$headers = array(
            'Authorization:key = '.\$key,
            'Content-Type: application/json'
            );
       \$ch = curl_init();
       curl_setopt(\$ch, CURLOPT_URL, \$url);
       curl_setopt(\$ch, CURLOPT_POST, true);
       curl_setopt(\$ch, CURLOPT_HTTPHEADER, \$headers);
       curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt (\$ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt(\$ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt(\$ch, CURLOPT_POSTFIELDS, json_encode(\$fields));
       \$result = curl_exec(\$ch);           
       if (\$result === FALSE) {
           die('Curl failed: ' . curl_error(\$ch));
       }
       curl_close(\$ch);
       return \$result;
    }
            \$comment=\"false\";
            if (\$article->getComment()==true) {
              \$comment=\"true\";
            }
            \$message = array(
                        \"id\"=>\$article->getId(),
                        \"title\"=>\$article->getTitle(),
                        \"time\"=>\$view['time']->diff(\$article->getCreated()),
                        \"category\"=>\$article->getCategory()->getTitle(),
                        \"image\"=> \$this['imagine']->filter(\$view['assets']->getUrl(\$article->getMedia()->getLink()), 'api_img'),
\t\t\t\t\t\t            \"type\"=>\"video\",
                        \"video\"=>\$article->getVideo(),
                        \"comment\"=>\$comment
                        );
        \$key=\$this->container->getParameter('fire_base_key');
        \$message_status = send_notification(\$message,\$key);

?>
<?php 

        header(\"Location: \".\$view['router']->url('app_videos_view',array(\"id\"=>\$article->getId())));
        die();
 ?>

";
    }

    public function getTemplateName()
    {
        return "@App/Videos/notif.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Videos/notif.html.php", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Videos/notif.html.php");
    }
}
