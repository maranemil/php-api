<?php

function get_hmac($string, $secret){
    return hash_hmac('sha256', $string, $secret);
}
