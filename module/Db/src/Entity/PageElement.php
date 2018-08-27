<?php

namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Annotation;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * This class represents a page item.
 * @ORM\Entity()
 * @ORM\Table(name="pages_elements")
 */
class PageElement {

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Page")
     * @ORM\JoinColumn(name="page_id", referencedColumnName="id")
     */
    private $pageId;

    /**
     * @ORM\ManyToOne(targetEntity="Element")
     * @ORM\JoinColumn(name="element_id", referencedColumnName="id")
     */
    private $elementId;

    /**
     * @ORM\Column(name="element_order", type="integer", length=11, nullable=false)
     */
    protected $elementOrder;

    /**
     * @ORM\Column(name="locked", type="integer", length=4, nullable=false)
     */
    protected $locked;

    function getPageId() {
        return $this->pageId;
    }

    function getElementId() {
        return $this->elementId;
    }

    function getElementOrder() {
        return $this->elementOrder;
    }

    function getLocked() {
        return $this->locked;
    }

    function setPageId($pageId) {
        $this->pageId = $pageId;
    }

    function setElementId($elementId) {
        $this->elementId = $elementId;
    }

    function setElementOrder($elementOrder) {
        $this->elementOrder = $elementOrder;
    }

    function setLocked($locked) {
        $this->locked = $locked;
    }

}
