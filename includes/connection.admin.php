<?php
@$mysqli = new mysqli("localhost", "root", "", "web_app");
if($mysqli->connect_errno) {
    include_once('includes/function.alerts.php');
    danger_alert("Database connection error! <strong>$mysqli->connect_errno: $mysqli->connect_error</strong>");
    exit();
}