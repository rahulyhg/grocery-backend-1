<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name="surveys_ppp_classification_questions")
 */
class SurveyPppClassificationQuestion
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="text", type="string", length=512, nullable=false)
     */
    protected $text;

    /**
     * @var Survey
     * Many SurveyPppClassificationQuestions have One Survey
     * @ORM\ManyToOne(targetEntity="Survey")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $survey;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|TargetAudience[]
     * Many SurveyPppClassificationQuestions have many TargetAudiences
     * @ORM\ManyToMany(targetEntity="TargetAudience")
     * @ORM\JoinTable(name="targetaudiences_surveypppclassificationquestions")
     */
    private $targetaudiences;

    /**
     * One SurveyPppClassificationQuestion have Many Answers
     * @ORM\OneToMany(targetEntity="SurveyPppClassificationQuestionAnswer", mappedBy="question")
     */
    private $answers;

    /**
     * @var int
     * Sort order of this SurveyPppClassificationQuestion
     * @ORM\Column(name="sortOrder", type="integer", length=11)
     */
    private $sortOrder;

    /**
     * @var int
     * @ORM\Column(type="integer", length=1, nullable=false, options={"default" = 0, "unsigned": true})
     */
    private $enabled = 0;

    public function __construct() {
        $this->targetaudiences = new ArrayCollection();
        $this->answers = new ArrayCollection();
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

    /**
     * @return Survey
     */
    public function getSurvey(): Survey
    {
        return $this->survey;
    }

    /**
     * @param Survey $survey
     */
    public function setSurvey(Survey $survey): void
    {
        $this->survey = $survey;
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
     * @param \Doctrine\Common\Collections\ArrayCollection|SurveyPppClassificationQuestionAnswer[]
     */
    public function setAnswers($answers): void
    {
        $this->answers = $answers;
    }
    /**
     * @param SurveyPppClassificationQuestionAnswer $answer
     */
    public function addAnswer(SurveyPppClassificationQuestionAnswer $answer) {
        if ($this->answers->contains($answer)) {
            return;
        }
        $this->answers->add($answer);
    }

    /**
     * @param SurveyPppClassificationQuestionAnswer $answer
     */
    public function removeAnswer(SurveyPppClassificationQuestionAnswer$answer) {
        if (! $this->answers->contains($answer)) {
            return;
        }
        $this->answers->removeElement($answer);
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|SurveyPppClassificationQuestionAnswer[]
     */
    public function getAnswers()
    {
        return $this->answers;
    }

    /**
     * @return int
     */
    public function getEnabled(): int
    {
        return $this->enabled;
    }

    /**
     * @param int $enabled
     */
    public function setEnabled(int $enabled): void
    {
        $this->enabled = $enabled;
    }



}
