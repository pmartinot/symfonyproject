<?php

namespace ACSEO\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use ACSEO\LoginBundle\Entity\Contact;
use ACSEO\LoginBundle\Form\ContactType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminController extends Controller
{
    public function indexAction(Request $request)
    {
      if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
        throw new AccessDeniedHttpException('Accès interdit.');
      }else{

        return $this->render('ACSEOLoginBundle:Contact:admin.html.twig', array(
          'listContacts' => $this->getAll()
        ));
      }
    }
      /**
       * @Route("/contact/check/{slug}", name="ACSEO_contact_check")
       */
      public function checkAction($id)
      {
        if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
          throw new AccessDeniedHttpException('Accès interdit.');
        }else{
          $repository = $this->getDoctrine()->getManager()->getRepository('ACSEOLoginBundle:Contact');
          $contact = $repository->find($id);
          if(!$contact->getState()){
            $contact->setState(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
          }
          return $this->redirectToRoute('ACSEO_contact_admin', array(
            'listContacts' => $this->getAll()
          ));
        }
      }

      public function getAll(){
        $repository = $this->getDoctrine()->getManager()->getRepository('ACSEOLoginBundle:Contact');
        return $repository->findAll();
      }
}
