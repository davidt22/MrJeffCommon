<?php


namespace MrJeff\CommonBundle\Model;


class JeffPositionAPI implements \JsonSerializable
{
    /** @var integer $id */
    private $id;

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
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'curDate' => $this->curDate,
            'city' => $this->city
        );
    }
}