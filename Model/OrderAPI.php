<?php


namespace MrJeff\CommonBundle\Model;


use Doctrine\Common\Collections\ArrayCollection;

class OrderAPI
{
    /** @var int $id */
    private $id;

    /** @var UserAPI $client */
    private $client;

    /** @var \DateTime $dateOrder */
    private $dateOrder;

    /** @var \DateTime $dateDelivery */
    private $dateDelivery;

    /** @var \DateTime $datePickUp */
    private $datePickUp;

    /** @var string $note */
    private $note;

    /** @var PaymentMethodAPI $paymentMethod */
    private $paymentMethod;

    /** @var JeffAPI $jeff */
    private $jeff;

    /** @var StateOrderAPI $stateOrder */
    private $stateOrder;

    /** @var \DateTime $dateDeliveryTransport */
    private $dateDeliveryTransport;

    /** @var \DateTime $datePickUpTransport */
    private $datePickUpTransport;

    /** @var \DateTime $dateWashingDelivery */
    private $dateWashingDelivery;

    /** @var \DateTime $dateWashingPickup */
    private $dateWashingPickup;

    /** @var integer $bigBag */
    private $bigBag;

    /** @var integer $smallBag */
    private $smallBag;

    /** @var integer $hunger */
    private $hunger;

    /** @var AddressAPI $addressPickUp */
    private $addressPickUp;

    /** @var AddressAPI $addressDelivery */
    private $addressDelivery;

    /** @var string $metNote */
    private $metNote;

    /** @var string $valueNote */
    private $valueNote;

    /** @var boolean $deleted */
    private $deleted;

    /** @var boolean $active */
    private $active;

    /** @var ArrayCollection $orderProducts */
    private $orderProducts;

    /**
     * OrderAPI constructor.
     */
    public function __construct()
    {
        $this->orderProducts = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getOrderProducts()
    {
        return $this->orderProducts;
    }

    /**
     * @param ArrayCollection $orderProducts
     */
    public function setOrderProducts($orderProducts)
    {
        $this->orderProducts = $orderProducts;
    }

    /**
     * @param OrderProductAPI $orderProductAPI
     */
    public function addOrderProducts(OrderProductAPI $orderProductAPI)
    {
        $this->orderProducts->add($orderProductAPI);
    }

    /**
     * @param OrderProductAPI $orderProductAPI
     */
    public function removeAddress(OrderProductAPI $orderProductAPI)
    {
        $this->getOrderProducts()->removeElement($orderProductAPI);
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
     * @return UserAPI
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param UserAPI $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return \DateTime
     */
    public function getDateOrder()
    {
        return $this->dateOrder;
    }

    /**
     * @param \DateTime $dateOrder
     */
    public function setDateOrder($dateOrder)
    {
        $this->dateOrder = $dateOrder;
    }

    /**
     * @return \DateTime
     */
    public function getDateDelivery()
    {
        return $this->dateDelivery;
    }

    /**
     * @param \DateTime $dateDelivery
     */
    public function setDateDelivery($dateDelivery)
    {
        $this->dateDelivery = $dateDelivery;
    }

    /**
     * @return \DateTime
     */
    public function getDatePickUp()
    {
        return $this->datePickUp;
    }

    /**
     * @param \DateTime $datePickUp
     */
    public function setDatePickUp($datePickUp)
    {
        $this->datePickUp = $datePickUp;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return PaymentMethodAPI
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param PaymentMethodAPI $paymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return JeffAPI
     */
    public function getJeff()
    {
        return $this->jeff;
    }

    /**
     * @param JeffAPI $jeff
     */
    public function setJeff($jeff)
    {
        $this->jeff = $jeff;
    }

    /**
     * @return StateOrderAPI
     */
    public function getStateOrder()
    {
        return $this->stateOrder;
    }

    /**
     * @param StateOrderAPI $stateOrder
     */
    public function setStateOrder($stateOrder)
    {
        $this->stateOrder = $stateOrder;
    }

    /**
     * @return \DateTime
     */
    public function getDateDeliveryTransport()
    {
        return $this->dateDeliveryTransport;
    }

    /**
     * @param \DateTime $dateDeliveryTransport
     */
    public function setDateDeliveryTransport(\DateTime $dateDeliveryTransport)
    {
        $this->dateDeliveryTransport = $dateDeliveryTransport;
    }

    /**
     * @return \DateTime
     */
    public function getDatePickUpTransport()
    {
        return $this->datePickUpTransport;
    }

    /**
     * @param \DateTime $datePickUpTransport
     */
    public function setDatePickUpTransport(\DateTime $datePickUpTransport)
    {
        $this->datePickUpTransport = $datePickUpTransport;
    }

    /**
     * @return \DateTime
     */
    public function getDateWashingDelivery()
    {
        return $this->dateWashingDelivery;
    }

    /**
     * @param \DateTime $dateWashingDelivery
     */
    public function setDateWashingDelivery(\DateTime $dateWashingDelivery)
    {
        $this->dateWashingDelivery = $dateWashingDelivery;
    }

    /**
     * @return \DateTime
     */
    public function getDateWashingPickup()
    {
        return $this->dateWashingPickup;
    }

    /**
     * @param \DateTime $dateWashingPickup
     */
    public function setDateWashingPickup(\DateTime $dateWashingPickup)
    {
        $this->dateWashingPickup = $dateWashingPickup;
    }

    /**
     * @return int
     */
    public function getBigBag()
    {
        return $this->bigBag;
    }

    /**
     * @param int $bigBag
     */
    public function setBigBag($bigBag)
    {
        $this->bigBag = $bigBag;
    }

    /**
     * @return int
     */
    public function getSmallBag()
    {
        return $this->smallBag;
    }

    /**
     * @param int $smallBag
     */
    public function setSmallBag($smallBag)
    {
        $this->smallBag = $smallBag;
    }

    /**
     * @return int
     */
    public function getHunger()
    {
        return $this->hunger;
    }

    /**
     * @param int $hunger
     */
    public function setHunger($hunger)
    {
        $this->hunger = $hunger;
    }

    /**
     * @return AddressAPI
     */
    public function getAddressPickUp()
    {
        return $this->addressPickUp;
    }

    /**
     * @param AddressAPI $addressPickUp
     */
    public function setAddressPickUp($addressPickUp)
    {
        $this->addressPickUp = $addressPickUp;
    }

    /**
     * @return AddressAPI
     */
    public function getAddressDelivery()
    {
        return $this->addressDelivery;
    }

    /**
     * @param AddressAPI $addressDelivery
     */
    public function setAddressDelivery($addressDelivery)
    {
        $this->addressDelivery = $addressDelivery;
    }

    /**
     * @return string
     */
    public function getMetNote()
    {
        return $this->metNote;
    }

    /**
     * @param string $metNote
     */
    public function setMetNote($metNote)
    {
        $this->metNote = $metNote;
    }

    /**
     * @return string
     */
    public function getValueNote()
    {
        return $this->valueNote;
    }

    /**
     * @param string $valueNote
     */
    public function setValueNote($valueNote)
    {
        $this->valueNote = $valueNote;
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

}