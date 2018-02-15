<?php

namespace Orion\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Orion\ForumBundle\Entity\Model\BaseForum;

/**
 * @ORM\Entity(repositoryClass="Orion\ForumBundle\Repository\ForumRepository")
 * @ORM\Table(name="df_forum")
 */
class Forum extends BaseForum
{

}
