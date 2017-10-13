<?php

require_once 'CurlConnect.php';

$connect = new \Wcs\CurlConnect();

$result = $connect->getConnect('m4rthiz', $token);

$avatar = $connect->getAvatar($result);

$allRepo = $connect->getAllRepo($result);

$nbRepos = $connect->getNbRepos($result);

$nbFollowers = $connect->getNbFollowers($result);

$link = $connect->getLink('m4rthiz');

echo $link . PHP_EOL;




