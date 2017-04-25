<?php
    include_once('includes/classes/session.class.php');
    require_once('includes/classes/article.class.php');
    include_once('includes/classes/alert.class.php');

    Session::check();

    $article_id = $_GET['id'];
    $article = Article::getArticleById($article_id);
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php if($article) echo $article['title']; else echo "Article not found..."; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/ajax.comments.js"></script>
        <style>
            body {
                background-color: gray;
                padding-top: 70px;
            }
            #article-info {
                text-align: center;
            }
            #remove-comment {
                float: right;
                color: red;
                cursor: pointer;
                cursor: hand;
            }
        </style>
    </head>
    <body onload="ajax_comments(<?php if(isset($article_id)) echo $article_id ?>);">
        <?php
            include('includes/header.php');
        ?>
        <div class="container">
            <!-- Article -->
            <?php
                if($article) {
            ?>
                <article id="article" class="well">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3><?= $article['title'] ?></h3>
                            <p><?= $article['content'] ?></p>
                        </div>
                    </div>
                </article>

                <!-- Article info bar -->
                <div id="article-info" class="well well-sm">
                    <div class="row">
                        <div class="col-xs-4">
                            <small>Posted by: <a href="profile.php?username=<?= $article['username'] ?>"><?= $article['username'] ?></a></small>
                        </div>
                        <div class="col-xs-4">
                            <small>Posted on: <?= $article['article_date'] ?></small>
                        </div>
                        <div class="col-xs-4">
                            <small>Category: <a href="category.php?id=<?= $article['category_id'] ?>"><?= $article['name'] ?></a></small>
                        </div>
                    </div>
                </div>

                <!-- Comments -->
                <div id="comments" class="well">
                    <!-- Add comment -->
                    <?php if(Session::check()) { ?>
                        <div class="row" id="add-comment">
                            <div class="col-xs-12">
                                <form method="POST">
                                    <div class="form-group">
                                        <label>Add comment:</label>
                                        <textarea class="form-control" rows="3" name="comment" maxlength="500"></textarea>
                                        <br>
                                        <button type="button" class="btn btn-primary" style="width: 30%;" onclick="ajax_add_comment(document.getElementsByTagName('textarea')[0].value, <?= $article['article_id'] ?>); ajax_comments(<?= $article['article_id'] ?>); document.getElementsByTagName('textarea')[0].value = ''"><strong>Submit</strong></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    <?php
                        } else {
                            Alert::info("You must login or register to add a comment!");
                        }
                    ?>

                    <!-- Comments list -->
                    <div id="comments-list">
                        <!-- ajax_comments fills this div with comments -->
                        <div style="text-align: center;">
                            <img src="http://www.mytreedb.com/uploads/mytreedb/loader/ajax_loader_gray_128.gif" alt="loader">
                        </div>
                    </div>
                </div> <!-- /#comments -->

            <!-- Closing curly bracket of if(isset($article)) -->
            <?php
                } else {
                    Alert::danger("Article not found!");
                }
            ?>
        </div> <!-- /.container -->
    </body>
</html>