<?php
    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once('includes/function.alerts.php');
        $errors = [];

        if(empty($username)) {
            $errors[] = "You must enter your username!";
        } else if(!ctype_alnum($username)) {
            $errors[] = "Username must contain only letters and numbers!";
        }
        if(empty($password)) {
            $errors[] = "You must enter your password!";
        }

        if(sizeof($errors) > 0) {
            danger_alert($errors);
        } else {
            $password = md5($password);

            require('includes/connection.admin.php');

            $stmt = $mysqli->prepare("SELECT user_id, username FROM user WHERE username = ? AND password = ?");
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if($user = $result->fetch_object()) {
                $stmt->close();
                require('includes/session.create.php');
                header("Location: index.php");
            } else {
                danger_alert("Username and password do not match!");
                $stmt->close();
            }
        }
    }