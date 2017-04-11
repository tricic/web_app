<?php
require_once('includes/connection.admin.php');

$query =    "SELECT comment.content, comment.comment_date, user.username FROM comment
            JOIN user ON comment.article_id = $id AND user.user_id = comment.user_id
            ORDER BY comment.comment_date DESC";
$result = $mysqli->query($query);

if($result->num_rows) {
    while($comment = $result->fetch_object()) {
        echo '<div class="row">';
        echo '<div class="col-xs-12">';
        echo '<blockquote style="background-color: #eaeaea">';
        echo '<p>' . $comment->content . '</p>';
        echo '<footer>Posted by: <a href="/profile.php?username=' . $comment->username . '">' . $comment->username . '</a> on ' . $comment->comment_date . '</footer>';
        echo '</blockquote>';
        echo '</div>';
        echo '</div>';
    }
} else {
    include_once('includes/function.alerts.php');
    info_alert("No comments on this article!");
}