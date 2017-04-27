<?php
require_once('../classes/comment.class.php');

if($comments = Comment::getCommentsBySearch($_POST['text'], $_POST['username'])) {
    foreach($comments as $comment) {
        require_once('../classes/user.class.php');

        $username = User::idToUsername($comment['user_id']);

        echo $comment['comment_date'] . ' - ' . $username . ': ' . $comment['content'] . ' - <a href="comments.php?delete_id=' . $comment['comment_id'] . '">Delete</a>' . '<br>' . '<br>';
    }
} else {
    echo 'No comments found..';
}