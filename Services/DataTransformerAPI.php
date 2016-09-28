<?php


namespace MrJeff\CommonBundle\Services;


use MrJeff\CommonBundle\Model\AddressAPI;
use MrJeff\CommonBundle\Model\CategoryAPI;
use MrJeff\CommonBundle\Model\ClientAPI;
use MrJeff\CommonBundle\Model\DescriptionAPI;
use MrJeff\CommonBundle\Model\JeffAPI;
use MrJeff\CommonBundle\Model\JeffPositionAPI;
use MrJeff\CommonBundle\Model\LanguageAPI;
use MrJeff\CommonBundle\Model\OrderAPI;
use MrJeff\CommonBundle\Model\OrderProductAPI;
use MrJeff\CommonBundle\Model\PaymentMethodAPI;
use MrJeff\CommonBundle\Model\PriceAPI;
use MrJeff\CommonBundle\Model\ProductAPI;
use MrJeff\CommonBundle\Model\ReviewAPI;
use MrJeff\CommonBundle\Model\StateOrderAPI;
use MrJeff\CommonBundle\Model\ValorationAPI;

class DataTransformerAPI
{
    /**
     * @param $description
     *
     * @return DescriptionAPI
     */
    public static function transformDescriptionDataToObject($description)
    {
        $descriptionAPI = new DescriptionAPI();
        $descriptionAPI->setId($description->idProductDescription);
        $descriptionAPI->setName($description->name);
        $descriptionAPI->setDescription($description->description);

        $language = $description->language;
        $languageAPI = self::transformLanguageDataToObject($language);

        $descriptionAPI->setLanguage($languageAPI);

        return $descriptionAPI;
    }

    /**
     * @param \stdClass $category
     *
     * @return CategoryAPI
     */
    public static function transformCategoryDataToObject(\stdClass $category)
    {
        $categoryAPI = new CategoryAPI();
        $categoryAPI->setId($category->idCategory);
        $categoryAPI->setName($category->name);

        return $categoryAPI;
    }

    /**
     * @param \stdClass $paymentMethodOrder
     *
     * @return PaymentMethodAPI
     */
    public static function transformPaymentMethodDataToObject(\stdClass $paymentMethodOrder)
    {
        $paymentMethodAPI = new PaymentMethodAPI();
        $paymentMethodAPI->setId($paymentMethodOrder->idPaymentMethod);
        $paymentMethodAPI->setName($paymentMethodOrder->name);
        $paymentMethodAPI->setDescription($paymentMethodOrder->description);
        $paymentMethodAPI->setDeleted($paymentMethodOrder->deleted);

        return $paymentMethodAPI;
    }

    /**
     * @param \stdClass $jeffOrder
     *
     * @return JeffAPI
     */
    public static function transformJeffDataToObject(\stdClass $jeffOrder)
    {
        $jeffAPI = new JeffAPI();
        $jeffAPI->setId($jeffOrder->id);
        $jeffAPI->setName($jeffOrder->name);
        $jeffAPI->setEmail($jeffOrder->email);
        $jeffAPI->setOrganizationId($jeffOrder->organizationId);
        $jeffAPI->setOrganizationName($jeffOrder->organizationName);
        $jeffAPI->setCity($jeffOrder->city);

        return $jeffAPI;
    }

    /**
     * @param \stdClass $stateOrder
     *
     * @return StateOrderAPI
     */
    public static function transformStateOrderDataToObject(\stdClass $stateOrder)
    {
        $stateOrderAPI = new StateOrderAPI();
        $stateOrderAPI->setCodeStatus($stateOrder->codeStatus);
        $stateOrderAPI->setName($stateOrder->name);
        $stateOrderAPI->setDescription($stateOrder->description);

        return $stateOrderAPI;
    }

    /**
     * @param \stdClass $language
     *
     * @return LanguageAPI
     */
    public static function transformLanguageDataToObject(\stdClass $language)
    {
        $languageAPI = new LanguageAPI();
        $languageAPI->setCodeLanguage($language->codeLanguage);
        $languageAPI->setDescription($language->description);

        return $languageAPI;
    }

