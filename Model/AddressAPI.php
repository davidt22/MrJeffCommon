<?php


namespace MrJeff\CommonBundle\Model;


class AddressAPI
{
    /** @var int $idAddress */
    private $idAddress;

    /** @var string $name */
    private $name;

    /** @var string $postalCode */
    private $postalCode;

    /** @var string $phone */
    private $phone;

    /** @var string $zone */
    private $zone;

    /** @var string $city */
    private $city;

    /** @var string $state */
    private $state;

    /** @var string $country */
    private $country;

    /** @var boolean $isTimeTableOffice */
    private $isTimeTableOffice;

    /**
     * AddressAPI constructor.
     */
    public function __construct()
    {

    }


    /**
     * @return int
     */
    public function getIdAddress()
    {
        return $this->idAddress;
    }

    /**
     * @param int $idAddress
     */
    public function setIdAddress($idAddress)
    {
        $this->idAddress = $idAddress;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * @param string $zone
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return boolean
     */
    public function isIsTimeTableOffice()
    {
        return $this->isTimeTableOffice;
    }

    /**
     * @param boolean $isTimeTableOffice
     */
    public function setIsTimeTableOffice($isTimeTableOffice)
    {
        $this->isTimeTableOffice = $isTimeTableOffice;
    }

}