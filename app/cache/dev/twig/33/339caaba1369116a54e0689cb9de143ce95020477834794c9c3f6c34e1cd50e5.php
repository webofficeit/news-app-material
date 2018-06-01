<?php

/* @App/Videos/notif.html.php */
class __TwigTemplate_5a7b1b60309e20fc17754f959f12f6487d248f6a8b48de4c87b9725451976333 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Videos/notif.html.php"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Videos/notif.html.php";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
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

", "@App/Videos/notif.html.php", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Videos/notif.html.php");
    }
}
