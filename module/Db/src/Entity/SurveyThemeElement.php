<?php
declare(strict_types = 1);

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
     * @var int
     */
    protected $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Survey")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     * @var Survey
     */
    private $survey;
    
    /**
     * @ORM\ManyToOne(targetEntity="Theme")
     * @ORM\JoinColumn(name="theme_id", referencedColumnName="id")
     * @var Theme
     */
    private $theme;

    /**
     * Many PageElements have One Element.
     * @ORM\ManyToOne(targetEntity="Element")
     * @ORM\JoinColumn(name="element_id", referencedColumnName="id")
     * @var Element
     */
    private $element;

    /**
     * @ORM\Column(name="element_order", type="integer", length=11, nullable=false)
     * @var int
     */
    protected $elementOrder = 0;

    /**
     * @ORM\Column(type="boolean", options={"default" = 0})
     * @var bool
     */
    protected $locked = false;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId(int $id): void
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
     * @return void
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
     * @return Element
     */
    public function getElement(): Element
    {
        return $this->element;
    }

    /**
     * @param Element $element
     * @return void
     */
    public function setElement(Element $element): void
    {
        $this->element = $element;
    }

    /**
     * @return int
     */
    public function getElementOrder(): int
    {
        return $this->elementOrder;
    }

    /**
     * @param int $elementOrder
     * @return void
     */
    public function setElementOrder(int $elementOrder): void
    {
        $this->elementOrder = $elementOrder;
    }
    
    /**
     * @return bool
     */
    public function getLocked(): bool
    {
        return $this->locked;
    }

    /**
     * @param bool $locked
     * @return void
     */
    public function setLocked(bool $locked): void
    {
        $this->locked = $locked;
    }

}
