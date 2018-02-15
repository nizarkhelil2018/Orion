<?php

namespace Orion\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Orion\EventBundle\Entity\Evenement;
use Orion\EventBundle\Entity\Billet;
use Orion\EventBundle\Entity\Reservation;
use Orion\EventBundle\Form\EvenementUserType;
Use Orion\EventBundle\Form\EvenementUserEditType;
use Orion\EventBundle\Controller\BaseController;

/**
 * Evenement controller.
 *
 */
class User_Owned_EventsController extends BaseController {
    /**
     * Lists all My Events.
     *
     */
    
    public function myEventsAction() {
        $user = $this->getUser();
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e WHERE e.organisateur = :user')
                ->setParameter('user', $user);
        $evenements = $query->getResult();
        return $this->render('OrionEventBundle:User_Owned_Events:user_owned_events_index.html.twig', array(
                    'entities' => $evenements,
        ));
    }
    
    /**
     * Lists all My Published Events.
     *
     */
    public function myPublishedEventsAction() {
        $user = $this->getUser();
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e WHERE e.organisateur = :user and e.etat = :etat')
                ->setParameters(['user' => $user, 'etat' => 2]);
        $evenements = $query->getResult();
        return $this->render('OrionEventBundle:User_Owned_Events:user_owned_events_index.html.twig', array(
                    'entities' => $evenements,
        ));
    }
    
    /**
     * Lists all My Cancelled Events.
     *
     */
    public function myCancelledEventsAction() {
        $user = $this->getUser();
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e WHERE e.organisateur = :user and e.etat = :etat')
                ->setParameters(['user' => $user, 'etat' => 0]);
        $evenements = $query->getResult();
        return $this->render('OrionEventBundle:User_Owned_Events:user_owned_events_index.html.twig', array(
                    'entities' => $evenements,
        ));
    }

    /**
     * Lists all My Registred Events.
     *
     */
    public function myRegistredEventsAction() {
        $user = $this->getUser();
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e WHERE e.organisateur = :user and e.etat = :etat')
                ->setParameters(['user' => $user, 'etat' => 1]);
        $evenements = $query->getResult();
        return $this->render('OrionEventBundle:User_Owned_Events:user_owned_events_index.html.twig', array(
                    'entities' => $evenements,
        ));
    }
    //***************************************************************************************************
    /**
     * Publish an Event entity.
     *
     */
    public function publishAction(Request $request, $id) {
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e');
        $evenements = $query->getResult();
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('OrionEventBundle:Evenement')->find($id);
        if (!$evenements) {
            throw $this->createNotFoundException('Unable to find Restaurant entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($evenement);
        $editForm->handleRequest($request);
        $evenement->setEtat('2');
        $em->flush();
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('user_owned_event_show', array('id' => $id)));
        }
        return $this->redirect($this->generateUrl('user_owned_events_published', array('id' => $id)));
    }
    /**
     * Hide Event entity.
     *
     */
    public function hideAction(Request $request, $id) {
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e');
        $evenements = $query->getResult();
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('OrionEventBundle:Evenement')->find($id);
        if (!$evenements) {
            throw $this->createNotFoundException('Unable to find Restaurant entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($evenement);
        $editForm->handleRequest($request);
        $evenement->setEtat('1');
        $em->flush();
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('user_owned_events_show', array('id' => $id)));
        }
        return $this->redirect($this->generateUrl('user_owned_events_registred', array('id' => $id)));
    }
    /**
     * Cancel an Event entity.
     *
     */

