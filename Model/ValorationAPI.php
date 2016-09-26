<?php


namespace MrJeff\CommonBundle\Model;


class ValorationAPI
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

}