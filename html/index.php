<?php

include "RequestHandler.php";

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
#header('Content-type: application/json');

//$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
//$uri = explode( '/', $uri );
//echo json_encode($uri,true);
//echo $_SERVER['REQUEST_URI'];


if(!strpos($_SERVER['REQUEST_URI'],"/api/")){
//    header("HTTP/1.1 404 Not Found");
//    exit();
    echo json_encode(array("Hello" => "API"));
}


$requestMethod = $_SERVER["REQUEST_METHOD"];

// pass the request method and post ID to the Post and process the HTTP request:
$controller = new RequestHandler($requestMethod);
$controller->processRequest();