    public function cancelAction(Request $request, $id) {
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e');
        $evenements = $query->getResult();
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('OrionEventBundle:Evenement')->find($id);
        if (!$evenements) {
            throw $this->createNotFoundException('Unable to find Restaurant entity.');
        }
        $editForm = $this->createEditForm($evenement);
        $editForm->handleRequest($request);
        $evenement->setEtat('0');
        $em->flush();
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('user_owned_events_show', array('id' => $id)));
        }
        return $this->redirect($this->generateUrl('user_owned_events_cancelled', array('id' => $id)));
    }
    
 //***************************************************************************************************

    /**
     * Creates a new Evenement entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Evenement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $user = $this->getUser();
        if ($form->isValid()) {
            $entity->setOrganisateur($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('user_owned_event_show', array('id' => $entity->getId())));
        }
        return $this->render('OrionEventBundle:User_Owned_Events:user_event_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Evenement entity.
     *
     * @param Evenement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Evenement $entity) {
        $form = $this->createForm(new EvenementUserType(), $entity, array(
            'action' => $this->generateUrl('user_owned_event_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Create'));
        return $form;
    }

    /**
     * Displays a form to create a new Evenement entity.
     *
     */
    public function newAction() {
        $entity = new Evenement();
        $form = $this->createCreateForm($entity);
        return $this->render('OrionEventBundle:User_Owned_Events:user_event_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
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
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('OrionEventBundle:User_Owned_Events:user_owned_event_show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Evenement entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('OrionEventBundle:Evenement')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('OrionEventBundle:User_Owned_Events:user_owned_event_edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Evenement entity.
     *
     * @param Evenement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Evenement $entity) {
        $form = $this->createForm(new EvenementUserEditType(), $entity, array(
            'action' => $this->generateUrl('user_owned_event_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit', array('label' => 'Update'));
        return $form;
    }

    /**
     * Edits an existing Evenement entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('OrionEventBundle:Evenement')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('user_owned_event_show', array('id' => $id)));
        }
        return $this->render('OrionEventBundle:User_Owned_Events:user_owned_event_edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes an Evenement entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OrionEventBundle:Evenement')->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Evenement entity.');
            }
            $em->remove($entity);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('user_owned_events_all'));
    }

    /**
     * Creates a form to delete a Evenement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('user_owned_event_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete',
                            'translation_domain' => 'messages'))
                        ->getForm()
        ;
    }


    public function editStateAction($id) {
       
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:User_Owned_Events:user_owned_event_edit_State.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Search an Event entity.
     *
     */
    public function searchAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $user = $this->getUser();
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT e FROM OrionEventBundle:Evenement e WHERE e.organisateur = :user')
                ->setParameter('user', $user);
        $entities = $query->getResult();
        //$entities = "";
        $request = $this->getRequest();
        $userid = $user->getId();
        if ($request->getMethod() == "POST") {
            $titre = $request->get('input_titre');
            $description = $request->get('input_description');
            $adresse = $request->get('input_adresse');
            $etat = $request->get('input_etat');
            $pays = $request->get('input_pays');
            $dateDebut = $request->get('input_date_debut');
            //$theme= $request->get('input_theme');
            //$type= $request->get('input_type');
            
            $dql = "SELECT e FROM OrionEventBundle:Evenement e ";
            //$dql .='where e.organisateur = : \'%' .$userid .'%\' and ';
            //$dql = $this->getDoctrine()->getEntityManager()
            //        ->createQuery('SELECT e FROM OrionEventBundle:Evenement e WHERE e.organisateur = :user')
           //         ->setParameter('user', $user);
            
            if ($titre != "" || $description != "" || $adresse != "" || $etat != "" || $dateDebut != "" || $pays != "") {
                $dql .='where ';
                $dql .='e.organisateur =  ' . $userid . ' and ';
                //$dql .='e.organisateur LIKE \'%' . $userid . '%\' and ';
                if ($titre != "") {
                    $dql .= 'e.titre LIKE \'%' . $titre . '%\' and ';
                }
                if ($description != "") {
                    $dql .= 'e.description LIKE \'%' . $description . '%\' and ';
                }

                if ($etat != "") {
                    $dql .= 'e.etat LIKE \'%' . $etat . '%\' and ';
                }
                 if ($pays != "") {
                    $dql .= 'e.pays LIKE \'%' . $pays . '%\' and ';
                }
                //if ($theme != "") {
                //    $dql .= 'e.theme LIKE \'%' . $theme . '%\' and ';
                //}
               
                /* if ($adresse != "") {
                  $dql .= 'e.adresse LIKE \'%' . $adresse . '%\' and ';
                  } */
                $dql = substr($dql, 0, strlen($dql) - 4);

                //echo ($dql);
                $query = $em->createQuery($dql);
                $entities = $query->getResult();
            }
            
        }
        /* $query = $em->createQuery(
          "SELECT e
          FROM OrionEventBundle:Evenement e
          WHERE e.titre LIKE '%".$libillet."%'"
          ); */

        return $this->render('OrionEventBundle:User_Owned_Events:user_owned_event_search.html.twig', array(
                    'entities' => $entities
        ));
    }
    /**
     * Display an Event Booking list.
     *
     */
    public function bookingListAction($id) {
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('OrionEventBundle:Evenement')->find($id);
        
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT r FROM OrionEventBundle:Reservation r ORDER BY r.billet DESC');
               // ->setParameters(['event' => $evenement]);
        $entities = $query->getResult();
      //  $q = Doctrine_Query::create()
            //->select('r.id')
           // ->from('OrionEventBundle:Reservation r')
            //->innerJoin('r.billet b')
           // ->where('b.evenement=?', $event)
           // ->setParameters(['event' => $evenement]);
       // $entities = $query->getResult();
        return $this->render('OrionEventBundle:User_Reservation:user_billet_event_booking_list.html.twig', array(
                    'entities' => $entities,
                    'id' => $id,
        ));
        
    }

}

