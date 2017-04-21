<?php
session_start();
if(isset($_SESSION['username'])) {
    $logged = true;
} else {
    $logged = false;
    session_destroy();
}