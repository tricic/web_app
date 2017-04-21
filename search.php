<?php
    include('includes/session.start.php');
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
                padding-top: 70px;
            }
            div.well {
                margin-bottom: 0px;
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
                $text = $_GET['text'];

                if(strlen($text) < 3) {
                    include_once('includes/function.alerts.php');
                    warning_alert("You must enter at least 3 characters for search criteria!");
                    exit();
                }

                require('includes/connection.admin.php');
                $result = $mysqli->query("SELECT article_id, title, article_date FROM article WHERE title LIKE '%$text%' ORDER BY article_date DESC");
                
                if(@$result->num_rows) {
                    while($article = $result->fetch_object()) {
                        echo '<div class="row">';
                        echo "<a href=\"article.php?id=$article->article_id\"><div class=\"well well-sm\"><h4>$article->title</h4> - $article->article_date</div> </a><br>";
                        echo '</div>';
                    }
                } else {
                    include_once('includes/function.alerts.php');
                    warning_alert("No articles found!");
                }
            ?>
        </div>
    </body>
</html>