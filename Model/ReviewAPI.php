<?php


namespace MrJeff\CommonBundle\Model;


class ReviewAPI implements \JsonSerializable
{
    /** @var integer $jeffId */
    private $jeffId;

    /** @var string $jeffRating */
    private $jeffRating;

    /** @var int $idAddress */
    private $value;

    /** @var string $name */
    private $name;

    /** @var string $description */
    private $description;

    /** @var string $customer */
    private $customer;

    /**
     * ReviewAPI constructor.
     */
    public function __construct()
    {
        $this->jeffId = null;
        $this->jeffRating = null;
    }


    /**
     * @return int
     */
    public function getJeffId()
    {
        return $this->jeffId;
    }

    /**
     * @param int $jeffId
     */
    public function setJeffId($jeffId)
    {
        $this->jeffId = $jeffId;
    }

    /**
     * @return string
     */
    public function getJeffRating()
    {
        return $this->jeffRating;
    }

    /**
     * @param string $jeffRating
     */
    public function setJeffRating($jeffRating)
    {
        $this->jeffRating = $jeffRating;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
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
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
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
            'jeffId' => $this->jeffId,
            'jeffRating' => $this->jeffRating,
            'value' => $this->value,
            'name' => $this->name,
            'description' => $this->description,
            'customer' => $this->customer
        );
    }
}