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
        <style>
            body {
                background-color: lightgray;
            }
            #article-info {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <!-- Article -->
            <div id="article" class="well">
                <div class="row">
                    <?php
                        require('includes/process.article.php');
                        if(isset($article)) {
                    ?>
                    <div class="col-xs-12">
                            <h3><?php echo $article->title ?></h3>
                            <p><?php echo $article->content ?></p>
                    </div>
                </div>
            </div>

            <!-- Article info bar -->
            <div id="article-info" class="well well-sm">
                <div class="row">
                    <div class="col-xs-4">
                        <small>Posted by: <a href="/profile.php?username=<?php echo $article->username ?>"><?php echo $article->username ?></a></small>
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
                                    <label>Comment:</label>
                                    <textarea class="form-control" rows="3" name="comment" maxlength="400"></textarea>
                                    <br>
                                    <input type="submit" name="add-comment" value="Add comment" class="btn btn-primary" style="width: 30%;">
                                    <?php
                                        include('includes/process.comments.add.php');
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php
                    }
                ?>

                <!-- Comments list -->
                <?php
                    include('includes/process.comments.php');
                ?>
            </div>

            <!-- Closing curly bracket of if(isset($article)) -->
            <?php
                }
            ?>
        </div>
    </body>
</html>