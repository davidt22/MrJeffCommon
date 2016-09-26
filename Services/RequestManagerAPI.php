<?php


namespace MrJeff\CommonBundle\Services;


use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class RequestManagerAPI
{
    const APPLICATION_JSON = 'application/json';

    /** @var string $baseUrl */
    private $baseUrl;

    /**
     * RequestManagerAPI constructor.
     *
     * @param string $apiUrl
     */
    public function __construct($apiUrl = '')
    {
        $this->baseUrl = $apiUrl;
    }

    /**
     * @param string $methodType
     * @param string $methodUrl
     * @param array $bodyData
     * @param string $token
     *
     * @return mixed|string
     * @throws \Exception
     */
    public function sendRequest($methodType = Request::METHOD_GET, $methodUrl = '', $bodyData = array('key' => 'value'), $token = '')
    {
        try {
            $config = array(
                'headers' => array(
                    'Content-Type' => self::APPLICATION_JSON
                )
            );

            //Add users token authorization for use other services distinct authentication
            if($token != ''){
                $config['headers']['Authorization'] = 'Bearer '.$token;
            }

            $client = new Client($config);

            $uri = $this->baseUrl . '/' . $methodUrl;
            $options = array(
                'body' => json_encode(
                    $bodyData
                )
            );

            switch ($methodType) {
                case Request::METHOD_GET:
                    $response = $client->get($uri, $options);
                    break;

                case Request::METHOD_POST:
                    $response = $client->post($uri, $options);
                    break;

                case Request::METHOD_PUT:
                    $response = $client->put($uri, $options);
                    break;

                case Request::METHOD_DELETE:
                    $response = $client->delete($uri, $options);
                    break;

                default:
                    $response = null;
                    break;
            }

            if ($response != null) {
                $statusCode = $response->getStatusCode();

                if ($statusCode == Response::HTTP_OK) {
                    $content = $response->getBody()->getContents();
                    $content = json_decode($content);

                    //De momento lo comento hasta que se unifiquen todas las Responses del API, las trataremos dentro de cada servicio
                    //                $hasNotErrors = $content->error == false || $content->codeError == 0;
                    //                if($hasNotErrors){
                    return $content;
                    //                }else{
                    //                    return false;
                    //                }
                }

                throw new \Exception('Error: API returns an error code.');
            }

            throw new \Exception('Error: Not allowed method for API.');
        }catch(\Exception $e){
            throw new \Exception('Error: ' . $e->getMessage());
        }
    }
}