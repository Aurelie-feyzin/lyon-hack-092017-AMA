<link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<div class="container bg-info col-xs-2" style="padding: 5px;border-radius: 5px">
    <div class="media ">
        <div class="media-left">
            <a href="#"><img class="media-object" style="width: 70px" src="<?php echo $avatar ?>" alt="avatar">
            </a>
        </div>
        <div class="media-body">
            <a href="<?php echo $link ?>" class="media-heading "><?php echo $user ?></a>
            <?php echo !empty($_POST['nbRepos']) ? '<p>Repos <span class="badge">' . $nbRepo . '</span></p>' : '' ?>
            <?php echo !empty($_POST['nbFollowers']) ? '<p>Followers <span class="badge">' . $nbFollowers . '</span></p>' : '' ?>
        </div>
        <?php foreach ($threeRepos as $repo): ?>
            <a class="btn btn-default btn-xs btn-block" href="<?php echo $repo['url'] ?>" role="button" target="_blank"><?php echo $repo['name'] ?></a>
        <?php endforeach; ?>
    </div>
</div>
