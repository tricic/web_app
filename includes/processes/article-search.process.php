<?php
require_once('../classes/article.class.php');

if($articles = Article::getArticlesBySearch($_GET['text'])) {
    foreach($articles as $article) {
            echo $article['article_date'] . ' - ' . $article['title'] .  ' - <a href="edit-article.php?id=' . $article['article_id'] . '">Edit</a>' . ' - <a href="delete-article.php?id=' . $article['article_id'] . '">Delete</a>' . '<br>';
    }
} else {
    echo 'No articles found..';
}