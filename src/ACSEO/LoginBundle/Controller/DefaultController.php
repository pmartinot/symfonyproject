<?php

namespace ACSEO\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->redirectToRoute('ACSEO_contact_homepage');
    }
}
