<?php
require_once('../classes/user.class.php');

if($users = User::getUsersBySearch($_GET['text'])) {
    foreach($users as $user) {
            echo $user['user_id'] . ' - ' . $user['username'] . ' - <a href="users.php?delete_id=' . $user['user_id'] . '">Delete</a>' . '<br>';
    }
} else {
    echo 'No users found..';
}