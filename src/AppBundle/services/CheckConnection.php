<?php
namespace AppBundle\services;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;


class CheckConnection
{
    private $session;
    private $auth;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    public function getAuth()
    {
        if( $this->session->get('isAuth') == 'yes' )
        {
            return true;
        }
        else
        {
            return false;
        } 
    }
}
