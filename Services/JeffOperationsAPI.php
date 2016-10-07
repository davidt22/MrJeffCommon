<?php

namespace MrJeff\CommonBundle\Services;

use Symfony\Component\HttpFoundation\Request;

class JeffOperationsAPI
{
    const METHOD_RATING = 'mrjeff/jeffoperation/jeffRating';

    /** @var RequestManagerAPI $requestManagerAPI */
    private $requestManagerAPI;

    /**
     * JeffOperationsAPI constructor.
     *
     * @param RequestManagerAPI $requestManagerAPI
     */
    public function __construct(RequestManagerAPI $requestManagerAPI)
    {
        $this->requestManagerAPI = $requestManagerAPI;
    }

    /**
     * @param integer $jeffId
     *
     * @return mixed
     * @throws \Exception
     */
    public function getReviewsJeff($jeffId)
    {
        try{
            $methodUrl = self::METHOD_RATING;
            $data = array(
                'id-jeff' => $jeffId
            );
            $responseAPI = $this->requestManagerAPI->sendRequest(Request::METHOD_GET, $methodUrl, $data);

            if($responseAPI->haveError == false){

                $reviews = array();
                if($responseAPI->isEmpty == false){

                    foreach($responseAPI->reviews as $review){
                        $reviewAPI = DataTransformerAPI::transformReviewDataToObject($review);
                        //These are not mandatory, and they are null when user is created
                        $reviewAPI->setJeffId($responseAPI->jeffId);
                        $reviewAPI->setJeffRating($responseAPI->jeffRating);

                        array_push($reviews, $reviewAPI);
                    }
                }

                return $reviews;
            }else{
                throw new \Exception('Error: ' . $responseAPI->messageError);
            }
        }catch(\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }


}