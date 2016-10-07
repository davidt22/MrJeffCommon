<?php

namespace MrJeff\CommondBundle\Controller;

use MrJeff\CommonBundle\Controller\CoreController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends CoreController
{
    /**
     * @Route("/test-authorization", name="test_authorization")
     */
    public function testAuthorizationAction(Request $request)
    {
        try{
            $authorizationAPI = $this->get('mrjeff.authorization_api');
            $userAPI = $authorizationAPI->authenticateUser();

            var_dump($userAPI);

        }catch(\Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @Route("/test-user-find", name="test_user_find")
     */
    public function testUserFindAction(Request $request)
    {
        try{
            $authorizationAPI = $this->get('mrjeff.authorization_api');
            $user = $authorizationAPI->authenticateUser();

            $userOperationsAPI = $this->get('mrjeff.client_operations_api');
            $user = $userOperationsAPI->findClients(array('email' => 'narte7@hotmail.com'), $user->getToken());

            var_dump($user);

        }catch(\Exception $e) {
            echo $e->getMessage();
        }
    }
}
