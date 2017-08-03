<?php

namespace Main\MainBundle\Controller;

use Main\MainBundle\Entity\Devis;
use Main\MainBundle\Form\Devis1Type;
use Main\MainBundle\Form\Devis2Type;
use Main\MainBundle\Form\Devis3Type;
use Main\MainBundle\MainBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Main\MainBundle\Entity\Contact;
use \Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Main\MainBundle\Form\ContactType;

class DefaultController extends Controller
{
    public function contactAction()
    {
        $contact = new Contact();
        $form = $this->createForm(new ContactType(), $contact);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact Test')
                    ->setFrom('enquiries@symblog.co.uk')
                    ->setTo('tnpcclqp@gmail.com')
                    ->setBody($this->renderView('MainBundle:Contact:contactEmail.txt.twig', array('contact' => $contact)));
                $this->get('mailer')->send($message);

                $this->get('session')->getFlashBag()->Add('notice', 'Your contact enquiry was successfully sent. Thank you!');


                return $this->redirect($this->generateUrl('contact'));
            }
        }

        return $this->render('MainBundle:Contact:contact.html.twig',array('form'=>$form->createView()));
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $projets = $em->getRepository('MainBundle:Projets')->findAll();
        $clients = $em->getRepository('MainBundle:Client')->findAll();
        return $this->render('MainBundle:Default:layout/main.html.twig', array('projets' => $projets,'clients'=>$clients));
    }
    public function a_proposAction()
    {
        $em = $this->getDoctrine()->getManager();
        $apropos = $em->getRepository('MainBundle:APropos')->findAll();
        return $this->render('MainBundle:Default:layout/a_propos.html.twig',array('apropos' => $apropos));
    }

    public function equipeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $equipes = $em->getRepository('MainBundle:Equipe')->findAll();
        return $this->render('MainBundle:Default:layout/equipe.html.twig',array('equipes' => $equipes));
    }
    public function projetsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $projets = $em->getRepository('MainBundle:Projets')->findAll();
        return $this->render('MainBundle:Default:layout/projets.html.twig', array('projets' => $projets));
    }
    public function servicesAction()
    {
        return $this->render('MainBundle:Default:layout/services.html.twig');
    }
    public function web_detailAction()
    {
        return $this->render('MainBundle:Service:layout/Service_Web_Detail.html.twig');
    }

    public function audiovisuel_detailAction()
    {
        return $this->render('MainBundle:Service:layout/Service_Audiovisuel_Detail.html.twig');
    }

    public function graphic_detailAction()
    {
        return $this->render('MainBundle:Service:layout/Service_Graphic_Detail.html.twig');
    }

    public function materiel_detailAction()
    {
        return $this->render('MainBundle:Service:layout/Service_Materiel_Detail.html.twig');
    }

    public function EstimationEtape1Action(Request $request)
    {
        $devis = new Devis();
        $form1 =$this->createForm(new Devis1Type(),$devis);
        if('POST' === $request->getMethod()) {
            $form1->handleRequest($request);
            if ($form1->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($devis);
                $em->flush();
                $id = $devis->getId();
                $this->redirectToRoute('estimation2');
            }
        }

        return $this->render('MainBundle:Default:layout/estimation.html.twig',array(
            'form1'=>$form1->createView()));
    }

    public function EstimationEtape2Action(Request $request,$id)
    {
        $form1 =$this->createForm(new Devis2Type());
        if('POST' === $request->getMethod()) {
            $form1->handleRequest($request);
            if ($form1->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($devis);
                $this->forward($this->EstimationEtape3Action($devis,$request));
            }
        }

        return $this->render('MainBundle:Default:layout/estimation.html.twig',array(
            'form1'=>$form1->createView()));
    }
    public function EstimationEtape3Action($devis,Request $request)
    {
        $form1 =$this->createForm(new Devis3Type());
        if('POST' === $request->getMethod()) {
            $form1->handleRequest($request);
            if ($form1->isValid()) {
                // On l'enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager();
                $em->persist($devis);
                $em->flush();
            }
        }

        return $this->render('MainBundle:Default:layout/estimation.html.twig',array(
            'form1'=>$form1->createView()));
    }

    public function reseau_detailAction()
    {
        return $this->render('MainBundle:Service:layout/Service_Reseau_Detail.html.twig');
    }
    public function projet_detailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $projet = $em->getRepository('MainBundle:Projets')->find($id);
        return $this->render('MainBundle:Default:layout/Projet_Detail.html.twig',array('projet' => $projet));
    }

    public function searchProjetsAction()
    {
        $request = $this->container->get('request');
        $text = $request->query->get('text');
        $em = $this->getDoctrine()->getManager();


        $projets = $em->getRepository('MainBundle:Projets')->findByType($text);

        if($text == 'Tous')
        {
            $projets = $em->getRepository('MainBundle:Projets')->findAll();
        }
        $content = $this->RenderView('MainBundle:Default:layout\searchProjets.html.twig', array(
            'projets' => $projets,
        ));

        $response = new JsonResponse();
        $response->setData(array('classifiedList' => $content));
        return $response;
    }
}
