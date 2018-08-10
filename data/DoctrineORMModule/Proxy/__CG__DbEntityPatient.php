<?php

namespace DoctrineORMModule\Proxy\__CG__\Db\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Patient extends \Db\Entity\Patient implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'lastname', 'lastnameSearchImage', 'lastnamePrefix', 'initials', 'bsn', 'bsnSearchImage', 'gender', 'birthdate', 'patientid', 'procedures', '' . "\0" . 'Db\\Entity\\Patient' . "\0" . 'hospital'];
        }

        return ['__isInitialized__', 'id', 'lastname', 'lastnameSearchImage', 'lastnamePrefix', 'initials', 'bsn', 'bsnSearchImage', 'gender', 'birthdate', 'patientid', 'procedures', '' . "\0" . 'Db\\Entity\\Patient' . "\0" . 'hospital'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Patient $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastnameSearchImage($si)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastnameSearchImage', [$si]);

        return parent::setLastnameSearchImage($si);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastnameSearchImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastnameSearchImage', []);

        return parent::getLastnameSearchImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastnamePrefix($prefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastnamePrefix', [$prefix]);

        return parent::setLastnamePrefix($prefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastnamePrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastnamePrefix', []);

        return parent::getLastnamePrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setInitials($initials)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInitials', [$initials]);

        return parent::setInitials($initials);
    }

    /**
     * {@inheritDoc}
     */
    public function getInitials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInitials', []);

        return parent::getInitials();
    }

    /**
     * {@inheritDoc}
     */
    public function getFullname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullname', []);

        return parent::getFullname();
    }

    /**
     * {@inheritDoc}
     */
    public function setPartnerLastname($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPartnerLastname', [$name]);

        return parent::setPartnerLastname($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartnerLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPartnerLastname', []);

        return parent::getPartnerLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setPartnerLastnameSearchImage($si)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPartnerLastnameSearchImage', [$si]);

        return parent::setPartnerLastnameSearchImage($si);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartnerLastnameSearchImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPartnerLastnameSearchImage', []);

        return parent::getPartnerLastnameSearchImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setPartnerLastnamePrefix($prefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPartnerLastnamePrefix', [$prefix]);

        return parent::setPartnerLastnamePrefix($prefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartnerLastnamePrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPartnerLastnamePrefix', []);

        return parent::getPartnerLastnamePrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function getPartnerFullname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPartnerFullname', []);

        return parent::getPartnerFullname();
    }

    /**
     * {@inheritDoc}
     */
    public function setBsn($bsn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBsn', [$bsn]);

        return parent::setBsn($bsn);
    }

    /**
     * {@inheritDoc}
     */
    public function getBsn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBsn', []);

        return parent::getBsn();
    }

    /**
     * {@inheritDoc}
     */
    public function getBsnSearchImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBsnSearchImage', []);

        return parent::getBsnSearchImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setBsnSearchImage($bsnSearchImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBsnSearchImage', [$bsnSearchImage]);

        return parent::setBsnSearchImage($bsnSearchImage);
    }

    /**
     * {@inheritDoc}
     */
    public function setPatientid($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPatientid', [$id]);

        return parent::setPatientid($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPatientid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPatientid', []);

        return parent::getPatientid();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthdate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthdate', [$date]);

        return parent::setBirthdate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthdate', []);

        return parent::getBirthdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setGender($gender)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGender', [$gender]);

        return parent::setGender($gender);
    }

    /**
     * {@inheritDoc}
     */
    public function getGender()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGender', []);

        return parent::getGender();
    }

    /**
     * {@inheritDoc}
     */
    public function getHospital()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHospital', []);

        return parent::getHospital();
    }

    /**
     * {@inheritDoc}
     */
    public function setHospital($value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHospital', [$value]);

        return parent::setHospital($value);
    }

    /**
     * {@inheritDoc}
     */
    public function addProcedure(\Db\Entity\Procedure $procedure)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProcedure', [$procedure]);

        return parent::addProcedure($procedure);
    }

    /**
     * {@inheritDoc}
     */
    public function getProcedures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProcedures', []);

        return parent::getProcedures();
    }

    /**
     * {@inheritDoc}
     */
    public function deleteProcedures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'deleteProcedures', []);

        return parent::deleteProcedures();
    }

}
