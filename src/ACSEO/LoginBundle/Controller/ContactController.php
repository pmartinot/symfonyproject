<?php

namespace ACSEO\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use ACSEO\LoginBundle\Entity\Contact;
use ACSEO\LoginBundle\Form\ContactType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ContactController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

       if($request->isMethod('POST')) {
         $form->handleRequest($request);
         if ($form->isValid()) {
           $em = $this->getDoctrine()->getManager();
           $em->persist($contact);
           $em->flush();
           $session = $request->getSession();
           $session->getFlashBag()->add('info', 'Question envoyée avec succès');
           return $this->redirectToRoute('ACSEO_contact_homepage', array('form' => $form->createView()));
         }
       }else{
         return $this->render('ACSEOLoginBundle:Contact:form.html.twig', array(
           'form' => $form->createView()
         ));
       }
    }
}
