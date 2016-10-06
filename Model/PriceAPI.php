<?php


namespace MrJeff\CommonBundle\Model;


class PriceAPI implements \JsonSerializable
{
    /** @var integer $id */
    private $id;

    /** @var double $price */
    private $price;

    /** @var string $codeBadge */
    private $codeBadge;

    /** @var double $percent */
    private $percent;

    /** @var string $country */
    private $country;

    /** @var string $city */
    private $city;

    /** @var string $postalCode */
    private $postalCode;

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
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getCodeBadge()
    {
        return $this->codeBadge;
    }

    /**
     * @param string $codeBadge
     */
    public function setCodeBadge($codeBadge)
    {
        $this->codeBadge = $codeBadge;
    }

    /**
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param float $percent
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
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
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
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
            'price' => $this->price,
            'codeBadge' => $this->codeBadge,
            'percent' => $this->percent,
            'country' => $this->country,
            'city' => $this->city,
            'postalCode' => $this->postalCode
        );
    }
}