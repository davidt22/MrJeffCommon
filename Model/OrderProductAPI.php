<?php


namespace MrJeff\CommonBundle\Model;


class OrderProductAPI implements \JsonSerializable
{
    /** @var integer $id */
    private $id;

    /** @var ProductAPI $product */
    private $product;

    /** @var double $amount */
    private $amount;

    /** @var double $priceUnit */
    private $priceUnit;

    /** @var double $tax */
    private $tax;

    /** @var double $subtotal */
    private $subtotal;

    /** @var double $total */
    private $total;

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
     * @return ProductAPI
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param ProductAPI $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return float
     */
    public function getPriceUnit()
    {
        return $this->priceUnit;
    }

    /**
     * @param float $priceUnit
     */
    public function setPriceUnit($priceUnit)
    {
        $this->priceUnit = $priceUnit;
    }

    /**
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     */
    public function setTax($tax)
    {
        $this->tax = $tax;
    }

    /**
     * @return float
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    /**
     * @param float $subtotal
     */
    public function setSubtotal($subtotal)
    {
        $this->subtotal = $subtotal;
    }

    /**
     * @return float
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
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
            'product' => $this->product,
            'amount' => $this->amount,
            'priceUnit' => $this->priceUnit,
            'tax' => $this->tax,
            'subtotal' => $this->subtotal,
            'total' => $this->total
        );
    }
}