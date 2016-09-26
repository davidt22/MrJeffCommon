<?php


namespace MrJeff\CommonBundle\Model;


class CategoryAPI
{
    /** @var integer $idCatgeory */
    private $idCatgeory;

    /** @var string $name */
    private $name;

    /**
     * @return int
     */
    public function getIdCatgeory()
    {
        return $this->idCatgeory;
    }

    /**
     * @param int $idCatgeory
     */
    public function setIdCatgeory($idCatgeory)
    {
        $this->idCatgeory = $idCatgeory;
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

}