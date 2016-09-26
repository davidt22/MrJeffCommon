<?php

namespace MrJeff\CommonBundle\Services;

use MrJeff\CommonBundle\Model\JeffPositionAPI;
use Symfony\Component\HttpFoundation\Request;

class JeffPositionOperationsAPI
{
    const METHOD_POSITION_FIND = 'mrjeff/jeffoperation/jeffPosition/find';
    const METHOD_POSITION_ADD = 'mrjeff/jeffoperation/jeffPosition/add';

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
    public function findJeffPosition($filterFields = array('key' => 'value'))
    {
        try{
            $methodUrl = self::METHOD_POSITION_FIND;
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_GET, $methodUrl, $filterFields);

            if($responseAPI->haveError == false){
                $positions = array();

                if($responseAPI->isEmpty == false){

                    foreach ($responseAPI->product as $product){
                        $jeffPositionAPI = DataTransformerAPI::transformJeffPositionDataToObject($product);

                        array_push($positions, $jeffPositionAPI);
                    }
                }

                return $positions;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param JeffPositionAPI $jeffPositionAPI
     *
     * @return mixed
     * @throws \Exception
     */
    public function addPosition(JeffPositionAPI $jeffPositionAPI)
    {
        try{
            $methodUrl = self::METHOD_POSITION_ADD;
            $data = array(
                'jeffPosition' => $jeffPositionAPI
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $methodUrl, $data);

            if($responseAPI->haveError == false){

                if($responseAPI->isEmpty == false){
                    return $jeffPositionAPI;
                }
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
}