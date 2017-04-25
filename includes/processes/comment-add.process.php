<?php
include_once('../classes/session.class.php');
require_once('../classes/comment.class.php');
Session::check();

$user_id = $_SESSION['user_id'];
$article_id = $_POST['article_id'];
$comment = $_POST['comment'];

if($result = Comment::insert($user_id, $article_id, $comment)) {
    echo "Comment successfully added!";
} else {
    echo "Failure!";
}