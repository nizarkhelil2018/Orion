<?php
namespace Orion\EventBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Orion\EventBundle\Entity\Billet;
use Orion\EventBundle\Entity\Evenement;
use Orion\EventBundle\Form\BilletUserType;

class User_BilletController extends BaseController {
    /**
     * Lists all Billet entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        //$entities = $em->getRepository('OrionEventBundle:Billet')->findAll();
        $query = $em->createQuery("SELECT b FROM OrionEventBundle:Billet b ORDER BY b.evenement DESC");
        $entities = $query->getResult();
        return $this->render('OrionEventBundle:User_Billet:user_billet_index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Billet entity.
     *
     */
    public function ajoutAction($id) {
        $entity = new Billet();
        $form = $this->createFormBuilder($entity, array(
                    'action' => $this->generateUrl('user_billet_ajout', array('id' => $id)),
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

                $entity->setAttente($entity->getNombre());
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();
            }
            return $this->redirect($this->generateUrl('user_billet_show', array('id' => $entity->getId())));
        }
        return $this->render('OrionEventBundle:User_Billet:user_billet_new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    public function createAction(Request $request, id $id) {

        $evenement = new Evenement();

        $em = $this->getDoctrine()->getManager();

        $evenement = $em->getRepository('OrionEventBundle:Evenement')->find($id);


        $entity = new Billet();
        $entity->setEvenement($evenement);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_billet_show', array('id' => $entity->getId())));
        }

        return $this->render('OrionEventBundle:User_Billet:user_billet_new.html.twig', array(
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
        $form = $this->createForm(new BilletUserType(), $entity, array(
            'action' => $this->generateUrl('user_billet_create'),
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
        //$evenement = new Evenement();
        //$em = $this->getDoctrine()->getManager();
        //$evenement = $em->getRepository('OrionEventBundle:Evenement')->find($id);
        $entity = new Billet();
        // $entity->setEvenement($evenement);

        $form = $this->createCreateForm($entity);

        return $this->render('OrionEventBundle:User_Billet:user_billet_new.html.twig', array(
                    'entity' => $entity,
                    //'evenement' => $evenement,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Billet entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('OrionEventBundle:Billet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Billet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('OrionEventBundle:User_Billet:user_billet_show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Billet entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('OrionEventBundle:Billet')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Billet entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        echo'done0';
        return $this->render('OrionEventBundle:User_Billet:user_billet_edit.html.twig', array(
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
        $id = $entity->getId();
        echo $id;
        $form = $this->createForm(new BilletUserType(), $entity, array(
            'action' => $this->generateUrl('user_billet_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', 'submit', array('label' => 'Update'));
        echo 'CreateEditForm Ok';
        echo $entity->getId();
        return $form;
    }

    /**
     * Edits an existing Billet entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        //echo $id;
        $entity = $em->getRepository('OrionEventBundle:Billet')->find($id);
        //$evenement= $entity.getEvenement();
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Billet entity.');
        }
        
        echo 'test';
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            //$entity->setEvenement($evenement);
            $em->flush();
            return $this->redirect($this->generateUrl('user_billet_show', array('id' => $id)));
        }
        return $this->render('OrionEventBundle:User_Billet:user_billet_edit.html.twig', array(
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

        return $this->redirect($this->generateUrl('user_billet_index'));
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
                        ->setAction($this->generateUrl('user_billet_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete',
                            'translation_domain' => 'messages'))
                        ->getForm()
        ;
        //echo'createDeleteForm';
    }

    /**
     * Search a billet entity.
     *
     */
    public function searchAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $query = $em->createQuery("SELECT b FROM OrionEventBundle:Billet b ORDER BY b.evenement DESC");
        $entities = $query->getResult();
        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $libellet = $request->get('input_libellet');
            $type = $request->get('input_type');
//façon requete 1
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


                $query = $em->createQuery($dql);
                $entities = $query->getResult();
            }
        }

        return $this->render('OrionEventBundle:User_Billet:user_billet_search.html.twig', array(
                    'entities' => $entities
        ));
    }

    /**
     * Diplay tickets of an event.
     *
     */
    public function indexParEventAction($id) {
        $em = $this->getDoctrine()->getManager();
        $evenement = $em->getRepository('OrionEventBundle:Evenement')->find($id);
        $query = $this->getDoctrine()->getEntityManager()
                ->createQuery('SELECT b FROM OrionEventBundle:Billet b WHERE b.evenement = :event')
                ->setParameters(['event' => $evenement]);
        $entities = $query->getResult();
        return $this->render('OrionEventBundle:User_Billet:user_billet_par_event_index.html.twig', array(
                    'entities' => $entities,
        ));
    }

}
