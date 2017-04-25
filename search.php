<?php
    include_once('includes/classes/session.class.php');
    include_once('includes/classes/alert.class.php');
    require_once('includes/classes/article.class.php');

    Session::check();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Search: <?= $_GET['text'] ?></title>
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
            a {
                color: black;
            }
            a:hover {
                color: black;
                text-decoration: none;
                cursor: pointer;
                cursor: hand;
            }
        </style>
    </head>
    <body>
        <?php
            include('includes/header.php');
        ?>
        <div class="container">
            <?php
                $text = $_GET['text'];

                if(strlen($text) < 3) {
                    Alert::warning("You must enter at least 3 characters to search articles!");
                } else {
                    if($result = Article::getArticlesBySearch($text)) {
                        foreach($result as $article) {
                            Article::outputRow($article);
                        }
                    } else {
                        Alert::warning("No articles found!");
                    }
                }
            ?>
        </div>
    </body>
</html>