<?php
namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Zend\Form\Annotation;

/**
 * A procedure.
 *
 * @ORM\Entity
 * @ORM\Table(name="procedures")
 */
class Procedure
{
    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Db\Entity\Patient", inversedBy="procedures",cascade={"persist"},fetch="EAGER")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id", nullable=false)
     * @Annotation\Exclude()
     */
    protected $patient;

    /**
     * @ORM\Column(name="procdate", type="date", nullable=false)
     * @Annotation\Required(true)
     * @Annotation\Type("Zend\Form\Element\Date")
     * @Annotation\Options({"label":"Date of procedure <span class='dateTooltip'></span>"})
     * @Annotation\Attributes({"id":"procdate","type":"text","class":"input_date","placeholder":"yyyy-mm-dd"})
     */
    protected $procdate;


    public function __construct()
    {
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    public function getId()
    {
        return $this->id;
    }

    public function setPatient($patient)
    {
        $this->patient = $patient;
    }

    public function getPatient()
    {
        return $this->patient;
    }

    public function setProcdate(\DateTime $date = null)
    {
        $this->procdate = $date;
    }

    public function getProcdate()
    {
        return $this->procdate;
    }

    public function getHospital()
    {
        return $this->hospital;
    }

    public function setHospital($value)
    {
        $this->hospital = $value;
    }

}
