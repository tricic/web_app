<?php
include_once('class.session.php');
Session::check();

require($_SERVER['DOCUMENT_ROOT'] . '/web_app/includes/connection.admin.php');
if(!isset($article_id)) $article_id = $_GET['id'];

$query =    "SELECT comment.comment_id, comment.content, comment.comment_date, user.username, user.rank_id, user.gender FROM comment
            JOIN user ON comment.article_id = $article_id AND user.user_id = comment.user_id
            ORDER BY comment.comment_date DESC";
$result = $mysqli->query($query);

if($result->num_rows) {
    while($comment = $result->fetch_object()) { ?>
        <div class="media">
            <div class="media-left"><a href="profile.php?username=<?php echo $comment->username ?>">
                <img src="images/<?php echo $comment->gender ?>_avatar.png" class="media-object img-circle" style="width:60px"></a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">
                    <a href="profile.php?username=<?php echo $comment->username ?>"><?php echo $comment->username ?></a>           
                    <small><i>&nbspposted on&nbsp<?php echo $comment->comment_date ?>&nbsp</i></small>

                    <!-- Remove comment button -->
                    <?php 
                    if($_SESSION) {
                        if($_SESSION['username'] == $comment->username || $_SESSION['rank_id'] == 1 || $_SESSION['rank_id'] == 2) { 
                    ?>
                        <span id="remove-comment" class="glyphicon glyphicon-remove" aria-hidden="true" title="Delete this comment" onclick="ajax_remove_comment(<?php echo $comment->comment_id ?>, '<?php echo $_SESSION['username'] ?>'); ajax_comments(<?php echo $article_id ?>);"></span>
                    <?php
                        }
                    }
                    ?>
                </h4>
                <p><?php echo $comment->content ?></p>
            </div>
        </div>
    <?php
    }
} else {
    include_once($_SERVER['DOCUMENT_ROOT'] . '/web_app/includes/function.alerts.php');
    info_alert("No comments on this article!");
}