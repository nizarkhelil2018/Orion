<?php
namespace Orion\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Orion\ForumBundle\Entity\Model\BaseCategory;

/**
 * @ORM\Entity(repositoryClass="Orion\ForumBundle\Repository\CategoryRepository")
 * @ORM\Table(name="df_category")
 */
class Category extends BaseCategory
{

}
