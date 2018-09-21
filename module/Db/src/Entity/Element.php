<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a element item.
 * @ORM\Entity()
 * @ORM\Table(name="elements")
 */
class Element {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    protected $type;

    /**
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    protected $title;

    /**
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    protected $text;
    
    /**
     * One Element has One Question.
     * @ORM\OneToOne(targetEntity="Question")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
     */
    private $question;

    public function __construct() {
    }

    function getId() {
        return $this->id;
    }
    
    function setId($id) {
        $this->id = $id;
    }
    
    function getType() {
        return $this->type;
    }
    
    function setType($type) {
        $this->type = $type;
    }

    function getTitle() {
        return $this->title;
    }

    function setTitle($title) {
        $this->title = $title;
    }
    
    function getText() {
        return $this->text;
    }

    function setText($text) {
        $this->text = $text;
    }
    
    function setQuestion($question) {
        $this->question = $question;
    }
    
    function getQuestion() {
        return $this->question;
    }
}