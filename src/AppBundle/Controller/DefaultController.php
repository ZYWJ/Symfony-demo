<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="user_homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/admin", name="user_admin")
     */
    public function adminAction()
    {
        foreach ($this->getUser()->getRoles() as $role) {
            if ($role == "ROLE_ADMIN") {
                return $this->render('AppBundle:Default:admin.html.twig', array(
                    'username' => $this->getUser()->getUsername(),
                    'password' => $this->getUser()->getPassword()
                ));
            } 
        }
    }

    /**
     * @Route("/login", name="user_login")
     */
    public function loginAction()
    {
        $helper = $this->get('security.authentication_utils');
        dump($helper->getLastAuthenticationError());
        return $this->render('AppBundle:Default:login.html.twig', array(
            // last username entered by the user (if any)
            'last_username' => $helper->getLastUsername(),
            // last authentication error (if any)
            'error' => $helper->getLastAuthenticationError(),
        ));    
    }

    /**
     * @Route("/check", name="user_check")
     */
    public function checkAction()
    {
    }

    /**
     * @Route("/logout", name="user_logout")
     */
    public function logoutAction()
    {
    }
}
