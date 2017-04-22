<?php
include_once('class.session.php');
Session::check();

if(empty($_POST['comment'])) {
    echo "Please enter you comment first!";
} else {
    $comment = htmlspecialchars($_POST['comment']);
    $article_id = $_POST['article_id'];
    if(strlen($comment) > 500) {
        echo "Comment is too long, it cannot contain more than 500 characters!";
    } else {
        $user_id = $_SESSION['user_id'];

        require('connection.admin.php');

        $stmt = $mysqli->prepare("INSERT INTO comment (user_id, article_id, content) VALUES($user_id, $article_id, ?)");
        $stmt->bind_param('s', $comment);
        $stmt->execute();

        if($stmt->errno != 0) {
            echo "An unknown error has occurred, please try again..";
            $stmt->close();
        } else {
            echo "Comment successfully added";
            $stmt->close();
        }
    }
}