<?php
    include('includes/class.session.php');
    Session::check();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body {
                background-color: gray;
                padding-top: 55px;
            }
            #profile {
                margin-top: 15px;
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
            include('includes/page.header.php');
        ?>
        <div class="container">
            <div id="profile"class="row">
                <div class="col-xs-8 col-xs-offset-2 col-md-6 col-md-offset-3 well">
                    <?php
                        include('includes/process.profile.php');
                        if(isset($user)) {
                    ?>  
                        <img src="images/<?php echo $user->gender ?>_avatar.png" class="img-circle">
                        <div id="profile-info">
                            <p><strong>ID:</strong> <?php echo $user->user_id ?></p>
                            <p><strong>Username:</strong> <?php echo $user->username ?></p>
                            <p><strong>Rank:</strong> <?php echo $user->rank ?></p>
                            <p><strong>Joined:</strong> <?php echo $user->reg_date ?></p>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>