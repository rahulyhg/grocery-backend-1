<?php
/**
 * Created by PhpStorm.
 * User: dick
 * Date: 13-9-18
 * Time: 21:00
 */

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 */
class TargetAudience
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    protected $name = '';
}
