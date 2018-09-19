<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a survey item.
 * @ORM\Entity()
 * @ORM\Table(name="surveys")
 */
class Survey {

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
     * @ORM\Column(name="subtitle", type="string", length=50, nullable=true)
     */
    protected $description;

    /**
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    protected $type;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $targetaudienceQuestion;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $teamQuestion;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $welcomeText;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Token[]
     * One Survey has Many tokens.
     * @ORM\OneToMany(targetEntity="Token", mappedBy="survey")
     */
    private $tokens;
    
    /**
     * @ORM\ManyToMany(targetEntity="TargetAudience")
     * @ORM\JoinTable(name="surveys_targetaudiences",
     *      joinColumns={@ORM\JoinColumn(name="survey_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="targetaudience_id", referencedColumnName="id")}
     *      )
     */
    private $targetaudiences;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Theme[]
     * Many Surveys have Many Themes.
     * @ORM\OneToMany(targetEntity="SurveyThemeAssociation", mappedBy="survey", orphanRemoval=true)
     */
    protected $survey_theme_associations;
    

    public function __construct() {
        $this->tokens = new ArrayCollection();
        $this->targetaudiences = new ArrayCollection();
        $this->survey_theme_associations  = new ArrayCollection();
    }

    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getType() {
        return $this->type;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setType($type) {
        $this->type = $type;
    }
    
    /**
     * @return string|null
     */
    public function getTargetaudienceQuestion(): ?string
    {
        return $this->targetaudienceQuestion;
    }
    
    /**
     * @param string|null $targetaudienceQuestion
     */
    public function setTargetaudienceQuestion(?string $targetaudienceQuestion): void
    {
        $this->targetaudienceQuestion = $targetaudienceQuestion;
    }
    
    /**
     * @return string|null
     */
    public function getTeamQuestion() : ?string
    {
        return $this->teamQuestion;
    }
    
    /**
     * @param string|null $teamQuestion
     */
    public function setTeamQuestion(?string $teamQuestion): void
    {
        $this->teamQuestion = $teamQuestion;
    }
    
    /**
     * @return string|null
     */
    public function getWelcomeText() : ?string
    {
        return $this->welcomeText;
    }
    
    /**
     * @param string|null $welcomeText
     */
    public function setWelcomeText(?string $welcomeText): void
    {
        $this->welcomeText = $welcomeText;
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|Token[]
     */
    function getTokens() {
        return $this->tokens;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|Token[] $tokens
     */
    function setTokens($tokens) {
        $this->tokens = $tokens;
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|TargetAudience[]
     */
    public function getTargetaudiences()
    {
        return $this->targetaudiences;
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|TargetAudience[] $targetaudiences
     */
    public function setTargetaudiences($targetaudiences): void
    {
        $this->targetaudiences = $targetaudiences;
    }
    
    /**
     * @param Answer $answer
     */
    public function addTargetaudience(TargetAudience $targetaudience): void {
        if ($this->targetaudiences->contains($targetaudience)) {
            return;
        }
        $this->targetaudiences->add($targetaudience);
    }
    
    /**
     * @param TargetAudience $targetaudience
     */
    public function removeTargetaudience(TargetAudience $targetaudience): void {
        if (! $this->targetaudiences->contains($targetaudience)) {
            return;
        }
        $this->targetaudiences->removeElement($targetaudience);
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|TargetAudience[] $targetaudiences
     */
    public function addTargetaudiences($targetaudiences) {
        foreach ($targetaudiences as $targetaudience) {
            $this->addTargetaudience($targetaudience);
        }
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|TargetAudience[] $targetaudiences
     */
    public function removeTargetaudiences($targetaudiences) {
        foreach ($targetaudiences as $targetaudience) {
            $this->removeTargetaudience($targetaudience);
        }
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|SurveyThemeAssociation[]
     */
    public function getSurveyThemeAssociations()
    {
        return $this->survey_theme_associations;
    }
    public function setSurveyThemeAssociations($survey_theme_associations)
    {
        $this->survey_theme_associations = $survey_theme_associations;
    }
    
    /**
     * @param SurveyThemeAssociation $surveyThemeAssociation
     */
    public function addSurveyThemeAssociation(SurveyThemeAssociation $surveyThemeAssociation): void {
        if ($this->survey_theme_associations->contains($surveyThemeAssociation)) {
            return;
        }
        $this->survey_theme_associations->add($surveyThemeAssociation);
    }
    
    /**
     * @param SurveyThemeAssociation $surveyThemeAssociation
     */
    public function removeSurveyThemeAssociation(SurveyThemeAssociation $surveyThemeAssociation): void {
        if (! $this->survey_theme_associations->contains($surveyThemeAssociation)) {
            return;
        }
        $this->survey_theme_associations->removeElement($surveyThemeAssociation);
    }

    
    
}
