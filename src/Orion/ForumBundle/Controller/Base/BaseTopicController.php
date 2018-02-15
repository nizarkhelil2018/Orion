<?php

namespace Orion\ForumBundle\Controller\Base;

use Orion\ForumBundle\Controller\Base\BaseController;

use Orion\ForumBundle\Entity\Forum;
use Orion\ForumBundle\Form\Type\TopicType;
use Orion\ForumBundle\Entity\Topic;
use Orion\ForumBundle\Entity\Post;

/**
 * BaseTopicController 
 * 
 * This class contains useful methods for the proper functioning of the topic controller and not method actions.
 * This class extends BaseController.
 * 
 * @package  OrionForumBundle
 * @author   David Verdier <contact@orion.com>
 * @access   protected
 */
class BaseTopicController extends BaseController
{
    /*
     * @var object $post Orion\ForumBundle\Entity\Topic
     */
    protected $topic;

    /**
     * Generate topic form or return Null if not authorised
     * 
     * @param objet $forum  Orion\ForumBundle\Entity\Forum
     * 
     * @return NULL|object Symfony\Component\Form\Form
     */
    protected function generateTopicForm(Forum $forum) {
        
        if ($this->getAuthorization()->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            $user = $this->get('security.token_storage')->getToken()->getUser();       
            $this->topic = new Topic();
            $this->topic->setForum($forum);
            $this->topic->setUser( $user );
            return $this->createForm(TopicType::class, $this->topic);
        }
        
        return NULL;
    }

    /**
     * Create a new post objet set content, topic and user
     * 
     * @param string $content post content
     * @param objet $topic Orion\ForumBundle\Entity\Topic
     * 
     * @return objet $topic Orion\ForumBundle\Entity\Post
     */
    protected function createPost($content, Topic $topic) {
        $post = new post();
        $post->setContent($content);
        $post->setTopic($topic);
        $post->setPoster($topic->getUser());
        
        return $post;
    }
    
}
