<?php
    require_once('../includes/classes/session.class.php');
    if(Session::check()) {
        if($_SESSION['rank_id'] === 3) {
            header("Location: ../index.php");
        }
    } else {
        header("Location: ../index.php");
    }

    require_once('../includes/classes/alert.class.php');
    require_once('../includes/classes/category.class.php');
    require('../includes/processes/article-add.process.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <title>Admin Panel | Add article</title>

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- Libs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <style>
        body {
            background-color: gray;
        }
    </style>
</head>
<body>
    <div id="wrapper" class="toggled">
        <!-- Sidebar -->
        <?php include('../includes/sidebar.html') ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <?php
                    if(isset($success)) {
                        if($success) {
                            Alert::success("New article successfully added!");
                        } else {
                            Alert::danger("Failure while inserting the article!");
                        }
                    }
                ?>

                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="margin-bottom: 10px;">Toggle Menu</a>
                <div class="row">
                    <div class="col-lg-12">
                        <form method="POST" class="well">
                            <div class="form-group">
                                <label for="category">Category:</label>
                                <select name="category_id" class="form-control">
                                    <?php Category::outputAsOptions() ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image URL:</label>
                                <input type="text" name="img_url" placeholder="URL of image" class="form-control">
                            </div> 
                            <div class="form-group">
                                <label>Title:</label>
                                <input type="text" name="title" placeholder="Title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Content:</label>
                                <textarea class="form-control" rows="20" name="content" placeholder="Enter content here..."></textarea>
                            </div>
                            <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?>">
                            
                            <input type="submit" name="submit" value="Add article" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /#page-content-wrapper -->
    </div><!-- /#wrapper -->



    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
