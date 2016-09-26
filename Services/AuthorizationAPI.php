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
     * @param string $email
     * @param string $password
     *
     * @return bool|UserAPI
     * @throws \Exception
     */
    public function authenticateUser($email = '', $password = '')
    {
        try{
            $methodUrl = self::METHOD_AUTHENTICATION;
            $data = array(
                'email' => $email,
                'password' => $password
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_POST, $methodUrl, $data);

            if($responseAPI->error == false){
                $userAPI = new UserAPI();
                $userAPI->setEmail($responseAPI->user->email);
                $userAPI->setPassword($password);
                $userAPI->setToken($responseAPI->token);

                return $userAPI;
            }

            //Other cases, returns false
            return false;

        }catch(\Exception $e){
            throw new \Exception('Error authenticating user. ' . $e->getMessage());
        }
    }

}