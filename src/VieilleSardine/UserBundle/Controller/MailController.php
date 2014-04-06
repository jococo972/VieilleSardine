<?php

namespace VieilleSardine\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailController extends Controller {

    public function sendMailAction($name) {
        $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('anes.mahi@gmail.com')
                ->setTo('m.anes@hotmail.fr')
                ->setBody($this->renderView('VieilleSardineUserBundle:Mail:mailBody.html.twig', array('name' => $name)));
        $this->get('mailer')->send($message);

        return $this->render('VieilleSardineUserBundle:Mail:sendConfirmation.html.twig');
    }

}
