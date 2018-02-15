<?php

namespace Orion\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Orion\ForumBundle\Entity\Model\BasePost;

/**
 * 
 * @ORM\Entity(repositoryClass="Orion\ForumBundle\Repository\PostRepository")
 * @ORM\Table(name="df_post")
 * 
 */
class Post extends BasePost
{

}
