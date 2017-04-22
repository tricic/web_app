<?php
include_once('class.session.php');
Session::check();

$comment = htmlspecialchars($_POST['comment']);
$article_id = $_POST['article_id'];

if(empty($_POST['comment'])) {
    exit("Please enter you comment first!");
} else if(strlen($comment) > 500) {
    exit("Comment is too long, it cannot contain more than 500 characters!");
} else {
    require('connection.admin.php');
    $user_id = $_SESSION['user_id'];

    $stmt = $mysqli->prepare("INSERT INTO comment (user_id, article_id, content) VALUES($user_id, $article_id, ?)");
    $stmt->bind_param('s', $comment);
    $stmt->execute();

    if($stmt->errno != 0) {
        echo "Unknown error has occurred, please try again..";
    } else {
        echo "Comment successfully added";
    }

    $stmt->close();
}