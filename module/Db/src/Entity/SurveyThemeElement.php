<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a page element.
 * @ORM\Entity()
 * @ORM\Table(name="surveys_themes_elements")
 */
class SurveyThemeElement {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Survey")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    private $survey;
    
    /**
     * @ORM\ManyToOne(targetEntity="Theme")
     * @ORM\JoinColumn(name="theme_id", referencedColumnName="id")
     */
    private $theme;

    /**
     * Many PageElements have One Element.
     * @ORM\ManyToOne(targetEntity="Element")
     * @ORM\JoinColumn(name="element_id", referencedColumnName="id")
     */
    private $element;

    /**
     * @ORM\Column(name="element_order", type="integer", length=11, nullable=false)
     */
    protected $elementOrder = 0;

    /**
     * @ORM\Column(name="locked", type="integer", length=4, nullable=false)
     */
    protected $locked = 0;

    /**
     * @return mixed
     */
    public function getId()
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
     * @return mixed
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param mixed $element
     */
    public function setElement($element): void
    {
        $this->element = $element;
    }

    /**
     * @return mixed
     */
    public function getElementOrder()
    {
        return $this->elementOrder;
    }

    /**
     * @param mixed $elementOrder
     */
    public function setElementOrder($elementOrder): void
    {
        $this->elementOrder = $elementOrder;
    }

    /**
     * @return mixed
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * @param mixed $locked
     */
    public function setLocked($locked): void
    {
        $this->locked = $locked;
    }



}
