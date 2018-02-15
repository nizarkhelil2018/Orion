<?php

namespace Orion\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Orion\EventBundle\Entity\Evenement;
use AppBundle\Entity\User;
use Orion\EventBundle\Form\EvenementAdminType;
use Orion\EventBundle\Form\EvenementEditType;
use Orion\EventBundle\Controller\BaseController;

/**
 * Evenement controller.
 *
 */
class Admin_EventController extends BaseController {

    /**
     * Lists all Evenement entities.
     *
     */
    public function indexAction() {
        $this->isAuthorised('ROLE_ADMIN');

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OrionEventBundle:Evenement')->findAll();

        return $this->render('OrionEventBundle:Admin_Events:admin_event_index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Evenement entity.
     *
     */
    public function createAction(Request $request) {
        $this->isAuthorised('ROLE_ADMIN');
        $entity = new Evenement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);        
        if ($form->isValid()) {            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            //$user = new Utilisateur;
            //$user->app.user;
            //$userId = $user->getId();
            //$entity->setOrganisateur($userId);

            return $this->redirect($this->generateUrl('admin_event_show', array('id' => $entity->getId())));
        }

        return $this->render('OrionEventBundle:Admin_Events:admin_event_new.html.twig', array(
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
        $form = $this->createForm(new EvenementAdminType(), $entity, array(
            'action' => $this->generateUrl('admin_event_create'),
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
        $this->isAuthorised('ROLE_ADMIN');
        $entity = new Evenement();
        $form = $this->createCreateForm($entity);

        return $this->render('OrionEventBundle:Admin_Events:admin_event_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Evenement entity.
     *
     */
    public function showAction($id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:Admin_Events:admin_event_show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Evenement entity.
     *
     */
    public function editAction($id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:Admin_Events:admin_event_edit.html.twig', array(
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
        $form = $this->createForm(new EvenementEditType(), $entity, array(
            'action' => $this->generateUrl('admin_event_update', array('id' => $entity->getId())),
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
        $this->isAuthorised('ROLE_ADMIN');
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

            return $this->redirect($this->generateUrl('admin_event_show', array('id' => $id)));
        }

        return $this->render('OrionEventBundle:Admin_Events:admin_event_edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Evenement entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
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

        return $this->redirect($this->generateUrl('admin_event_index'));
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
                        ->setAction($this->generateUrl('admin_event_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete',
                            'translation_domain' => 'messages'))
                        ->getForm()
        ;
    }

    /**
     * Publish an event entity.
     *
     */
    public function publishAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
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
            return $this->redirect($this->generateUrl('admin_event_show', array('id' => $id)));
        }
        return $this->redirect($this->generateUrl('admin_event_edit_State', array('id' => $id)));
    }
    /**
     * hide an event entity.
     *
     */
    public function hideAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
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
            return $this->redirect($this->generateUrl('admin_event_show', array('id' => $id)));
        }
        return $this->redirect($this->generateUrl('admin_event_edit_State', array('id' => $id)));
    }
    /**
     * Cancel an event entity.
     *
     */

    public function cancelAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
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
            return $this->redirect($this->generateUrl('admin_event_show', array('id' => $id)));
        }
        return $this->redirect($this->generateUrl('admin_event_edit_State', array('id' => $id)));
    }
    /**
     * Edit an event entity state.
     *
     */
    public function editStateAction($id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:Admin_Events:admin_event_edit_Etat.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Search an event entity.
     *
     */
    public function searchAction() {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->container->get('doctrine')->getEntityManager();
        $entities = $em->getRepository('OrionEventBundle:Evenement')->findAll();
        //$entities = "";
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $titre = $request->get('input_titre');
            $description = $request->get('input_description');
            $pays = $request->get('input_pays');
            $etat = $request->get('input_etat');
            $dateDebut = $request->get('"input_date_debut');

            $dql = "SELECT e FROM OrionEventBundle:Evenement e ";
            if ($titre != "" || $description != "" || $pays != "" || $etat != "" || $dateDebut != "" || $pays != "") {
                $dql .='where ';
                if ($titre != "") {
                    $dql .= 'e.titre LIKE \'%' . $titre . '%\' and ';
                }
                if ($description != "") {
                    $dql .= 'e.description LIKE \'%' . $description . '%\' and ';
                }
                if ($etat != "") {
                    $dql .= 'e.etat =' . $etat . ' and ';
                }
                if ($dateDebut != "") {
                    $dql .= 'e.horaireDebut LIKE \'%' . $dateDebut . '%\' and ';
                }
                if ($pays != "") {
                    $dql .= 'e.pays LIKE \'%' . $pays . '%\' and ';
                }
                /* if ($adresse != "") {
                  $dql .= 'e.adresse LIKE \'%' . $adresse . '%\' and ';
                  } */
                $dql = substr($dql, 0, strlen($dql) - 4);


                $query = $em->createQuery($dql);
                $entities = $query->getResult();
            }
        }      

        return $this->render('OrionEventBundle:Admin_Events:admin_event_search.html.twig', array(
                    'entities' => $entities
        ));
    }

}
