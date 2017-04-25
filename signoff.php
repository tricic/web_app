<?php
include_once('includes/class.session.php');

Session::destroy();
header("Location: index.php");