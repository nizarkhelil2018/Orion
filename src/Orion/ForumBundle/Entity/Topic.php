<?php

namespace Orion\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Orion\ForumBundle\Entity\Model\BaseTopic;

/**
 *
 * @ORM\Entity(repositoryClass="Orion\ForumBundle\Repository\TopicRepository")
 * @ORM\Table(name="df_topic")
 * 
 */
class Topic extends BaseTopic
{

}
