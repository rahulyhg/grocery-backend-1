<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;
use Db\Entity\Answer;

/**
 * This class represents a question.
 * @ORM\Entity()
 * @ORM\Table(name="questions")
 */
class Question {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="questions")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id", nullable=true)
     */
    private $customer;

    /**
     * @ORM\Column(name="text", type="string", length=512, nullable=false)
     */
    protected $text;

    /**
     * @deprecated extraText is now at Formulation. Should be able to change the text
     *             depending on which targetAudience the user selected
     * @ORM\Column(name="extraText", type="string", length=2048, nullable=true)
     */
    protected $extraText;

    /**
     * @ORM\Column(name="required", type="integer", length=11, nullable=false)
     */
    protected $required;

    /**
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    protected $type;

    /**
     * @ORM\Column(name="range_min", type="integer", length=11, nullable=true)
     */
    protected $rangeMin;

    /**
     * @ORM\Column(name="range_max", type="integer", length=11, nullable=true)
     */
    protected $rangeMax;

    /**
     * @ORM\Column(name="allow_explanation", type="integer", length=11, nullable=false)
     */
    protected $allowExplanation;


    //////////////////
    // Smiley texts //
    // Please don't //
    // judge me...  //
    //////////////////
    /**
     * @ORM\Column(name="smileytext_fully_agree", type="text", length=256, nullable=true)
     */
    protected $smileytextFullyAgree;

    /**
     * @ORM\Column(name="smileytext_kinda_agree", type="text", length=256, nullable=true)
     */
    protected $smileytextKindaAgree;

    /**
     * @ORM\Column(name="smileytext_neutral", type="text", length=256, nullable=true)
     */
    protected $smileytextNeutral;

    /**
     * @ORM\Column(name="smileytext_kinda_disagree", type="text", length=256, nullable=true)
     */
    protected $smileytextKindaDisagree;

    /**
     * @ORM\Column(name="smileytext_fully_disagree", type="text", length=256, nullable=true)
     */
    protected $smileytextFullyDisagree;

    /**
     * @ORM\Column(name="smileytext_dont_know", type="text", length=256, nullable=true)
     */
    protected $smileytextDontKnow;

    /**
     * @ORM\ManyToOne(targetEntity="Theme", inversedBy="questions")
     * @ORM\JoinColumn(name="theme_id", referencedColumnName="id", nullable=true)
     */
    private $theme;

    /**
     * @var \Doctrine\Common\Collections\Collection|Answer[]
     * Many Questions have Many answers.
     * @ORM\ManyToMany(targetEntity="Answer", inversedBy="questions")
     * @ORM\JoinTable(name="questions_answers")
     */
    private $answers;

    public function __construct() {
        $this->answers = new ArrayCollection();
    }
    
    /**
     * @param Answer $answer
     */
    public function addAnswer(Answer $answer) {
        if ($this->answers->contains($answer)) {
            return;
        }
        $this->answers->add($answer);
        $answer->addQuestion($this);
    }
    
    /**
     * @param Answer $answer
     */
    public function removeAnswer($answer) {
        if (! $this->answers->contains($answer)) {
            return;
        }
        $this->answers->removeElement($answer);
        $answer->removeQuestion($this);
    }

    public function addAnswers($answers) {
        foreach ($answers as $answer) {
            $this->addAnswer($answer);
        }
    }
    
    public function removeAnswers($answers) {
        foreach ($answers as $answer) {
            $this->removeAnswer($answer);
        }
    }

    function getId() {
        return $this->id;
    }

    function getText() {
        return $this->text;
    }

    function getExtraText() {
        return $this->extraText;
    }

    function getRequired() {
        return $this->required;
    }

    function getType() {
        return $this->type;
    }

    function getRangeMin() {
        return $this->rangeMin;
    }

    function getRangeMax() {
        return $this->rangeMax;
    }

    function getAllowExplanation() {
        return $this->allowExplanation;
    }

    function getAnswers() {
        return $this->answers;
    }

    function getTheme() {
        return $this->theme;
    }

    function getSmileytextFullyAgree() {
        return $this->smileytext_fully_agree;
    }

    function getSmileytextKindaAgree() {
        return $this->smileytext_kinda_agree;
    }

    function getSmileytextNeutral() {
        return $this->smileytext_neutral;
    }

    function getSmileytextKindaDisagree() {
        return $this->smileytext_kinda_disagree;
    }

    function getSmileytextFullyDisagree() {
        return $this->smileytext_fully_disagree;
    }

    function getSmileytextDontKnow() {
        return $this->smileytext_dont_know;
    }
    
    /**
     * @return Customer
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setText($text) {
        $this->text = $text;
    }

    function setExtraText($extraText) {
        $this->extraText = $extraText;
    }

    function setRequired($required) {
        $this->required = $required;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setRangeMin($rangeMin) {
        $this->rangeMin = $rangeMin;
    }

    function setRangeMax($rangeMax) {
        $this->rangeMax = $rangeMax;
    }

    function setAllowExplanation($allowExplanation) {
        $this->allowExplanation = $allowExplanation;
    }

    function setAnswers($answers) {
        $this->answers = $answers;
    }

    function setTheme(Theme $theme) {
        $this->theme = $theme;
    }

    function setSmileytextFullyAgree($text) {
        $this->smileytext_fully_agree = $text;
    }

    function setSmileytextKindaAgree($text) {
        $this->smileytext_kinda_agree = $text;
    }

    function setSmileytextNeutral($text) {
        $this->smileytext_neutral = $text;
    }

    function setSmileytextKindaDisagree($text) {
        $this->smileytext_kinda_disagree = $text;
    }

    function setSmileytextFullyDisagree($text) {
        $this->smileytext_fully_disagree = $text;
    }

    function setSmileytextDontKnow($text) {
        $this->smileytext_dont_know = $text;
    }
    
    /**
     * @param Customer $customer
     */
    public function setCustomer(?Customer $customer): void
    {
        $this->customer = $customer;
    }
}
