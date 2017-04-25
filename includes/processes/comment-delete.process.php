<?php
include_once('../classes/session.class.php');
require_once('../classes/comment.class.php');

Session::check();

// Server-side protection, checks if POST passed comment username is equal to session username or if session user is admin/mod
if($_SESSION['username'] == $_POST['username'] || $_SESSION['rank_id'] == 1 || $_SESSION['rank_id'] == 2) {
    if($result = Comment::delete($_POST['id'])) {
        echo "Comment deleted!";
    } else {
        echo "Error while deleting comment...";
    }
} else {
    exit(";)");
}