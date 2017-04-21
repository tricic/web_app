<?php
if(isset($_GET['id']) && $_GET['id'] != '') {
    $article_id = $_GET['id'];

    require($_SERVER['DOCUMENT_ROOT'] . '/web_app/includes/connection.admin.php');
    $query =    "SELECT article.article_id, article.title, article.content, article.article_date, user.username, category.name FROM article
                JOIN user ON article_id = $article_id AND article.user_id = user.user_id
                JOIN category ON article.category_id = category.category_id;";
    $result = $mysqli->query($query);
    // print_r($result);

    if(@$result->num_rows) {
        $article = $result->fetch_object();
        // print_r($article);
    } else {
        include_once($_SERVER['DOCUMENT_ROOT'] . '/web_app/includes/function.alerts.php');
        danger_alert("Article not found!");
    }
} else {
    include_once($_SERVER['DOCUMENT_ROOT'] . '/web_app/includes/function.alerts.php');
    danger_alert("Article not found!");
}