    /**
     * @param \stdClass $price
     *
     * @return PriceAPI
     */
    public static function transformPriceDataToObject(\stdClass $price)
    {
        $priceAPI = new PriceAPI();
        $priceAPI->setId($price->idPrice);
        $priceAPI->setPrice($price->price);
        $priceAPI->setCodeBadge($price->codeBadge);
        $priceAPI->setPercent($price->percent);
        $priceAPI->setCountry($price->country);
        $priceAPI->setCity($price->city);
        $priceAPI->setPostalCode($price->postalCode);

        return $priceAPI;
    }

    /**
     * @param \stdClass $clientOrder
     *
     * @return ClientAPI
     */
    public static function transformClientDataToObject(\stdClass $clientOrder)
    {
        $clientAPI = new ClientAPI();
        $clientAPI->setId($clientOrder->idClient);
        $clientAPI->setName($clientOrder->name);
        $clientAPI->setLastname($clientOrder->lastname);
        $clientAPI->setEmail($clientOrder->email);
        $clientAPI->setDeleted($clientOrder->deleted);
        $clientAPI->setIdWoocommerce($clientOrder->idWoocommerce);
        $clientAPI->setIdOpenBravo($clientOrder->idOpenBravo);
        $clientAPI->setCreationDate($clientOrder->creationDate);
        $clientAPI->setUpdateDate($clientOrder->updateDate);

        return $clientAPI;
    }

    /**
     * @param \stdClass $product
     *
     * @return ProductAPI
     */
    public static function transformProductDataToObject(\stdClass $product)
    {
        $productAPI = new ProductAPI();
        $productAPI->setId($product->idProduct);
        $productAPI->setReference($product->reference);
        $productAPI->setAppVisible($product->appVisible);
        $productAPI->setActive($product->active);
        $productAPI->setDeleted($product->deleted);

        return $productAPI;
    }

    /**
     * @param \stdClass $position
     *
     * @return JeffPositionAPI
     */
    public static function transformJeffPositionDataToObject(\stdClass $position)
    {
        $jeffPosition = new JeffPositionAPI();
        $jeffPosition->setId($position->idJeffPosition);
        $jeffPosition->setLatitude($position->latitude);
        $jeffPosition->setLongitude($position->longitude);
        $jeffPosition->setCurDate($position->curDate);
        $jeffPosition->setCity($position->city);

        return $jeffPosition;
    }

    /**
     * @param $review
     *
     * @return ReviewAPI
     */
    public static function transformReviewDataToObject($review)
    {
        $reviewAPI = new ReviewAPI();
        $reviewAPI->setValue($review->value);
        $reviewAPI->setName($review->name);
        $reviewAPI->setDescription($review->description);
        $reviewAPI->setCustomer($review->customer);


        return $reviewAPI;
    }

