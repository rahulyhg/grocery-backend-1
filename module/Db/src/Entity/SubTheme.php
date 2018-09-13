<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="subthemes")
 */
class SubTheme {
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    protected $name;

    // VOLGNUMMER

    /**
     * @var \Doctine\Common\Collections\Collection|Question[]
     * One SubTheme has Many Questions
     * @ORM\OneToMany(targetEntity="Question", mappedBy="subtheme")
     */
    private $questions;
    
    /**
     * @var Theme
     * Many SubThemes have One Theme.
     * @ORM\ManyToOne(targetEntity="Theme", inversedBy="subthemes")
     * @ORM\JoinColumn(name="theme_id", referencedColumnName="id", nullable=false)
     */
    private $theme;
    
    
    public function __construct() {
    }
    
    /**
     * @return integer
     */
    public function getId(){
        return $this->id;
    }
    
    /**
     * @param integer $id
     */
    public function setId($id){
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getName(){
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    public function setName($name){
        $this->name = $name;
    }
    
    /**
     * @return Theme
     */
    public function getTheme(){
        return $this->theme;
    }
    
    /**
     * @param Theme $theme
     */
    public function setTheme($theme) {
        $this->theme = $theme;
    }


    public function setQuestions($questions) {
        $this->questions = $questions;
    }
    public function getQuestions() {
        return $this->questions;
    }

    public function addQuestion(Question $question) {
        if ($this->questions->contains($question)) {
            return;
        }
        $this->questions->add($question);
        $question->setSubtheme($this);
    }
    public function removeQuestion(Question $question) {
        if (!$this->questions->contains($question)) {
            return;
        }
        $this->questions->removeElement($question);
        $question->setSubtheme(null);
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
    


    // function getPage() {
    //     return $this->page;
    // }
    // function setPage($page) {
    //     $this->page = $page;
    // }

}

