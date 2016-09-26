<?php


namespace MrJeff\CommonBundle\Model;


class StateOrderAPI
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

}