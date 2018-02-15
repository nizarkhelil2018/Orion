<?php

namespace Orion\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Orion\EventBundle\Entity\Type;
use Orion\EventBundle\Form\TypeType;
use Orion\EventBundle\Form\TypeTypeEdit;

/**
 * Type controller.
 *
 */
class Admin_TypeController extends BaseController {

    /**
     * Lists all Type entities.
     *
     */
    public function indexAction() {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OrionEventBundle:Type')->findAll();

        return $this->render('OrionEventBundle:Admin_Type:admin_type_index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Type entity.
     *
     */
    public function createAction(Request $request) {
        $this->isAuthorised('ROLE_ADMIN');
        $entity = new Type();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_type_show', array('id' => $entity->getId())));
        }

        return $this->render('OrionEventBundle:Admin_Type:admin_type_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Type entity.
     *
     * @param Type $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Type $entity) {
        $form = $this->createForm(new TypeType(), $entity, array(
            'action' => $this->generateUrl('admin_type_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Type entity.
     *
     */
    public function newAction() {
        $this->isAuthorised('ROLE_ADMIN');
        $entity = new Type();
        $form = $this->createCreateForm($entity);

        return $this->render('OrionEventBundle:Admin_Type:admin_type_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Type entity.
     *
     */
    public function showAction($id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Type')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Type entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:Admin_Type:admin_type_show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Type entity.
     *
     */
    public function editAction($id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Type')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Type entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:Admin_Type:admin_type_edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Type entity.
     *
     * @param Type $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Type $entity) {
        $form = $this->createForm(new TypeTypeEdit(), $entity, array(
            'action' => $this->generateUrl('admin_type_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Type entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Type')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Type entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_type_show', array('id' => $id)));
        }

        return $this->render('OrionEventBundle:Admin_Type:admin_type_edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Type entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OrionEventBundle:Type')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Type entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_type_index'));
    }

    /**
     * Creates a form to delete a Type entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('admin_type_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete',
                            'translation_domain' => 'messages'))
                        ->getForm()
        ;
    }
    /**
     * Activate a type entity.
     *
     */
    public function activateAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT t FROM OrionEventBundle:Type t');
        $types = $query->getResult();
        $em = $this->getDoctrine()->getManager();
        $type = $em->getRepository('OrionEventBundle:Type')->find($id);
        if (!$types) {
            throw $this->createNotFoundException('Unable to find Restaurant entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($type);
        $editForm->handleRequest($request);

        $type->setEtat('1');
        $em->flush();
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('admin_type_show', array('id' => $id)));
        }
        return $this->redirect($this->generateUrl('admin_type_show', array('id' => $id)));
    }
    /**
     * Deactivate a type entity.
     *
     */
    public function deactivateAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT t FROM OrionEventBundle:Type t');
        $types = $query->getResult();
        $em = $this->getDoctrine()->getManager();
        $type = $em->getRepository('OrionEventBundle:Type')->find($id);
        if (!$types) {
            throw $this->createNotFoundException('Unable to find Restaurant entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($type);
        $editForm->handleRequest($request);

        $type->setEtat('0');
        $em->flush();
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('admin_type_show', array('id' => $id)));
        }
        return $this->redirect($this->generateUrl('admin_type_show', array('id' => $id)));
    }
    /**
     * Search a type entity.
     *
     */
    public function searchAction() {
        $this->isAuthorised('ROLE_ADMIN');

        $em = $this->container->get('doctrine')->getEntityManager();
        $entities = $em->getRepository('OrionEventBundle:Type')->findAll();

        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $libellet = $request->get('input_libellet');
            $description = $request->get('input_description');
            $etat = $request->get('input_etat');
            //façon requete 1
            $dql = "SELECT t FROM OrionEventBundle:Type t ";
            if ($libellet != "" || $description != "" || $etat != "") {
                $dql .='where ';
                if ($libellet != "") {
                    $dql .= 't.libelle LIKE \'%' . $libellet . '%\' and ';
                }
                if ($description != "") {
                    $dql .= 't.description LIKE \'%' . $description . '%\' and ';
                }
                if ($etat != "") {
                    $dql .= 't.etat =' . $etat . ' and ';
                }
                $dql = substr($dql, 0, strlen($dql) - 4);


                $query = $em->createQuery($dql);
                $entities = $query->getResult();
            }
        }

        return $this->render('OrionEventBundle:Admin_Type:admin_type_search.html.twig', array(
                    'entities' => $entities
        ));
    }

}
