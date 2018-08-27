<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a page item.
 * @ORM\Entity()
 * @ORM\Table(name="surveys_pages")
 */
class SurveysPages {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Survey")
     * @ORM\JoinColumn(name="survey_id", referencedColumnName="id")
     */
    private $surveyId;

    /**
     * @ORM\ManyToOne(targetEntity="Page")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     */
    private $pageId;

    /**
     * @ORM\Column(name="page_order", type="integer", length=11, nullable=false)
     */
    protected $pageOrder;

    /**
     * @ORM\Column(name="locked", type="integer", length=4, nullable=false)
     */
    protected $locked;

    function getId() {
        return $this->id;
    }

    function getSurveyId() {
        return $this->surveyId;
    }

    function getPageId() {
        return $this->pageId;
    }

    function getPageOrder() {
        return $this->pageOrder;
    }

    function getLocked() {
        return $this->locked;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setSurveyId($surveyId) {
        $this->surveyId = $surveyId;
    }

    function setPageId($pageId) {
        $this->pageId = $pageId;
    }

    function setPageOrder($pageOrder) {
        $this->pageOrder = $pageOrder;
    }

    function setLocked($locked) {
        $this->locked = $locked;
    }

}
