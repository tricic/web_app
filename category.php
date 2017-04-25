<?php
    include_once('includes/class.session.php');
    require_once('includes/class.article.php');
    include_once('includes/class.alert.php');

    Session::check();

    $result = Article::getArticlesByCategoryId($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php if($result) echo $result[0]['category_name']; else echo "Invalid category..." ?></title>
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
            include('includes/page.header.php');
        ?>
        <div class="container">
            <?php
                if($result) {
                    foreach($result as $article) {
                        Article::outputRow($article);
                    }
                } else {
                    Alert::warning("No articles found!");
                }
            ?>
        </div>
    </body>
</html>