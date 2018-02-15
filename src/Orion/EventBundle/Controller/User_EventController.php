<?php

namespace Orion\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Orion\EventBundle\Entity\Evenement;
use Orion\EventBundle\Form\EvenementUserType;
use Orion\EventBundle\Controller\BaseController;

/**
 * Evenement controller.
 *
 */
class User_EventController extends BaseController {

    /**
     * Lists all Evenement entities.
     *
     */
    public function indexAction() {

        $user = $this->getUser();
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e WHERE e.etat = :etat and e.organisateur != :user')
                ->setParameters(['user' => $user, 'etat' => 2]);
        $evenements = $query->getResult();
        return $this->render('OrionEventBundle:User_Events:user_events_index_train.html.twig', array(
                    'entities' => $evenements,
        ));
    }
    public function searchAction() {
        $user = $this->getUser();
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e WHERE e.organisateur != :user and e.etat = :etat')
                ->setParameters(['user' => $user, 'etat' => 2]);
        $evenements = $query->getResult();
        return $this->render('OrionEventBundle:User_Events:user_events_search.html.twig', array(
                    'entities' => $evenements,
        ));
    }
    /**
     * Finds and displays a Evenement entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('OrionEventBundle:Evenement')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }
        
        return $this->render('OrionEventBundle:User_Events:user_event_show.html.twig', array(
                    'entity' => $entity,
                    
        ));
    }


}
