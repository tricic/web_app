<?php
if(isset($_GET['username']) && !empty($_GET['username'])) {
    $username = $_GET['username'];

    require('includes/connection.admin.php');

    $query = "SELECT user.user_id, user.username, user.gender, user.reg_date, rank.name AS rank FROM user JOIN rank ON user.username = '$username' AND user.rank_id = rank.rank_id";
    $result = $mysqli->query($query);
    
    if($result->num_rows) {
        $user = $result->fetch_object();
    }
}