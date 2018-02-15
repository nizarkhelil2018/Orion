<?php

namespace Orion\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OrionForumBundle:Default:index.html.twig');
    }
}
