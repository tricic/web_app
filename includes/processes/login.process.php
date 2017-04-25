<?php
require_once('includes/classes/database.class.php');

if(isset($_GET['notice'])) {
    Alert::success("You have been successfully registered and now you can login!");
}
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

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
        Alert::danger($errors);
    } else {
        $password = md5($password);

        Database::checkConnection();

        $stmt = Database::$conn->prepare("SELECT user_id, username, rank_id FROM user WHERE username = ? AND password = ?");
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
            Alert::danger("Username and password do not match!");
            $stmt->close();
        }
    }
}