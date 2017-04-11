<?php
session_start();
setcookie('PHPSESSID', session_id(), time() + 3600 * 24);
$_SESSION['user_id'] = $user->user_id;
$_SESSION['username'] = $user->username;