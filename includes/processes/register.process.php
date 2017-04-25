<?php
require_once('includes/classes/database.class.php');

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

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
        Alert::danger($errors);
    } else {
        $password = md5($_POST['password']); // Empty password would not be empty after md5 hash
        
        Database::checkConnection();
        
        $stmt = Database::$conn->prepare("INSERT INTO user(username, password, email, gender, rank_id) VALUES (?, ?, ?, ?, 3)");
        $stmt->bind_param("ssss", $username, $password, $email, $gender);
        $stmt->execute();
        
        if($stmt->errno != 0) {
            if($stmt->errno == 1062) {
                Alert::danger("Username is already registered!");
            } else {
                Alert::danger("An unknown error has occurred, please try again..");
            }
            $stmt->close();
        } else {
            $stmt->close();
            header("Location: login.php?notice");
        }
    }
}