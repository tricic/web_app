<?php
    include('includes/session.start.php');
    require('includes/process.article.get.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php if(isset($article)) echo $article->title; else echo "Article not found!"; ?></title>
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
            include('includes/page.header.php');
        ?>
        <div class="container">
            <!-- Article -->
            <?php
                if(isset($article)) {
            ?>
            <article id="article" class="well">
                <div class="row">
                    <div class="col-xs-12">
                        <h3><?php echo $article->title ?></h3>
                        <p><?php echo $article->content ?></p>
                    </div>
                </div>
            </article>

            <!-- Article info bar -->
            <div id="article-info" class="well well-sm">
                <div class="row">
                    <div class="col-xs-4">
                        <small>Posted by: <a href="profile.php?username=<?php echo $article->username ?>"><?php echo $article->username ?></a></small>
                    </div>
                    <div class="col-xs-4">
                        <small>Posted on: <?php echo $article->article_date ?></small>
                    </div>
                    <div class="col-xs-4">
                        <small>Category: <?php echo $article->name ?></small>
                    </div>
                </div>
            </div>

            <!-- Comments -->
            <div id="comments" class="well">
                <!-- Add comment -->
                <?php if($logged) { ?>
                    <div class="row" id="add-comment">
                        <div class="col-xs-12">
                            <form method="POST">
                                <div class="form-group">
                                    <label>Add comment:</label>
                                    <textarea class="form-control" rows="3" name="comment" maxlength="500"></textarea>
                                    <br>
                                    <button type="button" class="btn btn-primary" style="width: 30%;" onclick="ajax_add_comment(document.getElementsByTagName('textarea')[0].value, <?php echo $article->article_id ?>); ajax_comments(<?php echo $article->article_id ?>); document.getElementsByTagName('textarea')[0].value = ''"><strong>Submit</strong></button>
                                    <?php
                                        // include('includes/process.comments.add.php');
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php
                    } else {
                        include_once('includes/function.alerts.php');
                        info_alert("You must login or register to add a comment!");
                    }
                ?>

                <!-- Comments list -->
                <div id="comments-list">
                    <!-- ajax_comments fills this div with comments -->
                    <div style="text-align: center;">
                        <img src="http://www.mytreedb.com/uploads/mytreedb/loader/ajax_loader_gray_128.gif" alt="loader">
                    </div>
                </div>
            </div>

            <!-- Closing curly bracket of if(isset($article)) -->
            <?php
                }
            ?>
        </div>
    </body>
</html>