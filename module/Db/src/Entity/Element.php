<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a elemnt item.
 * @ORM\Entity()
 * @ORM\Table(name="elements")
 */
class Element {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    protected $type;

    /**
     * @ORM\Column(name="text", type="string", length=50, nullable=true)
     */
    protected $text;

    //One to one with questions
    //protected $question;


    function getId() {
        return $this->id;
    }

    function getType() {
        return $this->type;
    }

    function getText() {
        return $this->text;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setText($text) {
        $this->text = $text;
    }

}
