<?php


namespace MrJeff\CommonBundle\Model;


class AddressAPI implements \JsonSerializable
{
    /** @var int $id */
    private $id;

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

    /** @var string $country */
    private $country;

    /** @var int $idOpenBravo */
    private $idOpenBravo;

    /** @var string $address */
    private $address;

    /** @var string $state */
    private $state;

    /** @var \DateTime $creationDate */
    private $creationDate;

    /** @var string $creationUser */
    private $creationUser;

    /** @var \DateTime $updateDate */
    private $updateDate;

    /** @var string $updateUser */
    private $updateUser;

    /** @var bool $isTimeTableOffice */
    private $isTimeTableOffice;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * @return int
     */
    public function getIdOpenBravo()
    {
        return $this->idOpenBravo;
    }

    /**
     * @param int $idOpenBravo
     */
    public function setIdOpenBravo($idOpenBravo)
    {
        $this->idOpenBravo = $idOpenBravo;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * @param \DateTime $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
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
    public function getUpdateUser()
    {
        return $this->updateUser;
    }

    /**
     * @param $updateUser
     */
    public function setUpdateUser($updateUser)
    {
        $this->updateUser = $updateUser;
    }

    /**
     * @return string
     */
    public function getCreationUser()
    {
        return $this->creationUser;
    }

    /**
     * @param string $creationUser
     */
    public function setCreationUser($creationUser)
    {
        $this->creationUser = $creationUser;
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

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'postalCode' => $this->postalCode,
            'phone' => $this->phone,
            'zone' => $this->zone,
            'city' => $this->city,
            'state' => $this->state,
            'country' => $this->country,
            'idOpenBravo' => $this->idOpenBravo,
            'address' => $this->address,
            'creationDate' => $this->creationDate,
            'creationUser' => $this->creationUser,
            'updateDate' => $this->updateDate,
            'updateUser' => $this->updateUser,
            'isTimeTableOffice' => $this->isTimeTableOffice
        );
    }
}