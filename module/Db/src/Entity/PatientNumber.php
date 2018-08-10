<?php
namespace Db\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Zend\Form\Annotation;

/**
 * A patient.
 *
 * @ORM\Entity
 * @ORM\Table(name="patientnumbers")
 *
 */
class PatientNumber
{

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Annotation\Type("Zend\Form\Element\Hidden")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Db\Entity\Patient", inversedBy="patientid")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    protected $patient;

    /**
     * @ORM\Column(name="patientnumber", type="string", length=200, nullable=true)
     * @Annotation\Options({"label": "Patient number in hospital", "label_attributes": {"class": "col-md-4 control-label"}})
     * @Annotation\Attributes({"id":"patientid","class":"form-control"})
     */
    protected $patientNumber;
    
    /**
     * @ORM\Column(name="patient_number_padded", length=200, nullable=true)
     * @Annotation\Required(false)
     * @var string
     */
    protected $paddedNumber;

    /**
     * @ORM\ManyToOne(targetEntity="Db\Entity\Hospital")
     * @ORM\JoinColumn(name="hospital_id", referencedColumnName="id")
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectSelect")
     * @Annotation\Attributes({"class": "kendo-select"})
     * @Annotation\Options({
     * "empty_option": "---",
     * "target_class":"Application\Entity\Hospital",
     * "property": "name",
     * "label": "Hospital",
     * "label_attributes": {"class": "col-md-4 control-label"},
     * "find_method":{
     * "name": "findBy",
     * "params": {
     * "criteria":{"inactive": "0"},
     * "orderBy":{"name": "ASC"}
     * }
     * }
     * })
     */
    private $hospital;

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
    
    /**
     * @return the $patientID
     */
    public function getPatient()
    {
        return $this->patient;
    }
    
    /**
     * @param field_type $patientID
     */
    public function setPatient($patient)
    {
        $this->patientID = $patient;
    }

    /**
     * @return the $patientNumber
     */
    public function getPatientNumber()
    {
        return $this->patientNumber;
    }
    
    /**
     * @param field_type $patientNumber
     */
    public function setPatientNumber($patientNumber)
    {
        $this->patientNumber = $patientNumber;
    }

    /**
     * @return the $hospital
     */
    public function getHospital()
    {
        return $this->hospital;
    }
    
    /**
     * @param field_type $hospital
     */
    public function setHospital($hospital)
    {
        $this->hospital = $hospital;
    }
 
}
