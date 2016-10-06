<?php


namespace MrJeff\CommonBundle\Model;


use Doctrine\Common\Collections\ArrayCollection;

class ProductAPI implements \JsonSerializable
{
    /** @var integer $id */
    private $id;

    /** @var integer $idWooCommerce */
    private $idWooCommerce;

//    /** @var string $reference */
//    private $reference;

    /** @var boolean $appVisible */
    private $appVisible;

    /** @var boolean $active */
    private $active;

    /** @var boolean $deleted */
    private $deleted;

    /** @var ArrayCollection $pack */
    private $pack;

    /** @var ArrayCollection $category */
    private $category;

    /** @var ArrayCollection $descriptions */
    private $descriptions;

    /** @var ArrayCollection $prices */
    private $prices;

    /** @var ArrayCollection $metadata */
    private $metadata;

    /** @var string $url */
    private $url;

    /** @var \DateTime */
    private $creationDate;

    /** @var string */
    private $creationUser;

    /** @var \DateTime */
    private $updateDate;

    /** @var string */
    private $updateUser;

    /**
     * ProductAPI constructor.
     */
    public function __construct()
    {
        $this->pack = new ArrayCollection();
        $this->category = new ArrayCollection();
        $this->descriptions = new ArrayCollection();
        $this->prices = new ArrayCollection();
        $this->metadata = new ArrayCollection();
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

//    /**
//     * @return string
//     */
//    public function getReference()
//    {
//        return $this->reference;
//    }
//
//    /**
//     * @param string $reference
//     */
//    public function setReference($reference)
//    {
//        $this->reference = $reference;
//    }

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

    /**
     * @param CategoryAPI $categoryAPI
     */
    public function addCategory(CategoryAPI $categoryAPI)
    {
        $this->category->add($categoryAPI);
    }

    /**
     * @param CategoryAPI $categoryAPI
     */
    public function removeCategory(CategoryAPI $categoryAPI)
    {
        $this->getCategory()->removeElement($categoryAPI);
    }

    /**
     * @return int
     */
    public function getIdWooCommerce()
    {
        return $this->idWooCommerce;
    }

    /**
     * @param int $idWooCommerce
     */
    public function setIdWooCommerce($idWooCommerce)
    {
        $this->idWooCommerce = $idWooCommerce;
    }

    /**
     * @return ArrayCollection
     */
    public function getPack()
    {
        return $this->pack;
    }

    /**
     * @param ArrayCollection $pack
     */
    public function setPack($pack)
    {
        $this->pack = $pack;
    }

    /**
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param string $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @param MetadataAPI $metadataAPI
     */
    public function addMetadata(MetadataAPI $metadataAPI)
    {
        $this->metadata->add($metadataAPI);
    }

    /**
     * @param MetadataAPI $metadataAPI
     */
    public function removeMetadata(MetadataAPI $metadataAPI)
    {
        $this->getMetadata()->removeElement($metadataAPI);
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return string
     */
    public function getCreationUser()
    {
        return $this->creationUser;
    }

    /**
     * @param string $creationUser
     */
    public function setCreationUser($creationUser)
    {
        $this->creationUser = $creationUser;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * @param \DateTime $updateDate
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;
    }

    /**
     * @return string
     */
    public function getUpdateUser()
    {
        return $this->updateUser;
    }

    /**
     * @param string $updateUser
     */
    public function setUpdateUser($updateUser)
    {
        $this->updateUser = $updateUser;
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
             'idWooCommerce' => $this->idWooCommerce,
             'appVisible' => $this->appVisible,
             'active' => $this->active,
             'deleted' => $this->deleted,
             'pack' => $this->pack->toArray(),
             'category' => $this->category->toArray(),
             'descriptions' => $this->descriptions->toArray(),
             'prices' => $this->prices->toArray(),
             'metadata' => $this->metadata,
             'url' => $this->url,
             'creationDate' => $this->creationDate,
             'creationUser' => $this->creationUser,
             'updateDate' => $this->updateDate,
             'updateUser' => $this->updateUser
        );
    }
}