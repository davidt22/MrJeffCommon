<?php

namespace MrJeff\CommonBundle\Services;

use MrJeff\CommonBundle\Model\ClientAPI;
use Symfony\Component\HttpFoundation\Request;

class ClientOperationsAPI
{
    const METHOD_CLIENT_FIND = 'mrjeff/client/find';
    const METHOD_CLIENT_ADD = 'mrjeff/client/add';
    const METHOD_CLIENT_UPDATE = 'mrjeff/client/update';
    const METHOD_CLIENT_DELETE = 'mrjeff/client/delete';
    const METHOD_CLIENT_ADDRESS_DELETE = 'mrjeff/client/address/delete';

    /** @var RequestManagerAPI $requestManagerAPI */
    private $requestManagerAPI;

    /**
     * ClientOperationsAPI constructor.
     *
     * @param RequestManagerAPI $requestManagerAPI
     */
    public function __construct(RequestManagerAPI $requestManagerAPI)
    {
        $this->requestManagerAPI = $requestManagerAPI;
    }

    /**
     * @param array $filterFields
     * @param $token
     *
     * @return array
     * @throws \Exception
     */
    public function findClients($filterFields = array('key' => 'value'), $token)
    {
        try{
            $uri = self::METHOD_CLIENT_FIND;
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_GET, $uri, $filterFields, $token);

            if($responseAPI->codeResult == 0){
                $users = array();

                if($responseAPI->isEmpty == false){

                    foreach ($responseAPI->data as $client){
                        $clientAPI = DataTransformerAPI::transformClientDataToObject($client);

                        array_push($users, $clientAPI);
                    }
                }

                return $users;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param ClientAPI $clientAPI
     * @param $token
     *
     * @return ClientAPI
     * @throws \Exception
     */
    public function addClient(ClientAPI $clientAPI, $token)
    {
        try{
            $uri = self::METHOD_CLIENT_ADD;
            $data = $clientAPI;

            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $uri, $data, $token);

            if($responseAPI != null && $responseAPI->haveError == false){

                if(count($responseAPI->data) == 1){

                    $client = $responseAPI->data;
                    $clientAPI = DataTransformerAPI::transformClientDataToObject($client);
                }

                return $clientAPI;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError ? $responseAPI->messageError : 'Response is empty.');
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param ClientAPI $clientAPI
     * @param $token
     *
     * @return ClientAPI
     * @throws \Exception
     */
    public function updateClient(ClientAPI $clientAPI, $token)
    {
        try{
            $uri = self::METHOD_CLIENT_UPDATE;
            $data = $clientAPI;
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_PUT, $uri, $data, $token);

            if($responseAPI != null && $responseAPI->haveError == false){

                if(count($responseAPI->data) == 1){
                    $client = $responseAPI->data;
                    $clientAPI = DataTransformerAPI::transformClientDataToObject($client);
                }

                return $clientAPI;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError ? $responseAPI->messageError : 'Response is empty.');
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param ClientAPI $clientAPI
     * @param $token
     *
     * @return ClientAPI
     * @throws \Exception
     */
    public function deleteClient(ClientAPI $clientAPI, $token)
    {
        try{
            $uri = self::METHOD_CLIENT_DELETE;
            $data = $clientAPI;
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_DELETE, $uri, $data, $token);

            if($responseAPI != null && $responseAPI->haveError == false){
                $client = $responseAPI->client;

                DataTransformerAPI::transformClientDataToObject($client);

                return $clientAPI;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError ? $responseAPI->messageError : 'Response is empty.');
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param $addressId
     * @param $token
     *
     * @return bool
     * @throws \Exception
     */
    public function deleteClientAddress($addressId, $token)
    {
        try{
            $uri = self::METHOD_CLIENT_ADDRESS_DELETE;
            $data = array(
                'idAddress' => $addressId
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_DELETE, $uri, $data, $token);

            if($responseAPI->codeResult == 0){
                return true;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
}