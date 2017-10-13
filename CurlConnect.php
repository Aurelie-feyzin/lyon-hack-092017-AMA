<?php
/**
 * Created by PhpStorm.
 * User: aurelie
 * Date: 12/10/17
 * Time: 22:50
 */

namespace Wcs;
include 'config/token.php';

class CurlConnect
{
    private $user;


    public function getConnect($user, $token)
    {

        // initialisation de la session
        $this->user = $user;
        $connect = curl_init();

        // configuration des options
        curl_setopt($connect, CURLOPT_URL, "https://api.github.com/users/" . $this->user . "/repos");
        curl_setopt($connect, CURLOPT_HEADER, 0);
        curl_setopt($connect, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($connect, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($connect, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0');

        $this_header = array(
            "Authorization: token $token" ,
        );

        curl_setopt($connect, CURLOPT_HTTPHEADER, $this_header);

// exécution de la session
        $json = curl_exec($connect);

// fermeture des ressources
        curl_close($connect);

        $results = json_decode($json, true);

        return $results;

    }


    public function getAvatar($results)
    {
        $avatar = $results[0]['owner']['avatar_url'];
        return $avatar;
    }

    public function getAllRepo($results){
        $allRepo=[];
        $num = 0;
        foreach($results as $repo) {

            $allRepo[$num]['name'] = $repo['name'];
            $allRepo[$num]['date'] = $repo['updated_at'];
            $num++;

        }
        return $allRepo;
    }

    public function getNbRepos($results) {
        $nbRepos = count($results);
        return $nbRepos;
    }

    public function getNbFollowers($results) {
        $nbFollowers = count($results[0]['owner']['followers_url']);
        return $nbFollowers;
    }

    public function getLink($user){
        $link = "https://github.com/$user";
        return $link;

    }


}