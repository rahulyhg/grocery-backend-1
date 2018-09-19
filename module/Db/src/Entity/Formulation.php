<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="formulations")
 */
class Formulation
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="formulation", type="string", length=1000, nullable=false)
     */
    protected $formulation;

    /**
     * Many formulations have 1 question
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumn(nullable=false)
     */
    private $question;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|TargetAudience[]
     * Many formulations have many target audiences
     * @ORM\ManyToMany(targetEntity="TargetAudience")
     * @ORM\JoinTable(name="targetaudiences_formulations")
     */
    private $targetaudiences;
    
    public function __construct() {
        $this->targetaudiences = new ArrayCollection();
    }
    
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
    public function getFormulation(): string
    {
        return $this->formulation;
    }

    /**
     * @param string $formulation
     */
    public function setFormulation(string $formulation): void
    {
        $this->formulation = $formulation;
    }

    /**
     * @return Question
     */
    public function getQuestion(): Question
    {
        return $this->question;
    }

    /**
     * @param Question $question
     */
    public function setQuestion(Question $question): void
    {
        $this->question = $question;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|TargetAudience[]
     */
    public function getTargetaudiences()
    {
        return $this->targetaudiences;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|TargetAudience[]
     */
    public function setTargetaudiences($targetaudiences): void
    {
        $this->targetaudiences = $targetaudiences;
    }
    /**
     * @param TargetAudience $targetaudience
     */
    public function addTargetaudience(Targetaudience $targetaudience) {
        if ($this->targetaudiences->contains($targetaudience)) {
            return;
        }
        $this->targetaudiences->add($targetaudience);
    }
    
    /**
     * @param TargetAudience $targetaudience
     */
    public function removeTargetAudience(Targetaudience $targetaudience) {
        if (! $this->targetaudiences->contains($targetaudience)) {
            return;
        }
        $this->targetaudiences->removeElement($targetaudience);
    }

}
