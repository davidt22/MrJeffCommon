<?php


namespace MrJeff\CommonBundle\Model;


class PriceAPI
{
    /** @var integer $idPrice */
    private $idPrice;

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
    public function getIdPrice()
    {
        return $this->idPrice;
    }

    /**
     * @param int $idPrice
     */
    public function setIdPrice($idPrice)
    {
        $this->idPrice = $idPrice;
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
}