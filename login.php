<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <style>
            form {
                margin-top: 15px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form method="POST" class="well">
                        <?php
                            if(isset($_GET['notice'])) {
                                include_once('includes/function.alerts.php');
                                success_alert("You have been successfully registered and now you can login!");
                            }
                            require('includes/process.login.php');
                        ?>
                        <div class="form-group">
                            <label>Username:</label>
                            <input type="text" name="username" value="<?php if(isset($username)) echo $username ?>" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" name="password" placeholder="Password" class="form-control"> 
                        </div>
                        <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>