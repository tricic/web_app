<?php
@$mysqli = new mysqli("localhost", "root", "", "web_app");
if($mysqli->connect_errno) {
    include_once($_SERVER['DOCUMENT_ROOT'] . '/web_app/includes/function.alerts.php');
    Alert::danger("<strong>$mysqli->connect_errno: $mysqli->connect_error</strong>");
    exit();
}
$mysqli->set_charset("utf8");