<?php
declare(strict_types = 1);

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Db\Entity\Survey;
use Db\Entity\SurveySetting;

/**
 * @ORM\Entity()
 * @ORM\Table(name="surveys_settings_values")
 */
class SurveySettingValue {
    
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Survey", inversedBy="settings")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    private $survey;
    
    /**
     * @ORM\ManyToOne(targetEntity="SurveySetting")
     * @ORM\JoinColumn(name="survey_setting_id", referencedColumnName="id")
     */
    private $setting;
    
    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $value;
    
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
     * @return Survey
     */
    public function getSurvey() : Survey
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
     * @return SurveySetting
     */
    public function getSetting() : SurveySetting
    {
        return $this->setting;
    }
    
    /**
     * @param SurveySetting $setting
     * @return void
     */
    public function setSetting(SurveySetting $setting): void
    {
        $this->setting = $setting;
    }
    
    /**
     * @return mixed
     */
    public function getValue()
    {
        $return = null;
        switch ($this->setting->getType()->getId()) {
            case SurveySetting::SETTING_TYPE_BOOLEAN: {
                return (bool) $this->value;
            }
            case SurveySetting::SETTING_TYPE_INTEGER: {
                return (int) $this->value;
            }
            default: {
                return $this->value;
            }
        }
    }

    /**
     * @param String $value
     */
    public function setValue($value)
    {
      $this->value = $value;
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