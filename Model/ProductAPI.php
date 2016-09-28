<?php


namespace MrJeff\CommonBundle\Model;


use Doctrine\Common\Collections\ArrayCollection;

class ProductAPI
{
    /** @var integer $id */
    private $id;

    /** @var string $reference */
    private $reference;

    /** @var boolean $appVisible */
    private $appVisible;

    /** @var boolean $active */
    private $active;

    /** @var boolean $deleted */
    private $deleted;

    /** @var CategoryAPI $category */
    private $category;

    /** @var ArrayCollection $descriptions */
    private $descriptions;

    /** @var ArrayCollection $prices */
    private $prices;

    /**
     * ProductAPI constructor.
     */
    public function __construct()
    {
        $this->descriptions = new ArrayCollection();
        $this->prices = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * @param ArrayCollection $descriptions
     */
    public function setDescriptions($descriptions)
    {
        $this->descriptions = $descriptions;
    }

    /**
     * @param DescriptionAPI $descriptionAPI
     */
    public function addDescription(DescriptionAPI $descriptionAPI)
    {
        $this->descriptions->add($descriptionAPI);
    }

    /**
     * @param DescriptionAPI $descriptionAPI
     */
    public function removeDescription(DescriptionAPI $descriptionAPI)
    {
        $this->getDescriptions()->removeElement($descriptionAPI);
    }

    /**
     * @return ArrayCollection
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param ArrayCollection $prices
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;
    }

    /**
     * @param PriceAPI $priceAPI
     */
    public function addPrice(PriceAPI $priceAPI)
    {
        $this->prices->add($priceAPI);
    }

    /**
     * @param PriceAPI $priceAPI
     */
    public function removePrice(PriceAPI $priceAPI)
    {
        $this->getPrices()->removeElement($priceAPI);
    }

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
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return boolean
     */
    public function isAppVisible()
    {
        return $this->appVisible;
    }

    /**
     * @param boolean $appVisible
     */
    public function setAppVisible($appVisible)
    {
        $this->appVisible = $appVisible;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return boolean
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param boolean $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return CategoryAPI
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param CategoryAPI $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
}