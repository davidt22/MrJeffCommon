<?php


namespace MrJeff\CommonBundle\Model;


class ValorationAPI implements \JsonSerializable
{
    /** @var OrderAPI $order */
    private $order;

    /** @var string $media */
    private $media;

    /** @var integer $rateJeff */
    private $rateJeff;

    /** @var integer $rateClothes */
    private $rateClothes;

    /** @var boolean $recomended */
    private $recomended;

    /** @var boolean $usedAgain */
    private $usedAgain;

    /** @var string $notes */
    private $notes;

    /**
     * @return OrderAPI
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param OrderAPI $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return string
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param string $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }

    /**
     * @return int
     */
    public function getRateJeff()
    {
        return $this->rateJeff;
    }

    /**
     * @param int $rateJeff
     */
    public function setRateJeff($rateJeff)
    {
        $this->rateJeff = $rateJeff;
    }

    /**
     * @return int
     */
    public function getRateClothes()
    {
        return $this->rateClothes;
    }

    /**
     * @param int $rateClothes
     */
    public function setRateClothes($rateClothes)
    {
        $this->rateClothes = $rateClothes;
    }

    /**
     * @return boolean
     */
    public function isRecomended()
    {
        return $this->recomended;
    }

    /**
     * @param boolean $recomended
     */
    public function setRecomended($recomended)
    {
        $this->recomended = $recomended;
    }

    /**
     * @return boolean
     */
    public function isUsedAgain()
    {
        return $this->usedAgain;
    }

    /**
     * @param boolean $usedAgain
     */
    public function setUsedAgain($usedAgain)
    {
        $this->usedAgain = $usedAgain;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
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
            'order' => $this->order,
            'media' => $this->media,
            'rateJeff' => $this->rateJeff,
            'rateClothes' => $this->rateClothes,
            'recomended' => $this->recomended,
            'usedAgain' => $this->usedAgain,
            'notes' => $this->notes
        );
    }
}