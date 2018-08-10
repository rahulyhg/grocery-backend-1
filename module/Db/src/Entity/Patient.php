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
 * @ORM\Table(name="patients",indexes={@ORM\Index(name="search_idx", columns={"lastname", "birthdate"})})
 */
class Patient
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer");
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Annotation\Attributes({"id":"lastname"})
     */
    protected $lastname;
    
    /**
     * @ORM\Column(name="lastname_SI", type="string", length=66, nullable=true)
     */
    protected $lastnameSearchImage;
    
    /**
     * @ORM\Column(name="lastname_prefix", type="string", length=255, nullable=true)
     */
    protected $lastnamePrefix;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    protected $initials;

    /**
     * @ORM\Column(name="bsn", type="string", length=250, nullable=true)
     * @Annotation\Options({"label": "Burger Service Nummer", "label_attributes": {"class": "col-md-4 control-label"}})
     * @Annotation\Attributes({"id":"bsn","class":"form-control"})
     */
    protected $bsn;

    /**
     * @ORM\Column(name="bsn_SI", type="string", length=250, nullable=true)
     * @Annotation\Attributes({"id":"bsnSearchImage"})
     * @Annotation\Type("Zend\Form\Element\Hidden")
     */
    protected $bsnSearchImage;
    
    /**
     * @ORM\ManyToOne(targetEntity="Db\Entity\Label",fetch="EAGER")
     * @ORM\JoinColumn(name="gender", referencedColumnName="id")
     * @Annotation\Type("DoctrineModule\Form\Element\ObjectRadio")
     * @Annotation\Options({
     * "target_class":"Procedure\Entity\Label",
     * "property": "label",
     * "label": "Gender",
     * "label_attributes": {"class": "radio-label"},
     * "find_method":{"name": "findBy","params": {"criteria":{"labelsetid": "500"},"orderBy":{"sortorder": "ASC","label":"ASC"}}}
     * })
     */
    protected $gender;

    /**
     * @ORM\Column(name="birthdate", type="date", nullable=true)
     * @Annotation\Options({"label": "Date of birth <span class='dateTooltip'></span>", "label_attributes": {"class": "col-md-4 control-label"}})
     * @Annotation\Type("Zend\Form\Element\Date")
     * @Annotation\Attributes({"id":"birthdate","type":"text","class":"input_date","placeholder":"yyyy-mm-dd","required":"required"})
     */
    protected $birthdate;
    
    /**
     * @ORM\OneToMany(targetEntity="Db\Entity\PatientNumber", mappedBy="patient",cascade={"persist"})
     */
    protected $patientid;

    /**
     * @ORM\OneToMany(targetEntity="Db\Entity\Procedure", mappedBy="patient",cascade={"persist"},fetch="EAGER")
     * @ORM\OrderBy({"procdate" = "DESC"})
     * @Annotation\Exclude()
     *
     * @var Procedure[]
     */
    protected $procedures;

    /**
     * @ORM\ManyToOne(targetEntity="Db\Entity\Hospital",fetch="EAGER")
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
        $this->procedures = new ArrayCollection();
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastnameSearchImage($si)
    {
        $this->lastnameSearchImage = $si;
    }

    public function getLastnameSearchImage()
    {
        return $this->lastnameSearchImage;
    }

    public function setLastnamePrefix($prefix)
    {
        $this->lastnamePrefix = $prefix;
    }

    public function getLastnamePrefix()
    {
        return $this->lastnamePrefix;
    }

    public function setInitials($initials)
    {
        $this->initials = $initials;
    }

    public function getInitials()
    {
        return $this->initials;
    }

    public function getFullname()
    {
        return ($this->getInitials() ? $this->getInitials() . ' ' : '') . ($this->getLastnamePrefix() ? $this->getLastnamePrefix() . ' ' : '') . $this->getLastname();
    }

    public function setPartnerLastname($name)
    {
        $this->partnerLastname = $name;
    }

    public function getPartnerLastname()
    {
        return $this->partnerLastname;
    }

    public function setPartnerLastnameSearchImage($si)
    {
        $this->partnerLastnameSearchImage = $si;
    }

    public function getPartnerLastnameSearchImage()
    {
        return $this->partnerLastnameSearchImage;
    }

    public function setPartnerLastnamePrefix($prefix)
    {
        $this->partnerLastnamePrefix = $prefix;
    }

    public function getPartnerLastnamePrefix()
    {
        return $this->partnerLastnamePrefix;
    }

    public function getPartnerFullname()
    {
        return ($this->getPartnerLastnamePrefix() ? $this->getPartnerLastnamePrefix() . ' ' : '') . $this->getPartnerLastname();
    }

    public function setBsn($bsn)
    {
        $this->bsn = $bsn;
        if (empty($bsn) || $bsn == '') {
            $this->setBsnSearchImage(null);
        }
    }

    public function getBsn()
    {
        return $this->bsn;
    }

    public function getBsnSearchImage()
    {
        return $this->bsnSearchImage;
    }

    public function setBsnSearchImage($bsnSearchImage)
    {
        $this->bsnSearchImage = $bsnSearchImage;
        return $this;
    }

    public function setPatientid($id)
    {
        $this->patientid = $id;
    }

    public function getPatientid()
    {
        return $this->patientid;
    }

    public function setBirthdate($date)
    {
        $this->birthdate = $date;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getGender()
    {
        return $this->gender;
    }
    
    public function getHospital()
    {
        return $this->hospital;
    }
    
    public function setHospital($value)
    {
        $this->hospital = $value;
    }

    public function addProcedure(Procedure $procedure)
    {
        $this->procedures[] = $procedure;
    }

    public function getProcedures()
    {
        return $this->procedures;
    }

    public function deleteProcedures()
    {
        $procedures = array();
        foreach ($this->procedures as $procedure) {
            $procedure->setDeleted(true);
            $procedures[] = $procedure;
        }
        
        return $procedures;
    }

}
