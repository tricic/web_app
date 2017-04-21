<?php
include_once('function.alerts.php');
if(isset($_GET['username']) && !empty($_GET['username'])) {
    $username = $_GET['username'];

    require('includes/connection.admin.php');

    $query = "SELECT user.user_id, user.username, user.gender, user.reg_date, rank.name AS rank FROM user JOIN rank ON user.username = '$username' AND user.rank_id = rank.rank_id";
    $result = $mysqli->query($query);
    
    if($result->num_rows) {
        $user = $result->fetch_object();
        // echo "<p><strong>ID:</strong> $user->user_id</p>";
        // echo "<p><strong>Username:</strong> $user->username</p>";
        // echo "<p><strong>Rank:</strong> $user->rank</p>";
        // echo "<p><strong>Joined:</strong> $user->reg_date</p>";
    } else {
        danger_alert("User not found!");
    }
} else {
    danger_alert("Username not set!");
}