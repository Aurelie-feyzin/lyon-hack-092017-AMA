<?php

require_once 'CurlConnect.php';

$connect = new \Wcs\CurlConnect();

print_r($connect->getConnect('Aurelie-feyzin'));

//print_r($connect);