    /**
     * @param \stdClass $order
     *
     * @return OrderAPI
     */
    public static function transformOrderDataToObject(\stdClass $order)
    {
        $orderAPI = new OrderAPI();
        $orderAPI->setId($order->idOrder);

        $clientOrder = $order->client;
        $clientAPI = self::transformClientDataToObject($clientOrder);

        foreach ($clientOrder->addresses as $address) {
            $addressAPI = self::transformAddressDataToObject($address);
            $clientAPI->addAddress($addressAPI);
        }

        $orderAPI->setDateOrder($order->dateOrder);
        $orderAPI->setDateDelivery($order->dateDelivery);
        $orderAPI->setDatePickUp($order->datePickup);
        $orderAPI->setNote($order->note);

        $paymentMethodOrder = $order->paymentMethod;
        $paymentMethodAPI = self::transformPaymentMethodDataToObject($paymentMethodOrder);
        $orderAPI->setPaymentMethod($paymentMethodAPI);

        $jeffOrder = $order->jeff;
        $jeffAPI = self::transformJeffDataToObject($jeffOrder);
        $orderAPI->setJeff($jeffAPI);

        $stateOrder = $order->stateOrder;
        $stateOrderAPI = self::transformStateOrderDataToObject($stateOrder);
        $orderAPI->setStateOrder($stateOrderAPI);

        $orderAPI->setDateDeliveryTransport($order->dateDeliveryTransport);
        $orderAPI->setDatePickUpTransport($order->datePickUpTransport);
        $orderAPI->setDateWashingDelivery($order->dateWashingDelivery);
        $orderAPI->setDateWashingPickup($order->dateWashingPickup);
        $orderAPI->setBigBag($order->bigBag);
        $orderAPI->setSmallBag($order->smallBag);
        $orderAPI->setHunger($order->hunger);

        $addressPickupOrder = $order->addressPickUp;
        $addressPickupAPI = self::transformAddressDataToObject($addressPickupOrder);
        $orderAPI->setAddressPickUp($addressPickupAPI);

        $addressDeliveryOrder = $order->addressDelivery;
        $addressDeliveryAPI = self::transformAddressDataToObject($addressDeliveryOrder);
        $orderAPI->setAddressDelivery($addressDeliveryAPI);

        $orderAPI->setMetNote($order->metNote);
        $orderAPI->setValueNote($order->valueNote);
        $orderAPI->setDeleted($order->deleted);
        $orderAPI->setActive($order->active);

        foreach ($order->orderProducts as $orderProduct) {
            $orderProductAPI = new OrderProductAPI();
            $orderProductAPI->setId($orderProduct->idProduct);

            $product = $orderProduct->product;
            $productAPI = self::transformProductDataToObject($product);

            $category = $product->category;
            $categoryAPI = self::transformCategoryDataToObject($category);
            $productAPI->setCategory($categoryAPI);

            foreach ($product->descriptions as $description) {
                $descriptionAPI = self::transformDescriptionDataToObject($description);

                $productAPI->addDescription($descriptionAPI);
            }

            foreach ($product->prices as $price) {
                $priceAPI = self::transformPriceDataToObject($price);

                $productAPI->addPrice($priceAPI);
            }

            $orderProductAPI->setProduct($productAPI);
            $orderProductAPI->setAmount($product->amount);
            $orderProductAPI->setPriceUnit($product->priceUnit);
            $orderProductAPI->setTax($product->tax);
            $orderProductAPI->setSubtotal($product->subtotal);
            $orderProductAPI->setTotal($product->total);

            $orderAPI->addOrderProducts($orderProductAPI);
        }

        return $orderAPI;
    }

    /**
     * @param \stdClass $valoration
     *
     * @return ValorationAPI
     */
    public function transformValorationDataToObject(\stdClass $valoration)
    {
        $valorationAPI = new ValorationAPI();
        $order = $valoration->order;
        $orderAPI = self::transformOrderDataToObject($order);
        $valorationAPI->setOrder($orderAPI);
        $valorationAPI->setMedia($valoration->media);
        $valorationAPI->setRateJeff($valoration->rateJeff);
        $valorationAPI->setRateClothes($valoration->rateClothes);
        $valorationAPI->setRecomended($valoration->recomended);
        $valorationAPI->setUsedAgain($valoration->usedAgain);
        $valorationAPI->setNotes($valoration->notes);

        return $valorationAPI;
    }

    /**
     * @param \stdClass $address
     *
     * @return AddressAPI
     */
    public static function transformAddressDataToObject(\stdClass $address)
    {
        $addressAPI = new AddressAPI();
        $addressAPI->setId($address->id);
        $addressAPI->setPostalCode($address->postalCode);
        $addressAPI->setCity($address->city);
        $addressAPI->setCountry($address->country);
        $addressAPI->setIdOpenBravo($address->idOpenBravo);
        $addressAPI->setAddress($address->address);
        $addressAPI->setCreationDate($address->creationDate);
        $addressAPI->setUpdateDate($address->updateDate);

        return $addressAPI;
    }
}