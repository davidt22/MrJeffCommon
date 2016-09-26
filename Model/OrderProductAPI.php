<?php


namespace MrJeff\CommonBundle\Model;


class OrderProductAPI
{
    /** @var integer $idOrderProduct */
    private $idOrderProduct;

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
    public function getIdOrderProduct()
    {
        return $this->idOrderProduct;
    }

    /**
     * @param int $idOrderProduct
     */
    public function setIdOrderProduct($idOrderProduct)
    {
        $this->idOrderProduct = $idOrderProduct;
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



}