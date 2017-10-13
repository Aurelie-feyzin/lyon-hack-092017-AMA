<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Snippet : Generator code</title>
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<!-------------FORMULAIRE------------------>
        <div class="col-xs-6 col-sm-6">
            <form role="form" name="form" action="view.php" method="post">
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

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
