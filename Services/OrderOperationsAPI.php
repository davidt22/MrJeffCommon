<?php

namespace MrJeff\CommonBundle\Services;

use MrJeff\CommonBundle\Model\OrderAPI;
use MrJeff\CommonBundle\Model\ValorationAPI;
use Symfony\Component\HttpFoundation\Request;

class OrderOperationsAPI
{
    const METHOD_ORDER_FIND = 'mrjeff/order/find';
    const METHOD_ORDER_ADD = 'mrjeff/order/add';
    const METHOD_ORDER_UPDATE = 'mrjeff/order/update';
    const METHOD_ORDER_DELETE = 'mrjeff/order/delete';
    const METHOD_ORDER_ADD_VALORATION = 'mrjeff/order/valoration';
    const METHOD_ORDER_POSTAL_CODE = 'mrjeff/order/postalcode';
    const METHOD_ORDER_DATETIME = 'mrjeff/order/datetime';
    const METHOD_ORDER_PRODUCTS = 'mrjeff/order/orderProducts';

    /** @var RequestManagerAPI $requestManagerAPI */
    private $requestManagerAPI;

    /**
     * AuthorizationAPI constructor.
     *
     * @param RequestManagerAPI $requestManagerAPI
     */
    public function __construct(RequestManagerAPI $requestManagerAPI)
    {
        $this->requestManagerAPI = $requestManagerAPI;
    }

    /**
     * @param array $filterFields
     *
     * @return array|bool
     * @throws \Exception
     */
    public function findOrders($filterFields = array('key' => 'value'))
    {
        try{
            $methodUrl = self::METHOD_ORDER_FIND;
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_GET, $methodUrl, $filterFields);

            if($responseAPI->haveError == false){
                $orders = array();

                if($responseAPI->isEmpty == false){

                    foreach ($responseAPI->orders as $order){
                        $orderAPI = DataTransformerAPI::transformOrderDataToObject($order);
                        array_push($orders, $orderAPI);
                    }
                }

                return $orders;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param OrderAPI $orderAPI
     *
     * @return OrderAPI
     * @throws \Exception
     */
    public function addOrder(OrderAPI $orderAPI)
    {
        try{
            $methodUrl = self::METHOD_ORDER_ADD;
            $data = array(
                'order' => $orderAPI
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $methodUrl, $data);

            if($responseAPI->haveError == false){

                if($responseAPI->isEmpty == false){
                    return $orderAPI;
                }
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param OrderAPI $orderAPI
     *
     * @return OrderAPI
     * @throws \Exception
     */
    public function updateOrder(OrderAPI $orderAPI)
    {
        try{
            $methodUrl = self::METHOD_ORDER_UPDATE;
            $data = array(
                'order' => $orderAPI
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_PUT, $methodUrl, $data);

            if($responseAPI->haveError == false){

                if($responseAPI->isEmpty == false){
                    return $orderAPI;
                }
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param OrderAPI $orderAPI
     *
     * @return OrderAPI
     * @throws \Exception
     */
    public function deleteOrder(OrderAPI $orderAPI)
    {
        try{
            $methodUrl = self::METHOD_ORDER_DELETE;
            $data = array(
                'idOrder' => $orderAPI->getId()
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_DELETE, $methodUrl, $data);

            if($responseAPI->haveError == false){

                if($responseAPI->isEmpty == false){
                    return $orderAPI;
                }
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param ValorationAPI $valorationAPI
     *
     * @return ValorationAPI
     * @throws \Exception
     */
    public function addValoration(ValorationAPI $valorationAPI)
    {
        try{
            $methodUrl = self::METHOD_ORDER_ADD_VALORATION;
            $data = array(
                'valoration' => $valorationAPI
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $methodUrl, $data);

            if($responseAPI->haveError == false){

                if($responseAPI->isEmpty == false){
                    return $valorationAPI;
                }
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * TODO: La documentacion del API no especifica que parametros necesita para filtrar la informacion
     */
    public function findValidPostalCode($unknownParams = '')
    {
        try{
            $methodUrl = self::METHOD_ORDER_POSTAL_CODE;
//            $data = array(
//                'valoration' => $valorationAPI
//            );
//            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $methodUrl, $data);
//
//            if($responseAPI->haveError == false){
//
//                if($responseAPI->isEmpty == false){
//                    return $valorationAPI;
//                }
//            }else{
//                throw new \Exception('Error: ' . $responseAPI->messageError);
//            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * TODO: Este servicio depende de un codigopostal VALIDO. Hasta que no se implemente ese metodo, no se podra desarrollar este servicio.
     */
    public function findTimeTable($unknownParams = '')
    {
        try{
            $methodUrl = self::METHOD_ORDER_POSTAL_CODE;
//            $data = array(
//                'valoration' => $valorationAPI
//            );
//            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $methodUrl, $data);
//
//            if($responseAPI->haveError == false){
//
//                if($responseAPI->isEmpty == false){
//                    return $valorationAPI;
//                }
//            }else{
//                throw new \Exception('Error: ' . $responseAPI->messageError);
//            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param OrderAPI $orderAPI
     *
     * @return \Doctrine\Common\Collections\ArrayCollection
     * @throws \Exception
     *
     * TODO: La documentacion del API no especifica que más parametros necesita para filtrar la informacion, solo espera el order-id
     */
    public function findOrderProducts(OrderAPI $orderAPI)
    {
        try{
            $methodUrl = self::METHOD_ORDER_POSTAL_CODE;
            $data = array(
                'order-id' => $orderAPI->getId()
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $methodUrl, $data);

            if($responseAPI->haveError == false){

                if($responseAPI->isEmpty == false){
                    return $orderAPI->getOrderProducts();
                }
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
}