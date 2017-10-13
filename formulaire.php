<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 13/10/17
 * Time: 00:08
 */
require_once 'CurlConnect.php';
include "config/token.php";

if (isset($_POST)) {
    $connect = new \Wcs\CurlConnect();
    if (isset($_POST['user']) and !empty($_POST['user'])) {
        $user = $_POST['user'];
        $result = $connect->getConnect('m4rthiz', $token);
        print_r($result);

    }
    if (isset($_POST['avatar']) and !empty($_POST['avatar'])) {
        $avatar = true;

    }

    if (isset($_POST['threeRepo']) and !empty($_POST['threeRepo'])) {
        $threeRepo = true;
    }

    if (isset($_POST['nbFollowers']) and !empty($_POST['nbFollowers'])) {
        $nbFollowers = true;

    }

    if (isset($_POST['nbRepos']) and !empty($_POST['nbRepos'])) {
        $nbRepo = true;
    }


}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<container-fluid>
    <row>
        <div class="col-xs-4 col-sm-4">
            <form role="form" name="form" action="" method="post">
                <div class="form-group ">
                    <label for="user">Github User</label>
                    <input type="text" name="user" class="form-control" id="user"
                           placeholder="User" required>
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="avatar" id="avatar" value="avatar" checked> Afficher Avatar
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="threeRepo" id="threeRepo" value="threeRepo" checked> Afficher 3
                        premiers repos avec leur dates
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="nbFollowers" id="nbFollowers" value="nbFollowers"> Afficher nombre
                        de followers
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="nbRepos" id="nbRepos" value="nbRepos"> Afficher nombre de repos
                    </label>
                </div>
                <button type="submit" class="btn btn-primary"><i class="icon icon-check icon-lg"></i> Afficher code a
                    intégrer
                </button>

            </form>
            <div class="form-group">
                <label for="comment">Code</label>
                <textarea class="form-control" rows="5" id="comment">

                    <link rel="stylesheet" media="screen"
                          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

                    <div class="container bg-info col-xs-2" style="padding: 5px;border-radius: 5px">
                      <div class="media ">
                       <div class="media-left">
                    <a href="#">
                    <img class="media-object" style="width: 70px"
                         src="<?php echo $avatar ?>" alt="avatar">
                 </a>
                  </div>
                  <div class="media-body">
                <a href="<?php echo $link ?>" class="media-heading "><?php echo $link ?></a>
                <p>repositories <span class="badge">42</span></p>
                <p>followers <span class="badge">42</span></p>
                      </div>
                 <p class="btn btn-default btn-xs btn-block" href="#" role="button">mon repo 1</p>
                    <p class="btn btn-default btn-xs btn-block" href="#" role="button">mon repo 2</p>
                    <p class="btn btn-default btn-xs btn-block" href="#" role="button">mon repo 3</p>
                 </div>
             </div>
                </textarea>
            </div>
        </div>

    </row>
</container-fluid>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
