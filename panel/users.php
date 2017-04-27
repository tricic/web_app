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
    require_once('../includes/classes/user.class.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <title>Admin Panel | Users</title>

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- Libs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Scripts -->
    <script src="../js/ajax.users.js"></script>

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
                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="margin-bottom: 10px;">Toggle Menu</a>
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                            if(!isset($_GET['delete_id'])) {
                        ?>
                            <form method="POST" class="well" action="javascript: void(0);">
                                <div class="form-group">
                                    <label>Search users:</label>
                                    <input type="text" name="text" placeholder="Enter comment part..." class="form-control">
                                    <br>
                                    <input type="submit" value="Get results" class="btn btn-primary btn-block" onclick="ajax_search_users(text.value)">
                                </div>
                                <div id="search-result">
                                    
                                </div>
                            </form>
                        <?php
                            } else {
                                if(User::delete($_GET['delete_id'])) {
                                    Alert::success("User successfully deleted!");
                                } else {
                                    Alert::danger("Error while deleting the user!");
                                }
                            }
                        ?>
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