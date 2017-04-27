<?php
if(isset($_POST['submit'])) {
    require_once('../includes/classes/article.class.php');

    $user_id = $_POST['user_id'];
    $category_id = $_POST['category_id'];
    $img_url = $_POST['img_url'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $success = false;
    
    if(Article::insert($user_id, $category_id, $img_url, $title, $content)) {
        $success = true;
    }
}