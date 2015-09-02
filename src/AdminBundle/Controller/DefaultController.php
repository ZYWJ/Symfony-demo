<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AdminBundle\Entity\Product;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //return new Response('<html><body><h1>Hello, 管理员后台</h1></body></html>'); 
        return $this->render('AdminBundle:Default:index.html.twig', array(
            'page_title' => '管理员后台',
            'name'       => 'zywj'
        ));
    }

    public function helloAction($name) 
    {
        return new Response('<html><body><h1>Hello, 管理员后台，'. $name .'</h1></body></html>'); 
    }

    public function templateAction()
    {
        return $this->render('AdminBundle:Default:index.html.twig', array(
            'page_title' => "管理员后台",
            'name' => '显示模板啦' 
        )); 
    }

    public function validationAction()
    {
        $product = new Product(); 
        $product->setName('zywj');
        $product->setPrice("adsf");

        $validator = $this->get('validator');
        $errors = $validator->validate($product, null, array('add'));

        if (count($errors)) {
            dump($errors); 
        }

        return new Response('<html><body><h1>Validation demo</h1></body></html>');
    }

    public function formAction(Request $request)
    {
        $product = new Product();
        // 后端生成一个表单，设定验证分组为add
        $form = $this->createFormBuilder($product, array('validation_groups' => 'add'))
            ->add('name', 'text', array('required' => false))
            ->add('price', 'integer', array('required' => false))
            ->add('save', 'submit')
            ->getForm();
        
        // 如果有提交，就处理
        $form->handleRequest($request);

        // 验证表单
        if ($form->isValid()) {
            return $this->redirectToRoute('admin_form_result', array(
                'name' => $form->getData()->getName(),
                'price' => $form->getData()->getPrice(),
            )); 
        }

        return $this->render('AdminBundle:Default:form.html.twig', array(
            'page_title' => '表单验证',
            'product_form' => $form->createView()
        ));
    }

    public function formresAction($name, $price)
    {
        return new Response('<html><body><h1>产品名称: '. $name .'<br/>价格: '. $price .'</h1></body></html>'); 
    }

    public function adminAction()
    {
        return $this->render('AdminBundle:Default:admin.html.twig', array(
            'username' => $this->getUser()->getUsername(),
            'password' => $this->getUser()->getPassword()
        ));
    }

    public function loginAction()
    {
        $helper = $this->get('security.authentication_utils');
        dump($helper->getLastAuthenticationError());
        return $this->render('AdminBundle:Default:login.html.twig', array(
            // last username entered by the user (if any)
            'last_username' => $helper->getLastUsername(),
            // last authentication error (if any)
            'error' => $helper->getLastAuthenticationError(),
        ));    
    }

    public function serviceAction()
    {
        $cpo = $this->get('admin.cpo');
        $cpo->setStr('zywj');

        return new Response('<html><body><h1> output from service : '. $cpo->getStr() .'</h1></body></htm>');
    }
}
