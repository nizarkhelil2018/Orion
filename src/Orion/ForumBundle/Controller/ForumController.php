<?php
namespace Orion\ForumBundle\Controller;

use Orion\ForumBundle\Controller\Base\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

use Orion\ForumBundle\Entity\Category;
use Orion\ForumBundle\Entity\Forum;
use Orion\ForumBundle\Form\Type\ForumType;
use Orion\ForumBundle\Form\Type\Remover\RemoveForumType;


/**
 * ForumController 
 * 
 * This class contains actions methods for forum.
 * This class extends BaseForumController.
 * 
 * @package  OrionForumBundle
 * @author   David Verdier <contact@orion.com>
 * @access   public
 */
class ForumController extends BaseController
{

    /**
     *
     * @Route("", name="orion_forum_homepage")
     * 
     * @return objet Symfony\Component\HttpFoundation\Response
     * 
     */
    public function indexAction()
    {
        $categories = $this->getEm()
            ->getRepository('OrionForumBundle:Category')
            ->findBy(array(), array('position' => 'asc', ))
        ;

        return $this->render('OrionForumBundle::index.html.twig', array(
            'categories' => $categories
        ));
    }

    /**
     * 
     * @Route("/forum/new/{id}", name="orion_forum_create_forum")
     * @ParamConverter("category")
     * @Security("is_granted('ROLE_ADMIN')")
     * 
     * @param object $request Symfony\Component\HttpFoundation\Request
     * @param objct $category Orion\ForumBundle\Entity\Category
     * 
     * @return object Symfony\Component\HttpFoundation\RedirectResponse redirecting moderator's dashboard
     * @return objet Symfony\Component\HttpFoundation\Response
     * 
     */
    public function newForumAction(Request $request, Category $category)
    {

        $forum = new Forum();
        $forum->setCategory($category);
        
        $form = $this->createForm(ForumType::class, $forum);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getEm();
            $em->persist($forum);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.forum.created'));
            return $this->redirect($this->generateUrl('orion_forum_admin_dashboard'));
        }

        return $this->render('OrionForumBundle::Admin/forum.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * 
     * @Route("forum/edit/{id}", name="orion_forum_edit_forum")
     * @ParamConverter("forum")
     * @Security("is_granted('ROLE_ADMIN')")
     * 
     * @param object $request Symfony\Component\HttpFoundation\Request
     * @param objct $forum Orion\ForumBundle\Entity\Forum
     * 
     * @return object Symfony\Component\HttpFoundation\RedirectResponse redirecting moderator's dashboard
     * @return objet Symfony\Component\HttpFoundation\Response
     * 
     */
    public function editForumAction(Request $request, Forum $forum)
    {
        
        $form = $this->createForm(ForumType::class, $forum);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getEm();
            $em->persist($forum);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.forum.edit'));
            return $this->redirect($this->generateUrl('orion_forum_admin_dashboard'));
        }

        return $this->render('OrionForumBundle::Admin/forum.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * 
     * @Route("forum/remove/{id}", name="orion_forum_remove_forum")
     * @ParamConverter("forum")
     * @Security("is_granted('ROLE_ADMIN')")
     * 
     * @param object $request Symfony\Component\HttpFoundation\Request
     * @param objct $forum Orion\ForumBundle\Entity\Forum
     * 
     * @return object Symfony\Component\HttpFoundation\RedirectResponse moderator's dashboard
     * @return objet Symfony\Component\HttpFoundation\Response
     * 
     */

    public function removeForumAction(Request $request, Forum $forum)
    {

        $form = $this->createForm(RemoveForumType::class);
        $em = $this->getEm();
        if ($form->handleRequest($request)->isValid()) {
            if ($form->getData()['purge'] === false) {
                $newFor = $em->getRepository('OrionForumBundle:Forum')->find($form->getData()['movedTo']) ;
                
                foreach ($forum->getTopics() as $topic) { $topic->setForum($newFor); }
                
                $em->flush();
                $em->clear();
                $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.forum.movedtopics'));
            }
            
            
            $forum = $em->getRepository('OrionForumBundle:Forum')->find($forum->getId()); // Fix detach error
            $em->remove($forum);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.forum.delete'));
            return $this->redirect($this->generateUrl('orion_forum_admin_dashboard'));
        }
 
        return $this->render('OrionForumBundle::Admin/remove_forum.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
