<?php


namespace MrJeff\CommonBundle\Model;


class CategoryAPI implements \JsonSerializable
{
    /** @var integer $id */
    private $id;

    /** @var string $name */
    private $name;

    /** @var string */
    private $idOpenBravo;

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
            'idOpenBravo' => $this->idOpenBravo
        );
    }
}