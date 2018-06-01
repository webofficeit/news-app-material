<?php 
function truncate($text, $length=38)
   {
      $trunc = (strlen($text)>$length)?true:false;
      if($trunc)
         return substr($text, 0, $length).'...';
      else
         return $text;
   }
	$a["id"]=$article->getId();
	$a["title"]=$article->getTitle();
	$a["category"]=$article->getCategory()->getTitle();
	$a["short"]=str_replace(array("\n","\r","\t","&nbsp;","&quot;"), array(" "," "," ",""), strip_tags($article->getContent()));
	$a["content"]=$article->getContent();
	$a["video"]=$article->getVideo();
	$a["comment"]=$article->getComment();
	$a["image"]= $this['imagine']->filter($view['assets']->getUrl($article->getMedia()->getLink()), 'api_img');
	$a["created"]=$view['time']->diff($article->getCreated());
	if ($article->getVideo()!="") {
		$a["type"]="video";
	}else{
		$a["type"]="article";
	}

echo json_encode($a, JSON_UNESCAPED_UNICODE);
?>