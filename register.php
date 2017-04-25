<?php
    include_once('includes/classes/session.class.php');
    include_once('includes/classes/alert.class.php');
    
    if(Session::check()) {
        header("Location: index.php");
    }
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
                padding-top: 50px;
            }
            form {
                margin-top: 15px;
            }
        </style>
    </head>
    <body>
        <?php
            include('includes/header.php');
        ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form method="POST" class ="well">
                        <?php
                            require('includes/processes/register.process.php');
                        ?>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" name="username" value="<?php if(isset($username)) echo $username ?>" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" value="<?php if(isset($email)) echo $email ?>"  placeholder="E-mail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <select name="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div> 
                        <input type="submit" name="register" value="Register" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>