<?php

namespace MrJeff\CommandBundle\Controller;

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
            $authorizationAPIService = $this->get('mrjeff.authorization_api');
            $user = $authorizationAPIService->authenticateUser('david@mrjeffapp.com', 'david.mrjeff');

            var_dump($user);

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
            $authorizationAPIService = $this->get('mrjeff.authorization_api');
            $user = $authorizationAPIService->authenticateUser('david@mrjeffapp.com', 'david.mrjeff');

            $userOperationsAPI = $this->get('mrjeff.client_operations_api');
            $user = $userOperationsAPI->findClients(array('email' => 'narte7@hotmail.com'), $user->getToken());

            var_dump($user);

        }catch(\Exception $e) {
            echo $e->getMessage();
        }
    }
}
