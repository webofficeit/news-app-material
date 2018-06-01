<?php

/* @App/Articles/notif.html.php */
class __TwigTemplate_3475805bbc6e307ed7ca2ce2f07badde1290b4442b57236155482497a1a5b4ed extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Articles/notif.html.php"));

        // line 1
        echo "
<?php 
    function send_notification (\$message,\$key)
    {
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

    \t\t\$comment=\"false\";
    \t\tif (\$article->getComment()==true) {
    \t\t\t\$comment=\"true\";
    \t\t}
            \$message = array(
                        \"id\"=>\$article->getId(),
                        \"title\"=>\$article->getTitle(),
                        \"time\"=>\$view['time']->diff(\$article->getCreated()),
                        \"category\"=>\$article->getCategory()->getTitle(),
                        \"image\"=> \$this['imagine']->filter(\$view['assets']->getUrl(\$article->getMedia()->getLink()), 'api_img'),
\t\t\t\t\t\t            \"type\"=>\"article\",
\t\t\t\t\t\t            \"comment\"=>\$comment
                        );
        \$key=\$this->container->getParameter('fire_base_key');
        \$message_status = send_notification(\$message,\$key);
       // echo \$message_status;
        header(\"Location: \".\$view['router']->path('app_articles_view',array(\"id\"=>\$article->getId())));
        die();

 ?>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Articles/notif.html.php";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<?php 
    function send_notification (\$message,\$key)
    {
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

    \t\t\$comment=\"false\";
    \t\tif (\$article->getComment()==true) {
    \t\t\t\$comment=\"true\";
    \t\t}
            \$message = array(
                        \"id\"=>\$article->getId(),
                        \"title\"=>\$article->getTitle(),
                        \"time\"=>\$view['time']->diff(\$article->getCreated()),
                        \"category\"=>\$article->getCategory()->getTitle(),
                        \"image\"=> \$this['imagine']->filter(\$view['assets']->getUrl(\$article->getMedia()->getLink()), 'api_img'),
\t\t\t\t\t\t            \"type\"=>\"article\",
\t\t\t\t\t\t            \"comment\"=>\$comment
                        );
        \$key=\$this->container->getParameter('fire_base_key');
        \$message_status = send_notification(\$message,\$key);
       // echo \$message_status;
        header(\"Location: \".\$view['router']->path('app_articles_view',array(\"id\"=>\$article->getId())));
        die();

 ?>", "@App/Articles/notif.html.php", "/var/www/materialdesign/htdocs/src/AppBundle/Resources/views/Articles/notif.html.php");
    }
}
