<?php


namespace MrJeff\CommonBundle\Model;


class JeffPositionAPI
{
    /** @var integer $id */
    private $idJeffPosition;

    /** @var string $latitude */
    private $latitude;

    /** @var string $longitude */
    private $longitude;

    /** @var \DateTime $curDate */
    private $curDate;

    /** @var string $city */
    private $city;

    /**
     * @return int
     */
    public function getIdJeffPosition()
    {
        return $this->idJeffPosition;
    }

    /**
     * @param int $idJeffPosition
     */
    public function setIdJeffPosition($idJeffPosition)
    {
        $this->idJeffPosition = $idJeffPosition;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return \DateTime
     */
    public function getCurDate()
    {
        return $this->curDate;
    }

    /**
     * @param \DateTime $curDate
     */
    public function setCurDate($curDate)
    {
        $this->curDate = $curDate;
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
}