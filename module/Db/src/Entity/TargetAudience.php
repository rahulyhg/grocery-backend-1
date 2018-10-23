<?php
declare(strict_types = 1);

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

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|SurveyPppClassificationQuestion[]
     * Many TargetAudiences have Many SurveyPppClassificationQuestions
     * @ORM\ManyToMany(targetEntity="SurveyPppClassificationQuestion", mappedBy="targetaudiences")
     */
    protected $classification_questions;
    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }


    /**
     * @return SurveyPppClassificationQuestion[]|ArrayCollection
     */
    public function getClassificationQuestions()
    {
        return $this->classification_questions;
    }

    /**
     * @param TargetAudience $targetaudience
     */
    public function addClassificationQuestion(SurveyPppClassificationQuestion $question) {
        if ($this->classification_questions->contains($question)) {
            return;
        }
        $this->classification_questions->add($question);
    }

    /**
     * @param TargetAudience $targetaudience
     */
    public function removeClassificationQuestion(SurveyPppClassificationQuestion $question) {
        if (! $this->classification_questions->contains($question)) {
            return;
        }
        $this->classification_questions->removeElement($question);
    }

    /**
     * @param SurveyPppClassificationQuestion[]|ArrayCollection $classification_questions
     */
    public function setClassificationQuestions($classification_questions): void
    {
        $this->classification_questions = $classification_questions;
    }
    
    
}
