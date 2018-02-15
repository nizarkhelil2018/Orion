<?php

namespace Orion\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Orion\EventBundle\Entity\Theme;
use Orion\EventBundle\Form\ThemeType;
use Orion\EventBundle\Form\ThemeTypeEdit;

/**
 * Theme controller.
 *
 */
class Admin_ThemeController extends BaseController {

    /**
     * Lists all Theme entities.
     *
     */
    public function indexAction() {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('OrionEventBundle:Theme')->findAll();

        return $this->render('OrionEventBundle:Admin_Theme:admin_theme_index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Theme entity.
     *
     */
    public function createAction(Request $request) {
        $this->isAuthorised('ROLE_ADMIN');
        $entity = new Theme();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_theme_show', array('id' => $entity->getId())));
        }

        return $this->render('OrionEventBundle:Admin_Theme:admin_theme_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Theme entity.
     *
     * @param Theme $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Theme $entity) {
        $form = $this->createForm(new ThemeType(), $entity, array(
            'action' => $this->generateUrl('admin_theme_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Theme entity.
     *
     */
    public function newAction() {
        $this->isAuthorised('ROLE_ADMIN');
        $entity = new Theme();
        $form = $this->createCreateForm($entity);

        return $this->render('OrionEventBundle:Admin_Theme:admin_theme_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Theme entity.
     *
     */
    public function showAction($id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Theme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Theme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:Admin_Theme:admin_theme_show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Theme entity.
     *
     */
    public function editAction($id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Theme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Theme entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:Admin_Theme:admin_theme_edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Theme entity.
     *
     * @param Theme $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Theme $entity) {
        $form = $this->createForm(new ThemeTypeEdit(), $entity, array(
            'action' => $this->generateUrl('admin_theme_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Theme entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Theme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Theme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_theme_show', array('id' => $id)));
        }

        return $this->render('OrionEventBundle:Admin_Theme:admin_theme_edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Theme entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('OrionEventBundle:Theme')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Theme entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_theme_index'));
    }

    /**
     * Creates a form to delete a Theme entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('admin_theme_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete',
                            'translation_domain' => 'messages'))
                        ->getForm()
        ;
    }
    /**
     * Activate a theme entity.
     *
     */
    public function activateAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT t FROM OrionEventBundle:Theme t');
        $entities = $query->getResult();
        $em = $this->getDoctrine()->getManager();
        $theme = $em->getRepository('OrionEventBundle:Theme')->find($id);
        if (!$entities) {
            throw $this->createNotFoundException('Unable to find Restaurant entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($theme);
        $editForm->handleRequest($request);

        $theme->setEtat('1');
        $em->flush();
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('admin_theme_show', array('id' => $id)));
        }
        return $this->redirect($this->generateUrl('admin_theme_show', array('id' => $id)));
    }
    /**
     * Deactivate a theme entity.
     *
     */
    public function deactivateAction(Request $request, $id) {
        $this->isAuthorised('ROLE_ADMIN');
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT t FROM OrionEventBundle:Theme t');
        $entities = $query->getResult();
        $em = $this->getDoctrine()->getManager();
        $theme = $em->getRepository('OrionEventBundle:Theme')->find($id);
        if (!$entities) {
            throw $this->createNotFoundException('Unable to find Restaurant entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($theme);
        $editForm->handleRequest($request);

        $theme->setEtat('0');
        $em->flush();
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('admin_theme_show', array('id' => $id)));
        }
        return $this->redirect($this->generateUrl('admin_theme_show', array('id' => $id)));
    }
    /**
     * Search a theme entity.
     *
     */
    public function searchAction() {
        $this->isAuthorised('ROLE_ADMIN');
        $em = $this->container->get('doctrine')->getEntityManager();
        $entities = $em->getRepository('OrionEventBundle:Theme')->findAll();
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $libellet = $request->get('input_libellet');
            $description = $request->get('input_description');
            $etat = $request->get('input_etat');
            //façon requete 1
            $dql = "SELECT t FROM OrionEventBundle:Theme t ";
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
        return $this->render('OrionEventBundle:Admin_Theme:admin_theme_search.html.twig', array(
                    'entities' => $entities
        ));
    }
    /**
     * Returns active theme.
     *
     */
    public function getActiveThemesAction(Request $request) {
        $em = $this->container->get('doctrine')->getEntityManager();

        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $search = $request->get('input_recherche');
            //façon requete 1
            $query = $em->createQuery(
                    "SELECT t 
                    FROM OrionEventBundle:Theme t
                    WHERE t.libelle LIKE 1"
            );
            $entities = $query->getResult();
        }
        return $this->render('', array(
                    'entities' => $entities
        ));
    }

}
