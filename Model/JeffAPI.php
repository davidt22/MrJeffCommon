<?php


namespace MrJeff\CommonBundle\Model;


class JeffAPI implements \JsonSerializable
{
    /** @var integer $id */
    private $id;

    /** @var string $name */
    private $name;

    /** @var string $email */
    private $email;

    /** @var integer $organizationId */
    private $organizationId;

    /** @var string $organizationName */
    private $organizationName;

    /** @var string $city */
    private $city;


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
     * @return int
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * @param int $organizationId
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
    }

    /**
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * @param string $organizationName
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;
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

    function jsonSerialize()
    {
        return array(
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'organizationId' => $this->organizationId,
            'organizationName' => $this->organizationName,
            'city' => $this->city
        );
    }


}