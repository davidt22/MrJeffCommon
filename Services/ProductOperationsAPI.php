<?php

namespace MrJeff\CommonBundle\Services;

use MrJeff\CommonBundle\Services\RequestManagerAPI;
use MrJeff\CommonBundle\Model\ProductAPI;
use Symfony\Component\HttpFoundation\Request;

class ProductOperationsAPI
{
    const METHOD_PRODUCT_FIND = 'mrjeff/product/find';
    const METHOD_PRODUCT_ADD = 'mrjeff/product/add';
    const METHOD_PRODUCT_UPDATE = 'mrjeff/product/update';
    const METHOD_PRODUCT_DELETE = 'mrjeff/product/delete';

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
     * @param string $token
     *
     * @return array
     * @throws \Exception
     */
    public function findProducts($filterFields = array('key' => 'value'), $token = '')
    {
        try{
            $methodUrl = self::METHOD_PRODUCT_FIND;
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_GET, $methodUrl, $filterFields, $token);

            if($responseAPI->codeResult == false){
                $products = array();

                if($responseAPI->isEmpty == false){

                    foreach ($responseAPI->data as $product){
                        $productAPI = DataTransformerAPI::transformProductDataToObject($product);

                        array_push($products, $productAPI);
                    }
                }

                return $products;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param ProductAPI $productAPI
     *
     * @return mixed
     * @throws \Exception
     */
    public function addProduct(ProductAPI $productAPI)
    {
        try{
            $methodUrl = self::METHOD_PRODUCT_ADD;
            $data = array(
                'product' => $productAPI
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $methodUrl, $data);

            if($responseAPI->haveError == false){

                if($responseAPI->isEmpty == false){
                    return $productAPI;
                }
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param ProductAPI $productAPI
     *
     * @return ProductAPI
     * @throws \Exception
     */
    public function updateProduct(ProductAPI $productAPI)
    {
        try{
            $methodUrl = self::METHOD_PRODUCT_UPDATE;
            $data = array(
                'product' => $productAPI
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_PUT, $methodUrl, $data);

            if($responseAPI->haveError == false){

                if($responseAPI->isEmpty == false){
                    return $productAPI;
                }
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param ProductAPI $productAPI
     *
     * @return mixed
     * @throws \Exception
     */
    public function deleteProduct(ProductAPI $productAPI)
    {
        try{
            $methodUrl = self::METHOD_PRODUCT_DELETE;
            $data = array(
                'idproduct' => $productAPI->getId()
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_DELETE, $methodUrl, $data);

            if($responseAPI->haveError == false){

                if($responseAPI->isEmpty == false){
                    return $productAPI;
                }
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
}