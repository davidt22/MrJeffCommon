<?php

namespace MrJeff\CommonBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

class ClientAPI
{
    /** @var int $id */
    private $id;

    /** @var string $name */
    private $name;

    /** @var string $lastname */
    private $lastname;

    /** @var string $email */
    private $email;

    /** @var ArrayCollection $addresses */
    private $addresses;

    /** @var boolean $deleted */
    private $deleted;

    /** @var int $idWoocommerce */
    private $idWoocommerce;

    /** @var string $idOpenBravo */
    private $idOpenBravo;

    /** @var \DateTime $creationDate */
    private $creationDate;

    /** @var \DateTime $updateDate */
    private $updateDate;

    /** @var string $password */
    private $password;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->addresses = new ArrayCollection();
    }

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
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return boolean
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param boolean $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return ArrayCollection
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * @param ArrayCollection $addresses
     */
    public function setAddresses($addresses)
    {
        $this->addresses = $addresses;
    }

    /**
     * @param AddressAPI $address
     */
    public function addAddress(AddressAPI $address)
    {
        $this->addresses->add($address);
    }

    /**
     * @param AddressAPI $address
     */
    public function removeAddress(AddressAPI $address)
    {
        $this->getAddresses()->removeElement($address);
    }

    /**
     * @return int
     */
    public function getIdWoocommerce()
    {
        return $this->idWoocommerce;
    }

    /**
     * @param int $idWoocommerce
     */
    public function setIdWoocommerce($idWoocommerce)
    {
        $this->idWoocommerce = $idWoocommerce;
    }

    /**
     * @return string
     */
    public function getIdOpenBravo()
    {
        return $this->idOpenBravo;
    }

    /**
     * @param string $idOpenBravo
     */
    public function setIdOpenBravo($idOpenBravo)
    {
        $this->idOpenBravo = $idOpenBravo;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}