<?php

include "Middleware.php";

class RequestHandler
{
    private $requestMethod;

    /**
     * @param mixed $requestMethod
     */
    public function __construct($requestMethod)
    {
        $this->requestMethod = $requestMethod;
    }

    public function processRequest()
    {
        switch ($this->requestMethod) {
            case 'GET':
                $response = "GET";
                $middleware = new Middleware();
                echo $middleware->get();
                break;
            case 'POST':
                $response = "POST";
                break;
            case 'PUT':
                $response = "PUT";
                break;
            case 'DELETE':
                $response = "DELETE";
                break;
            default:
                throw new \http\Exception\BadUrlException("Not a valid request");
                break;
        }
        #header($response['status_code_header']);
        #if ($response['body']) {
            #echo $response['body'];
        #}
    }


}


