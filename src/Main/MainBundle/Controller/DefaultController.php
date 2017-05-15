<?php

namespace Main\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Main\MainBundle\Entity\Contact;
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
        return $this->render('MainBundle:Default:layout/index.html.twig');
    }
    public function a_proposAction()
    {
        $em = $this->getDoctrine()->getManager();
        $apropos = $em->getRepository('MainBundle:Client')->findAll();
        return $this->render('MainBundle:Default:layout/a_propos.html.twig',array('apropos' => $apropos));
    }
    public function audiovisuel_detailAction()
    {
        return $this->render('MainBundle:Default:layout/audiovisuel_detail.html.twig');
    }

    public function equipeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $equipes = $em->getRepository('MainBundle:Equipe')->findAll();
        return $this->render('MainBundle:Default:layout/equipe.html.twig',array('equipes' => $equipes));
    }
    public function graphic_detailAction()
    {
        return $this->render('MainBundle:Default:layout/graphic_detail.html.twig');
    }
    public function projetsAction()
    {
        return $this->render('MainBundle:Default:layout/projets.html.twig');
    }
    public function servicesAction()
    {
        return $this->render('MainBundle:Default:layout/services.html.twig');
    }
    public function social_detailAction()
    {
        return $this->render('MainBundle:Default:layout/social_detail.html.twig');
    }
    public function web_detailAction()
    {
        return $this->render('MainBundle:Default:layout/web_detail.html.twig');
    }

}
