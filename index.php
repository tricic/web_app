<?php
    include_once('includes/class.session.php');
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
        <script src="js/ajax.articles.js"></script>
        <script src="js/functions.js"></script>
        <style>
            body {
                background-color: gray;
                padding-top: 70px;
            }
            a h4 {
                color: black;
            }
            main {
                padding-left: 0px;
                padding-right: 0px;
            }
            main a:hover {
                text-decoration: none;
            }
            div.container {
                padding-left: 0px;
                padding-right: 0px;
            }
        </style>
    </head>
    <body onload="load_articles()">
        <?php
            include('includes/page.header.php');
        ?>
        <div class="container well">
            <main class="col-sm-9">
                <!-- Last news -->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">News</h3>
                    </div>
                </div>
                <div id="last-news">
                </div>

                <!-- Last sport -->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sport</h3>
                    </div>
                </div>
                <div id="last-sport">
                </div>

                <!-- Last politics -->
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Politics</h3>
                    </div>
                </div>
                <div id="last-politics">
                </div>

                <!-- Last tech -->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">IT &amp Technology</h3>
                    </div>
                </div>
                <div id="last-tech">
                </div>
            </main>
            <aside class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Last articles</h3>
                    </div>
                </div>
            </aside>
        </div>
    </body>
</html>