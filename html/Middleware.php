<?php

class Middleware
{

    public function __construct()
    {
    }

    public function get()
    {
        if ($_SERVER['REQUEST_URI'] == "/index.php/api/heartbeat") {
            return json_encode(array("heartbeat" => "OK"));
        }
    }
}