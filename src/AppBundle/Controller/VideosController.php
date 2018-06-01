<?php

namespace AppBundle\Controller;
use MediaBundle\Entity\Media;
use AppBundle\Entity\Article;
use AppBundle\Form\VideoType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormError;

class VideosController extends Controller
{

    public function indexAction(Request $request)
    {
        $q="  ( 1=1 ) ";
        if ($request->query->has("title") and $request->query->get("title")!="") {
           $title=$request->query->get("title");
           $q.=" AND ( a.title like '%".$title."%')";
        }
        $em= $this->getDoctrine()->getManager();
        $dql        = "SELECT a FROM AppBundle:Article a WHERE a.video is not NULL AND ".$q. " ORDER BY a.created desc";
        $query      = $em->createQuery($dql);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
            12
        );
	    return $this->render('AppBundle:Videos:index.html.twig',array("articles"=>$pagination));
    }
    public function addAction(Request $request)
    {
        $article= new Article();
        $form = $this->createForm(new VideoType(),$article);
        $em=$this->getDoctrine()->getManager();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            if( $article->getFile()!=null ){
                $media= new Media();
                $media->setFile($article->getFile());
                $media->upload($this->container->getParameter('files_directory'));
                $media->setEnabled(true);
                $em->persist($media);
                $em->flush();
                $article->setMedia($media);
                $em->persist($article);
                $em->flush();
                $this->addFlash('success', 'Operation has been done successfully');
                return $this->redirect($this->generateUrl('app_videos_index'));
            }else{
                $error = new FormError("Required file");
                $form->get('file')->addError($error);
            }
        }
        return $this->render("AppBundle:Videos:add.html.twig",array("form"=>$form->createView()));
    }
    public function deleteAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();

        $article = $em->getRepository("AppBundle:Article")->find($id);

        if($article==null){
            throw new NotFoundHttpException("Page not found");
        }
        if($article->getVideo()==null){
            throw new NotFoundHttpException("Page not found");
        }
        $form=$this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->add('Yes', 'submit')
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $media=$article->getMedia();
            $em->remove($article);
            $em->flush();

            if($media!=null){
                $media->delete($this->container->getParameter('files_directory'));
                $em->remove($media);
                $em->flush();
            }
            $this->addFlash('success', 'Operation has been done successfully');
            return $this->redirect($this->generateUrl('app_videos_index'));
        }
        return $this->render('AppBundle:Videos:delete.html.twig',array("form"=>$form->createView()));
    }
    public function viewAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $article= $em->getRepository("AppBundle:Article")->findOneBy(array("id"=>$id));
        if($article==null){
            throw new NotFoundHttpException("Page not found");
        }
        if($article->getVideo()==null){
            throw new NotFoundHttpException("Page not found");
        }
                $em= $this->getDoctrine()->getManager();
        $dql        = "SELECT c FROM AppBundle:Comment c WHERE c.article =".$article->getId();
        $query      = $em->createQuery($dql);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
            8
        );
        $article->setVideo($this->getYoutubeIdFromUrl($article->getVideo()));
        return $this->render("AppBundle:Videos:view.html.twig",array("article"=>$article,"pagination"=>$pagination));
    }
    public function editAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $article= $em->getRepository("AppBundle:Article")->findOneBy(array("id"=>$id));
        if($article==null){
            throw new NotFoundHttpException("Page not found");
        }
        if($article->getVideo()==null){
            throw new NotFoundHttpException("Page not found");
        }
        $form = $this->createForm(new VideoType(),$article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if( $article->getFile()!=null ){
                $media= new Media();
                $media_old=$article->getMedia();
                $media->setFile($article->getFile());
                $media->setEnabled(true);
                $media->upload($this->container->getParameter('files_directory'));
                $em->persist($media);
                $em->flush();
                $article->setMedia($media);
                $em->flush();
                $media_old->delete($this->container->getParameter('files_directory'));
                $em->remove($media_old);
                $em->flush();
            }
            $em->flush();
            $this->addFlash('success', 'Operation has been done successfully');
            return $this->redirect($this->generateUrl('app_videos_index'));

        }

        return $this->render("AppBundle:Videos:edit.html.twig",array("form"=>$form->createView()));
    }
    public function notifAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();

        $article = $em->getRepository("AppBundle:Article")->findOneBy(array("id"=>$id,"enabled"=>true));
        if($article==null){
            throw new NotFoundHttpException("Page not found");
        }
        if($article->getVideo()==null){
            throw new NotFoundHttpException("Page not found");
        }
        $this->addFlash('success', 'Operation has been done successfully');
        return $this->render("AppBundle:Videos:notif.html.php",array("article"=>$article));
    }
    function getYoutubeIdFromUrl($url) {
        $parts = parse_url($url);
        if(isset($parts['query'])){
            parse_str($parts['query'], $qs);
            if(isset($qs['v'])){
                return $qs['v'];
            }else if(isset($qs['vi'])){
                return $qs['vi'];
            }
        }
        if(isset($parts['path'])){
            $path = explode('/', trim($parts['path'], '/'));
            return $path[count($path)-1];
        }
        return false;
    }
}