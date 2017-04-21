<?php
session_start();
setcookie('PHPSESSID', session_id(), time() + 3600 * 24 * 7);
$_SESSION['user_id'] = $user->user_id;
$_SESSION['username'] = $user->username;
$_SESSION['rank_id'] = $user->rank_id;