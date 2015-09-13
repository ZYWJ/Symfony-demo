<?php

namespace AdminBundle\Security\User;

use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class LoginListener
{
    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        $request = $event->getRequest();
        $captcha = $request->request->get('form')['captcha'];
        $res = $request->getSession()->get('gcb_captcha')['phrase'];

        if (!$captcha) {
            throw new BadCredentialsException('验证码不能为空'); 
        }

        if($captcha !== $res) {
            throw new BadCredentialsException('验证码错误');
        }
    }
}
