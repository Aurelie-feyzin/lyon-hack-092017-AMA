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
    /** @var qui ne servent a rien ...  */
    //private $user;
   // private $results;
   // private $token;

    /**
     * @param string $user
     * @param string $token
     * @return mixed
     */
    public function getConnect($user, $token)
    {
        $connect = curl_init();
        curl_setopt($connect, CURLOPT_URL, "https://api.github.com/users/" . $user . "/repos?sort=udated_at");
        curl_setopt($connect, CURLOPT_HEADER, 0);
        curl_setopt($connect, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($connect, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($connect, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0');
        $this_header = array("Authorization: token $token",);
        curl_setopt($connect, CURLOPT_HTTPHEADER, $this_header);
        $json = curl_exec($connect);
        curl_close($connect);
        $results = json_decode($json, true);
        return $results;
    }

    /**
     * @param array $results
     * @return mixed
     */
    public function getAvatar($results)
    {
        $avatar = $results[0]['owner']['avatar_url'];
        return $avatar;
    }

    /**
     * @param array $results
     * @return array
     */
    public function getThreeRepo($results)
    {
        $threeRepos = [];
        if (count($results) >= 3) {
            $nbBoucle = 3;
        } else {
            $nbBoucle = count($results);
        }
        for ($i = 0; $i < $nbBoucle; $i++) {
            $threeRepos[$i]['name'] = $results[$i]['name'];
        }
        return $threeRepos;
    }

    /**
     * @param array $results
     * @return int
     */
    public function getNbRepos($results)
    {
        $nbRepos = count($results);
        return $nbRepos;
    }

    /**
     * @param array $results
     * @return int
     */
    public function getNbFollowers($results)
    {
        $nbFollowers = count($results[0]['owner']['followers_url']);
        return $nbFollowers;
    }

    /**
     * @param string $user
     * @return string
     */
    public function getLink($user)
    {
        $link = "https://github.com/$user";
        return $link;
    }
}