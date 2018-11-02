<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;
use Db\Entity\Question;

/**
 * This class represents a answer item.
 * @ORM\Entity()
 * @ORM\Table(name="answers")
 */
class Answer {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="value", type="text", length=50, nullable=false)
     */
    protected $value;

    /**
     * @var \Doctrine\Common\Collections\Ćollection|Question[]
     * Many Answers have Many Questions.
     * @ORM\ManyToMany(targetEntity="Question", mappedBy="answers")
     */
    private $questions;

    public function __construct() {
        $this->questions = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getValue() {
        return $this->value;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setValue($value) {
        $this->value = $value;
    }

    function getQuestions() {
        return $this->questions;
    }

    function setQuestions($questions) {
        $this->questions = $questions;
    }
    
    /**
     * @param Question $question
     */
    public function addQuestion(Question $question) {
        if ($this->questions->contains($question)) {
            return;
        }
        $this->questions->add($question);
        $question->addAnswer($this);
    }
    
    /**
     * @param Question $question
     */
    public function removeQuestion(Question $question) {
        if (!$this->questions->contains($question)) {
            return;
        }
        $this->questions->removeElement($question);
        $question->removeAnswer($this);
    }
    
    public function addQuestions($questions) {
        foreach ($questions as $question) {
            $this->addQuestion($question);
        }
    }
    public function removeQuestions($questions) {
        foreach ($questions as $question) {
            $this->removeQuestion($question);
        }
    }
    
}
