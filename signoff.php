<?php
include('includes/class.session.php');
Session::destroy();
header("Location: index.php");