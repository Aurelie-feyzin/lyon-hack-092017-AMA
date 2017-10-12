<?php
/**
 * Created by PhpStorm.
 * User: andy
 * Date: 13/10/17
 * Time: 00:08
 */
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
                <label for="exampleInputEmail1">Github User</label>
                <input type="text" name="inputUser" class="form-control" id=""
                       placeholder="User">
            </div>

            <div class="checkbox">
                <label>
                    <input type="checkbox" name="inputCheck" id="" value="" checked> Afficher Avatar
                </label>
            </div><div class="checkbox">
                <label>
                    <input type="checkbox" name="inputCheck" id="" id="" value="" checked> Afficher 3 premiers repos avec leur dates
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="inputCheck" id="" value=""> Afficher nombre de followers
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="inputCheck" id=""> Afficher nombre de repos
                </label>
            </div>
            <button type="submit" class="btn btn-primary"><i class="icon icon-check icon-lg"></i> Afficher code a intégrer</button>

            <div class="form-group">
                <label for="comment">Code</label>
                <textarea class="form-control" rows="5" id=""></textarea>
            </div>
        </form>
        </div>


    </row>
</container-fluid>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
