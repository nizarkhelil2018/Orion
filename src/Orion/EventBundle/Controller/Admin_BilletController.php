<?php

namespace Orion\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Orion\EventBundle\Entity\Billet;
use Orion\EventBundle\Entity\Evenement;
use Orion\EventBundle\Form\BilletType;

/**
 * Billet controller.
 *
 */
class Admin_BilletController extends BaseController {

    /**
     * Lists all Billet entities.
     *
     */
    public function indexAction() {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('OrionEventBundle:Billet')->findAll();
        return $this->render('OrionEventBundle:Admin_Billet:admin_billet_index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Billet entity.
     *
     */
    public function createAction(Request $request) {
        $this->isAuthorised('ROLE_ADMIN');
        $entity = new Billet();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('admin_billet_show', array('id' => $entity->getId())));
        }
        return $this->render('OrionEventBundle:Admin_Billet:admin_billet_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Billet entity.
     *
     * @param Billet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Billet $entity) {
        $form = $this->createForm(new BilletType(), $entity, array(
            'action' => $this->generateUrl('admin_billet_create'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Create'));
        return $form;
    }

    /**
     * Displays a form to create a new Billet entity.
     *
     */
    public function newAction() {
        $this->isAuthorised('ROLE_ADMIN');
        $entity = new Billet();
        $form = $this->createCreateForm($entity);
        return $this->render('OrionEventBundle:Admin_Billet:admin_billet_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Billet entity.
     *
     */
    public function showAction($id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('OrionEventBundle:Billet')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Billet entity.');
        }
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:Admin_Billet:admin_billet_show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Billet entity.
     *
     */
    public function editAction($id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('OrionEventBundle:Billet')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Billet entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:Admin_Billet:admin_billet_edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Billet entity.
     *
     * @param Billet $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Billet $entity) {
        $form = $this->createForm(new BilletType(), $entity, array(
            'action' => $this->generateUrl('admin_billet_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit', array('label' => 'Update'));
        return $form;
    }

    /**
     * Edits an existing Billet entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('OrionEventBundle:Billet')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Billet entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('admin_billet_show', array('id' => $id)));
        }
        return $this->render('OrionEventBundle:Admin_Billet:admin_billet_edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Billet entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OrionEventBundle:Billet')->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Billet entity.');
            }
            $em->remove($entity);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('admin_billet_index'));
    }

    /**
     * Creates a form to delete a Billet entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('admin_billet_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete',
                            'translation_domain' => 'messages'))
                        ->getForm()
        ;
    }
    /**
     * Search a Billet.
     *
     */
    public function searchAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $query = $em->createQuery("SELECT b FROM OrionEventBundle:Billet b ");
        $entities = $query->getResult();
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $libellet = $request->get('input_libellet');
            $type = $request->get('input_type');
            $dql = "SELECT b FROM OrionEventBundle:Billet b ";
            if ($libellet != "" || $type != "") {
                $dql .='where ';
                if ($libellet != "") {
                    $dql .= 'b.libelle LIKE \'%' . $libellet . '%\' and ';
                }
                if ($type != "") {
                    $dql .= 'b.type LIKE \'%' . $type . '%\' and ';
                }
                $dql = substr($dql, 0, strlen($dql) - 4);
                //$dql .='GROUP BY b.evenement';
                $query = $em->createQuery($dql);
                $entities = $query->getResult();
            }
        }
        return $this->render('OrionEventBundle:Admin_Billet:admin_billet_search.html.twig', array(
                    'entities' => $entities
        ));
    }
     /**
     * Add a Billet entity.
     *
     */
    public function ajoutAction($id) {
        $entity = new Billet();
        $form = $this->createFormBuilder($entity, array(
                    'action' => $this->generateUrl('admin_billet_ajout', array('id' => $id)),
                    'method' => 'POST',
                ))
                ->add('libelle')
                ->add('type', 'choice', array(
                    'choices' => array('1' => 'Paying',
                        '0' => 'Free'),
                    'choice_translation_domain' => 'messages',
                    'expanded' => true,
                    'multiple' => false,
                    'data' => ''
                ))
                ->add('prix')
                ->add('nombre')
                ->add('attente')
                ->add('dateCreation', null, array(
                    'label' => 'Date de Création',
                    'date_widget' => 'single_text',
                    'time_widget' => 'single_text'
                ))
                ->add('evenement', 'entity', array(
                    'class' => 'OrionEventBundle:Evenement',
                ))
                ->getForm();
        $form->add('submit', 'submit', array('label' => 'Create'));

        $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $evenement = new Evenement();
                $em = $this->getDoctrine()->getManager();
                $evenement = $em->getRepository('OrionEventBundle:Evenement')->find($id);
                $entity->setEvenement($evenement);
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('admin_billet_show', array('id' => $entity->getId())));
        }
        return $this->render('OrionEventBundle:Admin_Billet:admin_billet_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

}
