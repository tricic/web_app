<?php
    if(isset($_GET['notice'])) {
        include_once('includes/function.alerts.php');
        success_alert("You have been successfully registered and now you can login!");
    }
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

            $stmt = $mysqli->prepare("SELECT user_id, username, rank_id FROM user WHERE username = ? AND password = ?");
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if($user = $result->fetch_object()) {
                $stmt->close();
                Session::create();
                Session::set('user_id', $user->user_id);
                Session::set('username', $user->username);
                Session::set('rank_id', $user->rank_id);
                header("Location: index.php");
            } else {
                danger_alert("Username and password do not match!");
                $stmt->close();
            }
        }
    }