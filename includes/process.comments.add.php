<?php
if(isset($_POST['add-comment'])) {
    if(empty($_POST['comment'])) {
        echo "You cannot add empty comment!";
    } else {
        $comment = htmlspecialchars($_POST['comment']);
        $user_id = $_SESSION['user_id'];
        $article_id = $article->article_id;

        require('connection.admin.php');

        $stmt = $mysqli->prepare("INSERT INTO comment (user_id, article_id, content) VALUES($user_id, $article_id, ?)");
        $stmt->bind_param('s', $comment);
        $stmt->execute();

        if($stmt->errno != 0) {
            danger_alert("An unknown error has occurred, please try again..");
            $stmt->close();
        } else {
            echo 'Comment successfully added!';
            $stmt->close();
        }
    }
}