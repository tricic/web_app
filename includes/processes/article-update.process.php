<?php
if(isset($_POST['update'])) {
    require_once('../includes/classes/article.class.php');

    $article_id = $_POST['article_id'];
    $category_id = $_POST['category_id'];
    $img_url = $_POST['img_url'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $success = false;
    
    if(Article::update($article_id, $category_id, $img_url, $title, $content)) {
        $success = true;
    } else {
        Alert::danger(Article::$error);
    }
}