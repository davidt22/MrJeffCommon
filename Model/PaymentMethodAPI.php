<?php


namespace MrJeff\CommonBundle\Model;


class PaymentMethodAPI
{
    /** @var int $idPaymentMethod */
    private $idPaymentMethod;

    /** @var string $name */
    private $name;

    /** @var string $description */
    private $description;

    /** @var boolean $deleted */
    private $deleted;

    /**
     * PaymentMethod constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return int
     */
    public function getIdPaymentMethod()
    {
        return $this->idPaymentMethod;
    }

    /**
     * @param int $idPaymentMethod
     */
    public function setIdPaymentMethod($idPaymentMethod)
    {
        $this->idPaymentMethod = $idPaymentMethod;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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

}