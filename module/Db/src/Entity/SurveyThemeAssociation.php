<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Db\Entity\Survey;
use Db\Entity\Theme;

/**
 * Intermediate class needed to store survey themes ordering/position.
 * @ORM\Entity()
 * @ORM\Table(name="surveys_themes")
 */
class SurveyThemeAssociation {
    
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Survey", inversedBy="survey_theme_associations")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    private $survey;
    
    /**
     * @ORM\ManyToOne(targetEntity="Theme", inversedBy="survey_theme_associations")
     * @ORM\JoinColumn(name="theme_id", referencedColumnName="id")
     */
    private $theme;
    
    /**
     * @ORM\Column(name="sortorder", type="integer", nullable=false)
     */
    private $sortOrder = 0;
    
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }
    
    /**
     * @return mixed
     */
    public function getSurvey() : Survey
    {
        return $this->survey;
    }
    
    /**
     * @param mixed $survey
     */
    public function setSurvey(Survey $survey): void
    {
        $this->survey = $survey;
    }
    
    /**
     * @return Theme
     */
    public function getTheme() : Theme
    {
        return $this->theme;
    }
    
    /**
     * @param Theme $theme
     * @return void
     */
    public function setTheme(Theme $theme): void
    {
        $this->theme = $theme;
    }
    
    /**
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }
    
    /**
     * @param int $sortOrder
     * @return void
     */
    public function setSortOrder(int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }
    
}