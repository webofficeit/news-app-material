<?php

namespace AppBundle\Controller;
use MediaBundle\Entity\Media;
use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\FormError;

class ArticlesController extends Controller
{
    public function api_nextAction(Request $request,$id,$token){
        if ($token!=$this->container->getParameter('token_app')) {
            throw new NotFoundHttpException("Page not found");  
        }
        $em=$this->getDoctrine()->getManager();
        $imagineCacheManager = $this->get('liip_imagine.cache.manager');

        $query = $em->createQuery(
           'SELECT a
            FROM AppBundle:Article a
            WHERE a.enabled=true and a.id < '.$id
            .'ORDER BY a.created desc'
        )->setMaxResults(6);
        $articles = $query->getResult();
        return $this->render('AppBundle:Articles:api_all.html.php',array("articles"=>$articles));
    }
    public function api_allAction(Request $request,$token){
        if ($token!=$this->container->getParameter('token_app')) {
            throw new NotFoundHttpException("Page not found");  
        }
        $em=$this->getDoctrine()->getManager();
        $imagineCacheManager = $this->get('liip_imagine.cache.manager');

        $query = $em->createQuery(
           'SELECT a
            FROM AppBundle:Article a
            WHERE a.enabled=true
            ORDER BY a.created desc'
        )->setMaxResults(6);
        $articles = $query->getResult();
        return $this->render('AppBundle:Articles:api_all.html.php',array("articles"=>$articles));
    }
    public function api_by_category_nextAction(Request $request,$category,$id,$token){
        if ($token!=$this->container->getParameter('token_app')) {
            throw new NotFoundHttpException("Page not found");  
        }
        $em=$this->getDoctrine()->getManager();
        $imagineCacheManager = $this->get('liip_imagine.cache.manager');

        $query = $em->createQuery(
           'SELECT a
            FROM AppBundle:Article a
            WHERE a.enabled=true and a.category='.$category.' and a.id < '.$id
            .'ORDER BY a.created desc '
        )->setMaxResults(6);
        $articles = $query->getResult();
        return $this->render('AppBundle:Articles:api_all.html.php',array("articles"=>$articles));
    }
    public function api_by_queryAction(Request $request,$query,$token){
        if ($token!=$this->container->getParameter('token_app')) {
            throw new NotFoundHttpException("Page not found");  
        }
        $em=$this->getDoctrine()->getManager();
        $imagineCacheManager = $this->get('liip_imagine.cache.manager');
        $query = $em->createQuery(
           "SELECT a
            FROM AppBundle:Article a
            WHERE a.enabled=true and a.title like '%".$query."%'"
            ." ORDER BY a.created desc "
        );
        $articles = $query->getResult();
        return $this->render('AppBundle:Articles:api_all.html.php',array("articles"=>$articles));
    }
    public function api_by_categoryAction(Request $request,$category,$token){
        if ($token!=$this->container->getParameter('token_app')) {
            throw new NotFoundHttpException("Page not found");  
        }
        $em=$this->getDoctrine()->getManager();
        $imagineCacheManager = $this->get('liip_imagine.cache.manager');
        $query = $em->createQuery(
           'SELECT a
            FROM AppBundle:Article a
            WHERE a.enabled=true and a.category='.$category
            .'ORDER BY a.created desc '
        )->setMaxResults(7);
        $articles = $query->getResult();
        return $this->render('AppBundle:Articles:api_all.html.php',array("articles"=>$articles));
    }
    public function indexAction(Request $request)
    {
        $q="  ( 1=1 ) ";
        if ($request->query->has("title") and $request->query->get("title")!="") {
           $title=$request->query->get("title");
           $q.=" AND ( a.title like '%".$title."%')";
        }
        $em= $this->getDoctrine()->getManager();
        $dql        = "SELECT a FROM AppBundle:Article a WHERE a.video is NULL AND ".$q. " ORDER BY a.created desc";
        $query      = $em->createQuery($dql);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),
            12
        );
	    return $this->render('AppBundle:Articles:index.html.twig',array("articles"=>$pagination));
    }
    public function addAction(Request $request)
    {
        $article= new Article();
        $form = $this->createForm(new ArticleType(),$article);
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
                return $this->redirect($this->generateUrl('app_articles_index'));
            }else{
                $error = new FormError("Required image file");
                $form->get('file')->addError($error);
            }
        }
        return $this->render("AppBundle:Articles:add.html.twig",array("form"=>$form->createView()));
    }
    public function deleteAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();

        $article = $em->getRepository("AppBundle:Article")->findOneBy(array("id"=>$id,"video"=>null));
        if($article==null){
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
            return $this->redirect($this->generateUrl('app_articles_index'));
        }
        return $this->render('AppBundle:Articles:delete.html.twig',array("form"=>$form->createView()));
    }
    public function viewAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $article = $em->getRepository("AppBundle:Article")->findOneBy(array("id"=>$id,"video"=>null));
        if ($article==null) {
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

        return $this->render("AppBundle:Articles:view.html.twig",array("article"=>$article,"pagination"=>$pagination));
    }
    public function api_getAction(Request $request,$id,$token)
    {
        if ($token!=$this->container->getParameter('token_app')) {
            throw new NotFoundHttpException("Page not found");  
        }
        $em=$this->getDoctrine()->getManager();
        $article = $em->getRepository("AppBundle:Article")->findOneBy(array("id"=>$id,"enabled"=>true));
        if ($article==null) {
            throw new NotFoundHttpException("Page not found");   
        }
        return $this->render("AppBundle:Articles:get.html.php",array("article"=>$article));
    }
    public function editAction(Request $request,$id)
    {

        $em=$this->getDoctrine()->getManager();
        $article = $em->getRepository("AppBundle:Article")->findOneBy(array("id"=>$id,"video"=>null));
        if ($article==null) {
            throw new NotFoundHttpException("Page not found");   
        }
        $form = $this->createForm(new ArticleType(),$article);
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
            return $this->redirect($this->generateUrl('app_articles_index'));

        }

        return $this->render("AppBundle:Articles:edit.html.twig",array("form"=>$form->createView()));
    }
    public function notifAction($id,Request $request){
        $em=$this->getDoctrine()->getManager();

        $article = $em->getRepository("AppBundle:Article")->findOneBy(array("id"=>$id,"enabled"=>true,"video"=>null));
        if($article==null){
            throw new NotFoundHttpException("Page not found");
        }
        $this->addFlash('success', 'Operation has been done successfully');
        return $this->render("AppBundle:Articles:notif.html.php",array("article"=>$article));
    }
}
