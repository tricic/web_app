<?php
session_start();
if(isset($_SESSION['username'])) {
    $logged = true;
    echo "Welcome " . $_SESSION['username'];
} else {
    $logged = false;
    session_destroy();
}