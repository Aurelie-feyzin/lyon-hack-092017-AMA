<?php

require_once 'CurlConnect.php';


$connect = new \Wcs\CurlConnect();
$user = 'm4rthiz';
$result = $connect->getConnect($user,  $token);

$avatar = $connect->getAvatar($result);

$allRepo = $connect->getAllRepo($result);

$nbRepos = $connect->getNbRepos($result);

$nbFollowers = $connect->getNbFollowers($result);

$link = $connect->getLink('m4rthiz');

print_r($allRepo);
echo $nbFollowers . PHP_EOL;
echo $nbRepos . PHP_EOL;
echo $avatar . PHP_EOL;
echo $link . PHP_EOL;
