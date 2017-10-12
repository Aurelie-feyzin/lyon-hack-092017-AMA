<?php
/**
 * Created by PhpStorm.
 * User: aurelie
 * Date: 12/10/17
 * Time: 22:50
 */

namespace Wcs;

class CurlConnect
{
    //private $user;

    public function getConnect($user)
    {
        $this->user = $user;
// initialisation de la session
        $connect = curl_init();

// configuration des options
        curl_setopt($connect, CURLOPT_URL, "https://api.github.com/users" . $user . "/repos");
        curl_setopt($connect, CURLOPT_HEADER, 0);
        curl_setopt($connect, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($connect, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($connect, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0');

        $this_header = array(
            "Authorization: token 2a3905a1a2a8f032ae54f9d82a04b679b7cc00fa",
        );

        curl_setopt($connect, CURLOPT_HTTPHEADER, $this_header);

// exécution de la session
        $json = curl_exec($connect);

// fermeture des ressources
         curl_close($connect);

        $result = json_decode($json, true);

        return $result;

    }
}


?>
