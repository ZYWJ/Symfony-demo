<?php

namespace AssistantBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction() 
    {
        return new Response('<html><body><h1>Hello, 助手后台</h1></body></html>'); 
    }

    public function helloAction($name)
    {
        return $this->render('AssistantBundle:Default:index.html.twig', array('name' => $name));
    }
}
