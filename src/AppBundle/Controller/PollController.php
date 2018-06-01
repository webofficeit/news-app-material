<?php

namespace AppBundle\Controller;
use AppBundle\Entity\PollQuestionary;
use AppBundle\Entity\PollOption;
use AppBundle\Entity\Task;
use AppBundle\Entity\Tag;
use AppBundle\Form\PollQuestionaryType;
use AppBundle\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
class PollController extends Controller
{



    public function api_pollAction(Request $request,$token){

        // if ($token!=$this->container->getParameter('token_app')) {
        //     throw new NotFoundHttpException("Page not found");
        // }
        $em=$this->getDoctrine()->getManager();
        $pollquestionary=$em->getRepository('AppBundle:PollQuestionary')->findAll();

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
        $pollquestionary=$em->getRepository('AppBundle:PollQuestionary')->findAll();

	    return $this->render('AppBundle:Poll:index.html.twig',array("pollquestionary"=>$pollquestionary));
    }
    public function addAction(Request $request)
    {
        $pollquestionary = new PollQuestionary();
        $em=$this->getDoctrine()->getManager();



        $form = $this->createForm(PollQuestionaryType::class, $pollquestionary);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

          $em->persist($pollquestionary);
          $em->flush();
          $this->addFlash('success', 'Operation has been added successfully');
          return $this->redirect($this->generateUrl('app_poll_index'));
        }

        return $this->render('AppBundle:Poll:add.html.twig', array(
            'form' => $form->createView(),
        ));



    }


    public function deleteAction($id,Request $request){

        $em=$this->getDoctrine()->getManager();

        $pollquestionary = $em->getRepository("AppBundle:PollQuestionary")->find($id);
        if($pollquestionary==null){
            throw new NotFoundHttpException("Page not found");
        }

        $form=$this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->add('Yes', 'submit')
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em->remove($pollquestionary);
            $em->flush();
            $this->addFlash('success', 'Operation has been done successfully');
            return $this->redirect($this->generateUrl('app_poll_index'));
        }
        return $this->render('AppBundle:Poll:delete.html.twig',array("form"=>$form->createView()));
    }
    public function editAction(Request $request,$id)
    {

        $em=$this->getDoctrine()->getManager();
        $pollQuestionary=$em->getRepository("AppBundle:PollQuestionary")->find($id);
        //echo "<pre>";var_dump($pollQuestionary->getPollOptions()); exit();
        $preferences = array();
        if ($pollQuestionary==null) {
            throw new NotFoundHttpException("Page not found");
        }
        $form = $this->createForm(PollQuestionaryType::class,$pollQuestionary);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($pollQuestionary);
            $em->flush();
            $this->addFlash('success', 'Operation has been done successfully');
            return $this->redirect($this->generateUrl('app_poll_index'));

        }
        return $this->render("AppBundle:Poll:edit.html.twig",array("form"=>$form->createView()));
    }
}
