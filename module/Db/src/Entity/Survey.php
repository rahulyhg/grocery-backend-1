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
     * @ORM\ManyToOne(targetEntity="SurveyStatus")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id", nullable=false)
     */
    private $status;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $targetaudienceQuestion;
    
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $teamQuestion;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $welcomeText;
    
    /**
     * @ORM\Column(type="boolean", options={"default" = 0})
     */
    protected $showProgress = false;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Token[]
     * One Survey has Many tokens.
     * @ORM\OneToMany(targetEntity="Token", mappedBy="survey")
     */
    private $tokens;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|SurveySettingValue[]
     * @ORM\OneToMany(targetEntity="SurveySettingValue", mappedBy="survey")
     */
    private $settings;
    
    /**
     * @ORM\ManyToMany(targetEntity="TargetAudience")
     * @ORM\JoinTable(name="surveys_targetaudiences",
     *      joinColumns={@ORM\JoinColumn(name="survey_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="targetaudience_id", referencedColumnName="id")}
     *      )
     */
    private $targetaudiences;
    
    /**
     * @ORM\ManyToMany(targetEntity="Team")
     * @ORM\JoinTable(name="surveys_teams",
     *      joinColumns={@ORM\JoinColumn(name="survey_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="team_id", referencedColumnName="id")}
     *      )
     */
    private $teams;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Theme[]
     * Many Surveys have Many Themes.
     * @ORM\OneToMany(targetEntity="SurveyThemeAssociation", mappedBy="survey", orphanRemoval=true, cascade={"persist"})
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
    
    function setId($id) {
        $this->id = $id;
    }

    function getName() {
        return $this->name;
    }
    
    function setName($name) {
        $this->name = $name;
    }

    function getDescription() {
        return $this->description;
    }
    
    function setDescription($description) {
        $this->description = $description;
    }

    function getType() {
        return $this->type;
    }
    
    function setType($type) {
        $this->type = $type;
    }
    
    /**
     * @return SurveyStatus
     */
    function getStatus(): SurveyStatus {
        return $this->status;
    }
    
    /**
     * @param SurveyStatus $status
     */
    public function setStatus(SurveyStatus $status): void
    {
        $this->status = $status;
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
     * @return boolean
     */
    public function getShowProgress() : bool
    {
        return $this->showProgress;
    }
    
    /**
     * @param boolean $showProgress
     */
    public function setShowProgress(bool $showProgress): void
    {
        $this->showProgress = $showProgress;
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
     * @param Token $token
     */
    public function addToken(Token $token): void {
        if ($this->tokens->contains($token)) {
            return;
        }
        $this->tokens->add($token);
    }
    
    /**
     * @param Token $token
     */
    public function removeToken(Token $token): void {
        if (! $this->tokens->contains($token)) {
            return;
        }
        $this->tokens->removeElement($token);
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|Token[] $tokens
     */
    public function addTokens($tokens) {
        foreach ($tokens as $token) {
            $this->addToken($token);
        }
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|Token[] $tokens
     */
    public function removeTokens($tokens) {
        foreach ($tokens as $token) {
            $this->removeToken($token);
        }
    }
    
    /**
     * @return SurveySettingValue[]|ArrayCollection
     */
    public function getSettings()
    {
        return $this->settings;
    }
    
    /**
     * @param SurveySettingValue[]|ArrayCollection $settings
     */
    public function setSettings($settings): void
    {
        $this->settings = $settings;
    }
    
    /**
     * @param SurveySettingValue $setting
     */
    public function addSetting(SurveySettingValue $setting): void {
        if ($this->settings->contains($setting)) {
            return;
        }
        $this->settings->add($setting);
    }
    
    /**
     * @param SurveySettingValue $setting
     */
    public function removeSetting(SurveySettingValue $setting): void {
        if (! $this->settings->contains($setting)) {
            return;
        }
        $this->settings->removeElement($setting);
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
     * @param TargetAudience $targetaudience
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
     * @return \Doctrine\Common\Collections\ArrayCollection|Team[]
     */
    public function getTeams()
    {
        return $this->teams;
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|Team[] $teams
     */
    public function setTeams($teams): void
    {
        $this->teams = $teams;
    }
    
    /**
     * @param TargetAudience $targetaudience
     */
    public function addTeam(Team $team): void {
        if ($this->teams->contains($team)) {
            return;
        }
        $this->teams->add($team);
    }
    
    /**
     * @param TargetAudience $targetaudience
     */
    public function removeTeam(Team $team): void {
        if (! $this->teams->contains($team)) {
            return;
        }
        $this->teams->removeElement($team);
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|SurveyThemeAssociation[]
     */
    public function getSurvey_theme_associations()
    {
        return $this->survey_theme_associations;
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|SurveyThemeAssociation[] $survey_theme_associations
     */
    public function setSurvey_theme_associations($survey_theme_associations): void
    {
        $this->survey_theme_associations = $survey_theme_associations;
    }
    
    /**
     * @param SurveyThemeAssociation $surveyThemeAssociation
     */
    public function addSurvey_theme_association(SurveyThemeAssociation $surveyThemeAssociation): void {
        if ($this->survey_theme_associations->contains($surveyThemeAssociation)) {
            return;
        }
        $this->survey_theme_associations->add($surveyThemeAssociation);
    }
    
    /**
     * @param SurveyThemeAssociation $surveyThemeAssociation
     */
    public function removeSurvey_theme_associations(SurveyThemeAssociation $surveyThemeAssociation): void {
        if (! $this->survey_theme_associations->contains($surveyThemeAssociation)) {
            return;
        }
        $this->survey_theme_associations->removeElement($surveyThemeAssociation);
    }
}
