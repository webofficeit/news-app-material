<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;
use AppBundle\Entity\Subcription;
use AppBundle\Entity\UserSubcription;
use AppBundle\Form\SubcriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * Description of SubscriptionController
 *
 * @author dell
 */
class SubscriptionController extends Controller {
    
    public function api_pollAction(Request $request,$token,$id){

        // if ($token!=$this->container->getParameter('token_app')) {
        //     throw new NotFoundHttpException("Page not found");
        // }
        $em=$this->getDoctrine()->getManager();
        $subcription=$em->getRepository('AppBundle:Subcription')->findAll();

        $list=array();
        $home["id"]=0;
        $home["title"]="Home";
        $home["description"]="Home";

        $poll_list[]=$home;
        foreach ($pollquestionary as $polllist) {

            $item["id"]=$polllist->getId();
            $item["question"]=$polllist->getQuestion();
            $item["options"] =[];
            foreach($polllist->getPollOptions() as $optionkey => $polloption) {
              $item["options"][$optionkey] = $polloption->getAnswer();
            }
            $poll_list[]=$item;
        }

        header('Content-Type: application/json');
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $jsonContent=$serializer->serialize($poll_list, 'json');
        return new Response($jsonContent);
    }

    public function indexAction(Request $request)
    {
	    $em=$this->getDoctrine()->getManager();
        $Subcription=$em->getRepository('AppBundle:Subcription')->findAll();

	    return $this->render('AppBundle:Subcription:index.html.twig',array("subcription"=>$Subcription));
    }
    public function addAction(Request $request)
    {
        $subcription = new Subcription();
        $em=$this->getDoctrine()->getManager();



        $form = $this->createForm(SubcriptionType::class, $subcription);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

          $em->persist($subcription);
          $em->flush();
          $this->addFlash('success', 'Operation has been added successfully');
          return $this->redirect($this->generateUrl('app_subcription_index'));
        }

        return $this->render('AppBundle:Subcription:add.html.twig', array(
            'form' => $form->createView(),
        ));



    }


    public function deleteAction($id,Request $request){

        $em=$this->getDoctrine()->getManager();

        $subcription = $em->getRepository("AppBundle:Subcription")->find($id);
        if($subcription==null){
            throw new NotFoundHttpException("Page not found");
        }
        if($subcription->getUserSubcription()==null) {
          echo "hhhhhh"; exit();  
        }
        echo "<pre>"; var_dump($subcription->getUserSubcription()); exit();
        $form=$this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->add('Yes', 'submit')
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em->remove($subcription);
            $em->flush();
            $this->addFlash('success', 'Operation has been done successfully');
            return $this->redirect($this->generateUrl('app_subcription_index'));
        }
        return $this->render('AppBundle:Subcription:delete.html.twig',array("form"=>$form->createView()));
    }
    public function editAction(Request $request,$id)
    {

        $em=$this->getDoctrine()->getManager();
        $subcription=$em->getRepository("AppBundle:Subcription")->find($id);
        
        $preferences = array();
        if ($subcription==null) {
            throw new NotFoundHttpException("Page not found");
        }
        $form = $this->createForm(SubcriptionType::class,$subcription);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($subcription);
            $em->flush();
            $this->addFlash('success', 'Operation has been done successfully');
            return $this->redirect($this->generateUrl('app_subcription_index'));

        }
        return $this->render("AppBundle:Subcription:edit.html.twig",array("form"=>$form->createView()));
    }
}
