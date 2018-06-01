
<?php 

    function send_notification ( $message,$key)    {
        $url = 'https://fcm.googleapis.com/fcm/send';
        $fields = array(
             'to'  => '/topics/global',
             'data' => $message

            );
        $headers = array(
            'Authorization:key = '.$key,
            'Content-Type: application/json'
            );
       $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
       $result = curl_exec($ch);           
       if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
       }
       curl_close($ch);
       return $result;
    }
            $comment="false";
            if ($article->getComment()==true) {
              $comment="true";
            }
            $message = array(
                        "id"=>$article->getId(),
                        "title"=>$article->getTitle(),
                        "time"=>$view['time']->diff($article->getCreated()),
                        "category"=>$article->getCategory()->getTitle(),
                        "image"=> $this['imagine']->filter($view['assets']->getUrl($article->getMedia()->getLink()), 'api_img'),
						            "type"=>"video",
                        "video"=>$article->getVideo(),
                        "comment"=>$comment
                        );
        $key=$this->container->getParameter('fire_base_key');
        $message_status = send_notification($message,$key);

?>
<?php 

        header("Location: ".$view['router']->url('app_videos_view',array("id"=>$article->getId())));
        die();
 ?>

