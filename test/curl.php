<?php

require_once 'CurlConnect.php';

$connect = new \Wcs\CurlConnect();

$user = 'm4rthiz';
$result = $connect->getConnect($user, $token);

$avatar = $connect->getAvatar($result);

$threeRepo = $connect->getThreeRepo($result);

$nbRepos = $connect->getNbRepos($result);

$nbFollowers = $connect->getNbFollowers($result);

$link = $connect->getLink('m4rthiz');

print_r($threeRepo);
//echo $nbFollowers . PHP_EOL;
//echo $nbRepos . PHP_EOL;
//echo $avatar . PHP_EOL;
//echo $link . PHP_EOL;
