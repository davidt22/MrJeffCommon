<?php

namespace MrJeff\CommonBundle\Services;

use MrJeff\CommonBundle\Model\AddressAPI;
use MrJeff\CommonBundle\Model\UserAPI;
use Symfony\Component\HttpFoundation\Request;

class UserOperationsAPI
{
    const METHOD_USER_FIND = 'mrjeff/user/find';
    const METHOD_USER_ADD = 'mrjeff/user/add';
    const METHOD_USER_UPDATE = 'mrjeff/user/update';
    const METHOD_USER_DELETE = 'mrjeff/user/delete';
    const METHOD_USER_ADDRESS_DELETE = 'mrjeff/location/delete';

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
    public function findUsers($filterFields = array('key' => 'value'))
    {
        try{
            $uri = self::METHOD_USER_ADD;
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_GET, $uri, $filterFields);

            if($responseAPI->haveError == false){
                $users = array();

                if($responseAPI->isEmpty == false){

                    foreach ($responseAPI->clients as $client){
                        $userAPI = new UserAPI();
                        $userAPI->setIdClient($client->idClient);
                        $userAPI->setName($client->name);
                        $userAPI->setLastname($client->lastname);
                        $userAPI->setEmail($client->email);
                        $userAPI->setDeleted($client->deleted);

                        foreach($client->addresses as $address){
                            $addressAPI = new AddressAPI();
                            $addressAPI->setIdAddress($address->idAddress);
                            $addressAPI->setName($address->name);
                            $addressAPI->setPostalCode($address->postalCode);
                            $addressAPI->setPhone($address->phone);
                            $addressAPI->setZone($address->zone);
                            $addressAPI->setCity($address->city);
                            $addressAPI->setState($address->state);
                            $addressAPI->setCountry($address->country);
                            $addressAPI->setIsTimeTableOffice($address->isTimeTableOffice);

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
     * @param array $users //Deberia ser un array de objetos UserAPI ¿?
     *
     * @return bool
     * @throws \Exception
     */
    public function addUsers($users = array('key' => 'value'))
    {
        try{
            $uri = self::METHOD_USER_ADD;
            $data = array(
                'client' => $users
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $uri, $data);

            if($responseAPI->haveError == false){
                $users = array();

                if($responseAPI->isEmpty == false){

                    foreach ($responseAPI->clients as $client){
                        $userAPI = new UserAPI();
                        $userAPI->setIdClient($client->idClient);
                        $userAPI->setName($client->name);
                        $userAPI->setLastname($client->lastname);
                        $userAPI->setEmail($client->email);
                        $userAPI->setDeleted($client->deleted);

                        foreach($client->addresses as $address){
                            $addressAPI = new AddressAPI();
                            $addressAPI->setIdAddress($address->idAddress);
                            $addressAPI->setName($address->name);
                            $addressAPI->setPostalCode($address->postalCode);
                            $addressAPI->setPhone($address->phone);
                            $addressAPI->setZone($address->zone);
                            $addressAPI->setCity($address->city);
                            $addressAPI->setState($address->state);
                            $addressAPI->setCountry($address->country);
                            $addressAPI->setIsTimeTableOffice($address->isTimeTableOffice);

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
    public function updateUser($users = array('key' => 'value'))
    {
        try{
            $uri = self::METHOD_USER_UPDATE;
            $data = array(
                'client' => $users
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_PUT, $uri, $data);

            if($responseAPI->haveError == false){
                $users = array();

                if($responseAPI->isEmpty == false){

                    foreach ($responseAPI->clients as $client){
                        $userAPI = new UserAPI();
                        $userAPI->setIdClient($client->idClient);
                        $userAPI->setName($client->name);
                        $userAPI->setLastname($client->lastname);
                        $userAPI->setEmail($client->email);
                        $userAPI->setDeleted($client->deleted);

                        foreach($client->addresses as $address){
                            $addressAPI = new AddressAPI();
                            $addressAPI->setIdAddress($address->idAddress);
                            $addressAPI->setName($address->name);
                            $addressAPI->setPostalCode($address->postalCode);
                            $addressAPI->setPhone($address->phone);
                            $addressAPI->setZone($address->zone);
                            $addressAPI->setCity($address->city);
                            $addressAPI->setState($address->state);
                            $addressAPI->setCountry($address->country);
                            $addressAPI->setIsTimeTableOffice($address->isTimeTableOffice);

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
    public function deleteUser($userId)
    {
        try{
            $uri = self::METHOD_USER_DELETE;
            $data = array(
                'idClient' => $userId
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_DELETE, $uri, $data);

            if($responseAPI->haveError == false){
                $client = $responseAPI->client;

                $userAPI = new UserAPI();
                $userAPI->setIdClient($client->idClient);
                $userAPI->setName($client->name);
                $userAPI->setLastname($client->lastname);
                $userAPI->setEmail($client->email);
                $userAPI->setDeleted($client->deleted);

                foreach($client->addresses as $address){
                    $addressAPI = new AddressAPI();
                    $addressAPI->setIdAddress($address->idAddress);
                    $addressAPI->setName($address->name);
                    $addressAPI->setPostalCode($address->postalCode);
                    $addressAPI->setPhone($address->phone);
                    $addressAPI->setZone($address->zone);
                    $addressAPI->setCity($address->city);
                    $addressAPI->setState($address->state);
                    $addressAPI->setCountry($address->country);
                    $addressAPI->setIsTimeTableOffice($address->isTimeTableOffice);

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
    public function deleteUserAddress($addressId)
    {
        try{
            $uri = self::METHOD_USER_ADDRESS_DELETE;
            $data = array(
                'idAddress' => $addressId
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_DELETE, $uri, $data);

            if($responseAPI->haveError == false){
                return true;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
}