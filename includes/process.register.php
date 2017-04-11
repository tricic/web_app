<?php
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    include_once('includes/function.alerts.php');
    $errors = [];

    if(empty($username)) {
        $errors[] = "You must enter your username!";
    } else if(!ctype_alnum($username)) {
        $errors[] = "Username must contain only letters and numbers!";
    }
    if(empty($email)) {
        $errors[] = "You must enter your email!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "You must enter a valid email!";
    }
    if(empty($password)) {
        $errors[] = "You must enter your password!";
    }

    if(sizeof($errors) > 0) {
        danger_alert($errors);
    } else {
        $password = md5($_POST['password']); // Empty password would not be empty after md5 hash
        
        require('includes/connection.admin.php');
        
        $stmt = $mysqli->prepare("INSERT INTO user(username, password, email, rank_id) VALUES (?, ?, ?, 3)");
        $stmt->bind_param("sss", $username, $password, $email);
        $stmt->execute();
        
        if($stmt->errno != 0) {
            if($stmt->errno == 1062) {
                danger_alert("Username is already registered!");
            } else {
                danger_alert("An unknown error has occurred, please try again..");
            }
            $stmt->close();
        } else {
            $stmt->close();
            header("Location: login.php?notice");
        }
    }
}