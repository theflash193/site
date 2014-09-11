<?php

namespace Site\FrontEndBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteFrontEndBundle:Default:index.html.twig');
    }

	public function contactAction()
    {
        return $this->render('SiteFrontEndBundle:Default:contact.html.twig');
    }

	public function presseAction()
    {
        return $this->render('SiteFrontEndBundle:Default:presse.html.twig');
    }

   	public function eshopAction()
    {
        return $this->render('SiteFrontEndBundle:Default:eshop.html.twig');
    }
}
