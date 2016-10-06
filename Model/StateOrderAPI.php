<?php


namespace MrJeff\CommonBundle\Model;


class StateOrderAPI implements \JsonSerializable
{
    /** @var integer $codeStatus */
    private $codeStatus;

    /** @var string $name */
    private $name;

    /** @var string $description */
    private $description;

    /**
     * @return int
     */
    public function getCodeStatus()
    {
        return $this->codeStatus;
    }

    /**
     * @param int $codeStatus
     */
    public function setCodeStatus($codeStatus)
    {
        $this->codeStatus = $codeStatus;
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
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return array(
            'codeStatus' => $this->codeStatus,
            'name' => $this->name,
            'description' => $this->description
        );
    }
}