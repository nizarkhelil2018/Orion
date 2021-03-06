<?php
namespace Orion\ForumBundle\Controller;


use Orion\ForumBundle\Controller\Base\BaseTopicController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Orion\ForumBundle\Form\Type\TopicEditType;
use Orion\ForumBundle\Entity\Forum;
use Orion\ForumBundle\Entity\Topic;
use Symfony\Component\HttpFoundation\Request;

/**
 * TopicController 
 * 
 * This class contains useful methods for the proper functioning of the topic controller and not method actions.
 * This class extends BaseController.
 * 
 * @package  OrionForumBundle
 * @author   David Verdier <contact@orion.com>
 * @access   public
 */
class TopicController extends BaseTopicController
{

    /**
     * infos:  Display the topics of a forum
     * 
     * @Route("/cat/{slug}", name="orion_forum_topic")
     * @ParamConverter("forum")
     * 
     * 
     */
    public function topicAction(Request $request, Forum $forum)
    {
        $topics = $forum->getTopics(); 
        
        $pagination = $this->get('orion.forum.pagin')->pagignate('topics', $topics);
        
        if (($form = $this->generateTopicForm($forum)) !== NULL) {
            if ($form->handleRequest($request)->isValid()) {
                $content = $form->get('content')->getData();
                $post = $this->createPost($content, $this->topic);
                $em = $this->getEm();
                $em->persist($this->topic);
                $em->persist($post);
                $em->flush();

                $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.topic.create'));
                return $this->redirect($this->generateUrl('orion_forum_post', array('slug' => $this->topic->getSlug())));
            }

            $form = $form->createView();
        }
        
        return $this->render('OrionForumBundle::topic.html.twig', array(
            'forum' => $forum,
            'pagination' => $pagination,
            'form' => $form
        ));
    }

    /**
     * @Route("/topic/delete/{id}", name="orion_forum_topic_delete")
     * @ParamConverter("topic")
     * @Security("has_role('ROLE_MODERATOR') and is_granted('CanReadTopic', topic)")
     */
    public function deleteAction(Request $request, Topic $topic)
    {
        $forumSlug = $topic->getForum()->getSlug();
        $em = $this->getEm();
        $em->remove($topic);
        $em->flush();
        $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.topic.delete'));
        return $this->redirect($this->generateUrl('orion_forum_topic', array('slug' => $forumSlug)));       
 
    }

    /**
     * @Route("/topic/edit/{id}", name="orion_forum_topic_edit")
     * @ParamConverter("topic")
     * @Security("has_role('ROLE_MODERATOR') and is_granted('CanReadTopic', topic)")
     * 
     */
    public function editAction(Request $request, Topic $topic)
    {
        $form = $this->createForm(TopicEditType::class, $topic);
        
        if ($form->handleRequest($request)->isValid()) {
            $forumSlug = $topic->getForum()->getSlug();
            $this->getEm()->flush();
            $request->getSession()->getFlashBag()->add('success', $this->getTranslator()->trans('orion.forum.topic.edit'));
            return $this->redirect($this->generateUrl('orion_forum_topic', array('slug' => $forumSlug)));
        }
         
        return $this->render('OrionForumBundle::Form/topic_edit.html.twig', array(
            'form'  => $form->createView()
        ));
    }

}
