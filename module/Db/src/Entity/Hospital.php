<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Zend\Form\Annotation;

/**
 * A hospital.
 *
 * @ORM\Entity
 * @ORM\Table(name="hospitals")
 */
class Hospital
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", unique=true)
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;
    
    /**
     * @ORM\Column(type="boolean", options={"default":0}, nullable=false)
     */
    private $inactive = 0;

    public function setId($value)
    {
        $this->id = $value;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setName($value)
    {
        $this->name = $value;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setCity($value)
    {
        $this->city = $value;
    }
    public function getCity()
    {
        return $this->city;
    }

    public function setInactive($value)
    {
        $this->inactive = $value;
    }
    public function getInactive()
    {
        return $this->inactive;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
