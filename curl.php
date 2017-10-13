<?php

require_once 'CurlConnect.php';


$connect = new \Wcs\CurlConnect();

print_r($connect->getConnect('AR6A', $token));

//print_r($connect);