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
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <title>Admin Panel | Categories</title>

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
                <div class="well">
                    <?php
                        if(isset($_POST['submit'])) {
                            if(Category::add($_POST['name'])) {
                                Alert::success("Category successfully added!");
                            } else {
                                Alert::danger("Error while adding new category!");
                            }
                        }

                        if(isset($_GET['delete_id'])) {
                            if(Category::delete($_GET['delete_id'])) {
                                Alert::success("Category successfully deleted!");
                            } else {
                                Alert::danger("Error while deleting the category!");
                            }
                        }

                        $categories = Category::getCategories();

                        foreach($categories as $category) {
                            echo $category['category_id'] . ' - ' . $category['name'] . ' - <a href="categories.php?delete_id=' . $category['category_id'] . '">Delete</a>' . '<br>';
                        }
                    ?>
                    <hr>
                    <form method="POST">
                        <div class="form-group">
                            <label>Add new category:</label>
                            <input type="text" name="name" placeholder="Category name" class="form-control">
                            <br>
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block">
                        </div> 
                    </form>
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
