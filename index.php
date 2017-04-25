<?php
    include_once('includes/class.session.php');
    require_once('includes/class.article.php');
    include_once('includes/class.alert.php');

    Session::check();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>web_app</title>
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
            a h4 {
                color: black;
            }
            main a:hover {
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php
            include('includes/page.header.php');
        ?>
        <div class="container well">
            <main>
                <!-- Last news -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">News</h3>
                    </div>
                </div>
                <div id="last-news">
                    <div class="row">
                    <?php
                        $result = Article::getArticlesByCategoryId(1, 4);
                        foreach($result as $article) {
                            Article::outputThumbnail($article);
                        }
                    ?>
                    </div>
                </div>

                <!-- Last sport -->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sport</h3>
                    </div>
                </div>
                <div id="last-sport">
                    <div class="row">
                    <?php
                        $result = Article::getArticlesByCategoryId(2, 4);
                        foreach($result as $article) {
                            Article::outputThumbnail($article);
                        }
                    ?>
                    </div>
                </div>

                <!-- Last politics -->
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Politics</h3>
                    </div>
                </div>
                <div id="last-politics">
                    <div class="row">
                    <?php
                        $result = Article::getArticlesByCategoryId(3, 4);
                        foreach($result as $article) {
                            Article::outputThumbnail($article);
                        }
                    ?>
                    </div>
                </div>

                <!-- Last tech -->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">IT &amp Technology</h3>
                    </div>
                </div>
                <div id="last-tech">
                    <div class="row">
                    <?php
                        $result = Article::getArticlesByCategoryId(4, 4);
                        foreach($result as $article) {
                            Article::outputThumbnail($article);
                        }
                    ?>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>