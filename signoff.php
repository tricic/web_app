<?php
include_once('includes/classes/session.class.php');

Session::destroy();
header("Location: index.php");