<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="surveys_ppp_classification_question_answers")
 */
class SurveyPppClassificationQuestionAnswer
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var SurveyPppClassificationQuestion
     * Many SurveyPppClassificationQuestionAnswers have One SurveyPppClassificationQuestion
     * @ORM\ManyToOne(targetEntity="SurveyPppClassificationQuestion", inversedBy="answers")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $question;

    /**
     * @var string
     * @ORM\Column(name="text", type="string", length=512, nullable=false)
     */
    protected $text;

    /**
     * @var integer
     * Sort order of this SurveyPppClassificationQuestion
     * @ORM\Column(name="sortOrder", type="integer", length=11)
     */
    private $sortOrder;

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

    public function setSortOrder(int $sortOrder): void {
        $this->sortOrder = $sortOrder;
    }

    public function getSortOrder(): int {
        return $this->sortOrder;
    }

    /**
     * @return SurveyPppClassificationQuestion
     */
    public function getQuestion(): SurveyPppClassificationQuestion
    {
        return $this->question;
    }

    /**
     * @param SurveyPppClassificationQuestion $question
     */
    public function setQuestion(SurveyPppClassificationQuestion $question): void
    {
        $this->question = $question;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }




}
