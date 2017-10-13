<?php

require_once 'CurlConnect.php';


$connect = new \Wcs\CurlConnect();

print_r($connect->getConnect('m4rthiz', $token));



//print_r($connect);

git