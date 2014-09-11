<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduitsController extends Controller
{
    public function produitsAction()
    {
        return $this->render('EcommerceBundle:Default:produit/layout/presentation.html.twig');
    }

    public function presentationAction()
    {
    	return $this->render('EcommerceBundle:Default:produit/layout/produits.html.twig');
    }
}
