<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Kontaktnyi extends \AppBundle\Entity\Kontaktnyi implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Kontaktnyi' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Kontaktnyi' . "\0" . 'fio', '' . "\0" . 'AppBundle\\Entity\\Kontaktnyi' . "\0" . 'date_birthday', '' . "\0" . 'AppBundle\\Entity\\Kontaktnyi' . "\0" . 'ochag', '' . "\0" . 'AppBundle\\Entity\\Kontaktnyi' . "\0" . 'osugdenyi');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Kontaktnyi' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Kontaktnyi' . "\0" . 'fio', '' . "\0" . 'AppBundle\\Entity\\Kontaktnyi' . "\0" . 'date_birthday', '' . "\0" . 'AppBundle\\Entity\\Kontaktnyi' . "\0" . 'ochag', '' . "\0" . 'AppBundle\\Entity\\Kontaktnyi' . "\0" . 'osugdenyi');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Kontaktnyi $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFio($fio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFio', array($fio));

        return parent::setFio($fio);
    }

    /**
     * {@inheritDoc}
     */
    public function getFio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFio', array());

        return parent::getFio();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateBirthday($dateBirthday)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateBirthday', array($dateBirthday));

        return parent::setDateBirthday($dateBirthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateBirthday', array());

        return parent::getDateBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setOsugdenyi(\AppBundle\Entity\Osugdenyi $osugdenyi = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOsugdenyi', array($osugdenyi));

        return parent::setOsugdenyi($osugdenyi);
    }

    /**
     * {@inheritDoc}
     */
    public function getOsugdenyi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOsugdenyi', array());

        return parent::getOsugdenyi();
    }

    /**
     * {@inheritDoc}
     */
    public function addKon(\AppBundle\Entity\Osugdenyi $osugdenyi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addKon', array($osugdenyi));

        return parent::addKon($osugdenyi);
    }

    /**
     * {@inheritDoc}
     */
    public function setOchag(\AppBundle\Entity\Ochag $ochag = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOchag', array($ochag));

        return parent::setOchag($ochag);
    }

    /**
     * {@inheritDoc}
     */
    public function getOchag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOchag', array());

        return parent::getOchag();
    }

}
