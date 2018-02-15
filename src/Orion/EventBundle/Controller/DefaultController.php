<?php

namespace Orion\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
Use Symfony\Component\Translation\Translator;

class DefaultController extends Controller {



    public function indexAction($name) {
       
        
         return $this->render('OrionEventBundle:Default:index.html.twig', array('name' => $name));
    }

    public function redirectAction() {
        $request= $this->getRequest();
        //echo $request->getLocale() ; echo "<br>";
        //$request->setLocale('en_EN');
        //echo $request->getLocale() ;
        $authChecker = $this->container->get('security.authorization_checker');
        $router = $this->container->get('router');

        if ($authChecker->isGranted('ROLE_ADMIN')) {
            return $this->render('OrionEventBundle:Default:index_admin.html.twig', array());
        } elseif ($authChecker->isGranted('ROLE_USER')) {
            return $this->render('OrionEventBundle:Default:index_user.html.twig', array());
        } else {echo "erreur";}
    }

}
