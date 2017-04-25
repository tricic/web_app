<?php
require_once('../classes/session.class.php');
require_once('../classes/comment.class.php');
include_once('../classes/alert.class.php');

Session::check();

$article_id = $_GET['id'];

$result = Comment::getCommentsByArticleId($article_id);

if($result) {
    foreach($result as $comment) { ?>
        <div class="media">
            <div class="media-left"><a href="profile.php?username=<?= $comment['username'] ?>">
                <img src="images/<?= $comment['gender'] ?>_avatar.png" class="media-object img-circle" style="width:60px"></a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">
                    <a href="profile.php?username=<?= $comment['username'] ?>"><?= $comment['username'] ?></a>           
                    <small><i>&nbspposted on&nbsp<?= $comment['comment_date'] ?>&nbsp</i></small>

                    <!-- Remove comment button -->
                    <?php 
                    if($_SESSION) {
                        if($_SESSION['username'] == $comment['username'] || $_SESSION['rank_id'] == 1 || $_SESSION['rank_id'] == 2) { 
                    ?>
                        <span id="remove-comment" class="glyphicon glyphicon-remove" aria-hidden="true" title="Delete this comment" onclick="ajax_remove_comment(<?= $comment['comment_id'] ?>, '<?= $_SESSION['username'] ?>'); ajax_comments(<?= $article_id ?>);"></span>
                    <?php
                        }
                    }
                    ?>
                </h4>
                <p><?= $comment['content'] ?></p>
            </div>
        </div>
    <?php
    }
} else {
    Alert::info("No comments on this article!");
}
