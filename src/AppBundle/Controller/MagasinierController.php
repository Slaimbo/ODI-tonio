<?php

namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MagasinierController extends Controller{
           
    public function interfaceAction(Request $request) {
        //On regarde si l'utilisateur est deja logé
        $session = $request->getSession();
        
        //Si l'utilisateur est deja logé on le log pas une autre fois
        if( $session->get('access') == 'magasinier' )
        {
           return $this->render('magasinier/interface.html.twig');
        }  
        return $this->redirectToRoute('listproduit');
    }
}