<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a survey item.
 * @ORM\Entity()
 * @ORM\Table(name="themes")
 */
class Theme {
    
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id", nullable=true)
     */
    private $customer;
    
    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    protected $name;
    
    /**
     * @var string|null
     * @ORM\Column(type="string", length=7)
     */
    protected $colorCode;

    /**
     * One Theme has One File
     * @ORM\OneToOne(targetEntity="File")
     * @ORM\JoinColumn(name="file_id", referencedColumnName="id")
     */
    protected $file;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|SubTheme[]
     * One Theme has Many SubThemes
     * @ORM\OneToMany(targetEntity="SubTheme", mappedBy="theme")
     */
    private $subthemes;
    
    /**
     * @var \Doctrine\Common\Collections\Collection|Question[]
     * @ORM\OneToMany(targetEntity="Question", mappedBy="theme")
     */
    private $questions;
    
    /**
     * @var \Doctrine\Common\Collections\ArrayCollection|Theme[]
     * Many Surveys have Many Themes.
     * @ORM\OneToMany(targetEntity="SurveyThemeAssociation", mappedBy="theme", orphanRemoval=true)
     */
    protected $survey_theme_associations;
    
    public function __construct() {
        $this->subthemes  = new ArrayCollection();
        $this->survey_theme_associations  = new ArrayCollection();
    }
    
    function getId() {
        return $this->id;
    }
    
    function setId($id) {
        $this->id = $id;
    }
    
    /**
     * @return Customer
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }
    
    /**
     * @param Customer $customer
     */
    public function setCustomer(?Customer $customer): void
    {
        $this->customer = $customer;
    }
    
    /**
     * @return string
     */
    function getName() {
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    function setName(string $name) {
        $this->name = $name;
    }
    
    /**
     * @return string
     */
    public function getColorCode(): ?string
    {
        return $this->colorCode;
    }
    
    /**
     * @param string $colorCode
     */
    public function setColorCode(?string $colorCode): void
    {
        $this->colorCode = $colorCode;
    }

    /**
     * @param File $file
     */
    public function setFile(?File $file) {
      $this->file = $file;
    }

    /**
     * @return File
     */
    public function getFile(): ?File {
      return $this->file;
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|SubTheme[]
     */
    function getSubthemes() {
        return $this->subthemes;
    }
    
    /**
     * @param \Doctrine\Common\Collections\ArrayCollection|SubTheme[] $subthemes
     */
    function setSubthemes($subthemes) {
        $this->subthemes = $subthemes;
    }
    
    /**
     * @param SubTheme $subtheme
     * @return void
     */
    public function addSubtheme(SubTheme $subtheme) {
        if ($this->subthemes->contains($subtheme)) {
            return;
        }
        
        $this->subthemes->add($subtheme);
        $subtheme->setTheme($this);
    }
    
    /**
     * @param SubTheme $subtheme
     * @return void
     */
    public function removeSubtheme(SubTheme $subtheme) {
        if (!$this->subthemes->contains($subtheme)) {
            return;
        }
        
        $this->subthemes->removeElement($subtheme);
        $subtheme->setTheme(null);
    }

    public function addSubthemes($subthemes) {
        foreach ($subthemes as $subtheme) {
            $this->addSubtheme($subtheme);
        }
    }
    public function removeSubthemes($subthemes) {
        foreach ($subthemes as $subtheme) {
            $this->removeSubtheme($subtheme);
        }
    }
    
    /**
     * @return \Doctrine\Common\Collections\ArrayCollection|SurveyThemeAssociation[]
     */
    public function getSurveyThemeAssociations()
    {
        return $this->survey_theme_associations;
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
}
