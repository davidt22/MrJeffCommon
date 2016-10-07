<?php


namespace MrJeff\CommonBundle\Services;


use MrJeff\CommonBundle\Model\AddressAPI;
use MrJeff\CommonBundle\Model\CategoryAPI;
use MrJeff\CommonBundle\Model\ClientAPI;
use MrJeff\CommonBundle\Model\DescriptionAPI;
use MrJeff\CommonBundle\Model\JeffAPI;
use MrJeff\CommonBundle\Model\JeffPositionAPI;
use MrJeff\CommonBundle\Model\LanguageAPI;
use MrJeff\CommonBundle\Model\MetadataAPI;
use MrJeff\CommonBundle\Model\OrderAPI;
use MrJeff\CommonBundle\Model\OrderProductAPI;
use MrJeff\CommonBundle\Model\PaymentMethodAPI;
use MrJeff\CommonBundle\Model\PriceAPI;
use MrJeff\CommonBundle\Model\ProductAPI;
use MrJeff\CommonBundle\Model\ReviewAPI;
use MrJeff\CommonBundle\Model\StateOrderAPI;
use MrJeff\CommonBundle\Model\UserAPI;
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
        $descriptionAPI->setIdProductDescription(isset($description->idProductDescription) ? $description->idProductDescription : null);
        $descriptionAPI->setName(isset($description->name) ? $description->name : null);
        $descriptionAPI->setDescription(isset($description->description) ? $description->description : null);

        if(isset($description->language)){
            $languageAPI = self::transformLanguageDataToObject($description->language);

            $descriptionAPI->setLanguage($languageAPI);
        }

        return $descriptionAPI;
    }

    /**
     * @param \stdClass $category
     *
     * @return CategoryAPI
     */
    public static function transformCategoryDataToObject(\stdClass $category)
    {
        try{
            $categoryAPI = new CategoryAPI();
            $categoryAPI->setId(isset($category->idCategory) ? $category->idCategory : null);
            $categoryAPI->setName(isset($category->name) ? $category->name : null);
            $categoryAPI->setIdOpenBravo(isset($category->idOpenBravo) ? $category->idOpenBravo : null);

            return $categoryAPI;
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * @param \stdClass $paymentMethodOrder
     *
     * @return PaymentMethodAPI
     */
    public static function transformPaymentMethodDataToObject(\stdClass $paymentMethodOrder)
    {
        $paymentMethodAPI = new PaymentMethodAPI();
        $paymentMethodAPI->setId(isset($paymentMethodOrder->idPaymentMethod) ? $paymentMethodOrder->idPaymentMethod : null);
        $paymentMethodAPI->setName(isset($paymentMethodOrder->name) ? $paymentMethodOrder->name : null);
        $paymentMethodAPI->setDescription(isset($paymentMethodOrder->description) ? $paymentMethodOrder->description : null);
        $paymentMethodAPI->setDeleted(isset($paymentMethodOrder->deleted) ? $paymentMethodOrder->deleted : null);

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
        $jeffAPI->setId(isset($jeffOrder->id) ? $jeffOrder->id : null);
        $jeffAPI->setName(isset($jeffOrder->name) ? $jeffOrder->name : null);
        $jeffAPI->setEmail(isset($jeffOrder->email) ? $jeffOrder->email : null);
        $jeffAPI->setOrganizationId(isset($jeffOrder->organizationId) ? $jeffOrder->organizationId : null);
        $jeffAPI->setOrganizationName(isset($jeffOrder->organizationName) ? $jeffOrder->organizationName : null);
        $jeffAPI->setCity(isset($jeffOrder->city) ? $jeffOrder->city : null);

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
        $stateOrderAPI->setCodeStatus(isset($stateOrder->codeStatus) ? $stateOrder->codeStatus : null);
        $stateOrderAPI->setName(isset($stateOrder->name) ? $stateOrder->name : null);
        $stateOrderAPI->setDescription(isset($stateOrder->description) ? $stateOrder->description : null);

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
        $languageAPI->setCodeLanguage(isset($language->codeLanguage) ? $language->codeLanguage : null);
        $languageAPI->setDescription(isset($language->description) ? $language->description : null);

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
        $priceAPI->setId(isset($price->idPrice) ? $price->idPrice : null);
        $priceAPI->setPrice(isset($price->price) ? $price->price : null);
        $priceAPI->setCodeBadge(isset($price->codeBadge) ? $price->codeBadge : null);
        $priceAPI->setPercent(isset($price->percent) ? $price->percent : null);
        $priceAPI->setCountry(isset($price->country) ? $price->country : null);
        $priceAPI->setCity(isset($price->city) ? $price->city : null);
        $priceAPI->setPostalCode(isset($price->postalCode) ? $price->postalCode : null);

        return $priceAPI;
    }

    /**
     * @param \stdClass $metadata
     *
     * @return MetadataAPI
     */
    public static function transformMetadataDataToObject(\stdClass $metadata)
    {
        $metadataAPI = new MetadataAPI();
        $metadataAPI->setId(isset($metadata->idPrice) ? $metadata->idPrice : null);
        $metadataAPI->setName(isset($metadata->name) ? $metadata->name : null);
        $metadataAPI->setValue(isset($metadata->value) ? $metadata->value : null);

        return $metadataAPI;
    }

    /**
     * @param \stdClass $client
     *
     * @return ClientAPI
     */
    public static function transformClientDataToObject(\stdClass $client)
    {
        $clientAPI = new ClientAPI();
        $clientAPI->setId(isset($client->idClient) ? $client->idClient : null);
        $clientAPI->setName(isset($client->name) ? $client->name : null);
        $clientAPI->setLastname(isset($client->lastname) ? $client->lastname : null);
        $clientAPI->setEmail(isset($client->email) ? $client->email : null);
        $clientAPI->setPassword(isset($client->password) ? $client->password : null);
        $clientAPI->setDeleted(isset($client->deleted) ? $client->deleted : null);
//        $clientAPI->setIdWoocommerce(isset($clientOrder->idWoocommerce) ? $clientOrder->idWoocommerce : null);
//        $clientAPI->setIdOpenBravo(isset($clientOrder->idOpenBravo) ? $clientOrder->idOpenBravo : null);
        $clientAPI->setCreationDate(isset($client->creationDate) ? $client->creationDate : null);
        $clientAPI->setUpdateDate(isset($client->updateDate) ? $client->updateDate : null);
        $clientAPI->setUpdateUser(isset($client->password) ? $client->password : null);

        foreach($client->addresses as $address){
            $addressAPI = DataTransformerAPI::transformAddressDataToObject($address);

            $clientAPI->addAddress($addressAPI);
        }

        return $clientAPI;
    }

    /**
     * @param \stdClass $product
     *
     * @return ProductAPI
     */
    public static function transformProductDataToObject(\stdClass $product)
    {
        try{
            $productAPI = new ProductAPI();
            $productAPI->setId(isset($product->idProduct) ? $product->idProduct : null);
            $productAPI->setIdWooCommerce(isset($product->idWoocommerce) ? $product->idWoocommerce : null);
            $productAPI->setAppVisible(isset($product->appVisible) ? $product->appVisible : null);
            $productAPI->setActive(isset($product->active) ? $product->active : null);
            $productAPI->setDeleted(isset($product->deleted) ? $product->deleted : null);
            $productAPI->setPack(isset($product->pack) ? $product->pack : null);

            foreach($product->categories as $category){
                $categoryAPI = DataTransformerAPI::transformCategoryDataToObject($category);

                $productAPI->addCategory($categoryAPI);
            }


            foreach ($product->descriptions as $description) {
                $descriptionAPI = DataTransformerAPI::transformDescriptionDataToObject($description);

                $productAPI->addDescription($descriptionAPI);
            }

            foreach ($product->prices as $price) {
                $priceAPI = DataTransformerAPI::transformPriceDataToObject($price);

                $productAPI->addPrice($priceAPI);
            }

            foreach ($product->metadata as $metadata) {
                $metadataAPI = DataTransformerAPI::transformMetadataDataToObject($metadata);

                $productAPI->addMetadata($metadataAPI);
            }

            $productAPI->setUrl(isset($product->url) ? $product->url : null);
            $productAPI->setCreationDate(isset($product->creationDate) ? $product->creationDate : null);
            $productAPI->setCreationUser(isset($product->creationUser) ? $product->creationUser : null);
            $productAPI->setUpdateDate(isset($product->updateDate) ? $product->updateDate: null);
            $productAPI->setUpdateUser(isset($product->updateUser) ? $product->updateUser: null);

            return $productAPI;
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }

    /**
     * @param \stdClass $position
     *
     * @return JeffPositionAPI
     */
    public static function transformJeffPositionDataToObject(\stdClass $position)
    {
        $jeffPosition = new JeffPositionAPI();
        $jeffPosition->setId(isset($position->idJeffPosition) ? $position->idJeffPosition : null);
        $jeffPosition->setLatitude(isset($position->latitude) ? $position->latitude : null);
        $jeffPosition->setLongitude(isset($position->longitude) ? $position->longitude : null);
        $jeffPosition->setCurDate(isset($position->curDate) ? $position->curDate : null);
        $jeffPosition->setCity(isset($position->city) ? $position->city : null);

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
        $reviewAPI->setValue(isset($review->value) ? $review->value : null);
        $reviewAPI->setName(isset($review->name) ? $review->name : null);
        $reviewAPI->setDescription(isset($review->description) ? $review->description : null);
        $reviewAPI->setCustomer(isset($review->customer) ? $review->customer : null);


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
        $valorationAPI->setOrder(isset($orderAPI) ? $orderAPI : null);
        $valorationAPI->setMedia(isset($valoration->media) ? $valoration->media : null);
        $valorationAPI->setRateJeff(isset($valoration->rateJeff) ? $valoration->rateJeff : null);
        $valorationAPI->setRateClothes(isset($valoration->rateClothes) ? $valoration->rateClothes : null);
        $valorationAPI->setRecomended(isset($valoration->recomended) ? $valoration->recomended : null);
        $valorationAPI->setUsedAgain(isset($valoration->usedAgain) ? $valoration->usedAgain : null);
        $valorationAPI->setNotes(isset($valoration->notes) ? $valoration->notes : null);

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
        $addressAPI->setId(isset($address->id) ? $address->id : 0);
        $addressAPI->setName(isset($address->name) ? $address->name: null);
        $addressAPI->setPostalCode(isset($address->postalCode) ? $address->postalCode : null);
        $addressAPI->setPhone(isset($address->phone) ? $address->phone : null);
        $addressAPI->setZone(isset($address->zone) ? $address->zone : null);
        $addressAPI->setCity(isset($address->city) ? $address->city : null);
        $addressAPI->setState(isset($address->state) ? $address->state : null);
        $addressAPI->setCountry(isset($address->country) ? $address->country : null);
//        $addressAPI->setIdOpenBravo(isset($address->idOpenBravo) ? $address->idOpenBravo : null);
        $addressAPI->setAddress(isset($address->address) ? $address->address : null);
        $addressAPI->setCreationDate(isset($address->creationDate) ? $address->creationDate : null);
        $addressAPI->setCreationUser(isset($address->creationUser) ? $address->creationUser : null);
        $addressAPI->setUpdateDate(isset($address->updateDate) ? $address->updateDate : null);
        $addressAPI->setUpdateUser(isset($address->updateUser) ? $address->updateUser : null);
//        $addressAPI->setIsTimeTableOffice(isset($address->isTimeTableOffice) ? $address->isTimeTableOffice : null);

        return $addressAPI;
    }

    /**
     * @param \stdClass $responseAPI
     * @param $password
     *
     * @return UserAPI
     */
    public static function transformUserDataToObject(\stdClass $responseAPI, $password)
    {
        $userAPI = new UserAPI();
//        $userAPI->setId(isset($user->id) ? $user->id : null);
        $userAPI->setName($responseAPI->user ? $responseAPI->user->name : null);
        $userAPI->setEmail($responseAPI->user ? $responseAPI->user->email : null);
        $userAPI->setPassword($password);
        $userAPI->setToken($responseAPI->token ? $responseAPI->token : null);

        return $userAPI;
    }
}