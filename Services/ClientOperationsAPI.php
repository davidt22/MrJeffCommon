<?php

namespace MrJeff\CommonBundle\Services;

use MrJeff\CommonBundle\Model\ClientAPI;
use Symfony\Component\HttpFoundation\Request;

class ClientOperationsAPI
{
    const METHOD_CLIENT_FIND = 'mrjeff/user/find';
    const METHOD_CLIENT_ADD = 'mrjeff/user/add';
    const METHOD_CLIENT_UPDATE = 'mrjeff/user/update';
    const METHOD_CLIENT_DELETE = 'mrjeff/user/delete';
    const METHOD_CLIENT_ADDRESS_DELETE = 'mrjeff/location/delete';

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
    public function findClients($filterFields = array('key' => 'value'), $token = '')
    {
        try{
            $uri = self::METHOD_CLIENT_FIND;
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_GET, $uri, $filterFields, $token);

            if($responseAPI->codeResult == 0){
                $users = array();

                if($responseAPI->isEmpty == false){

                    foreach ($responseAPI->data as $client){
                        $userAPI = new ClientAPI();
                        $userAPI->setId($client->id);
                        $userAPI->setName($client->name);
                        $userAPI->setLastname($client->lastname);
                        $userAPI->setEmail($client->email);
                        $userAPI->setDeleted($client->deleted);
                        $userAPI->setIdWoocommerce($client->idWoocommerce);
                        $userAPI->setIdOpenBravo($client->idOpenBravo);
                        $userAPI->setCreationDate($client->creationDate);
                        $userAPI->setUpdateDate($client->updateDate);
                        $userAPI->setPassword($client->password);

                        foreach($client->addresses as $address){
                            $addressAPI = DataTransformerAPI::transformAddressDataToObject($address);

                            $userAPI->addAddress($addressAPI);
                        }

                        array_push($users, $userAPI);
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
     * @param array $users //Deberia ser un array de objetos ClientAPI ¿?
     *
     * @return bool
     * @throws \Exception
     */
    public function addClients($users = array('key' => 'value'))
    {
        try{
            $uri = self::METHOD_CLIENT_ADD;
            $data = array(
                'client' => $users
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $uri, $data);

            if($responseAPI->codeResult == 0){
                $users = array();

                if($responseAPI->isEmpty == false){

                    foreach ($responseAPI->data as $client){
                        $userAPI = new ClientAPI();
                        $userAPI->setId($client->id);
                        $userAPI->setName($client->name);
                        $userAPI->setLastname($client->lastname);
                        $userAPI->setEmail($client->email);
                        $userAPI->setDeleted($client->deleted);
                        $userAPI->setIdWoocommerce($client->idWoocommerce);
                        $userAPI->setIdOpenBravo($client->idOpenBravo);
                        $userAPI->setCreationDate($client->creationDate);
                        $userAPI->setUpdateDate($client->updateDate);
                        $userAPI->setPassword($client->password);

                        foreach($client->addresses as $address){
                            $addressAPI = DataTransformerAPI::transformAddressDataToObject($address);

                            $userAPI->addAddress($addressAPI);
                        }

                        array_push($users, $userAPI);
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
     * @param array $users
     *
     * @return array
     * @throws \Exception
     */
    public function updateClient($users = array('key' => 'value'))
    {
        try{
            $uri = self::METHOD_CLIENT_UPDATE;
            $data = array(
                'client' => $users
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_PUT, $uri, $data);

            if($responseAPI->codeResult == 0){
                $users = array();

                if($responseAPI->isEmpty == false){

                    foreach ($responseAPI->data as $client){
                        $userAPI = new ClientAPI();
                        $userAPI->setId($client->id);
                        $userAPI->setName($client->name);
                        $userAPI->setLastname($client->lastname);
                        $userAPI->setEmail($client->email);
                        $userAPI->setDeleted($client->deleted);
                        $userAPI->setIdWoocommerce($client->idWoocommerce);
                        $userAPI->setIdOpenBravo($client->idOpenBravo);
                        $userAPI->setCreationDate($client->creationDate);
                        $userAPI->setUpdateDate($client->updateDate);
                        $userAPI->setPassword($client->password);

                        foreach($client->addresses as $address){
                            $addressAPI = DataTransformerAPI::transformAddressDataToObject($address);

                            $userAPI->addAddress($addressAPI);
                        }

                        array_push($users, $userAPI);
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
     * @param int $userId
     *
     * @return array
     * @throws \Exception
     */
    public function deleteClient($userId)
    {
        try{
            $uri = self::METHOD_CLIENT_DELETE;
            $data = array(
                'id' => $userId
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_DELETE, $uri, $data);

            if($responseAPI->codeResult == 0){
                $client = $responseAPI->client;

                $userAPI = new ClientAPI();
                $userAPI->setId($client->id);
                $userAPI->setName($client->name);
                $userAPI->setLastname($client->lastname);
                $userAPI->setEmail($client->email);
                $userAPI->setDeleted($client->deleted);
                $userAPI->setIdWoocommerce($client->idWoocommerce);
                $userAPI->setIdOpenBravo($client->idOpenBravo);
                $userAPI->setCreationDate($client->creationDate);
                $userAPI->setUpdateDate($client->updateDate);
                $userAPI->setPassword($client->password);

                foreach($client->addresses as $address){
                    $addressAPI = DataTransformerAPI::transformAddressDataToObject($address);

                    $userAPI->addAddress($addressAPI);
                }

                return $userAPI;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * @param $addressId
     *
     * @return bool
     * @throws \Exception
     */
    public function deleteClientAddress($addressId)
    {
        try{
            $uri = self::METHOD_CLIENT_ADDRESS_DELETE;
            $data = array(
                'idAddress' => $addressId
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_DELETE, $uri, $data);

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