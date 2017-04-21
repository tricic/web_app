<?php
include('session.start.php');

$comment_id = $_POST['id'];

// Server-side protection, checks if POST passed comment username is equal to session username or if session user is admin/mod
if($_SESSION['username'] == $_POST['username'] || $_SESSION['rank_id'] == 1 || $_SESSION['rank_id'] == 2) {

    require_once($_SERVER['DOCUMENT_ROOT'] . '/web_app/includes/connection.admin.php');
    $query = "DELETE FROM comment WHERE comment_id = $comment_id";  
    $result = $mysqli->query($query);

    if($result) {
        echo "Comment deleted!";
    }
} else {
    echo ";)";
}