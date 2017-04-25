<?php
    include_once('includes/classes/session.class.php');
    require_once('includes/classes/user.class.php');
    include_once('includes/classes/alert.class.php');

    Session::check();

    $user = User::getUserByUsername($_GET['username']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php if($user) echo $user['username']; else echo "User not found..."; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body {
                background-color: gray;
                padding-top: 70px;
            }
            #profile img {
                width: 150px;
                float: left;
                margin-right: 30px;
            }
            #profile-info {
                text-align: left;
            }
        </style>
    </head>
    <body>
        <?php
            include('includes/header.php');
        ?>
        <div class="container">
            <?php
                if($user) {
            ?>  
            <div id="profile"class="row">
                <div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 well">
                        <img src="images/<?= $user['gender'] ?>_avatar.png" class="img-circle">
                        <div id="profile-info">
                            <p><strong>ID:</strong> <?= $user['user_id'] ?></p>
                            <p><strong>Username:</strong> <?= $user['username'] ?></p>
                            <p><strong>Rank:</strong> <?= $user['rank'] ?></p>
                            <p><strong>Joined:</strong> <?= $user['reg_date'] ?></p>
                        </div>
                </div>
            </div>
            <?php
                } else {
                    Alert::danger("User not found!");
                }
            ?>
        </div>
    </body>
</html>