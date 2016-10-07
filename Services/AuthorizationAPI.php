<?php

namespace MrJeff\CommonBundle\Services;

use MrJeff\CommonBundle\Model\UserAPI;
use Symfony\Component\HttpFoundation\Request;

class AuthorizationAPI
{
    const METHOD_AUTHENTICATION = 'authentication';
    const APPLICATION_JSON = 'application/json';

    /** @var RequestManagerAPI $requestManagerAPI */
    private $requestManagerAPI;

    /** @var string */
    private $email;

    /** @var string */
    private $password;

    /**
     * AuthorizationAPI constructor.
     *
     * @param RequestManagerAPI $requestManagerAPI
     * @param $email
     * @param $password
     */
    public function __construct(RequestManagerAPI $requestManagerAPI, $email, $password)
    {
        $this->requestManagerAPI = $requestManagerAPI;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return bool|UserAPI
     * @throws \Exception
     */
    public function authenticateUser()
    {
        try{
            $methodUrl = self::METHOD_AUTHENTICATION;
            $data = array(
                'email' => $this->email,
                'password' => $this->password
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $methodUrl, $data);

            if($responseAPI->error == false){
                $userAPI = DataTransformerAPI::transformUserDataToObject($responseAPI, $this->password);

                return $userAPI;
            }

            //Other cases, throw exception
            throw new \Exception('Error authenticating user.');

        }catch(\Exception $e){
            throw new \Exception('Error: ' . $e->getMessage());
        }
    }

}