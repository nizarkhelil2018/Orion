<?php
namespace Orion\ForumBundle\Controller;

use Orion\ForumBundle\Controller\Base\BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Orion\ForumBundle\Form\Type\Remover\RemoveCategoryType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

use Orion\ForumBundle\Entity\Category;
use Orion\ForumBundle\Form\Type\CategoryType;

/**
 * CategoryController 
 * 
 * This class contains actions methods for forum.
 * This class extends BaseCategoryController.
 * 
 * @package  OrionForumBundle
 * @author   David Verdier <contact@orion.com>
 * @access   public
 */
class CategoryController extends BaseController
{
    /**
     * 
     * @Route("category/new", name="orion_forum_create_category")
     * @Security("is_granted('ROLE_ADMIN')")
     * 
     * 
     * @param object $request Symfony\Component\HttpFoundation\Request
     * 
     * @return object Symfony\Component\HttpFoundation\RedirectResponse moderator's dashboard
     * @return objet Symfony\Component\HttpFoundation\Response
     * 
     */
    public function newCategoryAction(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category, array('roles' => $this->getRolesList()));

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getEm();
            $em->persist($category);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.category.created'));
            return $this->redirect($this->generateUrl('orion_forum_admin_dashboard'));
        }

        return $this->render('OrionForumBundle::Admin/category.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * 
     * @Route("category/edit/{id}", name="orion_forum_edit_category")
     * @ParamConverter("category")
     * @Security("is_granted('ROLE_ADMIN')")
     * 
     * 
     * @param object $request Symfony\Component\HttpFoundation\Request
     * @param objct $category Orion\ForumBundle\Entity\Category
     * 
     * @return object Symfony\Component\HttpFoundation\RedirectResponse moderator's dashboard
     * @return objet Symfony\Component\HttpFoundation\Response
     * 
     */
    public function editCategoryAction(Request $request, Category $category)
    {   
        $form = $this->createForm(CategoryType::class, $category, array('roles' => $this->getRolesList()));

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getEm();
            $em->persist($category);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.category.edit'));
            return $this->redirect($this->generateUrl('orion_forum_admin_dashboard'));
        }

        return $this->render('OrionForumBundle::Admin/category.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * 
     * @Route("category/remove/{id}", name="orion_forum_remove_category")
     * @ParamConverter("category")
     * @Security("is_granted('ROLE_ADMIN')")
     * 
     * @param object $request Symfony\Component\HttpFoundation\Request
     * @param objct $category Orion\ForumBundle\Entity\Category
     * 
     * @return object Symfony\Component\HttpFoundation\RedirectResponse moderator's dashboard
     * @return objet Symfony\Component\HttpFoundation\Response
     * 
     */
    public function removeCategoryAction(Request $request, Category $category)
    {

        $form = $this->createForm(RemoveCategoryType::class);

        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getEm();
            if ($form->getData()['purge'] === false) {
                $forums = $category->getForums();
                
                $newCat = $em->getRepository('OrionForumBundle:Category')->find($form->getData()['movedTo']) ;
                
                foreach ($forums as $forum) { $forum->setCategory($newCat); }

                $em->flush();
                $em->clear();
                $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.category.movedforums'));
            }
            
            $category = $em->getRepository('OrionForumBundle:Category')->find($category->getId()); // Fix detach error;
            $em->remove($category);
            $em->flush();

            $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.category.delete'));
            return $this->redirect($this->generateUrl('orion_forum_admin_dashboard'));
        }
 
        return $this->render('OrionForumBundle::Admin/remove_category.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
