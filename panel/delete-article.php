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
    require_once('../includes/classes/article.class.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <title>Admin Panel | Delete article</title>

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- Libs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Scripts -->
    <script src="../js/ajax.articles.js"></script>

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
                            Alert::success("Article successfully updated!");
                        } else {
                            Alert::danger("Failure while updating the article!");
                        }
                    }
                ?>

                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle" style="margin-bottom: 10px;">Toggle Menu</a>
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                            if(isset($_GET['id'])) {
                                if($article = Article::getArticleById($_GET['id'])) {
                                    if(isset($_POST['confirm'])) {
                                        if(Article::delete($_GET['id'])) {
                                            Alert::success('Article successfully deleted!');
                                        } else {
                                            Alert::danger('Error while deleting the article!');
                                        }
                                    } else {
                                    ?>
                                        <form method="POST" class="well">
                                            <label>Please confirm deleting this article:</label>
                                            <ul>
                                                <li><a href="../article.php?id=<?= $article['article_id'] ?>" target="blank">Link</a></li>
                                                <li>ID:<?= $article['article_id'] ?></li>
                                                <li>Title:<?= $article['title'] ?></li>
                                            </ul>
                                            <br>
                                            <input type="submit" name="confirm" value="Yes, delete article!" class="btn btn-danger">
                                        </form>
                                    <?php
                                    }
                                } else {
                                    Alert::danger("Article not found!");
                                }
                            } else {
                        ?>
                            <form method="GET" class="well" action="delete-article.php">
                                <div class="form-group">
                                    <label>Article ID:</label>
                                    <input type="number" name="id" placeholder="Enter article ID" class="form-control" required>
                                    <br>
                                    <input type="submit" value="Submit" class="btn btn-primary btn-block">
                                </div> 
                            </form>

                            <form method="POST" class="well" action="javascript: void(0);">
                                <div class="form-group">
                                    <label>Search articles:</label>
                                    <input type="text" name="text" placeholder="Enter search text..." class="form-control" required>
                                    <br>
                                    <input type="button" value="Get results" class="btn btn-primary btn-block" onclick="ajax_search_articles(text.value)">
                                </div>
                                <div id="search-result">
                                    
                                </div>
                            </form>
                        <?php
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
